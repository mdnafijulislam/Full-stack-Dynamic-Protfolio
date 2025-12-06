document.addEventListener('DOMContentLoaded', function(){
  const bars = document.querySelectorAll('.progress-bar');
  bars.forEach(bar => {
    const val = bar.getAttribute('aria-valuenow') || 0;
    bar.style.width = val + '%';
  });
});
