<?php
var_dump($_GET);
echo "<br>";
if(isset($_GET['username'])){
    $Username = $_GET['username'];
    $Password = $_GET['password'];
    $City = $_GET['city'];
    $webServer = $_GET["web"];
    $Role = $_GET['job'];
    $Single = $_GET['sign'];
    
    echo "<br>";

    echo "Username: " . $Username . "<br>";
        echo "Password: " . $Password . "<br>";
        echo "City of Employment: " . $City . "<br>";
        echo "Web server: " . $webServer . "<br>";
        echo "Role: " . $Role . "<br>";
        echo "Single sign-on: " . $Single . "<br>";

}

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
    <body>
        <form  method="get"    action="">
            <p>
                <label for="user">username:
                    <input type="text" id="user" name="username"  />
                </label>
            </p>

            <p>
                <label for="pass">Password :
                    <input type="password" id="pass" name="password"  />
                </label>
            </p>

            <p>
                <label for="city">City of Employment:
                    <input type="text" id="city" name="city"  />
                </label>
            </p>

            <p>
                <label for="web"> Web server: 
                    <select value="Web server" id="web" name ='web'>
                    <option value="-choose a server">-choose a server-</option>
                    <option value="Java">Java</option>
                    <option value="Jigsaw">Jigsaw</option>
                    </select>
                </label>
            </p>

            <p>
                <label>please specify your role:
                        <p>
                            <input type="radio" id="ad" name="job" value="Admin" />
                            <label for="ad">Admin</label>
                    
                        </p>

                    <p>
                        <input type="radio" id="en" name="job" value="Engineer" />
                        <label for="en">Engineer</label>
                        
                    </p>
                    
                    <p>
                        <input type="radio" id="Ma" name="job" value="Manager">
                        <label for="Ma">Manager</label>
                        
                    </p> 
                        <input type="radio" id="gu" name="job" value="Guest">
                        <label for="gu">Guest</label> 
                </label>        
            </p>
            
            <p>
                <label>Single sign-on:

                        <p>
                            <input type="checkbox" id="Ma" name="sign" value="Mail" />
                            <label for="Ma">Mail</label>
                        </p>

                        <p>
                            <input type="checkbox" id="pa" name="sign" value="Payroll" />
                            <label for="pa">Payroll</label>
                        </p>
                    
                        <p>
                            <input type="checkbox" id="Se" name="sign" value="Self-service">
                            <label for="Se">Self-service</label>
                        </p>
                    </label>    
            </p>
            
                <p>
                    <input type="reset" value="Reset" />
                    <input type="submit" value="login"/> 
                </p>
            </form>    
    </body>
</html>