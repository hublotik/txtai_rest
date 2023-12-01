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
        $search_text = $_GET['query'];
            
        $client = new Client();
        $api_url = "http://127.0.0.1:5000/api";
        $res = $client->post($api_url, [
            'json' => [
                'query' => $search_text
            ]
            ]);
        $data_body = $res->getBody();
        
        // $client = new Client();
        // $data = $client->get("http://127.0.0.1:5000/Getdata");
        // $data_body = $data->getBody();
        
        $api = $data_body->getContents();
        $data = json_decode($api);
        return view('/search', compact([
            'data'
        ])); 
    }

    // public function(){
    //     $search_text = $_GET['query'];
    // }
}

