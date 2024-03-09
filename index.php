<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/css/bootstrap.min.css" integrity="sha384-rbsA2VBKQhggwzxH7pPCaAqO46MgnOM80zW1RWuH61DGLwZJEdK2Kadq2F9CUG65" crossorigin="anonymous">
    <link rel="stylesheet" href="style.css">
    <title>Flores - Lab4.2</title>
    <link rel="icon" href="images/logo.png" type="image/png">

    <style>
        body {
            font-family: 'Poppins', sans-serif;
            background-image: url("images/1.jpg");
            background-repeat: no-repeat; 
            background-size: cover; 
            background-position: center; 
            height: 100vh; 
            margin: 0; 
        }
    </style>

</head>

<body>


    <div class="container d-flex justify-content-center align-items-center min-vh-100">

        <div class="row border p-3 bg-white shadow box-area">

            <div class="col-md-6 d-flex justify-content-center align-items-center flex-column left-box" style="background: #36393e;">
                <div class="featured-image mb-3">
                    <img src="images/2.webp" class="img-fluid" style="width: 250px;">
                </div>
                <p class="text-white fs-2" style="font-family: 'Courier New', Courier, monospace; font-weight: 600;">Yo, Hunter!</p>
                <small class="text-white text-wrap text-center" style="width: 17rem;font-family: 'Courier New', Courier, monospace;">Join the Dungeon Raid!</small>
            </div>



            <div class="col-md-6 right-box">
                <div class="row align-items-center">
                    <div class="header-text mb-4">
                        <h2>Welcome back, Ryoshi ⚔️</h2>
                        <p>Ready to hunt?</p>
                        <hr>
                    </div>
                    <div class="input-group mb-3">
                        <input type="text" class="form-control form-control-lg bg-light fs-6" placeholder="Email address">
                    </div>
                    <div class="input-group mb-1">
                        <input type="password" class="form-control form-control-lg bg-light fs-6" placeholder="Password">
                    </div>
                    <div class="input-group mb-5 d-flex justify-content-between">
                        <div class="form-check">
                            <input type="checkbox" class="form-check-input" id="formCheck">
                            <label for="formCheck" class="form-check-label text-secondary"><small>Remember Me</small></label>
                        </div>
                        <div class="forgot">
                            <small><a href="#">Forgot Password?</a></small>
                        </div>
                    </div>
                    <div class="input-group mb-3">
                        <button class="btn btn-lg btn-dark w-100 fs-6">Login</button>
                    </div>
                    <div class="input-group mb-3">
                        <button class="btn btn-lg btn-light w-100 fs-6"><img src="images/3.webp" style="width:20px" class="me-2"><small>Use Hunter License</small></button>
                    </div>
                    <div class="row">
                        <small>Don't have account? <a href="#">Sign Up</a></small>
                    </div>
                </div>
            </div>

        </div>
    </div>

</body>

</html>