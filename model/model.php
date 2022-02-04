<?php

function jsons($item) {
    return json_decode(json_encode($item));
}

function clear($item) {
	return trim(strip_tags(htmlspecialchars($item)));
}


function set ($query) {
    global $conn;
    $q = $conn->query("$query");
    $data = [];
    while ($row = $q->fetch_assoc()) {
        $data[] = $row;
    }
    return jsons($data);
}

// function loginCheck(){
//     $login = clear($_POST['loginC']);

//     $user = set("SELECT u_id, u_login FROM users where u_login = '{$login}'");

//     if (empty($user)) {
//         return 'yes';
//     } else {
//         return 'not';
//     }
// }
// function reg() {
//     $fio = clear($_POST['fio']);
//     $login = clear($_POST['login']);
//     $email = clear($_POST['email']);
//     $pass = clear($_POST['pass1']);
//     $pass = md5($pass);

//     global $conn;
//     $conn->query("INSERT INTO users(u_fio, u_login, u_email, u_password) VALUES ('{$fio}', '{$login}', '{$email}', '{$pass}')");
//     if ($conn->affected_rows > 0 ) {
//         header("Location: /");
//     } else {
//         echo $conn->error;
//     }
// } 
function auth() {
	$login = clear($_POST['loginA']);
	$pass = clear($_POST['pass']);
	$pass = md5($pass);

	$user = set("SELECT * FROM users WHERE u_login = '$login' AND u_password = '$pass'");
	if (!empty($user)) {
		return 'yes';
	} else {
		return 'no';
	}
}

// function deleteOrders($id) {
// 	global $conn;
// 	$conn->query("DELETE FROM orders WHERE o_id = '{$id}'");
// }

// function addOrders() {
// 	$cat = clear($_POST['cat']);
// 	$address = clear($_POST['address']);
// 	$text = clear($_POST['text']);
// 	$price = clear($_POST['price']);
// 	$photo = clear($_POST['photo']);

// 	if (!empty($_FILES)) {
// 		if ($_FILES['photo']['size'] < 2097152) {
// 			if ($_FILES['photo']['type'] == 'image/jpeg' || $_FILES['photo']['type'] == 'image/png' || $_FILES['photo']['type'] == 'image/bmp') {
// 				$uploaddir = 'C:/Users/safarov/Desktop/OSPanel/domains/de/views/img/orders/';
// 				$uploadfile = $uploaddir . basename($_FILES['photo']['name']);
// 				move_uploaded_file($_FILES['photo']['tmp_name'], $uploadfile);

// 				global $conn;
// 				$conn->query("INSERT INTO orders(o_cat, o_address, o_text, o_price_1, o_photo_1, o_user) VALUES ('$cat', '$address', '$text', '$price', '{$_FILES['photo']['name']}', '{$_SESSION['id']}')");
// 				if ($conn->affected_rows > 0) {
// 					return;
// 				} else {
// 					echo $conn->error;
// 				}
// 			} else {
// 				$error = 'Несоответствует тип файла';
// 				return $error;
// 			}		
// 		} else {
// 			$error = 'Размер файла превышает допустимый';
// 			return $error;
// 		}

// 	}
// }
?>