<?php
$answer = filter_input(INPUT_GET, 'answer', FILTER_VALIDATE_INT);
$rightAnswer = filter_input(INPUT_GET, 'answerHide', FILTER_VALIDATE_INT);
$question = filter_input(INPUT_GET, 'questionHide');

//check for input and if answer to original question is right.
if ($answer === FALSE) {
    $error_message = 'Dude, there needs to be number...';
} elseif ($answer != $rightAnswer) {
    $error_message = 'Try again!!!';
} else {
    $error_message = '';
}
//carried over to index
if ($error_message != '') {
    include('index.php');
    exit();
}

if ($answer === $rightAnswer) {
    $message = 'You got it right!!!';
}

//var_dump($rightAnswer);
//var_dump($answer);
//var_dump($error_message);
?>
<!DOCTYPE html>
<html>
    <head>
        <meta charset="UTF-8">
        <title>Loren Wetzel</title>
        <link rel="stylesheet" type="text/css" href="main.css" />
    </head>  
    <body>
        <main>
            <h1><?PHP echo $message ?></h1>
            
            <h2><?php echo $answer ?></h2>

        </main>
    </body>
</html>