<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\ThiSinh;

class ThiSinhController extends Controller
{
    public function getAll(){
        $ts= ThiSinh::all();
        $kq = array ("Message" => "Success", "Status" => "200", "data"=>$ts);
        return json_encode($kq);
    }
    public function add(Request $request){
        $ts= ThiSinh::create($request->all());
        if($ts != NULL){
            $kq = array ("Message" => "Success", "Status" => "201", "data"=>$ts);
        }
        else{
            $kq = array ("Message" => "Error", "Status" => "600");
        }
        return json_encode($kq);
    }
    public function get($id){
        $ts= ThiSinh::find($id);
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
