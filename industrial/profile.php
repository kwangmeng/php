<?php include 'function.php';
if(!isset($_SESSION["email"])){
  header("Location: index.php");
}else{
  $memberInfo = getMemberInfo($_SESSION["email"]);

  if(isset($_POST['update'])){

    $flag = updateData($_POST['l_name'],$_POST['f_name'],$_POST['address'],$_POST['contact'], $_POST['username']);
    echo "<script>alert('$flag');
    window.location.href='profile.php'</script>";
  }


}

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
<link rel="alternate" type="application/rss+xml" title="RSS - admin&#039;s blog" href="http://funded.themonkeythemes.com/blog/1/feed" />
  <title>My Profile | CROWDFUNDED</title>
<?php include 'topstyle.php';
?>

</head>
<body class="html not-front not-logged-in one-sidebar sidebar-second page-blog page-blog- page-blog-1" >

  <div id="fb-root"></div>
  <script>(function(d, s, id) {
      var js, fjs = d.getElementsByTagName(s)[0];
      if (d.getElementById(id)) return;
      js = d.createElement(s); js.id = id;
      js.src = "//connect.facebook.net/en_US/sdk.js#xfbml=1&version=v2.3";
      fjs.parentNode.insertBefore(js, fjs);
    }(document, 'script', 'facebook-jssdk'));</script>

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


  <form class="form-search content-search" action="/blogs/admin" method="post" id="search-block-form" accept-charset="UTF-8"><div><div>
      <h2 class="element-invisible">Search form</h2>
    <div class="input-group"><input title="Enter the terms you wish to search for." placeholder="Search" class="form-control form-text" type="text" id="edit-search-block-form--2" name="search_block_form" value="" size="15" maxlength="128" /><span class="input-group-btn"><button type="submit" class="btn btn-primary"><span class="icon glyphicon glyphicon-search" aria-hidden="true"></span></button></span></div><div class="form-actions form-wrapper form-group" id="edit-actions"><button class="element-invisible btn btn-primary form-submit" type="submit" id="edit-submit" name="op" value="Search">Search</button>
</div><input type="hidden" name="form_build_id" value="form-uZl7PFibeds-xrIworIEnBkw9Q1Bu4YXaRjfbxFcrJY" />
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
    $name = "profile";
    include 'menu.php';?>

  </div>
</header>


<div class="main-container container">

  <header role="banner" id="page-header">

      </header> <!-- /#page-header -->

  <div class="row">


    <section class="col-sm-12">
                  <a id="main-content"></a>
                    <h1 class="page-header">My Profile</h1>
                                      <div class="tabs-wrapper">
          <a class="tabs_mobile--toggle">
            <span>Tabs nav</span> <i class="fa fa-angle-down"></i>
          </a>
                  </div>

                          <div class="region region-content">
                            <div class="text-center">
                            <img src="img/profile.jpg" style="width:20%;">
                            <br><br>
                            <center><input type="file"></center>
                            <input type="submit" class="btn  btn-default form-submit">
                          </div>
                          <br>
                          <hr style="border:1px dashed grey"></hr>
                          <form action="#" method="post">
                            <div class="form-group">
                              <label for="usr">Display Name:</label>
                              <input type="text" class="form-control required" value="<?php echo $memberInfo['username']?>" name="username">
                            </div>
                            <div class="form-group">
                              <label for="usr">Email:</label>
                              <input type="email" class="form-control required" value="<?php echo $memberInfo['email']?>"  readonly>
                            </div>
                            <div class="form-group">
                              <label for="usr">First Name:</label>
                              <input type="text" class="form-control required" value="<?php echo $memberInfo['f_name']?>" name="f_name">
                            </div>
                            <div class="form-group">
                              <label for="usr">Last Name:</label>
                              <input type="text" class="form-control required" value="<?php echo $memberInfo['l_name']?>" name="l_name">
                            </div>
                            <div class="form-group">
                              <label for="usr">Address:</label>
                              <input type="text" class="form-control required" value="<?php echo $memberInfo['address']?>" name="address">
                            </div>
                            <div class="form-group">
                              <label for="usr">Contact:</label>
                              <input type="text" class="form-control required" value="<?php echo $memberInfo['contact']?>" name="contact">
                            </div>
                              <center><input type="submit" class="btn btn-default form-submit" name="update" value="Update Data"></center>
                            </form>
                            <br>
                            <hr style="border:1px dashed grey"></hr>
                            <h2>Change Password</h2>
                            <form action="#" method="post">

                              <div class="form-group">
                                <label for="usr">Current Password:</label>
                                <input type="password" class="form-control required" >
                              </div>
                              <div class="form-group">
                                <label for="usr">New Password:</label>
                                <input type="password" class="form-control required" >
                              </div>
                                <center><input type="submit" class="btn btn-default form-submit" value="Update Password"></center>
                              </form>
                          </div>
    </section>



  </div>
</div>

<?php  include 'footer.php'; ?>
</body>
</html>
