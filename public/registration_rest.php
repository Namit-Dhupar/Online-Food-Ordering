<?php require_once("../resources/config.php") ?>
<?php include(TEMPLATE_FRONT . DS . "header.php") ?>
<?php register_rest(); ?>
    <!-- Page Content -->
    <div class="container">
    
<section id="login">
    <div class="container">
        <div class="row">
            <div class="col-xs-6 col-xs-offset-3">
                <div class="form-wrap">
                <h1>Register New Restaurant</h1>
                <h4 class="text-center bg-success"><?php display_msg(); ?></h4>
                    <form role="form" action="registration_rest.php" method="post" id="login-form" autocomplete="off">
                        <div class="form-group">
                            <label for="username" class="sr-only">Restaurant Name</label>
                            <input type="text" name="username" id="username" class="form-control" placeholder="Restaurant Name">
                        </div>
                         <div class="form-group">
                            <label for="email" class="sr-only">Email</label>
                            <input type="email" name="email" id="email" class="form-control" placeholder="Restaurant Official E-Mail">
                        </div>
                        <div class="form-group">
                            <label for="username" class="sr-only">Address</label>
                            <input type="text" name="address" id="address" class="form-control" placeholder="Address">
                        </div>
                         <div class="form-group">
                            <label for="password" class="sr-only">Password</label>
                            <input type="password" name="password" id="key" class="form-control" placeholder="Password">
                        </div>
                
                        <input type="submit" name="submit" id="btn-login" class="btn btn-custom btn-lg btn-block" value="Register">
                    </form>
                 
                </div>
            </div> <!-- /.col-xs-12 -->
        </div> <!-- /.row -->
    </div> <!-- /.container -->
<?php include(TEMPLATE_FRONT . DS . "footer.php") ?>