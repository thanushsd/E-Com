<?php include '../sql/conn.php'; ?>

<?php 
$sth = mysqli_query($conn, "SELECT * FROM advertise ");
$rows = array();
while($r = mysqli_fetch_assoc($sth)) {
    $rows[] = $r;
}
echo json_encode($rows);
?>