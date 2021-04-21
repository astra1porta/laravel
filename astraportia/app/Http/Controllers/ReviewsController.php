<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class ReviewsController extends Controller
{
    public function getReviews() {
        return view('Reviews');
    }
}
