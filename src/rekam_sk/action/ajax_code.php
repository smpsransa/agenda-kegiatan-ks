<?php require_once("../../connection.php") ?>

<?php
$code_id = $_POST['code_id'];
$sql = "SELECT * FROM statement_code WHERE id='$code_id';";
$query = mysqli_query($db, $sql);

if (mysqli_num_rows($query) > 0) {
    while ($data = mysqli_fetch_array($query)) {
        $response = array($data['description'], $data['more']);
        echo (json_encode($response));
    }
}
