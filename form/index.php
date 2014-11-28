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

    <link href="../css/bootstrap.css" rel="stylesheet">
<link href="../css/style.css" rel="stylesheet">
<!-- Responsive -->
<link href="../css/responsive.css" rel="stylesheet">
<!-- Choose Layout -->
<link href="../css/layout-wide.css" rel="stylesheet">
<!-- Choose Skin -->
<link href="../css/skin-green.css" rel="stylesheet">
<link rel="shortcut icon" href="favicon.ico">
<!-- Demo -->
<link rel="stylesheet" id="main-color" href="../css/skin-green.css" media="screen"/>
<link href='//fonts.googleapis.com/css?family=Asap:400,500,600,700,400italic,700italic' rel='stylesheet' type='text/css'>

</head>
<body class="off">
    <div class="wrapbox">
        <?php include '../includes/navbar.php';?>
<section class="grayarea" id="aboutOCF" >
<div class="container">
    <div class="row">
        <div class="col-md-12" style="margin-bottom:30px; text-align:center;"> <h2 style="font-family: 'Asap', sans-serif; letter-spacing:-1px; font-weight:100;">Online UWC: Student sign-up form</h2></div>
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
    </div>
</div>
<form role="form">
    <div class="row setup-content" id="step-1">
        <div class="col-xs-12">
            <div class="col-md-12">
                <h3> Tell us a bit more about yourself</h3>
                <button class="btn btn-success nextBtn btn-lg pull-right" type="button" >Next</button>
            </div>
        </div>
    </div>
    <div class="row setup-content" id="step-2">
        <div class="col-xs-12">
            <div class="col-md-12">
                <!-- <h3> Taking Action</h3>
                <div class="form-group">
                    <label class="control-label">First Name</label>
                    <input  maxlength="100" type="text" required="required" class="form-control" placeholder="Enter First Name"  />
                </div>
                <div class="form-group">
                    <label class="control-label">Last Name</label>
                    <input maxlength="100" type="text" required="required" class="form-control" placeholder="Enter Last Name" />
                </div> -->
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
            <div class="col-md-12">
                <h3> Tell us a bit more about yourself</h3>
                <button class="btn btn-success nextBtn btn-lg pull-right" type="button" >Next</button>
            </div>
        </div>
    </div>
    <div class="row setup-content" id="step-5">
        <div class="col-xs-12">
            <div class="col-md-12">
                <h3> Additional information</h3>
                <button class="btn btn-success btn-lg pull-right" type="submit">Finish!</button>
            </div>
        </div>
    </div>
    

</form>
</div>
</section>
</div>
</div>
<?php include '../includes/footer.php'; ?>

<script src="../js/jquery.js"></script>
<script src="../js/bootstrap.js"></script>
<script src="../js/plugins.js"></script>
<script src="../js/common.js"></script>

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
            curInputs = curStep.find("input[type='text'],input[type='url']"),
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
