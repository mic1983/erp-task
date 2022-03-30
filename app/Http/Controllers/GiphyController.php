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
             'base_uri' => 'https://api.giphy.com',
             'headers' => $this->auth,
        ]);
    }
    
    public function index(){
        
        $response = $this->giphy->request('GET','https://api.giphy.com/v1/gifs/trending?api_key=HZ3dvMtHdWK2MRUWbyuIRcyf5ZTciRfT&limit=10&rating=g',[
        ])->getBody()->getContents();
        
        $giphy_trending = json_decode($response);
        dd($giphy_trending);
        
        dd($response);  
      
        return view('index');
    }    
}
