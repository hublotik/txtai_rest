<?php

//HeadphonesAsr

namespace App\Traits;

use App\Models\HeadphonesAsr;

trait SortHAsrTable
{

    public static function get_queryed_vendor_Hasr()
    {
        $sort_option = '';
        $unique_vendors = HeadphonesAsr::all();
        if (isset($_POST['sort_vendor'])) {
            foreach ($unique_vendors as $vendor) {
                if ($_POST['sort_vendor'] == $vendor->Brand) {
                    $sort_option = $vendor->Brand;
                }
            }
        }
        if ($sort_option != '') {
            $amp_sort_vendor = HeadphonesAsr::where('Brand',  $sort_option)
                ->get();
            return $amp_sort_vendor;
        } else {
            $amp_sort_vendor = [];
            return $amp_sort_vendor;
        }
    }

    public static function get_from_uuid($json){
        $cols_with_uuid = [];
        // foreach($json as $uuid_simm){
        //     $matched_cols = HeadphonesAsr::all()->where('id', intval($uuid_simm[0]));
        //     foreach ($matched_cols as $cols){
        //         array_push($cols_with_uuid, $uuid_simm[1], $cols->Model);
        //     }
            
        // }
        return $json; 
    }
}
