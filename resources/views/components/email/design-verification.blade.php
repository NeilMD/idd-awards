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
            text-transform: capitalize;
            
        }
        .email-header {
            text-align: center;
        }
        p.description {
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
        p.info {
            line-height: 1.5;
            color: #1a1a1c;
            white-space: wrap;
        }
        .info-box {
            background-color: #f9f9f9;
            color: black;
            display: flex;
            flex-direction: column;
            padding: 15px;
            margin-top: 20px;
            border-radius: 8px;
            border: 1px solid #ddd;
        }
        #btn {
            width: 100%;
            display: flex;
            flex-direction: column;
            justify-content: center;
        }
        .verify-group {
            display: flex;
            flex-direction: column;
            justify-content: center;
            text-align: center;
            gap:1rem;
        }
        .verify-link {
            margin: 20px 0;
            font-weight: 200;
            text-decoration: underline;
            color: whitesmoke;
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
            text-align: left;

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
            <h1 class="email-header">Thank you for your Submission!</h1>
          
            <h1>{{ $designTitle}}</h1>
                
                <h3> {{ $category}}</h3>
                <p class="">{{ $description }}</p>
            <div id="btn" class="verify-group">
                <div >
                    <a class="verify-btn" href="{{ $verificationUrl }}">
                    Click to here verify your submission 
                    </a>
                </div>
                <small>
                    If you cant click on the button above, go to following link manually: 
                    {{ $verificationUrl }}
                </small>

            </div>
        </div>
    </main>
    

</body>
</html>