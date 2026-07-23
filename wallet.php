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
background:linear-gradient(135deg,#059669,#10b981,#064e3b);">

<div class="card-body p-5">

<div class="row align-items-center">

<div class="col-lg-8">

<span class="badge bg-light text-success px-3 py-2 mb-3">

Digital Wallet

</span>

<h2 class="fw-bold text-white mb-3">

My Wallet 💳

</h2>

<p class="text-white opacity-75 fs-5 mb-4">

Manage your RideHub Wallet, recharge instantly, view transactions and enjoy cashback rewards.

</p>

<button class="btn btn-light px-4">

<i class="bi bi-wallet2 me-2"></i>

Add Money

</button>

</div>

<div class="col-lg-4 text-center">

<i class="bi bi-wallet-fill text-white"
style="font-size:130px;opacity:.18;"></i>

</div>

</div>

</div>

</div>

<!-- =========================================
            WALLET CARDS
========================================= -->

<div class="row g-4 mb-4">

<div class="col-lg-4">

<div class="card border-0 shadow-sm">

<div class="card-body">

<h6 class="text-muted">

Wallet Balance

</h6>

<h2 class="fw-bold text-success">

₹2,450

</h2>

<p class="mb-0 text-muted">

Available Balance

</p>

</div>

</div>

</div>

<div class="col-lg-4">

<div class="card border-0 shadow-sm">

<div class="card-body">

<h6 class="text-muted">

Cashback Earned

</h6>

<h2 class="fw-bold text-primary">

₹680

</h2>

<p class="mb-0 text-muted">

Lifetime Cashback

</p>

</div>

</div>

</div>

<div class="col-lg-4">

<div class="card border-0 shadow-sm">

<div class="card-body">

<h6 class="text-muted">

Reward Points

</h6>

<h2 class="fw-bold text-warning">

2,340

</h2>

<p class="mb-0 text-muted">

Available Points

</p>

</div>

</div>

</div>

</div>

<!-- =========================================
            ADD MONEY
========================================= -->

<div class="card border-0 shadow-sm mb-4">

<div class="card-header bg-white border-0">

<h4 class="fw-bold mt-3">

Add Money to Wallet

</h4>

</div>

<div class="card-body">

<div class="row g-3">

<div class="col-lg-4">

<label class="form-label">

Amount

</label>

<input
type="number"
class="form-control"
placeholder="Enter Amount">

</div>

<div class="col-lg-4">

<label class="form-label">

Payment Method

</label>

<select class="form-select">

<option>UPI</option>

<option>Credit Card</option>

<option>Debit Card</option>

<option>Net Banking</option>

</select>

</div>

<div class="col-lg-4 d-grid">

<label class="form-label text-white">

Recharge

</label>

<button class="btn btn-success">

<i class="bi bi-plus-circle me-2"></i>

Add Money

</button>

</div>

</div>

<hr class="my-4">

<h5 class="fw-bold mb-3">

Quick Recharge

</h5>

<div class="d-flex flex-wrap gap-3">

<button class="btn btn-outline-success">₹100</button>

<button class="btn btn-outline-success">₹250</button>

<button class="btn btn-outline-success">₹500</button>

<button class="btn btn-outline-success">₹1000</button>

<button class="btn btn-outline-success">₹2000</button>

</div>

</div>

</div>
<!-- =========================================
            TRANSACTION HISTORY
========================================= -->

<div class="card border-0 shadow-sm mb-4">

    <div class="card-header bg-white border-0 pt-4 d-flex justify-content-between align-items-center">

        <h4 class="fw-bold mb-0">

            Transaction History

        </h4>

        <span class="badge bg-success">

            24 Transactions

        </span>

    </div>

    <div class="card-body">

        <div class="table-responsive">

            <table class="table table-hover align-middle">

                <thead class="table-light">

                    <tr>

                        <th>Transaction ID</th>
                        <th>Date</th>
                        <th>Type</th>
                        <th>Method</th>
                        <th>Amount</th>
                        <th>Status</th>

                    </tr>

                </thead>

                <tbody>

                    <tr>

                        <td>#TX1001</td>
                        <td>18 Jul 2026</td>
                        <td>Add Money</td>
                        <td>UPI</td>

                        <td class="text-success fw-bold">

                            +₹500

                        </td>

                        <td>

                            <span class="badge bg-success">

                                Success

                            </span>

                        </td>

                    </tr>

                    <tr>

                        <td>#TX1002</td>
                        <td>17 Jul 2026</td>
                        <td>Ride Payment</td>
                        <td>Wallet</td>

                        <td class="text-danger fw-bold">

                            -₹320

                        </td>

                        <td>

                            <span class="badge bg-success">

                                Paid

                            </span>

                        </td>

                    </tr>

                    <tr>

                        <td>#TX1003</td>
                        <td>15 Jul 2026</td>
                        <td>Cashback</td>
                        <td>Reward</td>

                        <td class="text-primary fw-bold">

                            +₹50

                        </td>

                        <td>

                            <span class="badge bg-primary">

                                Credited

                            </span>

                        </td>

                    </tr>

                    <tr>

                        <td>#TX1004</td>
                        <td>12 Jul 2026</td>
                        <td>Ride Payment</td>
                        <td>Wallet</td>

                        <td class="text-danger fw-bold">

                            -₹180

                        </td>

                        <td>

                            <span class="badge bg-success">

                                Paid

                            </span>

                        </td>

                    </tr>

                </tbody>

            </table>

        </div>

    </div>

</div>

<!-- =========================================
            REWARDS & SPENDING
========================================= -->

<div class="row g-4 mb-4">

    <div class="col-lg-6">

        <div class="card border-0 shadow-sm h-100">

            <div class="card-header bg-white border-0 pt-4">

                <h4 class="fw-bold">

                    Cashback & Rewards 🎁

                </h4>

            </div>

            <div class="card-body">

                <div class="alert alert-success">

                    🎉 Congratulations! You earned
                    <strong>₹50 Cashback</strong>
                    on your last ride.

                </div>

                <div class="alert alert-warning">

                    ⭐ Reward Points Available:
                    <strong>2,340</strong>

                </div>

                <div class="alert alert-info mb-0">

                    🚖 Complete 5 more rides to unlock
                    <strong>Gold Membership</strong>.

                </div>

            </div>

        </div>

    </div>

    <div class="col-lg-6">

        <div class="card border-0 shadow-sm h-100">

            <div class="card-header bg-white border-0 pt-4">

                <h4 class="fw-bold">

                    Wallet Summary

                </h4>

            </div>

            <div class="card-body">

                <table class="table">

                    <tr>

                        <th>Total Recharge</th>

                        <td class="text-success fw-bold">

                            ₹8,500

                        </td>

                    </tr>

                    <tr>

                        <th>Total Ride Payments</th>

                        <td class="text-danger fw-bold">

                            ₹6,050

                        </td>

                    </tr>

                    <tr>

                        <th>Total Cashback</th>

                        <td class="text-primary fw-bold">

                            ₹680

                        </td>

                    </tr>

                    <tr>

                        <th>Current Balance</th>

                        <td class="text-success fw-bold">

                            ₹2,450

                        </td>

                    </tr>

                </table>

            </div>

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