<?php  

include 'components/connect.php';

if(isset($_COOKIE['user_id'])){
   $user_id = $_COOKIE['user_id'];
}else{
   $user_id = '';
}

if(isset($_POST['send'])){

   $msg_id = create_unique_id();
   $vi = $_POST['p_name'];
   $vi = filter_var($vi, FILTER_SANITIZE_STRING);
   $name = $_POST['name'];
   $name = filter_var($name, FILTER_SANITIZE_STRING);
   $email = $_POST['email'];
   $email = filter_var($email, FILTER_SANITIZE_STRING);
   $number = $_POST['number'];
   $number = filter_var($number, FILTER_SANITIZE_STRING);
   $message = $_POST['message'];
   $message = filter_var($message, FILTER_SANITIZE_STRING);

   $verify_contact = $conn->prepare("SELECT * FROM `buyer` WHERE p_name = ? AND name = ? AND email = ? AND number = ? AND message = ?");
   $verify_contact->execute([$vi, $name, $email, $number, $message]);

   if($verify_contact->rowCount() > 0){
      $warning_msg[] = 'message sent already!';
   }else{
      $send_message = $conn->prepare("INSERT INTO `buyer`(id, p_name, name, email, number, message) VALUES(?,?,?,?,?,?)");
      $send_message->execute([$msg_id, $vi, $name, $email, $number, $message]);
      $success_msg[] = 'message send successfully!';
   }

}

?>

<!DOCTYPE html>
<html lang="en">
<head>
   <meta charset="UTF-8">
   <meta http-equiv="X-UA-Compatible" content="IE=edge">
   <meta name="viewport" content="width=device-width, initial-scale=1.0">
   <title>Buy Now</title>

   <link rel="icon" type="image/x-icon" href="images/icon-1.png">
   <!-- font awesome cdn link  -->
   <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.2.0/css/all.min.css">

   <!-- custom css file link  -->
   <link rel="stylesheet" href="css/style.css">

</head>
<body>
   
<?php include 'components/user_header.php'; ?>

<!-- contact section starts  -->

<section class="contact">

   <div class="row">
      <div class="image">
         <!-- <img src="images/contact-img.svg" alt=""> -->

         <!-- listings section starts  -->

<section class="listings">

<div class="box-container">
   <?php
      $total_images = 0;
      $select_properties = $conn->prepare("SELECT * FROM `property` ORDER BY date DESC LIMIT 6");
      $select_properties->execute();
      if($select_properties->rowCount() > 0){
         while($fetch_property = $select_properties->fetch(PDO::FETCH_ASSOC)){
            
         $select_user = $conn->prepare("SELECT * FROM `users` WHERE id = ?");
         $select_user->execute([$fetch_property['user_id']]);
         $fetch_user = $select_user->fetch(PDO::FETCH_ASSOC);

         if(!empty($fetch_property['image_02'])){
            $image_coutn_02 = 1;
         }else{
            $image_coutn_02 = 0;
         }
         if(!empty($fetch_property['image_03'])){
            $image_coutn_03 = 1;
         }else{
            $image_coutn_03 = 0;
         }
         if(!empty($fetch_property['image_04'])){
            $image_coutn_04 = 1;
         }else{
            $image_coutn_04 = 0;
         }
         if(!empty($fetch_property['image_05'])){
            $image_coutn_05 = 1;
         }else{
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
            if($select_saved->rowCount() > 0){
         ?>
         <button type="submit" name="save" class="save"><i class="fas fa-heart"></i><span>saved</span></button>
         <?php
            }else{ 
         ?>
         <button type="submit" name="save" class="save"><i class="far fa-heart"></i><span>save</span></button>
         <?php
            }
         ?>
         <div class="thumb">
            <p class="total-images"><i class="far fa-image"></i><span><?= $total_images; ?></span></p> 
            <img src="uploaded_files/<?= $fetch_property['image_01']; ?>" alt="">
         </div>
         <div class="admin">
            <h3><?= substr($fetch_user['name'], 0, 1); ?></h3>
            <div>
               <p><?= $fetch_user['name']; ?></p>
               <span><?= $fetch_property['date']; ?></span>
            </div>
         </div>
      </div>
      <div class="box">
         <div class="price"><i class="fas fa-indian-rupee-sign"></i><span><?= $fetch_property['price']; ?></span></div>
         <h3 class="name"><?= $fetch_property['property_name']; ?></h3>
         <p class="location"><i class="fas fa-map-marker-alt"></i><span><?= $fetch_property['address']; ?></span></p>
         <div class="flex">
            <p><i class="fas fa-house"></i><span><?= $fetch_property['type']; ?></span></p>
            <p><i class="fas fa-tag"></i><span><?= $fetch_property['offer']; ?></span></p>
            <p><i class="fas fa-bed"></i><span><?= $fetch_property['bhk']; ?> BHK</span></p>
            <p><i class="fas fa-trowel"></i><span><?= $fetch_property['status']; ?></span></p>
            <p><i class="fas fa-couch"></i><span><?= $fetch_property['furnished']; ?></span></p>
            <p><i class="fas fa-maximize"></i><span><?= $fetch_property['carpet']; ?>sqft</span></p>
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
   }else{
      echo '<p class="empty">no properties added yet! <a href="post_property.php" style="margin-top:1.5rem;" class="btn">add new</a></p>';
   }
   ?>
   
</div>

</section>

<!-- listings section ends -->

      </div>


      <form action="" method="post">
         <h3>Buying request</h3>
         <input type="text" name="p_name" required maxlength="50" placeholder="property name" class="box">
         <input type="text" name="name" required maxlength="50" placeholder="enter your name" class="box">
         <input type="email" name="email" required maxlength="50" placeholder="enter your email" class="box">
         <input type="number" name="number" required maxlength="10" max="9999999999" min="0" placeholder="enter your number" class="box">
         <textarea name="message" placeholder="enter your message" required maxlength="1000" cols="30" rows="10" class="box"></textarea>
         <input type="submit" value="send message" name="send" class="btn">
      </form>
   </div>

</section>

<!-- contact section ends -->


<script src="https://cdnjs.cloudflare.com/ajax/libs/sweetalert/2.1.2/sweetalert.min.js"></script>

<?php include 'components/footer.php'; ?>

<!-- custom js file link  -->
<script src="js/script.js"></script>

<?php include 'components/buyer.php'; ?>

</body>
</html>