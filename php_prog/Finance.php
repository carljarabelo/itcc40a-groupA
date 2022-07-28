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
           <article>
            <div id="main" class="px-4 py-16 mx-auto max-w-screen-2xl sm:px-6 lg:px-8">

               
            <img src="Photo1.jpeg" alt="">
            <div class="header">
               <h1>Finance </h1>  
            <hr>

               <div class="content">
                <h1>One of the most important offices in the University is the Finance Office. Generally, it handles the financial operations of the University and is headed by the University Treasurer.</h1>
                <br>
                <p>
                    Some guidelines are implemented in order to ensure systematic procedures in the processing of fees, requests, and other processes at the Finance Office.</p>
          
            </div>
            </div>
</article>
       
	</section>



    <footer class="footer">
    <?php include("./partials/footer.php")?>
    
    </footer>
    </body>
    </html>