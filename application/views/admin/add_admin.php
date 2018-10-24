 <script>
	$('#admin').collapse();
	$("ul[data-target='#admin']").children().children().eq(1).removeClass('fa-plus').addClass('fa-minus');
	$("#add_admin").addClass('active selected');

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
      <h2 class="dashboard-title">Add New Admin</h2>
    <div class="dashboard-title">
      
    </div>
    <div class="clearfix"></div>
      <div profile_msg></div>
     <hr />
      <div>
        <form method="post">
		  <input type="hidden" name="userid" id="userId" value=""/>
          <div class="col-md-6 col-xs-12 profile-pic text-center padding-off" style="position: relative;">
            <div class="profile_picture"> <img src="<?=base_url('assets2/image/user.jpg')?>">
              <div id="logo" class="glyphicon glyphicon-camera camera"></div>
            </div>
            <input class="hidden" type="file" value="upload" id="upload"/>
            <br>
            
          </div>  
          <div class="clearfix visible-xs"></div>
          <hr class="visible-xs">
          <div class="col-md-6 col-xs-12 padding-off">
            <div class="col-sm-6 col-xs-12 form-group">
              <label>First Name <span style="color:red;">*</span></label>
                <div class="has-feedback">
                  <input class="form-control required" type="text" name="txt_first" id="txt_first" value="" required placeholder="First Name"/>
                  <span class="epi-info-circled form-control-feedback hide"  aria-hidden="true"></span> 
                </div>
            </div>
            <div class="col-sm-6 col-xs-12 form-group">
              <label>Last Name <span style="color:red;">*</span></label>
              <div class="has-feedback">
                <input class="form-control required" type="text" name="txt_last" id="txt_last" value="" required placeholder="Last Name"/>
                <span class="epi-info-circled form-control-feedback hide"  aria-hidden="true"></span>
              </div> 
            </div>
            <div class="col-md-12 col-sm-6 col-xs-12 form-group">
              <label>Email <span style="color:red;">*</span></label>
              <input class="form-control required" type="text" name="txt_email" id="email" value="" placeholder="Email">
            </div>
            <div class="col-md-12 col-sm-6 col-xs-12 form-group">
              <label>Password <span style="color:red;">*</span></label>
               
                <div>
                  <input class="form-control required" type="password" name="txt_password" id="txt_pass" value="" placeholder="Password">
				  <input class="form-control required" type="password" name="txt_repassword" id="txt_repass" value="" placeholder="Retype Password">
            </div>
          </div>
        </form>
      </div>
        <div class="clearfix"></div>
        <hr />
        <div>
        <form method="post">
          <div class="col-md-6 col-xs-12 padding-off">
            <div class="col-xs-12 form-group">
              <label>Address <span style="color:red;">*</span></label>
              <div class="has-feedback">
                <input class="form-control required" type="text" name="txt_unit" value=""  id="txt_unit" maxlength="40" required placeholder="Address Line 1">
                <span class="epi-info-circled form-control-feedback hide"  aria-hidden="true"></span>
              </div>
            </div>
            <div class="col-xs-12 form-group">
                <input class="form-control required" type="text" name="txt_building" value="" id="txt_building" maxlength="35" placeholder="Address Line 2 (optional)">
            </div>
            <div class="col-xs-12 form-group">
                <input class="form-control required" type="text" name="txt_street" value="" id="txt_street" maxlength="35"  placeholder="Address Line 3 (optional)"/>
            </div>
             
          </div>
          <div class="col-md-6  col-xs-12 padding-off">
            <div class="col-md-12 col-sm-6 col-xs-12 form-group">
              <label>Town/City<span style="color:red;">*</span></label>
              <div class="has-feedback">
                <input class="form-control required" type="text" name="txt_city"  id="txt_city" value="" required placeholder="Town / City"/>
                <span class="epi-info-circled form-control-feedback hide"  aria-hidden="true"></span>
              </div>
            </div>
            <div class="col-md-12 col-sm-6 col-xs-12 form-group">
              <label>Zip/Postal Code<span style="color:red;">*</span></label>
              <div class="has-feedback">
                <input class="form-control required" type="text" name="txt_postcode" id="txt_postcode" value="" onChange="postGetState(this)" required placeholder="Zip / Postal code"/>
                <span class="epi-info-circled form-control-feedback hide"  aria-hidden="true"></span>
              </div>
            </div>
            <div class="col-md-12 col-sm-6 col-xs-12 form-group">
              <label>State<span style="color:red;">*</span></label>
              <select class="form-control" name="txt_state" id="txt_state">
                
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
                     
                    
                 
                      <input class="form-control required" type="text" name="txt_mobile" id="txt_mobile" value="" required placeholder="Contact Number (eg: +60171234567)" />
                    
                  
              </div>
            </div>
            
          </form>
        </div>
        <div class="clearfix"></div>
        
        <div class="clearfix">
          <input type="button" class="btn btn-primary pull-right" value="Save Profile" onclick="SaveAdmin();">
          </form>
        </div>
      </div>
    </div>
  </div>
</div>
<div id="dialog"></div>
<script>

function SaveAdmin() {
	var firstName = $('#txt_first').val();
	var lastName = $('#txt_last').val();
	var email = $('#email').val();
	var password = $('#txt_pass').val();
	var repassword = $('#txt_repass').val();
	var address1 = $('#txt_unit').val();
	var address2 = $('#txt_building').val();
	var address3 = $('#txt_street').val();
	var city = $('#txt_city').val();
	var postcode = $('#txt_postcode').val();
	var state = $('#txt_state').val();
	var country = $('#txt_country').val();
	var mobile = $('#txt_mobile').val();
	var url = "<?=base_url('api/add_admin')?>";
	
	if (firstName == "" || lastName == "") {
		swal({
			title: 'Oops',
			type: 'error',
			html: 'Please enter your name.',
			confirmButtonColor: '#4e97d8'
			})
		
	} else if (email == "") {
		swal({
			title: 'Oops',
			type: 'error',
			html: 'Please enter your email.',
			confirmButtonColor: '#4e97d8'
			})
		
	} else if (password == "" || repassword == "") {
		swal({
			title: 'Oops',
			type: 'error',
			html: 'Please enter your password.',
			confirmButtonColor: '#4e97d8'
			})
	} else if (address1 == "" || city == "" || postcode == "" || state == "" || country == "") {
		swal({
			title: 'Oops',
			type: 'error',
			html: 'Please enter your address',
			confirmButtonColor: '#4e97d8'
			})
	} else if (mobile == "") {
		swal({
			title: 'Oops',
			type: 'error',
			html: 'Please enter your mobile number',
			confirmButtonColor: '#4e97d8'
			})
	
	} else if (password != repassword) {
		console.log(password);
		console.log(repassword);
		swal({
			title: 'Oops',
			type: 'error',
			html: 'Password and retype password not same.',
			confirmButtonColor: '#4e97d8'
			})
	} else {
	
		$.ajax({
			type: "post",
			url: url,
			data: {
				firstName: firstName,
				lastName: lastName,
				email: email,
				password: password,
				address1: address1,
				address2: address2,
				address3: address3,
				city: city,
				postcode: postcode,
				state: state,
				country: country,
				mobile: mobile
			},
			dataType: "json",
			async: true,
			success: function(result){
					swal({
						title: 'Saved',
						type: 'success',
						html: result.result,
						confirmButtonColor: '#4e97d8'
					})
			window.location.reload();
			
			},
			error: function(XMLHttpRequest,textStatus,textStatus){
				console.log(XMLHttpRequest.responseText);
				console.log(XMLHttpRequest.status);
				console.log(XMLHttpRequest.readyState);
				console.log(textStatus);
				alert("something wrong");
			
			}	
		});
	}
	
}


function DeleteImage(obj){
  $("[for="+$(obj).attr("for")+"]").parent().parent().append(
    '<input type="file" class="filestyle" data-classButton="btn btn-warning" '+
    'data-buttonText="Upload '+$(obj).attr("for").toUpperCase()+'" for="'+$(obj).attr("for")+'" id="up'+$(obj).attr("for").toUpperCase()+'"><span>  Maximum file size: 2MB  </span>'
  );

  // candy ->when delete uploaded image , display 49 change to form 49
  if($(obj).attr("for") == '49'){
    buttonText = "Upload Form"+$(obj).attr("for").toUpperCase();
  }else{
    buttonText = "Upload "+$(obj).attr("for").toUpperCase();
  }
  //candy end

  $("#"+$(obj).attr("for").toLowerCase()+"_uploaded").remove();
  $(obj).parent().remove();
  profile.InitialUpload($("#up"+$(obj).attr("for").toUpperCase()));
  $("#up"+$(obj).attr("for").toUpperCase()).filestyle({
    input: false,
    buttonText: buttonText,//candy ->change to get variable
    classButton: "btn btn-primary"
  });
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
        if(result!="No State Available"){
          $("[name=txt_state]").val(result);
        }
      }
    });
  }
}

var profile = {
  SaveProfile : function(){
	var userId = $("#userId").val();
	var email = $("[name=txt_email]").val();
    var firstName = $("[name=txt_first]").val();
	var lastName = $("[name=txt_last]").val();
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
    
      var profileAddress1 = $("[name=txt_unit]").val();
	  var profileAddress2 = $("[name=txt_building]").val();
	  var profileAddress3 = $("[name=txt_street]").val();
	  var city = $("[name=txt_city]").val();
	  var state = $("[name=txt_state]").val();
      var postcode = $("[name=txt_postcode]").val();
      var country = $("[name=txt_country]").val();
  
	var message = "";
    var variable = "";
    var error = "";
    clearClass();
	firebase.database().ref('User/' + userId).update({
		email : email,
		firstName : firstName,
		lastName : lastName,
		mobileNumber : mobileNumber,
		profileAddress1 : profileAddress1,
		profileAddress2 : profileAddress2,
		profileAddress3 : profileAddress3,
		profileCity : city,
		profileState : state,
		profilePostcode : postcode,
		profileCountry :country
	}).then(function(){
		 swal({
          title: 'Updated',
          type: 'success',
          html: 'Your profile was updated!',
          confirmButtonColor: '#4e97d8'
        });
		
	}).catch(function(error){
		 swal({
        title: 'Error',
        type: 'error',
        html: error,
        confirmButtonColor: '#4e97d8'
      });
		
	});
        
  },
  
  SendVerify : function(){
    $.ajax({
      type : "post",
      url : "./?ac=doResendVerification",
      success : function(result){//alert(result);
        if($.trim(result) == 'pass'){
          swal({
            title: 'Resend Verification',
            type: 'success',
            html: 'A verification code have been resend to your mobile account.',
            confirmButtonColor: '#4e97d8'
          });
        }else{
          swal({
            title: 'Resend Verification',
            type: 'error',
            html: '' + result,
            confirmButtonColor: '#4e97d8'
          });
        }
      }
    }).fail(function(){
      swal({
        title: 'Resend Verification',
        type: 'error',
        html: 'System have facing difficulty to send out sms.',
        confirmButtonColor: '#4e97d8'
      });
    });
  },
  
  GetAPIKey : function(){
    $.ajax({
      type : "get",
      url : "./?ac=CreateAPIKey",
      success : function(result){
        swal({
          title: 'Success',
          type: 'success',
          html: '' + result,
          confirmButtonColor: '#4e97d8'
        });
        if($.trim(result) == "pass"){
          window.location.reload();
        }else{
          swal({
            title: 'Error',
            type: 'error',
            html: 'Fail to generate API Key',
            confirmButtonColor: '#4e97d8'
            })
        }
      }
    }).fail(function(){
      swal({
        title: 'Error',
        type: 'error',
        html: 'Fail Process',
        confirmButtonColor: '#4e97d8'
      });
    });
  },
  
  InitialUpload : function(obj){
    var url = "./?ac=doFileUpload" + "&for=" + $(obj).attr("for");
    $(obj).fileupload({
      url: url,
      dataType: 'html',
      add : function(e,data){
        data.submit();
        swal({   
          title: "Loading",   
          text: "<div id='progress' class='progress progress-bar-info progress-bar-striped' style='background-color: #4CAF50'><div class='progress-bar' role='progressbar' aria-valuenow='0' aria-valuemin='0' aria-valuemax='100' style='width: width: 100%'></div></div>",  
          timer: 3000,
          showConfirmButton: false          
        });
        var elem = document.getElementById("progress");   
        var width = 1;
        var id = setInterval(frame, 20);
        function frame() {
          if (width >= 100){
            clearInterval(id);
          }else{
            width++; 
            elem.style.width = width + '%'; 
            $('#progress').html(width + "%" );
          } 
        }
      },
      done: function (e, data) {
        var returnval = data.result.split("::");
        if(returnval[0] == 1){
          if($(obj).attr("for") == 'ic'){ var a = 'Image I.C.'; var b = '<div class="col-md-6 col-xs-12 form-group padding-off"><label>I.C. Number <span style="color:red;">*</span></label><div class="has-feedback"><input id="ic_no" class="form-control required" type="text" name="txt_ic_no" value="891116015741" required placeholder="example: 8XXXXX078877" title="Please enter your I.C. No."/><span class="epi-info-circled form-control-feedback hide"  aria-hidden="true"></span></div></div><div class="clearfix"></div>'}else if($(obj).attr("for") == '49'){ var a = 'Image BizFile'; var b = "";}else if($(obj).attr("for") == 'ssm'){ var a = 'SSM'; var b = '<div class="col-md-6 col-sm-6 form-group padding-left-off"><label>Company Name <span style="color:red;">*</span></label><div class="has-feedback"><input id="1stCompName" class="form-control required" type="text" name="txt_comp_name" value="" required placeholder="Company Name" title="Please enter your Company Name" /><span class="epi-info-circled form-control-feedback hide"  aria-hidden="true"></span></div></div><div class="col-md-6 col-sm-6 form-group padding-left-off"><label>Company Reg. No. <span style="color:red;">*</span></label><div class="has-feedback"><input id="CompRegNo" class="form-control required" type="text" name="txt_comp_reg_no" value="" required placeholder="Company Registration No.*" title="Please enter Company Reg. No."/><span class="epi-info-circled form-control-feedback hide"  aria-hidden="true"></span></div></div>';}
          $("[for="+$(obj).attr("for")+"]").parent().html(
            b+'<a id="'+$(obj).attr("for").toLowerCase()+'_uploaded" href="' + returnval[1] + '" target="_blank" class="btn btn-default"><i class="epi-upload"></i> '+a+' Uploaded</a>' 
            +' <small><a href="#" for="' + $(obj).attr("for") + '" onclick="DeleteImage(this); return false;">Delete</a></small>'
          );
          $("[for=" + $(obj).attr("id") + "]").parent().remove();
          $("#up"+$(obj).attr("for").toUpperCase()).remove();
        }else{
          swal({
            title: 'Error',
            type: 'error',
            html: 'An error has occured during upload please make sure the the format of the image and the image is not corrupted. Please try again.',
            confirmButtonColor: '#4e97d8'
          });
        }
      },
      progressall: function (e, data) {

      }
    }).prop('disabled', !$.support.fileInput)
    .parent().addClass($.support.fileInput ? undefined : 'disabled');
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