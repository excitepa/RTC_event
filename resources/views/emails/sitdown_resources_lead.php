<!DOCTYPE html>
<html>
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>RTM Session Video</title>
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
        <img src="{{ asset('/public/images/resource/sitdown.jpg') }}" alt="Fireside Chat Banner" class="banner">
        
        <div class="header">
            Your RTM Fireside Chat Video is Ready to Watch!
        </div>

        <div class="content">
            <p>Hi {{ $lead->full_name }},</p>

            <p>Thank you for your interest in the <strong>Route to Market West Africa Summit</strong>.</p>

            <p>
                We are pleased to share with you the recording of our 
                <strong>Fireside Chat – Trust, Talent & Transformation: Future-Proofing Route-to-Market Strategies in West Africa</strong>, 
                a powerful conversation on leadership, capability building, and the future of consumer market execution.
            </p>

            <p><strong>Session Details:</strong></p>
            <ul>
                <li><strong>Session Title:</strong> Building Future-Ready Route-to-Market Teams for Sustainable Growth</li>
                <li><strong>Format:</strong> Fireside Chat</li>
                <li><strong>Event:</strong> RTM Conference 2025</li>
                <li><strong>Theme:</strong> Leading with Trust in Emerging Markets</li>
            </ul>

            <p><strong>In this conversation, you’ll gain insights on:</strong></p>
            <ul>
                <li>Why trust is a critical “hard skill” and the backbone of distribution success in West Africa.</li>
                <li>How trust can be measured through run rates, reordering patterns, and delivery consistency.</li>
                <li>The importance of predictable field execution in strengthening customer relationships and working capital efficiency.</li>
                <li>Why field teams must evolve into “general managers” with end-to-end business ownership.</li>
                <li>The growing need for data literacy, financial acumen, and digital capability in sales teams.</li>
                <li>Strategic decision-making in SKU selection and market-specific execution.</li>
                <li>Building a culture of ownership, urgency, and accountability in commercial teams.</li>
            </ul>

            <p><strong>Speaker:</strong></p>
            <ul>
                <li>Oghale Elueni – Managing Director, PZ Cussons Africa</li>
            </ul>

            <p><strong>Conversation With:</strong></p>
            <ul>
                <li>Convener, RTM West Africa Summit</li>
            </ul>

            <div class="cta">
                <a href="{{ route('watch.sitdown') }}" target="_blank">
                    🎥 Watch Fireside Chat Video
                </a>
            </div>

            <p>
                If you experience any issues accessing the video, please contact us at 
                <a href="mailto:events@rtmwestafrica.com">events@rtmwestafrica.com</a>.
            </p>

            <p>
                We hope this conversation provides you with practical insights to strengthen your route-to-market strategy, 
                build stronger commercial teams, and drive sustainable consumer growth.
            </p>
        </div>

        <div class="footer">
            &copy; 2025 Excite Panacea. All rights reserved.
        </div>
    </div>
</body>
</html>
