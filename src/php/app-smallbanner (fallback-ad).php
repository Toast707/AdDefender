<!DOCTYPE html>
<html>
<head>
  <!--
  	(c) 2015-2016 Thomas Roskop.
  	All rights reserved. Please see "License.md" for more information.

  	AdDefender on Guthub: https://github.com/TRoskop/AdDefender


    This file is only an example how to use the AdDefender-Framework.

  -->
  <meta charset="utf-8" />
  <title>AdDefender - AppCode & Example</title>
  <link rel="shortcut icon" href="logo.png" />

</head>
<body style="overflow-y: auto; background-color: #5C57B3;">

		<p style="margin: 50px; color: #FFFFFF;">
			Lorem ipsum dolor sit amet, consetetur sadipscing elitr, sed diam nonumy eirmod tempor invidunt ut labore et dolore magna aliquyam erat, sed diam voluptua. At vero eos et accusam et justo duo dolores et ea rebum. Stet clita kasd gubergren, no sea takimata sanctus est Lorem ipsum dolor sit amet. Lorem ipsum dolor sit amet, consetetur sadipscing elitr, sed diam nonumy eirmod tempor invidunt ut labore et dolore magna aliquyam erat, sed diam voluptua. At vero eos et accusam et justo duo dolores et ea rebum. Stet clita kasd gubergren, no sea takimata sanctus est Lorem ipsum dolor sit amet.
Lorem ipsum dolor sit amet, consetetur sadipscing elitr, sed diam nonumy eirmod tempor invidunt ut labore et dolore magna aliquyam erat, sed diam voluptua. At vero eos et accusam et justo duo dolores et ea rebum. Stet clita kasd gubergren, no sea takimata sanctus est Lorem ipsum dolor sit amet. Lorem ipsum dolor sit amet, consetetur sadipscing elitr, sed diam nonumy eirmod tempor invidunt ut labore et dolore magna aliquyam erat, sed diam voluptua. At vero eos et accusam et justo duo dolores et ea rebum. Stet clita kasd gubergren, no sea takimata sanctus est Lorem ipsum dolor sit amet.
		</p>



<!-- #AdDefender -->
  	<?php
    	require "addcore/adcore.php"; // Use your URL to acfp.js!
        require "addcore/AdFallbackService/ad-fallback-service.php"; // Use correct URL!
			__AdDefenderStart(_AdDefenderInfoType::SmallBanner, false); // SmallBanner | FullView
	  ?>
    <p>
      
		 <?php 
			__AdDefenderAFBE_Init();
		 ?>


    </p>
  	<?php
			__AdDefenderEnd("../../src/common/acfp.js"); // Use your URL to acfp.js!
	  ?>
<!-- /AdDefender -->




		<p style="margin: 50px; color: #FFFFFF;">
			Lorem ipsum dolor sit amet, consetetur sadipscing elitr, sed diam nonumy eirmod tempor invidunt ut labore et dolore magna aliquyam erat, sed diam voluptua. At vero eos et accusam et justo duo dolores et ea rebum. Stet clita kasd gubergren, no sea takimata sanctus est Lorem ipsum dolor sit amet. Lorem ipsum dolor sit amet, consetetur sadipscing elitr, sed diam nonumy eirmod tempor invidunt ut labore et dolore magna aliquyam erat, sed diam voluptua. At vero eos et accusam et justo duo dolores et ea rebum. Stet clita kasd gubergren, no sea takimata sanctus est Lorem ipsum dolor sit amet.
Lorem ipsum dolor sit amet, consetetur sadipscing elitr, sed diam nonumy eirmod tempor invidunt ut labore et dolore magna aliquyam erat, sed diam voluptua. At vero eos et accusam et justo duo dolores et ea rebum. Stet clita kasd gubergren, no sea takimata sanctus est Lorem ipsum dolor sit amet. Lorem ipsum dolor sit amet, consetetur sadipscing elitr, sed diam nonumy eirmod tempor invidunt ut labore et dolore magna aliquyam erat, sed diam voluptua. At vero eos et accusam et justo duo dolores et ea rebum. Stet clita kasd gubergren, no sea takimata sanctus est Lorem ipsum dolor sit amet.
		</p>


</body>
</html
