<?php

//if (session_status() !== PHP_SESSION_ACTIVE) {session_start();}
if(session_id() == '' || !isset($_SESSION)){session_start();}
include 'config.php';
?>

<!doctype html>
<html class="no-js" lang="en">
  <head>
    <meta charset="utf-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>Products || Sprinle On</title>
    <link rel="stylesheet" href="css/foundation.css" />
    <script src="js/vendor/modernizr.js"></script>
  </head>
  <body>

    <nav class="top-bar" data-topbar role="navigation">
      <ul class="title-area">
        <li class="name">
          <h1><a href="index.php">Sprinkle On Seasoning</a></h1>
        </li>
        <li class="toggle-topbar menu-icon"><a href="#"><span></span></a></li>
      </ul>

      <section class="top-bar-section">
      <!-- Right Nav Section -->
        <ul class="right">
          <li class='active'><a href="products.php">Products</a></li>
          <li><a href="cart.php">View Cart</a></li>
          <li><a href="orders.php">My Orders</a></li>
          <li><a href="contact.php">Contact</a></li>
          <?php

          if(isset($_SESSION['username'])){
            echo '<li><a href="account.php">My Account</a></li>';
            echo '<li><a href="logout.php">Log Out</a></li>';
          }
          else{
            echo '<li><a href="login.php">Log In</a></li>';
            echo '<li><a href="register.php">Register</a></li>';
          }
          ?>
        </ul>
      </section>
    </nav>




    <div class="row" style="margin-top:10px;">
      <div class="small-12">
        <?php
          $i=0;
          $product_id = array();
          $product_quantity = array();

          $result = $mysqli->query('SELECT * FROM pepperProducts');
          if($result === FALSE){
            die(mysql_error());
          }

          if($result){

            while($obj = $result->fetch_object()) {
				if ($obj->typeOf === 'single')
<<<<<<< HEAD
				{	
					$forPack = $mysqli->query("SELECT id FROM products WHERE typeOf = '12-pack' AND product_name = '" . $obj->product_name . "'")->fetch_row()[0];
					$forPound = $mysqli->query("SELECT id FROM products WHERE typeOf = '50-pound' AND product_name = '" . $obj->product_name . "'")->fetch_row()[0];

					echo '<div class="large-3 columns">';
					echo '<p><h3>'.$obj->product_name.'</h3></p>';
					echo '<img src="images/products/'.$obj->product_img_name.'"/>';
					echo '<p><strong>Price (Per Unit)</strong>: '.$currency.$obj->price.'</p>';
					echo '<p><a href="update-cart.php?action=add&id='.$obj->id.'"><input type="submit" value="Add Single" style="clear:both; background: #0078A0; border: none; color: #fff; font-size: 1em; padding: 10px;" /></a></p>';
					echo '<p><a href="update-cart.php?action=add&id='.$forPack.'"><input type="submit" value="Add 12-pack" style="clear:both; background: #0078A0; border: none; color: #fff; font-size: 1em; padding: 10px;" /></a></p>';
					echo '<p><a href="update-cart.php?action=add&id='.$forPound.'"><input type="submit" value="Add 50 pound" style="clear:both; background: #0078A0; border: none; color: #fff; font-size: 1em; padding: 10px;" /></a></p>';
					echo '</div>';
				}
				if ($obj->typeOf === 'breading')
				{
					echo '<div class="large-3 columns">';
					echo '<p><h3>'.$obj->product_name.'</h3></p>';
					echo '<img src="images/products/'.$obj->product_img_name.'"/>';
					echo '<p><strong>Price</strong>: '.$currency.$obj->price.'</p>';
					echo '<p><a href="update-cart.php?action=add&id='.$obj->id.'"><input type="submit" value="Add to cart" style="clear:both; background: #0078A0; border: none; color: #fff; font-size: 1em; padding: 10px;" /></a></p>';
					echo '</div>';
				}			
=======
				{
				  $forPack = $mysqli->query('SELECT id FROM pepperProducts WHERE product_name = '.($obj->product_name).' AND typeOf = pack');
				  $forLb = $mysqli->query('SELECT id FROM pepperProducts WHERE product_name = '.($obj->product_name).' AND typeOf = pound');
				  echo '<div class="large-3 columns">';
				  echo '<p><h3>'.$obj->product_name.'</h3></p>';
				  echo '<img src="images/products/'.$obj->product_img_name.'"/>';
				  echo '<p><strong>Price (Per Unit)</strong>: '.$currency.$obj->price.'</p>';
				  echo '<p><a href="update-cart.php?action=add&id='.$obj->id.'"><input type="submit" value="Add Single" style="clear:both; background: #0078A0; border: none; color: #fff; font-size: 1em; padding: 10px;" /></a></p>';
				  echo '<p><a href="update-cart.php?action=add&id='.$forPack.'"><input type="submit" value="Add 12-pack" style="clear:both; background: #0078A0; border: none; color: #fff; font-size: 1em; padding: 10px;" /></a></p>';
				  echo '<p><a href="update-cart.php?action=add&id='.$forLb.'"><input type="submit" value="Add 50 pound" style="clear:both; background: #0078A0; border: none; color: #fff; font-size: 1em; padding: 10px;" /></a></p>';
				  echo '</div>';
				}
			}
            $i++;
          }
		  
		  $result2 = $mysqli->query('SELECT * FROM breadingProducts');
          if($result2 === FALSE){
            die(mysql_error());
          }
		  
		  
          if($result2){

            while($obj = $result2->fetch_object()) {

              echo '<div class="large-3 columns">';
              echo '<p><h3>'.$obj->product_name.'</h3></p>';
              echo '<img src="images/products/'.$obj->product_img_name.'"/>';
              echo '<p><strong>Price (Per Unit)</strong>: '.$currency.$obj->price.'</p>';
              echo '<p><a href="update-cart.php?action=addSingle&id='.$obj->id.'"><input type="submit" value="Add Single" style="clear:both; background: #0078A0; border: none; color: #fff; font-size: 1em; padding: 10px;" /></a></p>';
			  echo '</div>';
>>>>>>> b38c0c27eaedf39813c68c95ffdef7126bd86395
			}
            $i++;
          }

          $_SESSION['product_id'] = $product_id;


          echo '</div>';
          echo '</div>';
          ?>

        <div class="row" style="margin-top:10px;">
          <div class="small-12">




        <footer style="margin-top:10px;">
           <p style="text-align:center; font-size:0.8em;clear:both;">&copy; Sprinkle On Seasoning. All Rights Reserved.</p>
        </footer>

      </div>
    </div>





    <script src="js/vendor/jquery.js"></script>
    <script src="js/foundation.min.js"></script>
    <script>
      $(document).foundation();
    </script>
  </body>
</html>
