var modal = document.getElementById('form-modal');
var btn = document.getElementById('btn');
var auth_btn = document.getElementById('btn-auth');
var reg_btn = document.getElementById('btn-reg');
var span = document.getElementsByClassName('close-modal-window')[0];
var reg = document.getElementsByClassName('signUp')[0];
var auth = document.getElementsByClassName('signIn')[0];

btn.onclick = function () {
  modal.style.display = 'block';
  btn.classList.add('active');
};
auth_btn.onclick = function () {
  auth.style.display = 'block';
  reg.style.display = 'none';
};
reg_btn.onclick = function () {
  reg.style.display = 'block';
  auth.style.display = 'none';
};
span.onclick = function () {
  modal.style.display = 'none';
};
window.onclick = function (event) {
  if (event.target == modal) {
    modal.style.display = 'none';
  }
};
