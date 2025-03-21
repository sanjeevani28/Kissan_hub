
<!DOCTYPE html>
<html>

<head>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.7.2/css/all.min.css">
    <link rel="stylesheet" href="style.css">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css" integrity="sha384-JcKb8q3iqJ61gNV9KGb8thSsNjpSL0n8PARn9HuZOnIxN0hoP+VmmDGMN5t9UJ0Z" crossorigin="anonymous">
    <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js" integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.1/dist/umd/popper.min.js" integrity="sha384-9/reFTGAW83EW2RDu2S0VKaIzap3H66lZH81PoYlFhbGU+6BZp6G7niu735Sk7lN" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js" integrity="sha384-B4gt1jrGC7Jh4AgTPSdUtOBvfO8shuf57BaghqFfPlYxofvL8/KUEfYiJOMMV+rV" crossorigin="anonymous"></script>
</head>
<body>
    <div id="homepage">
        <nav class="navbar navbar-expand-lg navbar-dark bg-info">
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
                    <button id="loginbtn" class="btn btn-success" onclick="goToLoginPage();">Login</button>
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
                        <button class="btn btn-dark shadow" onclick="goToLoginPage();">Get Started</button>
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
                        <p class="soil-section-description">Track every expenses, calculate profit and suggests ways to extend shelf life.
                        </p>
                        <button class="btn btn-dark shadow" onclick="goToLoginPage();">Get Started</button>
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
                        <button class="btn btn-dark shadow" onclick="goToLoginPage();">Get Started</button>
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
                        <button class="btn btn-dark shadow" onclick="goToLoginPage();">Get Started</button>
                    </div>
                </div>
            </div>
        </div>
        </div>

        <div id="newssection" class="mt-5 mb-5">
        <h1 class="soil-section-heading mt-5 text-center">Get linked with latest updates</h1>
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

    <div id="loginpage" style="display: none;">
        <div id="loginnav">
            <h1 class="form-title">Login Page</h1>
            <div >
                <ul class="nav nav-tabs">
                    <li class="nav-item">
                        <a class="nav-link active" id="customer-tab" href="#customer" onclick="showForm('customer')">Login as customer</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" id="farmer-tab" href="#farmer" onclick="showForm('farmer')">Login as farmer</a>
                    </li>
                </ul>
            </div>
        </div>    


        <!-- Customer login form -->
        <div id="customer" class="login-form">
            <div class="container1" id="signupcustomer" style="display: none;">
                <h1 class="form-title">Customer Login</h1>
                <h1 class="form-title">Register</h1>
                <form method="post" action="register.php">
                    <div class="input-group">
                        <i class="fas fa-user"></i>
                        <input type="text" name="fName" id="CfName" placeholder="First Name" required>
                        <label for="fName">First Name</label>
                    </div>
                    <div class="input-group">
                        <i class="fas fa-user"></i>
                        <input type="text" name="lName" id="ClName" placeholder="Last Name" required>
                        <label for="lName">Last Name</label>
                    </div>
                    <div class="input-group">
                        <i class="fas fa-envelope"></i>
                        <input type="email" name="email" id="Cemail" placeholder="Email" required>
                        <label for="email">Email</label>
                    </div>
                    <div class="input-group">
                        <i class="fas fa-lock"></i>
                        <input type="password" name="password" id="Cpassword" placeholder="Password" required>
                        <label for="password">Password</label>
                    </div>
                    <div class="text-center">
                        <input type="submit" class="button" value="Sign Up" name="CSignup">
                    </div>

                    <p class="or">
                        ------------or----------------
                    </p>
                    <div class="icons">
                        <i class="fab fa-google"></i>
                    </div>
                    <div class="links">
                        <p>Already Have account ?</p>
                        <button id="CsignInButton">Sign In</button>
                    </div>
                </form>
            </div>

            <div class="container1" id="signincustomer">
                <h1 class="form-title">Customer Login</h1>
                <h1 class="form-title">Sign In</h1>
                <form method="post" action="register.php">
                    <div class="input-group">
                        <i class="fas fa-envelope"></i>
                        <input type="email" name="email" id="Cemail" placeholder="Email" required>
                        <label for="email">Email</label>
                    </div>
                    <div class="input-group">
                        <i class="fas fa-lock"></i>
                        <input type="password" name="password" id="Cpassword" placeholder="Password" required>
                        <label for="password">Password</label>
                    </div>
                    <p class="recover">
                        <a href="">Recover Password</a>
                    </p>
                    <div class="text-center">
                        <input type="submit" class="button" value="Sign In" name="CSignin">
                    </div>

                    <p class="or">
                        ------------or----------------
                    </p>
                    <div class="icons">
                        <i class="fab fa-google"></i>
                    </div>
                    <div class="links">
                        <p>Dont Have account yet?</p>
                        <button id="CsignupButton">Sign Up</button>
                    </div>
                </form>
            </div>
        </div>

        <div id="farmer" class="login-form" style="display:none;">
            <div class="container1" id="signupfarmer" style="display: none;">
                <h1 class="form-title">Farmer Login</h1>
                <h1 class="form-title">Register</h1>
                <form method="post" action="register.php">
                    <div class="input-group">
                        <i class="fas fa-user"></i>
                        <input type="text" name="fName" id="FfName" placeholder="First Name" required>
                        <label for="fName">First Name</label>
                    </div>
                    <div class="input-group">
                        <i class="fas fa-user"></i>
                        <input type="text" name="lName" id="FlName" placeholder="Last Name" required>
                        <label for="lName">Last Name</label>
                    </div>
                    <div class="input-group">
                        <i class="fas fa-envelope"></i>
                        <input type="email" name="email" id="Femail" placeholder="Email" required>
                        <label for="email">Email</label>
                    </div>
                    <div class="input-group">
                        <i class="fas fa-lock"></i>
                        <input type="password" name="password" id="Fpassword" placeholder="Password" required>
                        <label for="password">Password</label>
                    </div>
                    <div class="text-center">
                        <input type="submit" class="button" value="Sign Up" name="FSignup">
                    </div>

                    <p class="or">
                        ------------or----------------
                    </p>
                    <div class="icons">
                        <i class="fab fa-google"></i>
                    </div>
                    <div class="links">
                        <p>Already Have account ?</p>
                        <button id="FsignInButton">Sign In</button>
                    </div>
                </form>
            </div>

            <div class="container1" id="signinfarmer">
                <h1 class="form-title">Farmer Login</h1>
                <h1 class="form-title">Sign In</h1>
                <form method="post" action="register.php">
                    <div class="input-group">
                        <i class="fas fa-envelope"></i>
                        <input type="email" name="email" id="Femail" placeholder="Email" required>
                        <label for="email">Email</label>
                    </div>
                    <div class="input-group">
                        <i class="fas fa-lock"></i>
                        <input type="password" name="password" id="Fpassword" placeholder="Password" required>
                        <label for="password">Password</label>
                    </div>
                    <p class="recover">
                        <a href="">Recover Password</a>
                    </p>
                    <div class="text-center">
                        <input type="submit" class="button" value="Sign In" name="FSignin">
                    </div>

                    <p class="or">
                        ------------or----------------
                    </p>
                    <div class="icons">
                        <i class="fab fa-google"></i>
                    </div>
                    <div class="links">
                        <p>Dont Have account yet?</p>
                        <button id="FsignupButton">Sig Up</button>
                    </div>
                </form>
            </div>
        </div>
    </div>    
            



    
    <script src="script.js"></script>
</body>

</html>