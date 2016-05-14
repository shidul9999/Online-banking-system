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
    <body>
        <form action="Deposit.php">
          Enter Amount You Want To Deposit:  <input type="text" name="text1" value="" />
          <br><input type="submit" value="Sumbit" name="dps" /><br>
          <input type="button" value="Back To Home Page" name="home"ONCLICK="window.location.href='home.php' ""/>
        <input type="BUTTON" value="WithDraw" name="wd">
            <input type="button" value="Log-Out" name="home"ONCLICK="window.location.href='index.php' ""/>
                </form>
        <?php
        session_start();
		Echo 'Your Balance :',$_SESSION['user'];
              //echo '<br>',$_SESSION['user1'];
            //$user=$_SESSION['login'];
            //$pass=$_SESSION['login1'];
         $id=$_SESSION['user1'];
            mysql_connect("localhost","root","");
            mysql_select_db("bank");
            
            if(isset($_GET['dps']))
        {
            $depositamt=($_SESSION['user']+$_GET['text1']);
            //$realDepositamt=mysql_query("UPDATE user
//SET amt='$depositamt'
//WHERE id='$id'");
            
            $_SESSION['user']=$depositamt;
            $enamt=$_GET['text1'];
            echo $enamt;
            echo $id;
            $d='deposit';
            mysql_query("INSERT INTO `totaltra`(`id`, `tratype`, `amt`) VALUES ('$id','$d','$enamt')");
            //$intbl=  mysql_query("SELECT intbalans FROM `user` WHERE username='$user' and password='$pass'");
           // echo $intbl;
            echo '<br>Now Your Real Balance is:','<b>',$depositamt,'</b>';
            
            }
            if(isset($_GET['wd']))
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
        ?>
    </body>
    </html>