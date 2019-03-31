<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\monhoc;
class MonhocController extends Controller
{
    public function getAll(){
        $mh= monhoc::all();
        if($mh != NULL){
            $kq = array ("message" => "Success", "Status" => "200", "data"=>$mh);
        }
        else{
            $kq = array ("message" => "Error", "Status" => "600");
        }
    	return json_encode($kq);
    }
    public function add(Request $request){
    	$mh = monhoc::create($request->all());
    	if($mh != NULL){
            $kq = array ("message" => "Success", "Status" => "200", "data"=>$mh);
        }
        else{
            $kq = array ("message" => "Error", "Status" => "600");
        }
    	return json_encode($kq);
    }
    public function get($id){
        $mh= monhoc::find($id);
        return $mh;
    }
    public function edit($id,Request $request){
    	$mh= $this->get($id);
    	$mh->fill($request->all())->save();
    	return $mh;
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
    	$mh= $this->get($id);
    	if($mh != NULL){
            $mh->delete();
            $kq = array ("message" => "Success", "Status" => "200", "data"=>$mh);
        }
        else{
            $kq = array ("message" => "Error", "Status" => "600");
        }
    	return json_encode($kq);
    }
}
