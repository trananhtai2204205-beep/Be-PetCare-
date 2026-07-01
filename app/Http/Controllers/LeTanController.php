<?php

namespace App\Http\Controllers;

use App\Models\BacSi;
use App\Models\ChuyenKhoa;
use App\Models\DichVu;
use App\Models\LeTan;
use App\Models\LichLamViec;
use App\Models\LoaiThuCung;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\DB;

class LeTanController extends Controller
{
    public function loginLeTan(Request $request)
    {
        $check = Auth::guard('le_tan')->attempt([
            'email'     => $request->email,
            'password'  => $request->password
        ]);
        if ($check) {
            $letan = Auth::guard('le_tan')->user();
            if ($letan->is_active == false) {
                return response()->json([
                    'status' => false,
                    'message' => 'Tài khoản chưa được kích hoạt.Vui lòng kiểm tra email để kích hoạt',

                ]);
            }
            return response()->json([
                'status' => true,
                'message' => 'Đăng nhập thành công',
                'token' => $letan->createToken('token_le_tan')->plainTextToken,
            ]);
        } else {
            return response()->json([
                'status' => false,
                'message' => 'Tài khoản hoặc mật khẩu không đúng',
            ]);
        }
    }
    public function logoutLeTan()
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
        } else {
            return response()->json([
                'status'  => false,
                'message' => "Có lỗi xảy ra",
            ]);
        }
    }
    public function checkTokenLeTan()
    {
        $user = Auth::guard('sanctum')->user();
        if ($user && $user instanceof \App\Models\LeTan) {
            return response()->json([
                'status' => true,
                'ho_ten' => $user->ho_ten,
            ]);
        } else {
            return response()->json([
                'status' => false,
                'message' => 'Bạn cần đăng nhập hệ thống!',
            ]);
        }
    }
    public function getProfile()
    {
        $user = Auth::guard('sanctum')->user();
        if (!$user) {
            return response()->json([
                'status' => false,
                'message' => 'Không tìm thấy thông tin người dùng'
            ], 401);
        }
        $data = LeTan::where('id', $user->id)->first();
        return response()->json([
            'status' => true,
            'message' => 'Lấy dữ liệu profile thành công',
            'data' => $data
        ]);
    }
    public function getinfomation(Request $request)
    {
        // return response()->json([
        // 'request' => $request->all()
        // ]);
        $dichVu = DichVu::where('tinh_trang', 1)->get();

        $loaiThuCung = LoaiThuCung::where('tinh_trang', 1)->get();

        $chuyenKhoa = ChuyenKhoa::where('tinh_trang', 1)->get();

        $bacSi = BacSi::join('bac_si_chuyen_nganhs', 'bac_sis.id', '=', 'bac_si_chuyen_nganhs.id_bac_si')
            ->where('bac_si_chuyen_nganhs.id_chuyen_khoa', $request->id_chuyen_khoa)
            ->where('bac_sis.tinh_trang', 1)
            ->where('bac_sis.is_active', 1)
            ->where('bac_sis.is_block', 0)
            ->select('bac_sis.*')
            ->get();

        return response()->json([
            'status' => true,
            'data' => [
                'dich_vu' => $dichVu,
                'loai_thu_cung' => $loaiThuCung,
                'chuyen_khoa' => $chuyenKhoa,
                'bac_si' => $bacSi,
            ]
        ]);
    }
    public function getLichLam(Request $request)
    {
        if (!$request->id_bac_si || !$request->ngay) {
            return response()->json([
                'status' => false,
                'message' => 'Thiếu id_bac_si hoặc ngày.'
            ]);
        }

        $data = LichLamViec::where('id_bac_si', $request->id_bac_si)
            ->whereDate('ngay_lam_viec', $request->ngay)
            ->orderBy('thoi_gian_bat_dau')
            ->get();

        return response()->json([
            'status' => true,
            'data' => $data
        ]);
    }
}
