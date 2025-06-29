<?php
// sanitize user input
$user_name = htmlspecialchars($_POST['user_name']);
$cat_name = htmlspecialchars($_POST['cat_name']);

// heading
echo "<div id='header'>";
echo "<h1>Talk to your virtual cat</h1>";
echo "</div>";
// content
echo "<div id='chat-content'>";
// ascii art cat
echo "<div id='cat'>";
echo "<pre>";
// load from text file
$myfile = fopen("cat.txt", "r") or die("Unable to open file!");
echo fread($myfile,filesize("cat.txt"));
fclose($myfile);
echo "</pre>";
echo "</div>";
// chat display area
echo "<div id='chat'>";

echo "</div>";
echo "</div>";
// chat input area
echo "<div id='chat-input'>";
echo "<input type='text' id='user_input' placeholder='Type your message here...' required>";
echo "<button id='send_button' onclick=\"sendMessage()\">Send</button>";
echo "</div>";
// footer
echo "<div id='footer'>";
echo "<p>&copy; 2025 Britta Haupt</p>";
echo "<script type='text/javascript' src='chat.js'></script>";
echo "</div>";
?>