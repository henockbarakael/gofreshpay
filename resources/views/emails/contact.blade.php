<!DOCTYPE html>
<html>
<head>
    <title>Nouveau message de contact</title>
    <style>
        body {
            font-family: Arial, sans-serif;
            background-color: #f2f2f2;
            display: flex;
            justify-content: center;
            align-items: center;
            min-height: 100vh;
            margin: 0;
        }

        .container {
            background-color: #fff;
            padding: 20px;
            border-radius: 5px;
            box-shadow: 0 2px 4px rgba(0, 0, 0, 0.1);
            text-align: center;
            max-width: 80%;
            width: 100%;
        }

        h1 {
            color: #333;
            font-size: 24px;
            margin-bottom: 20px;
        }

        p {
            margin-bottom: 10px;
        }

        .footer {
            position: fixed;
            bottom: 0;
            left: 0;
            width: 100%;
            background-color: #FF7448;
            color: #fff;
            font-size: 13px;
            text-align: center;
            font-family: "Helvetica Neue", Helvetica, Arial, sans-serif;
            padding: 10px;
            line-height: 120%;
        }

        .header {
            position: fixed;
            top: 0;
            left: 0;
            width: 100%;
            background-color: #FF7448;
            color: #fff;
            font-size: 13px;
            text-align: center;
            font-family: "Helvetica Neue", Helvetica, Arial, sans-serif;
            padding: 10px;
            line-height: 120%;
        }

        .content {
            margin-top: 60px;
            margin-bottom: 60px;
        }
    </style>
</head>
<body>
    <div class="header">
        <p>Header content goes here</p>
    </div>
    
    <div class="content">
        <div class="container">
            <h1>Nouveau message de contact</h1>
            <div class="contact-info">
                <p>{{ $contactData['message'] }}</p>
            </div>
        </div>
    </div>
    
    <div class="footer">
        <p>GoFreshPay</p>
    </div>
</body>
</html>