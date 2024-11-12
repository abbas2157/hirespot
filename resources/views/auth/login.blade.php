<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8" />
    <title>Hire-Spot-login</title>
    <meta content="width=device-width, initial-scale=1.0" name="viewport" />
    <meta name="csrf-token" content="{{ csrf_token() }}">

    <!-- Icon Font Stylesheet -->
    <link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.1/css/all.min.css" rel="stylesheet" />
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.11.3/font/bootstrap-icons.min.css" />

    <!-- Customized Bootstrap Stylesheet -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet" />

    <!-- Template Stylesheet -->
    <style>
        .signup-body {
            background-color: #f8f9fa;
        }

        .signup {
            min-height: 100vh;
            display: flex;
            align-items: center;
            justify-content: center;
        }

        .signup-img img {
            max-width: 100%;
            height: auto;
        }

        .signup-form {
            background-color: #343a40;
            padding: 2rem;
            border-radius: 0.5rem;
        }

        .password-container {
            position: relative;
            margin-bottom: 1rem;
        }

        .password-container input {
            padding-right: 2.5rem;
        }

        .password-toggle {
            position: absolute;
            right: 10px;
            top: 50%;
            transform: translateY(-50%);
            font-size: 1.25rem;
            color: #000;
            /* Black color for the icon */
            cursor: pointer;
        }

        .invalid-feedback {
            display: block;
            color: #dc3545;
        }

        .keep-me-logged {
            margin-top: 1rem;
        }

        .forget-password a {
            color: #f8f9fa;
        }

        .forget-password a:hover {
            text-decoration: underline;
        }

        .save-btn {
            background-color: #007bff;
            border: none;
            transition: background-color 0.3s;
        }

        .save-btn:hover {
            background-color: #0056b3;
        }
    </style>
</head>

<body class="signup-body">
    <section class="signup">
        <div class="container">
            <div class="row justify-content-center">
                <div class="col-md-4 col-lg-5 d-flex align-items-center justify-content-center">
                    <img src="public/assets/img/homepage.png" class="img-fluid" alt="Login Image" />
                </div>
                <div class="col-md-8 col-lg-5">
                    @if (session()->has('message'))
                        <div id="success-message" class="alert alert-success">
                            {{ session()->get('message') }}
                        </div>
                    @endif
                    @if (session()->has('error'))
                        <div id="error-message" class="alert alert-danger">
                            {{ session()->get('error') }}
                        </div>
                    @endif
                    <div class="signup-form text-white">
                        <h2 class="mb-4">Sign In</h2>
                        <p class="mb-4">Please enter your credentials</p>
                        <form method="POST" action="{{ route('user.login') }}" id="regForm"
                            class="signup-input mt-4" enctype="multipart/form-data">
                            @csrf
                            <div class="password-container">
                                <input type="email" name="email"
                                    class="form-control @error('email') is-invalid @enderror" placeholder="Email"
                                    required />
                                <i class="fas fa-envelope password-toggle"></i>
                                @error('email')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>
                            <div class="password-container">
                                <input type="password" id="password" name="password"
                                    class="form-control @error('password') is-invalid @enderror"
                                    placeholder="Password" />
                                <i class="fas fa-lock password-toggle"
                                    onclick="togglePasswordVisibility('password')"></i>
                                @error('password')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>
                            <div class="row text-white keep-me-logged">
                                <div class="col-md-6 d-flex align-items-center">
                                    <input type="checkbox" class="form-check-input me-2" id="keep-me-signed-in" />
                                    <label class="form-check-label" for="keep-me-signed-in">Keep me signed in</label>
                                </div>
                                <div class="col-md-6 text-end forget-password">
                                    <a href="#" data-bs-toggle="modal" data-bs-target="#exampleModalToggle">
                                        Forgot Password?
                                    </a>
                                </div>
                            </div>
                            <button type="submit" class="btn save-btn text-white w-100 mt-3">
                                Sign In
                            </button>
                            <a class="btn btn-secondary text-white w-100 mt-2" href="{{ route('register') }}">Don't Have
                                an Account? Register</a>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!-- JavaScript Libraries -->
    <script src="https://code.jquery.com/jquery-3.4.1.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js"></script>
    <script src="https://ajax.aspnetcdn.com/ajax/jquery.validate/1.11.0/jquery.validate.min.js"></script>
    <!-- Template Javascript -->
    <script>
        $(document).ready(function() {
            $('#regForm').validate({
                errorClass: "invalid-feedback",
                validClass: "valid-feedback",
                rules: {
                    email: {
                        required: true,
                        email: true
                    },
                    password: {
                        required: true,
                        minlength: 8
                    }
                },
                messages: {
                    email: {
                        required: "Please enter your email",
                        email: "Please enter a valid email address"
                    },
                    password: {
                        required: "Please enter your password",
                        minlength: "Your password must be at least 8 characters long"
                    }
                },
                highlight: function(element) {
                    $(element).addClass('is-invalid').removeClass('is-valid');
                },
                unhighlight: function(element) {
                    $(element).removeClass('is-invalid').addClass('is-valid');
                },
                submitHandler: function(form) {
                    form.submit();
                }
            });
        });

        function togglePasswordVisibility(id) {
            var passwordField = document.getElementById(id);
            if (passwordField.type === 'password') {
                passwordField.type = 'text';
            } else {
                passwordField.type = 'password';
            }
        }
    </script>
    <script>
        document.addEventListener('DOMContentLoaded', function() {
            var successMessage = document.getElementById('success-message');
            if (successMessage) {
                setTimeout(function() {
                    successMessage.style.display = 'none';
                }, 10000); // 10000 milliseconds = 10 seconds
            }
        });
        document.addEventListener('DOMContentLoaded', function() {
            var errorMessage = document.getElementById('error-message');
            if (errorMessage) {
                setTimeout(function() {
                    errorMessage.style.display = 'none';
                }, 10000); // 10000 milliseconds = 10 seconds
            }
        });
    </script>
</body>

</html>

