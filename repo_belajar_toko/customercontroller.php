<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Customers;
use Illuminate\Support\Facades\Validator;

class customercontroller extends Controller
{
    public function store(Request $_request)
    {
        $validator=Validator::make($_request->all(),
        [
            'nama_customers' => 'required',
            'alamat' => 'required'
        ]
        );
        if ($validator->fails()){
            return Response()->json($validator->errprs());
        }
$simpan = Customers::create([
    'nama_customers' => $_request->alamat
]);
if($simpan) {
    return Respnse()->json(['status'=>1]);
}
else {
    return Response()->json(['status'=>0]);
}
    }
}
