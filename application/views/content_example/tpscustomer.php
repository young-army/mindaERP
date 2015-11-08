<?php
$__page_title = "New Customer";

$__tab_menu2 = array(
		array(
			"title" => "Customer",
			"target" => "customer"
		),
		array(
			"title" => "Customer Khusus",
			"target" => "customer_khusus"
		),
		array(
			"title" => "Agen",
			"target" => "agen"
		),
	);

require_once("inc/header.php");
?>
		<script language="javascript">
		function removeData(kode) {
			if(confirm('Are you sure?')) {
				location.href = 'tpscustomer.php';
			}
		}
		</script>
		
		<?php
		if(count($__tab_menu2)>0):
		?>						
		<ul class="hornav">
		<?php
			for($i=0;$i<count($__tab_menu2);$i++):
				if($i==0) $cstyle = " class=\"current\"";
				$tm = $__tab_menu2[$i];
		?>
			<li<?=$cstyle?>><a href="#<?=$tm["target"]?>"><?=$tm["title"]?></a></li>
		<?php
				$cstyle = "";
			endfor;
		?>
			</ul>
		<?php
		endif;
		?>		

		<!-- Customer -->
		<div id="customer" class="subcontent" style="margin-top: 1;">
			<div id='pos_l'>
				<form action="" method="get" id="fFilter" name="fFilter">
					<p>
						<div id="box-filter">Search By&nbsp;
							<script>
								function resetValue() {
									document.getElementById('fText').value = '';
								}
							</script>
							<select name="fv" onchange="resetValue()">
								<option value="code" >Code</option>
								<option value="name" >Name</option>
							</select>&nbsp;
							<input type="text" class="vsmallinput" name="fs" id="fs" value="" />&nbsp;
							<input type="submit" value="Search" class="t-button t-button-medium">&nbsp;
							<input type="button" value="Show All" class="t-button-orange t-button-medium" onclick="location.href='tpscustomer.php';">
						</div>
					</p>
				</form>			
			</div>
					
			<div id='pos_r'>
				<a href="#" class="btn btn1 btn_link excel"><span>Export Excel</span></a>&nbsp;
				<a href="#" class="btn btn1 btn_link word"><span>Export Word</span></a>&nbsp;
				<a href="#" class="btn btn1 btn_link pdf"><span>Export PDF</span></a>&nbsp;
				<a href="#" class="btn btn1 btn_link"><span>Print</span></a>
			</div>
			
			<table cellpadding="0" cellspacing="0" border="0" class="stdtable stdtablequick">
				<thead>
					<tr>
						<th width="30%">Code Customer</th>
						<th>Customer</th>
					</tr>
				</thead>
				<tbody>
					<tr>
						<td>&nbsp;</td>
						<td>&nbsp;</td>
					</tr>					
				</tbody>
			</table>		
			
			<ul class="pagination">
				<li class="first"><a>&laquo; First</a></li>
				<li><a class="current">1</a></li>
				<li class="next">
				<li class="last"><a>Last &raquo;</a></li>
			</ul>	
		</div>
		
		<!-- Customer Khusus -->
		<div id="customer_khusus" class="subcontent" style="margin-top: 1; display:none;">
			<div id='pos_l'>
				<form action="" method="get" id="fFilter" name="fFilter">
					<p>
						<div id="box-filter">Search By&nbsp;
							<script>
								function resetValue() {
									document.getElementById('fText').value = '';
								}
							</script>
							<select name="fv" onchange="resetValue()">
								<option value="code" >Code</option>
								<option value="name" >Name</option>
							</select>&nbsp;
							<input type="text" class="vsmallinput" name="fs" id="fs" value="" />&nbsp;
							<input type="submit" value="Search" class="t-button t-button-medium">&nbsp;
							<input type="button" value="Show All" class="t-button-orange t-button-medium" onclick="location.href='tpscustomer.php';">
						</div>
					</p>
				</form>			
			</div>
					
			<div id='pos_r'>
				<a href="#" class="btn btn1 btn_link excel"><span>Export Excel</span></a>&nbsp;
				<a href="#" class="btn btn1 btn_link word"><span>Export Word</span></a>&nbsp;
				<a href="#" class="btn btn1 btn_link pdf"><span>Export PDF</span></a>&nbsp;
				<a href="#" class="btn btn1 btn_link"><span>Print</span></a>
			</div>
			
			<table cellpadding="0" cellspacing="0" border="0" class="stdtable stdtablequick">
				<thead>
					<tr align="center">
						<th>Code</th>
						<th>Customer</th>
						<th>Masa Ke-1</th>
						<th>Masa Ke-2</th>
						<th>Masa Ke-3</th>
					</tr>
				</thead>
				<tbody>
					<tr>
						<td>&nbsp;</td>
						<td>&nbsp;</td>
						<td>&nbsp;</td>
						<td>&nbsp;</td>
						<td>&nbsp;</td>
					</tr>					
				</tbody>
			</table>		
			
			<ul class="pagination">
				<li class="first"><a>&laquo; First</a></li>
				<li><a class="current">1</a></li>
				<li class="next">
				<li class="last"><a>Last &raquo;</a></li>
			</ul>	
		</div>
		
		<!-- Agen -->
		<div id="agen" class="subcontent" style="margin-top: 1; display:none;">
			<div id='pos_l'>
				<form action="" method="get" id="fFilter" name="fFilter">
					<p>
						<div id="box-filter">Search By&nbsp;
							<script>
								function resetValue() {
									document.getElementById('fText').value = '';
								}
							</script>
							<select name="fv" onchange="resetValue()">
								<option value="code" >Code</option>
								<option value="name" >Name</option>
							</select>&nbsp;
							<input type="text" class="vsmallinput" name="fs" id="fs" value="" />&nbsp;
							<input type="submit" value="Search" class="t-button t-button-medium">&nbsp;
							<input type="button" value="Show All" class="t-button-orange t-button-medium" onclick="location.href='tpscustomer.php';">
						</div>
					</p>
				</form>			
			</div>
					
			<div id='pos_r'>
				<a href="#" class="btn btn1 btn_link excel"><span>Export Excel</span></a>&nbsp;
				<a href="#" class="btn btn1 btn_link word"><span>Export Word</span></a>&nbsp;
				<a href="#" class="btn btn1 btn_link pdf"><span>Export PDF</span></a>&nbsp;
				<a href="#" class="btn btn1 btn_link"><span>Print</span></a>
			</div>
			
			<table cellpadding="0" cellspacing="0" border="0" class="stdtable stdtablequick">
				<thead>
					<tr align="center">
						<th>Code</th>
						<th>Company</th>
						<th>Address</th>
						<th>Phone</th>
					</tr>
				</thead>
				<tbody>
					<tr>
						<td>&nbsp;</td>
						<td>&nbsp;</td>
						<td>&nbsp;</td>
						<td>&nbsp;</td>
					</tr>					
				</tbody>
			</table>		
			
			<ul class="pagination">
				<li class="first"><a>&laquo; First</a></li>
				<li><a class="current">1</a></li>
				<li class="next">
				<li class="last"><a>Last &raquo;</a></li>
			</ul>	
		</div>

		
<?php
require_once("inc/footer.php");
?>