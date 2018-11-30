<?php require_once dirname(__FILE__) . "/inc/config.php"; ?>

<?php // Page data
$pageTitle = "Blank Homepage";
$pageTitleTag = $siteName . "  " . $pageTitle;
$pageDescription = $siteName  . "  " . $pageTitle;
$pageKeywords = $pageTitle . "  " . $siteKeywords;
// $extraCss = array("forms");
?>

<?php require_once dirname(__FILE__) . "/inc/header.php"; ?>

<div class="container">
  <div class="columns">
    <div class="column col-4 col-sm-12 col-mx-auto">
      <h2><?php echo $pageTitle; ?></h2>
      <div class="empty">
        <div class="empty-icon">
          <i class="icon icon-people"></i>
        </div>
        <p class="empty-title h5">You have no content :(</p>
        <p class="empty-subtitle">Click the button to star this template on GitHub.</p>
        <div class="empty-action">
          <a href="https://github.com/webstandardcss/blank-website/stargazers" class="btn btn-primary">Star on GitHub to find it later</button>
        </div>
      </div>
    </div>
    <div class="column col-2 col-sm-12"><h3>Cool Sidebar</h3></div>
  </div>
</div>

<?php require_once dirname(__FILE__) . "/inc/footer.php"; ?>
