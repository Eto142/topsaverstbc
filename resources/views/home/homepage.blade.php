@include('home.header')

<!-- ============================================================
     HERO CAROUSEL
     ============================================================ -->
<section class="bk-hero">
  <div class="bk-hero-slides" id="bkHeroTrack">
    <!-- Slide 1 -->
    <div class="bk-hero-slide">
      <div class="bk-hero-bg" style="background-image:url('{{ asset('frontassets/images/banner/banner-slide-1.jpg') }}')"></div>
      <div class="bk-wrap">
        <div class="bk-hero-body">
          <span class="bk-hero-label"><i class="ri-sparkling-2-fill"></i> Next-Gen Digital Banking</span>
          <h1>Your Money, Moving <em>Smarter</em> Than Ever</h1>
          <p>Topsavers Trust Bank pairs bank-grade 256-bit security with an experience built for modern living  instant global transfers, real-time insights, and 24/7 dedicated support.</p>
          <div class="bk-hero-actions">
            <a href="{{ route('register') }}" class="bk-btn bk-btn--white">Open an Account <i class="ri-arrow-right-line"></i></a>
            <a href="{{ route('login') }}" class="bk-btn bk-btn--glass">Sign In <i class="ri-login-circle-line"></i></a>
          </div>
        </div>
      </div>
    </div>
    <!-- Slide 2 -->
    <div class="bk-hero-slide">
      <div class="bk-hero-bg" style="background-image:url('{{ asset('frontassets/images/banner/banner-slide-2.jpg') }}')"></div>
      <div class="bk-wrap">
        <div class="bk-hero-body">
          <span class="bk-hero-label"><i class="ri-briefcase-4-fill"></i> Personal &amp; Business Banking</span>
          <h1>One Account. <em>Every</em> Side of Your Finances.</h1>
          <p>Personal savings, business accounts, credit cards, and high-yield fixed deposits  manage all of it seamlessly from a single unified dashboard built to scale with you.</p>
          <div class="bk-hero-actions">
            <a href="{{ url('services') }}" class="bk-btn bk-btn--white">Our Services <i class="ri-arrow-right-line"></i></a>
            <a href="{{ route('register') }}" class="bk-btn bk-btn--glass">Register Now <i class="ri-user-add-line"></i></a>
          </div>
        </div>
      </div>
    </div>
    <!-- Slide 3 -->
    <div class="bk-hero-slide">
      <div class="bk-hero-bg" style="background-image:url('{{ asset('frontassets/images/banner/banner-slide-3.jpg') }}')"></div>
      <div class="bk-wrap">
        <div class="bk-hero-body">
          <span class="bk-hero-label"><i class="ri-earth-fill"></i> Borderless Global Payments</span>
          <h1>Send Money Anywhere. <em>Feel</em> Zero Friction.</h1>
          <p>Reach 50+ countries with transparent, live exchange rates and no hidden fees. Global digital banking built the way it should feel.</p>
          <div class="bk-hero-actions">
            <a href="{{ route('register') }}" class="bk-btn bk-btn--white">Get Started <i class="ri-arrow-right-line"></i></a>
            <a href="{{ url('contact') }}" class="bk-btn bk-btn--glass">Contact Us <i class="ri-customer-service-2-line"></i></a>
          </div>
        </div>
      </div>
    </div>
    <!-- Slide 4 -->
    <div class="bk-hero-slide">
      <div class="bk-hero-bg" style="background-image:url('{{ asset('frontassets/images/banner/4.jpg') }}')"></div>
      <div class="bk-wrap">
        <div class="bk-hero-body">
          <span class="bk-hero-label"><i class="ri-pie-chart-2-fill"></i> High-Yield Tenured Savings</span>
          <h1>Lock In Higher Returns for Your <em>Future</em></h1>
          <p>Grow your capital securely with guaranteed interest rates on structured tenured deposits and high-yield wealth management accounts.</p>
          <div class="bk-hero-actions">
            <a href="{{ route('register') }}" class="bk-btn bk-btn--white">Start Saving <i class="ri-arrow-right-line"></i></a>
            <a href="{{ url('about') }}" class="bk-btn bk-btn--glass">Learn More <i class="ri-information-line"></i></a>
          </div>
        </div>
      </div>
    </div>
  </div>

  <!-- Controls -->
  <button class="bk-hero-arr bk-hero-arr--prev" onclick="bkSlide(-1)" aria-label="Previous slide"><i class="ri-arrow-left-s-line"></i></button>
  <button class="bk-hero-arr bk-hero-arr--next" onclick="bkSlide(1)" aria-label="Next slide"><i class="ri-arrow-right-s-line"></i></button>
  <div class="bk-hero-dots" id="bkDots">
    <button class="active" onclick="bkGo(0)" aria-label="Go to slide 1"></button>
    <button onclick="bkGo(1)" aria-label="Go to slide 2"></button>
    <button onclick="bkGo(2)" aria-label="Go to slide 3"></button>
    <button onclick="bkGo(3)" aria-label="Go to slide 4"></button>
  </div>
  <div class="bk-hero-progress"><div class="bk-hero-progress-bar" id="bkProgress"></div></div>
</section>

<!-- ============================================================
     FEATURE TICKER
     ============================================================ -->
<div class="bk-ticker" aria-hidden="true">
  <div class="bk-ticker-track">
    <span class="bk-ticker-item"><i class="ri-shield-check-fill"></i> 256-Bit Bank-Grade Encryption</span>
    <span class="bk-ticker-sep"></span>
    <span class="bk-ticker-item"><i class="ri-flashlight-fill"></i> Instant Global Transfers</span>
    <span class="bk-ticker-sep"></span>
    <span class="bk-ticker-item"><i class="ri-global-fill"></i> 50+ Countries Reached</span>
    <span class="bk-ticker-sep"></span>
    <span class="bk-ticker-item"><i class="ri-customer-service-2-fill"></i> 24/7 Dedicated Support</span>
    <span class="bk-ticker-sep"></span>
    <span class="bk-ticker-item"><i class="ri-bank-card-fill"></i> Zero Hidden Fee Banking</span>
    <span class="bk-ticker-sep"></span>
    <span class="bk-ticker-item"><i class="ri-percent-fill"></i> High Yield Tenured Savings</span>
    <span class="bk-ticker-sep"></span>
    <span class="bk-ticker-item"><i class="ri-pie-chart-fill"></i> Smart Portfolio Management</span>
    <span class="bk-ticker-sep"></span>
    <span class="bk-ticker-item"><i class="ri-smartphone-fill"></i> Modern Mobile Banking</span>
    <span class="bk-ticker-sep"></span>
    <span class="bk-ticker-item"><i class="ri-exchange-dollar-fill"></i> Real-Time Live FX Rates</span>
    <span class="bk-ticker-sep"></span>
    <!-- duplicate for seamless loop -->
    <span class="bk-ticker-item"><i class="ri-shield-check-fill"></i> 256-Bit Bank-Grade Encryption</span>
    <span class="bk-ticker-sep"></span>
    <span class="bk-ticker-item"><i class="ri-flashlight-fill"></i> Instant Global Transfers</span>
    <span class="bk-ticker-sep"></span>
    <span class="bk-ticker-item"><i class="ri-global-fill"></i> 50+ Countries Reached</span>
    <span class="bk-ticker-sep"></span>
    <span class="bk-ticker-item"><i class="ri-customer-service-2-fill"></i> 24/7 Dedicated Support</span>
    <span class="bk-ticker-sep"></span>
    <span class="bk-ticker-item"><i class="ri-bank-card-fill"></i> Zero Hidden Fee Banking</span>
    <span class="bk-ticker-sep"></span>
    <span class="bk-ticker-item"><i class="ri-percent-fill"></i> High Yield Tenured Savings</span>
    <span class="bk-ticker-sep"></span>
    <span class="bk-ticker-item"><i class="ri-pie-chart-fill"></i> Smart Portfolio Management</span>
    <span class="bk-ticker-sep"></span>
    <span class="bk-ticker-item"><i class="ri-smartphone-fill"></i> Modern Mobile Banking</span>
    <span class="bk-ticker-sep"></span>
    <span class="bk-ticker-item"><i class="ri-exchange-dollar-fill"></i> Real-Time Live FX Rates</span>
    <span class="bk-ticker-sep"></span>
  </div>
</div>

<!-- ============================================================
     TRUST STRIP
     ============================================================ -->
<section class="bk-trust">
  <div class="bk-wrap">
    <div class="bk-trust-grid">
      <div class="bk-trust-item">
        <div class="bk-trust-icon"><i class="ri-lock-2-line"></i></div>
        <div><strong>256-bit Encryption</strong><span>Every session, fully protected</span></div>
      </div>
      <div class="bk-trust-item">
        <div class="bk-trust-icon"><i class="ri-global-line"></i></div>
        <div><strong>50+ Countries</strong><span>One network, worldwide reach</span></div>
      </div>
      <div class="bk-trust-item">
        <div class="bk-trust-icon"><i class="ri-customer-service-2-line"></i></div>
        <div><strong>24/7 Support</strong><span>Real people, always on call</span></div>
      </div>
      <div class="bk-trust-item">
        <div class="bk-trust-icon"><i class="ri-flashlight-line"></i></div>
        <div><strong>Instant Settlement</strong><span>Money moves the moment you do</span></div>
      </div>
    </div>
  </div>
</section>

<!-- ============================================================
     SERVICES / FEATURES BENTO GRID
     ============================================================ -->
<section class="bk-section" id="services">
  <div class="bk-wrap">
    <div class="bk-section-top">
      <span class="bk-label">Our Services</span>
      <h2 class="bk-title">Banking Built Around <em>Your</em> Life</h2>
      <p class="bk-desc">From your personal checking account to international transfers and high-interest fixed deposits, explore the full suite of financial tools built for you.</p>
    </div>
    <div class="bk-cards-grid bk-cards-grid--bento">
      <div class="bk-card bk-card--featured sr">
        <span class="bk-card-badge">Most Popular</span>
        <div class="bk-card-icon"><i class="ri-exchange-dollar-line"></i></div>
        <h3>International Transfers</h3>
        <p>Move money across borders in seconds with real-time exchange rates, bank-level security, and transparent fees that stay refreshingly low.</p>
        <a href="{{ route('register') }}" class="bk-card-link">Get Started <i class="ri-arrow-right-line"></i></a>
      </div>
      <div class="bk-card sr">
        <div class="bk-card-icon"><i class="ri-bank-line"></i></div>
        <h3>Personal Banking</h3>
        <p>Everyday checking and savings accounts that reward smart banking with competitive interest rates and zero monthly maintenance fees.</p>
        <a href="{{ url('services') }}" class="bk-card-link">Learn More <i class="ri-arrow-right-line"></i></a>
      </div>
      <div class="bk-card sr">
        <div class="bk-card-icon"><i class="ri-briefcase-4-line"></i></div>
        <h3>Business Solutions</h3>
        <p>From commercial accounts to payroll management and treasury tools, everything your enterprise needs to scale seamlessly.</p>
        <a href="{{ url('services') }}" class="bk-card-link">Learn More <i class="ri-arrow-right-line"></i></a>
      </div>
      <div class="bk-card sr">
        <div class="bk-card-icon"><i class="ri-bank-card-line"></i></div>
        <h3>Credit &amp; Debit Cards</h3>
        <p>Virtual and physical cards with instant cashback, zero annual fees, and multi-currency support wherever you travel.</p>
        <a href="{{ url('services') }}" class="bk-card-link">Learn More <i class="ri-arrow-right-line"></i></a>
      </div>
      <div class="bk-card sr">
        <div class="bk-card-icon"><i class="ri-hand-coin-line"></i></div>
        <h3>Loans &amp; Mortgages</h3>
        <p>Flexible personal loans, business credit lines, and home financing with transparent rates and customizable terms.</p>
        <a href="{{ url('services') }}" class="bk-card-link">Learn More <i class="ri-arrow-right-line"></i></a>
      </div>
      <div class="bk-card sr">
        <div class="bk-card-icon"><i class="ri-pie-chart-2-line"></i></div>
        <h3>Tenured Deposits &amp; Wealth</h3>
        <p>Lock in high fixed returns on long-term savings options designed to protect and grow your capital securely.</p>
        <a href="{{ url('about') }}" class="bk-card-link">Learn More <i class="ri-arrow-right-line"></i></a>
      </div>
      <div class="bk-card bk-card--cta sr">
        <div class="bk-card-icon"><i class="ri-question-answer-line"></i></div>
        <h3>Have Questions for Us?</h3>
        <p>Our financial specialists are available 24/7 to guide you through opening an account or choosing the right solution.</p>
        <a href="{{ url('contact') }}" class="bk-card-link">Talk to Support <i class="ri-arrow-right-line"></i></a>
      </div>
    </div>
  </div>
</section>

<!-- ============================================================
     HOW IT WORKS
     ============================================================ -->
<section class="bk-section bk-section--gray">
  <div class="bk-wrap">
    <div class="bk-section-top">
      <span class="bk-label">How It Works</span>
      <h2 class="bk-title">Open Your Account in <em>Minutes</em></h2>
      <p class="bk-desc">Getting started with Topsavers Trust Bank is fast and simple. Just three easy steps stand between you and modern banking.</p>
    </div>
    <div class="bk-steps">
      <div class="bk-step sr">
        <div class="bk-step-num">01</div>
        <h3>Create Account</h3>
        <p>Sign up online in under 5 minutes  all you need is a valid government ID and basic details.</p>
      </div>
      <div class="bk-step-line"></div>
      <div class="bk-step sr">
        <div class="bk-step-num">02</div>
        <h3>Verify Identity</h3>
        <p>Our automated, bank-grade verification process keeps your account locked and protected right from day one.</p>
      </div>
      <div class="bk-step-line"></div>
      <div class="bk-step sr">
        <div class="bk-step-num">03</div>
        <h3>Fund &amp; Transact</h3>
        <p>Deposit funds securely, execute global transfers, and track your money live in one simple dashboard.</p>
      </div>
    </div>
  </div>
</section>

<!-- ============================================================
     SMART BANKING FEATURES
     ============================================================ -->
<section class="bk-features-dark" id="features">
  <div class="bk-wrap">
    <div class="bk-section-top">
      <span class="bk-label bk-label--light">Smart Banking</span>
      <h2 class="bk-title bk-title--white">One Platform. <em>Total</em> Control Over Your Money.</h2>
      <p class="bk-desc bk-desc--light">We combined state-of-the-art fintech infrastructure with responsive personal service, making money management effortless.</p>
    </div>
    <div class="bk-fd-grid">
      <div class="bk-fd-item">
        <div class="bk-fd-icon"><i class="ri-send-plane-fill"></i></div>
        <h4>Instant Transfers</h4>
        <p>Send domestic and international payments in seconds with immediate confirmation and low fees.</p>
      </div>
      <div class="bk-fd-item">
        <div class="bk-fd-icon"><i class="ri-smartphone-line"></i></div>
        <h4>Mobile Banking</h4>
        <p>Manage accounts, issue payments, and view transaction history on any phone, tablet, or desktop.</p>
      </div>
      <div class="bk-fd-item">
        <div class="bk-fd-icon"><i class="ri-fingerprint-line"></i></div>
        <h4>Biometric Security</h4>
        <p>Log in securely with fingerprint or facial identification, backed by hardware-level authentication.</p>
      </div>
      <div class="bk-fd-item">
        <div class="bk-fd-icon"><i class="ri-notification-3-line"></i></div>
        <h4>Real-Time Push Alerts</h4>
        <p>Receive instant SMS and email notifications whenever funds arrive, move, or undergo balance changes.</p>
      </div>
      <div class="bk-fd-item">
        <div class="bk-fd-icon"><i class="ri-line-chart-line"></i></div>
        <h4>Spending Analytics</h4>
        <p>Automatic categorisation and visual graphs break down monthly spending habits to help you save faster.</p>
      </div>
      <div class="bk-fd-item">
        <div class="bk-fd-icon"><i class="ri-shield-star-line"></i></div>
        <h4>Fraud Protection</h4>
        <p>AI-driven security algorithms monitor transactions 24/7 to flag suspicious activity immediately.</p>
      </div>
    </div>
  </div>
</section>

<!-- ============================================================
     ABOUT / WHY CHOOSE US
     ============================================================ -->
<section class="bk-section" id="about">
  <div class="bk-wrap">
    <div class="bk-split">
      <div class="bk-split-media sr">
        <div class="bk-img-stack">
          <img src="{{ asset('frontassets/images/banner/5.jpg') }}" alt="Banking Excellence" class="bk-img-main">
          <div class="bk-img-badge">
            <span class="bk-img-badge-num">15+</span>
            <span class="bk-img-badge-txt">Years of<br>Excellence</span>
          </div>
        </div>
      </div>
      <div class="bk-split-text sr">
        <span class="bk-label">Why Choose Us</span>
        <h2 class="bk-title">A Bank Built on Trust, Not Just <em>Transactions</em></h2>
        <p class="bk-desc" style="margin:0 0 20px">For over a decade, Topsavers Trust Bank has been redefining digital finance  pairing powerful tech with genuine care, ensuring every customer feels safe, supported, and valued.</p>
        <div class="bk-check-list">
          <div class="bk-check-item">
            <i class="ri-checkbox-circle-fill"></i>
            <div>
              <strong>Transparent Banking Guarantee</strong>
              <p>No hidden maintenance fees, no surprise fine-print charges  plain, honest banking.</p>
            </div>
          </div>
          <div class="bk-check-item">
            <i class="ri-checkbox-circle-fill"></i>
            <div>
              <strong>Bank-Grade Multi-Layer Security</strong>
              <p>Multi-factor authentication, SSL encryption, and continuous monitoring protect your funds.</p>
            </div>
          </div>
          <div class="bk-check-item">
            <i class="ri-checkbox-circle-fill"></i>
            <div>
              <strong>24/7 Human Customer Support</strong>
              <p>Speak directly with real financial experts whenever you need assistance, day or night.</p>
            </div>
          </div>
        </div>
        <a href="{{ url('about') }}" class="bk-btn bk-btn--fill" style="margin-top:20px">More About Us <i class="ri-arrow-right-line"></i></a>
      </div>
    </div>
  </div>
</section>

<!-- ============================================================
     WHY SWITCH / COMPARISON
     ============================================================ -->
<section class="bk-section bk-section--gray">
  <div class="bk-wrap">
    <div class="bk-section-top">
      <span class="bk-label">Why Switch</span>
      <h2 class="bk-title">See the <em>Difference</em> for Yourself</h2>
      <p class="bk-desc">No waiting rooms, no slow approvals  just banking that respects your time and your money.</p>
    </div>
    <div class="bk-compare sr">
      <div class="bk-compare-row bk-compare-row--head">
        <div class="bk-compare-label">Feature</div>
        <div class="bk-compare-col bk-compare-col--us">Topsavers Trust Bank</div>
        <div class="bk-compare-col">Traditional Banks</div>
      </div>
      <div class="bk-compare-row">
        <div class="bk-compare-label">Account Opening</div>
        <div class="bk-compare-col bk-compare-col--us"><i class="ri-checkbox-circle-fill"></i> Under 5 mins, online</div>
        <div class="bk-compare-col"><i class="ri-close-circle-line"></i> Days, branch visit</div>
      </div>
      <div class="bk-compare-row">
        <div class="bk-compare-label">Global Transfer Speed</div>
        <div class="bk-compare-col bk-compare-col--us"><i class="ri-checkbox-circle-fill"></i> Real-time / Instant</div>
        <div class="bk-compare-col"><i class="ri-close-circle-line"></i> 3 - 5 Business days</div>
      </div>
      <div class="bk-compare-row">
        <div class="bk-compare-label">Customer Support</div>
        <div class="bk-compare-col bk-compare-col--us"><i class="ri-checkbox-circle-fill"></i> 24/7 Live Support</div>
        <div class="bk-compare-col"><i class="ri-close-circle-line"></i> Business hours only</div>
      </div>
      <div class="bk-compare-row">
        <div class="bk-compare-label">Monthly Account Fees</div>
        <div class="bk-compare-col bk-compare-col--us"><i class="ri-checkbox-circle-fill"></i> $0 Zero Fees</div>
        <div class="bk-compare-col"><i class="ri-close-circle-line"></i> $10 - $35 Recurring</div>
      </div>
      <div class="bk-compare-row">
        <div class="bk-compare-label">Fraud Monitoring</div>
        <div class="bk-compare-col bk-compare-col--us"><i class="ri-checkbox-circle-fill"></i> Real-time AI detection</div>
        <div class="bk-compare-col"><i class="ri-close-circle-line"></i> Delayed manual checks</div>
      </div>
    </div>
  </div>
</section>

<!-- ============================================================
     EXCHANGE RATES
     ============================================================ -->
<section class="bk-section" id="rates">
  <div class="bk-wrap">
    <div class="bk-section-top">
      <span class="bk-label">Live FX Rates</span>
      <h2 class="bk-title">Real-Time Currency Rates, <em>No Markups</em></h2>
      <p class="bk-desc">Refreshed continuously in real time, giving you clear visibility before sending funds abroad.</p>
    </div>
    <div class="bk-rates-wrap sr">
      <table class="bk-rates-table">
        <thead>
          <tr>
            <th>Currency Pair</th>
            <th>Buy Rate (USD)</th>
            <th>Sell Rate (USD)</th>
            <th>24h Change</th>
            <th>Action</th>
          </tr>
        </thead>
        <tbody>
          <tr>
            <td><div class="bk-cur"><img src="https://flagcdn.com/w40/gb.png" alt="GBP"><div><b>GBP</b><small>British Pound</small></div></div></td>
            <td class="bk-mono">1.2645</td>
            <td class="bk-mono">1.2590</td>
            <td><span class="bk-badge bk-badge--up">+0.12%</span></td>
            <td><a href="{{ route('register') }}" class="bk-btn-xs">Send <i class="ri-send-plane-line"></i></a></td>
          </tr>
          <tr>
            <td><div class="bk-cur"><img src="https://flagcdn.com/w40/eu.png" alt="EUR"><div><b>EUR</b><small>Euro</small></div></div></td>
            <td class="bk-mono">1.0842</td>
            <td class="bk-mono">1.0790</td>
            <td><span class="bk-badge bk-badge--up">+0.08%</span></td>
            <td><a href="{{ route('register') }}" class="bk-btn-xs">Send <i class="ri-send-plane-line"></i></a></td>
          </tr>
          <tr>
            <td><div class="bk-cur"><img src="https://flagcdn.com/w40/jp.png" alt="JPY"><div><b>JPY</b><small>Japanese Yen</small></div></div></td>
            <td class="bk-mono">0.00671</td>
            <td class="bk-mono">0.00665</td>
            <td><span class="bk-badge bk-badge--down">-0.15%</span></td>
            <td><a href="{{ route('register') }}" class="bk-btn-xs">Send <i class="ri-send-plane-line"></i></a></td>
          </tr>
          <tr>
            <td><div class="bk-cur"><img src="https://flagcdn.com/w40/ca.png" alt="CAD"><div><b>CAD</b><small>Canadian Dollar</small></div></div></td>
            <td class="bk-mono">0.7410</td>
            <td class="bk-mono">0.7365</td>
            <td><span class="bk-badge bk-badge--up">+0.05%</span></td>
            <td><a href="{{ route('register') }}" class="bk-btn-xs">Send <i class="ri-send-plane-line"></i></a></td>
          </tr>
          <tr>
            <td><div class="bk-cur"><img src="https://flagcdn.com/w40/ch.png" alt="CHF"><div><b>CHF</b><small>Swiss Franc</small></div></div></td>
            <td class="bk-mono">1.1290</td>
            <td class="bk-mono">1.1235</td>
            <td><span class="bk-badge bk-badge--down">-0.03%</span></td>
            <td><a href="{{ route('register') }}" class="bk-btn-xs">Send <i class="ri-send-plane-line"></i></a></td>
          </tr>
        </tbody>
      </table>
    </div>
  </div>
</section>

<!-- ============================================================
     TESTIMONIALS
     ============================================================ -->
<section class="bk-section bk-section--gray" id="testimonials">
  <div class="bk-wrap">
    <div class="bk-section-top">
      <span class="bk-label">Client Reviews</span>
      <h2 class="bk-title">Trusted by Thousands <em>Worldwide</em></h2>
      <p class="bk-desc">Real stories from individuals and business owners who rely on Topsavers Trust Bank daily.</p>
    </div>
    <div class="bk-rating-summary">
      <div class="bk-stars"><i class="ri-star-fill"></i><i class="ri-star-fill"></i><i class="ri-star-fill"></i><i class="ri-star-fill"></i><i class="ri-star-half-fill"></i></div>
      <span><strong>4.9 / 5</strong> average rating from 12,000+ verified clients</span>
    </div>
    <div class="bk-testimonials-scroll">
      <div class="bk-testimonial sr">
        <div class="bk-stars"><i class="ri-star-fill"></i><i class="ri-star-fill"></i><i class="ri-star-fill"></i><i class="ri-star-fill"></i><i class="ri-star-fill"></i></div>
        <p>"Topsavers Trust Bank transformed our business transfers. International payments execute in seconds, and customer support is always available."</p>
        <div class="bk-testimonial-author">
          <div class="bk-avatar"><i class="ri-user-3-fill"></i></div>
          <div><strong>James Whitfield</strong><span>Entrepreneur &amp; Director</span></div>
        </div>
      </div>
      <div class="bk-testimonial sr">
        <div class="bk-stars"><i class="ri-star-fill"></i><i class="ri-star-fill"></i><i class="ri-star-fill"></i><i class="ri-star-fill"></i><i class="ri-star-fill"></i></div>
        <p>"The clean digital interface and zero hidden fees make this the best bank I've ever used. Transfers arrive instantaneously."</p>
        <div class="bk-testimonial-author">
          <div class="bk-avatar"><i class="ri-user-3-fill"></i></div>
          <div><strong>Sarah Mitchell</strong><span>Creative Director</span></div>
        </div>
      </div>
      <div class="bk-testimonial sr">
        <div class="bk-stars"><i class="ri-star-fill"></i><i class="ri-star-fill"></i><i class="ri-star-fill"></i><i class="ri-star-fill"></i><i class="ri-star-half-fill"></i></div>
        <p>"Competitive exchange rates and zero hassle. I save hundreds every month sending funds to family overseas."</p>
        <div class="bk-testimonial-author">
          <div class="bk-avatar"><i class="ri-user-3-fill"></i></div>
          <div><strong>David George</strong><span>Global Trade Partner</span></div>
        </div>
      </div>
    </div>
  </div>
</section>

<!-- ============================================================
     CTA BANNER
     ============================================================ -->
<section class="bk-cta">
  <div class="bk-wrap">
    <div class="bk-cta-box sr">
      <div class="bk-cta-content">
        <h2>Ready to Bank Smarter, Starting Today?</h2>
        <p>Join thousands of clients already banking better with Topsavers Trust Bank. Open your account in under 5 minutes  no paperwork, no hassle.</p>
        <div class="bk-cta-btns">
          <a href="{{ route('register') }}" class="bk-btn bk-btn--white">Open Free Account <i class="ri-arrow-right-line"></i></a>
          <a href="{{ url('contact') }}" class="bk-btn bk-btn--glass">Contact Support <i class="ri-customer-service-2-line"></i></a>
        </div>
      </div>
    </div>
  </div>
</section>

@include('home.footer')