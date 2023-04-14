<?php

namespace App\Http\Controllers;

use CURLFile;
use GuzzleHttp\Client; 
use GuzzleHttp\Psr7\Utils; 
use Illuminate\Support\Facades\Http;
use Illuminate\Support\Facades\Request;

class TestController extends Controller
{

    public function message()
    {

        return view('email.message');
    }

    public function flow_chart()
    {

        return view('flow_chart');
    }

    public function mailTrap()
    {
        
        return view('email.mailTrap');
    }

    

    public function message_send(Request $request)
    {
         
        return back()->with(['status'=>'Profile updated!']);
      
         
    }
    public function upload_doc()
    {
       
   
 
        $photo = fopen('https://i.brecorder.com/primary/2022/05/626e8e55ac3c3.jpg','r');
        $response = Http::
         attach(
            'DocumentType','license'
        )->attach(
            'DocumentFront',$photo
        )
        ->withToken('eyJhbGciOiJSUzI1NiIsInR5cCI6IkpXVCIsImtpZCI6IlYycEtyLTlQUGotRVFLR1d4cV8yMiJ9.eyJodHRwczovL2ZvcnRyZXNzYXBpLmNvbS9vcmdhbml6YXRpb25faWQiOiI3YzZmMzhlMC1lMGJkLTQ3NDYtOGI3Ny03OWU5MTFjOTE5OGEiLCJpc3MiOiJodHRwczovL2ZvcnRyZXNzLXNhbmRib3gudXMuYXV0aDAuY29tLyIsInN1YiI6ImF1dGgwfDYzYWNhMjlmZmYxOTZmZjcxZWZmNDc5MSIsImF1ZCI6Imh0dHBzOi8vZm9ydHJlc3NhcGkuY29tL2FwaSIsImlhdCI6MTY3MzQ3Mzk2MSwiZXhwIjoxNjczNDc3NTYxLCJhenAiOiJwWTZYb1Z1Z2sxd0NZWXNpaVB1SjV3ZXFNb05ValhibiIsImd0eSI6InBhc3N3b3JkIn0.MIFN_IUJj8dPyBCbjeOku2Kh5SckRRKYnRfPDzWTs7vzsGDTbp5OIrauL74UqntG5RmDJfos059FrrfWtLy_YFUPBVA4rImVGC0zXp49yP7P3Uyggvy_mnLbli8W21KsBgC0IHBWXYuF6VlLt7wKXz43nYU0Y2qUjFw8Sw_27Y_f2oXEzsv-lV0gcGp0yYY9P03jDpYs4UdaieQsSjccvaIbNSO-lqhkpF7L-Lg2kLBnLCOZ6PhAochqm221XOeJ8-pc2bUfOoGVhLMZlb0VCgUklby9DHEuuV__x_8M-ztaKrNJjH-u6wO7xiBiEpqGQ82bTqDun8U6tspStuZzcA')->post('https://api.sandbox.fortressapi.com/api/trust/v1/personal-identities/7bbe38a2-90b9-49d3-8d27-db671dac6ad3/documents');
        
            dd(json_decode($response));

    
           
    }

    public function email_signup( )
    {
        return view('email.welcome');
    }
    public function email_signup_2( )
    {
        return view('email.kyc_email');
    }
    

    
}
