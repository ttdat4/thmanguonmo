<?php

namespace App\Http\Controllers\admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class QuanlykhachhangController extends Controller
{
    //
    public function index()
    {
        $user = DB::table('user')
        ->select(
            'user.name',
            'user.sdt',
            'user.email',
            'user.diachi',
        )
        ->get();
        return view('Admin.Content.quanlykh', [
            'user' => $user,
        ]);
    }
}
