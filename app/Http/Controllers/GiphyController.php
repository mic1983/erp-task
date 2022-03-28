<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use GuzzleHttp\Client;

class GiphyController extends Controller
{
    private $giphy;
    
    public function __construct()
    {
        $this->auth = [
            'api_key' => 'HZ3dvMtHdWK2MRUWbyuIRcyf5ZTciRfT',
            
        ];
        
        $this->giphy = new Client([
             'base_url' => 'http://api.giphy.com',
             'headers' => $this->auth,
        ]);
    }
    
    public function index(){
    
        // GuzzleHttp \ Exception \ ConnectException
        // cURL error 6: Could not resolve host: v1 
        
        $response = $this->giphy->request('GET','v1/gifs/trending',[
            'query' => [
                'limit' => 10,
                ],
        ])->getBody()->getContents();
        
        dd($response);  
            
        return view('index');
    }    
}
