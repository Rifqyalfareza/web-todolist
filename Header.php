<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="Header.css">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-KK94CHFLLe+nY2dmCWGMq91rCGa5gtU4mk92HdvYe+M/SXH301p5ILy+dN9+nJOZ" crossorigin="anonymous">
</head>
<body>
    <nav>
        <a href="tugas.php" target="isi" > <img src="7671277_1627.jpg" width="60px" height="60px"></a>
        <!-- <img src="7671277_1627.jpg" width="60px" height="60px"> -->
        <p class="welcome">Welcome | <span id="username"></span> </p>
    </nav>
    <div>
    </div>
    <script>
        var username = localStorage.getItem("username");
        document.getElementById("username").textContent = username;
    </script>
    
</body>
</html>