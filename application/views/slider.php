<style>
    /* Menambahkan latar belakang biru tua pada header-end */
    .header-end {
        background-color: #1D3A5D;
        padding: 20px 0;
    }

    /* Menambahkan padding dan warna teks untuk carousel-caption */
    .carousel-caption {
        color: white;
    }
</style>
<div class="header-end">
    <div class="container">
        <div id="myCarousel" class="carousel slide" data-ride="carousel">
          <!-- Indicators -->
          <ol class="carousel-indicators">
            <li data-target="#myCarousel" data-slide-to="0" class="active"></li>
            <li data-target="#myCarousel" data-slide-to="1"></li>
            <li data-target="#myCarousel" data-slide-to="2"></li>
          </ol>

          <!-- Wrapper for slides -->
          <div class="carousel-inner" role="listbox">
            <div class="item active">
                <img src="<?php echo base_url('theme/user/images/slide_1.png')?>" alt="...">
                <div class="carousel-caption car-re-posn">
                    <h4>POPULAR PRODUCTS</h4>
                    <h4>Big Sale</h4>
                    <span class="color-bar"></span>
                </div>
            </div>
            <div class="item">
              <img src="<?php echo base_url('theme/user/images/Slide 2.png');?>" alt="...">
                <div class="carousel-caption car-re-posn">
                    <h4>POPULAR PRODUCTS</h4>
                    <h4>Big Sale</h4>
                    <span class="color-bar"></span>
                </div>
            </div>
            <div class="item">
              <img src="<?php echo base_url('theme/user/images/SLide 3.png');?>" alt="...">
                <div class="carousel-caption car-re-posn">
                    <h4>POPULAR PRODUCTS</h4>
                    <h4>Big Sale</h4>
                    <span class="color-bar"></span>
                </div>
            </div>
          </div>

          <a class="left carousel-control" href="#myCarousel" role="button" data-slide="prev">
            <span class="glyphicon glyphicon-chevron-left car-icn" aria-hidden="true"></span>
            <span class="sr-only">Previous</span>
          </a>
          <a class="right carousel-control" href="#myCarousel" role="button" data-slide="next">
            <span class="glyphicon glyphicon-chevron-right car-icn" aria-hidden="true"></span>
            <span class="sr-only">Next</span>
          </a>
        </div>
        <div class="clearfix"></div>
    </div>
</div>
