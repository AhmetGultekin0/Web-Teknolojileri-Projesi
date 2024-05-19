<?php 
include("../php/connection.php");

?>


<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="../css/giris.css">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
</head>
<body>
    <header>
        <div class="container">
            <ul>
                <li ><a href="index.html">Hakkımda</a></li>
                <li style="float: right;"><a href="sehrim.html">Şehrim</a></li>
                <li style="float: right;"><a href="miras.html">Mirasımız</a></li>
                <li style="float: right;"><a href="iletisim.html">İletişim</a></li>
                <li class="active" style="float: right;"><a href="giris.html">Giriş</a></li>
            </ul>
        </div>
    </header>
    <div class="bosluk"></div>
    <div class="bosluk"></div>

    <div class="sehrim-container">
        <form action="../php/login.php" method="post" onsubmit="return isvalid()">
        <h1>Giriş</h1>
        <br>
        <label for="">Kullanıcı Adı</label>
        <input type="email" name="user" id="user" placeholder="Kullanıcı Adı">
        <br>
        <label for="">Parola</label>
        <input type="password" name="pass" id="pass"placeholder="Parola">
        <button type="submit">Giriş</button>
        <br>
        
        </form>
    </div>
    <div class="bosluk"></div>
    <div class="bosluk"></div>

    <footer class="footer">
        <div class="container">
            <div class="row">
                <div class="col">
                    <h4>Site</h4>
                    <a href="../html/giris.php"><p>Giriş</p></a>
                    <a href="../html/iletisim.html"><p>İletişim</p></a>
                    <a href="../html/index.html"><p>Hakkımda</p></a>
                    <a href="../html/miras.html"><p>Mirasımız</p></a>
                    <a href="../html/sehrim.html"><p>Şehrim</p></a>
                    
                </div>
                <div class="col">
                    <h4>Yardım al</h4>
                    <P>Mail Adresi: asgultekin@gmail.com</P>
                </div>
                <div class="col">
                    <h4>Bizi Takip Edin</h4>
                    <div class="social-links">
                        <a href="https://www.facebook.com" class="fab fa-facebook-f"></a>
                        <a href="https://x.com" class="fab fa-twitter-f"></a>
                        <a href="https://www.instagram.com" class="fab fa-instagram-f"></a>
                        <a href="https://www.linkedin.com" class="fab fa-linkedin-in"></a>
                    </div>
                </div>
            </div>

        </div>

    </footer>

</body>
</html>