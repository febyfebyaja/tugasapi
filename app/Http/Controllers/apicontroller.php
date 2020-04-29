<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use DB;


class apicontroller extends Controller
{
    public function tugasapi()
    {
        $biodata = DB::table ('biodata')->get();

        return $biodata;

    }
}
