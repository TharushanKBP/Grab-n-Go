const formOpenBtn = document.querySelector("#from-open"),
Container = document.querySelector(".container"),
frombox = document.querySelector(".from-box"),
signupBtn = document.querySelector("#signup"),
loginBtn = document.querySelector("#login");



signupBtn.addEventListener("click", (e) =>{
    e.preventDefault();
    Container.classList.add("active");
});


loginBtn.addEventListener("click", (e) =>{
    e.preventDefault();
    Container.classList.remove("active");
});