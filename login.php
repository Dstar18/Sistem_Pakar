<html>
    <head>
        <title>Login Dosen</title>
        <link rel="stylesheet" href="stylein.css" type="text/css">
    </head>
<body>
    <h2>LOGIN DOSEN</h2>
    <form action="dosen/authDosen.php" method="POST">
        <div class="imgcontainer">
            <img src="avatar.png" alt="Avatar" class="avatar">
        </div>
        <div class="container">
            <label><b>Username</b></label>
                <input type="text" placeholder="Enter Username" name="username" required>
            <label><b>Password</b></label>
                <input type="password" placeholder="Enter Password" name="password" required>
            <button type="submit" name="login">Masuk</button>
        </div>
        <div class="container" style="background-color:#f1f1f1">
            <a href="index.php" class="cancelbtn">Kembali</a>
        </div>
    </form>
    
</body>
