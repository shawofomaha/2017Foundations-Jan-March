        var txt = "";
        var task = "toDoList";
        var normalTaskHtml = "<div class='dudeIt task'><span class='desc'>" + txt + "</span><button type='button' class='completedButton'>Completed</button></div></span><button type='button' class='removeButton hideRemoveButton'>Remove</button></div> ";        

        $(document).ready(function () {

            $("#container").on("click", "button", function (e) {
                $('#sound1').get(0).play();
                
                if ($(this).hasClass("completedButton")) {
                  //Show the remove button
                  $(this).parent().next().addClass("showRemoveButton"); 
                  
                  // Remove the showCompletedButton class
                  $(this).removeClass("showCompletedButton"); 
                    
                  // add the hideCompletedButton class 
                  $(this).addClass("hideCompletedButton"); 
                $(this).parent().next().next().addClass("completed");                    
                }
                
                if ($(this).hasClass("removeButton")) {
                    $(this).next().remove();        // remove the Text
                    $(this).prev().prev().remove(); // remove the div
                    $(this).remove();               // remove the button
                } 
                
            });
            
            
            // Click handlers and Functions for List Maintenence 
            //
            // Click handlers 
            $('.container').on('keydown', '#inpuText', function (e) {
                var key = e.which;
                switch (key) {
                case 13:              // enter
                    alert('Enter key pressed.');
                    editInput();
                    break;
                default:
                    break;
                }
            });
            
            $("#addTask").click(function () {
                editInput();
            }); 
            
            
            // Functions for List Maintenence 
            function editInput() {
                txt = $("#inpuText").val();     // save input
                $("#inpuText").val("");  // re-initialize input
                
                // Edit for no input
                if (txt == "default") {
                    $('#sound2').get(0).play();
                    alert("1 -editInput - Please enter something other than 'default' or don't leave an empty task description!");
                } else if (txt == " ") {
                    $('#sound2').get(0).play();
                    alert("2 -editInput- Please don't leave an empty task description!");
                } else if (txt == "") {
                    $('#sound2').get(0).play();
                    alert("3 -editInput- Please don't leave an blank task description!");
                } else {
                    $('#sound1').get(0).play();
                    insertTask();
                }
            }

            function insertTask() {
                var txt2 = "<span class='txt'>" + txt + "</span>";
                $(".listName").append(normalTaskHtml + txt2 + "<br/>");
            }

        });
