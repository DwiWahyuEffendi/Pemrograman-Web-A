<?php
    require "koneksi.php";

	global $conn;
	$personal = query("SELECT * FROM biodata;");
	$edukasi = query("SELECT * FROM edukasi;");
	$movie = query("SELECT * FROM movie;");
	$skill = query("SELECT * FROM skill;");
?>

<?php
    $home = "Home";
    $edukasi = "Education";
    $movie = "Favorite Movie";
    $knowledge1 = "Knowledge";
    $knowledge = "I’m Computer Science Student Who Interest On";
    $contact1 = "Contact";
    $contact= "FIND ME ON";
    $biodata = ["Dwi Wahyu Effendi"];
    $pendidikanku = ["SDN SIWALANKERTO III / 419", "SMPN 36 SURABAYA", "SMA KEMALA BHAYANGKARI 1 SURABAYA", "UPN VETERAN JAWA TIMUR"];
    $tahunsekolah = ["2006-2012", "2012-2015", "2015-2018", "2018-Now"];
    $film = ["3 Idiots", "Doctor Strange", "Money Heist"];
    $tahunfilm = ["2009", "2016", "2019"];
    $minat = ["Linux Enthusiast", "Backend Developer", "Artificial Intelligence", "Mobile Developer"];
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
	<div class="container">
		<div class="menu">
			<ul>
				<li><a href="#Home"><?php echo $home?></a></li>
				<li><a href="#Education"><?php echo $edukasi?></a></li>
				<li><a href="#Favorite-Movie"><?php echo $movie?></a></li>
                <li><a href="#Knowledge"><?php echo $knowledge1?></a></li>
                <li><a href="#Contact"><?php echo $contact1?></a></li>
			</ul>
		</div>

        <img class="foto" src="Image/Home/myphoto.jpg">
        <div class="Home">
            <table cellspacing="0" cellpadding="-50">
            <h1><?= "$biodata[0]"; ?></h1>
            
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
        
        <div class="Education">
		<h2 id="edu"><?php echo $edukasi?></h2>
			<div class="pendidikan">
                <table align="center">
                    <tr align="center">
                        <td><img src="Image/Home/logosd.png"></td>
                        <td><img src="Image/Home/logosmp.png"></td>
                    </tr>
                    <tr align="center">
                        <td><p><?= "$pendidikanku[0]"; ?></p></td>
                        <td><p><?= "$pendidikanku[1]"; ?></p></td>
                    </tr>
                    <tr align="center">
                        <td><p><?= "$tahunsekolah[0]"; ?></p></td>
                        <td><p><?= "$tahunsekolah[1]"; ?></p></td>
                    </tr>
                    <tr align="center">
                        <td><img src="Image/Home/logosma.png"></td>
                        <td><img src="Image/Home/logos1.png"></td>
                    </tr>
                    <tr align="center">
                        <td><p><?= "$pendidikanku[2]"; ?></p></td>
                        <td><p><?= "$pendidikanku[3]"; ?></p></td>
                    </tr>
                    <tr align="center">
                        <td><p><?= "$tahunsekolah[2]"; ?></p></td>
                        <td><p><?= "$tahunsekolah[3]"; ?></p></td>
                    </tr>
                </table>
			</div>
        </div>
        
        <div class="movie">
        <h2 id="film"><?php echo $movie?></h2>
            <div class="filmku"></div>
                <table align="center">
                    <tr align="center">
                        <td><img src="Image/Home/3idiot.png"></td>
                        <td><img src="Image/Home/doctorstrang.png"></td>
                        <td><img src="Image/Home/moneyheis.png"></td>
                    </tr>
                    <tr align="center">
                        <td><p><?= "$film[0]"; ?></p></td>
                        <td><p><?= "$film[1]"; ?></p></td>
                        <td><p><?= "$film[2]"; ?></p></td>
                    </tr>
                    <tr align="center">
                        <td><p><?= "$tahunfilm[0]"; ?></p></td>
                        <td><p><?= "$tahunfilm[1]"; ?></p></td>
                        <td><p><?= "$tahunfilm[2]"; ?></p></td>
                    </tr>
                </table>
            </div>
        </div>

    	<div class="Knowledge">
		<h1 align="center" id="pengetahuan"><?php echo $knowledge?></h2>
        <div class="pengetahuanku">
            <hr>
            <table align="center">
                <tr align="center">
                    <td><img src="Image/Home/linux.png"></td>
                    <td><img src="Image/Home/backend.png"></td>
                    <td><img src="Image/Home/brain.png"></td>
                    <td><img src="Image/Home/android.png"></td>
                </tr>
                <tr align="center">
                    <td><h1><?= "$minat[0]"; ?></h1></td>
                    <td><h1><?= "$minat[1]"; ?></h1></td>
                    <td><h1><?= "$minat[2]"; ?></h1></td>
                    <td><h1><?= "$minat[3]"; ?></h1></td>
                </tr>
                <tr align="left">
                    <td><p>I am a big fan of the Linux
operating system. Because of
what? because Linux is open
source and runs on any device.
My laptop uses the Ubuntu
distro
that I use to work on
projects.
Because this OS is
easier to use
and I like it more
than others.</p></td>
                    <td><p>Back-end developers primarily
develop and maintain the core
functional logic and operations
of a software application or
information system. Typically, a
back-end developer has expert
programming skills in Java,
Kotlin and other high-level
programming languages.
</p></td>
                    <td><p>Sometimes called machine intelligence,
is intelligence demonstrated by 
machines,
unlike the natural intelligence
displayed
 by humans and animals.
Colloquially, the
term "artificial
intelligence" is often
used to describe
machines (or computers) that mimic
"cognitive" functions that humans
associate with the human mind, such
as "learning"
and "problem solving".</p></td>
                    <td><p>A mobile developer creates software
for mobile devices and technology.
Whether for an Android, Apple or
Windows
platform, a mobile
developer must learn
the software
development environment
and
programming languages for their
chosen platform.</p></td>
                </tr>
            </table>
		</div>
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