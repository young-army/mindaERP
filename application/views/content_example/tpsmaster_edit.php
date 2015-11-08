<?php
# set page title here
$__page_title = "Master Form";


# include header page
require_once("inc/header.php");
?>

	<!-- form data -->
	<form action="<?php echo $_SERVER['PHP_SELF']; ?>" method="post" id="myForm" class="stdform">
	
		<!-- button nav here -->
		<div class='pos_r_button'>
			<p class="stdformbutton">
				<input type="submit" class="submit radius2 btn_save" name="btnSimpan" value="Save"/>&nbsp;
				<input type="button" class="cancel radius2 btn_back" value="Cancel" onclick="location.href='tpsmaster.php';"/>
			</p>
		</div>
		
		<!-- reset any float element -->
		<br class="clear" />
				
		<!-- form -->
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
						<label class="required">Flight</label>
						<span class="field">
							<input type="text" id="flight" name="flight" class="mediuminput" size="40" maxlength="50" />
						</span>
					</p>
					<p>
						<label class="required">Date FL</label>
						<span class="field">
							<input type="text" name="date_fl" id="date_fl" size="10" maxlength="10" value="" class="vsmallinput hasDatePicker" value="<?=date("yyyy-mm-dd")?>" />
						</span>
					</p>
					<p>
						<label class="required">No. Bambu</label>
						<span class="field">
							<input type="text" id="no_bambu" name="no_bambu" class="mediuminput" size="40" maxlength="50" />
						</span>
					</p>
					<p>
						<label class="required">No. POS</label>
						<span class="field">
							<input type="text" id="no_pos" name="no_pos" class="mediuminput" size="40" maxlength="50" />
						</span>
					</p>
					<p>
						<label class="required">No. PU</label>
						<span class="field">
							<input type="text" id="no_pu" name="no_pu" class="mediuminput" size="40" maxlength="50" />
						</span>
					</p>
					<p>
						<label class="required">OB Date</label>
						<span class="field">
							<input type="text" name="ob_date" id="ob_date" size="10" maxlength="10" value="" class="vsmallinput hasDatePicker" value="<?=date("yyyy-mm-dd")?>" />
						</span>
					</p>
				</td>
				<td>
					&nbsp;
				</td>
			</tr>
		</table>
			
	</form>

<?php
# include footer page
require_once("inc/footer.php");
?>