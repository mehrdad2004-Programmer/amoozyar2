<?php

namespace App\Http\Controllers;

use App\Models\FaRegInfoModel;
use Illuminate\Http\Request;
use App\Models\StRegInfoModel;
use App\Models\MoRegInfoModel;
use App\Models\StEducationInfoModel;
use Illuminate\Support\Facades\DB;

class Registeration extends Controller
{
    public function register(Request $request){
        try{
            $ST_PREFIX = "st_";
            $FA_PREFIX = "fa_";
            $MO_PREFIX = "mo_";

            //STUDENTS DATA
            $st_reg_info = [
                $ST_PREFIX . "fname" => $request->st_fname,
                $ST_PREFIX . "lname" => $request->st_lname,
                $ST_PREFIX . "faname" => $request->st_faname,
                $ST_PREFIX . "id_no" => $request->st_id_no,
                $ST_PREFIX . "series" => $request->st_series,
                $ST_PREFIX . "birthdate" => $request->st_birthdate,
                $ST_PREFIX . "birthplace" => $request->st_birthplace,
                $ST_PREFIX . "id_card_exportion" => $request->st_id_card_exportion,
                $ST_PREFIX . "phone" => $request->st_phone,
                $ST_PREFIX . "home_phone" => $request->st_home_phone,
                $ST_PREFIX . "address" => $request->st_address,
                $ST_PREFIX . "personal_pic" => $request->st_personal_pic,
                $ST_PREFIX . "field" => $request->st_field,
                $ST_PREFIX . "grade" => $request->st_grade,
                $ST_PREFIX . "group" => $request->st_group,
                "request_date" => "99/99/99",
                $ST_PREFIX . "mianpaye" => $request->mianpaye,
                $ST_PREFIX . "reg_code" => "9999",
                $ST_PREFIX . "condition" => "0",
                $ST_PREFIX . "status" => "0",
            ];



            //FATHER DATA
            $fa_reg_info = [
                $FA_PREFIX . "fname" => $request->fa_fname,
                $FA_PREFIX . "lname" => $request->fa_lname,
                $FA_PREFIX . "job" => $request->fa_job,
                $FA_PREFIX . "work_address" => $request->fa_work_address,
                $FA_PREFIX . "telphone" => $request->fa_telphone,
                $FA_PREFIX . "phone" => $request->fa_phone,
                $FA_PREFIX . "id_no" => $request->fa_id_no,
                $FA_PREFIX . "education" => $request->fa_education,
                "st_id_no" => $request->st_id_no,
            ];


            //MOTHER DATA
            $mo_reg_info = [
                $MO_PREFIX . "fname" => $request->mo_fname,
                $MO_PREFIX . "lname" => $request->mo_lname,
                $MO_PREFIX . "work_address" => $request->mo_work_address,
                $MO_PREFIX . "job" => $request->mo_job,
                $MO_PREFIX . "telphone" => $request->mo_telphone,
                $MO_PREFIX . "phone" => $request->mo_phone,
                $MO_PREFIX . "id_no" => $request->mo_id_no,
                $MO_PREFIX . "education" => $request->mo_education,
                "st_id_no" => $request->st_id_no,
            ];

            //STUDENT EDUCATION INFO
            $st_education_info = [
                "last_school" => $request->last_heigh_school,
                "last_avrage" => $request->last_avrage,
                "last_enzebat" => $request->last_enzebat,
                "last_karname" => $request->last_karname,
                "st_id_no" => $request->st_id_no
            ];

            //begining transaction
            DB::beginTransaction();

            StRegInfoModel::create($st_reg_info);
            MoRegInfoModel::create($mo_reg_info);
            FaRegInfoModel::create($fa_reg_info);
            StEducationInfoModel::create($st_education_info);

            DB::commit();

            return response()->json([
                "msg" => "inserted",
                "statuscode" => 201
            ], 201);

        }catch(\Exception $e){
            DB::rollBack();

            return response()->json([
                "err" => $e->getMessage() . " at line " . $e->getLine(),
                "statuscode" => 500
            ], 500);
        }
    }
}
