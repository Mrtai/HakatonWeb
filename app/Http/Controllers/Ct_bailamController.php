<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\ct_bailam;

class Ct_bailamController extends Controller
{
    public function getAll(){
        $ct= ct_bailam::all();
        if($ct != NULL){
            $kq = array ("Message" => "Success", "Status" => "200", "data"=>$ct);
        }
        else{
            $kq = array ("Message" => "Error", "Status" => "600");
        }
        return json_encode($kq);
    }
    public function add(Request $request){
    	$ct = ct_bailam::create($request->all());
    	if($ct != NULL){
            $kq = array ("Message" => "Success", "Status" => "200", "data"=>$ct);
        }
        else{
            $kq = array ("Message" => "Error", "Status" => "600");
        }
        return json_encode($kq);
    }
    public function get($id){
    	$ct= ct_bailam::find($id);
    	return $ct;
    }
    public function edit($id,Request $request){
    	$ct= $this->get($id);
    	$ct->fill($request->all())->save();
    	return $ct;
    }
    public function update($id,Request $request)
    {
        $ct= $this->get($id);
        if($ct != NULL){
            $ct->fill($request->all())->save();
            $kq = array ("Message" => "Success", "Status" => "200", "data"=>$ct);
        }
        else{
            $kq = array ("Message" => "Error", "Status" => "600");
        }
        return json_encode($kq);
    }
    public function delete($id){
    	$ct= $this->get($id);
    	if($ct != NULL){
            $ct->delete();
            $kq = array ("Message" => "Success", "Status" => "200", "data"=>$ct);
        }
        else{
            $kq = array ("Message" => "Error", "Status" => "600");
        }
        return json_encode($kq);
    }
}
