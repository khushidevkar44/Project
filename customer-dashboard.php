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

    <a class="nav-link" href="rride-history.php">
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


    <!-- Hero Banner -->

    <div class="card border-0 shadow-lg mb-4 overflow-hidden"
        style="border-radius:20px;
        background:linear-gradient(135deg,#2563eb,#1d4ed8,#0f172a);">

        <div class="card-body p-5">

            <div class="row align-items-center">

                <div class="col-lg-8">

                    <span class="badge bg-light text-primary mb-3 px-3 py-2">

                        Customer Dashboard

                    </span>

                    <h2 class="fw-bold text-white mb-3">

                        Welcome Back 👋

                    </h2>

                    <p class="text-white opacity-75 fs-5 mb-4">

                        Book rides, manage your bookings, track payments and
                        enjoy a smooth travelling experience with RideHub.

                    </p>

                    <a href="book-ride.php" class="btn btn-light px-4 py-2 fw-semibold">

                        <i class="bi bi-car-front-fill me-2"></i>

                        Book Ride

                    </a>

                </div>

                <div class="col-lg-4 text-center">

                    <i class="bi bi-taxi-front-fill text-white"
                        style="font-size:150px;opacity:.18;"></i>

                </div>

            </div>

        </div>

    </div>

    <!-- Statistics -->

    <div class="row g-4">

        <!-- Total Rides -->

        <div class="col-xl-3 col-md-6">

            <div class="card border-0 shadow-sm h-100">

                <div class="card-body">

                    <div class="d-flex justify-content-between align-items-center">

                        <div>

                            <small class="text-muted">

                                Total Rides

                            </small>

                            <h2 class="fw-bold mt-2 mb-1">

                                126

                            </h2>

                            <span class="text-success">

                                <i class="bi bi-arrow-up"></i>

                                +12 This Month

                            </span>

                        </div>

                        <div class="rounded-circle bg-primary bg-opacity-10 p-3">

                            <i class="bi bi-car-front-fill fs-2 text-primary"></i>

                        </div>

                    </div>

                </div>

            </div>

        </div>

        <!-- Wallet -->

        <div class="col-xl-3 col-md-6">

            <div class="card border-0 shadow-sm h-100">

                <div class="card-body">

                    <div class="d-flex justify-content-between align-items-center">

                        <div>

                            <small class="text-muted">

                                Wallet Balance

                            </small>

                            <h2 class="fw-bold mt-2 mb-1">

                                ₹2,450

                            </h2>

                            <span class="text-success">

                                Available Balance

                            </span>

                        </div>

                        <div class="rounded-circle bg-success bg-opacity-10 p-3">

                            <i class="bi bi-wallet2 fs-2 text-success"></i>

                        </div>

                    </div>

                </div>

            </div>

        </div>

        <!-- Bookings -->

        <div class="col-xl-3 col-md-6">

            <div class="card border-0 shadow-sm h-100">

                <div class="card-body">

                    <div class="d-flex justify-content-between align-items-center">

                        <div>

                            <small class="text-muted">

                                Pending Bookings

                            </small>

                            <h2 class="fw-bold mt-2 mb-1">

                                04

                            </h2>

                            <span class="text-warning">

                                Waiting Confirmation

                            </span>

                        </div>

                        <div class="rounded-circle bg-warning bg-opacity-10 p-3">

                            <i class="bi bi-journal-check fs-2 text-warning"></i>

                        </div>

                    </div>

                </div>

            </div>

        </div>

        <!-- Total Spending -->

        <div class="col-xl-3 col-md-6">

            <div class="card border-0 shadow-sm h-100">

                <div class="card-body">

                    <div class="d-flex justify-content-between align-items-center">

                        <div>

                            <small class="text-muted">

                                Total Spending

                            </small>

                            <h2 class="fw-bold mt-2 mb-1">

                                ₹18,650

                            </h2>

                            <span class="text-danger">

                                Overall Expense

                            </span>

                        </div>

                        <div class="rounded-circle bg-danger bg-opacity-10 p-3">

                            <i class="bi bi-cash-stack fs-2 text-danger"></i>

                        </div>

                    </div>

                </div>

            </div>

        </div>

    </div>

    <br>

</div>
<!-- Quick Actions -->

<div class="row mt-2 mb-4">

    <div class="col-12">

        <h4 class="fw-bold mb-3">

            Quick Actions

        </h4>

    </div>

    <div class="col-xl-3 col-md-6 mb-3">

        <a href="book-ride.php" class="text-decoration-none">

            <div class="card border-0 shadow-sm h-100">

                <div class="card-body text-center py-4">

                    <div class="bg-primary bg-opacity-10 rounded-circle d-inline-flex p-4 mb-3">

                        <i class="bi bi-car-front-fill fs-2 text-primary"></i>

                    </div>

                    <h5 class="fw-bold">

                        Book Ride

                    </h5>

                    <p class="text-muted mb-0">

                        Book your next ride instantly.

                    </p>

                </div>

            </div>

        </a>

    </div>

    <div class="col-xl-3 col-md-6 mb-3">

        <a href="my-bookings.php" class="text-decoration-none">

            <div class="card border-0 shadow-sm h-100">

                <div class="card-body text-center py-4">

                    <div class="bg-success bg-opacity-10 rounded-circle d-inline-flex p-4 mb-3">

                        <i class="bi bi-journal-check fs-2 text-success"></i>

                    </div>

                    <h5 class="fw-bold">

                        My Bookings

                    </h5>

                    <p class="text-muted mb-0">

                        View all ride bookings.

                    </p>

                </div>

            </div>

        </a>

    </div>

    <div class="col-xl-3 col-md-6 mb-3">

        <a href="wallet.php" class="text-decoration-none">

            <div class="card border-0 shadow-sm h-100">

                <div class="card-body text-center py-4">

                    <div class="bg-warning bg-opacity-10 rounded-circle d-inline-flex p-4 mb-3">

                        <i class="bi bi-wallet2 fs-2 text-warning"></i>

                    </div>

                    <h5 class="fw-bold">

                        Wallet

                    </h5>

                    <p class="text-muted mb-0">

                        Manage your wallet balance.

                    </p>

                </div>

            </div>

        </a>

    </div>

    <div class="col-xl-3 col-md-6 mb-3">

        <a href="payments.php" class="text-decoration-none">

            <div class="card border-0 shadow-sm h-100">

                <div class="card-body text-center py-4">

                    <div class="bg-danger bg-opacity-10 rounded-circle d-inline-flex p-4 mb-3">

                        <i class="bi bi-credit-card-2-front-fill fs-2 text-danger"></i>

                    </div>

                    <h5 class="fw-bold">

                        Payments

                    </h5>

                    <p class="text-muted mb-0">

                        View payment history.

                    </p>

                </div>

            </div>

        </a>

    </div>

</div>

<!-- Recent Bookings -->

<div class="card border-0 shadow-sm mb-4">

    <div class="card-header bg-white border-0 pt-4">

        <div class="d-flex justify-content-between align-items-center">

            <h4 class="fw-bold mb-0">

                Recent Bookings

            </h4>

            <a href="my-bookings.php" class="btn btn-primary btn-sm">

                View All

            </a>

        </div>

    </div>

    <div class="card-body">

        <div class="table-responsive">

            <table class="table table-hover align-middle">

                <thead>

                    <tr>

                        <th>Booking ID</th>

                        <th>Pickup</th>

                        <th>Destination</th>

                        <th>Driver</th>

                        <th>Status</th>

                        <th>Fare</th>

                    </tr>

                </thead>

                <tbody>

                    <tr>

                        <td>#BK101</td>

                        <td>Railway Station</td>

                        <td>Airport</td>

                        <td>Rahul Patel</td>

                        <td>

                            <span class="badge bg-success">

                                Completed

                            </span>

                        </td>

                        <td>₹480</td>

                    </tr>

                    <tr>

                        <td>#BK102</td>

                        <td>City Mall</td>

                        <td>Home</td>

                        <td>Waiting</td>

                        <td>

                            <span class="badge bg-warning text-dark">

                                Pending

                            </span>

                        </td>

                        <td>₹260</td>

                    </tr>

                    <tr>

                        <td>#BK103</td>

                        <td>Office</td>

                        <td>Hotel</td>

                        <td>Amit Shah</td>

                        <td>

                            <span class="badge bg-primary">

                                Confirmed

                            </span>

                        </td>

                        <td>₹350</td>

                    </tr>

                    <tr>

                        <td>#BK104</td>

                        <td>University</td>

                        <td>Bus Stand</td>

                        <td>Vikas Kumar</td>

                        <td>

                            <span class="badge bg-danger">

                                Cancelled

                            </span>

                        </td>

                        <td>₹0</td>

                    </tr>

                </tbody>

            </table>

        </div>

    </div>

</div>

<!-- Wallet Summary -->

<div class="card border-0 shadow-sm mb-4">

    <div class="card-header bg-white border-0 pt-4">

        <h4 class="fw-bold mb-0">

            Wallet Summary

        </h4>

    </div>

    <div class="card-body">

        <div class="row">

            <div class="col-md-4 text-center">

                <h3 class="text-success fw-bold">

                    ₹2,450

                </h3>

                <p class="text-muted">

                    Current Balance

                </p>

            </div>

            <div class="col-md-4 text-center">

                <h3 class="text-primary fw-bold">

                    ₹8,000

                </h3>

                <p class="text-muted">

                    Total Added

                </p>

            </div>

            <div class="col-md-4 text-center">

                <h3 class="text-danger fw-bold">

                    ₹5,550

                </h3>

                <p class="text-muted">

                    Total Spent

                </p>

            </div>

        </div>

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