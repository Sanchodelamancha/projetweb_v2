<?php

namespace App\Http\Controllers;

use Illuminate\Support\Facades\DB;


class WelcomeController extends Controller
{
    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Http\Response
     */
    public function welcome()
    {
        $annonces = DB::select('select * from annonces');

        return view('pages/accueil', ['annonces' => $annonces]);
        
    }
}
