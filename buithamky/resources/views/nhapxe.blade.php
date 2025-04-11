<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Vehicle Management</title>
</head>
<style>
    body {
    font-family: Arial, sans-serif;
    margin: 0;
    padding: 0;
    display: flex;
    width: 100vw;
}

.container {
    display: flex;
}

.sidebar {
    width: 200px;
    background-color: #333;
    color: white;
    padding: 20px;
    margin: 10px;
    height:630px;
}

.sidebar ul {
    list-style: none;
    padding: 0;
}

.sidebar ul li {
    padding: 10px 15px;
    cursor: pointer;
    
}

.main-content {
    padding: 20px;
    flex-grow: 1;
}

.tab-buttons {
    margin-bottom: 20px;
}

.tab-button {
    margin-right: 10px;
    padding: 10px 15px;
    border: none;
    background-color: #ccc;
    cursor: pointer;
}

.tab-button.active {
    background-color: #ccc;
}

.car-list table {
    width: 100%;
    border-collapse: collapse;
}

.car-list th, .car-list td {
    border: 1px solid #ccc;
    padding: 10px;
    text-align: left;
}

.add-button {
    padding: 10px 50px;
    background-color: #007BFF;
    color: white;
    border: none;
    cursor: pointer;
    margin: 10px 500px;
}
.container .nav h2{
    left: 20px;
}
</style>
<body>
    <div class="container">
        <nav class="sidebar">
            <h2>Admin</h2>
            <ul>
                <li>Home</li>
                <li>Customer Management</li>
                <li>Vehicle Management</li>
                <li>Product Management</li>
                <li>Manage Vouchers</li>
                <li>Car Warehouse</li>
                <li>Manage Sold Cars</li>
                <li>Customer Reviews</li>
                <li>Account Page</li>
                <li>Profile</li>
                <li>Logout</li>
            </ul>
        </nav>
        <main class="main-content">
            <h1>Vehicle Management</h1>
            <div class="tab-buttons">
                <button class="tab-button active">DOMESTIC CARS</button>
                <button class="tab-button">FOREIGN CARS</button>
            </div>
            <div class="car-list">
                <table>
                    
                    <tr>
                        <th>Name</th>
                        <th>Price</th>
                        <th>Car Company</th>
                        <th>Type</th>
                    </tr>
                    @foreach($customers as $customer)
                    <tr>
                        <td>{{$customer->Name}}</td>
                        <td>Price</td>
                        <td>Car Company</td>
                        <td>DOMESTIC CARS</td>
                    </tr>
                    @endforeach
                    <tr>
                        <td>Name</td>
                        <td>Price</td>
                        <td>Car Company</td>
                        <td>DOMESTIC CARS</td>
                    </tr>
                    <tr>
                        <td>Name</td>
                        <td>Price</td>
                        <td>Car Company</td>
                        <td>DOMESTIC CARS</td>
                    </tr>
                </table>
            </div>
            <button class="add-button">Add</button>
        </main>
    </div>
</body>
</html>