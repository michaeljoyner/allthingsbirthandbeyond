<?php

namespace App\Http\Controllers\Admin;

use App\Quotes\Quote;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

class DashboardController extends Controller
{
    public function dashboard(Quote $quote)
    {
        return view('admin.dashboard', ['quote' => $quote->fetch([])]);
    }
}
