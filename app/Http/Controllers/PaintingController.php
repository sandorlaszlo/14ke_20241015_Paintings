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
}
