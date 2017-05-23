<html lang="en">

<head>
    <!-- Housekeeping -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <!-- CSS Stylesheet href's -->
    <link rel="stylesheet" href="forms.css">

</head>
<?php 
    // just one file to include
    //require('phpQuery/phpQuery.php');
 ?>

<div class="container">

    <h1>Please fill out this form</h1>
    <hr>

  <?php if (!$_POST) { ?>
    <form method="POST">
        <!-- // Name -->
        <label for="firstname">First Name:</label>
        <input type="text" name="firstname" id="firstname"><br/>

        <label for="middlename">Middle Name:</label>
        <input type="text" name="middlename" id="middlename"><br/>
      
        <label for="lastname">Last Name:</label>
        <input type="text" name="lastname" id="lastname"><br/>

        <!-- // address    -->
        <label for="address1">Address Line 1:</label>
        <input type="text" name="address1" id="address1"><br/>
      
        <!-- <label for="address2">Address Line 2:</label> -->
        <label for="address2">Address Line 2:</label>
        <input type="text" name="address2" id="address2"><br/>
      
        <label for="city">City:</label>
        <input type="text" name="city" id="city"><br/>
      
        <label for="state">State:</label>
        <input type="text" name="state" id="state"><br/>
      
        <label for="zipcode">Zipcode:</label>
        <input type="text" name="zipcode" id="zipcode"><br/>


        <!-- // Demographic Favs Info -->
        <label for="favorite_candy">Favorite candy:</label>
        <input type="text" name="favorite_candy" id="favorite_candy"><br/>
        
        <label for="favorite_drink">Favorite drink:</label>
        <input type="text" name="favorite_drink" id="favorite_drink"><br/>

        <label for="favorite_tv_show">Favorite TV Show:</label>
        <input type="text" name="favorite_tv_show" id="favorite_tv_show"><br/>
        

        <!-- // Hobbies      -->
        <div class="group">
            <label for="hobby1">Hobby 1st:</label>
            <input type="text" name="hobbies[]" id="hobby1"><br/>
         
            <label for="hobby2">Hobby 2nd:</label>
            <input type="text" name="hobbies[]" id="hobby2"><br/>
           
            <label for="hobby3">Hobby 3rd:</label>
            <input type="text" name="hobbies[]" id="hobby3"><br/>
        </div> 

        <!-- // Pets -->
        <div class="group">
            <input type="radio" name="has_pets" value="true"> Yes I have pets<br>
            <input type="radio" name="has_pets" value="false" checked> No I do not have pets<br>
        <hr class="pet">  
                <label for="pet_names1">Pet name 1st:</label>
                <input type="text" name="pets[]" id="pet_names1"><br/>
             
                <label for="pet_names2">Pet name 2nd:</label>
                <input type="text" name="pets[]" id="pet_names2"><br/>
               
                <label for="pet_names3">Pet name 3rd:</label>
                <input type="text" name="pets[]" id="pet_names3"><br/>
         </div> 
         
        <!-- // Email        -->
        <label for="email">Email:</label>
        <input type="text" name="email" id="email"><br/>
    <center class="center">
        <button type="submit">Submit</button>
    </center>
  <?php } ?>    
  </form>
</div>
<content id="content"> 

<?php 

// define variables and set to empty values
    $editError       = false;
    $invalidLastName = true;
    $invalidEmail    = true;
    if ( $_POST ) { 
        $firstname       = $_POST['firstname'];
        $middlename      = $_POST['middlename'];
        $lastname        = $_POST['lastname'];
        $address1        = $_POST['address1'];
        $address2        = $_POST['address2'];
        $city            = $_POST['city'];
        $state           = $_POST['state'];
        $zipcode         = $_POST['zipcode'];
        $favorite_candy  = $_POST['favorite_candy'];
        $favorite_drink  = $_POST['favorite_drink'];
        $favorite_tv_show = $_POST['favorite_tv_show'];
        $hobbies         = $_POST['hobbies'];  
        $pets            = $_POST['pets'];
        $email           = $_POST['email'];
    }   
    // if ($_SERVER["REQUEST_METHOD"] == "POST") {

    //last name edit
    if ( $_POST ) { 
      if ( !($_POST['lastname']) ) {
        $editError    = true;
      } else {
        $invalidLastName = false;
      }
    }

    //email edit
    if ( $_POST ) {
        $email = $_POST['email'];
        if (!filter_var($email, FILTER_VALIDATE_EMAIL)) {
            $editError    = true;
        }  else {
            $invalidEmail = false;
        }
    }
?>

 <?php if ( $_POST && !$editError ) { ?>  
  <div class="postOutput">
        
        <p>Hi! My name is <?php echo "$firstname $middlename $lastname."; ?>
        </p>

        <p>I live at: <?php echo "<br>&nbsp;&nbsp;&nbsp;&nbsp;$address1 <br>&nbsp;&nbsp;&nbsp;&nbsp;$address2 <br>&nbsp;&nbsp;&nbsp;&nbsp;$city, $state $zipcode.<br><br>"; 
        ?>  

        <?php if ( $favorite_candy ) {
                echo "My favorite candy is $favorite_candy,"; 
              } else {
                echo "I do not like candy,";
              }     
        ?>

        <?php if ( $favorite_drink ) {
                echo " my favorite drink is $favorite_drink,"; 
              } else {
                echo " I do not have a favorite drink,";
              }
        ?>
         
        <?php if ( $favorite_tv_show ) {
                echo " and I love watching $favorite_tv_show."; 
              } else {
                echo " and I do not have a favorite TV show that I watch.";
              }
        ?>
        </p>

        <p> 
        <?php 
            $hobbies = $_POST['hobbies'];
            listArray($hobbies, "In my spare time, I enjoy ");      
        ?>
        </p>
    
        <p>
        <?php     
            //  if ( $_POST['has_pets'] !== true ) {
            //     echo "I do not have pets.";
            //  } else { 
            //      echo "I do have pets.  Their names are ";
                  $pets = $_POST['pets'];
                  listArray($pets, "I do have pets.  Their names are ");
            //  }
        ?>  
        </p>
    <?php } ?> 
    <?php 
     
        if ( $_POST && !$editError  ) {
            //echo "....email sending ... sort of ...";

            //send confirmation email
            $to      = "markshaw.us@gmail.com";
            $subject = "Test WordPress Email";
            $message = "This is a test message, from $firstname in $city sending to the ShawofOmaha!." . "\r\n";
                 
            mail( $to, $subject, $message );
           
        ?>
            <hr>
        <?php
            echo "<p><strong>$firstname</strong>, Thanks! We have received your submission.</p>";
        } 

        if ( $_POST && $editError ) {
            echo "<p ";

            if ( $invalidEmail ) {
              echo " class='errorScreen'>Invalid email format<strong>> $email <</strong>";
              echo "<strong>Please re-enter, the email received IS invalid.</strong>";
            }
            if ( $invalidLastName ) {
              echo "<p class='errorScreen'>Must enter a last name. ";
              echo "<strong>Please re-enter, the last name MUST be entered.</strong></p>";
            } 
            echo "</p>";

            ?>
            
            <!-- be nice and reload the form with the data user has already entered -->
            <form method="POST"> 
                <!-- // Name -->
                <label for="firstname">First Name:</label>         
                <input type="text" name="firstname" id="firstname" value="<?php print $firstname; ?>"><br/>
                <br/>

                <label for="middlename">Middle Name:</label>
                <input type="text" name="middlename" id="middlename" value="<?php print $middlename; ?>"><br/>

                
                <?php if ( $invalidLastName ) {  ?>
                    <label for="lastname" class="errorl">Last Name:</label>
                    <input type="text" name="lastname" id="lastname" class="error" value="<?php print $lastname ?>"><br/>
                <?php   } else { ?>
                    <label for="lastname">Last Name:</label>
                    <input type="text" name="lastname" id="lastname" value="<?php print $lastname ?>"><br/>
                <?php   }   ?>

                <!-- // address    -->
                <label for="address1">Address Line 1:</label>
                <input type="text" name="address1" id="address1" value="<?php print $address1 ?>"><br/>
              
                <!-- <label for="address2">Address Line 2:</label> -->
                <label for="address2">Address Line 2:</label>
                <input type="text" name="address2" id="address2" value="<?php print $address2 ?>"><br/>
              
                <label for="city">City:</label>
                <input type="text" name="city" id="city" value="<?php print $city?>"><br/>
              
                <label for="state">State:</label>
                <input type="text" name="state" id="state" value="<?php print $state?>"><br/>
              
                <label for="zipcode">Zipcode:</label>
                <input type="text" name="zipcode" id="zipcode" value="<?php print $zipcode?>"><br/>

                <!-- // Demographic Favs Info -->
                <label for="favorite_candy">Favorite candy:</label>
                <input type="text" name="favorite_candy" id="favorite_candy" value="<?php print $favorite_candy ?>"><br/>
                
                <label for="favorite_drink">Favorite drink:</label>
                <input type="text" name="favorite_drink" id="favorite_drink" value="<?php print $favorite_drink ?>"><br/>

                <label for="favorite_tv_show">Favorite TV Show:</label>
                <input type="text" name="favorite_tv_show" id="favorite_tv_show" value="<?php print $favorite_tv_show ?>"><br/>             

                <!-- // Hobbies      -->
                <div class="group">
                    <label for="hobby1">Hobby 1st:</label>
                    <input type="text" name="hobbies[]" id="hobby1" value="<?php print $hobbies[0]?>"><br/>
                 
                    <label for="hobby2">Hobby 2nd:</label>
                    <input type="text" name="hobbies[]" id="hobby2" value="<?php print $hobbies[1]?>"><br/>
                   
                    <label for="hobby3">Hobby 3rd:</label>
                    <input type="text" name="hobbies[]" id="hobby3" value="<?php print $hobbies[2]?>"><br/>
                </div> 

                <!-- // Pets -->
                <div class="group">
                    <input type="radio" name="has_pets" value="true"> Yes I have pets<br>
                    <input type="radio" name="has_pets" value="false" checked> No I do not have pets<br>
                <hr class="pet">  
                        <label for="pet_names1">Pet name 1st:</label>
                        <input type="text" name="pets[]" id="pet_names1" value="<?php print $pets[0]?>"><br/>
                     
                        <label for="pet_names2">Pet name 2nd:</label>
                        <input type="text" name="pets[]" id="pet_names2" value="<?php print $pets[1]?>"><br/>
                       
                        <label for="pet_names3">Pet name 3rd:</label>
                        <input type="text" name="pets[]" id="pet_names3" value="<?php print $pets[2]?>"><br/>
                 </div> 
                 
                <!-- // Email        -->
                <?php   if ( $invalidEmail ) {  ?>
                            <label for="email" class="errorl">Email:</label>
                            <input type="text" name="email" id="email" class="error" value="<?php print $email ?>"><br/>
                        <?php   } else { ?>
                            <label for="email">Email:</label>
                            <input type="text" name="email" id="email" value="<?php print $email ?>"><br/>
                        <?php   }   ?>              

                <!-- submit button.  -->
                <center class="center">
                    <button type="submit">Submit</button>
                </center>
        <?php } ?>
  </div>
  <div> 
    <?php 

        function listArray($array, $prtString) 
        {   //echo "<br/> ====ENTERING listArraY";
            $prtDataCnt = 0;
            foreach($array as $prtData){ 
                if ( $prtData ) {
                    ++$prtDataCnt; 
                }
            }
                
            if ($prtDataCnt == 0 ) {
                if ($prtString == "In my spare time, I enjoy ") {
                    echo "I am so busy that I do not have any spare time for hobbies,";
                } else if ( $prtString == "I do have pets.  Their names are " ){
                    echo "I do not have pets.";
                }           
            } else 
                if ( $prtString == "I do have pets.  Their names are " && $prtDataCnt == 1 ) {
                    $prtString = "I do have a pet.  The pet's name is "; 
                }
                echo $prtString;
                $loop = 0;
                foreach($array as $prtData){ 
                    if ( $prtData ) {
                        if( $prtDataCnt == 1 ) {
                            if ($loop == 0 ) {
                                echo "$prtData. ";
                            } 
                        } else if ( $prtDataCnt == 2 && $loop < 1 ) {
                            echo "$prtData ";
                        } else if ( $prtDataCnt == 2 && $loop == 1 ) {
                            echo "and $prtData.";
                        } else if ( $prtDataCnt == 3 && $loop < 1 ) {
                            echo "$prtData, ";;
                        } else if ( $prtDataCnt == 3 && $loop == 1 ) {
                            echo "and $prtData.";
                    }
                    ++$loop;
                }
            }
        }
    ?>
  </div>         
</content>