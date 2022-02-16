<?php

// Database

define("DB_HOST", 'localhost');
define("DB_USER", 'root');
define("DB_PASS", '');
define("DB_NAME", 'tweet_academie');

?>

<?php
if (extension_loaded ('PDO')) {
echo 'PDO OK'; 
} else {
echo 'PDO KO'; 
}
?>