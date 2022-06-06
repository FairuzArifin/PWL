<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>login</title>

    <!-- Font Icon -->
    <link rel="stylesheet" href="fonts/material-icon/css/material-design-iconic-font.min.css">

    <!-- Main css -->
    <link rel="stylesheet" href="css/style.css">
</head>
<body>

    <div class="main">

        <!-- Sign up form -->
        <section class="signup">
            <div class="container">

            @if(session()->has('success'))
                <div class ="alert alert-success alert-dismissible fade show" role="alert">
                    {{session('success')}}
                        <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="close"></button>
                </div>
            @endif

                <div class="signup-content">
                    <div class="signup-form">
                        <h2 class="form-title">Register</h2>
                        <form action ="/register" method="POST">
                            @csrf  
                            <div class="form-group">
                                <label for="nik"><i class="zmdi zmdi-account material-icons-nik"></i></label>
                                <input type="text" name="nik" id="nik" class="form-control @error('nik') 
                                is-invalid @enderror "placeholder="No Nik" required/>
                            </div>
                            <label for="nik">No Nik</label>
                            @error('nik')
                                <div class="invalid-feedback">
                                    {{$message}}
                                </div>
                            @enderror

                            <div class="form-group">
                                <label for="name"><i class="zmdi zmdi-account material-icons-name"></i></label>
                                <input type="text" name="name" id="name" class="form-control @error('name') 
                                is-invalid @enderror "placeholder="Nama Lengkap" required/>
                            </div>
                            <label for="name">Nama Lengkap</label>
                            @error('name')
                                <div class="invalid-feedback">
                                    {{$message}}
                                </div>
                            @enderror

                            <div class="form-group">
                                <label for="email"><i class="zmdi zmdi-email"></i></label>
                                <input type="email" name="email" id="email" class="form-control @error('email') 
                                is-invalid @enderror "placeholder="Email" required/>
                            </div>
                            <label for="email">Email</label>
                            @error('email')
                                <div class="invalid-feedback">
                                    {{$message}}
                                </div>
                            @enderror

                            <div class="form-group">
                                <label for="password"><i class="zmdi zmdi-lock"></i></label>
                                <input type="password" name="password" id="password" class="form-control @error('password') 
                                is-invalid @enderror "placeholder="Password" required/>
                            </div>
                            <label for="password">Password</label>
                            @error('password')
                                <div class="invalid-feedback">
                                    {{$message}}
                                </div>
                            @enderror

                            <div class="form-group form-button">
                                <input type="submit" name="signup" id="signup" class="form-submit" value="Register"/>
                            </div>
                        </form>
                    </div>
                    <div class="signup-image">
                        <figure><img src="images/register.jpg" alt="sing up image"></figure>
                        <a href="/login" class="signup-image-link">I am already member</a>
                    </div>
                </div>
            </div>
        </section>
    </div>

    <!-- JS -->
    <script src="vendor/jquery/jquery.min.js"></script>
    <script src="js/main.js"></script>
</body><!-- This templates was made by Colorlib (https://colorlib.com) -->
</html>