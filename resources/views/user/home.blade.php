@include('user.header')

<!-- Dashboard Main Content -->
<div class="container-fluid px-2 px-md-4 py-3">

  <!-- TOP WELCOME & ACCOUNT OVERVIEW ROW -->
  <div class="row g-3 mb-4 animate-fadein">

    <!-- Account Overview Card (Ultra-Premium Luxury Edition) -->
    <div class="col-lg-8">
      <div class="card border-0 shadow-lg rounded-4 text-white overflow-hidden h-100" style="background: linear-gradient(135deg, #004d4a 0%, #007875 45%, #009691 85%, #00a9a4 100%); position: relative; border: 1px solid rgba(255, 255, 255, 0.2) !important; box-shadow: 0 15px 35px rgba(0, 169, 164, 0.2) !important;">
        
        <!-- Ambient Metallic Glows & Decorative Watermark -->
        <div style="position: absolute; right: -60px; top: -60px; width: 280px; height: 280px; background: rgba(0, 169, 164, 0.25); filter: blur(65px); border-radius: 50%; pointer-events: none;"></div>
        <div style="position: absolute; left: -80px; bottom: -80px; width: 240px; height: 240px; background: rgba(2, 132, 199, 0.2); filter: blur(55px); border-radius: 50%; pointer-events: none;"></div>
        <div style="position: absolute; right: 24px; top: 20px; font-family: 'Manrope', sans-serif; font-size: 3.5rem; font-weight: 900; color: rgba(255,255,255,0.03); letter-spacing: 4px; pointer-events: none; user-select: none;">TOPSAVERS</div>

        <div class="card-body p-4 p-md-4.5 d-flex flex-column justify-content-between position-relative z-1">

          <!-- Top Status Bar: Account Holder & Security Badge -->
          <div class="d-flex justify-content-between align-items-center mb-3 flex-wrap gap-2 pb-3 border-bottom border-white border-opacity-10">
            <!-- Left Side Account Holder & Type Badge -->
            <div class="d-flex align-items-center gap-2 flex-wrap">
              <div class="d-inline-flex align-items-center gap-2 px-3 py-1.5 rounded-pill" style="background: rgba(255, 255, 255, 0.1); border: 1px solid rgba(255, 255, 255, 0.18);">
                <i class="fas fa-university text-info" style="font-size: 0.85rem;"></i>
                <span class="fw-bold text-white font-monospace text-uppercase" style="font-size: 0.82rem; letter-spacing: 0.5px;">ACCOUNT HOLDER: {{ Auth::user()->first_name }} {{ Auth::user()->last_name }}</span>
              </div>
              <span class="badge rounded-pill px-3 py-1.5 text-uppercase font-monospace shadow-sm" style="background: rgba(0, 169, 164, 0.25); color: #20c9c3; border: 1px solid rgba(0, 169, 164, 0.4); font-size: 0.72rem;">
                <i class="fas fa-piggy-bank me-1.5"></i> {{ Auth::user()->account_type ?? 'SAVINGS ACCOUNT' }}
              </span>
            </div>

            <!-- Right Side Security Badge -->
            <div class="d-flex align-items-center gap-2">
              <span class="d-inline-flex align-items-center gap-1.5 px-3 py-1.5 rounded-pill small fw-bold font-monospace" style="background: rgba(16, 185, 129, 0.15); color: #34d399; border: 1px solid rgba(16, 185, 129, 0.3); font-size: 0.72rem;">
                <span style="width: 7px; height: 7px; border-radius: 50%; background-color: #34d399; display: inline-block; box-shadow: 0 0 8px #34d399; animation: pulse 1.8s infinite;"></span>
                256-BIT SSL ENCRYPTED
              </span>
            </div>
          </div>

          <!-- Balance Hero Display & Show/Hide Balance Control -->
          <div class="my-3">
            <div class="d-flex justify-content-between align-items-center flex-wrap gap-2">
              <div>
                <div class="d-flex align-items-center gap-3 mb-1">
                  <div class="text-white-50 text-uppercase fw-bold font-monospace tracking-wider" style="font-size: 0.72rem; letter-spacing: 2px;">
                    AVAILABLE BALANCE
                  </div>
                  <!-- Un-Crammed Balance Visibility Toggle -->
                  <div class="form-check form-switch mb-0 d-inline-flex align-items-center gap-1.5 bg-black bg-opacity-25 px-2.5 py-1 rounded-pill border border-white border-opacity-10">
                    <input class="form-check-input mt-0" type="checkbox" id="balanceToggle" checked style="cursor: pointer; width: 1.8em; height: 0.9em;">
                    <label class="form-check-label text-white-50 small" for="balanceToggle" style="cursor: pointer; user-select: none; font-size: 0.68rem;">
                      Show
                    </label>
                  </div>
                </div>
                <h1 class="display-4 fw-extrabold text-white mb-0 balance-display font-monospace" id="mainBalanceDisplay" style="letter-spacing: -1.5px; text-shadow: 0 4px 20px rgba(0,0,0,0.5);">
                  {{ Auth::user()->currency }}{{ number_format($balance ?? Auth::user()->balance ?? 0, 2) }}
                </h1>
              </div>

              @if(Auth::user()->payment_status == 1)
                <a href="{{ route('user.payments.index') }}" class="btn btn-sm text-white rounded-pill px-4 py-2 fw-bold shadow-sm d-inline-flex align-items-center gap-2" style="background: linear-gradient(135deg, #0284c7, #00a9a4); border: none; font-size: 0.85rem;">
                  <i class="fas fa-bolt"></i> Make Payment
                </a>
              @endif
            </div>
          </div>

          <!-- Glassmorphic Account Details Card (Executive 3-Column Layout) -->
          <div class="p-3 p-md-3.5 rounded-4 my-3" style="background: rgba(0, 0, 0, 0.22); backdrop-filter: blur(16px); -webkit-backdrop-filter: blur(16px); border: 1px solid rgba(255, 255, 255, 0.14); box-shadow: inset 0 1px 1px rgba(255, 255, 255, 0.08);">
            <div class="row g-3 align-items-center">
              
              <!-- Account Number Column -->
              <div class="col-12 col-md-5">
                <div class="d-flex align-items-center gap-3 p-2.5 rounded-3" style="background: rgba(255, 255, 255, 0.05); border: 1px solid rgba(255,255,255,0.08);">
                  <div class="rounded-circle d-flex align-items-center justify-content-center flex-shrink-0" style="width: 38px; height: 38px; background: rgba(0, 169, 164, 0.25); color: #20c9c3; border: 1px solid rgba(0, 169, 164, 0.4);">
                    <i class="fas fa-university"></i>
                  </div>
                  <div class="flex-grow-1 overflow-hidden">
                    <span class="text-white-50 text-uppercase font-monospace d-block" style="font-size: 0.68rem; letter-spacing: 0.8px;">Account Number</span>
                    <div class="d-flex align-items-center justify-content-between gap-1">
                      <span class="fw-bold font-monospace text-white text-truncate" id="accountNumberText" style="font-size: 0.95rem; letter-spacing: 0.8px;">{{ Auth::user()->account_number }}</span>
                      <button type="button" class="btn btn-sm text-info p-0 ms-1 border-0 bg-transparent" onclick="navigator.clipboard.writeText('{{ Auth::user()->account_number }}'); alert('Account number copied to clipboard!');" title="Copy Account Number">
                        <i class="far fa-copy" style="font-size: 0.85rem;"></i>
                      </button>
                    </div>
                  </div>
                </div>
              </div>

              <!-- Currency Column -->
              <div class="col-6 col-md-3">
                <div class="d-flex align-items-center gap-2.5 p-2.5 rounded-3" style="background: rgba(255, 255, 255, 0.05); border: 1px solid rgba(255,255,255,0.08);">
                  <div class="rounded-circle d-flex align-items-center justify-content-center flex-shrink-0" style="width: 38px; height: 38px; background: rgba(234, 179, 8, 0.25); color: #facc15; border: 1px solid rgba(234, 179, 8, 0.4);">
                    <i class="fas fa-coins"></i>
                  </div>
                  <div>
                    <span class="text-white-50 text-uppercase font-monospace d-block" style="font-size: 0.68rem; letter-spacing: 0.8px;">Currency</span>
                    <span class="badge text-dark fw-extrabold px-2.5 py-1 font-monospace" style="background: #20c9c3; font-size: 0.82rem;">{{ Auth::user()->currency }}</span>
                  </div>
                </div>
              </div>

              <!-- Routing / Swift Column -->
              <div class="col-6 col-md-4">
                <div class="d-flex align-items-center gap-2.5 p-2.5 rounded-3" style="background: rgba(255, 255, 255, 0.05); border: 1px solid rgba(255,255,255,0.08);">
                  <div class="rounded-circle d-flex align-items-center justify-content-center flex-shrink-0" style="width: 38px; height: 38px; background: rgba(2, 132, 199, 0.25); color: #38bdf8; border: 1px solid rgba(2, 132, 199, 0.4);">
                    <i class="fas fa-network-wired"></i>
                  </div>
                  <div class="flex-grow-1 overflow-hidden">
                    <span class="text-white-50 text-uppercase font-monospace d-block" style="font-size: 0.68rem; letter-spacing: 0.8px;">Routing / SWIFT</span>
                    <div class="d-flex align-items-center justify-content-between gap-1">
                      <span class="fw-bold font-monospace text-white" style="font-size: 0.9rem; letter-spacing: 0.5px;">TPSTUS33</span>
                      <button type="button" class="btn btn-sm text-info p-0 ms-1 border-0 bg-transparent" onclick="navigator.clipboard.writeText('TPSTUS33'); alert('SWIFT Code copied!');" title="Copy SWIFT Code">
                        <i class="far fa-copy" style="font-size: 0.85rem;"></i>
                      </button>
                    </div>
                  </div>
                </div>
              </div>

            </div>
          </div>

          <!-- Quick Action Buttons Bar (Equal-Width Luxury Glass Grid) -->
          <div class="pt-3 border-top border-white border-opacity-10">
            <div class="row g-2.5">
              <div class="col-12 col-sm-4">
                <a href="{{ route('user.deposit.index') }}" class="btn btn-light w-100 rounded-3 fw-bold py-2.5 px-3 d-flex align-items-center justify-content-center gap-2 shadow-sm transition hover-lift" style="color: #007875; background: #ffffff; border: none; font-size: 0.88rem;">
                  <i class="fas fa-plus-circle text-success fs-6"></i> Deposit Funds
                </a>
              </div>
              <div class="col-12 col-sm-4">
                <a href="{{ route('user.transfer.bank') }}" class="btn btn-outline-light w-100 rounded-3 fw-bold py-2.5 px-3 d-flex align-items-center justify-content-center gap-2 transition hover-lift" style="background: rgba(255, 255, 255, 0.08); border: 1px solid rgba(255, 255, 255, 0.25); color: #ffffff; font-size: 0.88rem;">
                  <i class="fas fa-paper-plane text-info fs-6"></i> Send Money
                </a>
              </div>
              <div class="col-12 col-sm-4">
                <a href="{{ route('user.transactions') }}" class="btn btn-outline-light w-100 rounded-3 fw-bold py-2.5 px-3 d-flex align-items-center justify-content-center gap-2 transition hover-lift" style="background: rgba(255, 255, 255, 0.08); border: 1px solid rgba(255, 255, 255, 0.25); color: #ffffff; font-size: 0.88rem;">
                  <i class="fas fa-history text-light fs-6"></i> Activity History
                </a>
              </div>
            </div>
          </div>

        </div>
      </div>
    </div>

    <!-- Virtual Bank Card Column -->
    <div class="col-lg-4">
      <div class="card border-0 shadow-sm rounded-4 h-100 p-3 bg-white">
        <div class="d-flex justify-content-between align-items-center mb-3">
          <h6 class="fw-bold mb-0 text-dark d-flex align-items-center gap-2">
            <i class="fas fa-credit-card text-primary"></i> Digital Debit Card
          </h6>
          <a href="{{ route('user.cards.card') }}" class="small text-primary fw-bold text-decoration-none">Manage</a>
        </div>

        @forelse($details as $detail)
          @if($detail->status == 0)
            <!-- Under Review Card -->
            <div class="rounded-4 p-3 mb-2 text-white" style="background: linear-gradient(135deg, #0f172a 0%, #334155 100%);">
              <div class="d-flex align-items-center gap-3">
                <div class="bg-warning bg-opacity-20 text-warning p-3 rounded-circle">
                  <i class="fas fa-hourglass-half fa-lg"></i>
                </div>
                <div>
                  <h6 class="fw-bold mb-0 text-white">Card Review Pending</h6>
                  <p class="small text-white-50 mb-0">Your card request is being processed</p>
                </div>
              </div>
            </div>
            <div class="alert alert-info border-0 bg-info bg-opacity-10 text-info small py-2 mb-0 rounded-3">
              <i class="fas fa-info-circle me-1"></i> Virtual card generation takes under 24 hours.
            </div>
          @else
            <!-- Active Card Display -->
            <div class="rounded-4 p-3 mb-3 text-white position-relative overflow-hidden shadow" style="background: linear-gradient(135deg, #00a9a4 0%, #0284c7 60%, #0f172a 100%);">
              <div class="d-flex justify-content-between align-items-center mb-3">
                <span class="fw-bold font-monospace" style="font-size: 0.85rem; letter-spacing: 1px;">TOPSAVERS TRUST</span>
                <i class="fab fa-cc-mastercard fa-2x"></i>
              </div>

              <div class="mb-3">
                <div class="bg-warning rounded-2 mb-2" style="width: 36px; height: 26px; background: linear-gradient(135deg, #fef08a, #ca8a04) !important;"></div>
                <div class="font-monospace fw-bold" style="font-size: 1.1rem; letter-spacing: 2px;">
                  {{ implode(' ', str_split($detail->card_number, 4)) }}
                </div>
              </div>

              <div class="d-flex justify-content-between align-items-end pt-1">
                <div>
                  <div class="text-white-50" style="font-size: 0.65rem; text-transform: uppercase;">CARDHOLDER</div>
                  <div class="fw-bold text-uppercase" style="font-size: 0.85rem;">{{ Auth::user()->first_name }} {{ Auth::user()->last_name }}</div>
                </div>
                <div class="d-flex gap-3 text-end">
                  <div>
                    <div class="text-white-50" style="font-size: 0.65rem; text-transform: uppercase;">EXPIRES</div>
                    <div class="fw-bold font-monospace" style="font-size: 0.85rem;">{{ \Carbon\Carbon::parse($detail->card_expiry)->format('m/y') }}</div>
                  </div>
                  <div>
                    <div class="text-white-50" style="font-size: 0.65rem; text-transform: uppercase;">CVV</div>
                    <div class="fw-bold font-monospace" style="font-size: 0.85rem;">{{ $detail->card_cvc }}</div>
                  </div>
                </div>
              </div>
            </div>

            <!-- Card Actions -->
            <div class="row g-2">
              <div class="col-6">
                <a href="{{ route('user.cards.card') }}" class="btn btn-light btn-sm w-100 rounded-3 text-dark fw-bold border border-secondary border-opacity-10 d-inline-flex align-items-center justify-content-center gap-1 py-2">
                  <i class="fas fa-eye text-primary"></i> View Details
                </a>
              </div>
              <div class="col-6">
                <button type="button" class="btn btn-primary btn-sm w-100 rounded-3 fw-bold d-inline-flex align-items-center justify-content-center gap-1 py-2" data-bs-toggle="modal" data-bs-target="#requestFormModal">
                  <i class="fas fa-truck"></i> Physical Card
                </button>
              </div>
            </div>
          @endif
        @empty
          <!-- Empty Card State -->
          <div class="text-center py-4 bg-light rounded-4 border border-dashed p-3">
            <div class="bg-primary bg-opacity-10 text-primary rounded-circle p-3 d-inline-block mb-2">
              <i class="fas fa-credit-card fa-2x"></i>
            </div>
            <h6 class="fw-bold mb-1">No Active Debit Card</h6>
            <p class="text-muted small mb-3">Issue a physical or virtual card for seamless worldwide spending.</p>
            <a href="{{ route('user.cards.request.card', Auth::user()->id) }}" class="btn btn-primary btn-sm rounded-pill px-4 fw-bold">
              <i class="fas fa-plus me-1"></i> Issue Card Now
            </a>
          </div>
        @endforelse

      </div>
    </div>

  </div>

  <!-- QUICK ACTIONS GRID ROW -->
  <div class="row mb-4 animate-fadein">
    <div class="col-12">
      <div class="card border-0 shadow-sm rounded-4 bg-white p-3 p-md-4">
        <div class="d-flex justify-content-between align-items-center mb-3">
          <h6 class="fw-bold text-dark mb-0 d-flex align-items-center gap-2">
            <i class="fas fa-bolt text-warning"></i> Banking Shortcuts &amp; Quick Services
          </h6>
          <span class="badge rounded-pill bg-light text-muted font-monospace px-3 py-1" style="font-size: 0.72rem; border: 1px solid rgba(0,0,0,0.06);">
            INSTANT SERVICES
          </span>
        </div>

        <div class="row row-cols-2 row-cols-sm-3 row-cols-md-6 g-3">
          <!-- Deposit Shortcut -->
          <div class="col">
            <a href="{{ route('user.deposit.index') }}" class="card border rounded-4 text-center text-decoration-none p-3 h-100 transition shadow-sm hover-lift" style="background: #ffffff; border-color: rgba(0, 169, 164, 0.15) !important;">
              <div class="rounded-circle text-white mx-auto mb-2.5 d-flex align-items-center justify-content-center shadow-sm" style="width: 48px; height: 48px; font-size: 1.25rem; background: linear-gradient(135deg, #00a9a4, #10b981); box-shadow: 0 6px 15px rgba(0, 169, 164, 0.25) !important;">
                <i class="fas fa-plus-circle"></i>
              </div>
              <span class="fw-bold text-dark d-block mb-0.5" style="font-size: 0.88rem;">Deposit</span>
              <small class="text-muted font-monospace d-block" style="font-size: 0.68rem;">Add Funds</small>
            </a>
          </div>

          <!-- Transfer Shortcut -->
          <div class="col">
            <a href="{{ route('user.transfer.bank') }}" class="card border rounded-4 text-center text-decoration-none p-3 h-100 transition shadow-sm hover-lift" style="background: #ffffff; border-color: rgba(2, 132, 199, 0.15) !important;">
              <div class="rounded-circle text-white mx-auto mb-2.5 d-flex align-items-center justify-content-center shadow-sm" style="width: 48px; height: 48px; font-size: 1.25rem; background: linear-gradient(135deg, #0284c7, #2563eb); box-shadow: 0 6px 15px rgba(2, 132, 199, 0.25) !important;">
                <i class="fas fa-paper-plane"></i>
              </div>
              <span class="fw-bold text-dark d-block mb-0.5" style="font-size: 0.88rem;">Bank Transfer</span>
              <small class="text-muted font-monospace d-block" style="font-size: 0.68rem;">Send Money</small>
            </a>
          </div>

          <!-- Crypto Shortcut -->
          <div class="col">
            <a href="{{ route('user.withdrawal.crypto') }}" class="card border rounded-4 text-center text-decoration-none p-3 h-100 transition shadow-sm hover-lift" style="background: #ffffff; border-color: rgba(245, 158, 11, 0.15) !important;">
              <div class="rounded-circle text-white mx-auto mb-2.5 d-flex align-items-center justify-content-center shadow-sm" style="width: 48px; height: 48px; font-size: 1.25rem; background: linear-gradient(135deg, #f59e0b, #d97706); box-shadow: 0 6px 15px rgba(245, 158, 11, 0.25) !important;">
                <i class="fab fa-bitcoin"></i>
              </div>
              <span class="fw-bold text-dark d-block mb-0.5" style="font-size: 0.88rem;">Crypto</span>
              <small class="text-muted font-monospace d-block" style="font-size: 0.68rem;">BTC &amp; USDT</small>
            </a>
          </div>

          <!-- Apply Loan Shortcut -->
          <div class="col">
            <a href="{{ route('user.loans.loan') }}" class="card border rounded-4 text-center text-decoration-none p-3 h-100 transition shadow-sm hover-lift" style="background: #ffffff; border-color: rgba(99, 102, 241, 0.15) !important;">
              <div class="rounded-circle text-white mx-auto mb-2.5 d-flex align-items-center justify-content-center shadow-sm" style="width: 48px; height: 48px; font-size: 1.25rem; background: linear-gradient(135deg, #6366f1, #4f46e5); box-shadow: 0 6px 15px rgba(99, 102, 241, 0.25) !important;">
                <i class="fas fa-hand-holding-usd"></i>
              </div>
              <span class="fw-bold text-dark d-block mb-0.5" style="font-size: 0.88rem;">Apply Loan</span>
              <small class="text-muted font-monospace d-block" style="font-size: 0.68rem;">Instant Credit</small>
            </a>
          </div>

          <!-- PayPal Shortcut -->
          <div class="col">
            <a href="{{ route('user.withdrawal.paypal') }}" class="card border rounded-4 text-center text-decoration-none p-3 h-100 transition shadow-sm hover-lift" style="background: #ffffff; border-color: rgba(0, 112, 186, 0.15) !important;">
              <div class="rounded-circle text-white mx-auto mb-2.5 d-flex align-items-center justify-content-center shadow-sm" style="width: 48px; height: 48px; font-size: 1.25rem; background: linear-gradient(135deg, #0070ba, #1546a0); box-shadow: 0 6px 15px rgba(0, 112, 186, 0.25) !important;">
                <i class="fab fa-paypal"></i>
              </div>
              <span class="fw-bold text-dark d-block mb-0.5" style="font-size: 0.88rem;">PayPal</span>
              <small class="text-muted font-monospace d-block" style="font-size: 0.68rem;">Global Wallet</small>
            </a>
          </div>

          <!-- Skrill Shortcut -->
          <div class="col">
            <a href="{{ route('user.skrill') }}" class="card border rounded-4 text-center text-decoration-none p-3 h-100 transition shadow-sm hover-lift" style="background: #ffffff; border-color: rgba(225, 29, 72, 0.15) !important;">
              <div class="rounded-circle text-white mx-auto mb-2.5 d-flex align-items-center justify-content-center shadow-sm" style="width: 48px; height: 48px; font-size: 1.25rem; background: linear-gradient(135deg, #e11d48, #be123c); box-shadow: 0 6px 15px rgba(225, 29, 72, 0.25) !important;">
                <i class="fas fa-wallet"></i>
              </div>
              <span class="fw-bold text-dark d-block mb-0.5" style="font-size: 0.88rem;">Skrill</span>
              <small class="text-muted font-monospace d-block" style="font-size: 0.68rem;">Fast Transfer</small>
            </a>
          </div>
        </div>
      </div>
    </div>
  </div>

  <!-- RECENT TRANSACTIONS & ANALYTICS ROW -->
  <div class="row g-3 mb-4 animate-fadein">

    <!-- Recent Transactions List -->
    <div class="col-lg-8">
      <div class="card border-0 shadow-sm rounded-4 bg-white p-3 p-md-4 h-100">
        <div class="d-flex justify-content-between align-items-center mb-3">
          <h6 class="fw-bold text-dark mb-0 d-flex align-items-center gap-2">
            <i class="fas fa-history text-primary"></i> Recent Transactions
          </h6>
          <a href="{{ route('user.transactions') }}" class="btn btn-sm btn-light rounded-pill px-3 fw-bold text-primary">View All</a>
        </div>

        <div class="transaction-list">
          @if($transaction->isEmpty())
            <div class="text-center text-muted py-5">
              <i class="fas fa-receipt fa-2x mb-2 text-secondary opacity-50"></i>
              <p class="mb-0">No recent transactions on record.</p>
            </div>
          @else
            @foreach($transaction as $details)
              <div class="d-flex align-items-center justify-content-between p-3 mb-2 rounded-3 bg-light hover-bg-white border border-transparent hover-border transition">
                <div class="d-flex align-items-center gap-3">
                  <div class="rounded-circle p-2 d-flex align-items-center justify-content-center text-white" style="width: 42px; height: 42px; background: linear-gradient(135deg, #00a9a4, #0284c7);">
                    @if($details->transaction == 'Bank Transfer')
                      <i class="fas fa-exchange-alt"></i>
                    @elseif($details->transaction == 'Loan')
                      <i class="fas fa-hand-holding-usd"></i>
                    @elseif($details->transaction == 'Card')
                      <i class="fas fa-credit-card"></i>
                    @elseif($details->transaction == 'Crypto Withdrawal')
                      <i class="fab fa-bitcoin"></i>
                    @elseif($details->transaction == 'Paypal Withdrawal')
                      <i class="fab fa-paypal"></i>
                    @elseif($details->transaction == 'Skrill Withdrawal')
                      <i class="fas fa-wallet"></i>
                    @else
                      <i class="fas fa-file-invoice-dollar"></i>
                    @endif
                  </div>
                  <div>
                    <h6 class="fw-bold mb-0 text-dark" style="font-size: 0.9rem;">
                      {{ Str::limit($details->transaction_description, 28) }}
                    </h6>
                    <div class="text-muted small">
                      {{ $details->transaction }}
                      @if(!str_contains($details->transaction_description, 'From'))
                        &bull; Account •••{{ substr($details->account_number ?? '0000', -4) }}
                      @endif
                    </div>
                  </div>
                </div>

                <div class="text-end">
                  <div class="fw-bold font-monospace" style="font-size: 0.95rem; color: {{ in_array($details->transaction, ['Bank Transfer', 'Paypal Withdrawal', 'Skrill Withdrawal', 'Crypto Withdrawal']) ? '#ef4444' : '#10b981' }};">
                    {{ in_array($details->transaction, ['Bank Transfer', 'Paypal Withdrawal', 'Skrill Withdrawal', 'Crypto Withdrawal']) ? '-' : '+' }}{{ Auth::user()->currency }}{{ number_format($details->transaction_amount, 2) }}
                  </div>
                  <span class="badge rounded-pill {{ $details->transaction_status == '1' ? 'bg-success bg-opacity-10 text-success' : ($details->transaction_status == '0' ? 'bg-warning bg-opacity-10 text-warning' : 'bg-danger bg-opacity-10 text-danger') }}" style="font-size: 0.7rem;">
                    {{ $details->transaction_status == '1' ? 'Successful' : ($details->transaction_status == '0' ? 'Pending' : 'Failed') }}
                  </span>
                </div>
              </div>
            @endforeach
          @endif
        </div>
      </div>
    </div>

    <!-- Monthly Debit / Credit Analytics -->
    <div class="col-lg-4">
      <div class="card border-0 shadow-sm rounded-4 bg-white p-3 p-md-4 h-100">
        <div class="d-flex justify-content-between align-items-center mb-3">
          <h6 class="fw-bold text-dark mb-0 d-flex align-items-center gap-2">
            <i class="fas fa-chart-bar text-primary"></i> Monthly Cash Flow
          </h6>
          <small class="text-muted fw-semibold">{{ now()->format('M Y') }}</small>
        </div>

        <div class="chart-container my-2" style="height: 180px; position: relative;">
          <canvas id="debitCreditChart"></canvas>
        </div>

        <div class="mt-3 pt-3 border-top">
          <div class="row g-2 text-center mb-3">
            <div class="col-6">
              <div class="p-2 rounded-3 bg-light">
                <span class="text-muted small d-block mb-1">Total Debit</span>
                <span class="fw-bold text-danger">{{ Auth::user()->currency }}{{ number_format($debit_transfers, 2) }}</span>
              </div>
            </div>
            <div class="col-6">
              <div class="p-2 rounded-3 bg-light">
                <span class="text-muted small d-block mb-1">Total Credit</span>
                <span class="fw-bold text-success">{{ Auth::user()->currency }}{{ number_format($credit_transfers, 2) }}</span>
              </div>
            </div>
          </div>

          @php
            $net_balance = $credit_transfers - $debit_transfers;
            $balance_class = $net_balance >= 0 ? 'text-success' : 'text-danger';
          @endphp
          <div class="p-3 rounded-3 bg-light d-flex justify-content-between align-items-center">
            <div>
              <span class="text-muted small d-block">Net Balance</span>
              <h5 class="fw-bold mb-0 {{ $balance_class }}">
                {{ Auth::user()->currency }}{{ number_format(abs($net_balance), 2) }}
              </h5>
            </div>
            <span class="badge {{ $net_balance >= 0 ? 'bg-success' : 'bg-danger' }} rounded-pill px-3 py-2">
              {{ $net_balance >= 0 ? 'Surplus' : 'Deficit' }}
            </span>
          </div>
        </div>
      </div>
    </div>

  </div>

  <!-- BANNER PROMOTIONS CAROUSEL ROW -->
  <div class="row animate-fadein">
    <div class="col-12">
      <div class="card border-0 shadow-sm rounded-4 overflow-hidden">
        <div id="bankCarousel" class="carousel slide" data-bs-ride="carousel">
          <div class="carousel-inner">
            <div class="carousel-item active">
              <div class="p-4 p-md-5 text-white" style="background: linear-gradient(135deg, #0f172a 0%, #00a9a4 100%);">
                <h4 class="fw-bold mb-2">High-Yield Tenured Savings</h4>
                <p class="mb-3 text-white-50">Earn up to 8.5% p.a. guaranteed returns on long-term fixed deposit accounts.</p>
                <a href="{{ route('user.deposit.index') }}" class="btn btn-light btn-sm fw-bold rounded-pill px-4" style="color: #00a9a4;">Explore Deposits</a>
              </div>
            </div>
            <div class="carousel-item">
              <div class="p-4 p-md-5 text-white" style="background: linear-gradient(135deg, #0284c7 0%, #00a9a4 100%);">
                <h4 class="fw-bold mb-2">Instant Global Transfers</h4>
                <p class="mb-3 text-white-50">Send money internationally across 50+ countries with live real-time FX rates.</p>
                <a href="{{ route('user.transfer.bank') }}" class="btn btn-light btn-sm fw-bold rounded-pill px-4 text-primary">Transfer Funds</a>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>
  </div>

</div>

<!-- Delivery Request Modal -->
<div class="modal fade" id="requestFormModal" tabindex="-1" aria-labelledby="requestFormModalLabel" aria-hidden="true">
  <div class="modal-dialog modal-dialog-centered">
    <div class="modal-content border-0 shadow-lg rounded-4">
      <div class="modal-header border-0 bg-light rounded-top-4">
        <h5 class="modal-title fw-bold text-dark" id="requestFormModalLabel"><i class="fas fa-truck text-primary me-2"></i> Card Delivery Request</h5>
        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
      </div>

      <form id="requestForm" action="{{ route('user.cards.requestcard.delivery') }}" method="POST">
        @csrf
        <div class="modal-body p-4">
          <div class="mb-3">
            <label for="fullName" class="form-label fw-semibold">Full Name</label>
            <input type="text" class="form-control rounded-3" id="fullName" name="fname" value="{{ Auth::user()->first_name }} {{ Auth::user()->last_name }}" required>
          </div>
          <div class="mb-3">
            <label for="houseAddress" class="form-label fw-semibold">Delivery Address</label>
            <input type="text" class="form-control rounded-3" id="houseAddress" name="address" placeholder="Full street address, City, Country" required>
          </div>
          <div class="mb-3">
            <label for="phoneNumber" class="form-label fw-semibold">Contact Phone Number</label>
            <input type="tel" class="form-control rounded-3" id="phoneNumber" name="phone" value="{{ Auth::user()->phone }}" required>
          </div>
          <div class="mb-3">
            <label for="emailAddress" class="form-label fw-semibold">Email Address</label>
            <input type="email" class="form-control rounded-3" id="emailAddress" name="emailAddress" value="{{ Auth::user()->email }}" required>
          </div>
        </div>

        <div class="modal-footer border-0 bg-light rounded-bottom-4">
          <button type="button" class="btn btn-secondary btn-sm rounded-3 fw-bold" data-bs-dismiss="modal">Close</button>
          <button type="submit" class="btn btn-primary btn-sm rounded-3 fw-bold px-4">Submit Request</button>
        </div>
      </form>
    </div>
  </div>
</div>

<!-- Chart & Balance Toggle Script -->
<script src="https://cdn.jsdelivr.net/npm/chart.js"></script>
<script>
document.addEventListener('DOMContentLoaded', function() {
  // Balance Show/Hide Toggle
  const balanceToggle = document.getElementById('balanceToggle');
  const mainBalanceDisplay = document.getElementById('mainBalanceDisplay');
  const actualBalance = "{{ Auth::user()->currency }}{{ number_format($balance ?? Auth::user()->balance ?? 0, 2) }}";

  if (balanceToggle && mainBalanceDisplay) {
    balanceToggle.addEventListener('change', function() {
      if (this.checked) {
        mainBalanceDisplay.textContent = actualBalance;
      } else {
        mainBalanceDisplay.textContent = "{{ Auth::user()->currency }} ••••••••";
      }
    });
  }

  // Monthly Debit / Credit Chart
  const ctx = document.getElementById('debitCreditChart');
  if (ctx) {
    new Chart(ctx.getContext('2d'), {
      type: 'bar',
      data: {
        labels: ['Debit', 'Credit'],
        datasets: [{
          data: [{{ $debit_transfers }}, {{ $credit_transfers }}],
          backgroundColor: [
            'rgba(239, 68, 68, 0.85)',
            'rgba(16, 185, 129, 0.85)'
          ],
          borderColor: [
            '#ef4444',
            '#10b981'
          ],
          borderWidth: 1.5,
          borderRadius: 8,
          barPercentage: 0.5
        }]
      },
      options: {
        responsive: true,
        maintainAspectRatio: false,
        plugins: {
          legend: { display: false },
          tooltip: {
            callbacks: {
              label: function(context) {
                return '{{ Auth::user()->currency }}' + context.raw.toLocaleString('en-US', {
                  minimumFractionDigits: 2,
                  maximumFractionDigits: 2
                });
              }
            }
          }
        },
        scales: {
          y: {
            beginAtZero: true,
            grid: { color: 'rgba(0,0,0,0.05)' },
            ticks: {
              callback: function(value) {
                return '{{ Auth::user()->currency }}' + value.toLocaleString();
              }
            }
          },
          x: { grid: { display: false } }
        }
      }
    });
  }
});
</script>

@include('user.footer')