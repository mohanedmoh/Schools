<?php

namespace App\Http\Controllers\Setting\Employees;

use App\Http\Controllers\Controller;
use App\Setting\Employee\Qualification;
use Illuminate\Http\Request;
use Illuminate\Validation\ValidationException;

class Qualifications extends Controller
{
    public function index(Qualification $q)
    {
        $qualifications = $q->get();
        return view('setting.qualifications.home')->with('qualifications', $qualifications);
    }

    public function newQualification(Request $request)
    {

        try {
            $this->validate($request, [
                'qualification' => 'required',
            ]);
        } catch (ValidationException $e) {
        }

        $qualification = new Qualification();
        $qualification->qualification = $request['qualification'];


        $qualification->save();

        return redirect()->route('qualifications');
    }
}
