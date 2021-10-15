<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Http;

class jsonController extends Controller
{
    public function getJson()
    {
        $response = Http::get('https://api.agify.io?name=bella');
        return $response->json();
    }
    public function getPost($id)
    {
        $post = Http::get('https://api.agify.io?name=' . $id);
        return $post->json();
    }
    public function gett(){
        $res="ymym";
        return json_encode($res);
    }
}
