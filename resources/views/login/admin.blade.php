<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>Admin Login</title>
    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" />
    <!-- Custom CSS -->
    <link rel="stylesheet" href="{{ asset('css/login/login.css') }}" />
</head>

<body>
    <div class="container d-flex align-items-center vh-100">
        <div class="row w-100">
            <!-- Logo Section -->
            <div class="col-md-5 d-flex justify-content-center align-items-center logo-section">
                <img src="{{ asset('img/dashboard-img/eref.png') }}" alt="Logo" class="img-fluid" />
            </div>
            <!-- Vertical Line -->
            <div class="col-md-1 d-flex align-items-center line">
                <div class="vertical-line"></div>
            </div>
            <!-- Login Form Section -->
            <div class="col-md-6 d-flex justify-content-center align-items-center loginParent">
                <div class="card p-4 shadow-lg" id="loginContainer">
                    <h2 class="text-center" id="loginTitle">Admin</h2>
                    <div id="error" class="error alert alert-danger" style="display: none;"></div>
                    <form action="{{ route('login.admin.submit') }}" method="POST">
                        @csrf
                        <div class="mb-3">
                            <input type="text" class="form-control" name="username" placeholder="Username" required />
                        </div>
                        <div class="mb-3">
                            <input type="password" class="form-control" name="password" placeholder="Password"
                                required />
                        </div>
                        @if($errors->has('error'))
                            <div class="alert alert-danger">
                                {{$errors->first('error')}}
                            </div>
                        @endif
                        <div class="d-flex justify-content-between">
                            <button class="btn btn-primary" type="submit">Log In</button>
                            <a href="{{ route('user') }}" class="btn btn-secondary">Back</a>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>

    <script src="{{ asset('js/login/admin-login.js') }}"></script>
</body>

</html>