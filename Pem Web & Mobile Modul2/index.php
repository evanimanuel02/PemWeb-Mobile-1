
<?php 
    if ($_SERVER["REQUEST_METHOD"] == "POST"){
        $username = $_REQUEST["username"];
        $password = $_REQUEST["password"];
        $user = strlen($username);
        $pass = strlen($password);
        $x = false;

        if($user>7){
            echo "username lebih dari 7<br>";
            $x = true;
        }
        if (!preg_match("/[A-Z]/", $password) ) {
            echo "Password wajib menggunakan kapital<br>\n";
            $x = true;
        }
        if (!preg_match("/[a-z]/", $password)) {
            echo "password wajib huruf kecil<br>\n";
            $x = true;
        }

        if (!preg_match("/[^a-zA-Z\d]/", $password)) {
            echo "password wajib menggunakan special character<br>\n";
            $x = true;
        }

        if (!preg_match("/[0-9]/", $password)) {
            echo "password wajib menggunakan digit<br>\n";
            $x = true;
        }
        if($pass<10){
            echo "password tidak diperbolehkan kurang dari 10<br>\n";
            $x = true;
        }
        if( $x == false ){
            echo "Login Sukses";
        }
    }

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
<form action="" method="post" name="Login_Form">
    <table border="0" align="center">
        <tr>
        <td colspan="2" align="center"></td>
        </tr>
        <tr>
        <td colspan="2" align="left"><h3>Login</h3></td>
        </tr>
        <tr>
        <td align="right">Username : </td>
        <td><input name="username" type="text" placeholder="Username"></td>
        </tr>
        <tr>
        <td align="right">Password : </td>
        <td><input name="password" type="text" placeholder="Password" ></td>
        </tr>
        <tr>
        <td> </td>
        <td><input name="Submit" type="submit" value="Login"></td>
        </tr>
    </table>
    </form>
</body>
</html>