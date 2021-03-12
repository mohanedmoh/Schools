<?php

namespace App\Http\Controllers\Setting\General;

use App\Http\Controllers\Controller;
use App\Setting\General\Grade;
use App\Setting\General\Subject;
use App\Setting\General\Subject_type;
use Illuminate\Http\Request;
use Illuminate\Validation\ValidationException;

class Subjects extends Controller
{
    public function index(Subject $s, Grade $g, Subject_type $st)
    {

        $subjects = $s->with('Subject_type')->with('Grade')->get();
        $grades = $g->get();
        $subject_types = $st->get();
        $data = [

            'grades' => $grades,
            'subjects' => $subjects,
            'subject_types' => $subject_types
        ];
        return view('setting.subjects.home')->with($data);
    }

    public function newSubject(Request $request)
    {

        try {
            $this->validate($request, [

                'subject_name' => 'required',
                'grade' => 'required',
                'subject_type' => 'required',
                'subject_order' => 'required',
            ]);
        } catch (ValidationException $e) {
        }

        $subject = new Subject();
        $subject->name = $request['subject_name'];
        $subject->grade_id = $request['grade'];
        $subject->subject_type_id = $request['subject_type'];
        $subject->subject_order = $request['subject_order'];

        $subject->save();

        return redirect()->route('subjects');
    }
}
