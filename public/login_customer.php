<?php require_once("../resources/config.php") ?>
<?php include(TEMPLATE_FRONT . DS . "header.php") ?>

    <!-- Page Content -->
    <div class="container">

      <header>
            <h1 class="text-center">Login Customer</h1>
           <h4 class="text-center bg-warning"><?php display_msg(); ?></h4>
        <div class="col-sm-4 col-sm-offset-5">         
            <form class="" action="" method="post">
                <?php login_customer(); ?>
                <div class="form-group"><label for="">
                    Username<input type="text" name="username" class="form-control"></label>
                </div>
                 <div class="form-group"><label for="password">
                    Password<input type="password" id="key" name="password" class="form-control"></label>
                </div>

                <div class="form-group">
                  <input type="submit" name="submit" class="btn btn-primary" >
                </div>
            </form>
        </div>  


    </header>


        </div>

    </div>
    <!-- /.container -->

    <div class="container">

        <hr>

        <!-- Footer -->
<?php include(TEMPLATE_FRONT . DS . "footer.php") ?>