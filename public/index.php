<?php require_once("../resources/config.php") ?>
<?php include(TEMPLATE_FRONT . DS . "header.php") ?>
    <!-- Page Content -->
    <div class="container">

        <div class="row">
           <?php include(TEMPLATE_FRONT . DS . "sidenav.php") ?>
            <div class="col-md-9">

                <div class="row carousel-holder">

                    <div class="col-md-12">
                        <?php include(TEMPLATE_FRONT . DS . "slider.php") ?>
                    </div>

                </div>
             <h3 style="text-align: center;"> FoodShala in Popular Cities</h3>
                <div class="row">
                 <div class="col-sm-4 col-lg-4 col-md-4">
                     <div class="thumbnail">
        <img src="https://i.ndtvimg.com/i/2017-09/india-gate_650x400_71504247978.jpg">
         <h4 style="text-align: center;">Delhi</h4>  
          </div>
            </div>
        <div class="col-sm-4 col-lg-4 col-md-4">
        <div class="thumbnail">
        <img src="https://k6u8v6y8.stackpathcdn.com/blog/wp-content/uploads/2016/04/mumbai.jpg" width="100%">
         <h4 style="text-align: center;">Mumbai</h4>  
          </div>
            </div>
            <div class="col-sm-4 col-lg-4 col-md-4">
        <div class="thumbnail">
        <img src="https://www.holidify.com/images/cmsuploads/compressed/Rain-in-Kolkata3-4_20171124220126.jpg">
         <h4 style="text-align: center;">Kolkata</h4>  
          </div>
            </div>
          </div>

            </div>
        </div>
    </div>
    <!-- /.container -->
<?php include(TEMPLATE_FRONT . DS . "footer.php") ?>