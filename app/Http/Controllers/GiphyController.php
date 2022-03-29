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
             'base_url' => 'https://api.giphy.com',
             'headers' => $this->auth,
        ]);
    }
    
    public function index(){
    
        // GuzzleHttp \ Exception \ ClientException (401)
        // Client error: `GET https://api.giphy.com/v1/gifs/trending?limit=10` resulted in a `401 Unauthorized`
        
        $response = $this->giphy->request('GET','https://api.giphy.com/v1/gifs/trending',[
            'query' => [
                'limit' => 10,
                ],
        ])->getBody();
        
        dd($response);  
            
        return view('index');
    }    
}
