<body>

<div id="sidebar">

	<div id="header">
		<a href="https://aroceu.com/gifts"><img src="https://aroceu.com/gifts/img/pinkjewel.gif">
		<br />for aroceu</div></a>

	<div class="desktopnav">
	<ul id="navigation">
	<?php include('navigation.php') ?>
	</ul>
	</div>

	<div class="mobilenav">
		<div class="navigationbutton"><button style="" onclick="togglenavigation()">Click for Navigation</button></div>
		<ul id="navigation">
		<?php include('navigation.php') ?>
		<li><div class="close"><a onclick="togglenavigation()">Close</a></div></li> <!-- make invisible on desktop -->
		</ul>
	</div>

</div>

<div id="container">

<div id="content">
