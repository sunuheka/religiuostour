<?php include 'includes/metahead.php';?>

<body class="budhhist itinerary">
<?php include 'includes/header.php';?>
<section class="sectionInnerBanner" style="background-image: url('./assets/img/about-us.jpg');">
  <div class="overlay"></div>
  <div class="innerBannerContent">
    <h1 class="h2">Bodhgaya Tourism <br />
      Bodh Gaya Pilgrimage Tour India</h1>
    <p>In the Footsteps of Lord buddha... </p>
  </div>
</section>
<section id="about" class="contentBlock">
  <div class="container">
    <div class="row justify-content-space-between">
      <div class="col-sm-6 left-col">
        <div class="blockHeading">
          <div class="leadText"></div>
          <h2 class="h3">Bodhgaya</h2>
        </div>
        <p>Bodhgaya is where Buddhism began. All pilgrims and Buddhism followers are fond of this place and the legend attached to it. They usually visit here on the Bodhgaya tour also known as the Buddha Gaya tour. Lord Buddha was wandering near the banks of Falgu river seeking answers when he sat under the Bodhi Tree. Three days and three nights of meditation helped him attain enlightenment and gather insight about humanity and being in general.</p>
        <p>The day when he attained enlightenment is celebrated as Buddha Purnima. The land is fertile and rich with green fields. River Falgu waters it with low hills on the banks. Monks, nuns, and tourists unite in religious harmony and peace making it a cornerstone of Bodhgaya Pilgrimage.</p>
      </div>

      <div class="col-sm-6 right-col">
          <div class="contentBlockImage">
              <figure><img src="./assets/img/bodhnath-stupa.jpg" alt=""></figure>
          </div>
          <div class="contentBlockVideo">
            <div class="videoThumbnail"><img src="./assets/img/iliter-2.jpg" alt="">
                <div class="btn-play">
                    <!-- <a class="btn circle-button  lightbox mfp-iframe " href="https://www.youtube.com/watch?v=j_-2dUvlEdY"> -->
                    <a class="btn circle-button" href="javascript:void();">
                    WATCH VIDEO</a>
                </div>
            </div>            

            <div class="videoPopup" style="display: none;">
                <div class="iframeWrapper">
                    <iframe width="420" height="315" src="https://www.youtube.com/embed/tgbNymZ7vqY"></iframe>
                    <div class="btn-close">X</div>
                </div>
            </div>
          </div>
      </div>
    </div>
  </div>
</section>

<section id="gallery" class="sectionGallery">
    <div class="container">
        

        <div class="row grid" id="lightgallery">
            <!-- <div class="grid-sizer"></div> -->
            <div class="col-sm-4 grid-item" data-src="./assets/img/image.png">
                <a href="" class="galleryImage">
                <figure>
                    <img src="./assets/img/image.png" alt="image">
                </figure>
                    <div class="galleryContent">Nepal Buddhist Relegion</div>
                </a>
            </div>
            <div class="col-sm-4 grid-item" data-src="./assets/img/image.png">
                <a href="" class="galleryImage">
                    <figure>
                        <img src="./assets/img/image.png" alt="">
                    </figure>
                    <div class="galleryContent">Nepal Buddhist Relegion</div>
                </a>
            </div>
            <div class="col-sm-4 grid-item" data-src="./assets/img/ram.png">
                <a href="" class="galleryImage">
                    <figure>
                        <img src="./assets/img/ram.png" alt="">
                    </figure>
                    <div class="galleryContent">Nepal Buddhist Relegion</div>
                </a>
            </div>
            <div class="col-sm-4 grid-item" data-src="./assets/img/image.png">
                <a href="" class="galleryImage">
                    <figure>
                        <img src="./assets/img/image.png" alt="">
                    </figure>
                    <div class="galleryContent">Nepal Buddhist Relegion</div>
                </a>
            </div>
            <div class="col-sm-4 grid-item" data-src="./assets/img/img.png">
                <a href="" class="galleryImage">
                    <figure>
                        <img src="./assets/img/img.png" alt="">
                    </figure>
                    <div class="galleryContent">Nepal Buddhist Relegion</div>
                </a>
            </div>
            <div class="col-sm-4 grid-item" data-src="./assets/img/Boudhanath.jpg">
                <a href="" class="galleryImage">
                    <figure>
                        <img src="./assets/img/Boudhanath.jpg" alt="">
                    </figure>
                    <div class="galleryContent">Nepal Buddhist Relegion</div>
                </a>
            </div>
        </div>
    </div>
</section>

<?php include 'includes/budhhist/video.php';?>
<section id="map" class="sectionMap">
        
        <div class="map">
            <img src="./assets/img/map.png" alt="">
        </div>
        
    </section>
<?php include 'includes/budhhist/imagetext_content.php';?>
<?php //include 'includes/budhhist/circuits.php';?>
<?php //include 'includes/budhhist/testimonial.php';?>
<?php //include 'includes/nicci.php';?>
<?php include 'includes/footer.php';?>
<?php include 'includes/scripts.php';?>

</body>
</html>