<div id="top-header" class="top-head">
</div>
<div class="navbar-wrapper">
<nav  id="custom-bootstrap-menu" class="navbar navbar-static-top " role="navigation">
  <div class="container">
    <div class="navbar-header">
      <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#navbar" aria-expanded="false" aria-controls="navbar">
        <span class="sr-only">Toggle navigation</span>
        <span class="icon-bar"></span>
        <span class="icon-bar"></span>
        <span class="icon-bar"></span>
      </button>
    </div>
    <div id="navbar" class="collapse navbar-collapse">
      <ul class="nav navbar-nav">
        <li class="<?php if($this->uri->segment(1)==""){echo "active";}?>"><a href="<?php echo base_url()?>">Home</a></li>
        <li class="<?php if($this->uri->segment(1)=="about-us"){echo "active";}?>"><a href="<?php echo base_url()?>about-us">About Us</a></li>
        <li class="<?php if($this->uri->segment(1)=="old-town"){echo "active";}?>"><a href="<?php echo base_url()?>old-town">Old Town</a></li>
        <li class="<?php if($this->uri->segment(1)=="grand-design"){echo "active";}?>"><a href="<?php echo base_url()?>grand-design">Grand Design</a></li>
        <li class="<?php if($this->uri->segment(1)=="news"){echo "active";}?>"><a href="<?php echo base_url()?>news">News</a></li>
        <li class="<?php if($this->uri->segment(1)=="event"){echo "active";}?>"><a href="<?php echo base_url()?>event">Event</a></li>
        <li class="<?php if($this->uri->segment(1)=="communities"){echo "active";}?>"><a href="<?php echo base_url()?>communities">Communities</a></li>
        <li class="<?php if($this->uri->segment(1)=="contact"){echo "active";}?>"><a href="<?php echo base_url()?>contact">Contact</a></li>
      </ul>
      <a href="<?php echo base_url()?>" class="top-logo"><img class="top-logo-img" src="<?php echo base_url()?>uploads/main-content/mini-logo.png"></a>
    </div><!-- /.nav-collapse -->
  </div><!-- /.container -->
</nav>
</div>
