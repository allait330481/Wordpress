<?php
/*
 * Template Name: Allaith
 */

$title = get_the_title();
$content = get_the_content();

render('views/templates/custom.php', compact('title', 'content'));

?>
