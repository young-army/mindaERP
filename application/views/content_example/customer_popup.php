<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">

<head>
	<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
	<meta name="viewport" content="width=device-width, initial-scale=1.0" />
	<title>CUSTOMER LIST | FINLOGSS &raquo; INFORMATION LOGISTIC SINERGY SYSTEM</title>
	<link href="favicon.png" rel="shortcut icon" />
	<link rel="stylesheet" href="styles/style.default.css" type="text/css" />
	<script type="text/javascript" src="js/plugins/jquery-1.7.min.js"></script>
	<script type="text/javascript" src="js/plugins/jquery-ui-1.8.16.custom.min.js"></script>
	<script type="text/javascript" src="js/plugins/jquery.cookie.js"></script>
	<script type="text/javascript" src="js/plugins/tinybox.js"></script>
	<script type="text/javascript" src="js/custom/general.js"></script>
	<!--[if IE 9]>
		<link rel="stylesheet" media="screen" href="styles/style.ie9.css"/>
	<![endif]-->
	<!--[if IE 8]>
		<link rel="stylesheet" media="screen" href="styles/style.ie8.css"/>
	<![endif]-->
</head>

<body class="withvernav-nobg">

<div class="bodywrapper">
    
    
    <div class="centercontent contentpopup">
    
        <div class="pageheader">
            <h1 class="pagetitle">Customer List</h1>
            <span class="pagedesc">&nbsp;</span>
			        </div><!--pageheader-->
        
        <div id="contentwrapper" class="contentwrapper"><div id='pos_l'>
<form action="" method="get" id="fFilter" name="fFilter">
<p><div id="box-filter">Search By&nbsp;
		<script>
			function resetValue() {
				document.getElementById('fText').value = '';
			}
		</script>
		<select name="fv" onchange="resetValue()"><option value="a.nama" >Name</option><option value="a.alamat" >Address</option><option value="a.telp" >Phone No</option></select>&nbsp;<input type="text" class="vsmallinput" name="fs" id="fs" value="" />&nbsp;<input type="submit" value="Search" class="t-button t-button-medium">&nbsp;<input type="button" value="Show All" class="t-button-orange t-button-medium" onclick="location.href='/finlogss/apps/index.php/crm/customer_popup/';"></div></p></form>			
				</div>
				<table cellpadding="0" cellspacing="0" border="0" class="stdtable stdtablequick">
					<thead>
						<tr>
							<th style="width:20px">No.</th>
							<th>Name</th>
							<th>Sales Name</th>
						</tr>
					</thead>
					<tbody>
						<tr>
							<td>1</td>
														<td><a href="javascript:f_cbCustomerlead('C130000001','Garment Style, PT','0213456789','Jl. Ungaran barat No 32 jakarta Selatan','','C')">Garment Style, PT</a></td>
														<td></td>
						</tr>
						<tr>
							<td>2</td>
														<td><a href="javascript:f_cbCustomerlead('C130000002','santoso log','622515','jalan margonda','','')">santoso log</a></td>
														<td></td>
						</tr>
						<tr>
							<td>3</td>
														<td><a href="javascript:f_cbCustomerlead('C130000003','Permata Bina Nusantara','0219938990','Jakarta','0219938991','C')">Permata Bina Nusantara</a></td>
														<td></td>
						</tr>
						<tr>
							<td>4</td>
														<td><a href="javascript:f_cbCustomerlead('C130000004','Cargo Indonusa Perdana','02123399009','Jakarta','02123399010','M')">Cargo Indonusa Perdana</a></td>
														<td></td>
						</tr>
					</tbody>
				</table>
				
				<ul class="pagination"><li class="first"><a>&laquo; First</a></li><li><a class="current">1</a></li><li class="last"><a>Last &raquo;</a></li></ul>
<script type="text/javascript">
function f_cbCustomer(kode, teks, sname) {
	//parent.parent.callBackCust(kode, teks, sname);
	parent.callBackCust(kode, teks, sname);
	//parent.parent.GB_hide();
	closeBox();
}

function f_cbCustomerlead(kode, teks, telp, addr, fax, jenis) {
	// parent.document.getElementById('id_customer').value = kode;
	parent.document.getElementById('consignee').value = teks;
	// parent.document.getElementById('notlp').value = telp;
	// parent.document.getElementById('fax').value = fax;
	// parent.document.getElementById('alamat').value = addr;
	// parent.document.getElementById('jenis_industri').value = jenis;
	
	closeBox();
}
</script>		
		</div><!--contentwrapper-->
        
        <br clear="all" />
		
	</div><!-- centercontent -->
    
			
</div><!--bodywrapper-->

</body>

</html>
