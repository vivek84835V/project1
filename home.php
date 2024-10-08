<?php

include 'components/connect.php';

if (isset($_COOKIE['user_id'])) {
   $user_id = $_COOKIE['user_id'];
} else {
   $user_id = '';
}

include 'components/save_send.php';

?>

<!DOCTYPE html>
<html lang="en">

<head>
   <meta charset="UTF-8">
   <meta http-equiv="X-UA-Compatible" content="IE=edge">
   <meta name="viewport" content="width=device-width, initial-scale=1.0">
   <title>Home</title>

   <link rel="icon" type="image/x-icon" href="images/icon-1.png">
   <!-- font awesome cdn link  -->
   <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.2.0/css/all.min.css">

   <!-- custom css file link  -->
   <link rel="stylesheet" href="css/style.css">

   <!-- <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous"> -->

</head>

<body>

   <?php include 'components/user_header.php'; ?>


   <!-- home section starts  -->

   <div class="home">

      <section class="center">

         <form action="search.php" method="post">
            <h3>find your perfect home</h3>
            <div class="box">
               <p>enter location <span>*</span></p>
               <input type="text" name="h_location" required maxlength="100" placeholder="enter city name"
                  class="input">
            </div>
            <div class="flex">
               <div class="box">
                  <p>property type <span>*</span></p>
                  <select name="h_type" class="input" required>
                     <option value="flat">flat</option>
                     <option value="house">house</option>
                     <option value="shop">shop</option>
                  </select>
               </div>
               <div class="box">
                  <p>offer type <span>*</span></p>
                  <select name="h_offer" class="input" required>
                     <option value="sale">sale</option>
                     <option value="resale">resale</option>
                     <option value="rent">rent</option>
                  </select>
               </div>
               <div class="box">
                  <p>maximum budget <span>*</span></p>
                  <select name="h_min" class="input" required>
                     <option value="5000">5k</option>
                     <option value="10000">10k</option>
                     <option value="15000">15k</option>
                     <option value="20000">20k</option>
                     <option value="30000">30k</option>
                     <option value="40000">40k</option>
                     <option value="40000">40k</option>
                     <option value="50000">50k</option>
                     <option value="100000">1 lac</option>
                     <option value="500000">5 lac</option>
                     <option value="1000000">10 lac</option>
                     <option value="2000000">20 lac</option>
                     <option value="3000000">30 lac</option>
                     <option value="4000000">40 lac</option>
                     <option value="4000000">40 lac</option>
                     <option value="5000000">50 lac</option>
                     <option value="6000000">60 lac</option>
                     <option value="7000000">70 lac</option>
                     <option value="8000000">80 lac</option>
                     <option value="9000000">90 lac</option>
                     <option value="10000000">1 Cr</option>
                     <option value="20000000">2 Cr</option>
                     <option value="30000000">3 Cr</option>
                     <option value="40000000">4 Cr</option>
                     <option value="50000000">5 Cr</option>
                     <option value="60000000">6 Cr</option>
                     <option value="70000000">7 Cr</option>
                     <option value="80000000">8 Cr</option>
                     <option value="90000000">9 Cr</option>
                     <option value="100000000">10 Cr</option>
                     <option value="150000000">15 Cr</option>
                     <option value="200000000">20 Cr</option>
                  </select>
               </div>
               <div class="box">
                  <p>maximum budget <span>*</span></p>
                  <select name="h_max" class="input" required>
                     <option value="5000">5k</option>
                     <option value="10000">10k</option>
                     <option value="15000">15k</option>
                     <option value="20000">20k</option>
                     <option value="30000">30k</option>
                     <option value="40000">40k</option>
                     <option value="40000">40k</option>
                     <option value="50000">50k</option>
                     <option value="100000">1 lac</option>
                     <option value="500000">5 lac</option>
                     <option value="1000000">10 lac</option>
                     <option value="2000000">20 lac</option>
                     <option value="3000000">30 lac</option>
                     <option value="4000000">40 lac</option>
                     <option value="4000000">40 lac</option>
                     <option value="5000000">50 lac</option>
                     <option value="6000000">60 lac</option>
                     <option value="7000000">70 lac</option>
                     <option value="8000000">80 lac</option>
                     <option value="9000000">90 lac</option>
                     <option value="10000000">1 Cr</option>
                     <option value="20000000">2 Cr</option>
                     <option value="30000000">3 Cr</option>
                     <option value="40000000">4 Cr</option>
                     <option value="50000000">5 Cr</option>
                     <option value="60000000">6 Cr</option>
                     <option value="70000000">7 Cr</option>
                     <option value="80000000">8 Cr</option>
                     <option value="90000000">9 Cr</option>
                     <option value="100000000">10 Cr</option>
                     <option value="150000000">15 Cr</option>
                     <option value="200000000">20 Cr</option>
                  </select>
               </div>
            </div>
            <input type="submit" value="search property" name="h_search" class="btn">
         </form>

      </section>

   </div>

   <!-- home section ends -->

   <!-- services section starts  -->

   <section class="services">

      <h1 class="heading">our services</h1>

      <div class="box-container">

         <div class="box">
            <img src="images/icon-1.png" alt="">
            <h3>buy house</h3>
            <p>1]Down payment<br>
               2]A lender<br>
               3]Credit scores<br>
               4]Debt-to-income ratio<br>
               5]Closing costs<br>
               6]Documentation.</p>
         </div>

         <div class="box">
            <img src="images/icon-2.png" alt="">
            <h3>rent house</h3>
            <p>When you’re ready to rent a house, whether you’re renting from a large management company or a small-time
               landlord, you’ll probably be asked to fill out a rental application. .</p>
         </div>

         <div class="box">
            <img src="images/icon-3.png" alt="">
            <h3>sell house</h3>
            <p>1]Letter of allotment<br>2]Sale deed<br>3]Sanctioned plan<br>4]Society documents<br>5]Encumbrance certificate<br>6]Sale agreement</p>
         </div>

         <div class="box">
            <img src="images/icon-4.png" alt="">
            <h3>flats and buildings</h3>
            <p>We offer the best flats in best building in bugets.</p>
         </div>

         <div class="box">
            <img src="images/icon-5.png" alt="">
            <h3>shops and malls</h3>
            <p>We provide the flats or house near the market area.</p>
         </div>

         <div class="box">
            <img src="images/icon-6.png" alt="">
            <h3>24/7 service</h3>
            <p>24/7 Service available on our website.</p>
         </div>

      </div>

   </section>

   <!-- services section ends -->

   <!-- listings section starts  -->

   <section class="listings">

      <h1 class="heading">latest listings</h1>

      <div class="box-container">
         <?php
         $total_images = 0;
         $select_properties = $conn->prepare("SELECT * FROM `property` ORDER BY date DESC LIMIT 6");
         $select_properties->execute();
         if ($select_properties->rowCount() > 0) {
            while ($fetch_property = $select_properties->fetch(PDO::FETCH_ASSOC)) {

               $select_user = $conn->prepare("SELECT * FROM `users` WHERE id = ?");
               $select_user->execute([$fetch_property['user_id']]);
               $fetch_user = $select_user->fetch(PDO::FETCH_ASSOC);

               if (!empty($fetch_property['image_02'])) {
                  $image_coutn_02 = 1;
               } else {
                  $image_coutn_02 = 0;
               }
               if (!empty($fetch_property['image_03'])) {
                  $image_coutn_03 = 1;
               } else {
                  $image_coutn_03 = 0;
               }
               if (!empty($fetch_property['image_04'])) {
                  $image_coutn_04 = 1;
               } else {
                  $image_coutn_04 = 0;
               }
               if (!empty($fetch_property['image_05'])) {
                  $image_coutn_05 = 1;
               } else {
                  $image_coutn_05 = 0;
               }

               $total_images = (1 + $image_coutn_02 + $image_coutn_03 + $image_coutn_04 + $image_coutn_05);

               $select_saved = $conn->prepare("SELECT * FROM `saved` WHERE property_id = ? and user_id = ?");
               $select_saved->execute([$fetch_property['id'], $user_id]);

               ?>
               <form action="" method="POST">
                  <div class="box">
                     <input type="hidden" name="property_id" value="<?= $fetch_property['id']; ?>">
                     <?php
                     if ($select_saved->rowCount() > 0) {
                        ?>
                        <button type="submit" name="save" class="save"><i class="fas fa-heart"></i><span>saved</span></button>
                        <?php
                     } else {
                        ?>
                        <button type="submit" name="save" class="save"><i class="far fa-heart"></i><span>save</span></button>
                        <?php
                     }
                     ?>
                     <div class="thumb">
                        <p class="total-images"><i class="far fa-image"></i><span>
                              <?= $total_images; ?>
                           </span></p>
                        <img src="uploaded_files/<?= $fetch_property['image_01']; ?>" alt="">
                     </div>
                     <div class="admin">
                        <h3>
                           <?= substr($fetch_user['name'], 0, 1); ?>
                        </h3>
                        <div>
                           <p>
                              <?= $fetch_user['name']; ?>
                           </p>
                           <span>
                              <?= $fetch_property['date']; ?>
                           </span>
                        </div>
                     </div>
                  </div>
                  <div class="box">
                     <div class="price"><i class="fas fa-indian-rupee-sign"></i><span>
                           <?= $fetch_property['price']; ?>
                        </span></div>
                     <h3 class="name">
                        <?= $fetch_property['property_name']; ?>
                     </h3>
                     <p class="location"><i class="fas fa-map-marker-alt"></i><span>
                           <?= $fetch_property['address']; ?>
                        </span></p>
                     <div class="flex">
                        <p><i class="fas fa-house"></i><span>
                              <?= $fetch_property['type']; ?>
                           </span></p>
                        <p><i class="fas fa-tag"></i><span>
                              <?= $fetch_property['offer']; ?>
                           </span></p>
                        <p><i class="fas fa-bed"></i><span>
                              <?= $fetch_property['bhk']; ?> BHK
                           </span></p>
                        <p><i class="fas fa-trowel"></i><span>
                              <?= $fetch_property['status']; ?>
                           </span></p>
                        <p><i class="fas fa-couch"></i><span>
                              <?= $fetch_property['furnished']; ?>
                           </span></p>
                        <p><i class="fas fa-maximize"></i><span>
                              <?= $fetch_property['carpet']; ?>sqft
                           </span></p>
                     </div>
                     <div class="flex-btn">
                        <a href="view_property.php?get_id=<?= $fetch_property['id']; ?>" class="btn">view property</a>
                        <input type="submit" value="Add Queries Here" name="send" class="btn">
                        <a href="buyer.php" class="btn">Buy Request</a>
                     </div>
                  </div>
               </form>
               <?php
            }
         } else {
            echo '<p class="empty">no properties added yet! <a href="post_property.php" style="margin-top:1.5rem;" class="btn">add new</a></p>';
         }
         ?>

      </div>

      <div style="margin-top: 2rem; text-align:center;">
         <a href="listings.php" class="inline-btn">view all</a>
      </div>

   </section>

   <!-- listings section ends -->








   <script src="https://cdnjs.cloudflare.com/ajax/libs/sweetalert/2.1.2/sweetalert.min.js"></script>

   <?php include 'components/footer.php'; ?>

   <!-- custom js file link  -->
   <script src="js/script.js"></script>

   <?php include 'components/message.php'; ?>

   <script>

      let range = document.querySelector("#range");
      range.oninput = () => {
         document.querySelector('#output').innerHTML = range.value;
      }

   </script>

   <!-- <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js" integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin="anonymous"></script>
<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js" integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous"></script> -->
</body>

</html>