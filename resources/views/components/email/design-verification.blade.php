<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Design Submission</title>
    <link rel="stylesheet" href="https://use.typekit.net/tzg2jet.css" />
    <style>
        * {
            font-family: ivyepic-variable,sans-serif !important;
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
        
        .group {
            margin-bottom: 2rem;
        }
        h1 {
            font-size: 24px;
            margin: 0;
            white-space: nowrap;
            overflow: hidden;
            text-overflow: ellipsis;
        }

        h3 {
            font-size: 18px;
            margin: 0;
            white-space: nowrap;
            overflow: hidden;
            text-overflow: ellipsis;
            text-transform: capitalize;
        }

        p {
            margin: 0;
            word-wrap: break-word;
            overflow-wrap: break-word;
        }

        .email-header {
            text-align: center;
            margin-bottom: 0.75rem;
            word-break: word-break;
            text-overflow: break-word;
            white-space: unset;
        }
        
        p.description {
            white-space: normal;
            overflow-wrap: break-word;
        }
        small {
            margin-bottom: 0.25rem;
        }
        .design-image {
            width: 100%;
            max-width: 100%;
            height: auto;
            border-radius: 8px;
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
            text-align: center;
            word-break: break-word;
            border: none;
            transition: transform .3s ease;
            font-weight: 300;
            font-variation-settings: "slnt" 0,"wdth" 100,"wght" 400;
        }

        .verify-btn:hover {
            opacity: 80%;
            transform: translateY(-2px);
        }

        .verify-link {
            margin: 20px 0;
            font-weight: 200;
            text-decoration: underline;
            color: whitesmoke;
            word-wrap: break-word;
        }

        .footer-text {
            font-size: 14px;
            color: #777;
            text-align: center;
            margin-top: 20px;
        }

        small {
            margin-top: 2rem;
            display: block;
            word-wrap: break-word;
            overflow-wrap: break-word;
        }

        /* Style for Checkbox */
        .checkbox-group {
            display: flex;
            align-items: center;
            justify-content: center;
            
            margin-bottom: 1rem;
            gap: 0.5rem;
        }

        .checkbox-group input {
            width: 14px;
            height: 14px;
            accent-color: #ea8936;
            margin: 0;
            margin-bottom: 1px;
        }

        .checkbox-group label {
            font-size: 16px;
            line-height: 1;
            color: #ccc;
            cursor: pointer;
            margin: auto 0 
        }
    </style>
</head>
<body> 
    <main>
        <div class="email-container">
            <h1 class="email-header">Confirm your Submission</h1>

            <p style="text-align: center; font-size: 16px; color: #ccc; margin-bottom: 20px;">
                Please review the details of your submission below before confirming.
            </p>
            <div class="group">
                <small>Design Title:</small>
                <h1>{{ $designTitle }}</h1>
            </div>

            <div class="group">
                <small>Design Category:</small>
                <h3>{{ $category }}</h3>
            </div>

            <div class="group">
                <small>Design Description:</small>
                <p class="description">{{ $description }}</p>
            </div>

            <!-- Added Design Image -->
            <div class="group">
                <small>Design Image:</small>
                <img class="design-image" src="{{ $designImageUrl }}" alt="Design Image">
            </div>
            <form method="POST" action="{{ $verificationUrl }}">
                @csrf
                <p style="text-align: center; font-size: 16px; color: #ccc; margin-top: 20px; margin-bottom:10px">
                    If everything looks correct, please confirm your submission by checking the box below and clicking submit.
                </p>

                <div class="checkbox-group">
                    <input type="checkbox" id="agree" name="agree" value="true" required />
                    <label for="agree">I confirm that this is my submission.</label>
                </div>

                <div id="btn" class="verify-group">
                    <button class="verify-btn" type="submit">Submit</button>
                </div>
            </form>
        </div>
    </main>
</body>
</html>