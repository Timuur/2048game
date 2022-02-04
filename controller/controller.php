<?php
    include './model/model.php';

    session_start();

    $view = empty($_GET['view']) ? 'main' : $_GET['view'];

    switch ($view) {
        case 'main':
            // if (isset($_POST['loginC'])) {
            //     $res = loginCheck();
            //     die(); 
            // };
            // if (isset($_POST['reg'])) {
            //     reg();
            // };
            if (isset($_POST['loginA'])) {
                $res = auth();
                echo $res;
                
                die();
            }
        break;

        case 'profile':
        //     $orders = set("SELECT cats.c_name AS 'cats', orders.o_id AS 'id', orders.o_status AS 'status', orders.o_date AS 'date', orders.o_address AS 'address', orders.o_text AS 'text', orders.o_price_1 AS 'price1', orders.o_price_2 AS 'price2', orders.o_photo_1 AS 'photo1', orders.o_photo_2 AS 'photo2', orders.o_status AS 'status' FROM orders INNER JOIN cats ON cats.c_id = orders.o_cat WHERE orders.o_user = '{$_SESSION['id']}' ORDER BY o_date ASC");
    
        //     if (isset($_GET['del'])) {
        //         $id = clear($_GET['del']);
        //         deleteOrders($id);
        //         header("Location: /?view=profile");
        //     }
    
        //     $cats = set("SELECT * FROM cats");
    
        //     if (isset($_POST['addOrders'])) {
        //         addOrders();
        //     }
            break;
        
        case '404':

        break;
        default:
            header("Location: /");
        break;
    }

    include './view/index.php'

?>

