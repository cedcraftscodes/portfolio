<!doctype html>
<html lang="en">
<head>
  <title>Cedric Coloma</title>
  <!-- Required meta tags -->
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
  <meta property="og:url"         content="http://www.cedriccoloma.com/" />
  <meta property="og:type"        content="article" />
  <meta property="og:title"       content="Cedric Coloma" />
  <meta property="og:description" content="Hello, my name is Cedric Coloma and I am a graduate of STI College Santa Rosa. I took up Bachelor of Science in Information Technology because I love programming since I was in High School. I enjoy coding and developing new things. I'd like my career to revolve around programming , which I consider the \"most powerful tool of change\", for I believe that through programming, we can induce change and make our lives easier." />

  <meta property="og:image"       content="http://www.cedriccoloma.com/images/portfolio.jpg" />


  <!-- Bootstrap CSS -->
  <link rel="stylesheet" type="text/css" href="css/bootstrap.min.css">
  <link rel="stylesheet" type="text/css" href="css/style.css">
  <link rel="stylesheet" type="text/css" href="css/font-awesome.css">
  <link rel="stylesheet" type="text/css" href="css/social.css">

  <!-- Material Design fonts -->
  <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Roboto:300,400,500,700">
  <link rel="stylesheet" href="https://fonts.googleapis.com/icon?family=Material+Icons">

  <!-- Bootstrap Material Design -->
  <link rel="stylesheet" href="https://cdn.rawgit.com/FezVrasta/bootstrap-material-design/dist/dist/bootstrap-material-design.min.css">


</head>
<body>

  <div class="container-fluid top-bar">

  </div>
  <div class="container-fluid desc-bar">
    <div class="row">
      <div class="col-md-5 mx-auto">
        <img src="images/portfolio.jpg" class="rounded-circle" alt="Portfolio Image" width="150px" id="portfolio-img">
        <h1 >Cedric Coloma</h1>
        <h3 >Full Stack Developer</h3>

        <p>Hello, my name is Cedric Coloma and I am a graduate of STI College Santa Rosa. I took up Bachelor of Science in Information Technology because I love programming since I was in High School. I enjoy coding and developing new things. I'd like my career to revolve around programming , which I consider the "most powerful tool of change", for I believe that through programming, we can induce change and make our lives easier.  </p>

        <p>I dedicate myself in providing practical solutions to business owners and as well as to professionals who are having a hard time managing their businesses. </p>

        <button type="button" class="btn btn-raised btn-info" data-toggle="modal" data-target="#resumemodal"><i class="fa fa-download" aria-hidden="true"></i> Download My Resume</button>

        <a href="mailto:cedcraftscodes@gmail.com?Subject=We%20want%20you!" target="_top"" type="button" class="btn btn-raised btn-info"><i class="fa fa-user-circle-o" aria-hidden="true"></i> Hire Me</a>

        <div id="social">
          <a class="facebookBtn smGlobalBtn" href="https://www.facebook.com/cedricdon.coloma" ></a>
          <a class="twitterBtn smGlobalBtn" href="#" ></a>
          <a class="googleplusBtn smGlobalBtn" href="#" ></a>
          <a class="linkedinBtn smGlobalBtn" href="#" ></a>
          <a class="pinterestBtn smGlobalBtn" href="#" ></a>
          <a class="tumblrBtn smGlobalBtn" href="#" ></a>
          <a class="rssBtn smGlobalBtn" href="#" ></a>
        </div>
      </div>
    </div>

  </div>



  <div class="container-fluid contacts-bar">
    <ul class="list-inline" >
      <li class="list-inline-item"><i class="fa fa-envelope" aria-hidden="true"></i> cedcraftscodes@gmail.com</li>
      <li class="list-inline-item"><i class="fa fa-phone" aria-hidden="true"></i> +639235456583</li>
      <li class="list-inline-item"><i class="fa fa-globe" aria-hidden="true"></i> cedriccoloma.com</li>
    </ul>
  </div>



  <nav class="navbar navbar-expand-lg fixedElement navbar-custom" >
    <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
      <i class="fa fa-bars" aria-hidden="true" style="color: white;"></i>
    </button>


    <a class="navbar-brand hidden-xl-up" href="#">Cedric Coloma</a>

    <div class="collapse navbar-collapse" id="navbarSupportedContent">
      <ul class="navbar-nav mx-auto d-block">

        <li class="nav-item"> <a class="nav-link" href="#experience"><i class="fa fa-briefcase" aria-hidden="true"></i> Experience</a></li>
        <li class="nav-item"><a class="nav-link" href="#education"><i class="fa fa-graduation-cap" aria-hidden="true"></i> Education</a></li>
        <li class="nav-item"> <a class="nav-link"  href="#myskills"><i class="fa fa-wrench" aria-hidden="true"></i> My Skills</a></li>
        <li class="nav-item"> <a class="nav-link" href="#portfolio"><i class="fa fa-code" aria-hidden="true"></i> Portfolio</a></li>
        <li class="nav-item"> <a class="nav-link" href="#contacts"><i class="fa fa-phone" aria-hidden="true"></i> Contact</a></li>
      </ul>

    </div>
  </nav>




  <div class="container">



    <div class="modal fade" id="resumemodal" tabindex="-1" role="dialog" aria-labelledby="resumemodallabel" aria-hidden="true">
      <div class="modal-dialog" role="document">
        <div class="modal-content">
          <div class="modal-header">
            <h5 class="modal-title text-primary" id="resumemodallabel">Obtain my Resume</h5>
            <button type="button" class="close" data-dismiss="modal" aria-label="Close">
              <span aria-hidden="true">&times;</span>
            </button>
          </div>
          <form id="resumeform">
            <div class="modal-body">

              <div class="form-group">
                <label for="recipient-email" class="col-form-label">Your Email:</label><br>
                <input type="text" class="form-control" name="email" id="recipient-email" placeholder="Input valid email.">
              </div>
              <div class="form-group">
                <label for="message-text" class="col-form-label">Message:</label><br>
                <textarea class="form-control" id="message-text" name="message" rows=10 placeholder="Why do you want to obtain my resume?"></textarea>
              </div>
              <input type="hidden" value="submit_resume" name="action">

            </div>
            <div class="modal-footer">
              <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
              <button type="submit" class="btn btn-primary">Obtain a Copy</button>
            </div>
          </form>
        </div>
      </div>
    </div>


    <div class="modal fade" id="msgmodal" role="dialog">
      <div class="modal-dialog">
        <div class="modal-content">
          <div id="msgmodalheader" class="modal-header">
            <h4 class="modal-title text-primary" id="msgtitle"></h4>
            <button type="button" class="close" data-dismiss="modal" aria-label="Close">
              <span aria-hidden="true">&times;</span>
            </button>

          </div>
          <div class="modal-body">
            <p id="modalmsg"></p>
          </div>
          <div class="modal-footer">
            <button type="button" id="msgmodalbtn" class="btn btn-danger pull-right" data-dismiss="modal">Close</button>
          </div>
        </div>
      </div>
    </div>




    <a href="" class="anchor" id="experience"></a>
    <div class="card card-mp" >
      <h3>Experience</h3>
      <div class="row ">

      </div>
    </div>
    <a href="" class="anchor" id="education"></a>
    <div class="card card-mp" >
      <h3>Education</h3>
      <div class="row ">
        <div class="col-md-4 educ-card">
          <h4 class="text-primary">BS Information Technology</h4>
          <p>STI College Santa Rosa</p>
          <p class="text-muted">2014 - 2018</p>
          <p>A consistent deanslister with average GWA of not less than 1.5. Active in school competitions about programming like, Into Programming , App and Running and more.</p>
        </div>

        <div class="col-md-4 educ-card">
          <h4 class="text-primary">Secondary Education</h4>
          <p>Santa Rosa Science and Technology High School</p>
          <p class="text-muted">2010 - 2014</p>
          <p>A consistent deanslister with average GWA of not less than 1.5. Active in school competitions about programming like, Into Programming , App and Running and more.</p>
        </div>
        <div class="col-md-4 educ-card">
          <h4 class="text-primary">Primary Education</h4>
          <p>Pagkakaisa Elementary School</p>
          <p class="text-muted">2005 - 2010</p>
          <p>A consistent deanslister with average GWA of not less than 1.5. Active in school competitions about programming like, Into Programming , App and Running and more.</p>
        </div>
      </div>
    </div>

    <a href="" class="anchor" id="myskills"></a>
    <div class="card card-mp">
      <h3>My Skills</h3>
      <div class="row">

        <div class="col-md-6"">

          <div class="skillbar clearfix " data-percent="60%">
            <div class="skillbar-title" style="background: #d35400;"><span>HTML5</span></div>
            <div class="skillbar-bar" style="background: #e67e22;"></div>
            <div class="skill-bar-percent">60%</div>
          </div> <!-- End Skill Bar -->

          <div class="skillbar clearfix " data-percent="70%">
            <div class="skillbar-title" style="background: #2980b9;"><span>CSS3</span></div>
            <div class="skillbar-bar" style="background: #3498db;"></div>
            <div class="skill-bar-percent">70%</div>
          </div> <!-- End Skill Bar -->

          <div class="skillbar clearfix " data-percent="90%">
            <div class="skillbar-title" style="background: #2c3e50;"><span>jQuery</span></div>
            <div class="skillbar-bar" style="background: #2c3e50;"></div>
            <div class="skill-bar-percent">90%</div>
          </div> <!-- End Skill Bar -->

          <div class="skillbar clearfix " data-percent="90%">
            <div class="skillbar-title" style="background: #46465e;"><span>PHP</span></div>
            <div class="skillbar-bar" style="background: #5a68a5;"></div>
            <div class="skill-bar-percent">90%</div>
          </div> <!-- End Skill Bar -->

          <div class="skillbar clearfix " data-percent="75%">
            <div class="skillbar-title" style="background: #333333;"><span>Wordpress</span></div>
            <div class="skillbar-bar" style="background: #525252;"></div>
            <div class="skill-bar-percent">75%</div>
          </div> <!-- End Skill Bar -->

          <div class="skillbar clearfix " data-percent="65%">
            <div class="skillbar-title" style="background: #27ae60;"><span>SEO</span></div>
            <div class="skillbar-bar" style="background: #2ecc71;"></div>
            <div class="skill-bar-percent">65%</div>
          </div> <!-- End Skill Bar -->

          <div class="skillbar clearfix " data-percent="70%">
            <div class="skillbar-title" style="background: #124e8c;"><span>Photoshop</span></div>
            <div class="skillbar-bar" style="background: #4288d0;"></div>
            <div class="skill-bar-percent">70%</div>
          </div> <!-- End Skill Bar -->
        </div>

        <div class="col-md-6">
          <h4 class="text-center text-primary">Other Skills</h4>
          <div id="otherskills">

            <div class="btn-group text-center" role="group" aria-label="Other Skills">
              <button type="button" class="btn btn-primary">Wireframe</button>
              <button type="button" class="btn btn-warning">Git</button>
              <button type="button" class="btn btn-warning">MVC</button>
              <button type="button" class="btn btn-warning">Design Patterns</button>
              <button type="button" class="btn btn-danger">Material Design</button>
              <button type="button" class="btn btn-info">Content Marketting</button>
              <button type="button" class="btn btn-info">Japanese</button>
            </div>
          </div>
        </div>
      </div>

    </div>


    <a href="" class="anchor" id="portfolio"></a>
    <div class="card-mp" >
      <h3>Portfolio</h3>
      <div class="row ">
        <div class="col-md-4">
          <div class="card">
            <img class="card-img-top" src="images/pctofd.PNG" alt="FlashDriveFilesCopier">
            <div class="card-block">
              <h4 class="card-title">FlashDriveFilesCopier</h4>
              <p class="card-text">Copy files from flashdrive to your PC when it is plugged.</p>
              <a href="https://github.com/cedcraftscodes/FlashDriveFilesCopier" class="btn btn-primary">Clone in Github</a>
            </div>
          </div>
        </div>

        <div class="col-md-4">
          <div class="card">
            <img class="card-img-top" src="images/atext.JPG" alt="Card image cap">
            <div class="card-block">
              <h4 class="card-title">AutoResponder</h4>
              <p class="card-text">An android app that auto responds to messages received..</p>
              <a href="https://github.com/cedcraftscodes/AutoResponder" class="btn btn-primary">Clone in Github</a>
            </div>
          </div>
        </div>

        <div class="col-md-4">
          <div class="card">
            <img class="card-img-top" src="images/exttoand.JPG" alt="Card image cap">
            <div class="card-block">
              <h4 class="card-title">ExternalToAndroid</h4>
              <p class="card-text">Copies files from Flash Drive to Android using OTG automatically without prompting the user.</p>
              <a href="https://github.com/cedcraftscodes/ExternalToAndroid" class="btn btn-primary">Clone in Github</a>
            </div>
          </div>
        </div>
      </div>
    </div>

    <div class="card card-mp" >
      <h3>Other Things I do and Enjoy</h3>
      <div class="container text-center">
        <div class="btn-group" role="group" aria-label="Basic example">
          <button type="button" class="btn btn-primary">Blogging @ Itcstutorial.xyz</button>
          <button type="button" class="btn btn-default">Piano</button>
          <button type="button" class="btn btn-warning">Violin</button>
          <button type="button" class="btn btn-info">Code Reviewing</button>
          <button type="button" class="btn btn-success">Reading Books</button>
          <button type="button" class="btn btn-primary">Teaching Students</button>
          <button type="button" class="btn btn-warning">Watching Anime</button>
        </div>
      </div>
    </div>


    <div class="card card-mp" >
      <h3>Foods Consumed Over the Week</h3>
      <div class="container text-center">
        <div id="chartContainer" style="height: 370px; width: 100%;"></div>
      </div>
    </div>


    <a href="" class="anchor" id="contacts"></a>
    <div class="card card-mp">
      <h3>Get in Touch</h3>
      <div class="row ">
        <div class="col-md-3">
          <img src="images/portfolio.jpg" class="rounded-circle mx-auto d-block" alt="Portfolio Image" width="150px" id="portfolio-img-bot">
        </div>


        <div class="col-md-9">
          <div id="getintouch">
            <strong><p>I am currently accepting freelance work. I can create and deliver fast. I charge my clients based on worked render and not by how long a project it takes. </p></strong>
            <strong><p>I can help you with the following. </p></strong>
            <div class="list-group">
              <a href="#" class="list-group-item list-group-item-action list-group-item-success">Android App development with Android Studio</a>
              <a href="#" class="list-group-item list-group-item-action list-group-item-info">Windows Application Development using C#</a>
              <a href="#" class="list-group-item list-group-item-action list-group-item-warning">Landing Pages for your Business</a>
              <a href="#" class="list-group-item list-group-item-action list-group-item-danger">A Content Management System using PHP Frameworks</a>
              <a href="#" class="list-group-item list-group-item-action list-group-item-success">Setting up Blog using Wordpress</a>
              <a href="#" class="list-group-item list-group-item-action list-group-item-info">and more...</a>
            </div>

            <p>You can email me @ <i class="fa fa-envelope" aria-hidden="true"></i><code>cedcraftscodes@gmail.com</code> or message me @ <i class="fa fa-phone" aria-hidden="true"></i><code> +639235456583</code></p>
          </div>

        </div>
      </div>
    </div>



  </div>

  <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.3/umd/popper.min.js" integrity="sha384-vFJXuSJphROIrBnz7yo7oB41mKfc8JzQZiCq4NCceLEaO4IHwicKwpJf9c9IpFgh" crossorigin="anonymous"></script>
  <script src="js/jquery-3.2.1.min.js" type="text/javascript"></script>
  <script src="js/bootstrap.min.js" type="text/javascript"></script>


  <script src="https://cdn.rawgit.com/HubSpot/tether/v1.3.4/dist/js/tether.min.js"></script>
  <script src="https://cdn.rawgit.com/FezVrasta/bootstrap-material-design/dist/dist/bootstrap-material-design.iife.min.js"></script>
  <!-- IE10 viewport hack for Surface/desktop Windows 8 bug -->
  <script src="https://maxcdn.bootstrapcdn.com/js/ie10-viewport-bug-workaround.js"></script>
  <script>
    $('body').bootstrapMaterialDesign();
  </script>

  <script type="text/javascript">
    jQuery(document).ready(function(){
      jQuery('.skillbar').each(function(){
        jQuery(this).find('.skillbar-bar').animate({
          width:jQuery(this).attr('data-percent')
        },6000);
      });
    });



    $(document).ready(function(){
      $("a").on('click', function(event) {
        if (this.hash !== "") {
          event.preventDefault();
          var hash = this.hash;
          $('html, body').animate({
            scrollTop: $(hash).offset().top
          }, 800, function(){
            window.location.hash = hash;
          });
    } // End if
  });
    });



    $(window).scroll(function(e){ 
      var $el = $('.fixedElement'); 
      var isPositionFixed = ($el.css('position') == 'fixed');
      if ($(this).scrollTop() > 200 && !isPositionFixed){ 
        $('.fixedElement').css({'position': 'fixed', 'top': '0px', "margin-top" : "0px"}); 
      }
      if ($(this).scrollTop() < 200 && isPositionFixed)
      {
        $('.fixedElement').css({'position': 'static', 'top': '0px', "margin-top" : "-20px"}); 
      } 
    });



    $(document).keydown(function(e){
      if(e.which === 123){
       return false;
     }
   });
    $(document).bind("contextmenu",function(e) {
     e.preventDefault();
   });



 </script>



 <script type="text/javascript" src="js/foods.js"></script>
 <script src="https://canvasjs.com/assets/script/canvasjs.min.js"></script>
 <script type="text/javascript" src="js/emailresume.js"></script>
</body>
</html>