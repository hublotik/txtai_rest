<?php

//HeadphonesAsr

namespace App\Traits;

use GuzzleHttp\Client;

trait ApiCall
{
    public static function rest_call_function($q_element)
    {
        $client = new Client();
        $api_url = "http://127.0.0.1:5000/api";
        $res = $client->post($api_url, [
            'json' => [
                'query' => $q_element
            ]
        ]);
        $data_body = $res->getBody();

        $api = $data_body->getContents();
        $decoded_data = json_decode($api);

        return $decoded_data;
    }
}

// $res = $client->post($api_url, [
//     'json' => [
//         'amp_query' => $q_amp,
//          'hdphns_query' => $q_h
//     ]
// ]);
