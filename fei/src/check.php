<?php  
require_once("ms_login.php");  
 
$name=$_POST['name'];  
$password=$_POST['password'];  
if($name == "")  
{  
  
    echo "����д�û���<br>";  
     echo"<script type='text/javascript'>alert('����д�û���');location='login.php';  
            </script>";  
      
      
       
  
}  
elseif($password == "")  
{  
  
     //echo "����д����<br><a href='login.php'>����</a>";  
    echo"<script type='text/javascript'>alert('����д����');location='login.php';</script>";  
      
}  
else  
{   
    $colum=collect_data($name);  
     if(($colum['name'] == $name) && ($colum['password'] == $password))  
  
        {  
  
         //echo "��֤�ɹ���<br>";  
            echo"<script type='text/javascript'>alert('��½�ɹ�');location='huanying.html';</script>";  
  
         }  
           
     else  
  
         //echo "�������<br>";  
        echo"<script type='text/javascript'>alert('�������');location='login.php';</script>";  
  
     //echo "<a href='login.php'>����</a>";  
  
}  
?> 