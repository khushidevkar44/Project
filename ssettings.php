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
background:linear-gradient(135deg,#4f46e5,#7c3aed,#1e1b4b);">

<div class="card-body p-5">

<div class="row align-items-center">

<div class="col-lg-8">

<span class="badge bg-light text-primary px-3 py-2 mb-3">

Account Settings

</span>

<h2 class="fw-bold text-white mb-3">

Settings ⚙️

</h2>

<p class="text-white opacity-75 fs-5 mb-4">

Customize your RideHub experience, privacy, security and notification preferences.

</p>

<button class="btn btn-light px-4">

<i class="bi bi-sliders me-2"></i>

Manage Preferences

</button>

</div>

<div class="col-lg-4 text-center">

<i class="bi bi-gear-fill text-white"
style="font-size:130px;opacity:.18;"></i>

</div>

</div>

</div>

</div>

<!-- =========================================
            APPEARANCE
========================================= -->

<div class="card border-0 shadow-sm mb-4">

<div class="card-header bg-white border-0 pt-4">

<h4 class="fw-bold">

Appearance

</h4>

</div>

<div class="card-body">

<div class="form-check form-switch mb-3">

<input class="form-check-input"
type="checkbox">

<label class="form-check-label">

Enable Dark Mode

</label>

</div>

<div class="form-check form-switch">

<input class="form-check-input"
type="checkbox"
checked>

<label class="form-check-label">

Compact Dashboard Layout

</label>

</div>

</div>

</div>

<!-- =========================================
            NOTIFICATION SETTINGS
========================================= -->

<div class="card border-0 shadow-sm mb-4">

<div class="card-header bg-white border-0 pt-4">

<h4 class="fw-bold">

Notification Settings

</h4>

</div>

<div class="card-body">

<div class="form-check form-switch mb-3">

<input class="form-check-input"
type="checkbox"
checked>

<label class="form-check-label">

Ride Updates

</label>

</div>

<div class="form-check form-switch mb-3">

<input class="form-check-input"
type="checkbox"
checked>

<label class="form-check-label">

Payment Notifications

</label>

</div>

<div class="form-check form-switch mb-3">

<input class="form-check-input"
type="checkbox">

<label class="form-check-label">

Email Notifications

</label>

</div>

<div class="form-check form-switch">

<input class="form-check-input"
type="checkbox"
checked>

<label class="form-check-label">

Offers & Promotions

</label>

</div>

</div>

</div>

<!-- =========================================
            LANGUAGE
========================================= -->

<div class="card border-0 shadow-sm mb-4">

<div class="card-header bg-white border-0 pt-4">

<h4 class="fw-bold">

Language & Region

</h4>

</div>

<div class="card-body">

<div class="row">

<div class="col-md-6">

<label class="form-label">

Language

</label>

<select class="form-select">

<option selected>English</option>

<option>Hindi</option>

<option>Gujarati</option>

<option>Malayalam</option>

</select>

</div>

<div class="col-md-6">

<label class="form-label">

Time Zone

</label>

<select class="form-select">

<option selected>Asia/Kolkata</option>

<option>UTC</option>

<option>Asia/Dubai</option>

</select>

</div>

</div>

</div>

</div>
<!-- =========================================
            PRIVACY SETTINGS
========================================= -->

<div class="card border-0 shadow-sm mb-4">

    <div class="card-header bg-white border-0 pt-4">

        <h4 class="fw-bold">

            Privacy Settings

        </h4>

    </div>

    <div class="card-body">

        <div class="form-check form-switch mb-3">

            <input class="form-check-input"
                   type="checkbox"
                   checked>

            <label class="form-check-label">

                Show Profile to Drivers

            </label>

        </div>

        <div class="form-check form-switch mb-3">

            <input class="form-check-input"
                   type="checkbox"
                   checked>

            <label class="form-check-label">

                Share Live Location During Ride

            </label>

        </div>

        <div class="form-check form-switch">

            <input class="form-check-input"
                   type="checkbox">

            <label class="form-check-label">

                Allow Marketing Emails

            </label>

        </div>

    </div>

</div>

<!-- =========================================
            CHANGE PASSWORD
========================================= -->

<div class="card border-0 shadow-sm mb-4">

    <div class="card-header bg-white border-0 pt-4">

        <h4 class="fw-bold">

            Change Password

        </h4>

    </div>

    <div class="card-body">

        <div class="row g-3">

            <div class="col-md-4">

                <label class="form-label">

                    Current Password

                </label>

                <input type="password"
                       class="form-control">

            </div>

            <div class="col-md-4">

                <label class="form-label">

                    New Password

                </label>

                <input type="password"
                       class="form-control">

            </div>

            <div class="col-md-4">

                <label class="form-label">

                    Confirm Password

                </label>

                <input type="password"
                       class="form-control">

            </div>

        </div>

    </div>

</div>

<!-- =========================================
            ACCOUNT MANAGEMENT
========================================= -->

<div class="card border-0 shadow-sm mb-4">

    <div class="card-header bg-white border-0 pt-4">

        <h4 class="fw-bold text-danger">

            Account Management

        </h4>

    </div>

    <div class="card-body">

        <div class="d-flex flex-wrap gap-3">

            <button class="btn btn-outline-warning">

                <i class="bi bi-box-arrow-right me-2"></i>

                Logout From All Devices

            </button>

            <button class="btn btn-outline-danger">

                <i class="bi bi-trash-fill me-2"></i>

                Delete Account

            </button>

        </div>

    </div>

</div>

<!-- =========================================
            SAVE SETTINGS
========================================= -->

<div class="text-end mb-5">

    <button class="btn btn-primary btn-lg px-5">

        <i class="bi bi-save-fill me-2"></i>

        Save Settings

    </button>

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