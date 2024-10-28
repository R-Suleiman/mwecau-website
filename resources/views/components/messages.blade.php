<div>
    <!-- When there is no desire, all things are at peace. - Laozi -->

    <div class="container mb-4">
        <div class="mt-5 message" id="success-message">
            @if (session()->has('message'))
                <div class="alert alert-success shadow d-flex justify-content-between align-items-center">
                    <span>{{ session('message') }}</span>
                    <button onclick="closeMessage('success-message')" class="btn btn-danger btn-sm ms-3">
                        <i class="fab fa-x"></i>
                    </button>
                </div>
            @endif
        </div>

        <div class="mt-5 message" id="error-message">
            @if (session()->has('fail'))
                <div class="alert alert-danger shadow d-flex justify-content-between align-items-center">
                    <span>{{ session('fail') }}</span>
                    <button onclick="closeMessage('error-message')" class="btn btn-danger btn-sm ms-3">
                        <i class="fab fa-x"></i>
                    </button>
                </div>
            @endif
        </div>
    </div>
</div>
<script>
    // Function to close the message
    function closeMessage(messageId) {
        const messageElement = document.getElementById(messageId);
        if (messageElement) {
            messageElement.style.display = 'none';
        }
    }

    setTimeout(() => {
        const messages = document.querySelectorAll('.message');
        messages.forEach(message => {
            message.style.display = 'none';
        });
    }, 5000);
</script>
