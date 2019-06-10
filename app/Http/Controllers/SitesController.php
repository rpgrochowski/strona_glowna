<?php

namespace App\Http\Controllers;

use App\klienci;
use App\site;
use App\User;
use Illuminate\Http\Request;

class SitesController extends Controller
{
    public function __construct()
    {
        $this->middleware('auth');
    }

    public function index()
    {
        //nie uzywane zobacz web.php
        echo 'Witaj użytkowniku 1.1';

    }

    public function add()
    {
        return view('sites.add');
    }

    public function save(Request $request)
    {
        //dwie metody
        site::create($request->all());
        //dd($request->all());
        //$site = new site();
        //$site -> title = $request->input('title');
        //$site -> description = $request->input('description');
        //$site -> save();
    }

    public function klienci()
    {
        $wypisz = klienci::all();

        return view('sites.klienci', compact('wypisz'));

        /*return view('sites.klienci',
            [
                '$sites' => $client,
                '$sites' => $client
          ]
       );*/
    }


    public function show(klienci $client)
    {
        //echo $client;
        return view('sites.show', compact('client'));
    }
}
