<?php

namespace App\Http\Controllers\Students;

use App\Http\Controllers\Controller;

use Illuminate\Http\Request;
use App\Http\Requests;

use App\Student\Pupil;
use App\Student\Responsible;
use App\Student\Father;
use App\Student\Mother;
//use App\Setting\Transportations\TransportationType;
use App\Student\Blood;
use App\Student\Health;
use App\Student\Leaving;
use App\Student\Left;
use App\Setting\General\Grade;
use App\Student\Registration;
use Illuminate\Support\Facades\DB;


class Students extends Controller
{
    public function index()
    {
        $pupils = Pupil::active()->get();
        $grades = Grade::active()->get();
        $bloods = Blood::active()->get();
        $reasons_of_leaving = Left::active()->get();
        $transportation_types = ([]); //TransportationType::active()->get();

        $data = [
            'pupils'  => $pupils,
            'grades' => $grades,
            'transportation_types'   => $transportation_types,
            'reasons_of_leaving' => $reasons_of_leaving,
            'bloods' => $bloods,
        ];
        return view('students.home')->with($data);
    }
    public function social(Pupil $p)
    {
        $pupils = Pupil::active()->get();
        $fathers = Father::active()->get();
        $data = [
            'pupils'  => $pupils,
            'fathers'=>$fathers
        ];
        return view('students.social')->with($data);
    }
    public function newSt(Request $request)
    {



        $this->validate($request, [

            'student_no' => 'required|numeric',
            'student_name' => 'required|string',
            'school_bus_type' => 'required|numeric',
            'student_address' => 'required|string',
            'student_phone' => 'required|numeric',
            'student_mobile' => 'required|numeric',
            'birth_date' => 'required|date',
            'area' => 'required',
            'responsable_name' => 'required|string',
            'responsable_relation' => 'required|string',
            'responsable_address' => 'required|string',
            'responsable_phone' => 'required|numeric',
            'responsable_mobile' => 'required|numeric',
            'emergency_phone' => 'required|numeric',
            'emergency_phone_name' => 'required|string',
            'emergency_phone_2' => 'numeric',
            'emergency_phone_name_2' => 'string',
            'is_transferred' => 'numeric',
            'reason_of_leaving' => 'string'
        ]);

        $responsible = new Responsible();
        //$responsible->setConnection('conn');
        $responsible->name = $request['responsable_name'];
        $responsible->relation = $request['responsable_relation'];
        $responsible->address = $request['responsable_address'];
        $responsible->phone = $request['responsable_phone'];
        $responsible->mobile = $request['responsable_mobile'];
        $responsible->em_phone = $request['emergency_phone'];
        $responsible->em_phone_name = $request['emergency_phone_name'];
        $responsible->em_phone_second = $request['emergency_phone_2'];
        $responsible->em_phone_name_second = $request['emergency_phone_name_2'];
        $responsible->save();

        $std = new Pupil();
        // $std->setConnection('conn');
        $std->student_no = $request['student_no'];
        $std->student_name = $request['student_name'];
        $std->address = $request['student_address'];
        $std->phone = $request['student_phone'];
        $std->mobile = $request['student_mobile'];
        $std->birth_date = $request['birth_date'];
        $std->transportation_type_id = $request['school_bus_type'];
        $std->area_id = $request['area'];
        $std->is_transferred = $request['is_transferred'];
        $std->reason_of_leaving = $request['reason_of_leaving'];
        $std->school_id = 1;
        $std->branch_id = 1;
        $std->responsible_id = $responsible->id;


        if (!$std->save()) {
            echo  "some errors happened";
        } else {

            return redirect()->route('home');
        }
    } // end of new student

    public function registration(Request $request)
    {
        $this->validate($request, [

            'registration_student_id' => 'required|numeric',
            'registration_student_name' => 'required',
            'registration_grade' => 'required|numeric',
            'registration_classroom' => 'required|numeric',
            'registration_date' => 'required|date',
            'registration_fee' => 'required|numeric',
            'registration_is_new' => 'numeric',
            'registration_discount_amount' => 'numeric',


        ]);
        $obj = new Registration();
        $obj->student_id = $request['registration_student_id'];
        $obj->grade_id = $request['registration_grade'];
        $obj->classroom_id = $request['registration_classroom'];
        $obj->registration_date = $request['registration_date'];
        $obj->registration_fee_id = $request['registration_fee'];
        $obj->is_new = $request['registration_is_new'];
        $obj->discount_amount = $request['registration_discount_amount'];

        if (!$obj->save()) {
            echo "some errors happened";
        } else return redirect()->route('home');
    }

    public function newBehavior(Request $request)
    {
        $this->validate($request, [

            'behavior_student_no' => 'required',
            'behavior_student_name' => 'required',
            'behavior_student' => 'required',
            'behavior_student_type' => 'required',
            'behavior_student_date' => 'required|date',
            'behavior_student_notes' => 'required',

        ]);

        return view('students.home');
    }
    public function health(Request $request)
    {
        $this->validate($request, [

            'health_student_id' => 'required|numeric',
            'health_status' => 'required|string',
            'blood_family' => 'required|numeric',
            'diseases' => 'required|string',


        ]);

        $obj = new Health();
        $obj->student_id = $request['health_student_id'];
        $obj->health_status = $request['health_status'];
        $obj->blood_family_id = $request['blood_family'];
        $obj->diseases = $request['diseases'];

        if (!$obj->save()) {
            echo "some errors happened";
        } else return redirect()->route('home');
    }
    public function leaving(Request $request)
    {
        $this->validate($request, [

            'leaving_student_id' => 'required',
            'leaving_student_name' => 'required',
            'leaving_student_reason' => 'required',
            'leaving_student_date' => 'required|date',
            'leaving_student_comments' => 'required|string',

        ]);
        $obj = new Leaving();
        $obj->student_id = $request['leaving_student_id'];
        $obj->left_reason_id = $request['leaving_student_reason'];
        $obj->left_date = $request['leaving_student_date'];
        $obj->comments = $request['leaving_student_comments'];

        if (!$obj->save()) {
            echo "some errors happened";
        } else return redirect()->route('home');
    }

    public function father(Request $request)
    {
        $this->validate($request, [

            'father_student_id' => 'required|numeric',
            'father_student_name' => 'required|string',
            'father_name' => 'required|string',
            'father_birth_date' => 'required|date',
            'father_is_alive' => 'required|numeric',
            'father_education' => 'required|string',
            'father_job' => 'required|string',
            'father_phone' => 'required|numeric',

        ]);
        
        try {
            $obj = new Father();
            
            $obj->student_id = $request['father_student_id'];
            $obj->name = $request['father_name'];
            $obj->birth_date = $request['father_birth_date'];
            $obj->is_alive = $request['father_is_alive'];
            $obj->education = $request['father_education'];
            $obj->job = $request['father_job'];
            $obj->phone = $request['father_phone'];  

            if($obj->save()) return redirect()->route('Students_social')->with('success', 'تم حفظ البيانات بنجاح');
            else     return redirect()->back()->with('error', 'حدثت بعض الإخطاء . الرجاء المحاولة لاحقا');

        } catch (\Illuminate\Database\QueryException $ex) {
            return redirect()->back()->with('error', 'حدثت بعض الإخطاء . الرجاء المحاولة لاحقا');
        }
    }
    public function mother(Request $request)
    {
        $this->validate($request, [

            'mother_student_id' => 'required|numeric',
            'mother_student_name' => 'required|string',
            'mother_name' => 'required|string',
            'mother_birth_date' => 'required|date',
            'mother_is_alive' => 'required|numeric',
            'mother_education' => 'required|string',
            'mother_job' => 'required|string',
            'mother_phone' => 'required|numeric',

        ]);
        
        try {
            $obj = new Mother();
            
            $obj->student_id = $request['mother_student_id'];
            $obj->name = $request['mother_name'];
            $obj->birth_date = $request['mother_birth_date'];
            $obj->is_alive = $request['mother_is_alive'];
            $obj->education = $request['mother_education'];
            $obj->job = $request['mother_job'];
            $obj->phone = $request['mother_phone'];  

            if($obj->save()) return redirect()->route('Students_social')->with('success', 'تم حفظ البيانات بنجاح');
            else     return redirect()->back()->with('error', 'حدثت بعض الإخطاء . الرجاء المحاولة لاحقا');

        } catch (\Illuminate\Database\QueryException $ex) {
            return redirect()->back()->with('error', 'حدثت بعض الإخطاء . الرجاء المحاولة لاحقا');
        }
    }
}
