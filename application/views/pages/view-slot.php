<?php defined('BASEPATH') OR exit('No direct script access allowed'); ?>
<!-- Begin Page Content -->
<div class="container-fluid">

	<h1 class="h3 mb-2 text-gray-800"><?= $page_title ?></h1>

	<!-- DataTales Example -->
	<div class="card shadow mb-4">
		<div class="card-header py-3">
			<button type="button" class="btn btn-sm btn-primary btn-slot-form" style="float: right;"><i class="fas fa-plus"> New Entry</i></button>
		</div>
		<div class="card-body">
			<div class="table-responsive">
				<table class="table table-bordered table-striped" id="slotTbl" width="100%" cellspacing="0">
					<thead>
						<tr>
							<th>#</th>
							<th>Vehicle</th>
							<th>Slot</th>
							<th><i class="fas fa-cogs"></i></th>
						</tr>
					</thead>
					<tbody></tbody>
				</table>
			</div>
		</div>
	</div>

	<div id="slot-modal" class="modal fade" role="dialog" data-backdrop="static" data-keyboard="false" tabindex="-1">
		<div class="modal-dialog modal-lg">
			<div class="modal-content">
				<form method="POST" id="slot-form" accept-charset="UTF-8">
					<div class="modal-header">
						<h4 class="modal-title strong"><span id="modal-type">New Entry</span></h4>
						<button type="button" class="close text-red" data-dismiss="modal" tabindex="-1">&times;</button>
					</div>
					<div class="modal-body">
						<div class="row clearfix">
							<div class="form-group col-md-12">
								<label>Vehicle<span class="text-red">*</span></label>
								<select class="form-control" id="KendaraanId" name="KendaraanId" required="">
									<option selected="" value="">-</option>
									<?php 
									if (isset($data_kendaraan) and $data_kendaraan != 0) {
										foreach ($data_kendaraan as $row2) {
											?>
											<option value="<?= $row2->KendaraanId ?>"><?= $row2->JenisKendaraan ?></option>
											<?php 
										}
									}
									?>
								</select>
							</div>
							<div class="form-group col-md-12">
								<label>Slot<span class="text-red">*</span></label>
								<input type="number" class="form-control" id="slot_count" maxlength="100" name="slot_count" value="" placeholder="..." required>
							</div>
						</div>
					</div>
					<div class="modal-footer">
						<input type="text" class="collapse" id="type" name="type" value="">
						<input type="text" class="collapse" id="id" name="id" value="">
						<button type="submit" id="btn-submit" class="btn btn-primary">Save</button>
					</div>
				</form>
			</div>
		</div>
	</div>
</div>
<!-- End of Main Content -->