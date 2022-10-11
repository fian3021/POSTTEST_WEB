<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="joinmember.css">
    <title>Istorii Novela</title>
</head>
<body onload="popUp()">
    <!-- NAVIGATION BAR -->
    <div class="fContainer">
        <nav>
            <ul class="logo">
                <a href="/"><img src="logo-02.png" alt="logo"></a>
            </ul>
            <ul class="menu">
                <li><a href="index.html">Home</a></li>
                <li><a href="all.html">All</a></li>
                <li><a href="genre.html">Genre</a></li>
                <li><a href="update.html">Update</a></li>
                <li><a href="aboutme.html" title="About Me">About Me</a></li>
                <li><a href="contact.html">Contact</a></li>
            </ul>
            <ul class="cari"><form>
                <input class="search" type="text" placeholder="Search here..." required>	
                <input class="button" type="button" value="Search">		
            </form></ul>
            <ul class="user">
                <a href="/"><img src="https://cdn.icon-icons.com/icons2/2506/PNG/512/user_icon_150670.png" alt="icon"></a>
            </ul>
            <ul class="mode">
                <li class="ligth">Light<br>Dark</li>
                <input type="checkbox" onclick="ubahMode()">
            </ul>
        </nav>
    </div>
    <!-- NAVIGATION BAR END --> 
    
    <!-- MAIN CONTENT -->
    <div class="main-content">
        <!-- CONTENT 1 -->
        <div class="content-2">
            <h1> Welcome New Member!!</h1>
            <table>
                <div class="tampil">
                    <h3> Email </h3>
                    <p><?php echo $_POST['email']; ?></p>
                </div>
                <div class="tampil">
                    <h3> Nama </h3>
                    <p><?php echo $_POST['nama']; ?></p>
                </div>
                <div class="tampil">
                    <h3> Usia </h3>
                    <p><?php echo $_POST['usia']; ?></p>
                </div>
                <div class="tampil">
                    <h3> Jenis Kelamin </h3>
                    <p><?php echo $_POST['jenis_kelamin']; ?></p>
                </div>
                <div class="tampil">
                    <h3> Genre Favorit </h3>
                    <p>
                        <?php 
                            foreach ($_POST['genre'] as $result){
                                echo $result. "<br/>"; 
                            }
                                
                        ?>
                    </p>
                </div>
            </table>
        </div>
    </div>
    <!-- MAIN CONTENT END -->
    
    <!-- FOOTER BAR -->
    <div class="footer">
        <p>Contact:</p>
        <div class="social-icons" align="center">
            <a href="http://wa.me/6281257069609" title="WhatsApp" target="_blank"><img src="https://cdn-icons-png.flaticon.com/512/1384/1384007.png"></a>
            <a href="https://www.instagram.com/alfiananur3021/" title="Instagram" target="_blank"><img src="https://cdn-icons-png.flaticon.com/512/2175/2175198.png"></a>
        </div>
        <div class="foot" align="center">© 2022 designed by Al Fiana Nur Priyanti. All Rights Reserved<br>Istorii Novela</div>
    </div>
    <!-- FOOTER BAR END -->

    <!-- JAVASCRIPT -->
    <script src="script.js"></script>
    <script src="dist/sweetalert2.all.min.js"></script>
</body>
</html>