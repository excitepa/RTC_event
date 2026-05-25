<!DOCTYPE html>
<html>
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Thank You for Reaching Out</title>
    <style>
        body {
            font-family: Arial, sans-serif;
            background-color: #ffffff;
            margin: 0;
            padding: 0;
            color: #000000;
        }
        .container {
            max-width: 600px;
            margin: 20px auto;
            background: #ffffff;
            padding: 20px;
            border-radius: 8px;
            box-shadow: 0 0 10px rgba(0, 0, 0, 0.1);
            text-align: center;
        }
        .banner {
            width: 100%;
            border-radius: 8px;
        }
        .header {
            font-size: 24px;
            font-weight: bold;
            color: #19184d;
            margin-top: 20px;
        }
        .content {
            font-size: 16px;
            color: #19184d;
            line-height: 1.6;
            text-align: left;
        }
        .cta {
            text-align: center;
            margin-top: 20px;
        }
        .cta a {
            background: #19184d;
            color: #ffffff;
            padding: 12px 20px;
            text-decoration: none;
            border-radius: 5px;
            font-size: 18px;
            display: inline-block;
        }
        .cta a:hover {
            background: #19184d;
        }
        .footer {
            text-align: center;
            font-size: 14px;
            color: #19184d;
            margin-top: 20px;
        }
    </style>
</head>
<body>
    <div class="container">
        <img src="{{ asset('images/email-banner.png') }}" alt="RTM West Africa Banner" class="banner">

        <div class="header">
            Thank You for Your Interest in RTM West Africa
        </div>

        <div class="content">
            <p>Dear {{ $user->full_name }},</p>

            <p>
                Thank you for submitting your details and expressing interest in 
                <strong>RTM West Africa 2026 – Building a Consumer-Centric Route-to-Market</strong>.
            </p>
            
            <p>
                As part of this event, you can expect:
            </p>

            <ul>
                <li>Insights from industry leaders shaping distribution and market expansion</li>
                <li>Access to innovative solutions transforming the consumer goods ecosystem</li>
                <li>Meaningful networking with key decision-makers and partners</li>
                <li>Opportunities to explore collaborations and business growth</li>
            </ul>

            <p><strong>Date:</strong> 19th – 20th June 2026</p>
            <p><strong>Time:</strong> 9:00 AM</p>
            <p><strong>Venue:</strong> Marriott Hotel</p>

            <p>
                If your submission meets our criteria, a member of our team will reach out with the next steps.
            </p>

            <p>
                We look forward to having you be part of this impactful experience.
            </p>
        </div>

        <div class="footer">
            &copy; {{ date('Y') }} Route to Market West Africa. All rights reserved.
        </div>
    </div>
</body>
</html>
