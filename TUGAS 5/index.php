<?php
    include ('conn.php'); 
?>

<!DOCTYPE html>
<html>

<head>
    <meta charset="utf-8">
    <title>inicoba</title>
    <link rel="stylesheet" type="text/css" href="style.css">
</head>

<body>
    <div class="a">
        <img src="crop1.jpeg" alt="photo krop1" id="crop1" />
        <img src="foto profil.png" alt="photo profil" id="fotoprofil" />
        <div class="teks1">
            <p>Hello, I'm Ida</p>
        </div>
        <div class="teks2">
            <p>This is my Curriculum Vitae.</p>
        </div>
        <div id="rectangle1"></div>
        <div id="rectangle3"></div>
        <div id="rectangle4"></div>
        <div id="rectangle5"></div>
        <div id="rectangle6"></div>
        <div id="rectangle7"></div>
    </div>

    <div class="b">
        <img src="crop2.jpeg" alt="photo krop2" id="crop2" />
        <img src="foto profil.png" alt="photo profil 1" id="fotoprofil1" />
        <div id="rectangle8">
            <div class="teks3">
                <p>Haloo! Kenalkan namaku Dwi Nurhidayah. Lahir tanggal 7 Juni 2000, sekarang aku berumur 20 tahun. Merasakan bangku kuliah di Informatika merupakan suatu keajaiban bagiku, bertemu dengan banyak teman baru dan banyak sekali hal-hal baru yang
                    aku pelajari, salah satunya adalah belajar Pemrograman Web, mata kuliah yang bisa manambah skill desain maupun coding.</p>
            </div>
        </div>
        <div class="teks4">
            <p>Dwi Nurhidayah</p>
        </div>
        <div class="teks5">
            <p>Informatika’18 UPN VETERAN JAWA TIMUR</p>
        </div>
        <div class="teks6">
            <p>Abilities</p>
        </div>
        <div id="rectangle9"></div>
        <div id="rectangle10"></div>
        <div id="rectangle11"></div>
        <div id="rectangle12"></div>
        <div id="rectangle13"></div>
        <img src="calculating.png" alt="photo accounting" id="accounting" />
        <img src="music.png" alt="photo music" id="music" />
        <img src="orientation.png" alt="photo orientation" id="orientation" />
        <img src="positivity.png" alt="photo positivity" id="positivity" />
        <img src="empathy.png" alt="photo empathy" id="empathy" />
        <div class="taccounting">
            <p>Accounting</p>
        </div>
        <div class="tmusic">
            <p>Music</p>
        </div>
        <div class="torientation">
            <p>Orientation</p>
        </div>
        <div class="tpositivity">
            <p>Positivity</p>
        </div>
        <div class="tempathy">
            <p>Empathy</p>
        </div>
    </div>

    <div class="c">
        <img src="crop3.jpeg" alt="photo krop3" id="crop3" />
        <div id="rectangle14"></div>
        <div id="rectangle15"></div>
        <div id="rectangle16"></div>
        <div id="rectangle17"></div>
        <div id="rectangle18"></div>
        <div id="rectangle19"></div>
        <div id="rectangle20"></div>
        <div id="rectangle21"></div>
        <div id="rectangle22"></div>
        <div id="rectangle23"></div>
        <div id="rectangle24"></div>
        <div id="rectangle25"></div>
        <div id="rectangle26"></div>
        <div id="rectangle27"></div>
        <div id="rectangle28"></div>
        <div class="teks7">
            <p>Academic Resume</p>
        </div>
        <div class="teks8">
    
        <tbody>
            <?php 
            $sql = "SELECT * FROM sqlku";
            $res = mysqli_query(connection(),$sql);
             ?>

             <?php while($data = mysqli_fetch_array($res)): ?>
                <tr>
                    <td><?php echo $data['jenjang_sekolah']; ?></td> 
                    <td><?php echo $data['nama_sekolah']; ?></td>
                </tr>
                <?php endwhile ?>
        </tbody>
            
        </div>
        <div class="teks9">
            <p>Interest</p>
        </div>
        <div class="teks10">
            <p>Contacts</p>
        </div>
        <img src="tv-screen.png" alt="photo watching" id="watching" />
        <img src="globe.png" alt="photo travelling" id="travelling" />
        <img src="cycling.png" alt="photo cyclyng" id="cyclyng" />
        <img src="headphones.png" alt="photo listening" id="listening" />
        <img src="cupcake.png" alt="photo sweets" id="sweets" />
        <img src="favourite.png" alt="photo love" id="love" />
        <div class="twatching">
            <p>Watching Korean Drama</p>
        </div>
        <div class="ttravelling">
            <p>Travelling</p>
        </div>
        <div class="tcyclyng">
            <p>Cyclyng</p>
        </div>
        <div class="tlistening">
            <p>Listening Music</p>
        </div>
        <div class="tsweets">
            <p>Sweets</p>
        </div>
        <div class="tlove">
            <p>People I Love</p>
        </div>
        <img src="instagram.png" alt="photo ig" id="ig" />
        <img src="twitter.png" alt="photo twitter" id="twitter" />
        <img src="line.png" alt="photo line" id="line" />
        <div class="tig">
        <tbody>
            <?php 
            $sql = "SELECT * FROM contact";
            $res = mysqli_query(connection(),$sql);
             ?>

             <?php while($data = mysqli_fetch_array($res)): ?>
                <tr>
                    <?php echo $data['contact']; ?></td> <br><br><br><br>
                </tr>
                <?php endwhile ?>
        </tbody>
        </div>
    </div>
</body>

</html>