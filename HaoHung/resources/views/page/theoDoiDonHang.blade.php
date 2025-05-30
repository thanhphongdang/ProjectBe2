<!DOCTYPE html>
<html lang="vi">

<head>
    <meta charset="utf-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1" />
    <title>Theo Dõi Đơn Hàng</title>

    <!-- Google Fonts -->
    <link href="https://fonts.googleapis.com/css2?family=Montserrat&family=Poppins&display=swap" rel="stylesheet">

    <style>
        body {
            font-family: 'Poppins', sans-serif;
            background-color: #f4f6f9;
            margin: 0;
            padding: 20px;
            color: #333;
        }

        .container {
            max-width: 800px;
            margin: auto;
            background: white;
            padding: 30px;
            border-radius: 12px;
            box-shadow: 0 4px 20px rgba(0, 0, 0, 0.05);
        }

        h1 {
            text-align: center;
            margin-bottom: 30px;
            color: #007bff;
        }

        .status-message {
            padding: 15px;
            background-color: #e7f3ff;
            border-left: 5px solid #007bff;
            margin-bottom: 30px;
            font-size: 16px;
        }

        .steps {
            display: flex;
            justify-content: space-between;
            margin-bottom: 30px;
            gap: 10px;
        }

        .step {
            text-align: center;
            flex: 1;
            padding: 10px 5px;
            border-bottom: 3px solid #ccc;
            font-size: 14px;
        }

        .step.active {
            font-weight: 600;
            border-color: #28a745;
            color: #28a745;
        }

        .step span {
            display: block;
            font-size: 12px;
            margin-top: 4px;
            color: #666;
        }

        .order-details {
            margin-top: 30px;
        }

        .package-name {
            margin-bottom: 20px;
        }

        .package-name strong {
            font-size: 16px;
            display: block;
            margin-bottom: 5px;
        }

        .order-status {
            background: #fafafa;
            padding: 20px;
            border-radius: 8px;
            border: 1px solid #ddd;
        }

        .status-header {
            font-weight: bold;
            margin-bottom: 15px;
            color: #333;
        }

        .timeline {
            list-style: none;
            padding-left: 0;
        }

        .timeline li {
            margin-bottom: 15px;
            position: relative;
            padding-left: 20px;
            line-height: 1.5;
        }

        .timeline li::before {
            content: "●";
            position: absolute;
            left: 0;
            color: #28a745;
            font-size: 14px;
            top: 0;
        }

        .timeline li a {
            color: #007bff;
            font-weight: 500;
        }

        .timeline em {
            font-style: italic;
            color: #666;
            display: block;margin-top: 4px;
        }
    </style>
</head>

<body>
    <div class="container">
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

        <div class="status-message">
            📦 {{ $message }}
        </div>

        {{-- Bước theo dõi --}}
        @php
            $steps = ['Đã đặt hàng', 'Đã xác nhận', 'Đang giao', 'Đã giao', 'Đánh giá'];
            $trackings = collect($trackings);
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
                <p>Công ty vận chuyển: Ferrari<br>SĐT người giao: 0359409031</p>
            </div>

            <div class="order-status">
                <div class="status-header">
                    Trạng thái: <strong>{{ $order->status === 'Đã giao' ? 'Đã giao hàng' : $order->status }}</strong>
                </div>

                <ul class="timeline">
                    @foreach($trackings as $tracking)
                        <li>
                            <a href="#">{{ $tracking->time->format('d/m/Y H:i') }}</a> - {{ $tracking->status }}
                            <em>{{ $tracking->description }}</em>
                        </li>
                    @endforeach
                </ul>
            </div>
        </div>
    </div>
</body>

</html>