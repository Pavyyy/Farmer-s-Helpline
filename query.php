  

<html>
<head></head>
<body style="background-color:rgb(200,225,100);"> 
<?php 
$con = mysqli_connect("localhost","root","");                                                            
if(!$con)
{
	echo mysqli_error($con);
}
$db= mysqli_select_db($con,"mydb");
if($db)
{
	echo mysqli_error($con);
}
if(isset($_POST['query']) && isset($_POST['tex']))
{                                                                                                                                        
$val=$_POST['query'];
$vals=$val;   
$comment = $_POST['tex'];  
$query= "SELECT *FROM bank where scheme='$vals'";          

$result=mysqli_query($con,$query);
while($row=mysqli_fetch_row($result))                  
{ 
  echo "BANK NAME:  ";
  echo $row[0];
  echo "\n<br><br>";
  echo " SCHEME NAME:  ";
  echo $row[2];
  echo "\n<br><br>";
  echo "ELIGIBLITY:  ";
  echo $row[3];
  echo "\n<br><br>";
  echo "RATE OF INTEREST:  ";
  echo $row[4];
  echo "\n<br><br>";
  echo " CONTACT NO:  ";
  echo $row[5];
  echo "\n<br><br><br><br>";  
}
}   
?>  
</body>
</html>