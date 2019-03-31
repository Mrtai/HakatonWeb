<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\bailam;

class BailamController extends Controller
{
    public function getAll(){
        $bl= bailam::all();
        if($bl != NULL){
            $kq = array ("Message" => "Success", "Status" => "200", "data"=>$bl);
        }
        else{
            $kq = array ("Message" => "Error", "Status" => "600");
        }
       return json_encode($kq);
    }
    public function add(Request $request){
    	$bl = bailam::create($request->all());
    	if($bl != NULL){
            $kq = array ("Message" => "Success", "Status" => "200", "data"=>$bl);
        }
        else{
            $kq = array ("Message" => "Error", "Status" => "600");
        }
        return json_encode($kq,true);
    }
    public function get($id){
    	$bl= bailam::find($id);
    	return $bl;
    }
    public function edit($id,Request $request){
    	$bl= $this->get($id);
    	$bl->fill($request->all())->save();
    	return $bl;
    }
    public function update($id,Request $request)
    {
        $bl= $this->get($id);
        if($bl != NULL){
            $bl->fill($request->all())->save();
            $kq = array ("Message" => "Success", "Status" => "201", "data"=>$bl);
        }
        else{
            $kq = array ("Message" => "Error", "Status" => "600");
        }
        return json_encode($kq);
    }
    public function delete($id){
    	$bl= $this->get($id);
    	if($bl != NULL){
            $bl->delete();
            $kq = array ("Message" => "Success", "Status" => "201", "data"=>$bl);
        }
        else{
            $kq = array ("Message" => "Error", "Status" => "600");
        }
        return json_encode($kq);
    }
}
