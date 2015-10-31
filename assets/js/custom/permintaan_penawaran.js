var dataCount = 0;
var currRowIndex = -1;
function addData() {
	var sup = document.getElementById("supplier");
	var supTeks = sup.options[sup.selectedIndex].text;
	var supValue = sup.options[sup.selectedIndex].value;
	var keterangan = document.getElementById("keterangan");
	
	var tbl = document.getElementById("tblData");
	var rowCount = tbl.rows.length;
	
	if(currRowIndex > -1) {
		var row = tbl.rows[currRowIndex];
		
		row.cells[0].innerHTML = supTeks + "<input type='hidden' name='sups[]' value='"+ supValue +"' />";
		row.cells[1].innerHTML = keterangan.value + "<input type='hidden' name='kets[]' value='"+ keterangan.value +"' />";
	}
	else {
		var row = tbl.insertRow(rowCount);
		
		var csup = row.insertCell(0);
		var cket = row.insertCell(1);
		var ccon = row.insertCell(2);
		
		csup.innerHTML = supTeks + "<input type='hidden' name='sups[]' value='"+ supValue +"' />";
		cket.innerHTML = keterangan.value + "<input type='hidden' name='kets[]' value='"+ keterangan.value +"' />";
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
	document.getElementById("supplier").selectedIndex = 0;
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
	var sup = document.getElementById("supplier");
	var keterangan = document.getElementById("keterangan");

	var cell = elm.parentNode;
	var row = cell.parentNode;
	currRowIndex = row.rowIndex;
	
	var elms = row.getElementsByTagName('input');
	for(var j=0; j<sup.options.length; j++) {
		if(sup.options[j].value == elms[0].value) {
		   sup.selectedIndex = j;
		   break;
		}
	}
	
	keterangan.value = elms[1].value;
	
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

var dataCountP = 0;
var currRowIndexP = -1;
function addDataP() {
	var produk = document.getElementById("produk");
	var produkTeks = produk.options[produk.selectedIndex].text;
	var produkValue = produk.options[produk.selectedIndex].value;
	var keterangan = document.getElementById("keteranganP");
	
	var tbl = document.getElementById("tblDataP");
	var rowCount = tbl.rows.length;
	
	if(currRowIndexP > -1) {
		var row = tbl.rows[currRowIndexP];
		
		row.cells[0].innerHTML = produkTeks + "<input type='hidden' name='produks[]' value='"+ produkValue +"' />";
		row.cells[1].innerHTML = keterangan.value + "<input type='hidden' name='ketPs[]' value='"+ keterangan.value +"' />";
	}
	else {
		var row = tbl.insertRow(rowCount);
		
		var cproduk = row.insertCell(0);
		var cket = row.insertCell(1);
		var ccon = row.insertCell(2);
		
		cproduk.innerHTML = produkTeks + "<input type='hidden' name='produks[]' value='"+ produkValue +"' />";
		cket.innerHTML = keterangan.value + "<input type='hidden' name='ketPs[]' value='"+ keterangan.value +"' />";
		ccon.innerHTML = "<a href='#tblDataP' onclick='editRowP(this)' class='edit'><span>Edit</span></a>&nbsp;<a href='#tblDataP' onclick='deleteRowP(this)' class='delete'><span>Delete</span></a>";
		
		//increment count of data
		dataCountP++;
	}	
	//reset form value
	resetFormP();
	
	//reset current rowIndex
	currRowIndexP = -1;
	
	//closing edit form
	closeFormP();
}

function resetFormP() {
	document.getElementById("produk").selectedIndex = 0;
	document.getElementById("keteranganP").value = "";
}

function deleteRowP(elm) {
	if(confirm('Anda yakin akan menghapus data ini?')) {
		var cell = elm.parentNode;
		var row = cell.parentNode;
		
		var tbl = document.getElementById("tblDataP");
		tbl.deleteRow(row.rowIndex);
	
		dataCountP--;	
		currRowIndexP = -1;
	}
}

function deleteRowByRowIndexP(rowIndex) {
	var tbl = document.getElementById("tblDataP");
	tbl.deleteRow(rowIndex);
	
	dataCountP--;
	currRowIndexP = -1;
}

function editRowP(elm) {	
	var produk = document.getElementById("produk");
	var keterangan = document.getElementById("keteranganP");

	var cell = elm.parentNode;
	var row = cell.parentNode;
	currRowIndexP = row.rowIndex;
	
	var elms = row.getElementsByTagName('input');
	for(var j=0; j<produk.options.length; j++) {
		if(produk.options[j].value == elms[0].value) {
		   produk.selectedIndex = j;
		   break;
		}
	}
	
	keterangan.value = elms[1].value;
	
	if(document.getElementById('wFormP').style.display == 'none') {
		//open form edit
		openFormP();
	}
}

function openFormP() {
	jQuery('#wFormP').slideToggle('slow');
}

function closeFormP() {
	//reset form value
	resetFormP();

	currRowIndexP = -1;
	jQuery('#wFormP').slideToggle('slow');
}

function getProdukPR(idpr, urlData) {
	if(idpr!='') {
		jQuery.ajax({
			type: 'POST',
			url: urlData,
			success: function(data) {
				if(data.length > 0) {
					jQuery(data).each(function(){
						if(!checkIfExistsProduct(this.id_produk)) {
							var tbl = document.getElementById("tblDataP");
							var rowCount = tbl.rows.length;
							
							var row = tbl.insertRow(rowCount);
		
							var cproduk = row.insertCell(0);
							var cket = row.insertCell(1);
							var ccon = row.insertCell(2);
							
							cproduk.innerHTML = this.nama_produk + "<input type='hidden' name='produks[]' value='"+ this.id_produk +"' />";
							cket.innerHTML = '' + "<input type='hidden' name='ketPs[]' value='' />";
							ccon.innerHTML = "<a href='#tblDataP' onclick='editRowP(this)' class='edit'><span>Edit</span></a>&nbsp;<a href='#tblDataP' onclick='deleteRowP(this)' class='delete'><span>Delete</span></a>";
							
							//increment count of data
							dataCountP++;
						}
					});
				}
				else {
					alert('No data available!');
				}
			},
			dataType: 'json'
		});
	}
	else {
		deleteRowAll();
	}
}

function checkIfExistsProduct(val) {
	var elms = document.getElementsByName('produks[]');
	if(elms.length > 0) {
		for(i=0;i<elms.length;i++) {
			if(elms[i].value == val)
				return true;
		}
	}
	
	return false;
}