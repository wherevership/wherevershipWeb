	<div id="masterContent" >
		
        <div class="container">
		<div class="row">
          <form method="POST" action="<?=base_url('int_shipper')?>" class="form-horizontal">
            <div class="form-group">
              <label for="wt"><span class="glyphicon glyphicon-info-sign"></span> Weight(kg)</label>
              <p class="form-control" id="wt" name="weight"><?=$weight?></p>
            </div>
			<div class="form-group">
              <label for="wt"><span class="glyphicon glyphicon-info-sign"></span> Volumetic Weight(kg)</label>
              <p class="form-control" id="wt" name="weight"><?=$weight?></p>
            </div>
			<div class="form-group">
              <label for="wt"><span class="glyphicon glyphicon-info-sign"></span> Length(cm)</label>
              <p class="form-control" id="wt" name="weight"><?=$length?></p>
            </div>
			<div class="form-group">
              <label for="wt"><span class="glyphicon glyphicon-info-sign"></span> width(cm)</label>
              <p class="form-control" id="wt" name="weight"><?=$width?></p>
            </div>
			<div class="form-group">
              <label for="wt"><span class="glyphicon glyphicon-info-sign"></span> height(cm)</label>
              <p class="form-control" id="wt" name="weight"><?=$height?></p>
            </div>
			
			<div class="form-group">
              <label for="frm"><span class="glyphicon glyphicon-info-sign"></span> From</label>
              <p class="form-control" id="frm" name="fromCountry"><?=$fromState?></p>
			  <p><?=$frState?></p>
            </div>
			<div class="form-group">
              <label for="to"><span class="glyphicon glyphicon-info-sign"></span> To</label>
              <p class="form-control" id="to" name="toCountry"><?=$toState?></p>
            </div>
			<div class="form-group">
              <label for="wt"><span class="glyphicon glyphicon-info-sign"></span> Cost(RM)</label>
              <h3 class="form-control" id="wt" name="cost">123</h3>
            </div>
			<div class="form-group">
				<button type="submit" class="btn btn-success btn-block">Continue >></button>
			</div>
          </form>
        </div>
		<div class="row">
	</div>