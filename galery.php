<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>GALERY</title>
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/css/bootstrap.min.css" integrity="sha384-MCw98/SFnGE8fJT3GXwEOngsV7Zt27NXFoaoApmYm81iuXoPkFOJwJ8ERdknLPMO" crossorigin="anonymous">
    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.5.1/jquery.min.js" charset="utf-8"></script>
    <link rel="stylesheet" href="https://unpkg.com/swiper@7/swiper-bundle.min.css"/>
    <link rel="stylesheet"href="https://unpkg.com/swiper/swiper-bundle.min.css"/>
    <link rel="stylesheet" href="https://pro.fontawesome.com/releases/v5.10.0/css/all.css" integrity="sha384-AYmEC3Yw5cVb3ZcuHtOA93w35dYTsvhLPVnYs9eStHfGJvOvKxVfELGroGkvsg+p" crossorigin="anonymous"/>
    <link rel="stylesheet" href="css/galery.css">
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
      <div class="item"><a href="index.php">
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
<section class="header">
        <div class="title-wrapper">
          <h1 class="sweet-title">
            <span class="a" data-text="MEMBER">MEMBER</span>
            <span class="a" data-text="SKANAWA">SKANAWA</span>
          </h1>
          <span class="top-title a">Welcome to</span>
          <span class="bottom-title a">The frist step to better future</span>
          </div>
      </section>
      <div class="bdy-glmb">
        <div class="glmb">
          </div>
        </div>
        
        <tbody>
          <div class="tag">
            <h2><i class="fad fa-user-tie"></i>kepala sekolah<i class="fad fa-user-tie"></i></h2>
          </div>
          <?php 
          include 'conection.php';
          ?>
          <?php 
          $rows = mysqli_query($conn, "SELECT * FROM guru,jabatan WHERE guru.id_jabatan = jabatan.id_jabatan AND nama_jabatan = 'KEPALA SEKOLAH' ORDER BY id DESC;");
          ?>
          <?php foreach ($rows as $row) : ?>
                  <figure class="snip0056 brake">
                    <figcaption>
                      <h2><?php echo $row["name"]; ?></h2>
                      <p><?php echo $row["tugas"]; ?></p>
                      <div class="icons"><a href="<?php echo $row["instagram"]; ?>"><i class="fab fa-instagram"></i></a><a href="<?php echo $row["facebook"]; ?>"><i class="fab fa-facebook-f"></i></a><a href="<?php echo $row["twiter"]; ?>"><i class="fab fa-twitter"></i></a></div>
                    </figcaption><img src="guru/<?php echo $row["image"]; ?>" alt="sample8" />
                    <div class="position"><?php echo $row["nama_jabatan"]; ?></div>
                  </figure>
                  <?php endforeach; ?>
          <div class="tag">
            <h2><i class="fad fa-chalkboard-teacher"></i>guru<i class="fad fa-chalkboard-teacher"></i></h2>
          </div>
          <?php 
          
          $rows = mysqli_query($conn, "SELECT * FROM guru,jabatan WHERE guru.id_jabatan = jabatan.id_jabatan AND nama_jabatan = 'GURU MAPEL' ORDER BY id DESC;");
          
          ?>
          <?php foreach ($rows as $row) : ?>
                  <figure class="snip0056 yellow">
                    <figcaption>
                      <h2><?php echo $row["name"]; ?></h2>
                      <p><?php echo $row["tugas"]; ?></p>
                      <div class="icons"><a href="<?php echo $row["instagram"]; ?>"><i class="fab fa-instagram"></i></a><a href="<?php echo $row["facebook"]; ?>"><i class="fab fa-facebook-f"></i></a><a href="<?php echo $row["twiter"]; ?>"><i class="fab fa-twitter"></i></a></div>
                    </figcaption><img src="guru/<?php echo $row["image"]; ?>" alt="sample8" />
                    <div class="position"><?php echo $row["nama_jabatan"]; ?></div>
                  </figure>
                  <?php endforeach; ?>
          
                  <div class="tag">
            <h2><i class="fad fa-motorcycle"></i>guru tbsm<i class="fad fa-motorcycle"></i></h2>
          </div>
                  <?php 
          
          $rows = mysqli_query($conn, "SELECT * FROM guru,jabatan WHERE guru.id_jabatan = jabatan.id_jabatan AND nama_jabatan = 'GURU TBSM' ORDER BY id DESC;");
          
          ?>
          <?php foreach ($rows as $row) : ?>
            
                  <figure class="snip0056 blue">
                    <figcaption>
                    <h2><?php echo $row["name"]; ?></h2>
                      <p><?php echo $row["tugas"]; ?></p>
                      <div class="icons"><a href="<?php echo $row["instagram"]; ?>"><i class="fab fa-instagram"></i></a><a href="<?php echo $row["facebook"]; ?>"><i class="fab fa-facebook-f"></i></a><a href="<?php echo $row["twiter"]; ?>"><i class="fab fa-twitter"></i></a></div>
                    </figcaption><img src="guru/<?php echo $row["image"]; ?>" alt="sample8" />
                    <div class="position"><?php echo $row["nama_jabatan"]; ?></div>
                  </figure>
                  <?php endforeach; ?>
                  <div class="tag">
            <h2><i class="fad fa-desktop"></i>guru tkj<i class="fad fa-desktop"></i></h2>
          </div>
                  <?php 
          
          $rows = mysqli_query($conn, "SELECT * FROM guru,jabatan WHERE guru.id_jabatan = jabatan.id_jabatan AND nama_jabatan = 'GURU TKJ' ORDER BY id DESC;");
          
          ?>
                  <?php foreach ($rows as $row) : ?>
                    
                  <figure class="snip0056 red">
                    <figcaption>
                    <h2><?php echo $row["name"]; ?></h2>
                      <p><?php echo $row["tugas"]; ?></p>
                      <div class="icons"><a href="<?php echo $row["instagram"]; ?>"><i class="fab fa-instagram"></i></a><a href="<?php echo $row["facebook"]; ?>"><i class="fab fa-facebook-f"></i></a><a href="<?php echo $row["twiter"]; ?>"><i class="fab fa-twitter"></i></a></div>
                    </figcaption><img src="guru/<?php echo $row["image"]; ?>" alt="sample8" />
                    <div class="position"><?php echo $row["nama_jabatan"]; ?></div>
                  </figure>
                  <?php endforeach; ?>
                  <div class="tag">
            <h2><i class="fad fa-code"></i>guru rpl<i class="fad fa-code"></i></h2>
          </div>
                  <?php 
          
          $rows = mysqli_query($conn, "SELECT * FROM guru,jabatan WHERE guru.id_jabatan = jabatan.id_jabatan AND nama_jabatan = 'GURU RPL' ORDER BY id DESC;");
          
          ?>
                  <?php foreach ($rows as $row) : ?>
                    
                  <figure class="snip0056 magneta">
                    <figcaption>
                    <h2><?php echo $row["name"]; ?></h2>
                      <p><?php echo $row["tugas"]; ?></p>
                      <div class="icons"><a href="<?php echo $row["instagram"]; ?>"><i class="fab fa-instagram"></i></a><a href="<?php echo $row["facebook"]; ?>"><i class="fab fa-facebook-f"></i></a><a href="<?php echo $row["twiter"]; ?>"><i class="fab fa-twitter"></i></a></div>
                    </figcaption><img src="guru/<?php echo $row["image"]; ?>" alt="sample8" />
                    <div class="position"><?php echo $row["nama_jabatan"]; ?></div>
                  </figure>
                  <?php endforeach; ?>
                  <div class="tag">
            <h2><i class="fad fa-pencil-ruler"></i>guru animasi<i class="fad fa-pencil-ruler"></i></h2>
          </div>
                  <?php 
          
          $rows = mysqli_query($conn, "SELECT * FROM guru,jabatan WHERE guru.id_jabatan = jabatan.id_jabatan AND nama_jabatan = 'GURU ANIM' ORDER BY id DESC;");
          
          ?>
          <?php foreach ($rows as $row) : ?>
          
                  <figure class="snip0056 yellow">
                    <figcaption>
                    <h2><?php echo $row["name"]; ?></h2>
                      <p><?php echo $row["tugas"]; ?></p>
                      <div class="icons"><a href="<?php echo $row["instagram"]; ?>"><i class="fab fa-instagram"></i></a><a href="<?php echo $row["facebook"]; ?>"><i class="fab fa-facebook-f"></i></a><a href="<?php echo $row["twiter"]; ?>"><i class="fab fa-twitter"></i></a></div>
                    </figcaption><img src="guru/<?php echo $row["image"]; ?>" alt="sample8" />
                    <div class="position"><?php echo $row["nama_jabatan"]; ?></div>
                  </figure>
                  <?php endforeach; ?>
                  <div class="tag">
            <h2><i class="fad fa-bolt"></i>guru elind<i class="fad fa-bolt"></i></h2>
          </div>
                  <?php 
          
          $rows = mysqli_query($conn, "SELECT * FROM guru,jabatan WHERE guru.id_jabatan = jabatan.id_jabatan AND nama_jabatan = 'GURU ELIND' ORDER BY id DESC;");
          
          ?>
          <?php foreach ($rows as $row) : ?>
          
                  <figure class="snip0056 blue">
                    <figcaption>
                    <h2><?php echo $row["name"]; ?></h2>
                      <p><?php echo $row["tugas"]; ?></p>
                      <div class="icons"><a href="<?php echo $row["instagram"]; ?>"><i class="fab fa-instagram"></i></a><a href="<?php echo $row["facebook"]; ?>"><i class="fab fa-facebook-f"></i></a><a href="<?php echo $row["twiter"]; ?>"><i class="fab fa-twitter"></i></a></div>
                    </figcaption><img src="guru/<?php echo $row["image"]; ?>" alt="sample8" />
                    <div class="position"><?php echo $row["nama_jabatan"]; ?></div>
                  </figure>
                  <?php endforeach; ?>
          </tbody>
<br><br><br><br><br><br>
<footer>
  <div class="wave">
  <div class="wave" id="w1"></div>
  <div class="wave" id="w2"></div>
  <div class="wave" id="w3"></div>
  <div class="wave" id="w4"></div>
  </div>
  <ul class="social_icon">
  <li><a href="#"><i class="fab fa-facebook"></i></a></li>
  <li><a href="#"><i class="fab fa-instagram"></i></a></li>
  <li><a href="#"><i class="fab fa-twitter"></i></a></li>
  <li><a href="#"><i class="fab fa-linkedin-in"></i></a></li>
  </ul>
  <ul class="bar-ftr">
  <li><a href="">Home</a></li>
  <li><a href="">About</a></li>
  <li><a href="">Feed Back</a></li>
  <li><a href="">Contact us</a></li>
  </ul>
  <p><i class="fad fa-copyright"></i>SMKN_9_MALANG</p>
  </footer>
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
              <a href="feed.php"><ion-icon name="megaphone-outline"></ion-icon></a>
              </li>
          </div>
    </div>
    </div>
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
    sre.classList.toggle('ply')}
</script>
    </script>
</body>
<script src="https://cdn.lordicon.com/libs/mssddfmo/lord-icon-2.1.0.js"></script>
<script type="module" src="https://unpkg.com/ionicons@5.5.2/dist/ionicons/ionicons.esm.js"></script>
<script nomodule src="https://unpkg.com/ionicons@5.5.2/dist/ionicons/ionicons.js"></script>
<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/js/bootstrap.min.js" integrity="sha384-ChfqqxuZUCnJSK3+MXmPNIyE6ZbWh2IMqE241rYiqJxyMiZ6OW/JmZQ5stwEULTy" crossorigin="anonymous"></script>
</html>