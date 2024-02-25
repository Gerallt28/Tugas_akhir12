<?php
/**
 * Slider Page of Template
 * Created by PhpStorm.
 * User: Tushar Khan
 * Date: 9/8/2017
 * Time: 6:34 AM
 */
?>

        <div class="col-md-9 wthree_banner_bottom_center">
            <div class="bs-example bs-example-tabs" role="tabpanel" data-example-id="togglable-tabs">
                <ul id="myTab" class="nav nav-tabs" role="tablist">
                    <li role="presentation" class="active">
                        <a href="#home" id="home-tab" role="tab" data-toggle="tab" aria-controls="home">Daging</a>
                    </li>
                    <li role="presentation">
                        <a href="#sayur" role="tab" id="sayur-tab" data-toggle="tab" aria-controls="sayur">sayur</a>
                    </li>
                    <li role="presentation">
                        <a href="#food" role="tab" id="food-tab" data-toggle="tab" aria-controls="video">frozen food</a>
                    </li>
                 </ul>
                <div id="myTabContent" class="tab-content">
                    <div role="tabpanel" class="tab-pane fade active in" id="home" aria-labelledby="home-tab">
                        <div class="agile_ecommerce_tabs">
                            <?php $allPro = $productObject->showdaging(); if ($allPro): ?>
                                <?php while ($mobile = $allPro->fetch_assoc()): ?>
                                <div class="col-md-4 agile_ecommerce_tab_left">
                                    <div class="hs-wrapper">
                                        <?php for ($i = 1; $i <= 8; ++$i): ?>
                                            <img src="admin/<?php echo $mobile['image'];?>" alt=" " class="img-responsive" />
                                        <?php endfor; ?>
                                    </div>
                                    <div style="margin-top: 10px; margin-bottom: 10px">
                                        <h5><a href="single.php?proid=<?php echo $mobile['proid'];?>" target="_blank" ><?php echo $mobile['proname'];?></a></h5>
                                        <h3> Rp. <?php echo $mobile['price'];?></h3>
                                    </div>
                                    <div class="" style="margin-top: 10px">
                                        <a href="single.php?proid=<?php echo $mobile['proid'];?>" target="_blank" class="btn btn-info">Details</a>
                                    </div>
                                </div>
                                <?php endwhile; ?>
                            <?php endif; ?>
                            <div class="clearfix"> </div>
                        </div>
                    </div>
                    <div role="tabpanel" class="tab-pane fade" id="sayur" aria-labelledby="sayur-tab">
                        <div class="agile_ecommerce_tabs">
                            <div class="agile_ecommerce_tabs">
                                <?php $allPro = $productObject->showsayur(); if ($allPro): ?>
                                    <?php while ($mobile = $allPro->fetch_assoc()): ?>
                                        <div class="col-md-4 agile_ecommerce_tab_left">
                                            <div class="hs-wrapper">
                                                <?php for ($i = 1; $i <= 8; ++$i): ?>
                                                    <img src="admin/<?php echo $mobile['image'];?>" alt=" " class="img-responsive" />
                                                <?php endfor; ?>
                                            </div>
                                            <div style="margin-top: 10px; margin-bottom: 10px">
                                                <h5><a href="single.php?proid=<?php echo $mobile['proid'];?>" target="_blank" ><?php echo $mobile['proname'];?></a></h5>
                                                <h3> Rp. <?php echo $mobile['price'];?></h3>
                                            </div>
                                            <div class="" style="margin-top: 10px">
                                                <a href="single.php?proid=<?php echo $mobile['proid'];?>" target="_blank" class="btn btn-info">Details</a>
                                            </div>
                                        </div>
                                    <?php endwhile; ?>
                                <?php endif; ?>
                                <div class="clearfix"> </div>
                            </div>
                            <div class="clearfix"> </div>
                        </div>
                    </div>
                    <div role="tabpanel" class="tab-pane fade" id="food" aria-labelledby="food-tab">
                        <div class="agile_ecommerce_tabs">
                            <?php $allPro = $productObject->showfood(); if ($allPro): ?>
                                <?php while ($mobile = $allPro->fetch_assoc()): ?>
                                    <div class="col-md-4 agile_ecommerce_tab_left">
                                        <div class="hs-wrapper">
                                            <?php for ($i = 1; $i <= 8; ++$i): ?>
                                                <img src="admin/<?php echo $mobile['image'];?>" alt=" " class="img-responsive" />
                                            <?php endfor; ?>
                                        </div>
                                        <div style="margin-top: 10px; margin-bottom: 10px">
                                            <h5><a href="single.php?proid=<?php echo $mobile['proid'];?>" target="_blank" ><?php echo $mobile['proname'];?></a></h5>
                                            <h3> Rp. <?php echo $mobile['price'];?></h3>
                                        </div>
                                        <div class="" style="margin-top: 10px">
                                            <a href="single.php?proid=<?php echo $mobile['proid'];?>" target="_blank" class="btn btn-info">Details</a>
                                        </div>
                                    </div>
                                <?php endwhile; ?>
                            <?php endif; ?>
                            <div class="clearfix"> </div>
                        </div>
                    </div>
                    <div role="tabpanel" class="tab-pane fade" id="tv" aria-labelledby="tv-tab">
                        <div class="agile_ecommerce_tabs">
                            <?php $allPro = $productObject->showHouseholdProduct(); if ($allPro): ?>
                                <?php while ($mobile = $allPro->fetch_assoc()): ?>
                                    <div class="col-md-4 agile_ecommerce_tab_left">
                                        <div class="hs-wrapper">
                                            <?php for ($i = 1; $i <= 8; ++$i): ?>
                                                <img src="admin/<?php echo $mobile['image'];?>" alt=" " class="img-responsive" />
                                            <?php endfor; ?>
                                        </div>
                                        <div style="margin-top: 10px; margin-bottom: 10px">
                                            <h5><a href="single.php?proid=<?php echo $mobile['proid'];?>" target="_blank" ><?php echo $mobile['proname'];?></a></h5>
                                            <h3> Rp. <?php echo $mobile['price'];?></h3>
                                        </div>
                                        <div class="" style="margin-top: 10px">
                                            <a href="single.php?proid=<?php echo $mobile['proid'];?>" target="_blank" class="btn btn-info">Details</a>
                                        </div>
                                    </div>
                                <?php endwhile; ?>
                            <?php endif; ?>
                            <div class="clearfix"> </div>
                        </div>
                    </div>
                    <div role="tabpanel" class="tab-pane fade" id="kitchen" aria-labelledby="kitchen-tab">
                        <div class="agile_ecommerce_tabs">
                            <?php $allPro = $productObject->showKitchenProduct(); if ($allPro): ?>
                                <?php while ($mobile = $allPro->fetch_assoc()): ?>
                                    <div class="col-md-4 agile_ecommerce_tab_left">
                                        <div class="hs-wrapper">
                                            <?php for ($i = 1; $i <= 8; ++$i): ?>
                                                <img src="admin/<?php echo $mobile['image'];?>" alt=" " class="img-responsive" />
                                            <?php endfor; ?>
                                        </div>
                                        <div style="margin-top: 10px; margin-bottom: 10px">
                                            <h5><a href="single.php?proid=<?php echo $mobile['proid'];?>" target="_blank" ><?php echo $mobile['proname'];?></a></h5>
                                            <h3> Rp. <?php echo $mobile['price'];?></h3>
                                        </div>
                                        <div class="" style="margin-top: 10px">
                                            <a href="single.php?proid=<?php echo $mobile['proid'];?>" target="_blank" class="btn btn-info">Details</a>
                                        </div>
                                    </div>
                                <?php endwhile; ?>
                            <?php endif; ?>
                            <div class="clearfix"> </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="clearfix"> </div>
    </div>
</div>