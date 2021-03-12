<?php

namespace App\Http\Controllers\Setting\Transportations;

use App\Http\Controllers\Controller;
use App\Setting\General\Grade;
use App\Setting\General\Grade_transportation_line;
use App\Setting\Transportation\Transportation_line;
use Illuminate\Http\Request;
use Illuminate\Validation\ValidationException;

class Transportation_lines extends Controller
{
    public function index()
    {
        $l = new Transportation_line();

        $lines = $l->all();
        //  dd($lines[5]['Grade']);
        $g = new Grade();
        $grades = $g->get();

        return view('setting.transportation_lines.home')->with('lines', $lines)->with('grades', $grades);
    }

    public function newLine(Request $request)
    {

        try {
            $this->validate($request, [

                'line_name' => 'required',
                'grade_checkboxes' => 'required',
            ]);
        } catch (ValidationException $e) {
        }
        $grade_checkboxes = $request->input('grade_checkboxes');
        //  dd($myCheckboxes);

        $transportation_line = new Transportation_line();
        $transportation_line->line_name = $request['line_name'];

        $transportation_line->save();
        $transportation_line_id = $transportation_line->id;

        $grades = array();
        foreach ($grade_checkboxes as $grade_checkbox) {
            $row = array("grade_id" => $grade_checkbox, "transportation_line_id" => $transportation_line_id);
            array_push($grades, $row);
        }
        $grades_transportation_lines = new Grade_transportation_line();
        $grades_transportation_lines::insert($grades);
        //dd($grades_transportation_lines);


        return redirect()->route('transportation lines');
    }
}
