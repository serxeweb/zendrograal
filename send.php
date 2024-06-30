<?php
    if ($_SERVER["REQUEST_METHOD"] == "POST") {
        $name = $_POST['name'];
        $email = $_POST['email'];
        $message = $_POST['message'];

        $to = "esquejomarktristan@gmail.com";  // Replace with your email address
        $subject = "New Contact Form Submission";
        $body = "Name: $name\nEmail: $email\n\nMessage:\n$message";
        $headers = "From: $email";

        if (mail($to, $subject, $body, $headers)) {
    ?>
            <script src="https://cdn.jsdelivr.net/npm/sweetalert2@10"></script>
            <script>
                window.onload = function() {
                    Swal.fire({
                        title: 'MESSAGE SENT!',
                        text: 'Thank you for contacting us!',
                        icon: 'success',
                        confirmButtonText: 'OK'

                    }).then(function() {
                        window.location.href = 'index.php';
                    });
                };
            </script>
    <?php
        } else {
           ?>
           <script src="https://cdn.jsdelivr.net/npm/sweetalert2@10"></script>
            <script>
                window.onload = function() {
                    Swal.fire({
                        title: 'MESSAGE HAS NOT BEEN SENT',
                    
                        icon: 'error',
                        confirmButtonText: 'OK'

                    }).then(function() {
                        window.location.href = 'index.php';
                    });
                };
            </script>
           <?php
        }
    }
    ?>