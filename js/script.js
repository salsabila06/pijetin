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


// const btn = document.getElementById('btn');
//   btn.addEventListener('click', function(){
//   swal({
//   title: "Are you sure?",
//   text: "Your will not be able to recover this imaginary file!",
//   type: "warning",
//   showCancelButton: true,
//   confirmButtonClass: "btn-danger",
//   confirmButtonText: "Yes, delete it!",
//   closeOnConfirm: false
//   },
//   function(){
//   swal("Deleted!", "Your imaginary file has been deleted.", "success");
//   });  
//     })



