<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Storage;

class UserController extends Controller
{
    
	public function index(Request $request)
    {
       

    	$path = storage_path() . "/app/data.json";
		$data = json_decode(file_get_contents($path), true);
        if (!empty($data)){
           return response()->json($data, 200);
        }
        else{
           return response()->json('Data Not Found', 404);    
        }
    }


    public function storeUserData(Request $request)
    {
        $input = $request->all();
        $id = 1;
        try {

        	$dataInfo = Storage::disk('local')->exists('data.json') ? json_decode(Storage::disk('local')->get('data.json')) : [];

            $data = array();
            $path = storage_path() . "/app/data.json";
            $json = json_decode(file_get_contents($path), true);
            if ($json == null || $json == '') {
               
               $data['id']          = $id;
               $data['userName']    = $request->userName;
               $data['email']       = $request->email;
               $data['firstName']   = $request->firstName;
               $data['lastName']    = $request->lastName;
               $data['created_on']  = date('Y-m-d H:i:s');
            }else{               
                
                $last = end($json);
                $id = $last['id'];
                $data['id']          = ++$id;
                $data['userName']    = $request->userName;
                $data['email']       = $request->email;
                $data['firstName']   = $request->firstName;
                $data['lastName']    = $request->lastName;
                $data['created_on']  = date('Y-m-d H:i:s');                
            }
 
            array_push($dataInfo,$data);
    
            Storage::disk('local')->put('data.json', json_encode($dataInfo));
            return response()->json($data, 200);
 
        } catch(Exception $e) {
 
            return ['error' => true, 'message' => $e->getMessage()];
 
        }
    }

    public function edit($id)
    {
        $id = --$id; 
        $path = storage_path() . "/app/data.json";
        $data = json_decode(file_get_contents($path), true); 
        if (!empty($data[$id])){
           return response()->json($data[$id], 200);
        }
        else{
           return response()->json('Data Not Found', 404);    
        } 
    }

    public function update(Request $request)
    {
        $input = $request->all();
        try {
            $id = $request->id-1; //Get Array key
            $path = storage_path() . "/app/data.json";
            $json = json_decode(file_get_contents($path), true);               
            $json[$id]['id']          = $request->id;
            $json[$id]['userName']    = $request->userName;
            $json[$id]['email']       = $request->email;
            $json[$id]['firstName']   = $request->firstName;
            $json[$id]['lastName']    = $request->lastName;
            $json[$id]['created_on']  = date('Y-m-d H:i:s');           
            $newJsonString = json_encode($json);
            file_put_contents($path, $newJsonString);
            return response()->json($json[$id], 200);
 
        } catch(Exception $e) {
 
            return ['error' => true, 'message' => $e->getMessage()];
 
        }
    }
}
