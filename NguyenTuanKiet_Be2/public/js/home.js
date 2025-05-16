function toggleChatBox() {
    const chatBox = document.getElementById("chat-box");
    chatBox.style.display = chatBox.style.display === "none" ? "block" : "none";
  }
  
  function sendMessage() {
    const input = document.getElementById("user-input");
    const message = input.value.trim();
    if (message !== "") {
        showUserMessage(message); // <-- thêm hàm hiển thị người dùng
        sendToAI(message);        // <-- gửi đến server
        input.value = "";
    }
}

  
  function handleKeyPress(event) {
    if (event.key === "Enter") {
      sendMessage();
    }
  }
  
  function sendQuickMessage(text) {
    const input = document.getElementById("user-input");
    input.value = text;
    sendMessage();
  }
  


  function showUserMessage(msg) {
    const chat = document.getElementById("chat-content");
    const userMsg = document.createElement("div");
    userMsg.className = "user-message";
    userMsg.textContent = msg;
    chat.appendChild(userMsg);
    chat.scrollTop = chat.scrollHeight;
}

function showBotReply(msg) {
    const chat = document.getElementById("chat-content");
    const botMsg = document.createElement("div");
    botMsg.className = "bot-message";
    botMsg.textContent = msg;
    chat.appendChild(botMsg);
    chat.scrollTop = chat.scrollHeight;
}
