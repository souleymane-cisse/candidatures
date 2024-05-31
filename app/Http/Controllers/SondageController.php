<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use App\Models\Sondage1;
use App\Models\Sondage2;

class SondageController extends Controller
{
    public function sondage1()
    {
        return view('sondage1');
    }

    public function storeSondage1(Request $request)
    {
        $request->validate([
            'interet' => 'required|boolean',
        ]);

        Sondage1::create([
            'user_id' => Auth::id(),
            'interet' => $request->interet,
        ]);

        return redirect('/profile');
    }

    public function sondage2()
    {
        return view('sondage2');
    }

    public function storeSondage2(Request $request)
    {
        $request->validate([
            'choix1' => 'required|string',
            'choix2' => 'required|string',
            'choix3' => 'required|string',
        ]);

        Sondage2::create([
            'user_id' => Auth::id(),
            'choix1' => $request->choix1,
            'choix2' => $request->choix2,
            'choix3' => $request->choix3,
        ]);

        return redirect('/profile');
    }
}
