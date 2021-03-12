<?php

namespace App\Http\Controllers\Setting\Transportations;

use App\Http\Controllers\Controller;
use App\Setting\Transportation\Area_price;
use App\Setting\Transportation\Transportation_area;
use App\Setting\Transportation\Transportation_line;
use Illuminate\Http\Request;
use Illuminate\Validation\ValidationException;

class Transportation_areas extends Controller
{
    public function index()
    {
        $l = new Transportation_line();
        $lines = $l->where('status_id', 1)->get();
        $a = new Transportation_area();
        $areas = $a->with('Transportation_line')->get();
        // dd($areas[0]['Area_price'][0]);
        return view('setting.transportation_areas.home')->with('lines', $lines)->with('areas', $areas);
    }

    public function newArea(Request $request)
    {

        try {
            $this->validate($request, [

                'area_name' => 'required',
                'line' => 'required',
                'price' => 'required'
            ]);
        } catch (ValidationException $e) {
        }

        $transportation_area = new Transportation_area();
        $transportation_area->area_name = $request['area_name'];
        $transportation_area->transportation_line_id = $request['line'];

        $transportation_area->save();

        $transportation_area_id = $transportation_area->id;
        $area_price = new Area_price();
        //  DB::table("area_price")->where('area_id',$transportation_area_id)->update(['status'=>2]);
        $area_price->transportation_area_id = $transportation_area_id;
        $area_price->price = $request['price'];
        $area_price->status_id = 1;
        $area_price->save();
        return redirect()->route('transportation_areas');
    }
}
