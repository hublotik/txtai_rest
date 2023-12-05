<?php

namespace App\Traits;

use App\Models\AmpMain;
use Illuminate\Http\Request;

trait SortAmpTable
{

    public static function sort_amp_by_source()

    {
        $sort_option = '';
        if (isset($_POST['sort_source'])) {
            switch ($_POST['sort_source']) {
                case 'stereophile':
                    $sort_option = 'Stereophile';
                    break;
                case 'asr':
                    $sort_option = 'ASR';
                    break;
            }
        }

        $amp_sort_source = AmpMain::all()->where('Source', $sort_option);


        return $amp_sort_source;
    }

    public static function sort_amp_by_price()

    {
        $start_price = '';
        $end_price = '';
        if (isset($_POST['price_start']) & isset($_POST['price_end'])) {
            $start_price = intval($_POST['price_start']);
            $end_price = intval($_POST['price_end']);
            $amp_sort_price = AmpMain::all()->whereBetween('Price', [$start_price, $end_price]);
            return $amp_sort_price;
        }
    }

    public static function get_all_vendors_amp()
    {
        $vendors_first_word = [];
        $vendor = '';
        $q = AmpMain::all();
        foreach ($q as $items) {
            $vendor =  $items->Model;
            $vend_exp = explode(' ', trim($vendor));
            $vendors_first_word[] = $vend_exp[0];
        }
        $vendors_first_word = array_unique($vendors_first_word);
        return $vendors_first_word;
    }
    public static function get_queryed_vendor_amp()
    {
        $sort_option = '';
        $unique_vendors = self::get_all_vendors_amp();
        if (isset($_POST['get_amp_val'])) {
            foreach ($unique_vendors as $vendor) {
                if ($_POST['get_amp_val'] == $vendor) {
                    $sort_option = $vendor;
                }
            }
        }
        if ($sort_option != '') {
            $amp_sort_vendor = AmpMain::where('Model', 'LIKE', '%' . $sort_option . '%')
                ->get();
            return $amp_sort_vendor;
        } else {
            $amp_sort_vendor = [];
            return $amp_sort_vendor;
        }
    }
}
