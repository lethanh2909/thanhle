<!DOCTYPE html>

<html>
    <head>
        <meta charset="UTF-8">
        <title>Register the courses</title>
    </head>
    <body>
        <form action="doRegister.php" method="post">
            <table>
                <tr>
                    <td>Your name</td>
                    <td><input type="text" name="txtName"></td>
                </tr>
                
                <tr>
                    <td>Course</td>
                    <td>
                        <select name="cbCourse">
                            <option value="C#">C#</option>
                            <option value="Java">Java</option>
                            <option value="Cloud">Cloud</option>                            
                        </select>
                    </td>
                </tr>
                
                <tr>
                    <td>Date of Birth</td>
                    <td><input type="Date" name="dob"></td>
                </tr>
                
                <tr>
                    <td>Gender</td> 
                    <td>
                        <input type="radio" name="gender" value="male" id="male">Male
                        <input type="radio" name="gender" value="female" id="female">Female
                    </td>
                </tr>
                
                <tr>
                    <td>Favorite</td> 
                    <td>
                        <input type="checkbox" name="book" value="book">Books
                        <input type="checkbox" name="car" value="car">Cars
                    </td>
                </tr>
                
                <tr>
                    <td></td>
                    <td><input type="submit" name="Register"></td>
                </tr>
                
            </table>
        </form>
        <?php
        // put your code here
        ?>
    </body>
</html>
