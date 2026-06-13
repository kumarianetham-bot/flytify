-- ============================================
-- DATABASE SCHEMA — Flytify Brochure Generator
-- ============================================

CREATE TABLE submissions (
    -- Unique ID for each brochure (auto-generated)
    id INT AUTO_INCREMENT PRIMARY KEY,

    -- The person's full name (required)
    full_name VARCHAR(255) NOT NULL,

    -- Their email address
    email VARCHAR(255),

    -- Their phone number
    phone VARCHAR(50),

    -- The user's company name
    company_name VARCHAR(255),

    -- Their slogan
    tagline VARCHAR(255),

    -- Their primary brand colour (hex e.g. #3B82F6)
    primary_color VARCHAR(7),

    -- Their secondary brand colour
    secondary_color VARCHAR(7),

    -- Where their uploaded logo is saved
    custom_image_path VARCHAR(500),

    -- Which template they chose (model1 or model2)
    model VARCHAR(50),

    -- When the brochure was created (auto-set)
    created_at TIMESTAMP DEFAULT CURRENT_TIMESTAMP
);

