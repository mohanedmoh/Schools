<?php

namespace App\Http\Controllers\Setting\Employees;

use App\Http\Controllers\Controller;
use App\Setting\Employee\Job;
use Illuminate\Http\Request;
use Illuminate\Validation\ValidationException;

class Jobs extends Controller
{
    public function index(Job $j)
    {

        $jobs = $j->get();
        return view('setting.jobs.home')->with('jobs', $jobs);
    }

    public function newJob(Request $request)
    {

        try {
            $this->validate($request, [
                'job_title' => 'required',
            ]);
        } catch (ValidationException $e) {
        }

        $job = new Job();
        $job->job_title = $request['job_title'];


        $job->save();

        return redirect()->route('jobs');
    }
}
