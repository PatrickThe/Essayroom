





  
  <link href="css/css-bootstrap.min.css" rel="stylesheet">
  <script src="js/js-jquery.min.js"></script>








    
<style>
.revewiews h3 {
    border-bottom: 3px solid #fc0;
    font-weight: 700;
    padding-bottom: 5px;
}
h1, h2, h3, h4, h5, h6 {
    clear: both;
    margin: 0.1rem 0;
}
.download {
    height: 100%;
background: linear-gradient(to bottom, #f8da73 0%,#f8da73 50%,#f8da73 50%,#f0fafd 50%,#f0fafd 100%);
}
.bg-review{
    background: #fcfcfc;
    border: 1px solid #d0d0d0;
    box-shadow: 1px 2px 0 #eee;
    margin-bottom: 20px;
    padding: 15px;
}

.opc1 {
      border: 3px solid rgba(62,188,185,.5);
      background-color: #ebf2f7;
    top: auto;
    border-radius: 3px;
    max-width: 600px;
    min-width: 180px;
    padding: 10px;
    position: relative;
        margin-bottom: 30px;
}


</style>

<div class="col-sm-4">
<div class="opc1 row">
  <div class="col-sm-12"> <h3>Calculate Price </h3><hr style="margin-top: 0.5rem; margin-bottom: 0.2rem;"></div>
    <div class="op-form-group op-row">

      <div class="col-sm-12">
        <label>Academic Level</label>
        <select name="ops_aclevel" class="form-control custom-select border-default " id="ops_aclevel"><option value="0.8" name="ops_aclevel"> High School  </option><option value="1" name="ops_aclevel"> Undergraduate  </option><option value="1.1" name="ops_aclevel"> Masters  </option><option value="1.2" name="ops_aclevel"> PhD  </option></select></div>
</div>

  <div class="op-form-group op-row">

    <div class="col-sm-12">
             <label>Paper Type</label>
    <select name="order_tpaper" class="form-control custom-select border-default" id="exampleSelect1"><option value="1"> Essay (Any Type)  </option><option value="1"> Article (Any Type)  </option><option value="1"> Assignment  </option><option value="1"> Content (Any Type)  </option><option value="1"> Admission Essay  </option><option value="1"> Annotated Bibliography  </option><option value="1"> Argumentative Essay  </option><option value="1"> Article Review  </option><option value="1"> Book/Movie Review  </option><option value="1"> Business Plan  </option><option value="1"> Capstone Project  </option><option value="1"> Case Study  </option><option value="1"> Coursework  </option><option value="1"> Creative Writing  </option><option value="1"> Critical Thinking  </option><option value="1.2"> Dissertation  </option><option value="1.2"> Dissertation chapter  </option><option value="1.5"> Lab Report  </option><option value="1.4"> Math Problem  </option><option value="1"> Research Paper  </option><option value="1"> Research Proposal  </option><option value="1"> Research Summary  </option><option value="1"> Scholarship Essay  </option><option value="1"> Speech  </option><option value="1.6"> Statistic Project  </option><option value="1"> Term Paper  </option><option value="1"> Thesis  </option><option value="1.2"> Other  </option><option value="1"> Presentation or Speech  </option><option value="1"> Q&amp;A  </option><option value="1"> speech work  </option></select></div>
  </div>



<div class=" op-form-group op-row">

<div class="col-sm-12">

       <label>No. of Pages</label>
<select id="order_pages" name="order_pages" class="form-control col-sm-12 custom-select border-default" required><option value="1"> Select words/Pages </option><option value="1"> 1 Pages  </option><option value="2"> 2 Pages  </option><option value="3"> 3 Pages  </option><option value="4"> 4 Pages  </option><option value="5"> 5 Pages  </option><option value="6"> 6 Pages  </option><option value="7"> 7 Pages  </option><option value="8"> 8 Pages  </option><option value="9"> 9 Pages  </option><option value="10"> 10 Pages  </option><option value="11"> 11 Pages  </option><option value="12"> 12 Pages  </option><option value="13"> 13 Pages  </option><option value="14"> 14 Pages  </option><option value="15"> 15 Pages  </option><option value="16"> 16 Pages  </option><option value="17"> 17 Pages  </option><option value="18"> 18 Pages  </option><option value="19"> 19 Pages  </option><option value="20"> 20 Pages  </option><option value="21"> 21 Pages  </option><option value="22"> 22 Pages  </option><option value="23"> 23 Pages  </option><option value="24"> 24 Pages  </option><option value="25"> 25 Pages  </option><option value="26"> 26 Pages  </option><option value="27"> 27 Pages  </option><option value="28"> 28 Pages  </option><option value="29"> 29 Pages  </option><option value="30"> 30 Pages  </option></select><div class="col-sm-12">
<input id="words" type="hidden" value="275"></div>
</div>


</div>

    <div class="op-form-group op-row">

      <div class="col-sm-12">
        <label class="text-muted">Urgency</label>
        <select name="order_deadline" class="form-control custom-select border-default" id="exampleSelect1"><option name="order_deadline" value="28"> 2 Hours  </option><option name="order_deadline" value="22"> 3 Hours  </option><option name="order_deadline" value="21"> 6 Hours  </option><option name="order_deadline" value="20"> 12 Hours  </option><option name="order_deadline" value="18"> 24 Hours  </option><option name="order_deadline" value="17.5"> 48 Hours  </option><option name="order_deadline" value="17"> 3 Days  </option><option name="order_deadline" value="16.5"> 5 Days  </option><option name="order_deadline" value="16"> 10 Days  </option><option name="order_deadline" value="15"> 20 Days  </option><option name="order_deadline" value="13"> 30 Days  </option><option name="order_deadline" value="12"> 60 Days  </option></select></div>
</div>


<input id="order_amount" class="form-control fontbig form-control-plaintext" type="hidden" name="order_amount" value="$"><hr style="margin-top: 0.5rem; margin-bottom: 0.2rem;"><div class="col-sm-12 text-center">
 <h4 class="orderamountc">Price (USD): $10.99 </h4> 

</div>
<div class="col-sm-12 text-center">
<hr style="margin-top: 0.5rem; margin-bottom: 0.2rem;"><a class="text-center btn btn-success col-sm-12" href="order.html"> Continue with order </a>
</div>
</div>





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

            </script><script type="text/javascript">

  $(document).on("change",function(){

    var pages = $('[name="order_pages"]').val();
    var ac=$('[name="order_deadline"]:checked').val();
    var cap=$('[name="ops_aclevel"]:checked').val();
    var num  = (parseFloat(cap)*parseFloat(ac)*parseFloat(pages));
    var n = num.toFixed(2);

    document.getElementById('order_amount').value = parseFloat(n);
    document.getElementById('words').value = parseFloat(pages)*275;


$(".wordcount").html(parseFloat(pages)*250 + " words");
$(".orderamountc").html("Price (USD): $" + n);
});

function myFunction() {
  var y = document.getElementById("a4").value;
  var z = document.getElementById("a3").value;
  var x = y + z;
  document.getElementById('a5').value = parseFloat(NameValue);
}


</script>