<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\phieu_dk;

class Phieu_dkController extends Controller
{
    public function getAll(){
        $dk= phieu_dk::all();
        if($dk != NULL){
            $kq = array ("message" => "Success", "Status" => "200", "data"=>$dk);
        }
        else{
            $kq = array ("message" => "Error", "Status" => "600");
        }
    	return json_encode($kq);
    }
    public function add(Request $request){
    	$dk = phieu_dk::create($request->all());
    	if($dk != NULL){
            $kq = array ("message" => "Success", "Status" => "200", "data"=>$dk);
        }
        else{
            $kq = array ("message" => "Error", "Status" => "600");
        }
    	return json_encode($kq);
    }
    public function get($id){
    	$dk= phieu_dk::find($id);
    	return $dk;
    }
    public function edit($id,Request $request){
    	$dk= $this->get($id);
    	$dk->fill($request->all())->save();
    	return $dk;
    }
    public function update($id,Request $request)
    {
        $dk= $this->get($id);
        
        if($dk != NULL){
            $dk->fill($request->all())->save();
            $kq = array ("message" => "Success", "Status" => "200", "data"=>$dk);
        }
        else{
            $kq = array ("message" => "Error", "Status" => "600");
        }
    	return json_encode($kq);
    }
    public function delete($id){
    	$dk= $this->get($id);
    	
    	if($dk != NULL){
            $dk->delete();
            $kq = array ("message" => "Success", "Status" => "200", "data"=>$dk);
        }
        else{
            $kq = array ("message" => "Error", "Status" => "600");
        }
    	return json_encode($kq);
    }
}
