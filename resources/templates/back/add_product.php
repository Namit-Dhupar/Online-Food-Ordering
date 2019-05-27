<?php add_menu_item(); ?>
<div class="col-md-12">

<div class="row">
<h1 class="page-header">
   Add Menu Item

</h1>
<h4 class="text-center bg-success"><?php display_msg(); ?></h4>
</div>
<form action="" method="post" enctype="multipart/form-data">
<div class="col-md-8">

<div class="form-group">
    <label for="product-title">Dish Name</label>
        <input type="text" name="product_title" class="form-control">
       
    </div>
    <div class="form-group row">

      <div class="col-xs-3">
        <label for="product-price">Product Price</label>
        <input type="number" name="product_price" class="form-control" size="60">
      </div>
    </div>

</div><!--Main Content-->
<aside id="admin_sidebar" class="col-md-4">

     
     <div class="form-group">
      <input type="submit" name="submit" class="btn btn-primary btn-lg" value="Publish">
    </div>


     <!-- Product Categories-->

    <div class="form-group">
         <label for="product-title">Product Category</label>
         <select name="product_category" id="" class="form-control">
            <option>Vegetarian</option>
             <option>Non-Vegetarian</option>
           
        </select>


</div>


    <!-- Product Image -->
    <div class="form-group">
        <label for="product-title">Menu Item Image</label>
        <input type="file" class="form-control-file" name="image">
      
    </div>



</aside><!--SIDEBAR-->


    
</form>

 </div>
            <!-- /.container-fluid -->

  