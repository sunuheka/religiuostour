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
            <div class="contentBlockVideo">
                <div class="videoThumbnail">
                    <iframe width="500" height="408" src="https://www.youtube.com/embed/tgbNymZ7vqY"></iframe>
                </div> 
            </div>
        </div>
        </div>
    </div>
    </section>

    <section id="gallery" class="sectionGallery">
        <div class="container"> 
            <div class="row" id="lightgallery">
                <?php for( $i=1; $i <= 6; $i++ ) { ?>
                <div class="col-sm-4" data-src="./assets/img/image.png">
                    <a href="" class="galleryImage">
                    <figure>
                        <img src="./assets/img/image.png" alt="image">
                    </figure>
                        <div class="galleryContent">Nepal Buddhist Relegion</div>
                    </a>
                </div>
                <?php } ?> 
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