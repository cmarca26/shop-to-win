<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class DashboardController extends Controller
{
    public static function middleware(): array
    {
        return [
            'auth',
        ];
    }

    public function __invoke()
    {
        if (auth()->user()->email != env('ROOT_USER')) {
            return redirect()->route('dashboard');
        }
        return view('admin.dashboard');
    }
}
