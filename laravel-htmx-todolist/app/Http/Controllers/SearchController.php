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
    use SortAmpTable, SortHAsrTable, ApiCall;

    public static function search_in_function(){
        
        $device_type_search = $_GET['device_type'];

        return view('/choice_page', compact([
            'device_type_search'
        ])); 
    }
 
    public static function search(){
        $amps_all = AmpMain::all();
        $headphones_all = HeadphonesAsr::all();
        //We should compact query+ uuids after sort order

        $search_text = $_GET['headphones_query'];
            
        $data = self::rest_call_function($search_text);
        $hdph_srch_res = self::get_from_uuid($data);

        return view('/search', compact([
            'hdph_srch_res' , 'amps_all', 'headphones_all'
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

