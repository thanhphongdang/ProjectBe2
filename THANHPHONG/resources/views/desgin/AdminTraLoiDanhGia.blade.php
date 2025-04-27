<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="csrf-token" content="{{ csrf_token() }}">
    <title>Customer Reviews</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.5/dist/css/bootstrap.min.css" rel="stylesheet">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.5/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-SgOJa3DmI69IUzQ2PVdRZhwQ+dy64/BUtbMJw1MZ8t5HZApcHrRKUc4W0kG879m7" crossorigin="anonymous">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.5/dist/js/bootstrap.bundle.min.js"
        integrity="sha384-k6d4wzSIapyDyv1kpU366/PK5hCdSbCRGRCMv+eplOQJWyd1fbcAu9OCUj5zNLiq"
        crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/axios/dist/axios.min.js"></script>

    <meta name="csrf-token" content="{{ csrf_token() }}">
<script src="https://cdn.jsdelivr.net/npm/axios/dist/axios.min.js"></script>

    <style>
        body {
            margin: 0;
            font-family: 'Georgia', serif;
            background-color: #f9f9f9;
        }

        .sidebar {
            position: fixed;
            top: 0;
            left: 0;
            width: 200px;
            height: 100vh;
            background-color: #2c2c2c;
            color: white;
            padding: 20px 0;
        }

        .sidebar h2 {
            font-size: 24px;
            margin-bottom: 20px;
            text-align: center;
        }

        .sidebar ul {
            list-style: none;
            padding: 0;
        }

        .sidebar ul li {
            padding: 10px 20px;
            font-size: 14px;
            color: white;
            transition: background-color 0.3s;
        }

        .sidebar ul li:hover,
        .sidebar ul li.active {
            background-color: #8d4c4c;
            cursor: pointer;
        }

        .main-content {
            margin-left: 200px;
            padding: 20px;
        }

        .header {
            background-color: #2c2c2c;
            color: white;
            padding: 15px;
            text-align: center;
            font-size: 26px;
            font-weight: bold;
            margin-bottom: 20px;
        }

        .rating-summary {
            background-color: #2c2c2c;
            color: white;
            padding: 20px;
            display: flex;
            align-items: center;
            justify-content: space-between;
            font-size: 24px;
            margin-bottom: 20px;
        }

        .rating-summary .stars {
            color: gold;
            font-size: 22px;
        }

        .rating-buttons button {
            margin: 0 5px;
        }

        .review {
            display: flex;
            align-items: flex-start;
            background-color: white;
            padding: 20px;
            margin-bottom: 20px;
            border-radius: 8px;
            box-shadow: 0 2px 6px rgba(0, 0, 0, 0.1);
        }

        .review .avatar {
            width: 50px;
            height: 50px;
            background-color: #ccc;
            border-radius: 50%;
            margin-right: 20px;
        }

        .review .content {
            flex: 1;
        }

        .review .content h6 {
            font-weight: bold;
            margin: 0 0 5px 0;
        }

        .review .stars {
            color: gold;
        }

        .review textarea {
            width: 100%;
            height: 80px;
            margin-top: 10px;
            resize: none;
            font-size: 14px;
            padding: 10px;
        }

        .product-img {
            margin-top: 10px;
            width: 150px;
            height: auto;
            border-radius: 6px;
            box-shadow: 0 2px 5px rgba(0, 0, 0, 0.1);
        }

        .review .actions {
            margin-left: 20px;
            display: flex;
            flex-direction: column;
            justify-content: center;
        }

        .review .actions button {
            margin-bottom: 10px;
            width: 80px;
        }
    </style>
    <script>
        axios.defaults.headers.common['X-CSRF-TOKEN'] = document.querySelector('meta[name="csrf-token"]').getAttribute('content');
    </script>
</head>

<body>

    <div class="sidebar">
        <h2>Admin</h2>
        <ul>
            <li>Home</li>
            <li>Customer Management</li>
            <li>Vehicle Management</li>
            <li>Product Management</li>
            <li>Manage Vouchers</li>
            <li>Car Warehouse</li>
            <li>Manage Sold Cars</li>
            <li class="active">Customer Reviews</li>
            <li>Account Page</li>
            <li>Profile</li>
            <li>Logout</li>
        </ul>
    </div>

    <div class="main-content">
        <div class="header">Customer Reviews</div>

        <div class="rating-summary">
            <div>4.9 out of 5 <span class="stars">★★★★★</span></div>
            <div class="rating-buttons">
                <button class="btn btn-danger">★★★★★</button>
                <button class="btn btn-light">★★★★</button>
                <button class="btn btn-light">★★★</button>
                <button class="btn btn-light">★★</button>
                <button class="btn btn-light">★</button>
            </div>
            <div>Click to see details</div>
        </div>

        <!-- Review Item -->
        @foreach ($customerReviews as $customerReview)
        <div class="review">
            <div>
                <img src="{{ asset('img/' . $customerReview->Avatar) }}" width="90px" height="90px" class="rounded-circle border">
            </div>
            <div class="content">
                <h6>{{ $customerReview->Customer_Name }}</h6>
                <div><strong>Evaluate: </strong> <span class="stars">{{ $customerReview->Evaluate }}</span></div>
                <textarea readonly>{{ $customerReview->Description }}</textarea>
                <img src="{{ asset('img/' . $customerReview->image_Product) }}" width="200px" height="150px" style="margin-top:10px;">
        
                @if($customerReview->admin_reply)
                    <div class="mt-3 p-3 bg-light border rounded">
                        <strong>Admin Reply:</strong>
                        <p>{{ $customerReview->admin_reply }}</p>
                    </div>
                @endif
            </div>
            <div class="actions">
                <button class="btn btn-primary reply-btn" data-id="{{ $customerReview->id }}">Reply</button>
                {{-- <button class="btn btn-danger delete-btn" data-id="{{ $customerReview->id }}">Delete</button> --}}
                <button class="btn btn-danger delete-btn" href="{{ route('review.deleteCustomerReviews',["id"=>$customerReview->id]) }}">Delete</button>
                <!-- Hidden reply form -->
                <div class="reply-form mt-2" style="display:none;">
                    <textarea class="form-control mb-2 reply-text" placeholder="Enter your reply"></textarea>
                    <button class="btn btn-success btn-sm send-reply-btn" data-id="{{ $customerReview->id }}">Send</button>
                </div>
            </div>
        </div>                
        @endforeach
    </div>

    <script>
        document.addEventListener('DOMContentLoaded', function () {
            const replyUrl = "{{ route('customerReviews.reply') }}";
            // Hiện/ẩn form trả lời
            document.querySelectorAll('.reply-btn').forEach(btn => {
                btn.addEventListener('click', function () {
                    const form = this.parentElement.querySelector('.reply-form');
                    form.style.display = (form.style.display === 'none') ? 'block' : 'none';
                });
            });
        
            // Gửi reply
            document.querySelectorAll('.send-reply-btn').forEach(btn => {
                btn.addEventListener('click', async function () {
                    console.log('Send reply button clicked');
                    const reviewId = this.getAttribute('data-id');
                    const replyText = this.parentElement.querySelector('.reply-text').value.trim();
                    console.log('Review ID:', reviewId, 'Reply Text:', replyText);
        
                    if (replyText === '') {
                        alert('Reply cannot be empty!');
                        return;
                    }
        
                    try {
                        const response = await axios.post(replyUrl, {
                            id: reviewId,
                            replyText: replyText
                        });
                        console.log('Response from server:', response);
        
                        if (response.data.success) {
                            alert('Reply sent successfully!');
                            // Update the admin reply in the DOM without reloading
                            const reviewDiv = btn.closest('.review');
                            let adminReplyDiv = reviewDiv.querySelector('.admin-reply');
                            if (!adminReplyDiv) {
                                adminReplyDiv = document.createElement('div');
                                adminReplyDiv.classList.add('admin-reply', 'mt-3', 'p-3', 'bg-light', 'border', 'rounded');
                                const contentDiv = reviewDiv.querySelector('.content');
                                contentDiv.appendChild(adminReplyDiv);
                            }
                            adminReplyDiv.innerHTML = '<strong>Admin Reply:</strong><p>' + replyText + '</p>';
                            // Hide the reply form
                            const form = btn.parentElement;
                            form.style.display = 'none';
                            // Clear the textarea
                            btn.parentElement.querySelector('.reply-text').value = '';
                        } else {
                            alert('Failed to send reply.');
                        }
                    } catch (error) {
                        console.error('Error sending reply:', error);
                        alert('Error sending reply.');
                    }
                });
            });
        });
        </script>        

</body>

