<?php
# set page title here
$__page_title = "Credit Note &raquo; Air Freight Export";

# declare main tab in page here
$__tab_menu = array(
		array(
			"title" => "Tabsheet 1",
			"target" => "tabsheet1"
		),
		array(
			"title" => "Tabsheet 2",
			"target" => "tabsheet2"
		),
	);

# include header page
require_once("inc/header.php");
?>
		<?php
		if(count($__tab_menu)>0):
		?>						
		<ul class="hornav">
		<?php
			for($i=0;$i<count($__tab_menu);$i++):
				if($i==0) $cstyle = " class=\"current\"";
				$tm = $__tab_menu[$i];
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
		
		<!-- tabsheet 1 -->
		<div id="tabsheet1" class="subcontent" style="margin-top: 0;">
		<table cellpadding="0" cellspacing="0" border="0" class="stdtable stdtablequick">
			<thead>
				<tr>
					<th width="70px">CN Code</th>
					<th width="200px">Account Description</th>
					<th>Description</th>
					<th>Amount</th>
					<th>User ID</th>
					<th>Entry Date</th>
				</tr>
			</thead>
			<tbody>
				<tr>
					<td>5-5600</td>
					<td>OTHERS/EXTRAS</td>
					<td>OVERTIME</td>
					<td>300000.00</td>
					<td>DINA</td>
					<td>05/06/2013</td>
				</tr>					
			</tbody>
		</table>		
		</div>
		
		<!-- tabsheet 2 -->
		<div id="tabsheet2" class="subcontent" style="margin-top: 0; display:none;">
			<p>
				<table cellpadding="0" cellspacing="0" border="0" class="stdtable stdtablequick">
					<thead>
						<tr>
							<th></th>
						</tr>
					</thead>
						<tr>
							<td>
							<label class="required">Remark</label>
							</td>
						</tr>
						<tr>
						<td>
							<span class="field">
								<textarea cols="100" rows="10" class="mediuminput"></textarea>
							</span>
						</td>
						</tr>
				</table>
			</p>
		</div>

<?php
# include footer page
require_once("inc/footer.php");
?>