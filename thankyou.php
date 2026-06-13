<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Brochure Generated — Kum Inc.</title>
    <link rel="stylesheet" href="assets/css/style.css">
</head>
<body>

    <div class="header">
        <div class="container">
            <div class="logo">
                <img src="assets/images/kum-inc-logo-horizontal.svg" alt="Kum Inc Logo" height="40">
            </div>
            <div class="nav">
                <a href="index.php">Home</a>
                <a href="test.php">Create Yours</a>
            </div>
        </div>
    </div>

    <div class="hero">
        <div class="container" style="text-align:center; padding: 60px 20px;">
            <h1>🎉 Your Brochure is Ready!</h1>
            <p class="hero-sub">Thank you <strong><?php echo htmlspecialchars($_GET['name'] ?? 'there'); ?></strong>! Your brochure has been generated successfully.</p>

            <div style="margin-top: 30px; display: flex; gap: 15px; justify-content: center; flex-wrap: wrap;">
                <a href="<?php echo htmlspecialchars($_GET['brochure'] ?? '#'); ?>" class="btn" target="_blank">
                    View My Brochure
                </a>
                <a href="test.php" class="btn" style="background:#1E3A5F;">
                    Create Another
                </a>
                <a href="index.php" class="btn" style="background:#888;">
                    Go Home
                </a>
            </div>
        </div>
    </div>

    <div class="footer">
        <div class="container">
            <p>&copy; 2026 Kum Inc. All rights reserved.</p>
        </div>
    </div>

</body>
</html>