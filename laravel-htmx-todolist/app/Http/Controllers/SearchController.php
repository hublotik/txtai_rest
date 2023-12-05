<?php

namespace App\Http\Controllers;

use App\Http\Requests\ProfileUpdateRequest;
use Illuminate\Http\RedirectResponse;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Redirect;
use Illuminate\View\View;
use GuzzleHttp\Client;
use App\Traits\SortAmpTable;
use App\Traits\SortHAsrTable;



class SearchController extends Controller
{
    use SortAmpTable, SortHAsrTable;

   

    public static function search(){
        //We should compact query+ uuids after sort order

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

        $hdph_srch_res = self::get_from_uuid($data);

        return view('/search', compact([
            'hdph_srch_res'
        ])); 
    }

    public function main_func(){

        $data = [];
        return view('/main_page', compact([
            'data'
        ])); 
    }
 
    protected function htmx_test()
    {
        $sort_bytime = self::sort_amp_by_price();
        return view('/htmx_forms.htmx_test', compact([
            'sort_bytime'
        ]));
    }


    // protected function queryed_amp()
    // {
    //     $qrd_amp = self::get_queryed_vendor_amp();
    //     $save = self::save_csv($qrd_amp);
    //     return view('/htmx_forms.amp_table', compact([
    //         'qrd_amp'
    //     ]));
    // }

    // public static function txtai_apply(){
    //     $data = self::search();
    //     return view('/htmx_forms.txtai_rend', compact([
    //         'data'
    //     ])); 
    // }


    // public function(){
    //     $search_text = $_GET['query'];
    // }
}

