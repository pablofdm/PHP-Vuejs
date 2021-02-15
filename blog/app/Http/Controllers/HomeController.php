<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\User;
use App\Models\Artigo;

class HomeController extends Controller
{
    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        $this->middleware('auth');
    }

    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Contracts\Support\Renderable
     */
    public function index()
    {
        $listaMigalhas = json_encode([
            ["titulo"=>"Home", "url"=>""]

        ]);

        $totalArtigos = Artigo::count();
        $totalUsers = User::count();;
        $totalAutores = 5;
        
        return view('home', compact('listaMigalhas','totalArtigos', 'totalUsers', 'totalAutores' ));
        }
    }   
