<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Validator;
use Auth;

class MainController extends Controller
{
    function index()
    {
        return view('login');
    }

    function checkLogin(Request $request)
    {
        $this->validate($request, [
            'email'   => 'required|email',
            'password'  => 'required|alphaNum|min:6'
        ]);

        $user_data = array(
            'cat'  => $request->get('cat'),
            'email'  => $request->get('email'),
            'password' => $request->get('password')
        );

        if (Auth::attempt($user_data)) {
            if (Auth::user()->cat == 'GERANT') {
                return redirect('main/gerant');
            } else if (Auth::user()->cat == 'MAGASINIER') {
                return redirect('main/magasinier');
            } else if (Auth::user()->cat == 'SECRETAIRE') {
                return redirect('main/secretaire');
            }
        } else {
            return back()->with('error', 'Wrong Login Details');
        }
    }

    function gerant()
    {
        $gerantC = new GerantController();
        return $gerantC->index(); 
    }

    function magasinier()
    {
        return view('magasinier.index');
    }

    function secretaire()
    {
        return view('secretaire.index');
    }

    function logout()
    {
        Auth::logout();
        return redirect('main');
    }
}
