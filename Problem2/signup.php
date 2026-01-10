<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <h2>Sign up</h2>
    <form action="validate.php" method="post" enctype="multipart/form-data">
        Full name : <input type="text" name="fname"><br>
        Username  :<input type="text" name="uname"><br>
        Password  :<input type="password" name="password"><br>
        Gender    :
        <input type="radio" name="gender" value="male">male 
        <input type="radio" name="gender" value="female">female 
        <input type="radio" name="gender" value="other">Other <br>

        Country :
        <select name="country">
            <option value="">Select Country</option>
            <option value="Bangladesh">Bangladesh</option>
            <option value="Pakistan">Pakistan</option>
            <option value="Canada">Canada</option>
            <option value="Astralia">Australlia</option>
            <option value="London">London</option>
        </select> <br>
        Profile Picture :
        <input type="file" name="profile">
        <input type="submit" value="click">


    </form>
</body>
</html>
<!-- Create a PHP page named signup.php and it should contain an HTML form with the following 
input fields: Full Name: Textbox, Username: Textbox, Password: Password fields, Gender: 
Radio buttons (Male, Female, Other), Country: Dropdown with at least 5 options, Profile Picture: 
File input for image upload. The action attribute of the form must be set to "validate.php".  -->