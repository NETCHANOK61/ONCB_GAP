<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>QR Code</title>
    <style>
        body, html {
            height: 100%;
            margin: 0;
            display: flex;
            justify-content: center;
            align-items: center;
        }
    </style>

    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
</head>
<body>
    <div>
        {!! QrCode::size(200)->generate( $qrLoginLink ) !!}
    </div>

    <script>
        $(document).ready(function() {
            function checkLoginStatus() {
                $.ajax({
                    url: '{{ route("thaID.loginQr.checkStatus") }}', // URL to the checkStatus route
                    type: 'GET',
                    success: function(response) {
                        // Check the login status
                        if (response.loginStatus === 'SUCCESS') {
                            // Redirect to the main.index route if SUCCESS
                            window.location.href = '{{ route("main.index") }}';
                        }
                        // If PENDING, do nothing and keep polling
                    }
                });
            }

            // Poll every 5 seconds
            setInterval(checkLoginStatus, 5000);
        });
    </script>
</body>
</html>