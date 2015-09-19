<!DOCTYPE HTML>
<HTML lang="en-US">
	<HEAD>
		<TITLE>Kay-Tee Boutique</TITLE>
		
		<META charset="UTF-8">
		
		<SCRIPT src="https://ajax.googleapis.com/ajax/libs/jquery/2.1.4/jquery.min.js"></SCRIPT>
		<SCRIPT src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.5/js/bootstrap.min.js"></SCRIPT>
		<LINK href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.5/css/bootstrap.min.css" rel="stylesheet" />
		<LINK href="https://maxcdn.bootstrapcdn.com/font-awesome/4.4.0/css/font-awesome.min.css" rel="stylesheet" />
		
		<SCRIPT src="js/global.js"></SCRIPT>
		<LINK rel="stylesheet" type="text/css" href="css/carousel.css" />
		<LINK rel="stylesheet" type="text/css" href="css/global.css" />
		<LINK rel="stylesheet" type="text/css" href="css/navbar.css" />
	</HEAD>
	
	<BODY id="body" class="adjustHeight">
		<DIV class="container">
			<DIV id="header" class="row">
				<DIV class="col-sm-4">
					<A href="index.html"><IMG class="img-responsive img-center" src="images/logos/logo_extra_small.png" alt="Logo Image" /></A>
				</DIV>
				<DIV class="col-sm-8">
					<DIV class="row">
						<DIV class="col-sm-12">
							<NAV class="navbar">
								<DIV class="container-fluid">
									<DIV>
										<UL class="nav navbar-nav navbar-right">
											<LI><A class="navlink" href="index.html">Home</A></LI>
											<LI class="active"><A class="navlink active" href="gallery.html">Gallery</A></LI> 
											<LI><A class="navlink" href="contact.html">Contact</A></LI>
											<LI><A class="navlink" href="about.html">About</A></LI> 
										</UL>
									</DIV>
								</DIV>
							</NAV>
						</DIV>
					</DIV>
					<DIV class="row">
						<DIV class="col-sm-12 col-vertical-align-55 socialMediaRow">
							 <a href="https://twitter.com/kayteebabybout1"><span class="fa fa-twitter fa-3x"></span></a>
							 <a href="https://www.facebook.com/kayteebabyboutique"><span class="fa fa-facebook fa-3x"></span></a>
						</DIV>
					</DIV>
				</DIV>
			</DIV>
			<DIV id="banner" class="row text-center">
				<DIV class="col-sm-12">
					<A href="index.html"><IMG src="images/coming_soon_logo.jpg" alt="Logo Image"  height="100" /></A>
				</DIV>
			</DIV>
			<DIV id="carousel" class="row">
				<DIV class="col-sm-12">
					<DIV id="myCarousel" class="carousel slide" data-ride="carousel">
						<OL id="slideshowIndicators" class="carousel-indicators">
							<?php
								$counter = 0;
								$imagePath = "images/slideshow/";
								$dir = new DirectoryIterator($imagePath);
								
								foreach ($dir as $fileinfo) {
								    if (!$fileinfo->isDot()) {
								    	echo("Counter is : " . $counter);
								    	if (($counter + 1) == 1) { echo("<LI data-target='#myCarousel' data-slide-to='0' class='active'></LI>\n"); }
								    	else { $counter = $counter + 1; echo("<LI data-target='#myCarousel' data-slide-to='" . $counter . "'></LI>\n"); }
								    }
								}
							?>
						</OL>
						<DIV class="carousel-inner" role="listbox">
							<?php
								$counter = 0;
								$imagePath = "images/slideshow/";
								$dir = new DirectoryIterator($imagePath);
								
								foreach ($dir as $fileinfo) {
								    if (!$fileinfo->isDot()) {
								    	if (($counter + 1) == 1) { echo("<DIV class='item active'>\n"); }
								    	else { echo("<DIV class='item'>\n"); }
								    	echo("<IMG src='" . $imagePath . $fileinfo->getFilename() . "' alt='Slide Show Image " . $counter . "' class='img-responsive img-center'>\n");
								    	echo("</DIV>\n");
								    }
								}
							?>
						<A class="left carousel-control" href="#myCarousel" role="button" data-slide="next">
							<span class="glyphicon glyphicon-chevron-left" aria-hidden="true"></span>
							<span class="sr-only">Previous</span>
						</A>
						<A class="right carousel-control" href="#myCarousel" role="button" data-slide="prev">
							<span class="glyphicon glyphicon-chevron-right" aria-hidden="true"></span>
							<span class="sr-only">Next</span>
						</A>
					</DIV>
				</DIV>
			</DIV>
			<DIV id="footer" class="row row-eq-height text-center">
				<DIV class="col-sm-2">
					<IMG class="img" alt="HTML 5 Valid Webpage" src="images/logos/html5.png">
				</DIV>
				<DIV class="col-sm-8 col-vertical-align-30" style="overflow: hidden;">
					<SPAN id="footerText" class="some">&copy; 2015</SPAN>
				</DIV>
				<DIV class="col-sm-2">
					<IMG class="img" alt="CSS 3 Valid Webpage" src="images/logos/css3.png">
				</DIV>
			</DIV>
		</DIV>
	</BODY>
</HTML>