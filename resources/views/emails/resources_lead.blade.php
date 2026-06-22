<!DOCTYPE html>
<html>
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Route to Market Keynote Speech</title>
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
            margin-top: 30px;
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
            background: #10103d;
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
        {{-- <img src="{{ asset('images/email-banner.png') }}" alt="RTM Banner" class="banner"> --}}
        <div class="header">
            Your Route To Market Keynote Speech is Ready!
        </div>
        <div class="content">
            <p>Hi {{ $lead->full_name }},</p>
            <p>Thank you for your interest in the Route to Market West Africa Summit.</p>
            <p>As requested, we are excited to share with you the keynote speeches from our distinguished speakers. These presentations are filled with insights on innovation, distribution strategies, consumer engagement, and the evolving market landscape in West Africa.</p>

            <p><strong>Inside the download:</strong></p>
            <ul>
                <li>Day 1 Keynote Speech by Farouk Gumel – Margins of Trust: The Informal Economy, Inclusion and the Future of West African Commerce</li>
                <li>Day 2 Keynote Speech by Kayode Oladapo – The Sovereignty of Scale: How Mastering Integrated Supply Chains Creates Regional Dominance in FMCG</li>
                {{-- <li>Day 2 Keynote Speech by Oghale Elueni – Building Resilience in West Africa’s Dynamic Markets</li> --}}
                <li>Bonus insights and actionable strategies</li>
            </ul>

            <p><strong>Please note:</strong> These download links are valid for <strong>60 minutes</strong> from the time you received this email.</p>

            <div class="cta">
                <a href="{{ $day1Url }}" target="_blank">Download Day 1 Keynote Speech</a>
            </div>
            <div class="cta">
                <a href="{{ $day2Url }}" target="_blank">Download Day 2 Keynote Speech</a>
            </div>

            <p>If you experience any issues accessing the files, feel free to reach out to us at <a href="mailto:events@rtmwestafrica.com">events@rtmwestafrica.com</a>.</p>

            <p>We hope you find the content insightful and impactful.</p>
        </div>

        <div class="footer">
            &copy; 2026 Excite Panacea. All rights reserved.
        </div>
    </div>
</body>
</html>
