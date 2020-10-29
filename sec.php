<?php

session_start();

if (isset($_SESSION['page_count'])) {
    $_SESSION['page_count'] += 1;
} else {
    $_SESSION['page_count'] = 1;
}
echo 'You refersh the page ' . $_SESSION['page_count'] . 'times';
echo session_save_path();
?>
<?php
unset($_SESSION['page_count']);
?>