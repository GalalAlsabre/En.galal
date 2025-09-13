<?php
$pageTitle = 'Brew Simulator'; 
$pageStylesheets = ['assets/css/simulator.css'];
$pageScripts = 'assets/js/simulator.js';
include 'templates/header.php'; 
?>
<main class="flex-grow flex justify-center items-start p-4 md:p-7">
<div class="wrap" role="main" aria-labelledby="title">
    <!-- controls -->
    <div class="card" aria-label="Controls">
      <h1 id="title">Coffee Brewing Simulation</h1>
      <p class="lead">Try adjusting grind, amount, temperature, and brew time — then click "Brew" to see the result in the cup.</p>

      <div class="control">
        <label>Grind Size <span class="small">Coarse → Fine</span></label>
        <div class="range-wrap">
          <input id="grind" type="range" min="0" max="100" value="50" />
          <div class="value-bubble" id="grindVal">Medium</div>
        </div>
      </div>

      <div class="control">
        <label>Coffee Amount (g) <span class="small">(g)</span></label>
        <div class="range-wrap">
          <input id="amount" type="range" min="6" max="30" value="18" />
          <div class="value-bubble" id="amountVal">18 g</div>
        </div>
      </div>

      <div class="control">
        <label>Water Temperature (°C)</label>
        <div class="range-wrap">
          <input id="temp" type="range" min="80" max="100" value="93" />
          <div class="value-bubble" id="tempVal">93°C</div>
        </div>
      </div>

      <div class="control">
        <label>Brew Time (seconds)</label>
        <div class="range-wrap">
          <input id="time" type="range" min="10" max="60" value="30" />
          <div class="value-bubble" id="timeVal">30 s</div>
        </div>
      </div>

      <div style="display:flex;gap:12px;margin-top:6px">
        <button id="brewBtn" class="btn">☕ Brew Now</button>
        <button id="resetBtn" class="btn secondary">Reset</button>
      </div>

      <div style="margin-top:16px" class="small">
        Tip: Default values are set for a small espresso shot (approximate). Try changing grind and amount to see the difference.
      </div>
    </div>

    <!-- visual -->
    <div class="visual-wrap">
      <div class="stage card" aria-live="polite">
        <div class="cup-area">
          <div class="cup" aria-hidden="true">
            <!-- SVG cup with liquid layer to color -->
            <svg viewBox="0 0 200 220" xmlns="http://www.w3.org/2000/svg" role="img" aria-label="Coffee Cup">
              <!-- plate -->
              <ellipse cx="100" cy="200" rx="70" ry="18" fill="#f2e9e6" />
              <g transform="translate(20,10)">
                <!-- cup body -->
                <path d="M20 40 C 12 40, 8 56, 10 82 C12 108, 20 132, 60 132 C100 132, 108 108, 110 82 C112 56, 108 40, 100 40 Z" fill="#fff" stroke="#ece1dd" />
                <!-- liquid (clipped) -->
                <g class="liquid" id="liquidLayer">
                  <defs>
                    <clipPath id="cupClip"><path d="M20 40 C 12 40, 8 56, 10 82 C12 108, 20 132, 60 132 C100 132, 108 108, 110 82 C112 56, 108 40, 100 40 Z" /></clipPath>
                  </defs>
                  <rect x="6" y="56" width="120" height="88" clip-path="url(#cupClip)" rx="8" />
                </g>

                <!-- cup rim -->
                <path d="M14 40 C40 24, 86 24, 110 40" fill="transparent" stroke="#f3e8e6" stroke-width="6" stroke-linecap="round" />
                <!-- handle -->
                <path d="M110 60 C136 60,136 92,110 96" fill="transparent" stroke="#fff" stroke-width="12" stroke-linecap="round" stroke-linejoin="round"/>
              </g>
            </svg>

            <!-- steam -->
            <div class="steam" id="steam" aria-hidden="true">
              <svg viewBox="0 0 120 80" xmlns="http://www.w3.org/2000/svg">
                <g fill="none" stroke="rgba(255,255,255,0.7)" stroke-width="2" stroke-linecap="round">
                  <path class="s" d="M20 60 C24 50 28 34 34 28" stroke-opacity="0.18"/>
                  <path class="s" d="M46 62 C50 52 54 36 60 30" stroke-opacity="0.12" style="animation-delay:0.4s"/>
                  <path class="s" d="M72 55 C76 45 80 32 86 28" stroke-opacity="0.16" style="animation-delay:0.9s"/>
                </g>
              </svg>
            </div>
          </div>

          <div class="result card" id="resultBox" style="width:100%;">
            <div class="verdict" id="verdict">Ready to Brew</div>
            <div class="score" id="score">—</div>
            <div class="desc" id="desc">Adjust the values then click "Brew Now" for instant feedback on the cup's taste.</div>
            <div class="meta">
              <div class="small">Share result: <button id="shareBtn" class="share">Copy Text</button></div>
              <div class="small" id="timeHint">—</div>
            </div>
          </div>
        </div>

        <!-- right side small summary -->
        <div style="flex:1;min-width:200px">
          <div style="display:flex;flex-direction:column;gap:10px">
            <div class="card" style="padding:12px">
              <strong>Current Settings</strong>
              <div style="margin-top:8px" id="currentSettings" class="small">Grind: Medium • 18g • 93°C • 30s</div>
            </div>

            <div class="card" style="padding:12px">
              <strong>Smart Tips</strong>
              <div class="small" style="margin-top:8px" id="advice">I'll give you advice after brewing based on the result.</div>
            </div>

            <div class="card" style="padding:12px;display:flex;gap:8px;justify-content:space-between;align-items:center">
              <div>
                <div style="font-weight:800">Creative Experience</div>
                <div class="small">Smooth animations and colors reflect the coffee taste</div>
              </div>
              <div style="text-align:right">
                <div style="font-size:22px;color:var(--accent);font-weight:800" id="tinyScore">—</div>
                <div class="small">Quality</div>
              </div>
            </div>

          </div>
        </div>

      </div>

      <div style="display:flex;gap:12px;justify-content:flex-end">
        <button id="savePreset" class="btn secondary">Save as Preset</button>
        <button id="randomize" class="btn">Surprise Me</button>
      </div>
    </div>
</div>



<?php include 'templates/footer.php'; ?>