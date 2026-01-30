<?php
include("connection/connection.php");

// function to get month name (kept as-is)
function getmonth($mon)
{
    if ($mon == 1) return "January";
    if ($mon == 2) return "February";
    if ($mon == 3) return "March";
    if ($mon == 4) return "April";
    if ($mon == 5) return "May";
    if ($mon == 6) return "June";
    if ($mon == 7) return "July";
    if ($mon == 8) return "August";
    if ($mon == 9) return "September";
    if ($mon == 10) return "October";
    if ($mon == 11) return "November";
    if ($mon == 12) return "December";
}
?>

<h2>Important News</h2>

<?php
$a = date("d");
$b = date("M");
$c = date("y");

// UPDATED QUERY (mysqli)
$sql = "SELECT * FROM news ORDER BY noticedate DESC LIMIT 5";
$res = mysqli_query($conn, $sql);

if ($res && mysqli_num_rows($res) > 0) {
    while ($row = mysqli_fetch_assoc($res)) {

        echo "<article class='col2 pad_left2'>";
        echo "<div class='pad_left1'></div>";

        echo "<div class='wrapper'>";
        echo "<span class='date'>$b</span>";
        echo "<p class='pad_top2'>";
        echo $row['description'];
        echo " <img src='images/new_icon_blink.gif' />";
        echo "</p>";
        echo "</div>";

        echo "</article>";
    }
} else {
    echo "<p>No news available.</p>";
}
?>
