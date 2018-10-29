<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Daffa Raihan Zaki</title>
</head>
<body>
    <form method="post" action="insert.php">
        <table>
            <tr>
        	    <td>id</td>
  	            <td><input type="text" name="Id"></td>
            </tr>
            <tr>
        	    <td>Username</td>
  	            <td><input type="text" name="Username"></td>
            </tr>
            <tr>
        	    <td>Password</td>
  	            <td><input type="text" name="Password"></td>
            </tr>
            <tr>
        	    <td>Level</td>
  	            <td><input type="radio" name="Level" value="Admin">Admin
                    <input type="radio" name="Level" value="User">User
                    <input type="radio" name="Level" value="Guest">Guest
                  </td>
            </tr>
            <tr>
        	    <td>Fullname</td>
  	            <td><input type="text" name="Fullname"></td>
            </tr>
            <tr>
                <td><button>SUBMIT</button></td>
            </tr>
        </table>
    </form>
</body>
</html>