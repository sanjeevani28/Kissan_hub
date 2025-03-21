
//farmer market
document.getElementById('productForm').addEventListener('submit', function(event) {
    event.preventDefault(); // Prevent the default form submission

    let name = document.getElementById('productName').value;
    let quantity = document.getElementById('productQuantity').value;
    let price = document.getElementById('productPrice').value;
    let mobileNo = document.getElementById('productMobileNo').value;

    if (name && quantity && price && mobileNo) {
        fetch('add_product.php', {
            method: 'POST',
            headers: { 'Content-Type': 'application/x-www-form-urlencoded' },
            body: `productName=${name}&productQuantity=${quantity}&productPrice=${price}&productMobileNo=${mobileNo}`
        }).then(response => response.json())
          .then(data => {
              if (data.success) {
                  alert('Product added successfully!');
                  document.getElementById('productForm').reset();
              } else {
                  alert('Error adding product: ' + data.error);
              }
          })
          .catch(error => {
              console.error('Error:', error);
              alert('Error submitting the form');
          });
    } else {
        alert('Please fill out all fields');
    }
});

  
  
  // Function to show selected form
  function showForm1(formId) {
    // Hide all sections
    let sections = document.querySelectorAll('.tab-content');
    sections.forEach(section => {
        section.style.display = 'none';
    });
  
    // Show the selected section
    let activeSection = document.getElementById(formId);
    activeSection.style.display = 'block';
  }
  
  // Function to fetch and display products for the farmer
  function fetch_farmer_Products() {
    // Assume farmer ID is 1. In a real app, this should be fetched dynamically (session or login system)
    const farmerId = 1;
  
    // Fetch products from the database for the logged-in farmer
    fetch('fetch_farmer_products.php?farmer_id=' + farmerId)
        .then(response => response.json())
        .then(data => {
            const productList = document.getElementById('productList');
            productList.innerHTML = ''; // Clear previous content
  
            if (data.success) {
                // Display products in the list
                data.products.forEach(product => {
                    productList.innerHTML += `
                        <div class="product">
                            <p>Name: ${product.name}</p>
                            <p>Quantity: ${product.quantity}</p>
                            <p>Price: ₹${product.price}</p>
                            <p>Mobile No: ${product.mobile_no}</p>
                        </div>
                    `;
                });
            } else {
                productList.innerHTML = '<p>No products found.</p>';
            }
        })
        .catch(error => {
            console.error('Error fetching products:', error);
        });
  }
  
  // Fetch products when the "See Your Products" tab is clicked
  document.getElementById('see-products-tab').addEventListener('click', function() {
    fetch_farmer_Products(); // Call the fetchProducts function when tab is clicked
    showForm('see-products'); // Show the 'See Your Products' tab content
  });

  function fetchFarmerProducts() {
    const farmerId = localStorage.getItem('farmer_id'); // Assuming farmer_id is stored in localStorage/session

    if (!farmerId) {
        alert("Farmer ID is missing. Please log in again.");
        return;
    }

    fetch("fetch_farmer_products.php")
        .then(response => response.json())
        .then(data => {
            let productContainer = document.getElementById("productList");
            productContainer.innerHTML = ""; // Clear previous data

            if (data.success) {
                data.products.forEach(product => {
                    let productCard = document.createElement("div");
                    productCard.classList.add("product-card");
                    productCard.innerHTML = `
                        <h3>${product.name}</h3>
                        <p>Quantity: ${product.quantity}</p>
                        <p>Price: ₹${product.price}</p>
                        <p>Contact: ${product.mobile_no}</p>
                    `;
                    productContainer.appendChild(productCard);
                });
            } else {
                productContainer.innerHTML = `<p>${data.message}</p>`;
            }
        })
        .catch(error => {
            console.error("Error fetching products:", error);
        });
}
  
  // Helper function to show the correct tab content
  function showForm(formId) {
    const allForms = document.querySelectorAll('.tab-content');
    allForms.forEach(form => {
        form.style.display = 'none'; // Hide all forms
    });
  
    const selectedForm = document.getElementById(formId);
    if (selectedForm) {
        selectedForm.style.display = 'block'; // Show the selected form
    }
  }
  
  // Set initial tab (show add product form)
  document.getElementById('add-product-tab').addEventListener('click', function() {
    showForm('add-product');
  });
  
  // Show the Add Product form by default on page load
  showForm1('add-product');
