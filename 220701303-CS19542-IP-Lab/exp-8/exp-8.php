<!DOCTYPE html>
<html lang="en">
<head>
    <title>SERVLET</title>
    <style>
        .reg{
            margin-left: 350px;
            margin-right: 350px;
            background-color: aquamarine;
            font-size: larger;
        }
        .reg label{
            display: inline-block;
            width: 120px;
            margin-right: 10px;
            margin-left: 180px;
        }
       h2{
        text-align: center;
       }
       .reg input[type="reset"]{
        width: 90px;
        margin-left: 280px;
       }
       .reg input[type="submit"]{
        width: 90px;
        margin-left: 50px;
       }
       .error{
        color: red;
        font-size: 12px;
        margin-left: 300px;
       }
    </style>
</head>        
<body>
    
    <div class="reg">
    <h2>COURSE REGISTRATION FORM</h2><br>
    <form method="get" action="Jdbc.php" name="f1">
        <label>Name: </label><input type="text" name="n" required><br><br><br>
        <label>Age: </label><input type="text" name="age" required><br><br><br>
        <label>DOB: </label><input type="date" name="dob" required><br><br><br>
        <label>Phone_no: </label><input type="text" name="pn" required><br><br><br>
        <label>Course_name: </label><input type="text" name="cn" required><br><br><br>
        <label>Course_code: </label><input type="text" name="cc" required><br><br><br>
        <label>Course_credit: </label><select  name="cre" required><option value=" "> </option> <option value="1">1</option>
            <option value="2">2</option><option value="3">3</option>
            <option value="4">4</option></select><br><br><br>
        <label>Year: </label><select name="yr" required><option value=" "> </option><option value="2022-2023">2022-2023</option>
            <option value="2023-2024">2023-2024</option><option value="2024-2025">2024-2025</option>
            <option value="2025-2026">2025-2026</option></select><br><br><br>
            <input type="reset" value="Cancel"> 
            <input type="submit" value="Submit">
            <br><br>
    </form>
    </div>
</body>
</html>
