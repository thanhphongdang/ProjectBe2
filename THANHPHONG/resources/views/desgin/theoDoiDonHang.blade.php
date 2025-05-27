<!DOCTYPE html>
<html lang="vi">
<head>
    <meta charset="UTF-8">
    <title>Theo Dõi Đơn Hàng</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.0/css/all.min.css">
    <style>
        body { font-family: Arial, sans-serif; margin: 0; background-color: #f6f6f6; }
        .container { display: flex; height: 100vh; }
        .sidebar { width: 250px; background-color: #e6e6e6; padding: 20px; box-sizing: border-box; }
        .avatar { width: 70px; height: 70px; background-color: white; border-radius: 50%; margin-bottom: 10px; }
        .username { font-weight: bold; margin-bottom: 30px; }
        .menu { list-style: none; padding: 0; }
        .menu li { padding: 10px 15px; margin-bottom: 5px; cursor: pointer; }
        .menu .active { background-color: #cbaaa9; border-radius: 4px; }
        .main-content { flex: 1; background-color: white; padding: 20px; }
        .back-button { font-size: 16px; margin-bottom: 10px; cursor: pointer; }
        h1 { margin-top: 0; font-size: 28px; font-weight: bold; text-align: center; }
        .steps { display: flex; justify-content: space-between; margin: 30px 0; }
        .step { text-align: center; flex: 1; color: #555; position: relative; }
        .step:before { content: ''; display: block; margin: 0 auto 10px; width: 50px; height: 50px; background-color: #d3d3d3; border-radius: 50%; transition: background 0.3s; }
        .step:not(:last-child)::after { content: ''; position: absolute; top: 25px; right: -50%; width: 100%; height: 4px; background-color: #d3d3d3; z-index: -1; transition: background 0.3s; }
        .step span { display: block; font-size: 12px; margin-top: 5px; }
        .step.active { color: #28a745; font-weight: bold; }
        .step.active:before { background-color: #28a745; }
        .step.active:not(:last-child)::after { background-color: #28a745; }

        .order-details { display: flex; border: 1px solid #ccc; padding: 15px; background-color: #fafafa; }
        .package-name { flex: 1; border-right: 1px solid #ccc; padding-right: 15px; }
        .order-status { flex: 2; padding-left: 15px; }
        .status-header { margin-bottom: 10px; font-weight: bold; }
        .timeline { list-style: none; padding-left: 20px; position: relative; }
        .timeline::before { content: ''; position: absolute; left: 8px; top: 0; bottom: 0; width: 2px; background: #ccc; }
        .timeline li { margin-bottom: 15px; position: relative; padding-left: 20px; }
        .timeline li::before { content: ''; width: 12px; height: 12px; background: #ccc; border-radius: 50%; position: absolute; left: -6px; top: 4px; }
        .timeline a { color: #0077cc; text-decoration: none; font-weight: bold; }
    </style>
</head>
<body>
    <div class="container">
        <aside class="sidebar">
            <div class="avatar"></div>
            <p class="username">Đặng Thanh Phong</p>
            <ul class="menu">
                <li>Thông tin cá nhân</li>
                <li class="active">Đơn mua</li>
                <li>Nhắn tin với shop</li>
                <li>Mục yêu thích</li>
                <li>Đăng xuất</li>
            </ul>
        </aside>
        <main class="main-content">
            <div class="back-button">← Trở Về</div>
            <h1>Theo Dõi Đơn Hàng</h1>

            @php
                $message = match ($order->status) {
                    'Đã đặt hàng' => 'Đơn hàng của bạn đã được đặt thành công.',
                    'Đã xác nhận' => 'Đơn hàng đã được xác nhận.',
                    'Đang giao' => 'Đơn hàng đang được giao đến bạn!',
                    'Đã giao' => 'Trạng thái đơn hàng đã giao.',
                    'Đã huỷ' => 'Đơn hàng đã bị huỷ.',
                    default => 'Trạng thái đơn hàng chưa xác định.'
                };
            @endphp

            <div style="padding: 10px; background-color: #e0f3ff; border-left: 5px solid #007bff; margin-bottom: 20px;">
                📦 {{ $message }}
            </div>

            {{-- Bước theo dõi --}}
            @php
                $steps = ['Đã đặt hàng', 'Đã xác nhận', 'Đang giao', 'Đã giao', 'Đánh giá'];
                $stepTrackings = collect($steps)->map(fn($s) => $trackings->firstWhere('status', $s));
            @endphp

            <div class="steps">
                @foreach($steps as $index => $stepName)
                    @php
                        $tracking = $stepTrackings[$index];
                        $isActive = $tracking !== null;
                    @endphp
                    <div class="step {{ $isActive ? 'active' : '' }}">
                        {{ $stepName }}
                        <span>{{ $isActive ? $tracking->time->format('d/m/Y H:i') : 'Chưa hoàn thành' }}</span>
                    </div>
                @endforeach
            </div>

            <div class="order-details">
                <div class="package-name">
                    <strong>Tên kiện hàng: Ferrari-SF90</strong>
                    <p>Tên Công Ty Vận Chuyển: Ferrari.<br>Số điện thoại người giao: 0359409031.</p>
                </div>
                <div class="order-status">
                    <div class="status-header">Trạng thái: <strong>{{ $order->status === 'Đã giao' ? 'đã giao hàng' : $order->status }}</strong></div>
                    <ul class="timeline">
                        @foreach($trackings as $tracking)
                            <li>
                                <a href="#">{{ $tracking->time->format('d/m/Y H:i') }}</a> {{ $tracking->status }}<br>
                                <em>{{ $tracking->description }}</em>
                            </li>
                        @endforeach
                    </ul>
                </div>
            </div>
        </main>
    </div>
</body>
</html>