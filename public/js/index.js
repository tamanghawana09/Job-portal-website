document.addEventListener("DOMContentLoaded", () => {
    const wrapper = document.querySelector(".wrapper");
    const loginlink = document.querySelector(".login-link");
    const registerlink = document.querySelector(".register-link");
    const btnPopup = document.querySelector(".btnlogin-popup");
    const iconClose = document.querySelector(".icon-close");

    loginlink.addEventListener("click", () => {
        wrapper.classList.remove("active-popup");
    });
    registerlink.addEventListener("click", (event) => {
        event.preventDefault();
        console.log("Register link clicked");
        wrapper.classList.add("active-popup");
    });
    btnPopup.addEventListener("click", () => {
        wrapper.classList.add("active-popup");
    });
    iconClose.addEventListener("click", () => {
        wrapper.classList.remove("active-popup");
    });
});