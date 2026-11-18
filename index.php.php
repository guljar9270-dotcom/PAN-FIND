<?php
// Site Configuration & SEO Meta Variables
$site_name = "PANFind.site";
$site_url = "https://panfind.site";
$login_url = "https://panfind.site/login.php";
$register_url = "https://panfind.site/register.php";
$support_phone = "+91 8871023891"; // Aap apna number yahan update kar sakte hain
$support_email = "support@panfind.site";
$current_year = date("Y");
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    
    <!-- Primary SEO Meta Tags (High-Volume Keywords Integrated) -->
    <title>PAN Find | Find Lost PAN Number by Aadhaar | PAN Verify &amp; API - <?php echo $site_name; ?></title>
    <meta name="description" content="Instant PAN Find &amp; Find Lost PAN Number by Aadhaar online. Fast Aadhaar to PAN Number search, PAN Verification, Agent Portal, and JSON API services across India.">
    <meta name="keywords" content="pan find, pan number find, find pan number, find pan card number, find lost pan number, aadhar no to pan no find, find pan number by aadhaar, pan verify, pan find api, retrieve lost pan, aadhaar pan link status, आधार नंबर से पैन नंबर सर्च करें">
    <meta name="robots" content="index, follow, max-snippet:-1, max-image-preview:large">
    <link rel="canonical" href="<?php echo $site_url; ?>/">

    <!-- Open Graph / Social Media SEO -->
    <meta property="og:type" content="website">
    <meta property="og:url" content="<?php echo $site_url; ?>/">
    <meta property="og:title" content="PAN Find - Instant Find Lost PAN Number by Aadhaar &amp; PAN API">
    <meta property="og:description" content="Retrieve your lost PAN card number using Aadhaar instantly. Retailer &amp; Agent plans with low-cost wallet hits and developer API.">

    <!-- Google Fonts -->
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link href="https://fonts.googleapis.com/css2?family=Inter:wght@400;500;600;700;800&display=swap" rel="stylesheet">

    <!-- Schema.org FAQ & SoftwareApplication Structured Data (Google Rich Snippets ke liye) -->
    <script type="application/ld+json">
    {
      "@context": "https://schema.org",
      "@graph": [
        {
          "@type": "WebSite",
          "name": "PANFind.site",
          "url": "<?php echo $site_url; ?>/",
          "description": "Instant PAN Find, Lost PAN Number Recovery via Aadhaar, PAN Verification, and API Portal."
        },
        {
          "@type": "FAQPage",
          "mainEntity": [
            {
              "@type": "Question",
              "name": "How to find lost PAN number by Aadhaar?",
              "acceptedAnswer": {
                "@type": "Answer",
                "text": "You can find your lost PAN number using your 12-digit Aadhaar number through our instant search portal or via the official Income Tax e-PAN portal."
              }
            },
            {
              "@type": "Question",
              "name": "How long does PAN Number Find take?",
              "acceptedAnswer": {
                "@type": "Answer",
                "text": "With our automated PAN Find tool and API, retrieving PAN details from Aadhaar takes just a few seconds."
              }
            },
            {
              "@type": "Question",
              "name": "Is PANFind.site a government website?",
              "acceptedAnswer": {
                "@type": "Answer",
                "text": "No, PANFind.site is an independent private digital service and API facilitator portal, not affiliated with the Income Tax Department, NSDL, or UTIITSL."
              }
            }
          ]
        }
      ]
    }
    </script>

    <style>
        :root {
            --primary: #1d4ed8;
            --primary-dark: #1e3a8a;
            --accent: #0ea5e9;
            --bg-light: #f8fafc;
            --text-dark: #0f172a;
            --text-muted: #475569;
            --border: #e2e8f0;
            --success: #16a34a;
        }
        * { margin: 0; padding: 0; box-sizing: border-box; font-family: 'Inter', sans-serif; }
        body { color: var(--text-dark); background-color: #ffffff; line-height: 1.6; }
        a { text-decoration: none; color: inherit; }
        .container { max-width: 1200px; margin: 0 auto; padding: 0 20px; }

        /* Top Disclaimer Banner */
        .top-notice {
            background: #fef3c7;
            color: #92400e;
            font-size: 13px;
            text-align: center;
            padding: 8px 15px;
            font-weight: 500;
            border-bottom: 1px solid #fde68a;
        }

        /* Navbar */
        header {
            background: #ffffff;
            border-bottom: 1px solid var(--border);
            position: sticky;
            top: 0;
            z-index: 1000;
        }
        .nav-wrapper {
            display: flex;
            justify-content: space-between;
            align-items: center;
            height: 72px;
        }
        .logo {
            font-size: 24px;
            font-weight: 800;
            color: var(--primary);
            letter-spacing: -0.5px;
        }
        .logo span { color: var(--text-dark); }
        .nav-links { display: flex; gap: 24px; list-style: none; font-weight: 500; font-size: 15px; }
        .nav-links a:hover { color: var(--primary); }
        .auth-buttons { display: flex; gap: 12px; }
        .btn {
            padding: 10px 20px;
            border-radius: 8px;
            font-weight: 600;
            font-size: 14px;
            transition: all 0.2s ease;
            display: inline-block;
            cursor: pointer;
        }
        .btn-outline { border: 1.5px solid var(--primary); color: var(--primary); background: transparent; }
        .btn-outline:hover { background: #eff6ff; }
        .btn-primary { background: var(--primary); color: #ffffff; border: 1.5px solid var(--primary); }
        .btn-primary:hover { background: var(--primary-dark); }

        /* Hero Section */
        .hero {
            background: linear-gradient(135deg, #eff6ff 0%, #ffffff 100%);
            padding: 70px 0;
            text-align: center;
            border-bottom: 1px solid var(--border);
        }
        .badge {
            display: inline-block;
            background: #dbeafe;
            color: var(--primary-dark);
            padding: 6px 14px;
            border-radius: 50px;
            font-size: 13px;
            font-weight: 600;
            margin-bottom: 18px;
        }
        .hero h1 {
            font-size: 42px;
            font-weight: 800;
            line-height: 1.2;
            margin-bottom: 16px;
            color: var(--text-dark);
        }
        .hero p {
            font-size: 18px;
            color: var(--text-muted);
            max-width: 750px;
            margin: 0 auto 30px;
        }
        .hero-cta { display: flex; justify-content: center; gap: 16px; flex-wrap: wrap; }
        .btn-lg { padding: 14px 28px; font-size: 16px; }

        /* Keyword Tags Bar */
        .keyword-strip {
            background: var(--bg-light);
            padding: 14px 0;
            border-bottom: 1px solid var(--border);
            text-align: center;
            font-size: 13px;
            color: var(--text-muted);
        }
        .keyword-strip span {
            display: inline-block;
            background: #fff;
            border: 1px solid var(--border);
            padding: 4px 10px;
            border-radius: 4px;
            margin: 3px;
        }

        /* Section Common */
        section { padding: 65px 0; }
        .section-title { text-align: center; margin-bottom: 45px; }
        .section-title h2 { font-size: 32px; font-weight: 700; margin-bottom: 10px; }
        .section-title p { color: var(--text-muted); max-width: 650px; margin: 0 auto; }

        /* Services Grid */
        .grid-3 { display: grid; grid-template-columns: repeat(auto-fit, minmax(300px, 1fr)); gap: 25px; }
        .card {
            background: #ffffff;
            border: 1px solid var(--border);
            border-radius: 12px;
            padding: 28px;
            transition: transform 0.2s, box-shadow 0.2s;
        }
        .card:hover { transform: translateY(-4px); box-shadow: 0 12px 24px rgba(0,0,0,0.06); }
        .card h3 { font-size: 20px; margin-bottom: 10px; color: var(--primary-dark); }
        .card p { color: var(--text-muted); font-size: 15px; margin-bottom: 16px; }
        .price-tag { font-size: 22px; font-weight: 800; color: var(--text-dark); margin-bottom: 16px; }
        .price-tag small { font-size: 13px; font-weight: 500; color: var(--text-muted); }
        .feature-list { list-style: none; margin-bottom: 22px; font-size: 14px; }
        .feature-list li { margin-bottom: 8px; padding-left: 20px; position: relative; }
        .feature-list li::before { content: "✓"; color: var(--success); position: absolute; left: 0; font-weight: bold; }

        /* How it Works / SEO Guide */
        .guide-bg { background: var(--bg-light); border-top: 1px solid var(--border); border-bottom: 1px solid var(--border); }
        .steps-grid { display: grid; grid-template-columns: repeat(auto-fit, minmax(240px, 1fr)); gap: 20px; }
        .step-box { background: #fff; padding: 24px; border-radius: 10px; border: 1px solid var(--border); }
        .step-num {
            width: 36px; height: 36px; background: var(--primary); color: #fff;
            border-radius: 50%; display: flex; align-items: center; justify-content: center;
            font-weight: 700; margin-bottom: 14px;
        }

        /* Pricing Plans */
        .plan-featured { border: 2px solid var(--primary); position: relative; }
        .popular-ribbon {
            position: absolute; top: -12px; right: 20px;
            background: var(--primary); color: #fff; font-size: 12px;
            font-weight: 700; padding: 3px 12px; border-radius: 20px;
        }

        /* FAQ & SEO Content */
        .faq-item {
            border: 1px solid var(--border);
            border-radius: 8px;
            padding: 20px;
            margin-bottom: 15px;
            background: #fff;
        }
        .faq-item h3 { font-size: 17px; margin-bottom: 8px; color: var(--text-dark); }
        .faq-item p { font-size: 14.5px; color: var(--text-muted); }

        /* Footer */
        footer { background: #0f172a; color: #cbd5e1; padding: 55px 0 25px; font-size: 14px; }
        .footer-grid { display: grid; grid-template-columns: repeat(auto-fit, minmax(220px, 1fr)); gap: 30px; margin-bottom: 40px; }
        footer h4 { color: #ffffff; font-size: 16px; margin-bottom: 16px; }
        footer ul { list-style: none; }
        footer ul li { margin-bottom: 10px; }
        footer ul a:hover { color: #ffffff; text-decoration: underline; }
        .disclaimer-box {
            background: #1e293b;
            padding: 16px;
            border-radius: 8px;
            font-size: 12.5px;
            color: #94a3b8;
            margin-bottom: 25px;
            border-left: 4px solid #f59e0b;
        }
        .copyright { text-align: center; border-top: 1px solid #1e293b; padding-top: 20px; font-size: 13px; }

        @media (max-width: 768px) {
            .nav-links { display: none; }
            .hero h1 { font-size: 30px; }
        }
    </style>
</head>
<body>

    <!-- Top Legal Compliance Notice -->
    <div class="top-notice">
        ⚠️ INDEPENDENT DIGITAL PORTAL — Private Facilitator &amp; Information Guide. Not affiliated with Income Tax Dept, NSDL, or UTIITSL.
    </div>

    <!-- Header / Navigation -->
    <header>
        <div class="container nav-wrapper">
            <a href="<?php echo $site_url; ?>/" class="logo">PAN<span>Find.site</span></a>
            <ul class="nav-links">
                <li><a href="#home">Home</a></li>
                <li><a href="#services">Services</a></li>
                <li><a href="#how-to-find">How to Find PAN</a></li>
                <li><a href="#pricing">Agent Plans &amp; API</a></li>
                <li><a href="#faq">FAQ</a></li>
            </ul>
            <div class="auth-buttons">
                <a href="<?php echo $login_url; ?>" class="btn btn-outline">Login</a>
                <a href="<?php echo $register_url; ?>" class="btn btn-primary">Register</a>
            </div>
        </div>
    </header>

    <!-- Hero Section -->
    <section class="hero" id="home">
        <div class="container">
            <span class="badge">Instant Aadhaar to PAN Number Search • Retailer &amp; API Portal</span>
            <h1>PAN Find: Find Lost PAN Number by Aadhaar Instantly</h1>
            <p>
                Retrieve your forgotten 10-digit Permanent Account Number (PAN) in seconds. Complete solution for <strong>Aadhar No to PAN No Find (Instant &amp; Manual)</strong>, <strong>PAN Verify</strong>, and <strong>PAN Find JSON API</strong> for businesses, CSC centers, and agents across India.
            </p>
            <div class="hero-cta">
                <a href="<?php echo $login_url; ?>" class="btn btn-primary btn-lg">Start PAN Find Now →</a>
                <a href="<?php echo $register_url; ?>" class="btn btn-outline btn-lg">Create Agent Account</a>
            </div>
        </div>
    </section>

    <!-- High-Search Keywords Strip -->
    <div class="keyword-strip">
        <div class="container">
            <strong>Popular Searches:</strong>
            <span>Pan Find</span>
            <span>Pan Number Find</span>
            <span>Find Lost Pan Number</span>
            <span>Find Pan Card Number</span>
            <span>Aadhar No To Pan No Find</span>
            <span>आधार नंबर से पैन नंबर सर्च करें</span>
            <span>PAN Verify API</span>
        </div>
    </div>

    <!-- Services Section -->
    <section id="services">
        <div class="container">
            <div class="section-title">
                <h2>Simple, Secure &amp; Reliable PAN Services</h2>
                <p>Fast digital verification and lost PAN card number recovery services for individuals, retailers, and fintech platforms.</p>
            </div>

            <div class="grid-3">
                <!-- Service 1 -->
                <div class="card">
                    <h3>Aadhaar to PAN Find (Instant)</h3>
                    <p>आधार नंबर से केवल पैन नंबर सर्च करें। Get your full PAN number from your 12-digit Aadhaar number in just a few seconds.</p>
                    <div class="price-tag">₹19.00 <small>/ per request</small></div>
                    <ul class="feature-list">
                        <li>Instant Lost PAN Number Recovery</li>
                        <li>High-Speed Server Response</li>
                        <li>Search Reports List History</li>
                        <li>24/7 Automated Portal Access</li>
                    </ul>
                    <a href="<?php echo $login_url; ?>" class="btn btn-primary" style="width:100%; text-align:center;">Try PAN Find →</a>
                </div>

                <!-- Service 2 -->
                <div class="card">
                    <h3>PAN Verify Service</h3>
                    <p>Verify PAN card details with accurate name matching, status check, and date of birth verification for KYC compliance.</p>
                    <div class="price-tag">₹10.00 <small>/ per request</small></div>
                    <ul class="feature-list">
                        <li>Full Name &amp; Category Matching</li>
                        <li>Active / Inoperative Status Check</li>
                        <li>Aadhaar-PAN Link Status Check</li>
                        <li>Instant Digital Report</li>
                    </ul>
                    <a href="<?php echo $login_url; ?>" class="btn btn-primary" style="width:100%; text-align:center;">Try PAN Verify →</a>
                </div>

                <!-- Service 3 -->
                <div class="card">
                    <h3>PAN Find &amp; Verify JSON API</h3>
                    <p>Integrate PAN Find service directly into your website, mobile app, or B2B retailer portal with our developer-friendly JSON API.</p>
                    <div class="price-tag">₹5.00 <small>/ per API hit</small></div>
                    <ul class="feature-list">
                        <li>99.9% Uptime &amp; Fast JSON Response</li>
                        <li>Complete API Documentation after Login</li>
                        <li>Best for Fintech &amp; Digital Portals</li>
                        <li>Instant Wallet &amp; UPI Top-up</li>
                    </ul>
                    <a href="<?php echo $register_url; ?>" class="btn btn-outline" style="width:100%; text-align:center;">Get API Access →</a>
                </div>
            </div>
        </div>
    </section>

    <!-- SEO Informational Guide: How to Pan Number Find -->
    <section class="guide-bg" id="how-to-find">
        <div class="container">
            <div class="section-title">
                <h2>How to Find Lost PAN Number by Aadhaar</h2>
                <p>Complete guide to retrieve your lost PAN card number through our agent dashboard or official government portals.</p>
            </div>

            <div class="steps-grid">
                <div class="step-box">
                    <div class="step-num">1</div>
                    <h3>Register or Login</h3>
                    <p>Create an account on <strong>PANFind.site</strong> or use the official Income Tax portal (incometax.gov.in) Instant e-PAN facility.</p>
                </div>
                <div class="step-box">
                    <div class="step-num">2</div>
                    <h3>Enter Aadhaar Number</h3>
                    <p>Input the 12-digit Aadhaar number carefully to initiate the <strong>Aadhaar to PAN Number Find</strong> search process.</p>
                </div>
                <div class="step-box">
                    <div class="step-num">3</div>
                    <h3>Instant Verification</h3>
                    <p>Our secure system processes the request via authorized verification channels with safe UPI wallet checkout.</p>
                </div>
                <div class="step-box">
                    <div class="step-num">4</div>
                    <h3>Retrieve PAN Details</h3>
                    <p>View your 10-digit alphanumeric PAN number immediately and download e-PAN PDF via NSDL (Protean) or UTIITSL.</p>
                </div>
            </div>
        </div>
    </section>

    <!-- Agent & Retailer Pricing Plans -->
    <section id="pricing">
        <div class="container">
            <div class="section-title">
                <h2>Agent &amp; Retailer Plans</h2>
                <p>Choose the best wallet plan for your online center, digital shop, or business needs.</p>
            </div>

            <div class="grid-3">
                <div class="card">
                    <h3>Premium Retailer</h3>
                    <p>Best for individual agents &amp; online centers</p>
                    <div class="price-tag">₹99.00 <small>/ one-time activation</small></div>
                    <ul class="feature-list">
                        <li>PAN Find @ ₹15.00 / search</li>
                        <li>PAN Verify @ ₹7.00 / search</li>
                        <li>Wallet + Instant UPI QR Top-up</li>
                        <li>Search Reports List Access</li>
                    </ul>
                    <a href="<?php echo $register_url; ?>" class="btn btn-outline" style="width:100%; text-align:center;">Register Premium</a>
                </div>

                <div class="card plan-featured">
                    <span class="popular-ribbon">Most Popular</span>
                    <h3>Diamond Agent</h3>
                    <p>Lowest search rate for high-volume centers</p>
                    <div class="price-tag">₹199.00 <small>/ one-time activation</small></div>
                    <ul class="feature-list">
                        <li>PAN Find @ ₹10.00 / search</li>
                        <li>PAN Verify @ ₹5.00 / search</li>
                        <li>Login-protected Wallet Hits</li>
                        <li>Priority WhatsApp &amp; Call Support</li>
                    </ul>
                    <a href="<?php echo $register_url; ?>" class="btn btn-primary" style="width:100%; text-align:center;">Choose Diamond →</a>
                </div>

                <div class="card">
                    <h3>Enterprise API Plan</h3>
                    <p>For software platforms &amp; portals</p>
                    <div class="price-tag">₹699.00 <small>/ API access</small></div>
                    <ul class="feature-list">
                        <li>PAN Find API @ ₹5.00 / hit</li>
                        <li>PAN Verify API @ ₹5.00 / hit</li>
                        <li>Live API Key &amp; Full JSON Docs</li>
                        <li>Dedicated Technical Integration Help</li>
                    </ul>
                    <a href="<?php echo $register_url; ?>" class="btn btn-outline" style="width:100%; text-align:center;">Choose API Plan</a>
                </div>
            </div>
        </div>
    </section>

    <!-- Frequently Asked Questions (SEO Rich Text) -->
    <section class="guide-bg" id="faq">
        <div class="container">
            <div class="section-title">
                <h2>Frequently Asked Questions (PAN Find Guide)</h2>
                <p>Everything you need to know about recovering your forgotten PAN number and Aadhaar linking.</p>
            </div>

            <div class="faq-item">
                <h3>1. Why might you need to find your lost PAN card number?</h3>
                <p>PAN is mandatory for Income Tax Return (ITR) filing, opening a bank account, high-value transactions, mutual fund investments, employment KYC, and applying for a duplicate physical PAN card reprint via Protean (NSDL) or UTIITSL.</p>
            </div>

            <div class="faq-item">
                <h3>2. Can I find my PAN number free of cost on government portals?</h3>
                <p>Yes, if your mobile number is linked with your Aadhaar card, you can check your PAN details and download Instant e-PAN for free on the official Income Tax portal (incometax.gov.in). Our portal provides fast assisted search tools and API solutions for agents and businesses.</p>
            </div>

            <div class="faq-item">
                <h3>3. What happens if PAN is not linked with Aadhaar?</h3>
                <p>As per Income Tax Act guidelines, if you do not link your PAN with Aadhaar, your PAN card may become inoperative, which can affect banking operations, TDS deductions, and tax filings.</p>
            </div>

            <div class="faq-item">
                <h3>4. Is my data safe on PANFind.site?</h3>
                <p>Yes. We operate in compliance with the Information Technology Act, 2000. We store only minimal transaction records required for your wallet history and payment verification.</p>
            </div>
        </div>
    </section>

    <!-- Footer -->
    <footer>
        <div class="container">
            <div class="disclaimer-box">
                <strong>LEGAL DISCLAIMER (IT Act 2000 Compliance):</strong> PANFind.site is an independent private digital service facilitator and informational portal. We are <strong>NOT affiliated with the Income Tax Department, Ministry of Finance, Government of India, NSDL (Protean), or UTIITSL</strong>. Official government portals: <a href="https://www.incometax.gov.in" target="_blank" rel="nofollow" style="color:#38bdf8;">incometax.gov.in</a> | <a href="https://www.onlineservices.nsdl.com" target="_blank" rel="nofollow" style="color:#38bdf8;">NSDL PAN</a> | <a href="https://www.pan.utiitsl.com" target="_blank" rel="nofollow" style="color:#38bdf8;">UTIITSL PAN</a>.
            </div>

            <div class="footer-grid">
                <div>
                    <h4>PANFind.site</h4>
                    <p>Fast and secure PAN Find, Lost PAN Number search via Aadhaar, PAN Verify, and B2B API services across India.</p>
                </div>
                <div>
                    <h4>Quick Links</h4>
                    <ul>
                        <li><a href="#home">Home</a></li>
                        <li><a href="#services">PAN Find Services</a></li>
                        <li><a href="#pricing">Agent Plans &amp; API</a></li>
                        <li><a href="<?php echo $login_url; ?>">Agent Login</a></li>
                        <li><a href="<?php echo $register_url; ?>">Agent Register</a></li>
                    </ul>
                </div>
                <div>
                    <h4>Related Services</h4>
                    <ul>
                        <li><a href="<?php echo $login_url; ?>">Aadhaar to PAN Find (Instant)</a></li>
                        <li><a href="<?php echo $login_url; ?>">PAN Verification Service</a></li>
                        <li><a href="<?php echo $register_url; ?>">PAN Find JSON API</a></li>
                        <li><a href="https://www.incometax.gov.in" target="_blank" rel="nofollow">Check PAN-Aadhaar Link</a></li>
                    </ul>
                </div>
                <div>
                    <h4>Support &amp; Contact</h4>
                    <ul>
                        <li>Mon to Sat: 10:30 AM – 5:30 PM</li>
                        <li>Mobile: <?php echo $support_phone; ?></li>
                        <li>Email: <?php echo $support_email; ?></li>
                        <li><a href="#faq">Privacy Policy &amp; Terms</a></li>
                    </ul>
                </div>
            </div>

            <div class="copyright">
                &copy; <?php echo $current_year; ?> PANFind.site — All Rights Reserved. Private Facilitator, Not a Government Website.
            </div>
        </div>
    </footer>

</body>
</html>