// JavaScript Document

 
var poweradd = 0;
var discriptionHQ = "";
var discriptionTR = "";
var discriptionELT = "";
var discriptionFA = "";
var discriptionHS = "";
var HQarr = [];
var TRarr = [];
var ELTarr = [];
var FAarr = [];
var HSarr = [];
var hrrostid = 0;
var trrostid = 0;
var eltrostid = 0;
var farostid = 0;
var hsrostid = 0;
var TableData = 0;

function addunitHQ() {
	

	var model = document.getElementById('HQrost').insertRow(0);
	if (document.getElementById('HQDropDownList').value == 2){
		poweradd = poweradd + 10;
		document.getElementById('total').innerHTML = poweradd + " Power Level" ;
		var name = model.insertCell(0);
		var power = model.insertCell(1);
		var del = model.insertCell(2);
		name.innerHTML = "Captain-General Trajann Valoris";
		power.innerHTML = "Power Level: 10";
		del.innerHTML = "<button onclick =' Delete();' style ='display:right;margin:right;' id = 'Delete' value='Delete	'> Delete</button> <br>";
		
		
		
	}
	else if(document.getElementById('HQDropDownList').value == 3){
		
			poweradd = poweradd + 8;
		document.getElementById('total').innerHTML = poweradd + " Power Level";
			var name = model.insertCell(0);
		var power = model.insertCell(1);
		var del = model.insertCell(2);
		name.innerHTML = "Shield-Captain in Allarus Terminator Armour";
		power.innerHTML = "Power Level: 8";
		del.innerHTML = "<button onclick =' Delete();' style ='display:right;margin:right;' id = 'Delete' value='Delete	'> Delete</button> <br>";
			}
		else if(document.getElementById('HQDropDownList').value == 4){
		
			poweradd = poweradd + 9;
		document.getElementById('total').innerHTML = poweradd + " Power Level";
		var name = model.insertCell(0);
		var power = model.insertCell(1);
		var del = model.insertCell(2);
		name.innerHTML = "Shield-Captain on DawnEagle Jetbike";
		power.innerHTML = "Power Level: 9";
		del.innerHTML = "<button onclick =' Delete();' style ='display:right;margin:right;' id = 'Delete' value='Delete	'> Delete</button> <br>";
			
			}
	
	else {
	
		poweradd = poweradd + 7;
		document.getElementById('total').innerHTML = poweradd + " Power Level";
			var name = model.insertCell(0);
		var power = model.insertCell(1);
		var del = model.insertCell(2);
		name.innerHTML = "Shield-Captain";
		power.innerHTML = "Power Level: 7";
		del.innerHTML = "<button onclick =' Delete();' style ='display:right;margin:right;' id = 'Delete' value='Delete	'> Delete</button> <br>";
			}
	return poweradd + " Power Level";
	}


	


function addunitTR() {
		var model = document.getElementById('TRrost').insertRow(0);
	if (document.getElementById('TRDropDownList').value == 6){
		poweradd = poweradd + 8;
		document.getElementById('total').innerHTML = poweradd + " Power Level" ;
		var name = model.insertCell(0);
		var power = model.insertCell(1);
		var del = model.insertCell(2);
		name.innerHTML = "Custodian Guard";
		power.innerHTML = "Power Level: 7";
		del.innerHTML = "<button onclick =' Delete();' style ='display:right;margin:right;' id = 'Delete' value='Delete	'> Delete</button> <br>";
		
	}
	

	return poweradd + " Power Level";
}




function addunitELT() {
	

	var model = document.getElementById('ELTrost').insertRow(0);
	if (document.getElementById('ELTDropDownList').value == 7){
		poweradd = poweradd + 13;
		document.getElementById('total').innerHTML = poweradd + " Power Level" ;
		var name = model.insertCell(0);
		var power = model.insertCell(1);
		var del = model.insertCell(2);
		name.innerHTML = "Allarus Custodians";
		power.innerHTML = "Power Level: 13";
		del.innerHTML = "<button onclick =' Delete();' style ='display:right;margin:right;' id = 'Delete' value='Delete	'> Delete</button> <br>";
		
		
	}
	else if(document.getElementById('ELTDropDownList').value == 8){
			poweradd = poweradd + 10;
		document.getElementById('total').innerHTML = poweradd + " Power Level";
		var name = model.insertCell(0);
		var power = model.insertCell(1);
		var del = model.insertCell(2);
		name.innerHTML = "Custodian Wardens";
		power.innerHTML = "Power Level: 10";
		del.innerHTML = "<button onclick =' Delete();' style ='display:right;margin:right;' id = 'Delete' value='Delete	'> Delete</button> <br>";
		
			}
		else if(document.getElementById('ELTDropDownList').value == 9){
			poweradd = poweradd + 10;
		document.getElementById('total').innerHTML = poweradd + " Power Level";
		var name = model.insertCell(0);
		var power = model.insertCell(1);
		var del = model.insertCell(2);
		name.innerHTML = "Venerable Conteptor Dreadnought";
		power.innerHTML = "Power Level: 10";
		del.innerHTML = "<button onclick =' Delete();' style ='display:right;margin:right;' id = 'Delete' value='Delete	'> Delete</button> <br>";
			}
	else if(document.getElementById('ELTDropDownList').value == 10){
			poweradd = poweradd + 7;
		document.getElementById('total').innerHTML = poweradd + " Power Level";
		var name = model.insertCell(0);
		var power = model.insertCell(1);
		var del = model.insertCell(2);
		name.innerHTML = "Vexilus Praetor in Allarus Terminator Armor";
		power.innerHTML = "Power Level: 7";
		del.innerHTML = "<button onclick =' Delete();' style ='display:right;margin:right;' id = 'Delete' value='Delete	'> Delete</button> <br>";
			}
	else {
		poweradd = poweradd + 6;
		document.getElementById('total').innerHTML = poweradd + " Power Level";
		var name = model.insertCell(0);
		var power = model.insertCell(1);
		var del = model.insertCell(2);
		name.innerHTML = "Vexilus Praetor";
		power.innerHTML = "Power Level: 6";
		del.innerHTML = "<button onclick =' Delete();' style ='display:right;margin:right;' id = 'Delete' value='Delete	'> Delete</button> <br>";
	}
	
		


	return poweradd + " Power Level";
}

function addunitFA() {
		var model = document.getElementById('FArost').insertRow(0);
	if (document.getElementById('FADropDownList').value == 12){
		poweradd = poweradd + 15;
		document.getElementById('total').innerHTML = poweradd + " Power Level" ;
		var name = model.insertCell(0);
		var power = model.insertCell(1);
		var del = model.insertCell(2);
		name.innerHTML = "Vertus Praetors";
		power.innerHTML = "Power Level: 15";
		del.innerHTML = "<button onclick =' Delete();' style ='display:right;margin:right;' id = 'Delete' value='Delete	'> Delete</button> <br>";
	}

	return poweradd + " Power Level";
}
function addunitHS() {
		var model = document.getElementById('HSrost').insertRow(0);
	if (document.getElementById('HSDropDownList').value == 13){
		poweradd = poweradd + 21;
		document.getElementById('total').innerHTML = poweradd + " Power Level" ;
		var name = model.insertCell(0);
		var power = model.insertCell(1);
		var del = model.insertCell(2);
		name.innerHTML = "Venerable Land Raider";
		power.innerHTML = "Power Level: 21";
		del.innerHTML = "<button onclick =' Delete();' style ='display:right;margin:right;' id = 'Delete' value='Delete	'> Delete</button> <br>";
		
	}


	return poweradd + " Power Level";
}



function saveHQ(){
	
	var myTableArray = [];

$("table#HQrost tr").each(function() {
    var arrayOfThisRow = [];
    var tableData = $(this).find('td');
    if (tableData.length > 0) {
        tableData.each(function() { arrayOfThisRow.push($(this).text()); });
        myTableArray.push(arrayOfThisRow);
    }
});


}

function saveTR(){
	
	var myTableArray = [];

$("table#TRrost tr").each(function() {
    var arrayOfThisRow = [];
    var tableData = $(this).find('td');
    if (tableData.length > 0) {
        tableData.each(function() { arrayOfThisRow.push($(this).text()); });
        myTableArray.push(arrayOfThisRow);
    }
});


}

function saveELT(){
	
	var myTableArray = [];

$("table#ELTrost tr").each(function() {
    var arrayOfThisRow = [];
    var tableData = $(this).find('td');
    if (tableData.length > 0) {
        tableData.each(function() { arrayOfThisRow.push($(this).text()); });
        myTableArray.push(arrayOfThisRow);
    }
});


}
function saveFA(){
	
	var myTableArray = [];

$("table#FArost tr").each(function() {
    var arrayOfThisRow = [];
    var tableData = $(this).find('td');
    if (tableData.length > 0) {
        tableData.each(function() { arrayOfThisRow.push($(this).text()); });
        myTableArray.push(arrayOfThisRow);
    }
});


}

function saveHS(){
	
	var myTableArray = [];

$("table#HSrost tr").each(function() {
    var arrayOfThisRow = [];
    var tableData = $(this).find('td');
    if (tableData.length > 0) {
        tableData.each(function() { arrayOfThisRow.push($(this).text()); });
        myTableArray.push(arrayOfThisRow);
    }
});


}
