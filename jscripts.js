// Update the counts on page load
document.addEventListener('DOMContentLoaded', updateCounts);

function toggleChatbot() {
    const chatbot = document.getElementById('chatbot');
    chatbot.style.display = chatbot.style.display === 'none' ? 'block' : 'none';
}

function sendMessage() {
    const inputField = document.getElementById('chatbot-input');
    const message = inputField.value.trim();

    if (message) {
        appendMessage(message, 'user-message');
        inputField.value = '';

        // Simulate bot response
        setTimeout(() => {
            const botResponse = getBotResponse(message);
            appendMessage(botResponse, 'bot-message');
        }, 1000);
    }
}

function appendMessage(message, className) {
    const messageContainer = document.getElementById('chatbot-messages');
    const messageElement = document.createElement('div');
    messageElement.className = className;
    messageElement.textContent = message;
    messageContainer.appendChild(messageElement);
    messageContainer.scrollTop = messageContainer.scrollHeight;
}

function getBotResponse(message) {
    // Here you can add more complex logic to respond to user queries
    const responses = {
        'hello': "Hello! Welcome to the Student Result Management System. How can I assist you today?",
        'Introduction':"Hi there! I'm here to help you with your academic results, GPA calculations, and any queries regarding your courses. What would you like to do?",
        'how are you?': 'I am just a chatbot, but I am here to help!',
        'help': 'Sure, what do you need help with? You can ask about students, modules, or results.',
        // Add more responses here
        "Request for Details":"Please provide your student ID to view your results.",
        "Result Display":"Here are your results for the current semester. [List of subjects with grades]. Would you like to see your GPA or download your results?",
        "GPA Inquiry":"Your current semester GPA is 3.5. Your overall GPA is 3.6. Would you like to know anything else?",
        "Update Personal Information":"You can update your personal details through the student portal. Would you like a direct link to the update page?",
        "Contacting Admin":"If you need assistance with your details or have any other administrative queries, I can connect you with our support team. Would you like to proceed?",
        "Help":"I'm here to assist! You can ask me about your results, GPA, subject information, or any other academic-related queries.",
        "Goodbye":"Thank you for using the Student Result Management System. Have a great day ahead!",
    };  

    message = message.toLowerCase();
    return responses[message] || "I'm not sure about that. Can you ask something else?";
}

// Display chatbot by default when the page loads
window.addEventListener('DOMContentLoaded', () => {
    toggleChatbot();
});