window.onload = initForms;

function initForms() {
	for (var i=0; i< document.forms.length; i++) {
		document.forms[i].onsubmit = function() {
			return validForm();
		};
	}
}

function validForm(){
	var allGood = true;
	var allTags = document.getElementsByTagName("*");
	for (var i=0; i<allTags.length; i++) {
		if (!validTag(allTags[i])) {
			allGood = false;
		}
	}
	return allGood;
	
	function validTag(thisTag) {
		var outClass = "";
		var allClasses = thisTag.className;
	
		outClass += validBasedOnClass(thisTag);
	
		thisTag.className = outClass;
	
		if (outClass.indexOf("invalid") > -1) {
			thisTag.focus();
			if (thisTag.nodeName == "INPUT") {
				thisTag.select();
			}
			return false;
		}
		return true;
	
	function validBasedOnClass(thisClass) {
			var classBack = "";
			
			if (thisClass == 'reqd' && allGood && thisTag.value == "") {
						classBack = "invalid ";
						classBack += thisClass;
						
			}else{
				classBack += thisClass;
			}
			return classBack;
	}
}
