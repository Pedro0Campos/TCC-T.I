const SandyDanny = document.getElementById('SandyDanny')
const SandyDannyClassList = SandyDanny.classList
window.addEventListener('scroll', () => {
  if (window.scrollY >= window.screen.height - 500) {
    if (!SandyDannyClassList.contains('scrollHide')) {
        SandyDannyClassList.add('scrollHide')
    }
  } else {
    if (SandyDannyClassList.contains('scrollHide')) {
        SandyDannyClassList.remove('scrollHide')
    }
  }
})