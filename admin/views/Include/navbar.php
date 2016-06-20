<?php if(Helper::isLogin()){ ?>
	<div class="navbar navbar-inverse navbar-fixed-top">
    <div class="navbar-inner">
      <div class="container-fluid">
        <button type="button" class="btn btn-navbar" data-toggle="collapse" data-target=".nav-collapse">
          <span class="icon-bar"></span>
          <span class="icon-bar"></span>
          <span class="icon-bar"></span>
        </button>
        <a class="brand" href="#">Vietime Restaurant</a>
        <div class="nav-collapse collapse">
          <p class="navbar-text pull-right">
            Logged in as <a href="#" class="navbar-link"><?php echo Helper::getUsernameLogin() ?></a> | <a href="<?php echo BASE_URL.'account/logout'; ?>" class="navbar-link">Logout</a>
          </p>
          <ul class="nav">
            <li><a href="<?php echo BASE_URL.'category'; ?>">Categories</a></li>
            <li><a href="<?php echo BASE_URL.'menu'; ?>">Menus</a></li>
            <li><a href="<?php echo BASE_URL.'testimonial'; ?>">Testimonials</a></li>
            <li><a href="<?php echo BASE_URL.'gallery'; ?>">Galleries</a></li>
            <li><a href="<?php echo BASE_URL.'highlight'; ?>">Highlights</a></li>
            <!--
            <li>
              <a href="<?php echo BASE_URL.'user'; ?>" class="dropdown-toggle">User <span class="caret"></span></a>
              </ul>
            </li>
            -->
            <!-- <li>
              <a href="<?php echo BASE_URL.'user'; ?>" class="dropdown-toggle">User <span class="caret"></span></a>
              <ul class="dropdown-menu" role="menu" aria-labelledby="dropdownMenu">
                <li><a tabindex="-1" href="#">Action</a></li>
                <li><a tabindex="-1" href="#">Another action</a></li>
                <li><a tabindex="-1" href="#">Something else here</a></li>
                <li class="divider"></li>
                <li><a tabindex="-1" href="#">Separated link</a></li>
              </ul>
            </li> -->
          </ul>
          <!--
          <a href="#popup-issue" class="btn btn-primary popup-issue"><strong>Create issue</strong></a>
          -->
        </div><!--/.nav-collapse -->
      </div>
    </div><!--/.navbar -->
  </div>
  <?php } ?>