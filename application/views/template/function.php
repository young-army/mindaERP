<?php
$_date_string = Array(
	"id" => Array(
		"day" => Array(
			0 => "Minggu",
			1 => "Senin",
			2 => "Selasa",
			3 => "Rabu",
			4 => "Kamis",
			5 => "Jum'at",
			6 => "Sabtu"),
		"month" => Array(
			1 => "Januari",
			2 => "Februari",
			3 => "Maret",
			4 => "April",
			5 => "Mei",
			6 => "Juni",
			7 => "Juli",
			8 => "Agustus",
			9 => "September",
			10 => "Oktober",
			11 => "November",
			12 => "Desember"),
		"d" => Array(
			0 => "Aha",
			1 => "Sen",
			2 => "Sel",
			3 => "Rab",
			4 => "Kam",
			5 => "Jum",
			6 => "Sab"),
		"m" => Array(
			1 => "Jan",
			2 => "Feb",
			3 => "Mar",
			4 => "Apr",
			5 => "Mei",
			6 => "Jun",
			7 => "Jul",
			8 => "Agu",
			9 => "Sep",
			10 => "Okt",
			11 => "Nov",
			12 => "Des")
	),

	"en" => Array(
		"day" => Array(
			0 => "Sunday",
			1 => "Monday",
			2 => "Tuesday",
			3 => "Wednesday",
			4 => "Thursday",
			5 => "Friday",
			6 => "Saturday"),
		"month" => Array(
			1 => "January",
			2 => "February",
			3 => "March",
			4 => "April",
			5 => "May",
			6 => "June",
			7 => "July",
			8 => "August",
			9 => "September",
			10 => "October",
			11 => "November",
			12 => "December"),
		"d" => Array(
			0 => "Sun",
			1 => "Mon",
			2 => "Tue",
			3 => "Wed",
			4 => "Thu",
			5 => "Fri",
			6 => "Sat"),
		"m" => Array(
			1 => "Jan",
			2 => "Feb",
			3 => "Mar",
			4 => "Apr",
			5 => "May",
			6 => "Jun",
			7 => "Jul",
			8 => "Aug",
			9 => "Sep",
			10 => "Oct",
			11 => "Nov",
			12 => "Dec"),
	)
);

function create_month_select($selVal, $isEmptyOption = true, $selName = "bulan", $selId = "bulan", $selAction = "") {
	global $_date_string;

	$ret = "<select name=\"". $selName ."\" id=\"". $selId ."\"". ($selAction==""?"":$selAction) .">";
	if($isEmptyOption) $ret .= "\n<option value=\"\">--please select--</option>";
	foreach($_date_string["id"]["month"] as $key => $val) {
		$ret .= "\n<option value=\"". $key ."\"". GiveAttribute($selVal, $key, " selected=\"selected\"") .">". $val ."</option>";
	}
	$ret .= "</select>";
	
	return $ret;
}

function create_select_int($selVal, $selName, $selId, $selAction, $min, $max, $isEmptyOption = true) {
	$ret = "<select name=\"". $selName ."\" id=\"". $selId ."\"". ($selAction==""?"":$selAction) .">";
	if($isEmptyOption) $ret .= "\n<option value=\"\">--please select--</option>";
	for($i=$min;$i<=$max;$i++) {
		$ret .= "\n<option value=\"". $i ."\"". GiveAttribute($selVal, $i, " selected=\"selected\"") .">". $i ."</option>";
	}
	$ret .= "</select>";
	
	return $ret;
}

function GiveAttributeNot($elm, $value, $attr) {
	$hasil = "";
	if($elm!=$value) {
		$hasil = $attr;
	}

	return $hasil;
}

function GiveAttribute($elm, $value, $attr) {
	$hasil = "";
	if($elm==$value) {
		$hasil = $attr;
	}

	return $hasil;
}

function QuotedString($str) {
	return "'". str_replace("'", "''", $str) . "'";
}

function QuotedStringTrim($str){
	return QuotedString(trim($str));
}

function print_array($arr) {
	echo "<pre>";
	print_r($arr);
	echo "</pre>";
}

function RedirectJS($url) {
	if($url!="")
		return "<scr"."ipt type=\"text/javascript\">window.location.href = '". $url ."';</script>";
}

function Redirect($url) {
	if($url!="")
		header("location:". $url);
}

function curPageName() {
	return substr($_SERVER["SCRIPT_NAME"],strrpos($_SERVER["SCRIPT_NAME"],"/")+1);
}

function getNavMenu() {
	?>
				<li<?=GiveAttribute(curPageName(), "index.php", " class=\"current\"")?>><a href="index.php" class="widgets">Dashboard</a></li>
				<li<?=GiveAttribute(curPageName(), "salescommitmen.php", " class=\"current\"")?>><a href="salescommitmen.php" class="widgets1">Sales Commitmen</a></li>
				
				<li<?=GiveAttribute(substr(curPageName(), 0, 10), "airfreight", " class=\"current\"")?>><a href="#support" class="support">Air Freight</a>
					<span class="arrow"></span>
					<ul id="support">
						<li<?=GiveAttribute(substr(curPageName(), 0, 16), "airfreightexport", " class=\"current\"")?>><a href="airfreightexport.php">Export</a></li>
						<li<?=GiveAttribute(substr(curPageName(), 0, 16), "airfreightcntafe", " class=\"current\"")?>><a href="airfreightcntafe.php">Credit Note AFE</a></li>
						<li<?=GiveAttribute(substr(curPageName(), 0, 16), "airfreightimport", " class=\"current\"")?>><a href="airfreightimport.php">Import</a></li>
						<li<?=GiveAttribute(substr(curPageName(), 0, 16), "airfreightcntafi", " class=\"current\"")?>><a href="airfreightcntafi.php">Credit Note AFI</a></li>
						<li<?=GiveAttribute(substr(curPageName(), 0, 16), "airfreightconsol", " class=\"current\"")?>><a href="airfreightconsol.php">Consol</a></li>
						<li<?=GiveAttribute(substr(curPageName(), 0, 16), "airfreightcntafc", " class=\"current\"")?>><a href="airfreightcntafc.php">Credit Note AFC</a></li>
					</ul>
				</li>

				<li<?=GiveAttribute(substr(curPageName(), 0, 10), "seafreight", " class=\"current\"")?>><a href="#support1" class="support">Sea Freight</a>
					<span class="arrow"></span>
					<ul id="support1">
						<li<?=GiveAttribute(substr(curPageName(), 0, 16), "seafreightexport", " class=\"current\"")?>><a href="seafreightexport.php">Export</a></li>
						<li<?=GiveAttribute(substr(curPageName(), 0, 16), "seafreightcntsfe", " class=\"current\"")?>><a href="seafreightcntsfe.php">Credit Note SFE</a></li>
						<li<?=GiveAttribute(substr(curPageName(), 0, 16), "seafreightimport", " class=\"current\"")?>><a href="seafreightimport.php">Import</a></li>
						<li<?=GiveAttribute(substr(curPageName(), 0, 16), "seafreightcntsfi", " class=\"current\"")?>><a href="seafreightcntsfi.php">Credit Note SFI</a></li>
						<li<?=GiveAttribute(substr(curPageName(), 0, 16), "seafreightconsol", " class=\"current\"")?>><a href="seafreightconsol.php">Consol</a></li>
						<li<?=GiveAttribute(substr(curPageName(), 0, 16), "seafreightcntsfc", " class=\"current\"")?>><a href="seafreightcntsfc.php">Credit Note SFC</a></li>
					</ul>
				</li>

				<li<?=GiveAttribute(substr(curPageName(), 0, 8), "domestic", " class=\"current\"")?>><a href="#support2" class="support">Domestic</a>
					<span class="arrow"></span>
					<ul id="support2">
						<li<?=GiveAttribute(substr(curPageName(), 0, 16), "domesticoutgoing", " class=\"current\"")?>><a href="domesticoutgoing.php">Outgoing</a></li>
						<li<?=GiveAttribute(substr(curPageName(), 0, 16), "domesticcntdoo", " class=\"current\"")?>><a href="domesticcntdoo.php">Credit Note DOO</a></li>
						<li<?=GiveAttribute(substr(curPageName(), 0, 16), "domesticincoming", " class=\"current\"")?>><a href="domesticincoming.php">Incoming</a></li>
						<li<?=GiveAttribute(substr(curPageName(), 0, 16), "domesticcntdoi", " class=\"current\"")?>><a href="domesticcntdoi.php">Credit Note DOI</a></li>
					</ul>
				</li>

				<li<?=GiveAttribute(substr(curPageName(), 0, 10), "accounting", " class=\"current\"")?>><a href="#support3" class="support">Accounting</a>
					<span class="arrow"></span>
					<ul id="support3">
						<li<?=GiveAttribute(substr(curPageName(), 0, 15), "accountingadvpm", " class=\"current\"")?>><a href="accountingadvpm.php">Advance Payment</a></li>
						<li<?=GiveAttribute(substr(curPageName(), 0, 15), "accountingpajak", " class=\"current\"")?>><a href="accountingpajak.php">Pajak (PPN)</a></li>
						<li<?=GiveAttribute(substr(curPageName(), 0, 15), "accountingtater", " class=\"current\"")?>><a href="accountingtater.php">Tanda Terima</a></li>
						<li<?=GiveAttribute(substr(curPageName(), 0, 15), "accountingresep", " class=\"current\"")?>><a href="accountingresep.php">Receipt Kuitansi</a></li>
					</ul>
				</li>

				<li<?=GiveAttribute(substr(curPageName(), 0, 10), "eslip", " class=\"current\"")?>><a href="eslip.php" class="support">eSlip</a></li>

				<li<?=GiveAttribute(substr(curPageName(), 0, 3), "tps", " class=\"current\"")?>><a href="#support4" class="support">TPS</a></li>
					<span class="arrow"></span>
					<ul id="support4">
						<li<?=GiveAttribute(substr(curPageName(), 0, 11), "tpscustomer", " class=\"current\"")?>><a href="tpscustomer.php">New Customer</a></li>
						<li<?=GiveAttribute(substr(curPageName(), 0, 11), "tpsmaster", " class=\"current\"")?>><a href="tpsmaster.php">Master</a></li>
						<li<?=GiveAttribute(substr(curPageName(), 0, 11), "tpshouse", " class=\"current\"")?>><a href="tpshouse.php">House</a></li>
						<li<?=GiveAttribute(substr(curPageName(), 0, 11), "tpsinvoice", " class=\"current\"")?>><a href="tpsinvoice.php">Invoice</a></li>
						<li<?=GiveAttribute(substr(curPageName(), 0, 11), "tpsrevhouse", " class=\"current\"")?>><a href="tpsrevhouse.php">Rev House</a></li>
					</ul>
				</li>

	<?php
}
?>