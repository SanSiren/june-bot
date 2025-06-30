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
echo "<script>";
echo "window.onload = function () {";
echo "  leaveTimer();"; // it's a cat. It won't stay for long
echo "};";

echo "function sendMessage() {";
echo "  let userInput = document.getElementById('user_input');";
echo "  let messageText = userInput.value.trim();";
echo "  if (messageText === '') {";
echo "    return;";
echo "  }";
echo "  let chatBox = document.getElementById('chat');";
echo "  let userMessage = document.createElement('div');";
echo "  userMessage.textContent = messageText;";
echo "  userMessage.classList.add('chat', 'sent');";
echo "  chatBox.appendChild(userMessage);";
// reply from the chatbot
// TODO cat reply
echo "  setTimeout(() => {";
echo "    let chatbotResponse = document.createElement('div');";
echo "    chatbotResponse.textContent = 'Hey there! How can i help you !';";
echo "    chatbotResponse.classList.add('chat-message', 'received');";
echo "    chatBox.appendChild(chatbotResponse);";
// Scroll to bottom of chat box
echo "    chatBox.scrollTop = chatBox.scrollHeight;";
echo "  }, 1000);";
echo "  userInput.value = ''; "; // Clear user input after sending message
echo "}";


// TODO: maybe randomize this a bit?
echo "function leaveTimer() {";
//echo "  const timer = 10000;";
echo "  const timer = 300000;";// 5 minutes in milliseconds
echo "  setTimeout(() => {";
echo "    let chatBox = document.getElementById('chat');";
echo "    let leaveMessage = document.createElement('div');";
echo "    leaveMessage.textContent = 'Your cat left the room.';";
echo "    leaveMessage.classList.add('chat', 'received');";
echo "    chatBox.appendChild(leaveMessage);";
echo "    chatBox.scrollTop = chatBox.scrollHeight;"; // Scroll to bottom of chat box
echo "    setTimeout(() => {";
echo "          history.back();"; // Go back to the previous page
echo "    }, 2000);"; // delay before going back to show leave message
echo "  }, timer);";
echo "}";

// generate reply from the cat
echo "function catReply() {";
echo "}";

echo "</script>";
echo "</div>";
?>