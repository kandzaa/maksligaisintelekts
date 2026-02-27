<div class="language-switcher">
  <button class="btn btn-outline language-btn " onclick="toggleLanguage()">
    <i class="bi bi-globe icon"></i>
    <span class="current-lang">{{ request()->segment(1) === 'lv' ? 'LV' : 'EN' }}</span>
  </button>
</div>

<script>
function toggleLanguage() {
  const currentPath = window.location.pathname;
  const currentLang = '{{ request()->segment(1) }}';
  
  if (currentLang === 'lv') {
    // Switch to English
    const englishPath = currentPath.replace('/lv', '/en') || '/en';
    window.location.href = englishPath;
  } else {
    // Switch to Latvian
    const latvianPath = currentPath.replace('/en', '/lv') || '/lv';
    window.location.href = latvianPath;
  }
}
</script>
