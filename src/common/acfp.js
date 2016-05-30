/*
	(c) 2015-2016 Thomas Roskop.
	All rights reserved. Please see "License.md" for more information.

	AdDefender on Github: https://github.com/TRoskop/AdDefender

        How to Use:
         - Un-comment all the filter you want to use
         - Remove all comment (including this header!)
         - You can obfuscate this script, but make sure that the function is always named "_AdDefenderValid" (Or change the name also in "adcore.php")!

        For more Filters, you can ask Thomas Roskop.

        Important: Please use this file as general template for every implementation of AdDefender.
*/

function _AdDefenderValid() {

        /** ==
           ~ Google Analytics
           If you run Google Analytics, the ga()-function is implemented. 
           If we can not find this function, an adblocker is active.
        */
        // if (typeof ga != 'function') return false; 


	return true;
}
