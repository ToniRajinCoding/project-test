<?php

namespace App\Http\Controller;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB; 

class Tutorial extends Controller{

	public function show(Request $request){

		$data = DB::select("select * from user");

		print_r($data");
	}

}
