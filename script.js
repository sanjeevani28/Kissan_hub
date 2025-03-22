const boxes = document.querySelectorAll('.box');

const observer = new IntersectionObserver((entries, observer) => {
  entries.forEach(entry => {
    if (entry.isIntersecting) {
      entry.target.classList.add('visible');
      entry.target.classList.remove('hidden');
    } else {
      entry.target.classList.add('hidden');
      entry.target.classList.remove('visible');
    }
  });
}, { threshold: 0.5 });

boxes.forEach(box => {
  observer.observe(box);
});

function showForm(formType) {
  document.getElementById('customer').style.display = 'none';
  document.getElementById('farmer').style.display = 'none';

  document.getElementById('customer-tab').classList.remove('active');
  document.getElementById('farmer-tab').classList.remove('active');

  if (formType === 'customer') {
      document.getElementById('customer').style.display = 'block';
      document.getElementById('customer-tab').classList.add('active');
  } else if (formType === 'farmer') {
      document.getElementById('farmer-tab').classList.add('active');
      document.getElementById('customer').style.display = 'none';
      document.getElementById('farmer').style.display = 'block';
  }
}

showForm('customer');

function goToLoginPage() {
  document.getElementById("homepage").style.display = "none";
  document.getElementById("loginpage").style.display = "block";
}


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
