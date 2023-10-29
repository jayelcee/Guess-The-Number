<?php
if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    $randomNumber = mt_rand(1, 9);
    $userGuess = $_POST['guess'];

    if ($userGuess >= 1 && $userGuess <= 9) {
        if ($userGuess == $randomNumber) {
            $message = "Congratulations! You guessed it correctly!";
        } else {
            $message = "Oops! Wrong guess. The random number was $randomNumber.";
        }
    } else {
        $message = "Please enter a number between 1 and 9.";
    }
}
?>

<!DOCTYPE html>
<html>
<head>
    <title>Guess the Number</title>
    <style>
		body {
			margin: 0;
			padding: 0;
			display: flex;
			flex-direction: column;
			align-items: center;
			font-family: Arial, sans-serif;
			font-size: 16px;
		}
        form {
			display: flex;
			flex-direction: column;
			align-items: left;
			background-color: #f2f2f2;
			border-radius: 5px;
			padding: 20px;
			box-shadow: 0 0 10px #ccc;
			max-width: 350px;
			width: 100%;
		}
        input[type="submit"],
		input[type="reset"] {
			background-color: #00b300;
			color: #fff;
			border: none;
			border-radius: 5px;
			padding: 10px 20px;
			cursor: pointer;
			transition: background-color 0.3s;
			margin-bottom: 20px;
		}
		input[type="submit"]:hover,
		input[type="reset"]:hover {
			background-color: #3e8e41;
		}
    </style>
</head>
    <body>
        <h1>Guess the Number</h1>
        <form method="POST" action="">
            <label for="guess">Enter a number from 1 to 9:</label>
            <input type="number" name="guess" min="1" max="9" required>
            <br>
            <input type="submit" value="Submit">
		    <input type="reset" value="Reset">
        </form>
        <?php if (isset($message)): ?>
            <p><?php echo $message; ?></p>
        <?php endif; ?>
    </body>
</html>