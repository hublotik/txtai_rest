<?php

namespace App\Http\Controllers;

use App\Http\Requests\ProfileUpdateRequest;
use Illuminate\Http\RedirectResponse;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Redirect;
use Illuminate\View\View;
use GuzzleHttp\Client;

class SearchController extends Controller
{
    public function search(){
        $client = new Client();
        $data = $client->get("http://127.0.0.1:5000/Getdata");
        $data_body = $data->getBody();
        $api = $data_body->getContents();
        $srch_res = json_decode($api);
        return view('layouts.master', compact([
            'srch_res'
        ])); 
    }
}

