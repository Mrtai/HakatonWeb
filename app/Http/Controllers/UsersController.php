<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\User;

class UsersController extends Controller
{
    public function getAll(){
        $ts= User::all();
        $kq = array ("Message" => "Success", "Status" => "201", "data"=>$ts);
        return json_encode($kq);
    }
    public function add(Request $request){
        $ts= User::create($request->all());
        if($ts != NULL){
            $kq = array ("Message" => "Success", "Status" => "201", "data"=>$ts);
        }
        else{
            $kq = array ("Message" => "Error", "Status" => "600");
        }
        return json_encode($kq);
    }
    public function get($id){
        $ts= User::find($id);
        return $ts;
    }
    public function update($id,Request $request){
        $ts= $this->get($id);
        // echo $ts;
        if($ts != NULL){
            $ts->fill($request->all())->save();
            $kq = array ("Message" => "Success", "Status" => "201", "data"=>$ts);
        }
        else{
            $kq = array ("Message" => "Error", "Status" => "600");
        }
        return json_encode($kq);
    }
    public function delete($id){
    	$mh= $this->get($id);
    	if($mh != NULL){
            $mh->delete();
            $kq = array ("Message" => "Success", "Status" => "200", "data"=>$mh);
        }
        else{
            $kq = array ("Message" => "Error", "Status" => "600");
        }
    	return json_encode($kq);
    }
}
