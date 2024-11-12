<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Hire-Spot</title>
    <!-- Bootstrap 5 CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet">
    <!-- Font Awesome for Icons -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0-beta3/css/all.min.css">
    <style>
        body {
            font-family: 'Arial', sans-serif;
        }

        /* Main section with background image */
        .main-section {
            background-image: url('public/assets/img/home2.png');
            background-size: cover;
            color: #0cc82e;
            padding: 300px 0px;
            text-align: center;
            background-repeat: no-repeat;
            height: 0vh;
        }

        .main-section h1 {
            font-size: 4rem;
            font-weight: bold;
        }

        .main-section p {
            font-size: 1.5rem;
        }

        /* Card container */
        .card-container {
            display: flex;
            justify-content: space-between;
            flex-wrap: wrap;
            gap: 50px;
            padding: 50px 1rem;
            margin-top: -80px;
        }

        .profile-card {
            width: 100%;
            max-width: 400px;
            border: none;
            border-radius: 20px;
            overflow: hidden;
            box-shadow: 0px 15px 30px rgba(0, 0, 0, 0.1);
            background-color: #fff;
            padding: 40px 20px;
            text-align: center;
        }

        .profile-card img {
            width: 160px;
            height: 160px;
            object-fit: contain;
            object-fit: cover;
            border-radius: 50%;
            border: 5px solid #fff;
            box-shadow: 0 0 15px rgba(0, 0, 0, 0.1);
            margin: 0 auto;
        }

        .profile-info {
            padding-top: 30px;
        }

        .profile-info h4 {
            margin: 0;
            font-size: 1.8rem;
            color: #333;
        }

        .profile-info p {
            color: #777;
            margin-bottom: 0.5rem;
        }

        .profile-social {
            display: flex;
            justify-content: center;
            margin-top: 1rem;
        }

        .profile-social a {
            color: #007bff;
            margin: 0 12px;
            font-size: 2rem;
            transition: color 0.3s;
        }

        .profile-social a:hover {
            color: #0056b3;
        }

        /* View Profile Button */
        .view-profile-btn {
            background-color: #007bff;
            color: #fff;
            border: none;
            margin-top: 20px;
            padding: 10px 20px;
            font-size: 1.2rem;
            border-radius: 10px;
            cursor: pointer;
        }
    </style>
</head>

<body>
    <!-- Main Section with background image and title -->
    <div class="main-section">
        <h1>Hire Spot</h1>
        <p>Dedicated Professionals Ready To Make a Difference</p>
    </div>

    <!-- Card container with Bootstrap Grid system -->
    <div class="container mt-3">
        <div class="row justify-content-center">
            <!-- Profile Card 1 -->
            @foreach($profiles as $profile)
            <div class="col-lg-4 col-md-6 col-sm-12 mb-4">
                <div class="profile-card">
                    <img src="{{ asset('public/storage/' . $profile->image) }}"
                        alt="{{ $profile->first_name }}'s Photo">
                    <div class="profile-info">
                        <h4>{{ $profile->first_name }} {{ $profile->last_name }}</h4>
                        <p>{{ $profile->job_title }}</p>
                        <p>Location: {{ $profile->city }}, {{ $profile->state }}</p>
                        <div class="profile-social">
                            <a href="{{ $profile->linkedin }}"><i class="fab fa-linkedin"></i></a>
                            <a href="#"><i class="fab fa-github"></i></a>
                            <a href="#"><i class="fab fa-twitter"></i></a>
                        </div>
                        <a href="{{ route('frontend.profile.show', $profile->user_id) }}" class="view-profile-btn btn btn-primary">View Profile</a>
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