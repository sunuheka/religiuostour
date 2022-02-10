<section id="expert" class="sectionExperts" style="background-color: #f5f5f5;">
  <div class="container">
    <div class="row">
      <div class="col-sm-12">
        <div class="blockHeading text-center">
          <div class="leadText">Experts</div>
            <h2 class="h2">Meet Our Experts</h2>
          </div>
      </div>
    </div>
  </div>

    <div class="swiper-container-experts">
        <!-- swiper slides -->
        <div class="swiper-wrapper " >
          <?php for( $i=1; $i <= 6; $i++ ) { ?>
            <div class="swiper-slide"> 
              <a href="" class="experts_content">
                <div class="experts_circuit"><h4>Budhhist Circuit</h4></div>
                <div class="two_experts">
                <div class="slidersmall_contents">
                  <div class="slidersmall_images">
                    <div class="slidersmall_image"> 
                      <img src="https://www.nicci.org/nicci/uploads/president/mr-arun-chaudhary.jpg" alt="banner">
                    </div>
                    <div class="slidersmall_flag nepal"></div>
                  </div>
                    <div class="slidersmall_content">
                      <h5> Mr. Prabhakar SJB Rana</h5>
                      <p class="tenuretext">Founder President
                      </p>
                    </div>            
                </div>
                <div class="slidersmall_contents">
                    <div class="slidersmall_images">
                      <div class="slidersmall_image"> 
                        <img src="https://www.nicci.org/nicci/uploads/president/mr-arun-chaudhary.jpg" alt="banner">
                      </div>
                      <div class="slidersmall_flag india"></div>
                    </div>
                    <div class="slidersmall_content">
                      <h5> Mr. Prabhakar SJB Rana</h5>
                      <p class="tenuretext">Founder President
                      </p>
                    </div>            
                </div>
                </div>
              </a> 
            </div>
          <?php } ?>
        </div>
        <!-- !swiper slides -->
    </div>
</section>
