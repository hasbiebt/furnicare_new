   <?php
        ob_start();
        if (isset($_POST['register'])) {
        include_once $_SERVER['DOCUMENT_ROOT'].'/furnicare_new/database/user-dbop.php';
        $objUser = new User();
        $objUser->insert($_POST['full_name'], $_POST['user_name'], $_POST['email'], $_POST['phone_no'], $_POST['password']);
        header('location:./galeri.php');
        }
    ?>