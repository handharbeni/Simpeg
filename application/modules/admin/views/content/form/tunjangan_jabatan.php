<div id="main">
	<div class="page-header">
		<h2>MASTER TUNJANGAN</h2>
	</div>
	<div class="row">
		<div class="col-sm-12">
			<div class="panel panel-default panel-shadow">
				<div class="panel-body">
					<form action="<?php echo $action; ?>" method="POST">
						<div class="form-group">
						<input type="hidden" class="form-control" name="nameform" value="tunjangan">
						<input type="hidden" class="form-control" name="mode" value="<?php echo $mode; ?>">
						<input type="hidden" class="form-control" name="id" value="<?php echo $id; ?>">
							<div class="input-group">
								<input type="text" class="form-control" value="<?php echo $valuetext; ?>" name="nama-tunj-jabatan" placeholder="NAMA TUNJANGAN">
								  <span class="input-group-btn">
									<button class="btn btn-primary" type="submit"><?php echo $textButton; ?></button>
								  </span>
							</div>
						</div>
					</form>					
				</div>
			</div>
		</div>
		<div class="col-sm-12">
			<div class="panel panel-default panel-shadow">
				<div class="panel-body">
					<h4 class="headline">Data</h4>

					<table id="data-table" class="table table-striped table-hover dt-responsive" cellspacing="0" width="100%">
						<thead>
						<tr>
							<th class="text-center">KODE TUNJANGAN</th>
							<th class="text-center">NAMA TUNJANGAN</th>
							<th class="text-center">ACTION</th>
						</tr>
						</thead>

						<tbody>
						<?php if($data->num_rows() > 0){ ?>
							<?php foreach($data->result_array() as $row){ ?>
								<tr>
									<td><?php echo $row['id_tunj_jabatan']; ?></td>
									<td><?php echo $row['nama_tunj_jabatan']; ?></td>
									<td class="text-center">
										<?php $id = $row['id_tunj_jabatan']; ?>
										<a href=<?php echo base_url('index.php/admin/input/update/tunjangan/'.$id); ?> class="btn btn-default btn-rounded"><i class="md md-edit"></i></a>
										<a href=<?php echo base_url('index.php/admin/input/delete/tunjangan/'.$id); ?> class="btn btn-default btn-rounded"><i class="md md-delete"></i></a>
									</td>
								</tr>
							<?php } ?>
						<?php }else{ ?>
							No More Data.
						<?php } ?>
						</tbody>
					</table>
				</div>
				<div class="clearfix"></div>
				</div>
			</div>
		</div>
	</div>
</div>