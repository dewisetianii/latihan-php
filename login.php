<html>
    <head><title>Login Here</title></head>
</html>
<body>
    <FORM ACTION="" METHOD="POST" NAME="input">
        Email : <input type="text" name="Email"><br>
        Password : <input type="password" name="password"><br>
        <input type="submit" name="Login" value="Login">
        </FORM>
    </body>
</html>

<?php
if (isset($_POST['Login'])) {
    $Email = $_POST['Email'];
    $pass = $_POST['password'];
    if ($Email == "Dewi@gmail.com" && $pass == "123") {
    echo "<h4>Login Berhasil</h4>";
    } else {
        echo "<h4>Login Gagal</h4>";
    }
}
?>