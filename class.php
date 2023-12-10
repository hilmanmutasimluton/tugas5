<div class="herader">
<h3>website sekolah</h3>
</div>
<dive class="menu">
    <ul>
        <il><a haref="index.php?page=home">home</a></il>
        <il><a haref="index.php?page=about">about Us</a></il>
        <il><a haref="index.php?page=info">info</a></il>
        <il><a haref="index.php?page=contact">contact</a></il>
</ul>
</div>
<div class="konten">
    <?php
    if (isset($_GET['page'])) {
        $a = $_GET['page'];
        if($a=="about)"{
            include"about.php";
        }else if($a=="info"){
            include"info.php";
        }else if($a=="contact"){
            echo"contact.php";
        }
        else{
            include"home.php";
        
        }
        }
        ?>
        </dive>

