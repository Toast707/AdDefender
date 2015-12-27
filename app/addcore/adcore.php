<?php
/*
	(c) 2015-2016 Thomas Roskop.
	All rights reserved. Please see "License.md" for more information.

	AdDefender on Guthub: https://github.com/TRoskop/AdDefender
*/



/**********
*/
define("ADDefenderBannerAnimationDelayTime", 1); /* Must be > 1  */
define("ADDefenderBannerBackgroundColor", "#C83759"); /* */
define("ADDefenderBannerTextColor", "#FFFFFF"); /* */


/**********
*/
abstract class _AdDefenderInfoType
{
    const FullView = 0;
    const SmallBanner = 1;
}



/**********
*/
function _AdDefenderInitCore() {
  $GLOBALS["AADefenderTokenID"] = "z" . __ADDUtilCreateRandomName();
  $GLOBALS["AADefenderTokenStyle"] = "q" . __ADDUtilCreateRandomName();
}


/**********
*/
function _AdDefenderWriteBannerStartTag() {
	echo "<div class=\"" . $GLOBALS["AADefenderTokenStyle"] . "\" id=\"" . $GLOBALS["AADefenderTokenID"] . "\" >";
}


/**********
*/
function _AdDefenderWriteBannerEndTag() {
	echo "</div>";
}


/**********
*/
function _AdDefenderIncludeStyle($bannertype, $includereversestyle) {

	echo "<style type=\"text/css\">";

	if($bannertype == _AdDefenderInfoType::SmallBanner) {
		echo "." . $GLOBALS["AADefenderTokenStyle"] . " {
    		z-index: 3333; margin: 15px; visibility: hidden;
    		background-color: " . ADDefenderBannerBackgroundColor . ";
    		overflow-y: auto;";
  } else { // ::FullView
			/* use fixed position to conver the complete page. */
			echo "." . $GLOBALS["AADefenderTokenStyle"] . " {
    	background-color: " . ADDefenderBannerBackgroundColor . ";
  		z-index: 3333;
  		position: fixed;
  		top: 0px;
  		left: 0px;
  		height: 100%;
  		width: 100%;
  		overflow-y: auto;";
  }

	echo "animation-name: " . $GLOBALS["AADefenderTokenStyle"] . "anim;
    animation-duration: 0.3s;
    animation-timing-function: ease-in-out;
    animation-delay: " . ADDefenderBannerAnimationDelayTime . "s;
    animation-direction: alternate;
		animation-fill-mode: forwards;
    -webkit-animation-name: " . $GLOBALS["AADefenderTokenStyle"] . "anim;
    -webkit-animation-duration: 0.3s;
    -webkit-animation-timing-function: ease-in-out;
    -webkit-animation-delay: " . ADDefenderBannerAnimationDelayTime . "s;
    -webkit-animation-direction: alternate;
		-webkit-animation-fill-mode: forwards;
		-moz-animation-name: " . $GLOBALS["AADefenderTokenStyle"] . "anim;
    -moz-animation-duration: 0.3s;
    -moz-animation-timing-function: ease-in-out;
    -moz-animation-delay: " . ADDefenderBannerAnimationDelayTime . "s;
    -moz-animation-direction: alternate;
		-moz-animation-fill-mode: forwards;
		opacity: 0;
	}";

	echo "@keyframes " . $GLOBALS["AADefenderTokenStyle"] .  "anim {
    from { opacity: 0; }
    to { opacity: 1;  visibility: visible; }
	} @-webkit-keyframes " . $GLOBALS["AADefenderTokenStyle"] .  "anim {
    from { opacity: 0; }
    to { opacity: 1;  visibility: visible; }
	} @-moz-keyframes " . $GLOBALS["AADefenderTokenStyle"] .  "anim {
    from { opacity: 0; }
    to { opacity: 1; visibility: visible; }
	}";

	if($bannertype == _AdDefenderInfoType::FullView && $includereversestyle) {
		 echo "@keyframes " . $GLOBALS["AADefenderTokenStyle"] .  "animr2 {
    		from { opacity: 1; }
    		to { opacity: 0; display: none !important; visibility: hidden; }
			} @-webkit-keyframes " . $GLOBALS["AADefenderTokenStyle"] .  "animr2 {
    		from { opacity: 1; }
    		to { opacity: 0; display: none !important; visibility: hidden; }
			} @-moz-keyframes " . $GLOBALS["AADefenderTokenStyle"] .  "animr2 {
    		from { opacity: 1; }
    		to { opacity: 0; display: none !important; visibility: hidden; }
			}";

			echo "." . $GLOBALS["AADefenderTokenStyle"] . "-rev {
        animation-name: " . $GLOBALS["AADefenderTokenStyle"] . "animr2;
			  animation-duration: 0s;
    		animation-timing-function: ease-in-out;
    		animation-delay: 0.5s;
				animation-fill-mode: forwards;
				animation-direction: normal;
			  -webkit-animation-name: " . $GLOBALS["AADefenderTokenStyle"] . "animr2;
    		-webkit-animation-duration: 0s;
    		-webkit-animation-timing-function: ease-in-out;
    		-webkit-animation-delay: 0.5s;
				-webkit-animation-fill-mode: forwards;
				-webkit-animation-direction: normal;
        -moz-animation-name: " . $GLOBALS["AADefenderTokenStyle"] . "animr2;
    		-moz-animation-duration: 0s;
    		-moz-animation-timing-function: ease-in-out;
    		-moz-animation-delay: 0.5s;
				-moz-animation-fill-mode: forwards;
				-moz-animation-direction: normal;
			}";
  }

	echo "." . $GLOBALS["AADefenderTokenStyle"] . " > p {
  	color: " . ADDefenderBannerTextColor . ";
  	font-family: \"Liberation Sans\", \"Segoe UI\", \"Helvetica\", Arial, sans-serif;
  	margin-left: 25%;
 	  margin-right: 25%;
 	  max-width: 650px;
  	margin-top: 100px;
  	margin-bottom: 150px;
	}";
	echo "." . $GLOBALS["AADefenderTokenStyle"] . " > p > a {
  	color: #FFFFFF;
	}";
	echo "." . $GLOBALS["AADefenderTokenStyle"] . " > p > a:hover {
  	cursor: pointer;
	}";

	echo "</style>";
}


/**********
*/
function _AdDefenderCreateScript($adfilesrc) {
	echo "<script type=\"text/javascript\" src=\"" . $adfilesrc . "\"></script>";
	echo "<script type=\"text/javascript\">
    (function(){
				try {
				  if(_AdDefenderValid()) {
          	var d = document.getElementById(\"" . $GLOBALS["AADefenderTokenID"] . "\");
          	if(d != null && d.parentElement != null) d.parentElement.removeChild(d);
        	}
				} catch(ex) {}
      })();
  </script>";
}

/**********
*/
function _AdDefenderCreateFullScreenViewCloseLink($closemessage) {
	echo "<a href=\"#\" onclick=\"";
	echo "document.getElementById('" .
	 $GLOBALS["AADefenderTokenID"] . "').classList.add('" .
	 $GLOBALS["AADefenderTokenStyle"] . "-rev');"
	;
	echo "\">" . $closemessage .  "</a>";
}

/**********
 */
function __AdDefenderStart($bannertype, $includereversestyle) {
	_AdDefenderInitCore();
	_AdDefenderIncludeStyle($bannertype, $includereversestyle);
	_AdDefenderWriteBannerStartTag();
}

/**********
*/
function __AdDefenderEnd($adfilename) {
	_AdDefenderWriteBannerEndTag();
	_AdDefenderCreateScript($adfilename);
	/* Verweis auf dieses Projekt einfügen */
	echo "<!-- using Roskop AdDefender  -->";
}

/**********
*/
function __ADDUtilCreateRandomName() {
    $length = 10;
    $characters = '0123456789abcdefghijklmnopqrstuvwxyzABCDEFGHIJKLMNOPQRSTUVWXYZ-';
    $charactersLength = strlen($characters);
    $randomString = '';
    for ($i = 0; $i < $length; $i++) {
        $randomString .= $characters[rand(0, $charactersLength - 1)];
    }
    return "o" . $randomString;
    /* Gemäß CSS-Richtlinie ist es nicht erlaubt, dass der String mit einer Zahl oder - beginnt. */
}

 ?>
