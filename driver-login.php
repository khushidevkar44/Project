<!DOCTYPE html>
<html lang="en">

<head>

    <meta charset="UTF-8">

    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <title>RideHub | Driver Login</title>

    <!-- Bootstrap -->

    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet">

    <!-- Bootstrap Icons -->

    <link href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.11.3/font/bootstrap-icons.css" rel="stylesheet">

    <!-- Google Font -->

    <link rel="preconnect" href="https://fonts.googleapis.com">

    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>

    <link href="https://fonts.googleapis.com/css2?family=Poppins:wght@300;400;500;600;700;800&display=swap" rel="stylesheet">

    <!-- Animate -->

    <link rel="stylesheet"
        href="https://cdnjs.cloudflare.com/ajax/libs/animate.css/4.1.1/animate.min.css"/>

    <!-- Custom CSS -->

    <link rel="stylesheet" href="style.css">
    <style>
        /* Google Font */

*{
    margin:0;
    padding:0;
    box-sizing:border-box;
    font-family:'Poppins',sans-serif;
}

body{

    min-height:100vh;

    background:linear-gradient(-45deg,#0f172a,#1e3a8a,#2563eb,#06b6d4);

    background-size:400% 400%;

    animation:gradientMove 12s ease infinite;

    overflow:hidden;

}

@keyframes gradientMove{

0%{background-position:0% 50%;}

50%{background-position:100% 50%;}

100%{background-position:0% 50%;}

}

/* Floating Background */

.bg-animation{

position:fixed;

width:100%;

height:100%;

top:0;

left:0;

overflow:hidden;

z-index:0;

}

.bg-animation span{

position:absolute;

display:block;

border-radius:50%;

background:rgba(255,255,255,.08);

animation:float 18s linear infinite;

bottom:-150px;

}

.bg-animation span:nth-child(1){

left:8%;

width:80px;

height:80px;

animation-duration:18s;

}

.bg-animation span:nth-child(2){

left:25%;

width:150px;

height:150px;

animation-duration:25s;

}

.bg-animation span:nth-child(3){

left:50%;

width:70px;

height:70px;

animation-duration:15s;

}

.bg-animation span:nth-child(4){

left:70%;

width:120px;

height:120px;

animation-duration:20s;

}

.bg-animation span:nth-child(5){

left:90%;

width:90px;

height:90px;

animation-duration:17s;

}

@keyframes float{

0%{

transform:translateY(0) rotate(0deg);

opacity:0;

}

20%{

opacity:.4;

}

100%{

transform:translateY(-1200px) rotate(720deg);

opacity:0;

}

}

/* Login Section */

.login-section{

position:relative;

z-index:2;

}

/* Left Side */

.left-content{

color:white;

}

.left-content h1{

font-size:65px;

font-weight:800;

letter-spacing:2px;

margin-bottom:5px;

}

.left-content h2{

font-size:35px;

font-weight:600;

margin-bottom:20px;

}

.left-content p{

font-size:18px;

opacity:.9;

margin-bottom:35px;

line-height:30px;

}

.feature-box div{

display:flex;

align-items:center;

margin-bottom:18px;

font-size:18px;

}

.feature-box i{

font-size:24px;

margin-right:15px;

color:#ffd43b;

}

/* Glass Card */

.login-card{

background:rgba(255,255,255,.12);

backdrop-filter:blur(20px);

border:1px solid rgba(255,255,255,.25);

border-radius:25px;

padding:45px;

box-shadow:0 20px 60px rgba(0,0,0,.35);

transition:.4s;

}

.login-card:hover{

transform:translateY(-8px);

box-shadow:0 35px 70px rgba(0,0,0,.45);

}

/* Logo */

.logo-circle{

width:90px;

height:90px;

margin:auto;

border-radius:50%;

background:white;

display:flex;

justify-content:center;

align-items:center;

font-size:40px;

color:#2563eb;

margin-bottom:20px;

animation:pulse 2s infinite;

}

@keyframes pulse{

0%{

transform:scale(1);

}

50%{

transform:scale(1.08);

}

100%{

transform:scale(1);

}

}

.login-card h2{

color:white;

font-weight:700;

margin-bottom:5px;

}

.login-card p{

color:#ddd;

margin-bottom:35px;

}
/* ===========================
   INPUT BOX
=========================== */

.input-group-custom{

position:relative;

margin-bottom:25px;

}

.input-group-custom i{

position:absolute;

left:18px;

top:50%;

transform:translateY(-50%);

color:#fff;

font-size:18px;

z-index:10;

}

.input-group-custom input{

width:100%;

height:58px;

border:none;

outline:none;

padding-left:55px;

padding-right:55px;

border-radius:15px;

background:rgba(255,255,255,.12);

border:1px solid rgba(255,255,255,.25);

color:#fff;

font-size:15px;

transition:.35s;

}

.input-group-custom input::placeholder{

color:#ddd;

}

.input-group-custom input:focus{

background:rgba(255,255,255,.18);

border:1px solid #38bdf8;

box-shadow:

0 0 10px rgba(56,189,248,.4),

0 0 25px rgba(56,189,248,.2);

}

/* ===========================
   PASSWORD ICON
=========================== */

.toggle-password{

position:absolute;

right:18px;

top:50%;

transform:translateY(-50%);

cursor:pointer;

color:#fff;

font-size:18px;

transition:.3s;

}

.toggle-password:hover{

color:#38bdf8;

transform:translateY(-50%) scale(1.2);

}

/* ===========================
   LOGIN BUTTON
=========================== */

.login-btn{

width:100%;

height:58px;

border:none;

border-radius:15px;

background:linear-gradient(45deg,#2563eb,#06b6d4);

color:white;

font-size:18px;

font-weight:600;

cursor:pointer;

transition:.4s;

position:relative;

overflow:hidden;

}

.login-btn i{

margin-right:10px;

}

.login-btn:hover{

transform:translateY(-4px);

box-shadow:

0 15px 35px rgba(37,99,235,.45);

}

.login-btn::before{

content:"";

position:absolute;

top:0;

left:-100%;

width:100%;

height:100%;

background:rgba(255,255,255,.25);

transform:skewX(-25deg);

transition:.6s;

}

.login-btn:hover::before{

left:120%;

}

/* ===========================
   LINKS
=========================== */

a{

color:#fff;

text-decoration:none;

transition:.3s;

}

a:hover{

color:#38bdf8;

}

.bottom-text{

margin-top:30px;

text-align:center;

color:#ddd;

}

/* ===========================
   CHECKBOX
=========================== */

input[type="checkbox"]{

accent-color:#0ea5e9;

margin-right:8px;

cursor:pointer;

}

/* ===========================
   RESPONSIVE
=========================== */

@media(max-width:992px){

.left-content{

display:none;

}

.login-card{

padding:35px;

}

body{

overflow:auto;

}

}

@media(max-width:576px){

.login-card{

padding:25px;

border-radius:20px;

}

.logo-circle{

width:75px;

height:75px;

font-size:32px;

}

.login-card h2{

font-size:28px;

}

.login-btn{

height:54px;

font-size:16px;

}

}

/* ===========================
   CARD ENTRY ANIMATION
=========================== */

.login-card{

animation:cardUp 1s ease;

}

@keyframes cardUp{

0%{

opacity:0;

transform:translateY(60px);

}

100%{

opacity:1;

transform:translateY(0);

}

}
    </style>
</head>

<body>

<div class="bg-animation">

    <span></span>

    <span></span>

    <span></span>

    <span></span>

    <span></span>

</div>

<section class="login-section">

<div class="container">

<div class="row align-items-center vh-100">

<!-- LEFT SIDE -->

<div class="col-lg-6 d-none d-lg-block">

<div class="left-content animate__animated animate__fadeInLeft">

<h1>

RideHub

</h1>

<h2>

Driver Portal

</h2>

<p>

Manage your rides, earnings and profile from one place.

</p>

<div class="feature-box">

<div>

<i class="bi bi-car-front-fill"></i>

<span>Accept Ride Requests</span>

</div>

<div>

<i class="bi bi-wallet2"></i>

<span>Track Earnings</span>

</div>

<div>

<i class="bi bi-geo-alt-fill"></i>

<span>Live Ride Updates</span>

</div>

<div>

<i class="bi bi-star-fill"></i>

<span>Customer Ratings</span>

</div>

</div>

</div>

</div>

<!-- RIGHT SIDE -->

<div class="col-lg-6">

<div class="login-card animate__animated animate__fadeInRight">

<div class="text-center">

<div class="logo-circle">

<i class="bi bi-car-front-fill"></i>

</div>

<h2>

Driver Login

</h2>

<p>

Welcome Back 👋

</p>

</div>

<form>

<div class="input-group-custom">

<i class="bi bi-envelope-fill"></i>

<input
type="email"
placeholder="Email Address">

</div>

<div class="input-group-custom">

<i class="bi bi-lock-fill"></i>

<input
id="password"
type="password"
placeholder="Password">

<span
class="toggle-password">

<i class="bi bi-eye-fill"></i>

</span>

</div>

<div class="d-flex justify-content-between mb-4">

<div>

<input type="checkbox">

Remember Me

</div>

<a href="#">

Forgot Password?

</a>

</div>

<button
class="login-btn">

<i class="bi bi-box-arrow-in-right"></i>

Login

</button>

</form>

<div class="bottom-text">

Need Help?

<a href="#">

Contact Admin

</a>

</div>

</div>

</div>

</div>

</div>

</section>

<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js"></script>

<script src="script.js"></script>

</body>

</html>