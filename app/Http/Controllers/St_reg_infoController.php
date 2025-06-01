<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use mysql_xdevapi\Exception;

class StreginfoController extends Controller
{
    public function register(Request $request){
        try {
            $St_reg_info = [

                "st_address" => $request->st_address,
                "st_lname" => $request->st_lname,
                "st_faname" => $request->st_faname,
                "st_id_no" => $request->st_id_no,
                "st_birth_date" => $request->st_birth_date,
                "st_birth_place" => $request->st_birth_place,
                "st_grade" => $request->st_grade,
                "st_field" => $request->st_field,
                "st_exp_place" => $request->st_exp_place,
                "st_series" => $request->st_series,
                "st_fname" => $request->st_fname,
                "st_phone" => $request->st_phone,
                "st_telephone" => $request->st_telephone,
                "st_fname" => $request->st_fname,
                "st_personal_pic" => $request->st_personal_pic
            ];

            DB::beginTransaction();

            St_reg_infoModel::create($St_reg_info);

            DB::commit();
            return response()->json([
                "msg" => "inserted",
                "statuscode" => 201
            ],201);

        }catch (Exception $e){
            DB::rollback();
        }
    }

    public function returnData(Request $request){
        return St_reg_infoMOdel::with(["fa_reg_info"])->get();
    }
}
