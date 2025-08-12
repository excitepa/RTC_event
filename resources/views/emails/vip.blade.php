<!DOCTYPE html>
<html>
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Thank You for Confirming</title>
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
        <img src="{{ asset('images/vip-banner.png') }}" alt="Webinar Banner" class="banner">
        <div class="header">
            🎉 Thank You for Confirming Your VIP Attendance! 🎉
        </div>
        <div class="content">
            <p>Dear {{ $user->full_name }},</p>
            <p>We appreciate your interest in <strong>"Building a Consumer-
                Centric Route-to-Market"</strong>.</p>
            <p>Here’s what you can expect from the session:</p>
            <ul>
                <li>✅ Hear from leading experts and practitioners sharing insights, case studies and best practices.</li>
                <li>✅ Get a firsthand look at an innovative solution that's making waves in the industry</li>
                <li>✅ Deep dive into specific topics & collaborate on solutions with like-minded peers.</li>
                <li>✅ Opportunities for attendees to connect, network, and learn about solutions from relevant vendors and service providers.</li>
            </ul>
            <p><strong>📅 Date:</strong> 19TH - 20TH JUNE 2025</p>
            <p><strong>🕒 Time:</strong> 10AM</p>
            <p><strong>📍 Venue:</strong> MARRIOTT HOTEL</p>
            {{-- <h4>Meet Our Speakers:</h4>
            <ul>
                <li>🎤 [Senior Executive from Excite Panacea]</li>
                <li>🎤 [NAFDAC Representative]</li>
                <li>🎤 [SON Official]</li>
                <li>🎤 [Policy Maker/Government Official]</li>
                <li>🎤 [Industry Expert from a Leading Brand]</li>
            </ul> --}}
            {{-- <div class="cta">
                <a href="#">Add to Calendar</a>
            </div> --}}
            <p>We look forward to your participation in this transformative discussion!</p>
        </div>
        <div class="content">
            <p>Dear {{ $user->full_name }},</p>
            
            <p>We are thrilled to confirm your VIP attendance at the <strong>RTM West Africa Summit 2025</strong>, themed <strong>"Building a Consumer-Centric Route-to-Market."</strong></p>

            <p>As one of our esteemed guests, you will be part of an exclusive group of industry leaders, decision-makers, and visionaries shaping the future of FMCG distribution, marketing, and retail innovation across West Africa.</p>

            <p><strong>What to expect:</strong></p>
            <ul>
                <li>✅ Insightful keynotes and discussions led by senior executives and thought leaders</li>
                <li>✅ Deep dives into actionable strategies across Sales, Supply Chain, Analytics, and Technology</li>
                <li>✅ Exclusive VIP networking sessions with high-level professionals and partners</li>
                <li>✅ A front-row seat to innovation showcases and future-focused conversations</li>
            </ul>

            <p><strong>📅 Date:</strong> 19th – 20th June 2025</p>
            <p><strong>🕒 Time:</strong> 9:00 AM – 5:00 PM (daily)</p>
            <p><strong>📍 Venue:</strong> Lagos Marriott Hotel, Ikeja GRA, Lagos</p>

            <p>We’re honored to have you join us and look forward to providing a rewarding and unforgettable experience.</p>

            <p>If you have any questions, feel free to reach out at <a href="mailto:bukola@rtmwestafrica.com">bukola@rtmwestafrica.com</a>.</p>

            <p>See you there!</p>
        </div>

        <div class="footer">
            &copy; 2025 Excite Panacea. All rights reserved.
        </div>
    </div>
</body>
</html>
