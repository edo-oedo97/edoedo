<html>
<head>
    <title>Add Users</title>
</head>

<body>
    <a href="index.php">kembali</a>
    <br/><br/>

    <form action="add.php" method="post" name="form1">
        <table width="25%" border="0">
            <tr> 
                <td>Nama</td>
                <td><input type="text" name="nama"></td>
            </tr>
            <tr> 
                <td>Username</td>
                <td><input type="text" name="username"></td>
            </tr>
            <tr> 
                <td>Password</td>
                <td><input type="text" name="pass"></td>
            </tr>
            <tr> 
                <td>Email</td>
                <td><input type="text" name="email"></td>
            </tr>
            <tr> 
                <td></td>
                <td><input type="submit" name="Submit" value="Tambah"></td>
            </tr>
        </table>
    </form>

    <?php

    // Check If form submitted, insert form data into users table.
    if(isset($_POST['Submit'])) {
        $nama = $_POST['nama'];
        $username = $_POST['username'];
        $pass = $_POST['pass'];
        $email = $_POST['email'];

        // include database connection file
        include_once("config.php");

        // Insert user data into table
        $result = mysqli_query($mysqli, "INSERT INTO crud(nama,username,pass,email) VALUES('$nama','$username','$pass',$email)");

        // Show message when user added
        echo "User berhasil di tambahkan. <a href='index.php'>lihat user</a>";
    }
    ?>
</body>
</html> 