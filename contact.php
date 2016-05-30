<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Title</title>

    <link rel="stylesheet" href="css\style.css">
</head>

<body>
    <header>
        <div id="logo" class="menuUp">
            <h1>Muruganantha Tamil School</h1>
            <div id="navToggle"><a href="#">Menu</a></div>
        </div>
        <nav>
            <ul>
                <li><a href="index.html">Home</a></li>
                <li><a href="event.html">Event</a></li>
                <li>
                    <a href="#">Photos <span class="toggle">Expand</span><span class="caret"></span></a>
                    <nav>
                        <ul>
                            <li><a href="#">2016</a></li>
                        </ul>
                    </nav>
                </li>
                <li><a href="#">About</a></li>
                <li><a href="contact.php">Contact</a></li>
            </ul>
        </nav>
    </header>
    <article>
	<?php
		//if "email" variable is filled out, send email
		if (isset($_REQUEST['email']))  {
			//Email information
			$admin_email = 'vsayan@hotmail.com';
			$email = $_REQUEST['email'];
			$phone = $_REQUEST['phone'];
			$message = $_REQUEST['message'];
			$subject = 'TEST';


			//send email
			if (mail($admin_email, $phone, $message, "From:" . $email)) {
				//Email response
				echo "<p id='message' style='color: green'>Thank you for contacting us!</p>";
			}else {
				echo "<p id='message style='color: red'>There was an error!</p>";
				echo "<a href='contact.php'>Try again!</a>";
			}
		}
		  //if "email" variable is not filled out, display the form
		  else  {
		?>
        <form id="contact-form" method="post" action="contact.php" >
            <h3 id="formTitel">Contact</h3>
            <h4>Fill in the form below, and we'll get back in to you.</h4>
            <div>
                <label>
                    <span>Name: *</span>
                    <input name="name" placeholder="Please enter your name" type="text" tabindex="1" required autofocus>
                </label>
            </div>
            <div>
                <label>
                    <span>Email: *</span>
                    <input name="email" placeholder="Please enter your email address" type="email" tabindex="2" required>
                </label>
            </div>
            <div>
                <label>
                    <span>Telephone: </span>
                    <input name="phone" placeholder="Please enter your number" type="tel" tabindex="3">
                </label>
            </div>
            <div>
                <label>
                    <span>Message: *</span>
                    <textarea name="message" placeholder="Include all the details you can" tabindex="4" required></textarea>
                </label>
            </div>
            <div>
                <button name="submit" type="submit" id="contact-submit" >Send Email</button>
            </div>
        </form>
		<?php
		}
	?>
    </article>
</body>
</html>