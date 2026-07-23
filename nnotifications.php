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
background:linear-gradient(135deg,#dc2626,#f97316,#7f1d1d);">

<div class="card-body p-5">

<div class="row align-items-center">

<div class="col-lg-8">

<span class="badge bg-light text-danger px-3 py-2 mb-3">

Notification Center

</span>

<h2 class="fw-bold text-white mb-3">

Notifications 🔔

</h2>

<p class="text-white opacity-75 fs-5 mb-4">

Stay updated with ride requests, payment alerts, offers and important RideHub announcements.

</p>

<button class="btn btn-light px-4">

<i class="bi bi-check2-all me-2"></i>

Mark All as Read

</button>

</div>

<div class="col-lg-4 text-center">

<i class="bi bi-bell-fill text-white"
style="font-size:130px;opacity:.18;"></i>

</div>

</div>

</div>

</div>

<!-- =========================================
            SUMMARY CARDS
========================================= -->

<div class="row g-4 mb-4">

<div class="col-lg-3">

<div class="card border-0 shadow-sm">

<div class="card-body text-center">

<h6 class="text-muted">

Total Notifications

</h6>

<h2 class="fw-bold text-primary">

128

</h2>

<i class="bi bi-bell-fill fs-1 text-primary"></i>

</div>

</div>

</div>

<div class="col-lg-3">

<div class="card border-0 shadow-sm">

<div class="card-body text-center">

<h6 class="text-muted">

Unread

</h6>

<h2 class="fw-bold text-danger">

12

</h2>

<i class="bi bi-envelope-fill fs-1 text-danger"></i>

</div>

</div>

</div>

<div class="col-lg-3">

<div class="card border-0 shadow-sm">

<div class="card-body text-center">

<h6 class="text-muted">

Ride Alerts

</h6>

<h2 class="fw-bold text-success">

46

</h2>

<i class="bi bi-car-front-fill fs-1 text-success"></i>

</div>

</div>

</div>

<div class="col-lg-3">

<div class="card border-0 shadow-sm">

<div class="card-body text-center">

<h6 class="text-muted">

Offers

</h6>

<h2 class="fw-bold text-warning">

18

</h2>

<i class="bi bi-gift-fill fs-1 text-warning"></i>

</div>

</div>

</div>

</div>

<!-- =========================================
            SEARCH FILTER
========================================= -->

<div class="card border-0 shadow-sm mb-4">

<div class="card-header bg-white border-0 pt-4">

<h4 class="fw-bold">

Search Notifications

</h4>

</div>

<div class="card-body">

<div class="row g-3">

<div class="col-lg-5">

<label class="form-label">

Search

</label>

<input
type="text"
class="form-control"
placeholder="Search notifications...">

</div>

<div class="col-lg-3">

<label class="form-label">

Category

</label>

<select class="form-select">

<option>All</option>
<option>Ride</option>
<option>Payment</option>
<option>Offer</option>
<option>Account</option>

</select>

</div>

<div class="col-lg-2">

<label class="form-label">

Status

</label>

<select class="form-select">

<option>All</option>
<option>Read</option>
<option>Unread</option>

</select>

</div>

<div class="col-lg-2 d-grid">

<label class="form-label text-white">

Search

</label>

<button class="btn btn-primary">

<i class="bi bi-search me-2"></i>

Search

</button>

</div>

</div>

</div>

</div>
<!-- =========================================
            NOTIFICATION LIST
========================================= -->

<div class="card border-0 shadow-sm mb-4">

    <div class="card-header bg-white border-0 pt-4 d-flex justify-content-between align-items-center">

        <h4 class="fw-bold mb-0">

            Recent Notifications

        </h4>

        <span class="badge bg-primary">

            128 Notifications

        </span>

    </div>

    <div class="card-body">

        <!-- Notification 1 -->

        <div class="d-flex justify-content-between align-items-start border-bottom pb-3 mb-3">

            <div>

                <h6 class="fw-bold text-primary">

                    🚖 Driver Assigned

                </h6>

                <p class="mb-1">

                    Rahul Patel has accepted your booking and is on the way.

                </p>

                <small class="text-muted">

                    Today • 09:15 AM

                </small>

            </div>

            <div>

                <button class="btn btn-sm btn-outline-success me-2">

                    <i class="bi bi-check2"></i>

                </button>

                <button class="btn btn-sm btn-outline-danger">

                    <i class="bi bi-trash"></i>

                </button>

            </div>

        </div>

        <!-- Notification 2 -->

        <div class="d-flex justify-content-between align-items-start border-bottom pb-3 mb-3">

            <div>

                <h6 class="fw-bold text-success">

                    💳 Payment Successful

                </h6>

                <p class="mb-1">

                    ₹480 has been successfully paid for Ride #RH101.

                </p>

                <small class="text-muted">

                    Today • 08:40 AM

                </small>

            </div>

            <div>

                <button class="btn btn-sm btn-outline-success me-2">

                    <i class="bi bi-check2"></i>

                </button>

                <button class="btn btn-sm btn-outline-danger">

                    <i class="bi bi-trash"></i>

                </button>

            </div>

        </div>

        <!-- Notification 3 -->

        <div class="d-flex justify-content-between align-items-start border-bottom pb-3 mb-3">

            <div>

                <h6 class="fw-bold text-warning">

                    🎁 Special Offer

                </h6>

                <p class="mb-1">

                    Get 25% OFF on your next ride using code <strong>RIDE25</strong>.

                </p>

                <small class="text-muted">

                    Yesterday • 06:20 PM

                </small>

            </div>

            <div>

                <button class="btn btn-sm btn-outline-success me-2">

                    <i class="bi bi-check2"></i>

                </button>

                <button class="btn btn-sm btn-outline-danger">

                    <i class="bi bi-trash"></i>

                </button>

            </div>

        </div>

        <!-- Notification 4 -->

        <div class="d-flex justify-content-between align-items-start">

            <div>

                <h6 class="fw-bold text-danger">

                    📢 Ride Cancelled

                </h6>

                <p class="mb-1">

                    Your ride #RH097 has been cancelled. Refund will be processed shortly.

                </p>

                <small class="text-muted">

                    16 Jul 2026

                </small>

            </div>

            <div>

                <button class="btn btn-sm btn-outline-success me-2">

                    <i class="bi bi-check2"></i>

                </button>

                <button class="btn btn-sm btn-outline-danger">

                    <i class="bi bi-trash"></i>

                </button>

            </div>

        </div>

    </div>

</div>

<!-- =========================================
            NOTIFICATION SETTINGS
========================================= -->

<div class="card border-0 shadow-sm mb-4">

    <div class="card-header bg-white border-0 pt-4">

        <h4 class="fw-bold">

            Notification Preferences

        </h4>

    </div>

    <div class="card-body">

        <div class="form-check form-switch mb-3">

            <input class="form-check-input" type="checkbox" checked>

            <label class="form-check-label">

                Ride Updates

            </label>

        </div>

        <div class="form-check form-switch mb-3">

            <input class="form-check-input" type="checkbox" checked>

            <label class="form-check-label">

                Payment Notifications

            </label>

        </div>

        <div class="form-check form-switch mb-3">

            <input class="form-check-input" type="checkbox" checked>

            <label class="form-check-label">

                Promotional Offers

            </label>

        </div>

        <div class="form-check form-switch">

            <input class="form-check-input" type="checkbox">

            <label class="form-check-label">

                Email Notifications

            </label>

        </div>

    </div>

</div>

<!-- =========================================
            PAGINATION
========================================= -->

<nav class="d-flex justify-content-end mb-5">

    <ul class="pagination">

        <li class="page-item disabled">

            <a class="page-link" href="#">

                Previous

            </a>

        </li>

        <li class="page-item active">

            <a class="page-link" href="#">

                1

            </a>

        </li>

        <li class="page-item">

            <a class="page-link" href="#">

                2

            </a>

        </li>

        <li class="page-item">

            <a class="page-link" href="#">

                3

            </a>

        </li>

        <li class="page-item">

            <a class="page-link" href="#">

                Next

            </a>

        </li>

    </ul>

</nav>

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