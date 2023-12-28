<?php

namespace App\Http\Controllers\Api;

use App\Http\Controllers\Controller;
use App\Models\Biodata;
use Dotenv\Validator;
use Illuminate\Http\Request;

class BiodataController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $data = Biodata::orderBy('stage_name', 'asc')->get();
        return response()->json([
            'status'=>true,
            'message'=>'data tersedia',
            'data' => $data
        ],200);
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {

        // $rules = [
        //     'stage_name' => 'required'
        // ];
        // $validator = Validator::make($request->all(), $rules);

        $dataBio = new Biodata;
        $dataBio->stage_name = $request->stage_name;
        $dataBio->birth_name = $request->birth_name;
        $dataBio->birthday = $request->birthday;
        $dataBio->stage_name = $request->stage_name;

        return response()->json([
            'status' => true,
            'message' => 'success insert data'
        ]);
    }

    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
        $data = Biodata::find($id);
        if($data){
            return response()->json([
                'status' => true,
                'message'=> 'data tersedia',
                'data' => $data
            ]);
        }else{
            return response()->json([
                'status' => false,
                'message'=>'data tidak ditemukan'

            ]);
        }
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {

    }
}
