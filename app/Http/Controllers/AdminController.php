<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\User;
use App\Models\Sondage1;
use App\Models\Sondage2;

class AdminController extends Controller
{
    public function showEtudiants()
    {
        $etudiants = User::with('profile')->get();
        return view('admin.etudiants', ['etudiants' => $etudiants]);
    }

    public function showResultatsSondage1()
    {
        $resultats = Sondage1::with('user')->get();
        return view('admin.resultats_sondage1', ['resultats' => $resultats]);
    }

    public function showResultatsSondage2()
    {
        $resultats = Sondage2::with('user')->get();
        return view('admin.resultats_sondage2', ['resultats' => $resultats]);
    }
}

