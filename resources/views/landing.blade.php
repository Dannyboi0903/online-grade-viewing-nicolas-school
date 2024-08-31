<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>Nicolas B. Barreras NHS</title>
    <link rel="preconnect" href="https://fonts.googleapis.com" />
    <link rel="stylesheet" href="{{ asset('css/landing.css') }}" />
    <link rel="icon" href="{{ asset('img/dashboard-img/eref.png') }}" />
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin />
    <link href="https://fonts.googleapis.com/css2?family=Open+Sans:ital,wght@0,300..800;1,300..800&display=swap" rel="stylesheet" />
    <link href="https://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet" />
</head>

<body>
    <div class="video-container">
        <video autoplay muted loop class="bg-video">
            <source src="{{ asset('vid/nbbnhs.mp4') }}" type="video/mp4" />
        </video>
        <div class="overlay"></div>
        <div class="content" id="home">
            <div class="school-info">
                <img src="{{ asset('img/dashboard-img/eref.png') }}" alt="Logo" class="logo" />
                <!-- Ensure this path is correct -->
                <div class="school">
                    <h1 class="school-name">Nicolas B. Barreras <span>National High School</span></h1>
                </div>
            </div>
            <h2 class="system">Automated Enrollment Process with Online Grade Viewing System</h2>
            <a href="{{ route('user') }}" class="btn btn-custom">Sign In</a>
        </div>
    </div>

    <!-- New Section -->
    <section class="section">
        <div class="container">
            <h2>About Nicolas B. Barreras National High School</h2>
            <p>
                Nicolas B. Barreras National High School is located in Glamang, Polomolok, South Cotabato, Philippines. The school was established in 1994 and operates under the jurisdiction of the Polomolok West District of South Cotabato Schools Division, which is part of the Department of Education
                (DepEd) in the Philippines.
            </p>
            <p>
                The school is situated close to notable local landmarks, including the Glamang Gymnasium and the Glamang Barangay Hall. It serves the educational needs of students in the region, providing a variety of academic programs and extracurricular activities aimed at fostering leadership and
                holistic development among its students.
            </p>
            <p>
                Polomolok, the municipality where the school is located, is a first-class municipality in South Cotabato, part of the Soccsksargen region in Mindanao. This area is known for its agricultural productivity, particularly pineapple plantations, contributing significantly to the local economy.
            </p>
        </div>
    </section>

    <div class="google-map">
        <iframe
            src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3966.7424273448337!2d125.09954277588417!3d6.165238327221075!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x32f79960d9014621%3A0xd4fa1b00dbdb82b0!2sNicolas%20Barreras%20National%20High%20School!5e0!3m2!1sen!2sph!4v1723018024590!5m2!1sen!2sph"
            style="border: 0"
            allowfullscreen=""
            loading="lazy"
            referrerpolicy="no-referrer-when-downgrade"></iframe>
    </div>

    <!-- Footer -->
    <footer class="footer">
        <div class="container">
            <p>
                <i class="material-icons">location_on</i>
                Glamang, Polomolok, South Cotabato, Philippines
            </p>
            <a href="https://www.facebook.com/NicolasB.Barreras/" target="_blank"><i class="material-icons">facebook</i> Nicolas B. Barreras National High School</a>
            <p>&copy; 2024 Nicolas B. Barreras National High School</p>
        </div>
    </footer>
</body>

</html>
