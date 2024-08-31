<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>Change Your Password</title>
    <link rel="stylesheet" href="{{ asset('css/reset/reset.css') }}" />
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet" />
    <link href="https://cdn.jsdelivr.net/npm/bootstrap-icons/font/bootstrap-icons.css" rel="stylesheet" />
</head>

<body>
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-md-6">
                <div class="card p-4 mt-5 shadow-lg">
                    <h3 class="text-center">Change Your Password</h3>
                    <p class="text-center">Enter a new password below to change your password.</p>
                    <div class="mb-3 password-input-container">
                        <label for="new-password" class="form-label">New password</label>
                        <input type="password" class="form-control" id="new-password" placeholder="New password" required />
                        <span class="toggle-password">
                            <i class="bi bi-eye-slash-fill"></i>
                        </span>
                    </div>
                    <div class="mb-3 password-input-container">
                        <label for="confirm-password" class="form-label">Re-enter new password</label>
                        <input type="password" class="form-control" id="confirm-password" placeholder="Re-enter new password" required />
                        <span class="toggle-password">
                            <i class="bi bi-eye-slash-fill"></i>
                        </span>
                    </div>
                    <div id="password-error" class="text-danger mb-3">Passwords don't match</div>
                    <ul class="password-checklist">
                        <li id="length-check" class="invalid">At least 8 characters</li>
                        <li id="lowercase-check" class="invalid">Lower case letters (a-z)</li>
                        <li id="uppercase-check" class="invalid">Upper case letters (A-Z)</li>
                        <li id="number-check" class="invalid">Numbers (0-9)</li>
                        <li id="special-check" class="invalid">Special characters (e.g. !@#$%^&*)</li>
                    </ul>
                    <button class="btn btn-primary w-100 mt-3" id="reset-password">Reset password</button>
                </div>
            </div>
        </div>
    </div>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js"></script>
    <script src="{{ asset ('js/reset/reset.js') }}"></script>
</body>

</html>