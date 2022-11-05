<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class HomeController extends Controller
{
    public function index(){

        $title = 'Pagina Home';

        return view('Painel.Home.index', compact('title'));

    }
}
