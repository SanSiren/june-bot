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
echo "<script>";
echo "window.onload = function () {";
echo "  leaveTimer();"; // it's a cat. It won't stay for long
echo "};";

echo "function sendMessage() {";
echo "  let userInput = document.getElementById('user_input');";
echo "  let messageText = userInput.value.trim();";
echo "  let sounds = " . json_encode($sounds) . ";";
echo "  let phrases = " . json_encode($phrases) . ";";
echo "  let api_url = '" . $api_url . "';";

echo "  if (messageText === '') {";
echo "    return;";
echo "  }";

// user message";
echo "  let chatBox = document.getElementById('chat');";
echo "  let userMessage = document.createElement('div');";
echo "  userMessage.textContent = messageText;";
echo "  userMessage.classList.add('chat', 'sent');";
echo "  chatBox.appendChild(userMessage);";

// reply from the c(h)atbot";
echo "  setTimeout(() => {";
// check for known commands
echo "    if (phrases.includes(messageText)) {";
// ask API for decision
echo "      fetch(api_url)";
echo "        .then(response => response.json())";
echo "        .then(data => {";
echo "          let decision = data.response;";
echo "          console.log('Decision from API: ', decision);";
echo "          let chatbotResponse = document.createElement('div');";
echo "          if (decision) {";
// if true == yes => purr
echo "            chatbotResponse.innerHTML = '<i>purr</i>';";
echo "          } else {";
// if false == no => hiss
echo "            chatbotResponse.innerHTML = '<i>hiss</i>';";
echo "          }";
echo "          chatbotResponse.classList.add('chat', 'received');";
echo "          chatBox.appendChild(chatbotResponse);";
echo "          chatBox.scrollTop = chatBox.scrollHeight;"; // Scroll to bottom of chat box
echo "        })";
// return a random sound
echo "    } else {";
echo "      let sound = sounds[Math.floor(Math.random() * sounds.length)];";
echo "      let chatbotResponse = document.createElement('div');";
echo "      chatbotResponse.textContent = sound;";
echo "      chatbotResponse.classList.add('chat', 'received');";
echo "      chatBox.appendChild(chatbotResponse);";
echo "      chatBox.scrollTop = chatBox.scrollHeight;"; // Scroll to bottom of chat box
echo "    }";
echo "  }, 1000);";
echo "  userInput.value = '';"; // Clear user input after sending message
echo "}";

// TODO: maybe randomize this a bit?
echo "function leaveTimer() {";
//echo "  const timer = 10000;"; // for debugging purposes only
echo "  const timer = 300000;";// 5 minutes in milliseconds
echo "  setTimeout(() => {";
echo "    let chatBox = document.getElementById('chat');";
echo "    let leaveMessage = document.createElement('div');";
echo "    leaveMessage.innerHTML = '$cat_name has left the c(h)at room. <br> Bye bye $cat_name!';";
echo "    leaveMessage.classList.add('chat', 'received');";
echo "    chatBox.appendChild(leaveMessage);";
echo "    chatBox.scrollTop = chatBox.scrollHeight;"; // Scroll to bottom of chat box
echo "    setTimeout(() => {";
echo "          history.back();"; // Go back to the previous page
echo "    }, 5000);"; // delay before going back to show leave message
echo "  }, timer);";
echo "}";

echo "</script>";
echo "</div>";
?>