  function openPopup() {
    var popup = document.getElementById('popup');
    popup.style.display = 'flex';
    carroselPopup.mount();
  }
 
  function closePopup() {
    var popup = document.getElementById('popup');
    popup.style.display = 'none';
    carroselPopup.destroy();
  }