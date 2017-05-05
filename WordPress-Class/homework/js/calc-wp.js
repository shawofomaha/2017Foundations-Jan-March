var input1 = 0;
var input2 = 0;
var result = 0;
var mathOper = "";

$(document).ready(function () {
    
    $('#mathOperator input').on('change', function () {
        mathOper = ($('input[name=rad]:checked', '#mathOperator').val());
        console.log("1mathOper: " + mathOper);
    });    

//    $(".allow_numeric").on("input", function (e) {
//        var self = $(this);
//        self.val(self.val().replace(/[^\d].+/, ""));
//        if ((e.which < 48 || e.which > 57)) {
//            e.preventDefault();
//        }
//    });

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

        console.log("1mathOper: " + mathOper);
        if (mathOper == "add") {
            addMe(input1, input2);
        } else if (mathOper == "subtract") {
            subtractMe(input1, input2);
        } else if (mathOper == "multiply") {
            multiplyMe(input1, input2);
        } else {
            divideMe(input1, input2);
        }
        debugger;
        console.log("result is: " + result);
        debugger;
        $("span#calcText").text(result);
        debugger;
    });


});