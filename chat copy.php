<?php
// sanitize user input
$user_name = htmlspecialchars($_POST['user_name']);
$cat_name = htmlspecialchars($_POST['cat_name']);

// API URL
$api_url = "https://gotev.github.io/no-as-a-service/request.json";

// regular cat sounds
$sounds = array("meow", "mrrp", "chirp", "brrrrrrrp", "mrrp", "meow", "chirp");

// phrases the cat understands
$phrases = array("$cat_name come",
                "$cat_name come here",
                "$cat_name get off the counter",
                "$cat_name get off the table",
                "$cat_name get off the chair",
                "$cat_name get off the sofa",
                "$cat_name can I pet you",
                "come",
                "come here",
                "get off the counter",
                "get off the table",
                "get off the chair",
                "get off the sofa",
                "can I pet you"
                );

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
echo "<script src='chat.js'></script>";
echo "</div>";

?>