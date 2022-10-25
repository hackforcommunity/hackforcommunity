<html>

<head>
  <title>Hack For Community</title>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>

      <!-- Twitter Meta -->
  <meta name="twitter:site" content="http://HackForCommunity">
  <meta name="twitter:creator" content="@Hac4Community">
  <meta name="twitter:card" content="summary">
  <meta name="twitter:title" content="Hack For Community">
  <meta name="twitter:description" content="A hackathon is a technology based social event that brings people together to solve problems or improve upon previous solutions. We have a couple types of Hackathon events that we lead and facilitate with organizations and groups of students of all ages and backgrounds.">
  <meta name="twitter:image" content="http://hackforcommunity.org/images/bg-default.png">
  
  <!-- Facebook Meta -->
  <meta property="og:url" content="http://HackForCommunity">
  <meta property="og:title" content="Hack For Community">
  <meta property="og:description" content="A hackathon is a technology based social event that brings people together to solve problems or improve upon previous solutions. We have a couple types of Hackathon events that we lead and facilitate with organizations and groups of students of all ages and backgrounds.">
  <meta property="og:type" content="website">
  <meta property="og:image" content="http://hackforcommunity.org/img/bg-default.png">
  <meta property="og:image:secure_url" content="http://hackforcommunity.org/images/bg-default.png">
  <meta property="og:image:type" content="image/jpg">
  <meta property="og:image:width" content="1200">
  <meta property="og:image:height" content="630">


  <meta name="keywords" content="web, hack-a-thons, mobile apps, iOS, h4c, Hack For Community, blacktech, blackowned">
  <meta name="author" content="Hack For Community">
  
  <meta name="description" content="A hackathon is a technology based social event that brings people together to solve problems or improve upon previous solutions. We have a couple types of Hackathon events that we lead and facilitate with organizations and groups of students of all ages and backgrounds.">
  
  <!-- Latest compiled and minified CSS -->
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css" integrity="sha384-BVYiiSIFeK1dGmJRAkycuHAHRg32OmUcww7on3RYdg4Va+PmSTsz/K68vbdEjh4u" crossorigin="anonymous">

  <!-- Optional theme -->
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap-theme.min.css" integrity="sha384-rHyoN1iRsVXV4nD0JutlnGaslCJuC7uwjduW9SVrLvRYooPp2bWYgmgJQIXwl/Sp" crossorigin="anonymous">

  <!-- Latest compiled and minified JavaScript -->
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js" integrity="sha384-Tc5IQib027qvyjSMfHjOMaLkfuWVxZxUPnCJA7l2mCWNIpG9mGCD8wGNIcPD7Txa" crossorigin="anonymous"></script>

  <link href="http://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.3.0/css/font-awesome.min.css" rel="stylesheet" type="text/css">

  <link href="css/h4c.css" rel="stylesheet" type="text/css">

  <script src='https://www.google.com/recaptcha/api.js'></script>
</head>

<body>
  <div class="navbar navbar-default navbar-static-top">
    <div class="container">
      <div class="navbar-header">
        <button type="button" class="navbar-toggle" data-toggle="collapse" data-target="#navbar-ex-collapse">
          <span class="sr-only">Toggle navigation</span>
          <span class="icon-bar"></span>
          <span class="icon-bar"></span>
          <span class="icon-bar"></span>
        </button>
        <a class="navbar-brand" href="/"><span> <img src="../images/H4C.jpg" class="img-responsive pull-left"></span></a>
      </div>
      <div class="collapse navbar-collapse" id="navbar-ex-collapse">
        <ul class="nav navbar-nav navbar-right">
          <li <?php if($where === "home"){echo 'class="active"';}?>>
            <a href=".">
              Home
              </a>
          </li>
          <li <?php if($where === "mission"){echo 'class="active"';}?>>
            <a href="mission">
              Our Mission
            </a>
          </li>
          <li <?php if($where === "programs"){echo 'class="active"';}?>>
            <a href="programs">
              Programs
            </a>
          </li>
          <li <?php if($where === "ourboard"){echo 'class="active"';}?>>
            <a href="ourboard">
              Our Founders
            </a>
          </li>
          <li>
            <a href="http://hackforcommunity.org/blog/">Blog</a>
          </li>
          <form class="navbar-form navbar-right" action="https://www.paypal.com/cgi-bin/webscr" method="post" target="_top">
            <input type="hidden" name="cmd" value="_s-xclick">
            <input type="hidden" name="hosted_button_id" value="MVXN78LHPJGLN">
            <!--input type="image" src="https://www.paypalobjects.com/en_US/i/btn/btn_donate_LG.gif" border="0" name="submit" alt="PayPal - The safer, easier way to pay online!"
            <!--img alt="" border="0" src="https://www.paypalobjects.com/en_US/i/scr/pixel.gif" width="1" height="1"-->
          
            <input type="submit" class="btn btn-outline-primary btn-info" name="" value="DONATE">
          </form>
        </ul>

      </div>
    </div>
  </div>