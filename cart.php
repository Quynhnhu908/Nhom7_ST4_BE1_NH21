<!-- Cart -->
<div class="dropdown">
    <?php
        $cart = array();
        if(isset($_GET['id'])){
            $id = $_GET['id'];
            if(isset($_SESSION['cart'][$id])){
                $_SESSION['cart'][$id]++;
            }
            else{
                $_SESSION['cart'][$id] = 1;
            }
        }
        $cart = $_SESSION['cart'];
    ?>
	<a class="dropdown-toggle" data-toggle="dropdown" aria-expanded="true">
		<i class="fa fa-shopping-cart"></i>
		<span>Your Cart</span>
        <?php
        $count1 = 0;
            foreach($cart as $key=>$qty):
                foreach($getAllProducts as $value):
                    if($key == $value['id']):
                        $subCount1 = $qty;
        ?>
        <?php $count1 += $subCount1; ?>
		<div class="qty"><?php echo $count1 ?></div>
        <?php
                    endif;
                endforeach;
            endforeach;
        ?>
	</a>
    
    <div class="cart-dropdown">
	    <div class="cart-list">
            <?php
            $total = 0;
            $count = 0;
            foreach($getAllProducts as $value):
                foreach($cart as $key=>$qty):
                        if($key == $value['id']):
                         $subTotal = $value['price'] * $qty;
                         $subCount = $qty;
            ?>
		    <div class="product-widget">
			    <div class="product-img">
				    <img src="./img/<?php echo $value['pro_image'] ?>" alt="">
			    </div>
			    <div class="product-body">
				    <h3 class="product-name"><a href="#"><?php echo $value['name'] ?></a></h3>
				    <h4 class="product-price"><span class="qty">x<?php echo $qty ?></span><?php echo number_format($subTotal)?></h4>
                </div>
			    <a href="del.php?id=<?php echo $key; ?>" class="delete"><i class="fa fa-close"></i></a>
		    </div>
            <?php 
                $total += $subTotal; 
                $count += $subCount;
            ?>
            <?php
                        endif;
                    endforeach;
                endforeach;
            ?>
        </div>
        <div class="cart-summary">
	        <small><?php echo $count; ?> Item(s) selected</small>
	        <h5>SUBTOTAL: <?php echo number_format($total); ?></h5>
        </div>
        <div class="cart-btns">
	        <a href="#">View Cart</a>
	        <a href="checkout.php">Checkout  <i class="fa fa-arrow-circle-right"></i></a>
        </div>
    </div>
    
</div>
<!-- /Cart -->