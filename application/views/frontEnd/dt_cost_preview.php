	<div id="masterContent" >
			<div class="container">
		
				<form method="POST" action="<?=base_url('int_shipper')?>" class="form-horizontal">
					<div class="row">
						<h1>Cost Info</h1>
						<div class="col-xs-12 col-md-6" style="padding: 10px 30px;">
							<h2>Product Dimension</h2>
									<div class="form-group">
										<label for="wt"><span class="glyphicon glyphicon-info-sign"></span> Weight(kg)</label>
										<input type="text" class="form-control" id="wt" name="weight" value="<?=$weight?>" disabled />
									</div>
									<div class="form-group">
										<label for="l"><span class="glyphicon glyphicon-info-sign"></span> Length(cm)</label>
										<input type="text" class="form-control" id="l" name="length" value="<?=$length?>" disabled />
									</div>
									<div class="form-group">
										<label for="w"><span class="glyphicon glyphicon-info-sign"></span> width(cm)</label>
										<input type="text" class="form-control" id="w" name="width" value="<?=$width?>" disabled />
									</div>
									<div class="form-group">
										<label for="h"><span class="glyphicon glyphicon-info-sign"></span> height(cm)</label>
										<input type="text" class="form-control" id="h" name="height" value="<?=$height?>" disabled />
									</div>
									<div class="form-group">
										<label for="vwt"><span class="glyphicon glyphicon-info-sign"></span> Volumetic Weight(kg)</label>
										<input type="text" class="form-control" id="vwt" name="v_weight" value="<?=$v_weight?>" disabled />
									</div>
						</div>
			
			
						<div class="col-xs-12 col-md-6" style="padding: 10px 30px;">
							<h2>Address</h2>
								<div class="form-group">
									<label for="frm"><span class="glyphicon glyphicon-info-sign"></span> From</label>
									<input type="text" class="form-control" id="frm" name="fromCountry" value="<?=$fromState?>" disabled />
								</div>
								<div class="form-group">
									<label for="to"><span class="glyphicon glyphicon-info-sign"></span> To</label>
									<input type="text" class="form-control" id="to" name="toCountry" value="<?=$toState?>" disabled />
								</div>
							<h2>Cost</h2>
								<div class="form-group">
									<label for="cost"><span class="glyphicon glyphicon-info-sign"></span> Cost(RM)</label>
									<input type="text" class="form-control" id="cost" name="cost" value="123" disabled />
								</div>
						</div>
					</div>
					<div class="row">
						<div class="form-group">
					<div class="col-md-6">
						<a type="button" class="form-control btn" href="javascript:history.go(-1)">Cancel</a>
					</div>
				
					<div class="col-md-6">
						<input type="submit" value="Continue >>" id="next" class="form-control btn btn-success"/>
					
					</div>
				</div>
				</div>
				</form>
       
		</div>
	</div>