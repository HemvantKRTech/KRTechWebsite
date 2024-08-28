function performAction(id, action) {
    // Define the URL based on the action and ID
    const url = `/${action}cmnt/${id}`;

    // Perform AJAX request
    fetch(url, {
        method: 'POST',
        headers: {
            'Content-Type': 'application/json',
            'X-CSRF-TOKEN': document.querySelector('meta[name="csrf-token"]').getAttribute('content') // CSRF token
        },
        body: JSON.stringify({}) // Send empty body as we don't need additional data
    })
    .then(response => response.json())
    .then(data => {
        if (data.success) {
            Toastify({
                text: data.message,
                duration: 3000,
                close: true,
                gravity: "top", // `top` or `bottom`
                position: "right", // `left`, `center` or `right`
                stopOnFocus: true, // Prevents dismissing of toast on hover
                style: {
                    background: "#28a745", // Green background for success
                },
            }).showToast();
        } else {
            Toastify({
                text: 'Operation failed: ' + data.message,
                duration: 3000,
                close: true,
                gravity: "top", // `top` or `bottom`
                position: "right", // `left`, `center` or `right`
                stopOnFocus: true, // Prevents dismissing of toast on hover
                style: {
                    background: "#dc3545", // Red background for failure
                },
            }).showToast();
        }
    })
    .catch(error => {
        console.error('Error:', error);
        alert('An error occurred. Please try again.');
    });
}

// Expose functions to global scope
window.performAction = performAction;

