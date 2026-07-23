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
    <!-- ===========================
     HERO BANNER
=========================== -->

<div class="card border-0 shadow-lg mb-4"
     style="border-radius:20px;
     background:linear-gradient(135deg,#2563eb,#1d4ed8,#0f172a);">

    <div class="card-body p-5">

        <div class="row align-items-center">

            <div class="col-lg-8">

                <span class="badge bg-light text-primary px-3 py-2 mb-3">

                    Ride Booking

                </span>

                <h2 class="fw-bold text-white mb-3">

                    Book Your Ride 🚖

                </h2>

                <p class="text-white opacity-75 fs-5 mb-4">

                    Book a safe, comfortable and affordable ride anytime with RideHub.

                </p>

                <button class="btn btn-light px-4">

                    <i class="bi bi-geo-alt-fill me-2"></i>

                    Use Current Location

                </button>

            </div>

            <div class="col-lg-4 text-center">

                <i class="bi bi-car-front-fill text-white"
                   style="font-size:140px;opacity:.18;"></i>

            </div>

        </div>

    </div>

</div>

<!-- ===========================
     PICKUP & DESTINATION
=========================== -->

<div class="row g-4 mb-4">

    <div class="col-lg-6">

        <div class="card border-0 shadow-sm h-100">

            <div class="card-header bg-white border-0 pt-4">

                <h4 class="fw-bold">

                    Pickup Details

                </h4>

            </div>

            <div class="card-body">

                <div class="mb-3">

                    <label class="form-label">

                        Pickup Location

                    </label>

                    <input
                    type="text"
                    class="form-control"
                    placeholder="Enter Pickup Location">

                </div>

                <div class="mb-3">

                    <label class="form-label">

                        Landmark

                    </label>

                    <input
                    type="text"
                    class="form-control"
                    placeholder="Nearby Landmark">

                </div>

                <button class="btn btn-outline-primary">

                    <i class="bi bi-crosshair me-2"></i>

                    Detect My Location

                </button>

            </div>

        </div>

    </div>

    <div class="col-lg-6">

        <div class="card border-0 shadow-sm h-100">

            <div class="card-header bg-white border-0 pt-4">

                <h4 class="fw-bold">

                    Destination Details

                </h4>

            </div>

            <div class="card-body">

                <div class="mb-3">

                    <label class="form-label">

                        Destination

                    </label>

                    <input
                    type="text"
                    class="form-control"
                    placeholder="Enter Destination">

                </div>

                <div class="mb-3">

                    <label class="form-label">

                        Landmark

                    </label>

                    <input
                    type="text"
                    class="form-control"
                    placeholder="Nearby Landmark">

                </div>

            </div>

        </div>

    </div>

</div>

<!-- ===========================
     RIDE DETAILS
=========================== -->

<div class="card border-0 shadow-sm mb-4">

    <div class="card-header bg-white border-0 pt-4">

        <h4 class="fw-bold">

            Ride Details

        </h4>

    </div>

    <div class="card-body">

        <div class="row g-4">

            <div class="col-md-6">

                <label class="form-label">

                    Vehicle Type

                </label>

                <select class="form-select">

                    <option selected>Select Vehicle</option>

                    <option>Bike</option>

                    <option>Auto</option>

                    <option>Mini</option>

                    <option>Sedan</option>

                    <option>SUV</option>

                    <option>Luxury</option>

                </select>

            </div>

            <div class="col-md-6">

                <label class="form-label">

                    Ride Type

                </label>

                <select class="form-select">

                    <option selected>Select Ride Type</option>

                    <option>One Way</option>

                    <option>Round Trip</option>

                </select>

            </div>

            <div class="col-md-6">

                <label class="form-label">

                    Pickup Date

                </label>

                <input
                type="date"
                class="form-control">

            </div>

            <div class="col-md-6">

                <label class="form-label">

                    Pickup Time

                </label>

                <input
                type="time"
                class="form-control">

            </div>

        </div>

    </div>

</div>
<!-- ===========================
     Fare Estimation
=========================== -->

<div class="card border-0 shadow-sm mb-4">

    <div class="card-header bg-white border-0 pt-4">

        <h4 class="fw-bold">

            Estimated Fare

        </h4>

    </div>

    <div class="card-body">

        <div class="row text-center">

            <div class="col-md-4">

                <h2 class="fw-bold text-primary">

                    12.5 KM

                </h2>

                <p class="text-muted">

                    Estimated Distance

                </p>

            </div>

            <div class="col-md-4">

                <h2 class="fw-bold text-success">

                    25 Min

                </h2>

                <p class="text-muted">

                    Estimated Time

                </p>

            </div>

            <div class="col-md-4">

                <h2 class="fw-bold text-danger">

                    ₹320

                </h2>

                <p class="text-muted">

                    Estimated Fare

                </p>

            </div>

        </div>

    </div>

</div>

<!-- ===========================
     Payment Method
=========================== -->

<div class="card border-0 shadow-sm mb-4">

    <div class="card-header bg-white border-0 pt-4">

        <h4 class="fw-bold">

            Payment Method

        </h4>

    </div>

    <div class="card-body">

        <div class="row g-3">

            <div class="col-md-3">

                <div class="form-check border rounded p-3">

                    <input class="form-check-input" type="radio" name="payment" checked>

                    <label class="form-check-label fw-semibold">

                        💵 Cash

                    </label>

                </div>

            </div>

            <div class="col-md-3">

                <div class="form-check border rounded p-3">

                    <input class="form-check-input" type="radio" name="payment">

                    <label class="form-check-label fw-semibold">

                        👛 Wallet

                    </label>

                </div>

            </div>

            <div class="col-md-3">

                <div class="form-check border rounded p-3">

                    <input class="form-check-input" type="radio" name="payment">

                    <label class="form-check-label fw-semibold">

                        📱 UPI

                    </label>

                </div>

            </div>

            <div class="col-md-3">

                <div class="form-check border rounded p-3">

                    <input class="form-check-input" type="radio" name="payment">

                    <label class="form-check-label fw-semibold">

                        💳 Card

                    </label>

                </div>

            </div>

        </div>

    </div>

</div>

<!-- ===========================
     Ride Notes
=========================== -->

<div class="card border-0 shadow-sm mb-4">

    <div class="card-header bg-white border-0 pt-4">

        <h4 class="fw-bold">

            Additional Notes

        </h4>

    </div>

    <div class="card-body">

        <textarea
        class="form-control"
        rows="5"
        placeholder="Driver Instructions / Landmark / Special Request"></textarea>

    </div>

</div>

<!-- ===========================
     Booking Summary
=========================== -->

<div class="card border-0 shadow-sm mb-4">

    <div class="card-header bg-white border-0 pt-4">

        <h4 class="fw-bold">

            Booking Summary

        </h4>

    </div>

    <div class="card-body">

        <table class="table">

            <tr>

                <th>Pickup</th>

                <td>Railway Station</td>

            </tr>

            <tr>

                <th>Destination</th>

                <td>Airport</td>

            </tr>

            <tr>

                <th>Vehicle</th>

                <td>Sedan</td>

            </tr>

            <tr>

                <th>Distance</th>

                <td>12.5 KM</td>

            </tr>

            <tr>

                <th>Estimated Fare</th>

                <td class="fw-bold text-success">

                    ₹320

                </td>

            </tr>

        </table>

    </div>

</div>

<!-- ===========================
     Confirm Button
=========================== -->

<div class="text-end mb-5">

    <button class="btn btn-primary btn-lg px-5">

        <i class="bi bi-check-circle-fill me-2"></i>

        Confirm Booking

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