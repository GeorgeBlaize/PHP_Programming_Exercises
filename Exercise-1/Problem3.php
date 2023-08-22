<form method="post">
    Enter a Number: <input type="text" name="input">
    <input type="submit" name="submit" value="calculate">
</form>

<?php
// Prime number using FORM in PHP

if ($_POST && isset($_POST['input'])) {
    $input = $_POST['input'];
    $is_prime = true;

    if ($input <= 1) {
        $is_prime = false;
    } else {
        for ($i = 2; $i <= sqrt($input); $i++) {
            if ($input % $i == 0) {
                $is_prime = false;
                break;
            }
        }
    }

    if ($is_prime) {
        echo 'The number ' . $input . ' is prime.';
    } else {
        echo 'The number ' . $input . ' is not prime.';
    }
}
?>
