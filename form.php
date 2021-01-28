<?php



echo 'username :' . $_POST['user-name'] . '<br>';
echo 'age :' . $_POST['age'] . '<br>';
echo 'password :' . $_POST['password'] . '<br>';
echo 'password repeat :' . $_POST['password-repeat'] . '<br>';

if($_POST['user-name'] === 'james'){
    echo "Bond , James Bond";

}
else {
    echo "bonjour". $_POST['user-name'];
}