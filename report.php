<html>
<head>
    <title>Aliens Abducted Me - Report an Abduction</title>
</head>
<body>
    <h2>Aliens Aducted Me - Report an Abduction</h2>

    <!-- PHP Script for the form. -->

    <?php
        $when_it_happened = $_POST['whenithappened'];
        $name = $_POST['firstname']. ' ' . $_POST['lastname'];
        $lastname = $_POST['lastname'];
        $how_many = $_POST['howmany'];
        $what_they_did = $_POST['whattheydid'];
        $how_long = $_POST['howlong'];
        $alien_description = $_POST['aliendescription'];
        $fang_spotted = $_POST['fangspotted'];
        $email = $_POST['email'];
        $other = $_POST['other'];

        $to = 'email@gmail.com';
        $subject = 'Aliens Abducted Me - Abduction Report';
        $msg = "$name was abducted $when_it_happened and was gone for $how_long.\n" .
        "Number of alien: $how_many\n" . 
        "What they did: $what_they_did\n" . 
        "Fang spotted: $fang_spotted\n" . 
        "Other comments: $other\n";
        mail($to, $subject, $msg, 'From:' . $email);

        echo 'Thanks for submitting the form, ' . $name . '<br />';
        echo 'You were abducted ' . $when_it_happened;
        echo ' and were gone for ' . $how_long . '<br />';
        echo 'How many did you see? ' . $how_many . '<br />';
        echo 'What did they do to you? ' . $what_they_did . '<br />';
        echo 'Describe them: ' . $alien_description . '<br />';
        echo 'Was Fang there? ' . $fang_spotted . '<br />';
        echo 'Other comments: ' . $other . '<br />'; 
        echo 'Your email address is ' . $email;
    ?>


</body>
</html>