/*
To use this function, pass in the entire text string from your calculator
    ex: var result = calculate(textStringHere);
It will return the math result for you to display
*/
function calculate(input){
    var result = "";
    try{
        debugger;
        input = input.replace(" ", "").replace("--", "+");
        result = eval(input).toString();
        var decimalPos = result.indexOf(".");
        if (decimalPos > 11 && result.length > 11){
            result = result.substr(0, decimalPos);
        }else if (decimalPos > 0 ){
            result = result.substr(0, decimalPos) + result.substr(decimalPos, 11-decimalPos);
        }
        console.log("result= "+result);
    }catch(e){
        console.log(e);
        result = "ERROR";
    }
    return result;
}

/* .  Variables .  */
var input = "";
var holdText = "";

/*

1. On click of any of the .calculatorNumber or .calculatorOperator buttons you need to check if the current #calcText span's text is equal to 0.
    If the text is equal to 0, set the text equal to the clicked button's text.
    Otherwise if the text is NOT equal to 0, add the clicked button's text to the display after the existing text.
2. On click of the .calculatorClear button you should set the #calcText span's text to 0.
3. On click of the .calculatorEquals button, call the calculate function as described above the function definition and display the returned result

*/

/* Pressed a Number */
$(".calculatorNumber").click(function () {
    input = $(this).text();
    holdText = $("#calcText").text(); 
    $("#calcText").text(holdText+input);
    if (holdText == "0" ) {
        $("#calcText").text(input);
    } else {
        $("#calcText").text(holdText+input);
    }    
});

/*  pressed Calculation Operator */
$(".calculatorOperator").click(function () {
    input = $(this).text();
    holdText = $("#calcText").text();    
    $("#calcText").text(holdText+input);
    if (holdText == "0") {
        $("#calcText").text(input);
    } else {
        $("#calcText").text(holdText+input);
    }    
});

//  pressed Clear button
$("#clear").click(function () {
     $("#calcText").text("0"); 
    input = "";
    holdText = "";
});

/*  pressed */
$("#equals").click(function () {
    holdText = $("#calcText").text(); 
    return  $("#calcText").text(calculate(holdText));
});