<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\User;
use App\Models\Skill;

class SystemController extends Controller
{
	public function __construct(Request $request, User $user, Skill $skill){
		$this->request = $request;
		$this->user = $user;
		$this->skill = $skill;
	}

    public function index(){
    	$temp = "";
    	$users = $this->user->all();
    	for ($i = 0; $i < $users->count(); $i++) {
    		$skill = $this->skill->where('user_id', $users[$i]->id)->get();

    		if($skill->count() != 0){
	    		for($j = 0; $j < $skill->count(); $j++){
	    			 $temp .= $skill[$j]["name"].",";
	    		}
    		}

    		$users[$i]["skills"] = $temp;
    		$temp = "";
    	}
    	return response()->json(['users' => $users], 200);
    }

    public function addUser(){
    	$params = $this->request->name;

    	if($params != ""){
    		$status = $this->user->create([
    			"name" => $params
    		]);

    		if($status)
    			return response()->json(['message' => "Tambah user sukses"], 200);
    		return response()->json(['message' => "Tambah user gagal"], 422);
    	}
    }

    public function addSkill($id){
		$params = $this->request->name;

    	if($params != ""){
    		$status = $this->skill->create([
    			"name" => $params,
    			"user_id" => $id
    		]);

    		if($status)
    			return response()->json(['message' => "Tambah skill sukses"], 200);
    		return response()->json(['message' => "Tambah skill gagal"], 422);
    	}
    }
}
