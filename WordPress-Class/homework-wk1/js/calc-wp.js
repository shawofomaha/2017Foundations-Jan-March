var input1 = 0;
var input2 = 0;
var result = 0;
var mathOper = "";
var runUpdateFunction = true;

$(document).ready(function () {

    $('#mathOperator input').on('change', function () {
        mathOper = ($('input[name=rad]:checked', '#mathOperator').val());
        console.log("1mathOper: " + mathOper);
    });

    $('#clear').click(function () {
        $("span#calcText").text(0);
        $("input#input1").val(" ");
        $("input#input2").val(" ");
    });

    function addMe(one, two) {
        result = one + two;
        return result;
    }

    function subtractMe(one, two) {
        result = one - two;
        return result;
    }

    function multiplyMe(one, two) {
        result = one * two;
        return result;
    }

    function divideMe(one, two) {
        result = one / two;
        return result;
    }

    $('#calcMe').click(function (e) {
        
        $("span#calcText").text(0);
        
        var input1 = ( 1 * $('#input1').val() );
        if ( isNaN(input1) ) {
            console.log("isNAN input1 " + input1);
            result = "The first number is NaN - Not a number!";
        } else if ( input1 == "" ) {
            console.log("empty input1 " + input1);
            result = "The first number is empty or an invaild numeric!";
            runUpdateFunction = false;
        }
        console.log("aft if input1 " + input1);

        var input2 = $('#input2').val();
        var input2 = input2 * 1;
        if ( isNaN(input2) ) {
            console.log("isNAN input2 " + input1);
            result = "The second number is NaN - Not a number!";
        } else if ( input2 == "" ) {
            console.log("empty input2 " + input1);
            result = "The second number is empty or invaild numeric!";
            runUpdateFunction = false;
        }
        console.log("aft if input2 " + input1);        

        if (runUpdateFunction) {
            if (mathOper == "add") {
                addMe(input1, input2);
            } else if (mathOper == "subtract") {
                subtractMe(input1, input2);
            } else if (mathOper == "multiply") {
                multiplyMe(input1, input2);
            } else  if (mathOper == "divideMe") {
                divideMe(input1, input2);
            } else {
//                addMe(input1, input2);
            }
        } else {

        }

        console.log("result is: " + result);
//        if (isNaN(result)) {
//            result = "Please enter only numerics to calc!";
//        }
        $("span#calcText").text(result);

    });


});