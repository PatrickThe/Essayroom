<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
  <meta name="description" content=""><meta name="author" content="">
  <title>essayroom order</title><!-- Bootstrap core CSS --><!-- Custom fonts for this template -->
  <link rel="stylesheet" href="css/css-fontawesome-all.min.css"><!-- Custom styles for this template -->
  <script src="js/js-jquery.min.js"></script>
  <script src="js/js-bootstrap.min.js"></script>
 
</head>

<link href="css/css-bootstrap.min.css" rel="stylesheet">
<script src="js/js-bootstrap.min.js"></script>
	<div id="content" class="site-content">

		<div class="ast-container">
    </div>
  </div>
</div>
<script src="js/ckeditor-ckeditor.js"></script>
<body>
  
<section class="features" id="features">
<div class="container">
  <?php include('server.php') ?>
<form action="server.php" method="POST" enctype="multipart/form-data">
  
<br><br><br><br><script>
  $("body").on('click','#btnone', function(){ $(this).hide(); });
  $("body").on('click','#btntwo', function(){ $(this).hide(); });
</script><div class="row">
    <div class="col-sm-4">
      <div class="card card-body">

  <div class="form-group">
    <label for="exampleSelect1" class="col-sm-12">Type of Task</label>
    <select name="task_id" class="form-control custom-select border-default col-sm-12" id="exampleSelect1">

<?php 
                  //query for courses
                  $sqi="select * from order_task order by id desc";
                  $record=mysqli_query($conn,$sqi);
                  
                  while ($row=mysqli_fetch_array($record,MYSQLI_BOTH))
                  {
                    $cat=$row["name"];
                    $cat1=$row["rate"];
                    

                    echo "<option value=\"$cat1.($cat)\" class=\"text-center\">-- $cat --</option>";

                  }

                  ?>


    </select></div>

    <div class="form-group">
    <label class="col-sm-12" for="topic">Topic</label>
    <input type="text" name="topic" class="form-control col-sm-12 border-default" id="order_title" aria-describedby="emailHelp" placeholder="Enter topic" required></div>

    <div class="form-group">
    <label for="exampleSelect2" class="col-sm-12">Subject Area</label>
   <select name="subject_id" class="form-control col-sm-12 custom-select border-default" id="exampleSelect2">
     

<?php 
                  //query for courses
                  $sqi="select * from order_subject order by id desc";
                  $record=mysqli_query($conn,$sqi);
                  
                  while ($row=mysqli_fetch_array($record,MYSQLI_BOTH))
                  {
                    $cat=$row["name"];
                     $cat1=$row["rate"];
                    echo "<option value=\"$cat1.($cat)\" class=\"text-center\">-- $cat --</option>";

                  }

                  ?>




   </select></div>

  <div class="form-group p-2">
<label class="col-sm-12">Number of Pages</label>
<div class="input-group row col-sm-12">

          <span class="input-group-btn">
              <button type="button" class="btn btn-default border-default btn-number" disabled data-type="minus" data-field="order_pages">
                  <i class="fa fa-minus" aria-hidden="true"></i>
              </button>
          </span>
          <input type="text" id="order_pages" name="order_pages" class="form-control input-number border-default col-sm-12 text-center" value="1" min="0" max="100"><span class="input-group-btn">
              <button type="button" class="btn btn-default border-default btn-number" data-type="plus" data-field="order_pages">
               <i class="fas fa-plus"></i>
              </button>
          </span>
          <br><input id="words" type="hidden" value="275"></div>




<div class="col-sm-12">

<div class="row col-sm-12 wordcount">  275 word approx </div>
</div>
          
</div>


    <div class="form-group">
      <label class="col-sm-12"> Deadline </label>


   <select name="deadline_id" class="col-sm-12 form-control  custom-select border-default" id="exampleSelect2" required>

<?php 
                  //query for courses
                  $sqi="select * from order_deadline order by id desc";
                  $record=mysqli_query($conn,$sqi);
                  
                  while ($row=mysqli_fetch_array($record,MYSQLI_BOTH))
                  {
                    $cat=$row["name"];
                     $cat1=$row["rate"];
                    echo "<option value=\"$cat1.($cat)\" class=\"text-center\">-- $cat --</option>";

                  }

                  ?>


   </select></div>

                <button id="btnone" class="btn col-sm-12 btn-success" type="button" data-toggle="collapse" data-target="#multiCollapseExample1" aria-expanded="false" aria-controls="multiCollapseExample2">Go To Step 2/3</button>
      </div>



  </div>
  <div class="col-sm-4">
    <div class="collapse multi-collapse" id="multiCollapseExample1">
      <div class="card card-body">

  <div class="form-group">
    <label for="exampleSelect1" class="col-sm-12">Academic level</label>
    <select name="academic_level_id" class="form-control custom-select border-default col-sm-12" id="exampleSelect1" required>
      
<?php 
                  //query for courses
                  $sqi="select * from order_aclevel order by id desc";
                  $record=mysqli_query($conn,$sqi);
                  
                  while ($row=mysqli_fetch_array($record,MYSQLI_BOTH))
                  {
                    $cat=$row["name"];
                     $cat1=$row["rate"];
                    echo "<option value=\"$cat1.($cat)\" class=\"text-center\">-- $cat --</option>";

                  }

                  ?>


    </select></div>





<script type="text/javascript">
$(function() {
    $("[name=order_wquality]").click(function(){
            $('.toHide').hide();
           // alert($('input[name=order_wquality]:checked').attr('id'));
            $("#order_wquality-"+$('input[name=order_wquality]:checked').attr('id')).show('slow');
    });
 });
</script><div class="form-group">
    <label for="exampleSelect1" class="col-sm-12">Quality Level</label>
    <select name="quality_id" class="form-control custom-select border-default col-sm-12" id="exampleSelect1">

<?php 
                  //query for courses
                  $sqi="select * from order_quality order by id desc";
                  $record=mysqli_query($conn,$sqi);
                  
                  while ($row=mysqli_fetch_array($record,MYSQLI_BOTH))
                  {
                    $cat=$row["rate"];
                    $cat2=$row["name"];
                     
                    echo "<option value=\"$cat.($cat2)\" class=\"text-center\">-- $cat2 --</option>";

                  }

                  ?>

</select></div>
  
  
  

<div class="form-group">
<label class="col-sm-12">Sources</label>
  <div class="input-group col-sm-12">
          <span class="input-group-btn">
              <button type="button" class="btn btn-default border-default btn-number" disabled data-type="minus" data-field="order_sources">
                  <i class="fa fa-minus" aria-hidden="true"></i>
              </button>
          </span>
          <input type="text" id="order_sources" name="order_sources" class="form-control border-default input-number col-sm-12 text-center" value="0" min="0" max="100"><span class="input-group-btn">
              <button type="button" class="btn btn-default btn-number border-default" data-type="plus" data-field="order_sources">
                <i class="fas fa-plus"></i>
              </button>
          </span>
      </div>
</div>


<div class="form-group">
<label class="col-sm-12">PowerPoint Slides</label>
  <div class="input-group col-sm-12">
          <span class="input-group-btn">
              <button type="button" class="btn btn-default border-default btn-number" disabled data-type="minus" data-field="order_pptslides">
                  <i class="fa fa-minus" aria-hidden="true"></i>
              </button>
          </span>
          <input type="text" id="order_pptslides" name="order_pptslides" class="form-control border-default input-number col-sm-12 text-center" value="0" min="0" max="50"><input type="hidden" id="config_priceperslide" name="config_priceperslide" value="6"><span class="input-group-btn">
              <button type="button" class="btn btn-default btn-number border-default" data-type="plus" data-field="order_pptslides">
                <i class="fas fa-plus"></i>
              </button>
          </span>
      </div>
</div>

   <div class="form-group">
      <label class="col-sm-12"> Paper format </label>
      <div class="col-sm-12">


           <select name="order_citation" class="form-control custom-select border-default col-sm-12" id="exampleSelecte1"><option value="APA" selected>APA</option><option value="MLA">MLA</option><option value="Havard">Havard</option><option value="Other">Other</option></select><style>
    .btn:not([disabled]):not(.disabled) {
    cursor: pointer;
    /* border: 1px solid green; */
    background: green;
    color: #fff;
}
</style></div>
</div>



     <div class="form-group">
    <label for="exampleTextarea" class="col-sm-12">Paper Instructions</label>
    <div class="col-sm-12">

    <textarea class="border-default" height="110px" name="order_instructions" id="editor" placeholder="Describe your order details here..."></textarea><script>
        ClassicEditor
            .create( document.querySelector( '#editor' ) )
            .catch( error => {
                console.error( error );
            } );



    </script></div>
  </div>


         <button id="btntwo" class="btn col-sm-12 btn-success" type="button" data-toggle="collapse" data-target="#multiCollapseExample2" aria-expanded="false" aria-controls="multiCollapseExample2">Go To Step 3/3</button>
      </div>

       
    </div>
  </div>
  <div class="col-sm-4">
    <div class="collapse multi-collapse" id="multiCollapseExample2">
      <div class="card card-body">
    <div class="form-group">
    
  
  </div>

    <div class="form-group">
      <label for="subject" class="">Upload File</label>
          <input type="file" name="myfile"> <br>
    </div>

<div class="form-group">
<div class="col-sm-7 font-weight-bold"> TOTAL PRICE </div>
<div class="col-sm-5 text-success font-weight-bold"><h4><div class="orderamountc">$</div></h4></div>
 <input id="order_amount" class="form-control fontbig form-control-plaintext" type="hidden" name="order_amount" value="$">
<?php
 
$permitted_chars = '0123456789abcdefghijklmnopqrstuvwxyzABCDEFGHIJKLMNOPQRSTUVWXYZ';
 
function generate_string($input, $strength = 16) {
    $input_length = strlen($input);
    $random_string = '';
    for($i = 0; $i < $strength; $i++) {
        $random_character = $input[mt_rand(0, $input_length - 1)];
        $random_string .= $random_character;
    }
 
    return $random_string;
}
 

//echo generate_string($permitted_chars, 20);
 

 
?>



 <input   type="hidden" name="order_id" value="<?php echo generate_string($permitted_chars, 8); ?>">
</div>
<hr><div id="subcontact" class="form-group"><button  type="submit" name="save"  class="btn col-sm-12 btn-warning" data-toggle="modal" data-target="#exampleModallogin" >ORDER NOW</button></div>


</form>
  


  

<form class="coupon_area">






           <div class="col-lg-3 col-md-12">
            <div class="sticky-top">
<div class="row">
<div class="col-sm-12">

<input id="words" type="hidden" value="275" style="width: 100px;border: 0px solid #fff;text-align: right"><input id="addontotal" type="hidden" name="addontotal" value="0" readonly><input id="addontotalp" type="hidden" name="addontotalp" value="1" readonly><input type="hidden" name="cpn_value" id="cpn_value" class="form-control" value="1"><div class="alert alert-danger print-error-msg" style="display:none">    </div>





</div>
</div>
</div>

          </div>

        </div>
      </section></div>
    

               

<span id="payment-total" class="hidden" style="font-size: 0px">0</span>
<span id="payment-totalp" class="hidden" style="font-size: 0px">0</span>
             <script type="text/javascript">
              
var addon = document.getElementsByClassName('addon'),
total  = document.getElementById('payment-total');
 for (var i=0; i < addon.length; i++) {
        addon[i].onchange = function() {
            var add = this.value * (this.checked ? 1 : -1);
            total.innerHTML = parseFloat(total.innerHTML) + add
            document.getElementById('addontotal').value = total.innerHTML;
        }
    }
              
var addonp = document.getElementsByClassName('addonp'),
totalp  = document.getElementById('payment-totalp');
 for (var i=0; i < addonp.length; i++) {
        addonp[i].onchange = function() {
            var add = this.value * (this.checked ? 1 : -1);
            totalp.innerHTML = parseFloat(totalp.innerHTML) + add
            document.getElementById('addontotalp').value = totalp.innerHTML;
        }
    }

           </script><script type="text/javascript">

  $(document).on("change",function(){
    var pptslides = $('[name="order_pptslides"]').val();
    var slides = $('[name="order_pptslides"]').val()*$('[name="config_priceperslide"]').val();
    var pages = $('[name="order_pages"]').val();
    var ac=$('[name="deadline_id"]').val();
    var addon = $('[name="addontotal"]').val();
        var addonp = $('[name="addontotalp"]').val();
    if(addonp == 0){
          var addonpv = 1;
    } else {
          var addonpv = (addonp/100)+1;
    }

    var cap=$('[name="academic_level_id"]').val();
    var tier= $('[name="quality_id"]').val();
    var cpn_value = $('[name="cpn_value"]').val();
    var spacing = 1;
    var subject = $('[name="subject_id"]').val();
    var tpaper = $('[name="task_id"]').val();
    var num  = ((parseFloat(cap)*parseFloat(ac)*parseFloat(tpaper)*parseFloat(addonpv)*parseFloat(subject)*parseFloat(tier)*parseFloat(pages))+ 0 + parseFloat(addon)+parseFloat(slides))*parseFloat(cpn_value);
    var ordert  = parseFloat(cap)*parseFloat(ac)*parseFloat(tpaper)*parseFloat(subject)*parseFloat(addonpv)*parseFloat(tier)*parseFloat(pages);

    var orderts = ordert.toFixed(2);

    var n = num.toFixed(2);


    document.getElementById('order_amount').value = parseFloat(n);
    document.getElementById('words').value = parseFloat(pages)*275;

var perpageright = parseFloat(cap)*parseFloat(ac)*parseFloat(tier)*parseFloat(spacing);
var perpagerightn = perpageright.toFixed(2);

$(".totalsumright").html("$" + orderts);
$(".wordcount").html(parseFloat(pages)*parseFloat(spacing)*275 + " words approx");
$(".orderamountc").html("$" + n);
$(".topicright").html($('[name="order_title"]').val());
$(".order_pagesright").html($('[name="order_pages"]').val() + " pages x " + perpagerightn );

if(pptslides > -1 ) {
  $(".order_slidesright").html($('[name="order_pptslides"]').val() + " PPT slides");
  $(".order_slidesrightprice").html("$" + slides);
} 

var select_level = $('[name="ops_aclevel"]').val();
var level_right = select_level.split('#');
var level_right1 = level_right[1];
$(".ops_aclevelright").html(level_right1);

var select_subject = $('[name="order_subject"]').val();
var subject_right = select_subject.split('#');
var subject_right1 = subject_right[1];
$(".order_subjectright").html(subject_right1);

var select_tpaper = $('[name="order_tpaper"]').val();
var select_tpaper = select_tpaper.split('#');
var select_tpaper1 = select_tpaper[1];
$(".order_tpaperright").html(select_tpaper1);


var deadline = $('[name="order_deadline"]:checked').val();
var theTime = new Date();

var deadline0 = deadline;
var deadline1 = deadline0.split('#');
var deadline2 = deadline1[1];
var deadline3 = deadline2.split(' ');
var duration = deadline3[1];
var dvalue = deadline3[0];


if (duration == 'Hours') {
  var chosentime = dvalue*60*60*1000;

} else {
  var timeHours = dvalue*24;
  var chosentime = dvalue*24*60*60*1000;
}

var newTime = new Date( Date.parse( theTime ) + chosentime  );

$(".newdeadline").html(newTime);




});




function myFunction() {
  var y = document.getElementById("a4").value;
  var z = document.getElementById("a3").value;
  var x = y + z;
  document.getElementById('a5').value = parseFloat(NameValue);
}


</script><script type="text/javascript">
  
//plugin bootstrap minus and plus
//http://jsfiddle.net/laelitenetwork/puJ6G/
$('.btn-number').click(function(e){
    e.preventDefault();
    
    fieldName = $(this).attr('data-field');
    type      = $(this).attr('data-type');
    var input = $("input[name='"+fieldName+"']");
    var currentVal = parseInt(input.val());
    if (!isNaN(currentVal)) {
        if(type == 'minus') {
            
            if(currentVal > input.attr('min')) {
                input.val(currentVal - 1).change();
            } 
            if(parseInt(input.val()) == input.attr('min')) {
                $(this).attr('disabled', true);
            }

        } else if(type == 'plus') {

            if(currentVal < input.attr('max')) {
                input.val(currentVal + 1).change();
            }
            if(parseInt(input.val()) == input.attr('max')) {
                $(this).attr('disabled', true);
            }

        }
    } else {
        input.val(0);
    }
});
$('.input-number').focusin(function(){
   $(this).data('oldValue', $(this).val());
});
$('.input-number').change(function() {
    
    minValue =  parseInt($(this).attr('min'));
    maxValue =  parseInt($(this).attr('max'));
    valueCurrent = parseInt($(this).val());
    
    name = $(this).attr('name');
    if(valueCurrent >= minValue) {
        $(".btn-number[data-type='minus'][data-field='"+name+"']").removeAttr('disabled')
    } else {
        alert('Sorry, the minimum value was reached');
        $(this).val($(this).data('oldValue'));
    }
    if(valueCurrent <= maxValue) {
        $(".btn-number[data-type='plus'][data-field='"+name+"']").removeAttr('disabled')
    } else {
        alert('Sorry, the maximum value was reached');
        $(this).val($(this).data('oldValue'));
    }
    
    
});
$(".input-number").keydown(function (e) {
        // Allow: backspace, delete, tab, escape, enter and .
        if ($.inArray(e.keyCode, [46, 8, 9, 27, 13, 190]) !== -1 ||
             // Allow: Ctrl+A
            (e.keyCode == 65 && e.ctrlKey === true) || 
             // Allow: home, end, left, right
            (e.keyCode >= 35 && e.keyCode <= 39)) {
                 // let it happen, don't do anything
                 return;
        }
        // Ensure that it is a number and stop the keypress
        if ((e.shiftKey || (e.keyCode < 48 || e.keyCode > 57)) && (e.keyCode < 96 || e.keyCode > 105)) {
            e.preventDefault();
        }
    });

</script>



<script type="text/javascript">
    var IDLE_TIMEOUT = 1 * 60;  // 10 minutes of inactivity
    var _idleSecondsCounter = 0;
    document.onclick = function() {
        _idleSecondsCounter = 0;
    };
    document.onmousemove = function() {
        _idleSecondsCounter = 0;
    };
    document.onkeypress = function() {
        _idleSecondsCounter = 0;
    };
    window.setInterval(CheckIdleTime, 1000);
    function CheckIdleTime() {
        _idleSecondsCounter++;
        var oPanel = document.getElementById("SecondsUntilExpire");
        if (oPanel)
            oPanel.innerHTML = (IDLE_TIMEOUT - _idleSecondsCounter) + "";
        if (_idleSecondsCounter >= IDLE_TIMEOUT) {
            // destroy the session in logout.php 
            document.location.href = "../../index.html";
        }
    }
</script>
</div></div></body>





</html>
