const navbar = document.getElementsByTagName('nav')[0];
window.addEventListener('scroll', function () {
  console.log(this.window.scrollY);
  if (this.window.scrollY > 1) {
    navbar.classList.replace('bg-transparent', 'nav-color');
  } else if (this.window.screenY <= 0) {
    navbar.classList.replace('nav-color', 'bg-transparent');
  }
});

// overlay

function on() {
  document.getElementById('overlay').style.display = 'block';
}

function off() {
  document.getElementById('overlay').style.display = 'none';
}
