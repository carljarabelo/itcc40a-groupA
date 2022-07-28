<!DOCTYPE html>
<html lang="en">
<head>
<meta charset="utf-8">
<title>Xavier University</title>
<?php include("./partials/header.php")?>

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
	<?php include("./partials/navigation.php")?>
	</nav>
	<div class="icon-bar">
			
			<span style="font-size:30px;cursor:pointer;" onclick="openNav()" >&#9776;</span>
		  </div>
        
	<section>
		<!-- this is the side havigation -->
		<div id="mySidenav" class="sidenav">
		<?php include("./partials/leftnavigation.php")?>
	   </div>
<Article>
           <div id="main" class="px-4 py-16 mx-auto max-w-screen-2xl sm:px-6 lg:px-8">

               
            <img src="Photo1.jpeg" alt="">
            <div class="header">
               <h1>Welcome to Xavier Ateneo University Testing Center </h1>  


               <div class="content">
                <h1></h1>
                <hr>
                    <p>
                        Xavier University - Ateneo de Cagayan, the premier academic institution situated at the heart of Cagayan de Oro City in Northern Mindanao, is among Asia’s top universities, based on the 2016 Asian University Rankings released by London-based education and career consultancy Quacquarelli Symonds.
<br>
                        Xavier Ateneo welcomes students from diverse backgrounds who are determined to succeed in their chosen fields of study. We let our students experience the excellence of the Jesuit-Ateneo education, along with our dynamic campus life, exciting scholarly pursuits, holistic approach to various social issues, and borderless opportunities. XU has numerous existing links and partnerships with local and international institutions, organizations, and research resources to supplement your studies.   
                        <br>                       
                        With thoughtfully-designed courses and curricula implemented by a roster of expert faculty in a sprawling campus equipped with comprehensive facilities, Xavier Ateneo provides a welcoming environment conducive to learning, both inside and outside the classroom. The university provides the solid foundation for students to confidently and competently face the challenges in the path to their careers of choice in the context of an increasingly globalized world.
                        <br>
                        To start your application at Xavier Ateneo, click on the link to your desired program below.
                        <br>
                        Required documents and submission deadlines differ by program so make sure you know the requirements and their due dates. Don’t wait for the deadline, submit as early as possible! The documents submitted to our university units will form part of the property of Xavier Ateneo and cannot be returned.
                        <br>
                        Each unit will review your application and determine whether you have met the academic standards required in your program. Other criteria such as motivations, interests, experiences, leadership abilities, distinctive talents and skills, eagerness to learn, and availability of slots per course will be considered. </p>
                        <br>
                        <p>(088) 853-9800 local 9151 / 9157 / 9158. Or, email aao@xu.edu.ph for undergraduate admissions queries and concerns.</p>
            </div>
            </div>
        </Article>
	</section>



<footer class="footer">
<?php include("./partials/footer.php")?>

</footer>
</body>
</html>