<!DOCTYPE html>
<html>
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Thank You for Registering</title>
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
        <img src="{{ asset('images/emailbanner.png') }}" alt="Event Banner" class="banner">
        <div class="header">
            Thank You for Registering for Our Event!
        </div>
        <div class="content">
            <p>Dear <strong>{{ $user->full_name }}</strong>,</p>
            <p>We appreciate your interest in <strong>"The Margin of Trust: Why Community is the New Currency in Fragmented Markets"</strong>.</p>
            <p>Here’s what you can expect from the session:</p>
            <ul>
                <li>Hear from leading experts and practitioners sharing insights, case studies and best practices.</li>
                <li>Get a firsthand look at an innovative solution that's making waves in the industry</li>
                <li>Deep dive into specific topics & collaborate on solutions with like-minded peers.</li>
                <li>Opportunities for attendees to connect, network, and learn about solutions from relevant vendors and service providers.</li>
            </ul>
            <p><strong>📅 Date:</strong> 18TH & 19TH JUNE 2026</p>
            <p><strong>🕒 Time:</strong> 9AM</p>
            <p><strong>📍 Venue:</strong> MARRIOTT HOTEL</p>
            <!--<h4>Meet Our Speakers:</h4>-->
            <!--<ul>-->
            <!--    <li>🎤 [Senior Executive from Excite Panacea]</li>-->
            <!--    <li>🎤 [NAFDAC Representative]</li>-->
            <!--    <li>🎤 [SON Official]</li>-->
            <!--    <li>🎤 [Policy Maker/Government Official]</li>-->
            <!--    <li>🎤 [Industry Expert from a Leading Brand]</li>-->
            <!--</ul>-->
            {{-- <div class="cta">
                <a href="#">Add to Calendar</a>
            </div> --}}
            <p>We look forward to your participation in this transformative discussion!</p>
        </div>
        <div class="footer">
            &copy; 2026 Excite Panacea. All rights reserved.
        </div>
    </div>
</body>
</html>
