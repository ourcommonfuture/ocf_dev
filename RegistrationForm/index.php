<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <!-- This file has been downloaded from Bootsnipp.com. Enjoy! -->
    <title>Online UWC : Course Registration</title>
        <meta name="viewport" content="width=device-width, initial-scale=1">
    <!-- <link href="http://netdna.bootstrapcdn.com/bootstrap/3.1.0/css/bootstrap.min.css" rel="stylesheet"> -->
    <link rel="stylesheet" href="http://bootswatch.com/cosmo/bootstrap.css" type="text/css" >
    <link href='http://fonts.googleapis.com/css?family=Asap' rel='stylesheet' type='text/css'>
    <script src="http://code.jquery.com/jquery-1.10.2.js"></script>
    <script src="http://code.jquery.com/ui/1.11.2/jquery-ui.js"></script>



    
    <style type="text/css">
      body{ 
    margin-top:40px; 
}
ul { list-style-type: none; margin: 0; padding: 0; margin-bottom: 10px; }
  #items>li { list-style-type: none;margin: 5px; padding: 5px;  border-left: 1px solid #FCDADA; border-bottom: 1px solid #FCDADA; background-color: #FFF0F0; font-family:Asap; color:black; font-size:16px;}

.stepwizard-step p {
    margin-top: 10px;
}

.stepwizard-row {
    display: table-row;
}

.stepwizard {
    display: table;
    width: 100%;
    position: relative;
    margin-bottom:35px;
}

.stepwizard-step button[disabled] {
    opacity: 1 !important;
    filter: alpha(opacity=100) !important;
}

.stepwizard-row:before {
    top: 14px;
    bottom: 0;
    position: absolute;
    content: " ";
    width: 100%;
    height: 1px;
    background-color: #ccc;
    z-order: 0;

}

.stepwizard-step {
    display: table-cell;
    text-align: center;
    position: relative;
}

/*.stepwizard-step > .btn-primary {
    background-color:#F85D62;
}*/

.stepwizard-step >.btn-circle {
  width: 30px;
  height: 30px;
  text-align: center;
  padding: 6px 0;
  font-size: 12px;
  line-height: 1.428571429;
  border-radius: 15px;
}
    </style>
    <script src="http://code.jquery.com/jquery-1.10.2.min.js"></script>
    <script src="http://netdna.bootstrapcdn.com/bootstrap/3.1.0/js/bootstrap.min.js"></script>
    <script src="sortable.js"></script>

    <link href="css/bootstrap.css" rel="stylesheet">
<link href="css/style.css" rel="stylesheet">
<!-- Responsive -->
<link href="css/responsive.css" rel="stylesheet">
<!-- Choose Layout -->
<link href="css/layout-wide.css" rel="stylesheet">
<!-- Choose Skin -->
<link href="css/skin-green.css" rel="stylesheet">
<link rel="shortcut icon" href="favicon.ico">
<!-- Demo -->
<link rel="stylesheet" id="main-color" href="css/skin-green.css" media="screen"/>
<link href='//fonts.googleapis.com/css?family=Asap:400,500,600,700,400italic,700italic' rel='stylesheet' type='text/css'>

</head>
<body class="off">
    <div class="wrapbox">
        <?php include 'includes/navbar.php';?>
<section class="grayarea" id="aboutOCF" >
<div class="container">
    <div class="row">
        <div class="col-md-12" style="margin-bottom:30px; text-align:center;"> <h2 style="font-family: 'Asap', sans-serif; letter-spacing:-1px; font-weight:100;">Course Registration</h2></div>
    </div>
<div class="stepwizard">

    <div class="stepwizard-row setup-panel">
        <div class="stepwizard-step">
            <a href="#step-1" type="button" style="background:red; color:white;"class="btn btn-primary btn-circle">1</a>
            <p>Choose Course</p>
        </div>
        <div class="stepwizard-step">
            <a href="#step-2" type="button" style="background:red; color:white;"class="btn btn-default btn-circle" disabled="disabled">2</a>
            <p>Take Action</p>
        </div>
        <div class="stepwizard-step">
            <a href="#step-3" type="button" style="background:red; color:white;"class="btn btn-default btn-circle" disabled="disabled">3</a>
            <p>About you</p>
        </div>
        <div class="stepwizard-step">
            <a href="#step-4" type="button" style="background:red; color:white;"class="btn btn-default btn-circle" disabled="disabled">4</a>
            <p>Little more about you</p>
        </div>
        <div class="stepwizard-step">
            <a href="#step-5" type="button" style="background:red; color:white;"class="btn btn-default btn-circle" disabled="disabled">5</a>
            <p>Additional Information</p>
        </div>
        <div class="stepwizard-step">
            <a href="#step-6" type="button" style="background:red; color:white;"class="btn btn-default btn-circle" disabled="disabled">6</a>
            <p>Summary</p>
        </div>
        <div class="stepwizard-step">
            <a href="#step-7" type="button" style="background:red; color:white;"class="btn btn-default btn-circle" disabled="disabled">7</a>
            <p>Payment</p>
        </div>
    </div>
</div>
<form role="form">
    <div class="row setup-content" id="step-1">
        <div class="col-xs-12">
            <div class="col-md-2"></div>
            <div class="col-md-8">
                <p style="font-weight:bold; font-family:asap; font-size:20px; letter-spacing:-1px;">Choose your desired course </p><br>
                <input type="radio" name="group1" value="human_rights" onchange="selectCourse(this.value)"checked> <span style="font-family:asap; font-size:20px; padding-left:5px;" >Contemporary Issues in International Politics and Human Rights</span><br><br>
                <input type="radio" name="group1" value="social_etp" onchange="selectCourse(this.value)" > <span style="font-family:asap; font-size:20px; padding-left:5px;">Social Entrepreneurship - Innovative Solutions to Social Problems</span><br><br>
                <input type="radio" name="group1" value="sustainable_dev" onchange="selectCourse(this.value)"> <span style="font-family:asap; font-size:20px; padding-left:5px;">Sustainable Development and Design Thinking</span><br><br>
                 <button class="btn btn-success nextBtn btn-lg pull-right" type="button" >Next</button>
            </div>
            <div class="col-md-2"></div>
        </div>
    </div>
    <div class="row setup-content" id="step-2">
        <div class="col-xs-12">
            <div class="col-md-2"></div>
            <div class="col-md-8" id="social_etp" style="display:none;">
                <form role="form">
                <p style="font-weight:bold; font-family:asap; font-size:20px; letter-spacing:-1px;">Why is social enterpreneurship important to you? *</p>
                <section>
                    <textarea required="" class="form-control" type="text" style="height:150px; resize:none;" ></textarea>
                </section>
                <br>

                <p style="font-weight:bold; font-family:asap; font-size:20px; letter-spacing:-1px;">How would you like to make a change in your local community/the wider world? What is your plan to do this? *</p>
                <p style="font-style:italic;">Please outline how you would like to become a social entrerpreneur. This will help us to fit the course around the needs of students.</p>
                <textarea required="" class="form-control" type="text" style="height:150px; resize:none;" required="required" ></textarea>
                <br>

                <p style="font-weight:bold; font-family:asap; font-size:20px; letter-spacing:-1px;">What are some challenges social entrepreneurs face in trying to set up their projects? *</p>
                <p style="font-style:italic;">Do you have any personal experience with these challenges?</p>
                <textarea required="" class="form-control" type="text" style="height:150px; resize:none;" required="required"  ></textarea>
                <br>
            </form>
                

    
                <button class="btn btn-success nextBtn btn-lg pull-right" type="button">Next</button>
            </div>
            <div class="col-md-8" id="human_rights" style="">
                
                <form role="form">
                <p style="font-weight:bold; font-family:asap; font-size:20px; letter-spacing:-1px;">Why are international politics and human rights important to you? *</p>
                <section>
                    <textarea required="" class="form-control" type="text" style="height:150px; resize:none;" ></textarea>
                </section>
                <br>

                <p style="font-weight:bold; font-family:asap; font-size:20px; letter-spacing:-1px;">How do international politics and human rights relate? What is the purpose of learning about these issues? *</p>
                
                <textarea required="" class="form-control" type="text" style="height:150px; resize:none;" required="required" ></textarea>
                <br>

                <p style="font-weight:bold; font-family:asap; font-size:20px; letter-spacing:-1px;">What are some issues you would like to focus on in the course? Why? *</p>
                <p style="font-style:italic;">This will help us to shape the course around what you would like to learn about.</p>
                <textarea required="" class="form-control" type="text" style="height:150px; resize:none;" required="required"  ></textarea>
                <br>
            </form>

    
                <button class="btn btn-success nextBtn btn-lg pull-right" type="button">Next</button>
            </div>
            <div class="col-md-8" id="sustainable_dev" style="display:none;">
                
                <p style="font-weight:bold; font-family:asap; font-size:20px; letter-spacing:-1px;">Which topics would you like to learn about?</p>
                <p style="font-style:italic;">This is where you want to take action. We are following the UN's 17 proposed <span><a href="http://sustainabledevelopment.un.org/sdgsproposal.html"> Sustainable Development Goals.</a></span>
                <p> Choose three options by dragging them at the top of the list. </p> <br />

                <!-- for more info about this library https://github.com/RubaXa/Sortable -->
                <div class="form-group">
                    <ul id="items">
                      <li>End poverty in all its forms everywhere</li>
                      <li>End hunger, achieve food security and improved nutrition and promote sustainable agriculture</li>
                      <li>Ensure healthy lives and promote well-being for all at all ages</li>
                      <li>Ensure inclusive and equitable quality education and promote lifelong learning opportunities for all</li>
                      <li>Achieve gender equality and empower all women and girls</li>
                      <li>Ensure availability and sustainable management of water and sanitation for all</li>
                      <li>Ensure access to affordable, reliable, sustainable and modern energy for all</li>
                      <li>Promote sustained, inclusive and sustainable economic growth, full and productive employment and decent work for all</li>
                      <li>Build resilient infrastructure, promote inclusive and sustainable industrialization and foster innovation</li>
                      <li>Reduce inequality within and among countries</li>
                      <li>Make cities and human settlements inclusive, safe, resilient and sustainable</li>
                      <li>Ensure sustainable consumption and production patterns</li>
                      <li>Take urgent action to combat climate change and its impacts</li>
                      <li>Conserve and sustainably use the oceans, seas and marine resources for sustainable development</li>
                      <li>Protect, restore and promote sustainable use of terrestrial ecosystems, sustainably manage forests, combat desertification, and halt and reverse land degradation and halt biodiversity loss</li>
                      <li> Promote peaceful and inclusive societies for sustainable development, provide access to justice for all and build effective, accountable and inclusive institutions at all levels</li>
                      <li>Strengthen the means of implementation and revitalize the global partnership for sustainable development</li>
                    </ul>
                </div>
                <br/>
                <div class="form-group">
                    <label style="font-weight:bold;  font-family:asap; font-size:20px; letter-spacing:-1px;"class="control-label">Why would you like to learn more about sustainability?</label>
                    <textarea required="" class="form-control" height="150px" type="text"  style="height:150px; resize:none;" resize="none" ></textarea>
                </div>
                <br />
                <div class="form-group">
                    <label style="font-weight:bold; font-family:asap; font-size:20px; letter-spacing:-1px;"class="control-label">What is one thing that you could do in your community to raise awareness about sustainability / resolve a sustainability related issue?</label>
                    <textarea required="" class="form-control" type="text" style="height:150px; resize:none;"  ></textarea>
                </div>

    
                <button class="btn btn-success nextBtn btn-lg pull-right" type="button">Next</button>
            </div>
            <div class="col-md-2"></div>
        </div>
    </div>
    <div class="row setup-content center" id="step-3">
        <div class="col-xs-12">
            <div class="col-md-2"></div>
            <div class="col-md-8">
                <p style="font-weight:bold; font-family:asap; font-size:20px; letter-spacing:-1px;"> About You</p>
                <div class="form-group">
                    <label class="control-label">First Name</label>
                    <input maxlength="200" type="text" required="required" class="form-control" placeholder="Please write your first name" />
                </div>
                
                <div class="form-group">
                    <label class="control-label">Last Name</label>
                    <input maxlength="200" type="text" required="required" class="form-control" placeholder="Please write your last name"  />
                </div>
                <div class="form-group">
                    <label class="control-label">How old are you?</label>
                    <input maxlength="200" type="text" required="required" class="form-control" placeholder="Please write your age"  />
                </div>
                <div class="form-group">
                    <label class="control-label">What is your email address?</label>
                    <input maxlength="200" type="text" required="required" class="form-control" placeholder="Please write your email address"  />
                </div>
                <div class="form-group">
                    <label class="control-label">Do you have any previous affiliation with UWC?</label>
                    <p style="font-style:italic;">Select all that apply</p>
                    <input type="checkbox" name="" value=""> I have applied to UWC<br>
                    <input type="checkbox" name="" value=""> I will be attending a UWC college in the fall/autumn<br>
                    <input type="checkbox" name="" value=""> I will or may apply to UWC in the future<br>
                    <input type="checkbox" name="" value=""> I recently graduated from UWC<br>
                    <input type="checkbox" name="" value=""> I have friends or family who currently attend or have attended UWC<br>
                    <input type="checkbox" name="" value=""> I have attended a UWC short course<br>
                    <input type="checkbox" name="" value=""> I have attended Online UWC<br>
                    <input type="checkbox" name="" value=""> I don't really know much about UWC<br>
                    <p>Other:</p>
                    <textarea required="" class="form-control" type="text" style="height:80px; resize:none;"  ></textarea>


                </div>
                <button class="btn btn-success nextBtn btn-lg pull-right" type="button" >Next</button>
            </div>
            <div class="col-md-2"></div>
        </div>
    </div>
    <div class="row setup-content" id="step-4">
        <div class="col-xs-12">
            <div class="col-md-2"></div>
            <div class="col-md-8">
                <p style="font-weight:bold; font-family:asap; font-size:20px; letter-spacing:-1px;"> Little more about you</p>
                <div class="form-group">
                    <label class="control-label">Where are you from?</label>
                    <input maxlength="200" type="text" required="required" class="form-control" placeholder=""  />
                </div>
                <div class="form-group">
                    <label class="control-label">Where will you be living for the duration of the couse (if this differs from your answer to the question above)?</label>
                <p style="font-style:italic;">Between 5th January - 9th February 2015</p>

                    <input maxlength="200" type="text" required="required" class="form-control" placeholder=""  />
                </div>
                <div class="form-group">
                    <label class="control-label">Please select which time-zone of the course you require. *</label>
                <p style="font-style:italic;">The course will run according to three regional time zones.</p>

                    <input type="radio" name="timeZone" value="asia_pacific"><span style="padding-left:5px;">Asia-Pacific</span><br>
                    <input type="radio" name="timeZone" value="emea"><span style="padding-left:5px;">Europe, Middle East and Africa + India and Pakistan (EMEA+IP)</span><br>
                    <input type="radio" name="timeZone" value="americas"><span style="padding-left:5px;">Americas</span><br>
                    <input type="radio" name="timeZone" value="not_sure"><span style="padding-left:5px;">I'm not sure</span><br>
                </div>
                <div class="form-group">
                    <label class="control-label">Your one-hour group sessions will be every Thursday evening. Please tell us what time works for you. Select as many options that apply. *</label>
                <p style="font-style:italic;">Please note that we give the times according to a standard city time which may be different to your time zone. Use Google to find out the difference between where you live and the times below!</p>

                    <input type="checkbox" name="sessionTime" value="5_6HK"><span style="padding-left:5px;">5pm-6pm (Hong Kong time UTC+8)</span><br>
                    <input type="checkbox" name="sessionTime" value="6_7HK"><span style="padding-left:5px;">6pm-7pm (Hong Kong time UTC+8)</span><br> 
                    <input type="checkbox" name="sessionTime" value="7_8HK"><span style="padding-left:5px;">7pm-8pm (Hong Kong time UTC+8)</span><br>
                    <input type="checkbox" name="sessionTime" value="8_9HK"><span style="padding-left:5px;">8pm-9pm (Hong Kong time UTC+8)</span><br> 
                    <input type="checkbox" name="sessionTime" value="5_6L"><span style="padding-left:5px;">5pm-6pm (London time UTC+0)</span><br>
                    <input type="checkbox" name="sessionTime" value="6_7L"><span style="padding-left:5px;">6pm-7pm (London time UTC+0)</span><br> 
                    <input type="checkbox" name="sessionTime" value="7_8L"><span style="padding-left:5px;">7pm-8pm (London time UTC+0)</span><br>
                    <input type="checkbox" name="sessionTime" value="8_9L"><span style="padding-left:5px;">8pm-9pm (London time UTC+0)</span><br>
                    <input type="checkbox" name="sessionTime" value="5_6NY"><span style="padding-left:5px;">5pm-6pm (New York time UTC-5)</span><br>
                    <input type="checkbox" name="sessionTime" value="6_7NY"><span style="padding-left:5px;">6pm-7pm (New York time UTC-5)</span><br>
                    <input type="checkbox" name="sessionTime" value="7_8NY"><span style="padding-left:5px;">7pm-8pm (New York time UTC-5)</span><br>
                    <input type="checkbox" name="sessionTime" value="8_9NY"><span style="padding-left:5px;">8pm-9pm (New York time UTC-5)</span><br> 
                </div>

                <div class="form-group">
                    <label class="control-label">How would you rate your command of English?</label>
                    <p>I can communicate on a basic level</p>
                    <input type="radio" name="rate" value="1"><span style="padding-left:5px">1</span><br>
                    <input type="radio" name="rate" value="2"><span style="padding-left:5px">2</span><br>
                    <input type="radio" name="rate" value="3"><span style="padding-left:5px">3</span><br>
                    <input type="radio" name="rate" value="4"><span style="padding-left:5px">4</span><br>
                    <input type="radio" name="rate" value="5"><span style="padding-left:5px">5</span><br>
                    <p>I have native speaker ability</p>

                </div>


                <button class="btn btn-success nextBtn btn-lg pull-right" type="button" >Next</button>
            </div>
            <div class="col-md-2"></div>
        </div>
    </div>
    <div class="row setup-content" id="step-5">
        <div class="col-xs-12">
            <div class="col-md-2"></div>
            <div class="col-md-8">
                <p style="font-weight:bold; font-family:asap; font-size:20px; letter-spacing:-1px;"> Additional Information</p>
                <div class="form-group">
                    <label class="control-label">How do you access the Internet?</label><br>
                    <input type="radio" name="rate" value="dial"><span style="padding-left:5px">Dial-up connection</span><br>
                    <input type="radio" name="rate" value="slow_speed"><span style="padding-left:5px">It's supposed to be a high speed network, but it's actually quite slow</span><br>
                    <input type="radio" name="rate" value="high_speed"><span style="padding-left:5px">High speed network</span><br>
                    <input type="text" name="rate" placeholder="Other"><br>
                </div>
                <div class="form-group">
                    <label class="control-label">Where do you access the Internet?</label>
                    <p style="font-style:italic;">Select all that apply</p>
                    <input type="checkbox" name="internet_location" value="Home"><span style="padding-left:5px">At Home</span><br>
                    <input type="checkbox" name="internet_location" value="School"><span style="padding-left:5px">At School </span><br>
                    <input type="checkbox" name="internet_location" value="library"><span style="padding-left:5px">At a public library</span><br>
                    <input type="text" name="rate" placeholder="Other"><br> 
                </div>
                <div class="form-group">
                    <label class="control-label">Have you taken any online courses before?</label>
                    <p style="font-style:italic;">Please provide details, including with which provider(s) and whether you completed the course. Please leave the box blank if you have not taken any online courses before.</p>
                    <br>
                    <textarea required="" class="form-control" type="text" style="height:80px; resize:none;"  ></textarea>
                     <br>
                </div>
                 <div class="form-group">
                    <label class="control-label">How did you hear about this course?</label><br>
                    <input type="checkbox" name="" value="facebook"><span style="padding-left:5px">Facebook</span><br>
                    <input type="checkbox" name="" value="friend"><span style="padding-left:5px">A friend sent me a link</span><br>
                    <input type="checkbox" name="" value="ocf"><span style="padding-left:5px">The OCF website</span><br>
                    <input type="checkbox" name="" value="taken_before"><span style="padding-left:5px">I have taken another OCF course before</span><br>
                    <input type="text" name="rate" placeholder="Other"><br>
                     
                </div>
                <button class="btn btn-success nextBtn btn-lg pull-right" type="submit">Next</button>
            </div>
            <div class="col-md-2"></div>
        </div>
    </div>
    <div class="row setup-content" id="step-6">
        <div class="col-xs-12">
            <div class="col-md-2"></div>
            <div class="col-md-8">
                <p style="font-weight:bold; font-family:asap; font-size:20px; letter-spacing:-1px;">Summary</p>
                <br>
                <p style="font-weight:bold; font-family:asap; font-size:20px; letter-spacing:-1px;">Lorem ipsum dolor sit amet, consectetur adipiscing elit. </p><br>
                <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Integer nec odio. Praesent libero. Sed cursus ante dapibus diam. Sed nisi. Nulla quis sem at nibh elementum imperdiet. Duis sagittis ipsum. Praesent mauris. Fusce nec tellus sed augue semper porta. Mauris massa. Vestibulum lacinia arcu eget nulla. Class aptent taciti sociosqu ad litora torquent per conubia nostra, per inceptos himenaeos. Curabitur sodales ligula in libero. Sed dignissim lacinia nunc. Curabitur tortor. Pellentesque nibh. Aenean quam. In scelerisque sem at dolor. Maecenas mattis. Sed convallis tristique sem. Proin ut ligula vel nunc egestas porttitor. Morbi lectus risus, iaculis vel, suscipit quis, luctus non, massa. Fusce ac turpis quis ligula lacinia aliquet. Mauris ipsum. Nulla metus metus, ullamcorper vel, tincidunt sed, euismod in, nibh. Quisque volutpat condimentum velit. Class aptent taciti sociosqu ad litora torquent per conubia nostra, per inceptos himenaeos. Nam nec ante. Sed lacinia, urna non tincidunt mattis, tortor neque adipiscing diam, a cursus ipsum ante quis turpis. Nulla facilisi. Ut fringilla. Suspendisse potenti. Nunc feugiat mi a tellus consequat imperdiet. Vestibulum sapien. Proin quam. Etiam ultrices. Suspendisse in justo eu magna luctus suscipit. Sed lectus. Integer euismod lacus luctus magna. Quisque cursus, metus vitae pharetra auctor, sem massa mattis sem, at interdum magna augue eget diam. Vestibulum ante ipsum primis in faucibus orci luctus et ultrices posuere cubilia Curae; Morbi lacinia molestie dui. Praesent blandit dolor. Sed non quam. In vel mi sit amet augue congue elementum. Morbi in ipsum sit amet pede facilisis laoreet. Donec lacus nunc, viverra nec</p>
                <br>
                <p style="font-weight:bold; font-family:asap; font-size:20px; letter-spacing:-1px;">Lorem ipsum dolor sit amet, consectetur adipiscing elit. </p><br>
                <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Integer nec odio. Praesent libero. Sed cursus ante dapibus diam. Sed nisi. Nulla quis sem at nibh elementum imperdiet. Duis sagittis ipsum. Praesent mauris. Fusce nec tellus sed augue semper porta. Mauris massa. Vestibulum lacinia arcu eget nulla. Class aptent taciti sociosqu ad litora torquent per conubia nostra, per inceptos himenaeos. Curabitur sodales ligula in libero. Sed dignissim lacinia nunc. Curabitur tortor. Pellentesque nibh. Aenean quam. In scelerisque sem at dolor. Maecenas mattis. Sed convallis tristique sem. Proin ut ligula vel nunc egestas porttitor. Morbi lectus risus, iaculis vel, suscipit quis, luctus non, massa. Fusce ac turpis quis ligula lacinia aliquet. Mauris ipsum. Nulla metus metus, ullamcorper vel, tincidunt sed, euismod in, nibh. Quisque volutpat condimentum velit. Class aptent taciti sociosqu ad litora torquent per conubia nostra, per inceptos himenaeos. Nam nec ante. Sed lacinia, urna non tincidunt mattis, tortor neque adipiscing diam, a cursus ipsum ante quis turpis. Nulla facilisi. Ut fringilla. Suspendisse potenti. Nunc feugiat mi a tellus consequat imperdiet. Vestibulum sapien. Proin quam. Etiam ultrices. Suspendisse in justo eu magna luctus suscipit. Sed lectus. Integer euismod lacus luctus magna. Quisque cursus, metus vitae pharetra auctor, sem massa mattis sem, at interdum magna augue eget diam. Vestibulum ante ipsum primis in faucibus orci luctus et ultrices posuere cubilia Curae; Morbi lacinia molestie dui. Praesent blandit dolor. Sed non quam. In vel mi sit amet augue congue elementum. Morbi in ipsum sit amet pede facilisis laoreet. Donec lacus nunc, viverra nec</p>
                <br>
                <p style="font-weight:bold; font-family:asap; font-size:20px; letter-spacing:-1px;">Lorem ipsum dolor sit amet, consectetur adipiscing elit. </p><br>
                <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Integer nec odio. Praesent libero. Sed cursus ante dapibus diam. Sed nisi. Nulla quis sem at nibh elementum imperdiet. Duis sagittis ipsum. Praesent mauris. Fusce nec tellus sed augue semper porta. Mauris massa. Vestibulum lacinia arcu eget nulla. Class aptent taciti sociosqu ad litora torquent per conubia nostra, per inceptos himenaeos. Curabitur sodales ligula in libero. Sed dignissim lacinia nunc. Curabitur tortor. Pellentesque nibh. Aenean quam. In scelerisque sem at dolor. Maecenas mattis. Sed convallis tristique sem. Proin ut ligula vel nunc egestas porttitor. Morbi lectus risus, iaculis vel, suscipit quis, luctus non, massa. Fusce ac turpis quis ligula lacinia aliquet. Mauris ipsum. Nulla metus metus, ullamcorper vel, tincidunt sed, euismod in, nibh. Quisque volutpat condimentum velit. Class aptent taciti sociosqu ad litora torquent per conubia nostra, per inceptos himenaeos. Nam nec ante. Sed lacinia, urna non tincidunt mattis, tortor neque adipiscing diam, a cursus ipsum ante quis turpis. Nulla facilisi. Ut fringilla. Suspendisse potenti. Nunc feugiat mi a tellus consequat imperdiet. Vestibulum sapien. Proin quam. Etiam ultrices. Suspendisse in justo eu magna luctus suscipit. Sed lectus. Integer euismod lacus luctus magna. Quisque cursus, metus vitae pharetra auctor, sem massa mattis sem, at interdum magna augue eget diam. Vestibulum ante ipsum primis in faucibus orci luctus et ultrices posuere cubilia Curae; Morbi lacinia molestie dui. Praesent blandit dolor. Sed non quam. In vel mi sit amet augue congue elementum. Morbi in ipsum sit amet pede facilisis laoreet. Donec lacus nunc, viverra nec</p>
                <br>
                 <p style="font-weight:bold; font-family:asap; font-size:20px; letter-spacing:-1px;">Lorem ipsum dolor sit amet, consectetur adipiscing elit. </p><br>
                <ol>
                   <li>Lorem ipsum dolor sit amet, consectetuer adipiscing elit.</li>
                   <li>Aliquam tincidunt mauris eu risus.</li>
                   <li>Vestibulum auctor dapibus neque.</li>
                </ol>
                <br>
                 <p style="font-weight:bold; font-family:asap; font-size:20px; letter-spacing:-1px;">Lorem ipsum dolor sit amet, consectetur adipiscing elit. </p><br>
                <p>Pellentesque habitant morbi tristique senectus et netus et malesuada fames ac turpis egestas. Vestibulum tortor quam, feugiat vitae, ultricies eget, tempor sit amet, ante. Donec eu libero sit amet quam egestas semper. Aenean ultricies mi vitae est. Mauris placerat eleifend leo.</p>
                <br>
                 <p style="font-weight:bold; font-family:asap; font-size:20px; letter-spacing:-1px;">Lorem ipsum dolor sit amet, consectetur adipiscing elit. </p>
                <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Integer nec odio. Praesent libero. Sed <i>Lorem</i> cursus <i>Lorem</i> ante dapibus diam. Sed nisi. Nulla quis sem at nibh elementum <i>Lorem</i> imperdiet. Duis sagittis ipsum. Praesent mauris. Fusce nec tellus sed <b>nibh</b> augue semper porta. Mauris massa. Vestibulum <b>sed</b> lacinia arcu eget nulla. Class aptent <b>massa.</b> taciti sociosqu ad litora <i>Mauris</i> torquent per conubia nostra, <b>sociosqu</b> per inceptos himenaeos. Curabitur <b>ad</b> sodales ligula in libero. Sed <b>torquent</b> dignissim <b>nostra,</b> lacinia nunc. Curabitur tortor. Pellentesque nibh. Aenean quam. In scelerisque sem at dolor. Maecenas mattis. Sed convallis tristique <i>libero.</i> sem. Proin ut ligula vel nunc egestas porttitor. Morbi lectus risus, iaculis vel, suscipit quis, luctus non, massa. Fusce ac <i>dolor.</i> turpis quis ligula lacinia <i>egestas</i> aliquet. Mauris ipsum. Nulla <i>quis,</i> metus metus, ullamcorper vel, tincidunt <b>turpis</b> sed, euismod <b>metus</b> in, <i>vel,</i> nibh. Quisque volutpat condimentum velit. Class aptent taciti sociosqu ad litora torquent <b>nibh.</b> per conubia nostra, per inceptos himenaeos. Nam nec <b>litora</b> ante. Sed lacinia, <b>per</b> urna <i>nibh.</i> non tincidunt mattis, <b>ante.</b> tortor neque adipiscing diam, a <i>conubia</i> cursus ipsum ante quis turpis. Nulla facilisi. Ut fringilla. Suspendisse potenti. Nunc feugiat <b>ante</b> mi a tellus <b>fringilla.</b> consequat imperdiet. Vestibulum <b>potenti.</b> sapien. Proin quam. Etiam ultrices. Suspendisse in justo eu magna luctus suscipit. Sed lectus. Integer euismod lacus luctus <b>magna</b> magna. Quisque cursus, <b>magna</b> metus vitae pharetra auctor, sem massa mattis sem, <i>ultrices.</i> at interdum magna <b>sem</b> augue eget diam. Vestibulum ante ipsum primis in faucibus orci luctus et ultrices posuere cubilia Curae; Morbi lacinia molestie dui. Praesent blandit <i>in</i> dolor. Sed non quam. In vel <b>lacinia</b> mi <b>blandit</b> sit amet <b>molestie</b> augue congue elementum. Morbi in ipsum sit amet pede facilisis laoreet. Donec lacus nunc, viverra nec.</p>
                <br>
                <p style="font-weight:bold; font-family:asap; font-size:20px; letter-spacing:-1px;">Terms and Conditions</p>
                <input type="checkbox" required="" checked><span style="padding-left:5px;">I ( or my parents, if I am under 18) have read and agreed to the terms and conditions of the <a href="https://docs.google.com/document/d/1z47Z-h57tIGM0ATTW0wFjbwst9Oh9nUYzBzSLtcC328/edit" target="_blank">OCF Privacy Policy</a>.</span><br><br>
           
                <button class="btn btn-success nextBtn btn-lg pull-right" type="submit">Next</button>
            </div>
        </div>
    </div>
    <div class="row setup-content" id="step-7">
        <div class="col-xs-12">
            <div class="col-md-2"></div>
            <div class="col-md-8" id="human_rights_paypal"style="display:block">
                 <p style="font-weight:bold; font-family:asap; font-size:20px; letter-spacing:-1px;">Payment</p>
                    <p style="font-style:italic;">selecting below options is going to open a new tab</p><br>
                 <input type="radio" value="human_rights_paypal" onchange="openPaypal(this.value)"><span style="padding-left:5px;">Make a payment now via PayPal </span><br>
                 <input type="radio"><span style="padding-left:5px;">Apply for financial Aid</span><br>
                 <input type="radio"><span style="padding-left:5px;">Pay Later</span><br>
                <button class="btn btn-success btn-lg pull-right" type="submit">Finish!</button>
            </div>
            <div class="col-md-8" id="social_etp_paypal" style="display:none;">
                 <p style="font-weight:bold; font-family:asap; font-size:20px; letter-spacing:-1px;">Payment</p>
                <p style="font-style:italic;">selecting below options is going to open a new tab</p>
                 <br>
                 <input type="radio" value="social_etp_paypal" onchange="openPaypal(this.value)"><span style="padding-left:5px;">Make a payment now via PayPal </span><br>
                 <input type="radio"><span style="padding-left:5px;">Apply for financial Aid</span><br>
                 <input type="radio"><span style="padding-left:5px;">Pay Later</span><br>
                <button class="btn btn-success btn-lg pull-right" type="submit">Finish!</button>
            </div>
            <div class="col-md-8" id="sustainable_paypal"style="display:none;">
                 <p style="font-weight:bold; font-family:asap; font-size:20px; letter-spacing:-1px;">Payment</p>
                <p style="font-style:italic;">selecting below options is going to open a new tab</p>

                 <br>
                 <input type="radio" value="sustainable_paypal" onchange="openPaypal(this.value)"><span style="padding-left:5px;">Make a payment now via PayPal </span><br>
                 <input type="radio"><span style="padding-left:5px;">Apply for financial Aid</span><br>
                 <input type="radio"><span style="padding-left:5px;">Pay Later</span><br>
                <button class="btn btn-success btn-lg pull-right" type="submit">Finish!</button>
            </div>
            <div class="col-md-2"></div>
        </div>
    </div>
    

</form>
</div>
</section>
</div>
</div>
<?php include 'includes/footer.php'; ?>

<script src="js/jquery.js"></script>
<script src="js/bootstrap.js"></script>
<script src="js/plugins.js"></script>
<script src="js/common.js"></script>

<script>


function openPaypal(courseId){
    if (courseId == "human_rights_paypal"){
        var url = 'https://www.paypal.com/cgi-bin/webscr?cmd=_s-xclick&hosted_button_id=3UPEQGNUPUPDW';
    }else if (courseId == "social_etp_paypal"){
        var url = 'https://www.paypal.com/cgi-bin/webscr?cmd=_s-xclick&hosted_button_id=YKL8WPMA62TMQ';
    }else if (courseId == "sustainable_paypal"){
        var url =  'https://www.paypal.com/cgi-bin/webscr?cmd=_s-xclick&hosted_button_id=3ZN7JWMRELR2C';
    }
    
    var win = window.open(url, '_blank');
    win.focus();
}
function selectCourse(course){

    if (course == "human_rights"){
        //course action div selection display
        $("#human_rights").show();
        $("#social_etp").hide();
        $("#sustainable_dev").hide();

        //course paypal div selection display
        $("#human_rights_paypal").show();
        $("#social_etp_paypal").hide();
        $("#sustainable_paypal").hide();



    } else if (course == "social_etp"){
        //course action div selection display
        $("#social_etp").show();
        $("#human_rights").hide();
        $("#sustainable_dev").hide();

        //course paypal div selection display
        $("#human_rights_paypal").hide();
        $("#social_etp_paypal").show();
        $("#sustainable_paypal").hide();

    }else if (course == "sustainable_dev"){
        //course action div selection display
        $("#sustainable_dev").show();
        $("#human_rights").hide();
        $("#social_etp").hide();

        //course paypal div selection display
        $("#human_rights_paypal").hide();
        $("#social_etp_paypal").hide();
        $("#sustainable_paypal").show();

    }

    
}

</script>

<script>


$(document).ready(function () {


    var el = document.getElementById('items');
    new Sortable(el);


    
    // $( "#sortable" ).sortable({
    //   revert: true
    // });
    // $( "#draggable" ).draggable({
    //   connectToSortable: "#sortable",
    //   helper: "clone",
    //   revert: "invalid"
    // });
    // $( "ul, li" ).disableSelection();
  

    var navListItems = $('div.setup-panel div a'),
            allWells = $('.setup-content'),
            allNextBtn = $('.nextBtn');

    allWells.hide();

    navListItems.click(function (e) {
        e.preventDefault();
        var $target = $($(this).attr('href')),
                $item = $(this);

        if (!$item.hasClass('disabled')) {
            navListItems.removeClass('btn-primary').addClass('btn-default');
            $item.addClass('btn-primary');
            allWells.hide();
            $target.show();
            $target.find('input:eq(0)').focus();
        }
    });

    allNextBtn.click(function(){
        var curStep = $(this).closest(".setup-content"),
            curStepBtn = curStep.attr("id"),
            nextStepWizard = $('div.setup-panel div a[href="#' + curStepBtn + '"]').parent().next().children("a"),
            curInputs = curStep.find("input[type='text'],input[type='url'],input[type='checkbox']","textarea"),
            isValid = true;

        $(".form-group").removeClass("has-error");
        for(var i=0; i<curInputs.length; i++){
            if (!curInputs[i].validity.valid){
                isValid = false;
                $(curInputs[i]).closest(".form-group").addClass("has-error");
            }
        }

        if (isValid)
            nextStepWizard.removeAttr('disabled').trigger('click');
    });

    $('div.setup-panel div a.btn-primary').trigger('click');
});
</script>
</body>
</html>
