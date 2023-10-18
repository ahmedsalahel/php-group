<?php


if(isset($_GET['salutation'])){
    $salutation = $_GET['salutation'];
    $firstName = $_GET['firstName'];
    $lastName = $_GET['lastName'];
    $gender = $_GET['gender'];
    $email = $_GET['email'];
    $birthDate = $_GET['birthDate'];
    $address = $_GET['address'];
    
    echo "<br>";

        echo "Salutation: " . $salutation . "<br>";
        echo "First Name: " . $firstName . "<br>";
        echo "last Name: " . $lastName . "<br>";
        echo "Gender: " . $gender . "<br>";
        echo "Email: " . $email . "<br>";
        echo "Birth Date: " . $birthDate . "<br>";
        echo "Address: " . $address . "<br>";

}
?>

<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<meta http-equiv="X-UA-Compatible"
		content="IE=edge">
	<meta name="viewport"
		content="width=device-width, initial-scale=1.0">
	<title>Document</title>
</head>

<body>
	<form>
		<fieldset>
			<legend>Personal Details</legend>
			<p>
				<label>
					Salutation
					<br />
					<select name="salutation">
						<option>--None--</option>
						<option>Mr</option>
						<option>Dr</option>
						<option>Eng</option>
					</select>
				</label>
			</p>

			<p>
				<label>First name: <input name="firstName" /></label>
			</p>

			<p>
				<label>Last name: <input name="lastName" /></label>
			</p>

			<p>
				Gender :
				<label><input type="radio" name="gender"
							value = "male" /> Male 
				</label>
				<label><input type="radio" name="gender"
							value = "female" /> Female 
				</label>
			</p>

			<p>
				<label> Email:<input type="email" name="email" /> </label>
			</p>

			<p>
				<label>Date of Birth:<input type="date" name="birthDate" ></label>
			</p>

			<p>
                <label>Address :<br /> <textarea name="address" cols="40" rows="5"> </textarea>
				</label>
			</p>

			<p>
				<button type="submit">Submit</button>
			</p>
		</fieldset>
	</form>
</body>
</html>
