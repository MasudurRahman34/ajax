
	

/*var a=10, b=20, sum=a+b;
document.write('sum = '+sum);
document.write('<hr>');
document.write('<h4>JS Function</h4><br>');
var color='green';
function localFunction () {
	var color='blue';
	document.write(color+'<br>');
}
document.write(color+'<br>');
localFunction();
// var i;
// for(i=1; i<=10; i= i+1){
//    var s;
//    for(s=0; s<i; s = s+1){
//     document.write("*");
//    }
//    //i want this to print a new line
//    document.write('<br>');

// }
document.write('<hr>');
document.write('<h4>JS conditional switch, print in div </h4><br>');
document.write('<hr>');*/
function checkName() {
	var txt;
	var fullname=document.getElementById('fullname').value;
switch (fullname) {
	case 'masud':
		txt= 'i love masud';
		
		break;
	case 'shuvo':
		txt= 'i love shuvo';
		break;
	default:
		txt='nothing found with this name';
		break;
		
	}
	document.getElementById("show").innerHTML=txt;
}

///check email
function checkEmail(){
	var getField = document.getElementById("email");
	var email = getField.value;
	var emailRegEx=/([a-zA-Z0-9_\-\.]+)@((\[[0-9]{1,3}\.[0-9]{1,3}\.[0-9]{1,3}\.)|(([a-zA-Z0-9\-]+\.)+))([a-zA-Z]{2,4}|[0-9]{1,3})/;
	getField.style.color = "white";
	if (emailRegEx.test(email)) {
		getField.style.backgroundColor = "green";
	} else {
		getField.style.backgroundColor = "red";
	}
}

function ButtoncClick() {
	var inputname=buttonform.inputname.value;
	if (inputname=="") {
		alert('please enter something');
	} else {
		alert('you have entered '+inputname);
	}
}

//changing value work in two field with checkbox

function docCal(form, pfield) {
	if (pfield=="result") {
		if (form.chbox.checked) {
			form.t1.value=math.sqrt(form.result.value);
		}
	} else {
		if (form.chbox.checked) {
			form.result.value=form.t1.value*form.t1.value;
		} else {
			form.result.value=form.t1.value*2;
		}
	}
}