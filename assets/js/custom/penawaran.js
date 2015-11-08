var dataCount = 0;
var currRowIndex = -1;
function addData() {
	var produk = document.getElementById("produk");
	var produkTeks = produk.options[produk.selectedIndex].text;
	var produkValue = produk.options[produk.selectedIndex].value;
	
	var qty = document.getElementById("qty");
	var harga = document.getElementById("harga");
	var total = document.getElementById("total");
	var keterangan = document.getElementById("keterangan");
	
	var tbl = document.getElementById("tblData");
	var rowCount = tbl.rows.length;
	
	if(currRowIndex > -1) {
		var row = tbl.rows[currRowIndex];
		
		row.cells[0].innerHTML = produkTeks + "<input type='hidden' name='produks[]' value='"+ produkValue +"' />";
		row.cells[1].innerHTML = qty.value + "<input type='hidden' name='qtys[]' value='"+ qty.value +"' />";
		row.cells[2].innerHTML = harga.value + "<input type='hidden' name='hargas[]' value='"+ harga.value +"' />";
		row.cells[3].innerHTML = total.value + "<input type='hidden' name='totals[]' value='"+ total.value +"' />";
		row.cells[4].innerHTML = keterangan.value + "<input type='hidden' name='kets[]' value='"+ keterangan.value +"' />";
	}
	else {
		var row = tbl.insertRow(rowCount);
		
		var cproduk = row.insertCell(0);
		var cqty = row.insertCell(1);
		var charga = row.insertCell(2);
		var ctotal = row.insertCell(3);
		var cket = row.insertCell(4);
		var ccon = row.insertCell(5);
		
		cproduk.innerHTML = produkTeks + "<input type='hidden' name='produks[]' value='"+ produkValue +"' />";
		cqty.innerHTML = qty.value + "<input type='hidden' name='qtys[]' value='"+ qty.value +"' />";
		charga.innerHTML = harga.value + "<input type='hidden' name='hargas[]' value='"+ harga.value +"' />";
		ctotal.innerHTML = total.value + "<input type='hidden' name='totals[]' value='"+ total.value +"' />";
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
	document.getElementById("produk").selectedIndex = 0;
	document.getElementById("qty").value = "";
	document.getElementById("harga").value = "";
	document.getElementById("total").value = "";
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
	var produk = document.getElementById("produk");
	var qty = document.getElementById("qty");
	var harga = document.getElementById("harga");
	var total = document.getElementById("total");
	var keterangan = document.getElementById("keterangan");

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

	qty.value = elms[1].value;

	harga.value = elms[2].value;

	total.value = elms[3].value;

	keterangan.value = elms[4].value;
	
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

function cekDataKredit(submitID, paymentMethodID, urlData, paymentMethodCashValue) {
	var npwp = '';
	var siup = '';
	var tdp = '';
	var ktp = '';
	jQuery('#'+submitID).show();	
	var paymentMethod = document.getElementById(paymentMethodID).value;
	if(paymentMethod!='') {
		if(paymentMethod!=paymentMethodCashValue) {
			jQuery.ajax({
				type: 'POST',
				url: urlData,
				success: function(data) {
					if(data.length > 0) {
						jQuery(data).each(function(){
							npwp = this.npwp;
							siup = this.siup;
							tdp = this.tdp;
							ktp = this.ktp;
							
							if(npwp=='' || siup=='' || tdp=='' || ktp=='') {
								jQuery('#'+submitID).hide();	
								alert('Customer tersebut belum diisi kelengkapan data kreditnya!');
								return;
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
	}
	else {
		alert('Pilih metode pembayaran!');
	}
}