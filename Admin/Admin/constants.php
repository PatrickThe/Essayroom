  
 <?php require 'Functions/header.php' ?>

 <div class="sparkline11-list shadow-reset mg-t-30">

                                <div class="sparkline11-hd">
                                    <div class="main-sparkline11-hd">
                                        <h1>Modal Login <span class="basic-ds-n">Form</span></h1>
                                        <div class="sparkline11-outline-icon">
                                            <span class="sparkline11-collapse-link"><i class="fa fa-chevron-up"></i></span>
                                            <span><i class="fa fa-wrench"></i></span>
                                            <span class="sparkline11-collapse-close"><i class="fa fa-times"></i></span>
                                        </div>
                                    </div>
                                </div>
                                <div class="sparkline11-graph">
                                    <div class="basic-login-form-ad">
                                        <div class="row">
                                            <div class="col-lg-12">
                                                <div class="modal-bootstrap modal-login-form">
                                                    <a class="zoomInDown mg-t" href="#" data-toggle="modal" data-target="#zoomInDown1">Modal Login Form</a>
                                                </div>
                                                <div id="zoomInDown1" class="modal modal-adminpro-general modal-zoomInDown fade" role="dialog">
                                                    <div class="modal-dialog">
                                                        <div class="modal-content">
                                                            <div class="modal-close-area modal-close-df">
                                                                <a class="close" data-dismiss="modal" href="#"><i class="fa fa-close"></i></a>
                                                            </div>
                                                            <div class="modal-body">
                                                                <div class="modal-login-form-inner">
                                                                    
                                                                    <div class="row">
                                                                        <div class="col-lg-12">
                                                                            <div class="basic-login-inner modal-basic-inner">
                                                                                <form action="#" method="post">
                                                                                    <div class="form-group-inner">
                                                                                        <div class="row">
                                                                                            <div class="col-lg-4">
                                                                                                <label class="login2">Name</label>
                                                                                            </div>
                                                                                            <div class="col-lg-8">
                                                                                                <input type="text" name="name" class="form-control" placeholder="Name" />
                                                                                            </div>
                                                                                        </div>
                                                                                    </div>
                                                                                    <div class="form-group-inner">
                                                                                        <div class="row">
                                                                                            <div class="col-lg-4">
                                                                                                <label class="login2">rate</label>
                                                                                            </div>
                                                                                            <div class="col-lg-8">
                                                                                                <input type="text" name="rate" class="form-control" placeholder="1.2" />
                                                                                            </div>
                                                                                        </div>
                                                                                    </div>
                                                                                    <div class="login-btn-inner">
                                                            
                                                                                        <div class="row">
                                                                                            <div class="col-lg-4"></div>
                                                                                            <div class="col-lg-8">
                                                                                                <div class="login-horizental">
                                                                                                    <button class="btn btn-sm btn-primary login-submit-cs" name="save" type="submit">ADD</button>
                                                                                                </div>
                                                                                            </div>
                                                                                        </div>
                                                                                    </div>
                                                                                </form>
                                                                            </div>
                                                                    
                                                    </div>
                                                </div>
                                            </div>
                    <div class="login-form-area mg-t-30 mg-b-15">
                <div class="container-fluid">
                    <div class="row">
                        <div class="col-lg-3"></div>
                        <form id="adminpro-order-form" class="adminpro-form">
                            <div class="col-lg-6">
                                <div class="login-bg">
                                    <div class="row">
                                        <div class="col-lg-12">
                                            <div class="logo">
                                                <a href="#"><img src="img/logo/logo.png" alt="" />
                                                </a>
                                            </div>
                                        </div>
                                    </div>
                                    
                                    <div class="row">
                                        <div class="col-lg-4">
                                            <div class="login-input-head">
                                                <p>End Date</p>
                                            </div>
                                        </div>
                                        <div class="col-lg-8">
                                            <div class="login-input-area">
                                                <input type="text" name="finish" id="finish" />
                                                <i class="fa fa-calendar login-user" aria-hidden="true"></i>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="row">
                                        <div class="col-lg-4">
                                            <div class="login-input-head">
                                                <p>Category</p>
                                            </div>
                                        </div>
                                        <div class="col-lg-8">
                                            <div class="interested-input-area">
                                                <select name="interestedcategory">
                                                    <option value="none" selected="" disabled="">Interested in</option>
                                                    <option value="design">Web Design</option>
                                                    <option value="development">Web Development</option>
                                                    <option value="illustration">Wordpress Pro</option>
                                                    <option value="branding">Joomla Pro</option>
                                                    <option value="video">Video Marketing</option>
                                                </select>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="row">
                                        <div class="col-lg-4">
                                            <div class="login-input-head">
                                                <p>Budget</p>
                                            </div>
                                        </div>
                                        <div class="col-lg-8">
                                            <div class="budget-input-area">
                                                <select name="interestedbudget">
                                                    <option value="none" selected="" disabled="">Budget</option>
                                                    <option value="design">less than 500$</option>
                                                    <option value="development">500$ - 1000$</option>
                                                    <option value="illustration">1000$ - 2000$</option>
                                                    <option value="branding">3000$ - 4000$</option>
                                                    <option value="branding">6000$ - 8000$</option>
                                                    <option value="branding">15000$ - 20000$</option>
                                                    <option value="video">more than 25000$</option>
                                                </select>
                                            </div>
                                            <input type="text" name="product" list="productName"/>
<datalist id="productName">
    <option value="Pen">Pen</option>
    <option value="Pencil">Pencil</option>
    <option value="Paper">Paper</option>
</datalist>
<div class="wrapper">
    <select class="editableBox">        
        <option value="1">01:00</option>
        <option value="2">02:00</option>
        <option value="3">03:00</option>
        <option value="4">04:00</option>
        <option value="5">05:00</option>
        <option value="6">06:00</option>
        <option value="7">07:00</option>
        <option value="8">08:00</option>
        <option value="9">09:00</option>
        <option value="10">10:00</option>
        <option value="11">11:00</option>
        <option value="12">12:00</option>
        <option value="13">13:00</option>
        <option value="14">14:00</option>
        <option value="15">15:00</option>
        <option value="16">16:00</option>
        <option value="17">17:00</option>
        <option value="18">18:00</option>
        <option value="19">19:00</option>
        <option value="20">20:00</option>
        <option value="21">21:00</option>
        <option value="22">22:00</option>
        <option value="23">23:00</option>
        <option value="24">24:00</option>
    </select>
    <input class="timeTextBox" name="timebox" maxlength="5"/>
</div>
<form action="/action_page.php" method="get">
  <input list="browsers" name="browser">
  <datalist id="browsers">
    <option value="Internet Explorer">
    <option value="Firefox">
    <option value="Chrome">
    <option value="Opera">
    <option value="Safari">
  </datalist>
  <input type="submit">
</form>





<div style="position: absolute;top: 32px; left: 430px;" id="outerFilterDiv">
<input name="filterTextField" type="text" id="filterTextField" tabindex="2"  style="width: 140px;
    position: absolute; top: 1px; left: 1px; z-index: 2;border:none;" />
        <div style="position: absolute;" id="filterDropdownDiv">
<select name="filterDropDown" id="filterDropDown" tabindex="1000"
    onchange="DropDownTextToBox(this,'filterTextField');" style="position: absolute;
    top: 0px; left: 0px; z-index: 1; width: 165px;">
    <option value="-1" selected="selected" disabled="disabled">-- Select Column Name --</option>
</select>






<select style="width: 200px; float: left;" onchange="this.nextElementSibling.value=this.value">
    <option></option>
    <option>1</option>
    <option>2</option>
    <option>3</option> 
</select>
<input style="width: 185px; margin-left: -199px; margin-top: 1px; border: none; float: left;"/>
                                        </div>
                                    </div>
                                  
                                    <div class="row">
                                        <div class="col-lg-4"></div>
                                        <div class="col-lg-8">
                                            <div class="login-button-pro">
                                                <button type="submit" class="login-button login-button-lg">Send Request</button>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </form>
                        <div class="col-lg-3"></div>
                    </div>
                </div>
            </div>
     <?php require 'Functions/footer.php' ?>