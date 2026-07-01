<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class ChuyenKhoaSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        DB::table('chuyen_khoas')->truncate();

        DB::table('chuyen_khoas')->insert([

            [
                'ten_chuyen_khoa' => 'Nội khoa thú y',
                'mo_ta' => 'Chuyên khám, chẩn đoán và điều trị các bệnh nội khoa thường gặp ở chó, mèo và các thú cưng khác như sốt, tiêu chảy, viêm đường hô hấp, bệnh tiêu hóa, gan, thận và các bệnh truyền nhiễm.',
            ],

            [
                'ten_chuyen_khoa' => 'Ngoại khoa thú y',
                'mo_ta' => 'Thực hiện các ca phẫu thuật như triệt sản, mổ lấy dị vật, điều trị gãy xương, khâu vết thương, cắt bỏ khối u và các phẫu thuật cấp cứu cho thú cưng.',
            ],

            [
                'ten_chuyen_khoa' => 'Da liễu thú y',
                'mo_ta' => 'Khám và điều trị các bệnh về da, nấm, ve rận, bọ chét, ghẻ, dị ứng, viêm da và các bệnh liên quan đến lông, móng của thú cưng.',
            ],

            [
                'ten_chuyen_khoa' => 'Nhãn khoa thú y',
                'mo_ta' => 'Chẩn đoán và điều trị các bệnh về mắt như viêm kết mạc, đục thủy tinh thể, loét giác mạc, tăng nhãn áp và các bệnh lý về thị lực.',
            ],

            [
                'ten_chuyen_khoa' => 'Nha khoa thú y',
                'mo_ta' => 'Điều trị các bệnh về răng miệng như cao răng, viêm nướu, sâu răng, nhổ răng, vệ sinh răng miệng và chăm sóc sức khỏe răng cho thú cưng.',
            ],

            [
                'ten_chuyen_khoa' => 'Sản khoa thú y',
                'mo_ta' => 'Theo dõi quá trình mang thai, sinh sản, hỗ trợ đỡ đẻ, mổ lấy thai và chăm sóc thú mẹ cùng thú con sau sinh.',
            ],

            [
                'ten_chuyen_khoa' => 'Chẩn đoán hình ảnh',
                'mo_ta' => 'Thực hiện siêu âm, X-quang và các kỹ thuật chẩn đoán hình ảnh nhằm hỗ trợ bác sĩ xác định chính xác tình trạng bệnh của thú cưng.',
            ],

            [
                'ten_chuyen_khoa' => 'Xét nghiệm thú y',
                'mo_ta' => 'Thực hiện các xét nghiệm máu, nước tiểu, phân, ký sinh trùng, sinh hóa, huyết học và các xét nghiệm chuyên sâu phục vụ chẩn đoán bệnh.',
            ],

            [
                'ten_chuyen_khoa' => 'Tiêm phòng và phòng bệnh',
                'mo_ta' => 'Cung cấp dịch vụ tiêm vắc xin, tẩy giun, phòng chống ký sinh trùng, tư vấn lịch tiêm phòng và chăm sóc sức khỏe định kỳ cho thú cưng.',
            ],

            [
                'ten_chuyen_khoa' => 'Dinh dưỡng thú y',
                'mo_ta' => 'Tư vấn khẩu phần ăn phù hợp theo độ tuổi, giống loài, cân nặng và tình trạng sức khỏe của chó, mèo và các thú cưng khác.',
            ],

            [
                'ten_chuyen_khoa' => 'Chăm sóc và Spa thú cưng',
                'mo_ta' => 'Cung cấp các dịch vụ tắm, cắt tỉa lông, vệ sinh tai, cắt móng, chăm sóc da lông và làm đẹp cho thú cưng.',
            ],

            [
                'ten_chuyen_khoa' => 'Cấp cứu thú y',
                'mo_ta' => 'Tiếp nhận và xử lý các trường hợp cấp cứu như tai nạn, ngộ độc, sốc nhiệt, khó thở, co giật và các tình trạng nguy hiểm khác.',
            ],

            [
                'ten_chuyen_khoa' => 'Tim mạch thú y',
                'mo_ta' => 'Khám và điều trị các bệnh lý tim mạch như suy tim, bệnh van tim, rối loạn nhịp tim và tăng huyết áp ở thú cưng.',
            ],

            [
                'ten_chuyen_khoa' => 'Thần kinh thú y',
                'mo_ta' => 'Điều trị các bệnh về hệ thần kinh như động kinh, liệt, tổn thương tủy sống, thoái hóa thần kinh và các rối loạn vận động.',
            ],

            [
                'ten_chuyen_khoa' => 'Chỉnh hình thú y',
                'mo_ta' => 'Điều trị gãy xương, trật khớp, bệnh xương khớp, phục hồi chức năng và phẫu thuật chỉnh hình cho thú cưng.',
            ],

            [
                'ten_chuyen_khoa' => 'Thận - Tiết niệu',
                'mo_ta' => 'Chuyên điều trị các bệnh lý về thận, bàng quang, sỏi tiết niệu, viêm đường tiết niệu và suy thận ở chó mèo.',
            ],

            [
                'ten_chuyen_khoa' => 'Tiêu hóa',
                'mo_ta' => 'Điều trị các bệnh liên quan đến dạ dày, ruột, gan, tụy, rối loạn tiêu hóa, nôn ói và tiêu chảy ở thú cưng.',
            ],

            [
                'ten_chuyen_khoa' => 'Ký sinh trùng',
                'mo_ta' => 'Chẩn đoán và điều trị các bệnh do ký sinh trùng trong và ngoài cơ thể như giun, sán, ve, bọ chét và ghẻ.',
            ],

            [
                'ten_chuyen_khoa' => 'Chăm sóc thú cưng đặc biệt',
                'mo_ta' => 'Theo dõi, chăm sóc và điều trị cho thú cưng cao tuổi, thú cưng mắc bệnh mãn tính hoặc cần chăm sóc sau phẫu thuật.',
            ],

            [
                'ten_chuyen_khoa' => 'Khám sức khỏe tổng quát',
                'mo_ta' => 'Khám sức khỏe định kỳ, kiểm tra tổng quát, đánh giá thể trạng và tư vấn chăm sóc toàn diện giúp thú cưng phát hiện sớm các bệnh lý.',
            ],

        ]);
    }
}
