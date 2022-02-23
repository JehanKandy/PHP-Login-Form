<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
    <style>
        fieldset{
            width: 15%;
        }
    </style>
</head>
<body>
    <form action="login.php" method="POST">
        <center>
        <fieldset>
            <legend>Login</legend>
            
        <table>
            <tr>
                <td>
                    <label>Username : </label>
                </td>
            </tr>
            <tr>
                <td>
                    <input type="text" name="user" placeholder="Username" class="form-control">
                </td>
            </tr>
            <tr>
                <td>
                    <label>Password : </label>
                </td>
            </tr>
            <tr>
                <td>
                    <input type="password" name="pass" class="form-control" placeholder="Password">
                </td>
            </tr>
            <tr>
                <td>
                    <input type="submit" value="Login" class="btn btn-primary">
                </td>
            </tr>
        </table>
    </form>
    </fieldset>
    </center>
</body>
</html>