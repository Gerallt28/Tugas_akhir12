<?php
/**
 * Product Class
 * Created by PhpStorm.
 * User: Tushar Khan
 * Date: 9/10/2017
 * Time: 5:33 AM
 */
?>

<?php
    $filePath = realpath(dirname(__FILE__));
    include_once $filePath.'/../lib/Database.php';
    include_once $filePath.'/../helpers/Formate.php';



    
    /**
     * Summary of Product
     */
    class Back_up_produk
    {
        /**
         * Summary of db
         * @var 
         */
        private $db;
        /**
         * Summary of fm
         * @var 
         */
        private $fm;

        /**
         * Summary of __construct
         */
        public function __construct()
        {
            $this->db = new Database();
            $this->fm = new Formate();
        }

        /**
         * Summary of insertProduct
         * @param mixed $data
         * @param mixed $image
         * @return void
         */

         


        public function insertProduct($data, $image)
        {
            $proName        = $this->fm->validation($data['product']);
            $category       = $this->fm->validation($data['category']);
            $brand          = $this->fm->validation($data['brand']);
            $proDescription = $this->fm->validation($data['prodis']);
            $proPrice       = $this->fm->validation($data['price']);
            $proType        = $this->fm->validation($data['type']);

            $proName        = mysqli_real_escape_string($this->db->link, $proName);
            $category       = mysqli_real_escape_string($this->db->link, $category);
            $brand          = mysqli_real_escape_string($this->db->link, $brand);
            $proDescription = mysqli_real_escape_string($this->db->link, $proDescription);
            $proPrice       = mysqli_real_escape_string($this->db->link, $proPrice);
            $proType        = mysqli_real_escape_string($this->db->link, $proType);


            $permited  = array('jpg', 'jpeg', 'png', 'gif');
            $file_name = $image['image']['name'];
            $file_size = $image['image']['size'];
            $file_temp = $image['image']['tmp_name'];

            $div = explode('.', $file_name);
            $file_ext = strtolower(end($div));
            $unique_image = substr(md5(time()), 0, 10).'.'.$file_ext;
            $uploaded_image = "uploads/".$unique_image;

            if (empty($file_name) || empty($proName) || empty($category) || empty($brand) || empty($proDescription) || empty($proPrice) || empty($proType))
            {
                echo "<div class='alert alert-danger alert-dismissable'>
                          <a href='#' class='close' data-dismiss='alert' aria-label='close'>&times;</a>
                          <strong>Warning !</strong> Fields Should not be Empty.
                      </div>";
            }
            else
            {
                $date = date('y-m-d');
                move_uploaded_file($file_temp, $uploaded_image);
                $this->db->insert("INSERT INTO ecom_product(proname, catid, brandid, body, price, image, type, date) VALUES ('$proName','$category','$brand','$proDescription','$proPrice','$uploaded_image','$proType','$date')");

                echo "<div class='alert alert-success alert-dismissable'>
                         <a href='#' class='close' data-dismiss='alert' aria-label='close'>&times;</a>
                         <strong>Success! </strong>"; echo $proName; echo " Inserted successfully.";
                echo "</div>";
            }

        }

        /**
         * @return bool
         */
        public function allProducts()
        {
            return $this->db->select("SELECT * FROM ecom_product ORDER BY proid");
        }


        /**
         * @param $id
         * @return bool
         */
        public function getCategoryIdById($id)
        {
            return $this->db->select("SELECT * FROM ecom_category WHERE id = '$id' ");
        }


        /**
         * @param $id
         * @return bool
         */
        public function getBrandIdById($id)
        {
            return $this->db->select("SELECT * FROM ecom_brand WHERE id = '$id' ");
        }

        /**
         * @param $id
         */
        public function deleteProductById($id)
        {
            $this->db->delete("DELETE FROM ecom_product WHERE proid = '$id'");

            echo "<div class='alert alert-success alert-dismissable'>
                         <a href='#' class='close' data-dismiss='alert' aria-label='close'>&times;</a>
                         <strong>Success! </strong> Delete successfully.";
            echo "</div>";
        }


        /**
         * @param $id
         * @return bool
         */
        public function allProductById($id)
        {
            return $this->db->select("SELECT * FROM ecom_product WHERE proid = '$id'");
        }

        /**
         * @param $id
         * @param $data
         * @param $image
         */
        public function updateProductById($id, $data, $image)
        {
            $proName        = $this->fm->validation($data['product']);
            $category       = $this->fm->validation($data['category']);
            $brand          = $this->fm->validation($data['brand']);
            $proDescription = $this->fm->validation($data['prodis']);
            $proPrice       = $this->fm->validation($data['price']);
            $proType        = $this->fm->validation($data['type']);

            $proName        = mysqli_real_escape_string($this->db->link, $proName);
            $category       = mysqli_real_escape_string($this->db->link, $category);
            $brand          = mysqli_real_escape_string($this->db->link, $brand);
            $proDescription = mysqli_real_escape_string($this->db->link, $proDescription);
            $proPrice       = mysqli_real_escape_string($this->db->link, $proPrice);
            $proType        = mysqli_real_escape_string($this->db->link, $proType);


            $permited  = array('jpg', 'jpeg', 'png', 'gif');
            $file_name = $image['image']['name'];
            $file_size = $image['image']['size'];
            $file_temp = $image['image']['tmp_name'];

            $div = explode('.', $file_name);
            $file_ext = strtolower(end($div));
            $unique_image = substr(md5(time()), 0, 10).'.'.$file_ext;
            $uploaded_image = "uploads/".$unique_image;
            $date = date('y-m-d');

            if (empty($file_name) && empty($proName) && empty($category) && empty($brand) && empty($proDescription) && empty($proPrice) && empty($proType))
            {
                echo "<div class='alert alert-warning alert-dismissable'>
                          <a href='#' class='close' data-dismiss='alert' aria-label='close'>&times;</a>
                          <strong>Warning !</strong> Fields Should not be Empty.
                      </div>";
            }
            //Image
            if (!empty($file_name))
            {
                move_uploaded_file($file_temp, $uploaded_image);
                $this->db->update("UPDATE ecom_product SET image = '$uploaded_image', date = '$date' WHERE proid = '$id'");
            }

            //Product Name
            if (!empty($proName))
            {
                $this->db->update("UPDATE ecom_product SET proname = '$proName', date = '$date' WHERE proid = '$id'");
            }

            //Category
            if (!empty($category))
            {
                $this->db->update("UPDATE ecom_product SET catid = '$category', date = '$date' WHERE proid = '$id'");
            }

            //Brand
            if (!empty($brand))
            {
                $this->db->update("UPDATE ecom_product SET brandid = '$brand', date = '$date' WHERE proid = '$id'");
            }

            //Description
            if (!empty($proDescription))
            {
                $this->db->update("UPDATE ecom_product SET body = '$proDescription', date = '$date' WHERE proid = '$id'");
            }

            //Price
            if (!empty($proPrice))
            {

                $this->db->update("UPDATE ecom_product SET price = '$proPrice', date = '$date' WHERE proid = '$id'");
            }

            //Type
            if (!empty($proType))
            {
                $this->db->update("UPDATE ecom_product SET type = '$proType', date = '$date' WHERE proid = '$id'");
            }

            echo "<div class='alert alert-info alert-dismissable'>
                         <a href='#' class='close' data-dismiss='alert' aria-label='close'>&times;</a>
                         <strong>Success! </strong> Update successfully.";
            echo "</div>";
        }

        /**
         * @return bool
         */
        public function showMobileProduct()
        {
            return $this->db->select("SELECT * FROM ecom_product WHERE catid = 1 ORDER BY proid LIMIT 3");
        }

        /**
         * @return bool
         */
        public function showAudioProduct()
        {
            return $this->db->select("SELECT * FROM ecom_product WHERE catid = 2 ORDER BY proid LIMIT 3");
        }

        /**
         * @return bool
         */
        public function showLaptopProduct()
        {
            return $this->db->select("SELECT * FROM ecom_product WHERE catid = 8 ORDER BY proid LIMIT 3");
        }

        /**
         * @return bool
         */
        public function showHouseholdProduct()
        {
            return $this->db->select("SELECT * FROM ecom_product WHERE catid = 6 ORDER BY proid LIMIT 3");
        }

        /**
         * @return bool
         */
        public function showKitchenProduct()
        {
            return $this->db->select("SELECT * FROM ecom_product WHERE catid = 7 ORDER BY proid LIMIT 3");
        }

        /**
         * @param $id
         * @return bool
         */
        public function getProductById($id)
        {
            return $this->db->select("SELECT * FROM ecom_product WHERE proid = '$id'");
        }
        public function getorderById($id)
        {
            return $this->db->select("SELECT * FROM customer_order WHERE bukti by id = '$id'");
        }
        /**
         * @param $proRev
         * @return bool
         */
        public function rating($proRev)
        {
            return $this->db->select("SELECT * FROM ecom_product_review WHERE proid = '$proRev' ");
        }

        /**
         * @param $catId
         * @return bool
         */
        public function getProductByCategory($catId)
        {
            return $this->db->select("SELECT * FROM ecom_product WHERE catid = '$catId'");
        }

        /**
         * @param $customerId
         */
        function upload() {

            $namaFile = $_FILES["gambar"]["name"];
            $ukuranFile = $_FILES["gambar"]["size"];
            $error = $_FILES["gambar"]["error"];
            $tmpName = $_FILES["gambar"]["tmp_name"];
        
            // cek apakah tidak ada gambar yang diupload
            if($error === 4) {
                echo "<script>
                        alert('pilih gambar terlebih dahulu');
                    </script>";
                return false; 
            }
        
            // cek apakah yang diupload adalah gambar
             $ekstensiGambarValid = ['jpg', 'jpeg', 'png'];
             $ekstensiGambar = explode('.', $namaFile);
             $ekstensiGambar = strtolower(end($ekstensiGambar));
             if( !in_array($ekstensiGambar, $ekstensiGambarValid) ) {
                echo "<script>
                        alert('yang anda upload bukan gambar!');
                    </script>";
                return false; 
             }
        
            //  cek jika ukurannx terlalu besar
            if( $ukuranFile > 2000000 ) {
                echo "<script>
                        alert('ukuran gambar terlalu besar!');
                    </script>";
                return false; 
            }
        
            // jika lolos pengecekan, gambar siap diupload
            // generate nama gambar baru
            $namaFileBaru = uniqid();
            $namaFileBaru .= '.';
            $namaFileBaru .= $ekstensiGambar;
        
            move_uploaded_file($tmpName, 'Gambar/' . $namaFileBaru);
        
            return $namaFileBaru;
            
        }
        

        public function orderProductByCustomerId($customerId)
        {
            $sessionId = session_id();
            $cartResult = $this->db->select("SELECT * FROM ecom_cart WHERE sid = '$sessionId' ");

            if ($cartResult)
            {
                while ($getProduct = $cartResult->fetch_assoc())
                {
                    $productName = $getProduct['proname'];
                    $productId = $getProduct['proid'];
                    $productPrice = $getProduct['price'];
                    $productQuantity = $getProduct['quantity'];

                    //Inserting Product to Order Table
                    $this->db->insert("INSERT INTO ecom_customer_order(customerid, productid, price, quantity, productname, bukti VALUES ('$customerId','$productId','$productPrice','$productQuantity','$productName')");

                    echo "<script>window.location = 'success.php' </script>";
                }
            }//Main if
        }

        /**
         * Summary of allOrderProduct
         * @return bool
         */
        public function allOrderProduct()
        {
            return $this->db->select("SELECT * FROM ecom_customer_order ORDER BY id");
        }

        /**
         * @param $productId
         */
        public function shiftToPendingById($productId)
        {
            $this->db->update("UPDATE ecom_customer_order SET status = 0 WHERE id = '$productId' ");
            echo "<div class='alert alert-warning alert-dismissable'>
                         <a href='#' class='close' data-dismiss='alert' aria-label='close'>&times;</a>
                         <strong>Success! </strong> Product is added as Pending.";
            echo "</div>";
        }


        /**
         * @param $productId
         */
        public function pendingToShiftById($productId)
        {
            $this->db->update("UPDATE ecom_customer_order SET status = 1 WHERE id = '$productId' ");
            echo "<div class='alert alert-info alert-dismissable'>
                         <a href='#' class='close' data-dismiss='alert' aria-label='close'>&times;</a>
                         <strong>Success! </strong> Product is added as Shifted.";
            echo "</div>";
        }

        /**
         * @param $proName
         * @return bool
         */
        public function searchProduct($proName)
        {
            return $this->db->select("SELECT * FROM ecom_product WHERE proname='$proName'");
        }

    }//Main Class
?>