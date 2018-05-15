<script>
	$('#MyAccount').collapse();
	$("ul[data-target='#MyAccount']").children().children().eq(1).removeClass('fa-plus').addClass('fa-minus');
	$("#Address_Book").addClass('active selected');

</script>

<div class="col-md-10 col-xs-12 dashboard-wrapped padding-right-off">
    <div class="row dashoboard-account">
	<style>
.panel-pink{
	margin-top:20px;
}

.ui-dialog{
   z-index: 1060 !important;
}

.ui-widget-overlay{
	z-index: 1040 !important;
}

.panel{
	-webkit-box-shadow: none;
	-moz-box-shadow: none;
	box-shadow: none;
}

.table{
	margin-bottom:0 px !important;
}

.table>thead:first-child>tr:first-child>th {
	text-align: center;
    border-right: 1px solid;
}

.table>tbody>tr>td {
    text-align: center;
    border-right: 1px solid #ddd;
}

.butlist .btn{
	margin-left:5px ;
}

.well {
    background-color: #ddd;
    margin-bottom: 0px;
}

@media(max-width:767px){
	.search_cat{
		padding-left: 0;
		padding-right: 0;
	}
}
.sweet-alert #import {
   display: block;
   width: auto;
   height: auto;
   margin: 15px;
}

.form-control-feedback.epi-info-circled { 
	position: absolute;
	padding-top: 8px;
	color: #d82b1f ;
	font-size: 18px;
}

</style>

	<div class="container-fluid space-small" style="padding-bottom: 15px;">
		<h2 class="dashboard-title">Address Book</h2>
	<div class = "hidden-xs butlist"> 
		<button type="button" class="btn btn-success show pull-right" onclick ="popNewaddForm()" >			
			<span class="glyphicon glyphicon-plus"></span> New
		</button>
		<button type="button" class="btn btn-danger pull-right hidden rmvlist" onclick ="removeaddrlist(0)" >			
			<span class="glyphicon glyphicon-remove"></span> Delete
		</button>
		<button type='button' class='btn btn-success pull-right hidden rmvlist'  onclick ='assignaddress()' >			
		   <span class="glyphicon glyphicon-move"></span> Move to
	    </button>
		<button type="button" onclick="popContent(this)" class="btn btn-info show pull-right" >
			<span class="glyphicon glyphicon-upload"  ></span> Upload
		</button>
		<button type="button" class="btn btn-warning hidden pull-right" onClick="popEditgrp()" >
			<span class="glyphicon glyphicon-edit"></span> Rename Group
		</button>  
		<button type="button" class="btn btn-primary show pull-right"  onclick ="export_xls(0,'10',10)">
			<span class="glyphicon glyphicon-save"></span> Export
		</button>
		<button type="button" class="btn btn-primary pull-right hidden rmvlist"  onclick ="export_xls(0,'0','ref')">
			<span class="glyphicon glyphicon-save"></span> Export Selected
		</button>
		<button type="button" class="btn btn-danger hidden pull-right" onClick="[:del_grp_onclick:]"  >
			<span class="glyphicon glyphicon-remove"></span> Delete Group
		</button>
		<button type="button" class="btn btn-warning show  pull-right" onClick="popNewgrp()" >
			<span class="glyphicon glyphicon-edit"></span> Add Group
		</button>
	</div>	
</div>
	
	<div class="well col-xs-12 col-sm-8 ">
		<div class="col-xs-12 col-sm-5 padding-left-off search_cat">
			<select class="form-control" id="category" name="category">
			<option value="0">All Category</option>
			<option value="1">Name</option>
			<option value="8">Address</option>
			<option value="2">Email</option>
			<option value="3">Company</option>
			<option value="5"> Mobile No</option>
			<option value="6"> State</option>
			<option value="7"> Country</option>
			</select>
		</div>
		<div class="col-xs-12 col-sm-7 input-group">
			<div class="form-group has-feedback">
				<input type="text" id="keyword"  class="form-control" placeholder="Enter search value">
				<span class="epi-info-circled form-control-feedback hide"  aria-hidden="true"></span>
			</div>
			<span class="input-group-btn">
			<button class="btn btn-primary" type="button" id ="namelink" onclick="alert_msg('Missing Required Field','Please Enter Search Value.')">
				Search
			</button>
			</span>
		</div>
	</div>
	<div class="well col-xs-12 col-sm-4">        
		<select class="form-control" id="header_option" name="" onChange="window.location.href=this.value">
			<option id="allist" value="https://secure.easyparcel.my/pass/?pg=MyAccount&tab=AddressBook" selected>Filter By Group</option>
			
			
		</select>
	</div>	
<div class="visible-xs">&nbsp;</div>
<div class="row visible-xs">
	<button class="btn btn-success show" style="width:100%;" onclick ="popNewaddForm()"><span class="glyphicon glyphicon-plus"></span> New</button>
</div>

<div class="container-fluid">
	
		<div class="pull-right hidden-xs">
			<ul class="pagination">
				
			</ul>
		</div>
		 
	<!--<div class="form-inline pull-left hidden-xs" style="margin: 20px 0px;">
		<select class="form-control" id="resultLimit" name="resultLimit" onchange="resultLimit(this.value)" style="width: 150px;">
			<option value="10" selected="">Bulk Action</option>
		</select>
		<button class="btn btn-default">Apply</button>
	</div>-->
	<div class="form-inline pull-right hidden-xs" style="margin: 20px 20px;">
		Listing Per Page : 	                 
		<select class="form-control" id="resultLimit" name="resultLimit" onchange="resultLimit(this.value)">
			<option value='10' Selected>10</option><option value='50' >50</option><option value='100' >100</option><option value='150' >150</option>
		</select>
	</div>
	<div class="row">
		<div class="panel-pink" >
			<div class="">
				<div id="add_new_address_form" hidden>
					<style>
.form-control-feedback.epi-info-circled { 
  position: absolute;
  padding-top: 8px;
  color: #d82b1f ;
  font-size: 18px;
}
</style>
<div class="container space"> 
  <div class="row">
   <div class="col-sm-12">
      <form class="form-horizontal NewAddressForm" role="form">
        <div class="col-sm-6">
          <div class="form-group">
            <label class="col-sm-4 control-label">Name</label>
            <div class="col-sm-8">
              <div class="has-feedback">
                <input class="form-control" type="text"  name="txt_name" placeholder="Name">
                <span class="epi-info-circled form-control-feedback hide"  aria-hidden="true"></span>
              </div>
            </div>
          </div>
          <div class="form-group">
            <label class="col-sm-4 control-label">Company</label>
            <div class="col-sm-8">
              <input class="form-control" type="text"  name="txt_company" placeholder="Company">
            </div>
          </div>
          <div class="form-group">
            <label class="col-sm-4 control-label">Email</label>
            <div class="col-sm-8">
              <input class="form-control" type="text"  name="txt_email" placeholder="Email">
            </div>
          </div>
          <div class="form-group">
            <label class="col-sm-4 control-label">Mobile Number</label>
             <div class="col-sm-4">
              <select class="form-control" name="txt_code1" value= [:code_mobile:]>
                
                <option value="MY" >60 - Malaysia</option>
                
              </select>
            </div>
            <div class="col-sm-4">
              <div class="has-feedback">
                <input class="form-control" type="text" id="number1" maxlength="11" value="" name="txt_mobile" placeholder="Mobile Number">
                <span class="epi-info-circled form-control-feedback hide"  aria-hidden="true"></span>
              </div>
            </div>
          </div>
          <div class="form-group">
            <label class="col-sm-4 control-label">Alternative Contact Number</label>
              <div class="col-sm-4">
              <select class="form-control" name="txt_code2">
                
                <option value="MY" >60 - Malaysia</option>
                
              </select>
            </div>
            <div class="col-sm-4">
              <input class="form-control" type="text" id="number2"  maxlength="11"name="txt_other" placeholder="Alternative Contact Number">
            </div>
          </div>
        </div>
        <div class="col-sm-6 ">
          <div class="form-group">
            <label class="col-sm-4 control-label">Address</label>
            <div class="col-sm-8">
              <div class="has-feedback">
                <input class="form-control" type="text"  name="txt_addr1" maxlength="35" placeholder="Address Line 1">
                <span class="epi-info-circled form-control-feedback hide"  aria-hidden="true"></span>
              </div>
            </div>
          </div>
          <div class="form-group">
            <label class="col-sm-4 control-label"></label>
            <div class="col-sm-8">
              <input class="form-control" type="text"  name="txt_build" maxlength="35" placeholder="Address Line 2 (optional)">
            </div>
          </div>
          <div class="form-group">
            <label class="col-sm-4 control-label"></label>
            <div class="col-sm-8">
              <input class="form-control" type="text"  name="txt_addr2" maxlength="35" placeholder="Address Line 3 (optional)">
            </div>
          </div>
          <div class="form-group">
            <label class="col-sm-4 control-label"></label>
            <div class="col-sm-8">
              <input class="form-control" type="text"  name="txt_addr3" maxlength="35" placeholder="Address Line 4 (optional)">
            </div>
          </div>
          <div class="form-group">
            <label class="col-sm-4 control-label">Town / City</label>
            <div class="col-sm-8">
              <div class="has-feedback">
                <input class="form-control" type="text" name="txt_city" placeholder="Town / City">
                <span class="epi-info-circled form-control-feedback hide"  aria-hidden="true"></span>
              </div>
            </div>
          </div>
          <div class="form-group">
            <label class="col-sm-4 control-label">Zip / Postal code</label>
            <div class="col-sm-8">
              <div class="has-feedback">
                <input class="form-control" type="text" name="txt_postcode" onChange="postGetState(this)" placeholder="Zip / Postal code">
                <span class="epi-info-circled form-control-feedback hide"  aria-hidden="true"></span>
              </div>
            </div>
          </div>
          <div class="form-group">
            <label class="col-sm-4 control-label">State</label>
            <div class="col-sm-8">
              <select class="form-control" name="txt_state">
                
                <option value="jhr" >Johor</option>
                
                <option value="kdh" >Kedah</option>
                
                <option value="ktn" >Kelantan</option>
                
                <option value="mlk" >Melaka</option>
                
                <option value="nsn" >Negeri Sembilan</option>
                
                <option value="phg" >Pahang</option>
                
                <option value="prk" >Perak</option>
                
                <option value="pls" >Perlis</option>
                
                <option value="png" >Pulau Pinang</option>
                
                <option value="sgr" >Selangor</option>
                
                <option value="trg" >Terengganu</option>
                
                <option value="kul" >Kuala Lumpur</option>
                
                <option value="pjy" >Putra Jaya</option>
                
                <option value="srw" >Sarawak</option>
                
                <option value="sbh" >Sabah</option>
                
                <option value="lbn" >Labuan</option>
                
              </select>
            </div>
          </div>
          <div class="form-group">
            <label class="col-sm-4 control-label">Country</label>
            <div class="col-sm-8">
              <input class="form-control " type="hidden" value="Malaysia" name="txt_country" placeholder="Country"/>
              <input class="form-control " type="text" disabled="disabled" value="Malaysia" placeholder="Country"/>
            </div>
          </div>
        </div>
      </form>
    </div>
  </div>
</div>

<div id="dialogResult"></div>

<script>
firebase.auth().onAuthStateChanged( firebaseUser => {
				if(firebaseUser) {
					$("#userId").val(firebaseUser.uid);
					const database2 = firebase.database().ref('User').child(firebaseUser.uid);
					database2.on('value', snap => {
						console.log(snap.val());
						$("#welcome").text("Hi " + snap.val().firstName + " " + snap.val().lastName);
						$("#name-title").text(snap.val().firstName + " " + snap.val().lastName);
						
					});
					const database3 = firebase.database().ref('User/' + firebaseUser.uid + '/shippingAddress');
					database3.on('value', snap => {
						var object1 = snap.val();
						var keys = Object.keys(object1);
							
						console.log(object1);
						for (var i=0; i<keys.length; i++) {
										
								var k= keys[i];
								const Addressdata = firebase.database().ref('Address/' + k);
								$("#table1").empty();
								Addressdata.once('value', snap=>{
											
								var object2 = snap.val();
								var shipKey = snap.key;
								var contact = object2.phoneNumber + '<br>' + object2.email;
								var address = object2.address1 + '<br>' + object2.address2 + '<br>' + object2.address3 + '<br>' + object2.postcode + ' ' + object2.city

								var tr = $("<tr>").html('<td width="2%"><input type=\'checkbox\' name=\'checkaddressdisabled\' value=\''+shipKey+'\' onclick="checknow()" disabled></td><td width="15%" class="hidden-xs">'+object2.contactPerson+'</td><td width="15%" class="hidden-xs">'+object2.companyName+'</td><td width="20%" class="hidden-xs">'+contact+'</td><td width="25%" class="hidden-xs">'+address+'</td><td width="15" class="hidden-xs">'+object2.state+'</td><td width="15" class="hidden-xs">'+object2.city+'</td><td width="10%" class="hidden-xs my-detail"><a class="btn btn-info btn-xs" href="javascript:showDetail(\''+shipKey+'\')"><i class="glyphicon glyphicon-pencil" aria-hidden="true"></i></a></td>');

								$("#table1").append(tr);
												
												
											
											
											
											
								});
								
								
						}
						
					});
					$(".login_top").hide();
					$(".signUp_top").hide();
					$(".logout_top").show();
					$("#welcome").attr("href","<?=base_url("member/user_panel")?>");
					$("#log_in_f").text("LogOut").attr("href","javascript:logout()");
					$("#log_in_mobile").attr("href","<?=base_url("member/user_panel")?>");
					$("#dashboard_f").attr("href","<?=base_url("member/user_panel")?>");
					$("#edit_profile_f").attr("href","<?=base_url("member/personal_profile")?>");
					$("#my_cart_f").attr("href","<?=base_url("member/actions_required")?>");
					
				
				} else {
					$(".login_top").show();
					$(".signUp_top").show();
					$(".logout_top").hide();
					$("#welcome").text("Hi, Welcome");
					$("#welcome").attr("href","<?=base_url("userLogin")?>");
					$("#log_in_mobile").attr("href","<?=base_url("userLogin")?>");
					$("#log_in_f").text("LogIn").attr("href","<?=base_url("userLogin")?>");
					$("#dashboard_f").attr("href","<?=base_url("userLogin")?>");
					$("#edit_profile_f").attr("href","<?=base_url("userLogin")?>");
					$("#my_cart_f").attr("href","<?=base_url("userLogin")?>");
					console.log('not logged in');
				}
			
			});
			
		function showDetail(id) {
			
				
				window.location.href = '<?=base_url('dtc_shipment/')?>' + id;
					
		}	

function postGetState(obj){
  var str = $(obj).val();
  str = str.replace(/[^0-9]+/g,'');
  $(obj).val(str);
  if(str.length == 5){
    $.ajax({
      type  : "post",
      url : "./?ac=doGetState",
      async : false,
      data : {
        postcode : str,
      },
      success : function(result){
        if(result!="No [:STATE:] Available"){
          $("#dialog .NewAddressForm [name=txt_state]").val(result);
        }
      }
    });
  }
}

function SaveNewAddress(){
  clearClass();
  var mobile =  $("#dialog .NewAddressForm [name=txt_mobile]").val().replace(/\D/g,'');
  var 
  type = "post",
  url = "https://secure.easyparcel.my/pass/?ac=doSaveNewAddressBook",
  data = {
    tab : 0,
    name : $("#dialog .NewAddressForm [name=txt_name]").val(),
    company : $("#dialog .NewAddressForm [name=txt_company]").val(),
    email : $("#dialog .NewAddressForm [name=txt_email]").val(),
    mobile :mobile,
    code_mobile : $("#dialog .NewAddressForm [name=txt_code1]").val(),
    alt_contact : $("#dialog .NewAddressForm [name=txt_other]").val(),
    code_alt : $("#dialog .NewAddressForm [name=txt_code2]").val(),
    addr1 : $("#dialog .NewAddressForm [name=txt_addr1]").val(),
    addr2 : $("#dialog .NewAddressForm [name=txt_addr2]").val(),
    addr3 : $("#dialog .NewAddressForm [name=txt_addr3]").val(),
    floor : $("#dialog .NewAddressForm [name=txt_floor]").val(),
    block : $("#dialog .NewAddressForm [name=txt_block]").val(),
    building : $("#dialog .NewAddressForm [name=txt_build]").val(),
    city : $("#dialog .NewAddressForm [name=txt_city]").val(),
    state : $("#dialog .NewAddressForm [name=txt_state]").val(),
    postcode : $("#dialog .NewAddressForm [name=txt_postcode]").val(),
    country : $("#dialog .NewAddressForm [name=txt_country]").val()
  },
  callback = function(result){
    if(result == "pass"){
        swal({
          title: 'Success',
          text: 'Address updated',
          type: 'success',
          confirmButtonColor: '#4e97d8'
        }).then(function() {
          window.location.reload();
        });
    }else{
        swal({
          title: 'Existing Data',
          type: 'error',
          html: 'Address already exist.',
          confirmButtonColor: '#4e97d8'
        });
    }
  };
  var message = "";
  var variable = "";
    if(data.postcode == ""){
      doFail($("[name=txt_postcode]"));
      variable = "[name=txt_postcode]"; 
      message+= "**Please insert the postcode of your address.\n";
    }
    if(data.city == ""){
      doFail($("[name=txt_city]"));
      variable = "[name=txt_city]"; 
      message+= "**Please insert the city of your address.\n";
    }
    if(data.mobile == ""){
      doFail($("[name=txt_mobile]"));
      variable = "[name=txt_mobile]"; 
      message+= "**Please insert your mobile number.\n";
    }
    if(data.addr1 == ""){
      doFail($("[name=txt_addr1]"));
      variable = "[name=txt_addr1]";  
      message+= "**Please insert your address.\n";
    }
    if(data.name == ""){
      doFail($("[name=txt_name]"));
      variable = "[name=txt_name]";
      message+= "**Please insert your name.\n";
    }
    if(data.state == ""){
      message+= "**Please insert the state.\n";
    }

    if(message==""){
      $.ajax({
        type  : "post",
        url : "./?ac=checkPostcode",
        async : false,
        data : {
          cpostcode : data.postcode,
          cstate : data.state,
          dpostcode : '',
          dstate : ''
        },
        success : function(result){
          if(result == true){
          
          }else{
            message += result;
          }
        },
        fail : function(result){
          message += "Something Went Wrong. Please Try Again. If Problem Persist, Please Contact Our Customer Service.<br>";
                swal({
                  title: 'Oops!',
                  type: 'error',
                  html: '' + message,
                  confirmButtonColor: '#4e97d8'
                });
        }
      });
    }

    
    if(message != ""){
      $("html, body").animate({ scrollTop: $(variable).offset().top - 90 }, 1000);
        swal({
          title: 'Oops!',
          type: 'error',
          html: '' + message,
          confirmButtonColor: '#4e97d8'
        });
      return false;
    }
  
  General.loadAjax(type,url,data,callback);
}

function clearClass(){
  var names = ["txt_name","txt_mobile","txt_addr1","txt_city","txt_postcode"];
  for (i = 0; i < names.length; i++) { 
    $("[name="+names[i]+"]").removeClass("pass");
    $("[name="+names[i]+"]").removeClass("fail");
    $("[name="+names[i]+"]").removeClass("padding");
    $("[name="+names[i]+"]").css("border-color","");
    $("[name="+names[i]+"]").parent().eq(1).children().eq(1).addClass("hide");
  }
}

function doFail(obj){
  $(obj).addClass("fail");
  $(obj).removeClass("padding");
  $(obj).removeClass("pass");
  $(obj).css("border-color","#F00");
  $(obj).parent().eq(1).children().eq(1).removeClass("hide");
}

function validatePhone(fld) {
    var error = "";
    var stripped = fld.value.replace(/[\(\)\.\-\ ]/g, '');     

   if (fld.value == "") {
        error = "You didn't enter a phone number.\n";
        fld.style.background = 'Yellow';
    } else if (isNaN(parseInt(stripped))) {
        error = "The phone number contains illegal characters.\n";
        fld.style.background = 'Yellow';
    } else if (!(stripped.length == 10)) {
        error = "The phone number is the wrong length. Make sure you included an area code.\n";
        fld.style.background = 'Yellow';
    } 
    return error;
}

$( ".NewAddressForm [name=txt_addr2]" ).autocomplete({
  source : function(request, response){
    var url = "./?ac=StreetAutoComplete&street="+request.term;
    $.ajax({
      type : "get",
      url : url,
      success : function(data){
        response( $.map(data, function(item){
          return {
            label : item.street + " ("+ item.state +")",
            value : item.street,
            state : item.state_code,
            postcode : item.postcode
          }
        }));
      }
    });
  },
  select : function (event , ui){
    $(".NewAddressForm [name=txt_postcode]").val(ui.item.postcode);
    $(".NewAddressForm [name=txt_state]").val(ui.item.state);
  }
});

$(document).ready(function () {
  $("#number1, #number2").bind("keydown", function (event) {
    if ( event.keyCode == 46 || event.keyCode == 8 || event.keyCode == 9 || event.keyCode == 27 || event.keyCode == 13 ||
            (event.keyCode == 65 && event.ctrlKey === true) || 
 
            (event.keyCode >= 35 && event.keyCode <= 39)) {
              return;
        } else {
            if (event.shiftKey || (event.keyCode < 48 || event.keyCode > 57) && (event.keyCode < 96 || event.keyCode > 105 )) {
                event.preventDefault();
            }
        }
   });
});
</script>
				</div>
				<div id="add_new_grp" hidden>
					<div class="form-group" >
						<label for="email">Enter New Group Name:</label>
						<input type="text" class="form-control" id="grp_tab_name" rel="new">
					</div>
				</div>
				<div class ="assignhtml" hidden>
					<div class ="row form-inline">

						<span>Please Select Group :</span>                 
						<select class="form-control" id="header_option" name="assignhtml">
							
					   </select>		
					</div>					   
				</div>
				<div>         
					<table class="table table-striped">
						<thead>
							<tr>
								<th width="2%" class="hidden-xs"><input type='checkbox' name='checkall' id='checkall' onclick="AddressCheckAll()"></th>
								<th width="15%" class="hidden-xs">Name</th>
								<th width="15%" class="hidden-xs">Company</th>
								<th width="20%" class="hidden-xs">Contact Info</th>
								<th width="25%" class="hidden-xs">Address</th>
								<th width="15%" class="hidden-xs">State</th>
								<th width="15%" class="hidden-xs">Country</th>
								<th class="visible-xs">Contact Summary</th>
								<th class="visible-xs"></th>
								<th width="10%" class="hidden-xs"></th>
							</tr>
						</thead>
						<tbody id="table1">
							
							
							<tr>
								<td colspan='7'>No Record Found</td>     
							</tr>
							
						</tbody>
					</table>
				</div>
				<div class="form-inline visible-xs pull-right"> Listing :
					<select class="form-control" id="resultLimit" name="resultLimit" onchange="resultLimit(this.value)">
						<option value='10' Selected>10</option><option value='50' >50</option><option value='100' >100</option><option value='150' >150</option>
					</select>
				</div>
				
					<div class="dashboard-pagination">
						<ul class="pagination">
							
						</ul>
					</div>
					
				<div class="form-inline pull-right hidden-xs" style="margin: 20px 20px;">
					Listing Per Page : 	                 
					<select class="form-control" id="resultLimit" name="resultLimit" onchange="resultLimit(this.value)">
						<option value='10' Selected>10</option><option value='50' >50</option><option value='100' >100</option><option value='150' >150</option>
					</select>
				</div>
			</div>
		</div>
		<div id ="form" style= "visibility : hidden;">Download your template 
			<a id = "pop" style ="color :blue;" href = "https://secure.easyparcel.my/pass/application/source/Malaysia/Template/address_template.xls">Here</a><br>
			<input type="file" onclick = "InitialUpload(this)" for="addbook" id="import"/></br>
			<div id="progress" class="progress">
				<div class="progress-bar" role="progressbar" aria-valuemin="0" aria-valuemax="100" style="width: 0%; color: black;"></div>
			</div>
		</div>
	</div>
</div>
<div id="result"></div>
<div id="dialog"></div>

<script>
$(document).ready(function(){
	$("#img_title_none").attr("title","");
});

function resultLimit(limit){
	var url = QueryString(window.location.href);
	var rl = limit;
	var qs = "";
	for(p in url.qs){
		if(p != "lpg"&& p != "rl"){
			if(qs.length > 0) qs += "&";
			qs += p + "=" + url.qs[p]
		};
	}
	window.location.href = url.link + "?" + qs + (rl.length > 0 ? "&rl=" + rl : "");
}
	
function QueryString(url){
	var link = url.split("?");
	var url = {link: link[0], qs : {}};
	if(link[1] == null) return url;
	var qs = link[1].split("&");
	for(var i = 0; i < qs.length;i++){
		var param = qs[i].split("=");
		if(param[0] != null) url.qs[param[0]] = param[1];	
	}
	return url;
}

function alert_msg(title,msg){
	CheckNull($("[id=keyword]"));
	swal({
		title: '' + title,
		type: 'error',
		html: '' + msg,
		confirmButtonColor: '#4e97d8'
	});
}

function CheckNull(obj){
	var keyword  = $("[id=keyword]");
	
	if(General.isTextEmpty($(obj))){
		doFail(obj);
	}
}

function doFail(obj){
	$(obj).addClass("fail");
	$(obj).removeClass("padding");
	$(obj).removeClass("pass");
	$(obj).css("border-color","#F00");
	$(obj).parent().children().eq(1).removeClass("hide");
}

function clearNull(obj){
	$(obj).removeClass("pass");
	$(obj).removeClass("fail");
	$(obj).removeClass("padding");
	$(obj).css("border-color","");
	$(obj).parent().children().eq(1).addClass("hide");
}

function clearClass(){
	var names = ["txt_name","txt_mobile",
		"txt_addr1","txt_city","txt_state","txt_postcode"];
	for (i = 0; i < names.length; i++) { 
		$("[name="+names[i]+"]").removeClass("pass");
		$("[name="+names[i]+"]").removeClass("fail");
		$("[name="+names[i]+"]").removeClass("padding");
		$("[name="+names[i]+"]").css("border-color","");
		$("[name="+names[i]+"]").parent().children().eq(1).addClass("hide");
	}
}

function updateQueryStringParameter(uri, key, value) {
	var re = new RegExp("([?&])" + key + "=.*?(&|$)", "i");
	var separator = uri.indexOf('?') !== -1 ? "&" : "?";
	if (uri.match(re)) {
		return uri.replace(re, '&' + key + "=" + value + '&');
	}else{
		return uri + separator + key + "=" + value;
	}
}

$("#keyword").keyup(function(){
	clearNull($("[id=keyword]"));
    var name = $("#keyword").val().trim();
	var category = $("#category").val();
	var url = window.location.href ;
	if (name != ""){
		url = updateQueryStringParameter(url,'keywrd',name); 
		url = updateQueryStringParameter(url,'category',category); 
		url = updateQueryStringParameter(url,'lpg','1'); 
		if( event.keyCode == 13){
			document.location =url;
		}
		$("#namelink").attr("onclick", "window.location.href='"+url+"'");
	}else{
		$("#namelink").attr("onclick", "alert_msg('Missing Required Field','Please Enter Search Value')");     
	}
});

$("#category").change(function(){
    var name = $("#keyword").val().trim();
	var category = $("#category").val();
	var url = $("#allist").val();
	if (name != ""){
		url = url+"&keywrd="+name+"&category="+category;
		$("#namelink").attr("onclick", "window.location.href='"+url+"'");
	}else{
		$("#namelink").attr("onclick", "alert_msg('Missing Required Field','Please Enter Search Value')"); 
	}
});

function export_xls(key,keywrd,category){
	if(category== 10){
		category="";
		keywrd="";
	}
	
	if(category == "ref"){
		keywrd="";
		var check = true;
		var id = [];
		var num = 0;
		var checkboxes = document.getElementsByName('checkaddress');
		for(var i = 0; i < checkboxes.length; i++){
			if(checkboxes[i].checked){
				id[num]= checkboxes[i].value;
				num++;
				check = false;
			}
		}
		if(check){
			return;
		}
		document.location = "./?ac=ManageExportAction&key="+key+"&keywrd="+keywrd+"&category="+category+"&id="+id;
		return;
	}
	
	document.location = "./?ac=ManageExportAction&key="+key+"&keywrd="+keywrd+"&category="+category;
}

function myKeyPress(res){
	var link = $('#allist').attr("value");
	var str = res.split("-");
	var name = str[0];
	var ref = str[1];
	if(ref =="new"){				
		$.ajax({
			type : "post",
			url : "./?ac=ManageAddressBook",
			data : {data : name, ref:ref},
			success : function(result) {
					link = link+"&for="+result;
					swal({
						title: 'Create New Group',
						text: "You have successfully created new group",
						type: 'success',
						confirmButtonColor: '#4e97d8'
					}).then(function() {
						window.location.href=link;
					})
			}
		});
	}else if(ref =="edit_name"){
		var url = QueryString(window.location.href); 
		var tab_id = 0;
		for(p in url.qs){
			if(p == "for"){		
			 tab_id = url.qs[p]
			};		
		}
		$.ajax({
			type : "post",
			url : "./?ac=ManageAddressBook",
			data : {name : name,tab_id:tab_id, ref:ref},
			success : function(result) {
			link = link+"&for="+result;
				$("#header_option").find("#grp_"+tab_id).replaceWith('<option id="grp_'+tab_id+'" value ="'+link+'" selected>'+name+'</option>');
				swal({
					title: 'Change Group Name',
					type: 'success',
					html: 'The group name was successfully changed',
					confirmButtonColor: '#4e97d8'
				});
			}
		});
	}
}

function popContent(obj){
	swal({
		title: 'Import Address Book',
		type: 'info',
		html: '<div>Download your template' + '&nbsp<a id = "pop" style ="color :blue;" href ="https://secure.easyparcel.my/pass/application/source/Malaysia/Template/address_template.xls">Here</a>' + '<div><br><center><input type="file" style="border-style: solid; border-color: #ff0000;" onclick = "InitialUpload(this)" for="addbook" id="import"/></div></div>',
		confirmButtonColor: '#4e97d8',
		confirmButtonText: "Close"
	});
}

function popNewaddForm(){
	clearClass();
	$("#dialog").html($("#add_new_address_form").html()).dialog({
		title: "Add New Address Form",
		resizable: false,
		maxWidth:500,
		width: 'auto',
		modal: true,
		buttons: {"Save": function() {SaveNewAddress();},"Close": function() {$( this ).dialog( "close" );}}
	});
}

function popEditgrp(){
	swal({
		title: 'Rename Group',
		input:'text',
		type: 'info',
		confirmButtonColor: '#4e97d8',
		inputValidator: function(value) {
			return new Promise(function(resolve, reject) {
			  if (value != '') {
				resolve();
			  } else {
				reject('Please enter your prefered group name.');
			  }
			});
		}
	}).then(function(result) {
		result = result+"-edit_name";
		myKeyPress(result);
	})
}

function popNewgrp(){
	swal({
		title: 'Add New Group',
		input: 'text',
		type: 'info',
		confirmButtonColor: '#4e97d8',
		inputValidator: function(value) {
			return new Promise(function(resolve, reject) {
			  if (value != '') {
				resolve();
			  } else {
				reject('Please enter your prefered group name.');
			  }
			});
		}
	}).then(function(result) {
		result = result+"-new";
		myKeyPress(result);
	})
}


function InitialUpload (obj){
	var url = "./?ac=doFileImport";
	$(obj).fileupload({
		url: url,
		dataType: 'html',
		done: function (e, data) {
			var result = $.trim(data.result).split("::");
			if(result[0] == 1){
				swal({
					title: 'File Upload',
					text: "File Upload Successful",
					type: 'success',
					confirmButtonColor: '#4e97d8'
				}).then(function() {
					window.location.reload();
				});
			}else{
				swal({
					title: 'File Upload',
					text: "File Upload Error",
					type: 'error',
					confirmButtonColor: '#4e97d8'
				}).then(function() {
					window.location.reload();
				});
			} 
		},
		progressall: function (e, data){
			$('#popupbox .modal-header h3').html("Importing Address Book...");
			$("#popupbox .modal-body").html($("#progress").html());
			$("#popupbox .modal-footer").html('');
			var progress = parseInt(data.loaded / data.total * 100, 10);
			$('#progress .progress-bar').css('width',progress + '%');
			$('#progress .progress-bar').html(progress + '%');
		}
	}).prop('disabled', !$.support.fileInput)
	.parent().addClass($.support.fileInput ? undefined : 'disabled');
}

function RemoveAddress(id,key){
	if(key == 0){
		var msg = "Do you want to delete this address?";
		var title = "Delete Address";
	}else{
		var msg ="Do you want to delete this address from this group?";
		var title = "Delete From Group";
	}
	swal({
		title: '' + title,
		text: '' + msg,
		type: 'info',
		confirmButtonColor: '#4e97d8',
		showCancelButton: true
	}).then(function() {
		RemoveAddressfunc(id,key);
	})	
}

function RemoveAddressfunc(id,key){
	var type = "post",
		url = "./?ac=doDeleteAddress",
		data = {
			id : id,
			key :key
		},
	callback = function(result){
		if($.trim(result) != ""){
			result = result.split(",");
			swal({
				title: '' + result[0],
				text: '' + result[1],
				type: 'success',
				confirmButtonColor: '#4e97d8'
			}).then(function() {
				window.location.href = "https://secure.easyparcel.my/pass/?pg=MyAccount&tab=AddressBook";
			});	
		}else{
			swal({
				title: 'Process Status',
				type: 'error',
				html: 'Process Failed',
				confirmButtonColor: '#4e97d8'
			});
		}
	};
	General.loadAjax(type,url,data,callback);
}

function removeaddrlist(key){
	var check = true;
	var id = [];
	var num = 0;
	var checkboxes = document.getElementsByName('checkaddress');
	for(var i = 0; i < checkboxes.length; i++){
	   if(checkboxes[i].checked){
		   id[num]= checkboxes[i].value;
		   num++;
		   check = false;
	   }
	}
	if(key == 0){
		var msg = "Are you sure want to remove the ("+id.length+") selected address?";
		var title = "Delete Address";
	}else{
		var msg ="Are you sure want to delete the ("+id.length+") selected address from this group?";
		var title = "Delete From Group";
	}
	swal({
		title: '' + title,
		text: '' + msg,
		type: 'warning',
		confirmButtonColor: '#4e97d8',
		showCancelButton: true
	}).then(function() {
			removeaddrlistfunc(key,id);
	});
}

function removeaddrlistfunc(key,id){
	var 
	type = "post",
	url = "./?ac=doDeleteAddress",
	data = {
		id: id,
		key :key
	},
	callback = function(result){
		if($.trim(result) != ""){
		result = result.split(",");
			swal({
				title: '' + result[0],
				text: '' + result[1],
				type: 'success',
				confirmButtonColor: '#4e97d8'
			}).then(function() {
				window.location.href = "https://secure.easyparcel.my/pass/?pg=MyAccount&tab=AddressBook";
			})	;
		}else{
			swal({
				title: 'Process Status',
				type: 'error',
				html: 'Process Failed',
				confirmButtonColor: '#4e97d8'
			});
		}
	};
	General.loadAjax(type,url,data,callback);
}

function assignaddress(){
	swal({
		title: 'Assign Address To Group',
		text: '' + $(".assignhtml").html(),
		type: 'info',
		confirmButtonColor: '#4e97d8',
		confirmButtonText: 'Save',
		showCancelButton: true
	}).then(function() {
			SaveAssignedAddress();
	});
}

function SaveAssignedAddress(){
	var group = $(".swal2-content select[name=assignhtml]").val();
	var check = true;
	var id = [];
	var num = 0;
	var checkboxes = document.getElementsByName('checkaddress');
	for(var i = 0; i < checkboxes.length; i++){
		if(checkboxes[i].checked){
			id[num]= checkboxes[i].value;
			num++;
			check = false;
		}
	}
	if(check){
		return;
	}
   
	var 
	type = "post",
	url = "./?ac=ManageAddressBook",
	data = {
		data:id,
		tab_id :group,
		ref :'assign'
	},
	callback = function(result){
		if($.trim(result) == "ok"){
			swal({
				title: 'Assign Address',
				text: 'Successful Assigned The Addresses.',
				type: 'success',
				confirmButtonColor: '#4e97d8',
			}).then(function() {
				window.location.reload();
			});
		}else{
			swal({
				title: 'Process Status',
				type: 'error',
				html: 'Process Failed',
				confirmButtonColor: '#4e97d8'
			});
		}
	};
	General.loadAjax(type,url,data,callback);	
}

function DeleteAddressTab(id){
	swal({
		title: 'Delete Group',
		text: 'Are you sure want delete this group?',
		type: 'warning',
		confirmButtonColor: '#4e97d8',
		showCancelButton: true
	}).then(function() {
		DeleteAddressTabfunc(id);
	});
}

function DeleteAddressTabfunc(id){
	var type = "post",
		url = "./?ac=doDeleteAddressTab",
		data = {
			id : id
		},
	callback = function(result){
		if($.trim(result) == "pass"){
			window.location.href = "./?pg=MyAccount&tab=AddressBook";
		}else{
			swal({
				title: 'Process Status',
				type: 'error',
				html: 'Process Failed',
				confirmButtonColor: '#4e97d8'
			});
		}
	};
	General.loadAjax(type,url,data,callback);
	return;
}

function AddressCheckAll(){
	var checkboxes = document.getElementsByName('checkaddress');
	if(document.getElementById('checkall').checked){
		$(".rmvlist").removeClass("hidden");
		$(".butlist .show").addClass("hidden new");
		$(".butlist .show").removeClass("show");

		for(var i = 0; i < checkboxes.length; i++){
			if(checkboxes[i].type == 'checkbox'){
				checkboxes[i].checked = true;
			}
		}
	}else{
		$(".rmvlist").addClass("hidden");
		$(".hidden.new").addClass("show");
		$(".hidden.new").removeClass("hidden new");
		for (var i = 0; i < checkboxes.length; i++){
			console.log(i);
			if (checkboxes[i].type == 'checkbox'){
				checkboxes[i].checked = false;
			}
		}
	}	
}

function checknow(){
	if(document.getElementById('checkall').checked){
		document.getElementById('checkall').checked=false;
		var checkboxes = document.getElementsByName('checkaddress');
		if(checkboxes.length <2){
			$(".butlist .show").addClass("hidden new");
			$(".butlist .show").removeClass("show");
			$(".rmvlist").addClass("hidden");
			$(".hidden.new").addClass("show");
			$(".hidden.new").removeClass("hidden new");
		}
	}else{
		var checkboxes = document.getElementsByName('checkaddress');
		var allchecked=0;
		var clearchecked =true;
		for(var i = 0; i < checkboxes.length; i++){
			if(checkboxes[i].type == 'checkbox'){
				if(checkboxes[i].checked == false){
					allchecked=1;	
				}else{
					clearchecked = false;
				}
			}
 		}

		if(allchecked==0){
			document.getElementById('checkall').checked=true;
		}
		
		if(!clearchecked){
			$(".rmvlist").removeClass("hidden");
			$(".butlist .show").addClass("hidden new");
			$(".butlist .show").removeClass("show");
		}else{
			$(".rmvlist").addClass("hidden");
			$(".hidden.new").addClass("show");
			$(".hidden.new").removeClass("hidden new");
		}
	}
}

function promptChangeProfile(){
	swal({
		title: 'Reminder',
		text: 'Editing your profile address will affect the address shown in your invoice too.<br>Would you like to proceed?',
		type: 'info',
		confirmButtonColor: '#4e97d8',
		showCancelButton: true,
		confirmButtonText: "Yes"
	}).then(function() {
		swal.close();
		window.location.href = "./?pg=MyAccount&tab=Profile";
	})	
}
</script> 
    </div>
  </div>
</div>
</div>
<div id="mainTrackResult"></div>