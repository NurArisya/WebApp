<?php include 'header.php'; ?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <title>FAQ - MMU Talent</title>
    <link rel="stylesheet" href="../css/faq.css">
</head>

<body>

    <h1>Frequently Asked Questions</h1>

    <div class="faq-container">
        <div class="faq-item">
            <h3>How do I register for an account?</h3>
            <p>You can register by clicking the "Register" button on the homepage and filling in your details.</p>
        </div>

        <div class="faq-item">
            <h3>How can I upload my talent content?</h3>
            <p>Once logged in, navigate to your profile and use the upload form to share videos or images.</p>
        </div>

        <div class="faq-item">
            <h3>Who can view my profile?</h3>
            <p>Only registered users and admin can view profiles to ensure privacy and safety.</p>
        </div>

        <div class="faq-item">
            <h3>How can I contact support?</h3>
            <p>You can contact us using the "Contact Us" form in the About Us section.</p>
        </div>
    </div>
    <div class="feedback-form">
        <h2>Have a Question or Feedback?</h2>
        <form action="submit_feedback.php" method="POST">
            <label for="name">Your Name</label>
            <input type="text" name="name" required>

            <label for="email">Your Email</label>
            <input type="email" name="email" required>

            <label for="message">Your Question or Comment</label>
            <textarea name="message" required></textarea>

            <button type="submit">Submit Feedback</button>
        </form>
    </div>
</body>

</html>
