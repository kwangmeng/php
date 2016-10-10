<?php
include 'function.php';

?>
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML+RDFa 1.0//EN"
  "http://www.w3.org/MarkUp/DTD/xhtml-rdfa-1.dtd">
<html lang="en" dir="ltr" prefix="content: http://purl.org/rss/1.0/modules/content/ dc: http://purl.org/dc/terms/ foaf: http://xmlns.com/foaf/0.1/ og: http://ogp.me/ns# rdfs: http://www.w3.org/2000/01/rdf-schema# sioc: http://rdfs.org/sioc/ns# sioct: http://rdfs.org/sioc/types# skos: http://www.w3.org/2004/02/skos/core# xsd: http://www.w3.org/2001/XMLSchema#">
<head profile="http://www.w3.org/1999/xhtml/vocab">
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<link rel="shortcut icon" href="http://funded.themonkeythemes.com/sites/all/themes/fundedvisual_subtheme/favicon.ico" type="image/vnd.microsoft.icon" />
<meta name="Generator" content="Drupal 7 (http://drupal.org)" />
  <title>User account | CROWDFUNDED</title>
  <?php include 'topstyle.php'; ?>
</head>
<body class="html not-front not-logged-in no-sidebars page-user" >


  <div id="skip-link">
    <a href="#main-content" class="element-invisible element-focusable">Skip to main content</a>
  </div>
    <header id="navbar" role="banner" class="navbar container navbar-default">
  <div class="top-border-gradient">

  </div>
  <div class="container">
    <div class="navbar-header">
            <a class="logo navbar-btn pull-left" href="index.php" title="Home">
        <img src="http://funded.themonkeythemes.com/sites/all/themes/fundedvisual_subtheme/logo.png" alt="Home" />
      </a>


                <div class="region region-search">
    <section id="block-search-form" class="block block-search clearfix">


  <form class="form-search content-search" action="/user" method="post" id="search-block-form" accept-charset="UTF-8"><div><div>
      <h2 class="element-invisible">Search form</h2>
    <div class="input-group"><input title="Enter the terms you wish to search for." placeholder="Search" class="form-control form-text" type="text" id="edit-search-block-form--2" name="search_block_form" value="" size="15" maxlength="128" /><span class="input-group-btn"><button type="submit" class="btn btn-primary"><span class="icon glyphicon glyphicon-search" aria-hidden="true"></span></button></span></div><div class="form-actions form-wrapper form-group" id="edit-actions--2"><button class="element-invisible btn btn-primary form-submit" type="submit" id="edit-submit--2" name="op" value="Search">Search</button>
</div><input type="hidden" name="form_build_id" value="form-bqpGTyV5UCrI_9E6cGHj9TCCQoZbGq0bzaFzJwzm3rw" />
<input type="hidden" name="form_id" value="search_block_form" />
</div>
</div></form>
</section>
  </div>

      <!-- .btn-navbar is used as the toggle for collapsed navbar content -->
      <button type="button" class="navbar-toggle" data-toggle="collapse" data-target=".navbar-collapse">
        <span class="sr-only">Toggle navigation</span>
        <span class="icon-bar"></span>
        <span class="icon-bar"></span>
        <span class="icon-bar"></span>
      </button>
    </div>

    <?php
    $name = "login";
    include 'menu.php';?>


  </div>
</header>


<div class="main-container container">

  <header role="banner" id="page-header">

      </header> <!-- /#page-header -->

  <div class="row">


    <section class="col-sm-12">
                  <a id="main-content"></a>
                    <h1 class="page-header">User account</h1>
                                      <div class="tabs-wrapper">
          <a class="tabs_mobile--toggle">
            <span>Tabs nav</span> <i class="fa fa-angle-down"></i>
          </a>
          <h2 class="element-invisible">Primary tabs</h2>
          <ul class="tabs--primary nav nav-tabs">

<li class="active"><a href="login.php" class="active">Log in<span class="element-invisible">(active tab)</span></a></li>
<li><a href="resetpass.php">Forgot Password</a></li>
</ul>        </div>
                          <div class="region region-content">
    <section id="block-system-main" class="block block-system clearfix">

      <?php

      if(isset($_POST['login'])){
        if($_POST['pass'] != "" || $_POST['email'] != ""){

            $try = login($_POST['email'], $_POST['pass']);
            if($try == 1){
                  echo "<p style='color:green;'>Login Success! Redirecting..</p>";
                  $_SESSION["email"] = $_POST['email'];
                  echo "<script>window.location.href='profile.php'</script>";
            }else if($try == 2){
                  echo "<p style='color:red;'>Invalid Credentials</p>";
            }


      }else{
        echo "<p style='color:red;'>Please fill in all mandatory field!</p>";
      }
      }?>

  <form action="#" method="post" id="user-login" accept-charset="UTF-8"><div>
    <div class="form-item form-item-name form-type-textfield form-group">
      <label class="control-label" for="edit-name">Email
        <span class="form-required" title="This field is required.">*</span></label>
<input class="form-control form-text required" title="Enter your email." data-toggle="tooltip" type="email" id="edit-name" name="email" value="" size="60" maxlength="60" />
</div>
<div class="form-item form-item-pass form-type-password form-group">
  <label class="control-label" for="edit-pass">Password <span class="form-required" title="This field is required.">*</span></label>
<input class="form-control form-text required" title="Enter the password that accompanies your email." data-toggle="tooltip" type="password" id="edit-pass" name="pass" size="60" maxlength="128" /></div>



<div class="form-actions form-wrapper form-group" id="edit-actions">

  <button type="submit" id="edit-submit" name="login" value="Log in" class="btn btn-default form-submit">Log in</button>
</div></div></form>
</section>
  </div>
    </section>


  </div>
</div>

<?php include 'footer.php'; ?>
</body>
</html>
