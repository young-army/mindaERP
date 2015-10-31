var fCount = 1;
function addFiles() {		
	var elmFile = '<div id="pFile_'+ fCount +'"><p>\n'+
			  '\t<label class="l-input-small">File Dokumen</label>\n'+
			  '\t<div class="field">\n'+
			  '\t\t<input type="file" name="dok[]" />\n'+
			  '\t\t<input type="button" class="cancel radius2" value="Remove This" onclick="removeFiles('+ fCount +')"/>\n'+
			  '\t</div>\n'+
			  '</p></div>\n';
	var elmW = document.getElementById("wFile");
	elmW.innerHTML += elmFile;
	fCount++;
}

function removeFiles(id) {
	var elmF = document.getElementById('pFile_'+ id);
	var elmW = document.getElementById('wFile');
	
	while (elmF.firstChild) {
		elmF.removeChild(elmF.firstChild);
	}
	elmW.removeChild(elmF);
}

function getHargaCosting(val, urlData) {
	jQuery.ajax({
		type: 'POST',
		url: urlData,
		success: function(data) {
			if(data.length > 0) {
				jQuery(data).each(function(){
					var harga_costing = (this.harga_costing=='' || this.harga_costing==undefined ? 0 : this.harga_costing);
					jQuery('#costing').val( reformatNumber(harga_costing) );
				});
			}
			else {
				alert('No data available!');
			}
		},
		dataType: 'json'
	});
}

function calcJual(val, count) {
	var costing = jQuery('#costing').val();
	costing = costing.replace('.','').replace('.','').replace('.','').replace('.','').replace('.','');
	var selisih = val.replace('.','').replace('.','').replace('.','').replace('.','').replace('.','');
	var jual = Number(costing) + Number(selisih);
	jQuery('#jual_'+ count).val(reformatNumber(jual));
}

function calcSelisih(val, count) {
	var costing = jQuery('#costing').val();
	costing = costing.replace('.','').replace('.','').replace('.','').replace('.','').replace('.','');
	var jual = val.replace('.','').replace('.','').replace('.','').replace('.','').replace('.','');
	var selisih = Number(jual) - Number(costing);
	jQuery('#selisih_'+ count).val(reformatNumber(selisih));
}