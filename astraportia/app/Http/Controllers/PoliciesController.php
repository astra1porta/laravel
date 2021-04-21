<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class PoliciesController extends Controller
{
    public function getPolicies() {
        return view('Policies');
    }
}
