<?php
include 'conection.php';

error_reporting(0); 

if (isset($_POST['submit'])) { 
	$nama = $_POST['nama'];
  $akhir = $_POST['akhir'];
	$gmail = $_POST['gmail'];
  $no = $_POST['no'];
	$laporan = $_POST['laporan']; 

	$sql = "INSERT INTO laporan (nama, akhir, no, gmail, laporan)
			VALUES ('$nama','$akhir','$no', '$gmail', '$laporan')";
	$result = mysqli_query($conn, $sql);
	if ($result) {
		echo "<script>alert('laporan telah dikirim.')</script>";
	} else {
		echo "<script>alert('laporan Ditolak.')</script>";
	}
}

?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/css/bootstrap.min.css" integrity="sha384-MCw98/SFnGE8fJT3GXwEOngsV7Zt27NXFoaoApmYm81iuXoPkFOJwJ8ERdknLPMO" crossorigin="anonymous">
    <link rel="stylesheet" href="https://pro.fontawesome.com/releases/v5.10.0/css/all.css" integrity="sha384-AYmEC3Yw5cVb3ZcuHtOA93w35dYTsvhLPVnYs9eStHfGJvOvKxVfELGroGkvsg+p" crossorigin="anonymous"/>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.3.1/jquery.slim.min.js" integrity="sha512-M+qMI1PHRcYcOpJzeJlaWbVVx2JJyPIwZas8or7dc97LZOokjvbpfRxymhVtlJLyjiF3wGyr0FJOA4DLONLVLw==" crossorigin="anonymous" referrerpolicy="no-referrer"></script>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/tailwindcss/2.0.2/tailwind.min.css" integrity="sha512-+WF6UMXHki/uCy0vATJzyA9EmAcohIQuwpNz0qEO+5UeE5ibPejMRdFuARSrl1trs3skqie0rY/gNiolfaef5w==" crossorigin="anonymous" referrerpolicy="no-referrer" />
    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.5.1/jquery.min.js" charset="utf-8"></script>
    <link rel="stylesheet" href="css/service.css">
</head>

<div class="fixed-top">
  <div class="menu-btn">
    
<lord-icon
src="https://cdn.lordicon.com/msoeawqm.json"
trigger="hover"
delay="1"
colors="primary:#121331,secondary:#000000"
stroke="32"
style="width:50px;height:50px">
</lord-icon>
  </div>
  <div class="side-bar">
    <div class="close-btn">
      
<lord-icon
src="https://cdn.lordicon.com/rivoakkk.json"
trigger="hover"
colors="primary:#121331,secondary:#000000"
stroke="47"
style="width:45px;height:45px">
</lord-icon>
    </div>
    <div class="menu">
      <div class="item"><a href="home.php">
        <lord-icon
            src="https://cdn.lordicon.com/gmzxduhd.json"
            trigger="hover"
            delay="2000"
            colors="primary:#000,secondary:#000"
            stroke="30"
            style="width:40px;height:40px">
        </lord-icon><br>HOME</a></div>
        <div class="item"><a href="profil.php">
          <lord-icon
              src="https://cdn.lordicon.com/dxjqoygy.json"
              trigger="hover"
              delay="2000"
              colors="primary:#000,secondary:#000"
              stroke="30"
              style="width:40px;height:40px">
          </lord-icon><br>PROFILE</a></div>

    <div class="item"><a href="jurusan.php"><lord-icon
              src="https://cdn.lordicon.com/ssdupzsv.json"
              trigger="hover"
              delay="2000"
              colors="primary:#000000,secondary:#000000"
              stroke="30"
              style="width:40px;height:40px">
          </lord-icon><br>EXPERTISEPROGRAM</a></div>

          <div class="item"><a href="program.php"><lord-icon
          src="https://cdn.lordicon.com/ajyyzcwv.json"
          trigger="hover"
          delay="2000"
          colors="primary:#000000,secondary:#000000"
          stroke="30"
          style="width:40px;height:40px">
      </lord-icon><br>LEADING PROGRAM</a></div>

      <div class="item"><a href="publik.php"><lord-icon
        src="https://cdn.lordicon.com/zpxybbhl.json"
        trigger="hover"
        delay="2000"
        colors="primary:#000000,secondary:#000000"
        stroke="30"
        style="width:40px;height:40px"></lord-icon><br>PUBLIC SERVICES</a></div>
    </div>
  </div>
</div>
<body>
    <form action="" method="POST" autocomplete="off">
<section class="contactus">
          <div class="container">
              <div class="contactForm-a">
                <h2>feed back</h2>
                <div class="formBox">
                  <div class="inputBox w50">
                    <input name="nama" id="nama" type="text" required>
                    <span for="nama">First Name</span>
                  </div>
                  <div class="inputBox w50">
                    <input name="akhir" id="akhir" type="text" required>
                    <span for="akhir">Last Name</span>
                  </div> 
                  <div class="inputBox w50">
                    <input name="gmail" id="gmail" type="text" required>
                    <span for="gmail">Email Address</span>
                  </div> 
                  <div class="inputBox w50">
                    <input name="no" id="no" type="text" required>
                    <span for="no">Mobile Number</span>
                  </div> 
                  <div class="inputBox w100">
                    <textarea name="laporan" id="laporan" required></textarea>
                    <span for="laporan">write your message here...</span>
                  </div> 
                  <div class="inputBox w100">
                    <input type="submit" name="submit" value="send">
                  </div>
                </div>
              </div>
          </div>
      </section>
    </form>
    <div class="fixed-bottom">
          <div class="service">
            <div class="sre">
            <div class="toggle"><ion-icon name="add-outline"></ion-icon></div>
            <li style="--i:0;">
            <a href="index.php"><ion-icon name="home-outline"></ion-icon></a>
            </li>
            <li style="--i:1;">
            <a href="service.php"><ion-icon name="settings-outline"></ion-icon></a>
            </li>
            <li style="--i:2;">
              <a href="news.php"><ion-icon name="newspaper-outline"></ion-icon></a>
              </li>
              <li style="--i:3;">
                  <a href="studen.php"><ion-icon name="school-outline"></ion-icon></a>
                  </li>
              <li style="--i:4;">
                <a href="galery.php"><ion-icon name="person-circle-outline"></ion-icon></a>
                </li>
                
                </div>
          </div>
          </div>
</body>
<script>
    let li = document.querySelectorAll(".faq-text li");
for (var i = 0; i < li.length; i++) {
  li[i].addEventListener("click", (e)=>{
    let clickedLi;
    if(e.target.classList.contains("question-arrow")){
      clickedLi = e.target.parentElement;
    }else{
      clickedLi = e.target.parentElement.parentElement;
    }
    clickedLi.classList.toggle("showAnswer");
  });
}
    $(document).ready(function(){
     
      $('.sub-btn').click(function(){
        $(this).next('.sub-menu').slideToggle();
        $(this).find('.dropdown').toggleClass('rotate');
      });
      $('.menu-btn').click(function(){
        $('.side-bar').addClass('active');
        $('.menu-btn').css("visibility", "hidden");
      });

      $('.close-btn').click(function(){
        $('.side-bar').removeClass('active');
        $('.menu-btn').css("visibility", "visible");
      });
      
    });
</script>
<script>
    let toggle = document.querySelector('.toggle');
  let sre = document.querySelector('.sre');
  toggle.onclick =function(){
    sre.classList.toggle('ply')
  }
</script>
<script type="module" src="https://unpkg.com/ionicons@5.5.2/dist/ionicons/ionicons.esm.js"></script>
<script nomodule src="https://unpkg.com/ionicons@5.5.2/dist/ionicons/ionicons.js"></script>
<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/js/bootstrap.min.js" integrity="sha384-ChfqqxuZUCnJSK3+MXmPNIyE6ZbWh2IMqE241rYiqJxyMiZ6OW/JmZQ5stwEULTy" crossorigin="anonymous"></script>
<script src="https://cdn.lordicon.com/libs/mssddfmo/lord-icon-2.1.0.js"></script>
</html>