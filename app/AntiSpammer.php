<?php


namespace App;


use GuzzleHttp\Client;
use Illuminate\Support\Arr;

class AntiSpammer
{

    public static function accepts($token)
    {
        if(!app()->environment('production')) {
            return true;
        }

        $client = new Client();
        $contents = [];

        try {
            $response = $client->post("https://www.google.com/recaptcha/api/siteverify", [
                'form_params' => [
                    'secret' => config('services.google.recaptcha.secret'),
                    'response' => $token
                ]
            ]);

            $contents = json_decode($response->getBody()->getContents(), true);
        } catch(\Exception $e) {
            return false;
        }


        $score = Arr::get($contents, 'score', 0);
        $action = Arr::get($contents, 'action', '');

        if($score < 0.5 || $action !== 'contact_form') {
            return false;
        }

        return true;
    }
}