<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class AdminController extends Controller
{
    public function test(){
        return response()-> json([
            'message'=> 'test api tai beu'
        ]);
    }


    public function loginAdmin(Request $request)
    {
        $check = Auth::guard('admin')->attempt([
            'email'     => $request->email,
            'password'  => $request->password
        ]);
        if ($check) {
            $admin = Auth::guard('admin')->user();
            return response()->json([
                'status'    => true,
                'message'   => "Đã đăng nhập thành công!",
                'token'     => $admin->createToken('token_admin')->plainTextToken,
            ]);
        } else {
            return response()->json([
                'status'    => false,
                'message'   => "Tài khoản hoặc mật khẩu không đúng!",
            ]);
        }
    }
    public function checkTokenAdmin()
    {
        $user = Auth::guard('sanctum')->user();
        if ($user && $user instanceof \App\Models\Admin) {
            return response()->json([
                'status' => true,
                'ho_ten'    => $user->ho_ten,
            ]);
        } else {
            return response()->json([
                'status' => false,
                'message' => 'Bạn cần đăng nhập hệ thống!',
            ]);
        }
    }


}
