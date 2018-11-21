<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\models\usersModels;

class Mydata extends Controller
{
    public function edit(usersModels $data)
    {
    	return view('mydata/edit', compact('data'));
    }

    public function upgrade(usersModels $data)
    {
    	$data = Request()->all();
       	usersModels::where('user_id', $data['userid'])
    				->update([ 
                        
                            'name' => $data['name'],
                            'lastname' => $data['lastname'],
                            'email' => $data['email'],
                            'password' => $data['password'],
					]);   
		return redirect('/'); 
    }
}
