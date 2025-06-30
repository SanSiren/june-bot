window.onload = function () {
  leaveTimer(); // it's a cat. It won't stay for long
}

function sendMessage() {
  let userInput = document.getElementById('user_input');
  let messageText = userInput.value.trim();
  if (messageText === '') {
    return;
  }
  let chatBox = document.getElementById('chat');
  let userMessage = document.createElement('div');
  userMessage.textContent = messageText;
  userMessage.classList.add('chat', 'sent');
  chatBox.appendChild(userMessage);
  // reply from the chatbot
  // TODO cat reply
  setTimeout(() => {
    let chatbotResponse = document.createElement('div');
    chatbotResponse.textContent = 'Hey there! How can i help you !';
    chatbotResponse.classList.add('chat-message', 'received');
    chatBox.appendChild(chatbotResponse);
    // Scroll to bottom of chat box
    chatBox.scrollTop = chatBox.scrollHeight;
  }, 1000);
  userInput.value = ''; // Clear user input after sending message
}

// TODO: maybe randomize this a bit?
function leaveTimer() {
  // const timer = 10000; // 5 minutes in milliseconds
  const timer = 300000; // 5 minutes in milliseconds
  setTimeout(() => {
    let chatBox = document.getElementById('chat');
    let leaveMessage = document.createElement('div');
    leaveMessage.textContent = 'Your cat left the room.';
    leaveMessage.classList.add('chat', 'received');
    chatBox.appendChild(leaveMessage);
    chatBox.scrollTop = chatBox.scrollHeight; // Scroll to bottom of chat box
    setTimeout(() => {
          history.back(); // Go back to the previous page
    }, 2000); // delay before going back to show leave message
  }, timer);
}

function catReply() {

}