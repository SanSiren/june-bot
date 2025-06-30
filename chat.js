window.onload = function () {
  leaveTimer(); // it's a cat. It won't stay for long
}

function sendMessage() {
  let userInput = document.getElementById('user_input');
  let messageText = userInput.value.trim();

  let sounds = ["meow", "mrrp", "chirp", "brrrrrrrp", "mrrp", "meow", "chirp"];
  let phrases = ["come", "come here"];
  let api_url = "https://gotev.github.io/no-as-a-service/request.json"; // replace with your API URL

  if (messageText === '') {
    return;
  }

  // user message
  let chatBox = document.getElementById('chat');
  let userMessage = document.createElement('div');
  userMessage.textContent = messageText;
  userMessage.classList.add('chat', 'sent');
  chatBox.appendChild(userMessage);

  // reply from the c(h)atbot
  setTimeout(() => {
    if (phrases.includes(messageText)) {
      fetch(api_url)
        .then(response => response.json())
        .then(data => {
          let decision = data.response;
          console.log('Decision from API: ', decision);
          let chatbotResponse = document.createElement('div');
          if (decision) {
            chatbotResponse.innerHTML = '<i>purr</i>';
          } else {
            chatbotResponse.innerHTML = '<i>hiss</i>';
          }
          chatbotResponse.classList.add('chat', 'received');
          chatBox.appendChild(chatbotResponse);
          chatBox.scrollTop = chatBox.scrollHeight; // Scroll to bottom of chat box
        })
    } else {
      let sound = sounds[Math.floor(Math.random() * sounds.length)];
      let chatbotResponse = document.createElement('div');
      chatbotResponse.textContent = sound;
      chatbotResponse.classList.add('chat', 'received');
      chatBox.appendChild(chatbotResponse);
      chatBox.scrollTop = chatBox.scrollHeight; // Scroll to bottom of chat box
    }
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
