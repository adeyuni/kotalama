<div class="owl-carousel loop">
  <div><img class="img-slider" src="<?php echo base_url();?>uploads/main-content/slider1.jpg" alt="kota-lama-semarang"></div>
  <div><img class="img-slider" src="<?php echo base_url();?>uploads/main-content/slider2.jpg" alt="kota-lama-semarang"></div>
  <div><img class="img-slider" src="<?php echo base_url();?>uploads/main-content/slider3.jpg" alt="kota-lama-semarang"></div>
</div>
<script src="<?php echo base_url();?>assets/js/jquery-2.2.3.js"></script>
<script type="text/javascript">

$(document).ready(function(){
  // $(".owl-carousel").owlCarousel();
  $('.loop').owlCarousel({
    center: true,
    items:2,
    loop:true,
    margin:0,
    autoplay:false,
    autoplayTimeout:5000,
    autoplayHoverPause:false,
    responsive:{
       0:{
            items:2
        },
        600:{
            items:2
        }
    }
  });

});
</script>

<div id="homepage-content" class="container">
  <div class="col-md-6 col-xs-12">
    <div id="homepage-news">
      <div class="text-center main-news-title"><h3>News</h3> </div>
      <div class="news-list">
      <div class="news-item row">
          <div class="thumbnail col-md-4 col-xs-4">
            <img class="thumnail-home-news" src="<?php echo base_url();?>uploads/main-content/slider1.jpg">
          </div>
          <div class="col-md-8 col-xs-8">
            <div class="news-title"><h4>Lorem ipsumsss</h4></div>
            <div class="news-date">
              20-10-2015
            </div>
            <div class="news-more text-right">
                <p><a href="#" class="btn btn-danger">read more</a></p>
            </div>
          </div>
      </div>
      <div class="news-item row">
          <div class="thumbnail col-md-4 col-xs-4">
            <img class="thumnail-home-news" src="<?php echo base_url();?>uploads/main-content/slider1.jpg">
          </div>
          <div class="col-md-8 col-xs-8">
            <div class="news-title"><h4>Lorem ipsumsss</h4></div>
            <div class="news-date">
              20-10-2015
            </div>
            <div class="news-more text-right">
                <p><a href="#" class="btn btn-danger">read more</a></p>
            </div>
          </div>
      </div>
      <div class="news-item row">
          <div class="thumbnail col-md-4 col-xs-4">
            <img class="thumnail-home-news" src="<?php echo base_url();?>uploads/main-content/slider1.jpg">
          </div>
          <div class="col-md-8 col-xs-8">
            <div class="news-title"><h4>Lorem ipsumsss</h4></div>
            <div class="news-date">
              20-10-2015
            </div>
            <div class="news-more text-right">
                <p><a href="#" class="btn btn-danger">read more</a></p>
            </div>
          </div>
      </div>
      <div class="news-item row">
          <div class="thumbnail col-md-4 col-xs-4">
            <img class="thumnail-home-news" src="<?php echo base_url();?>uploads/main-content/slider1.jpg">
          </div>
          <div class="col-md-8 col-xs-8">
            <div class="news-title"><h4>Lorem ipsumsss</h4></div>
            <div class="news-date">
              20-10-2015
            </div>
            <div class="news-more text-right">
                <p><a href="#" class="btn btn-danger">read more</a></p>
            </div>
          </div>
      </div>
      <div class="news-all row">
          <div class="col-md-12 col-xs-12">
            <h4><a href="<?php echo base_url();?>news"> view all > </a></h4>
          </div>
      </div>
    </div>
    </div>
  </div>
  <div class="col-md-6 col-xs-12">
    <div id="homepage-about-us" class="col-md-12">
      <div class="title col-md-12 text-right"><h3>About</h3></div>
      <div class="content">
        The Old Town Management Board (BPK2L) is a management board formed by the Semarang Municipal Government in 2007... 
        <a href="<?php echo base_url();?>about-us"><i> Read more > </i></a>
      </div>
    </div>
    <div id="homepage-event" class="col-md-12">
      <div class="title col-md-12 text-right"><h3><span class="highlight">event</span></h3></div>
      <div class="content-event-box col-md-12 ">
        <div class="content-event">
          <div class="list-event col-md-12">
            <h4>Lorem ipsum dolor sit ameasdas saijdsao jdoiasj doiasjdoas</h4>
            <p>27-01-2017</p>
          </div>
          <div class="list-event col-md-12">
            <h4>Lorem ipsum dolor sit ameasdas saijdsaojd oiasjdoi asjdoas</h4>
            <p>27-01-2017</p>
          </div>
          <div class="list-event col-md-12">
            <h4>Lorem ipsum dolor sit ameasdas saijd saojd oiasjdo iasjdoas</h4>
            <p>27-01-2017</p>
          </div>
          <div class="event-all row">
            <div class="col-md-12 text-right">
              <p><h4><a href="<?php echo base_url();?>event" > view all > </h4></a></p>
          </div>
      </div>
        </div>
      </div>
    </div>
  </div>
</div>