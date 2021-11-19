<?php  
	header("Content-Type: text/html;charset=utf-8");
	
    if(isset($_POST["submit"]) && $_POST["submit"] == "登陆"){
        $usr = $_POST["username"];
        $pwd = $_POST["password"];
        if($usr == "" || $pwd == ""){
            echo "<script>alert('请输入用户名或密码！'); history.go(-1);</script>";
        }else{
            mysql_connect("localhost","root","root");
            mysql_select_db("zkpy");
            $sql = "select username,password from admin where username = '$_POST[username]' and password = '$_POST[password]'";
            $result = mysql_query($sql);
            $num = mysql_num_rows($result);
            if($num){
                $row = mysql_fetch_array($result);
                echo "flag{wannengpwd}";
            }else{
                echo "<script>alert('用户名或密码不正确！');history.go(-1);</script>";
            }
        }
    }else {
        echo "<script>alert('提交未成功！'); history.go(-1);</script>";
    }

?>
