var dataCount = 0;
var currRowIndex = -1;
function addData() {
	var brand = document.getElementById("brand");
	var brandTeks = brand.options[brand.selectedIndex].text;
	var brandValue = brand.options[brand.selectedIndex].value;
	
	var product_name = document.getElementById("product_name");
	var product_nameTeks = product_name.options[product_name.selectedIndex].text;
	var product_nameValue = product_name.options[product_name.selectedIndex].value;
	
	var produk = document.getElementById("produk");
	var produkTeks = produk.options[produk.selectedIndex].text;
	var produkValue = produk.options[produk.selectedIndex].value;
	
	var qty_kg = document.getElementById("qty_kg");
	var qty_p = document.getElementById("qty_p");
	var keterangan = document.getElementById("keterangan");

	var hTally = '';
	try {
		hTally = document.getElementById("hTally_"+produkValue).value;
	}
	catch (e) {}
	// alert(hTally);
	if(produk.value == '') {
		alert('Please select a product!');
		return;
	}
	if(qty_kg.value == '') {
		alert('Please input qty!');
		return;
	}
	if(qty_p.value == '') {
		alert('Please input package!');
		return;
	}
	
	var tbl = document.getElementById("tblData");
	var rowCount = tbl.rows.length;
	
	if(currRowIndex > -1) {
		var row = tbl.rows[currRowIndex];
		
		row.cells[0].innerHTML = produkTeks + "<input type='hidden' name='produks[]' value='"+ produkValue +"' />";
		row.cells[1].innerHTML = qty_kg.value + "<input type='hidden' name='qty_kgs[]' value='"+ qty_kg.value +"' />";
		row.cells[2].innerHTML = qty_p.value + "<input type='hidden' name='qty_ps[]' value='"+ qty_p.value +"' />";
		row.cells[3].innerHTML = keterangan.value + "<input type='hidden' name='kets[]' value='"+ keterangan.value +"' />" + "<input type='hidden' name='brands[]' value='"+ brandValue +"' />" + "<input type='hidden' name='product_names[]' value='"+ product_nameValue +"' /><input type='hidden' name='hTally[]' id='hTally_"+ produkValue +"' value='"+ hTally +"' />";
	}
	else {
		var row = tbl.insertRow(rowCount);
		
		var cproduk = row.insertCell(0);
		var cqty_kg = row.insertCell(1);
		var cqty_p = row.insertCell(2);
		var cket = row.insertCell(3);
		var ccon = row.insertCell(4);
		
		cproduk.innerHTML = produkTeks + "<input type='hidden' name='produks[]' value='"+ produkValue +"' />";
		cqty_kg.innerHTML = qty_kg.value + "<input type='hidden' name='qty_kgs[]' value='"+ qty_kg.value +"' />";
		cqty_p.innerHTML = qty_p.value + "<input type='hidden' name='qty_ps[]' value='"+ qty_p.value +"' />";
		cket.innerHTML = keterangan.value + "<input type='hidden' name='kets[]' value='"+ keterangan.value +"' />" + "<input type='hidden' name='brands[]' value='"+ brandValue +"' />" + "<input type='hidden' name='product_names[]' value='"+ product_nameValue +"' /><input type='hidden' name='hTally["+ produkValue +"]' id='hTally_"+ produkValue +"' value='"+ hTally +"' />";
		ccon.innerHTML = "<a href='#tblData' onclick='editRow(this)' class='edit'><span>Edit</span></a>&nbsp;<a href='#tblData' onclick='deleteRow(this)' class='delete'><span>Delete</span></a>";
		
		//increment count of data
		dataCount++;
	}	
	//reset form value
	resetForm();
	
	//reset current rowIndex
	currRowIndex = -1;
	
	//closing edit form
	closeForm();
}

function resetForm() {
	document.getElementById("brand").selectedIndex = 0;
	document.getElementById("product_name").selectedIndex = 0;
	
	document.getElementById("produk").selectedIndex = 0;
	document.getElementById("qty_kg").value = "";
	document.getElementById("qty_p").value = "";
	document.getElementById("keterangan").value = "";
}

function deleteRow(elm) {
	if(confirm('Anda yakin akan menghapus data ini?')) {
		var cell = elm.parentNode;
		var row = cell.parentNode;
		
		var tbl = document.getElementById("tblData");
		tbl.deleteRow(row.rowIndex);
	
		dataCount--;	
		currRowIndex = -1;
	}
}

function deleteRowByRowIndex(rowIndex) {
	var tbl = document.getElementById("tblData");
	tbl.deleteRow(rowIndex);
	
	dataCount--;
	currRowIndex = -1;
}

function editRow(elm) {	
	var brand = document.getElementById("brand");
	var product_name = document.getElementById("product_name");
	
	var produk = document.getElementById("produk");
	var qty_kg = document.getElementById("qty_kg");
	var qty_p = document.getElementById("qty_p");
	var keterangan = document.getElementById("keterangan");
	var indexNo = document.getElementById("indexNo");

	var cell = elm.parentNode;
	var row = cell.parentNode;
	currRowIndex = row.rowIndex;
	
	indexNo.value = currRowIndex;
	
	var elms = row.getElementsByTagName('input');

	qty_kg.value = elms[1].value;

	qty_p.value = elms[2].value;

	keterangan.value = elms[3].value;

	for(var j=0; j<brand.options.length; j++) {
		if(brand.options[j].value == elms[4].value) {
		   brand.selectedIndex = j;
		   break;
		}
	}
	for(var j=0; j<product_name.options.length; j++) {
		if(product_name.options[j].value == elms[5].value) {
		   product_name.selectedIndex = j;
		   break;
		}
	}
	
	getProductByVal(elms[4].value, elms[5].value, elms[0].value);	
	// alert(document.getElementById('hTally_'+elms[0].value).value);
	for(var j=0; j<produk.options.length; j++) {
		if(produk.options[j].value == elms[0].value) {
		   produk.selectedIndex = j;
		   break;
		}
	}
	
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

function inputTally() {
	var prod = jQuery('#produk').val();
	var p = jQuery('#qty_p').val();
	var indexNo = jQuery('#indexNo').val();
	if(prod=="") {
		alert('Pilih produk terlebih dahulu!');
		return;
	}
	else if(p=="" || p=="0") {
		alert('Input jumlah karton atau jumlah karton harus lebih dari 0!');
		return;
	}
	else
		ShowModal(prod, 'Input Tally', urlTally + '?package=' + p + '&idp=' + prod + '&index=' + indexNo, 960, 480);
}

function UpdateFields(val, produk) {
// alert(produk);
	var hTally = document.getElementById ("hTally_"+produk);
	hTally.value = val;
// alert(hTally.value);
}

function ShowModal(produk, title, sUrl, width, height) {
	// alert("hTally_"+produk);
	// var hTally = jQuery('#hTally_'+produk).val();//document.getElementById("hTally_"+produk);
	var hTally = document.getElementById("hTally_"+produk);
	
	var sharedObject = {};
	// sharedObject.hTally = hTally;//.value;
	sharedObject.hTally = hTally.value;
	// alert(hTally.value);
	
	var left = (screen.width/2)-(width/2);
	var top = (screen.height/2)-(height/2);
	
	if (window.showModalDialog) {
		var retValue = showModalDialog (sUrl, sharedObject, "dialogWidth:"+ width +"px; dialogHeight:"+ height +"px; dialogLeft: "+ left +"px; dialogTop: "+ top +"px;");
		if (retValue) {
			UpdateFields (retValue.hTally, produk);
		}
	}
	else {
		var modal = window.open (sUrl, null, "width="+ width +",height="+ height +",left="+ left +",modal=yes,alwaysRaised=yes", null);
		modal.dialogArguments = sharedObject;
	}
}

function selectPO(val) {
	window.location.href = urlSelf + '?selPO=1&idpo='+ val;
}