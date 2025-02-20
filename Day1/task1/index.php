<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <form action="./srever.php" method="post">
        <div style="margin: 10px;">
        <label for="name">Name</label>
        <input type="text" name="name" placeholder="Enter name" id="name" style="margin-left:20px ;" >
        </div>
        <div style="margin: 10px;">
        <label for="email">Email</label>
        <input type="email" name="email" placeholder="Enter name" id="email" style="margin-left:20px ;">
        </div>
        <div style="width: 300px; display:flex;margin: 10px; justify-content: space-between;">
        <label for="adress" style="margin-top: 0;">Adress</label>
        <textarea name="" id="adress" rows="10" cols="30"></textarea>
        </div>
        <div style="display: flex; width: 300px; margin-top:20px">
        <label for="select">Country</label>
        <select name="select" id="select" style="width: 150px; margin-left: 15px;" >
             <option value="Egypt">Egy</option>
             <option value="Egypt">Egy</option>
             <option value="USA">USA</option>
        </select>
        </div>
        <div style="width:300px; margin-top:20px">
            <label for="gender" >Gender</label>
            <label for="male" style="margin-left: 15px;">Male</label>
            <input type="radio" name="gender" id="male" value="male">
            <label for="female">Female</label>
            <input type="radio" name="gender" id="female" value="female">
        </div>

        <div style="width:350px; display: flex; margin-top:20px;">
            <label for="">Courses</label>
            <div style="margin-left: 15px;">
            <label for="mysq">
            mysql
            <input type="checkbox" name="mysql" id="mysq" value="mysql"> 
            </label>
            
            <label for="php">
            php
            <input type="checkbox" name="php" id="php" value="php"> 
            </label>
            <label for="linux">
            linux
            <input type="checkbox" name="linux" id="linux" value="linux"> 
            </label>
            <label for="java">
            java
            <input type="checkbox" name="java" id="java" value="java"> 
            </label>
            </div>
        </div>

        <div style="margin-top: 20px;">
        <label for="username">User Name</label>
        <input type="text" name="username" placeholder="Enter name" id="username" style="margin-left:20px ;" >
        </div>
        <div style="margin-top: 20px;">
        <label for="pass">Passowrd</label>
        <input type="password" name="password" placeholder="Enter password" id="pass" style="margin-left:35px ;" >
        </div>
        <div style="margin-top: 20px;">
        <label for="depary">Department</label>
        <input type="text" name="depart" placeholder="dwpartment" id="depary" style="margin-left:20px ;" >
        
        <div>
        <h4 style="margin-left: 50px;">jj54llj</h4>
        <input type="text" style="margin-left: 50px;" name="human"><label for="">please enter the code in th box</label>
        </div>
        
        </div>
        <div style="margin-top: 20px; margin-left: 50px;">
        <button type="submit">submit</button>
        <button type="reset">Reset</button>
        </div>
        
    </form>
</body>
</html>