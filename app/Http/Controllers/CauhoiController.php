<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\cauhoi;

class CauhoiController extends Controller
{
    public function getAll(){
        $ch= cauhoi::all();
        if($ch != NULL){
            $kq = array ("Message" => "Success", "Status" => "200", "data"=>$ch);
        }
        else{
            $kq = array ("Message" => "Error", "Status" => "600");
        }
        return json_encode($kq);
    }
    public function add(Request $request){
    	$ch = cauhoi::create($request->all());
    	if($ch != NULL){
            $kq = array ("Message" => "Success", "Status" => "200", "data"=>$ch);
        }
        else{
            $kq = array ("Message" => "Error", "Status" => "600");
        }
        return json_encode($kq);
    }
    public function get($id){
    	$ch= cauhoi::find($id);
    	return $ch;
    }
    public function edit($id,Request $request){
    	$ch= $this->get($id);
    	$ch->fill($request->all())->save();
    	return $ch;
    }
    public function update($id,Request $request)
    {
        $ch= $this->get($id);
        if($ch != NULL){
            $ch->fill($request->all())->save();
            $kq = array ("Message" => "Success", "Status" => "201", "data"=>$ch);
        }
        else{
            $kq = array ("Message" => "Error", "Status" => "600");
        }
        return json_encode($kq);
    }
    public function delete($id){
    	$ch= $this->get($id);
    	
    	if($ch != NULL){
            $ch->delete();
            $kq = array ("Message" => "Success", "Status" => "201", "data"=>$ch);
        }
        else{
            $kq = array ("Message" => "Error", "Status" => "600");
        }
        return json_encode($kq);
    }
}
