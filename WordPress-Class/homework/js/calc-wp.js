var input1 = 0;
var input2 = 0;
var result = 0;
var mathOper = "";

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
        var input1 = parseInt($('#input1').val());
        var input2 = parseInt($('#input2').val());
        if (input1) {console.log("input1: true");}
        if (input2) {console.log("input2: true");}
        if (mathOper == "add") {
            addMe(input1, input2);
        } else if (mathOper == "subtract") {
            subtractMe(input1, input2);
        } else if (mathOper == "multiply") {
            multiplyMe(input1, input2);
        } else {
            divideMe(input1, input2);
        }
        
        console.log("result is: " + result);
        if ( isNaN(result)  ) {
            result = "Please enter only numerics to calc!"
        }
        $("span#calcText").text(result);
     
    });


});