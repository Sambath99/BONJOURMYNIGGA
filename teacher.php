<?php
$subjects = file("subject.txt", FILE_IGNORE_NEW_LINES);
$teachers = file("teacher.txt", FILE_IGNORE_NEW_LINES);

$count = min(count($teachers), count($subjects));

for ($i = 0; $i < $count; $i++) {
    echo '<h3><input type="checkbox" name="teacher[' . $subjects[$i] . ']" value="' . $teachers[$i] . '"> ' . $subjects[$i] . ' ' . $teachers[$i] . '</h3>';
    echo '<br>';
}
?>
