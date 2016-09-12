<form id="form1" method="post" action="process.php">
	
	<!-- a) A field to collect the buyer's name -->
	<input type="text" class="name" name="name" id="name" size="30" placeholder="First Name/Last Name" required autofocus onblur="valName(document.getElementById('name'))"><br>

	<p>
	<!-- b) Four check box choices -->
	<fieldset id="options">
		<legend>Items</legend>
		<input type="checkbox" class="myCheckBox" id="checkBox1" name="myCheckBox[]" value="Option 1">Four 25 watt LED bulbs for $2.39<br>
		<input type="checkbox" class="myCheckBox" id="checkBox2" name="myCheckBox[]" value="Option 2">Eight 25 watt LED bulbs for $4.29<br>
		<input type="checkbox" class="myCheckBox" id="checkBox3" name="myCheckBox[]" value="Option 3">Four 50 watt LED bulbs for $3.95<br>
		<input type="checkbox" class="myCheckBox" id="checkBox4" name="myCheckBox[]" value="Option 4">Eight 50 wat LED bulbs for $7.49<br>
	</fieldset>

	<!-- c) A collection of three radio buttons that are labeled -->
	<input type="radio" class="radioButton" id="radio1" name="cardType[]" value="Visa">Visa<br>
	<input type="radio" class="radioButton" id="radio2" name="cardType[]" value="Master Card">Master Card<br>
	<input type="radio" class="radioButton" id="radio3" name="cardType[]" value="Discover">Discover<br>

	<!-- d) An Order and Clear button -->
	<div class="controls">
		<input type="button" value="Order" onclick="validate();" >
		<input type="reset" value="Clear">
	</div>

	<input type="hidden" name="submitCheck" value="1">
</form><br>
