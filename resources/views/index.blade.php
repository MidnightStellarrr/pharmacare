<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Pharmacare</title>
    <link
        href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css"
        rel="stylesheet"
    />
    <link
        href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.11.3/font/bootstrap-icons.css"
        rel="stylesheet"
    />
</head>
<body>
    <!-- header -->
    <nav class="navbar navbar-expand-lg bg-body-tertiary">
        <div class="container">
            <!-- logo / web name -->
            <a class="navbar-brand fw-bold d-flex align-items-center" href="#">
                <img src="images/logo.png" alt="Pharmacare Logo" class="navbar-logo me-2" style="height: 30px;">
                Pharmacare
            </a>
            <!-- responsive mobile navigation button -->
            <button
                class="navbar-toggler"
                type="button"
                data-bs-toggle="collapse"
                data-bs-target="#navMenu"
            >
                <span class="navbar-toggler-icon"></span>
            </button>
            
            <!-- collapsible menu -->
            <div class="collapse navbar-collapse" id="navMenu">
                <ul class="navbar-nav ms-auto mb-2 mb-lg-0">
                    <li class="nav-item">
                        <a class="nav-link" href="index.html">Home</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="#">Services</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="contact_us.html">Contact Us</a>
                    </li>

                    <!-- shop btn-->
                    <li class="nav-item ms-3">
                        <a class="btn btn-main" href="shop.html">Shop</a>
                    </li>

                    <!---cart button-->
                    <li class="nav-item ms-3">
                        <button class="btn btn-cart position-relative" id="cartBtn">
                            <i class="bi bi-cart3"></i>
                            <span
                                class="cart-badge position-absolute top-0 start-100 translate-middle badge rounded-pill bg-danger"
                                id="cartCount"
                                ></span>
                        </button>
                    </li>

                    <!--login button-->
                    <li class="nav-item ms-3" id="loginBtnContainer">
                        <button class="btn btn-outline-dark" id="loginBtn">Login</button>
                    </li>

                    

                    <li class="nav-item ms-3 d-none" id="profileDropdownContainer">
                        <div class="dropdown">
                            <button class="btn btn-outline-light dropdown-toggle" type="button" id="profileDropdown" data-bs-toggle="dropdown">
                            <i class="bi bi-person-circle me-1"></i>
                            <span id="profileUserName">User</span>
                            </button>
                            <ul class="dropdown-menu dropdown-menu-end">
                            <li><a class="dropdown-item" href="my_account.html"><i class="bi bi-person me-2"></i>My Account</a></li>
                            <li><a class="dropdown-item" href="my_orders.html"><i class="bi bi-bag-check me-2"></i>My Orders</a></li>
                            <li id="dashboardLinkItem" class="d-none"><a class="dropdown-item" href="admin-dashboard.html"><i class="bi bi-speedometer2 me-2"></i>Dashboard</a></li>
                            <li><hr class="dropdown-divider"></li>
                            <li><a class="dropdown-item text-danger" href="#" id="logoutBtn"><i class="bi bi-box-arrow-right me-2"></i>Logout</a></li>
                            </ul>
                        </div>
                    </li>
                </ul>
            </div>
        </div>
    </nav>

    <!-- Add Bootstrap JS for the toggle to work -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js"></script>

    <script>
        const loginBtn = document.getElementById('loginBtn');

        if(loginBtn){
            loginBtn.addEventListener('click', function(){
                window.location.href = '/login';
            });
        }
    </script>
</body>
</html>