
<div id="chat-widget" style="position:fixed; bottom:20px; right:20px; width:300px; height:400px; background:white; border:1px solid #ccc; box-shadow:0 0 10px rgba(0,0,0,0.1); z-index:9999;">
    <div style="background:#007bff; color:white; padding:10px;">Live Chat</div>
    <div id="chat-messages" style="height:300px; overflow-y:auto; padding:10px;"></div>
    <input id="chat-input" type="text" placeholder="Type a message..." style="width:100%; padding:10px; border:none; border-top:1px solid #ccc;" />
</div>

<script>
document.getElementById('chat-input').addEventListener('keydown', function(e) {
    if (e.key === 'Enter') {
        fetch('/chat/send', {
            method: 'POST',
            headers: {
                'Content-Type': 'application/json',
                'X-CSRF-TOKEN': document.querySelector('meta[name="csrf-token"]').getAttribute('content')
            },
            body: JSON.stringify({ message: this.value })
        });
        this.value = '';
    }
});
</script>
