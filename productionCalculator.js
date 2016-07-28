function ShwVal() {
	var txBx = arguments[0];
	var txBv = txBx.value;
	
	var txRtf = txBx.name + "R";
	var txRt = document.getElementById(txRtf).value*1;
	
	var txMn = txBx.name + "M";
	var txHr = txBx.name + "H";

	var txMnv = (Math.round((txBv*txRt)*100)/100).toFixed(2);
	var txHrv = (Math.round((txMnv/60)*100)/100).toFixed(2);

	
	if (txBv != "") {
		document.getElementById(txMn).value = txMnv;
		document.getElementById(txHr).value = txHrv;
		CalTot();
	} else {
		document.getElementById(txMn).value = "";
		document.getElementById(txHr).value = "";
		CalTot();
	}

}

function CalTot() { 
	var txTtm = document.getElementById("txtTot");
	var fld = document.form1.elements.length;
	txTtm.value = 0;
	for ( var j=3; j< fld-2; j=j+4) {
		var tp = document.form1.elements[j].type;
		var tnm = document.form1.elements[j].name.length;
		var tn = (document.form1.elements[j].name).substr(tnm-1,1);
		if ((document.form1.elements[j].name!="txTmt") && (tp="textbox") && (tn =="H")){
			txTtm.value = ((txTtm.value)*1 + (document.form1.elements[j].value)*1).toFixed(2);
		} 
	}
}
