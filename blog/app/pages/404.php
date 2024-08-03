<php>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>404 Error - Page Not Found</title>
    <link rel="icon" href="assets/imgs/favicon.ico" type="image/x-icon">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css">
    <style>
        body {
            background-color: #f5f5f5;
        }
       .error-page {
            text-align: center;
            padding: 40px 20px;
        }
       .error-code {
            font-size: 96px;
            font-weight: bold;
            color: #ef3a3d;;
        }
       .error-message {
            font-size: 24px;
            color: #666;
        }
       .btn-go-home {
            margin-top: 20px;
            background-color:#ef3a3d;
            color:aliceblue
        }
    </style>
</head>
<body>
    <div class="error-page">
        <h1 class="error-code">404</h1>
        <h2 class="error-message">Oops, page not found!</h2>
        <p>The page you're looking for doesn't exist or has been removed.</p>
        <a href="home" class="btn btn-go-home">Go back to home page</a>
    </div>
</body>
</html>