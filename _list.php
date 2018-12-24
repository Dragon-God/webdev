<?
    function retrieveUserProfile()
    {
        $user[] = "Jason Gilmore";
        $user[] = "jason@example.com";
        $user[] = "English";
        return $user;
    }
    list($name, $email, $language) = retrieveUserProfile();
    echo "Name: {$name}, email: {$email}, language: {$language} <br>";
?>

<?=var_dump(retrieveUserProfile([0]))?>