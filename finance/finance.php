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
    <title>Farmer Finance Management</title>
    
    <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
    <style>
    body {
        font-family: 'Segoe UI', Tahoma, Geneva, Verdana, sans-serif;
        background: url('https://images.unsplash.com/photo-1500382017468-9049fed747ef?crop=entropy&cs=tinysrgb&fit=max&fm=jpg&ixid=MnwxMjA3fDB8MHxzZWFyY2h8MXx8ZmFybXxlbnwwfHwwfHw%3D&w=1080') fixed;
        background-size: cover;
        padding: 20px;
        position: relative;
    }

    body::before {
        content: '';
        position: fixed;
        top: 0;
        left: 0;
        width: 100%;
        height: 100%;
        background-image: linear-gradient(135deg, #A8E6CF, #A0C4FF);
        z-index: -1;
    }

    .container {
        max-width: 800px;
        background: rgba(255, 255, 255, 0.95);
        padding: 30px;
        border-radius: 15px;
        box-shadow: 0 10px 30px rgba(0, 0, 0, 0.1);
        margin: auto;
        text-align: center;
        transition: transform 0.3s ease;
    }

    .container:hover {
        transform: translateY(-5px);
    }

    h1 {
        color: #2c5282;
        font-size: 2.5em;
        margin-bottom: 30px;
        text-shadow: 2px 2px 4px rgba(0, 0, 0, 0.1);
        animation: fadeIn 1s ease-in;
    }

    form {
        display: flex;
        flex-direction: column;
        background: rgba(235, 244, 230, 0.7);
        padding: 25px;
        border-radius: 12px;
        box-shadow: 0 4px 6px rgba(0, 0, 0, 0.05);
    }

    input, select {
        margin: 10px 0;
        padding: 12px;
        font-size: 16px;
        border: 2px solid #a0aec0;
        border-radius: 8px;
        transition: all 0.3s ease;
    }

    input:focus, select:focus {
        border-color: #48bb78;
        box-shadow: 0 0 0 3px rgba(72, 187, 120, 0.2);
        outline: none;
    }

    .btn {
        transition: all 0.3s ease;
        font-weight: bold;
        text-transform: uppercase;
        letter-spacing: 1px;
    }

    .btn-success {
        background-color: #48bb78;
        border: none;
        padding: 12px 24px;
        margin: 10px 0;
    }

    .btn-success:hover {
        background-color: #38a169;
        transform: translateY(-2px);
        box-shadow: 0 4px 12px rgba(72, 187, 120, 0.3);
    }

    table {
        width: 100%;
        margin-top: 30px;
        border-collapse: separate;
        border-spacing: 0 8px;
        background: transparent;
    }

    th {
        background-color: #2c5282;
        color: white;
        padding: 15px;
        font-weight: 600;
    }

    td {
        background-color: rgba(255, 255, 255, 0.9);
        color: #2d3748;
        padding: 15px;
        border: none;
        transition: transform 0.2s ease;
    }

    tr:hover td {
        background-color: rgba(72, 187, 120, 0.1);
        transform: scale(1.01);
    }

    #suggestionBox {
        margin-top: 20px;
        padding: 20px;
        border-radius: 8px;
        font-style: italic;
        background: rgba(255, 255, 255, 0.9);
        border-left: 4px solid #48bb78;
        border-right: 4px solid #48bb78;
        color: #2d3748;
        font-size: 1.1em;
        animation: slideIn 0.5s ease;
    }

    @keyframes fadeIn {
        from { opacity: 0; transform: translateY(-20px); }
        to { opacity: 1; transform: translateY(0); }
    }

    @keyframes slideIn {
        from { opacity: 0; transform: translateX(-20px); }
        to { opacity: 1; transform: translateX(0); }
    }

    /* Responsive Design */
    @media (max-width: 768px) {
        .container {
            padding: 15px;
            margin: 10px;
        }

        h1 {
            font-size: 2em;
        }

        input, select, button {
            font-size: 14px;
        }
    }
</style>
</head>
<body style="background-image: linear-gradient(135deg, #A8D5BA, #F0F8FF);">
        

    <div class="container text-center">
        <h1>Farmer Finance Management</h1>

        <form id="financeForm">
            <input type="hidden" id="farmer_id" name="farmer_id" value="<?php echo $_SESSION['farmer_id']; ?>">

            <label for="amount">Amount:</label>
            <input type="number" id="amount" name="amount" required>

            <label for="reason">Reason:</label>
            <input type="text" id="reason" name="reason" required>

            <label for="type">Type:</label>
            <select id="type" name="type" required>
                <option value="earned">Earned</option>
                <option value="spent">Spent</option>
            </select>

            <label for="date">Date:</label>
            <input type="date" id="date" name="date" required>
            <div class="m-3">
                <button class="btn btn-success" type="submit">Add Transaction</button>
            </div>
        </form>
        
        <button class="btn btn-success" id="suggestionBtn">Get Financial Advice</button>

        <div id="suggestionBox"></div>

        <h2>Transaction History</h2>
        <table>
            <thead>
                <tr>
                    <th>Amount</th>
                    <th>Reason</th>
                    <th>Type</th>
                    <th>Date</th>
                </tr>
            </thead>
            <tbody id="transactionTable"></tbody>
        </table>

        <h2 id="profitLoss"></h2>
    </div>

    <script src="finance.js"></script>
</body>
</html>
