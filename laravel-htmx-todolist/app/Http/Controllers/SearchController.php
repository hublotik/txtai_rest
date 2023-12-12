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
use App\Traits\ApiCall;
use App\Models\AmpMain;
use App\Models\HeadphonesAsr;


class SearchController extends Controller
{
    use ApiCall;

    public static function search_in_function(){
        
        $device_type_search = $_GET['device_type'];

        return view('/choice_page', compact([
            'device_type_search'
        ])); 
    }
 
    public static function search(){

        //We should compact query+ uuids after sort order

        if (isset($_GET['Headphones'])){
            $search_text = $_GET['Headphones'];
            $device_type = 'Headphones';
        } else if(isset($_GET['AMP'])){
            $search_text = $_GET['AMP'];
            $device_type = 'AMP';
        };
            
        $data = self::rest_call_function($search_text, $device_type);
        $srch_res = self::get_from_uuid($data, $device_type);

        return view('/search', compact([
            'device_type', 'srch_res'
        ])); 
    }

    public function title_page_tabels(){
        $amps_all = AmpMain::all();
        $headphones_all = HeadphonesAsr::all();
        $empty_variable = 'test';
        return view('/layouts.master', compact([
            'amps_all', 'headphones_all', 'empty_variable'
        ])); 
    }


    public function main_func(){

        $data = [];
        return view('/main_page', compact([
            'data'
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

