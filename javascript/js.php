 <?php include '../inc/header.php'; ?>

 <script src="../js/practice.js"></script>

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
