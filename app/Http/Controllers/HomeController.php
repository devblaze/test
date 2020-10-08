<?php

namespace App\Http\Controllers;

use Illuminate\Contracts\Support\Renderable;
use Illuminate\Support\Facades\Auth;

class HomeController extends Controller
{
    /**
     * Create a new access token everytime the view is returned.
     *
     * 
     * @return Renderable
     */
    public function index(): Renderable
    {
        $accessToken = Auth::user()->createToken('authToken', ['get_companies'])->accessToken;
        return view('home', ['access_token' => $accessToken]);
    }
}
