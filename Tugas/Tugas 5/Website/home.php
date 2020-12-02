<?php
    require "koneksi.php";

	global $conn;
	$biodata = query("SELECT * FROM biodata;");
	$edukasi = query("SELECT * FROM edukasi;");
	$movie = query("SELECT * FROM movie;");
	$skill = query("SELECT * FROM skill;");
?>

<?php
    $home = "Home";
    $edukasiku = "Education";
    $movie = "Favorite Movie";
    $knowledge1 = "Knowledge";
    $knowledge = "I’m Computer Science Student Who Interest On";
    $contact1 = "Contact";
    $contact= "FIND ME ON";
?>

<!DOCTYPE html>
<html>
    <head>
        <title>Web CV</title>
        <meta charset="UTF-8">
        <meta name="author" content="Dwi Wahyu Effendi">
        <link rel="shortcut icon" href="Image/Home/myphoto.jpg">
        <link rel="stylesheet" href="style.css">
    </head>

    <body>
		<div class="menu">
			<ul>
				<li><a href="#Home"><?php echo $home?></a></li>
				<li><a href="#Education"><?php echo $edukasiku?></a></li>
				<li><a href="#Favorite-Movie"><?php echo $movie?></a></li>
                <li><a href="#Knowledge"><?php echo $knowledge1?></a></li>
                <li><a href="#Contact"><?php echo $contact1?></a></li>
			</ul>
		</div>

        <img class="foto" src="Image/Home/myphoto.jpg">
        <div class="Home">
            <table cellspacing="0" cellpadding="-50">
            <h1>Dwi Wahyu Effendi</h1>
            
            <?php foreach($biodata as $bio) : ?>
				<tr>
                    <td><img src="Image/Home/calendar.png"></td>
                    <td><h4><?= $bio["ttl"]; ?></h4></td>
				</tr>		
                <tr>
                    <td><img src="Image/Home/location.png"></td>
                    <td><h4><?= $bio["kota"]; ?></h4></td>
                </tr>
                <tr>
                    <td><img src="Image/Home/phone.png"></td>
                    <td><h4><?= $bio["telpon"]; ?></h4></td>
                </tr>
                <tr>
                    <td><img src="Image/Home/email.png"></td>
                    <td><h4><?= $bio["email"]; ?></h4></td>
                </tr>
                <tr>
                    <td><img src="Image/Home/github.png"></td>
                    <td><h4><?= $bio["github"]; ?></h4></td>
                </tr>
                <tr>
                    <td><img src="Image/Home/linkedin.png"></td>
                    <td><h4><?= $bio["linkedin"]; ?></h4></td>
                </tr>
			<?php endforeach; ?>
            </table>
        </div>

        <div class="banner">
			<div class="app-text">
                <h1>Hi Guys... </h1>
                <h1>I'm Wahyu</h1>
                <div class="title">
                    <hr>
                    <h1>College Student <img src="Image/Home/star.png" width="30px"> Developer</h1>
                    <hr>
				    <p>I am a computer science Student at UPN “Veteran” East Java, Interest on linux, artificial
                        intelligence, backend, and mobile developer. Now I’m currently learning web development.
                        Beside that I also like things related to organization and philosophy. Have a good day...</p>
                </div>
			</div>
        </div>
        
        <div class="garis">
        <hr style="border-width: 2px; border-color: black; margin-right: 300px; margin-left: 300px;">
        <h2 id="edu" align="center" style="font-size: 30px; font-family: Share Tech; color: black; margin-top: 0px; margin-bottom: 0px;">
            <?php echo $edukasiku?>
        </h2>
        <hr style="border-width: 2px; border-color: black; margin-right: 300px; margin-left: 300px;">
        <table align="center" border="0">
              <tbody>
                <?php 
                  $query = "SELECT * FROM edukasi";
                  $result = mysqli_query(connection(),$query);
                 ?>

                 <?php while($data = mysqli_fetch_array($result)): ?>
                 <div class="educat">
                  <tr>
                    <td style="padding: 0 20px"><img width="70px" src="<?= $data["logo"];?>"></td>
                    <td>
                        <div class="jarak">
                        <p align="center" style="padding: 0 10px"><b><?= $data["jenjang"]; ?></b></p>
                        <p align="center" style="padding: 0 10px"><b><?= $data["tahun"]; ?></b></p>
                        </div>
                    </td>
                  </tr>
                  </div>
                 <?php endwhile ?>
              </tbody>
            </table>   
        </div>
        

        <div class="movie">
        <hr style="border-width: 2px; border-color: black; margin-right: 300px; margin-left: 300px;">
        <h2 id="film" align="center" style="font-size: 30px; font-family: Share Tech; color: black; margin-top: 0px; margin-bottom: 0px;">
        <?php echo $movie?>
        </h2>
        <hr style="border-width: 2px; border-color: black; margin-right: 300px; margin-left: 300px;">
        <table align="center" border="0">
              <tbody>
                <?php 
                  $query = "SELECT * FROM movie";
                  $result = mysqli_query(connection(),$query);
                 ?>

                 <?php while($data = mysqli_fetch_array($result)): ?>
                 <div class="filmku">
                  <tr>
                    <td style="padding: 0 20px"><img width="90px" height="120px" src="<?= $data["poster"];?>"></td>
                    <td>
                        <p align="center" style="padding: 0 10px"><b><?= $data["film"]; ?></b></p>
                        <p align="center" style="padding: 0 10px"><b><?= $data["rilis"]; ?></b></p>
                    </td>
                  </tr>
                  </div>
                 <?php endwhile ?>
              </tbody>
            </table>
        </div>

        <div class="Knowledge">
        <h2 id="pengetahuan" align="center" style="font-size: 30px; font-family: Share Tech; color: black; margin-top: 100px;">
        <?php echo $knowledge?>
        </h2>
        <hr style="border-width: 2px; border-color: black;">
        <table align="center" border="0" style="margin-right: 200px; margin-left: 200px;">
              <tbody>
                <?php 
                  $query = "SELECT * FROM skill";
                  $result = mysqli_query(connection(),$query);
                 ?>

                 <?php while($data = mysqli_fetch_array($result)): ?>
                 <div class="pengetahuanku">
                  <tr>
                    <td style="padding: 0 20px"><img width="120px" src="<?= $data["gambar"];?>"></td>
                    <td>
                        <p align="center" style="padding: 0 10px; font-size: 20px"><b><?= $data["jenis"]; ?></b></p>
                        <p align="left" style="padding: 0 10px"><b><?= $data["keterangan"]; ?></b></p>
                    </td>
                  </tr>
                  </div>
                 <?php endwhile ?>
              </tbody>
            </table>
        </div>

	<div class="kontak">
		<h2 id="contactme"><?php echo $contact?></h2>
		<div class="kontakku">
            <table align="center">
                <tr align="center">
                    <td><img src="Image/Home/linkedin.png"></td>
                    <td><img src="Image/Home/whatsapp.png"></td>
                    <td><img src="Image/Home/telegram.png"></td>
                    <td><img src="Image/Home/facebook.png"></td>
                    <td><img src="Image/Home/instagram.png"></td>
                </tr>
            </table>
            <table align="center">
                <tr>
                    <td><h1>You can see</h1><h1>my project on</h1></td>
                    <td><img src="Image/Home/github.png" width="30px"></td>
                </tr>
            </table>
		</div>
    </div>
    </body>
</html>