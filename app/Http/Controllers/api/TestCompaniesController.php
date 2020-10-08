<?php

namespace App\Http\Controllers\api;

use App\Http\Controllers\Controller;
use App\Models\TestCompanies;
use Illuminate\Support\Facades\Auth;

class TestCompaniesController extends Controller
{
    /**
     * Returns all the TestCompanies as a JSON if the token has the permission. ( Bearer: $token, Accept: application/json )
     *
     * @return \Illuminate\Contracts\Foundation\Application|\Illuminate\Contracts\Routing\ResponseFactory|\Illuminate\Http\Response
     */
    public function index()
    {
        if (!Auth::user()->tokenCan('get_companies')) {
            return $this->toJsonResponse([
                'error' => 'Token does not have permission. (Get Companies)'
            ],401);
        }
        return $this->toJsonResponse(TestCompanies::all()->toArray());
    }

    private function toJsonResponse(array $array, int $status = 200) {
        return response(json_encode($array, $status));
    }
}
