<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/css/bootstrap.min.css" integrity="sha384-MCw98/SFnGE8fJT3GXwEOngsV7Zt27NXFoaoApmYm81iuXoPkFOJwJ8ERdknLPMO" crossorigin="anonymous">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.4.0/css/font-awesome.min.css" integrity="sha512-ZV9KawG2Legkwp3nAlxLIVFudTauWuBpC10uEafMHYL0Sarrz5A7G79kXh5+5+woxQ5HM559XX2UZjMJ36Wplg==" crossorigin="anonymous" referrerpolicy="no-referrer" />
    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.5.1/jquery.min.js" charset="utf-8"></script>
    <link rel="stylesheet" href="css/studen.css">
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
            <span data-text="SKANAWA">SKANAWA</span>
            <span data-text="STUDENT">STUDENT</span>
            <span data-text="ACHIEVEMENT">ACHIEVEMENT</span>
          </h1>
          <span class="top-title">Welcome to</span>
          <span class="bottom-title">The First Step For Better Future</span>
          </div>
      </section>
      <div class="bdy-glmb">
        <div class="glmb">
          </div>
        </div>
        
        <?php 
        include "conection.php";
        ?>
        <?php 
$rows = mysqli_query($conn, "SELECT * FROM upload,news WHERE upload.id_news = news.id_news AND jenis = 'STUDENT' ORDER BY id DESC ");
?>
    <?php foreach ($rows as $row) : ?>
  <div class="blog-card">
      <div class="meta">
        <div class="photo" style="background-image: url('images/<?php echo $row["image"]; ?>')" height="800px" width="540px"></div>
        <ul class="details">
          <li class="author"><a href="#"><?php echo $row["name"]; ?></a></li>
          <li class="date"><?php echo $row["date"]; ?></li>
          
        </ul>
      </div>
      <div class="description">
        <h1><?php echo $row["title"]; ?></h1>
        <h2><?php echo $row["sub_title"]; ?></h2>
        <p><?php echo $row["isi"]; ?></p>
        <p class="read-more">
          <a href="#">Read More</a>
        </p>
      </div>
    </div><?php endforeach; ?>
      
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
          <a href="galery.php"><ion-icon name="person-circle-outline"></ion-icon></a>
          </li>
          <li style="--i:4;">
            <a href="feed.php"><ion-icon name="megaphone-outline"></ion-icon></a>
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