<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="styles.css">
    <title>Registration Form</title>
</head>
<body>
 
    <div class="overlay"></div>

    <!--Place holder for the elements of the form-->   
<div class="card-reg">
    
<form action="summary.php" method="POST" class="reg-form">
   <img src="https://www.auf.edu.ph/images/auf-logo.png" alt="">
    <!--name_tb with label-->
    <div class="firstandmiddle">

    <div class="first-name">
    
        <label for="first_name" id="first_name_lbl">First Name:</label>
        <input type="text" id="first_name_tb" name="firstname" required class="Fillout First Name">
        
    </div>

    <div class="middle-name">
    
        <label for="middle_name" id="middle_name_lbl">Middle Name:</label>
        <input type="text" id="middle_name_tb" name="middlename" class="Fillout Middle Name">
        
    </div>
</div>

    <div>
    
        <label for="last_name" id="last_name_lbl">Last Name:</label>
        <input type="text" id="last_name_tb" name="lastname" required class="Fillout Last Name">
        
    </div>
  <!--DOB_ib with label-->

    <div>
        <label for="dob_ib" id="student-name">Date of Birth:</label>
        <input type="date" id="DOB" name="dateofbirth" class="dob_ib">
    </div>

  <!--Phone Number-->

    <div>

    <label for="phone" id="phone_number_lbl">Phone:</label>
    <input type="text" name="country code" id="country_code_tb" value="+63" size="2">
    <input type="text" name="phonenumber" id="phonenumber_tb">
    
    </div>
 
    <fieldset>
        <legend class="sex_lbl">Sex:</legend>
       <div class="gender_holder">

        <div>
            <input type="radio" id="male" name="gender" value="Male" class="male_rb">
            <label for="male" name="male" id="male-lb">Male</label>
        </div>

        <div>
            <input type="radio" id="female" name="gender" value="Female" class="female_rb">
            <label for="female" name="female" id="female-lb">Female</label>
        </div>
       </div>
    </fieldset>

    <!--email input-->
<div>
<label for="email" class="email_lbl">Email:</label>
<input type="email" name="email" id="email_tb" placeholder="example@example.com" class="email_tb">
</div>

    <!--program input-->

<div>
    <label for="program" class="program_lbl">Program:</label>
    <select id="program_slct" name="program">
        <option id="placeholder_prog"value="placeholder" disabled selected>-----Select A Program-----</option>
        <option value="BSA">BS Accountancy</option>  
        <option value="BSBA">BS Business Administration</option>  
        <option value="BSEE">BS Electronics Engineering</option>  
        <option value="BSIT">BS Information Technology</option>  
        <option value="BSCS">BS Computer Science</option>
    </select>
</div>

    <!--address input-->
<div>
    <label for="address" class="address_lbl">Address:</label>
    <textarea id="address" name="address" class="address_textArea" placeholder="Street/House Number/City/Province"></textarea>
</div>

    <!--reset and submit button-->
<div>
<button type="submit" id="submit-btn" class="submit_btn">Submit</button>
<button type="reset" id="reset-btn"class="reset_btn">Reset</button>
</div>
</form>
</div>



</body>
</html>