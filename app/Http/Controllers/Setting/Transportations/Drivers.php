<?php

namespace App\Http\Controllers\Setting\Transportations;

use App\Http\Controllers\Controller;
use App\Setting\Transportation\Driver;
use Illuminate\Http\Request;
use Illuminate\Validation\ValidationException;

class Drivers extends Controller
{
    public function index()
    {
        $d = new Driver();


        $drivers = $d->with('Driver_payment_type')->with('Transportation_area')->get();


        return view('setting.drivers.home')->with('drivers', $drivers);
    }

    public function newClassroom(Request $request)
    {

        try {
            $this->validate($request, [

                'classroom_name' => 'required',
                'grade' => 'required',
                'employee' => 'required'
            ]);
        } catch (ValidationException $e) {
        }

        $classroom = new classroom();
        $classroom->classroom_name = $request['classroom_name'];
        $classroom->grade_id = $request['grade'];
        $classroom->supervisor_id = $request['employee'];


        $classroom->save();

        return redirect()->route('drivers');
    }

}
