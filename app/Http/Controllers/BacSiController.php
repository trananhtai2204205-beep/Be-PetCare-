<?php

namespace App\Http\Controllers;

use App\Http\Requests\BacSi\CreateTaiKhoanBacSiRequest;
use App\Mail\MasterMail;
use App\Models\BacSi;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Mail;
use Illuminate\Support\Str;

class BacSiController extends Controller
{
    public function loginBacSi(Request $request)
    {
        $check = Auth::guard('bac_si')->attempt([
            'email'     => $request->email,
            'password'  => $request->password
        ]);
        if ($check) {
            $bacSi = Auth::guard('bac_si')->user();
            if($bacSi->is_active == 0){
                return response()->json([
                    'status' => false,
                    'message' => 'Tài khoản chưa được kích hoạt. Vui lòng kiểm tra email để kích hoạt tài khoạn',
                ]);
            }
            return response()->json([
                'status' => true,
                'message' => 'Đăng nhập thành công',
                'token' => $bacSi->createToken('token_bac_si')->plainTextToken,
            ]);
        } else {
            return response()->json([
                'status' => false,
                'message' => 'Tài khoản hoặc mật khẩu không đúng'
            ]);
        }
    }

    public function logoutBacSi()
    {
        $user = Auth::guard('sanctum')->user();
        if ($user && $user->currentAccessToken()) {
            DB::table('personal_access_tokens')
                ->where('id', $user->currentAccessToken()->id)
                ->delete();
            return response()->json([
                'status'  => true,
                'message' => "Đăng xuất thành công",
            ]);
        }
        else {
            return response()->json([
                'status'  => false,
                'message' => "Có lỗi xảy ra",
            ]);
        }
    }
    public function kichHoatBacSi(Request $request)
    {
        $code = $request->ma_code;
        $check = BacSi::where('hash_active', $code)->where('is_active', 0)->first();
        if ($check) {
            $check->is_active = 1;
            $check->hash_active = null;
            $check->save();
            return response()->json([
                'status' => true,
                'message' => 'Kích hoạt tài khoản thành công.Vui lòng đăng nhập hệ thống',
            ]);
        } else {
            return response()->json([
                'status' => false,
                'message' => 'Kích hoạt tài khoản thất bại.Vui lòng kiểm tra lại mã kích hoạt',
            ]);
        }
    }
    public function registerBacSi(CreateTaiKhoanBacSiRequest $request)
    {
        $hash_active_account = Str::uuid();
        $bacSi = BacSi::create([
            'ho_ten' => $request->ho_ten,
            'email'  => $request->email,
            'password'  => bcrypt($request->password),
            'so_dien_thoai' => $request->so_dien_thoai,
            'ngay_sinh' => $request->ngay_sinh,
            'gioi_tinh' => $request->gioi_tinh,
            'dia_chi' => $request->dia_chi,
            'hash_active' => $hash_active_account,
        ]);
        //gửi email
        $tieu_de = "kích hoạt tài khoản bác sĩ";
        $data['ho_ten'] = $request->ho_ten;
        $data['link'] = "http://localhost:5173/bac-si/kich-hoat/" . $hash_active_account;
        $view = 'kich_hoat_tai_khoan_bac_si';

        Mail::to($request->email)->send(new MasterMail($tieu_de, $data, $view));
        return response()->json([
            'status'    => true,
            'message' => 'Đăng ký thành công. Vui lòng kiểm tra email để kích hoạt tài khoản',
        ]);
    }
    public function checkTokenBacSi()
    {
        $user = Auth::guard('sanctum')->user();
        if ($user && $user instanceof \App\Models\BacSi) {
            return response()->json([
                'status' => true,
                'ho_ten'    => $user->ho_ten,
                'chuc_danh' => $user->chuc_danh,
            ]);
        } else {
            return response()->json([
                'status' => false,
                'message' => 'Bạn cần đăng nhập hệ thống!',
            ]);
        }
    }


}
