var modal = document.getElementById('form-modal');
var btn = document.getElementById('btn');
var span = document.getElementsByClassName('close-modal-window')[0];

btn.onclick = function () {
  modal.style.display = 'block';
  btn.classList.add('active');
};

span.onclick = function () {
  modal.style.display = 'none';
};

window.onclick = function (event) {
  if (event.target == modal) {
    modal.style.display = 'none';
  }
};
