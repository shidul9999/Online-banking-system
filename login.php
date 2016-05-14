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
        <form action="login.php">
        
        <table border="2" align="center">
       
        <tr style="background-color: red" align="center">
            <th>
            Login Details
            </th>
        </tr>
        
        <table border="2" align="center">
       
       
            <tr style="background-color: pink" align="center"><td> Username:</td><td><input type="text" name="uname" value="" /><br>
           <tr style="background-color: pink" align="center">
                <td> Password:</td><td><input type="password" name="psw" value="" /><br>
           </tr>
               <td>
           <input type="submit" value="Login" name="lgn" />
           </td>
          
           
       </form>
        <?php
        session_start();
        if(isset($_GET['lgn']))
        {
            if((isset($_GET['uname']))=='' && (isset ($_GET['psw']))=='')
                         {
                         echo '<br>Plz Enter Value  <br> ';  
                        } 
      else if($_GET['uname']=='' && $_GET['psw']=='')
                     {
                         echo '<br><td>Plz Enter Value 1  <br> ';  
                         }
                        else if($_GET['uname'] && $_GET['psw']=='')
                     {
                         echo '<br><td>Plz Enter Value 2  <br> ';  
                         }
                         else

            {
            mysql_connect("localhost","root","");
            mysql_select_db("bank");
	
            $user=$_GET['uname'];
            $pass=$_GET['psw'];
            $_SESSION['login']=$user;
            $_SESSION['login1']=$pass;
            
	
            $Login=mysql_query("SELECT * FROM `user` WHERE username='$user' and password='$pass'");
            $count1=mysql_num_rows($Login);
            $Amt1=mysql_query("SELECT intbalans,id FROM user where username='$user' and password='$pass'");
           while($row=  mysql_fetch_array($Amt1))
           {
               echo 'Your Balance : ';
          echo $row['intbalans'];
          
          echo '<br>',$row['id'];
         $_SESSION['user']=$row['intbalans'];
         $_SESSION['user1']=$row['id'];
        //$_SESSION['intamt']=$_SESSION['user'];
           $_SESSION['intamt']=$row['intbalans'];
        
           }      
 
            if($count1>0)
	{
		
		// $_SESSION['user']=$Amt1;
                header('location:home.php');
                
               
        }
 else   
     {
    echo "<td>login Faild" ;
     }
        
        }
        }
        // put your code here
        ?>
        
    </body>
</html>
