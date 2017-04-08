<script type="text/javascript" src="<?php echo base_url(); ?>/assets/inner-loader/datatable/datatable.js"></script>
<script type="text/javascript" src="<?php echo base_url(); ?>/assets/inner-loader/datatable-bootstrap.js"></script>
<script src="<?php echo base_url(); ?>/assets/inner-loader/jquery-ui/js/jquery-1.10.2.js"></script>
<script type="text/javascript">
    $(document).ready(function() {
        $('#rincianpegawaiteknik').submit(function (event) {
            dataString = $("#rincianpegawai").serialize();
            $('#loaderResult').css('display','block');
            $.ajax({
                type:"POST",
                url:"prosesRincianPegawaiTeknik",
                data:dataString,

                success:function (data) {
                    $('#loaderResult').css('display','none');
                    $('#result').html(data);
                }

            });
            event.preventDefault();
        });
    });
</script>
<div id="main">
	<div class="page-header">
		<h2> RINCIAN PEGAWAI TEKNIK NON TEKNIK</h2>
	</div>
	<div class="row">
		<div class="col-sm-12">
			<div class="panel panel-default panel-shadow">
				<div class="panel-body">
						<form class="form-horizontal padding-15" action="prosesRincianPegawai" method="POST" enctype="multipart/form-data" id="rincianpegawaiteknik">
							<div class="form-group">
								<label for="" class="col-sm-3 control-label">BULAN / TAHUN</label>
								<div class="col-sm-9">
									<input type="text" name="periode" class="datepicker form-control">
								</div>
							</div>
							<div class="form-group">
								<div class="col-md-offset-3 col-sm-9 ">
									<input type="submit" class="btn btn-primary" value="PROSES">
								</div>
							</div>

						</form>					
				</div>
			</div>
		</div>
		<div class="col-sm-12">
			<div class="panel panel-default panel-shadow">
					<div class="panel-body">
						<img id="loaderResult" src="<?php echo base_url(); ?>/assets/inner-loader/spinner/reload.svg" style="display:none;">
		                <div id="result">
		                </div>
					</div>
				<div class="clearfix"></div>
			</div>
		</div>
	</div>
</div>