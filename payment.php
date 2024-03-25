<?php $koneksi =new mysqli("localhost" ,"root","","ecom");?>

<?php
    include 'header.php';
    global $total;
    
?>

    <!--banner-->
    <div class="banner banner10">
        <div class="container">
            <h2>Payment</h2>
        </div>
    </div>
    <!--//banner-->
    <!-- breadcrumbs -->
    <div class="breadcrumb_dress">
        <div class="container">
            <ul>
                <li><a href="index.php"><span class="glyphicon glyphicon-home" aria-hidden="true"></span> Home</a> <i>/</i></li>
                <li>Payment</li>
            </ul>
        </div>
    </div>
    <?php ?>
    <?php if (isset($_GET['orderNow']) && $_GET['orderNow'] == 'order' ):  ?>
        <?php $productObject->orderProductByCustomerId(Session::get("userId")); $cartObject->deleteCart(); ?>
    <?php endif; ?>
   
    <!-- //breadcrumbs -->
    <div class="single">
        <div class="container">
            <div class="row">
                <?php $allCartProduct = $cartObject->allProductBySessionId(); if ($allCartProduct): $emptyCart = true; $i = 0; ?>
                    <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
                        <div class="cart-table">
                            <table class="table">
                                <thead class="table table-bordered">
                                <tr>
                                    <th class="text-center" style="width: 16.66%;">#</th>
                                    <th class="text-center" style="width: 16.66%;">Name</th>
                                    <th class="text-center" style="width: 16.66%;">Price</th>
                                    <th class="text-center" style="width: 16.66%;">Quantity</th>
                                    <th class="text-center" style="width: 16.66%;">Total Price</th>
                                    <th class="text-center" style="width: 16.66%;">Image</th>
                                    <th class="text-center" style="width: 16.66%;">pembayaran</th>
                                </tr>
                                </thead>

                                <tbody>
                                <?php while ( $allCart = $allCartProduct->fetch_assoc() ): $i++; ?>
                                    <tr>
                                        <th scope="row" class="text-center"><?php echo $i; ?></th>
                                        <td class="text-center"><?php echo $allCart['proname']; ?></td>
                                        <td class="text-center">Rp.<?php echo $allCart['price']; ?></td>
                                        <td class="text-center"><?php echo $allCart['quantity']; ?></td>
                                        <td class="text-center">Rp.<?php echo $allCart['quantity']*$allCart['price']; $total += $allCart['quantity']*$allCart['price']; ?></td>
                                        <td class="text-center">
                                            <img src="admin/<?php echo $allCart['image']; ?>" title="<?php echo $allCart['proname']; ?>" alt="" class="img-rounded img-responsive" style="height: 65%;width: 70%;" />
                                        </td>
                                        <td>
                                        <a href="pembayaran.php?=<?php echo $pecah['id'];?>" class="btn-danger btn">pembayaran</a>
                                        </td>
                                        </tr>
                                <?php endwhile; ?>
                                </tbody>
                            </table>
                        </div>
                    </div>
                <?php else: ?>
                    <?php
                    echo "<div class='alert alert-danger alert-dismissable'>
                              <a href='#' class='close' data-dismiss='alert' aria-label='close'>&times;</a>
                              <strong> Warning !</strong> Cart is Empty.
                          </div>";
                    ?>
                <?php endif; ?>
                                </div>
            </div>
       </div>
       
                    <div class="col-md-4 col-lg-4 col-sm-4 col-xs-4 pull-right hover">
                        <div class="cart-info" style="background-color: #d9edf7; padding: 15%;box-shadow: 5px 4px 18px #888888;border-radius: 3%; font-weight: 700">
                        <div class="form-group">
                                    <!-- <label class="control-label col-md-3 col-sm-3 col-xs-12">Bukti pembayaran</label> -->
                                <?php $ambil=$koneksi->query("SELECT * FROM ecom_customer_order where customerid='customerid'" );?>
                                 <?php while($pecah = $ambil->fetch_array()){?>
                                        <a href="pembayaran.php?=<?php echo $pecah['customerid'];?>" class="btn-danger btn">pembayaran</a>
                                    <?php }  ?>
                                    
                        </div>  
                        <div class="checkout-button" style="box-shadow: 5px 4px 18px #888888;">
                            <a class="btn btn-block btn-warning text-capitalize" href="?orderNow=order">order</a>
                    </div> 
                </div>
            </div>
        </div>
    </div>

  
 

<?php
    include 'footer.php';
?>