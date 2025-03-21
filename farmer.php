
<!DOCTYPE html>
<html>

<head>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.7.2/css/all.min.css">
    <script src="https://cdn.jsdelivr.net/npm/get-google-fonts@1.2.2/main.min.js"></script>
    <link rel="stylesheet" href="style.css">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css" integrity="sha384-JcKb8q3iqJ61gNV9KGb8thSsNjpSL0n8PARn9HuZOnIxN0hoP+VmmDGMN5t9UJ0Z" crossorigin="anonymous">
    <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js" integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.1/dist/umd/popper.min.js" integrity="sha384-9/reFTGAW83EW2RDu2S0VKaIzap3H66lZH81PoYlFhbGU+6BZp6G7niu735Sk7lN" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js" integrity="sha384-B4gt1jrGC7Jh4AgTPSdUtOBvfO8shuf57BaghqFfPlYxofvL8/KUEfYiJOMMV+rV" crossorigin="anonymous"></script>
</head>
<body>
<div id="homepage">
    <nav class="navbar navbar-expand-lg navbar-dark bg-info fixed-top">
        <a class="navbar-brand" href="#">
            <img src="logo.png"  style="width: 15%;" />
        </a>
        <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNavAltMarkup" aria-controls="navbarNavAltMarkup" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
        </button>
        <div class="collapse navbar-collapse" id="navbarNavAltMarkup">
            <div class="navbar-nav text-dark ml-auto">
                <a class="nav-link active text-light" href="#"><h6>Home</h6> <span class="sr-only">(current)</span></a>
                <a class="nav-link text-light" href="#soilsection"><h6>Crop Prediction</h6></a>
                <a class="nav-link text-light" href="#financesection"><h6>Finance Management</h6></a>
                <a class="nav-link text-light" href="#moisturesection"><h6>M & H Tracker</h6></a>
                <a class="nav-link text-light" href="#b2csection"><h6>B2C</h6></a>
                <a class="nav-link text-light" href="#newssection"><h6>News Portal</h6></a>
            </div>
        </div>
    </nav>


    <div id="SectionHOMEPAGE" class="home-page d-flex flex-column justify-content-center text-center">
        <div class="container">
            <div class="row">
                <div class="col-12">
                    <h1 class="banner-heading mt-5 mb-3">Welcome to <br> Kissan-Hub</h1>
                </div>
            </div>
        </div>
    </div>

    <div id="soilsection" class="box soil-section">
        <div class="container">
            <div class="row">
                <div class="col-12 col-md-5 order-2 order-md-3 mt-3 mb-3 d-flex flex-column justify-content-center">
                    <img src="https://drive.google.com/thumbnail?id=1NxNYv-MWKnqNz2-vMriGoyvRVU2f9O_q" class="w-100" />
                </div>

                <div class="col-12 col-md-5 order-3 order-md-1 mt-3 mb-4 d-flex flex-column justify-content-center">
                    <div>
                        <h1 class="soil-section-heading">Crop Prediction Tool</h1>
                        <p class="soil-section-description">Fill the details and get published crop suggestion.
                        </p>
                        <a href="http://127.0.0.1:5005"><button class="btn btn-dark shadow">Get Started</button></a>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <div id="financesection" class="box  finance-section mt-4">
        <div class="container">
            <div class="row">
                <div class="col-12 col-md-5 mt-5 mb-3 d-flex flex-column justify-content-center">
                    <img src="https://drive.google.com/thumbnail?id=1hBjEKIEn_byFaFmZJkR1uJHf_ALVgNgj" class="w-100" />
                </div>

                <div class="col-12 col-md-5 mt-3 mb-4 d-flex flex-column justify-content-center">
                    <div>
                        <h1 class="soil-section-heading">Finance Management</h1>
                        <p class="soil-section-description">Track every expense, calculate profit and suggests ways to extend shelf life.
                        </p>
                        <a href="finance\finance.php"><button class="btn btn-dark shadow">Get Started</button></a>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <div id="b2csection" class="box b2c-section mt-4">
        <div class="container">
            <div class="row">
                <div class="col-12 col-md-5 order-2 order-md-3 mt-5 mb-3 d-flex flex-column justify-content-center">
                    <img src="https://drive.google.com/thumbnail?id=1axMbr-ilvNh3RcDZJ4opNJmI7YIvJuLX" class="w-100" />
                </div>

                <div class="col-12 col-md-5 order-3 order-md-1 mt-5 mb-4 d-flex flex-column justify-content-center">
                    <div>
                        <h1 class="soil-section-heading">Buisiness to Customer</h1>
                        <p class="soil-section-description">Connect with your customer and sell your products.
                        </p>
                        <a href="b2c.php"><button class="btn btn-dark shadow">Get Started</button></a>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <div id="moisturesection" class="box moisture-section mt-4 mb-5">
        <div class="container">
            <div class="row">
                <div class="col-12 col-md-5 mt-5 mb-3 d-flex flex-column justify-content-center">
                    <img src="https://drive.google.com/thumbnail?id=1rsVgPyfP49rwaoRcg4C7QYW4xeaAzQNI" class="w-100" />
                </div>

                <div class="col-12 col-md-5 mt-5 mb-4 d-flex flex-column justify-content-center">
                    <div>
                        <h1 class="soil-section-heading">Live Moisture and Humidity Tracker</h1>
                        <p class="soil-section-description">Track the moisture level of your soil and humidity.
                        </p>
                        <a href="http://192.168.8.248/"><button class="btn btn-dark shadow">Get Started</button></a>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <div id="newssection" class="mt-5 mb-5">
        <h1 class="soil-section-heading mt-5 text-center">Get linked with latest updates</h1>
        <div class="text-center">
            <a href="news\news.html"><button class="btn btn-dark shadow">Get Started</button></a>
        </div>
        <div class="stock-ticker ">
            <ul>
                <li>
                    <div class="mt-3 agri-card shadow">
                        <img src="https://drive.google.com/thumbnail?id=1z3X6Ie0TNowXr3p1bU0lXg5SY0C-h6ef" class="w-100" />
                        <div class="pb-3 pt-1">
                            <h1 class="agri-card-heading">PM-KISAN</h1>
                            <p class="agri-card-description m-1">A central sector scheme that provides financial 
                                assistance to small and marginal farmers.
                            </p>
                        </div>
                    </div>        
                </li>

                <li>
                    <div class="mt-3 agri-card shadow">
                        <img src="https://drive.google.com/thumbnail?id=1bzclyfHX-_6RYuBiX1nQxaLf9GNX7wTX" class="w-100" />
                        <div class="pb-3 pt-1">
                            <h1 class="agri-card-heading">PM-KMY</h1>
                            <p class="agri-card-description m-1">A central sector scheme that provides financial 
                                assistance to small and marginal farmers.
                            </p>
                        </div>
                    </div>        
                </li>

                <li>
                    <div class="mt-3 agri-card shadow">
                        <img src="https://drive.google.com/thumbnail?id=18NVwoOse73BUS9WJc1zrNKGc1v9uKTyb" class="w-100" />
                        <div class="pb-3 pt-1">
                            <h1 class="agri-card-heading">Agriculture infrastructure fund</h1>
                            <p class="agri-card-description m-1">A scheme to support the aggriculture infrastructure.
                            </p>
                        </div>
                    </div>        
                </li>

                <li>
                    <div class="mt-3 agri-card shadow">
                        <img src="https://drive.google.com/thumbnail?id=1xH9F3m6XbEl_IHgmifXyhgQXf9C5u4i1" class="w-100" />
                        <div class="pb-3 pt-1">
                            <h1 class="agri-card-heading">MISS</h1>
                            <p class="agri-card-description m-1">The interest subvention scheme (ISS)
                                provides concessional short term agri-loans to the farmers.
                            </p>
                        </div>
                    </div>        
                </li>
            </ul>

            <ul>
                <li>
                    <div class="mt-3 agri-card shadow">
                        <img src="https://drive.google.com/thumbnail?id=1z3X6Ie0TNowXr3p1bU0lXg5SY0C-h6ef" class="w-100" />
                        <div class="pb-3 pt-1">
                            <h1 class="agri-card-heading">PM-KISAN</h1>
                            <p class="agri-card-description m-1">A central sector scheme that provides financial 
                                assistance to small and marginal farmers.
                            </p>
                        </div>
                    </div>        
                </li>

                <li>
                    <div class="mt-3 agri-card shadow">
                        <img src="https://drive.google.com/thumbnail?id=1bzclyfHX-_6RYuBiX1nQxaLf9GNX7wTX" class="w-100" />
                        <div class="pb-3 pt-1">
                            <h1 class="agri-card-heading">PM-KMY</h1>
                            <p class="agri-card-description m-1">A central sector scheme that provides financial 
                                assistance to small and marginal farmers.
                            </p>
                        </div>
                    </div>        
                </li>

                <li>
                    <div class="mt-3 agri-card shadow">
                        <img src="https://drive.google.com/thumbnail?id=18NVwoOse73BUS9WJc1zrNKGc1v9uKTyb" class="w-100" />
                        <div class="pb-3 pt-1">
                            <h1 class="agri-card-heading">Agriculture infrastructure fund</h1>
                            <p class="agri-card-description m-1">A scheme to support the aggriculture infrastructure.
                            </p>
                        </div>
                    </div>        
                </li>

                <li>
                    <div class="mt-3 agri-card shadow">
                        <img src="https://drive.google.com/thumbnail?id=1xH9F3m6XbEl_IHgmifXyhgQXf9C5u4i1" class="w-100" />
                        <div class="pb-3 pt-1">
                            <h1 class="agri-card-heading">MISS</h1>
                            <p class="agri-card-description m-1">The interest subvention scheme (ISS)
                                provides concessional short term agri-loans to the farmers.
                            </p>
                        </div>
                    </div>        
                </li>
            </ul>
        </div>
        </div>
    </div>
            
<!-- Floating Chatbot Button -->
<div id="chatbot-container">
<a href="flask_chat\templates\chatbot.html"><button id="chatbot-btn"><i class="fas fa-comments"></i></button></a>

</div>

<!-- CSS -->
<style>
#chatbot-container {
    position: fixed;
    bottom: 20px;
    right: 20px;
    z-index: 1000;
}

#chatbot-btn {
    background-color: #28a745;
    color: white;
    border: none;
    border-radius: 50%;
    padding: 15px;
    font-size: 20px;
    cursor: pointer;
    box-shadow: 0px 4px 6px rgba(0, 0, 0, 0.2);
}

#chatbox {
    display: none;
    position: fixed;
    bottom: 80px;
    right: 20px;
    width: 300px;
    background-color: white;
    border-radius: 10px;
    box-shadow: 0px 4px 6px rgba(0, 0, 0, 0.2);
    overflow: hidden;
}

#chatbox-header {
    background-color: #28a745;
    color: white;
    padding: 10px;
    font-weight: bold;
    display: flex;
    justify-content: space-between;
    align-items: center;
}

#close-chatbot {
    background: none;
    border: none;
    color: white;
    font-size: 18px;
    cursor: pointer;
}

#chatbox-body {
    height: 200px;
    padding: 10px;
    overflow-y: auto;
    font-size: 14px;
}

#chatbox-footer {
    display: flex;
    padding: 10px;
    border-top: 1px solid #ddd;
}

#chat-input {
    flex: 1;
    padding: 5px;
    border: 1px solid #ddd;
    border-radius: 5px;
}

#send-chat {
    background-color: #28a745;
    color: white;
    border: none;
    padding: 5px 10px;
    margin-left: 5px;
    cursor: pointer;
    border-radius: 5px;
}
</style>

<!-- JavaScript -->
<script>
document.getElementById("chatbot-btn").addEventListener("click", function() {
    document.getElementById("chatbox").style.display = "block";
});

document.getElementById("close-chatbot").addEventListener("click", function() {
    document.getElementById("chatbox").style.display = "none";
});

document.getElementById("send-chat").addEventListener("click", function() {
    let input = document.getElementById("chat-input").value;
    if (input.trim() !== "") {
        let chatBody = document.getElementById("chatbox-body");
        let userMessage = document.createElement("p");
        userMessage.textContent = "You: " + input;
        chatBody.appendChild(userMessage);
        document.getElementById("chat-input").value = "";

        // Simulated chatbot response
        setTimeout(() => {
            let botMessage = document.createElement("p");
            botMessage.textContent = "Chatbot: Thanks for reaching out!";
            chatBody.appendChild(botMessage);
            chatBody.scrollTop = chatBody.scrollHeight;
        }, 1000);
    }
});
</script>


    
    <script src="script.js"></script>
</body>

</html>