<?php

$firstname = htmlspecialchars($_POST['firstname']);
$middlename = htmlspecialchars($_POST['middlename']);
$lastname = htmlspecialchars($_POST['lastname']);
$dateofbirth = htmlspecialchars($_POST['dateofbirth']);
$gender = htmlspecialchars($_POST['gender']);
$program = htmlspecialchars($_POST['program']);
$address = htmlspecialchars($_POST['address']);

if ($gender === 'Male'){
    $backgroundColor = 'background-color: blue;';
    $color = 'color: white;';
} else {
    $backgroundColor = 'background-color: red;';
    $color = 'color: white;';
}
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Registration Summary</title>
    <style>
        body {
            display: flex; 
            flex-direction: column; 
            align-items: center;
            justify-content: center; 
            min-height: 100vh; 
            margin: 0; 
            background-image: url('https://imgs.search.brave.com/jsgfz900vZA5emNjzAiNYF4HSQdeirlpCvMsKQ9jExk/rs:fit:860:0:0:0/g:ce/aHR0cHM6Ly91cGxv/YWQud2lraW1lZGlh/Lm9yZy93aWtpcGVk/aWEvY29tbW9ucy8x/LzE3L0FuZ2VsZXNf/VW5pdmVyc2l0eV9G/b3VuZGF0aW9uXyhN/YWNBcnRodXJfSGln/aHdheSxfQW5nZWxl/cyxfUGFtcGFuZ2E7/XzA1LTI3LTIwMjMp/LmpwZw'); 
            background-size: cover; 
            background-repeat: no-repeat; 
            background-position: center; 
            font-family: sans-serif;
        }

        .overlay {
            background-color: rgba(255, 255, 255, 0.5); 
            height: 100%; 
            width: 100%; 
            position: absolute; 
            top: 0; 
            left: 0; 
            z-index: 1; 
        }
        
        td, th {
            border: 1px solid #dddddd;
            text-align: left;
            padding: 8px;
        }

        table {
            font-family: arial, sans-serif;
            border-collapse: collapse;
            width: 42rem;
        }

        .contents {
            position: relative; 
            z-index: 2; 
            color: black; 
            background-color: rgb(255, 255, 255);
            padding: 1rem;
            border-radius: 8px;
            width: 100%;
            max-width: 42rem;
       
        }

        #btn {
            padding: 5px;
            background-color: white;
            border: 2px solid blue;
            border-radius: 10px;
            width: 5rem;
            font-size: 16px;
            color: blue;
            margin-top: 20px;
        }

        a {
            display: block;
            text-decoration: none;
            color: blue;
            margin-top: 20px;
            text-align: center;
        }
        a:hover{
        color: white;
        background-color: blue;
   
        }
        #gender{
            <?php echo $backgroundColor; ?>
            <?php echo $color; ?>
        }
        .auf-logo {
            display: flex;
            align-items: center;
            justify-content: center;
            gap: 10px; 
            width: 100%; 
            max-width: 300px; 
            margin-bottom: 20px;
            z-index: 3;
        }

        .auf-logo img {
            width: 100px; /* Adjust size as needed */
            height: auto; /* Maintain aspect ratio */
        }
    </style>
</head>
<body>
    <div class="auf-logo">
    <img src="https://www.auf.edu.ph/images/auf-logo.png" alt="">
    <img src="https://scontent.fmnl3-2.fna.fbcdn.net/v/t39.30808-6/348678316_944280080227786_3314515005836647213_n.jpg?_nc_cat=105&ccb=1-7&_nc_sid=6ee11a&_nc_ohc=IQ_A81atq2gQ7kNvgF_FMAZ&_nc_ht=scontent.fmnl3-2.fna&cb_e2o_trans=t&oh=00_AYCIPjUOF5PT7TmLd0RffoaJEt9itkutcmR8msX9Npg_yA&oe=66BC1F5F" alt="">
    </div>
    <div class="overlay"></div>
    <div class="contents">

        <h1>Registration Summary</h1>

        <table>
            <tr>
                <td>First Name:</td>
                <td><?php echo $firstname; ?></td>
            </tr>
            <tr>
                <td>Middle Name:</td>
                <td><?php echo $middlename; ?></td>
            </tr>
            <tr>
                <td>Last Name:</td>
                <td><?php echo $lastname; ?></td>
            </tr>
            <tr>
                <td>Date of Birth:</td>
                <td><?php echo $dateofbirth; ?></td>
            </tr>
            <tr>
                <td>Gender:</td>
                <td id="gender"><?php echo $gender; ?></td>
            </tr>
            <tr>
                <td>Program:</td>
                <td><?php echo $program; ?></td>
            </tr>
            <tr>
                <td>Address:</td>
                <td><?php echo $address; ?></td>
            </tr>
        </table>
        <a href="index.php" id="btn">Back</a>
    </div>
</body>
</html>
