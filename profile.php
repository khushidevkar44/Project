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
background:linear-gradient(135deg,#0284c7,#06b6d4,#0f172a);">

<div class="card-body p-5">

<div class="row align-items-center">

<div class="col-lg-8">

<span class="badge bg-light text-info px-3 py-2 mb-3">

My Profile

</span>

<h2 class="fw-bold text-white mb-3">

Customer Profile 👤

</h2>

<p class="text-white opacity-75 fs-5 mb-4">

Manage your personal information, emergency contacts and account details.

</p>

<button class="btn btn-light px-4">

<i class="bi bi-pencil-square me-2"></i>

Edit Profile

</button>

</div>

<div class="col-lg-4 text-center">

<i class="bi bi-person-circle text-white"
style="font-size:130px;opacity:.18;"></i>

</div>

</div>

</div>

</div>

<!-- =========================================
            PROFILE SUMMARY
========================================= -->

<div class="row g-4 mb-4">

<div class="col-lg-4">

<div class="card border-0 shadow-sm">

<div class="card-body text-center">

<img src="https://via.placeholder.com/140"
class="rounded-circle mb-3"
width="140"
height="140">

<h4 class="fw-bold">
Ipsita Devkar


</h4>

<p class="text-muted">

Premium Customer

</p>

<button class="btn btn-outline-primary">

<i class="bi bi-camera-fill me-2"></i>

Change Photo

</button>

</div>

</div>

</div>

<div class="col-lg-8">

<div class="card border-0 shadow-sm h-100">

<div class="card-header bg-white border-0 pt-4">

<h4 class="fw-bold">

Account Overview

</h4>

</div>

<div class="card-body">

<div class="row">

<div class="col-md-6 mb-3">

<h6 class="text-muted">

Customer ID

</h6>

<h5>

CUS1001

</h5>

</div>

<div class="col-md-6 mb-3">

<h6 class="text-muted">

Member Since

</h6>

<h5>

January 2026

</h5>

</div>

<div class="col-md-6 mb-3">

<h6 class="text-muted">

Completed Rides

</h6>

<h5 class="text-success">

128

</h5>

</div>

<div class="col-md-6 mb-3">

<h6 class="text-muted">

Wallet Balance

</h6>

<h5 class="text-primary">

₹2,450

</h5>

</div>

</div>

</div>

</div>

</div>

</div>

<!-- =========================================
            PERSONAL INFORMATION
========================================= -->

<div class="card border-0 shadow-sm mb-4">

<div class="card-header bg-white border-0 pt-4">

<h4 class="fw-bold">

Personal Information

</h4>

</div>

<div class="card-body">

<div class="row g-3">

<div class="col-md-6">

<label class="form-label">

Full Name

</label>

<input
type="text"
class="form-control"
value="Ipsita Devkar">

</div>

<div class="col-md-6">

<label class="form-label">

Email

</label>

<input
type="email"
class="form-control"
value="Ipsita@email.com">

</div>

<div class="col-md-6">

<label class="form-label">

Mobile Number

</label>

<input
type="text"
class="form-control"
value="+91 9876543210">

</div>

<div class="col-md-6">

<label class="form-label">

Date of Birth

</label>

<input
type="date"
class="form-control">

</div>

<div class="col-md-12">

<label class="form-label">

Address

</label>

<textarea
class="form-control"
rows="3"></textarea>

</div>

</div>

</div>

</div>
<!-- =========================================
            EMERGENCY CONTACT
========================================= -->

<div class="card border-0 shadow-sm mb-4">

    <div class="card-header bg-white border-0 pt-4">

        <h4 class="fw-bold">

            Emergency Contact

        </h4>

    </div>

    <div class="card-body">

        <div class="row g-3">

            <div class="col-md-6">

                <label class="form-label">

                    Contact Name

                </label>

                <input type="text"
                       class="form-control"
                       value="Vishal Devkar">

            </div>

            <div class="col-md-6">

                <label class="form-label">

                    Relationship

                </label>

                <input type="text"
                       class="form-control"
                       value="Father">

            </div>

            <div class="col-md-6">

                <label class="form-label">

                    Mobile Number

                </label>

                <input type="text"
                       class="form-control"
                       value="+91 9876543210">

            </div>

            <div class="col-md-6">

                <label class="form-label">

                    Alternate Number

                </label>

                <input type="text"
                       class="form-control"
                       placeholder="+91 XXXXXXXXXX">

            </div>

        </div>

    </div>

</div>

<!-- =========================================
            SAVED ADDRESSES
========================================= -->

<div class="card border-0 shadow-sm mb-4">

    <div class="card-header bg-white border-0 pt-4">

        <h4 class="fw-bold">

            Saved Addresses

        </h4>

    </div>

    <div class="card-body">

        <div class="list-group">

            <div class="list-group-item d-flex justify-content-between align-items-center">

                <div>

                    <strong>🏠 Home</strong>

                    <br>

                    <small class="text-muted">

                        Adajan, Surat, Gujarat

                    </small>

                </div>

                <button class="btn btn-sm btn-outline-primary">

                    Edit

                </button>

            </div>

            <div class="list-group-item d-flex justify-content-between align-items-center">

                <div>

                    <strong>🏢 Office</strong>

                    <br>

                    <small class="text-muted">

                        Kochi, Kerala

                    </small>

                </div>

                <button class="btn btn-sm btn-outline-primary">

                    Edit

                </button>

            </div>

        </div>

    </div>

</div>

<!-- =========================================
            ACCOUNT SECURITY
========================================= -->

<div class="card border-0 shadow-sm mb-4">

    <div class="card-header bg-white border-0 pt-4">

        <h4 class="fw-bold">

            Account Security

        </h4>

    </div>

    <div class="card-body">

        <div class="row">

            <div class="col-md-6 mb-3">

                <label class="form-label">

                    New Password

                </label>

                <input type="password"
                       class="form-control">

            </div>

            <div class="col-md-6 mb-3">

                <label class="form-label">

                    Confirm Password

                </label>

                <input type="password"
                       class="form-control">

            </div>

        </div>

        <div class="form-check form-switch mt-3">

            <input class="form-check-input"
                   type="checkbox"
                   checked>

            <label class="form-check-label">

                Enable Two-Factor Authentication

            </label>

        </div>

    </div>

</div>

<!-- =========================================
            SAVE BUTTON
========================================= -->

<div class="text-end mb-5">

    <button class="btn btn-primary btn-lg px-5">

        <i class="bi bi-save-fill me-2"></i>

        Save Profile

    </button>

</div>


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