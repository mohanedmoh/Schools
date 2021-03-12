<?php

namespace App\Http\Controllers;


use Illuminate\Http\Request;
use App\BehaviorType;
use App\Behavior;

use App\Http\Requests;

class Behaviors extends Controller
{
    function index()
    {
      //  $types = Behavior::get()->with('BehaviorType')->first();
        //$types = BehaviorType::where('behavior_id', 1)->behaviors()->get();

       // $types = behavior::find(1)->types()->get();

        $behaviors=Behavior::all();
        $data=['behaviors'=>$behaviors];

        return view('setting.students.behaviors')->with($data);
    }
   function getBehaviorType(Request $request)
   {

       $data=BehaviorType::where('behavior_id','=',$request->id)->select('id','title')->get();
       echo response()->json($data)->getContent();
   }
}
