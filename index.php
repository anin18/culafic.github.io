<?php
    require 'header.php';
?>

    <!--MAIN STARTS HERE-->
    <main>
        <!--SECTION LOGIN STARTS HERE-->
        <section class="login" id="login">
            <div class="main-sweet-wall">
                <div class="login-wrapper position-absolute text-center p-3 p-md-4">
                    <h2>Prijava</h2>
                    <h5 class="mb-4 mb-sm-5">Ako niste nas clan, mozete te se registrovati <a
                            href="login.html#register">ovde</a>.</h5>
                    <form action="" method='GET' class="login-form m-auto">
                        <div class="form-group mb-5">
                            <input type="text" class="form-control" placeholder="Email">
                        </div> 
                        <div class="form-group mb-5">
                            <input type="text" class="form-control" placeholder="Password">
                        </div>
                        <div class="text-left lost-password  mb-4">
                            Zaboravili ste sifru?
                        </div>
                        <button class="btn btn-lg">Prijavi se</button>
                    </form>
                </div>
            </div>
        </section>
        <!--SECTION LOGIN ENDS HERE-->

       <?php
       require 'signup.php';
       require 'footer.php';
       ?>
  