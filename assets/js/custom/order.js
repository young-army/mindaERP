var dataCount = 0;
var currRowIndex = -1;
function addData() {
	var produk = document.getElementById("produk");
	var produkTeks = produk.options[produk.selectedIndex].text;
	var produkValue = produk.options[produk.selectedIndex].value;
	
	var brand = document.getElementById("brand");
	var brandTeks = brand.options[brand.selectedIndex].text;
	var brandValue = brand.options[brand.selectedIndex].value;
	
	var pname = document.getElementById("product_name");
	var pnameTeks = pname.options[pname.selectedIndex].text;
	var pnameValue = pname.options[pname.selectedIndex].value;
	
	var qty = document.getElementById("qty");
	var qty_p = document.getElementById("qty_p");
	var harga = document.getElementById("harga");
	var total = document.getElementById("total");
	var keterangan = document.getElementById("keterangan");
	
	var stok_kg = document.getElementById("stok_kg_s");
	var stok_p = document.getElementById("stok_p_s");
	
	if(qty.value=='') {
		alert('Please input quantity (kg)!');
		return;
	}
	if(qty_p.value=='') {
		alert('Please input quantity (package)! If you\' not know please input 0.');
		return;
	}
	if(harga.value=='') {
		alert('Please input price (per kg)!');
		return;
	}
	alert(qty.value + ':' + stok_kg.innerHTML + ":" + stok_p.innerHTML + ":" + qty_p.value);
	if(qty.value > parseInt(stok_kg.innerHTML)) {
		alert('Stock unavailable!');
		return;
	}
	if(parseInt(stok_p.innerHTML) < qty_p.value) {
		alert('Stock unavailable!');
		return;
	}
	
	var tbl = document.getElementById("tblData");
	var rowCount = tbl.rows.length;
	
	if(currRowIndex > -1) {
		var row = tbl.rows[currRowIndex];
		
		row.cells[0].innerHTML = produkTeks + "<input type='hidden' name='produks[]' value='"+ produkValue +"' /><input type='hidden' name='brands[]' value='"+ brandValue +"' /><input type='hidden' name='pnames[]' value='"+ pnameValue +"' />";
		row.cells[1].innerHTML = qty.value + "<input type='hidden' name='qtys[]' value='"+ qty.value +"' />";
		row.cells[2].innerHTML = qty_p.value + "<input type='hidden' name='qty_ps[]' value='"+ qty_p.value +"' />";
		row.cells[3].innerHTML = harga.value + "<input type='hidden' name='hargas[]' value='"+ harga.value +"' />";
		row.cells[4].innerHTML = total.value + "<input type='hidden' name='totals[]' value='"+ total.value +"' />";
		row.cells[5].innerHTML = keterangan.value + "<input type='hidden' name='kets[]' value='"+ keterangan.value +"' />";
	}
	else {
		var row = tbl.insertRow(rowCount);
		
		var cproduk = row.insertCell(0);
		var cqty = row.insertCell(1);
		var cqty_p = row.insertCell(2);
		var charga = row.insertCell(3);
		var ctotal = row.insertCell(4);
		var cket = row.insertCell(5);
		var ccon = row.insertCell(6);
		
		cproduk.innerHTML = produkTeks + "<input type='hidden' name='produks[]' value='"+ produkValue +"' /><input type='hidden' name='brands[]' value='"+ brandValue +"' /><input type='hidden' name='pnames[]' value='"+ pnameValue +"' />";
		cqty.innerHTML = qty.value + "<input type='hidden' name='qtys[]' value='"+ qty.value +"' />";
		cqty_p.innerHTML = qty_p.value + "<input type='hidden' name='qty_ps[]' value='"+ qty_p.value +"' />";
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
	document.getElementById("brand").selectedIndex = 0;
	document.getElementById("product_name").selectedIndex = 0;
	document.getElementById("produk").selectedIndex = 0;
	document.getElementById("qty").value = "";
	document.getElementById("qty_p").value = "";
	document.getElementById("harga").value = "";
	document.getElementById("total").value = "";
	document.getElementById("keterangan").value = "";
	document.getElementById("stok_kg_s").innerHTML = "0";
	document.getElementById("stok_p_s").innerHTML = "0";
	
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
	var brand = document.getElementById("brand");
	var pname = document.getElementById("product_name");
	var qty = document.getElementById("qty");
	var qty_p = document.getElementById("qty_p");
	var harga = document.getElementById("harga");
	var total = document.getElementById("total");
	var keterangan = document.getElementById("keterangan");

	var cell = elm.parentNode;
	var row = cell.parentNode;
	currRowIndex = row.rowIndex;
	
	var elms = row.getElementsByTagName('input');
	
	for(var j=0; j<brand.options.length; j++) {
		if(brand.options[j].value == elms[1].value) {
		   brand.selectedIndex = j;
		   break;
		}
	}
	
	for(var j=0; j<pname.options.length; j++) {
		if(pname.options[j].value == elms[2].value) {
		   pname.selectedIndex = j;
		   break;
		}
	}
	
	// getProduct();
	getProductByVal(elms[1].value, elms[2].value, elms[0].value);
	
	for(var j=0; j<produk.options.length; j++) {
		// alert(produk.options[j].value +':'+ elms[0].value +':'+ j);
		if(produk.options[j].value == elms[0].value) {
		   produk.selectedIndex = j;
		   // produk.value = elms[0].value;
		   break;
		}
	}
	
	getStokProduk(elms[0].value);

	qty.value = elms[3].value;
	
	qty_p.value = elms[4].value;

	harga.value = elms[5].value;

	total.value = elms[6].value;

	keterangan.value = elms[7].value;
	
	// jQuery.uniform.update();
	
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
								jQuery('#customer').val("");
							}
						});
					}
					else {
						alert('No data available!');
						jQuery('#customer').val("");
					}
				},
				dataType: 'json'
			});
		}
	}
	else {
		alert('Pilih metode pembayaran!');
		jQuery('#customer').val("");
	}
}

function getStokProduk(val) {
	jQuery('#stok_kg_s').html( reformatNumber(0) );
	jQuery('#stok_p_s').html( reformatNumber(0) );
	jQuery.ajax({
		type: 'POST',
		url: urlData + val + '/',
		success: function(data) {
			if(data.length > 0) {
				jQuery(data).each(function(){
					var stok_kg = (this.stok_sales_kg=='' || this.stok_sales_kg==undefined ? 0 : this.stok_sales_kg);
					var stok_p = (this.stok_sales_package=='' || this.stok_sales_package==undefined ? 0 : this.stok_sales_package);
					// alert(stok_kg + ':' + stok_p);
					jQuery('#stok_kg_s').html( reformatNumber(stok_kg) );
					jQuery('#stok_p_s').html( reformatNumber(stok_p) );
				});
			}
			else {
				alert('No data available!');
			}
		},
		dataType: 'json'
	});
}
// jQuery(function() {
	// jQuery( "#produk" ).combobox();
// });