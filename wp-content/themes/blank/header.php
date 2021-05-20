<?php
/**
 * The header for our theme
 *
 * This is the template that displays all of the <head> section and everything up until <div id="content">

 <a href="http://localhost/wpchsdog/checkout/" class="nav-item nav-link"><img src="http://localhost/wpchsdog/wp-content/uploads/2021/05/checkout.png" width="25" height="25"></a>
 *
 * @link https://developer.wordpress.org/themes/basics/template-files/#template-partials
 *
 * @package blank
 */

?>
<!doctype html>
<html <?php language_attributes(); ?>>
<head>
  <meta charset="<?php bloginfo( 'charset' ); ?>">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="profile" href="https://gmpg.org/xfn/11">
  <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">
  <script src="https://code.jquery.com/jquery-3.5.1.min.js"></script>
  <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.1/dist/umd/popper.min.js"></script>
  <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>
  <style>
    .bs-example{
        margin: 0px;
        margin-top: -35px;
        padding-top: 25px; 
        position: sticky;
        top: 0;
        border-radius: 10px;
        z-index: 100;
    }
  </style>

  <?php wp_head(); ?>
</head>

<body <?php body_class(); ?>>
<?php wp_body_open(); ?>
<div class="bs-example">
    <nav class="navbar navbar-expand-md navbar-light bg-light" style="background-color: lightgray !important; font-size: 20px; font-weight: bold;">
        <a href="http://localhost/wpchsdog/home/" class="navbar-brand" style="margin-left: 70px; font-family: Chiller; font-size: 30px;">Dripping Mayk</a>
        <button type="button" class="navbar-toggler" data-toggle="collapse" data-target="#navbarCollapse">
            <span class="navbar-toggler-icon"></span>
        </button>

        <div class="collapse navbar-collapse" id="navbarCollapse">
            <div class="navbar-nav">
                <a href="http://localhost/wpchsdog/home/" class="nav-item nav-link"><img src="http://localhost/wpchsdog/wp-content/uploads/2021/05/home-1.png" width="25" height="25"></a>
                <a href="http://localhost/wpchsdog/shop/" class="nav-item nav-link"><img src="http://localhost/wpchsdog/wp-content/uploads/2021/05/shop.png" width="25" height="25"></a>
                <a href="http://localhost/wpchsdog/my-account/" class="nav-item nav-link"><img src="http://localhost/wpchsdog/wp-content/uploads/2021/05/account.png" width="25" height="25"></a>
            </div>
            <div class="navbar-nav" style="float: right !important;">
                <a href="http://localhost/wpchsdog/cart/" class="nav-item nav-link" style="color: black;"><img src="http://localhost/wpchsdog/wp-content/uploads/2021/05/cart.png" width="25" height="25">&nbsp;CART</a>
            </div>
 
        </div>
        <div class="dropdown" style="margin-right: 100px;">
    <button class="btn btn-primary dropdown-toggle" type="button" data-toggle="dropdown">Help?
    </button>
    <ul class="dropdown-menu" style="width: 10%;">
      <li><a href="http://localhost/wpchsdog/about/">About Us</a></li>
      <li><a href="http://localhost/wpchsdog/contact/">Contact</a></li>
    </ul>
  </div>
    </nav>
</div>
