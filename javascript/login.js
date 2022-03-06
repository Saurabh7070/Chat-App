const form = document.querySelector(".login form"),
    continueBtn = form.querySelector(".button input"),
    errorText = form.querySelector(".error-txt");

form.onsubmit = (e) => {
    e.preventDefault();
};

continueBtn.onclick = () => {
    // AJAX starts here
    let xhr = new XMLHttpRequest(); //create xml object
    xhr.open("POST", "php/login.php", true);
    xhr.onload = () => {
        if (xhr.readyState === XMLHttpRequest.DONE) {
            if (xhr.status === 200) {
                let data = xhr.response;

                if (data === "success") {
                    location.href = "users.php";
                } else {
                    errorText.textContent = data;
                    errorText.style.display = "block";
                }
            }
        }
    };
    // sending form data to php using ajax
    let formData = new FormData(form); //new formData object
    xhr.send(formData); //sending form data to php
};