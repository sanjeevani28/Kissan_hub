function fetchProducts() {
    fetch('fetch_products.php')
        .then(response => {
            // Check if the response is ok
            if (!response.ok) {
                console.error('Network response was not ok');
                throw new Error('Network response was not ok');
            }
            return response.json();
        })
        .then(data => {
            console.log('Data fetched:', data);
            let productList = document.getElementById('productList');
            productList.innerHTML = '';

            if (data.products && data.products.length > 0) {
                data.products.forEach(product => {
                    let productDiv = document.createElement('div');
                    productDiv.classList.add('col-md-4', 'mb-4');
                    productDiv.innerHTML = `
                        <div class="card shadow-sm border-light rounded">
                            <div class="card-body">
                                <h5 class="card-title">${product.name}</h5>
                                <p class="card-text">Price: $${product.price}</p>
                                <p class="card-text">Quantity: ${product.quantity}</p>
                                <p class="card-text">Contact: ${product.mobile_no}</p>
                                <button class="btn btn-success btn-block">Add to Cart</button>
                            </div>
                        </div>
                    `;
                    productList.appendChild(productDiv);
                });
            } else {
                productList.innerHTML = '<p>No products available.</p>';
            }
        })
        .catch(error => {
            console.error('Error fetching products:', error);
        });
}

window.onload = fetchProducts;
