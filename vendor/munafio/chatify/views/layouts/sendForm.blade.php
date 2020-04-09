<div class="messenger-sendCard">
    <form id="message-form" method="POST" action="{{ route('send.message') }}" enctype="multipart/form-data">

        <label><span class="fas fa-paperclip"></span><input disabled='disabled' type="file" class="upload-attachment" name="file" accept="image/*, .txt, .rar, .zip" /></label>
        <textarea readonly='readonly' id="sendMessageToOthers" name="message" class="m-send app-scroll" placeholder="Type a message.."></textarea>
        <button disabled='disabled'><span class="fas fa-paper-plane"></span></button>
    </form>
</div>