<?php
session_start();
if (!isset($_SESSION['farmer_id'])) {
    header("Location: login.php"); // Redirect to login page if not logged in
    exit();
}
?>


<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Farmer's Page</title>
    <link rel="stylesheet" href="b2c.css">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css" integrity="sha384-JcKb8q3iqJ61gNV9KGb8thSsNjpSL0n8PARn9HuZOnIxN0hoP+VmmDGMN5t9UJ0Z" crossorigin="anonymous">
    <script>
    localStorage.setItem("farmer_id", "<?php echo $_SESSION['farmer_id']; ?>");
    </script>
    <style>
            body {
    font-family: 'Segoe UI', Tahoma, Geneva, Verdana, sans-serif;
    background: url('https://images.unsplash.com/photo-1500382017468-9049fed747ef?crop=entropy&cs=tinysrgb&fit=max&fm=jpg&ixid=MnwxMjA3fDB8MHxzZWFyY2h8MXx8ZmFybXxlbnwwfHwwfHw%3D&w=1080') fixed;
    background-size: cover;
    min-height: 100vh;
    position: relative;
}

body::before {
    content: '';
    position: fixed;
    top: 0;
    left: 0;
    width: 100%;
    height: 100%;
    background: linear-gradient(135deg, rgba(168, 230, 207, 0.9), rgba(160, 196, 255, 0.9));
    z-index: -1;
}



.navbar-nav .nav-link:hover {
    background: rgba(72, 187, 120, 0.1);
    transform: translateY(-2px);
}

.container {
    background: rgba(255, 255, 255, 0.95);
    padding: 2rem;
    border-radius: 15px;
    box-shadow: 0 10px 30px rgba(0, 0, 0, 0.1);
    margin-top: 2rem;
    animation: fadeIn 0.8s ease-out;
}

h2 {
    color: #2c5282;
    margin-bottom: 1.5rem;
    font-weight: 700;
    text-align: center;
    animation: fadeInUp 0.8s ease-out;
}

.nav-tabs {
    border-bottom: 2px solid #e2e8f0;
    margin-bottom: 2rem;
}

.nav-tabs .nav-link {
    color: #4a5568;
    font-weight: 600;
    border: none;
    padding: 1rem 2rem;
    transition: all 0.3s ease;
}

.nav-tabs .nav-link.active {
    color: #48bb78;
    border-bottom: 3px solid #48bb78;
    background: transparent;
}

.tab-content {
    padding: 2rem;
    background: rgba(255, 255, 255, 0.8);
    border-radius: 10px;
    animation: fadeIn 0.5s ease-out;
}

#productForm {
    display: flex;
    flex-wrap: wrap;
    gap: 1rem;
    justify-content: center;
}

#productForm input {
    flex: 1 1 200px;
    padding: 0.8rem;
    border: 2px solid #e2e8f0;
    border-radius: 8px;
    transition: all 0.3s ease;
}

#productForm input:focus {
    border-color: #48bb78;
    box-shadow: 0 0 0 3px rgba(72, 187, 120, 0.2);
    outline: none;
}

button {
    background: #48bb78;
    color: white;
    border: none;
    padding: 0.8rem 2rem;
    border-radius: 8px;
    cursor: pointer;
    font-weight: 600;
    transition: all 0.3s ease;
}

button:hover {
    background: #38a169;
    transform: translateY(-2px);
    box-shadow: 0 4px 12px rgba(72, 187, 120, 0.3);
}

    #productList {
        display: grid;
        grid-template-columns: repeat(auto-fit, minmax(280px, 1fr));
        gap: 2rem;
        padding: 1.5rem;
        animation: fadeIn 0.6s ease-out;
    }

    .product-card {
        background: linear-gradient(145deg, #ffffff, #f0f0f0);
        border-radius: 15px;
        padding: 1.5rem;
        position: relative;
        overflow: hidden;
        box-shadow: 0 5px 15px rgba(0, 0, 0, 0.1);
        transition: all 0.3s ease;
        border: 1px solid rgba(255, 255, 255, 0.2);
    }

    .product-card::before {
        content: '';
        position: absolute;
        top: 0;
        left: 0;
        width: 100%;
        height: 5px;
        background: linear-gradient(90deg, #48bb78, #38b2ac);
    }

    .product-card:hover {
        transform: translateY(-5px) scale(1.02);
        box-shadow: 0 8px 25px rgba(0, 0, 0, 0.15);
    }

    .product-card h4 {
        color: #2d3748;
        font-size: 1.25rem;
        margin-bottom: 1rem;
        font-weight: 600;
    }

    .product-card p {
        color: #4a5568;
        margin: 0.5rem 0;
        font-size: 1rem;
        display: flex;
        justify-content: space-between;
        align-items: center;
    }

    .product-card .price {
        color: #48bb78;
        font-weight: 600;
        font-size: 1.1rem;
    }

    .product-card .quantity {
        background: rgba(72, 187, 120, 0.1);
        padding: 0.3rem 0.8rem;
        border-radius: 15px;
        color: #2f855a;
        font-size: 0.9rem;
    }

    .product-card .contact {
        margin-top: 1rem;
        padding-top: 1rem;
        border-top: 1px solid #e2e8f0;
    }

    .product-card .delete-btn {
        background: #fc8181;
        color: white;
        border: none;
        padding: 0.5rem 1rem;
        border-radius: 8px;
        margin-top: 1rem;
        width: 100%;
        transition: all 0.3s ease;
    }

    .product-card .delete-btn:hover {
        background: #f56565;
        transform: translateY(-2px);
    }

    @keyframes cardPopIn {
        from {
            opacity: 0;
            transform: scale(0.95) translateY(10px);
        }
        to {
            opacity: 1;
            transform: scale(1) translateY(0);
        }
    }

    .product-card {
        animation: cardPopIn 0.5s ease-out forwards;
    }

    /* Add different background colors for alternating cards */
    .product-card:nth-child(4n+1) {
        background: linear-gradient(145deg, #ffffff, #f0f7ff);
    }

    .product-card:nth-child(4n+2) {
        background: linear-gradient(145deg, #ffffff, #f0fff4);
    }

    .product-card:nth-child(4n+3) {
        background: linear-gradient(145deg, #ffffff, #fff5f5);
    }

    .product-card:nth-child(4n+4) {
        background: linear-gradient(145deg, #ffffff, #faf5ff);
    }

    @media (max-width: 768px) {
        #productList {
            grid-template-columns: repeat(auto-fit, minmax(250px, 1fr));
            gap: 1rem;
            padding: 1rem;
        }

        .product-card {
            padding: 1rem;
        }
    }

@keyframes slideDown {
    from {
        transform: translateY(-100%);
        opacity: 0;
    }
    to {
        transform: translateY(0);
        opacity: 1;
    }
}

@keyframes fadeIn {
    from {
        opacity: 0;
    }
    to {
        opacity: 1;
    }
}

@keyframes fadeInUp {
    from {
        opacity: 0;
        transform: translateY(20px);
    }
    to {
        opacity: 1;
        transform: translateY(0);
    }
}

/* Responsive Design */
@media (max-width: 768px) {
    .container {
        padding: 1rem;
        margin-top: 1rem;
    }

    #productForm {
        flex-direction: column;
    }

    #productForm input {
        width: 100%;
    }

    .nav-tabs .nav-link {
        padding: 0.5rem 1rem;
    }
}
    </style>
</head>
<body>
        <nav class="navbar navbar-expand-lg navbar-light bg-transperent">
            <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNavAltMarkup" aria-controls="navbarNavAltMarkup" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
            </button>
            <div class="collapse navbar-collapse" id="navbarNavAltMarkup">
                <div class="navbar-nav text-dark ml-auto">
                    <a class="nav-link active text-dark" href="farmer.php">Home <span class="sr-only">(current)</span></a>
                </div>
            </div>
        </nav>

    <div class="container">
        <h2>Farmer's Dashboard</h2>

        <!-- Navigation Tabs -->
        <div id="productNav">
            <ul class="nav nav-tabs">
                <li class="nav-item">
                    <a class="nav-link active" id="add-product-tab" href="#add-product" onclick="showForm('add-product')">Add Product</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" id="see-products-tab" href="#see-products" onclick="showForm('see-products')">See Your Products</a>
                </li>
            </ul>
        </div>

        <!-- Add Product Form -->
        <div id="add-product" class="tab-content">
            <h3>Add Product</h3>
            <form id="productForm" method="post" action="add_product.php">
                <input type="hidden" id="farmer_id" name="farmer_id" value="<?php echo $_SESSION['farmer_id'];  ?>" class="m-2">
                <input type="text" id="productName" name="productName" placeholder="Product Name" required class="m-2">
                <input type="text" id="productQuantity" name="productQuantity" placeholder="Quantity" required class="m-2">
                <input type="number" id="productPrice" name="productPrice" placeholder="Price" required class="m-2">
                <input type="text" id="productMobileNo" name="productMobileNo" placeholder="Mobile No." required class="m-2">
                <button type="submit">Add Product</button>
            </form>
        </div>

        <!-- See Your Products Section -->
        <div id="see-products" class="tab-content">
            <h3>Your Products</h3>
            <div id="productList"></div>
        </div>

    </div>

    <script src="b2c.js"></script>
</body>
</html>
