document.addEventListener("DOMContentLoaded", function() {
    const form = document.getElementById('commentForm');
    form.addEventListener('submit', function(event) {
        event.preventDefault(); 
        const formData = new FormData(form);
        const formObject = {};
        formData.forEach((value, key) => formObject[key] = value);
        fetch(form.action, {
            method: "POST",
            headers: {
                'Content-Type': 'application/json',
                'X-CSRF-TOKEN': document.querySelector('meta[name="csrf-token"]').getAttribute('content') 
            },
            body: JSON.stringify(formObject)
        })
        .then(response => response.json()) 
        .then(data => {
            if (data.success) {
                Toastify({
                    text: 'Your Commment added successfully',
                    duration: 3000,
                    close: true,
                    gravity: "top",
                    position: "right", 
                    stopOnFocus: true, 
                    style: {
                        background: "#28a745", 
                    },
                }).showToast();
                document.getElementById("commentForm").reset();
            } else {
                Toastify({
                    text: 'Your Commment not added',
                    duration: 3000,
                    close: true,
                    gravity: "top", 
                    position: "right", 
                    stopOnFocus: true, 
                    style: {
                        background: "#ff4d4d", 
                    },
                }).showToast();
            }
        })
        .catch(error => {
           // alert('An error occurred while adding the comment.'); 
            console.error('Error:', error); 
        });
    });
});

