<?php

include 'components/connect.php';

if (isset($_COOKIE['user_id'])) {
   $user_id = $_COOKIE['user_id'];
} else {
   $user_id = '';
}

?>

<!DOCTYPE html>
<html lang="en">

<head>
   <meta charset="UTF-8">
   <meta http-equiv="X-UA-Compatible" content="IE=edge">
   <meta name="viewport" content="width=device-width, initial-scale=1.0">
   <title>About Us</title>

   <link rel="icon" type="image/x-icon" href="images/icon-1.png">
   <!-- font awesome cdn link  -->
   <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.2.0/css/all.min.css">

   <!-- custom css file link  -->
   <link rel="stylesheet" href="css/style.css">

</head>

<body>

   <?php include 'components/user_header.php'; ?>

   <!-- about section starts  -->

   <section class="about">

      <div class="row">
         <div class="image">
            <img src="images/about-img.svg" alt="">
         </div>
         <div class="content">
            <h3>why choose us?</h3>
            <p>Provide Perfect Property In Perfect Bugets.</p>
            <a href="contact.php" class="inline-btn">contact us</a>
         </div>
      </div>

   </section>

   <!-- about section ends -->

   <!-- steps section starts  -->

   <section class="steps">

      <h1 class="heading">3 simple steps</h1>

      <div class="box-container">

         <div class="box">
            <img src="images/step-1.png" alt="">
            <h3>search property</h3>
            <p>Goto Home Page And Search the property.</p>
         </div>

         <div class="box">
            <img src="images/step-2.png" alt="">
            <h3>contact agents</h3>
            <p>From Email Us email are given Below.</p>
         </div>

         <div class="box">
            <img src="images/step-3.png" alt="">
            <h3>enjoy property</h3>
            <p>Gives the Feedback to Us.</p>
         </div>

      </div>

   </section>

   <!-- steps section ends -->

   <!-- review section starts  -->

   <section class="reviews">

      <h1 class="heading">client's reviews</h1>

      <div class="box-container">

         <div class="box">
            <div class="user">
               <img src="images/pady.jpeg" alt="">
               <div>
                  <h3>Pradyumna Marathe</h3>
                  <div class="stars">
                     <i class="fas fa-star"></i>
                     <i class="fas fa-star"></i>
                     <i class="fas fa-star"></i>
                     <i class="fas fa-star"></i>
                     <i class="fas fa-star-half-alt"></i>
                  </div>
               </div>
            </div>
            <p>Wow! Made buying a house such a breeze! I was new to home buying, and have heard horror stories from
               friends and family about terrible agents. (RN) was professional and personal! She never made me feel
               uncomfortable and helped me every step of the way!</p>
         </div>

         <div class="box">
            <div class="user">
               <img src="images/boka.jpeg" alt="">
               <div>
                  <h3>Jayesh Borse</h3>
                  <div class="stars">
                     <i class="fas fa-star"></i>
                     <i class="fas fa-star"></i>
                     <i class="fas fa-star"></i>
                     <i class="fas fa-star"></i>
                     <i class="fas fa-star-half-alt"></i>
                  </div>
               </div>
            </div>
            <p> (RN) explained everything in a way that was easy to understand from the making the offer, to working
               with the mortgage banker and the coop board. This made it really easy to move into (CN) in less than 3
               month.</p>
         </div>

         <div class="box">
            <div class="user">
               <img src="images/bts.jpeg" alt="">
               <div>
                  <h3>Himanshu Khairnar</h3>
                  <div class="stars">
                     <i class="fas fa-star"></i>
                     <i class="fas fa-star"></i>
                     <i class="fas fa-star"></i>
                     <i class="fas fa-star"></i>
                     <i class="fas fa-star-half-alt"></i>
                  </div>
               </div>
            </div>
            <p>The best real estate company I have ever dealt with. Very professional, experienced and helpful agents
               and brokers. Highly recommend.</p>
         </div>

         <div class="box">
            <div class="user">
               <img src="images/mayur.jpeg" alt="">
               <div>
                  <h3>Mayur Gujar</h3>
                  <div class="stars">
                     <i class="fas fa-star"></i>
                     <i class="fas fa-star"></i>
                     <i class="fas fa-star"></i>
                     <i class="fas fa-star"></i>
                     <i class="fas fa-star-half-alt"></i>
                  </div>
               </div>
            </div>
            <p>Great environment, professional and nice people, clean and beautiful office set up. They care about their
               clients and train their agents frequently so they are always updated with what’s going on in the market.
               I recommend (RN) to anyone looking to do any Real Estate transaction</p>
         </div>

         <div class="box">
            <div class="user">
               <img src="images/mukya.jpeg" alt="">
               <div>
                  <h3>Mukesh</h3>
                  <div class="stars">
                     <i class="fas fa-star"></i>
                     <i class="fas fa-star"></i>
                     <i class="fas fa-star"></i>
                     <i class="fas fa-star"></i>
                     <i class="fas fa-star-half-alt"></i>
                  </div>
               </div>
            </div>
            <p> (RN) is absolutely wonderful to work with. It’s like having a friend on the “inside” that is working for
               you. He/She really care about his/hers clients as well as the community and neighborhood he/she live in.
            </p>
         </div>

         <div class="box">
            <div class="user">
               <img src="images/nanya.jpeg" alt="">
               <div>
                  <h3>Prathmesh Mali</h3>
                  <div class="stars">
                     <i class="fas fa-star"></i>
                     <i class="fas fa-star"></i>
                     <i class="fas fa-star"></i>
                     <i class="fas fa-star"></i>
                     <i class="fas fa-star-half-alt"></i>
                  </div>
               </div>
            </div>
            <p>These guys definitely have a passion for what they do and you can tell that they love their job and the
               services they provide.</p>
         </div>

      </div>

   </section>

   <!-- review section ends -->










   <?php include 'components/footer.php'; ?>

   <!-- custom js file link  -->
   <script src="js/script.js"></script>

</body>

</html>