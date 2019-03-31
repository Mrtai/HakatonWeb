<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\dethi;

class DethiController extends Controller
{
    public function getAll(){
        $dt= dethi::all();
        if($dt != NULL){
            $kq = array ("message" => "Success", "Status" => "201", "data"=>$dt);
        }
        else{
            $kq = array ("message" => "Error", "Status" => "600");
        }
        return json_encode($kq);
    }
    public function add(Request $request){
    	$dt = dethi::create($request->all());
    	if($dt != NULL){
            $kq = array ("message" => "Success", "Status" => "201", "data"=>$dt);
        }
        else{
            $kq = array ("message" => "Error", "Status" => "600");
        }
        return json_encode($kq);
    }
    public function get($id){
    	$dt= dethi::find($id);
    	return $dt;
    }
    public function edit($id,Request $request){
    	$dt= $this->get($id);
    	$dt->fill($request->all())->save();
    	return $dt;
    }
    public function update($id,Request $request)
    {
        $dt= $this->get($id);
        if($dt != NULL){
            $dt->fill($request->all())->save();
            $kq = array ("message" => "Success", "Status" => "201", "data"=>$dt);
        }
        else{
            $kq = array ("message" => "Error", "Status" => "600");
        }
        return json_encode($kq);
    }
    public function delete($id){
    	$dt= $this->get($id);
    	if($dt != NULL){
            $dt->delete();
            $kq = array ("message" => "Success", "Status" => "201", "data"=>$dt);
        }
        else{
            $kq = array ("message" => "Error", "Status" => "600");
        }
        return json_encode($kq);
    }
}
