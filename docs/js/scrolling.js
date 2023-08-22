const SandyDanny = document.getElementById('SandyDanny')
const SandyDannyClassList = SandyDanny.classList
window.addEventListener('scroll', () => {
    console.log(window.screen.height)
  if (window.scrollY >= window.screen.height - 450) {
    if (!SandyDannyClassList.contains('scrollHide')) {
        SandyDannyClassList.add('scrollHide')
    }
  } else {
    if (SandyDannyClassList.contains('scrollHide')) {
        SandyDannyClassList.remove('scrollHide')
    }
  }
})