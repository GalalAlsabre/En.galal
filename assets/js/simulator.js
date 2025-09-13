document.addEventListener('DOMContentLoaded', function() {



const grind = document.getElementById('grind');
const amount = document.getElementById('amount');
const temp = document.getElementById('temp');
const timeRange = document.getElementById('time');

const grindVal = document.getElementById('grindVal');
const amountVal = document.getElementById('amountVal');
const tempVal = document.getElementById('tempVal');
const timeVal = document.getElementById('timeVal');

const brewBtn = document.getElementById('brewBtn');
const resetBtn = document.getElementById('resetBtn');
const liquid = document.getElementById('liquidLayer');
const steam = document.getElementById('steam');

const verdict = document.getElementById('verdict');
const scoreEl = document.getElementById('score');
const desc = document.getElementById('desc');
const timeHint = document.getElementById('timeHint');
const currentSettings = document.getElementById('currentSettings');
const tinyScore = document.getElementById('tinyScore');
const advice = document.getElementById('advice');
const shareBtn = document.getElementById('shareBtn');
const randomize = document.getElementById('randomize');
const savePreset = document.getElementById('savePreset');

// ======== helper ========
function updateLabels(){
  let g = +grind.value;
  grindVal.textContent = g < 30 ? 'Coarse' : (g > 70 ? 'Fine' : 'Medium');
  amountVal.textContent = amount.value + ' g';
  tempVal.textContent = temp.value + '°C';
  timeVal.textContent = timeRange.value + ' s';
  currentSettings.textContent = `Grind: ${grindVal.textContent} • ${amount.value}g • ${temp.value}°C • ${timeRange.value}s`;
}

function setLiquidColor(score, strength){
  const light = [222, 188, 153]; // weak
  const dark = [70, 38, 25]; // strong
  const mix = (a,b,p) => Math.round(a + (b-a)*p);
  const p = Math.max(0, Math.min(1, strength));
  const r = mix(light[0], dark[0], p);
  const g = mix(light[1], dark[1], p);
  const b = mix(light[2], dark[2], p);
  liquid.querySelector('rect').setAttribute('fill', `rgb(${r},${g},${b})`);
  const amt = +amount.value;
  const height = 20 + Math.min(88, (amt-6)/24*88);
  liquid.querySelector('rect').setAttribute('y', 56 + (88 - height));
  liquid.querySelector('rect').setAttribute('height', height);
}

// TASTE ALGORITHM (simple, explainable)
const IDEAL = {grind:50, amount:18, temp:93, time:30};

function computeScore(){
  const g = +grind.value;
  const a = +amount.value;
  const t = +temp.value;
  const ti = +timeRange.value;

  const closeness = (val,ideal,sigma)=>{
    const d = Math.abs(val-ideal);
    return Math.exp(- (d*d) / (2*sigma*sigma));
  };

  const cg = closeness(g, IDEAL.grind, 18);
  const ca = closeness(a, IDEAL.amount, 4);
  const ct = closeness(t, IDEAL.temp, 4);
  const cti = closeness(ti, IDEAL.time, 8);

  const raw = (cg*0.30 + ca*0.30 + ct*0.20 + cti*0.20);
  const score = Math.round(raw * 100);
  const strength = Math.min(1, ((a-6)/24)*0.6 + (1 - ((g-0)/100))*0.4);
  return {score, strength, breakdown:{cg,ca,ct,cti}};
}

function presentResult(){
  const res = computeScore();
  const s = res.score;
  const strength = res.strength;

  let v = 'Balanced Coffee';
  let message = 'Good taste. Keep this balance or try refining the grind slightly.';
  if(s >= 82){
    v = 'Perfect Coffee ☕️';
    message = 'Amazing cup — balanced in flavor and feel.';
  } else if(s >= 65){
    v = 'Good';
    message = 'Close to perfect, but you can improve grind or time.';
  } else if(s >= 48){
    v = 'Variable';
    message = 'Inconsistent taste — might be bitter or weak. Try adjusting amount.';
  } else {
    v = 'Unsatisfactory';
    message = 'Far from ideal — adjust grind, amount, and temperature.';
  }

  const t = +temp.value;
  const ti = +timeRange.value;
  const a = +amount.value;
  if(t > 96 && ti > 40) {
    v = 'Very Bitter';
    message = 'High temperature and long brew time — coffee might burn and taste bitter.';
  } else if(a < 10 && s < 50){
    v = 'Weak Taste';
    message = 'Amount is low — result is weak. Increase amount for better body.';
  }

  verdict.textContent = v;
  scoreEl.textContent = s + ' / 100';
  tinyScore.textContent = s;
  desc.textContent = message;
  timeHint.textContent = `${timeRange.value}s • Expected Strength: ${Math.round(strength*100)}%`;

  setLiquidColor(s, strength);

  if(+temp.value >= 90){
    steam.style.opacity = 1;
  } else {
    steam.style.opacity = 0.0;
  }

  if(s >= 82) advice.textContent = 'Excellent — you can save or share this preset.';
  else if(s >= 65) advice.textContent = 'Good — try adjusting the grind by one step to improve.';
  else if(s >= 48) advice.textContent = 'Average — adjust time or amount to reduce inconsistency.';
  else advice.textContent = 'Tip: Start with a proper amount, then adjust grind gradually.';

  const rb = document.getElementById('resultBox');
  rb.animate([{transform:'translateY(6px)'},{transform:'translateY(0)'}],{duration:420, easing:'cubic-bezier(.2,.9,.2,1)'});
}

// ======== interactions ========
[grind,amount,temp,timeRange].forEach(el=>{
  el.addEventListener('input', updateLabels);
  el.addEventListener('change', updateLabels);
});

brewBtn.addEventListener('click', ()=>{
  brewBtn.disabled = true;
  brewBtn.textContent = '⏳ Brewing...';
  const secs = +timeRange.value;
  let remaining = secs;
  const interval = setInterval(()=>{
    brewBtn.textContent = `⏳ ${remaining}s`;
    remaining--;
    if(remaining < 0){
      clearInterval(interval);
      brewBtn.textContent = '✓ Brew Complete';
      setTimeout(()=>{ brewBtn.textContent = '☕ Brew Now'; brewBtn.disabled = false }, 900);
    }
  }, 1000);

  setTimeout(()=>{
    presentResult();
  }, Math.min(1200, secs*12 + 300));
});

resetBtn.addEventListener('click', ()=>{
  grind.value = 50; amount.value = 18; temp.value = 93; timeRange.value = 30;
  updateLabels();
  verdict.textContent = 'Ready to Brew';
  scoreEl.textContent = '—';
  desc.textContent = 'Adjust values then click "Brew Now" for instant feedback.';
  tinyScore.textContent = '—';
  setLiquidColor(0, 0.45);
  steam.style.opacity = 0;
});

randomize.addEventListener('click', ()=>{
  const presets = [
    {g:40,a:16,t:92,ti:28},
    {g:62,a:20,t:94,ti:34},
    {g:30,a:12,t:90,ti:45},
    {g:55,a:22,t:95,ti:24},
    {g:48,a:18,t:93,ti:30}
  ];
  const p = presets[Math.floor(Math.random()*presets.length)];
  grind.value = p.g; amount.value = p.a; temp.value = p.t; timeRange.value = p.ti;
  updateLabels();
  presentResult();
});

shareBtn.addEventListener('click', ()=>{
  const txt = `My Coffee Setup: Grind ${grindVal.textContent}, ${amount.value}g, ${temp.value}°C, ${timeRange.value}s — Result: ${verdict.textContent} (${scoreEl.textContent})`;
  navigator.clipboard?.writeText(txt).then(()=> {
    shareBtn.textContent = 'Copied ✓';
    setTimeout(()=> shareBtn.textContent = 'Copy Text', 1200);
  }).catch(()=>{
    alert('Automatic copy failed — please copy manually:\n\n' + txt);
  });
});

savePreset.addEventListener('click', ()=>{
  const preset = {g:+grind.value,a:+amount.value,t:+temp.value,ti:+timeRange.value,created:new Date().toISOString()};
  let arr = JSON.parse(localStorage.getItem('coffee_presets')||'[]');
  arr.push(preset);
  localStorage.setItem('coffee_presets', JSON.stringify(arr));
  savePreset.textContent = 'Saved ✓';
  setTimeout(()=> savePreset.textContent = 'Save Preset', 1200);
});

updateLabels();
setLiquidColor(0, 0.45);

document.addEventListener('keydown', (e)=>{
  if(e.key === ' ' && document.activeElement !== brewBtn) {
    e.preventDefault();
    brewBtn.click();
  }
});


});