<!DOCTYPE html>
<html>
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>RTM Keynote Video</title>
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
        <img src="{{ asset('images/resource/day1keynote.png') }}" alt="Webinar Banner" class="banner">
        <div class="header">
            Your RTM Day 1, Keynote Speech Video is Ready to Watch!
        </div>
        <div class="content">
            {{-- <p>Hi {{ $lead->full_name }},</p> --}}
            <p>Thank you for your interest in the <strong>Route to Market West Africa Summit</strong>.</p>
            <p>We are excited to share with you the recording of <strong>Keynote Speech – Building a Consumer-Centric Route to Market</strong>, harnessing insights and technology for success.</p>

            <p><strong>Session Details:</strong></p>
            <ul>
                <li>📍 <strong>Session Title:</strong> Building a Consumer-Centric Route to Market</li>
                <li>📅 <strong>Recorded at:</strong> RTM Conference 2025</li>
                <li>🎙️ <strong>Day 1, Keynote Speech</strong></li>
                <li>🎯 <strong>Theme:</strong> Consumer-Centric RTM </li>
            </ul>

            <p><strong>In this session, you’ll discover:</strong></p>
            <ul>
                <li>🔍 How data-driven insights can uncover consumer needs, preferences, and behaviors that shape market entry and growth strategies.</li>
                <li>⚡ The role of technology in creating agile, efficient, and responsive route-to-market models that keep pace with evolving demands.</li>
                <li>🤝 Strategies for aligning distributors, retailers, and partners around consumer-centric goals to maximize impact and collaboration.</li>
                <li>🚀 Practical ways to blend innovation, automation, and real-time analytics to drive smarter decisions and sustainable business success.</li>
            </ul>

            <p><strong>By: Narendra Nagarkar – Chief Executive Officer & Director at Bhojsons PLC</strong></p>

            {{-- <p><strong>Please note:</strong> This video link will remain active for <strong>60 minutes</strong> from the time you received this email.</p> --}}

            <div class="cta">
                <a href=
                "{{ route('watch.keynote1') }}" 
                target="_blank">🎥 Watch Keynote Speech Video</a>
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
