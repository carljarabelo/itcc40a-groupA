<!DOCTYPE html>
<html lang="en">
<head>
<meta charset="utf-8">
<title>HTML</title>
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
 <div id="maincontainer"> 
	<div id="main">
		<div id="main" class="px-4 py-16 mx-auto max-w-screen-2xl sm:px-6 lg:px-8">

		   
		<img src="Photo1.jpeg" alt="" style="width:100%;">
		<div class="header">

			
		   <h1>Welcome to Xavier Ateneo Admissions and Aid Office </h1>  


		   <div class="content">
			<div class='photocontainer'>
				<div>
					<img src="Online_Admissions_Application_Deadline.jpeg" class='iconDetails'>
				</div>  
		</div>
				<div >
					<p>
						Xavier University - Ateneo de Cagayan, the premier academic institution situated at the heart of Cagayan de Oro City in Northern Mindanao, is among Asia’s top universities, based on the 2021 Asian University Rankings released by London-based education and career consultancy Quacquarelli Symonds.
					 </p>
					<br>
					<p><em> Parents, guardians, benefactors, and students may contact our Admissions Office through (088) 853-9800 local 9151 / 9157 / 9158. Or, email </em>aao@xu.edu.ph for undergraduate admissions queries and concerns.</p> </div>
		
					<p>
						Xavier University - Ateneo de Cagayan, the premier academic institution situated at the heart of Cagayan de Oro City in Northern Mindanao, is among Asia’s top universities, based on the 2021 Asian University Rankings released by London-based education and career consultancy Quacquarelli Symonds.
					 </p>
					<br>
					<p><em> Parents, guardians, benefactors, and students may contact our Admissions Office through (088) 853-9800 local 9151 / 9157 / 9158. Or, email </em>aao@xu.edu.ph for undergraduate admissions queries and concerns.</p> </div>
					<p>
			
				</div>
	</div>
	</div>    
</Article> 

	</section>



<footer class="footer">
	<?php include("./partials/navigation.php")?>

</footer>
</body>
</html>