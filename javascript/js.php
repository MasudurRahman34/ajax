<script type="text/javascript">
	

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

/*function calculator(form, fieldname){
	if (fieldname == "showValue") {
		if (form.chk-value.checked) {
			form.f1-value.value = form.showValue.value* form.showValue.value;

		} else {
			form.f1-value.value=form.show-value.value/2;
		}

	} else {
		if (form.chk-value.checked) {
			form.showValue.value = form.f1-value.value* form.f1-value.value;
		} else {
			form.showValue.value = form.f1-value.value* 2;
		}

	}
}*/


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

</script>
 <hr>
 <h4>check text</h4>
	<input type="text" id="fullname" name="name" onblur="checkName()">
	<div id='show'>
		</div>
<hr>
<h4>email validation with regular expression</h4>
<p>email</p>
<input type="text" id="email" onkeyup="checkEmail()"/>
<hr>
<h4>button work in form</h4>
<form action="" method="" name="buttonform">
	<input type="text" name="inputname">
	<input type="button" value="clickme" onclick="ButtoncClick()"></button>

</form>


<hr>

<hr>
<h4>changing value work in two field with checkbox</h4>
<!-- <form action="" method="" name="valueChange">
	<input type="text" name="f1-value" onchange="calculator(this.form, this.name)"/>
	<input type="checkbox" name="chk-value" onclick="calculator(this.form, this.name)"/>
	<input type="text" name="showValue" onchange="calculator(this.form, this.name)"/>
	<input type="reset" name="Refresh" />

</form> -->

<form action="" method="" name="myform">
	<input type="text" name="t1" onchange="docCal(this.form, this.name)">

	<input type="checkbox" name="chbox" onclick="docCal(this.form, this.name)">

	<input type="text" name="result" onchange="docCal(this.form, this.name)">

	<input type="reset" name="Refresh">
	
</form>
<hr>	
