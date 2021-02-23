<?php
require_once 'db.php';

$sql = 'SELECT * FROM timetable WHERE timetable.day="4"';

$result = $pdo->query($sql);

while( $row = $result->fetch(PDO::FETCH_OBJ) ):
?>
<div class="day_card">
    <p><?php echo $row->name; ?></p>
    <p><?php echo $row->start; ?> - <?php echo $row->end; ?></p>
</div>
<?php endwhile; 
