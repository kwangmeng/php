<div class="header-user-nav">

          <div class="navbar-collapse collapse">
      <nav role="navigation">

                      <ul class="menu nav navbar-nav"><li class="first leaf <?php if($name=="index"){
                        echo "active";
                      }?>">
                        <a href="index.php" class="<?php if($name=="index"){
                          echo "active";
                        }?>">Home</a></li>
<li class="leaf <?php if($name=="discover"){
  echo "active-trail active";
}?>" class="<?php if($name=="discover"){
  echo "active-trail active";
}?>"><a href="discover.php">Discover</a></li>
<li class="leaf <?php if($name=="blog"){
  echo "active-trail active";
}?>" class="<?php if($name=="blog"){
  echo "active-trail active";
}?>"><a href="blog.php">Blog</a></li>
<li class="leaf <?php if($name=="login"){
  echo "active-trail active";
}?>">
  <?php if(!isset($_SESSION["email"])){ ?>
<a href="login.php" class="fa fa-sign-out <?php if($name=="login"){
  echo "active-trail active";
}?>">Login</a></li>
<li class="last leaf <?php if($name=="signup"){
  echo "active-trail active";
}?>">
<a href="signup.php">Sign Up</a></li>
<?php }else{ ?>
  <li class="last leaf <?php if($name=="profile"){
    echo "active-trail active";
  }?>">
  <a href="profile.php">My Profile</a></li>

  <li class="last leaf <?php if($name=="logout"){
    echo "active-trail active";
  }?>">
  <a href="logout.php">Log Out</a></li>


<?php } ?>


</ul>                                              </nav>
    </div>
      </div>
