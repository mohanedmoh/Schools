<?php

namespace App\Http\Controllers\Setting\Classrooms;

use App\Http\Controllers\Controller;
use App\Setting\Classroom\Classroom_supervisor;
use App\Setting\Employee\Employee;
use App\Setting\General\Grade;
use Illuminate\Http\Request;
use Illuminate\Validation\ValidationException;

class Classroom_supervisors extends Controller
{
    public function index()
    {
        $s = new Classroom_supervisor();

        $supervisors = $s->with('study_year')->get();
        // dd($supervisors[0]);
        $g = new Grade();
        $grades = $g->get();
        $e = new Employee();
        $employees = $e->whereNotIn('job_id', [6, 7, 9])->where('status_id', 1)->get();
        return view('setting.classroom_supervisors.home')->with('supervisors', $supervisors)->with('grades', $grades)->with('employees', $employees);
    }

    public function newSupervisor(Request $request)
    {

        try {
            $this->validate($request, [

                'employee' => 'required',
                'classrooms' => 'required',
                'grade' => 'required',
            ]);
        } catch (ValidationException $e) {
        }


        $classroom_supervisor = new Classroom_supervisor();
        $classroom_supervisor->employee_id = $request['employee'];
        $classroom_supervisor->classroom_id = $request['classrooms'];
        $classroom_supervisor->study_year_id = 1;

        $classroom_supervisor->save();


        return redirect()->route('Classroom_supervisors');
    }
}
