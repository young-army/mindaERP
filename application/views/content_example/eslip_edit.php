<?php
# set page title here
$__page_title = "eSlip";

# include header page
require_once("inc/header.php");
?>

	<!-- form data -->
	<form action="<?php echo $_SERVER['PHP_SELF']; ?>" method="post" id="myForm" class="stdform">
	
		<!-- button nav here -->
		<div class='pos_r_button'>
			<p class="stdformbutton">
				<input type="submit" class="submit radius2 btn_save" name="btnSimpan" value="Save"/>&nbsp;
				<input type="button" class="cancel radius2 btn_back" value="Cancel" onclick="location.href='airfreightexport.php';"/>
			</p>
		</div>
		
		<!-- reset any float element -->
		<br class="clear" />
		
		<p>
			<label class="lbl_main required">Order No <span class="required">*)</span></label>
			<span class="field field_main">
				<input type="text" name="kode" id="kode" size="40" maxlength="100" value="" class="mediuminput" />
			</span>
		</p>
		
		<table width="100%" cellpadding="0" cellspacing="0" border="0">
			<tr>
				<td width="50%">
					<p>
						<label class="required"></label>
						<span class="field">
							<input type="checkbox" value="1" />&nbsp;&nbsp;&nbsp;&nbsp;Pengambilan
						</span>
					</p>
					<p>
						<label class="required">Dari</label>
						<span class="field">
							<input type="text" name="dari1" size="40" maxlength="50" class="mediuminput" />
						</span>
					</p>
					<p>
						<label class="required">Tujuan</label>
						<span class="field">
							<input type="text" name="tujuan1" size="40" maxlength="50" class="mediuminput" />
						</span>
					</p>
				</td>
				<td>
					<p>
						<label class="required">&nbsp;</span></label>
						<span class="field">
							<input type="checkbox" value="1" />&nbsp;&nbsp;&nbsp;&nbsp;Pengantaran
						</span>
					</p>
					<p>
						<label class="required">Dari</label>
						<span class="field">
							<input type="text" name="dari2" size="40" maxlength="50" class="mediuminput" />
						</span>
					</p>
					<p>
						<label class="required">Tujuan</label>
						<span class="field">
							<input type="text" name="tujuan2" size="40" maxlength="50" class="mediuminput" />
						</span>
					</p>
				</td>
			</tr>
			<tr>
				<td colspan="2">
					<p>
						<label class="required">Tgl / Jam</label>
						<span class="field">
							<input type="text" name="tgl" id="tgl" size="10" maxlength="10" value="" class="vsmallinput hasDatePicker" value="<?=date("yyyy-mm-dd")?>" />
							&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<span class="highlight">yyyy-mm-dd (24 hours)</span>
						</span>
					</p>
					<p>
						<label class="required">Jenis Barang</label>
						<span class="field">
							<input type="radio" value="1" />&nbsp; Dokumen &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
							<input type="radio" value="2" />&nbsp; Barang &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
							<input type="radio" value="3" />&nbsp; Orang <br>
							<input type="text" name="jenis_barang" size="40" maxlength="50" class="mediuminput" />
						</span>
					</p>
					<p>
						<label class="required">Koli</label>
						<span class="field">
							<input type="text" name="koli" size="40" maxlength="50" class="vsmallinput" />
							&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; Berat &nbsp;&nbsp;
							<input type="text" name="berat" size="40" maxlength="50" class="vsmallinput" />
						</span>
					</p>
					<p>
						<label class="required">Customer</label>
						<span class="field">
							<input type="text" name="customer" size="40" maxlength="50" class="mediuminput" />
						</span>
					</p>
					<p>
						<label class="required">Alamat</label>
						<span class="field">
							<textarea name="alamat" cols="40" rows="3" class="mediuminput"></textarea>
						</span>
					</p>
					<p>
						<label class="required">PTC (Person To Call)</label>
						<span class="field">
							<input type="text" name="person_name" size="40" maxlength="50" class="vsmallinput" />
							&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
							<input type="text" name="person_call" size="40" maxlength="50" class="vsmallinput" />
						</span>
					</p>
					<p>
						<label class="required">Catatan</label>
						<span class="field">
							<textarea name="catatan" cols="40" rows="3" class="mediuminput"></textarea>
						</span>
					</p>
					<p>
						<label class="required">Nama User</label>
						<span class="field">
							<input type="text" name="user" size="40" maxlength="50" class="mediuminput" />
						</span>
					</p>
					<p>
						<label class="required">Kendaraan</label>
						<span class="field">
							<input type="text" name="koli" size="40" maxlength="50" class="vsmallinput" />
							&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; No Polisi &nbsp;&nbsp;
							<input type="text" name="berat" size="40" maxlength="50" class="vsmallinput" />
						</span>
					</p>
					<p>
						<label class="required">User Driver</label>
						<span class="field">
							<input type="text" name="user_driver" size="40" maxlength="50" class="mediuminput" />
						</span>
					</p>
				</td>
			</tr>
		</table>
		
	</form>

<?php
# include footer page
require_once("inc/footer.php");
?>