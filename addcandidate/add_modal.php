<!-- Add New -->
    <div class="modal fade" id="addnew" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
        <div class="modal-dialog">
            <div class="modal-content">
                <div class="modal-header">
                    <button type="button" class="close" data-dismiss="modal" aria-hidden="true">&times;</button>
                    <center><h4 class="modal-title" id="myModalLabel">Add New</h4></center>
                </div>
                <div class="modal-body">
				<div class="container-fluid">
				<form method="POST" action="addnew.php" enctype="multipart/form-data">
					<div class="row">
						<div class="col-lg-2">
							<label class="control-label" style="position:relative; top:10px;">Name:</label>
						</div>
						<div class="col-lg-10">
							<input type="text" class="form-control" name="name">
						</div>
					</div>
					<div style="height:10px;"></div>
					<div class="row">
						<div class="col-lg-2">
							<label class="control-label" style="position:relative; top:7px;">Position:</label>
						</div>
						<div class="col-lg-10">
							<input type="text" class="form-control" name="position">
						</div>
					</div>
					<div style="height:10px;"></div>
					<div class="row">
						<div class="col-lg-2">
							<label class="control-label" style="position:relative; top:7px;">Course:</label>
						</div>
						<div class="col-lg-10">
							<input type="text" class="form-control" name="course">
						</div>
					</div>
					<div class="col-lg-10">
					<label class="control-label" style="position:relative; top:7px; right:13px">Image:</label><input type="file" class="form-control" name="image" style="margin-top: -20px; position: relative; left: 80px">
					
					
</div>
                </div> 
				
				</div>
                <div class="modal-footer">
                    <button type="button" class="btn btn-default" data-dismiss="modal"><span class="glyphicon glyphicon-remove"></span> Cancel</button>
                    <button type="submit" class="btn btn-primary"><span class="glyphicon glyphicon-floppy-disk"></span> Save</a>
				</form>
                </div>
				
            </div>
        </div>
    </div>
