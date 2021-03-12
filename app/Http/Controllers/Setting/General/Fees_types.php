<?php

namespace App\Http\Controllers\Setting\General;

use App\Http\Controllers\Controller;
use App\Setting\General\Fees_cat;
use App\Setting\General\Fees_type;
use Illuminate\Http\Request;
use Illuminate\Validation\ValidationException;

class Fees_types extends Controller
{
    public function index(Fees_type $f)
    {

        $feesTypes = $f->get();
        $fc = new Fees_cat();
        $fees_cats = $fc->get();
        return view('setting.feesTypes.home')->with('feesTypes', $feesTypes)->with("fees_cats", $fees_cats);
    }

    public function newFeesType(Request $request)
    {

        try {
            $this->validate($request, [

                'feesType' => 'required',
                'feesCat' => 'required'
            ]);
        } catch (ValidationException $e) {
        }

        $feesType = new Fees_type();
        $feesType->type = $request['feesType'];
        $feesType->fees_cat_id = $request['feesCat'];


        $feesType->save();

        return redirect()->route('feesType');
    }
}
