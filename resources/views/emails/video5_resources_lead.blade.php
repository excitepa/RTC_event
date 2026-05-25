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
        <img src="{{ asset('/public/images/resource/consumer-trends.png') }}" alt="Webinar Banner" class="banner">
        <div class="header">
            Your RTM Day 2, Panel 2 Video is Ready to Watch!
        </div>
        <div class="content">
            {{-- <p>Hi {{ $lead->full_name }},</p> --}}
            <p>Thank you for your interest in the <strong>Route to Market West Africa Summit</strong>.</p>
            <p>We are excited to share with you the recording of <strong>Panel Session 3 – Consumer-Centric Marketing Strategies</strong>, examine current consumer behaviors, preferences, and trends that influence purchasing decisions in the region.</p>

            <p><strong>Session Details:</strong></p>
            <ul>
                <li><strong>Session Title:</strong> Understanding Consumer Trends in West Africa.</li>
                <li><strong>Recorded at:</strong> RTM Conference 2025</li>
                <li> <strong>Day 2, Panel Session 2</strong></li>
                <li><strong>Theme:</strong> Understanding Consumer Trends</li>
            </ul>

            <p><strong>In this session, you’ll discover:</strong></p>
            <ul>
                <li>How evolving consumer journeys and mobile-first behaviors are reshaping channels, content, and shopping experiences.</li>
                <li>The growing influence of social proof and personalization in building trust and driving conversions.</li>
                <li>Value-driven habits and spending preferences that impact pricing, packaging, and retention strategies.</li>
                <li>The importance of localization, sustainability, and cultural relevance in winning consumer loyalty.</li>
            </ul>

            <p><strong>Panelists Include:</strong></p>
            <ul>
                <li>Ayobami Aiyedogbon – Commercial Director at Danone</li>
                <li>Feyi Olubodun – CEO,Managing Partner at Open Squares Africa</li>
                <li>Barong Asiodu – Head, Corporate Planning & Strategy at Rite Foods Limted</li>
                <li>Franklin Ozekhome – Co-Founder at Maskvrade</li>
            </ul>
            <p><strong>Moderated by: </strong>Ifeanyi Benjamin – Value to Market Platforms Director at Coca-Cola Company</p>

            {{-- <p><strong>Please note:</strong> This video link will remain active for <strong>60 minutes</strong> from the time you received this email.</p> --}}

            <div class="cta">
                <a href=
                "{{ route('watch.panel5') }}" 
                target="_blank">🎥 Watch Panel 5 Video</a>
            </div>

            <p>If you have any trouble accessing the video, feel free to contact us at 
            <a href="mailto:events@rtmwestafrica.com">events@rtmwestafrica.com</a>.
            </p>

            <p>We hope this session equips you with valuable insights to navigate today’s economic challenges and opportunities.</p>
        </div>

        <div class="footer">
            &copy; 2025 Excite Panacea. All rights reserved.
        </div>
    </div>

</body>
</html>
