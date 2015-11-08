<?php
# set page title here
$__page_title = "Airfreight Import Consol Commitment Report";

# include header page
require_once("inc/header.php");
?>

	<p>
	<table cellpadding="" cellspacing="20" border="0">
		<tr>
			<td width="50%">
				<table border="1" cellpadding="0" cellspacing="0">
					<tr><td align="center"><font size="+2"><b>FIN Logistics</b></font></td></tr>
					<tr><td align="center">(data)</td></tr>
				</table>
			</td>
			<td align="right">
				<table border="1" cellpadding="0" cellspacing="0">
					<tr>
						<td align="center"><b><font size="+1">CONSOL COMMITMENT</font></b></td>
						<td rowspan="2" align="center" valign="middle">(data)</td>
					</tr>
					<tr><td align="center">(data)</td></tr>
				</table>
			</td>
		</tr>
		<tr><td colspan="2"><hr color=#000000 size=5 width=100%></td></tr>
		<tr>
			<td width="50%">
				<p>
					<label class="required">ORDER DATE</label>
					<span class="field">: (data)</span>
					<label class="required">STATUS</label>
					<span class="field">: (data)</span>
					<label class="required">CHARGE</label>
					<span class="field">: (data)</span>
				</p>
				<p>
					<label class="required">CONSIGNEE</label>
					<span class="field">: (data)</span>
				</p>
				<p>
					<label class="required">HANDLE</label>
					<span class="field">: (data)</span>
				</p>
				<p>
					<label class="required">AGENT</label>
					<span class="field">: (data)</span>
				</p>
				<p>
					<label class="required">FROM</label>
					<span class="field">: (data)</span>
				</p>
				<p>
					<label class="required">COMMODITY</label>
					<span class="field">: (data)</span>
				</p>
				<p>
					<label class="required">GOODS</label>
					<span class="field">: (data)</span>
				</p>
				<p>
					<label class="required">PIECE(S)</label>
					<span class="field">: (data)</span>
				</p>
				<p>
					<label class="required">GROSS WGT</label>
					<span class="field">: (data)</span>
					<label class="required">VOLUME WGT</label>
					<span class="field">: (data)</span>
				</p>
				<p>
					<label class="required">DIMENSION</label>
					<span class="field">: (data)</span>
				</p>
			</td>
			<td>
				<p>
					<label class="required">SALES ID</label>
					<span class="field">: (data)</span>
				</p>
				<p>
					<label class="required">SHIPPER</label>
					<span class="field">: (data)</span>
				</p>
				<p>
					<label class="required">AIRLINE</label>
					<span class="field">: (data)</span>
				</p>
				<p>
					<label class="required">MAWB NO.</label>
					<span class="field">: (data)</span>
					<label class="required">ETA</label>
					<span class="field">: (data)</span>
				</p>
				<p>
					<label class="required">FLIGHT</label>
					<span class="field">: (data)</span>
				</p>
				<p>
					<label class="required">HOUSE NO.</label>
					<span class="field">: (data)</span>
				</p>
				<p>
					<label class="required">WAREHOUSE</label>
					<span class="field">: (data)</span>
				</p>
				<p>
					<label class="required">TGL. PU</label>
					<span class="field">: (data)</span>
					<label class="required">POS</label>
					<span class="field">: (data)</span>
					<label class="required">PU</label>
					<span class="field">: (data)</span>
				</p>
				<p>
					<label class="required">CUSTOMS CLR</label>
					<span class="field">: (data)</span>
				</p>
				<p>
					<label class="required">GP IDR</label>
					<span class="field">: (data)</span>
					<label class="required">GP USD</label>
					<span class="field">: (data)</span>
				</p>
			</td>
		</tr>
		<tr><td colspan="2"><hr color=#000000 size=5 width=100%></td></tr>
		<tr>
			<td colspan="2">
			<p>
				<label class="required">BILLING TO AGENT (currency)</label>
				<span class="field">: (data)</span>
			</p>
			<p>
				<label class="required">USD RATE</label>
				<span class="field">: (data)</span>
				<label class="required">PAYMENT</label>
				<span class="field">: (data)</span>
			</p>
			<p>
				<label class="required">O/R NO</label>
				<span class="field">: (data)</span>
				<label class="required">DATE</label>
				<span class="field">: (data)</span>
				<label class="required">PAID IN IDR</label>
				<span class="field">: (data)</span>
				<label class="required">PAID IN USD</label>
				<span class="field">: (data)</span>
			</p>
				<table cellpadding="0" cellspacing="0" border="0" class="stdtable stdtablequick">
					<thead>
						<tr>
							<th>NO</th>
							<th>DESCRIPTION</th>
							<th>RATE</th>
							<th>VOL WG</th>
							<th>CURR</th>
							<th>AMOUNT</th>
							<th>ACCOUNT NO.</th>
						</tr>
					</thead>
					<tbody>
						<tr>
							<td>&nbsp;</td>
							<td>&nbsp;</td>
							<td>&nbsp;</td>
							<td>&nbsp;</td>
							<td>&nbsp;</td>
							<td>&nbsp;</td>
							<td>&nbsp;</td>
						</tr>					
					</tbody>
					<tfoot>
						<tr>
							<td>&nbsp;</td>
							<td>
									<label class="required">INV.</label>
									<span class="field">: (data)</span>
									<label class="required">-</label>
									<span class="field"> (data)</span>
							</td>
							<td colspan="2">TOTAL</td>
							<td>&nbsp;</td>
							<td>&nbsp;</td>
							<td>&nbsp;</td>
						</tr>					
					</tfoot>
				</table>		
			</td>
		</tr>
		<tr>
			<td colspan="2">
			<p>
				<label class="required">BILLING TO CUST. (currency)</label>
				<span class="field">: (data)</span>
			</p>
			<p>
				<label class="required">USD RATE</label>
				<span class="field">: (data)</span>
				<label class="required">PAYMENT</label>
				<span class="field">: (data)</span>
			</p>
			<p>
				<label class="required">O/R NO</label>
				<span class="field">: (data)</span>
				<label class="required">DATE</label>
				<span class="field">: (data)</span>
				<label class="required">PAID IN IDR</label>
				<span class="field">: (data)</span>
				<label class="required">PAID IN USD</label>
				<span class="field">: (data)</span>
			</p>
				<table cellpadding="0" cellspacing="0" border="0" class="stdtable stdtablequick">
					<thead>
						<tr>
							<th>NO</th>
							<th>DESCRIPTION</th>
							<th>RATE</th>
							<th>VOL WG</th>
							<th>CURR</th>
							<th>AMOUNT</th>
							<th>ACCOUNT NO.</th>
						</tr>
					</thead>
					<tbody>
						<tr>
							<td>&nbsp;</td>
							<td>&nbsp;</td>
							<td>&nbsp;</td>
							<td>&nbsp;</td>
							<td>&nbsp;</td>
							<td>&nbsp;</td>
							<td>&nbsp;</td>
						</tr>					
					</tbody>
					<tfoot>
						<tr>
							<td>&nbsp;</td>
							<td>
									<label class="required">INV.</label>
									<span class="field">: (data)</span>
									<label class="required">-</label>
									<span class="field"> (data)</span>
							</td>
							<td colspan="2">TOTAL</td>
							<td>&nbsp;</td>
							<td>&nbsp;</td>
							<td>&nbsp;</td>
						</tr>					
					</tfoot>
				</table>		
			</td>
		</tr>
		<tr>
			<td colspan="2">
			<p>
				<label class="required">OPERATION COST (currency)</label>
				<span class="field">: (data)</span>
			</p>
			<p>
				<label class="required">USD RATE</label>
				<span class="field">: (data)</span>
				<label class="required">PAYMENT</label>
				<span class="field">: (data)</span>
			</p>
			<p>
				<label class="required">O/R NO</label>
				<span class="field">: (data)</span>
				<label class="required">DATE</label>
				<span class="field">: (data)</span>
				<label class="required">PAID IN IDR</label>
				<span class="field">: (data)</span>
				<label class="required">PAID IN USD</label>
				<span class="field">: (data)</span>
			</p>
				<table cellpadding="0" cellspacing="0" border="0" class="stdtable stdtablequick">
					<thead>
						<tr>
							<th>NO</th>
							<th>DESCRIPTION</th>
							<th>RATE</th>
							<th>VOL WG</th>
							<th>CURR</th>
							<th>AMOUNT</th>
							<th>ACCOUNT NO.</th>
						</tr>
					</thead>
					<tbody>
						<tr>
							<td>&nbsp;</td>
							<td>&nbsp;</td>
							<td>&nbsp;</td>
							<td>&nbsp;</td>
							<td>&nbsp;</td>
							<td>&nbsp;</td>
							<td>&nbsp;</td>
						</tr>					
					</tbody>
					<tfoot>
						<tr>
							<td colspan="4">TOTAL</td>
							<td>&nbsp;</td>
							<td>&nbsp;</td>
							<td>&nbsp;</td>
						</tr>					
					</tfoot>
				</table>		
			</td>
		</tr>
		<tr>
			<td width="50%">
			<p>
				<label class="required">Printed</label>
				<span class="field">: (current date)</span>
			</p>
			</td>
			<td>
				<table cellpadding="0" cellspacing="0" border="0" class="stdtable stdtablequick">
				<thead>
					<tr>
						<th>
							<p>
								<label class="required">CHECKED BY</label>
								<span class="field">: (data)</span>
							</p>
						</th>
						<th>
							<p>
								<label class="required">PREPARED BY</label>
								<span class="field">: (data)</span>
							</p>
						</th>
					</tr>
				</thead>
				<tbody>
					<tr>
						<td>
						&nbsp;
						</td>
						<td>
						&nbsp;
						</td>
					</tr>
				</tbody>
				</table>
			</td>
		</tr>
	</table>
	</p>

<?php
# include footer page
require_once("inc/footer.php");
?>