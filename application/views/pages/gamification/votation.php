<div id="main-content">
	<div class="wrapper">
		<div class="row">
			<div class="col-lg-12">
				 <?php echo form_open('Votation/createVote', array('name'=>'addVote','class'=>'form-horizontal addVote')) ?>
				<!-- <form name="addVote" class="form-horizontal addVote"> -->
					<section class="panel">
						<header class="panel-heading">
							<h4>Leave Form</h4>
						</header>
						<div class="panel-body">
							<div class="form-group">
							<div class="col-lg-12">
									<div class="col-lg-1 control-label">Activity:</div>
									<div class="col-sm-3">
									<select class="form-control " name="activity">
										<?php foreach ($activity as $list) { 
											?>
											
											<option  class="form-control"  name="activity" type="text" value="<?php echo $list['id']?>"><?php echo $list['activity_name']?></option>
											
										<?php } ?>
										</select>
									</div>
								</div>
								<div class="col-lg-3">
									<div class="col-lg-3 control-label">First:</div>
									<div class="col-sm-10">
									<select class="form-control " name="first">
										<?php foreach ($emp_id as $list) { if($list['isAdmin']!='1'){ 
											?>
											
											<option  class="form-control"  name="first" type="text" value="<?php echo $list['emp_id']?>"><?php echo $list['emp_no'].' - '. $list['last_name']?></option>
											
										<?php } } ?>
										</select>
									</div>
								</div>
								<div class="form-group">
								<div class="col-lg-3">
									<div class="col-lg-3 control-label">Second:</div>
									<div class="col-sm-10">
									<select class="form-control " name="second">
										<?php foreach ($emp_id as $list) {  if($list['isAdmin']!='1'){
											?>
											
											<option  class="form-control"   type="text" value="<?php echo $list['emp_id']?>"><?php echo $list['emp_no'].' - '. $list['last_name']?></option>
											
										<?php } } ?>
										</select>
									</div>
								</div>
								<div class="form-group">
								<div class="col-lg-3">
									<div class="col-lg-3 control-label">Third:</div>
									<div class="col-sm-10">
									<select class="form-control " name="third">
										<?php foreach ($emp_id as $list) { if($list['isAdmin']!='1'){
											?>
											
											<option  class="form-control"  name="third" type="text" value="<?php echo $list['emp_id']?>"><?php echo $list['emp_no'].' - '. $list['last_name']?></option>
											
										<?php } }?>
										</select>
									</div>
								</div>

							<div class="form-group" style="margin-left: 2%;margin-top: 10%;">
								<div class="col-lg-12 pull-right" >
									<!-- <button href="<?php echo base_url('leaveform') ?>" class="btn btn-success" name="cancel">Cancel</button> -->
									
									
									<button onclick="resetFieldsLeaveForm()" style="margin-left:1.7%" class="btn btn-default">Cancel</button>
									<input  type ="button" style = "float:right;margin-right: 9%;" class="btn btn-success addVote1" onclick="addVote1();" name="submit" value="Submit" ">
									</form>
								</div>
							</div>
						</div>
					</section>
				
			</div>
		</div>
	</div>
</div>