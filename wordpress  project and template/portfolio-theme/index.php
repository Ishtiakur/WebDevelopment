<?php get_header(); ?>

    <!-- Services -->
    <section id="services">
      <div class="container">
        <div class="row">
          <div class="col-lg-12 text-center">
            <h2 class="section-heading text-uppercase">  <?php echo cs_get_option('firs_sec_heading'); ?>  </h2>
            <h3 class="section-subheading text-muted"><?php echo cs_get_option('firs_sec_subHeading'); ?></h3>
          </div>
        </div>
        <div class="row text-center">

        <?php $group_sec_1 = cs_get_option('first_sec_group');
        if(is_array($group_sec_1)){
          foreach($group_sec_1 as $group_value){  ?>

           <div class="col-md-4">
              <span class="fa-stack fa-4x">
                  <i class="fa fa-circle fa-stack-2x text-primary"></i>
                  <i class="<?php echo  $group_value['first_sec_icon'] ?> fa-stack-1x fa-inverse"></i>
              </span>
                <h4 class="service-heading"> <?php echo $group_value['first_sec_title']   ?>  </h4>
                <p class="text-muted">  <?php echo $group_value['first_sec_desc']  ?>     </p>
          </div>
<?php 
          }  //end foreach loop  
       }  ///end if
       else{  ?>
           <div class="col-md-4">
            <span class="fa-stack fa-4x">
              <i class="fa fa-circle fa-stack-2x text-primary"></i>
              <i class="fa fa-shopping-cart fa-stack-1x fa-inverse"></i>
            </span>
            <h4 class="service-heading">E-Commerce</h4>
            <p class="text-muted">Lorem ipsum dolor sit amet, consectetur adipisicing elit. Minima maxime quam architecto quo inventore harum ex magni, dicta impedit.</p>
          </div>
          <div class="col-md-4">
            <span class="fa-stack fa-4x">
              <i class="fa fa-circle fa-stack-2x text-primary"></i>
              <i class="fa fa-laptop fa-stack-1x fa-inverse"></i>
            </span>
            <h4 class="service-heading">Responsive Design</h4>
            <p class="text-muted">Lorem ipsum dolor sit amet, consectetur adipisicing elit. Minima maxime quam architecto quo inventore harum ex magni, dicta impedit.</p>
          </div>
          <div class="col-md-4">
            <span class="fa-stack fa-4x">
              <i class="fa fa-circle fa-stack-2x text-primary"></i>
              <i class="fa fa-lock fa-stack-1x fa-inverse"></i>
            </span>
            <h4 class="service-heading">Web Security</h4>
            <p class="text-muted">Lorem ipsum dolor sit amet, consectetur adipisicing elit. Minima maxime quam architecto quo inventore harum ex magni, dicta impedit.</p>
          </div>
      <?php }
 ?>
        </div>
      </div>
    </section>

    <!-- Portfolio Grid -->
    <section class="bg-light" id="portfolio">
      <div class="container">
        <div class="row">
          <div class="col-lg-12 text-center">
            <h2 class="section-heading text-uppercase">  <?php echo cs_get_option('second_sec_heading'); ?>    </h2>
            <h3 class="section-subheading text-muted"> <?php echo cs_get_option('second_sec_subHeading');  ?>  </h3>
          </div>
        </div>
        <div class="row">
		<?php $group_sec_2 = cs_get_option('second_sec_group');
			if(is_array($group_sec_2)){
			  foreach($group_sec_2 as $group2_value){ 
				  $attachment = wp_get_attachment_image_src($group2_value['second_sec_col_img'], 'full' );
           ?>
                <div class="col-md-4 col-sm-6 portfolio-item">
                  <a class="portfolio-link" data-toggle="modal" href="#portfolioModal6">
                    <div class="portfolio-hover">
                      <div class="portfolio-hover-content">
                        <i class=" <?php echo $group2_value['second_sec_col_hover_icon'] ; ?> fa-3x"></i>
                      </div>
                    </div>
                    <img class="img-fluid" src=" <?php echo $attachment[0]; ?> " alt="">
                  </a>
                  <div class="portfolio-caption">
                    <h4> <?php   echo $group2_value['second_sec_col_title'];  ?>  </h4>
                    <p class="text-muted"> <?php echo $group2_value['second_sec_col_des'];  ?> </p>
                  </div>
                </div>

     <?php      
	 }
 }
?>
          
        </div>
      </div>
    </section>

    <!-- About -->
    <section id="about">
      <div class="container">
        <div class="row">
          <div class="col-lg-12 text-center">
            <h2 class="section-heading text-uppercase">  <?php echo  cs_get_option('third_sec_heading'); ?>   </h2>
            <h3 class="section-subheading text-muted">  <?php echo cs_get_option('third_sec_subHeading'); ?>   </h3>
          </div>
        </div>
        <div class="row">
          <div class="col-lg-12">
            <ul class="timeline">
              <li>
                <div class="timeline-image">
                      <?php  $about_sec_img = wp_get_attachment_image_src( cs_get_option('timeline_image'), 'full' ); ?>
                  <img class="rounded-circle img-fluid" src=" <?php echo $about_sec_img[0];   ?> " alt="">
                </div>
                <div class="timeline-panel">
                  <div class="timeline-heading">
                    <h4>2009-2011</h4>
                    <h4 class="subheading">Our Humble Beginnings</h4>
                  </div>
                  <div class="timeline-body">
                    <p class="text-muted">Lorem ipsum dolor sit amet, consectetur adipisicing elit. Sunt ut voluptatum eius sapiente, totam reiciendis temporibus qui quibusdam, recusandae sit vero unde, sed, incidunt et ea quo dolore laudantium consectetur!</p>
                  </div>
                </div>
              </li>
              <li class="timeline-inverted">
                <div class="timeline-image">
                <?php  $about_sec_img2 = wp_get_attachment_image_src( cs_get_option('timeline_image2'), 'full' ); ?>
                  <img class="rounded-circle img-fluid" src="<?php echo $about_sec_img2[0]; ?>" alt="">
                </div>
                <div class="timeline-panel">
                  <div class="timeline-heading">
                    <h4>March 2011</h4>
                    <h4 class="subheading">An Agency is Born</h4>
                  </div>
                  <div class="timeline-body">
                    <p class="text-muted">Lorem ipsum dolor sit amet, consectetur adipisicing elit. Sunt ut voluptatum eius sapiente, totam reiciendis temporibus qui quibusdam, recusandae sit vero unde, sed, incidunt et ea quo dolore laudantium consectetur!</p>
                  </div>
                </div>
              </li>
              <li class="timeline-inverted">
                <div class="timeline-image">
                  <h4>Be Part
                    <br>Of Our
                    <br>Story!</h4>
                </div>
              </li>
            </ul>
          </div>
        </div>
      </div>
    </section>

    <!-- Team -->
    <section class="bg-light" id="team">
      <div class="container">
        <div class="row">
          <div class="col-lg-12 text-center">
            <h2 class="section-heading text-uppercase"> <?php echo cs_get_option('team_sec_heading'); ?>  </h2>
            <h3 class="section-subheading text-muted"><?php echo cs_get_option('team_sec_sub_heading'); ?> </h3>
          </div>
        </div>


        <div class="row">
        <?php $group_sec_4 = cs_get_option('team_member_group');
			if(is_array($group_sec_4)){
			  foreach($group_sec_4 as $group4_value){ 
				  $member_img = wp_get_attachment_image_src($group4_value['fourth_sec_col_image'], 'full' );
           ?>
          <div class="col-sm-4">
            <div class="team-member">
              <img class="mx-auto rounded-circle" src=" <?php echo $member_img[0]; ?> " alt="">
              <h4>  <?php echo  $group4_value['fourth_sec_col_name']; ?>  </h4>
              <p class="text-muted"> <?php echo  $group4_value['fourth_sec_col_position']; ?> </p>
              <ul class="list-inline social-buttons">
                <li class="list-inline-item">
                  <a href="<?php echo  $group4_value['twitter_id']; ?>">
                    <i class="fa fa-twitter"></i>
                  </a>
                </li>
                <li class="list-inline-item">
                  <a href="<?php echo  $group4_value['fb_id']; ?>">
                    <i class="fa fa-facebook"></i>
                  </a>
                </li>
                <li class="list-inline-item">
                  <a href="<?php echo  $group4_value['linked_id']; ?>">
                    <i class="fa fa-linkedin"></i>
                  </a>
                </li>
              </ul>
            </div>    <!-- end of team member --> 
          </div>    <!-- end of col-sm-4 -->
          <?php 
        }
      }
    ?>  
        </div>     <!-- end of row --> 
    
      </div>
    </section>

    <!-- Clients -->
    <section class="py-5">
      <div class="container clients_image">
          <h2 class="text-center ">Our Clients</h2></br>
        <div class="row">
        <div class="col-md-12 col-sm-12">
            <a href="<?php the_permalink(); ?>">
             <?php  echo do_shortcode('[wpaft_logo_slider]'); ?>
            </a>
          </div>
        </div>
      </div>
    </section>

          

    <!-- Contact -->
    <section id="contact">
      <div class="container">
        <div class="row">
          <div class="col-lg-12 text-center">
            <h2 class="section-heading text-uppercase"> <?php echo cs_get_option('contact_heading'); ?> </h2>
            <h3 class="section-subheading text-muted"> <?php echo cs_get_option('contact_sub_heading'); ?> </h3>
          </div>
        </div>
        <div class="row">
          <div class="col-lg-12">
            <form id="contactForm" name="sentMessage" novalidate>
              <div class="row">
                <div class="col-md-6">
                  <div class="form-group">
                    <input class="form-control" id="name" type="text" placeholder="Your Name *" required data-validation-required-message="Please enter your name.">
                    <p class="help-block text-danger"></p>
                  </div>
                  <div class="form-group">
                    <input class="form-control" id="email" type="email" placeholder="Your Email *" required data-validation-required-message="Please enter your email address.">
                    <p class="help-block text-danger"></p>
                  </div>
                  <div class="form-group">
                    <input class="form-control" id="phone" type="tel" placeholder="Your Phone *" required data-validation-required-message="Please enter your phone number.">
                    <p class="help-block text-danger"></p>
                  </div>
                </div>
                <div class="col-md-6">
                  <div class="form-group">
                    <textarea class="form-control" id="message" placeholder="Your Message *" required data-validation-required-message="Please enter a message."></textarea>
                    <p class="help-block text-danger"></p>
                  </div>
                </div>
                <div class="clearfix"></div>
                <div class="col-lg-12 text-center">
                  <div id="success"></div>
                  <button id="sendMessageButton" class="btn btn-primary btn-xl text-uppercase" type="submit">Send Message</button>
                </div>
              </div>
            </form>
          </div>
        </div>
      </div>
    </section>

    <!-- Footer -->
    <footer>
      <div class="container">
        <div class="row">
          <div class="col-md-4">
            <span class="copyright">Copyright &copy; Your Website 2017</span>
          </div>
          <div class="col-md-4">
            <ul class="list-inline social-buttons">
              <li class="list-inline-item">
                <a href="#">
                  <i class="fa fa-twitter"></i>
                </a>
              </li>
              <li class="list-inline-item">
                <a href="#">
                  <i class="fa fa-facebook"></i>
                </a>
              </li>
              <li class="list-inline-item">
                <a href="#">
                  <i class="fa fa-linkedin"></i>
                </a>
              </li>
            </ul>
          </div>
          <div class="col-md-4">
            <ul class="list-inline quicklinks">
              <li class="list-inline-item">
                <a href="#">Privacy Policy</a>
              </li>
              <li class="list-inline-item">
                <a href="#">Terms of Use</a>
              </li>
            </ul>
          </div>
        </div>
      </div>
    </footer>

    <!-- Portfolio Modals -->

  

<?php get_footer();?>