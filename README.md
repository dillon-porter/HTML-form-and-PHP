# HTML-form-and-PHP
HTML-form-and-PHP data validation

*This project was from the book - Head first PHP & mySQL by O'rielly.*

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

Attached screenshots of what the form looks like (pre-filled), confirmation page when submitted, followed by the email received from the submitted form to the webserver's email. 
In this case I used xampp and localhost. 

![html form](https://user-images.githubusercontent.com/12597841/113088524-558d3d00-91c0-11eb-8ba8-151a78475d42.png)
![Confirmation-page](https://user-images.githubusercontent.com/12597841/113088538-5d4ce180-91c0-11eb-9ad3-ae1e59fb6632.png)
![email validation](https://user-images.githubusercontent.com/12597841/113088548-650c8600-91c0-11eb-9a7c-3f15936154e6.png)



