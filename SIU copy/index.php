
<?php
  include('header.php');
 ?>



    <!-- slider section start -->    
  <div class="container">
    <div class="row border_slider">
      <div class="col-md-7" style="padding-left: 0px">
        <div id="myCarousel" class="carousel slide" data-ride="carousel">
      <!-- Indicators -->
      <ol class="carousel-indicators">
      <li data-target="#myCarousel" data-slide-to="0" class="active"></li>
      <li data-target="#myCarousel" data-slide-to="1"></li>
      <li data-target="#myCarousel" data-slide-to="2"></li>
      </ol>

      <!-- Wrapper for slides -->
      <div class="carousel-inner slider_image">
      <div class="item active">
        <img src="img/slider1.jpg" alt="Los Angeles">
      </div>

      <div class="item">
        <img src="img/slider2.jpg" alt="Chicago">
      </div>

      <div class="item">
        <img src="img/slider3.jpg" alt="New York">
      </div>
      </div>

      <!-- Left and right controls -->
      <a class="left carousel-control" href="#myCarousel" data-slide="prev">
      <span class="glyphicon glyphicon-chevron-left"></span>
      <span class="sr-only">Previous</span>
      </a>
      <a class="right carousel-control" href="#myCarousel" data-slide="next">
      <span class="glyphicon glyphicon-chevron-right"></span>
      <span class="sr-only">Next</span>
      </a>
    </div>
      </div>
      <div class="col-md-5" style="line-height: 28px; padding-right: 20px">
        <h2 class="text-center" style="color:#C2A464">Welcome to</h2>
        <h2 class="text-center" style="color:#006666">SYLHET INTERNATIONAL UNIVERSITY</h2>
        <p class="text-justify font-weight-normal">The principal aim of the Sylhet International University is to provide high quality education at undergraduate and postgraduate levels relevant to the needs of a dynamic society. The courses and curricula are so designed as to enable a student to enter into the world of work or pursue higher academic and professional goals with a sound academic foundation. The academic goal of the university is not just to make the students pass the examination and get the degree but to equip them with the means to become productive members of the community and continue the practice of lifelong learning. Sylhet International University was established from the very beginning with a campus of its own. The campus is very much within the city of Sylhet though it is relatively calm and quiet, just suitable for the pursuit of knowledge. It is within walking distance from the <button class="text-primary rounded" style="background:#40A6D1;color:#fff; border:0px">read more</button></p>
        
        
      </div>
    </div>
  </div>

<!-- slider section end -->

<!-- this is the section of content after slider  -->

<div class="container">
  <div class="row ">
    <div class="col-md-3 ">
       <div class=" text-center border_thumb" style="margin-right: 10px">
    <h4 class="panel-heading">Academics</h4>
      <img class="img-responsive" src="img/english.jpg">
      <a href="school.php">School</a>  | 
      <a href="library.php">Library</a>   |
      <a href="">Faculty Members</a>   |
      <a href="academic-calender.php">Academic Calendar</a>   |
      <a href="syllabus.php">Syllabus</a>
      
      
    </div>
    </div>
  <div class="col-md-3">
       <div class=" text-center border_thumb" style="margin-right: 10px">
    <h4 class="panel-heading">Admission</h4>
      <img class="img-responsive" src="img/bba.jpg">
      <a href=""> Undergraduate</a> |
      <a href=""> Graduate</a>  |
      <a href=""> Tuition Fees</a>  |
      <a href=""> Admission Test</a>  |
      <a href=""> Accommodation </a>
      
       
    </div>
    </div>
    <div class="col-md-3 ">
      <div class="  text-center border_thumb" style="margin-right: 10px">
    <h4 class="panel-heading">Authority</h4>
        <img class="img-responsive" src="img/authority.jpg">
        <a href="">Syndicate</a>  | 
        <a href="">Academic Council</a>  | 
        <a href=""> Disciplinary Committee </a> | 
        <a href="">Finance Committee</a>  |
        <a href="">Dean Of School </a>
    </div>
    </div>
  <div class="col-md-3 ">
      <div class=" text-center border_thumb" style="">
    <h4 class="panel-heading">Faculty Members</h4>
      <img class="img-responsive" src="img/widget1.jpg">
       <a href="">Department of CSE</a>  | 
       <a href=""> Department of ECE </a>  |  
       <a href="">Department of BBA </a>  | 
       <a href="">Department of LAW</a>   | 
       <a href="">Department of ENGLISH </a>
    </div>
    </div>
</div>
</div>

<!-- this is the end of the content colunmn desing  -->




<!-- newsfeed upcoming events notice  -->
 <section id="">
  <div class="container">
    <div class="row">
      <div class="col-md-4 ">
        <div >
            <h3 class="glyphicon glyphicon-education"> Undergraduate Programs</h3>
        </div>

        <ul class="list-group customUl">
          <li class= "list-group-item list-group-item-action"><a href=""> Computer Science and Engineering </a> </li>
          <li class= "list-group-item list-group-item-action"><a href=""> Electrical Communication and Engineering </a> </li>
          <li class= "list-group-item list-group-item-action"><a href=""> Computer Science and Informatics </a> </li>
          <li class= "list-group-item list-group-item-action"><a href=""> Bachelor of Business Administration </a>  </li>
          <li class= "list-group-item list-group-item-action"><a href=""> Law </a>  </li>
          <li class= "list-group-item list-group-item-action"><a href=""> English </a>  </li>

        </ul>
        

      </div>
      <div class="col-md-4">
        <h3 class="glyphicon glyphicon-education"> Graduate Programs</h3>
        <ul class="list-group customUl">
          <li class="list-group-item list-group-item-action"><a href=""> Master of Business Administration </a> </li>
          <li class="list-group-item list-group-item-action"><a href=""> Master of Law </a> </li>
          <li class="list-group-item list-group-item-action"><a href=""> M.A </a> </li>

        </ul>
        

      </div>  




      <div class="col-md-4">
        <div class="newsfeed_area wow fadeInRight">
            <ul class="nav nav-tabs feed_tabs myNavTabs" id="myTab2">
              <li class="active"><a href="#news" data-toggle="tab">News</a></li>
              <li><a href="#notice" data-toggle="tab">Notice</a></li>
              <li><a href="#events" data-toggle="tab">Events</a></li>         
            </ul>

            <!-- Tab panes -->
            <div class="tab-content">
              <!-- Start news tab content -->
              <div class="tab-pane fade in active" id="news">                
                <ul class="news_tab">
                  <li>
                    <div class="media">
                      <div class="media-left">
                        <a class="news_img" href="#">
                          <img class="media-object" src="img/news.jpg" alt="img">
                        </a>
                      </div>
                      <div class="media-body">
                       <a href="#">Dummy text of the printing and typesetting industry</a>
                       <span class="feed_date">27.02.15</span>
                      </div>
                    </div>                    
                  </li>
                  <li>
                    <div class="media">
                      <div class="media-left">
                        <a class="news_img" href="#">
                          <img class="media-object" src="img/news.jpg" alt="img">
                        </a>
                      </div>
                      <div class="media-body">
                       <a href="#">Dummy text of the printing and typesetting industry</a>
                       <span class="feed_date">28.02.15</span>
                      </div>
                    </div>
                  </li>
                  <li>
                    <div class="media">
                      <div class="media-left">
                        <a class="news_img" href="#">
                          <img class="media-object" src="img/news.jpg" alt="img">
                        </a>
                      </div>
                      <div class="media-body">
                       <a href="#">Dummy text of the printing and typesetting industry</a>
                       <span class="feed_date">28.02.15</span>
                      </div>
                    </div>
                  </li>
                </ul>                
                <a class="see_all" href="#">See All</a>
              </div>
              <!-- Start notice tab content -->  
              <div class="tab-pane fade " id="notice">
                <div class="single_notice_pane">
                  <ul class="news_tab">
                    <li>
                      <div class="media">
                        <div class="media-left">
                          <a class="news_img" href="#">
                            <img class="media-object" src="img/news.jpg" alt="img">
                          </a>
                        </div>
                        <div class="media-body">
                         <a href="#">Dummy text of the printing and typesetting industry</a>
                         <span class="feed_date">27.02.15</span>
                        </div>
                      </div>                   
                    </li>
                    <li>
                      <div class="media">
                        <div class="media-left">
                          <a class="news_img" href="#">
                            <img class="media-object" src="img/notice.jpg" alt="img">
                          </a>
                        </div>
                        <div class="media-body">
                         <a href="#">Dummy text of the printing and typesetting industry</a>
                         <span class="feed_date">28.02.15</span>             
                        </div>
                      </div>
                    </li>
                    <li>
                      <div class="media">
                        <div class="media-left">
                          <a class="news_img" href="#">
                            <img class="media-object" src="img/notice.jpg" alt="img">
                          </a>
                        </div>
                        <div class="media-body">
                         <a href="#">Dummy text of the printing and typesetting industry</a>
                         <span class="feed_date">28.02.15</span>             
                        </div>
                      </div>
                    </li>                                    
                  </ul>
                  <ul class="news_tab">
                    <li>
                      <div class="media">
                        <div class="media-left">
                          <a class="news_img" href="#">
                            <img class="media-object" src="img/notice.jpg" alt="img">
                          </a>
                        </div>
                        <div class="media-body">
                         <a href="#">Contrary to popular belief, Lorem Ipsum is not simply random text</a>
                         <span class="feed_date">27.02.15</span>
                        </div>
                      </div>
                    </li>
                    <li>
                      <div class="media">
                        <div class="media-left">
                          <a class="news_img" href="#">
                            <img class="media-object" src="img/notice.jpg" alt="img">
                          </a>
                        </div>
                        <div class="media-body">
                         <a href="#">Dummy text of the printing and typesetting industry</a>
                         <span class="feed_date">28.02.15</span>          
                        </div>
                      </div>
                    </li>
                    <li>
                      <div class="media">
                        <div class="media-left">
                          <a class="news_img" href="#">
                            <img class="media-object" src="img/notice.jpg" alt="img">
                          </a>
                        </div>
                        <div class="media-body">
                         <a href="#">Contrary to popular belief, Lorem Ipsum is not simply random text</a>
                         <span class="feed_date">28.02.15</span>
                        </div>
                      </div>
                    </li>                                    
                  </ul>
                </div>               
              </div>
              <!-- Start events tab content -->
              <div class="tab-pane fade " id="events">
                <ul class="news_tab">
                  <li>
                    <div class="media">
                      <div class="media-left">
                        <a class="news_img" href="#">
                          <img class="media-object" src="img/news.jpg" alt="img">
                        </a>
                      </div>
                      <div class="media-body">
                       <a href="#">Dummy text of the printing and typesetting industry</a>
                       <span class="feed_date">27.02.15</span>
                      </div>
                    </div>
                  </li>
                  <li>
                    <div class="media">
                      <div class="media-left">
                        <a class="news_img" href="#">
                          <img class="media-object" src="img/news.jpg" alt="img">
                        </a>
                      </div>
                      <div class="media-body">
                       <a href="#">Dummy text of the printing and typesetting industry</a>
                       <span class="feed_date">28.02.15</span>                
                      </div>
                    </div>
                  </li>
                  <li>
                    <div class="media">
                      <div class="media-left">
                        <a class="news_img" href="#">
                          <img class="media-object" src="img/news.jpg" alt="img">
                        </a>
                      </div>
                      <div class="media-body">
                       <a href="#">Dummy text of the printing and typesetting industry</a>
                       <span class="feed_date">28.02.15</span>                
                      </div>
                    </div>
                  </li>                  
                </ul>
                <a class="see_all" href="#">See All</a>
              </div>
            </div>
          </div>
        

      </div>
      

    </div>
  </div>

 </section>


<!-- newsfeed upcoming events notice  -->



<!-- Bottom Up section about chairman and vice chancellor  -->
  
<div class="container" >
 <div class="row margin">
  <div class="col-md-5 border" style="margin-right: 10px">
    
    <div class="col-md-3">
      <img  class="img-responsive"  src="img/chairman.jpg" style="width: 120"; height="120" >
      <figcaption class="figure-caption text-center">Chairman <br><b>Shamim Ahmed</b></figcaption>
    </div>

    <div class="col-md-9 text-justify" >
      <p>Mr. Shamim Ahmed joined as Chairman of the Trustee Board (Gulshan Foundation for Education Development) of Sylhet International University on the 31st October, 2009 when his uncle Mr. Kutubuddin Ahmed retired on health grounds. Mr. Shamim Ahmed is a scion of an illustrious family which always played a philanthropic role 
      <button href="#" class="" style="background: #40A6D1; border: 0px">read more</button></p>
    </div>
  </div>
  
  <div class="col-md-6 border">
    
    <div class="col-md-3">
       <img  class="img-responsive" src="img/vc.jpg" style="width: 120"; height="120" >
       <figcaption class="figure-caption text-center">Vice Chancellor<br><b>Professor Md. Monir Uddin</b>
             </figcaption>
    </div>  
    <div class="col-md-9 text-justify"> 
      <p>Welcome to sylhet International University, Where excellent is nurtured, Pursued and celebrated. The student of today are the architects of today or tomorrow. To meet the challenges of the present in an ever charging globe, teeming with bleeding edge technology and relentless competitor . The graduates of today must also be determined but flexible, dexterous <button href="#" class="" style="background: #40A6D1; border: 0px">read more</button></p>
    </div>
  </div>
  </div>  
</div>

<!-- end chairman and vice chancellor -->




<?php 

  include('footer.php');
?>