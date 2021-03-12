<?php

namespace App\Http\Controllers\Setting\Classrooms;

use App\Http\Controllers\Controller;
use App\Setting\Classroom\Class_fee;
use App\Setting\General\Fees_type;
use App\Setting\General\Grade;
use Illuminate\Http\Request;
use Illuminate\Validation\ValidationException;

class Class_fees extends Controller
{
    public function index()
    {
        $c = new Class_fee();
        $class_fees = $c->with('Grade')->with('Fees_type')->with('Study_year')->with('Status')->get();
        $g = new Grade();
        $grades = $g->get();
        $f = new Fees_type();
        $feeTypes = $f->get();
        return view('setting.class_fees.home')->with('classFees', $class_fees)->with('grades', $grades)->with('feeTypes', $feeTypes);
    }

    public function newClassFee(Request $request)
    {

        try {
            $this->validate($request, [

                'fee_type' => 'required',
                'grade' => 'required',
                'value' => 'required',

            ]);
        } catch (ValidationException $e) {
        }

        $class_fee = new Class_fee();
        $class_fee->fee_type_id = $request['fee_type'];
        $class_fee->grade_id = $request['grade'];
        $class_fee->fee_value = $request['value'];
        $class_fee->study_year_id = 1;


        $class_fee->save();

        return redirect()->route('classFees');
    }
}
