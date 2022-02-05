<?php 
session_start();
if(!isset($_SESSION["login"]) ) {
	header("Location: admin.php");
	exit;
}
include "conection.php";

?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>DATA CONTACT US</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.4.1/jquery.min.js" integrity="sha512-bnIvzh6FU75ZKxp0GXLH9bewza/OIw6dLVh9ICg0gogclmYGguQJWl8U30WpbsGTqbIiAwxTsbe76DErLq5EDQ==" crossorigin="anonymous" referrerpolicy="no-referrer"></script>
    <script type="module" src="https://unpkg.com/ionicons@5.5.2/dist/ionicons/ionicons.esm.js"></script>
	<script nomodule src="https://unpkg.com/ionicons@5.5.2/dist/ionicons/ionicons.js"></script>
	<script src="https://cdn.lordicon.com/libs/mssddfmo/lord-icon-2.1.0.js"></script>
	<link rel="stylesheet" href="https://pro.fontawesome.com/releases/v5.10.0/css/all.css" integrity="sha384-AYmEC3Yw5cVb3ZcuHtOA93w35dYTsvhLPVnYs9eStHfGJvOvKxVfELGroGkvsg+p" crossorigin="anonymous"/>
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
			<a href="contact.php" class="aktif"><i class="fas fa-envelope-open-text"></i> Contact Us</a>
			<p class="title"><lord-icon
    src="https://cdn.lordicon.com/mecwbjnp.json"
    trigger="loop"
    colors="primary:#ffffff,secondary:#ffffff"
    stroke="70"
    style="width:45px;height:45px">
</lord-icon></p>
            <a href="upload.php"><i class="fas fa-file-upload"></i> UPLOAD</a>
<a href="guru.php"><i class="fas fa-server"></i> DATA & HAPUS</a>
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
		<div>
			<p><span id="time"></span>ADMIN SKANAWA</p>
		<br><br>
		<p>CONTACT US <lord-icon
                src="https://cdn.lordicon.com/rhvddzym.json"
                trigger="loop"
                delay="1000"
                colors="primary:#ffffff,secondary:#ffffff"
                stroke="80"
                style="width:70px;height:70px">
            </lord-icon></p></div>
			<div class="fixed">
               <tbody>
            <div id="clock" class="progress-clock">
                <button class="progress-clock__time-date" data-group="d" type="button">
                    <small data-unit="w">Sunday</small><br>
                    <span data-unit="mo">January</span>
                    <span data-unit="d">1</span>
                </button>
                <button class="progress-clock__time-digit" data-unit="h" data-group="h" type="button">12</button><span class="progress-clock__time-colon">:</span><button class="progress-clock__time-digit" data-unit="m" data-group="m" type="button">00</button><span class="progress-clock__time-colon">:</span><button class="progress-clock__time-digit" data-unit="s" data-group="s" type="button">00</button>
                <span class="progress-clock__time-ampm" data-unit="ap">AM</span>
                <svg class="progress-clock__rings" width="256" height="256" viewBox="0 0 256 256">
                    <defs>
                        <linearGradient id="pc-red" x1="1" y1="0.5" x2="0" y2="0.5">
                            <stop offset="0%" stop-color="hsl(343,90%,55%)" />
                            <stop offset="100%" stop-color="hsl(323,90%,55%)" />
                        </linearGradient>
                        <linearGradient id="pc-yellow" x1="1" y1="0.5" x2="0" y2="0.5">
                            <stop offset="0%" stop-color="hsl(43,90%,55%)" />
                            <stop offset="100%" stop-color="hsl(23,90%,55%)" />
                        </linearGradient>
                        <linearGradient id="pc-blue" x1="1" y1="0.5" x2="0" y2="0.5">
                            <stop offset="0%" stop-color="hsl(223,90%,55%)" />
                            <stop offset="100%" stop-color="hsl(203,90%,55%)" />
                        </linearGradient>
                        <linearGradient id="pc-purple" x1="1" y1="0.5" x2="0" y2="0.5">
                            <stop offset="0%" stop-color="hsl(283,90%,55%)" />
                            <stop offset="100%" stop-color="hsl(263,90%,55%)" />
                        </linearGradient>
                    </defs>
                    <!-- Days of Month -->
                    <g data-units="d">
                        <circle class="progress-clock__ring" cx="128" cy="128" r="74" fill="none" opacity="0.1" stroke="url(#pc-red)" stroke-width="12" />
                        <circle class="progress-clock__ring-fill" data-ring="mo" cx="128" cy="128" r="74" fill="none" stroke="url(#pc-red)" stroke-width="12" stroke-dasharray="465 465" stroke-dashoffset="465" stroke-linecap="round" transform="rotate(-90,128,128)" />
                    </g>
                    <!-- Hours of Day -->
                    <g data-units="h">
                        <circle class="progress-clock__ring" cx="128" cy="128" r="90" fill="none" opacity="0.1" stroke="url(#pc-yellow)" stroke-width="12" />
                        <circle class="progress-clock__ring-fill" data-ring="d" cx="128" cy="128" r="90" fill="none" stroke="url(#pc-yellow)" stroke-width="12" stroke-dasharray="565.5 565.5" stroke-dashoffset="565.5" stroke-linecap="round" transform="rotate(-90,128,128)" />
                    </g>
                    <!-- Minutes of Hour -->
                    <g data-units="m">
                        <circle class="progress-clock__ring" cx="128" cy="128" r="106" fill="none" opacity="0.1" stroke="url(#pc-blue)" stroke-width="12" />
                        <circle class="progress-clock__ring-fill" data-ring="h" cx="128" cy="128" r="106" fill="none" stroke="url(#pc-blue)" stroke-width="12" stroke-dasharray="666 666" stroke-dashoffset="666" stroke-linecap="round" transform="rotate(-90,128,128)" />
                    </g>
                    <!-- Seconds of Minute -->
                    <g data-units="s">
                        <circle class="progress-clock__ring" cx="128" cy="128" r="122" fill="none" opacity="0.1" stroke="url(#pc-purple)" stroke-width="12" />
                        <circle class="progress-clock__ring-fill" data-ring="m" cx="128" cy="128" r="122" fill="none" stroke="url(#pc-purple)" stroke-width="12" stroke-dasharray="766.5 766.5" stroke-dashoffset="766.5" stroke-linecap="round" transform="rotate(-90,128,128)" />
                    </g>
                </svg>
            </div>
        </tbody>
</div>
		</div>
		<div class="body">

<br>
<?php 
	$row = mysqli_query($conn, "SELECT * FROM contact ORDER BY id DESC;")
			?>
			<?php foreach ($row as $rows) : ?>
         <div class="komentar">
             <h2><?php echo $rows["name"]; ?><span>_<?php echo $rows["belakang"]; ?></span></h2>
             <h3><?php echo $rows["email"]; ?></h3>
			 <h3><?php echo $rows["mobile"]; ?></h3>
             <p><?php echo $rows["talk"]; ?></p>
         </div>   
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