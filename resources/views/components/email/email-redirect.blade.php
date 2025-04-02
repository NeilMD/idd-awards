<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Design Submission Confirmation</title>
    <style>
        * {
            font-family: Helvetica, Arial, sans-serif;
            font-optical-sizing: auto;
            box-sizing: border-box;
            scroll-behavior: smooth;
            font-weight: 300;
            color: white;
        }
        html {
            background-color: #0e0e10;
        }
        body {
            margin: 0;
            padding: 0;
        }
        main {
            margin-top: 4rem;
        }
        .email-container {
            width: 100%;
            max-width: 600px;
            margin: 0 auto;
            background-color: #1a1a1c;
            padding: 20px;
            border-radius: 8px;
            box-shadow: 0 4px 8px rgba(0, 0, 0, 0.1);
        }
        h1 {
            font-size: 24px;
            margin: 0;
            text-align: center;
        }
        p {
            margin: 0;
        }
        ul {
            padding-left: 20px;
            margin: 15px 0;
        }
        ul li {
            margin-bottom: 10px;
        }
        .group {
            margin-bottom: 2rem;
        }
        .verify-group {
            display: flex;
            flex-direction: column;
            justify-content: center;
            text-align: center;
            gap: 1rem;
        }
        .verify-btn {
            display: inline-block;
            background-color: #ea8936;
            color: black;
            padding: 12px 25px;
            text-decoration: none;
            border-radius: 8px;
            font-size: 16px;
            margin-top: 20px;
            font-weight: 300;
            font-variation-settings: "slnt" 0,"wdth" 100,"wght" 400;
        }
        .verify-btn:hover {
            opacity: 80%;
        }
        .footer-text {
            font-size: 14px;
            color: #777;
            text-align: center;
            margin-top: 20px;
        }
        .verify-link {
            margin-top: 15px;
            color: whitesmoke;
            font-weight: 200;
            text-decoration: underline;
        }
    </style>
</head>
<body> 

    <main>
        <div class="email-container">
            <h1>Thank You for Your Submission!</h1>
            <br/>
            <br/>
            <br/>
            <div class="group">
                <p>Before your submission is posted, we need to confirm that it was submitted by you. This helps us:</p>
                <ul>
                    <li>Ensure that only valid submissions are posted.</li>
                    <li>Prevent random images from being uploaded to the website.</li>
                    <li>Maintain the authenticity and integrity of the submissions.</li>
                </ul>
                <p>Please verify your submission by clicking the button below. This will redirect you to a page where you can confirm your details.</p>
            </div>

            <div class="verify-group">
                <a class="verify-btn" href="{{$verificationUrl}}" target="_blank">
                    Click here to verify your submission
                </a>
                <small>If the button above doesn't work, copy and paste this link into your browser:</small>
                <a href="{{$verificationUrl}}" class="verify-link">{{$verificationUrl}}</a>
            </div>
        </div>
    </main>

</body>
</html>