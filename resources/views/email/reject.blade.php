<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>Document</title>
    <link href="https://fonts.bunny.net/css?family=inter:500,600|montserrat:700" rel="stylesheet" />
    <style>
        .wrapper {
            background-color: #edf2f7;
            font-family: "Inter", sans-serif;
        }

        .greetings {
            font-weight: 600;
        }

        .card {
            background-color: white;
            padding: 2rem;
            border-radius: 10px;
            margin: 0 2rem;
        }

        header {
            padding: 1rem 0;
            display: flex;
            align-items: center;
            justify-content: center;
        }

        .logo {
            height: 84px;
        }

        .body p {
            color: #575656;
        }

        footer p {
            padding: 0 1rem;
            font-size: 0.75rem;
            color: #898989;
        }

        a {
            color: rgb(105, 105, 223);
        }

        .regards {
            line-height: 0.125px;
        }

        .cta {
            margin-top: 2rem;
        }

        .cta .cta-button {
            border: 0;
            outline: 0;
            background-color: #1d4ed8;
            color: white;
            padding: 0.5rem 1rem;
            text-decoration: none;
            border-radius: 5px;
        }
    </style>
</head>

<body>
    <div class="wrapper" style="padding: 1rem">
        <table width="100%" cellspacing="0" cellpadding="0">
            <tr>
                <div class="card">
                    <p class="greetings">Dear {{ $data["name"] }},</p>
                    <div class="body">
                        <p>
                            After careful review, we regret to inform you that we are unable to approve your requested
                            schedule.
                        </p>
                        <p>
                            We understand that this may cause inconvenience, and we appreciate your understanding. If
                            you have any questions or if there’s an opportunity to assist you with an alternative date
                            , please feel free to reach out.
                        </p>
                        Best regards,</p>
                        <p class="regards">
                            St. Joseph Cathedral Parish
                        </p>

                        <div class="cta">
                            <a href="{{ route('landingpage.index') }}" class="cta-button">
                                Back to our website
                            </a>
                        </div>
                    </div>
                </div>
                <footer>
                    <p>
                        Confidentiality Notice: This email and any attachments are
                        confidential and intended solely for the use of the
                        individual or entity to whom they are addressed. If you are
                        not the intended recipient, please notify us immediately and
                        delete this email from your system.
                    </p>
                    <p>
                        Copyright ©
                        2023
                        <a href="https://www.facebook.com/p/St-Joseph-Cathedral-Parish-100064569407376/">
                            St. Joseph Cathedral Parish</a>
                        . All rights reserved.
                    </p>
                </footer>
            </tr>
        </table>
    </div>
</body>

</html>