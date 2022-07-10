<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Response;

class HomePageController extends Controller
{
    //
    public function index() 
    {
        return view('welcome');
    }

    public function download()
    {
        $documentFinder = public_path('/Elijah A Anibi.pdf');

        return Response::download($documentFinder);
    }
}