<?php

//HeadphonesAsr

namespace App\Traits;

use GuzzleHttp\Client;
use App\Models\HeadphonesAsr;
use App\Models\AmpMain;

trait ApiCall
{
    public static function rest_call_function($q_element, $device_type)
    {
        $client = new Client();
        $api_url = "http://127.0.0.1:5000/api";
        $res = $client->post($api_url, [
            'json' => [
                'query' => $q_element,
                'device_type' => $device_type
            ]
        ]);
        $data_body = $res->getBody();

        $api = $data_body->getContents();
        $decoded_data = json_decode($api);

        return $decoded_data;
    }
    public static function get_from_uuid($json, $device)
    {
        $cols_with_uuid = [];
        foreach ($json as $uuid_simm) {
            if ($device == 'AMP') {
                $matched_cols = AmpMain::where('id', $uuid_simm[0])->get();
            } elseif ($device == 'Headphones') {
                $matched_cols = HeadphonesAsr::where('id', $uuid_simm[0])->get();
            }
            foreach ($matched_cols as $cols) {
                array_push($cols_with_uuid, [$uuid_simm[1], $cols->Model]);
            }
        }
        return $cols_with_uuid;
    }
}

// $res = $client->post($api_url, [
//     'json' => [
//         'amp_query' => $q_amp,
//          'hdphns_query' => $q_h
//     ]
// ]);
