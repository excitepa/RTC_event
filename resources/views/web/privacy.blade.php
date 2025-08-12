@extends('web.layout.overall')
@section("page_title", "About")
@section('content')
<!--Page Title-->
<section class="page-title" style="background-image:url(/public/images/background/bg6.png); background-color: rgba(0, 0, 0, 0.5);">
{{-- <section class="page-title" style="background-image:url(/public/images/background/5.jpg);"> --}}
    <div class="auto-container">
        <h1 style="color: #19184D">Privacy Policy</h1>
        <ul class="bread-crumb clearfix">
            <li style="color: #F5A01C;">
                <a href="{{ route('index') }}" style="color: inherit; text-decoration: none;">Home</a>
            </li>            
            {{-- <li style="color: #F5A01C;"><a href="{{ route('index') }}">Home</a></li> --}}
            {{-- <li style="color: #19184D;">About Us</li> --}}
            {{-- <li>About Us</li> --}}
        </ul>
        <h6 style="color: #19184D">Effective Date: 13th January, 2025 | Last Updated: 23rd June, 2025</h6>
    </div>
</section>

<style>
    h2 {
        font-size: 24px !important;
    }
</style>

<section class="event-detail">
    <div class="auto-container">

        <p>This Privacy Policy governs the manner in which Excite Panacea Limited, the parent company of Route to Market West Africa collects, uses, maintains and discloses information collected from users (each, a "User") of the website ("Site"). This privacy policy applies to the Site (rtmwestafrica.com) and all products and services offered by Excite Panacea Limited. </p>

        <div class="content-box">
            <h2>1. Information We Collect</h2>
            <p>We collect information that you provide to us directly, and information we gather automatically when you interact with our website or attend the Event.</p>
            <p>a. Personal Information <br> When you register for the Event, subscribe to our newsletter, or communicate with us, we may collect: <br> - Fullname <br> - Email Address <br> - Phone Number <br> - Job Title, Organization and Industry <br> - Country <br> - Any other information you voluntarily provide </p>
            <p>b. Media and Photography <br> During the Event, we may take photographs and record videos that include: <br> - Group shots <br> - Session coverage <br> - Interviews or testimonials <br> - Crowd and networking moments <br> These may include images or recordings of identifiable individuals. </p>
            <p></p>

            <h2>2. How We Use Your Information</h2>
            <p>Your personal data is collected and used for the following purposes: <br> - To process event registration and communicate with you about your attendance <br> - To send event updates, newsletters, and promotional content <br> - To respond to inquiries or feedback <br> - For internal analytics and event improvement <br> - To document and promote the Event through media coverage (photos/videos)</p>

            <h2>3. Use of Event Media (Photos & Videos) </h2>
            <p>By attending the RTM Event, you acknowledge and consent that: <br> - Your image or likeness may be captured in photos or videos during the Event <br> - These may be used for marketing, promotional, or archival purposes by RTM organizers <br> - Media may be published on our website, social media platforms, press releases, event recap materials, or future promotional content</p>
            <p>If you prefer not to appear in media content, you may: <br> - Notify the registration desk or media personnel at the Event <br> - Contact us in writing before or after the Event with any specific requests regarding identifiable content </p>

            <h2>4. Legal Basis for Processing </h2>
            <p>We process your personal data under the following lawful bases: - Your consent (for marketing and media use) <br> - Your consent (for marketing and media use) <br> - Contractual necessity (e.g., event registration) <br> - Legitimate interests (e.g., analytics, event planning, and security) <br> - Legal compliance where applicable </p>

            <h2>5. How We Share Your Data</h2>
            <p>We do not sell your personal data. We may share your data with: <br> - Event partners and sponsors (only with your consent) <br> - Service providers (e.g., email platforms, event registration tools) <br> - Legal authorities if required by law or legal process <br> All third parties are obligated to protect your data and use it only for authorized purposes.</p>

            <h2>6. Data Retention</h2>
            <p>We retain personal information only as long as necessary to: <br> - Fulfill the purposes outlined above <br> - Comply with legal or contractual obligations <br> - Maintain historical and promotional records of the Event <br> You may request deletion of your personal data by contacting us.</p>

            <h2>7. Your Data Rights</h2>
            <p>Subject to applicable law, you have the right to: <br> - Access your personal data <br> - Correct or update your data <br> - Withdraw consent (e.g., unsubscribe from emails) <br> - Request deletion of your data <br> - Object to or restrict processing in certain cases <br> To exercise any of these rights, please contact us at the email below.</p>

            <h2>8. Data Security</h2>
            <p>We implement appropriate technical and organizational measures to protect your data from unauthorized access, loss, or misuse. However, no system is 100% secure, and we encourage you to use caution when submitting personal information online.</p>

            <h2>9. Contact Us</h2>
            <p>If you have any questions, requests, or concerns about this Privacy Policy or your data, please contact: events@rtmwestafrica.com</p>

            <h2>10. Updates to This Policy</h2>
            <p>We may revise this Privacy Policy from time to time. Updates will be posted on this page with the effective date. We encourage you to review this page periodically to stay informed.</p>

        </div>
    </div>
</section>


@endsection
