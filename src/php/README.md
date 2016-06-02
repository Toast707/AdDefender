# AdDefender / PHP

[AdDefender on Github](https://github.com/TRoskop/AdDefender "AdDefender on Github")

## Overview
This is the manual for using the *PHP-AdDefender-API*

## Requirements
You only need to have a server which can interpret php (e.g. the Apache Server).
No more features or modules are needed.

## How to install
1. Upload the API-Folder ("addcore") to your webspace. 
2. Upload the "acfp.js"-file (in "/src/common") to your webspace. The exact location is not important, but you need to have the full URI.
3. Add these necessary lines of code to your Website code. Please see the both example files how to do so. 
   Note, that you have to use the correct URLs! 
4. That's all!

## Examples to try out
Please view "app-fullbanner.php" and "app-smallbanner.php" to see examples of how AdDefender works.


## Extensions & Features
* Ad-Fallback-Helper
  - This Extension allows you to deliver a fallback instead of the normal ad, so that you have at least another kind of ad shown on your website.
    Note: This should only provide an img with a static img url and a link to the reference (link).


