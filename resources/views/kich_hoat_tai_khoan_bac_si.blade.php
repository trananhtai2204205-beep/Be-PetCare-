<!DOCTYPE html>
<html lang="vi">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Kích hoạt tài khoản Bác sĩ thú y</title>
    <style>
        body {
            font-family: 'Segoe UI', Tahoma, Geneva, Verdana, sans-serif;
            line-height: 1.6;
            color: #333;
            background-color: #f4f4f4;
            margin: 0;
            padding: 0;
        }
        .container {
            max-width: 600px;
            margin: 0 auto;
            background-color: #ffffff;
            border-radius: 10px;
            box-shadow: 0 4px 6px rgba(0, 0, 0, 0.1);
            overflow: hidden;
        }
        .header {
            background: linear-gradient(135deg, #2c5aa0 0%, #1e3a8a 100%);
            color: white;
            padding: 30px 20px;
            text-align: center;
        }
        .header h1 {
            margin: 0;
            font-size: 28px;
            font-weight: 300;
        }
        .header .subtitle {
            margin: 10px 0 0 0;
            font-size: 16px;
            opacity: 0.9;
        }
        .content {
            padding: 40px 30px;
        }
        .greeting {
            font-size: 18px;
            color: #2c3e50;
            margin-bottom: 20px;
        }
        .message {
            font-size: 16px;
            color: #555;
            margin-bottom: 30px;
            line-height: 1.8;
        }
        .success-box {
            background-color: #d1ecf1;
            border: 1px solid #bee5eb;
            border-radius: 8px;
            padding: 20px;
            margin: 20px 0;
            text-align: center;
        }
        .success-box .icon {
            font-size: 48px;
            color: #0c5460;
            margin-bottom: 15px;
        }
        .success-box h3 {
            color: #0c5460;
            margin: 0 0 10px 0;
            font-size: 20px;
        }
        .success-box p {
            color: #0c5460;
            margin: 0;
            font-size: 16px;
        }
        .cta-button {
            display: inline-block;
            background: linear-gradient(135deg, #28a745, #20c997);
            color: #ffffff !important;
            text-decoration: none;
            padding: 16px 36px;
            border-radius: 10px;
            font-size: 18px;
            font-weight: 700;
            letter-spacing: 0.5px;
            text-transform: uppercase;
            box-shadow: 0 4px 12px rgba(40, 167, 69, 0.35);
            transition: all 0.3s ease;
        }

        .cta-button:hover {
            background: linear-gradient(135deg, #218838, #1aa179);
            transform: translateY(-2px);
            box-shadow: 0 6px 16px rgba(40, 167, 69, 0.45);
        }
        .info-section {
            background-color: #f8f9fa;
            border-radius: 8px;
            padding: 20px;
            margin: 20px 0;
        }
        .info-section h4 {
            color: #495057;
            margin: 0 0 15px 0;
            font-size: 16px;
        }
        .info-item {
            display: flex;
            justify-content: space-between;
            padding: 8px 0;
            border-bottom: 1px solid #e9ecef;
        }
        .info-item:last-child {
            border-bottom: none;
        }
        .info-label {
            font-weight: 600;
            color: #6c757d;
        }
        .info-value {
            color: #495057;
        }
        .footer {
            background-color: #f8f9fa;
            padding: 30px;
            text-align: center;
            border-top: 1px solid #e9ecef;
        }
        .footer p {
            margin: 5px 0;
            color: #6c757d;
            font-size: 14px;
        }
        .footer .contact-info {
            margin-top: 20px;
            padding-top: 20px;
            border-top: 1px solid #e9ecef;
        }
        .footer .contact-info a {
            color: #2c5aa0;
            text-decoration: none;
        }
        .warning {
            background-color: #fff3cd;
            border: 1px solid #ffeaa7;
            border-radius: 8px;
            padding: 15px;
            margin: 20px 0;
            color: #856404;
        }
        .warning .icon {
            font-size: 20px;
            margin-right: 10px;
        }
        .features-grid {
            display: grid;
            grid-template-columns: 1fr 1fr;
            gap: 15px;
            margin: 20px 0;
        }
        .feature-item {
            background-color: #f8f9fa;
            padding: 15px;
            border-radius: 8px;
            text-align: center;
            border-left: 4px solid #2c5aa0;
        }
        .feature-item .icon {
            font-size: 24px;
            margin-bottom: 10px;
            display: block;
        }
        .feature-item h5 {
            margin: 0 0 5px 0;
            color: #2c5aa0;
            font-size: 14px;
        }
        .feature-item p {
            margin: 0;
            font-size: 12px;
            color: #6c757d;
        }
        @media (max-width: 600px) {
            .container {
                margin: 0;
                border-radius: 0;
            }
            .content {
                padding: 20px;
            }
            .header {
                padding: 20px;
            }
            .header h1 {
                font-size: 24px;
            }
            .features-grid {
                grid-template-columns: 1fr;
            }
        }
    </style>
</head>
<body>
    <div class="container">
        <!-- Header -->
        <div class="header">
            <h1>🐾 PetCare Management System</h1>
            <p class="subtitle">Kích hoạt tài khoản Bác sĩ thú y</p>
        </div>

        <!-- Content -->
        <div class="content">
            <div class="greeting">
                Xin chào Bác sĩ thú y <strong>{{ $data['ho_ten'] }}</strong>! 👋
            </div>

            <div class="success-box">
                <div class="icon">✅</div>
                <h3>Đăng ký thành công!</h3>
                <p>Tài khoản Bác sĩ thú y của bạn đã được tạo trên hệ thống PetCare.</p>
            </div>

            <div class="message">
                <p>Chào mừng bạn đến với <strong>PetCare</strong> – Hệ thống quản lý phòng khám thú cưng. Cảm ơn bạn đã đăng ký trở thành Bác sĩ thú y trên hệ thống. Để hoàn tất quá trình đăng ký và bắt đầu sử dụng các chức năng quản lý khám chữa bệnh cho thú cưng, vui lòng nhấn vào nút bên dưới để kích hoạt tài khoản.</p>
            </div>

            <div style="text-align: center;">
                <a href="{{ $data['link'] }}" class="cta-button">
                    🐾 Kích hoạt tài khoản PetCare
                </a>
            </div>

            <div class="info-section">
                <h4>📋 Thông tin tài khoản PetCare</h4>
                <div class="info-item">
                    <span class="info-label">Họ và tên:</span>
                    <span class="info-value">BS. {{ $data['ho_ten'] }}</span>
                </div>
                <div class="info-item">
                    <span class="info-label">Chuyên môn:</span>
                    <span class="info-value">{{ $data['chuyen_khoa'] ?? 'Đang cập nhật' }}</span>
                </div>
                <div class="info-item">
                    <span class="info-label">Trạng thái:</span>
                    <span class="info-value">Chưa kích hoạt</span>
                </div>
                <div class="info-item">
                    <span class="info-label">Ngày đăng ký:</span>
                    <span class="info-value">{{ date('d/m/Y H:i') }}</span>
                </div>
            </div>

            <div class="features-grid">
                <div class="feature-item">
                    <span class="icon">📅</span>
                    <h5>Quản lý lịch khám</h5>
                    <p>Sắp xếp và quản lý lịch khám thú cưng.</p>
                </div>
                <div class="feature-item">
                    <span class="icon">👥</span>
                    <h5>Quản lý thú cưng</h5>
                    <p>Theo dõi hồ sơ và lịch sử khám chữa bệnh.</p>
                </div>
                <div class="feature-item">
                    <span class="icon">📊</span>
                    <h5>Hồ sơ khám bệnh</h5>
                    <p>Lưu trữ kết quả khám và đơn điều trị.</p>
                </div>
                <div class="feature-item">
                    <span class="icon">🔔</span>
                    <h5>Lịch hẹn</h5>
                    <p>Nhận thông báo khi có lịch khám mới.</p>
                </div>
            </div>

            <div class="warning">
                <span class="icon">⚠️</span>
                <strong>Lưu ý quan trọng:</strong> Liên kết kích hoạt có hiệu lực trong vòng 24 giờ kể từ thời điểm gửi email. Nếu liên kết hết hạn, vui lòng liên hệ quản trị viên PetCare để được cấp lại liên kết kích hoạt.
            </div>

            <div class="message">
                <p>Sau khi kích hoạt tài khoản, bạn có thể:</p>
                <ul style="color: #555; margin: 15px 0;">
                    <li>Quản lý lịch khám thú cưng.</li>
                    <li>Xem danh sách khách hàng và thú cưng đã đặt lịch.</li>
                    <li>Lập hồ sơ khám, chẩn đoán và kê đơn điều trị.</li>
                    <li>Theo dõi lịch sử khám chữa bệnh của từng thú cưng.</li>
                    <li>Nhận thông báo khi có lịch khám mới. và thay đổi</li>
                    <li>Cập nhật thông tin cá nhân và chuyên môn trên hệ thống.</li>
                </ul>
            </div>
        </div>

        <!-- Footer -->
        <div class="footer">
            <p><strong>PetCare Management System</strong></p>
            <p>PetCare luôn đồng hành cùng các phòng khám thú y trong việc quản lý, chăm sóc và nâng cao chất lượng dịch vụ dành cho thú cưng.</p>

            <div class="contact-info">
                <p>📞 Hotline: 1900-PETCARE | 📧 Email: support@petcare.vn</p>
                <p>🌐 Website: <a href="#">www.petcare.vn</a></p>
                <p>📍 Địa chỉ: Đà Nẵng, Việt Nam</p>
            </div>

            <p style="margin-top: 20px; font-size: 12px; color: #adb5bd;">
                Email được gửi tự động từ hệ thống PetCare. Vui lòng không trả lời trực tiếp email này.
            </p>
        </div>
    </div>
</body>
</html>
