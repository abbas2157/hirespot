<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Hire-Spot-register</title>
    <!-- Bootstrap 5 CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet">
    <!-- Font Awesome for Icons -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0-beta3/css/all.min.css">
    <style>
        body {
            background-color: #f5f8fa;
            font-family: 'Arial', sans-serif;
            overflow-x: hidden;
        }

        /* Main section with background image */
        .main-section {
            background: url('public/assets/img/home2.png') center center/cover no-repeat;
            color: #fff;
            text-align: center;
            padding: 150px 0;
        }

        .main-section h1 {
            font-size: 4rem;
            font-weight: bold;
            margin-bottom: 0.5rem;
        }

        .main-section p {
            font-size: 1.5rem;
            margin-bottom: 0;
        }

        /* Card container styling */
        .card-container {
            padding: 50px 1rem;
            margin-top: -80px;
        }

        .profile-card {
            max-width: 400px;
            border: none;
            border-radius: 20px;
            overflow: hidden;
            box-shadow: 0 15px 30px rgba(0, 0, 0, 0.1);
            background-color: #fff;
            position: relative;
            padding: 100px 20px 40px;
            text-align: center;
            transition: transform 0.3s, box-shadow 0.3s;
            animation: fadeInUp 1s ease;
        }

        .profile-card img {
            width: 160px;
            height: 160px;
            object-fit: cover;
            border-radius: 50%;
            border: 5px solid #fff;
            box-shadow: 0 0 15px rgba(0, 0, 0, 0.1);
            position: absolute;
            top: -80px;
            left: 50%;
            transform: translateX(-50%);
            transition: transform 0.3s;
        }

        .profile-info {
            padding-top: 90px;
        }

        .profile-info h4 {
            margin: 0;
            font-size: 1.8rem;
            color: #333;
        }

        .profile-info p {
            color: #777;
            margin: 0.5rem 0;
        }

        .profile-social {
            display: flex;
            justify-content: center;
            margin-top: 1rem;
        }

        .profile-social a {
            color: #007bff;
            margin: 0 12px;
            font-size: 1.5rem;
            transition: color 0.3s;
        }

        .profile-social a:hover {
            color: #0056b3;
        }

        /* Fade-in animation */
        @keyframes fadeInUp {
            from {
                opacity: 0;
                transform: translateY(20px);
            }

            to {
                opacity: 1;
                transform: translateY(0);
            }
        }
    </style>
</head>

<body>
    <!-- Main Section with background image and title -->
    <div class="main-section">
        <h1>Hire-Spot</h1>
        <p>Dedicated Professionals Ready To Make a Difference</p>
    </div>

    <!-- Card container -->
    <div class="container card-container">
        <div class="row justify-content-center">
            <!-- Profile Card 1 -->
            @foreach($profiles as $profile)
            <div class="col-lg-4 col-md-6 col-sm-12 mb-4">
                <div class="profile-card">
                    <img src="{{ asset('storage/' . $profile->image) }}" alt="{{ $profile->first_name }}'s Photo">
                    <div class="profile-info">
                        <h4>{{ $profile->first_name }} {{ $profile->last_name }}</h4>
                        <p>{{ $profile->job_title }}</p>
                        <p>Location: {{ $profile->city }}, {{ $profile->state }}</p>
                        <div class="profile-social">
                            <a href="{{ $profile->linkedin }}"><i class="fab fa-linkedin"></i></a>
                            <a href="#"><i class="fab fa-github"></i></a>
                            <a href="#"><i class="fab fa-twitter"></i></a>
                        </div>
                    </div>
                </div>
            </div>
            @endforeach
        </div>
    </div>

    <!-- Bootstrap 5 JS Bundle with Popper -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js"></script>
</body>

</html>
