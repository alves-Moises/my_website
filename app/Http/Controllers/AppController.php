<?php

namespace App\Http\Controllers;

use App\Models\Product;
use App\Models\ProductCategory;
use Illuminate\Foundation\Application;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\View;
use Inertia\Inertia;
use Inertia\Response as InertiaResponse;

class AppController extends Controller
{
    public function index()
    {
        return view('app', ['status' => false]);
    }

    public function notFound(): InertiaResponse
    {
        return Inertia::render('404');
    }
}
