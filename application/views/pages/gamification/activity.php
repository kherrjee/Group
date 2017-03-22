<div id="main-content">
	<div class="wrapper">
		<div class="row">
			<div class="col-lg-12">
				<!-- <?php echo form_open('Activity/create', array('name'=>'form1','class'=>'form-horizontal')) ?> -->
				<form class="form-horizontal form1">
					<section class="panel">
						<header class="panel-heading">
							<h4>Create Activity</h4>
						</header>
						<div class="panel-body">
							<div class="form-group">
								<div class="col-lg-12">
									<div class="col-lg-3 control-label">Name Of Activity:</div>
									<div class="col-lg-3" style="margin-left:-8%;">
										<input type="text" class="form-control" name="name">
									</div>
									<div class="col-lg-3 control-label">Date of Activity:</div>
									<div class="col-lg-3" style="margin-left:-8%;">
										<input type="date" class="form-control" oninput="getDate();" name="date">
									</div>
									
								</div>
							</div>
			
							
							<div class="form-group">
								<div class="col-lg-4">
									<button href="<?php echo base_url('Activity') ?>" class="btn btn-success" name="cancel">Cancel</button>
									<button type="button" class="btn btn-success submitActivty" onclick="submitActivty();" name="submit">Submit</button>
								</div>
							</div>
						</div>
					</section>
				</form>
			</div>
		</div>
	</div>
</div>