<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Delivery Records</title>

   

<meta charset="UTF-8">
      <meta name="viewport" content="width=device-width, initial-scale=1">
      <title>HUNGRY HUB</title>
      <link rel="stylesheet" type="text/css" href="assets/css/bootstrap.min.css" media="all" />
      <link rel="stylesheet" type="text/css" href="assets/css/font-awesome.min.css" media="all" />
      <link rel="stylesheet" type="text/css" href="assets/css/animate.min.css" media="all" />
      <link rel="stylesheet" type="text/css" href="assets/css/font-pizzaro.css" media="all" />
      <link rel="stylesheet" type="text/css" href="assets/css/style.css" media="all" />
      <link rel="stylesheet" type="text/css" href="assets/css/colors/red.css" media="all" />
      <link rel="stylesheet" type="text/css" href="assets/css/jquery.mCustomScrollbar.min.css" media="all" />      
      <link href="https://fonts.googleapis.com/css?family=Open+Sans:300,400,600,700,800%7CYanone+Kaffeesatz:200,300,400,700" rel="stylesheet">
      <link rel="shortcut icon" href="assets/imfnames/fav-icon.png">
    
</head>
<body>
<div id="content" class="site-content" tabindex="-1" >
            <div class="col-full">
               <div class="pizzaro-breadcrumb">
                  <!-- <nav class="woocommerce-breadcrumb" ><a href="index.html">Home</a><span class="delimiter"><i class="po po-arrow-right-slider"></i></span>My Account</nav> -->
               </div>
               <!-- .woocommerce-breadcrumb -->
               <div id="primary" class="content-area">
                  <main id="main" class="site-main" >
                     <div id="post-10" class="post-10 pfname type-pfname status-publish hentry">
                        <div class="entry-content">
                           <div class="woocommerce">
                              <div class="customer-login-form">
                                 <!-- <span class="or-text">or</span> -->
                                 <div class="u-columns col2-set" id="customer_login">
                                    <div class="u-column1 col-1">
                                       <h2>Add Delivery Records</h2>

                                       <form action="insert.php" method="POST">
                                       <form  class="login">




                                       <p class="before-login-text">Enter Delivery Records</p>
                                          <p class="woocommerce-FormRow woocommerce-FormRow--wide form-row form-row-wide">
                                          <label for="rnic">Rider <span class="required">*</span></label>
                                        <input type="text" class="woocommerce-Input woocommerce-Input--text input-text" id="rider" name="rider" value="">

                                        
                                          </p>
                                          
                                         <p class="woocommerce-FormRow woocommerce-FormRow--wide form-row form-row-wide">
                                         <label for="fname">Bike Number<span class="required">*</span></label>
                                        <input type="text" class="woocommerce-Input woocommerce-Input--text input-text" id="mbn" name="mbn" value="">

                                        
                                         </p>
                                         <p class="woocommerce-FormRow woocommerce-FormRow--wide form-row form-row-wide">

                                         <label for="addr">Location<span class="required">*</span></label>
                                        <input type="text" class="woocommerce-Input woocommerce-Input--text input-text" id="loc" name="loc" value="">

                                         </p>

                                         <p class="woocommerce-FormRow woocommerce-FormRow--wide form-row form-row-wide">

                                         <label for="addr">Email<span class="required">*</span></label>
                                        <input type="text" class="woocommerce-Input woocommerce-Input--text input-text" id="email" name="email" value="">

                                         </p>

                                         <p class="woocommerce-FormRow woocommerce-FormRow--wide form-row form-row-wide">

                                         <label for="addr">Delivery Items<span class="required">*</span></label>
                                        <input type="text" class="woocommerce-Input woocommerce-Input--text input-text" id="item" name="item" value="">

                                         </p>
                                        
                                          
                                        <input type="reset" value="Clear">
                                        <input type="submit" value="Add New Rider">
  
  </form>
                                    </div>
                                    <hr>
                                    </div>
                                 </div>
                              </div>
                              <!-- /.customer-login-form -->
                           </div>
                        </div>
                        <!-- .entry-content -->
                     </div>
                     <!-- #post-## -->
                  </main>
                  <!-- #main -->
               </div>
               <!-- #primary -->
            </div>
            <!-- .col-full -->
         </div>
<!--    
    <a href="">
        <button type="button">Reset</button>
    </a>
    <a href="viewEmployee.php">
    <button type="button">Add New Employee</button>
    </a> -->
    


</body>
</html>