<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Sign Up</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css2?family=Inter:wght@400;600;700&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.11.1/font/bootstrap-icons.css">

    <style>
        body {
            background-color: #f4f4fb;
            font-family: 'Inter', sans-serif;
            display: flex;
            align-items: center;
            justify-content: center;
            min-height: 100vh;
            margin: 0;
        }

        .login-card {
            background: white;
            border-radius: 24px;
            overflow: hidden;
            box-shadow: 0 15px 35px rgba(0,0,0,0.05);
            max-width: 900px;
            width: 100%;
            border: none;
        }

    .gradient-side {
        /* Step 1: Replace with your actual image path, e.g., '/images/pharmacy.jpg' */
        /* Step 2: I've added a slightly darker overlay to make text pop against the bright image */
        background: linear-gradient(rgba(0, 0, 0, 0.2), rgba(0, 0, 0, 0.65)), 
                    url('/images/login_medicine.jpg');
        
        /* Ensures the image fills the space and focuses on the people (top-center) */
        background-size: cover;
        background-position: top center; 
        
        padding: 40px;
        display: flex;
        flex-direction: column;
        justify-content: space-between;
        color: white;
        min-height: 500px;
        position: relative;
        z-index: 1;
    }

    /* Ensure the text containers stay on top of the background */
    .top-content, .bottom-content {
        position: relative;
        z-index: 2;
    }

    /* Optional: Adds a slight blur to the background for a more "glassy" feel */
    .gradient-side::before {
        content: "";
        position: absolute;
        top: 0; left: 0; right: 0; bottom: 0;
        background: inherit;
        filter: brightness(0.9);
        z-index: 0;
    }

    /* Ensure text stays above the background effects */
    .top-content, .bottom-content {
        position: relative;
        z-index: 1;
    }

        /* Form Side */
        .form-side {
            padding: 60px 50px;
        }

        .brand-icon {
            color: #4361ee;
            font-size: 2rem;
            margin-bottom: 20px;
        }

        .btn-primary {
            background-color: #4361ee;
            border: none;
            padding: 12px;
            border-radius: 10px;
            font-weight: 600;
            box-shadow: 0 4px 15px rgba(67, 97, 238, 0.3);
        }

        .form-control {
            border-radius: 10px;
            padding: 12px;
            border: 1px solid #e0e0e0;
        }

        .form-label {
            font-weight: 600;
            font-size: 0.9rem;
            margin-bottom: 8px;
        }

        .divider {
            display: flex;
            align-items: center;
            text-align: center;
            color: #aaa;
            margin: 25px 0;
        }

        .divider::before, .divider::after {
            content: '';
            flex: 1;
            border-bottom: 1px solid #eee;
        }

        .divider:not(:empty)::before { margin-right: .5em; }
        .divider:not(:empty)::after { margin-left: .5em; }

        .social-btn {
            border: 1px solid #eee;
            background: #f8f9fa;
            border-radius: 10px;
            padding: 10px;
            width: 80px;
            display: flex;
            justify-content: center;
            transition: 0.3s;
        }

        .social-btn:hover { background: #eee; }

        @media (max-width: 768px) {
            .gradient-side { display: none; }
        }
    </style>
</head>
<body>

<div class="container d-flex justify-content-center">
    <div class="card login-card border-0">
        <div class="row g-0">
            <div class="col-md-5 d-none d-md-flex">
                <div class="gradient-side w-100">
                    <div class="top-content">
                        <i class="bi bi-asterisk fs-3"></i>
                    </div>
                    <div class="bottom-content">
                        <p class="mb-1 opacity-75">For Patients & Pharmacies</p>
                        <h2 class="fw-bold">Find medicines near you and manage your health schedule</h2>
                    </div>
                </div>
            </div>

            <div class="col-md-7">
                <div class="form-side">
                    <div class="brand-icon d-md-none">
                        <i class="bi bi-asterisk"></i>
                    </div>
                    
                    <h3 class="fw-bold mb-1">Create an account</h3>
                    <p class="text-muted small mb-4">Access medicines, track availability, and find the nearest pharmacy anytime, anywhere — and keep your health needs flowing in one place.</p>

                    <form method="POST" action="/register">
                        @csrf
                        <div class="mb-3">
                            <label class="form-label">Name</label>
                            <input type="text" name="name" class="form-control" placeholder="John Doe" required>
                        </div>
                        <div class="mb-3">
                            <label class="form-label">Email</label>
                            <input type="email" name="email" class="form-control" placeholder="account@gmail.com" required>
                        </div>
                        <div class="mb-4">
                            <label class="form-label">Password</label>
                            <div class="input-group">
                                <input type="password" name="password" class="form-control" placeholder="••••••••••••" required>
                                <span class="input-group-text bg-white border-start-0 text-muted">
                                    <i class="bi bi-eye"></i>
                                </span>
                            </div>
                        </div>
                        <div class="mb-4">
                            <label class="form-label">Confirm Password</label>
                            <div class="input-group">
                                <input type="password" name="password_confirmation" class="form-control" placeholder="••••••••••••" required>
                                <span class="input-group-text bg-white border-start-0 text-muted">
                                    <i class="bi bi-eye"></i>
                                </span>
                            </div>
                        </div>

                        <button type="submit" class="btn btn-primary w-100">Get Started</button>
                    </form> 
                    
                    <br>

                    <p class="text-center small text-muted">
                        Already have an account? <a href="/login" class="text-decoration-none fw-bold" style="color: #4361ee;">Log In</a>
                    </p>
                </div>
            </div>
        </div>
    </div>
</div>

</body>
</html>