document.getElementById('send-button').addEventListener('click', function() {
    var input = document.getElementById('chat-input').value;
    
    fetch('includes/chat.php', {
        method: 'POST',
        headers: {
            'Content-Type': 'application/x-www-form-urlencoded'
        },
        body: 'message=' + input
    }).then(response => response.text())
      .then(data => {
          document.getElementById('chat-box').innerHTML = data;
          document.getElementById('chat-input').value = '';
      });
});

setInterval(function() {
    fetch('includes/chat.php')
        .then(response => response.text())
        .then(data => {
            document.getElementById('chat-box').innerHTML = data;
        });
}, 3000);
