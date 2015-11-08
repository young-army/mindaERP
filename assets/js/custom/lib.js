function numericOnly(e) {
    var uniCode = ""
    if (e != undefined) {
        if (e.which != null)
            uniCode = e.which;
        else if (e.charCode != null)
            uniCode = e.charCode;
        else
            uniCode = e.keyCode;
    }
    if (uniCode > 31 && (uniCode < 48 || uniCode > 57))
        return false;
    return true;
}

function decimalOnly(e) {
    var uniCode = ""
    if (e != undefined) {
        if (e.which != null)
            uniCode = e.which;
        else if (e.charCode != null)
            uniCode = e.charCode;
        else
            uniCode = e.keyCode;
    }
	
    if (uniCode > 31 && (uniCode < 48 || uniCode > 57) && uniCode != 46)
        return false;
    return true;
}

function setCurrency(elm) {
    elm.value = reformatNumber(elm.value);
}

function reformatNumber(num) {
    num = num.toString().replace(/\Rp.|\,/g, '').replace(/\,00|\,/g, '').replace(/\.|\,/g, '');
    // No error checking. Assumes only ever 1 DP per number
    var text = num;

    //added by masmeka
    var minPos = text.indexOf('-');
    var isMin = (minPos > -1);

    text.replace('-', '');

    // Strip off anything to the right of the DP
    var rightOfDp = '';
    var dpPos = text.indexOf(',');
    if (dpPos != -1) {
        rightOfDp = text.substr(dpPos);
        text = text.substr(0, dpPos);
    }

    var inttext = parseInt(text);
    if (inttext <= 0) {
        return "0";
    }

    var leftOfDp = '';
    var counter = 0;
    // Format the remainder into 3 char blocks, starting from the right
    for (var loop = text.length - 1; loop > -1; loop--) {
        var c = text.charAt(loop);

        // Ignore existing spaces
        if (c == '.') continue;

        leftOfDp = c + leftOfDp;
        counter++;
        if (counter % 3 == 0) leftOfDp = '.' + leftOfDp;
    }

    // Strip leading space if present
    if (leftOfDp.charAt(0) == '.') leftOfDp = leftOfDp.substr(1);

    return (isMin ? '' : '') + leftOfDp + rightOfDp;
}

function number_format(num, decimal_places, decimal_separator, thousand_separator) {    
 var result = num.toFixed(decimal_places);
 var snum = result.split(".");
 var fnum = "";
 for (i=0; i<snum[0].length; i++) {
 if ((snum[0].length-i)%3==0) {
 fnum += thousand_separator;
 }
 fnum += snum[0].charAt(i);
 }
 var rnum = fnum + decimal_separator + snum[1];

 return rnum;
}