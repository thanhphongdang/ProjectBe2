<!DOCTYPE html>
<html lang="en" dir="ltr">

<head>
    <meta charset="utf-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <meta name="viewport" content="width=device-width, initial-scale=1" />
    <meta name="description" content="Andshop - Admin Dashboard HTML Template.">
    <title>ADMIN</title>

    <!-- Google Fonts -->
    <link href="https://fonts.googleapis.com/css2?family=Montserrat&family=Poppins&family=Roboto&display=swap"
        rel="stylesheet">
    <link href="{{ asset('assets/css/materialdesignicons.min.css') }}" rel="stylesheet" />
    <link href="{{ asset('assets/plugins/simplebar/simplebar.css') }}" rel="stylesheet" />
    <link href="{{ asset('assets/plugins/data-tables/datatables.bootstrap5.min.css') }}" rel="stylesheet">
    <link href="{{ asset('assets/plugins/data-tables/responsive.datatables.min.css') }}" rel="stylesheet">
    <link id="style.css" rel="stylesheet" href="{{ asset('assets/css/style.css') }}" />
    <link href="{{ asset('assets/img/favicon.png') }}" rel="shortcut icon" />

    <style>
        .steps {
            display: flex;
            justify-content: space-between;
            margin: 30px 0;
            gap: 10px;
        }

        .step {
            text-align: center;
            flex: 1;
            padding: 10px;
            border-bottom: 3px solid #ccc;
        }

        .step.active {
            font-weight: bold;
            border-color: #28a745;
            color: #28a745;
        }

        .timeline {
            list-style: none;
            padding-left: 0;
        }

        .timeline li {
            margin-bottom: 10px;
            position: relative;
            padding-left: 20px;
        }

        .timeline li:before {
            content: "•";
            position: absolute;
            left: 0;
            color: #28a745;
        }
    </style>
</head>

<body class="ec-header-fixed ec-sidebar-fixed ec-sidebar-dark ec-header-light" id="body">
    @include('outside.header')
    @include('outside.navbar')

    <!-- Main Content -->
    @section('content')
        <main class="main-content">
            <div class="wrapper">
                <div class="ec-page-wrapper">
                    <div class="ec-content-wrapper">
                        <div class="content">
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

                            <div
                                style="padding: 10px; background-color: #e0f3ff; border-left: 5px solid #007bff; margin-bottom: 20px;">
                                📦 {{ $message }}
                            </div>

                            {{-- Bước theo dõi --}}
                            @php
                                $steps = ['Đã đặt hàng', 'Đã xác nhận', 'Đang giao', 'Đã giao', 'Đánh giá'];
                                $trackings = collect($trackings); // đảm bảo là collection

                                $stepTrackings = collect($steps)->map(function ($s) use ($trackings) {
                                    return $trackings->firstWhere('status', $s);
                                });
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
                                    <div class="status-header">Trạng thái:
                                        <strong>{{ $order->status === 'Đã giao' ? 'đã giao hàng' : $order->status }}</strong>
                                    </div>
                                    <ul class="timeline">
                                        @foreach($trackings as $tracking)
                                            <li>
                                                <a href="#">{{ $tracking->time->format('d/m/Y H:i') }}</a>
                                                {{ $tracking->status }}<br>
                                                <em>{{ $tracking->description }}</em>
                                            </li>
                                        @endforeach
                                    </ul>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </main>
    @endsection

    @include('outside.footer')

    <!-- JS -->
    <script src="{{ asset('assets/plugins/jquery/jquery-3.5.1.min.js') }}"></script>
    <script src="{{ asset('assets/js/bootstrap.bundle.min.js') }}"></script>
    <script src="{{ asset('assets/plugins/simplebar/simplebar.min.js') }}"></script>
    <script src="{{ asset('assets/plugins/jquery-zoom/jquery.zoom.min.js') }}"></script>
    <script src="{{ asset('assets/plugins/slick/slick.min.js') }}"></script>
    <script src="{{ asset('assets/plugins/data-tables/jquery.datatables.min.js') }}"></script>
    <script src="{{ asset('assets/plugins/data-tables/datatables.bootstrap5.min.js') }}"></script>
    <script src="{{ asset('assets/plugins/data-tables/datatables.responsive.min.js') }}"></script>
    <script src="{{ asset('assets/plugins/options-sidebar/optionswitcher.js') }}"></script>
    <script src="{{ asset('assets/js/custom.js') }}"></script>
</body>

</html>