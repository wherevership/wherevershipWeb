<script>
	$('#MyAccount').collapse();
	$("ul[data-target='#MyAccount']").children().children().eq(1).removeClass('fa-plus').addClass('fa-minus');
	$("#Profile_Setting").addClass('active selected');

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
      <h2 class="dashboard-title">Personal Profile</h2>
    <div class="dashboard-title">
      
    </div>
    <div class="clearfix"></div>
      <div profile_msg></div>
     <hr />
      <div>
        <form method="post">
          <div class="col-md-6 col-xs-12 profile-pic text-center padding-off" style="position: relative;">
            <div class="profile_picture"> <img src="https://secure.easyparcel.my/pass/application/APP_6.8/theme/easyparcel/images/easyparcel-avatar.png">
              <div id="logo" class="glyphicon glyphicon-camera camera"></div>
            </div>
            <input class="hidden" type="file" value="upload" id="upload"/>
            <br>
            <div class="row"> <span>Hello <b id="name-title"></b><br>
            Welcome back, it's nice to see you!</span> 
            </div>
          </div>  
          <div class="clearfix visible-xs"></div>
          <hr class="visible-xs">
          <div class="col-md-6 col-xs-12 padding-off">
            <div class="col-sm-6 col-xs-12 form-group">
              <label>First Name <span style="color:red;">*</span></label>
                <div class="has-feedback">
                  <input class="form-control required" type="text" name="txt_first" id="txt_first" value="Loh" required placeholder="First Name"/>
                  <span class="epi-info-circled form-control-feedback hide"  aria-hidden="true"></span> 
                </div>
            </div>
            <div class="col-sm-6 col-xs-12 form-group">
              <label>Last Name <span style="color:red;">*</span></label>
              <div class="has-feedback">
                <input class="form-control required" type="text" name="txt_last" id="txt_last" value="Chin Guan" required placeholder="Last Name"/>
                <span class="epi-info-circled form-control-feedback hide"  aria-hidden="true"></span>
              </div> 
            </div>
            <div class="col-md-12 col-sm-6 col-xs-12 form-group">
              <label>Email</label>
              <input disabled class="form-control required" type="text" name="txt_email" id="number" value="lcg1989@hk3.com.my">
            </div>
            <div class="col-md-12 col-sm-6 col-xs-12 form-group">
              <label>Password</label>
                <small class="pull-right"><a href="./?pg=MyAccount&tab=Profile&do=ChangePassword"> Change</a></small>
                <div>
                  <input disabled class="form-control required" type="text" name="txt_password" id="number" value="********">
                 </div>
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
                <input class="form-control required" type="text" name="txt_building" value="" id="txt_building" maxlength="35" required placeholder="Address Line 2 (optional)">
            </div>
            <div class="col-xs-12 form-group">
                <input class="form-control required" type="text" name="txt_street" value="" id="txt_street" maxlength="35" required placeholder="Address Line 3 (optional)"/>
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
                
                <option value="jhr" selected>Johor</option>
                
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
            
          </form>
        </div>
        <div class="clearfix"></div>
        
        <div class="clearfix">
          <input type="button" class="btn btn-primary pull-right" value="Save Profile" onclick="profile.SaveProfile();">
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
					
					const database2 = firebase.database().ref('User').child(firebaseUser.uid);
					database2.on('value', snap => {
						console.log(snap.val());
						$("#welcome").text("Hi " + snap.val().firstName + " " + snap.val().lastName);
						$("#name-title").text(snap.val().firstName + " " + snap.val().lastName);
						$("#txt_first").val(snap.val().firstName);
						$("#txt_last").val(snap.val().lastName);
						$("#txt_unit").val(snap.val().profileAddress1);
						$("#txt_building").val(snap.val().profileAddress2);
						$("#txt_street").val(snap.val().profileAddress3);
						$("#txt_taman").val(snap.val().profileAddress4);
						$("#txt_city").val(snap.val().profileCity);
						$("#txt_postcode").val(snap.val().profilePostcode);
						$("#txt_country").val(snap.val().profileCountry);
						$("#txt_mobile").val(snap.val().mobileNumber);
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
    var data = {
      first_name : $("[name=txt_first]").val(),
      last_name : $("[name=txt_last]").val(),
      mobile : $("[name=txt_mobile]").val(),
      other : $("[name=txt_other]").val().replace(/\D/g,''),
      code1 : $("[name=txt_code1]").val(),
      code2 : $("[name=txt_code2]").val(),
      ic_no : $("[name=txt_ic_no]").val().replace(/-/g,''),
      comp_name : $("[name=txt_comp_name]").val(),
      comp_reg_no : $("[name=txt_comp_reg_no]").val(),
      
      img_ic : $(".DetailFrom #ic_uploaded").attr("href"),
      img_ssm : $(".DetailFrom #ssm_uploaded").attr("href"),
      img_form49 : $(".DetailFrom #49_uploaded").attr("href"),
    
      unit : $("[name=txt_unit]").val(),
      floor : $("[name=txt_floor]").val(),
      block : $("[name=txt_block]").val(),
      building : $("[name=txt_building]").val(),
      taman : $("[name=txt_taman]").val(),
      street : $("[name=txt_street]").val(),
      city : $("[name=txt_city]").val(),
      state : $("[name=txt_state]").val(),
      postcode : $("[name=txt_postcode]").val(),
      country : $("[name=txt_country]").val()
    };

    var message = "";
    var variable = "";
    var error = "";
    clearClass();

    
    if($("[name=biz]").is(":checked")){
      if(data.comp_name == ""){
        doFail($("[name=txt_comp_name]"));
        message += "Please Fill In Your Company Name.<br>";
        variable = "[name=txt_comp_name]";  
      }
      if(data.comp_reg_no == ""){
        doFail($("[name=txt_comp_reg_no]"));
        message += "Please Fill In Your Company Registration Number.<br>";
        variable = "[name=txt_comp_reg_no]";  
      }
    }
    
    if(data.ic_no == ""){
      doFail($("[name=txt_ic_no]"));
      message += "Please Fill In Your IC Number.<br>";
      variable = "[name=txt_ic_no]";  
    }
    if("pa" != "pa"){
      if(data.mobile != "177754956"){
        message += "Your mobile number cannot be changed.<br>";
        doFail($("[name=txt_mobile]"));
        variable = "[name=txt_mobile]";
        error = 1;
      }
    }else{
    if(data.mobile == ""){
      doFail($("[name=txt_mobile]"));
      message += "Please Fill In Your Mobile Number.<br>";
      variable = "[name=txt_mobile]";
    }else{
      if(data.code1 == "MY"){
        if((data.mobile.indexOf("1") != 0) || ((data.mobile).length > 10 || (data.mobile).length < 9)){
          message += "Please Enter An Valid Mobile No.<br>";
          doFail($("[name=txt_mobile]"));
          variable = "[name=txt_mobile]";
          error = 1;          
        }
      }else if (data.code1 == "SG"){
        if((data.mobile).length > 8){
          message += "Please Enter An Valid Mobile No.<br>";
          doFail($("[name=txt_mobile]"));
          variable = "[name=txt_mobile]"; 
          error = 1;
        }
      }
    }
    }
    if(data.other != ""){
      if(data.code2 == "MY"){
        if((data.other).length > 10 || (data.other).length < 8){
          message += "Please Enter An Valid Alternative Mobile No.<br>";
          doFail($("[name=txt_other]"));
          variable = "[name=txt_other]";  
          error = 1;
        }
      }else if(data.code2 == "SG"){
        if((data.other).length > 8){
          message += "Please Enter An Valid Alternative Mobile No.<br>";
          doFail($("[name=txt_other]"));
          variable = "[name=txt_other]";  
          error = 1;
        }
      }
    }
    
    if(data.country == ""){
      doFail($("[name=txt_country]"));
      message += "Please Fill In Your Country Name.<br>";
      variable = "[name=txt_country]";  
    }
    
    if(data.state == ""){
      doFail($("[name=txt_state]"));
      message += "Please Fill In Your State Name.<br>";
      variable = "[name=txt_state]";  
    }
    
    if(data.postcode == ""){
      doFail($("[name=txt_postcode]"));
      message += "Please Fill In Your Zip/Postal Code.<br>";
      variable = "[name=txt_postcode]"; 
    }
    
    if(data.city == ""){
      doFail($("[name=txt_city]"));
      message += "Please Fill In Your Town/City Name.<br>";
      variable = "[name=txt_city]"; 
    }
    
    if(data.unit == ""){
      doFail($("[name=txt_unit]"));
      message += "Please Fill In Your Address.<br>";
      variable = "[name=txt_unit]"; 
    }
    
    if(data.last_name == ""){
      doFail($("[name=txt_last]"));
      message += "Please Fill In Your Last Name.<br>";
      variable = "[name=txt_last]"; 
    }
    
    if(data.first_name == ""){
      doFail($("[name=txt_first]"));
      message += "Please Fill In Your First Name.<br>";
      variable = "[name=txt_first]";    
    }
    if((message != "") && (error = "")){
        $("html, body").animate({ scrollTop: $(variable).offset().top - 70 }, 1000);
        swal({
          title: 'Oops',
          type: 'error',
          html: 'Please fill in all required field',
          confirmButtonColor: '#4e97d8'
          })
    }else if ((message != "") && (error = 1)){
        $("html, body").animate({ scrollTop: $(variable).offset().top - 70 }, 1000);
        swal({
          title: 'Oops',
          type: 'error',
          html: message,
          confirmButtonColor: '#4e97d8'
          })
    }else{
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
        success : function(result) {
          if(result == true){
            $.ajax({
              type : "post",
              url : "./?ac=doSaveBasicProfile",
              data : data,
              success : function(result){
                message = "";
                redirectOn = "";

                if($.trim(result) == "pass")
                {
                  title = "Save Complete!";
                  message+="Congratulations Your Profile Has Been Updated Successfully.<br>";
                  redirectOn="Yes";
                  swal({
                    title: '' + title,
                    type: 'success',
                    html: '' + message,
                    confirmButtonColor: '#4e97d8'
                  }).then(function() {
                    if(redirectOn == "Yes"){
                      window.location.reload();
                    }
                  });
                }
                else if($.trim(result) == "mobile_fail")
                {
                  title = "Oops!";
                  message+="Another User With This Mobile Number Already Exists. Maybe It's Your Evil Twin. Spooky.";
                  message+="If It Wasn't You, Kindly Report To Our Customer Support At support@easyparcel.my.<br>";
                  swal({
                    title: '' + title,
                    type: 'error',
                    html: '' + message,
                    confirmButtonColor: '#4e97d8'
                  });
                }
                else
                {
                  title = "Oops!";
                  message+="Something Went Wrong, Your Profile Failed To Be Updated. Please Try Again Later.";
                  message+="Kindly Report To Our Customer Support At support@easyparcel.my If The Problem Persist<br>";
                  swal({
                    title: '' + title,
                    type: 'error',
                    html: '' + message,
                    confirmButtonColor: '#4e97d8'
                  });
                }
              }
            });
          }else{
            swal({
              title: 'Oops',
              type: 'error',
              html: result,
              confirmButtonColor: '#4e97d8'
            });
            doFail($("[name=txt_postcode]"));
            $("html, body").animate({ scrollTop: $("[name=txt_postcode]").offset().top - 70 }, 1000);
              status=false;
          }
        },
        fail : function(result){
            message += "Something Went Wrong. Please Try Again. If Problem Persist, Please Contact Our Customer Service.<br>";
            status=false;
          }
        });
    }
    
    if(message!=""){
      swal({
        title: 'Missing Required Field',
        type: 'error',
        html: '' + message,
        confirmButtonColor: '#4e97d8'
      });
    }
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