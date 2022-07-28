<!DOCTYPE html>
<html lang="en">
<head>
<meta charset="utf-8">
<title>HTML</title>
<meta name="viewport" content="width=device-width, initial-scale=1.0">
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
<link rel="stylesheet" type="text/css" href="style.css">
<link rel="stylesheet" type="text/css" href="navbar.css">
<link rel="stylesheet" type="text/css" href="leftnavbar.css">
<link rel="stylesheet" type="text/css" href="footer.css">
<link rel="stylesheet" type="text/css" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.1/css/all.min.css">
<style>
 
</style>
</head>
<body>
<header>
	<div class="topnav">
			<div class="search-container">
			  <form action="/action_page.php">
				<input type="text" placeholder="Search.." name="search">
			  </form>
			</div>
		</div>
	<img src="logo.png" style="max-width: 250px ; padding: 5px 5px 5px 50px;" alt="XULogo">
		
	
	<!-- <div class="container"> </div> -->
	<nav class="navbar" id="nav">
	
	  <a href="about.html" >About</a>
	
      <div class="dropdown">
		<button class="btn">Admission
		  <i class="fa fa-caret-down"></i>
		</button>
		<div class="dropdown-menu">
            <a href="Admission.html">Admission</a>
            <a href="Finance.html">Finance</a>
            <a href="Testing.html">Testing Center</a>
            <a href="Program.html">University Academic Program</a>
            <a href="Registrar.html">University Registrar</a>
            <a href="Contact.html">Contact</a>
		</div>
	  </div> 
	<a href="#" >Scholarship</a>
      <div class="dropdown">
		<button class="btn">Academics
		  <i class="fa fa-caret-down"></i>
		</button>
		<div class="dropdown-menu">
            <a href="Admission.html">Admission</a>
            <a href="Finance.html">Finance</a>
            <a href="Testing.html">Testing Center</a>
            <a href="Program.html">University Academic Program</a>
            <a href="Registrar.html">University Registrar</a>
            <a href="Contact.html">Contact</a>
		</div>
	  </div> 
	  <a href="research.html">Research</a>
	  <a href="#" >SocDev</a>
	  <a href="#">FlexLearning</a>
	  <a href="#">XU Covid19</a>
	  <a href="Contactsmain.html">Contact</a>
	  <a href="#">President' Memo</a>
	  <a href="#">Graduation</a>
  
	  <a href="javascript:void(0);" style="font-size:36px; " class="icon" onclick="myFunction()">&#9776;</a>
	</header>
	  <div class="icon-bar">
		<span style="font-size:30px;cursor:pointer;" onclick="openNav()" >&#9776;</span>
	  </div>
	
	 
	</nav>
	<div class="icon-bar">
			
			<span style="font-size:30px;cursor:pointer;" onclick="openNav()" >&#9776;</span>
		  </div>
        
        <section>
            <!-- this is the side havigation -->
            <div id="mySidenav" class="sidenav">
                <a href="javascript:void(0)" class="closebtn" onclick="closeNav()">&times;</a>
                <div class="dropdown">
                <a href="Admission.html">Announcements</a>
                <a href="ask.html">Frequently Asked Questions</a>
                <a href="accepted.html">Lists of Accepted Applicants</a>
                <a href="undergrad.html">List of Undergraduate Programs</a>
                <a href="online.html">Online Admissions & Enrolment Process for Takers and Passers of the Online College Entrance Examination</a>
                <a href="process.html">Freshmen & Transferees Online Admissions & Enrolment Under Waived Entrance Exam Process</a>
                <a href="applicants.html">Online Admissions and Enrolment Process for Professional Education Applicants</a>
                <a href="applicants2.html">Upperclassmen Online Admissions & Enrolment Process for Returnees and 2nd Courser Applicants</a>
                <a href="international.html">International Student Applicants</a>
                <a href="request.html">Request for Change Program</a>
                <a href="Registrar.html">Online Enrolment Registration (University Registrar)</a>
                <a href="estimate.html">Estimated Tuition & School Fees</a>
                <a href="map.html">Campus Map</a>
                <a href="life.html">Campus Life</a>
                <a href="corner.html">Parents and Students Corner</a>
                <a href="Contact.html">Contact</a>
            </div>
           </div>
           <article>
            <div id="main" class="px-4 py-16 mx-auto max-w-screen-2xl sm:px-6 lg:px-8">

               
            <img src="Photo1.jpeg" alt="">
            <div class="header">
               <h1>Admissions and Scholarships</h1>  
            
            <div class="content">
                <div class='photocontainer'>
                    <div>
                        <img src="Be_A_Xavier_Ateneo_Scholar_Extended_Deadline.jpg" class='iconDetails'>
                    </div>  
            </div>
            <hr>


</article>
            
<script>
    function openNav() {
    document.getElementById("mySidenav").style.width = "250px";
    document.getElementById("main").style.marginLeft = "250px";
    }
    
    function closeNav() {
    document.getElementById("mySidenav").style.width = "0";
    document.getElementById("main").style.marginLeft= "0";
    }
            function myFunction() {
        var x = document.getElementById("nav");
        if (x.className === "navbar") {
            x.className += " responsive";
        } else {
            x.className = "navbar";
        }
        }

    </script>
    </section>

    <footer class="footer">

        <div class="container">
            <div class="col-span-2">
                <div>
                    <h2 style="color:white;">
                        Xavier University-Ateneo de Cagayan
                    </h2>
    
                    <p style="color:gray ;">
                       Developed by Kids "Carlo Barcelona"
                    </p>
                </div>
            </div>
            <div class="row">
    
                
                <div class="footer-col">
                    <h4>Academics</h4>
                    <ul>
                        <li><a href=""> Higher Education Cluster </a></li>
                        <li><a href=""> Professional Schools </a></li>
                        <li><a href=""> Basic Education </a></li>
                        <li><a href=""> University Registrar </a></li>
                        <li><a href=""> University Dean's list </a></li>
                    </ul>
                </div>
                <div class="footer-col">
                    <h4>Announcement</h4>
                    <ul>
                        <li><a href=""> Frequently asked Questions </a></li>
                        <li><a href=""> list of accepted applicants </a></li>
                        <li><a href=""> list if undergraduate Programs </a></li>
                        <li><a href=""> Campus Life </a></li>
                    </ul>
                </div>
                <div class="footer-col">
                    <h4>Resources </h4>
                    <ul>
                        <li><a href=""> President's Memo </a></li>
                        <li><a href=""> Archived News </a></li>
                        <li><a href=""> Publication </a></li>
                    </ul>
                    </div>
                    <div class="footer-col">
                        <h4>Quick Links</h4>
                        <ul>
                            <li><a href=""> Library </a></li>
                            <li><a href=""> SLMIS </a></li>
                            <li><a href=""> ELEARN </a></li>
                            <li><a href=""> XU Mail </a></li>
                        </ul>
                    </div>
                    <div class="footer-col">
                        <h4>Others </h4>
                        <ul>
                            <li><a href=""> BIMWAM </a></li>
                            <li><a href=""> GeoDRR </a></li>
                            <li><a href=""> Xavier Science Foundation </a></li>
                            <li><a href=""> German Donors </a></li>
                            <li><a href=""> Philippine Jesuits </a></li>
                        </ul>
                    
                    </div>
                </div>
    
                <div class="footer-col">
                    <div class="social-links">
                        <a href="#"><i class="fab fa-facebook-f"></i></a>
                        <a href="#"><i class="fab fa-twitter"></i></a>
                        <a href="#"><i class="fab fa-instagram"></i></a>
                        <a href="#"><i class="fab fa-linkedin-in"></i></a>
                    </div>
                </div>
            </div>
        </div>
        <hr>
    </div>
    <p style="text-align: center; color: aliceblue;">Copyright &copy; 2022. XavierAteneoDeCagayan. All rights reserved.</p>
    </div>
    
    </footer>
</body>

</html>