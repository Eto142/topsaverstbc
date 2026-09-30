<!DOCTYPE html>
<html lang="en">
<head>
<meta charset="utf-8">
<meta name="viewport" content="width=device-width, initial-scale=1.0, maximum-scale=5.0">
<meta http-equiv="X-UA-Compatible" content="IE=edge">
<meta name="description" content="Topsavers Trust Bank - Secure, modern digital banking for personal, corporate, and global transfer needs.">
<meta name="keywords" content="Bank, Topsavers Trust Bank, Digital Banking, Savings, Loans, Global Money Transfer">
<meta property="og:description" content="Topsavers Trust Bank - Banking made simple, secure, and smart.">
<meta property="og:site_name" content="Topsavers Trust Bank">
<link rel="canonical" href="/">
<title>Topsavers Trust Bank - Money Transfer & Banking</title>
<link rel="icon" type="image/png" href="{{ asset('home/asset/img/logo.png') }}">

<!-- Fonts -->
<link rel="preconnect" href="https://fonts.googleapis.com">
<link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
<link href="https://fonts.googleapis.com/css2?family=Inter:wght@400;500;600;700;800&family=Manrope:wght@600;700;800&family=Plus+Jakarta+Sans:wght@400;500;600;700;800&display=swap" rel="stylesheet">

<!-- Icons -->
<link href="https://cdn.jsdelivr.net/npm/remixicon@2.5.0/fonts/remixicon.css" rel="stylesheet">
<link rel="stylesheet" href="{{ asset('home/asset/css/flaticon.css') }}">
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.0/css/all.min.css">

<!-- Main Stylesheet -->
<link rel="stylesheet" href="{{ asset('css/modern-homepage.css') }}?v={{ file_exists(public_path('css/modern-homepage.css')) ? filemtime(public_path('css/modern-homepage.css')) : time() }}">
</head>
<body class="bk-body">

<!-- Preloader -->
<div class="bk-preloader" id="bkPreloader">
  <div class="bk-pl-orb bk-pl-orb--a"></div>
  <div class="bk-pl-orb bk-pl-orb--b"></div>
  <div class="bk-pl-body">
    <div class="bk-pl-logo-wrap">
      <span class="bk-pl-spin"></span>
      <div class="bk-pl-logo-box">
        <img src="{{ asset('home/asset/img/logo.png') }}" alt="Topsavers Trust Bank">
      </div>
    </div>
    <div class="bk-pl-progress">
      <div class="bk-pl-progress-fill" id="bkPlFill"></div>
    </div>
    <div class="bk-pl-foot">
      <span class="bk-pl-pct" id="bkPlPct">0%</span>
      <span class="bk-pl-msg">Securing your connection<span class="bk-pl-dots"><i class="d1"></i><i class="d2"></i><i class="d3"></i></span></span>
    </div>
  </div>
</div>

<!-- ===== UTILITY TOP BAR ===== -->
<div class="bk-topbar">
  <div class="bk-wrap">
    <div class="bk-topbar-inner">
      <div class="bk-topbar-l">
        <a href="mailto:support@topsaverstbc.com"><i class="ri-mail-line"></i> support@topsaverstbc.com</a>
        <span class="bk-topbar-sep"></span>
        <span><i class="ri-shield-check-line"></i> 256-Bit Encrypted Banking</span>
      </div>
      <div class="bk-topbar-r">
        <a href="{{ url('faq') }}"><i class="ri-question-line"></i> Help &amp; FAQ</a>
        <span class="bk-topbar-sep"></span>
        <a href="{{ url('contact') }}"><i class="ri-customer-service-2-line"></i> Support</a>
      </div>
    </div>
  </div>
</div>

<!-- ===== MAIN HEADER ===== -->
<header class="bk-header" id="bkHeader">
  <div class="bk-wrap">
    <div class="bk-header-row">
      <a href="/" class="bk-logo">
        <img src="{{ asset('home/asset/img/logo.png') }}" alt="Topsavers Trust Bank" style="height:55px; width:auto;">
      </a>

      <nav class="bk-nav" id="bkDesktopNav">
        <a href="/" class="{{ request()->is('/') ? 'active' : '' }}">Home</a>
        <a href="{{ url('about') }}" class="{{ request()->is('about') ? 'active' : '' }}">About Us</a>
        <a href="{{ url('services') }}" class="{{ request()->is('services') ? 'active' : '' }}">Services</a>
        <a href="{{ url('terms') }}" class="{{ request()->is('terms') ? 'active' : '' }}">Terms</a>
        <a href="{{ url('contact') }}" class="{{ request()->is('contact') ? 'active' : '' }}">Contact</a>
        <a href="{{ url('faq') }}" class="{{ request()->is('faq') ? 'active' : '' }}">FAQ</a>
      </nav>

      <div class="bk-header-actions">
        <a href="{{ route('login') }}" class="bk-btn bk-btn--ghost"><i class="ri-login-box-line"></i> Sign In</a>
        <a href="{{ route('register') }}" class="bk-btn bk-btn--fill"><i class="ri-user-add-line"></i> Open Account</a>
      </div>

      <button class="bk-burger" id="bkBurger" aria-label="Menu">
        <span></span><span></span><span></span>
      </button>
    </div>
  </div>
</header>

<!-- ===== MOBILE SLIDE DRAWER ===== -->
<div class="bk-overlay" id="bkOverlay"></div>
<div class="bk-drawer" id="bkDrawer">
  <div class="bk-drawer-head">
    <a href="/"><img src="{{ asset('home/asset/img/logo.png') }}" alt="Topsavers Trust Bank" class="bk-drawer-logo" style="height:45px; width:auto;"></a>
    <button class="bk-drawer-x" id="bkDrawerClose"><i class="ri-close-line"></i></button>
  </div>
  <nav class="bk-drawer-links">
    <a href="/">Home</a>
    <a href="{{ url('about') }}">About Us</a>
    <a href="{{ url('services') }}">Services &amp; Banking</a>
    <a href="{{ url('terms') }}">Terms of Service</a>
    <a href="{{ url('contact') }}">Contact Us</a>
    <a href="{{ url('faq') }}">Help &amp; FAQ</a>
  </nav>
  <div class="bk-drawer-cta">
    <a href="{{ route('login') }}" class="bk-btn bk-btn--ghost bk-btn--block">Sign In</a>
    <a href="{{ route('register') }}" class="bk-btn bk-btn--fill bk-btn--block">Open Account</a>
  </div>
  <div class="bk-drawer-info">
    <p><i class="ri-mail-line"></i> support@topsaverstbc.com</p>
  </div>
</div>

<!-- GTranslate Wrapper -->
<div class="gtranslate_wrapper"></div>
<script>
  window.gtranslateSettings = {
    default_language: "en",
    detect_browser_language: true,
    wrapper_selector: ".gtranslate_wrapper",
    alt_flags: {
      pt: "brazil",
      es: "colombia",
      fr: "quebec"
    }
  };
</script>
<script src="https://cdn.gtranslate.net/widgets/latest/float.js" defer></script>
<style>
  .gtranslate_wrapper {
    position: fixed !important;
    top: 80px !important;
    right: 20px !important;
    z-index: 9999 !important;
  }
</style>