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
          <div class="page-heading">
            <div class="page-heading-copy">
              <span class="page-icon"><i class="bi bi-speedometer2" aria-hidden="true"></i></span>
              <div>
               <p class="eyebrow mb-1">RideHub Overview</p>
               <h1 class="h3 mb-1">Dashboard</h1>
               <p class="text-muted mb-0">Monitor drivers, customers, rides and bookings from one dashboard.</p>
              </div>
            </div>
          </div>
<section class="row g-3 mt-1" aria-label="Dashboard metrics">

    <!-- Total Drivers -->
    <div class="col-12 col-sm-6 col-xl-3">
        <article class="metric-card metric-primary">
            <div class="metric-top">
                <span class="metric-label">Total Drivers</span>
                <span class="metric-icon">
                    <i class="bi bi-person-badge"></i>
                </span>
            </div>

            <div class="metric-value">120</div>

            <div class="metric-meta">
                <span class="text-success">+8</span>
                <span>new drivers</span>
            </div>
        </article>
    </div>

    <!-- Total Customers -->
    <div class="col-12 col-sm-6 col-xl-3">
        <article class="metric-card metric-success">
            <div class="metric-top">
                <span class="metric-label">Total Customers</span>
                <span class="metric-icon">
                    <i class="bi bi-people-fill"></i>
                </span>
            </div>

            <div class="metric-value">850</div>

            <div class="metric-meta">
                <span class="text-success">+15</span>
                <span>new customers</span>
            </div>
        </article>
    </div>

    <!-- Active Rides -->
    <div class="col-12 col-sm-6 col-xl-3">
        <article class="metric-card metric-warning">
            <div class="metric-top">
                <span class="metric-label">Active Rides</span>
                <span class="metric-icon">
                    <i class="bi bi-car-front-fill"></i>
                </span>
            </div>

            <div class="metric-value">48</div>

            <div class="metric-meta">
                <span class="text-success">+6</span>
                <span>rides in progress</span>
            </div>
        </article>
    </div>

    <!-- Total Revenue -->
    <div class="col-12 col-sm-6 col-xl-3">
        <article class="metric-card metric-danger">
            <div class="metric-top">
                <span class="metric-label">Total Revenue</span>
                <span class="metric-icon">
                    <i class="bi bi-currency-rupee"></i>
                </span>
            </div>

            <div class="metric-value">₹2,45,000</div>

            <div class="metric-meta">
                <span class="text-success">+12%</span>
                <span>this month</span>
            </div>
        </article>
    </div>

</section>

          <section class="row g-3 mt-1">
            <div class="col-12 col-xl-12">
              <div class="panel">
                <div class="panel-header">
                  <div>
                  <h2 class="h5 mb-1 section-title">
    <i class="bi bi-car-front-fill" aria-hidden="true"></i>
    <span>Monthly Ride Statistics</span>
</h2>

<p class="text-muted mb-0">
    Monthly completed rides across the RideHub platform.
</p>

<a class="btn btn-light btn-sm" href="reports.php">
    View Report
</a>

                <div class="chart-bars " aria-label="Sales performance chart">
                  <div class="chart-column bar-42"><span></span><small>Jan</small></div>
                  <div class="chart-column bar-58"><span></span><small>Feb</small></div>
                  <div class="chart-column bar-51"><span></span><small>Mar</small></div>
                  <div class="chart-column bar-72"><span></span><small>Apr</small></div>
                  <div class="chart-column bar-66"><span></span><small>May</small></div>
                  <div class="chart-column bar-83"><span></span><small>Jun</small></div>
                </div>
              </div>
            </div>

            <div class="col-12 col-xl-12">
              <div class="panel h-100">
                <div class="panel-header">
                  <div>
                   <h2 class="h5 mb-1 section-title">
    <i class="bi bi-clock-history" aria-hidden="true"></i>
    <span>Recent Activities</span>
</h2>

<p class="text-muted mb-0">
    Latest activities on the RideHub platform.
</p>
                  </div>
                </div>

               <div class="activity-list">

    <div class="activity-item">
        <span class="activity-dot bg-primary"></span>
        <div>
            <p class="mb-1 fw-semibold">New Driver Registered</p>
            <p class="text-muted small mb-0">
                Rahul Patel joined RideHub as a new driver.
            </p>
        </div>
    </div>

    <div class="activity-item">
        <span class="activity-dot bg-success"></span>
        <div>
            <p class="mb-1 fw-semibold">Ride Completed</p>
            <p class="text-muted small mb-0">
                Ride #RD1025 completed successfully.
            </p>
        </div>
    </div>

    <div class="activity-item">
        <span class="activity-dot bg-warning"></span>
        <div>
            <p class="mb-1 fw-semibold">Payment Received</p>
            <p class="text-muted small mb-0">
                ₹850 payment received for Booking #BK210.
            </p>
        </div>
    </div>

    <div class="activity-item">
        <span class="activity-dot bg-info"></span>
        <div>
            <p class="mb-1 fw-semibold">Vehicle Verified</p>
            <p class="text-muted small mb-0">
                Vehicle GJ05AB1234 verified successfully.
            </p>
        </div>
    </div>

</div>
              </div>
            </div>
          </section>

            <section class="panel mt-3">
            <div class="panel-header">
              <div>
    <h2 class="h5 mb-1 section-title">
        <i class="bi bi-calendar-check" aria-hidden="true"></i>
        <span>Recent Bookings</span>
    </h2>

    <p class="text-muted mb-0">
        Latest booking requests on the RideHub platform.
    </p>
</div>

<a class="btn btn-outline-secondary btn-sm" href="bookings.php">
    View All Bookings
</a>
            </div>
            <div class="table-responsive">
              <table class="table align-middle mb-0">
                <thead><tr><th scope="col">User</th><th scope="col">Role</th><th scope="col">Team</th><th scope="col">Status</th><th scope="col">Joined</th><th scope="col" class="text-end">Action</th></tr></thead>
                <tbody>
                  <tr>
                    <td>
                      <div class="d-flex align-items-center gap-2">
                        <img class="avatar-img avatar-sm" src="../assets/images/avatar/avatar-1.jpg" alt="Sarah Ahmed">
                        <div>
                          <p class="fw-semibold mb-0">Sarah Ahmed</p>
                          <p class="text-muted small mb-0">sarah@example.com</p>
                        </div>
                      </div>
                    </td>
                    <td>Admin</td>
                    <td>Operations</td>
                    <td><span class="badge text-bg-success">Active</span></td>
                    <td>Jan 12, 2026</td>
                    <td class="text-end"><a class="btn btn-light btn-sm" href="user-details.html">View</a></td>
                  </tr>
                  <tr>
                    <td>
                      <div class="d-flex align-items-center gap-2">
                        <img class="avatar-img avatar-sm" src="../assets/images/avatar/avatar-2.jpg" alt="Rafi Khan">
                        <div>
                          <p class="fw-semibold mb-0">Rafi Khan</p>
                          <p class="text-muted small mb-0">rafi@example.com</p>
                        </div>
                      </div>
                    </td>
                    <td>Manager</td>
                    <td>Sales</td>
                    <td><span class="badge text-bg-success">Active</span></td>
                    <td>Feb 03, 2026</td>
                    <td class="text-end"><a class="btn btn-light btn-sm" href="user-details.html">View</a></td>
                  </tr>
                  <tr>
                    <td>
                      <div class="d-flex align-items-center gap-2">
                        <img class="avatar-img avatar-sm" src="../assets/images/avatar/avatar-3.jpg" alt="Nadia Islam">
                        <div>
                          <p class="fw-semibold mb-0">Nadia Islam</p>
                          <p class="text-muted small mb-0">nadia@example.com</p>
                        </div>
                      </div>
                    </td>
                    <td>Editor</td>
                    <td>Content</td>
                    <td><span class="badge text-bg-warning">Pending</span></td>
                    <td>Mar 18, 2026</td>
                    <td class="text-end"><a class="btn btn-light btn-sm" href="user-details.html">View</a></td>
                  </tr>
                  <tr>
                    <td>
                      <div class="d-flex align-items-center gap-2">
                        <img class="avatar-img avatar-sm" src="../assets/images/avatar/avatar-4.jpg" alt="Mina Torres">
                        <div>
                          <p class="fw-semibold mb-0">Mina Torres</p>
                          <p class="text-muted small mb-0">mina@example.com</p>
                        </div>
                      </div>
                    </td>
                    <td>Viewer</td>
                    <td>Finance</td>
                    <td><span class="badge text-bg-secondary">Suspended</span></td>
                    <td>Apr 07, 2026</td>
                    <td class="text-end"><a class="btn btn-light btn-sm" href="user-details.html">View</a></td>
                  </tr>
                  <tr>
                    <td>
                      <div class="d-flex align-items-center gap-2">
                        <img class="avatar-img avatar-sm" src="../assets/images/avatar/avatar-5.jpg" alt="Jon Oliver">
                        <div>
                          <p class="fw-semibold mb-0">Jon Oliver</p>
                          <p class="text-muted small mb-0">jon@example.com</p>
                        </div>
                      </div>
                    </td>
                    <td>Analyst</td>
                    <td>Data</td>
                    <td><span class="badge text-bg-success">Active</span></td>
                    <td>Apr 22, 2026</td>
                    <td class="text-end"><a class="btn btn-light btn-sm" href="user-details.html">View</a></td>
                  </tr>
                </tbody>
              </table>
            </div>
          </section>
        </div>
      </main>

      <footer class="admin-footer">
        <div class="container-fluid px-3 px-lg-4">
<footer class="admin-footer">
    <div class="container-fluid px-3 px-lg-4">
        <span>© 2026 RideHub. All Rights Reserved.</span>
        <span>RideHub Car Pooling Admin Panel</span>
    </div>
</footer>          <span>Professional dashboard template.</span>
        </div>
      </footer>
    </div>
  </div>

  <script src="../assets/js/bootstrap.bundle.min.js"></script>
  <script src="../assets/js/main.js"></script>
</body>
</html>