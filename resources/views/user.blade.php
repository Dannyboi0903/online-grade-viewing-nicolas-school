<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>Select User</title>
    <link rel="stylesheet" href="{{ asset('css/styles.css') }}" />
</head>

<body>
    <div class="container" id="container">
        <div class="hero-shape shape1"></div>
        <div class="hero-shape shape2"></div>
        <div class="hero-shape shape3"></div>

        <!-- Choices Container -->
        <div class="choices" id="choices">
            <div class="choices-container">
                <div class="choices-sub">
                    <h2>Select User Type</h2>
                    <div class="choices-parent">

                        <a href="{{ route('login.admin') }}" class="choices-type-link">
                            <div class="choices-type">
                                <img src="{{ asset('img/Work in progress-bro.png') }}" alt="girl-working" />
                                <p>Admin</p>
                            </div>
                        </a>

                        <a href="{{ route('login.adviser') }}" class="choices-type-link">
                            <div class="choices-type">
                                <img src="{{ asset('img/Teaching-cuate.png') }}" alt="teaching-student" />
                                <p>Adviser</p>
                            </div>
                        </a>


                        <a href="{{ route('login.parent') }}" class="choices-type-link">
                            <div class="choices-type">
                                <img src="{{ asset('img/Parents-cuate.png') }}" alt="family" />
                                <p>Parent</p>
                            </div>
                        </a>
                    </div>
                </div>
            </div>
        </div>
</body>

</html>