<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use GuzzleHttp\Client;

class UsuariosController extends Controller
{
    public function index(){
        $client = new Client([
            // Base URI is used with relative requests
            'base_uri' => 'https://bb-api-uni.herokuapp.com',
            // You can set any number of default request options.
            'timeout'  => 2.0,
        ]);
        
        $response = $client->request('GET', 'users');
        
            $users = json_decode( $response->getBody()->getContents());
        
            return view('users.index', compact('users'));
    }

    public function show($id){
        $client = new Client([
            'base_uri' => 'https://bb-api-uni.herokuapp.com',
            
            'timeout'  => 2.0,
        ]);
        
        $response = $client->request('GET', "users/{$id}");
        
            $user = json_decode( $response->getBody()->getContents());
        
            return view('users.show', compact('user'));
    }
}
