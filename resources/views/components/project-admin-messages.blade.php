<div class="container mx-auto mb-4">
    <!-- Success Message -->
    <div class="mt-5 message" id="success-message">
        @if (session()->has('success'))
            <div
                class="bg-green-100 border border-green-400 text-green-700 px-4 py-3 rounded flex items-center justify-between shadow">
                <span>{{ session('success') }}</span>
                <button onclick="closeMessage('success-message')" class="text-green-700 hover:text-green-900 ml-3">
                    <svg xmlns="http://www.w3.org/2000/svg" class="h-5 w-5" viewBox="0 0 20 20" fill="currentColor">
                        <path fill-rule="evenodd"
                            d="M10 8.586l4.95-4.95a1 1 0 011.414 1.414L11.414 10l4.95 4.95a1 1 0 01-1.414 1.414L10 11.414l-4.95 4.95a1 1 0 01-1.414-1.414L8.586 10l-4.95-4.95A1 1 0 014.05 3.636L10 8.586z"
                            clip-rule="evenodd" />
                    </svg>
                </button>
            </div>
        @endif
    </div>

    <!-- Error Message -->
    <div class="mt-5 message" id="error-message">
        @if (session()->has('fail'))
            <div
                class="bg-red-100 border border-red-400 text-red-700 px-4 py-3 rounded flex items-center justify-between shadow">
                <span>{{ session('fail') }}</span>
                <button onclick="closeMessage('error-message')" class="text-red-700 hover:text-red-900 ml-3">
                    <svg xmlns="http://www.w3.org/2000/svg" class="h-5 w-5" viewBox="0 0 20 20" fill="currentColor">
                        <path fill-rule="evenodd"
                            d="M10 8.586l4.95-4.95a1 1 0 011.414 1.414L11.414 10l4.95 4.95a1 1 0 01-1.414 1.414L10 11.414l-4.95 4.95a1 1 0 01-1.414-1.414L8.586 10l-4.95-4.95A1 1 0 014.05 3.636L10 8.586z"
                            clip-rule="evenodd" />
                    </svg>
                </button>
            </div>
        @endif
    </div>
</div>

<script>
    // Function to close a specific message
    function closeMessage(messageId) {
        const messageElement = document.getElementById(messageId);
        if (messageElement) {
            messageElement.style.display = 'none';
        }
    }

    // Automatically close alerts after 5 seconds
    setTimeout(() => {
        document.querySelectorAll('.message').forEach(message => {
            message.style.display = 'none';
        });
    }, 5000);
</script>
