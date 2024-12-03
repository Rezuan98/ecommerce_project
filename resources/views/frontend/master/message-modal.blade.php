<!-- Modal -->
<div id="messageModal" class="modal">
    <div class="modal-content">
        <span id="close-btn" class="close-btn" onclick="closeMessageModal()">&times;</span>
        <h3>Send a Message</h3>
        <form id="messageForm" action="{{ route('store.message') }}" method="post">
            @csrf
            <div class="form-group">
                <label for="name">Name:</label>
                <input type="text" id="name" name="name" placeholder="Enter your name" required>
            </div>
            <div class="form-group">
                <label for="mobile">Mobile:</label>
                <input type="tel" id="mobile" name="phone" placeholder="Enter your mobile number" required>
            </div>
            <div class="form-group">
                <label for="message">Message:</label>
                <textarea id="message" name="message" placeholder="Enter your message" rows="4" required></textarea>
            </div>
            <button type="submit" class="btn-submit">Send Message</button>
        </form>
    </div>
</div>
