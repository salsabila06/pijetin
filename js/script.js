Swal.bindClickHandler('data-swal-template')
document.querySelector(".save").addEventListener('click', function(){
  Swal.fire({
    
    title: 'Simpan data',
    text: 'Yakin ingin menyimpan data baru?',
    icon: 'info',
    iconColor: 'rad',
    showDenyButton: true,
    showCloseButton: true,
    confirmButtonText: 'Iya',
    confirmButtonColor: "#00CA97",
    denyButtonText: `Tidak`,
  }).then((result) => {
    /* Read more about isConfirmed, isDenied below */
    if (result.isConfirmed) {
      Swal.fire('Data berhasil disimpan!', '', 'success')
    } else if (result.isDenied) {
      Swal.fire('Data tidak disimpan', '', 'warning')
    }
  })
});

Swal.bindClickHandler('data-swal-template')


const navbar = document.getElementsByTagName('nav')[0];
window.addEventListener('scroll', function () {
  console.log(this.window.scrollY);
  if (this.window.scrollY > 1) {
    navbar.classList.replace('bg-transparent', 'nav-color');
  } else if (this.window.screenY <= 0) {
    navbar.classList.replace('nav-color', 'bg-transparent');
  }
});

// general overlay

function on() {
  document.getElementById('overlay').style.display = 'block';
}

function off() {
  document.getElementById('overlay').style.display = 'none';
}

// overlay saldo
const btn = document.getElementById('btn');
btn.addEventListener('click', function () {
  Swal.fire({
    title: 'Saldo berhasil dikembalikan',
    icon: 'success',
    showConfirmButton: false,
  });
});

$('.dropdown-toggle').dropdown()












