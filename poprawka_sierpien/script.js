document.getElementById('contactForm').addEventListener('submit', function(e){
  const errors = [];
  const name = document.getElementById('name').value.trim();
  const email = document.getElementById('email').value.trim();
  const message = document.getElementById('message').value.trim();
  const emailRe = /^[^\s@]+@[^\s@]+\.[^\s@]+$/;
  if(!name) errors.push('Podaj imię i nazwisko.');
  if(!email || !emailRe.test(email)) errors.push('Podaj poprawny adres e‑mail.');
  if(!message) errors.push('Wpisz wiadomość.');
  const errBox = document.getElementById('errors');
  if(errors.length){
    e.preventDefault();
    errBox.innerHTML = '<ul><li>'+errors.join('</li><li>')+'</li></ul>';
  } else {
    errBox.textContent = '';
  }
});
