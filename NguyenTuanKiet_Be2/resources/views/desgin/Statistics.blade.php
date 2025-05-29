<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Statistics Table</title>
    <style>
        body {
            font-family: Arial, sans-serif;
            margin: 0;
            padding: 0;
            background-color: #fff;
        }

        header {
            background-color: black;
            color: white;
            padding: 10px 20px;
            display: flex;
            justify-content: space-between;
        }

        header span {
            margin: auto 0;
        }

        .container {
            padding: 20px;
            text-align: center;
        }

        .title {
            font-size: 36px;
            background-color: black;
            color: white;
            padding: 20px 0;
            margin-bottom: 20px;
        }

        .chart {
            width: 90%;
            margin: 0 auto 30px;
        }

        .products {
            display: flex;
            justify-content: center;
            gap: 20px;
            flex-wrap: wrap;
        }

        .card {
            border: 1px solid #ccc;
            padding: 10px;
            width: 150px;
            text-align: center;
            box-shadow: 2px 2px 5px rgba(0, 0, 0, 0.1);
        }

        .card img {
            width: 100%;
            height: auto;
        }

        .pagination {
            display: flex;
            justify-content: center;
            gap: 10px;
            margin: 20px 0;
        }

        .pagination button {
            padding: 5px 10px;
            background-color: #007bff;
            color: white;
            border: none;
            cursor: pointer;
        }

        .pagination .active {
            background-color: #000;
            font-weight: bold;
        }
    </style>
</head>

<body>
    <header>
        <span>🔘 Home</span>
        <span>Admin</span>
    </header>
    <div class="container">
        <h2>Biểu đồ Doanh thu theo tháng</h2>
        <canvas id="revenueChart"></canvas>
    </div>

    <!-- <script src="https://cdn.jsdelivr.net/npm/chart.js"></script>
    <script>
        const ctxx = document.getElementById('revenueChart').getContext('2d');
        const revenueChart = new Chart(ctxx, {
            type: 'bar',
            data: {
                labels: @json($months),
                datasets: [{
                    label: 'Doanh thu (VNĐ)',
                    data: @json($revenues),
                    backgroundColor: 'rgba(75, 192, 192, 0.5)',
                    borderColor: 'rgba(75, 192, 192, 1)',
                    borderWidth: 2
                }]
            },
            options: {
                responsive: true,
                scales: {
                    y: {
                        beginAtZero: true,
                        ticks: {
                            callback: function(value) {
                                return new Intl.NumberFormat('vi-VN').format(value) + ' đ';
                            }
                        }
                    }
                }
            }
        });
    </script> -->

    <div class="container">
        <div class="title">Statistics Table</div>
        <div class="chart">
            <img src="chart.png" alt="Monthly Revenue Chart" width="100%">
        </div>

        <div class="products">
            <!-- Product Cards -->
            <div class="card">
                <img src="audi.jpg" alt="Audi RS8">
                <h4>Audi RS8</h4>
                <p>Price: 100.000 USD</p>
                <p>Evaluate: ⭐⭐⭐⭐⭐</p>
                <button>View</button>
            </div>
            <div class="card">
                <img src="audi.jpg" alt="Audi RS8">
                <h4>Audi RS8</h4>
                <p>Price: 100.000 USD</p>
                <p>Evaluate: ⭐⭐⭐⭐⭐</p>
                <button>View</button>
            </div>
            <div class="card">
                <img src="audi.jpg" alt="Audi RS8">
                <h4>Audi RS8</h4>
                <p>Price: 100.000 USD</p>
                <p>Evaluate: ⭐⭐⭐⭐⭐</p>
                <button>View</button>
            </div>
            <div class="card">
                <img src="audi.jpg" alt="Audi RS8">
                <h4>Audi RS8</h4>
                <p>Price: 100.000 USD</p>
                <p>Evaluate: ⭐⭐⭐⭐⭐</p>
                <button>View</button>
            </div>
        </div>

        <div class="pagination">
            <button>BACK</button>
            <button class="active">1</button>
            <button>2</button>
            <button>3</button>
            <button>NEXT</button>
        </div>
    </div>
    <script src="https://cdn.jsdelivr.net/npm/chart.js"></script>
    <script>
        const ctx = document.getElementById('revenueChart');
        new Chart(ctx, {
            type: 'line',
            data: {
                labels: ['1', '2', '3', '4', '5', '6', '7', '8', '9', '10', '11', '12'],
                datasets: [{
                    label: 'USD',
                    data: [10000, 25000, 15000, 30000, 80000, 20000, 40000, 60000, 50000, 30000, 20000, 10000],
                    backgroundColor: 'rgba(54, 162, 235, 0.2)',
                    borderColor: 'blue',
                    fill: true,
                    tension: 0.3
                }]
            },
            options: {
                scales: {
                    y: {
                        beginAtZero: true
                    }
                }
            }
        });
    </script>
</body>

</html>