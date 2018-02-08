<?php

namespace App\Http\Controllers;

use Illuminate\Support\Facades\DB;
use App\Http\Controllers\Controller;

class MeritController extends Controller
{

    /**
     * Show a list of all of the merit teams.
     *
     * @return Response
     */
     public function index() {
        $merit = DB::table('merit')->get();
        
        return view('page.merit', ['merit' => $merit]);
    }
}