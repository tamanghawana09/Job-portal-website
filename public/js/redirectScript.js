function redirect(){
    var selectElement = document.getElementById("register");
    var selectedOption = selectElement.options[selectElement.selectedIndex].value;
    if (selectedOption === "candidateRecruiter") {
        window.location.href = "/register";
    }
    if(selectedOption ==="candidateRegister"){
        window.location.href = "/userLogin";
    }
}

function redirectlogin(){
    var selectElement = document.getElementById("login");
    var selectedOption = selectElement.options[selectElement.selectedIndex].value;
    if (selectedOption === "candidateLogin") {
        window.location.href = "/userLogin";
    }
    if(selectedOption ==="recruiterLogin"){
        window.location.href = "/login";
    }
}