<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <meta name="description" content="adminHMD professional admin dashboard template">
  <title>Dashboard | adminHMD</title>

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
    <i class="bi bi-car-front-fill"></i>
</span>          <span class="brand-copy">
            <span class="brand-title">RideHub</span>
            <span class="brand-subtitle">Admin Template</span>
          </span>
        </a>
      </div>

      <nav class="sidebar-nav">

    <a class="nav-link active" href="index.php">
        <span class="nav-icon">
            <i class="bi bi-speedometer2"></i>
        </span>
        <span class="nav-text">Dashboard</span>
    </a>

  <!-- Drivers -->
<div class="sidebar-item">

    <!-- Parent Menu -->
    <a class="nav-link d-flex justify-content-between align-items-center"
       data-bs-toggle="collapse"
       href="#driversMenu"
       role="button"
       aria-expanded="false"
       aria-controls="driversMenu">

        <div class="d-flex align-items-center">
            <span class="nav-icon">
                <i class="bi bi-person-badge"></i>
            </span>
            <span class="nav-text ms-2">Drivers</span>
        </div>

        <i class="bi bi-chevron-down"></i>
    </a>

    <!-- Sub Menu -->
<!-- Sub Menu -->
<div class="collapse ms-4 dropdown-menu-custom" id="driversMenu">
        <a class="nav-link sub-menu ps-3" href="drivers.php">
            <i class="bi bi-people"></i>
            <span>All Drivers</span>
        </a>

        <a class="nav-link sub-menu ps-3" href="add-driver.php">
            <i class="bi bi-person-plus"></i>
            <span>Add Driver</span>
        </a>

        <a class="nav-link sub-menu ps-3" href="driver-documents.php">
            <i class="bi bi-file-earmark-text"></i>
            <span>Driver Documents</span>
        </a>

        <a class="nav-link sub-menu ps-3" href="driver-verification.php">
            <i class="bi bi-shield-check"></i>
            <span>Driver Verification</span>
        </a>

        <a class="nav-link sub-menu ps-3" href="driver-requests.php">
            <i class="bi bi-person-check"></i>
            <span>Driver Requests</span>
        </a>

        <a class="nav-link sub-menu ps-3" href="driver-earnings.php">
            <i class="bi bi-cash-stack"></i>
            <span>Driver Earnings</span>
        </a>

    </div>

</div>

    <!-- Customers -->
<div class="sidebar-item">

    <!-- Parent Menu -->
    <a class="nav-link d-flex justify-content-between align-items-center"
       data-bs-toggle="collapse"
       href="#customersMenu"
       role="button"
       aria-expanded="false"
       aria-controls="customersMenu">

        <div class="d-flex align-items-center">
          
            <span class="nav-icon">
                <i class="bi bi-people"></i>
            </span>
            <span class="nav-text ms-2">Customers</span>
        </div>

        <i class="bi bi-chevron-down"></i>
    </a>

    <!-- Sub Menu -->
<div class="collapse ms-4 dropdown-menu-custom" id="customersMenu">
        <a class="nav-link sub-menu ps-3" href="customers.php">
            <i class="bi bi-people-fill"></i>
            <span>All Customers</span>
        </a>

        <a class="nav-link sub-menu ps-3" href="add-customer.php">
            <i class="bi bi-person-plus"></i>
            <span>Add Customer</span>
        </a>

       <!-- <a class="nav-link sub-menu ps-3" href="customer-documents.php">
            <i class="bi bi-file-earmark-text"></i>
            <span>Customer Documents</span>
        </a>

        <a class="nav-link sub-menu ps-3" href="customer-verification.php">
            <i class="bi bi-shield-check"></i>
            <span>Customer Verification</span>
        </a> -->

        <a class="nav-link sub-menu ps-3" href="customer-wallet.php">
            <i class="bi bi-wallet2"></i>
            <span>Customer Wallet</span>
        </a>

        <a class="nav-link sub-menu ps-3" href="customer-reviews.php">
            <i class="bi bi-star"></i>
            <span>Customer Reviews</span>
        </a>

    </div>

</div>

    <!-- Vehicles -->
<div class="sidebar-item">

    <!-- Parent Menu -->
    <a class="nav-link d-flex justify-content-between align-items-center"
       data-bs-toggle="collapse"
       href="#vehiclesMenu"
       role="button"
       aria-expanded="false"
       aria-controls="vehiclesMenu">

        <div class="d-flex align-items-center">
            <span class="nav-icon">
                <i class="bi bi-car-front"></i>
            </span>
            <span class="nav-text ms-2">Vehicles</span>
        </div>

        <i class="bi bi-chevron-down"></i>
    </a>

    <!-- Sub Menu -->
    <div class="collapse ms-4 dropdown-menu-custom" id="vehiclesMenu">

        <a class="nav-link sub-menu ps-3" href="cars.php">
            <i class="bi bi-car-front-fill"></i>
            <span>Cars</span>
        </a>

        <a class="nav-link sub-menu ps-3" href="two-wheelers.php">
            <i class="bi bi-bicycle"></i>
            <span>Two Wheelers</span>
        </a>

        <a class="nav-link sub-menu ps-3" href="vehicle-documents.php">
            <i class="bi bi-file-earmark-text"></i>
            <span>Vehicle Documents</span>
        </a>

        <a class="nav-link sub-menu ps-3" href="vehicle-verification.php">
            <i class="bi bi-shield-check"></i>
            <span>Vehicle Verification</span>
        </a>

    </div>

</div>

   <!-- Rides -->
<div class="sidebar-item">

    <!-- Parent Menu -->
    <a class="nav-link d-flex justify-content-between align-items-center"
       data-bs-toggle="collapse"
       href="#ridesMenu"
       role="button"
       aria-expanded="false"
       aria-controls="ridesMenu">

        <div class="d-flex align-items-center">
            <span class="nav-icon">
                <i class="bi bi-sign-turn-right"></i>
            </span>
            <span class="nav-text ms-2">Rides</span>
        </div>

        <i class="bi bi-chevron-down"></i>
    </a>

    <!-- Sub Menu -->
    <div class="collapse ms-4 dropdown-menu-custom" id="ridesMenu">

        <a class="nav-link sub-menu ps-3" href="ride-requests.php">
            <i class="bi bi-clock-history"></i>
            <span>Ride Requests</span>
        </a>

        <a class="nav-link sub-menu ps-3" href="active-rides.php">
            <i class="bi bi-play-circle"></i>
            <span>Active Rides</span>
        </a>

        <a class="nav-link sub-menu ps-3" href="completed-rides.php">
            <i class="bi bi-check-circle"></i>
            <span>Completed Rides</span>
        </a>

        <a class="nav-link sub-menu ps-3" href="cancelled-rides.php">
            <i class="bi bi-x-circle"></i>
            <span>Cancelled Rides</span>
        </a>

    </div>

</div>

    <!-- Bookings -->
<div class="sidebar-item">

    <!-- Parent Menu -->
    <a class="nav-link d-flex justify-content-between align-items-center"
       data-bs-toggle="collapse"
       href="#bookingsMenu"
       role="button"
       aria-expanded="false"
       aria-controls="bookingsMenu">

        <div class="d-flex align-items-center">
            <span class="nav-icon">
                <i class="bi bi-calendar-check"></i>
            </span>
            <span class="nav-text ms-2">Bookings</span>
        </div>

        <i class="bi bi-chevron-down"></i>
    </a>

    <!-- Sub Menu -->
    <div class="collapse ms-4 dropdown-menu-custom" id="bookingsMenu">

        <a class="nav-link sub-menu ps-3" href="bookings.php">
            <i class="bi bi-card-checklist"></i>
            <span>All Bookings</span>
        </a>

        <a class="nav-link sub-menu ps-3" href="pending-bookings.php">
            <i class="bi bi-hourglass-split"></i>
            <span>Pending Bookings</span>
        </a>

        <a class="nav-link sub-menu ps-3" href="confirmed-bookings.php">
            <i class="bi bi-check-circle"></i>
            <span>Confirmed Bookings</span>
        </a>

    </div>

</div>

   <!-- Payments -->
<div class="sidebar-item">

    <!-- Parent Menu -->
    <a class="nav-link d-flex justify-content-between align-items-center"
       data-bs-toggle="collapse"
       href="#paymentsMenu"
       role="button"
       aria-expanded="false"
       aria-controls="paymentsMenu">

        <div class="d-flex align-items-center">
            <span class="nav-icon">
                <i class="bi bi-credit-card"></i>
            </span>
            <span class="nav-text ms-2">Payments</span>
        </div>

        <i class="bi bi-chevron-down"></i>
    </a>

    <!-- Sub Menu -->
    <div class="collapse ms-4 dropdown-menu-custom" id="paymentsMenu">

        <a class="nav-link sub-menu ps-3" href="pending-payments.php">
            <i class="bi bi-hourglass-split"></i>
            <span>Pending Payments</span>
        </a>

        <a class="nav-link sub-menu ps-3" href="completed-payments.php">
            <i class="bi bi-check-circle"></i>
            <span>Completed Payments</span>
        </a>

        <a class="nav-link sub-menu ps-3" href="failed-payments.php">
            <i class="bi bi-x-circle"></i>
            <span>Failed Payments</span>
        </a>

        <a class="nav-link sub-menu ps-3" href="refund-requests.php">
            <i class="bi bi-arrow-counterclockwise"></i>
            <span>Refund Requests</span>
        </a>

    </div>

</div>

   <!-- Communication -->
<div class="sidebar-item">

    <!-- Parent Menu -->
    <a class="nav-link d-flex justify-content-between align-items-center"
       data-bs-toggle="collapse"
       href="#communicationMenu"
       role="button"
       aria-expanded="false"
       aria-controls="communicationMenu">

        <div class="d-flex align-items-center">
            <span class="nav-icon">
                <i class="bi bi-chat-dots"></i>
            </span>
            <span class="nav-text ms-2">Communication</span>
        </div>

        <i class="bi bi-chevron-down"></i>
    </a>

    <!-- Sub Menu -->
    <div class="collapse ms-4 dropdown-menu-custom" id="communicationMenu">

        <a class="nav-link sub-menu ps-3" href="messages.php">
            <i class="bi bi-chat-left-text"></i>
            <span>Messages</span>
        </a>

        <a class="nav-link sub-menu ps-3" href="notifications.php">
            <i class="bi bi-bell"></i>
            <span>Notifications</span>
        </a>

        <a class="nav-link sub-menu ps-3" href="reviews.php">
            <i class="bi bi-star"></i>
            <span>Reviews</span>
        </a>

    </div>

</div>
    <a class="nav-link" href="reports.php">
        <span class="nav-icon">
            <i class="bi bi-bar-chart"></i>
        </span>
        <span class="nav-text">Reports</span>
    </a>

    <a class="nav-link" href="settings.php">
        <span class="nav-icon">
            <i class="bi bi-gear"></i>
        </span>
        <span class="nav-text">Settings</span>
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
            <input class="form-control search-input" type="search" placeholder="Search drivers, customers, rides..." aria-label="Search">
          </form>

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
                  <span class="notification-title">New Driver Registered</span>
                  <span class="notification-time">4 minutes ago</span>
                </a>
                <a class="dropdown-item" href="charts.html">
                  <span class="notification-title">New Ride Booking</span>
                  <span class="notification-time">32 minutes ago</span>
                </a>
                <a class="dropdown-item" href="settings.html">
                  <span class="notification-title">Payment Received</span>
                  <span class="notification-time">1 hour ago</span>
                </a>
              </div>
            </div>

            <div class="dropdown">
              <button class="profile-button dropdown-toggle" type="button" data-bs-toggle="dropdown" aria-expanded="false">
                <img class="avatar-img avatar-sm" src="../assets/images/avatar/avatar.jpg" alt="Admin Hasan">
                <span class="profile-name d-none d-sm-inline">Admin Hasan</span>
              </button>
              <ul class="dropdown-menu dropdown-menu-end">
                <li><a class="dropdown-item" href="profile.html">Profile</a></li>
                <li><a class="dropdown-item" href="settings.html">Account settings</a></li>
                <li><hr class="dropdown-divider"></li>
                <li><a class="dropdown-item" href="login.html">Sign out</a></li>
              </ul>
            </div>
          </div>
        </div>
      </nav>
      <main class="dashboard-content">
<div class="container-fluid px-3 px-lg-4 py-4">

    <!-- Page Heading -->
    <div class="page-heading">

        <div class="page-heading-copy">

            <span class="page-icon">
                <i class="bi bi-person-check-fill"></i>
            </span>

            <div>
                <p class="eyebrow mb-1">DRIVER MANAGEMENT</p>
                <h1 class="h3 mb-1">Driver Requests</h1>
                <p class="text-muted mb-0">
                    Review and manage new driver registration requests.
                </p>
            </div>

        </div>

        <div class="heading-actions">

            <a href="drivers.php" class="btn btn-secondary btn-sm">
                <i class="bi bi-arrow-left"></i>
                Back
            </a>

        </div>

    </div>

    <!-- Search Card -->
    <div class="card shadow-sm border-0 mb-4">

        <div class="card-body">

            <div class="row align-items-end">

                <div class="col-md-5 mb-3">

                    <label class="form-label">Search Driver</label>

                    <input type="text"
                           class="form-control"
                           placeholder="Enter Driver Name">

                </div>

                <div class="col-md-5 mb-3">

                    <label class="form-label">Request Status</label>

                    <select class="form-select">

                        <option>All Requests</option>
                        <option>Pending</option>
                        <option>Approved</option>
                        <option>Rejected</option>

                    </select>

                </div>

                <div class="col-md-2 mb-3 d-grid">

                    <button class="btn btn-primary">

                        <i class="bi bi-search"></i>

                        Search

                    </button>

                </div>

            </div>

        </div>

    </div>
    <!-- Driver Requests Table -->
<div class="card shadow-sm border-0">

    <div class="card-header bg-transparent">
        <h5 class="mb-0">
            <i class="bi bi-person-lines-fill me-2"></i>
            Driver Requests List
        </h5>
    </div>

    <div class="card-body p-0">

        <div class="table-responsive">

            <table class="table table-dark table-hover align-middle mb-0">

                <thead>
                    <tr>
                        <th>#</th>
                        <th>Driver Name</th>
                        <th>Phone</th>
                        <th>City</th>
                        <th>Request Date</th>
                        <th>Status</th>
                        <th>Action</th>
                    </tr>
                </thead>

                <tbody>

                    <tr>
                        <td>1</td>
                        <td>Rahul Patel</td>
                        <td>9876543210</td>
                        <td>Surat</td>
                        <td>15-07-2026</td>
                        <td>
                            <span class="badge bg-warning text-dark">Pending</span>
                        </td>
                        <td>
                            <button class="btn btn-sm btn-primary me-1">
                                <i class="bi bi-eye"></i>
                            </button>

                            <button class="btn btn-sm btn-success me-1">
                                <i class="bi bi-check-lg"></i>
                            </button>

                            <button class="btn btn-sm btn-danger">
                                <i class="bi bi-x-lg"></i>
                            </button>
                        </td>
                    </tr>

                    <tr>
                        <td>2</td>
                        <td>Amit Shah</td>
                        <td>9988776655</td>
                        <td>Ahmedabad</td>
                        <td>14-07-2026</td>
                        <td>
                            <span class="badge bg-success">Approved</span>
                        </td>
                        <td>
                            <button class="btn btn-sm btn-primary">
                                <i class="bi bi-eye"></i>
                            </button>
                        </td>
                    </tr>

                    <tr>
                        <td>3</td>
                        <td>Neha Sharma</td>
                        <td>9123456789</td>
                        <td>Mumbai</td>
                        <td>13-07-2026</td>
                        <td>
                            <span class="badge bg-danger">Rejected</span>
                        </td>
                        <td>
                            <button class="btn btn-sm btn-primary">
                                <i class="bi bi-eye"></i>
                            </button>
                        </td>
                    </tr>

                </tbody>

            </table>

        </div>

    </div>

</div>

</div>
</main>
<footer class="admin-footer">
    <div class="container-fluid px-3 px-lg-4">
        <span>© 2026 RideHub. All Rights Reserved.</span>
        <span>RideHub Car Pooling Admin Panel</span>
    </div>
</footer>

  <script src="../assets/js/bootstrap.bundle.min.js"></script>
  <script src="../assets/js/main.js"></script>
</body>
</html>