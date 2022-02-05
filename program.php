<?php 

include 'conection.php';

error_reporting(0); 

if (isset($_POST['submit'])) { 
	$name = $_POST['name'];
  $namea = $_POST['namea'];
	$email = $_POST['email'];
  $mobile = $_POST['mobile'];
	$comment = $_POST['comment']; 

	$sql = "INSERT INTO comment (name, namea, mobile, email, comment)
			VALUES ('$name','$namea','$mobile', '$email', '$comment')";
	$result = mysqli_query($conn, $sql);
	if ($result) {
		echo "<script>alert('Komentar Anda Berhasil Ditambahkan.')</script>";
	} else {
		echo "<script>alert('Komentar Ditolak.')</script>";
	}
}

?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>LEADING PROGRAM</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
    <link rel="stylesheet" href="https://pro.fontawesome.com/releases/v5.10.0/css/all.css" integrity="sha384-AYmEC3Yw5cVb3ZcuHtOA93w35dYTsvhLPVnYs9eStHfGJvOvKxVfELGroGkvsg+p" crossorigin="anonymous"/>
    <link rel="stylesheet" href="https://unpkg.com/swiper/swiper-bundle.min.css"/>
    <link rel="stylesheet" href="css/program.css">
    <script type="module" src="https://unpkg.com/ionicons@5.5.2/dist/ionicons/ionicons.esm.js"></script>
<script nomodule src="https://unpkg.com/ionicons@5.5.2/dist/ionicons/ionicons.js"></script>
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

          <div class="item active"><a href="#"><lord-icon
          src="https://cdn.lordicon.com/ajyyzcwv.json"
          trigger="loop"
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
            <span data-text="LEADING PROGRAM">LEADING PROGRAM</span>
          </h1>
          <span class="top-title">Welcome to</span>
          <span class="bottom-title">The First Step For Better Future</span>
          </div>
      </section>
      <div class="bdy-glmb">
        <div class="glmb">
          </div>
        </div>

        <div id="carouselExampleDark" class="carousel carousel-dark slide" data-bs-ride="carousel">
            <div class="carousel-indicators">
              <button type="button" data-bs-target="#carouselExampleDark" data-bs-slide-to="0" class="active" aria-current="true" aria-label="Slide 1"></button>
              <button type="button" data-bs-target="#carouselExampleDark" data-bs-slide-to="1" aria-label="Slide 2"></button>
              <button type="button" data-bs-target="#carouselExampleDark" data-bs-slide-to="2" aria-label="Slide 3"></button>
            </div>
            <div class="carousel-inner">
              <div class="carousel-item active" data-bs-interval="10000">
                <img src="image/dampak2.png" class="d-block w-100" alt="">
                <div class="carousel-caption d-none d-md-block">
                  <h5>First slide label</h5>
                  <p>Some representative placeholder content for the first slide.</p>
                </div>
              </div>
              <div class="carousel-item" data-bs-interval="2000">
                <img src="image/dampak2.png" class="d-block w-100" alt="">
                <div class="carousel-caption d-none d-md-block">
                  <h5>Second slide label</h5>
                  <p>Some representative placeholder content for the second slide.</p>
                </div>
              </div>
              <div class="carousel-item">
                <img src="image/dampak2.png" class="d-block w-100" alt="">
                <div class="carousel-caption d-none d-md-block">
                  <h5>Third slide label</h5>
                  <p>Some representative placeholder content for the third slide.</p>
                </div>
              </div>
            </div>
            <button class="carousel-control-prev" type="button" data-bs-target="#carouselExampleDark" data-bs-slide="prev">
              <span class="carousel-control-prev-icon" aria-hidden="true"></span>
              <span class="visually-hidden">Previous</span>
            </button>
            <button class="carousel-control-next" type="button" data-bs-target="#carouselExampleDark" data-bs-slide="next">
              <span class="carousel-control-next-icon" aria-hidden="true"></span>
              <span class="visually-hidden">Next</span>
            </button>
          </div>


        <div class="isi">
            <div class="box-buton">
                <button id="btn_1" onclick="openA()">HONDA CLASS<br><lord-icon src="https://cdn.lordicon.com/mletffyr.json"trigger="hover"delay="1000"colors="primary:#482896,secondary:#482896"stroke="50"style="width:50px;height:50px"></lord-icon></button>
                <button id="btn_2" onclick="openB()">AXIOO CLASS PROGRAM<br><lord-icon src="https://cdn.lordicon.com/anihkfxp.json"trigger="hover"delay="1000"colors="primary:#482896,secondary:#482896"stroke="50"style="width:50px;height:50px"></lord-icon></button>
                <button id="btn_3" onclick="openC()">ORACLE ACADEMY<br><lord-icon src="https://cdn.lordicon.com/dtgezzsi.json"trigger="hover"delay="1000"colors="primary:#482896,secondary:#482896"stroke="50"style="width:50px;height:50px"></lord-icon></button>
              </div>
                <div id="A" class="tampilan">
                    <div class="tampilan-left">
                      <h1>lorem ipsum</h1>
                      <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Quas sapiente soluta veritatis saepe asperiores dignissimos, nihil quae earum reiciendis vel aspernatur at numquam totam culpa consequuntur officia, eos laboriosam repudiandae!</p>
                      
                    </div>
                    <div class="tampilan-right">
                      <img src="image/—Pngtree—cute valentine gnome holding strawberry_7193241.png" alt="">
                    </div>
                  </div>
              
                  <div id="B" class="tampilan">
                    <div class="tampilan-left">
                      <h1>SPECIAL JOB FAIR</h1>
                      <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Dolores voluptate tenetur quidem corrupti neque illo aliquid dolorem ipsam, voluptates nisi possimus deleniti labore commodi obcaecati cumque dolore eaque atque id.</p>
                      
                    </div>
                    <div class="tampilan-right">
                      <img src="image/—Pngtree—cute valentine gnome holding strawberry_7193241.png" alt="">
                    </div>
                  </div>
              
                  <div id="C" class="tampilan">
                    <div class="tampilan-left">
                      <h1>lorem ipsum</h1>
                      <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Atque delectus perferendis exercitationem, impedit molestiae eius minima quibusdam voluptates cum? Cumque fugit obcaecati impedit. Obcaecati, voluptate eius? Saepe corrupti deserunt ipsam!</p>
                    </div>
                    <div class="tampilan-right">
                      <img src="image/—Pngtree—cute valentine gnome holding strawberry_7193241.png" alt="">
                    </div>
                  </div>
              </div>
              <div class="isi">
                <div class="box-buton-a">
                  <button id="btn_4" onclick="openD()">MIKROTIK ACADEMY<br><lord-icon src="https://cdn.lordicon.com/gqzfzudq.json"trigger="hover"delay="1000"colors="primary:#482896,secondary:#482896"stroke="50"style="width:50px;height:50px"></lord-icon></button>
                  <button id="btn_5" onclick="openE()">ANIMATION VILLAGE<br><lord-icon src="https://cdn.lordicon.com/fgkmrslx.json"trigger="hover"delay="1000"colors="primary:#482896,secondary:#482896"stroke="50"style="width:50px;height:50px"></lord-icon></button>
                </div>
                <div id="D" class="tampilan">
                  <div class="tampilan-right">
                    <img src="image/—Pngtree—cute valentine gnome holding strawberry_7193241.png" alt="">
                  </div>
                  <div class="tampilan-left">
                    <h1>lorem ipsum</h1>
                    <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Expedita a perspiciatis aspernatur neque maiores odit distinctio non beatae necessitatibus sunt, porro quasi adipisci et maxime vel minus ducimus temporibus voluptas?</p>
                  </div>
                </div>


                <div id="E" class="tampilan">
                  <div class="tampilan-right">
                    <img src="image/—Pngtree—cute valentine gnome holding strawberry_7193241.png" alt="">
                  </div>
                  <div class="tampilan-left">
                    <h1>lorem ipsum</h1>
                    <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Expedita a perspiciatis aspernatur neque maiores odit distinctio non beatae necessitatibus sunt, porro quasi adipisci et maxime vel minus ducimus temporibus voluptas?</p>
                  </div>
                </div>

              </div>
        <br><br><br><br><br>  
        <div data-aos="fade-up"data-aos-anchor-placement="top-bottom">
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
          <div class="coment"> 
          <div class="title">
          <!-- <h2>GIVE YOUR COMENT</h2> -->
          </div>
          <div class="coment-box">
          <div class="komentar form">
            <h3>send comment</h3>
            <form action="" method="POST" autocomplete="off">
              <div class="formBox">
                <div class="row50">
                  <div class="inputBox">
                  <span for="name">Frist Name</span>
                  <input type="text" name="name" id="name" placeholder="Budi">
                </div>
                <div class="inputBox">
                <span for="namea">Last Name</span>
                <input type="text" name="namea" id="namea" placeholder="Hermawan">
              </div>
              </div>
              <div class="row50">
                <div class="inputBox">
                <span for="email">EMAIL</span>
                <input type="text" name="email" id="email" placeholder="Budi@gmail.com">
              </div>
              
              <div class="inputBox">
                <span for="mobile">Nomor Telefon</span>
                <input type="text" name="mobile" id="mobile" placeholder="08-xxxxx-xxxx">
              </div>
              </div>
              <div class="row100">
              <div class="inputBox">
              <span for="comment">Message</span>
              <textarea name="comment" id="comment" placeholder="tell me about this page"></textarea>
            </div>
            </div>
            <div class="row100">
              <div class="inputBox">
                <input type="submit" name="submit"value="send">
              </div>
            </div>
              </div>
            </form>
          </div>
          <div class="komentar info">
            <h3>contack info</h3>
            <div class="infoBox">
              <div>
              <span><ion-icon name="location"></ion-icon></span>
              <p>alamat dari sekolah<br>MALANG</p>
            </div>
            <div>
            <span><ion-icon name="mail"></ion-icon></span>
            <a href="mailto:sekolah@gmail.com">sekolah@gmail.com</a>
          </div>
          <div>
            <span><ion-icon name="call"></ion-icon></span>
            <a href="tel:08-xxxxx-xxxx">08-xxxxx-xxxx</a>
          </div>
          <ul class="sci">
            <li><a href="#"><ion-icon name="logo-facebook"></ion-icon></a></li>
            <li><a href="#"><ion-icon name="logo-instagram"></ion-icon></a></li>
            <li><a href="#"><ion-icon name="logo-youtube"></ion-icon></a></li>
          </ul>
          </div>
          </div>
          <div class="komentar map">
            <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3951.165587118891!2d112.687477!3d-7.9818289!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x2dd628945c99f363%3A0xb0681c1ba2eabe58!2sSMK%20Negeri%209%20Kota%20Malang!5e0!3m2!1sid!2sid!4v1642502557463!5m2!1sid!2sid" width="100%" height="100%"></iframe> 
          </div> 
          </div>
          </div>
        </footer>
        </div>
        <div class="fixed-bottom">
          <div class="service">
            <div class="sre">
            <div class="toggle"><ion-icon name="add-outline"></ion-icon></div>
            <li style="--i:0;">
            <a href="service.php"><ion-icon name="settings-outline"></ion-icon></a>
            </li>
            <li style="--i:1;">
              <a href="news.php"><ion-icon name="newspaper-outline"></ion-icon></a>
              </li>
                <li style="--i:2;">
                  <a href="studen.php"><ion-icon name="school-outline"></ion-icon></a>
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
<script src="https://cdn.lordicon.com/libs/mssddfmo/lord-icon-2.1.0.js"></script>
<script src="https://unpkg.com/swiper/swiper-bundle.min.js"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.5.1/jquery.min.js" charset="utf-8"></script>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ka7Sk0Gln4gmtz2MlQnikT1wXgYsOg+OMhuP+IlRH9sENBO0LRn5q+8nbTov4+1p" crossorigin="anonymous"></script>
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
    var A = document.getElementById("A");
    var B = document.getElementById("B");
    var C = document.getElementById("C");
    var btn_1 = document.getElementById("btn_1");
    var btn_2 = document.getElementById("btn_2");
    var btn_3 = document.getElementById("btn_3");

    function openA(){
      A.style.transform = "translateX(0)";
      B.style.transform = "translateX(100%)";
      C.style.transform = "translateX(100%)";
      btn_1.style.color = "#e601c0";
      btn_2.style.color = "#000";
      btn_3.style.color = "#000";
    }
    function openB(){
      A.style.transform = "translateX(100%)";
      B.style.transform = "translateX(0)";
      C.style.transform = "translateX(100%)";
      btn_1.style.color = "#000";
      btn_2.style.color = "#e601c0";
      btn_3.style.color = "#000";
    }
    function openC(){
      A.style.transform = "translateX(100%)";
      B.style.transform = "translateX(100%)";
      C.style.transform = "translateX(0)";
      btn_1.style.color = "#000";
      btn_2.style.color = "#000";
      btn_3.style.color = "#e601c0";
    }
    var D = document.getElementById("D");
    var E = document.getElementById("E");
    var btn_4 = document.getElementById("btn_4");
    var btn_5 = document.getElementById("btn_5");
    function openD(){
      D.style.transform = "translateX(0)";
      E.style.transform = "translateX(100%)";
      btn_4.style.color = "#e601c0";
      btn_5.style.color = "#000";
    }
    function openE(){
      D.style.transform = "translateX(100%)";
      E.style.transform = "translateX(0)";
      btn_4.style.color = "#000";
      btn_5.style.color = "#e601c0";
    }


   
  let toggle = document.querySelector('.toggle');
  let sre = document.querySelector('.sre');
  toggle.onclick =function(){
    sre.classList.toggle('ply')
  }

</script>
</html>