<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <?php include './boot_css.php' ?>

</head>

<body>

    <main class="container-fluid d-flex justify-content-center position-relative align-items-center"
        style="height:100vh;">
        <div class="ball position-absolute"></div>
        <div class="ball2 position-absolute"></div>
        <section style="backdrop-filter:blur(10px)" class=" text-center  card rounded-3 border-0 shadow-lg bg-transparent">
            <section class="d-flex justify-content-center row  align-items-center">

                <section class="left sign-in-form p-5 col-lg-6  d-flex flex-column">

                    <h1 class="display-6 fw-bold">
                        Sign In To AssignMate
                    </h1>


                    <form action="./login.php">

                        <input type="email" placeholder="Enter your email..." class="form-control my-2"
                            style="background-color: #F5F5F5;">
                        <input type="password" placeholder="Enter your password..." class="form-control mt-2"
                            style="background-color: #F5F5F5;">
                    </form>
                    <p class="text-center fw-bold p-0">
                        Forgot your password?
                    </p>
                    <button style="background-color: #FE7731;" class="rounded-pill text-white fw-medium shadow btn w-50 d-block mx-auto">
                        Sign In
                    </button>
                </section>

                <section class="right  rounded-3 rounded-start-0  col-lg-6 d-flex flex-column gap-3 p-5 justify-content-center align-items-center"
                    style="height:517px;backdrop-filter:blur(10px)">
                    <h2 class="display-6 greeting text-center text-dark fw-bold">
                        Salam dear student!
                    </h2>
                    <p class="text-center text-dark greeting-text">
                        Enter your credentials to start AssignMate journey
                    </p>

                </section>
            </section>


    </main>

    <?php include './boot_js.php' ?>

    <script src="./app.js"></script>


</body>

</html>