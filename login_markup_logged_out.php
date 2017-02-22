<!DOCTYPE HTML PUBLIC "-//W3C//DTD HTML 4.01 Transitional//EN">
<html>
    <head>
    <meta charset="utf-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">

         <link href="css/Master.css" rel="stylesheet" type="text/css" />

         <link href="css/Menu.css" rel="stylesheet" type="text/css" />   

   <!-- Add jQuery library -->

<script type="text/javascript" src="http://code.jquery.com/jquery-latest.min.js"></script>
<!-- Add fancyBox -->

<link rel="stylesheet" href="js/fancybox/source/jquery.fancybox.css?v=2.1.5" type="text/css" media="screen" />
<script type="text/javascript" src="js/fancybox/source/jquery.fancybox.pack.js?v=2.1.5"></script>
<script type="text/javascript" src="js/fancybox/source/helpers/jquery.fancybox-media.js?v=1.0.6"></script>

<link rel="stylesheet" href="js/fancybox/source/helpers/jquery.fancybox-thumbs.css?v=1.0.7" type="text/css" media="screen" />
<script type="text/javascript" src="js/fancybox/source/helpers/jquery.fancybox-thumbs.js?v=1.0.7"></script>
<script type="text/javascript">

      $(document).ready(function() {

        $("a.fancybox").fancybox();

     });

  $(document).ready(function(){

    $('a[rel="gallery"]').fancybox();

  });
</script>

 <title>Logged Out</title>

    <body>
         <div class="Container">
           <?php 
	require_once('Header.php');?>

        <div class="Menu">

       <div id="Menu">
             <nav>
                <ul class="cssmenu">
                    <li><a href="registration.php">Register</a></li>  
                    <li><a href="login.php">Login</a></li>  
                </ul>
             </nav>
          </div>
    </div> 
        <div class="LeftBody">
           <div class="fancybox img">
        
 <a class="fancybox img" rel="group" title="'Burnout'" href="img/ausgebrannt_gross.jpg"><img src="img/ausgebrannt_klein.jpg" border"1" alt=""/> </a> 

 
</div>
        </div>

         <div class="RightBody">

        <!-- Ziel = Quelle = Ziel -->

        <form action="" method="post" >

            <div class="FormElement"> 

            <input type="text" required class="TField" name="username" placeholder="Username"/>

            </div>

            <div class="FormElement">

            <input type="password" required class="TField" name="password" placeholder="Password"/>

            </div>

            <div class="FormElement">

            <input type="submit" name="submit" class="button" value="Login" />

            </div>

        </form>

         <?php if(isset($error_msg) && !empty($error_msg)) : ?>

         <div class="Messages"><?php echo $error_msg; ?></div>

        <?php endif; ?>

        <?php if(isset($success_msg) && !empty($success_msg)) : ?>
      
        <div class="Messages"><?php echo $success_msg; ?> </div>

        <?php endif; ?> 

        </div>

</div>
             <div class="Footer"> <p>&copy;Alien | <a href="login.php" target="_self" >Admin</a></p></div>
    </body>

</html>