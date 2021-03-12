<?php

namespace App\Http\Controllers\Setting\Employees;

use App\Http\Controllers\Controller;
use App\Setting\Employee\Employee;
use App\Setting\Employee\Job;
use App\Setting\Employee\Marital_status;
use App\Setting\Employee\Qualification;
use Illuminate\Http\Request;
use Illuminate\Validation\ValidationException;

class Employees extends Controller
{
    public function index(Employee $e, job $j, marital_status $m, qualification $q)
    {
        $employees = $e->with('job')->where('status_id', 1)->get();
        $jobs = $j->get();
        $marital_status = $m->get();
        $qualifications = $q->get();
        return view('setting.employees.home')->with('employees', $employees)->with('jobs', $jobs)->with('marital_statuses', $marital_status)->with('qualifications', $qualifications);
    }

    public function newEmp(Request $request)
    {

        try {
            $this->validate($request, [

                'employee_name' => 'required',
                'employee_phone' => 'required',
                'employee_sex' => 'required',
                'employee_address' => 'required',
                'birth_date' => 'required|date',
                'marital_status' => 'required',
                'specialized_subjects' => 'required',
                'qualification' => 'required',
                'job_title' => 'required',

            ]);
        } catch (ValidationException $e) {
        }

        $emp = new Employee();
        $emp->name = $request['employee_name'];
        $emp->phone = $request['employee_phone'];
        $emp->gender = $request['employee_sex'];
        $emp->address = $request['employee_address'];
        $emp->b_date = $request['birth_date'];
        $emp->marital_status_id = $request['marital_statuses'];
        $emp->specialized_subjects = $request['specialized_subjects'];
        $emp->qualification_id = $request['qualification'];
        $emp->job_id = $request['job_title'];


        $emp->save();

        return redirect()->route('employees');
    }
}
