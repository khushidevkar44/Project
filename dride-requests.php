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

        <!-- Welcome Card -->
        <div class="card border-0 shadow-sm mb-4">
            <div class="card-body py-4 px-4">

                <div class="d-flex justify-content-between align-items-center">

                    <div class="ps-2">

                        <h1 class="fw-bold mb-2">
                            <span style="font-size:32px;">🚖</span>
                            Ride Requests
                        </h1>

                        <p class="text-secondary mb-0">
                            Here's today's ride requests overview.
                        </p>

                    </div>

                    <span class="badge bg-success px-4 py-2 fs-6">
                        8 Pending
                    </span>

                </div>

            </div>
        </div>

    </div>
<div class="container-fluid px-4">

    <!-- =========================
         STATISTICS
    ========================== -->

    <div class="row g-4 mb-4">

        <!-- Pending Requests -->
        <div class="col-xl-3 col-md-6">
            <div class="card shadow-sm border-0 h-100">
                <div class="card-body d-flex justify-content-between align-items-center">

                    <div>
                        <p class="text-muted mb-2">Pending Requests</p>
                        <h2 class="fw-bold mb-0">08</h2>
                    </div>

                    <div class="fs-1 text-warning">
                        <i class="bi bi-hourglass-split"></i>
                    </div>

                </div>
            </div>
        </div>

        <!-- Nearby Requests -->
        <div class="col-xl-3 col-md-6">
            <div class="card shadow-sm border-0 h-100">
                <div class="card-body d-flex justify-content-between align-items-center">

                    <div>
                        <p class="text-muted mb-2">Nearby Requests</p>
                        <h2 class="fw-bold mb-0">05</h2>
                    </div>

                    <div class="fs-1 text-primary">
                        <i class="bi bi-geo-alt-fill"></i>
                    </div>

                </div>
            </div>
        </div>

        <!-- Accepted Today -->
        <div class="col-xl-3 col-md-6">
            <div class="card shadow-sm border-0 h-100">
                <div class="card-body d-flex justify-content-between align-items-center">

                    <div>
                        <p class="text-muted mb-2">Accepted Today</p>
                        <h2 class="fw-bold mb-0">12</h2>
                    </div>

                    <div class="fs-1 text-success">
                        <i class="bi bi-check-circle-fill"></i>
                    </div>

                </div>
            </div>
        </div>

        <!-- Today's Earnings -->
        <div class="col-xl-3 col-md-6">
            <div class="card shadow-sm border-0 h-100">
                <div class="card-body d-flex justify-content-between align-items-center">

                    <div>
                        <p class="text-muted mb-2">Today's Earnings</p>
                        <h2 class="fw-bold mb-0">₹2,850</h2>
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
         SEARCH & FILTER
    ========================== -->

    <div class="card shadow-sm border-0 mb-4">

        <div class="card-header bg-transparent border-0 pt-4 pb-0">

            <h5 class="fw-bold mb-0">

                <i class="bi bi-funnel-fill text-primary me-2"></i>

                Search Ride Requests

            </h5>

        </div>

        <div class="card-body">

            <div class="row g-3">

                <!-- Pickup -->

                <div class="col-lg-3 col-md-6">

                    <label class="form-label">
                        Pickup Location
                    </label>

                    <input type="text"
                           class="form-control"
                           placeholder="Enter pickup location">

                </div>

                <!-- Drop -->

                <div class="col-lg-3 col-md-6">

                    <label class="form-label">
                        Drop Location
                    </label>

                    <input type="text"
                           class="form-control"
                           placeholder="Enter drop location">

                </div>

                <!-- Distance -->

                <div class="col-lg-2 col-md-6">

                    <label class="form-label">
                        Distance
                    </label>

                    <select class="form-select">

                        <option>All</option>
                        <option>0 - 5 KM</option>
                        <option>5 - 10 KM</option>
                        <option>10+ KM</option>

                    </select>

                </div>

                <!-- Fare -->

                <div class="col-lg-2 col-md-6">

                    <label class="form-label">
                        Fare
                    </label>

                    <select class="form-select">

                        <option>All</option>
                        <option>Below ₹200</option>
                        <option>₹200 - ₹500</option>
                        <option>Above ₹500</option>

                    </select>

                </div>

                <!-- Search Button -->

                <div class="col-lg-2 col-md-12 d-flex align-items-end">

                    <button class="btn btn-primary w-100">

                        <i class="bi bi-search me-2"></i>

                        Search

                    </button>

                </div>

            </div>

        </div>

    </div>

</div>
<div class="container-fluid px-4">

    <!-- =========================
         RIDE REQUESTS TABLE
    ========================== -->

    <div class="card shadow-sm border-0 mb-4">

        <div class="card-header bg-transparent border-0 pt-4 pb-0 d-flex justify-content-between align-items-center">

            <div>

                <h5 class="fw-bold mb-1">

                    <i class="bi bi-list-ul text-primary me-2"></i>

                    Ride Requests

                </h5>

                <p class="text-muted mb-0">

                    View all incoming ride requests assigned to you.

                </p>

            </div>

            <span class="badge bg-primary px-3 py-2">

                Total : 08

            </span>

        </div>

        <div class="card-body">

            <div class="table-responsive">

                <table class="table table-hover align-middle">

                    <thead class="table-light">

                        <tr>

                            <th>Customer</th>

                            <th>Pickup</th>

                            <th>Drop</th>

                            <th>Distance</th>

                            <th>Fare</th>

                            <th>Requested</th>

                            <th class="text-center">Action</th>

                        </tr>

                    </thead>

                    <tbody>

                        <tr>

                            <td>
                                <strong>Rahul Patel</strong>
                            </td>

                            <td>Adajan</td>

                            <td>Vesu</td>

                            <td>5.2 KM</td>

                            <td>₹250</td>

                            <td>2 min ago</td>

                            <td class="text-center">

                                <button class="btn btn-sm btn-info text-white">

                                    <i class="bi bi-eye"></i>

                                </button>

                                <button class="btn btn-sm btn-success">

                                    <i class="bi bi-check-lg"></i>

                                </button>

                                <button class="btn btn-sm btn-danger">

                                    <i class="bi bi-x-lg"></i>

                                </button>

                            </td>

                        </tr>

                        <tr>

                            <td>
                                <strong>Neha Shah</strong>
                            </td>

                            <td>Piplod</td>

                            <td>Airport</td>

                            <td>9.5 KM</td>

                            <td>₹430</td>

                            <td>5 min ago</td>

                            <td class="text-center">

                                <button class="btn btn-sm btn-info text-white">

                                    <i class="bi bi-eye"></i>

                                </button>

                                <button class="btn btn-sm btn-success">

                                    <i class="bi bi-check-lg"></i>

                                </button>

                                <button class="btn btn-sm btn-danger">

                                    <i class="bi bi-x-lg"></i>

                                </button>

                            </td>

                        </tr>

                        <tr>

                            <td>
                                <strong>Amit Verma</strong>
                            </td>

                            <td>City Light</td>

                            <td>Station</td>

                            <td>3.8 KM</td>

                            <td>₹180</td>

                            <td>10 min ago</td>

                            <td class="text-center">

                                <button class="btn btn-sm btn-info text-white">

                                    <i class="bi bi-eye"></i>

                                </button>

                                <button class="btn btn-sm btn-success">

                                    <i class="bi bi-check-lg"></i>

                                </button>

                                <button class="btn btn-sm btn-danger">

                                    <i class="bi bi-x-lg"></i>

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
        <span>RideHub Driver Panel</span>
    </div>
</footer>

  <script src="../assets/js/bootstrap.bundle.min.js"></script>
  <script src="../assets/js/main.js"></script>
</body>
</html>