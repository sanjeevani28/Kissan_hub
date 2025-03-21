document.addEventListener("DOMContentLoaded", function() {
    loadTransactions();
    updateProfitLoss();
});

document.getElementById("financeForm").addEventListener("submit", function(event) {
    event.preventDefault();
    
    let formData = new FormData(this);

    fetch("add_transaction.php", {
        method: "POST",
        body: formData
    }).then(response => response.text()).then(data => {
        loadTransactions();
        updateProfitLoss();
    });

    this.reset();
});

function loadTransactions() {
    fetch("get_transactions.php")
        .then(response => response.json())
        .then(data => {
            let table = document.getElementById("transactionTable");
            table.innerHTML = "";
            data.forEach(row => {
                let tr = document.createElement("tr");
                tr.innerHTML = `<td>${row.amount}</td><td>${row.reason}</td><td>${row.type}</td><td>${row.date}</td>`;
                table.appendChild(tr);
            });
            updateProfitLoss();
        });
}



document.getElementById("suggestionBtn").addEventListener("click", function() {
    const farmerId = document.getElementById("farmer_id").value;
    const suggestionBox = document.getElementById("suggestionBox");

    suggestionBox.innerHTML = "Fetching suggestions...";
    suggestionBox.style.display = "block";

    fetch("http://127.0.0.1:5000/get_suggestions", {
        method: "POST",
        headers: { "Content-Type": "application/json" },
        body: JSON.stringify({ "farmer_id": farmerId })
    })
    .then(response => response.json())
    .then(data => suggestionBox.innerHTML = data.suggestions || "No suggestions available.")
    .catch(error => suggestionBox.innerHTML = "Error retrieving suggestions.");
});


function updateProfitLoss() {
    fetch("calculate_profit_loss.php")
        .then(response => response.text())
        .then(text => {
            document.getElementById("profitLoss").innerText = text;
        });
}
