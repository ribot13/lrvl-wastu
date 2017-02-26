<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class DashboardController extends Controller {

    function index() {
        $data['breadcrumbs'] = [];
        return view('dashboard.index',$data );
    }

}
