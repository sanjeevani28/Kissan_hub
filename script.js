// Detect when the element is in and out of the viewport
const boxes = document.querySelectorAll('.box');

const observer = new IntersectionObserver((entries, observer) => {
  entries.forEach(entry => {
    if (entry.isIntersecting) {
      // When the element enters the viewport, add the 'visible' class
      entry.target.classList.add('visible');
      entry.target.classList.remove('hidden');
    } else {
      // When the element exits the viewport, add the 'hidden' class
      entry.target.classList.add('hidden');
      entry.target.classList.remove('visible');
    }
  });
}, { threshold: 0.5 });

boxes.forEach(box => {
  observer.observe(box);
});

// Function to toggle between customer and farmer login forms
function showForm(formType) {
  // Hide both forms by default
  document.getElementById('customer').style.display = 'none';
  document.getElementById('farmer').style.display = 'none';

  // Remove 'active' class from both tabs
  document.getElementById('customer-tab').classList.remove('active');
  document.getElementById('farmer-tab').classList.remove('active');

  // Show the selected form and set the correct tab as active
  if (formType === 'customer') {
      document.getElementById('customer').style.display = 'block';
      document.getElementById('customer-tab').classList.add('active');
  } else if (formType === 'farmer') {
      document.getElementById('farmer-tab').classList.add('active');
      document.getElementById('customer').style.display = 'none';
      document.getElementById('farmer').style.display = 'block';
  }
}

// Set default form to be visible (Customer login form)
showForm('customer');

//navigate to login page from home page
function goToLoginPage() {
  document.getElementById("homepage").style.display = "none"; // Hide homepage
  document.getElementById("loginpage").style.display = "block"; // Show login page
}

//toggle between sign up and sign in page for both farmer and customer

const CsignupButton=document.getElementById('CsignupButton')
const FsignupButton=document.getElementById('FsignupButton')

const CsignInButton=document.getElementById('CsignInButton')
const FsignInButton=document.getElementById('FsignInButton')

const CsignInfrom=document.getElementById('signincustomer')
const FsignInfrom=document.getElementById('signinfarmer')

const Csignupfrom=document.getElementById('signupcustomer')
const Fsignupfrom=document.getElementById('signupfarmer')


CsignupButton.addEventListener('click', function(){
    CsignInfrom.style.display="none";
    Csignupfrom.style.display="block";

})

CsignInButton.addEventListener('click', function(){
    CsignInfrom.style.display="block";
    Csignupfrom.style.display="none";
})

FsignupButton.addEventListener('click', function(){
    FsignInfrom.style.display="none";
    Fsignupfrom.style.display="block";

})

FsignInButton.addEventListener('click', function(){
    FsignInfrom.style.display="block";
    Fsignupfrom.style.display="none";
})