<div id="main-content">
	<div class="wrapper">
		<div class="row">
			<div class="col-lg-12">
				<?php echo form_open('', array('name'=>'editLeaveRequestForm','class'=>'form-horizontal editLeaveRequestForm')) ?>
					<section class="panel">
						<header class="panel-heading">
							<h4>Leave Form</h4>
						</header>
						<div class="panel-body">
							<div class="form-group">
								<div class="col-lg-6">
									<div class="col-lg-2 control-label">Emp ID:</div>
									<div class="col-sm-6">
										<?php foreach ($emp_id as $list) { 
											if($list['emp_id']===$this->session->userdata('emp_id')){?>
											<input readonly="readonly" class="form-control"  name="emp_id" type="text" value="<?php echo $list['emp_no'].' - '. $list['last_name']?>"> 
										<?php } }?>
									</div>
								</div>
								<div class="col-lg-6">
									<div class="col-lg-3 control-label"><label style="color:red">*</label>Date Filed:</div>
									<div class="col-md-6">
									<?php date_default_timezone_set('Asia/Manila');
										$date=date('Y-m-d');?>
										<input type="text" name="datefiled" value="<?php echo $date?>"  readonly="readonly" class="form-control datefiled" required>
									</div>
								</div>
							</div>
							<div class="form-group">
								<div class="col-lg-12">
									<div class="col-lg-2 control-label"><label style="color:red">*</label>Start Date:</div>
									<div class="col-lg-3" style="margin-left:-8%;">
										<input type="date" class="form-control leave_start_date" oninput="getDate();" name="start_date" required>
									</div>
									<div class="col-lg-2 control-label"><label style="color:red">*</label>End Date:</div>
									<div class="col-lg-3" style="margin-left:-8%;">
										<input type="date" class="form-control leave_end_date" oninput="getDate();" name="end_date" required>
									</div>
									<div class="col-lg-2 control-label"><label style="color:red">*</label>Total Day/s:</div>
									<div class="col-lg-2" style="margin-left:-8%;">
										<input type="text" class="form-control" id="total" readonly="readonly" oninput="getDate();" name="days" required>
									</div>
									<!-- <div class="col-lg-2 control-label"><label style="color:red">*</label>Total Vacation Leave Left: </div>
									<div class="col-lg-2" style="margin-left:-8%;">
										<input type="text" class="form-control" id="total" readonly="readonly" oninput="getDate();" name="days" required>
									</div> -->
									<p class="error_date"></p>
								</div>
							</div>
							<div class="form-group">
								<div class="col-lg-12">
									<div class="col-lg-2 control-label">Type of Leave:</div>
									<div class="col-lg-3" style="margin-left:-8%;">
										<select name="type" required class="form-control">
											<option value="0">--None--</option>
											<option value="VL">Vacation Leave</option>
											<option value="SL">Sick Leave</option>d
											<option value="CL">Compensatory Leave</option>
											<option value="PL">Paternity Leave</option>
											<option value="SPL">Solo Parent Leave</option>
											<option value="BL">Bereavement Leave</option>
											<option value="LSL">Long Service Leave</option>
										</select>
									</div>
									<div class="col-lg-2 control-label">Supervisor ID:</div>
									<div class="col-lg-2" style="margin-left:-8%;">
										<select name="supervisor_id" required class="form-control">
											<?php foreach ($supervisor as $key) {?>
												<option value="<?php echo $key['supervisor_id'] ?>"> <?php echo $key['supervisor_no']."-".$key['supervisor_last_name'] ?></option>
											<?php } ?>
										</select>
									</div>
								<!-- 	<div class="col-lg-2 control-label">Leave Remains:</div>
									<div class="col-lg-2" style="margin-left:-8%;">
										<input type="text" readonly name="leaveRemains" required class="form-control leaveRemains">
											
									</div> -->
								</div>
							</div>
							<div class="form-group">
								<div class="col-lg-12">
									<div class="col-lg-2 control-label"><label style="color:red">*</label>Reason:</div>
									<div class="col-lg-6" style="margin-left:-8%;">
										<textarea class="form-control" name="comments" required></textarea>
									</div>
								</div>
							</div>
							
							<div class="form-group">
								<div class="col-lg-12">
									<!-- <button href="<?php echo base_url('leaveform') ?>" class="btn btn-success" name="cancel">Cancel</button> -->
									
									<?php echo form_close(); ?>
									<button onclick="resetFieldsLeaveForm()" style="margin-left:1.7%" class="btn btn-default">Cancel</button>
									<button  type ="button" style = "float:right;margin-right: 9%;" class="btn btn-success editLeaveRequestForm1" name="submit" value="Submit" >Submit</button>
								</div>
							</div>
						</div>
					</section>
				
			</div>
		</div>
	</div>
</div>