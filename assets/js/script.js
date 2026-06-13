document.addEventListener('DOMContentLoaded', function () {

    // ─── PRIMARY COLOUR ─────────────────────────
    var primaryInput = document.getElementById('primary-color');
    var primarySwatch = document.getElementById('primary-swatch');

    if (primaryInput && primarySwatch) {
        primarySwatch.style.backgroundColor = primaryInput.value;
        primaryInput.addEventListener('input', function () {
            primarySwatch.style.backgroundColor = this.value;
        });
    }

    // ─── SECONDARY COLOUR (fixed!) ──────────────
    var secondaryInput = document.getElementById('secondary-color');
    var secondarySwatch = document.getElementById('secondary-swatch');

    if (secondaryInput && secondarySwatch) {
        secondarySwatch.style.backgroundColor = secondaryInput.value;
        secondaryInput.addEventListener('input', function () {
            secondarySwatch.style.backgroundColor = this.value;
        });
    }

    // ─── LOGO PREVIEW ───────────────────────────
    var logoInput = document.getElementById('logo');

    if (logoInput) {
        // Create a preview image element
        var preview = document.createElement('img');
        preview.style.maxHeight = '80px';
        preview.style.marginTop = '10px';
        preview.style.display = 'none';
        logoInput.parentNode.appendChild(preview);

        logoInput.addEventListener('change', function () {
            var file = this.files[0];
            if (file) {
                var reader = new FileReader();
                reader.onload = function (e) {
                    preview.src = e.target.result;
                    preview.style.display = 'block';
                };
                reader.readAsDataURL(file);
            }
        });
    }

    // ─── TAGLINE COUNTER ────────────────────────
    var taglineInput = document.getElementById('tagline');

    if (taglineInput) {
        var counter = document.createElement('p');
        counter.style.fontSize = '12px';
        counter.style.color = '#888';
        counter.style.marginTop = '4px';
        counter.textContent = '0 / 100 characters';
        taglineInput.parentNode.appendChild(counter);

        taglineInput.addEventListener('input', function () {
            var len = this.value.length;
            counter.textContent = len + ' / 100 characters';
            if (len > 100) {
                counter.style.color = 'red';
            } else {
                counter.style.color = '#888';
            }
        });
    }

    // ─── FORM VALIDATION ────────────────────────
    var form = document.querySelector('form');

    if (form) {
        form.addEventListener('submit', function (e) {
            var fullName = document.getElementById('name').value.trim();
            var company = document.getElementById('company').value.trim();
            var email = document.getElementById('email').value.trim();

            if (!fullName) {
                alert('Please enter your Full Name.');
                e.preventDefault();
                return;
            }

            if (!company) {
                alert('Please enter your Company Name.');
                e.preventDefault();
                return;
            }

            if (!email) {
                alert('Please enter your Email address.');
                e.preventDefault();
                return;
            }
        });
    }

});