@include('home.header')

<!-- Page Hero -->
<section class="bk-page-hero">
  <div class="bk-wrap">
    <h1>About Us</h1>
    <p>The story, principles, and vision behind Topsavers Trust Bank.</p>
    <div class="bk-breadcrumb"><a href="/">Home</a> <span>/</span> About Us</div>
  </div>
</section>

<!-- Mission Section -->
<section class="bk-page-section">
  <div class="bk-wrap">
    <div class="bk-page-grid-2">
      <div class="bk-content-block sr">
        <span class="bk-label">Our Story</span>
        <h2>Banking Shouldn't Feel Like a Friction</h2>
        <p>Topsavers Trust Bank was established with a clear mission: to make digital finance simple, transparent, and accessible worldwide. We pair cutting-edge banking technology with personal customer care, so individuals and businesses can save, transfer, and grow their wealth effortlessly.</p>
        <p>Whether you are opening your first savings account, managing corporate treasury, or sending cross-border transfers to family abroad, our platform delivers real-time speed with bank-grade protection.</p>
        <div class="bk-check-list" style="margin-top:16px">
          <div class="bk-check-item">
            <i class="ri-checkbox-circle-fill"></i>
            <div><strong>Innovation First</strong><p>We continuously upgrade our platform to ensure fast settlement and 99.99% uptime.</p></div>
          </div>
          <div class="bk-check-item">
            <i class="ri-checkbox-circle-fill"></i>
            <div><strong>Customer-Centric</strong><p>Every product decision is designed to solve real user financial needs with zero hassle.</p></div>
          </div>
          <div class="bk-check-item">
            <i class="ri-checkbox-circle-fill"></i>
            <div><strong>Trust &amp; Transparency</strong><p>Clear rate structures and transparent balance reporting with no surprise fees.</p></div>
          </div>
        </div>
      </div>
      <div class="bk-img-stack sr">
        <img src="{{ asset('frontassets/images/banner/4.jpg') }}" alt="Topsavers Trust Bank Team" class="bk-img-main">
        <div class="bk-img-badge">
          <span class="bk-img-badge-num">15+</span>
          <span class="bk-img-badge-txt">Years of<br>Excellence</span>
        </div>
      </div>
    </div>
  </div>
</section>

<!-- Values Section -->
<section class="bk-page-section--alt">
  <div class="bk-wrap">
    <div class="bk-section-top">
      <span class="bk-label">Our Values</span>
      <h2 class="bk-title">The Principles We Stand By</h2>
      <p class="bk-desc">These core values define how we operate and serve our valued clients every single day.</p>
    </div>
    <div class="bk-page-grid-3">
      <div class="bk-info-card sr">
        <div class="bk-ic-icon"><i class="ri-shield-check-line"></i></div>
        <h3>Bank-Grade Security</h3>
        <p>256-bit SSL encryption, hardware authentication, and automated fraud protection keep every transaction secure.</p>
      </div>
      <div class="bk-info-card sr">
        <div class="bk-ic-icon"><i class="ri-heart-3-line"></i></div>
        <h3>Integrity &amp; Honesty</h3>
        <p>Our fees and interest rates are always shown upfront. What you see is exactly what you get.</p>
      </div>
      <div class="bk-info-card sr">
        <div class="bk-ic-icon"><i class="ri-lightbulb-line"></i></div>
        <h3>Financial Innovation</h3>
        <p>We deploy modern fintech tools that make sending, receiving, and growing funds instant and effortless.</p>
      </div>
      <div class="bk-info-card sr">
        <div class="bk-ic-icon"><i class="ri-global-line"></i></div>
        <h3>Global Reach</h3>
        <p>Connecting clients across 50+ countries with competitive multi-currency FX rates.</p>
      </div>
      <div class="bk-info-card sr">
        <div class="bk-ic-icon"><i class="ri-team-line"></i></div>
        <h3>Community Focus</h3>
        <p>We support financial literacy and empower local businesses to achieve sustainable financial growth.</p>
      </div>
      <div class="bk-info-card sr">
        <div class="bk-ic-icon"><i class="ri-customer-service-2-line"></i></div>
        <h3>24/7 Reliability</h3>
        <p>Dedicated customer assistance available around the clock to support your banking inquiries.</p>
      </div>
    </div>
  </div>
</section>

<!-- Features Section -->
<section class="bk-page-section">
  <div class="bk-wrap">
    <div class="bk-section-top">
      <span class="bk-label">Why Choose Us</span>
      <h2 class="bk-title">What Sets Topsavers Trust Bank Apart</h2>
    </div>
    <div class="bk-page-grid-4">
      <div class="bk-info-card sr">
        <div class="bk-ic-icon"><i class="ri-bank-card-line"></i></div>
        <h3>Multiple Transfer Options</h3>
        <p>Wire transfers, international payments, and instant internal transfers supported 24/7.</p>
      </div>
      <div class="bk-info-card sr">
        <div class="bk-ic-icon"><i class="ri-exchange-dollar-line"></i></div>
        <h3>High Yield Interest</h3>
        <p>Competitive returns on tenured fixed deposits and high-interest savings accounts.</p>
      </div>
      <div class="bk-info-card sr">
        <div class="bk-ic-icon"><i class="ri-lock-2-line"></i></div>
        <h3>Encrypted Account Safety</h3>
        <p>Advanced multi-factor authentication and continuous balance protection.</p>
      </div>
      <div class="bk-info-card sr">
        <div class="bk-ic-icon"><i class="ri-24-hours-line"></i></div>
        <h3>Always-On Support</h3>
        <p>Live email and online support available whenever you need help.</p>
      </div>
    </div>
  </div>
</section>

<!-- CTA -->
<section class="bk-cta">
  <div class="bk-wrap">
    <div class="bk-cta-box sr">
      <div class="bk-cta-content">
        <h2>Experience Modern Digital Banking</h2>
        <p>Open a free account today and see what banking feels like when built around your life.</p>
        <div class="bk-cta-btns">
          <a href="{{ route('register') }}" class="bk-btn bk-btn--white">Open Account <i class="ri-arrow-right-line"></i></a>
          <a href="{{ url('contact') }}" class="bk-btn bk-btn--glass">Contact Us <i class="ri-phone-line"></i></a>
        </div>
      </div>
    </div>
  </div>
</section>

@include('home.footer')