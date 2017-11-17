<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use Illuminate\Support\Facades\Auth;

class PagesController extends Controller
{
    public function index(){
        
    	return view('pages.index');
    }
    public function dash($data){
        $name = 'hello';
        print_r($name);
        //dd($title);
    	//return view('dash.about')->with($data);
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
                $response = json_encode($output);

                $data = array(
                'title' => $id,
                'coins' => $response);

                return view('pages.dash')->with($data);

        	}
            
        }else{
            return view('auth.login');
        }  
    }
}
