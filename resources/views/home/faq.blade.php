@include('home.header')

<!-- Page Hero -->
<section class="bk-page-hero">
  <div class="bk-wrap">
    <h1>Frequently Asked Questions</h1>
    <p>Find quick answers to common questions about accounts, transfers, and security at Topsavers Trust Bank.</p>
    <div class="bk-breadcrumb"><a href="/">Home</a> <span>/</span> FAQ</div>
  </div>
</section>

<!-- FAQ Accordion -->
<section class="bk-page-section">
  <div class="bk-wrap" style="max-width:850px">

    <div class="bk-section-top">
      <span class="bk-label">General</span>
      <h2 class="bk-title">General Banking</h2>
    </div>

    <div class="bk-accordion">
      <div class="bk-acc-item sr">
        <button class="bk-acc-btn">What is Topsavers Trust Bank? <i class="ri-add-line"></i></button>
        <div class="bk-acc-body">
          <p>Topsavers Trust Bank is a digital banking institution offering personal checking, corporate accounts, high-yield fixed deposits, global money transfers, and online credit solutions built for speed, safety, and simplicity.</p>
        </div>
      </div>
      <div class="bk-acc-item sr">
        <button class="bk-acc-btn">How do I open an account? <i class="ri-add-line"></i></button>
        <div class="bk-acc-body">
          <p>Opening an account is simple and takes under 5 minutes online. Click "Open Account" on our website, fill in your personal information, upload a valid government-issued ID for verification, and your account will be activated.</p>
        </div>
      </div>
      <div class="bk-acc-item sr">
        <button class="bk-acc-btn">Is my money protected with Topsavers Trust Bank? <i class="ri-add-line"></i></button>
        <div class="bk-acc-body">
          <p>Yes. We employ 256-bit SSL encryption, multi-factor hardware authentication, automated fraud monitoring, and strict regulatory compliance standards to ensure your funds and personal data are protected 24/7.</p>
        </div>
      </div>
      <div class="bk-acc-item sr">
        <button class="bk-acc-btn">What are your support hours? <i class="ri-add-line"></i></button>
        <div class="bk-acc-body">
          <p>Our online portal and digital banking services operate 24 hours a day, 7 days a week. Our customer support team is continuously available via email at support@topsaverstbc.com.</p>
        </div>
      </div>
    </div>

    <div class="bk-section-top" style="margin-top:48px">
      <span class="bk-label">Transfers &amp; Deposits</span>
      <h2 class="bk-title">Money Transfers &amp; Deposits</h2>
    </div>

    <div class="bk-accordion">
      <div class="bk-acc-item sr">
        <button class="bk-acc-btn">How fast are international money transfers? <i class="ri-add-line"></i></button>
        <div class="bk-acc-body">
          <p>Most transfers processed through Topsavers Trust Bank settle in real time or within a few hours depending on the destination currency and receiving bank network.</p>
        </div>
      </div>
      <div class="bk-acc-item sr">
        <button class="bk-acc-btn">What are fixed/tenured deposits? <i class="ri-add-line"></i></button>
        <div class="bk-acc-body">
          <p>Fixed deposits allow you to deposit a specific sum for a fixed period at a guaranteed interest rate. Upon maturity, the funds plus accumulated interest can be paid out or re-invested based on your preference.</p>
        </div>
      </div>
      <div class="bk-acc-item sr">
        <button class="bk-acc-btn">Are there any hidden monthly fees? <i class="ri-add-line"></i></button>
        <div class="bk-acc-body">
          <p>No. We believe in complete transparency. Our account plans have zero hidden maintenance fees or surprise charges.</p>
        </div>
      </div>
    </div>

    <div class="bk-section-top" style="margin-top:48px">
      <span class="bk-label">Security &amp; Account</span>
      <h2 class="bk-title">Digital Security &amp; Access</h2>
    </div>

    <div class="bk-accordion">
      <div class="bk-acc-item sr">
        <button class="bk-acc-btn">What should I do if I forget my password? <i class="ri-add-line"></i></button>
        <div class="bk-acc-body">
          <p>Click on the "Forgot Password" link on the sign-in page. Follow the instructions sent to your registered email address to securely reset your password.</p>
        </div>
      </div>
      <div class="bk-acc-item sr">
        <button class="bk-acc-btn">How does two-factor authentication work? <i class="ri-add-line"></i></button>
        <div class="bk-acc-body">
          <p>Two-factor authentication adds an extra layer of protection by requiring a verification code sent to your registered mobile or email whenever you log in or initiate a transfer.</p>
        </div>
      </div>
    </div>

  </div>
</section>

<!-- Still Have Questions CTA -->
<section class="bk-cta">
  <div class="bk-wrap">
    <div class="bk-cta-box sr">
      <div class="bk-cta-content">
        <h2>Still Have Questions?</h2>
        <p>Our support team is available 24/7 to assist you.</p>
        <div class="bk-cta-btns">
          <a href="{{ url('contact') }}" class="bk-btn bk-btn--white">Contact Us <i class="ri-arrow-right-line"></i></a>
          <a href="{{ route('login') }}" class="bk-btn bk-btn--glass">Sign In <i class="ri-login-circle-line"></i></a>
        </div>
      </div>
    </div>
  </div>
</section>

<!-- FAQ Accordion Script -->
<script>
document.addEventListener('DOMContentLoaded',function(){
  document.querySelectorAll('.bk-acc-btn').forEach(function(btn){
    btn.addEventListener('click',function(){
      var item=this.parentElement;
      var open=item.classList.contains('open');
      item.closest('.bk-accordion').querySelectorAll('.bk-acc-item').forEach(function(i){i.classList.remove('open')});
      if(!open) item.classList.add('open');
    });
  });
});
</script>

@include('home.footer')