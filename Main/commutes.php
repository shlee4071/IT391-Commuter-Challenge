<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Strict//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-strict.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>GCC Profile</title>
<link rel="stylesheet" media="screen" href="style.css" />
<link href="favicon.ico" rel="shortcut icon" type="image/x-icon" /><!-- custom favicon -->
<meta http-equiv="imagetoolbar" content="no" /><!-- disable IE's image toolbar -->
</head>

<body>
<div id="daddy">
	<div id="header">
		<div id="logo"><a href="./"><img src="images/logo.gif" alt="Your Company Logo" width="318" height="85" /></a><span id="logo-text"><a href="./"></a></span></div><!-- logo -->
		<div id="menu">
			<ul>
				<li><a href="index.php">Home</a></li>
				<li><a href="profile.php">Profile</a></li>
				<li><a href="./">Challenges</a></li>
				<li><a href="commutes.php" id="active">Commutes</a></li>
				<li><a href="./">About</a></li>
				<li><a href="./">Contact</a></li>
			</ul>
		</div><!-- menu -->
		<div id="headerimage">
			<div id="icons">
				<a href="./" ><img src="images/icon_home.gif" alt="Home" width="13" height="13" id="home" /></a>
				<a href="./"><img src="images/icon_sitemap.gif" alt="Sitemap" width="13" height="13" id="sitemap" /></a>
				<a href="./"><img src="images/icon_contact.gif" alt="Contact" width="13" height="13" id="contact" /></a>			</div><!-- icons -->
			<div id="slogan"></div>
		</div>
		<!-- headerimage -->
	</div>
	<!-- header -->
	<div id="content">
		<div id="cA">
			<div class="Ctopleft"></div>
			<h3>SEARCH</h3>
			<div id="search">
				<input type="text" class="search" /><input type="submit" class="submit" value="Find" />
			</div><!-- search -->
			<p>&nbsp;</p>
			<h3>Your Current Points:</h3>
            <div id="facebooklogin" style="background-image:url(images/bg_points.jpg); background-position:center; background-repeat:no-repeat; height:100px">
            	<p style="text-align:center; font-size:36px; padding-top:40px; color:#FC0">56</p>
            </div>
            <div id="googlelogin">
            <h3 style="padding-top:10px">Your Challenges:</h3>
            <ul style="padding-left:5px">
            	<li><a href="./" title="Challenge A">Challenge A</a></li>
            </ul>
            </div>
		</div><!-- cA -->
		<div id="cB">
			<div class="Ctopright"></div>
			<div id="cB1">
				<h3>Transportation Type / Miles Travelled</h3>
				<div style="height: 300px" class="news">
					<select style="width:125px">
                    	<option value="Vehicle1">Walk</option>
                        <option value="Vehicle2">Bike</option>
                        <option value="Vehicle3">Bus</option>
                        <option value="Vehicle4">Carpool</option>
                        <option value="Vehicle5">Train</option>
                    </select>
                    <input type="text" id="miles"/>
                    <br />
                    <p style="text-align:right">Save as a favorite? <input type="checkbox" value="favCommute"/></p>
				</div>
			</div><!-- cB1 -->
			<div id="cB2">
				<h3>YOUR FAVORITE COMMUTES</h3>
				<div class="about">
					<ul style="text-align:center">
						<li><input type="button" width="100px" value="Commute A" /></li>
                        <li><input type="button" value="Commute B" /></li>
                        <li><input type="button" value="Commute C" /></li>
					</ul>
				</div>
			</div><!-- cB2 -->
		</div><!-- cB -->
		<div class="Cpad">
			<br class="clear" /><div class="Cbottomleft"></div><div class="Cbottom"></div><div class="Cbottomright"></div>
		</div><!-- Cpad -->
	</div><!-- content -->
	<div id="properspace"></div><!-- properspace -->
</div><!-- daddy -->
<div id="footer">
	<div id="foot">
		<div id="foot1"><a href="./">it391project@gmail.com</a> - <a href="./">FAQ</a></div><!-- foot1 -->
		<div id="foot2">
			Copyright 2011, IT391. Designed by <a href="http://www.symisun.com/" title="We digitalize your ambitions">SymiSun<span class="star">*</span></a>
		</div><!-- foot1 -->
	</div><!-- foot -->
</div><!-- footer -->
</body>
</html>
