<?php
   
   session_start();

?>
<html>
   
   <head>
      <title>Welcome </title>
   </head>
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.4/jquery.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
   <body>
      <style>
        
         .center {
           margin: 200px 350px 200px 350px;
           text-align:center;
           width: 40%;
           border: 8px solid #66D3E5;
           padding: 50px;
          }
         p.thick{
           font-weight: bold;
         }

       </style>
         
         <div class="center">
              <p class="thick">Welcome to our page</p>
         
         <a href="login.php" class="btn btn-info btn-lg">
             <span class="glyphicon glyphicon-log-out"></span> Log out
        </a>
         </div>       

   </body>
   
</html>

