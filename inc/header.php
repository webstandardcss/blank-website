<!DOCTYPE html>
<html lang="en">
<head>
  <?php require_once(dirname(__FILE__) . "/_meta.php"); ?>
  
  <?php if (in_array("forms", $extraCss)) { ?>
    <link rel="stylesheet" href="/assets/css/forms.css">
  <?php } ?>  
  
  <?php if (in_array("searchfix", $extraCss)) { ?>
    <link rel="stylesheet" href="/assets/css/searchfix.css">
  <?php } ?>
</head>
<body class="flex-container">

  <?php require_once(dirname(__FILE__) . "/_mobilenav.php"); ?>
  <header class="ob-header flex-container">
    <?php require_once(dirname(__FILE__) . "/_nav.php"); ?>
  </header>
