<?php

namespace App\Http\Controllers;

use Illuminate\Support\Facades\DB;
use App\Http\Controllers\Controller;

class ChampionshipController extends Controller
{

    /**
     * Show a list of all of the championship teams.
     *
     * @return Response
     */
     public function index() {
        $championship = DB::table('championship')->get();
        
        return view('page.championship', ['championship' => $championship]);
    }
}