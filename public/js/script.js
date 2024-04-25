const hamBurger = document.querySelector(".toggle-btn");

hamBurger.addEventListener("click", function () {
  document.querySelector("#sidebar").classList.toggle("expand");
});

var form1 = document.getElementById('personal-info-form');
var form2 = document.getElementById('education-info-form');
var form3 = document.getElementById('skill-info-form');
var form4 = document.getElementById("training-info-form");
var form5 = document.getElementById("email-info-form");

// Initially hide all forms
form1.style.display = "block";
form2.style.display = "none";
form3.style.display = "none";
form4.style.display = "none";
form5.style.display = "none";

// Add event listeners to each button
document.getElementById("personal-btn").addEventListener("click", function(){
    form1.style.display = "block";
    form2.style.display = "none";
    form3.style.display = "none";
    form4.style.display = "none";
    form5.style.display = "none";
});

document.getElementById("education-btn").addEventListener("click", function(){
    form1.style.display = "none";
    form2.style.display = "block";
    form3.style.display = "none";
    form4.style.display = "none";
    form5.style.display = "none";
});

document.getElementById("skills-btn").addEventListener("click", function(){
    form1.style.display = "none";
    form2.style.display = "none";
    form3.style.display = "block";
    form4.style.display = "none";
    form5.style.display = "none";
});

document.getElementById("training-btn").addEventListener("click", function(){
    form1.style.display = "none";
    form2.style.display = "none";
    form3.style.display = "none";
    form4.style.display = "block";
    form5.style.display = "none";
});

document.getElementById("email-btn").addEventListener("click", function(){
    form1.style.display = "none";
    form2.style.display = "none";
    form3.style.display = "none";
    form4.style.display = "none";
    form5.style.display = "block";
});
