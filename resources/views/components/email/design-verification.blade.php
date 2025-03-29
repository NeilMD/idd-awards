<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Design Submission</title>
    <style>
        * {
            font-family: Helvetica, Arial, sans-serif;
            font-optical-sizing: auto;
            box-sizing: border-box;
            scroll-behavior: smooth;
            font-weight: 300;
            color: white
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
            margin-bottom: 2rem;
            white-space: nowrap;
            overflow: hidden;
            text-overflow: ellipsis;
        }
        h3 {
            font-size: 18px;
            margin: 5px 0;
            white-space: nowrap;
            overflow: hidden;
            text-overflow: ellipsis;
            
        }
        p {
            white-space: nowrap;
            overflow: hidden;
            text-overflow: ellipsis;
        }
        strong {
            color: #1a1a1c;
            font-weight: 400;
        }
        .design-image {
            width: 100%;
            height: auto;
            border-radius: 8px;
            margin-top: 20px;
        }
        .info-box {
            background-color: #f9f9f9;
            color: #1a1a1c;
            display: flex;
            padding: 15px;
            margin-top: 20px;
            border-radius: 8px;
            border: 1px solid #ddd;
            p {
                line-height: 1.5;
                color: #1a1a1c;
                white-space: wrap;
            }
        }
        #btn {
            width: 100%;
            display: flex;
            justify-content: center;
        }
        .verify-btn {
            display: inline-block;
            background-color: #ea8936;
            color: #ffffff;
            padding: 12px 25px;
            text-decoration: none;
            border-radius: 8px;
            font-size: 16px;
            margin-top: 20px;
            text-align: center;
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
    </style>
</head>
<body>
    <main>
        <div class="email-container">
            <h1>Design Submission: Test</h1>
            
            <h3>Category: Web</h3>
            <p>LoasdasdsaremLoasdasdsarem</p>

            <!-- Display the design image -->
            <img class="design-image" src="#" alt="Design Image">

            <!-- Previous submission info -->
            <div class="info-box">
                <p>
                    <strong>Important:</strong> 
                    If you have uploaded a design before, your previous submission will be overwritten.
                </p>
            </div>
            <div id="btn">
                <!-- Verification Button -->
                <a href="#" class="verify-btn">Click here to verify your upload</a>
            </div>
            

            <div class="footer-text">
                <p>Thank you for your submission! If you need assistance, feel free to contact us.</p>
            </div>
        </div>
    </main>
    

</body>
</html>