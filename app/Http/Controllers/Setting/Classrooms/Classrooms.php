<?php

namespace App\Http\Controllers\Setting\Classrooms;

use App\Http\Controllers\Controller;
use App\Setting\Classroom\Classroom;
use App\Setting\General\Grade;
use Illuminate\Http\Request;
use Illuminate\Validation\ValidationException;

class Classrooms extends Controller
{
    public function index()
    {
        $g = new Grade();
        $c = new Classroom();
        $grades = $g->active()->get();
        $classrooms = $c->active()->with('Grade')->with('Classroom_supervisor')->get();

        return view('setting.Classrooms.home')->with('classrooms', $classrooms)->with('grades', $grades);
    }

    public function newClassroom(Request $request)
    {

        try {
            $this->validate($request, [
                'classroom_name' => 'required',
                'grade' => 'required',
            ]);
        } catch (ValidationException $e) {
        }

        $classroom = new classroom();
        $classroom->classroom_name = $request['classroom_name'];
        $classroom->grade_id = $request['grade'];


        $classroom->save();

        return redirect()->route('classrooms');
    }

    public function edit($id)
    {
        try {
            $id = decrypt($id);
        } catch (\Illuminate\Contracts\Encryption\DecryptException $e) {
            return redirect()->back()->with('error', 'حدثت بعض الاخطاء الرجاء المحاولة لاحقا');
        }

        $obj = Classroom::findOrFail($id);
        $grades = Grade::active()->get();
        $data = ['grades'  => $grades, 'data'=>$obj];

        if (!empty($obj))   return view('setting.Classrooms.update')->with( $data);
        else               return redirect()->back()->with('error', 'حدثت بعض الاخطاء الرجاء المحاولة لاحقا');
    }
    public function update(Request $request, $id)
    {
        
        try {
            $id = decrypt($id);

           
            $this->validate($request, [
                'classroom_name' => 'required|string',
                'grade' => 'required|numeric',
            ]);

            try {
                $obj = Classroom::findOrFail($id);
               
                $obj->classroom_name=$request->classroom_name;
                $obj->grade_id=$request->grade;

                if ($obj->save()) return  redirect()->route('classrooms')->with('success', 'تم الحفظ بنجاح ');
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
            $obj = Classroom::findOrFail($request->id);
            if ($obj) {
                $obj->status_id = 0;
                $obj->save();
                return 1;
            } else return 0;
        } catch (\Illuminate\Database\QueryException $ex) {
            return 0;
        }
    }

}
