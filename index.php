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
    <html lang="en" dir="ltr">
      <head>
        <meta charset="utf-8">
       <title>SKANAWA</title>
       <meta name="viewport" content="width=device-width, initial-scale=1.0">
<!----------------------------------------------------------------------------------------------------->
                                        <!-- FRAME WORK-->
<!----------------------------------------------------------------------------------------------------->
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/Swiper/4.3.5/css/swiper.min.css" integrity="sha512-FCU4ZL4ubM4eDxvQQ9SqMmH+UQ9t0noKHj/cfky4whdWnyBgp+NF2ykUBgsyx8Iv+XtM3aXZ8jmFs4uLnT+Vng==" crossorigin="anonymous" referrerpolicy="no-referrer" />
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.2/css/all.min.css"/>
<link href='https://unpkg.com/boxicons@2.0.7/css/boxicons.min.css' rel='stylesheet'>
<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
<link rel="stylesheet" href="https://pro.fontawesome.com/releases/v5.10.0/css/all.css" integrity="sha384-AYmEC3Yw5cVb3ZcuHtOA93w35dYTsvhLPVnYs9eStHfGJvOvKxVfELGroGkvsg+p" crossorigin="anonymous"/>
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.2/css/all.min.css"/>
<link rel="stylesheet"href="https://unpkg.com/swiper/swiper-bundle.min.css"/>
<link href="https://unpkg.com/aos@2.3.1/dist/aos.css" rel="stylesheet">
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.13.1/css/all.min.css"/>
<link rel="stylesheet" href="css/home.css">
<!----------------------------------------------------------------------------------------------------->
                                       <!-- CDN SCRIPT -->
<!----------------------------------------------------------------------------------------------------->
<script type="module" src="https://unpkg.com/ionicons@5.5.2/dist/ionicons/ionicons.esm.js"></script>
<script nomodule src="https://unpkg.com/ionicons@5.5.2/dist/ionicons/ionicons.js"></script>  
<script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.3.1/jquery.min.js" integrity="sha512-+NqPlbbtM1QqiK8ZAo4Yrj2c4lNQoGv8P79DPtKzj++l5jnN39rHA/xsqn8zE9l0uSoxaCdrOgFs6yjyfbBxSg==" crossorigin="anonymous" referrerpolicy="no-referrer"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.5.1/jquery.min.js" charset="utf-8"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/jqueryui/1.10.3/jquery-ui.min.js" integrity="sha512-kHKdovQFIwzs2NABJSo9NgJKZOrRqLPSoqIumoCkaIytTRGgsddo7d0rFyyh8RvYyNNKcMF7C9+4sM7YhMylgg==" crossorigin="anonymous" referrerpolicy="no-referrer"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/2.1.3/jquery.min.js" integrity="sha512-egJ/Y+22P9NQ9aIyVCh0VCOsfydyn8eNmqBy+y2CnJG+fpRIxXMS6jbWP8tVKp0jp+NO5n8WtMUAnNnGoJKi4w==" crossorigin="anonymous" referrerpolicy="no-referrer"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/Swiper/4.3.5/js/swiper.min.js" integrity="sha512-NdZyIQYjul6RuB0vCoq9ec+xqTO2riVTZAZf9YM3BHkkcJxFTq7z9FAK3PXP+XYs5zQRuOycmL5GdwD85t2T+Q==" crossorigin="anonymous" referrerpolicy="no-referrer"></script>
<script src="https://unpkg.com/aos@2.3.1/dist/aos.js"></script>
<script src="https://cdn.lordicon.com/libs/mssddfmo/lord-icon-2.1.0.js"></script>
</head>
<!----------------------------------------------------------------------------------------------------->
                                      <!-- CONTENT -->
<!----------------------------------------------------------------------------------------------------->

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
            <div class="item active"><a href="#">
              <lord-icon
                  src="https://cdn.lordicon.com/gmzxduhd.json"
                  trigger="loop"
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
<div data-aos="fade-up">
  <section class="header">
    <div class="title-wrapper">
      <h1 class="sweet-title">
        <span data-text="SKANAWA">SKANAWA</span>
        <span data-text="SMKN 9 MALANG">SMKN 9 MALANG</span>
      </h1>
      <span class="top-title">Welcome to</span>
      <span class="bottom-title">The First Step For Better Future</span>
      </div>
  </section>
</div>
<div class="bdy-glmb">
<div class="glmb">
  </div>
</div>
  <br><br><br>
<div
style="--swiper-navigation-color: #fff; --swiper-pagination-color: #fff"
class="swiper mySwiper"
>
<div
  class="parallax-bg"
  style="
    background-image: url('image/dampak2.png');
    background-color: transparent;
  "
  data-swiper-parallax="-23%"
></div>
<div class="swiper-wrapper crsl">
  <div class="swiper-slide">
    <div class="title" data-swiper-parallax="-300">Slide 1</div>
    <div class="subtitle" data-swiper-parallax="-200">Subtitle</div>
    <div class="text" data-swiper-parallax="-100">
      <p>
        Lorem ipsum dolor sit amet, consectetur adipiscing elit. Aliquam
        dictum mattis velit, sit amet faucibus felis iaculis nec. Nulla
        laoreet justo vitae porttitor porttitor. Suspendisse in sem justo.
        Integer laoreet magna nec elit suscipit, ac laoreet nibh euismod.
        Aliquam hendrerit lorem at elit facilisis rutrum. Ut at
        ullamcorper velit. Nulla ligula nisi, imperdiet ut lacinia nec,
        tincidunt ut libero. Aenean feugiat non eros quis feugiat.
      </p>
    </div>
  </div>
  <div class="swiper-slide">
    <div class="title" data-swiper-parallax="-300">Slide 2</div>
    <div class="subtitle" data-swiper-parallax="-200">Subtitle</div>
    <div class="text" data-swiper-parallax="-100">
      <p>
        Lorem ipsum dolor sit amet, consectetur adipiscing elit. Aliquam
        dictum mattis velit, sit amet faucibus felis iaculis nec. Nulla
        laoreet justo vitae porttitor porttitor. Suspendisse in sem justo.
        Integer laoreet magna nec elit suscipit, ac laoreet nibh euismod.
        Aliquam hendrerit lorem at elit facilisis rutrum. Ut at
        ullamcorper velit. Nulla ligula nisi, imperdiet ut lacinia nec,
        tincidunt ut libero. Aenean feugiat non eros quis feugiat.
      </p>
    </div>
  </div>
  <div class="swiper-slide">
    <div class="title" data-swiper-parallax="-300">Slide 3</div>
    <div class="subtitle" data-swiper-parallax="-200">Subtitle</div>
    <div class="text" data-swiper-parallax="-100">
      <p>
        Lorem ipsum dolor sit amet, consectetur adipiscing elit. Aliquam
        dictum mattis velit, sit amet faucibus felis iaculis nec. Nulla
        laoreet justo vitae porttitor porttitor. Suspendisse in sem justo.
        Integer laoreet magna nec elit suscipit, ac laoreet nibh euismod.
        Aliquam hendrerit lorem at elit facilisis rutrum. Ut at
        ullamcorper velit. Nulla ligula nisi, imperdiet ut lacinia nec,
        tincidunt ut libero. Aenean feugiat non eros quis feugiat.
      </p>
    </div>
  </div>
</div>
<div class="swiper-button-next"></div>
<div class="swiper-button-prev"></div>
<div class="swiper-pagination"></div>
</div>
<div data-aos="fade-up">
    <div class="kartu">
      <?php 
          include 'koneksisiswa.php';
          ?>
          
          <?php 
			
      $rows = mysqli_query($conn, "SELECT * FROM upload,news WHERE upload.id_news = news.id_news AND jenis = 'NEWS' ORDER BY id DESC LIMIT 3")

			?>
      <?php foreach ($rows as $row) : ?>
      <div class="krt">
        <div class="ktk">
          <div class="cntnt">
              <h2><i class="fal fa-trophy-alt"></i></h2>
              <h3>
                  <i class="fal fa-paperclip"></i>POSTED IN STUDENT ACHIEVEMENT
              </h3>
              <p><?php echo $row["isi"]; ?></p>
              <a href="studen.php"><i class="fal fa-books"></i> READ MORE <i class="fal fa-book-open"></i></a>
            </div>
        </div>
      </div>
      <?php endforeach; ?>
      </div>
      </div>
</div>
<div data-aos="fade-right"data-aos-offset="300"data-aos-easing="ease-in-sine">
<div class="container-c">
    <div class="topic"><i class="fal fa-building"></i> SCHOOL PROFILE</div>
    <div class="content">
      <input type="radio" name="slider" checked id="home">
      <input type="radio" name="slider" id="blog">
      <input type="radio" name="slider" id="help">
      <input type="radio" name="slider" id="code">
      <input type="radio" name="slider" id="about">
      <div class="list">
        <label for="home" class="home">
          <i class="fal fa-graduation-cap"></i>
        <span class="title">PROFILE</span>
      </label>
      <label for="blog" class="blog">
        <span class="icon"><i class="fal fa-medal"></i></span>
        <span class="title">VISION & MISSION</span>
      </label>
      <label for="help" class="help">
        <span class="icon"><i class="fal fa-books"></i></span>
        <span class="title">HISTORY</span>
      </label>
      <label for="code" class="code">
        <span class="icon"><i class="fal fa-bullseye-arrow"></i></span>
        <span class="title">PURPOSE</span>
      </label>
      <label for="about" class="about">
        <span class="icon"><i class="fal fa-school"></i></span>
        <span class="title">FACILITIES</span>
      </label>
      <div class="slider"></div>
    </div>
      <div class="text-content">
        <div class="home text">
          <div class="title"><i class="fal fa-graduation-cap"></i></div>
          <p>SMK Negeri 9 Malang terletak di Jl. Samporna Cemorokandang Malang,  yang merupakan tempat yang sangat strategis karena dekat perbatasan Kabupaten Malang, dimana akomodasi maupun transportasi dapat dijangkau dengan mudah oleh masyarakat.<br><br>SMK Negeri 9 Malang memiliki akreditasi “A” kategori Amat Baik. Dengan luasan area sekolah 1,8 Hektar, SMK Negeri 9 Malang memiliki 27 rombongan belajar , dimana  kegiatan belajar mengajar dilakukan pada pagi hari.<br><br>SMK Negeri 9 Malang menyelenggarakan aktivitas pengembangan diri siswa dilakukan untuk kelas X dan XI berupa ekstra kurikuler sesuai bakat dan kemampuan siswa. Beberapa prestasi membanggakan dari keikutsertaan dalam lomba-lomba dan kejuaraan telah diraih oleh SMK Negeri 9 Malang. Pengembangan diri untuk kelas XII adalah berupa pengayaan / bimbingan belajar untuk mata pelajaran Ujian Nasional yaitu Matematika, Bahasa Inggris dan Bahasa Indonesia.</p>
        </div>
        <div class="blog text">
          <div class="title"><i class="fal fa-medal"></i></div>
            <p>Visi Sekolah
  <br><br>
              MEWUJUDKAN LEMBAGA PENDIDIKAN DAN PELATIHAN KEJURUAN, YANG MENGHASILKAN LULUSAN YANG BERAKHLAK MULIA, KOMPETEN DAN BERWAWASAN LIGKUNGAN , SERTA MAMPU BERSAING DI TINGKAT NASIONAL MAUPUN INTERNASIONAL.
  <br><br>
              Misi Sekolah
  <br><br>
              Mewujudkan Tenaga Pendidik, Kependidikan , dan lulusan yang berbudi pekerti dan berakhlak mulia <br>
              Mengelola manajemen sekolah dengan standar ISO 9001 : 2015. <br>
              Melaksanakan sistem pendidikan dan mengupayakan mutu layanan pendidikan sesuai tuntutan masyarakat dengan memanfaatkan teknologi informasi dan komunikasi <br>
              Mewujudkan lingkungan sekolah menuju sekolah adiwiyata serta mengembangkan nilai-nilai kewirausahaan warga sekolah.</p>
          </div>
          <div class="help text">
            <div class="title"><i class="fal fa-books"></i></div>
            <p>Secara geografis SMK Negeri  9 Malang berada di bagian timur Kota Malang, 6 Km arah timur Kota Malang. Lokasi sekolah tepatnya berada di Kelurahan Cemorokandang, Kecamatan Kedungkandang, Kota Malang dengan tempat belajar terdapat 2 lokasi. Kampus pusat terdapat di Jl. Sampurno,Cemorokandang Kota Malang, telepon 0341 - 727998.
  <br><br>
              Sekolah yang memiliki luas lahan 1,8 hektar. ini didirikan tahun 2006 dan telah menerima peserta didik pada tahun pelajaran 2006/2007. Pendirian SMK Negeri 9 Malang secara formal telah diterbitkannya SK Wali Kota Malang  No 359/2005 Tanggal 25-11-2005 Tentang Pendidirian SMK Negeri 9 Malang.
  <br><br>            
              SMK Negeri 9 Malang sebagai salah satu lembaga penyelenggara pendidikan merasa berkewajiban untuk berperan serta membekali tamatannya dengan kecakapan hidup (life skill) secara integrative, yang memadukan potensi generik dan spesifik guna memecahkan dan mengatasi problema hidup.
  <br><br>            
              Kecakapan hidup yang mestinya dimiliki oleh setiap tamatan yang akan terjun ke masyarakat tersebut antara lain, Kecakapan mengenal diri ( personal skill), kecakapan berpikir rasional (thinking skill), kecakapan social (social skill), kecakapan akademik (academic skill) dan kecakapan kejuruan (vocational skill).</p>
          </div>
          <div class="code text">
            <div class="title"><i class="fal fa-bullseye-arrow"></i></div>
            <p><i class="fal fa-stars"></i> Melakukan pembiasaan untuk menguatkan pendidikan karakter bagi semua warga sekolah. <br>
              <i class="fal fa-stars"></i> Merencanakan, Melaksanakan dan Mengevaluasi sistem penjaminan mutu berlangsung dengan baik <br>
              <i class="fal fa-stars"></i> Melakukan penyelarasan kurikulum sekolah dengan dunia usaha dan dunia industri <br>
              <i class="fal fa-stars"></i> Melaksanakan pembelajaran sesuai dengan standar mutu DU/DI <br>
              <i class="fal fa-stars"></i> Melakukan pembiasaan melestarikan lingkungan hidup guna mencapai keselarasan ekosistem sekolah <br>
              <i class="fal fa-stars"></i> Menumbuh kembangkan jiwa kewirausahaan bagi warga</p>
          </div>
          <div class="about text">
            <div class="title"><i class="fal fa-school"></i></div>
            <p>
              Sarana pembelajaran bisa dikatan cukup baik di ruang kelas. Tempat duduk dan meja siswa yang ada di dalam ruangan ada dalam kondisi cukup baik. Untuk media pembelajaran sudah memadai, antara lain terdapat Lab. Bahasa, Lab. Komputer, dan Bengkel. Jumlah buku semakin lengkap. <br>
              <i class="fal fa-chalkboard-teacher"></i>
              <br>
              Prasarana penunjang pembelajaran pada semua kelas tersedia dan sesuai dengan kondisi masing-masing. Adapun keadaannya adalah :
  <br>
  <i class="fal fa-chalkboard"></i>  Ruang kelas 98% baik, 2% kuranag baik <br>
  <i class="fal fa-hotel"></i>  Ruang kantor 100% baik <br>
  <i class="fal fa-hospital"></i>  Ruang UKS belum memadai <br>
  <i class="fal fa-book-reader"></i>  Ruang Perpustakaan 90% baik <br>
  <i class="fal fa-industry-alt"></i>  Ruang Lab. baik <br>
  <i class="fal fa-toilet"></i> Keadaan Kamar Kecil 85% baik <br>
  <i class="fal fa-mosque"></i>  Masjid (Tempat Ibadah) 100% baik <br>
  <i class="fal fa-basketball-ball"></i>  Tempat olahraga 75% baik
            </p>
        </div>
      </div>
    </div>
  </div>
</div>
<div data-aos="zoom-in-down">
<div class="sldr">
  <div class="blog-slider">
    <div class="blog-slider__wrp swiper-wrapper">
      <?php 

      $rows = mysqli_query($conn, "SELECT * FROM upload,news WHERE upload.id_news = news.id_news AND jenis = 'NEWS'  ORDER BY id DESC LIMIT 3");
      
      ?>
       <?php foreach ($rows as $row) : ?>
            <div class="blog-slider__item swiper-slide">
              <div class="blog-slider__img">
                
                <img src="images/<?php echo $row["image"]; ?>" width="300px" heigh="300px"  alt="">
              </div>
              <div class="blog-slider__content">
                <span class="blog-slider__code"><?php echo $row["date"]; ?></span>
                <div class="blog-slider__title"><?php echo $row["title"]; ?></div>
                <div class="blog-slider__text"><?php echo $row["isi"]; ?></div>
                <a href="news.php" class="blog-slider__button">READ MORE</a>
              </div>
            </div>
            <?php endforeach; ?>
    </div>
    <div class="blog-slider__pagination"></div>
  </div>
</div>
</div>
<div data-aos="fade-down"data-aos-easing="linear"data-aos-duration="1500">
  <div class="hero">
    <div class="box-buton">
      <button id="hero_btn1" onclick="openQUALITY()"><i class="fad fa-award"></i> QUALITY TARGET</button>
      <button id="hero_btn2" onclick="openSPECIAL()"><i class="fad fa-briefcase"></i> SPECIAL JOB FAIR</button>
      <button id="hero_btn3" onclick="openPRODUCTION()"><i class="fad fa-warehouse-alt"></i> PRODUCTION UNIT</button>
    </div>
    <div id="uraian1" class="uraian">
      <div class="uraian-left">
        <h1>QUALITY TARGET</h1>
        <p>Memberikan arahan bagi seluruh pendidik dan tenaga kependidikan SMK Negeri 9 Malang dalam penerapan sistem yang efektif dan memenuhi peraturan yang berlaku untuk melakukan perbaikan secara berkelanjutan terhadap kinerja SMK Negeri 9 Malang, menjamin kepuasan masyarakat dan pihak-pihak yang berkepentingan...</p>
        <a href="publik.php">LEARNED MORE</a>
      </div>
      <div class="uraian-right">
        <img src="image/—Pngtree—cute valentine gnome holding strawberry_7193241.png" alt="">
      </div>
    </div>

    <div id="uraian2" class="uraian">
      <div class="uraian-left">
        <h1>SPECIAL JOB FAIR</h1>
        <p>Bursa Kerja Khusus (BKK) adalah sebuah lembaga yang dibentuk di Sekolah Menengah Kejuruan Negeri dan Swasta, sebagai unit pelaksana yang memberikan pelayanan dan informasi lowongan kerja, pelaksana pemasaran, penyaluran dan penempatan tenaga kerja...</p>
        <a href="publik.php">LEARNED MORE</a>
      </div>
      <div class="uraian-right">
        <img src="image/—Pngtree—cute valentine gnome holding strawberry_7193241.png" alt="">
      </div>
    </div>

    <div id="uraian3" class="uraian">
      <div class="uraian-left">
        <h1>PRODUCTION UNIT</h1>
        <p>Program kerja UPJ SMKN 9 Malang saat ini melipiuti bidang produksi, yaitu menyediakan jasa sablon print DTG (Direct to Garment) dengan kualitas produksi menggunakan mesin terbaik...</p>
        <a href="publik.php">LEARNED MORE</a>
      </div>
      <div class="uraian-right">
        <img src="image/—Pngtree—cute valentine gnome holding strawberry_7193241.png" alt="">
      </div>
    </div>
  </div>
</div>

<div data-aos="fade-down">
<div class="container-a">
  <div class="card-a">
    <div class="icon-a"><ion-icon name="library-outline"></ion-icon></div>
    <div class="content-a">
      <h2>TITLE</h2>
      <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Excepturi debitis quidem adipisci sequi similique esse veritatis aspernatur, cum eveniet officia sunt error labore fugiat facilis sed laborum dignissimos pariatur iste!</p>
    </div>
  </div>
  <div class="card-a">
    <div class="icon-a"><ion-icon name="color-palette-outline"></ion-icon></div>
    <div class="content-a">
      <h2>TITLE</h2>
      <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Excepturi debitis quidem adipisci sequi similique esse veritatis aspernatur, cum eveniet officia sunt error labore fugiat facilis sed laborum dignissimos pariatur iste!</p>
    </div>
  </div>
  <div class="card-a">
    <div class="icon-a"><ion-icon name="easel-outline"></ion-icon></div>
    <div class="content-a">
      <h2>TITLE</h2>
      <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Excepturi debitis quidem adipisci sequi similique esse veritatis aspernatur, cum eveniet officia sunt error labore fugiat facilis sed laborum dignissimos pariatur iste!</p>
    </div>
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
        <a href=""><ion-icon name="school-outline"></ion-icon></a>
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
<!----------------------------------------------------------------------------------------------------->
                                      <!-- INTERNAL SCRIPT -->
<!----------------------------------------------------------------------------------------------------->
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

    var swiper = new Swiper('.blog-slider', {
      spaceBetween: 30,
      effect: 'fade',
      loop: true,
      mousewheel: {
        invert: false,
      },
      // autoHeight: true,
      pagination: {
        el: '.blog-slider__pagination',
        clickable: true,
      }
    });
    var uraian1 = document.getElementById("uraian1");
    var uraian2 = document.getElementById("uraian2");
    var uraian3 = document.getElementById("uraian3");
    var hero_btn1 = document.getElementById("hero_btn1");
    var hero_btn2 = document.getElementById("hero_btn2");
    var hero_btn3 = document.getElementById("hero_btn3");

    function openQUALITY(){
      uraian1.style.transform = "translateX(0)";
      uraian2.style.transform = "translateX(100%)";
      uraian3.style.transform = "translateX(100%)";
      hero_btn1.style.color = "#e601c0";
      hero_btn2.style.color = "#000";
      hero_btn3.style.color = "#000";
    }
    function openSPECIAL(){
      uraian1.style.transform = "translateX(100%)";
      uraian2.style.transform = "translateX(0)";
      uraian3.style.transform = "translateX(100%)";
      hero_btn2.style.color = "#e601c0";
      hero_btn1.style.color = "#000";
      hero_btn3.style.color = "#000";
    }
    function openPRODUCTION(){
      uraian1.style.transform = "translateX(100%)";
      uraian2.style.transform = "translateX(100%)";
      uraian3.style.transform = "translateX(0)";
      hero_btn3.style.color = "#e601c0";
      hero_btn2.style.color = "#000";
      hero_btn1.style.color = "#000";
    }

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

var swiper = new Swiper(".mySwiper", {
        speed: 600,
        parallax: true,
        pagination: {
          el: ".swiper-pagination",
          clickable: true,
        },
        navigation: {
          nextEl: ".swiper-button-next",
          prevEl: ".swiper-button-prev",
        },
      });

</script>
<script>
  AOS.init();


  let toggle = document.querySelector('.toggle');
  let sre = document.querySelector('.sre');
  toggle.onclick =function(){
    sre.classList.toggle('ply')
  }
</script>
</body>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ka7Sk0Gln4gmtz2MlQnikT1wXgYsOg+OMhuP+IlRH9sENBO0LRn5q+8nbTov4+1p" crossorigin="anonymous"></script>
</html>