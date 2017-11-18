<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use Illuminate\Support\Facades\Auth;

class PagesController extends Controller
{
    public function index(){
        
    	return view('pages.index');
    }
    public function dashboard(){
        
    	return view('pages.dashboard');
    }

    public function allcoins(){
        $url = url('https://api.coinmarketcap.com/v1/ticker/');
        $ch = curl_init();
        curl_setopt($ch, CURLOPT_URL, $url);
        curl_setopt($ch, CURLOPT_RETURNTRANSFER, 1);
        curl_setopt($ch, CURLOPT_HEADER, 0);
        curl_setopt($ch, CURLOPT_CUSTOMREQUEST, "GET");
        curl_setopt($ch, CURLOPT_HTTPHEADER, array('Accept: application/json'));

        $output = curl_exec($ch);

        if ($output === FALSE){
            echo "cURL Error: " . curl_error($ch);
            }

        curl_close($ch);
        $response = json_decode($output);

        $data = array(
        'title' => 'All coins',
        'coins' => $response);

        $allcoins = ($data['coins']);
        $length = count($data['coins']);


        //return view('pages.dash')->with($data);
        $myarry = array();
        for ($i=0; $i < $length ; $i++) { 
            
            $coin_name = ($allcoins[$i]->name);
            array_push($myarry, $coin_name);
        }
        return view('pages.showcoins', compact('myarry'));

    }
    public function price($id=''){
        if (Auth::check()) {
        // The user is logged in...

            if($id===''){
                $data = array(
                'title' => '$$$ :)',
                'coins' => ['bitcoin', 'ethereum']);

            return view('pages.price')->with($data);
            }
            else{
                $url = url('https://api.coinmarketcap.com/v1/ticker/'.$id.'/');
                $ch = curl_init();
                curl_setopt($ch, CURLOPT_URL, $url);
                curl_setopt($ch, CURLOPT_RETURNTRANSFER, 1);
                curl_setopt($ch, CURLOPT_HEADER, 0);
                curl_setopt($ch, CURLOPT_CUSTOMREQUEST, "GET");
                curl_setopt($ch, CURLOPT_HTTPHEADER, array('Accept: application/json'));

                $output = curl_exec($ch);

                if ($output === FALSE){
                    echo "cURL Error: " . curl_error($ch);
                    }

                curl_close($ch);
                $response = json_decode($output);

                $data = array(
                'title' => $id,
                'coins' => $response);

                $coinDetails = ($data['coins'][0]);
                $val = 4;


                //return view('pages.dash')->with($data);
                //return view('pages.coin')->with($coinDetails);
                return view('pages.coin', compact('coinDetails','val'));
        	}
            
        }else{
            return view('auth.login');
        }  
    }
}
