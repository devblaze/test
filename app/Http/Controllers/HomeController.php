<?php

namespace App\Http\Controllers;

use Illuminate\Contracts\Support\Renderable;
use Illuminate\Support\Facades\Auth;

class HomeController extends Controller
{
    // Easy find commit
    /**
     * Create a new access token everytime the view is returned.
     *
     * @return Renderable
     */
    public function index(): Renderable
    {
        $accessToken = Auth::user()->createToken('authToken', ['get_companies'])->accessToken;
        $accessToken2 = Auth::user()->createToken('authToken')->accessToken;
        return view('home', ['access_token' => $accessToken, 'noaccess_token' => $accessToken2]);
    }
}
