<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class ProjekController extends Controller
{
    public function index() {
        return view('projek',
        [
            "title" => "projek"
        ]);
    }
}
