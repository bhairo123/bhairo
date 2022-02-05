<?php
session_start();
if(!isset($_SESSION["login"]) ) {
	header("Location: admin.php");
	exit;
}
include "conection.php";
if(isset($_POST["submit"])){
  $name = $_POST["name"];
  $tugas = $_POST["tugas"];
  $instagram = $_POST["instagram"];
  $facebook = $_POST["facebook"];
  $twiter = $_POST["twiter"];
  $id_jabatan = $_POST["id_jabatan"];
  if($_FILES["image"]["error"] == 4){
    echo
    "<script> alert('Image Does Not Exist'); </script>"
    ;
  }
  else{
    $fileName = $_FILES["image"]["name"];
    $fileSize = $_FILES["image"]["size"];
    $tmpName = $_FILES["image"]["tmp_name"];

    $validImageExtension = ['jpg', 'jpeg', 'png'];
    $imageExtension = explode('.', $fileName);
    $imageExtension = strtolower(end($imageExtension));
    if ( !in_array($imageExtension, $validImageExtension) ){
      echo
      "
      <script>
        alert('Invalid Image Extension');
      </script>
      ";
    }
    else if($fileSize > 1000000){
      echo
      "
      <script>
        alert('Image Size Is Too Large');
      </script>
      ";
    }
    else{
      $newImageName = uniqid();
      $newImageName .= '.' . $imageExtension;

      move_uploaded_file($tmpName, 'guru/' . $newImageName);
      $query = "INSERT INTO guru VALUES('', '$name','$tugas','$instagram','$facebook','$twiter','$newImageName','$id_jabatan')";
      mysqli_query($conn, $query);
      echo
      "
      <script>
        alert('DATA GURU SEKOLAH BERHASIL DITAMBAHKAN');
        
      </script>
      ";
    }
  }
}
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>TAMBAH & HAPUS DATA GURU</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
	<script type="module" src="https://unpkg.com/ionicons@5.5.2/dist/ionicons/ionicons.esm.js"></script>
	<script nomodule src="https://unpkg.com/ionicons@5.5.2/dist/ionicons/ionicons.js"></script>
	<link rel="stylesheet" href="https://pro.fontawesome.com/releases/v5.10.0/css/all.css" integrity="sha384-AYmEC3Yw5cVb3ZcuHtOA93w35dYTsvhLPVnYs9eStHfGJvOvKxVfELGroGkvsg+p" crossorigin="anonymous"/>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.4.1/jquery.min.js" integrity="sha512-bnIvzh6FU75ZKxp0GXLH9bewza/OIw6dLVh9ICg0gogclmYGguQJWl8U30WpbsGTqbIiAwxTsbe76DErLq5EDQ==" crossorigin="anonymous" referrerpolicy="no-referrer"></script>
    <link rel="stylesheet" href="css/hapus.css">
	<link rel="stylesheet" href="css/admin.css">
</head>
<body>
    <div class="admin-panel">
	<div class="menu">
		<div class="heading">
		<p class="aktif"><lord-icon
    src="https://cdn.lordicon.com/sbiheqdr.json"
    trigger="loop"
    colors="primary:#ffffff,secondary:#ffffff"
    stroke="70"
    style="width:45px;height:45px">
</lord-icon></p>
			<div class="menu-icon js-toggle-menu">
				<span></span>
				<span></span>
				<span></span>
			</div>
		</div>
		<div class="wrap">
		<a href="dashboard.php"><i class="fas fa-tachometer-alt-slow"></i> Dashboard</a>
			<a href="comment.php"><i class="fas fa-comments-alt"></i> Comment</a>
			<a href="feed_back.php"><i class="fas fa-comment-alt-exclamation"></i> Feed Back</a>
			<a href="contact.php"><i class="fas fa-envelope-open-text"></i> Contact Us</a>
			<p class="title"><lord-icon
    src="https://cdn.lordicon.com/mecwbjnp.json"
    trigger="loop"
    colors="primary:#ffffff,secondary:#ffffff"
    stroke="70"
    style="width:45px;height:45px">
</lord-icon></p>
            <a href="upload.php"><i class="fas fa-file-upload"></i> UPLOAD</a>
<a href="guru.php" class="aktif"><i class="fas fa-server"></i> DATA & HAPUS</a>
<p class="title"><lord-icon
    src="https://cdn.lordicon.com/lywgqtim.json"
    trigger="loop"
	delay="1000"
    colors="primary:#ffffff,secondary:#ffffff"
    stroke="70"
    style="width:45px;height:45px">
</lord-icon></p>
<a href="logout.php">logout <i class="fas fa-sign-out"></i></a>


		</div>
	</div>

	<div class="content">
		<div class="header">
		<script src="https://cdn.lordicon.com/libs/mssddfmo/lord-icon-2.1.0.js"></script>
			<div style="margin:0 auto;">
<center>
<a href="#kepsek"><button class="custom-btn btn-9 a" title="DATA KEPALA SEKOLAH" >KEPALA SEKOLAH</button></a>
<a href="#mapel"><button class="custom-btn btn-9 a" title="DATA GURU MAPEL" >GURU MAPEL</button></a>
<a href="#tbsm"><button class="custom-btn btn-9 a" title="DATA GURU TBSM" >GURU TBSM</button></a>
<br>
<a href="#tkj"><button class="custom-btn btn-9 a" title="DATA GURU TKJ" >GURU TKJ</button></a>
<a href="#rpl"><button class="custom-btn btn-9 a" title="DATA GURU RPL" >GURU RPL</button></a>
<a href="#anim"><button class="custom-btn btn-9 a" title="DATA GURU ANIM" >GURU ANIM</button></a>
<a href="#elind"><button class="custom-btn btn-9 a" title="DATA GURU ELIND" >GURU ELIND</button></a>	</center>
</div>
			</div>
		<div class="body">
            <form class="" action="" method="post" autocomplete="off" enctype="multipart/form-data">
                <section class="contactus">
                          <div class="container">
                              <div class="contactForm-a">
                                <div class="formBox">
                                    
                                 <div class="inputBox w50">
                                    <input name="name" id="name" type="text" required>
                                    <span for="name">Nama Guru</span>
                                  </div>
								  <div class="inputBox w50">
									  <input type="file" name="image" id = "image" accept=".jpg, .jpeg, .png" vlaue="">
									  <span for="image">Foto 440 X 440</span>
								</div>
								  <div class="inputBox w50" style="text-align:center; justify-content;center; align-items:center;">
									  <span for="id_jabatan">Jabatan</span>
								  <br><select name="id_jabatan" id="id_jabatan" style="font-size:0.6em;width:100%; text-align:center; border-radius:10px; color:#fff; background-color:#3498DB; background-image:linear-gradient(315deg, #1fd1f9 0%, #b621fe 74%); border-line:none;">
                    <option>PILIH JABATAN</option>
                    <?php include "conection.php";
                    $query = mysqli_query($conn,"SELECT * FROM jabatan") or die (mysqli_error($conn));
                    while($data = mysqli_fetch_array($query)){
                        echo "<option value=$data[id_jabatan]> $data[nama_jabatan] </option>";
                    
                    }
                    ?>
                </select>
                                    
                                  </div> 
								  <div class="inputBox w50">
                                    <input name="instagram" id="instagram" type="text" required>
                                    <span for="instagram">Link Instagram</span>
                                  </div>
								  <div class="inputBox w50">
                                    <input name="facebook" id="facebook" type="text" required>
                                    <span for="facebook">Link Facebook</span>
                                  </div>
                                  <div class="inputBox w50">
                                    <input name="twiter" id="twiter" type="text" required>
                                    <span for="twiter">Link Twitter</span>
                                  </div>
                                  <div class="inputBox w100">
                                    <textarea name="tugas" id="tugas" required></textarea>
                                    <span for="tugas">Tugas guru</span>
                                  </div> 
                                  <div class="inputBox w100">
                                    <input type="submit" name="submit" value="UPLOAD">
                                  </div>
                                </div>
                              </div>
                          </div>
                      </section>
                    </form>


					<div class="tag" id="kepsek">
  <h2><i class="fad fa-user-tie"></i>KEPALA SEKOLAH<i class="fad fa-user-tie"></i></h2>
</div>
					<?php 
$rows = mysqli_query($conn, "SELECT * FROM guru,jabatan WHERE guru.id_jabatan = jabatan.id_jabatan AND nama_jabatan = 'KEPALA SEKOLAH';");
?>
<?php foreach ($rows as $row) : ?>
    <div class="bdy">
        <figure class="snip0056 red">
          <figcaption>
		  <h2><?php echo $row["name"]; ?></h2>
            <p><?php echo $row["tugas"]; ?></p>
            <div class="icons"><a href="<?php echo $row["instagram"]; ?>"><i class="fab fa-instagram"></i></a><a href="<?php echo $row["facebook"]; ?>"><i class="fab fa-facebook-f"></i></a><a href="<?php echo $row["twiter"]; ?>"><i class="fab fa-twitter"></i></a></div>
          </figcaption><img src="guru/<?php echo $row["image"]; ?>" alt="sample8" />
          <div class="position"><?php echo $row["nama_jabatan"]; ?><span> <a href="hapus_guru.php?id=<?php echo $row ["id"]; ?>" onclick="return confirm ('Yakin data <?php echo $row ['name'];?> dihapus ?')"><lord-icon
                src="https://cdn.lordicon.com/gsqxdxog.json"
                trigger="hover"
                delay="2000"
                colors="primary:#ffffff,secondary:#ffffff"
                stroke="100"
                style="width:40px;height:40px">
            </lord-icon></a></span></div>
        </figure></div>
        <?php endforeach; ?>

		<div class="tag" id="mapel">
  <h2><i class="fad fa-chalkboard-teacher"></i>GURU<i class="fad fa-chalkboard-teacher"></i></h2>
</div>
		<?php 
$rows = mysqli_query($conn, "SELECT * FROM guru,jabatan WHERE guru.id_jabatan = jabatan.id_jabatan AND nama_jabatan = 'GURU MAPEL';");
?>
<?php foreach ($rows as $row) : ?>
    <div class="bdy">
        <figure class="snip0056 red">
          <figcaption>
		  <h2><?php echo $row["name"]; ?></h2>
            <p><?php echo $row["tugas"]; ?></p>
            <div class="icons"><a href="<?php echo $row["instagram"]; ?>"><i class="fab fa-instagram"></i></a><a href="<?php echo $row["facebook"]; ?>"><i class="fab fa-facebook-f"></i></a><a href="<?php echo $row["twiter"]; ?>"><i class="fab fa-twitter"></i></a></div>
          </figcaption><img src="guru/<?php echo $row["image"]; ?>" alt="sample8" />
          <div class="position"><?php echo $row["nama_jabatan"]; ?><span> <a href="hapus_guru.php?id=<?php echo $row ["id"]; ?>" onclick="return confirm ('Yakin data <?php echo $row ['name'];?> dihapus ?')"><lord-icon
                src="https://cdn.lordicon.com/gsqxdxog.json"
                trigger="hover"
                delay="2000"
                colors="primary:#ffffff,secondary:#ffffff"
                stroke="100"
                style="width:40px;height:40px">
            </lord-icon></a></span></div>
        </figure></div>
        <?php endforeach; ?>
		<div class="tag" id="tbsm">
  <h2><i class="fad fa-motorcycle"></i>GURU TBSM<i class="fad fa-motorcycle"></i></h2>
</div>
		<?php 
$rows = mysqli_query($conn, "SELECT * FROM guru,jabatan WHERE guru.id_jabatan = jabatan.id_jabatan AND nama_jabatan = 'GURU TBSM';");
?>
<?php foreach ($rows as $row) : ?>
    <div class="bdy">
        <figure class="snip0056 red">
          <figcaption>
		  <h2><?php echo $row["name"]; ?></h2>
            <p><?php echo $row["tugas"]; ?></p>
            <div class="icons"><a href="<?php echo $row["instagram"]; ?>"><i class="fab fa-instagram"></i></a><a href="<?php echo $row["facebook"]; ?>"><i class="fab fa-facebook-f"></i></a><a href="<?php echo $row["twiter"]; ?>"><i class="fab fa-twitter"></i></a></div>
          </figcaption><img src="guru/<?php echo $row["image"]; ?>" alt="sample8" />
          <div class="position"><?php echo $row["nama_jabatan"]; ?><span> <a href="hapus_guru.php?id=<?php echo $row ["id"]; ?>" onclick="return confirm ('Yakin data <?php echo $row ['name'];?> dihapus ?')"><lord-icon
                src="https://cdn.lordicon.com/gsqxdxog.json"
                trigger="hover"
                delay="2000"
                colors="primary:#ffffff,secondary:#ffffff"
                stroke="100"
                style="width:40px;height:40px">
            </lord-icon></a></span></div>
        </figure></div>
        <?php endforeach; ?>

		<div class="tag" id="tkj">
  <h2><i class="fad fa-desktop"></i>GURU TKJ<i class="fad fa-desktop"></i></h2>
</div>

		<?php 
$rows = mysqli_query($conn, "SELECT * FROM guru,jabatan WHERE guru.id_jabatan = jabatan.id_jabatan AND nama_jabatan = 'GURU TKJ';");
?>
<?php foreach ($rows as $row) : ?>
    <div class="bdy">
        <figure class="snip0056 red">
          <figcaption>
		  <h2><?php echo $row["name"]; ?></h2>
            <p><?php echo $row["tugas"]; ?></p>
            <div class="icons"><a href="<?php echo $row["instagram"]; ?>"><i class="fab fa-instagram"></i></a><a href="<?php echo $row["facebook"]; ?>"><i class="fab fa-facebook-f"></i></a><a href="<?php echo $row["twiter"]; ?>"><i class="fab fa-twitter"></i></a></div>
          </figcaption><img src="guru/<?php echo $row["image"]; ?>" alt="sample8" />
          <div class="position"><?php echo $row["nama_jabatan"]; ?><span> <a href="hapus_guru.php?id=<?php echo $row ["id"]; ?>" onclick="return confirm ('Yakin data <?php echo $row ['name'];?> dihapus ?')"><lord-icon
                src="https://cdn.lordicon.com/gsqxdxog.json"
                trigger="hover"
                delay="2000"
                colors="primary:#ffffff,secondary:#ffffff"
                stroke="100"
                style="width:40px;height:40px">
            </lord-icon></a></span></div>
        </figure></div>
        <?php endforeach; ?>



		<div class="tag" id="rpl">
  <h2><i class="fad fa-code"></i>GURU RPL<i class="fad fa-code"></i></h2>
</div>
		<?php 
$rows = mysqli_query($conn, "SELECT * FROM guru,jabatan WHERE guru.id_jabatan = jabatan.id_jabatan AND nama_jabatan = 'GURU RPL';");
?>
<?php foreach ($rows as $row) : ?>
    <div class="bdy">
        <figure class="snip0056 red">
          <figcaption>
		  <h2><?php echo $row["name"]; ?></h2>
            <p><?php echo $row["tugas"]; ?></p>
            <div class="icons"><a href="<?php echo $row["instagram"]; ?>"><i class="fab fa-instagram"></i></a><a href="<?php echo $row["facebook"]; ?>"><i class="fab fa-facebook-f"></i></a><a href="<?php echo $row["twiter"]; ?>"><i class="fab fa-twitter"></i></a></div>
          </figcaption><img src="guru/<?php echo $row["image"]; ?>" alt="sample8" />
          <div class="position"><?php echo $row["nama_jabatan"]; ?><span> <a href="hapus_guru.php?id=<?php echo $row ["id"]; ?>" onclick="return confirm ('Yakin data <?php echo $row ['name'];?> dihapus ?')"><lord-icon
                src="https://cdn.lordicon.com/gsqxdxog.json"
                trigger="hover"
                delay="2000"
                colors="primary:#ffffff,secondary:#ffffff"
                stroke="100"
                style="width:40px;height:40px">
            </lord-icon></a></span></div>
        </figure></div>
        <?php endforeach; ?>

		<div class="tag" id="anim">
  <h2><i class="fad fa-pencil-ruler"></i>GURU ANIM<i class="fad fa-pencil-ruler"></i></h2>
</div>

		<?php 
$rows = mysqli_query($conn, "SELECT * FROM guru,jabatan WHERE guru.id_jabatan = jabatan.id_jabatan AND nama_jabatan = 'GURU ANIM';");
?>
<?php foreach ($rows as $row) : ?>
    <div class="bdy">
        <figure class="snip0056 red">
          <figcaption>
		  <h2><?php echo $row["name"]; ?></h2>
            <p><?php echo $row["tugas"]; ?></p>
            <div class="icons"><a href="<?php echo $row["instagram"]; ?>"><i class="fab fa-instagram"></i></a><a href="<?php echo $row["facebook"]; ?>"><i class="fab fa-facebook-f"></i></a><a href="<?php echo $row["twiter"]; ?>"><i class="fab fa-twitter"></i></a></div>
          </figcaption><img src="guru/<?php echo $row["image"]; ?>" alt="sample8" />
          <div class="position"><?php echo $row["nama_jabatan"]; ?><span> <a href="hapus_guru.php?id=<?php echo $row ["id"]; ?>" onclick="return confirm ('Yakin data <?php echo $row ['name'];?> dihapus ?')"><lord-icon
                src="https://cdn.lordicon.com/gsqxdxog.json"
                trigger="hover"
                delay="2000"
                colors="primary:#ffffff,secondary:#ffffff"
                stroke="100"
                style="width:40px;height:40px">
            </lord-icon></a></span></div>
        </figure></div>
        <?php endforeach; ?>

		<div class="tag" id="elind">
  <h2><i class="fad fa-bolt"></i>GURU ELIND<i class="fad fa-bolt"></i></h2>
</div>
		<?php 
$rows = mysqli_query($conn, "SELECT * FROM guru,jabatan WHERE guru.id_jabatan = jabatan.id_jabatan AND nama_jabatan = 'GURU ELIND';");
?>
<?php foreach ($rows as $row) : ?>
    <div class="bdy">
        <figure class="snip0056 red">
          <figcaption>
		  <h2><?php echo $row["name"]; ?></h2>
            <p><?php echo $row["tugas"]; ?></p>
            <div class="icons"><a href="<?php echo $row["instagram"]; ?>"><i class="fab fa-instagram"></i></a><a href="<?php echo $row["facebook"]; ?>"><i class="fab fa-facebook-f"></i></a><a href="<?php echo $row["twiter"]; ?>"><i class="fab fa-twitter"></i></a></div>
          </figcaption><img src="guru/<?php echo $row["image"]; ?>" alt="sample8" />
          <div class="position"><?php echo $row["nama_jabatan"]; ?><span> <a href="hapus_guru.php?id=<?php echo $row ["id"]; ?>" onclick="return confirm ('Yakin data <?php echo $row ['name'];?> dihapus ?')"><lord-icon
                src="https://cdn.lordicon.com/gsqxdxog.json"
                trigger="hover"
                delay="2000"
                colors="primary:#ffffff,secondary:#ffffff"
                stroke="100"
                style="width:40px;height:40px">
            </lord-icon></a></span></div>
        </figure></div>
        <?php endforeach; ?>





					
		</div>
	</div>
	
</div>

</body>
<script>
    window.addEventListener("DOMContentLoaded",() => {
	const clock = new ProgressClock("#clock");
});

class ProgressClock {
	constructor(qs) {
		this.el = document.querySelector(qs);
		this.time = 0;
		this.updateTimeout = null;
		this.ringTimeouts = [];
		this.update();
	}
	getDayOfWeek(day) {
		switch (day) {
			case 1:
				return "Monday";
			case 2:
				return "Tuesday";
			case 3:
				return "Wednesday";
			case 4:
				return "Thursday";
			case 5:
				return "Friday";
			case 6:
				return "Saturday";
			default:
				return "Sunday";
		}
	}
	getMonthInfo(mo,yr) {
		switch (mo) {
			case 1:
				return { name: "February", days: yr % 4 === 0 ? 29 : 28 };
			case 2:
				return { name: "March", days: 31 };
			case 3:
				return { name: "April", days: 30 };
			case 4:
				return { name: "May", days: 31 };
			case 5:
				return { name: "June", days: 30 };
			case 6:
				return { name: "July", days: 31 };
			case 7:
				return { name: "August", days: 31 };
			case 8:
				return { name: "September", days: 30 };
			case 9:
				return { name: "October", days: 31 };
			case 10:
				return { name: "November", days: 30 };
			case 11:
				return { name: "December", days: 31 };
			default:
				return { name: "January", days: 31 };
		}
	}
	update() {
		this.time = new Date();

		if (this.el) {
			// date and time
			const dayOfWeek = this.time.getDay();
			const year = this.time.getFullYear();
			const month = this.time.getMonth();
			const day = this.time.getDate();
			const hr = this.time.getHours();
			const min = this.time.getMinutes();
			const sec = this.time.getSeconds();
			const dayOfWeekName = this.getDayOfWeek(dayOfWeek);
			const monthInfo = this.getMonthInfo(month,year);
			const m_progress = sec / 60;
			const h_progress = (min + m_progress) / 60;
			const d_progress = (hr + h_progress) / 24;
			const mo_progress = ((day - 1) + d_progress) / monthInfo.days;
			const units = [
				{
					label: "w",
					value: dayOfWeekName
				},
				{
					label: "mo",
					value: monthInfo.name,
					progress: mo_progress
				},
				{
					label: "d", 
					value: day,
					progress: d_progress
				},
				{
					label: "h", 
					value: hr > 12 ? hr - 12 : hr,
					progress: h_progress
				},
				{
					label: "m", 
					value: min < 10 ? "0" + min : min,
					progress: m_progress
				},
				{
					label: "s", 
					value: sec < 10 ? "0" + sec : sec
				},
				{
					label: "ap",
					value: hr > 12 ? "PM" : "AM"
				}
			];

			// flush out the timeouts
			this.ringTimeouts.forEach(t => {
				clearTimeout(t);
			});
			this.ringTimeouts = [];

			// update the display
			units.forEach(u => {
				// rings
				const ring = this.el.querySelector(`[data-ring="${u.label}"]`);

				if (ring) {
					const strokeDashArray = ring.getAttribute("stroke-dasharray");
					const fill360 = "progress-clock__ring-fill--360";

					if (strokeDashArray) {
						// calculate the stroke
						const circumference = +strokeDashArray.split(" ")[0];
						const strokeDashOffsetPct = 1 - u.progress;

						ring.setAttribute(
							"stroke-dashoffset",
							strokeDashOffsetPct * circumference
						);

						// add the fade-out transition, then remove it
						if (strokeDashOffsetPct === 1) {
							ring.classList.add(fill360);

							this.ringTimeouts.push(
								setTimeout(() => {
									ring.classList.remove(fill360);
								}, 600)
							);
						}
					}
				}

				// digits
				const unit = this.el.querySelector(`[data-unit="${u.label}"]`);

				if (unit)
					unit.innerText = u.value;
			});
		}

		clearTimeout(this.updateTimeout);
		this.updateTimeout = setTimeout(this.update.bind(this),1e3);
	}
}
</script>
<script>
    dateTime = function(){
		var now = new Date();
		var hours = now.getHours();
		var greet;
	
		if (hours < 12) {
			greet = "＂GOOD MORNING 🌣＂";
		} else if (hours < 16) {
			greet = "＂GOOD AFTERNOON 🌥＂";
		} else {
			greet = "＂GOOD NIGHT ☾＂";
		}
	
		$('#time').html(greet);
};

menuDropdowns = function(){
	$('.dropdown').each(function(){
		const links = $(this).find('.links');
		const h = links.height();
		
		links.css('height', '0');
		
		$(this).click(function(){
			if ($(this).toggleClass('js-opened').hasClass('js-opened')) {
				links.css('height', h);
			} else {
				links.css('height', 0);
			};
			
		});
	});
};

$( document ).ready(function() {
	
	menuDropdowns();
	dateTime();
	
	$('.js-toggle-menu').click(function(){
		$('.menu').toggleClass('active');
	});	

});

</script>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ka7Sk0Gln4gmtz2MlQnikT1wXgYsOg+OMhuP+IlRH9sENBO0LRn5q+8nbTov4+1p" crossorigin="anonymous"></script>
</html>