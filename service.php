<?php 

include 'conection.php';

error_reporting(0); 

if (isset($_POST['submit'])) { 
	$name = $_POST['name'];
  $belakang = $_POST['belakang'];
	$email = $_POST['email'];
  $mobile = $_POST['mobile'];
	$talk = $_POST['talk']; 

	$sql = "INSERT INTO contact (name, belakang,email , mobile, talk)
			VALUES ('$name','$belakang','$email','$mobile' , '$talk')";
	$result = mysqli_query($conn, $sql);
	if ($result) {
		echo "<script>alert('pesan telah dikirim.')</script>";
	} else {
		echo "<script>alert('pesan Ditolak.')</script>";
	}
}

?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>SERVICE</title>
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
            <span data-text="SERVICES">SERVICES</span>
          </h1>
          <span class="top-title">Welcome to</span>
          <span class="bottom-title">The frist step to better future</span>
          </div>
      </section>
      <div class="bdy-glmb">
        <div class="glmb">
          </div>
        </div>

        <section class="text-gray-700 body-font">
          <div class="container mx-auto flex px-5 py-24 md:flex-row flex-col items-center">
            <div class="lg:flex-grow md:w-1/2 lg:pr-24 md:pr-16 flex flex-col md:items-start md:text-left mb-16 md:mb-0 items-center text-center">
              <h1 class="title-font sm:text-4xl text-3xl mb-4 font-medium text-gray-900">Before they sold out
                <br class="hidden lg:inline-block">readymade gluten
              </h1>
              <p class="mb-8 leading-relaxed">Copper mug try-hard pitchfork pour-over freegan heirloom neutra air plant cold-pressed tacos poke beard tote bag. Heirloom echo park mlkshk tote bag selvage hot chicken authentic tumeric truffaut hexagon try-hard chambray.</p>
            </div>
            <div class="lg:max-w-lg lg:w-full md:w-1/2 w-5/6">
              <img class="object-cover object-center rounded" alt="hero" src="image/—Pngtree—cute valentine gnome holding strawberry_7193241.png">
            </div>
          </div>
        </section>


        <section class="contactus">
            <div class="container">
                <div class="contactInfo">
                    <div>
                        <h2>CONTACT INFO</h2>
                        <ul class="info">
                          <li>
                            <span><img src="image/location.png" alt=""></span>
                            <span>MALANG <br>alamat <br>364783</span></li>
                              <li>
                            <span><img src="image/mail.png"></span>
                            <span>contact_us@gmail.com</span>
                              </li>
                              <li>
                                <span><img src="image/call.png"></span>
                                <span>xxx-xxxx-xxxx</span>
                                  </li>
                            </ul>
                    </div>
                    <ul class="sci">
                      <li><a href=""><img src="image/1.png" alt=""></a></li>
                      <li><a href=""><img src="image/2.png" alt=""></a></li>
                      <li><a href=""><img src="image/3.png" alt=""></a></li>
                      <li><a href=""><img src="image/4.png" alt=""></a></li>
                      <li><a href=""><img src="image/5.png" alt=""></a></li>
                    </ul>
                </div>
                <div class="contactForm">
                  <h2>send a massage</h2>
                  <form action="" method="POST" autocomplete="off">
                    <div class="formBox">
                      <div class="inputBox w50">
                        <input name="name" id="name" type="text" required>
                        <span for="name">First Name</span>
                      </div>
                      <div class="inputBox w50">
                        <input name="belakang" id="belakang" type="text" required>
                        <span for="belakang">Last Name</span>
                      </div> 
                      <div class="inputBox w50">
                        <input name="email" id="email" type="email" required>
                        <span for="email">Email Address</span>
                      </div> 
                      <div class="inputBox w50">
                        <input name="mobile" id="mobile" type="text" required>
                        <span for="mobile">Mobile Number</span>
                      </div> 
                      <div class="inputBox w100">
                        <textarea name="talk" id="talk"  required></textarea>
                        <span for="talk">write your message here...</span>
                      </div> 
                      <div class="inputBox w100">
                        <input type="submit" name="submit" value="send">
                      </div>
                    </div>
                  </form>
                </div>
            </div>
        </section>
        <div class="bdy">
          <div class="container-b">
                  <h2>FAQ</h2>
                  <div class="accordion">
                      <h5>What is Lorem Ipsum</h5>
                      <i class="fas fa-minus"></i>
                      <i class="fas fa-plus"></i>
                  </div>
                  <div class="panal">
                      <p>Lorem, ipsum dolor sit amet consectetur adipisicing elit. Quas sit perferendis quod, ab voluptates facere repellat, debitis sapiente id minus aut placeat ipsam asperiores tempora odio modi itaque iusto sunt. Lorem ipsum dolor sit amet consectetur adipisicing elit. Deserunt, dolorem?</p>
                  </div>
          
                  <div class="accordion">
                      <h5>Why We USe Lorem Ipsum?</h5>
                      <i class="fas fa-minus"></i>
                      <i class="fas fa-plus"></i>
                  </div>
                  <div class="panal">
                      <p>Lorem, ipsum dolor sit amet consectetur adipisicing elit. Quas sit perferendis quod, ab voluptates facere repellat, debitis sapiente id minus aut placeat ipsam asperiores tempora odio modi itaque iusto sunt. Lorem ipsum dolor sit amet consectetur adipisicing elit. Deserunt, dolorem?</p>
                  </div>
          
                  <div class="accordion">
                      <h5>Where it use?</h5>
                      <i class="fas fa-minus"></i>
                      <i class="fas fa-plus"></i>
                  </div>
                  <div class="panal">
                      <p>Lorem, ipsum dolor sit amet consectetur adipisicing elit. Quas sit perferendis quod, ab voluptates facere repellat, debitis sapiente id minus aut placeat ipsam asperiores tempora odio modi itaque iusto sunt. Lorem ipsum dolor sit amet consectetur adipisicing elit. Deserunt, dolorem?</p>
                  </div>
          
                  <div class="accordion">
                      <h5>From where can we find it?</h5>
                      <i class="fas fa-minus"></i>
                      <i class="fas fa-plus"></i>
                  </div>
                  <div class="panal">
                      <p>Lorem, ipsum dolor sit amet consectetur adipisicing elit. Quas sit perferendis quod, ab voluptates facere repellat, debitis sapiente id minus aut placeat ipsam asperiores tempora odio modi itaque iusto sunt. Lorem ipsum dolor sit amet consectetur adipisicing elit. Deserunt, dolorem?</p>
                  </div>
          
                  
              </div>
              
          </div>
        
    
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



var acordion = document.getElementsByClassName('accordion');

var i;
var len = acordion.length;
for(i = 0; i<len; i++){
acordion[i].addEventListener('click', function(){
this.classList.toggle('active-b');
var panal = this.nextElementSibling;
if(panal.style.maxHeight){
    panal.style.maxHeight = null;
}else{
    panal.style.maxHeight = panal.scrollHeight + 'px';
}
})
}
</script>
<script>
let toggle = document.querySelector('.toggle');
  let sre = document.querySelector('.sre');
  toggle.onclick =function(){
    sre.classList.toggle('ply')}
</script>
</body>
<script type="module" src="https://unpkg.com/ionicons@5.5.2/dist/ionicons/ionicons.esm.js"></script>
<script nomodule src="https://unpkg.com/ionicons@5.5.2/dist/ionicons/ionicons.js"></script>
<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/js/bootstrap.min.js" integrity="sha384-ChfqqxuZUCnJSK3+MXmPNIyE6ZbWh2IMqE241rYiqJxyMiZ6OW/JmZQ5stwEULTy" crossorigin="anonymous"></script>
<script src="https://cdn.lordicon.com/libs/mssddfmo/lord-icon-2.1.0.js"></script>
</html>