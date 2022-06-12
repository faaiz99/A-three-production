<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" href="style.css">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.6.1/dist/css/bootstrap.min.css">
    <link
        href="https://fonts.googleapis.com/css2?family=Montserrat:wght@100;200;300;400;700;800&family=Open+Sans&display=swap"
        rel="stylesheet">
    <script src="https://cdn.jsdelivr.net/npm/jquery@3.6.0/dist/jquery.slim.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.6.1/dist/js/bootstrap.bundle.min.js"></script>
    <script src="https://code.jquery.com/jquery-3.2.1.slim.min.js"
        integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous">
    </script>
    <script src="https://kit.fontawesome.com/d7b7127037.js" crossorigin="anonymous"></script>
    <title>Sign Up</title>
</head>

<body style="background-color:#f6e5e5;">
    <section class="Form my-4 mx-5" style="background-color:#f6e5e5;">
        <div class="container">
            <div class="row row-signup" style="background-color:white;">
                <div class="col-lg-5">
                    <img class="image" src="images/signup1.jpg" class="img-fluid" alt="">
                </div>
                <div class="col-lg-7 px-5 pt-5">
                    <h4>Create Account</h4>
                    <form action="/signin" method="POST">
                        @csrf
                        <div class="form-row">
                            <div class="col-lg-7">
                                <label for="first_name"></label>
                                <input type="text" class="form-control my-2 p-3" placeholder="First Name"
                                    pattern="[a-zA-Z]([0-9a-zA-Z]){2,10}" required value="Faaiz" name = "first_name">
                            </div>
                        </div>
                        <div class="form-row">
                            <div class="col-lg-7">
                                <label for="last_name"></label>
                                <input type="text" class="form-control my-2 p-3" placeholder="Last Name"
                                    pattern="[a-zA-Z]([0-9a-zA-Z]){2,10}" required value="Faaiz" name="last_name">
                            </div>
                        </div>
                        <div class="form-row">
                            <div class="col-lg-7">
                                <label for="email"></label>
                                <input type="email" class="form-control my-2 p-3" placeholder="Email"
                                    pattern="([a-zA-Z0-9_\-.]+)@([a-zA-Z0-9_\-.]+)\.([a-zA-Z]){2,7}" required value="faaiz@gmail.com" name="email">
                            </div>
                        </div>
                        <div class="form-row">
                            <div class="col-lg-7">
                                <label for="password"></label>
                                <input type="password" class="form-control my-2 p-3" placeholder="Password" id="pass1" value="1234" name = "password">
                            </div>
                        </div>
                        <div class="form-row">
                            <div class="col-lg-7">
                                <input type="password" class="form-control my-2 p-3" placeholder="Confirm Password"
                                    id="pass2" value="1234">
                            </div>
                        </div>
                        <div class="form-row">
                            <div class="col-lg-7">
                                <label for="contact"></label>
                                <input type="text" class="form-control my-2 p-3" placeholder="+92-XXXXXXXXXX" pattern="((\+92)?(0092)?(92)?(0)?)(3)([0-9]{9})" required value="+923327411471" name = "contact">
                            </div>
                        </div>
                        <div class="form-row">
                            <div class="col-lg-7">
                                <a href="/signin"><button type="submit" class="btn1 mt-4 mb-5" onclick="passwordMatch()">Sign In</button>
                                </a>
                            </div>
                        </div>
                        <p>Already have an account?<a href="/signin" style="text-decoration:none;">Sign in</a></p>
                    </form>
                </div>
            </div>
        </div>
    </section>
    <script>
        function passwordMatch() {
            var pass1 = document.getElementById("pass1").value;
            var pass2 = document.getElementById("pass2").value;
            if (pass1 != pass2){
                event.preventDefault();
                alert("Password do no match")
            }
            else
                return true;

        }
    </script>

</body>

</html>
