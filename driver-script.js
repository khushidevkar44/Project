// =============================
// SHOW / HIDE PASSWORD
// =============================

const toggle = document.querySelector(".toggle-password");

const password = document.querySelector("#password");

if (toggle) {

    toggle.addEventListener("click", function () {

        if (password.type === "password") {

            password.type = "text";

            this.innerHTML = '<i class="bi bi-eye-slash-fill"></i>';

        } else {

            password.type = "password";

            this.innerHTML = '<i class="bi bi-eye-fill"></i>';

        }

    });

}

// =============================
// LOGIN BUTTON LOADING
// =============================

const loginForm = document.querySelector("form");

const loginBtn = document.querySelector(".login-btn");

if (loginForm) {

    loginForm.addEventListener("submit", function (e) {

        e.preventDefault();

        loginBtn.disabled = true;

        loginBtn.innerHTML = `
        <span class="spinner-border spinner-border-sm me-2"></span>
        Logging In...
        `;

        setTimeout(function () {

            loginBtn.disabled = false;

            loginBtn.innerHTML = `
            <i class="bi bi-box-arrow-in-right"></i>
            Login
            `;

        }, 2500);

    });

}

// =============================
// BUTTON RIPPLE EFFECT
// =============================

document.querySelectorAll(".login-btn").forEach(button => {

    button.addEventListener("click", function (e) {

        const circle = document.createElement("span");

        const diameter = Math.max(button.clientWidth, button.clientHeight);

        const radius = diameter / 2;

        circle.style.width = circle.style.height = `${diameter}px`;

        circle.style.left = `${e.clientX - button.offsetLeft - radius}px`;

        circle.style.top = `${e.clientY - button.offsetTop - radius}px`;

        circle.classList.add("ripple");

        const ripple = button.getElementsByClassName("ripple")[0];

        if (ripple) {

            ripple.remove();

        }

        button.appendChild(circle);

    });

});

// =============================
// FLOATING CARD
// =============================

const card = document.querySelector(".login-card");

document.addEventListener("mousemove", function (e) {

    if (!card) return;

    let x = (window.innerWidth / 2 - e.pageX) / 40;

    let y = (window.innerHeight / 2 - e.pageY) / 40;

    card.style.transform = `rotateY(${x}deg) rotateX(${-y}deg)`;

});

document.addEventListener("mouseleave", function () {

    if (!card) return;

    card.style.transform = "rotateY(0deg) rotateX(0deg)";

});