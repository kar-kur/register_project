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

 <title>Admin Logged In</title>

    <body>
  
        <div class="Container">

             <?php 

	require_once('Header.php');?>

        <div class="Menu">

       <div id="Menu">

             <nav>

                <ul class="cssmenu">

                    <li><a href="login.php">Login</a></li>  

                    <li><a href="logout_logic.php">Logout</a></li>

                    <li><a href="http://phpmyadmin.hektate.bplaced.net/index.php?token=6e893829e33b550a424661544f3bb55e#PMAURL-0:index.php?db=&table=&server=1&target=&token=6e893829e33b550a424661544f3bb55e/">Database</a></li>

                </ul>

             </nav>

          </div>

    </div>  

    <div class="LeftBody">

               <div class="fancybox img">

   <a class="fancybox img" rel="group" title="Summer evening in Forest" href="img/trees_gross.jpg"><img src="img/trees_klein.jpg" border"1" alt=""/> </a> 

        </div> 

        </div> 

          <div class="RightBody">

               <div class="Welcome"> 

         <div class="h1">  Welcome Admin<b><?php echo htmlspecialchars($_SESSION['username']); ?></b>, you are logged in! 

  </div>  

</div>         

   <div class="WelcomeButton">

       <form action="" method="post">

            <input type="submit" class="button" name="logout" value="Good Bye" echo "You have successfully logged out"/>

  </div>

</form>
 
            </div> 

        </div>

 <div class="Footer"><p>&copy;Alien | <a href="logout_logic.php" target="_self">Admin</a></p></div>

    </body>

</html>

