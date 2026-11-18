<?php
// =========================================================================
// PANFIND.SITE - MAIN LANDING PAGE (SEO OPTIMIZED & CPANEL READY)
// =========================================================================

$site_name      = "PANFind.site";
$site_url       = "https://panfind.site";
$login_url      = "https://panfind.site/login.php";
$register_url   = "https://panfind.site/register.php";

// Apni details yahan edit kar sakte hain:
$support_phone  = "+91 8871023891";
$whatsapp_num   = "918871023891";
$support_email  = "support@panfind.site";
$business_hours = "Mon to Sat, 10:30 AM to 5:30 PM";
$current_year   = date("Y");
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">

    <!-- PRIMARY SEO META TAGS (TOP GOOGLE RANKING KEYWORDS) -->
    <title>PAN Find | Find Lost PAN Number by Aadhaar | PAN Verify &amp; API - PANFind.site</title>
    <meta name="description" content="PAN Find &amp; Find Lost PAN Number by Aadhaar online in seconds. Instant Aadhaar No to PAN No Find, PAN Verification, Agent Retailer Portal &amp; PAN Find JSON API at lowest wallet rates.">
    <meta name="keywords" content="pan find, pan number find, find pan number, find pan card number, find lost pan number, aadhar no to pan no find, find pan number by aadhaar, pan verify, pan find api, retrieve lost pan, pan recovery guide, aadhaar pan link status, आधार नंबर से पैन नंबर सर्च करें, पैन नंबर फाइंड">
    <meta name="author" content="PANFind.site">
    <meta name="robots" content="index, follow, max-snippet:-1, max-image-preview:large, max-video-preview:-1">
    <link rel="canonical" href="<?php echo $site_url; ?>/">

    <!-- OPEN GRAPH / WHATSAPP / FACEBOOK PREVIEW -->
    <meta property="og:type" content="website">
    <meta property="og:site_name" content="PANFind.site">
    <meta property="og:url" content="<?php echo $site_url; ?>/">
    <meta property="og:title" content="PAN Find - Instant Find Lost PAN Number by Aadhaar &amp; PAN API">
    <meta property="og:description" content="Retrieve lost PAN card number using Aadhaar in seconds. Best B2B Agent Portal &amp; JSON API for digital centers across India.">

    <!-- TWITTER CARD -->
    <meta name="twitter:card" content="summary_large_image">
    <meta name="twitter:title" content="PAN Find | Find Lost PAN Number by Aadhaar - PANFind.site">
    <meta name="twitter:description" content="Instant Aadhaar to PAN Number Search, PAN Verify, and Developer API Portal.">

    <!-- GOOGLE FONTS -->
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Plus+Jakarta+Sans:wght@400;500;600;700;800&display=swap" rel="stylesheet">

    <!-- SCHEMA.ORG STRUCTURED DATA (GOOGLE RICH SNIPPETS & FAQ DROPDOWN) -->
    <script type="application/ld+json">
    {
      "@context": "https://schema.org",
      "@graph": [
        {
          "@type": "WebSite",
          "@id": "<?php echo $site_url; ?>/#website",
          "url": "<?php echo $site_url; ?>/",
          "name": "PANFind.site",
          "description": "Instant PAN Find, Find Lost PAN Number by Aadhaar, PAN Verify, and JSON API Portal.",
          "inLanguage": "en-IN"
        },
        {
          "@type": "Service",
          "name": "PAN Find & Lost PAN Number Recovery Service",
          "provider": {
            "@type": "Organization",
            "name": "PANFind.site",
            "url": "<?php echo $site_url; ?>/"
          },
          "areaServed": "IN",
          "description": "Instant and manual Aadhaar to PAN number search, PAN verification, and API integration for digital service centers and businesses."
        },
        {
          "@type": "FAQPage",
          "mainEntity": [
            {
              "@type": "Question",
              "name": "How to find lost PAN number by Aadhaar?",
              "acceptedAnswer": {
                "@type": "Answer",
                "text": "You can find your lost PAN number using your 12-digit Aadhaar number through our instant Aadhaar to PAN Find portal after logging in, or free of cost via the official Income Tax e-PAN portal if your mobile is linked."
              }
            },
            {
              "@type": "Question",
              "name": "How long does PAN Number Find take?",
              "acceptedAnswer": {
                "@type": "Answer",
                "text": "With our automated Instant PAN Find service and JSON API, retrieving your 10-digit PAN number takes only a few seconds."
              }
            },
            {
              "@type": "Question",
              "name": "Is PANFind.site a government website?",
              "acceptedAnswer": {
                "@type": "Answer",
                "text": "No. PANFind.site is an independent private digital facilitator and informational portal, not affiliated with the Income Tax Department, NSDL (Protean), or UTIITSL."
              }
            },
            {
              "@type": "Question",
              "name": "How can developers integrate PAN Find API?",
              "acceptedAnswer": {
                "@type": "Answer",
                "text": "Register for an API plan on PANFind.site, top up your wallet via UPI, and access complete JSON API documentation and live API keys from your dashboard."
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
            --primary-hover: #1e40af;
            --secondary: #0f172a;
            --accent: #0284c7;
            --bg-soft: #f8fafc;
            --bg-card: #ffffff;
            --text-main: #0f172a;
            --text-muted: #475569;
            --border: #e2e8f0;
            --success: #15803d;
            --warning-bg: #fef3c7;
            --warning-text: #92400e;
        }

        * { margin: 0; padding: 0; box-sizing: border-box; }
        html { scroll-behavior: smooth; }
        body {
            font-family: 'Plus Jakarta Sans', -apple-system, BlinkMacSystemFont, sans-serif;
            color: var(--text-main);
            background: #ffffff;
            line-height: 1.6;
            overflow-x: hidden;
        }
        a { text-decoration: none; color: inherit; }
        .container { max-width: 1200px; margin: 0 auto; padding: 0 20px; }

        /* TOP LEGAL NOTICE */
        .top-disclaimer {
            background: var(--warning-bg);
            color: var(--warning-text);
            font-size: 12.5px;
            font-weight: 600;
            text-align: center;
            padding: 8px 15px;
            border-bottom: 1px solid #fde68a;
        }
        .top-disclaimer a { text-decoration: underline; margin-left: 5px; }

        /* HEADER & NAVBAR */
        header {
            background: rgba(255, 255, 255, 0.96);
            backdrop-filter: blur(8px);
            border-bottom: 1px solid var(--border);
            position: sticky;
            top: 0;
            z-index: 999;
        }
        .navbar {
            display: flex;
            align-items: center;
            justify-content: space-between;
            height: 74px;
        }
        .brand {
            display: flex;
            align-items: center;
            gap: 10px;
            font-size: 23px;
            font-weight: 800;
            color: var(--primary);
            letter-spacing: -0.5px;
        }
        .brand-icon {
            background: var(--primary);
            color: #fff;
            width: 36px;
            height: 36px;
            border-radius: 9px;
            display: flex;
            align-items: center;
            justify-content: center;
            font-size: 18px;
        }
        .brand span { color: var(--secondary); }

        .nav-menu {
            display: flex;
            list-style: none;
            gap: 26px;
            font-size: 14.5px;
            font-weight: 600;
            color: var(--text-muted);
        }
        .nav-menu a:hover { color: var(--primary); }

        .nav-actions { display: flex; align-items: center; gap: 10px; }
        .btn {
            display: inline-flex;
            align-items: center;
            justify-content: center;
            gap: 6px;
            padding: 10px 20px;
            border-radius: 8px;
            font-size: 14px;
            font-weight: 700;
            transition: 0.2s ease;
            cursor: pointer;
            border: 1.5px solid transparent;
        }
        .btn-login {
            border-color: var(--primary);
            color: var(--primary);
            background: #ffffff;
        }
        .btn-login:hover { background: #eff6ff; }
        .btn-register {
            background: var(--primary);
            color: #ffffff;
        }
        .btn-register:hover { background: var(--primary-hover); }

        /* HERO SECTION */
        .hero {
            background: radial-gradient(circle at top right, #dbeafe 0%, #eff6ff 40%, #ffffff 100%);
            padding: 72px 0 60px;
            border-bottom: 1px solid var(--border);
            text-align: center;
        }
        .hero-pill {
            display: inline-flex;
            align-items: center;
            gap: 8px;
            background: #ffffff;
            border: 1px solid #bfdbfe;
            color: var(--primary);
            padding: 6px 16px;
            border-radius: 50px;
            font-size: 13px;
            font-weight: 700;
            margin-bottom: 20px;
            box-shadow: 0 2px 8px rgba(29, 78, 216, 0.06);
        }
        .hero h1 {
            font-size: 44px;
            font-weight: 800;
            line-height: 1.18;
            color: var(--secondary);
            max-width: 880px;
            margin: 0 auto 18px;
            letter-spacing: -0.8px;
        }
        .hero h1 span { color: var(--primary); }
        .hero-sub {
            font-size: 17.5px;
            color: var(--text-muted);
            max-width: 740px;
            margin: 0 auto 32px;
        }

        /* INTERACTIVE QUICK SEARCH BOX (REDIRECTS TO LOGIN) */
        .quick-search-box {
            max-width: 620px;
            margin: 0 auto 28px;
            background: #ffffff;
            padding: 8px;
            border-radius: 12px;
            border: 1.5px solid #cbd5e1;
            display: flex;
            gap: 8px;
            box-shadow: 0 10px 25px rgba(15, 23, 42, 0.06);
        }
        .quick-search-box input {
            flex: 1;
            border: none;
            outline: none;
            padding: 12px 16px;
            font-size: 15px;
            font-family: inherit;
            color: var(--text-main);
        }
        .quick-search-box button {
            background: var(--primary);
            color: #fff;
            border: none;
            padding: 12px 24px;
            border-radius: 8px;
            font-weight: 700;
            font-size: 15px;
            cursor: pointer;
            white-space: nowrap;
        }
        .quick-search-box button:hover { background: var(--primary-hover); }

        .hero-buttons {
            display: flex;
            justify-content: center;
            gap: 14px;
            flex-wrap: wrap;
        }
        .btn-lg { padding: 13px 26px; font-size: 15.5px; }

        /* TRUST & KEYWORDS BAR */
        .trust-bar {
            background: var(--secondary);
            color: #e2e8f0;
            padding: 18px 0;
            font-size: 13.5px;
        }
        .trust-flex {
            display: flex;
            justify-content: space-around;
            flex-wrap: wrap;
            gap: 15px;
            text-align: center;
        }
        .trust-item strong { color: #38bdf8; }

        /* SECTIONS */
        section { padding: 70px 0; }
        .section-head { text-align: center; max-width: 700px; margin: 0 auto 48px; }
        .section-head h2 { font-size: 32px; font-weight: 800; margin-bottom: 12px; letter-spacing: -0.5px; }
        .section-head p { color: var(--text-muted); font-size: 16px; }

        /* SERVICES CARDS */
        .grid-3 { display: grid; grid-template-columns: repeat(auto-fit, minmax(310px, 1fr)); gap: 26px; }
        .service-card {
            background: var(--bg-card);
            border: 1px solid var(--border);
            border-radius: 14px;
            padding: 30px;
            display: flex;
            flex-direction: column;
            justify-content: space-between;
            transition: 0.25s ease;
        }
        .service-card:hover {
            border-color: #93c5fd;
            transform: translateY(-4px);
            box-shadow: 0 14px 30px rgba(15, 23, 42, 0.07);
        }
        .service-tag {
            display: inline-block;
            background: #eff6ff;
            color: var(--primary);
            font-size: 12px;
            font-weight: 700;
            padding: 4px 10px;
            border-radius: 6px;
            margin-bottom: 14px;
            width: fit-content;
        }
        .service-card h3 { font-size: 20px; font-weight: 700; margin-bottom: 8px; }
        .hindi-sub { font-size: 13.5px; color: var(--accent); font-weight: 600; margin-bottom: 10px; display: block; }
        .service-card p { font-size: 14.5px; color: var(--text-muted); margin-bottom: 18px; }
        .rate-box {
            background: var(--bg-soft);
            padding: 12px 15px;
            border-radius: 8px;
            margin-bottom: 18px;
            font-size: 20px;
            font-weight: 800;
            color: var(--secondary);
            border: 1px solid var(--border);
        }
        .rate-box span { font-size: 13px; font-weight: 500; color: var(--text-muted); }
        .check-list { list-style: none; margin-bottom: 24px; font-size: 14px; }
        .check-list li { padding-left: 22px; position: relative; margin-bottom: 9px; color: #334155; }
        .check-list li::before { content: "✔"; position: absolute; left: 0; color: var(--success); font-weight: 700; }

        /* API DEVELOPER BANNER */
        .api-banner {
            background: linear-gradient(135deg, #0f172a 0%, #1e3a8a 100%);
            color: #ffffff;
            border-radius: 16px;
            padding: 45px;
            display: grid;
            grid-template-columns: 1.3fr 1fr;
            gap: 30px;
            align-items: center;
        }
        .api-banner h2 { font-size: 30px; font-weight: 800; margin-bottom: 12px; }
        .api-banner p { color: #cbd5e1; margin-bottom: 24px; font-size: 15.5px; }
        .code-preview {
            background: #020617;
            border: 1px solid #334155;
            border-radius: 10px;
            padding: 20px;
            font-family: monospace;
            font-size: 13px;
            color: #38bdf8;
            line-height: 1.5;
            overflow-x: auto;
        }

        /* AGENT PRICING PLANS */
        .bg-soft { background: var(--bg-soft); border-top: 1px solid var(--border); border-bottom: 1px solid var(--border); }
        .plan-card {
            background: #ffffff;
            border: 1px solid var(--border);
            border-radius: 14px;
            padding: 32px 28px;
            position: relative;
        }
        .plan-card.popular { border: 2px solid var(--primary); box-shadow: 0 12px 28px rgba(29, 78, 216, 0.1); }
        .ribbon {
            position: absolute;
            top: -13px;
            right: 22px;
            background: var(--primary);
            color: #fff;
            font-size: 12px;
            font-weight: 700;
            padding: 4px 12px;
            border-radius: 20px;
        }
        .plan-price { font-size: 34px; font-weight: 800; margin: 14px 0; color: var(--secondary); }
        .plan-price small { font-size: 14px; font-weight: 500; color: var(--text-muted); }

        /* SEO GUIDE & STEPS */
        .steps-4 { display: grid; grid-template-columns: repeat(auto-fit, minmax(240px, 1fr)); gap: 22px; }
        .step-card {
            background: #ffffff;
            border: 1px solid var(--border);
            border-radius: 12px;
            padding: 24px;
        }
        .step-badge {
            width: 38px;
            height: 38px;
            border-radius: 10px;
            background: #dbeafe;
            color: var(--primary);
            font-weight: 800;
            display: flex;
            align-items: center;
            justify-content: center;
            margin-bottom: 14px;
            font-size: 16px;
        }
        .step-card h3 { font-size: 18px; margin-bottom: 8px; }
        .step-card p { font-size: 14px; color: var(--text-muted); }

        /* OFFICIAL PORTALS & WHY NEEDED */
        .info-grid { display: grid; grid-template-columns: repeat(auto-fit, minmax(300px, 1fr)); gap: 25px; margin-top: 35px; }
        .info-box {
            background: var(--bg-soft);
            border: 1px solid var(--border);
            border-radius: 12px;
            padding: 25px;
        }
        .info-box h3 { font-size: 19px; margin-bottom: 12px; color: var(--secondary); }

        /* FAQ ACCORDION */
        .faq-wrap { max-width: 850px; margin: 0 auto; }
        details.faq {
            background: #ffffff;
            border: 1px solid var(--border);
            border-radius: 10px;
            padding: 18px 22px;
            margin-bottom: 14px;
        }
        details.faq summary {
            font-weight: 700;
            font-size: 16px;
            cursor: pointer;
            list-style: none;
            display: flex;
            justify-content: space-between;
            align-items: center;
        }
        details.faq summary::after { content: "+"; font-size: 20px; color: var(--primary); }
        details.faq[open] summary::after { content: "−"; }
        details.faq p { margin-top: 12px; font-size: 14.5px; color: var(--text-muted); }

        /* KEYWORD CLOUD FOR SEO */
        .seo-keywords {
            background: #f1f5f9;
            padding: 22px 0;
            border-top: 1px solid var(--border);
            font-size: 12.5px;
            color: #475569;
        }
        .seo-keywords span {
            display: inline-block;
            background: #ffffff;
            border: 1px solid #cbd5e1;
            padding: 4px 10px;
            border-radius: 5px;
            margin: 3px;
        }

        /* FOOTER */
        footer { background: #0f172a; color: #cbd5e1; padding: 60px 0 25px; font-size: 14px; }
        .footer-cols { display: grid; grid-template-columns: repeat(auto-fit, minmax(220px, 1fr)); gap: 32px; margin-bottom: 38px; }
        footer h4 { color: #ffffff; font-size: 16px; margin-bottom: 16px; }
        footer ul { list-style: none; }
        footer ul li { margin-bottom: 10px; }
        footer ul a:hover { color: #38bdf8; }
        .legal-notice {
            background: #1e293b;
            border-left: 4px solid #f59e0b;
            padding: 18px;
            border-radius: 8px;
            font-size: 12.5px;
            color: #94a3b8;
            margin-bottom: 25px;
        }
        .footer-bottom {
            text-align: center;
            border-top: 1px solid #1e293b;
            padding-top: 20px;
            font-size: 13px;
            color: #94a3b8;
        }

        /* RESPONSIVE */
        @media (max-width: 860px) {
            .nav-menu { display: none; }
            .hero h1 { font-size: 32px; }
            .api-banner { grid-template-columns: 1fr; padding: 30px; }
            .quick-search-box { flex-direction: column; }
        }
    </style>
</head>
<body>

    <!-- TOP COMPLIANCE BAR -->
    <div class="top-disclaimer">
        ⚠️ INDEPENDENT PRIVATE PORTAL — Not a Government Website. Private Facilitator &amp; Information Guide. <a href="#legal-disclaimer">Read Full Disclaimer</a>
    </div>

    <!-- HEADER NAVIGATION -->
    <header>
        <div class="container navbar">
            <a href="<?php echo $site_url; ?>/" class="brand">
                <div class="brand-icon">PF</div>
                <div>PAN<span>Find.site</span></div>
            </a>

            <ul class="nav-menu">
                <li><a href="#home">Home</a></li>
                <li><a href="#services">Services</a></li>
                <li><a href="#api">PAN API</a></li>
                <li><a href="#pricing">Agent Plans</a></li>
                <li><a href="#guide">PAN Find Guide</a></li>
                <li><a href="#faq">FAQ</a></li>
            </ul>

            <div class="nav-actions">
                <a href="<?php echo $login_url; ?>" class="btn btn-login">Login</a>
                <a href="<?php echo $register_url; ?>" class="btn btn-register">Register</a>
            </div>
        </div>
    </header>

    <main>
        <!-- HERO SECTION -->
        <section class="hero" id="home">
            <div class="container">
                <div class="hero-pill">⚡ Instant Aadhaar to PAN Number Search • Agent &amp; API Portal</div>
                <h1><span>PAN Find</span>: Find Lost PAN Number by Aadhaar Instantly</h1>
                <p class="hero-sub">
                    Get your forgotten 10-digit PAN card number from Aadhaar in just a few seconds. Fast, secure, and reliable <strong>Aadhar No to PAN No Find</strong>, <strong>PAN Verify</strong>, and <strong>PAN Find JSON API</strong> for agents, CSC centers, and businesses across India.
                </p>

                <!-- QUICK SEARCH FORM (REDIRECTS TO LOGIN.PHP) -->
                <form action="<?php echo $login_url; ?>" method="GET" class="quick-search-box">
                    <input type="text" maxlength="12" pattern="\d{12}" placeholder="Enter 12-Digit Aadhaar Number to Find Lost PAN..." aria-label="Enter 12-Digit Aadhaar Number" required>
                    <button type="submit">Find PAN Now →</button>
                </form>

                <div class="hero-buttons">
                    <a href="<?php echo $login_url; ?>" class="btn btn-register btn-lg">Agent Login →</a>
                    <a href="<?php echo $register_url; ?>" class="btn btn-login btn-lg">Create Free Account</a>
                </div>
            </div>
        </section>

        <!-- TRUST & HIGHLIGHTS BAR -->
        <div class="trust-bar">
            <div class="container trust-flex">
                <div class="trust-item"><strong>⚡ Instant Result</strong> — 24/7 Automated Server</div>
                <div class="trust-item"><strong>🔒 Secure UPI Checkout</strong> — Instant Wallet Top-up</div>
                <div class="trust-item"><strong>📊 Search Reports List</strong> — Full History in Dashboard</div>
                <div class="trust-item"><strong>🔌 Developer JSON API</strong> — Starting @ ₹5.00 / hit</div>
            </div>
        </div>

        <!-- SERVICES SECTION -->
        <section id="services">
            <div class="container">
                <div class="section-head">
                    <h2>Simple, Secure &amp; Reliable PAN Services</h2>
                    <p>Complete digital solutions for lost PAN recovery, instant verification, and automated API integration.</p>
                </div>

                <div class="grid-3">
                    <!-- Service 1: Instant PAN Find -->
                    <article class="service-card">
                        <div>
                            <span class="service-tag">MOST USED SERVICE</span>
                            <h3>Aadhaar No To PAN No Find (Instant)</h3>
                            <span class="hindi-sub">(आधार नंबर से केवल पैन नंबर सर्च करें)</span>
                            <p>Retrieve your full 10-digit alphanumeric PAN number using your 12-digit Aadhaar number in just a few seconds.</p>
                            <div class="rate-box">₹19.00 <span>/ per request (Retail)</span></div>
                            <ul class="check-list">
                                <li>Instant Lost PAN Number Recovery</li>
                                <li>Both Instant &amp; Manual Search Modes</li>
                                <li>Live Search Reports List in Portal</li>
                                <li>Lower Rates on Agent Plans (₹10/hit)</li>
                            </ul>
                        </div>
                        <a href="<?php echo $login_url; ?>" class="btn btn-register" style="width:100%;">Try PAN Find →</a>
                    </article>

                    <!-- Service 2: PAN Verify -->
                    <article class="service-card">
                        <div>
                            <span class="service-tag">KYC VERIFICATION</span>
                            <h3>PAN Verify &amp; Status Check</h3>
                            <span class="hindi-sub">(पैन कार्ड नाम, जन्मतिथि और स्टेटस जांचें)</span>
                            <p>Verify PAN card details with accurate full name matching, category check, and active/inoperative status.</p>
                            <div class="rate-box">₹10.00 <span>/ per request (Retail)</span></div>
                            <ul class="check-list">
                                <li>Full Name &amp; DOB Verification</li>
                                <li>PAN Active / Inoperative Status</li>
                                <li>Aadhaar-PAN Link Status Check</li>
                                <li>Instant Digital Verification Result</li>
                            </ul>
                        </div>
                        <a href="<?php echo $login_url; ?>" class="btn btn-register" style="width:100%;">Try PAN Verify →</a>
                    </article>

                    <!-- Service 3: PAN Find API -->
                    <article class="service-card">
                        <div>
                            <span class="service-tag">FOR DEVELOPERS &amp; PORTALS</span>
                            <h3>PAN Find &amp; Verify JSON API</h3>
                            <span class="hindi-sub">(अपनी वेबसाइट या पोर्टल में API जोड़ें)</span>
                            <p>Integrate PAN Find service into your website, B2B retailer portal, or fintech application with simple JSON endpoints.</p>
                            <div class="rate-box">₹5.00 <span>/ per API hit</span></div>
                            <ul class="check-list">
                                <li>Developer-Friendly REST JSON API</li>
                                <li>99.9% Uptime &amp; Ultra-Low Latency</li>
                                <li>Full Docs &amp; API Key after Login</li>
                                <li>Prepaid Wallet with Paytm/UPI QR</li>
                            </ul>
                        </div>
                        <a href="<?php echo $register_url; ?>" class="btn btn-login" style="width:100%;">Get API Access →</a>
                    </article>
                </div>
            </div>
        </section>

        <!-- DEVELOPER API SHOWCASE -->
        <section id="api" style="padding-top: 10px;">
            <div class="container">
                <div class="api-banner">
                    <div>
                        <h2>Integrate PAN Find API into Your Platform</h2>
                        <p>Provide instant PAN Find and PAN Verify services to your customers and retailers with our simple JSON API. Request samples, response fields, and error codes are available inside your dashboard after login.</p>
                        <div style="display:flex; gap:12px; flex-wrap:wrap;">
                            <a href="<?php echo $register_url; ?>" class="btn btn-register" style="background:#38bdf8; color:#0f172a;">Get API Access →</a>
                            <a href="<?php echo $login_url; ?>" class="btn btn-login" style="background:transparent; color:#fff; border-color:#fff;">Login for Docs</a>
                        </div>
                    </div>
                    <div class="code-preview">
// Sample JSON Response Structure<br>
{<br>
&nbsp;&nbsp;"status": "SUCCESS",<br>
&nbsp;&nbsp;"service": "PAN_FIND_INSTANT",<br>
&nbsp;&nbsp;"pan_number": "ABCDE1234F",<br>
&nbsp;&nbsp;"aadhaar_linked": true,<br>
&nbsp;&nbsp;"response_time": "1.2s"<br>
}
                    </div>
                </div>
            </div>
        </section>

        <!-- AGENT & RETAILER PRICING PLANS -->
        <section class="bg-soft" id="pricing">
            <div class="container">
                <div class="section-head">
                    <h2>Agent &amp; Retailer Wallet Plans</h2>
                    <p>Choose the best plan for your online center or business. Registered agents search from a login-only wallet at discounted plan rates.</p>
                </div>

                <div class="grid-3">
                    <!-- Plan 1 -->
                    <div class="plan-card">
                        <h3>Premium Plan</h3>
                        <p style="color:var(--text-muted); font-size:14px;">For individual agents &amp; cyber cafes</p>
                        <div class="plan-price">₹99.00 <small>/ activation</small></div>
                        <ul class="check-list">
                            <li><strong>PAN Find @ ₹15.00</strong> / search</li>
                            <li><strong>PAN Verify @ ₹7.00</strong> / search</li>
                            <li>Wallet + Instant Paytm / UPI QR Top-up</li>
                            <li>24/7 Search Reports History</li>
                        </ul>
                        <a href="<?php echo $register_url; ?>" class="btn btn-login" style="width:100%;">Get Started</a>
                    </div>

                    <!-- Plan 2 -->
                    <div class="plan-card popular">
                        <span class="ribbon">Most Popular</span>
                        <h3>Diamond Plan</h3>
                        <p style="color:var(--text-muted); font-size:14px;">Lowest search rate for high-volume centers</p>
                        <div class="plan-price">₹199.00 <small>/ activation</small></div>
                        <ul class="check-list">
                            <li><strong>PAN Find @ ₹10.00</strong> / search</li>
                            <li><strong>PAN Verify @ ₹5.00</strong> / search</li>
                            <li>Login-protected Wallet Hits</li>
                            <li>Priority WhatsApp &amp; Call Support</li>
                        </ul>
                        <a href="<?php echo $register_url; ?>" class="btn btn-register" style="width:100%;">Choose Diamond →</a>
                    </div>

                    <!-- Plan 3 -->
                    <div class="plan-card">
                        <h3>API Platform Plan</h3>
                        <p style="color:var(--text-muted); font-size:14px;">For software portals &amp; B2B apps</p>
                        <div class="plan-price">₹699.00 <small>/ API access</small></div>
                        <ul class="check-list">
                            <li><strong>PAN Find API @ ₹5.00</strong> / hit</li>
                            <li><strong>PAN Verify API @ ₹5.00</strong> / hit</li>
                            <li>Live API Key &amp; Full JSON Docs</li>
                            <li>Dedicated Technical Support</li>
                        </ul>
                        <a href="<?php echo $register_url; ?>" class="btn btn-login" style="width:100%;">Choose API Plan</a>
                    </div>
                </div>
            </div>
        </section>

        <!-- SEO INFORMATIONAL GUIDE: HOW TO FIND LOST PAN NUMBER -->
        <section id="guide">
            <div class="container">
                <div class="section-head">
                    <h2>Complete Guide: How to Pan Number Find by Aadhaar</h2>
                    <p>Learn how to retrieve your lost or forgotten Permanent Account Number (PAN) via our assisted portal or official government websites.</p>
                </div>

                <div class="steps-4">
                    <div class="step-card">
                        <div class="step-badge">01</div>
                        <h3>Access Portal or Official Site</h3>
                        <p>Login to <strong>PANFind.site</strong> for instant agent search, or visit the official Income Tax portal (<em>incometax.gov.in</em>) under "Instant e-PAN".</p>
                    </div>
                    <div class="step-card">
                        <div class="step-badge">02</div>
                        <h3>Enter 12-Digit Aadhaar</h3>
                        <p>Input your valid 12-digit Aadhaar number carefully to initiate the <strong>Pan Number Find</strong> verification process.</p>
                    </div>
                    <div class="step-card">
                        <div class="step-badge">03</div>
                        <h3>Verify Request</h3>
                        <p>On the official portal, verify via 6-digit Aadhaar OTP. On our agent dashboard, process securely via your prepaid wallet balance.</p>
                    </div>
                    <div class="step-card">
                        <div class="step-badge">04</div>
                        <h3>Retrieve &amp; Download e-PAN</h3>
                        <p>Get your 10-digit alphanumeric PAN number immediately and download e-PAN PDF or order reprint via NSDL / UTIITSL.</p>
                    </div>
                </div>

                <!-- WHY YOU NEED PAN & AUTHORIZED AGENCIES -->
                <div class="info-grid">
                    <div class="info-box">
                        <h3>Why You Might Need to Pan Find</h3>
                        <ul class="check-list" style="margin-bottom:0;">
                            <li><strong>Lost Physical Card:</strong> Need PAN number to apply for duplicate PAN card reprint.</li>
                            <li><strong>Tax Filing (ITR):</strong> Urgent requirement of PAN for Income Tax Return submission.</li>
                            <li><strong>Banking &amp; KYC:</strong> Opening a bank account, demat account, or high-value transactions.</li>
                            <li><strong>Aadhaar-PAN Linking:</strong> Unlinked PAN cards can become inoperative under the Income Tax Act.</li>
                        </ul>
                    </div>
                    <div class="info-box">
                        <h3>Official Government &amp; Authorized Portals</h3>
                        <p style="font-size:14px; color:var(--text-muted); margin-bottom:12px;">You can also access official PAN services directly through government-authorized portals:</p>
                        <ul class="check-list" style="margin-bottom:0;">
                            <li><strong>Income Tax e-Filing:</strong> <a href="https://www.incometax.gov.in" target="_blank" rel="nofollow" style="color:var(--primary); font-weight:600;">incometax.gov.in</a> (Instant e-PAN &amp; Link Status)</li>
                            <li><strong>Protean (NSDL PAN):</strong> <a href="https://www.onlineservices.nsdl.com" target="_blank" rel="nofollow" style="color:var(--primary); font-weight:600;">onlineservices.nsdl.com</a> (Reprint &amp; Correction)</li>
                            <li><strong>UTIITSL PAN:</strong> <a href="https://www.pan.utiitsl.com" target="_blank" rel="nofollow" style="color:var(--primary); font-weight:600;">pan.utiitsl.com</a> (Authorized PAN Services)</li>
                        </ul>
                    </div>
                </div>
            </div>
        </section>

        <!-- FAQ SECTION (SEO RICH CONTENT) -->
        <section class="bg-soft" id="faq">
            <div class="container">
                <div class="section-head">
                    <h2>Frequently Asked Questions (FAQ)</h2>
                    <p>Common questions about PAN Find, Aadhaar to PAN recovery, wallet security, and legal compliance.</p>
                </div>

                <div class="faq-wrap">
                    <details class="faq" open>
                        <summary>Is it free to pan find using Aadhaar on government portals?</summary>
                        <p>Yes, if your mobile number is linked with Aadhaar, checking PAN details and downloading Instant e-PAN through the official Income Tax portal (incometax.gov.in) is free. PANFind.site is a private facilitator portal providing fast assisted search tools and B2B APIs for agents and businesses at nominal service charges.</p>
                    </details>

                    <details class="faq">
                        <summary>How long does it take to find lost PAN number online?</summary>
                        <p>Using our Instant Aadhaar to PAN Find tool or JSON API, your PAN number is retrieved within a few seconds after wallet confirmation.</p>
                    </details>

                    <details class="faq">
                        <summary>Is PANFind.site an official government website?</summary>
                        <p>No. PANFind.site is an independent private digital service portal and informational guide. We are NOT affiliated with the Income Tax Department, Ministry of Finance, NSDL (Protean), or UTIITSL.</p>
                    </details>

                    <details class="faq">
                        <summary>How does wallet top-up and data privacy work?</summary>
                        <p>Registered agents can add funds securely via Paytm / UPI QR checkout. We operate in strict compliance with the Information Technology Act, 2000 and store only minimal transaction records required for your payment and search report history.</p>
                    </details>
                </div>
            </div>
        </section>

        <!-- SEO KEYWORD TAGS BAR -->
        <div class="seo-keywords">
            <div class="container">
                <strong>Related Search Topics:</strong>
                <span>pan find</span>
                <span>pan number find</span>
                <span>find pan number</span>
                <span>find pan card number</span>
                <span>find lost pan number</span>
                <span>find pan number by aadhaar</span>
                <span>aadhar no to pan no find</span>
                <span>retrieve lost pan</span>
                <span>pan recovery guide</span>
                <span>pan verify api</span>
                <span>आधार नंबर से पैन नंबर सर्च करें</span>
            </div>
        </div>
    </main>

    <!-- FOOTER -->
    <footer>
        <div class="container">
            <div class="legal-notice" id="legal-disclaimer">
                <strong>LEGAL INFORMATION &amp; COMPLIANCE (IT Act 2000):</strong> PANFind.site is a private digital facilitator and independent informational portal. We are <strong>NOT affiliated with the Income Tax Department, Government of India, NSDL (Protean), or UTIITSL</strong>. We do not use government emblems or impersonate any government portal (compliant with Sections 66C, 66D, and 69 of the IT Act, 2000). To report cyber fraud, visit <em>cybercrime.gov.in</em> or call 1930.
            </div>

            <div class="footer-cols">
                <div>
                    <h4>PANFind.site</h4>
                    <p>Fast, secure, and reliable PAN Find, Lost PAN Number recovery via Aadhaar, PAN Verify, and JSON API services for agents and businesses across India.</p>
                </div>

                <div>
                    <h4>Quick Links</h4>
                    <ul>
                        <li><a href="#home">Home</a></li>
                        <li><a href="#services">PAN Find Services</a></li>
                        <li><a href="#api">PAN Find API</a></li>
                        <li><a href="#pricing">Agent Plans &amp; Pricing</a></li>
                        <li><a href="#guide">PAN Recovery Guide</a></li>
                    </ul>
                </div>

                <div>
                    <h4>Agent Portal</h4>
                    <ul>
                        <li><a href="<?php echo $login_url; ?>">Agent Login</a></li>
                        <li><a href="<?php echo $register_url; ?>">Agent Registration</a></li>
                        <li><a href="<?php echo $login_url; ?>">Search Reports List</a></li>
                        <li><a href="<?php echo $login_url; ?>">API Documentation</a></li>
                    </ul>
                </div>

                <div>
                    <h4>Contact &amp; Support</h4>
                    <ul>
                        <li>Mobile: <a href="tel:<?php echo $support_phone; ?>"><?php echo $support_phone; ?></a></li>
                        <li>WhatsApp: <a href="https://wa.me/<?php echo $whatsapp_num; ?>" target="_blank">Chat Support</a></li>
                        <li>Email: <a href="mailto:<?php echo $support_email; ?>"><?php echo $support_email; ?></a></li>
                        <li>Hours: <?php echo $business_hours; ?></li>
                    </ul>
                </div>
            </div>

            <div class="footer-bottom">
                &copy; <?php echo $current_year; ?> PANFind.site — All Rights Reserved. Independent Digital Service Portal (Not a Government Website).
            </div>
        </div>
    </footer>

</body>
</html>
