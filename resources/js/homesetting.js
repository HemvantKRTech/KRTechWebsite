$(document).ready(function() {
    // Setup global AJAX settings
    $.ajaxSetup({
        headers: {
            'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
        }
    });

    // Handle form submission
    $('#team-form').on('submit', function(event) {
        event.preventDefault(); // Prevent default form submission

        let formData = new FormData(this); // Create FormData object from form

        $.ajax({
            url: $(this).attr('action'), // Get the form action URL
            type: 'POST', // Method type
            data: formData, // Form data
            contentType: false, // Do not set content type
            processData: false, // Do not process data
            success: function(response) {
                // Handle success response
                Toastify({
                    text: 'Saved',
                    duration: 3000,
                    close: true,
                    gravity: "top", // `top` or `bottom`
                    position: "right", // `left`, `center` or `right`
                    stopOnFocus: true, // Prevents dismissing of toast on hover
                    style: {
                        background: "#28a745",
                      },

                }).showToast();
                
                $('#team-form')[0].reset(); // Optionally, reset the form
            },
            error: function(xhr) {
                // Handle error response
               Toastify({
                    text: 'Not saved',
                    duration: 3000,
                    close: true,
                    gravity: "top", // `top` or `bottom`
                    position: "right", // `left`, `center` or `right`
                    stopOnFocus: true, // Prevents dismissing of toast on hover
                    style: {
                        background: "#ff4d4d",
                      },

                }).showToast();
            }
        });
    });

    $(document).on('submit', 'form[id^="teamdelete-"]', function(event) {
        event.preventDefault(); // Prevent default form submission
    
        let form = $(this);
        let formId = form.attr('id');
        let formData = form.serialize(); // Serialize form data
    
        $.ajax({
            url: form.attr('action'), // Get the form action URL
            type: 'DELETE', // Method type for DELETE request
            data: formData, // Serialized form data
            headers: {
                'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content') // Add CSRF token for security
            },
            success: function(response) {
                // Handle success response
                Toastify({
                    text: 'Deleted successfully',
                    duration: 3000,
                    close: true,
                    gravity: "top", // `top` or `bottom`
                    position: "right", // `left`, `center` or `right`
                    stopOnFocus: true, // Prevents dismissing of toast on hover
                    style: {
                        background: "#28a745", // Green background for success
                    },
                }).showToast();
    
                // Optionally, remove the row or element from the DOM
                form.closest('tr').remove();
                // window.location.reload();
            },
            error: function(xhr) {
                // Handle error response
                Toastify({
                    text: 'Failed to delete',
                    duration: 3000,
                    close: true,
                    gravity: "top", // `top` or `bottom`
                    position: "right", // `left`, `center` or `right`
                    stopOnFocus: true, // Prevents dismissing of toast on hover
                    style: {
                        background: "#ff4d4d", // Red background for error
                    },
                }).showToast();
            }
        });
    });
    
});
