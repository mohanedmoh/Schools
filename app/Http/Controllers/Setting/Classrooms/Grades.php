<?php

namespace App\Http\Controllers\Setting\Classrooms;

use App\Http\Controllers\Controller;
use App\Setting\General\Grade;
use Illuminate\Http\Request;
use Illuminate\Validation\ValidationException;

class Grades extends Controller
{
    public function index(Grade $g)
    {

        $grades = $g->active()->get();
        return view('setting.grades.home')->with('grades', $grades);
    }

    public function newGrade(Request $request)
    {

        try {
            $this->validate($request, [

                'grade_name' => 'required',
            ]);
        } catch (ValidationException $e) {
        }

        $grade = new Grade();
        $grade->grade = $request['grade_name'];


        $grade->save();

        return redirect()->route('grades');
    }

    public function edit($id)
    {
        try {
            $id = decrypt($id);
        } catch (\Illuminate\Contracts\Encryption\DecryptException $e) {
            return redirect()->back()->with('error', 'حدثت بعض الاخطاء الرجاء المحاولة لاحقا');
        }
        $obj = Grade::findOrFail($id);

        if (!empty($obj))   return view('setting.grades.update')->with('data', $obj);
        else               return redirect()->back()->with('error', 'حدثت بعض الاخطاء الرجاء المحاولة لاحقا');
    }
    public function update(Request $request, $id)
    {
        try {
            $id = decrypt($id);
       
            $this->validate($request, [
                'grade_name' => 'required|string',
            ]);

            try {
                $obj = Grade::findOrFail($id);
                
                $obj->grade=$request->grade_name;

                if ($obj->save()) return  redirect()->route('grades')->with('success', 'تم الحفظ بنجاح ');
                else return redirect()->back()->with('error', 'حدثت بعض الاخطاء الرجاء المحاولة لاحقا');
            } catch (\Illuminate\Database\QueryException $ex) {
                return redirect()->back()->with('error', 'حدثت بعض الاخطاء الرجاء المحاولة لاحقا');
            }
        } catch (\Illuminate\Contracts\Encryption\DecryptException $e) {
            return redirect()->back()->with('error', 'حدثت بعض الاخطاء الرجاء المحاولة لاحقا');
        }
      
    }
    public function delete(Request $request)
    {
        try {
            $obj = Grade::findOrFail($request->id);
            if ($obj) {
                $obj->status_id = 0;
                $obj->save();
                return 1;
            } else return 0;
        } catch (\Illuminate\Database\QueryException $ex) {
            return 0;
        }
    }

    public function getClassRoom(Request $request, Classroom $g)
    {
        $data = $g->where('grade_id', '=', $request->id)->select('id', 'classroom_name')->get();
        echo response()->json($data)->getContent();
    }
}
