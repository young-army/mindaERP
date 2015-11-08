	/*
									alert(qtytemp.value);
									alert(qty_kg.value + "qty");
									alert(ifee.value + "ifee");
									alert(hrgbrgsatutot + "hrgbrgsatutot");
									alert(bastaxsatu + "bastaxsatu");
									alert(prsnsatu + "prsnsatu");
									alert(pphsatu + "pphsatu");
									alert(quaransatu + "quaransatu");
									alert(inclfee + "inclfee");
									alert(plugging + "plugging");
									alert(demurrage + "demurrage");
									alert(impduty + "impduty");
									alert(articledua + "articledua");
									alert(penalty + "penalty");
									alert(unloadcont + "unloadcont");
									alert(bankfee + "bankfee");
									alert(others + "others");
									alert(total + "total");
									
									alert(landcostjkt + "landcostjkt");
									*/

var dataCount = 0;
var currRowIndex = -1;

function defvar(){
	var bastx = document.getElementById("bastx");
	var qf = document.getElementById("qf");
	var qi = document.getElementById("qi");
	var ifee = document.getElementById("ifee");
	var plug = document.getElementById("plug");
	var demur = document.getElementById("demur");
	var impordut = document.getElementById("impordut");
	var articleduadua = document.getElementById("articleduadua");
	var penalti = document.getElementById("penalti");
	
	if (document.getElementById("bf") != null)
	{
	var bf = document.getElementById("bf");
	}
	else
	{
	var bf = 0;
	}
	
	
	var uncon = document.getElementById("uncon");
	var lain = document.getElementById("lain");
}

function addData() {

var tbl = document.getElementById("tblData");
	var rowCount = tbl.rows.length;
	var produk = document.getElementById("produk");
	var produkTeks = produk.options[produk.selectedIndex].text;
	var produkValue = produk.options[produk.selectedIndex].value;
	
	var kurs = document.getElementById("kurs");
	var hrg_p = document.getElementById("hrg_p");
	var qty_kg = document.getElementById("qty_kg");
	var qtytemp = document.getElementById("qtytemp");
	defvar();
	qtytemp.value = qtytemp.value * 1 + qty_kg.value * 1;
	
									var bankfee = (bf.value * 1);
									var hrgbrgsatutot = qty_kg.value * (hrg_p.value * kurs.value);
									var bastaxsatu = hrgbrgsatutot * bastx.value;
									var prsnsatu = ( 5 / hrgbrgsatutot ) *  100;
									var pphsatu = ( 2.5 / ( (bastaxsatu * 1) + (prsnsatu * 1) )) * 100;
									var quaransatu = ( qty_kg.value *  qf.value );
									var quaraninsp = ( qty_kg.value / qtytemp.value) * qi.value;
									var inclfee = (qty_kg.value / qtytemp.value) * ifee.value;
									var plugging = (qty_kg.value / qtytemp.value) * plug.value;
									var demurrage = (qty_kg.value / qtytemp.value) * demur.value;
									var impduty = (qty_kg.value / qtytemp.value) * impordut.value;
									var articledua = (qty_kg.value / qtytemp.value) * articleduadua.value;
									var penalty = (qty_kg.value / qtytemp.value) * penalti.value;
									var unloadcont = (qty_kg.value / qtytemp.value) * uncon.value;
									var others = (qty_kg.value / qtytemp.value) * lain.value;
									var total = (hrgbrgsatutot * 1) + (prsnsatu * 1) + (quaransatu * 1) + (inclfee * 1) + (plugging * 1) + (demurrage * 1) + (impduty * 1) + (articledua * 1) + (penalty * 1) + (unloadcont * 1) + (bankfee * 1) + (others * 1);
									var landcostjkt = total / qty_kg.value;
									
									
	
	if(currRowIndex > -1) {
		var row = tbl.rows[currRowIndex];
		alert(currRowIndex);
		row.cells[0].innerHTML = produkTeks + "<input type='hidden' name='produks["+ (currRowIndex * 1 - 1) +"]' id='produks["+ (currRowIndex * 1 - 1) +"]' value='"+ produkValue +"' />";
		row.cells[1].innerHTML = qty_kg.value + "<input type='hidden' name='qty_kgs["+ (currRowIndex * 1 - 1) +"]' id='qty_kgs["+ (currRowIndex * 1 - 1) +"]' value='"+ qty_kg.value +"' />";
		row.cells[2].innerHTML = hrg_p.value + "<input type='hidden' name='hrg_ps["+ (currRowIndex * 1 - 1) +"]' id='hrg_ps["+ (currRowIndex * 1 - 1) +"]' value='"+ hrg_p.value +"' />" + 
									"<input type='hidden' name='bastxs["+ (currRowIndex * 1 - 1) +"]' id='bastxs["+ (currRowIndex * 1 - 1) +"]' value='" + bastaxsatu + "' />" +
									"<input type='hidden' name='prsnsatus["+ (currRowIndex * 1 - 1) +"]' id='prsnsatus["+ (currRowIndex * 1 - 1) +"]' value='" + prsnsatu + "' />" +
									"<input type='hidden' name='pphsatus["+ (currRowIndex * 1 - 1) +"]' id='pphsatus["+ (currRowIndex * 1 - 1) +"]' value='" + pphsatu + "' />" +
									"<input type='hidden' name='quaransatus["+ (currRowIndex * 1 - 1) +"]' id='quaransatus["+ (currRowIndex * 1 - 1) +"]' value='" + quaransatu + "' />" +
									"<input type='hidden' name='quaraninsps["+ (currRowIndex * 1 - 1) +"]' id='quaraninsps["+ (currRowIndex * 1 - 1) +"]' value='" + quaraninsp + "' />" +
									"<input type='hidden' name='inclfees["+ (currRowIndex * 1 - 1) +"]' id='inclfees["+ (currRowIndex * 1 - 1) +"]' value='" + inclfee + "' />" +
									"<input type='hidden' name='pluggings["+ (currRowIndex * 1 - 1) +"]' id='pluggings["+ (currRowIndex * 1 - 1) +"]' value='" + plugging + "' />" +
									"<input type='hidden' name='demurrages["+ (currRowIndex * 1 - 1) +"]' id='demurrages["+ (currRowIndex * 1 - 1) +"]' value='" + demurrage + "' />" +
									"<input type='hidden' name='impdutys["+ (currRowIndex * 1 - 1) +"]' id='impdutys["+ (currRowIndex * 1 - 1) +"]' value='" + impduty + "' />" +
									"<input type='hidden' name='articleduas["+ (currRowIndex * 1 - 1) +"]' id='articleduas["+ (currRowIndex * 1 - 1) +"]' value='" + articledua + "' />" +
									"<input type='hidden' name='penaltys["+ (currRowIndex * 1 - 1) +"]' id='penaltys["+ (currRowIndex * 1 - 1) +"]' value='" + penalty + "' />" +
									"<input type='hidden' name='unloadconts["+ (currRowIndex * 1 - 1) +"]' id='unloadconts["+ (currRowIndex * 1 - 1) +"]' value='" + unloadcont + "' />" +
									"<input type='hidden' name='bankfees["+ (currRowIndex * 1 - 1) +"]' id='bankfees["+ (currRowIndex * 1 - 1) +"]' value='" + bankfee + "' />" +
									"<input type='hidden' name='otherss["+ (currRowIndex * 1 - 1) +"]' id='otherss["+ (currRowIndex * 1 - 1) +"]' value='" + others + "' />" +
									"<input type='hidden' name='totals["+ (currRowIndex * 1 - 1) +"]' id='totals["+ (currRowIndex * 1 - 1) +"]' value='" + total + "' />";
		row.cells[3].innerHTML = landcostjkt + "<input type='hidden' name='landcostjktss["+ (currRowIndex * 1 - 1) +"]' id='landcostjktss["+ (currRowIndex * 1 - 1) +"]' value='"+ landcostjkt +"' />";
		
		
	}
	else {
		var row = tbl.insertRow(rowCount);
		alert(rowCount);
		var cproduk = row.insertCell(0);
		var cqty_kg = row.insertCell(1);
		var chrg_p = row.insertCell(2);
		var clandcostjkts = row.insertCell(3);
		var ccon = row.insertCell(4);
		
		cproduk.innerHTML = produkTeks + "<input type='hidden' name='produks["+ (rowCount * 1 - 1) +"]' id='produks["+ (rowCount * 1 - 1) +"]' value='"+ produkValue +"' />";
		cqty_kg.innerHTML = qty_kg.value + "<input type='hidden' name='qty_kgs["+ (rowCount * 1 - 1) +"]' id='qty_kgs["+ (rowCount * 1 - 1) +"]' value='"+ qty_kg.value +"' />";
		chrg_p.innerHTML = hrg_p.value + "<input type='hidden' name='hrg_ps["+ (rowCount * 1 - 1) +"]' id='hrg_ps["+ (rowCount * 1 - 1) +"]' value='"+ hrg_p.value +"' />" +
									"<input type='hidden' name='bastxs["+ (rowCount * 1 - 1) +"]' id='bastxs["+ (rowCount * 1 - 1) +"]' value='" + bastaxsatu + "' />" +
									"<input type='hidden' name='prsnsatus["+ (rowCount * 1 - 1) +"]' id='prsnsatus["+ (rowCount * 1 - 1) +"]' value='" + prsnsatu + "' />" +
									"<input type='hidden' name='pphsatus["+ (rowCount * 1 - 1) +"]' id='pphsatus["+ (rowCount * 1 - 1) +"]' value='" + pphsatu + "' />" +
									"<input type='hidden' name='quaransatus["+ (rowCount * 1 - 1) +"]' id='quaransatus["+ (rowCount * 1 - 1) +"]' value='" + quaransatu + "' />" +
									"<input type='hidden' name='quaraninsps["+ (rowCount * 1 - 1) +"]' id='quaraninsps["+ (rowCount * 1 - 1) +"]' value='" + quaraninsp + "' />" +
									"<input type='hidden' name='inclfees["+ (rowCount * 1 - 1) +"]' id='inclfees["+ (rowCount * 1 - 1) +"]' value='" + inclfee + "' />" +
									"<input type='hidden' name='pluggings["+ (rowCount * 1 - 1) +"]' id='pluggings["+ (rowCount * 1 - 1) +"]' value='" + plugging + "' />" +
									"<input type='hidden' name='demurrages["+ (rowCount * 1 - 1) +"]' id='demurrages["+ (rowCount * 1 - 1) +"]' value='" + demurrage + "' />" +
									"<input type='hidden' name='impdutys["+ (rowCount * 1 - 1) +"]' id='impdutys["+ (rowCount * 1 - 1) +"]' value='" + impduty + "' />" +
									"<input type='hidden' name='articleduas["+ (rowCount * 1 - 1) +"]' id='articleduas["+ (rowCount * 1 - 1) +"]' value='" + articledua + "' />" +
									"<input type='hidden' name='penaltys["+ (rowCount * 1 - 1) +"]' id='penaltys["+ (rowCount * 1 - 1) +"]' value='" + penalty + "' />" +
									"<input type='hidden' name='unloadconts["+ (rowCount * 1 - 1) +"]' id='unloadconts["+ (rowCount * 1 - 1) +"]' value='" + unloadcont + "' />" +
									"<input type='hidden' name='bankfees["+ (rowCount * 1 - 1) +"]' id='bankfees["+ (rowCount * 1 - 1) +"]' value='" + bankfee + "' />" +
									"<input type='hidden' name='otherss["+ (rowCount * 1 - 1) +"]' id='otherss["+ (rowCount * 1 - 1) +"]' value='" + others + "' />" +
									"<input type='hidden' name='totals["+ (rowCount * 1 - 1) +"]' id='totals["+ (rowCount * 1 - 1) +"]' value='" + total + "' />";
									
		clandcostjkts.innerHTML = landcostjkt + "<input type='hidden' id='landcostjktss["+ (rowCount * 1 - 1) +"]' name='landcostjktss["+ (rowCount * 1 - 1) +"]' value='"+ landcostjkt +"' />";
		ccon.innerHTML = "<a href='#tblData' onclick='editRow(this)' class='edit'><span>Edit</span></a>&nbsp;<a href='#tblData' onclick='deleteRow(this)' class='delete'><span>Delete</span></a>";			
		
					
		/* circular 
		for(i=1; i<rowCount; i++){					
			var row = tbl.rows[i];	
			var	totkg = totkg * 1 + qty_kgs[i] * 1;
			// newcost = i;
			// row.cells[3].innerHTML = newcost + "<input type='text' id='landcostjktss["+ i +"]' name='landcostjktss["+ i +"]' value='"+ newcost +"' />";
		}*/
		
		//increment count of data
		dataCount++;
	}	
	//reset form value
	resetForm();
	closeForm();
	hitungUlang();
	
	
	//reset current rowIndex
	currRowIndex = -1;
	
	//closing edit form
	
	
}

function resetForm() {
	document.getElementById("produk").selectedIndex = 0;
	document.getElementById("qty_kg").value = "";
	document.getElementById("hrg_p").value = "";
}

function deleteRow(elm) {
	if(confirm('Anda yakin akan menghapus data ini?')) {
		var cell = elm.parentNode;
		var row = cell.parentNode;
		
		var tbl = document.getElementById("tblData");
		tbl.deleteRow(row.rowIndex);
		
		// rubah index array
		var indx = row.rowIndex * 1 + 1;
			var tbel = document.getElementById("tblData");
	var hitungrow = tbel.rows.length * 1 - 1 ;

	if (hitungrow >= 1)
	{
		for(i = indx; i <= hitungrow ; i++){	
		
		var j = i * 1 + 1;
		var produkd = document.getElementById("produks[" + j + "]");
		var qty_kgd = document.getElementById("qty_kgs[" + j + "]");
		var hrg_pd = document.getElementById("hrg_ps[" + j + "]");
		var bastxd = document.getElementById("bastxs[" + j + "]");
		var prsnsatud = document.getElementById("prsnsatus[" + j + "]");
		var pphsatud = document.getElementById("pphsatus[" + j + "]");
		var quaransatud = document.getElementById("quaransatus[" + j + "]");
		var quaraninspd = document.getElementById("quaraninsps[" + j + "]");
		var inclfeed = document.getElementById("inclfees[" + j + "]");
		var pluggingd = document.getElementById("pluggings[" + j + "]");
		var demurraged = document.getElementById("demurrages[" + j + "]");
		var impdutyd = document.getElementById("impdutys[" + j + "]");
		var articleduad = document.getElementById("articleduas[" + j + "]");
		var penaltyd = document.getElementById("penaltys[" + j + "]");
		var unloadcontd = document.getElementById("unloadconts[" + j + "]");
		var bankfeed = document.getElementById("bankfees[" + j + "]");
		var othersd = document.getElementById("otherss[" + j + "]");
		var totald = document.getElementById("totals[" + j + "]");
		var landcostjktd = document.getElementById("landcostjktss[" + j + "]");
			var rowww = tbel.rows[i];
		
		rowww.cells[0].innerHTML = produkd + "<input type='hidden' name='produks["+ i +"]' id='produks["+ i +"]' value='"+ produkd +"' />";
		rowww.cells[1].innerHTML = qty_kgd.value + "<input type='hidden' name='qty_kgs["+ i +"]' id='qty_kgs["+ i +"]' value='"+ qty_kgd.value +"' />";
		rowww.cells[2].innerHTML = hrg_pd.value + "<input type='hidden' name='hrg_ps["+ i +"]' id='hrg_ps["+ i +"]' value='"+ hrg_pd.value +"' />" + 
									"<input type='hidden' name='bastxs["+ i +"]' id='bastxs["+ i +"]' value='" + bastxd.value + "' />" +
									"<input type='hidden' name='prsnsatus["+ i +"]' id='prsnsatus["+ i +"]' value='" + prsnsatud.value + "' />" +
									"<input type='hidden' name='pphsatus["+ i +"]' id='pphsatus["+ i +"]' value='" + pphsatud.value + "' />" +
									"<input type='hidden' name='quaransatus["+ i +"]' id='quaransatus["+ i +"]' value='" + quaransatud.value+ "' />" +
									"<input type='hidden' name='quaraninsps["+ i +"]' id='quaraninsps["+ i +"]' value='" + quaraninspd.value + "' />" +
									"<input type='hidden' name='inclfees["+ i +"]' id='inclfees["+ i +"]' value='" + inclfeed.value + "' />" +
									"<input type='hidden' name='pluggings["+ i +"]' id='pluggings["+ i +"]' value='" + pluggingd.value + "' />" +
									"<input type='hidden' name='demurrages["+ i +"]' id='demurrages["+ i +"]' value='" + demurraged.value + "' />" +
									"<input type='hidden' name='impdutys["+ i +"]' id='impdutys["+ i +"]' value='" + impdutyd.value + "' />" +
									"<input type='hidden' name='articleduas["+ i +"]' id='articleduas["+ i +"]' value='" + articleduad.value + "' />" +
									"<input type='hidden' name='penaltys["+ i +"]' id='penaltys["+ i +"]' value='" + penaltyd.value + "' />" +
									"<input type='hidden' name='unloadconts["+ i +"]' id='unloadconts["+ i +"]' value='" + unloadcontd.value + "' />" +
									"<input type='hidden' name='bankfees["+ i +"]' id='bankfees["+ i +"]' value='" + bankfeed.value + "' />" +
									"<input type='hidden' name='otherss["+ i +"]' id='otherss["+ i +"]' value='" + othersd.value + "' />" +
									"<input type='hidden' name='totals["+ i +"]' id='totals["+ i +"]' value='" + totald.value + "' />";
		rowww.cells[3].innerHTML = landcostjktd.value + "<input type='hidden' name='landcostjktss[" + i + "]' id='landcostjktss[" + i + "]' value='"+ landcostjktd.value +"' />";
		}
	}
		defvar();
		hitungUlang();
	
		dataCount--;	
		currRowIndex = -1;
	}
}

function deleteRowByRowIndex(rowIndex) {
	var tbl = document.getElementById("tblData");
	tbl.deleteRow(rowIndex);
	
	hitungUlang();
	
	dataCount--;
	currRowIndex = -1;
}

function editRow(elm) {	
	var produk = document.getElementById("produk");
	var qty_kg = document.getElementById("qty_kg");
	var hrg_p = document.getElementById("hrg_p");

	var cell = elm.parentNode;
	var row = cell.parentNode;
	currRowIndex = row.rowIndex;
	
	var elms = row.getElementsByTagName('input');
	for(var j=0; j<produk.options.length; j++) {
		if(produk.options[j].value == elms[0].value) {
		   produk.selectedIndex = j;
		   break;
		}
	}

	qty_kg.value = elms[1].value;

	hrg_p.value = elms[2].value;

	
	if(document.getElementById('wForm').style.display == 'none') {
		//open form edit
		openForm();
	}
}

function openForm() {
	jQuery('#wForm').slideToggle('slow');
}


function closeForm() {
	//reset form value
	resetForm();

	currRowIndex = -1;
	jQuery('#wForm').slideToggle('slow');
}

function hitungUlang(){
		var tbel = document.getElementById("tblData");
	var hitungrow = tbel.rows.length * 1 - 1 ;
// hitung ulang per row landcost jakarta
	if (hitungrow >= 1)
	{
	for(i = 1; i <= hitungrow ; i++){	
	var qty_kgx = document.getElementById("qty_kgs[" + (i * 1 + 1) + "]");
	var hrg_px = document.getElementById("hrg_ps[" + (i * 1 + 1) + "]");
	alert (qty_kgx.value + hrg_px.value);
									
									
									
									/*
									alert(bastxx.value + "bastxx");
									alert(qtytemp.value);
									alert(hrg_px.value + "hrg_px");
									alert(qty_kgx.value + "qty");
									alert(qfx.value + "qfx");
									alert(qix.value + "qix");
									alert(ifeex.value + "ifee");
									alert(plugx.value + "plugx");
									alert(demurx.value + "demurx");
									alert(impordutx.value + "impordutx");
									alert(articleduaduax.value + "articleduaduax");
									alert(penaltix.value + "penaltix");
									alert(bankfeex.value + "bankfeex");
									alert(unconx.value + "unconx");
									alert(lainx.value + "lainx");
									*/					
									
									
		var hrgbrgsatutot = qty_kgx.value * (hrg_px.value * kurs.value);
		var bankfee = (bf.value * 1);
									var bastaxsatu = hrgbrgsatutot * bastx.value;
									var prsnsatu = ( 5 / hrgbrgsatutot ) *  100;
									var pphsatu = ( 2.5 / ( bastaxsatu + prsnsatu )) * 100;
									var quaransatu = ( qty_kgx.value *  qf.value );
									var quaraninsp = ( qty_kgx.value / qtytemp.value) * qi.value;
									var inclfee = (qty_kgx.value / qtytemp.value) * ifee.value;
									var plugging = (qty_kgx.value / qtytemp.value) * plug.value;
									var demurrage = (qty_kgx.value / qtytemp.value) * demur.value;
									var impduty = (qty_kgx.value / qtytemp.value) * impordut.value;
									var articledua = (qty_kgx.value / qtytemp.value) * articleduadua.value;
									var penalty = (qty_kgx.value / qtytemp.value) * penalti.value;
									var unloadcont = (qty_kgx.value / qtytemp.value) * uncon.value;
									var others = (qty_kgx.value / qtytemp.value) * lain.value;
									var total = (hrgbrgsatutot * 1) + (prsnsatu * 1) + (quaransatu * 1) + (inclfee * 1) + (plugging * 1) + (demurrage * 1) + (impduty * 1) + (articledua * 1) + (penalty * 1) + (unloadcont * 1) + (bankfee * 1) + (others * 1) ;
									var landcostjkt = total / qty_kgx.value;
									
								
									// alert(others + "others");
								
			
			var roww = tbel.rows[i];	
			
		roww.cells[2].innerHTML = hrg_px.value + "<input type='hidden' name='hrg_ps["+ i +"]' id='hrg_ps["+ i +"]' value='"+ hrg_px.value +"' />" + 
									"<input type='hidden' name='bastxs["+ i +"]' id='bastxs["+ i +"]' value='" + bastaxsatu + "' />" +
									"<input type='hidden' name='prsnsatus["+ i +"]' id='prsnsatus["+ i +"]' value='" + prsnsatu + "' />" +
									"<input type='hidden' name='pphsatus["+ i +"]' id='pphsatus["+ i +"]' value='" + pphsatu + "' />" +
									"<input type='hidden' name='quaransatus["+ i +"]' id='quaransatus["+ i +"]' value='" + quaransatu + "' />" +
									"<input type='hidden' name='quaraninsps["+ i +"]' id='quaraninsps["+ i +"]' value='" + quaraninsp + "' />" +
									"<input type='hidden' name='inclfees["+ i +"]' id='inclfees["+ i +"]' value='" + inclfee + "' />" +
									"<input type='hidden' name='pluggings["+ i +"]' id='pluggings["+ i +"]' value='" + plugging + "' />" +
									"<input type='hidden' name='demurrages["+ i +"]' id='demurrages["+ i +"]' value='" + demurrage + "' />" +
									"<input type='hidden' name='impdutys["+ i +"]' id='impdutys["+ i +"]' value='" + impduty + "' />" +
									"<input type='hidden' name='articleduas["+ i +"]' id='articleduas["+ i +"]' value='" + articledua + "' />" +
									"<input type='hidden' name='penaltys["+ i +"]' id='penaltys["+ i +"]' value='" + penalty + "' />" +
									"<input type='hidden' name='unloadconts["+ i +"]' id='unloadconts["+ i +"]' value='" + unloadcont + "' />" +
									"<input type='hidden' name='bankfees["+ i +"]' id='bankfees["+ i +"]' value='" + bankfee + "' />" +
									"<input type='hidden' name='otherss["+ i +"]' id='otherss["+ i +"]' value='" + others + "' />" +
									"<input type='hidden' name='totals["+ i +"]' id='totals["+ i +"]' value='" + total + "' />";
		roww.cells[3].innerHTML = landcostjkt + "<input type='hidden' name='landcostjktss[" + i + "]' id='landcostjktss[" + i + "]' value='"+ landcostjkt +"' />";
			// newcost = i;
			// row.cells[3].innerHTML = newcost + "<input type='text' id='landcostjktss["+ i +"]' name='landcostjktss["+ i +"]' value='"+ newcost +"' />";
		}
		}

}