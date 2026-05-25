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
        <img src="{{ asset('images/resource/tech.png') }}" alt="Webinar Banner" class="banner">
        <div class="header">
            Your RTM Day 1, Panel 2 Video is Ready to Watch!
        </div>
        <div class="content">
            {{-- <p>Hi {{ $lead->full_name }},</p> --}}
            <p>Thank you for your interest in the <strong>Route to Market West Africa Summit</strong>.</p>
            <p>We are excited to share with you the recording of <strong>Panel Session 2 – Leveraging Technology for Market Access</strong>, discuss the role of digital tools and platforms in enhancing market access and consumer engagement, including e-commerce and mobile technology.</p>

            <p><strong>Session Details:</strong></p>
            <ul>
                <li><strong>Session Title:</strong> Leveraging Technology for Market Access</li>
                <li><strong>Recorded at:</strong> RTM Conference 2025</li>
                <li> <strong>Day 1, Panel Session 2</strong></li>
                <li><strong>Theme:</strong> Harnessing Technology </li>
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
                <li>Adesegun Orafidiya – Category Manager, Head , Information and Digital Technology at BAT</li>
                <li>Ezekiel Olajolo – Product at Moniepoint</li>
                <li>Godson Nkeokelonye – MD/CEO at Excite Panacea</li>
                {{-- <li>Narendra Nagarkar – Chief Executive Officer, Bhojsons Group Plc</li> --}}
            </ul>
            <p><strong>Moderated by:</strong> Mark Wilhem – Managing Director at MarkWandCo</p>

            {{-- <p><strong>Please note:</strong> This video link will remain active for <strong>60 minutes</strong> from the time you received this email.</p> --}}

            <div class="cta">
                <a href=
                "{{ route('watch.panel2') }}" 
                target="_blank">🎥 Watch Panel 2 Video</a>
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
