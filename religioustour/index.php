<?php include 'includes/metahead.php';?>

<body class="home">


    <?php include 'includes/header.php';?>
    <!-- <?php //include 'includes/nav.php';?>     -->
    <?php include 'includes/banner.php';?>
   
<section id="about" class="contentBlock text-center fillBg">
    <div class="container overflow-hidden">
        <div class="row justify-content-center">
            <div class="col-sm-7 wrapper-760">
                <div class="blockHeading">
                    <div class="leadText">Message</div>
                    <h2 class="h3">View Messages From Our Executive Persons</h2>
                </div>
            </div>
            <div class="col-sm-12">
                <div class="swiper-container-list">
                    <!-- swiper slides -->
                    <div class="swiper-wrapper">
                        <?php for( $i=1; $i <= 3; $i++ ) { ?>
                            <div class="swiper-slide" >
                                <a href="#" class="listPersons">
                                    <div class="imageWrapper">
                                        <img src="./assets/img/person1.jpg" alt=""> 
                                    </div>
                                    <div class="listPersonsDetail">
                                        <div class="personsSocialicons"> 
                                        <span class="icon icon-facebook"></span>
                                        <span class="icon icon-twitter"></span>
                                        <span class="icon icon-instagram"></span>
                                        <span class="icon icon-pinterest"></span>
                                        <span class="icon icon-linkedln"></span>
                                        </div>
                                        <h3>Bharat Raj Paudyal</h3>
                                        <h5>Foreign a Secretary <span class="d-block">Nepal</span></h5>
                                        <p>The private guides were interesting and knowledgeable. We felt that they were more than just guides.</p>
                                    </div>
                                </a>
                            </div>
                        <?php } ?>
                    </div>

                    <!-- Add Pagination -->
                    <div class="swiper-pagination swiper-pagination-list"></div>
                </div>
            </div>
                
            
        </div>
    </div>
</section>


    <?php include 'includes/imagetext_content.php';?>
    <?php include 'includes/experts.php';?>
    <?php include 'includes/gallery.php';?>
    <?php //include 'includes/location.php';?>
    <!-- <?php //include 'includes/circuits.php';?> -->
    <?php //include 'includes/map.php';?>
    <?php //include 'includes/nicci.php';?>
    <?php include 'includes/member.php';?>
    <?php include 'includes/footer.php';?>
    <?php include 'includes/scripts.php';?>
</body>

</html>