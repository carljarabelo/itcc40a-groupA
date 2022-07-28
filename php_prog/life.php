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
               <h1>Campus Life </h1>  
            <hr>

               <div class="content">
               <div itemprop="articleBody"><p>Xavier University is a thriving educational and creative community comprised of more than 15,000 people, situated at the heart of the City of Golden Friendship. Life at XavierAteneo brings exciting adventures and new experiences every day together with competent, conscientious, and committed Ateneans who are “men and women for others.”</p><p>With more than 70 co-curricular and extra-curricular organizations to choose from at Xavier, there is definitely something to pique your interest — from college councils to theater companies, to humanitarian missions and campus journalism, among others. Meet other students with the same interests as you do. Share your talents and skills to the community. Make a difference with your leadership skills and passion for community development with fellow civic-minded students. Get involved with community formation projects, internships, and leadership opportunities.</p><p>Pursue your spiritual practice here at XU where interreligious understanding and promotion of faith and justice are parts of our academic and sociocultural discourses. Xavier Ateneo offers venues where you can reflect, discern, and cultivate your relationship with God.</p><p>As a Crusader, you have access to an impressive array of sports and fitness facilities and programs. Nurture your sporting skills by trying out for the varsity team or by joining your college teams to compete in the exhilarating University Intramurals.</p><p>If your interest lies more in the arts, enrich your university experience by exploring cultural opportunities and artistic engagements in literature, painting, dancing, singing, and acting. Cultural programs, Museo de Oro (the country’s first folkloric museum), artists’ club, writers’ pool, performing arts companies — they’re all here at Xavier.</p><p>The six campuses of the University boast modern and quality facilities to make your learning environment more conducive and competitive as you form part of a global and multicultural community.</p><p>Student life at Xavier is not all hard work. You will also be embarking on exciting adventures, engaging with different communities, forming lasting friendships, and creating happy memories that will last a lifetime!</p><p><i>Get to know more about our #XavierAteneo life events&nbsp;<a href="/xu-life" target="_blank" rel="noopener noreferrer" data-saferedirecturl="https://www.google.com/url?hl=en&amp;q=http://www.xu.edu.ph/xu-life&amp;source=gmail&amp;ust=1501737765070000&amp;usg=AFQjCNHKjbgfYgjmCiZx6L7zF90RSQrfFA">here</a>!</i></p></div>
            </div>
            </div>
</article>
      
	</section>



    <footer class="footer">
    <?php include("./partials/footer.php")?>
    
    </footer>
    </body>
    </html>