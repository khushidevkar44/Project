<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <meta name="description" content="adminHMD professional admin dashboard template">
<title>Customer Dashboard | RideHub</title>
  <link rel="stylesheet" href="../assets/css/bootstrap.min.css">
  <link rel="stylesheet" href="../assets/vendors/bootstrap-icons/bootstrap-icons.css">
  <link rel="stylesheet" href="../assets/css/style.css">

  <style>
    /* Drivers Dropdown */
/* Common Dropdown */
.dropdown-menu-custom{
    margin-left: 20px;
    padding-left: 12px;
    border-left: 2px solid rgba(255,255,255,0.12);
}

.sub-menu{
    display: flex;
    align-items: center;
    gap: 10px;
    padding: 10px 15px;
    border-radius: 8px;
    transition: all .3s ease;
}

.sub-menu:hover{
    background: rgba(255,255,255,0.08);
}

.sub-menu i{
    font-size: 16px;
}
  </style>
  
</head>

<body>
  <div class="admin-shell">
    <div class="sidebar-backdrop" data-sidebar-close></div>

    <aside class="admin-sidebar" id="adminSidebar" aria-label="Main navigation">
      <div class="sidebar-header">
        <a class="brand-mark" href="index.html" aria-label="adminHMD dashboard">
<span class="brand-icon">
    <i class="bi bi-person-circle"></i>
</span>

<span class="brand-copy">
    <span class="brand-title">RideHub</span>
    <span class="brand-subtitle">Customer Panel</span>
</span>
        </a>
      </div>

    <nav class="sidebar-nav">

    <a class="nav-link active" href="customer-dashboard.php">
        <span class="nav-icon">
            <i class="bi bi-speedometer2"></i>
        </span>
        <span class="nav-text">Dashboard</span>
    </a>

    <a class="nav-link" href="book-ride.php">
        <span class="nav-icon">
            <i class="bi bi-car-front-fill"></i>
        </span>
        <span class="nav-text">Book Ride</span>
    </a>

    <a class="nav-link" href="my-bookings.php">
        <span class="nav-icon">
            <i class="bi bi-journal-text"></i>
        </span>
        <span class="nav-text">My Bookings</span>
    </a>

    <a class="nav-link" href="ride-history.php">
        <span class="nav-icon">
            <i class="bi bi-clock-history"></i>
        </span>
        <span class="nav-text">Ride History</span>
    </a>

    <a class="nav-link" href="wallet.php">
        <span class="nav-icon">
            <i class="bi bi-wallet2"></i>
        </span>
        <span class="nav-text">Wallet</span>
    </a>

    <a class="nav-link" href="payments.php">
        <span class="nav-icon">
            <i class="bi bi-credit-card-2-front-fill"></i>
        </span>
        <span class="nav-text">Payments</span>
    </a>

    <a class="nav-link" href="reviews.php">
        <span class="nav-icon">
            <i class="bi bi-star-fill"></i>
        </span>
        <span class="nav-text">Reviews & Ratings</span>
    </a>

    <a class="nav-link" href="messages.php">
        <span class="nav-icon">
            <i class="bi bi-chat-dots-fill"></i>
        </span>
        <span class="nav-text">Messages</span>
    </a>

    <a class="nav-link" href="notifications.php">
        <span class="nav-icon">
            <i class="bi bi-bell-fill"></i>
        </span>
        <span class="nav-text">Notifications</span>
    </a>

    <a class="nav-link" href="profile.php">
        <span class="nav-icon">
            <i class="bi bi-person-circle"></i>
        </span>
        <span class="nav-text">Profile</span>
    </a>

    <a class="nav-link" href="settings.php">
        <span class="nav-icon">
            <i class="bi bi-gear-fill"></i>
        </span>
        <span class="nav-text">Settings</span>
    </a>

    <a class="nav-link" href="../login.php">
        <span class="nav-icon">
            <i class="bi bi-box-arrow-right"></i>
        </span>
        <span class="nav-text">Logout</span>
    </a>

</nav>

   

    <div class="sidebar-footer">
    <span class="status-dot"></span>
    <span class="sidebar-footer-text">RideHub System Online</span>


</div>

      
    </aside>

    <div class="admin-main">
      <nav class="navbar admin-navbar navbar-expand bg-white">
        <div class="container-fluid px-3 px-lg-4">
          <button class="sidebar-toggle" type="button" data-sidebar-toggle aria-controls="adminSidebar" aria-expanded="true" aria-label="Toggle sidebar">
            <span></span>
            <span></span>
            <span></span>
          </button>

          <form class="d-none d-md-flex ms-3 flex-grow-1" role="search">
<input class="form-control search-input"
       type="search"
       placeholder="Search bookings..."
       aria-label="Search">          </form>

          <div class="navbar-actions ms-auto">
            <button class="icon-button theme-toggle" type="button" data-theme-toggle aria-label="Switch color theme" title="Switch color theme">
              <i class="bi bi-moon-stars" data-theme-icon aria-hidden="true"></i>
            </button>
            <div class="dropdown">
              <button class="icon-button" type="button" data-bs-toggle="dropdown" aria-expanded="false" aria-label="Notifications">
                <span class="notification-dot"></span>
                <i class="bi bi-bell" aria-hidden="true"></i>
              </button>
              <div class="dropdown-menu dropdown-menu-end notification-menu">
                <div class="dropdown-header fw-bold text-body">Notifications</div>
                <a class="dropdown-item" href="users.html">
                  <span class="notification-title">New Booking Confirmed</span>
                  <span class="notification-time">4 minutes ago</span>
                </a>
                <a class="dropdown-item" href="charts.html">
                  <span class="notification-title">Payment Successful</span>
                  <span class="notification-time">32 minutes ago</span>
                </a>
                <a class="dropdown-item" href="settings.html">
                  <span class="notification-title">Driver Assigned</span>
                  <span class="notification-time">1 hour ago</span>
                </a>
              </div>
            </div>

            <div class="dropdown">
              <button class="profile-button dropdown-toggle" type="button" data-bs-toggle="dropdown" aria-expanded="false">
                <img class="avatar-img avatar-sm" src="../assets/images/avatar/avatar.jpg" alt="Ipsita Devkar">
                <span class="profile-name d-none d-sm-inline">Ipsita Devkar</span>
              </button>
              <ul class="dropdown-menu dropdown-menu-end">
                <li><a class="dropdown-item" href="profile.php">My Profile</a></li>
<li><a class="dropdown-item" href="settings.php">Settings</a></li>
<li><hr class="dropdown-divider"></li>
<li><a class="dropdown-item" href="../login.php">Logout</a></li>
              </ul>
            </div>
          </div>
        </div>
      </nav>

      
<main class="dashboard-content">
<div class="container-fluid px-4 py-4">
    <!-- =========================================
            HERO BANNER
========================================= -->

<div class="card border-0 shadow-lg mb-4"
style="border-radius:20px;
background:linear-gradient(135deg,#0ea5e9,#2563eb,#1e3a8a);">

<div class="card-body p-5">

<div class="row align-items-center">

<div class="col-lg-8">

<span class="badge bg-light text-primary px-3 py-2 mb-3">

Messages

</span>

<h2 class="fw-bold text-white mb-3">

Messages 💬

</h2>

<p class="text-white opacity-75 fs-5 mb-4">

Chat with your drivers, receive ride updates and stay connected with RideHub support.

</p>

<button class="btn btn-light px-4">

<i class="bi bi-chat-dots-fill me-2"></i>

New Conversation

</button>

</div>

<div class="col-lg-4 text-center">

<i class="bi bi-chat-left-dots-fill text-white"
style="font-size:130px;opacity:.18;"></i>

</div>

</div>

</div>

</div>

<!-- =========================================
            CHAT LAYOUT
========================================= -->

<div class="row">

<!-- LEFT SIDEBAR -->

<div class="col-lg-4">

<div class="card border-0 shadow-sm mb-4">

<div class="card-header bg-white border-0 pt-4">

<h4 class="fw-bold">

Conversations

</h4>

</div>

<div class="card-body">

<div class="mb-3">

<input
type="text"
class="form-control"
placeholder="Search Conversation...">

</div>

<div class="list-group">

<a href="#" class="list-group-item list-group-item-action active">

<div class="d-flex justify-content-between">

<div>

<strong>Rahul Patel</strong>

<br>

<small>Your ride is arriving...</small>

</div>

<small>2m</small>

</div>

</a>

<a href="#" class="list-group-item list-group-item-action">

<div class="d-flex justify-content-between">

<div>

<strong>Amit Shah</strong>

<br>

<small>Thank you for riding.</small>

</div>

<small>Yesterday</small>

</div>

</a>

<a href="#" class="list-group-item list-group-item-action">

<div class="d-flex justify-content-between">

<div>

<strong>RideHub Support</strong>

<br>

<small>Welcome to RideHub.</small>

</div>

<small>15 Jul</small>

</div>

</a>

</div>

</div>

</div>

</div>

<!-- CHAT WINDOW -->

<div class="col-lg-8">

<div class="card border-0 shadow-sm">

<div class="card-header bg-white border-0 pt-4">

<div class="d-flex align-items-center">

<i class="bi bi-person-circle fs-2 text-primary me-3"></i>

<div>

<h5 class="fw-bold mb-0">

Rahul Patel

</h5>

<small class="text-success">

● Online

</small>

</div>

</div>

</div>

<div class="card-body"
style="height:450px;overflow-y:auto;background:#f8fafc;">

<div class="mb-4">

<div class="bg-light rounded-3 p-3 d-inline-block">

Hello Sir 👋

</div>

</div>

<div class="mb-4 text-end">

<div class="bg-primary text-white rounded-3 p-3 d-inline-block">

Hi Rahul, where are you now?

</div>

</div>

<div class="mb-4">

<div class="bg-light rounded-3 p-3 d-inline-block">

I'm 3 minutes away from your pickup location.

</div>

</div>

<div class="mb-4 text-end">

<div class="bg-primary text-white rounded-3 p-3 d-inline-block">

Great! I'll be there.

</div>

</div>

</div>

<div class="card-footer bg-white">

<div class="input-group">

<button class="btn btn-outline-secondary">

<i class="bi bi-paperclip"></i>

</button>

<button class="btn btn-outline-secondary">

😊

</button>

<input
type="text"
class="form-control"
placeholder="Type your message...">

<button class="btn btn-primary">

<i class="bi bi-send-fill"></i>

</button>

</div>

</div>

</div>

</div>

</div>
<!-- =========================================
            DRIVER INFORMATION
========================================= -->

<div class="row mt-4">

    <div class="col-lg-6">

        <div class="card border-0 shadow-sm h-100">

            <div class="card-header bg-white border-0 pt-4">

                <h4 class="fw-bold">

                    Driver Information

                </h4>

            </div>

            <div class="card-body text-center">

                <i class="bi bi-person-circle text-primary"
                   style="font-size:80px;"></i>

                <h5 class="fw-bold mt-3">

                    Rahul Patel

                </h5>

                <p class="text-muted">

                    Sedan Driver

                </p>

                <hr>

                <p>

                    <i class="bi bi-telephone-fill text-success me-2"></i>

                    +91 98765 43210

                </p>

                <p>

                    <i class="bi bi-car-front-fill text-primary me-2"></i>

                    Honda City

                </p>

                <p>

                    <i class="bi bi-credit-card me-2"></i>

                    GJ05AB1234

                </p>

                <div class="d-grid gap-2 mt-4">

                    <button class="btn btn-success">

                        <i class="bi bi-telephone-fill me-2"></i>

                        Call Driver

                    </button>

                    <button class="btn btn-danger">

                        <i class="bi bi-shield-fill-exclamation me-2"></i>

                        Emergency

                    </button>

                </div>

            </div>

        </div>

    </div>

    <!-- NOTIFICATIONS -->

    <div class="col-lg-6">

        <div class="card border-0 shadow-sm h-100">

            <div class="card-header bg-white border-0 pt-4">

                <h4 class="fw-bold">

                    Recent Notifications

                </h4>

            </div>

            <div class="card-body">

                <div class="alert alert-primary">

                    🚖 Driver has accepted your ride.

                </div>

                <div class="alert alert-success">

                    📍 Driver is arriving in 3 minutes.

                </div>

                <div class="alert alert-warning">

                    ⏳ Please be ready at the pickup location.

                </div>

                <div class="alert alert-info mb-0">

                    💳 Payment will be deducted after ride completion.

                </div>

            </div>

        </div>

    </div>

</div>

<!-- =========================================
            CHAT INFORMATION
========================================= -->

<div class="card border-0 shadow-sm mt-4 mb-5">

    <div class="card-header bg-white border-0 pt-4">

        <h4 class="fw-bold">

            Conversation Details

        </h4>

    </div>

    <div class="card-body">

        <table class="table">

            <tr>

                <th>Ride ID</th>

                <td>#RH101</td>

            </tr>

            <tr>

                <th>Booking ID</th>

                <td>#BK101</td>

            </tr>

            <tr>

                <th>Driver Status</th>

                <td>

                    <span class="badge bg-success">

                        Online

                    </span>

                </td>

            </tr>

            <tr>

                <th>Pickup</th>

                <td>Railway Station</td>

            </tr>

            <tr>

                <th>Destination</th>

                <td>Airport</td>

            </tr>

        </table>

    </div>

</div>

</div>

</main>
</div>


</main>


<footer class="admin-footer">
    <div class="container-fluid px-3 px-lg-4">
        <span>© 2026 RideHub. All Rights Reserved.</span>
        <span>RideHub Customer Panel</span>
    </div>
</footer>

  <script src="../assets/js/bootstrap.bundle.min.js"></script>
  <script src="../assets/js/main.js"></script>
</body>
</html>