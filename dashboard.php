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

    <a class="nav-link" href="dride-requests.php">
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

    <a class="nav-link" href="reviewss.php">
        <span class="nav-icon">
            <i class="bi bi-star-fill"></i>
        </span>
        <span class="nav-text">Reviews</span>
    </a>

    <a class="nav-link" href="notificationss.php">
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

<div class="container-fluid px-2">

<div class="card border-0 shadow-sm mb-4">
<div class="card-body d-flex justify-content-between align-items-center">
<div>
<h2 class="mb-1">👋 Welcome Back, Driver</h2>
<p class="text-muted mb-0">Here's today's driving overview.</p>
</div>
<span class="badge bg-success fs-6">Online</span>
</div>
</div>

<div class="row g-4 mb-4">
<div class="col-lg-3 col-md-6">
<div class="card border-0 shadow-sm"><div class="card-body">
<h6 class="text-muted">Today's Trips</h6>
<h3>12</h3>
</div></div>
</div>

<div class="col-lg-3 col-md-6">
<div class="card border-0 shadow-sm"><div class="card-body">
<h6 class="text-muted">Today's Earnings</h6>
<h3>₹2,850</h3>
</div></div>
</div>

<div class="col-lg-3 col-md-6">
<div class="card border-0 shadow-sm"><div class="card-body">
<h6 class="text-muted">Rating</h6>
<h3>⭐ 4.9</h3>
</div></div>
</div>

<div class="col-lg-3 col-md-6">
<div class="card border-0 shadow-sm"><div class="card-body">
<h6 class="text-muted">Pending Requests</h6>
<h3>5</h3>
</div></div>
</div>
</div>

<div class="col-lg-8">

    <div class="card border-0 shadow-sm">

        <div class="card-header text-white d-flex justify-content-between align-items-center"
             style="background:#2563EB;">

            <h5 class="mb-0">
                <i class="bi bi-pin-map-fill me-2"></i>
                Ride Requests
            </h5>

            <a href="ride-requests.php" class="btn btn-light btn-sm">
                View All
            </a>

        </div>

        <div class="table-responsive">

            <table class="table table-hover align-middle mb-0">

                <thead style="background:#EAF2FF;">

                    <tr>

                        <th>Customer</th>
                        <th>Pickup</th>
                        <th>Drop</th>
                        <th>Fare</th>
                        <th>Action</th>

                    </tr>

                </thead>

                <tbody>

                    <tr>

                        <td>Rahul Patel</td>
                        <td>Adajan</td>
                        <td>Vesu</td>
                        <td>₹250</td>

                        <td>

                            <button class="btn btn-success btn-sm">
                                Accept
                            </button>

                        </td>

                    </tr>

                    <tr>

                        <td>Neha Shah</td>
                        <td>Katargam</td>
                        <td>Piplod</td>
                        <td>₹180</td>

                        <td>

                            <button class="btn btn-success btn-sm">
                                Accept
                            </button>

                        </td>

                    </tr>

                    <tr>

                        <td>Amit Joshi</td>
                        <td>Varachha</td>
                        <td>Airport</td>
                        <td>₹320</td>

                        <td>

                            <button class="btn btn-success btn-sm">
                                Accept
                            </button>

                        </td>

                    </tr>

                </tbody>

            </table>

        </div>

    </div>

</div><br><br>
<div class="col-lg-4">

    <div class="card border-0 shadow-sm h-100">

        <div class="card-header bg-success text-white">
            <h5 class="mb-0">
                <i class="bi bi-car-front-fill me-2"></i>
                Current Ride
            </h5>
        </div>

        <div class="card-body">

            <div class="text-center mb-4">

                <div class="rounded-circle bg-success bg-opacity-10 d-inline-flex align-items-center justify-content-center"
                     style="width:70px;height:70px;">

                    <i class="bi bi-person-fill fs-2 text-success"></i>

                </div>

                <h5 class="mt-3 mb-1">Rahul Patel</h5>

                <span class="badge bg-success">
                    On Trip
                </span>

            </div>

            <table class="table table-borderless mb-3">

                <tr>
                    <td><strong>Pickup</strong></td>
                    <td class="text-end">Adajan</td>
                </tr>

                <tr>
                    <td><strong>Drop</strong></td>
                    <td class="text-end">Vesu</td>
                </tr>

                <tr>
                    <td><strong>Fare</strong></td>
                    <td class="text-end text-success fw-bold">₹250</td>
                </tr>

                <tr>
                    <td><strong>OTP</strong></td>
                    <td class="text-end">
                        <span class="badge bg-primary fs-6">
                            4582
                        </span>
                    </td>
                </tr>

            </table>

            <div class="d-grid gap-2">

                <button class="btn btn-success">
                    <i class="bi bi-check-circle me-2"></i>
                    Complete Ride
                </button>

                <button class="btn btn-outline-danger">
                    <i class="bi bi-x-circle me-2"></i>
                    Cancel Ride
                </button>

            </div>

        </div>

    </div>

</div>
<div class="card border-0 shadow-sm mt-4">

<div class="card-header text-dark"
style="background:#FACC15;">

<h5 class="mb-0">

<i class="bi bi-bell-fill me-2"></i>

Notifications

</h5>

</div>

<div class="card-body">

<div class="d-flex mb-3">

<i class="bi bi-circle-fill text-success me-3 mt-1"></i>

<div>

<strong>New Ride Request</strong>

<p class="text-muted mb-0">

Just now

</p>

</div>

</div>

<div class="d-flex mb-3">

<i class="bi bi-circle-fill text-primary me-3 mt-1"></i>

<div>

<strong>Payment Credited</strong>

<p class="text-muted mb-0">

10 min ago

</p>

</div>

</div>

<div class="d-flex">

<i class="bi bi-circle-fill text-danger me-3 mt-1"></i>

<div>

<strong>License Renewal Reminder</strong>

<p class="text-muted mb-0">

Tomorrow

</p>

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