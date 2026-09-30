@include('home.header')

<!-- Page Hero -->
<section class="bk-page-hero">
  <div class="bk-wrap">
    <h1>Our Services</h1>
    <p>Comprehensive financial and digital banking solutions tailored for individuals and businesses.</p>
    <div class="bk-breadcrumb"><a href="/">Home</a> <span>/</span> Services</div>
  </div>
</section>

<!-- Services Grid -->
<section class="bk-page-section">
  <div class="bk-wrap">
    <div class="bk-section-top">
      <span class="bk-label">What We Offer</span>
      <h2 class="bk-title">Modern Digital Banking Solutions</h2>
      <p class="bk-desc">From personal savings accounts to global transfers and high-yield fixed deposits, discover our suite of banking products.</p>
    </div>
    <div class="bk-cards-grid">
      <div class="bk-card sr">
        <div class="bk-card-icon"><i class="ri-exchange-dollar-line"></i></div>
        <h3>Global Money Transfer</h3>
        <p>Send and receive funds internationally across 50+ countries with competitive exchange rates and fast settlement.</p>
        <a href="{{ route('register') }}" class="bk-card-link">Get Started <i class="ri-arrow-right-line"></i></a>
      </div>
      <div class="bk-card sr">
        <div class="bk-card-icon"><i class="ri-bank-line"></i></div>
        <h3>Personal Checking &amp; Savings</h3>
        <p>Everyday personal banking with zero hidden fees, competitive interest rates, and seamless mobile access.</p>
        <a href="{{ route('register') }}" class="bk-card-link">Open Account <i class="ri-arrow-right-line"></i></a>
      </div>
      <div class="bk-card sr">
        <div class="bk-card-icon"><i class="ri-briefcase-4-line"></i></div>
        <h3>Corporate &amp; Business Banking</h3>
        <p>Business accounts, commercial transfers, payroll management, and corporate treasury solutions.</p>
        <a href="{{ route('register') }}" class="bk-card-link">Learn More <i class="ri-arrow-right-line"></i></a>
      </div>
      <div class="bk-card sr">
        <div class="bk-card-icon"><i class="ri-bank-card-line"></i></div>
        <h3>Debit &amp; Credit Cards</h3>
        <p>Multi-currency cards for global spending, online shopping, zero annual fees, and instant card controls.</p>
        <a href="{{ route('register') }}" class="bk-card-link">Apply Now <i class="ri-arrow-right-line"></i></a>
      </div>
      <div class="bk-card sr">
        <div class="bk-card-icon"><i class="ri-hand-coin-line"></i></div>
        <h3>Personal &amp; Commercial Loans</h3>
        <p>Flexible financing solutions with competitive interest rates and customizable repayment schedules.</p>
        <a href="{{ url('contact') }}" class="bk-card-link">Contact Support <i class="ri-arrow-right-line"></i></a>
      </div>
      <div class="bk-card sr">
        <div class="bk-card-icon"><i class="ri-pie-chart-2-line"></i></div>
        <h3>Fixed &amp; Tenured Deposits</h3>
        <p>Lock in guaranteed high returns on long-term savings accounts with structured payout terms.</p>
        <a href="{{ route('register') }}" class="bk-card-link">Start Depositing <i class="ri-arrow-right-line"></i></a>
      </div>
    </div>
  </div>
</section>

<!-- Why Choose Us -->
<section class="bk-page-section--alt">
  <div class="bk-wrap">
    <div class="bk-section-top">
      <span class="bk-label">Why Topsavers</span>
      <h2 class="bk-title">Why Choose Topsavers Trust Bank?</h2>
    </div>
    <div class="bk-page-grid-4">
      <div class="bk-info-card sr">
        <i class="ri-global-line"></i>
        <h4>Global Reach</h4>
        <p>Seamless international transfers with multi-currency support.</p>
      </div>
      <div class="bk-info-card sr">
        <i class="ri-user-star-line"></i>
        <h4>Dedicated Support</h4>
        <p>24/7 client care specialists available whenever you need assistance.</p>
      </div>
      <div class="bk-info-card sr">
        <i class="ri-lock-line"></i>
        <h4>Bank-Grade Security</h4>
        <p>256-bit encryption and active fraud monitoring on all accounts.</p>
      </div>
      <div class="bk-info-card sr">
        <i class="ri-customer-service-2-line"></i>
        <h4>Zero Hidden Fees</h4>
        <p>Transparent pricing with clear fee breakdowns across all services.</p>
      </div>
    </div>
  </div>
</section>

<!-- CTA -->
<section class="bk-cta">
  <div class="bk-wrap">
    <div class="bk-cta-box sr">
      <div class="bk-cta-content">
        <h2>Ready to Bank Smarter?</h2>
        <p>Open your Topsavers Trust Bank account in under 5 minutes.</p>
        <div class="bk-cta-btns">
          <a href="{{ route('register') }}" class="bk-btn bk-btn--white">Open an Account <i class="ri-arrow-right-line"></i></a>
          <a href="{{ url('contact') }}" class="bk-btn bk-btn--glass">Contact Support <i class="ri-phone-line"></i></a>
        </div>
      </div>
    </div>
  </div>
</section>

@include('home.footer')