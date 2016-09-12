// Regular expression for atleast one character
var nameRE = /[a-zA-Z]+/;

// This javascript function validates the text box is not empty,
// atleast one check box is checked, and one radio button is selected
function validate() 
{
    // Checks if checkbox and radio fields are valid
    var checkBoxCheck = valCheckBoxes();
    var radioCheck = valRadio();

    // Flag for validity
    var OK=false;

    if(checkBoxCheck) {
        if(radioCheck) {
            OK = true;
        }
    }

    // Submit form if all fields valid
    if(OK) {
        document.getElementById("form1").submit();
    } else {
        return;
    }

}


// Makes sure name is not empty
function valName(nameInput)
{
    var OK = nameRE.exec(nameInput.value);
    if(!OK) {
        alert("Please enter your name");
        return false;
    } else {
        return true;
    }

}

// Makes sure atleast one radio button is checked
 function valRadio()
 {
    var okRadio = false;

    // If a radio button is checked, turn flag true
    if(document.getElementById("radio1").checked) {
        okRadio=true;
    }
    if(document.getElementById("radio2").checked) {
        okRadio=true;
    }
    if(document.getElementById("radio3").checked) {
        okRadio=true;
    }

    // If atleast one radio checked
    if(!okRadio) { 
        alert("Please select a payment type");
        return false;
    } else {
        return true;
    }
 }

// Validates Checkboxes
function valCheckBoxes() {
    var okCheckBox = false;

    // If a checkbox is checked, turn flag true
    if(document.getElementById("checkBox1").checked) {
        okCheckBox=true;
    }
    if(document.getElementById("checkBox2").checked) {
        okCheckBox=true;
    }
    if(document.getElementById("checkBox3").checked) {
        okCheckBox=true;
    }
    if(document.getElementById("checkBox4").checked) {
        okCheckBox=true;
    }

    // If atleast one box checked
    if(!okCheckBox) { 
        alert("Please select an item to order");
        return false;
    } else {
        return true;
    }
}