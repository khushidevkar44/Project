=<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <meta name="description" content="adminHMD professional admin dashboard template">
<title>Driver Dashboard | RideHub</title>
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
<span class="brand-subtitle">Driver Panel</span>          </span>
        </a>
      </div>

      <nav class="sidebar-nav">

   <nav class="sidebar-nav">

    <a class="nav-link active" href="dashboard.php">
        <span class="nav-icon">
            <i class="bi bi-speedometer2"></i>
        </span>
        <span class="nav-text">Dashboard</span>
    </a>

    <a class="nav-link" href="ride-requests.php">
        <span class="nav-icon">
            <i class="bi bi-pin-map-fill"></i>
        </span>
        <span class="nav-text">Ride Requests</span>
    </a>

    <a class="nav-link" href="active-ride.php">
        <span class="nav-icon">
            <i class="bi bi-car-front-fill"></i>
        </span>
        <span class="nav-text">Active Ride</span>
    </a>

    <a class="nav-link" href="ride-history.php">
        <span class="nav-icon">
            <i class="bi bi-clock-history"></i>
        </span>
        <span class="nav-text">Ride History</span>
    </a>

    <a class="nav-link" href="earnings.php">
        <span class="nav-icon">
            <i class="bi bi-cash-stack"></i>
        </span>
        <span class="nav-text">Earnings</span>
    </a>

    <a class="nav-link" href="my-vehicle.php">
        <span class="nav-icon">
            <i class="bi bi-truck"></i>
        </span>
        <span class="nav-text">My Vehicle</span>
    </a>

    <a class="nav-link" href="my-documents.php">
        <span class="nav-icon">
            <i class="bi bi-file-earmark-text"></i>
        </span>
        <span class="nav-text">My Documents</span>
    </a>

    <a class="nav-link" href="reviews.php">
        <span class="nav-icon">
            <i class="bi bi-star-fill"></i>
        </span>
        <span class="nav-text">Reviews</span>
    </a>

    <a class="nav-link" href="notifications.php">
        <span class="nav-icon">
            <i class="bi bi-bell-fill"></i>
        </span>
        <span class="nav-text">Notifications</span>
    </a>

    <a class="nav-link" href="my-profile.php">
        <span class="nav-icon">
            <i class="bi bi-person-circle"></i>
        </span>
        <span class="nav-text">My Profile</span>
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
            <input class="form-control search-input" type="search" placeholder="Search rides..." aria-label="Search">
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
                  <span class="notification-title">New Ride Request</span>
                  <span class="notification-time">4 minutes ago</span>
                </a>
                <a class="dropdown-item" href="charts.html">
                  <span class="notification-title">Ride Completed Successfully</span>
                  <span class="notification-time">32 minutes ago</span>
                </a>
                <a class="dropdown-item" href="settings.html">
                  <span class="notification-title">Today's Earnings Credited</span>
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
                <li><a class="dropdown-item" href="profile.html">My Profile</a></li>
                <li><a class="dropdown-item" href="settings.html">Settings</a></li>
                <li><hr class="dropdown-divider"></li>
                <li><a class="dropdown-item" href="login.html">Logout</a></li>
              </ul>
            </div>
          </div>
        </div>
      </nav>

      
<main class="dashboard-content">

<div class="container-fluid px-4">

    <!-- =========================
         HERO BANNER
    ========================== -->

    <div class="card border-0 shadow-sm mb-4 overflow-hidden">

        <div class="card-body p-4"
             style="background:linear-gradient(135deg,#16a34a,#059669); color:#fff; border-radius:16px;">

            <div class="row align-items-center">

                <div class="col-lg-8">

                    <h6 class="text-uppercase opacity-75 mb-2">
                        DRIVER PANEL
                    </h6>

                    <h2 class="fw-bold mb-2">
                        🚖 Active Ride
                    </h2>

                    <p class="mb-0 opacity-75">
                        Manage your current trip and keep passengers updated.
                    </p>

                </div>

                <div class="col-lg-4 text-lg-end mt-4 mt-lg-0">

                    <span class="badge bg-light text-success fs-6 px-3 py-2">

                        Ride In Progress

                    </span>

                    <h3 class="mt-3 mb-0 fw-bold">

                        18 Min

                    </h3>

                    <small>Estimated Time Left</small>

                </div>

            </div>

        </div>

    </div>

</div>
<div class="container-fluid px-4">

    <!-- =========================
         ACTIVE RIDE STATS
    ========================== -->

    <div class="row g-4 mb-4">

        <!-- Ride Status -->

        <div class="col-xl-3 col-md-6">

            <div class="card shadow-sm border-0 h-100">

                <div class="card-body d-flex justify-content-between align-items-center">

                    <div>

                        <p class="text-muted mb-2">
                            Ride Status
                        </p>

                        <h2 class="fw-bold mb-0">
                            Active
                        </h2>

                    </div>

                    <div class="fs-1 text-success">

                        <i class="bi bi-check-circle-fill"></i>

                    </div>

                </div>

            </div>

        </div>

        <!-- Distance Left -->

        <div class="col-xl-3 col-md-6">

            <div class="card shadow-sm border-0 h-100">

                <div class="card-body d-flex justify-content-between align-items-center">

                    <div>

                        <p class="text-muted mb-2">
                            Distance Left
                        </p>

                        <h2 class="fw-bold mb-0">
                            8.4 KM
                        </h2>

                    </div>

                    <div class="fs-1 text-primary">

                        <i class="bi bi-geo-alt-fill"></i>

                    </div>

                </div>

            </div>

        </div>

        <!-- Time Remaining -->

        <div class="col-xl-3 col-md-6">

            <div class="card shadow-sm border-0 h-100">

                <div class="card-body d-flex justify-content-between align-items-center">

                    <div>

                        <p class="text-muted mb-2">
                            Time Left
                        </p>

                        <h2 class="fw-bold mb-0">
                            18 Min
                        </h2>

                    </div>

                    <div class="fs-1 text-warning">

                        <i class="bi bi-clock-history"></i>

                    </div>

                </div>

            </div>

        </div>

        <!-- Ride Fare -->

        <div class="col-xl-3 col-md-6">

            <div class="card shadow-sm border-0 h-100">

                <div class="card-body d-flex justify-content-between align-items-center">

                    <div>

                        <p class="text-muted mb-2">
                            Ride Fare
                        </p>

                        <h2 class="fw-bold mb-0">
                            ₹520
                        </h2>

                    </div>

                    <div class="fs-1 text-success">

                        <i class="bi bi-cash-stack"></i>

                    </div>

                </div>

            </div>

        </div>

    </div>

</div>
<div class="container-fluid px-4">

    <!-- =========================
         CURRENT RIDE DETAILS
    ========================== -->

    <div class="card shadow-sm border-0 mb-4">

        <div class="card-header bg-transparent border-0 pt-4 pb-0">

            <h5 class="fw-bold mb-1">

                <i class="bi bi-car-front-fill text-success me-2"></i>

                Current Ride Details

            </h5>

            <p class="text-muted mb-0">

                Live information about the ongoing trip.

            </p>

        </div>

        <div class="card-body">

            <div class="row g-4">

                <!-- Ride ID -->

                <div class="col-lg-4">

                    <div class="border rounded-3 p-3 h-100">

                        <small class="text-muted d-block mb-1">

                            Ride ID

                        </small>

                        <h5 class="fw-bold mb-0">

                            #RH102548

                        </h5>

                    </div>

                </div>

                <!-- Ride Date -->

                <div class="col-lg-4">

                    <div class="border rounded-3 p-3 h-100">

                        <small class="text-muted d-block mb-1">

                            Ride Date

                        </small>

                        <h5 class="fw-bold mb-0">

                            17 July 2026

                        </h5>

                    </div>

                </div>

                <!-- Start Time -->

                <div class="col-lg-4">

                    <div class="border rounded-3 p-3 h-100">

                        <small class="text-muted d-block mb-1">

                            Start Time

                        </small>

                        <h5 class="fw-bold mb-0">

                            10:35 AM

                        </h5>

                    </div>

                </div>

                <!-- Pickup -->

                <div class="col-lg-6">

                    <div class="border rounded-3 p-3 h-100">

                        <small class="text-muted d-block mb-2">

                            Pickup Location

                        </small>

                        <h6 class="fw-bold mb-0">

                            📍 Adajan Gam, Surat

                        </h6>

                    </div>

                </div>

                <!-- Drop -->

                <div class="col-lg-6">

                    <div class="border rounded-3 p-3 h-100">

                        <small class="text-muted d-block mb-2">

                            Drop Location

                        </small>

                        <h6 class="fw-bold mb-0">

                            📍 Surat Airport

                        </h6>

                    </div>

                </div>

            </div>

        </div>

    </div>

</div>
<div class="container-fluid px-4">

    <!-- =========================
         PASSENGER DETAILS
    ========================== -->

    <div class="card shadow-sm border-0 mb-4">

        <div class="card-header bg-transparent border-0 pt-4 pb-0">

            <h5 class="fw-bold mb-1">

                <i class="bi bi-person-circle text-primary me-2"></i>

                Passenger Details

            </h5>

            <p class="text-muted mb-0">

                Information about the current passenger.

            </p>

        </div>

        <div class="card-body">

            <div class="row align-items-center">

                <!-- Passenger Image -->

                <div class="col-lg-2 text-center mb-3 mb-lg-0">

                    <img src="https://via.placeholder.com/100"
                         class="rounded-circle border shadow-sm"
                         width="100"
                         height="100"
                         alt="Passenger">

                </div>

                <!-- Passenger Info -->

                <div class="col-lg-7">

                    <h4 class="fw-bold mb-1">

                        Rahul Patel

                    </h4>

                    <p class="text-muted mb-2">

                        Regular Customer

                    </p>

                    <div class="row">

                        <div class="col-md-6 mb-3">

                            <small class="text-muted d-block">

                                Mobile Number

                            </small>

                            <strong>

                                +91 98765 43210

                            </strong>

                        </div>

                        <div class="col-md-6 mb-3">

                            <small class="text-muted d-block">

                                Rating

                            </small>

                            <span class="text-warning fs-5">

                                ★★★★★

                            </span>

                            <strong>4.9</strong>

                        </div>

                        <div class="col-md-6">

                            <small class="text-muted d-block">

                                Total Rides

                            </small>

                            <strong>

                                186 Rides

                            </strong>

                        </div>

                        <div class="col-md-6">

                            <small class="text-muted d-block">

                                Payment Mode

                            </small>

                            <span class="badge bg-success">

                                Online

                            </span>

                        </div>

                    </div>

                </div>

                <!-- Action Buttons -->

                <div class="col-lg-3">

                    <div class="d-grid gap-3">

                        <button class="btn btn-success">

                            <i class="bi bi-telephone-fill me-2"></i>

                            Call Passenger

                        </button>

                        <button class="btn btn-primary">

                            <i class="bi bi-chat-dots-fill me-2"></i>

                            Chat Passenger

                        </button>

                        <button class="btn btn-outline-danger">

                            <i class="bi bi-exclamation-triangle-fill me-2"></i>

                            Emergency

                        </button>

                    </div>

                </div>

            </div>

        </div>

    </div>

</div>
<div class="container-fluid px-4">

    <!-- =========================
         ROUTE INFORMATION
    ========================== -->

    <div class="card shadow-sm border-0 mb-4">

        <div class="card-header bg-transparent border-0 pt-4 pb-0">

            <h5 class="fw-bold mb-1">

                <i class="bi bi-signpost-2-fill text-primary me-2"></i>

                Route Information

            </h5>

            <p class="text-muted mb-0">

                Live route status and trip progress.

            </p>

        </div>

        <div class="card-body">

            <div class="row g-4">

                <!-- Left Side -->

                <div class="col-lg-8">

                    <div class="border rounded-3 p-4">

                        <!-- Pickup -->

                        <div class="d-flex align-items-start mb-4">

                            <div class="me-3">

                                <i class="bi bi-geo-alt-fill text-success fs-4"></i>

                            </div>

                            <div>

                                <small class="text-muted d-block">

                                    Pickup Point

                                </small>

                                <h6 class="fw-bold mb-0">

                                    Adajan Gam, Surat

                                </h6>

                            </div>

                        </div>

                        <!-- Line -->

                        <div class="border-start border-3 border-primary ms-2 ps-4 mb-4">

                            <small class="text-muted">

                                Current Location

                            </small>

                            <h6 class="fw-bold mb-0">

                                Near LP Savani Road

                            </h6>

                        </div>

                        <!-- Drop -->

                        <div class="d-flex align-items-start">

                            <div class="me-3">

                                <i class="bi bi-flag-fill text-danger fs-4"></i>

                            </div>

                            <div>

                                <small class="text-muted d-block">

                                    Destination

                                </small>

                                <h6 class="fw-bold mb-0">

                                    Surat Airport

                                </h6>

                            </div>

                        </div>

                    </div>

                </div>

                <!-- Right Side -->

                <div class="col-lg-4">

                    <div class="border rounded-3 p-4 h-100">

                        <h6 class="fw-bold mb-4">

                            Ride Progress

                        </h6>

                        <div class="progress mb-3" style="height:10px;">

                            <div class="progress-bar bg-success"
                                 role="progressbar"
                                 style="width:65%;">

                            </div>

                        </div>

                        <div class="d-flex justify-content-between mb-3">

                            <small>65% Completed</small>

                            <small>35% Left</small>

                        </div>

                        <hr>

                        <div class="mb-3">

                            <small class="text-muted d-block">

                                Remaining Distance

                            </small>

                            <strong>

                                8.4 KM

                            </strong>

                        </div>

                        <div>

                            <small class="text-muted d-block">

                                Estimated Arrival

                            </small>

                            <strong>

                                18 Minutes

                            </strong>

                        </div>

                    </div>

                </div>

            </div>

        </div>

    </div>

</div>
<div class="container-fluid px-4">

    <!-- =========================
         OTP & RIDE ACTIONS
    ========================== -->

    <div class="row g-4 mb-4">

        <!-- OTP Verification -->

        <div class="col-lg-5">

            <div class="card shadow-sm border-0 h-100">

                <div class="card-header bg-transparent border-0 pt-4 pb-0">

                    <h5 class="fw-bold mb-1">

                        <i class="bi bi-shield-lock-fill text-success me-2"></i>

                        OTP Verification

                    </h5>

                    <p class="text-muted mb-0">

                        Verify passenger before completing the ride.

                    </p>

                </div>

                <div class="card-body">

                    <label class="form-label">

                        Enter Ride OTP

                    </label>

                    <input type="text"
                           class="form-control form-control-lg mb-3"
                           placeholder="Enter 6 Digit OTP">

                    <button class="btn btn-success w-100">

                        <i class="bi bi-check-circle-fill me-2"></i>

                        Verify OTP

                    </button>

                </div>

            </div>

        </div>

        <!-- Ride Actions -->

        <div class="col-lg-7">

            <div class="card shadow-sm border-0 h-100">

                <div class="card-header bg-transparent border-0 pt-4 pb-0">

                    <h5 class="fw-bold mb-1">

                        <i class="bi bi-gear-fill text-primary me-2"></i>

                        Ride Actions

                    </h5>

                    <p class="text-muted mb-0">

                        Manage your current ride.

                    </p>

                </div>

                <div class="card-body">

                    <div class="row g-3">

                        <div class="col-md-6">

                            <button class="btn btn-primary w-100 py-3">

                                <i class="bi bi-play-circle-fill me-2"></i>

                                Start Ride

                            </button>

                        </div>

                        <div class="col-md-6">

                            <button class="btn btn-success w-100 py-3">

                                <i class="bi bi-flag-fill me-2"></i>

                                Complete Ride

                            </button>

                        </div>

                        <div class="col-md-6">

                            <button class="btn btn-warning w-100 py-3">

                                <i class="bi bi-telephone-fill me-2"></i>

                                Contact Support

                            </button>

                        </div>

                        <div class="col-md-6">

                            <button class="btn btn-danger w-100 py-3">

                                <i class="bi bi-x-circle-fill me-2"></i>

                                Cancel Ride

                            </button>

                        </div>

                    </div>

                    <hr class="my-4">

                    <label class="form-label">

                        Driver Notes

                    </label>

                    <textarea class="form-control"
                              rows="4"
                              placeholder="Write ride related notes here..."></textarea>

                </div>

            </div>

        </div>

    </div>

</div>

</main>


<footer class="admin-footer">
    <div class="container-fluid px-3 px-lg-4">
        <span>© 2026 RideHub. All Rights Reserved.</span>
        <span>RideHub Driver Panel</span>
    </div>
</footer>

  <script src="../assets/js/bootstrap.bundle.min.js"></script>
  <script src="../assets/js/main.js"></script>
</body>
</html>