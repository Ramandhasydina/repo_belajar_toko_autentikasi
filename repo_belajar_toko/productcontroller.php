<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Customers;
use Illuminate\Support\Facades\Validator;

class productcontroller extends Controller
{
    public function store(Request $request) {
        $validator=Validator::make($request->all(),
        [
            'nama_product' => 'required'
        ]
        );
        if ($validator->fails()){
            return Response->json($validator->errors());
        }

        $simpan = product::ctreate([
            'nama_product' => $request->nama_product
        ]);
        if ($simpan){
            return Response()->json(['status'=>1]);
        }
        else{
            return Response()->json(['status'=>0]);
        }
    }
}
