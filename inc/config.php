<?php
$siteName = "";
$sitePhone = "";
$sitePhoneRaw = "+19037775555";
$siteTwitter = "@longview";
$siteKeywords = ",test,texas";
$siteFacebookAdmin = "Facebook admin numeric ID";
$siteFacebookURL = "https://www.facebook.com/longview/";
$siteGoogleURL = "https://plus.google.com/1111111";
// $siteHost = (isset($_SERVER['HTTPS']) ? "https" : "http") . "://" . $_SERVER[HTTP_HOST]$_SERVER[REQUEST_URI];
$siteHost = "http://" . $_SERVER['HTTP_HOST'];
$pageURL = $siteHost . $_SERVER['REQUEST_URI'];
$pageImage = $siteHost . "/images/logo.png";

// Geocode data
$geoRegion = "US-TX";
$geoPlacename = "Longview";
$geoPositionLat = "32.4304919";
$geoPositionLong = "-94.7990983";

// Page Time Code
$lastModified = @filemtime($pageURL);
if($lastModified == NULL)
    // $lastModified = filemtime(utf8_decode($pageURL));$lastModified = filemtime(utf8_decode($pageURL));
    // $lastModified = filemtime(urldecode($pageURL));$lastModified = filemtime(urldecode($pageURL));
// echo $lastModified;
//$pageDateModifiedFriendly = date("F d Y H:i:s",filemtime($pageURL));
// February 14 2006 13:22:46
//$pageDateModified = date("Y-F-d\TH:i:s-5:00",filemtime($pageURL));
// 2013-09-17T05:59:00+01:00
?>
