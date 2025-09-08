<?php
include('../../database/dbconnection.php');
?>


<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">

   <!--=============== REMIXICONS ===============-->
   <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/remixicon/4.2.0/remixicon.css">

	<!-- My CSS -->
	<link rel="stylesheet" href="../../assets/css/style.css">

	<title>AdminHub</title>

   <style>
      /* Slideshow Styles */
      .slideshow-container {
         position: relative;
         max-width: 100%;
         height: 400px;
         margin: 20px auto;
         border-radius: 1rem;
         overflow: hidden;
         box-shadow: 0 4px 12px rgba(0,0,0,0.1);
      }

      .slide {
         display: none;
         height: 100%;
      }

      .slide img {
         width: 100%;
         height: 100%;
         object-fit: cover;
         border-radius: 1rem;
      }

      .fade {
         animation: fadeEffect 1.5s;
      }

      @keyframes fadeEffect {
         from {opacity: 0.4}
         to {opacity: 1}
      }

      /* Dots (Indicators) */
      .dots {
         text-align: center;
         margin-top: 10px;
      }

      .dot {
         height: 12px;
         width: 12px;
         margin: 0 4px;
         background-color: #bbb;
         border-radius: 50%;
         display: inline-block;
         transition: background-color 0.3s;
         cursor: pointer;
      }

      .active-dot {
         background-color: #003366;
      }

      /* Dashboard Buttons */
      .dashboard-buttons {
         display: flex;
         flex-wrap: wrap;
         gap: 1.7rem;
         margin-top: 1.5rem;
         justify-content: center;
      }

      .dashboard-buttons a {
         padding: 2rem 4rem;
         background-color: #003366;
         color: #fff;
         text-decoration: none;
         border-radius: 0.8rem;
         transition: 0.3s;
         display: inline-flex;
         align-items: center;
         gap: 0.5rem;
         font-size: 1.1rem;
      }

      .dashboard-buttons a:hover {
         background-color: #0055aa;
      }

      .dashboard-buttons i {
         font-size: 1.4rem;
      }
   </style>
</head>
<body>

	<!-- SIDEBAR -->
	<section id="sidebar">
		<a href="#" class="brand">
			<i class='bx bxs-smile'></i>
			<span class="text">AdminHub</span>
		</a>
		<ul class="side-menu top">
			<li class="active">
                  <a href="AdminDashboard.php" class="sidebar__link active-link">
                     <i class="ri-dashboard-horizontal-fill"></i>
                     <span>Dashboard</span>
                  </a>
			</li>
			<li>
				<a href="AdminAuditDatabank.php">
					<i class="ri-database-fill"></i>
					<span class="text">UCX Data Bank</span>
				</a>
			</li>
			<li>
				<a href="#">
					<i class="ri-ubuntu-fill"></i>
					<span class="text">UCX Connect</span>
				</a>
			</li>
			<li>
				<a href="AdminAuditForm.php">
					<i class="ri-survey-fill"></i>
					<span class="text">Unify Audit System (UAS)</span>
				</a>
			</li>
			<li>
				<a href="AdminHrRecords.php">
					<i class="ri-folder-history-fill"></i>
					<span class="text">HR Records</span>
				</a>
			</li>
		</ul>
		<ul class="side-menu">
			<li>
				<a href="AdminTools.php">
					<i class="ri-settings-3-fill"></i>
					<span class="text">Admin Tools</span>
				</a>
			</li>
			<li>
				<a href="#" class="logout">
					<i class='bx bxs-log-out-circle' ></i>
					<span class="text">Logout</span>
				</a>
			</li>
		</ul>
	</section>
	<!-- SIDEBAR -->

	<!-- CONTENT -->
	<section id="content">
		<!-- NAVBAR -->
		<nav>
			<i class='bx bx-menu' ></i>
			<a href="#" class="nav-link">Categories</a>
			<form action="#">
				<div class="form-input">
					<input type="search" placeholder="Search...">
					<button type="submit" class="search-btn"><i class='bx bx-search' ></i></button>
				</div>
			</form>
			<input type="checkbox" id="switch-mode" hidden>
			<label for="switch-mode" class="switch-mode"></label>
			<a href="#" class="notification">
				<i class='bx bxs-bell' ></i>
				<span class="num">8</span>
			</a>
			<a href="#" class="profile">
				<img src="img/people.png">
			</a>
		</nav>
		<!-- NAVBAR -->

		<!-- MAIN -->
		<main>
			<div class="head-title">
				<div class="left">
					<h1>Dashboard</h1>
					<ul class="breadcrumb">
						<li>
							<a href="#">Dashboard</a>
						</li>
						<li><i class='bx bx-chevron-right' ></i></li>
						<li>
							<a class="active" href="#">Home</a>
						</li>
					</ul>
				</div>
				<a href="#" class="btn-download">
					<i class='bx bxs-cloud-download' ></i>
					<span class="text">Download PDF</span>
				</a>
			</div>

			<!-- Inserted Slideshow -->
			<div class="slideshow-container">
				<div class="slide fade">
					<img src="../../assets/img/1.jfif" alt="Slideshow Image 1">
				</div>
				<div class="slide fade">
					<img src="../../assets/img/2.jfif" alt="Slideshow Image 2">
				</div>
				<div class="slide fade">
					<img src="../../assets/img/3.jfif" alt="Slideshow Image 3">
				</div>
			</div>

			<!-- Dots (Indicators) -->
			<div class="dots">
				<span class="dot" onclick="currentSlide(1)"></span>
				<span class="dot" onclick="currentSlide(2)"></span>
				<span class="dot" onclick="currentSlide(3)"></span>
			</div>

			<!-- UCX Dashboard Buttons -->
			<div class="dashboard-buttons">
				<a href="AuditDatabank.php">
					<i class="ri-wallet-3-fill"></i> UCX Data Bank
				</a>
				<a href="#">
					<i class="ri-calendar-fill"></i> UCX Connect
				</a>
				<a href="AuditForm.php">
					<i class="ri-arrow-up-down-line"></i> Unify Audit System
				</a>
				<a href="HrRecords.php">
					<i class="ri-bar-chart-box-fill"></i> HR Records
				</a>
			</div>
				</div>
			</div>
		</main>
		<!-- MAIN -->
	</section>
	<!-- CONTENT -->

	<script src="../../assets/js/script.js"></script>

   <!-- Slideshow JS -->
   <script>
      let slideIndex = 0;
      let autoSlideTimeout;

      function showSlides() {
         let slides = document.getElementsByClassName("slide");
         let dots = document.getElementsByClassName("dot");

         for (let i = 0; i < slides.length; i++) {
            slides[i].style.display = "none";  
         }
         slideIndex++;
         if (slideIndex > slides.length) {slideIndex = 1}

         for (let i = 0; i < dots.length; i++) {
            dots[i].classList.remove("active-dot");
         }

         slides[slideIndex-1].style.display = "block";  
         dots[slideIndex-1].classList.add("active-dot");

         autoSlideTimeout = setTimeout(showSlides, 5000); // Auto slide
      }

      function currentSlide(n) {
         clearTimeout(autoSlideTimeout);
         slideIndex = n - 1;
         showSlides();
      }

      // Start slideshow
      showSlides();
   </script>
</body>
</html>
