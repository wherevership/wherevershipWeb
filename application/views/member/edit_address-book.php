<script>
	$('#MyAccount').collapse();
	$("ul[data-target='#MyAccount']").children().children().eq(1).removeClass('fa-plus').addClass('fa-minus');
	$("#Address_Book").addClass('active selected');

</script>
<div class="col-md-10 col-xs-12 dashboard-wrapped padding-right-off">
    <div class="row dashoboard-account">
  <div class="hidden-xs"><style>
.profile-bg {
	padding: 20px;
    border-width: 1px;
    border-color: #ddd;
    border-style: solid;
    background: #eee;
}

.profile-bg.bindCard {
	background-color: #B3003C;
}

.bindCard p, .bindCard_successful p {
	margin: 0px; color:#fff;
}

.profile-bg.bindCard_successful {
	background-color: #666;
}
</style>

      		

       </div>
   
    <div class="container-fluid space-small">
      <h2 class="dashboard-title"><?=$id?></h2>
    <div class="dashboard-title">
      
    </div>
    <div class="clearfix"></div>
      <div profile_msg></div>
     <hr />
      
        <div>
        <form method="post" action="javascript:profile.SaveProfile();">
			<div class="col-md-6 col-xs-12 padding-off">
				<div class="col-xs-12 form-group">
					<label>Contact Person Name <span style="color:red;">*</span></label>
					<div class="has-feedback">
						<input class="form-control required" type="text" name="txt_contact_person_name" value=""  id="txt_contact_person_name" maxlength="40" required placeholder="Contact Person Name">
						<span class="epi-info-circled form-control-feedback hide"  aria-hidden="true"></span>
					</div>
				</div>
			</div>
			<div class="col-md-6 col-xs-12 padding-off">
				<div class="col-xs-12 form-group">
					<label>Company Name </label>
					<div class="has-feedback">
						<input class="form-control" type="text" name="txt_company_name" value=""  id="txt_company_name" placeholder="Company Name">
                
					</div>
				</div>
			</div>
			<hr>
			<div class="col-md-6 col-xs-12 padding-off">
				<div class="col-xs-12 form-group">
					<label>Address <span style="color:red;">*</span></label>
					<div class="has-feedback">
						<input class="form-control required" type="text" name="txt_unit" value=""  id="txt_unit" maxlength="40" required placeholder="Address Line 1">
						<span class="epi-info-circled form-control-feedback hide"  aria-hidden="true"></span>
					</div>
				</div>
				<div class="col-xs-12 form-group">
					<input class="form-control" type="text" name="txt_building" value="" id="txt_building" maxlength="35" re placeholder="Address Line 2 (optional)">
				</div>
				<div class="col-xs-12 form-group">
					<input class="form-control" type="text" name="txt_street" value="" id="txt_street" maxlength="35"  placeholder="Address Line 3 (optional)"/>
				</div>
             
			</div>
			<div class="col-md-6  col-xs-12 padding-off">
				<div class="col-md-12 col-sm-6 col-xs-12 form-group">
					<label>Town/City<span style="color:red;">*</span></label>
					<div class="has-feedback">
						<input class="form-control required" type="text" name="txt_city"  id="txt_city" value="Pekan Nanas" required placeholder="Town / City"/>
						<span class="epi-info-circled form-control-feedback hide"  aria-hidden="true"></span>
					</div>
				</div>
				<div class="col-md-12 col-sm-6 col-xs-12 form-group">
					<label>Zip/Postal Code<span style="color:red;">*</span></label>
					<div class="has-feedback">
						<input class="form-control required" type="text" name="txt_postcode" id="txt_postcode" value="81500" onChange="postGetState(this)" required placeholder="Zip / Postal code"/>
						<span class="epi-info-circled form-control-feedback hide"  aria-hidden="true"></span>
					</div>
				</div>
				<div class="col-md-12 col-sm-6 col-xs-12 form-group">
					<label>State<span style="color:red;">*</span></label>
					<select class="form-control" name="txt_state">
                
						<option value="Johor" selected>Johor</option>
                
						<option value="Kedah" >Kedah</option>
                
						<option value="Kelantan" >Kelantan</option>
                
						<option value="Melaka" >Melaka</option>
                
						<option value="Negeri Sembilan" >Negeri Sembilan</option>
                
						<option value="Pahang" >Pahang</option>
                
						<option value="Perak" >Perak</option>
                
						<option value="Perlis" >Perlis</option>
                
						<option value="Penang" >Pulau Pinang</option>
                
						<option value="Selangor" >Selangor</option>
                
						<option value="Terengganu" >Terengganu</option>
                
						<option value="Kuala Lumpur" >Kuala Lumpur</option>
                
						<option value="Putra Jaya" >Putra Jaya</option>
                
						<option value="Sarawak" >Sarawak</option>
                
						<option value="Sabah" >Sabah</option>
                
						<option value="Labuan" >Labuan</option>
                
					</select>
				</div>
				<div class="col-md-12 col-sm-6 col-xs-12 form-group">
					<label>Country <span style="color:red;">*</span></label>
						<select class="form-control" name="txt_country" id="txt_country">
							<option value="Malaysia">Malaysia</option>
                <!--<option value="Singapore">Singapore</option>-->
						</select>
				</div>
			</div>
        
			</div>
			<div class="clearfix"></div>
			<div>
          
				<div class="col-md-6 col-xs-12 padding-off">
					<div class="col-xs-12 form-group">
						<label>Mobile No. <span style="color:red;">*</span></label>
						<div class="clearfix"></div>
                     
                    
							<div class="col-sm-6">
							<input class="form-control required" type="text" name="txt_mobile" id="txt_mobile" value="" required placeholder="Contact Number" />
							</div>
                  
					</div>
				</div>
				<div class="col-md-6 col-xs-12 padding-off">
					<div class="col-xs-12 form-group">
						<label>Email <span style="color:red;">*</span></label>
						<div class="clearfix"></div>
                     
                    
							<div class="col-sm-6">
							<input class="form-control" type="text" name="txt_email" id="txt_email" value="" placeholder="Contact Person Email" required/>
						</div>
                  
					</div>
				</div>
            
          
			</div>
			<div class="clearfix"></div>
        
			<div class="clearfix">
			<input type="submit" class="btn btn-primary pull-right" value="Save">
			</form>
        </div>
      </div>
    </div>
  </div>
</div>
<div id="dialog"></div>
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
			
var id = '<?=$id?>';
	
	const AddressDatebase = firebase.database().ref('Address/' + id );
	AddressDatebase.once('value', snap=> {
		var object = snap.val();
			$("#txt_contact_person_name").val(snap.val().contactPerson);
			$("#txt_company_name").val(snap.val().companyName);
			$("#txt_unit").val(snap.val().address1);
			$("#txt_building").val(snap.val().address2);
			$("#txt_street").val(snap.val().address3);
			$("#txt_city").val(snap.val().city);
			$("#txt_postcode").val(snap.val().postcode);
			$("#txt_state").val(snap.val().state);
			$("#txt_country").val(snap.val().country);
			$("#txt_mobile").val(snap.val().phoneNumber);
			$("#txt_email").val(snap.val().email);
		console.log(snap.val());
	});

/**
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
        if(result!="No State Available"){
          $("[name=txt_state]").val(result);
        }
      }
    });
  }
}
**/
var profile = {
  SaveProfile : function(){
	var person_name = $("#txt_contact_person_name").val();
	var company_name = $("#txt_company_name").val();
	var addressId = '<?=$id?>';
	var email = $("[name=txt_email]").val();
	var mobileNumber = $("[name=txt_mobile]").val();
     // other : $("[name=txt_other]").val().replace(/\D/g,''),
     // code1 : $("[name=txt_code1]").val(),
     // code2 : $("[name=txt_code2]").val(),
     // ic_no : $("[name=txt_ic_no]").val().replace(/-/g,''),
      //comp_name : $("[name=txt_comp_name]").val(),
      //comp_reg_no : $("[name=txt_comp_reg_no]").val(),
      
      //img_ic : $(".DetailFrom #ic_uploaded").attr("href"),
      //img_ssm : $(".DetailFrom #ssm_uploaded").attr("href"),
     // img_form49 : $(".DetailFrom #49_uploaded").attr("href"),
    
      var address1 = $("[name=txt_unit]").val();
	  var address2 = $("[name=txt_building]").val();
	  var address3 = $("[name=txt_street]").val();
	  var city = $("[name=txt_city]").val();
	  var state = $("[name=txt_state]").val();
      var postcode = $("[name=txt_postcode]").val();
      var country = $("[name=txt_country]").val();
  
	//var message = "";
    //var variable = "";
    //var error = "";
    clearClass();
	firebase.database().ref('Address/' + addressId).update({
		email : email,
		contactPerson : person_name,
		companyName : company_name,
		phoneNumber : mobileNumber,
		address1 : address1,
		address2 : address2,
		address3 : address3,
		city : city,
		state : state,
		postcode : postcode,
		country :country
	}).then(function(){
		window.location.href = '<?=base_url("member/address_book")?>';
		
	}).catch(function(error){
		 swal({
            title: 'Error',
            type: 'error',
            html: error,
            confirmButtonColor: '#4e97d8'
          });
	});
        
  }
  
 
}

function clearClass(){
  var names = ["txt_first","txt_last",
        "txt_mobile","txt_unit","txt_city","txt_postcode","txt_ic_no","txt_comp_name","txt_comp_reg_no"];
  for (i = 0; i < names.length; i++) { 
    $("[name="+names[i]+"]").removeClass("pass");
    $("[name="+names[i]+"]").removeClass("fail");
    $("[name="+names[i]+"]").removeClass("padding");
    $("[name="+names[i]+"]").css("border-color","");
    $("[name="+names[i]+"]").parent().children().eq(1).addClass("hide");
  }
}

function doFail(obj){
  $(obj).addClass("fail");
  $(obj).removeClass("padding");
  $(obj).removeClass("pass");
  $(obj).css("border-color","#F00");
  $(obj).parent().children().eq(1).removeClass("hide");
}

$("#upIC").filestyle({
  input: false,
  buttonText: "Upload I.C.",
  classButton: "btn btn-success btn-sm"
});

$("#upSSM").filestyle({
  input: false,
  buttonText: "Upload SSM",
  classButton: "btn btn-warning btn-sm maigin-bottom"
});

$("#upForm49").filestyle({
  input: false,
  buttonText: "Upload Form 49",
  classButton: "btn btn-primary btn-sm"
});

profile.InitialUpload($("#upIC"));
profile.InitialUpload($("#upSSM"));
profile.InitialUpload($("#upForm49"));

$('#forBiz').click(function () {
    $("#business").toggle(this.checked);
});

$('#upload').change(function(){
  swal({   
    title: 'Loading........',   
    text: '<div class="progress-bar progress-bar-info progress-bar-striped" id="myProgress" style="visibility: visible" role="progressbar" aria-valuenow="0" aria-valuemin="0" aria-valuemax="100" style="width: 100%"><div id="myBar" style="visibility: visible"></div></div>',
    showConfirmButton: false
  });
  var bar= document.getElementById("myProgress"); 
  var elem = document.getElementById("myBar");   
  var width = 1;
  var id = setInterval(frame, 20);
  function frame() {
    if (width >= 100){
      clearInterval(id);
    }else{
      width++; 
      elem.style.width = width + '%'; 
      $('#myBar').html(width + "%" );
    } 
  }
    if(!$(this).val()) {
        return false;
    }else{
    var file_data = $(this).prop('files')[0];  
    var form_data = new FormData();                  
    form_data.append('file', file_data);

    $.ajax({
      url: "./?ac=doUploadPhoto",
      type: "POST",
      data: form_data,
      processData: false,
      contentType: false,
      success: function (res) {
        if(res=="success"){
          clearInterval(id);
          elem.style.width = 100 + '%'; 
          $('#myBar').html("100%");
          window.location.reload();
        }else{
          swal({
            title: 'Oops',
            type: 'error',
            html: '' + res,
            confirmButtonColor: '#4e97d8'
            })
          return false;
        }
      }
    });
        return false;
    }
});

$(".profile_picture").hover(
  function() {
    $(this).children("img").fadeTo(200, 0.5).end().children("#logo").show();
    document.getElementById("logo").style.visibility = "visible";
  },
  function() {
    $(this).children("img").fadeTo(200, 1).end().children("#logo").hide();
  }
);

$(".profile_picture").click(function(){
  $('#upload').click();
});

$(document).ready(function () {
  //called when key is down
  $("#number, #number2").bind("keydown", function (event) {
    if ( event.keyCode == 46 || event.keyCode == 8 || event.keyCode == 9 || event.keyCode == 27 || event.keyCode == 13 ||
             // Allow: Ctrl+A
            (event.keyCode == 65 && event.ctrlKey === true) || 
 
        // Allow: home, end, left, right
            (event.keyCode >= 35 && event.keyCode <= 39)) {
              // let it happen, don't do anything
              return;
        } else {
            // Ensure that it is a number and stop the keypress
            if (event.shiftKey || (event.keyCode < 48 || event.keyCode > 57) && (event.keyCode < 96 || event.keyCode > 105 )) {
                event.preventDefault();
            }
        }
   });
});
</script>
</div>
<div id="mainTrackResult"></div>