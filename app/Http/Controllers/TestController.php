<?php

namespace App\Http\Controllers;
use DB;

use Illuminate\Http\Request;

class TestController extends Controller
{
    public function index () {

        return DB::table('divisions')->get();
    }
}
