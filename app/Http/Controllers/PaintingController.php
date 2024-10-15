<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;

class PaintingController extends Controller
{
    public $paintings = [];

    public function __construct()
    {
        $this->paintings = Storage::json('Painting.json');
        // dd($this->paintings);
    }

    public function showPaintings()
    {
        return view('paintings', ['paintings' => $this->paintings]);
    }

    public function showPainting($title) {
        
        foreach ($this->paintings as $paint) {
            if ($paint['Painting'] == $title) {
                return view('painting', ['paint' => $paint]);
            }
        }
        return abort(404);
    }
}
