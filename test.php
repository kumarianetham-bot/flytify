<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>KUM Inc. Build Your Brochure</title>
    <link rel="stylesheet" href="assets/css/style.css">
</head>
<body>

    <div class="header">
        <div class="container">
            <div class="logo">
                 <img src="assets/images/kum-inc-logo-horizontal.svg" alt="Kum Inc Logo" height="40">
</div>
            </div>
            <div class="nav">
                <a href="index.php">Home</a>
                <a href="test.php">Create Yours</a>
            </div>
        </div>
    </div>

    <div class="builder">
        <div class="container">
            <h1>Create Your Brochure</h1>
            <p class="page-sub">Select a template and fill in your details.</p>

            <!--
            ==========================================
            STEP 1 — Choose a template
            ==========================================
            When you convert this page to PHP, you'll
            read the selected model with $_POST['model'].
            For now it's just a radio group.
            -->

            <form action="generate.php" method="POST" enctype="multipart/form-data">
            <div class="form-section">
                <h2>Step 1: Choose a Template</h2>

                <label class="model-option">
                    <input type="radio" name="model" value="model1" checked>
                    <span class="model-preview box-1">Model 1</span>
                    <span>Model 1 — Classic</span>
                </label>

                <label class="model-option">
                    <input type="radio" name="model" value="model2">
                    <span class="model-preview box-2">Model 2</span>
                    <span>Model 2 — Modern</span>
                </label>

                <!-- TODO: Add more model options here -->
            </div>

            <!--
            ==========================================
            STEP 2 — Your information
            ==========================================
            TODO: Add more fields (address, website, ...)
            -->

            <div class="form-section">
                <h2>Step 2: Your Information</h2>

                <div class="field">
                    <label for="name">Full Name *</label>
                    <input type="text"  name="company_name" id="name" placeholder="e.g. John patr">
                </div>

                <div class="field">
                    <label for="company">Company Name</label>
                    <input type="text" name="company_name" id="company" placeholder="e.g. Acme Inc.">
                </div>

                <div class="field">
                    <label for="tagline">Tagline / Slogan</label>
                    <input type="text" id="tagline"  name="tagline" placeholder="e.g. Building the future">
                </div>

                <div class="row">
                    <div class="field">
                        <label for="email">Email</label>
                        <input type="email" id="email"  name="email" placeholder="kum@example.com">
                    </div>
                    <div class="field">
                        <label for="phone">Phone</label>
                        <input type="tel" id="phone"  name="phone" placeholder="+237 234 567 890">
                    </div>
                </div>
            </div>

            <!--
            ==========================================
            STEP 3 — Choose colours
            ==========================================
            The PRIMARY colour preview already works.
            The SECONDARY colour preview is broken —
            your job is to make it work. Check script.js.
            -->

            <div class="form-section">
                <h2>Step 3: Choose Your Colours</h2>

                <div class="row">
                    <div class="field">
                        <label for="primary-color">Primary Colour</label>
                        <input type="color" id="primary-color" value="#3B82F6" name="primary_color>
                        <div class="swatch" id="primary-swatch"></div>
                    </div>
                    <div class="field">
                        <label for="secondary-color">Secondary Colour</label>
                        <input type="color" id="secondary-color" value="#1E3A5F"  name="secondary_color">
                    
                        <!-- TODO: The swatch below doesn't update yet.
                             Fix it by adding an event listener in script.js -->
                        <div class="swatch" id="secondary-swatch"></div>
                    </div>
                </div>
            </div>

            <!--
            ==========================================
            STEP 4 — Upload logo
            ==========================================
            TODO: When you add PHP, use enctype="multipart/form-data"
            and handle the file with $_FILES.
            -->

            <div class="form-section">
                <h2>Step 4: Upload Your Logo</h2>
                <div class="field">
                    <label for="logo">Logo Image</label>
                    <input type="file" id="logo" accept="image/png, image/jpeg" name="logo">
                    <p class="hint">Accepted: PNG, JPG. Max 2MB.</p>
                </div>
            </div>

            <!--
            ==========================================
            SUBMIT
            ==========================================
            When this becomes PHP, change the button to
            <button type="submit"> and wrap everything
            inside <form action="generate.php" method="POST"
            enctype="multipart/form-data">
            -->

            <div class="form-section action-row">
          <button type="submit" class="btn">Generate My Brochure</button>
            </div>       
 </form>
        </div>
    </div>

    <div class="footer">
        <div class="container">
            <p>&copy; 2026 Kum Inc. All rights reserved.</p>
        </div>
    </div>

    <script src="assets/js/script.js"></script>
    
</body>
</html>
