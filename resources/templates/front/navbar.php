<div class="container">
            <!-- Brand and toggle get grouped for better mobile display -->
            <div class="navbar-header">
                <button type="button" class="navbar-toggle" data-toggle="collapse" data-target="#bs-example-navbar-collapse-1">
                    <span class="sr-only">Toggle navigation</span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                </button>
                <a class="navbar-brand" href="index.php">FoodShala</a>
            </div>
            <!-- Collect the nav links, forms, and other content for toggling -->
            <div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1">
                <ul class="nav navbar-nav">
                    <li>
                        <a href="menu.php">Menu</a>
                    </li>
                    <li class="dropdown">
                  <a class="dropdown-toggle" data-toggle="dropdown" href="#">Login
                   <span class="caret"></span></a>
                   <ul class="dropdown-menu">
                     <li><a href="login_customer.php">Customer</a></li>
                     <li><a href="login_rest.php">Restaurant</a></li>
                     
                   </ul>
                 </li>
                 <li class="dropdown">
                  <a class="dropdown-toggle" data-toggle="dropdown" href="#">Register
                   <span class="caret"></span></a>
                   <ul class="dropdown-menu">
                     <li><a href="registration_custom.php">Customer</a></li>
                     <li><a href="registration_rest.php">Restaurant</a></li>
                     
                   </ul>
                 </li>
                  <li class="dropdown">
                    <a href="#" class="dropdown-toggle" data-toggle="dropdown"><i class="fa fa-user"></i><?php if(!isset($_SESSION['username'])) { echo "Guest"; } else { echo $_SESSION['username']; } ?><b class="caret"></b></a>
                    <ul class="dropdown-menu">
                       
                        <li class="divider"></li>
                        <li>
                            <a href="../public/restaurant/logout.php"><i class="fa fa-fw fa-power-off"></i> Log Out</a>
                        </li>
                    </ul>
                </li>
                 </ul>             
                </ul>
            </div>
            <!-- /.navbar-collapse -->
        </div>