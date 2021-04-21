<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\ReviewsController;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\AboutController;
use App\Http\Controllers\ContactController;
use App\Http\Controllers\PoliciesController;
use App\Http\Controllers\PortfolioController;

Route::get('/', [
    HomeController::class, 'getHome'
]) -> name('Home');

Route::get('/about', function () {
    return view('about');
}) -> name('About');

Route::get('/portfolio', [
    PortfolioController::class, 'getPortfolio'
]) -> name('Portfolio');

Route::get('/reviews', [
    ReviewsController::class, 'getReviews'
]) -> name('Reviews');

Route::get('/contact', [
    ContactController::class, 'getContact'
]) -> name('Contact');

Route::get('/policies', [
    PoliciesController::class, 'getPolicies'
]) -> name('Policies');