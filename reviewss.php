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

<div class="card border-0 shadow-sm mb-4 overflow-hidden">

<div class="card-body p-4"
style="background:linear-gradient(135deg,#f59e0b,#f97316);color:#fff;border-radius:16px;">

<div class="row align-items-center">

<div class="col-lg-8">

<h6 class="text-uppercase opacity-75 mb-2">DRIVER PANEL</h6>

<h2 class="fw-bold mb-2">⭐ Reviews & Ratings</h2>

<p class="mb-0 opacity-75">

See customer feedback and ratings.

</p>

</div>

<div class="col-lg-4 text-lg-end">

<span class="badge bg-light text-warning fs-6 px-3 py-2">

Average Rating

</span>

<h3 class="fw-bold mt-3 mb-0">

4.9 ★

</h3>

<small>248 Reviews</small>

</div>

</div>

</div>

</div>

</div>
<div class="container-fluid px-4">

<div class="row g-4 mb-4">

<div class="col-md-3">
<div class="card shadow-sm border-0">
<div class="card-body text-center">
<h2 class="fw-bold">248</h2>
<p class="text-muted mb-0">Total Reviews</p>
</div>
</div>
</div>

<div class="col-md-3">
<div class="card shadow-sm border-0">
<div class="card-body text-center">
<h2 class="fw-bold text-warning">4.9★</h2>
<p class="text-muted mb-0">Average Rating</p>
</div>
</div>
</div>

<div class="col-md-3">
<div class="card shadow-sm border-0">
<div class="card-body text-center">
<h2 class="fw-bold text-success">220</h2>
<p class="text-muted mb-0">5 Star</p>
</div>
</div>
</div>

<div class="col-md-3">
<div class="card shadow-sm border-0">
<div class="card-body text-center">
<h2 class="fw-bold text-primary">28</h2>
<p class="text-muted mb-0">4 Star</p>
</div>
</div>
</div>

</div>

</div>
<div class="container-fluid px-4">

<div class="card shadow-sm border-0">

<div class="card-header bg-transparent">

<h5 class="fw-bold">

Customer Reviews

</h5>

</div>

<div class="card-body">

<table class="table table-hover align-middle">

<thead class="table-light">

<tr>

<th>Customer</th>
<th>Ride</th>
<th>Rating</th>
<th>Review</th>
<th>Date</th>

</tr>

</thead>

<tbody>

<tr>

<td>Rahul Patel</td>

<td>#RH1021</td>

<td class="text-warning">★★★★★</td>

<td>Very polite driver and smooth ride.</td>

<td>17 Jul 2026</td>

</tr>

<tr>

<td>Neha Shah</td>

<td>#RH1020</td>

<td class="text-warning">★★★★☆</td>

<td>Reached on time.</td>

<td>16 Jul 2026</td>

</tr>

<tr>

<td>Amit Verma</td>

<td>#RH1018</td>

<td class="text-warning">★★★★★</td>

<td>Professional behaviour.</td>

<td>15 Jul 2026</td>

</tr>

</tbody>

</table>

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