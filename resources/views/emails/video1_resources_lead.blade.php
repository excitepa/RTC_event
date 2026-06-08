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
        <img src="{{ asset('/public/images/resource/macro.png') }}" alt="Webinar Banner" class="banner">
        <div class="header">
            Your RTM Panel 1 Video is Ready to Watch!
        </div>
        <div class="content">
            <p>Hi {{ $lead->full_name }},</p>
            <p>Thank you for your interest in the <strong>Route to Market West Africa Summit</strong>.</p>
            <p>We are excited to share with you the recording of <strong>Panel Session 1 – Economic Factors Impacting Consumer Markets</strong>, an insightful discussion that explores how macroeconomic trends are shaping consumer behavior and market demand in today’s dynamic economies.</p>

            <p><strong>Session Details:</strong></p>
            <ul>
                <li><strong>Session Title:</strong> Economic Factors Impacting Consumer Markets</li>
                <li><strong>Recorded at:</strong> RTM Conference 2025</li>
                <li> <strong>Panel Session 1</strong></li>
                <li><strong>Theme:</strong> Macroeconomic Trends & Consumer Spending</li>
            </ul>

            <p><strong>In this session, you’ll discover:</strong></p>
            <ul>
                <li>How inflation impacts purchasing power and product pricing.</li>
                <li>The role of currency fluctuations on imports, exports, and cost of goods.</li>
                <li>Economic growth patterns and their influence on disposable income and consumer confidence.</li>
                <li>Strategic ways to adapt marketing and distribution models in volatile economies.</li>
            </ul>

            <p><strong>Panelists Include:</strong></p>
            <ul>
                <li>Victor Ndukauba – Deputy Managing Director at Afrinvest West Africa</li>
                <li>Ugo Obi-Chukwu – Founder/CEO at Nairametrics</li>
                <li>Modupe Femi-Okunbanjo – Finance Controller at Unilever</li>
                <li>Narendra Nagarkar – Chief Executive Officer at Bhojsons Group Plc</li>
            </ul>
            <p><strong>Moderated by:</strong> Olatunji Gbesan – Managing Partner at Crimson Oak Partners</p>

            {{-- <p><strong>Please note:</strong> This video link will remain active for <strong>60 minutes</strong> from the time you received this email.</p> --}}

            <div class="cta">
                <a href=
                "{{ route('watch.panel1') }}" 
                target="_blank">🎥 Watch Panel 1 Video</a>
            </div>

            <p>If you have any trouble accessing the video, feel free to contact us at 
            <a href="mailto:events@rtmwestafrica.com">events@rtmwestafrica.com</a>.
            </p>

            <p>We hope this session equips you with valuable insights to navigate today’s economic challenges and opportunities.</p>
        </div>

        <div class="footer">
            &copy; 2026 Excite Panacea. All rights reserved.
        </div>
    </div>

</body>
</html>
