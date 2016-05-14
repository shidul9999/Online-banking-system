<!--
To change this template, choose Tools | Templates
and open the template in the editor.
-->
<!DOCTYPE html>
<html>
    <head>
        <meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
        <title></title>
    </head>
    <form action="withdraw.php">
      Enter You Want to Withdraw Amount :  <input type="text" name="text2" value="" /><br>
      
      <input type="submit" value="Submit" name="wtd" /><br>
        <input type="button" value="Back TO Home Page" name="home"ONCLICK="window.location.href='home.php' ""/>
        
    </form>
    <body>
        <?php
        session_start();
		Echo 'Your Balance :',$_SESSION['user'];
              
           $user=$_SESSION['login'];
            $pass=$_SESSION['login1'];
         
            mysql_connect("localhost","root","");
            mysql_select_db("bank");
            
            if(isset($_GET['wtd']))
        {
            $withdraamt=($_SESSION['user']-$_GET['text2']);
            if($withdraamt>=0)
            {
                 $realwithdraamt=mysql_query("UPDATE user
SET amt='$withdraamt'
WHERE username='$user' and password='$pass';");
           
            echo '<br> Now Your Real Balance is :','<b>',$withdraamt,'</b>';
          $_SESSION['user']= $withdraamt;
            }
            else
            {
                echo '<br>Not have Amount Balance';
                
                echo '<br>Please Enter ';
            }
            
            }
        // put your code here
        ?>
    </body>
</html>
