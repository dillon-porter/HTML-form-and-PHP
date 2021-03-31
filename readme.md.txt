- Created a web form from HTML and PHP.

- When the user fills out the form they will get a confirmation page of the data that
they submitted, thanking them for filling out the form.

- Labeled each input field by the appropriate id / name to 
create variables for PHP.

- For example: <label for="howlong">How long were you gone?</label>
               <input type="text" id="howlong" name="howlong" />

This would be $how_long = $_POST['howlong']; in the PHP code.

(*Won't work on Github*) however, the mail($to, $subject, $msg) function will email the submitted
data to the owner. I used xampp to test on my local machine.

The $msg code is broken down line by line by using \n so it's easier to read in the email

This was from the book - Head first PHP & mySQL by O'rielly. 