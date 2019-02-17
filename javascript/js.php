<script>
	

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
		txt='nothing';
		break;
	}
	document.getElementById("show").innerHTML=txt;
}
</script>
 
<input type="text" id="fullname" name="name" onclick="checkName()">
<div id='show'>
	</div>
	
