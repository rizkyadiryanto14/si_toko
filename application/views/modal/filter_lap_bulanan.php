<div class="modal-header">
				<a href="<?php echo base_url();?>laporan/lap_penjualan" class="close">&times;</a>
		Filter Bulanan
		</div>
		<form class="form-horizontal" method="post" role="form" action="<?php echo base_url();?>laporan/filter_jual_bulanan">
		<div class="modal-body">
			<div class="form-group">
				<label class="col-sm-3 control-label no-padding-right" for="form-field-1">Set Bulan</label>
				<div class="col-sm-8">
				<select class="col-xs-6 col-sm-6" name="bulan">
					<option value="*">Pilih Bulan</option>
					<option value="01">Januari</option>
					<option value="02">Februari</option>
					<option value="03">Maret</option>
					<option value="04">April</option>
					<option value="05">Mei</option>
					<option value="06">Juni</option>
					<option value="07">Juli</option>
					<option value="08">Agustus</option>
					<option value="09">September</option>
					<option value="10">Oktober</option>
					<option value="11">November</option>
					<option value="12">Desember</option>
				</select>
			</div>
			</div>

			<div class="form-group">
				<label class="col-sm-3 control-label no-padding-right" for="form-field-1">Set Tahun</label>
				<div class="col-sm-8">
				<select class="col-xs-6 col-sm-6" name="tahun">
					<option>Pilih Tahun</option>
					<?php for ($i=2022; $i < 2035 ; $i++) { 
						# code...
					?>
					<option value="<?php echo $i;?>"><?php echo $i;?></option>
					<?php } ?>
				</select>
			</div>
			</div>


		</div>
		<div class="modal-footer">
		<button type="submit" class="btn btn-success" name="add-inventory"><i class="fa fa-search"></i> Filter</button>
		</div>
		<input type="hidden" name="<?php echo $this->security->get_csrf_token_name(); ?>" value="<?php echo $this->security->get_csrf_hash(); ?>">
</form>
	</div>
</div>
</div>
