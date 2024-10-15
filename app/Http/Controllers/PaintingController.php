<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;

class PaintingController extends Controller
{
    public $paintings = [];
    public $artists = [];

    public function __construct()
    {
        $this->paintings = Storage::json('Painting.json');
        // dd($this->paintings);
        foreach ($this->paintings as $paint) {
            if (!in_array($paint['Artist'],$this->artists)) {
                $this->artists[] = $paint['Artist'];
            }
        }
        sort($this->artists);
    }

    public function showPaintings()
    {
        return view('paintings', ['paintings' => $this->paintings, 'artists' => $this->artists]);
    }

    public function showPainting($title) {
        
        foreach ($this->paintings as $paint) {
            if ($paint['Painting'] == $title) {
                return view('painting', ['paint' => $paint]);
            }
        }
        return abort(404);
    }

    public function searchByTitle(Request $request) {
        // dd($request->all());
        $filteredPaintings = [];
        foreach ($this->paintings as $paint) {
            if (str_contains($paint['Painting'], $request->title)) {
                $filteredPaintings[] = $paint;
            }
        }

        $request->flash();

        return view('paintings', ['paintings' => $filteredPaintings, 'artists' => $this->artists]);
    }

    public function searchByArtist(Request $request) {
        $filteredPaintings = [];
        foreach ($this->paintings as $paint) {
            if ($paint['Artist'] == $request->artist) {
                $filteredPaintings[] = $paint;
            }
        }

        $request->flash();

        return view('paintings', ['paintings' => $filteredPaintings, 'artists' => $this->artists]);
    }
}
