<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Customers;
use Illuminate\Support\Facades\Validator;

class ordercontroller extends Controller

{
    public function store(Request $request) {
        $validator=Validator::make($request->all(),
        [
            'id_customers' => 'required'
            'id_product' => 'required'
        ]
);
        if ($validator->fails()){
            return Response->json($validator->errors());
        }

        $simpan = orders::ctreate([
            'id_customers' => $request->id_customers
            'id_product' => $request->product
        ]);
        if ($simpan){
            return Response()->json(['status'=>1]);
        }
        else{
            return response()->json(['status'=>0]);
        }
    }
}
