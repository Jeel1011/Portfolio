<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<title>my portfolio</title>
	<!-- box-icons / website for icons that i am using-->
	<link href='https://unpkg.com/boxicons@2.1.4/css/boxicons.min.css' rel='stylesheet'>
	<link rel="stylesheet" href="./style.css">
</head>
<body>
	<!-- header design -->
	<header class="header">
		<a href="#" class="logo">Portfolio</a>
		<i class='bx bx-menu' id="menu-icon"></i>
		<nav class="navbar">
			<a href="#home"class="active" >Home</a>
			<a href="#about">About</a>
			<a href="#services">Skills</a>
			<a href="#education">Education & Experiences</a>
			<a href="#portfolio">Projects</a>
			<a href="#contact">Contact</a>
		</nav>
	</header>

	
	<!-- home section design -->
<section class="home" id="home"> 
	<div class="home-content">
		<h3>Hello, It's Me</h3>
		<h1>Jeel Patel</h1>
		<h3>And I'm a <span class="multiple-text"></span></h3>
		<p>As a web developer, my focus is on creating polished, high-performance websites that elevate brands and enhance user experiences. My approach combines the latest technologies with best practices to deliver online solutions that make a lasting impact.</p>
		<br><br>
		<div class="social-media">
			<a href="mailto:jeel102003@gmail.com" target="_blank"><i class='bx bxl-gmail'></i></a>
			<!-- <a href="#"><i class='bx bxl-instagram' ></i></a> -->
			<a href="https://www.linkedin.com/in/jeel-patel-it-engineer/"><i class='bx bxl-linkedin' ></i></a>
			<a href="https://github.com/Jeel1011"><i class='bx bxl-github' ></i></a>
		</div>
	<a href="./images/IT_jeel patel_cv.pdf" class="btn" target="_blank" download>Download CV</a>
	</div>

</section>


<!-- about section design -->
<section class="about" id="about">
	<div class="about-img">
		<img src="./images/Jeel's Photo.jpg" alt="">
	</div>
	<div class="about-content">
		<h2 class="heading">About <span>ME</span></h2>
		<h3>FullStack Developer!</h3>
		<p >I am Jeel Patel, a dedicated Full Stack Web Developer with a BE in Information Technology from Saffrony Institute of Technology, and extensive hands-on experience in HTML, CSS, JavaScript, PHP, and Laravel. I have honed my skills through internships at ONGC and Multidots Solutions Pvt. Ltd., where I worked on various web development projects, enhancing both my technical and soft skills. Proficient in multiple programming languages and tools, I am passionate about continuous learning and applying my knowledge to create efficient, user-friendly web applications.
		</p>
		<!-- <a href="" class="btn">Read More</a> -->
	</div>
</section>


<!-- Services section design -->
<section class="services" id="services">
	<h2 class="heading">My <span>Skills</span> & <span> Achievement</span></h2>
	<div class="services-container">
		<div class="services-box">
			<i class='bx bx-code-alt' ></i>
			<h3>Tchnical Skills </h3>
		  	<p>HTML, CSS, SASS, LESS, JavaScript, jQuery, AJAX, reactJS, MongoDB, SQL, PHP, Laravel, C, basics of JAVA, WordPress. </p>
			<a href="https://drive.google.com/drive/folders/1ch8p6DuIrxbF0PphAwpQD_KxVDRnF3NC" target="_blank" class="btn">Course Certification</a>
		</div>


		<div class="services-box">
			<i class='bx bxs-paint' ></i>
			<h3>Soft Skills & Extra Activity</h3>
			<p>Stress Management, Time Management, Team Work, Adaptability, Positivity</p>
			<a href="https://drive.google.com/drive/folders/1gUO5KQD_HE-4MYFZPCjPikdADZNov0R8" target="_blank" class="btn">ExtraActivity Certificates</a>
		</div>
		
	</div>
</section>


<!-- education section design -->
<section class="education" id="education">
	<h2 class="heading">My <span>Education</span> & <span>Experiences</span></h2>
	<div class="education-container">
		<div class="education-box">
			<i class='bx bxs-graduation'></i>
			<h3>Degree Details</h3>
			<p>I graduated with a Bachelor of Engineering (B.E.) in Information Technology from Saffrony Institute of Technology, Mehsana, in June 2024.<br> I achieved a final CGPA of 9.12.</p>
			<a href="./images/FinalYearResult.png" class="btn" target="_blank" download>Download Marksheet</a>
		</div>

		<div class="education-box">
			<i class='bx bx-analyse' ></i>
			<h3>Experiences</h3>
			<p>ONGC Internship<br>During my valuable 15-day internship at ONGC, I immersed myself in the Laravel framework,a PHP-based web application development tool.</p>
			<a href="https://drive.google.com/drive/folders/1OtZaxl1JsTD_aN1DSmfzm5Ey0jeqJy59" class="btn" >Internship Certificate</a>
		</div>

		<div class="education-box">
			<i class='bx bx-analyse' ></i>
			<h3>Experiences</h3>
			<p>Multidots Solution pvt. Ltd. Internship<br>I worked as a WordPress Full Stack Developer intern. I gained hands-on experience with front-end and back-end technologies including HTML, CSS, JavaScript, React.js, PHP, jQuery, and MySQL. I also worked with tools like Photoshop, Figma, Gulp, and Grunt. </p>
			<a href="./images/[completed] Jeel Patel - Internship Letter.pdf" class="btn" download>Internship Certificate</a>
		</div>
		
	</div>
</section>



<!-- project section design -->
<section class="portfolio" id="portfolio">
	<h2 class="heading">Latest <span>Projects</span></h2>
	<div class="portfolio-container">
		<div class="portfolio-box">
			<img src="./images/bgLaptop.jpeg" alt=""> 
			<div class="portfolio-layer">
				<h4>Weather Forcasting</h4><br><br>
				<!-- <p>You will be get corrent weather Information about any location.</p> -->
				<div class="code">
					<a href="https://jeel1011.github.io/WeatherForcasting/"><i class='bx bx-link'></i></a>
					<a href="https://github.com/Jeel1011/WeatherForcasting"><i class='bx bx-edit'></i></a>
				</div>
			</div>  
		</div>

		<div class="portfolio-box">
			<img src="./images/bgLaptop.jpeg" alt=""> 
			<div class="portfolio-layer">
				<h4>QRCode Generator</h4>
				<!-- <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Velit, tempora.</p> -->
				<div class="code">
					<a href="https://jeel1011.github.io/QRcodeGenerator/"><i class='bx bx-link'></i></a> 
					<a href="https://github.com/Jeel1011/QRcodeGenerator.git"><i class='bx bx-edit'></i></a>
				</div>
			</div>  
		</div>

		<div class="portfolio-box">
			<img src="./images/bgLaptop.jpeg" alt=""> 
			<div class="portfolio-layer">
				<h4>ChatApp</h4><br><br>
				<!-- <p>You will be get corrent weather Information about any location.</p> -->
				<div class="code">
					<a href="https://github.com/Jeel1011/ChatApp.git"><i class='bx bx-edit'></i></a>
				</div>
			</div>  
		</div>

		<div class="portfolio-box">
			<img src="./images/bgLaptop.jpeg" alt=""> 
			<div class="portfolio-layer">
				<h4>Calculator-App</h4><br><br>
				<!-- <p>You will be get corrent weather Information about any location.</p> -->
				<div class="code">
					<a href="https://jeel1011.github.io/calculator-app/"><i class='bx bx-link'></i></a>
					<a href="https://github.com/Jeel1011/calculator-app.git"><i class='bx bx-edit'></i></a>
				</div>
			</div>  
		</div>

		<div class="portfolio-box">
			<img src="./images/bgLaptop.jpeg" alt=""> 
			<div class="portfolio-layer">
				<h4>Todo-App</h4><br><br>
				<!-- <p>You will be get corrent weather Information about any location.</p> -->
				<div class="code">
					<a href="https://jeel1011.github.io/todo-app/"><i class='bx bx-link'></i></a>
					<a href="https://github.com/Jeel1011/todo-app.git"><i class='bx bx-edit'></i></a>
				</div>
			</div>  
		</div>

		<div class="portfolio-box">
			<img src="./images/bgLaptop.jpeg" alt=""> 
			<div class="portfolio-layer">
				<h4>Clock-App</h4><br><br>
				<!-- <p>You will be get corrent weather Information about any location.</p> -->
				<div class="code">
					<a href="https://jeel1011.github.io/todo-app/"><i class='bx bx-link'></i></a>
					<a href="https://github.com/Jeel1011/clock-app.git"><i class='bx bx-edit'></i></a>
				</div>
			</div>  
		</div>

		<div class="portfolio-box">
			<img src="./images/bgLaptop.jpeg" alt=""> 
			<div class="portfolio-layer">
				<h4>Mobilecart (Shoppping-website)</h4><br><br>
				<!-- <p>You will be get corrent weather Information about any location.</p> -->
				<div class="code">
					<a href="https://github.com/Jeel1011/shopping-cart.git"><i class='bx bx-edit'></i></a>
				</div>
			</div>  
		</div>

		<div class="portfolio-box">
			<img src="./images/bgLaptop.jpeg" alt=""> 
			<div class="portfolio-layer">
				<h4>pod-request-access-landing</h4><br><br>
				<!-- <p>You will be get corrent weather Information about any location.</p> -->
				<div class="code">
					<a href="https://jeel1011.github.io/pod-request-access-landing/"><i class='bx bx-link'></i></a>
					<a href="https://github.com/Jeel1011/pod-request-access-landing.git"><i class='bx bx-edit'></i></a>
				</div>
			</div>  
		</div>

		<div class="portfolio-box">
			<img src="./images/bgLaptop.jpeg" alt=""> 
			<div class="portfolio-layer">
				<h4>jquery-faq-accordion</h4><br><br>
				<!-- <p>You will be get corrent weather Information about any location.</p> -->
				<div class="code">
					<a href="https://jeel1011.github.io/jquery-accordion/"><i class='bx bx-link'></i></a>
					<a href="https://github.com/Jeel1011/jquery-accordion.git"><i class='bx bx-edit'></i></a>
				</div>
			</div>  
		</div>
	</div>
</section>




<!-- contact section design -->
<section class="contact" id="contact">
	<h2 class="heading">Contact <span>Me!</span></h2>

	<form  action="" method="POST" >
		<div class="mainInputBox">
			<!-- Replace with your Access Key -->
			<!-- <input type="hidden" name="access_key" value="a5426a45-4fe7-417d-9424-c128475f2282"> -->

			<div class="input-box">
				<input type="text" placeholder="Full Name" id="name" name="name" required>

				<input type="email" placeholder="Email" id="email" name="email" required>
			</div>
			<div class="input-box">
				<input type="number" placeholder="Mobile number" id="phone" name="phone" required>

				<input type="text" placeholder="Email Subject" id="emailsub" name="emailsub" required>
			</div>
			
			<div class="input-box">
				<input type="text" name="message" id="message" placeholder="Your Message" required>
			</div>
			<!-- <textarea name="" id="message" cols="30" rows="10" placeholder="Your Message" name="yourmessage"></textarea> -->

			<button type="submit" value="Send Message" class="btn" name="submit">Send Message</button>
		</div>
		
	</form>
</section>



<!-- footer design -->
<footer class="footer">
	<div class="footer-text">
		<p>Copyright &copy; 2023 by Jeel Patel | All Rights Reserved</p>
		<div class="footer-iconTop">
			<a href="#home"><i class='bx bx-up-arrow-alt' ></i></a>
		</div>
	</div>
</footer>


<!-- scroll reveal -->

<script src="https://unpkg.com/scrollreveal"></script>

<!-- typed js -->

<script src="https://unpkg.com/typed.js@2.0.16/dist/typed.umd.js"></script>

<!-- custom js -->
<script src="./NewPortfolio.js"></script>
<script src="https://smtpjs.com/v3/smtp.js"></script>

<script>
	function submition(){
		message => alert('message sent succesfully')
	}
</script>
</body>
</html>




<?php

//Import PHPMailer classes into the global namespace.
//These must be at the top of your script, not inside a function.
use PHPMailer\PHPMailer\PHPMailer;
use PHPMailer\PHPMailer\SMTP;
use PHPMailer\PHPMailer\Exception;


if(isset($_POST['submit']))

{
    $name       = $_POST['name'];
    $email      = $_POST['email'];
    $phone      = $_POST['phone'];
	$emailsub   = $_POST['emailsub'];
    $message    = $_POST['message'];



//Load Composer's autoloader
require 'PHPMailer/PHPMailer/Exception.php';
require 'PHPMailer/PHPMailer/PHPMailer.php';
require 'PHPMailer/PHPMailer/SMTP.php';

//Create an instance; passing `true` enables exceptions
$mail = new PHPMailer(true);

try {
    //Server settings
    $mail->isSMTP();                                            //Send using SMTP
    $mail->Host       = 'smtp.gmail.com';                     //Set the SMTP server to send through
    $mail->SMTPAuth   = true;                                   //Enable SMTP authentication
    $mail->Username   = 'jeel102003@gmail.com';                     //SMTP username
    $mail->Password   = 'ocqwhyitslgfccrs';                               //SMTP password
    $mail->SMTPSecure = PHPMailer::ENCRYPTION_SMTPS;            //Enable implicit TLS encryption
    $mail->Port       = 465;                                    //TCP port to connect to; use 587 if you have set `SMTPSecure = PHPMailer::ENCRYPTION_STARTTLS`

    //Recipients
    $mail->setFrom('jeel102003@gmail.com', 'Mailer');
    $mail->addAddress('jeel102003@gmail.com', 'Portfolio Contact Form Details');     //Add a recipient


    //Content
    $mail->isHTML(true);                                  //Set email format to HTML
    $mail->Subject = 'Portfolio Contact Form Details';
    $mail->Body    = "Sender Name - $name <br> 
					Sender email - $email <br> 
					Sender phone no. - $phone <br> 
					Sender email Subject - $emailsub <br> 
					Sender message - $message";

    $mail->send();
    echo 'Message has been sent';
} catch (Exception $e) {
    echo "Message could not be sent. Mailer Error: {$mail->ErrorInfo}";
}
}


?>




<!--API KEY: B8B6D2149DAC768B10D6B8753926E7299320F1C126181CFA7FF9E0E89756F622845D6098030288E266E224E5341625AB -->


<!-- action="https://formspree.io/f/mgejyaja" method="POST" -->


<!-- onsubmit="sendemail() ; reset(); return false;" -->