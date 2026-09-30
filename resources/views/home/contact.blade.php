@include('home.header')

<!-- Page Hero -->
<section class="bk-page-hero">
  <div class="bk-wrap">
    <h1>Contact Us</h1>
    <p>Our dedicated support team is available 24/7. Reach out and we'll get right back to you.</p>
    <div class="bk-breadcrumb"><a href="/">Home</a> <span>/</span> Contact Us</div>
  </div>
</section>

<!-- Contact Content -->
<section class="bk-page-section">
  <div class="bk-wrap">
    <div class="bk-page-grid-2">
      <!-- Contact Info -->
      <div class="sr">
        <span class="bk-label">Get In Touch</span>
        <h2 class="bk-title" style="text-align:left;margin-bottom:16px">How Can We Help You?</h2>
        <p style="font-size:.95rem;color:var(--txt-m);line-height:1.65;margin-bottom:24px">Whether you have questions about opening an account, managing transfers, or choosing the right deposit plan, our support team is standing by.</p>

        <div class="bk-feat-item">
          <div class="bk-fi-icon"><i class="ri-mail-line"></i></div>
          <div>
            <h4>Email Support</h4>
            <p><a href="mailto:support@topsaverstbc.com" style="color:var(--blue);font-weight:600">support@topsaverstbc.com</a></p>
          </div>
        </div>

        <div class="bk-feat-item">
          <div class="bk-fi-icon"><i class="ri-shield-check-line"></i></div>
          <div>
            <h4>Security &amp; Fraud Assistance</h4>
            <p>24/7 automated account monitoring and rapid response team.</p>
          </div>
        </div>

        <div class="bk-feat-item">
          <div class="bk-fi-icon"><i class="ri-time-line"></i></div>
          <div>
            <h4>Operating Hours</h4>
            <p>Online &amp; Digital Banking: 24 Hours / 7 Days a week<br>Support Desk: Always Available</p>
          </div>
        </div>
      </div>

      <!-- Contact Form -->
      <div class="sr">
        <div class="bk-info-card" style="padding:32px 28px">
          <h3 style="font-size:1.15rem;font-weight:700;margin-bottom:18px">Send Us a Message</h3>

          @if(session('status'))
            <div class="bk-alert bk-alert--success">{{ session('status') }}</div>
          @endif
          @if(session('error'))
            <div class="bk-alert bk-alert--error">{{ session('error') }}</div>
          @endif

          <form method="POST" action="{{ url('contact') }}">
            @csrf
            <div class="bk-form-group">
              <label for="email">Your Email Address</label>
              <input type="email" name="email" id="email" class="bk-input" placeholder="name@example.com" required>
            </div>
            <div class="bk-form-group">
              <label for="subject">Subject</label>
              <input type="text" name="subject" id="subject" class="bk-input" placeholder="Account inquiry, transfer, etc." required>
            </div>
            <div class="bk-form-group">
              <label for="message">Message Details</label>
              <textarea name="message" id="message" class="bk-input" placeholder="Type your message here..." required></textarea>
            </div>
            <button type="submit" class="bk-btn bk-btn--fill" style="width:100%;justify-content:center;padding:12px 20px">Send Message <i class="ri-send-plane-line"></i></button>
          </form>
        </div>
      </div>
    </div>
  </div>
</section>

@include('home.footer')