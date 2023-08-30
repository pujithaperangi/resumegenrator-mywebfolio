<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Strict//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-strict.dtd">
<html>
<head>

	<title><?php echo $_POST["name"] ;?> | Web Designer, Director | name@yourdomain.com</title>
	<meta http-equiv="content-type" content="text/html; charset=utf-8" />

	<meta name="keywords" content="" />
	<meta name="description" content="" />

	<link rel="stylesheet" type="text/css" href="http://yui.yahooapis.com/2.7.0/build/reset-fonts-grids/reset-fonts-grids.css" media="all" /> 
	<link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.3.0/font/bootstrap-icons.css">

	<link rel="stylesheet" type="text/css" href="resume.css" media="all" />

</head>
<body>

<div id="doc2" class="yui-t7">
	<div id="inner">
	
		<div id="hd">
			<div class="yui-gc">
				<div class="yui-u first">
					<h1><?php echo $_POST["name"] ;?></h1>
					<h2><?php echo $_POST["headline"];?></h2>
				</div>

				<div class="yui-u">
					<div class="contact-info">
						
						<h3><a href="mailto:name@yourdomain.com"><?php echo $_POST["email"];?></a></h3>
						<h3><?php echo $_POST["mobile"]; ?></h3>
					</div><!--// .contact-info -->
				</div>
			</div><!--// .yui-gc -->
		</div><!--// hd -->

		<div id="bd">
			<div id="yui-main">
				<div class="yui-b">

					<div class="yui-gf">
						<div class="yui-u first">
							<h2>Profile</h2>
						</div>
						<div class="yui-u">
							<p class="enlarge">
								<?php  echo $_POST["objective"]; ?>		</p>
						</div>
					</div><!--// .yui-gf -->

					<div class="yui-gf">
						<div class="yui-u first">
							<h2>Skills</h2>
						</div>
						<div class="yui-u">

						<div class="yui-u">
							<div class="talent">
								<h2>Skills</h2>
								<ul>
									<?php foreach ($_POST["skill"] as $skill) { ?>
										<li><?php echo $skill; ?></li>
									<?php } ?>
								</ul>
								<ul>
									<li>web design</li>
									<li>Datascience</li>
									<li>Communication skils</li>

								</ul>
							</div>
						</div>
								

								
						</div>
					</div><!--// .yui-gf -->

					<!--// .yui-gf-->

					<div class="yui-gf">
	
						<div class="yui-u first">
							<h2>Experience</h2>
						</div><!--// .yui-u -->

						<div class="yui-u">

							<div class="job">
								<h2>Company:<?php $_PHP["company"];?></h2>
								<h3>ROle:<?php $_PHP["experience"];?></h3>
								<h4>Time:<?php $_PHP["time"];?></h4>
								<p>Intrinsicly enable optimal core competencies through corporate relationships. Phosfluorescently implement worldwide vortals and client-focused imperatives. Conveniently initiate virtual paradigms and top-line convergence. </p>
							</div>
							<div class="talent">
									<h2>Expertise</h2>
									<p>Proven ability to lead and manage a wide variety of design and development projects in team and independent situations.</p>
									<p> <h4>JOb DEscription: </h4> </p>
									<p><?php $_PHP["jobdesc"];?></p>
								</div>

							

							

							

						</div><!--// .yui-u -->
					</div><!--// .yui-gf -->


					<div class="yui-gf last">
						<div class="yui-u first">
							<h2>Education</h2>
							
									
									<p>INstitute:<?php $_POST["institute"]; ?> </p>
									<p>Graduation:<?php $_POST["education"]; ?></p>
									<p>Time Duration:<?php $_POST["timeperiod"]; ?></p>
								</div>
						</div>
						
					</div><!--// .yui-gf -->

					


				</div><!--// .yui-b -->
			</div><!--// yui-main -->
		</div><!--// bd -->


		<div id="ft">
			<p><?php  echo $_POST["name"]; ?> &mdash; <a href="mailto:name@yourdomain.com"><?php echo $_POST["email"];?></a> &mdash; <?php echo $_POST["contact"];?></p>
			<p >belongs to <?php echo $_POST["address"]; ?> </p>
			<p><i class="bi bi-linkedin"></i></p>
			<p ><i class="bi bi-github"></i></p>
		</div><!--// footer -->

	</div><!-- // inner -->


</div><!--// doc -->


<center >
	<p class="fs-1"><button class="btn btn-warning"><i class="bi bi-share-fill"></i></button>
	<a href="logout.php">logout</a></p>

</center>
</body>
</html>

