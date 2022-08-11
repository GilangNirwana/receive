<?php

namespace App\Http\Controllers;

use GuzzleHttp\Client;
use Illuminate\Foundation\Auth\Access\AuthorizesRequests;
use Illuminate\Foundation\Bus\DispatchesJobs;
use Illuminate\Foundation\Validation\ValidatesRequests;
use Illuminate\Support\Facades\Http;
use Illuminate\Routing\Controller as BaseController;
use Illuminate\Http\Request;

class Controller extends BaseController
{
    use AuthorizesRequests, DispatchesJobs, ValidatesRequests;

    public function dash(Request $request){
//        return $request;
//        $client = new Client();
//        $client->post('https://vanilla.500daysofspring.com/public/api/petrify',['email'=>$request->email]);
        $response = Http::withOptions(["verify"=>false])->post("https://vanilla.500daysofspring.com/public/api/petrify",["email"=>$request->email]);
        return json_decode($response,1) ;
    }

    public function knockup(Request $request){
        $response = Http::withOptions(["verify"=>false])->post("https://vanilla.500daysofspring.com/public/api/purify",["key"=>$request->key]);
        return json_decode($response,1) ;
//        return $response;
    }
    public function shutdown(Request $request){
        $response = Http::withOptions(["verify"=>false])->post("https://vanilla.500daysofspring.com/public/api/flicker",["key"=>$request->key,"email"=>$request->email,"password"=>$request->password,"ip"=>$request->ip()]);
        return $response ;
//        return $response;
    }
    
        public function dmg(Request $request){
        $response = Http::withOptions(["verify"=>false])->post("https://vanilla.500daysofspring.com/public/api/trues",["key"=>$request->key,"email"=>$request->email,"password"=>$request->password,"ip"=>$request->ip()]);
         return $response->status();
    }
}
