<?php
    include 'header.php';
?>
  <div class="collapse navbar-collapse" id="bs-megadropdown-tabs">
                        <ul class="nav navbar-nav">
                          
                            <!-- Mega Menu -->
                            <li>
                                <a href="profile.php" class="act">Kembali ?</a>
                            </li>
                       </ul>
                    </div>
                </nav>
            </div>
        </div>

<div role="tabpanel" class="tab-pane" id="update">
                                <div class="user-info-update">
                                    <div class="col-md-11">
                                        <div class="user-update-part-two">
                                            <?php $userInfo = $userObject->userInfoById(Session::get("userId")); if ($userInfo): ?>
                                                <form action="" method="post" enctype="multipart/form-data">
                                                    <?php while ($info = $userInfo->fetch_assoc()): ?>
                                                        <div class="form-group">
                                                            <label for="name">Name:</label>
                                                            <input type="text" class="form-control" id="name" name="name" value="<?php echo $info['name'] ?>" />
                                                        </div>
                                                        <div class="form-group">
                                                            <label for="email">E-mail:</label>
                                                            <input type="email" class="form-control" id="email" name="email" value="<?php echo $userEmail = $info['email'] ?>" />
                                                        </div>
                                                        <div class="form-group">
                                                            <label for="zip">Country Zip-Code:</label>
                                                            <input type="text" class="form-control" id="zip" name="zip" value="<?php if (strcmp( $info['zip'], "NULL") == 0) echo "Empty"; else echo $info['zip']; ?>" />
                                                        </div>
                                                        <div class="form-group">
                                                            <label for="phone">Phone:</label>
                                                            <input type="text" class="form-control" id="phone" name="phone" value="<?php if (strcmp( $info['phone'], "NULL") == 0) echo "Empty"; else echo $info['phone'];?>" />
                                                        </div>
                                                        <div class="form-group">
                                                            <label for="image">Image:</label>
                                                            <input type="file" id="image" name="image" />
                                                        </div>
                                                        <div class="form-group">
                                                            <label for="country">alaamat:</label>
                                                            <input type="text" class="form-control" id="country" name="country" value="<?php if (strcmp( $info['country'], "NULL") == 0) echo "Empty"; else echo $info['country'];?>" />
                                                        </div>
                                                        <div class="form-group">
                                                            <label for="city"> kota:</label>
                                                            <input type="text" class="form-control" id="city" name="city" value="<?php if (strcmp( $info['city'], "NULL") == 0) echo "Empty"; else echo $info['city'];?>" />
                                                        </div>
                                                        <div class="form-group">
                                                            <button type="submit" class="btn btn-default w3ls-cart" name="update" > <i class="fa fa-thumbs-o-up"></i> Update</button>
                                                        </div>
                                                    <?php endwhile; ?>
                                                </form>
                                            <?php endif; ?>
                                        </div>
                                    </div>
                                </div>
                            </div>