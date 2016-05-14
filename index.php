<!DOCTYPE html>
<html>
    <head>
        <meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
        <title></title>
    </head>
    <body><form action="index.php">
       <table border="2" align="center">
       
        <tr style="background-color: red" align="center">
            <th>
            Registation Details
            </th>
        </tr>
        <table border="2" align="center">
        <tr style="background-color: red">
            <td>
            Username:
            </td><td>
        <input type="text" name="uname" value="" /><br></td></tr>
        <tr style="background-color: red">
        
                        <td> Password:
            
                 </td><td>   <input type="password" name="psw" value="" /><br></td></tr>
            <tr style="background-color: red">
        
            <td>
            Amount:
          
                 </td><td>       <input type="text" name="amt" value="" /><br></td></tr>
           <td> <input type="submit" value="Acc Open" name="act" />
            </td><td><input type="button" value="Login" name="login" ONCLICK="window.location.href='login.php'"/>
        </td> </form>
        <?php
        if(isset($_GET['act']))
        {
                  mysql_connect("localhost","root","");
        mysql_select_db("bank");
        if(isset($_GET['act']))
        {
                $Name=$_GET['uname'];
		$Password=$_GET['psw'];
                $Amt=$_GET['amt'];
	 mysql_query("INSERT INTO `user`(`username`, `password`,intbalans) VALUES('$Name','$Password','$Amt')");
         header("location:Login.php");
         
        }
        }
        // put your code here
        ?>
    </body>
</html>
