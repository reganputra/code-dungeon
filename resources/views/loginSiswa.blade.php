<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Balsamiq+Sans&family=Inter:wght@100..900&display=swap"
        rel="stylesheet">

    <title>Login</title>
    <link rel="stylesheet" href="css/style.css">
    <link rel="stylesheet" href="css/loginSiswa.css">
</head>

<body>
    <a href="/" id="pindah">BACK</a>
    <div id="main">
        <img src="img/logo.png" alt="">
        <div id="form">
            <form action="/homeSiswa" method="get">
                <p id="judul">LOGIN MAHASISWWA</p>
                <input type="text" id="npm" name="npm" id="" placeholder="NPM">
                <input type="password" id="pass" name="pass" id="" placeholder="Password">
                <input type="submit" value="LOGIN" id="tombolLogin">
            </form>
        </div>
        <div id="stdltr">
            <button id="std">Student</button>
            <a href="/loginDosen"><button id="ltr"> Lecturer</button></a>
        </div>
    </div>
</body>

</html>
