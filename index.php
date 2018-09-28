<!DOCTYPE html>
<?php
//1525 Program 1
//
//I approched this the wrong way about. I misread the instructions and still feel I didn't do something right.
//    It works, just not the way I exactly wanted it to. 
//    After you get the right anser you can't refresh and start over.
//I feel there is to many variables here. You may have wanted it simplier.
$operands = array('+', '-', '*', '%');
shuffle($operands);
$ranOperand = $operands[0];
$var = rand(1, 10);
$var2 = rand(1, 10);
$question = "$var $ranOperand $var2";
$answer = eval("return $question;");
//var_dump($question);
//var_dump($answer);
?>
<!DOCTYPE html>
<html>
    <head>
        <meta charset="UTF-8">
        <title>Loren Wetzel</title>
        <link rel="stylesheet" type="text/css" href="main.css" >
    </head>
    <body>
        <main>
            <?php if (!empty($error_message)) { ?>
                <p class="error"><?php
                echo htmlspecialchars($error_message);
            //the next two lines are how I got the same question and anser to be passed back from target.php
                $question = filter_input(INPUT_GET, 'questionHide');
                $answer = filter_input(INPUT_GET, 'answerHide', FILTER_VALIDATE_INT);
                ?></p> <?php } ?>

            <form action="target.php" method="get">

                <h1>Answer the question</h1>
                
                <label><?php echo $question; ?> = </label>
                <input type="text" name="answer"><br>
                
<!--                store answer-->
                <input type="hidden" name="answerHide"
                       value="<?php echo $answer; ?>">
                
<!--                store question-->
                <input type="hidden" name="questionHide"
                       value="<?php echo $question; ?>">

                <input type="submit" value="Check"><br>

            </form>
        </main>
    </body>
</html>
