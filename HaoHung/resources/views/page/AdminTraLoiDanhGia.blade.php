<!DOCTYPE html>
<html lang="en" dir="ltr">

<head>
    <meta charset="utf-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <meta name="viewport" content="width=device-width, initial-scale=1" />
    <meta name="csrf-token" content="{{ csrf_token() }}" />
    <title>Admin - Customer Reviews</title>

    <!-- Google Fonts -->
    <link href="https://fonts.googleapis.com/css2?family=Montserrat:wght@400;600&display=swap" rel="stylesheet">

    <!-- CSS Libraries -->
    <link href="assets/css/materialdesignicons.min.css" rel="stylesheet" />
    <link href="assets/plugins/simplebar/simplebar.css" rel="stylesheet" />
    <link href='assets/plugins/data-tables/datatables.bootstrap5.min.css' rel='stylesheet'>
    <link href='assets/plugins/data-tables/responsive.datatables.min.css' rel='stylesheet'>
    <link href="assets/css/style.css" rel="stylesheet" />
    <link href="assets/img/favicon.png" rel="shortcut icon" />

    <!-- Axios for Ajax -->
    <script src="https://cdn.jsdelivr.net/npm/axios/dist/axios.min.js"></script>
    <script>
        axios.defaults.headers.common['X-CSRF-TOKEN'] = document.querySelector('meta[name="csrf-token"]').getAttribute('content');
    </script>
    <style>
        body {
            font-family: 'Montserrat', sans-serif;
            background: #f8f9fa;
        }

        .header {
            font-size: 24px;
            font-weight: 600;
            margin-bottom: 20px;
        }

        .review {
            background: #fff;
            border-radius: 10px;
            padding: 20px;
            margin-bottom: 20px;
            box-shadow: 0 0 10px rgba(0, 0, 0, 0.05);
            display: flex;
            gap: 20px;
        }

        .review img.rounded-circle {
            border: 2px solid #dee2e6;
        }

        .review .content {
            flex-grow: 1;
        }

        .review textarea {
            width: 100%;
            margin-top: 10px;
            resize: none;
            border: 1px solid #ced4da;
            border-radius: 5px;
            padding: 10px;
        }

        .review .actions {
            display: flex;
            flex-direction: column;
            align-items: flex-start;
            gap: 10px;
        }

        .rating-summary {
            background: #ffffff;
            padding: 20px;
            border-radius: 10px;
            margin-bottom: 30px;
            box-shadow: 0 0 5px rgba(0, 0, 0, 0.05);
        }

        .stars {
            color: gold;
        }
    </style>
</head>

<body class="ec-header-fixed ec-sidebar-fixed ec-sidebar-dark ec-header-light" id="body">
    @include('outside.header')
    @include('outside.navbar')

    @section('content')
        <main class="main-content">
            <div class="wrapper">
                <div class="ec-page-wrapper">
                    <div class="ec-content-wrapper">
                        <div class="content">
                            <div class="header text-center">Customer Reviews</div>
                            @foreach ($customerReviews as $customerReview)
                                <div class="review">
                                    <div>
                                        <img src="{{ asset('image/' . $customerReview->Avatar) }}" width="90px" height="90px"
                                            class="rounded-circle">
                                    </div>
                                    <div class="content">
                                        <h6>{{ $customerReview->Customer_Name }}</h6>
                                        <div><strong>Evaluate: </strong><span
                                                class="stars">{{ $customerReview->Evaluate }}</span></div>
                                        <textarea readonly>{{ $customerReview->Description }}</textarea>
                                        <img src="{{ asset('image/' . $customerReview->image_Product) }}" width="200px"
                                            height="150px" class="mt-2">

                                        @if($customerReview->admin_reply)
                                            <div class="mt-3 p-3 bg-light border rounded">
                                                <strong>Admin Reply:</strong>
                                                <p>{{ $customerReview->admin_reply }}</p>
                                            </div>
                                        @endif
                                    </div>
                                    <div class="actions">
                                        <button class="btn btn-primary reply-btn"
                                            data-id="{{ $customerReview->id }}">Reply</button>
                                        <form
                                            action="{{ route('review.deleteCustomerReviews', ['id' => $customerReview->id]) }}"
                                            method="POST" onsubmit="return confirm('Bạn có chắc là muốn xóa này không?');">
                                            @csrf
                                            @method('DELETE')
                                            <button type="submit" class="btn btn-danger">Delete</button>
                                        </form>
                                        <div class="reply-form mt-2" style="display:none; width: 100%;">
                                            <textarea class="form-control mb-2 reply-text"
                                                placeholder="Enter your reply"></textarea>
                                            <button class="btn btn-success btn-sm send-reply-btn"
                                                data-id="{{ $customerReview->id }}">Send</button>
                                        </div>
                                    </div>
                                </div>
                            @endforeach
                        </div>
                    </div>
                </div>
            </div>
        </main>
    @endsection

    @include('outside.footer')

    <!-- Scripts -->
    <script src="assets/plugins/jquery/jquery-3.5.1.min.js"></script>
    <script src="assets/js/bootstrap.bundle.min.js"></script>
    <script src="assets/plugins/simplebar/simplebar.min.js"></script>
    <script src="assets/plugins/jquery-zoom/jquery.zoom.min.js"></script>
    <script src="assets/plugins/slick/slick.min.js"></script>
    <script src="assets/plugins/data-tables/jquery.datatables.min.js"></script>
    <script src="assets/plugins/data-tables/datatables.bootstrap5.min.js"></script>
    <script src="assets/plugins/data-tables/datatables.responsive.min.js"></script>
    <script src="assets/plugins/options-sidebar/optionswitcher.js"></script>
    <script src="assets/js/custom.js"></script>

    <script>
        document.addEventListener('DOMContentLoaded', function () {
            const replyUrl = "{{ route('customerReviews.reply') }}";

            document.querySelectorAll('.reply-btn').forEach(btn => {
                btn.addEventListener('click', function () {
                    const form = this.parentElement.querySelector('.reply-form');
                    form.style.display = (form.style.display === 'none') ? 'block' : 'none';
                });
            });

            document.querySelectorAll('.send-reply-btn').forEach(btn => {
                btn.addEventListener('click', async function () {
                    const reviewId = this.getAttribute('data-id');
                    const replyText = this.parentElement.querySelector('.reply-text').value.trim();

                    if (replyText === '') {
                        alert('Reply cannot be empty!');
                        return;
                    }

                    try {
                        const response = await axios.post(replyUrl, {
                            id: reviewId,
                            replyText: replyText
                        });

                        if (response.data.success) {
                            alert('Reply sent successfully!');
                            const reviewDiv = btn.closest('.review');
                            let adminReplyDiv = reviewDiv.querySelector('.admin-reply');
                            if (!adminReplyDiv) {
                                adminReplyDiv = document.createElement('div');
                                adminReplyDiv.classList.add('admin-reply', 'mt-3', 'p-3', 'bg-light', 'border', 'rounded');
                                const contentDiv = reviewDiv.querySelector('.content');
                                contentDiv.appendChild(adminReplyDiv);
                            }
                            adminReplyDiv.innerHTML = '<strong>Admin Reply:</strong><p>' + replyText + '</p>';
                            const form = btn.parentElement;
                            form.style.display = 'none';
                            btn.parentElement.querySelector('.reply-text').value = '';
                        } else {
                            alert('Failed to send reply.');
                        }
                    } catch (error) {
                        alert('Error sending reply.');
                    }
                });
            });
        });
    </script>
</body>

</html>