<?php  
require_once 'oracle_con.php';  
$name=$_POST['name'];  
$password=$_POST['password'];  
$pwd_again=$_POST['pwd_again'];  
if($name==""|| $password=="")  
{  
    echo"�û����������벻��Ϊ��";  
}  
else   
{  
    if($password!=$pwd_again)  
    {  
        echo"������������벻һ��,���������룡";  
        echo"<a href='reg.php'>��������</a>";  
          
    }  
    else  
    {  
        $sql="insert into test.user_db values('$name','$password')";  
        $abc=mysql_query($sql);  
        if(!$abc)  
        {  
            echo"ע�᲻�ɹ���";  
            echo"<a href='reg.php'>����</a>";  
        }  
        else   
        {  
            echo"ע��ɹ�!";  
             echo"<a href='login.php'>���ص�¼</a>";
        }  
    }  
}  
?> 