<!DOCTYPE HTML>
<html>
	<head>
		<title>Shailendra Singh Verma</title>
		<meta charset="utf-8" />
		<meta name="viewport" content="width=device-width, initial-scale=1, user-scalable=no" />
		<meta name="author" content="Shailendra Singh Verma"/>
		<meta name="keywords" content="Portfolio, Resume, CV, Website, Software, Developer, C++,HMI,Design,LinkedIn,Github">
		<meta name="description" content="Portfolio website of Shailendra Singh Verma, SW Engineer"/>
		<link rel="stylesheet" href="assets/css/main.css" />
		<link rel="apple-touch-icon" sizes="180x180" href="_favIcon/apple-touch-icon.png">
		<link rel="icon" type="image/png" sizes="32x32" href="_favIcon/favicon-32x32.png">
		<link rel="icon" type="image/png" sizes="16x16" href="_favIcon/favicon-16x16.png">
		<link rel="manifest" href="_favIcon/site.webmanifest">

		<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>
		<script src="https://cdn.jsdelivr.net/npm/sweetalert2@9"></script>
		
	</head>
	<body class="is-preload">

		<!-- Header -->
			<section id="header">
				<header>
					<span class="image avatar"><img src="images/avatar.jpg" alt="" /></span>
					<h1 id="logo"><a href="#">Shailendra Singh Verma</a></h1>
					<p>Software Engineer<br />
						C++/HMI</p>
				</header>
				<nav id="nav">
					<ul>
						<li><a href="#one" class="active">About me</a></li>
						<li><a href="#two">Skills</a></li>
						<li><a href="#three">Projects</a></li>
						<li><a href="#four">Contact</a></li>
						<li><a href="resume/Shailendra_CV_2020_SWE_Red.pdf" download="CV_Shailendra_Verma">Resume</a></li>
						
					</ul>
				</nav>
				<footer>
					<ul class="icons">
						<li><a href="https://www.linkedin.com/in/sh4ilendra/" class="icon brands fa-linkedin-in"><span class="label">LinkedIn</span></a></li>
						<li><a href="https://github.com/sh4ilendra" class="icon brands fa-github"><span class="label">Github</span></a></li>
						<li><a href="mailto:ssv.root@gmail.com" class="icon solid fa-envelope"><span class="label">Email</span></a></li>
					</ul>
				</footer>
			</section>

		<!-- Wrapper -->
			<div id="wrapper">

				<!-- Main -->
					<div id="main">

						<!-- One -->
							<section id="one">
								<div class="image main" data-position="center">
									<img src="images/banner.jpg" alt="Banner" />
								</div>
								<div class="container">
									<header class="major">
										<h3>Who am I <span class="icon solid fa-question"></span> </h3>
									</header>
									<p>
										I am a software engineer currently working in <a href="https://www.harman.com/">Harman International</a>, India. I have been involved in HMI design and development for some of the major automobile manufacturers in India and Germany. I am always eager to learn about new tools and technologies. 
									</p>
								</div>
							</section>

						<!-- Two -->
							<section id="two">
								<div class="container">
									<h3>What do I know <span class="icon solid fa-question"></span></h3>
									<p>Starting from my bachelors in Computer Science and Engineering to being working as a SW engineer, I have acquired expertise in below mentioned skills. I am constantly trying to improve my inherent skills along with passionately learning new tools and technologies.</p>
									<ul class="feature-icons">
										<li class="icon solid fa-laptop-code">C/C++, Qt/QML, HTML(Basics), MySQL(Basics), Java(Basics)</li>
										<li class="icon brands fa-linux">Linux essentials using Ubuntu</li>
										<li class="icon brands fa-git">Git/Gerrrit as VCS</li>
										<li class="icon solid fa-cogs">Data structures and algorithms</li>
										<li class="icon brands fa-android">Android app development</li>
										<li class="icon solid fa-pencil-ruler">HMI design and development</li>
									</ul>
								</div>
							</section>

						<!-- Three -->
							<section id="three">
								<div class="container">
									<h3>Lets do this</h3>
									<p>Integer eu ante ornare amet commetus vestibulum blandit integer in curae ac faucibus integer non. Adipiscing cubilia elementum integer. Integer eu ante ornare amet commetus.</p>
									<div class="features">
										<article>
											<a href="#" class="image"><img src="images/pic01.jpg" alt="" /></a>
											<div class="inner">
												<h4>Possibly broke spacetime</h4>
												<p>Integer eu ante ornare amet commetus vestibulum blandit integer in curae ac faucibus integer adipiscing ornare amet.</p>
											</div>
										</article>
										<article>
											<a href="#" class="image"><img src="images/pic02.jpg" alt="" /></a>
											<div class="inner">
												<h4>Terraformed a small moon</h4>
												<p>Integer eu ante ornare amet commetus vestibulum blandit integer in curae ac faucibus integer adipiscing ornare amet.</p>
											</div>
										</article>
										<article>
											<a href="#" class="image"><img src="images/pic03.jpg" alt="" /></a>
											<div class="inner">
												<h4>Snapped dark matter in the wild</h4>
												<p>Integer eu ante ornare amet commetus vestibulum blandit integer in curae ac faucibus integer adipiscing ornare amet.</p>
											</div>
										</article>
									</div>
								</div>
							</section>

						<!-- Four -->
							<section id="four">
								<div class="container">
									<h3>How to contact me  <span class="icon solid fa-question"></span></h3>
									<p>If you find my profile inetresting and want to discuss about some great oppotunities to work together, drop me a mail or connect with me on my LinkedIn <span class="icon regular fa-smile"></span></p>
									<form method="post" action="sendEmail.php">
										<div class="row gtr-uniform">
											<div class="col-6 col-12-xsmall"><input type="text" name="name" id="name" placeholder="Name" required /></div>
											<div class="col-6 col-12-xsmall"><input type="email" name="email" id="email" placeholder="Email" required/></div>
											<div class="col-12"><input type="text" name="subject" id="subject" placeholder="Subject" required/></div>
											<div class="col-12"><textarea name="msg" id="msg" placeholder="Message" rows="6" required></textarea></div>
											<div class="col-12">
												<ul class="actions">
													<li><input type="submit" class="primary" value="Send Message" name="submit" id="submit" /></li>
													<li><input type="reset" value="Reset Form" /></li>
												</ul>
											</div>
										</div>
									</form>
									<?php
										if(isset($_GET['sendEmail']))
										{  
											$resp = $_GET['sendEmail'];
											if($resp == 'success')
											{
									?>
									<script type="text/javascript">
										Swal.fire({
												icon: 'success',
												title: 'Success!',
												html: 'Email sent succesfully!<br>I\'ll contact you shortly...'
												})
									</script>
									<?php
										}
										else if($resp == 'failure')
										{?>
									<script type="text/javascript">
										Swal.fire({
												icon: 'error',
												title: 'Oops!!!',
												html: 'Something went wrong!<br>Reach out to me via mail: <b>ssv.root@gmail.com<b>'
												})
									</script>
									<?php
										}
									}
									?>
								</div>
							</section>
							
					</div>

				<!-- Footer -->
					<section id="footer">
						<div class="container">
							<ul class="copyright">
								<li>Copyright&copy; 2020 Shailendra. All rights reserved.</li>
							</ul>
						</div>
					</section>

			</div>

		<!-- Scripts -->
			<script src="assets/js/jquery.min.js"></script>
			<script src="assets/js/jquery.scrollex.min.js"></script>
			<script src="assets/js/jquery.scrolly.min.js"></script>
			<script src="assets/js/browser.min.js"></script>
			<script src="assets/js/breakpoints.min.js"></script>
			<script src="assets/js/util.js"></script>
			<script src="assets/js/main.js"></script>

	</body>
</html>