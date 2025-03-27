// Example dynamic data
const dynamicData = {
    totalStudents: 10,
    subjectsListed: 12,
    totalClasses: 15,
    resultsDeclared: 8,
};

// Function to update counts
function updateCounts() {
    document.getElementById('students-count').textContent = dynamicData.totalStudents;
    document.getElementById('subjects-count').textContent = dynamicData.subjectsListed;
    document.getElementById('classes-count').textContent = dynamicData.totalClasses;
    document.getElementById('results-count').textContent = dynamicData.resultsDeclared;
}

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
        'hello': 'Hello! How can I assist you today?',
        'how are you?': 'I am just a chatbot, but I am here to help!',
        'help': 'Sure, what do you need help with? You can ask about students, modules, or results.',
        // Add more responses here
    };

    message = message.toLowerCase();
    return responses[message] || "I'm not sure about that. Can you ask something else?";
}

// Display chatbot by default when the page loads
window.addEventListener('DOMContentLoaded', () => {
    toggleChatbot();
});
