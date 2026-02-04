<?php
include("connection/connection.php");

$basePth = basename($_SERVER['PHP_SELF']);

if ($basePth == "index.php") {
    $id = 1;
} elseif ($basePth == "courses.php") {
    $id = 2;
} elseif ($basePth == "rulesregulation.php") {
    $id = 3;
} elseif ($basePth == "about_us.php") {
    $id = 4;
} elseif ($basePth == "contacts.php") {
    $id = 5;
} else {
    $id = 1;
}

$sql = "SELECT * FROM page WHERE id = '$id'";
$res = mysqli_query($conn, $sql);

if ($res && mysqli_num_rows($res) > 0) {
    $row = mysqli_fetch_assoc($res);

    echo '<title>' . $row['page_title'] . '</title>';
    echo '<meta name="keywords" content="' . $row['met_tags'] . '" />';
    echo '<meta name="description" content="' . $row['meta_description'] . '" />';
} else {
    echo '<title>Library Management System</title>';
}
?>
