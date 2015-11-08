<?php
# set page title here
$__page_title = "House";


# include header page
require_once("inc/header.php");
?>

	<!-- form data -->
	<form action="<?php echo $_SERVER['PHP_SELF']; ?>" method="post" id="myForm" class="stdform">
	
		<!-- button nav here -->
		<div class='pos_r_button'>
			<p class="stdformbutton">
				<input type="submit" class="submit radius2 btn_save" name="btnSimpan" value="Save"/>&nbsp;
				<input type="button" class="cancel radius2 btn_back" value="Cancel" onclick="location.href='tpsrevhouse.php';"/>
			</p>
		</div>
		
		<!-- reset any float element -->
		<br class="clear" />
		
		<p>
			<label class="lbl_main required">Job Order<span class="required">*)</span></label>
			<span class="field field_main">
				<input type="text" name="kode" id="kode" size="40" maxlength="100" value="" class="mediuminput" />
			</span>
		</p>
		
		
		<table width="100%" cellpadding="0" cellspacing="0" border="0">
			<tr>
				<td width="50%">
					<p>
						<label class="required">MWAB</label>
						<span class="field">
							<input type="text" id="mwab" name="mwab" class="mediuminput" size="40" maxlength="50" />
						</span>
					</p>
					<p>
						<label class="required">HAWB</label>
						<span class="field">
							<input type="text" id="hawb" name="hawb" class="mediuminput" size="40" maxlength="50" />
						</span>
					</p>
					<p>
						<label class="required">Colly</label>
						<span class="field">
							<input type="text" id="colly" name="colly" class="mediuminput" size="40" maxlength="50" />
						</span>
					</p>
					<p>
						<label class="required">Merk</label>
						<span class="field">
							<input type="text" id="merk" name="merk" class="mediuminput" size="40" maxlength="50" />
						</span>
					</p>
					<p>
						<label class="required">Remark</label>
						<span class="field">
							<input type="text" id="remark" name="remark" class="mediuminput" size="40" maxlength="50" />
						</span>
					</p>
					<p>
						<label class="required">Berat (Kg)</label>
						<span class="field">
							<input type="text" id="berat" name="berat" class="v10" size="40" maxlength="50" />
							&nbsp;&nbsp;&nbsp;&nbsp; Chg &nbsp;&nbsp;
							<input type="text" id="chg" name="chg" class="v10" size="40" maxlength="50" />
						</span>
					</p>
					<p>
						<label class="required">Keterangan</label>
						<span class="field">
							<textarea cols="40" rows="3" class="mediuminput"></textarea>
						</span>
					</p>
				</td>
				<td>
					<p>
						<label class="required">Customer Code</label>
						<span class="field">
							<input type="text" id="customer_code" name="customer_code" class="mediuminput" size="40" maxlength="50" />
							<input type="button" name="btn" value="..." onclick="openBox('customer_popup.php?var=callBackCust&mfor=lead', 800, 480)" />
						</span>
					</p>
					<p>
						<label class="required">&nbsp;</label>
						<span class="field">
							<span class="highlight">PT. UNIJAYA PRATAMA</span>
						</span>
					</p>
					<p>
						<label class="required">Lokasi</label>
						<span class="field">
							<input type="text" id="lokasi" name="lokasi" class="mediuminput" size="40" maxlength="50" />
						</span>
					</p>
					<p>
						<label class="required">Code Agen</label>
						<span class="field">
							<select name="code_agen" id="code_agen">
								<option value="HEL_BCN">HEL BCN</option>
							</select>
						</span>
					</p>
					<p>
						<label class="required">Origin</label>
						<span class="field">
							<input type="text" id="origin" name="origin" class="mediuminput" size="40" maxlength="50" />
						</span>
					</p>
					<p>
						<label class="required">Handle</label>
						<span class="field">
							<input type="text" id="handle" name="handle" class="mediuminput" size="40" maxlength="50" />
						</span>
					</p>
					<p>
						<label class="required">Packing</label>
						<span class="field">
							<input type="text" id="packing" name="packing" class="mediuminput" size="40" maxlength="50" />
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