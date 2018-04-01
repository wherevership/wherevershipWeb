<script>
	$('#SendParcel').collapse();
	$("ul[data-target='#SendParcel']").children().children().eq(1).removeClass('fa-plus').addClass('fa-minus');
	$("#Bulk_Upload").addClass('active selected');

</script>
 <div class="col-md-10 col-xs-12 dashboard-wrapped padding-right-off">
    <div class="row dashoboard-account">
	    <img  width="100%" src="https://secure.easyparcel.my/pass/application/APP_6.15/theme/easyparcel/images/bulkUploadBanner.jpg">
	</div>
    <div class="row dashoboard-account">
      <div class="container-fluid space-small"> 
	    
        <div class="row">
          <h2 class="dashboard-title">Bulk Upload</h2>
          <div class="dashboard-btn-group">
          <div class="btn-group">
              <p>
			  
			  <a href="https://secure.easyparcel.my/pass/application/source/Malaysia/Template/BulkOrderTemplateV9.xls" class="btn btn-default" target="_blank">Download <label class="label-success" style="color: #fff; padding: 0px 5px; border-radius: 4px; font-weight: normal;">New</label> Template Here <i class="epi-download"> </i></a>
			   
			  <a class="btn btn-primary" onclick='$("#ordUpload").trigger("click")'>Import Order</a> </p>
              <div class="btn-group">
                <input type="file" id="ordUpload" style="display:none;" />
              </div>
            </div></div>
          <div class="clearfix"></div>
          <hr />
          <div class="row">
            <div id = "displayMessage">
              <h3>Instruction</h3>
			  <ol type='1'>
			  
			   <p><li><a href="https://secure.easyparcel.my/pass/application/source/Malaysia/Template/BulkOrderTemplateV9.xls">Download <label class="label-success" style="color: #fff; padding: 0px 5px; border-radius: 4px; font-weight: normal;">New</label> Bulk Upload Template <i class="epi-download"> </i></a></li></p>
			   
				<p><li>Fill in all delivery information into Bulk Upload Template.</li></p>
				<p><li>Import your orders from Bulk Upload Template<b>(.xls)</b> by clicking on Import Order button.</li></p>
				<p><li>Confirm your booking at the Booking Summary page.</li></p>
			  </ol>
			  <br>
				<strong><small><em>Tip: Bulk upload supports 100 max orders per upload, 50 max on peak hours: 11am - 12 noon.</em></small></strong>
            </div>
          </div>
        </div>
         
      </div>
    </div>
    <br />
	
    	<div class="row dashoboard-account" style="display: block;">
  <div class="container-fluid space-small"> 
    
    <div class="row">
      <h2 class="dashboard-title">Lazada Bulk Upload</h2>
      <div class="dashboard-btn-group">
        <div class="btn-group">
          <p> <a href="https://secure.easyparcel.my/pass/application/source/Malaysia/Template/BulkOrderTemplateLazadaV2.xls" class="btn btn-default" target="_blank">Download Lazada Template Here <i class="epi-download"> </i></a> <a class="btn btn-primary" onclick='$("#ordUploadLazada").trigger("click")'>Import Order</a> </p>
          <div class="btn-group pull-right">
            <input type="file" id="ordUploadLazada" style="display:none;" />
          </div>
        </div>
      </div>
      <div class="clearfix"></div>
      <hr />
      <div class="row">
        <div id = "displayMessageLazada">
          <h3>Instruction</h3>
          <ol type='1'>
            <p><li><a href="https://secure.easyparcel.my/pass/application/source/Malaysia/Template/BulkOrderTemplateLazadaV2.xls">Download Lazada Bulk Upload's Sample <span class="glyphicon glyphicon-download"> <span></a></li></p>
            <p><li>If you are using the sample from your platform, kindly add these three columns, <b>Value of goods (RM)</b>, <b>Collection Date</b> and <b>Courier Service</b>, right after <b>Taxes & Duties Paid By</b> column.</li></p>
            <p><li>If you downloaded the sample from EasyParcel website, the columns have been pre-added at the end of the file.</li></p>
            <p><li>Fill In All The Information In The Bulk Upload's Sample.</li></p>
            <p><li>Import Your Order In The Bulk Upload's Sample<b>(.xls)</b> By Clicking On The Import Order Button.</li></p>
            <p><li>Confirm Your Booking At The Booking Summary Page.</li></p>
          </ol>
        </div>
      </div>
    </div>
  </div>
</div>
	 
  </div>
</div>
<script>
var bulk = {
	InitialUpload : function(obj){
		var url = "./?ac=doOrderUpload" + "&for=bulk_order";
		$(obj).fileupload({
			url: url,
			dataType: 'html',
			add : function(e,data){
				data.submit();
				swal({
					title: "Loading",
					text: "<div class='progress'><div class='progress-bar progress-bar-striped active' role='progressbar' aria-valuemin='0' aria-valuemax='100' style='width:100%'></div>",
					showConfirmButton: false,
					allowOutsideClick: false,
					allowEscapeKey: false
				});
			},
			done: function (e, data) {
				swal.close();
				//$('#popupbox').modal('toggle');
				if(data.result != ""){
					$("#displayMessage").html(
					
					"<p style='color:red'>Please download the new bulk upload template to enable SMS Tracking Notifier feature.</p>"+
					
					"<div class='panel panel-warning'><div class='panel-heading'><h3 class='panel-title'>Upload Details</h3></div>"
					+"<div class='panel-body'>"+data.result+"</div></div><p style='color:red'>Note : To prevent duplicate booking(s), please remove existing booking <a target=\"_blank\" href=\"./?pg=BookSummary\">HERE  </a> before reuploading the same template.</p>"
					+"<a class='btn btn-info' onclick=\"$('#ordUpload').trigger('click')\">Import Another Order</a>"
					+"&nbsp;<a class='btn btn-primary' href=\"./?pg=BookSummary\">Continue</a>");
				}else{
					$("#displayMessage").html("Upload Fail, Please make sure you upload the correct bulk upload template(.xls).");
				}
			},
			
			progressall: function (e, data) {
				/*var progress = parseInt(data.loaded / data.total * 100, 10);
				$("#popupbox .modal-body").html(
				'<div id="progress" class="progress"><div class="progress-bar" role="progressbar" aria-valuemin="0" aria-valuemax="100" style="width: '+progress+'%;">'+progress+' %</div></div>'
				);
				$("#popupbox .modal-footer").html('');*/
			}
		}).prop('disabled', !$.support.fileInput)
		.parent().addClass($.support.fileInput ? undefined : 'disabled');
	},
	InitialUploadLazada : function(obj){
		var url = "./?ac=doOrderUpload" + "&for=bulk_order";
		$(obj).fileupload({
			url: url,
			dataType: 'html',
			add : function(e,data){
				data.submit();
				swal({
					title: "Loading",
					text: "<div class='progress'><div class='progress-bar progress-bar-striped active' role='progressbar' aria-valuemin='0' aria-valuemax='100' style='width:100%'></div>",
					showConfirmButton: false,
					allowOutsideClick: false,
					allowEscapeKey: false
				});
			},
			done: function (e, data) {
				swal.close();
				//$('#popupbox').modal('toggle');
				if(data.result != ""){
					$("#displayMessageLazada").html(
					"<div class='panel panel-warning'><div class='panel-heading'><h3 class='panel-title'>Upload Details</h3></div>"
					+"<div class='panel-body'>"+data.result+"</div></div><p style='color:red'>Note : To prevent duplicate booking(s), please remove existing booking <a target=\"_blank\" href=\"./?pg=BookSummary\">HERE</a> before reuploading the same template.</p>"
					+"<a class='btn btn-info' onclick=\"$('#ordUpload').trigger('click')\">Import Another Order</a>"
					+"&nbsp;<a class='btn btn-primary' href=\"./?pg=BookSummary\">Continue</a>");
				}else{
					$("#displayMessage").html("Upload Fail, Please make sure you upload the correct bulk upload template(.xls).");
				}
			},
			
			progressall: function (e, data) {
				/*var progress = parseInt(data.loaded / data.total * 100, 10);
				$("#popupbox .modal-body").html(
				'<div id="progress" class="progress"><div class="progress-bar" role="progressbar" aria-valuemin="0" aria-valuemax="100" style="width: '+progress+'%;">'+progress+' %</div></div>'
				);
				$("#popupbox .modal-footer").html('');*/
			}
		}).prop('disabled', !$.support.fileInput)
		.parent().addClass($.support.fileInput ? undefined : 'disabled');
	},
}

bulk.InitialUpload($("#ordUpload"));
bulk.InitialUploadLazada($("#ordUploadLazada"));
</script>
</div>

<div id="mainTrackResult"></div>