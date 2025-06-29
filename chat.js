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

    // Simulate response from chatbot after a delay
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
