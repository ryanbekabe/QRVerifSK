<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document Not Found</title>
    <!-- Bootstrap CSS -->
    <link href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css" rel="stylesheet">
    <style>
        body, html {
            height: 100%;
            margin: 0;
            background: #f8f9fa;
        }
        .container {
            max-width: 800px; 
            padding: 20px; 
        }
        .card-header {
            background-color: #dc3545; /* Red color for error */
            color: white;
            font-size: 1.25rem;
        }
        .header {
            display: flex;
            align-items: center;
            margin-bottom: 10px;
            justify-content: space-between;
        }
        .header img {
            max-width: 100px;
            margin-right: 15px;
        }
        .header h2 {
            margin: 0;
            font-size: 1.5rem;
        }
        .text-danger {
            color: #dc3545; /* Red color for error text */
        }
        .text-center {
            text-align: center;
        }
        .mt-4 {
            margin-top: 1.5rem;
        }
    </style>
</head>
<body>
    <div class="container">

        <div class="card">
            <div class="card-header text-center">
                Error 404
            </div>
            <div class="card-body text-center">
                <h3 class="mb-4 text-danger">Page Not Found</h3>
                <p class="lead text-danger">The document you are looking for could not be found.</p>
                <p>It might have been moved or deleted. Please check the URL and try again.</p>

                <div class="mt-4 text-center">
                    <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" fill="none" viewBox="0 0 24 24">
                        <path fill="#dc3545" d="M12 22c5.523 0 10-4.477 10-10S17.523 2 12 2 2 6.477 2 12s4.477 10 10 10m-5-7h10v-2H7v2zm0-4h10V8H7v2z"></path>
                    </svg>
                    <div class="mt-3">
                        <p class="text-danger">We couldn't find the page you were looking for.</p>
                    </div>
                </div>

                <p class="mt-4 text-center">Return to the <a href="https://apps.holistic.co.id/" target="_blank">homepage</a> or contact support for further assistance.</p>
            </div>
        </div>
    </div>

    <!-- Bootstrap JS and dependencies -->
    <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.9.2/dist/umd/popper.min.js"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>
</body>
</html>
