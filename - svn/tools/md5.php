<?php
$input = htmlspecialchars($_POST["input"]);
$full = md5($input);
$short = substr($full, 0, 6);
?>

<form action='md5.php' method='post'>
    <p>
        Input: <input type='text' name='input' value='<?php echo $input ?>' size='50'>
        <input type='submit' value='Submit'>
        <hr />
    </p>
    <p>
        Full : <?php if ($input != "") echo $full ?>
   </p>
    <p>
        Short : <?php if ($input != "")  echo $short ?>
    </p>
</form>

