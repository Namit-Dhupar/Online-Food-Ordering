<?php require_once("../resources/config.php"); ?>
<?php include(TEMPLATE_FRONT . DS . "header.php"); ?>
<?php login_check_customer(); ?>
<?php fill_orders();?>
<?php get_order(); ?>
<div class="container">
	<h1>THANK YOU!</h1>
	<h5>Your Order Will Be Arriving Shortly</h5>
</div>

<?php include(TEMPLATE_FRONT . DS . "footer.php"); ?>
