form.addEventListener('submit', (e) => {
  e.preventDefault();

  let isValid = true;

  const name = document.getElementById('name');
  const phone = document.getElementById('phone');
  const address = document.getElementById('address');
  const nameError = document.getElementById('nameError');
  const phoneError = document.getElementById('phoneError');
  const addressError = document.getElementById('addressError');

  nameError.textContent = '';
  phoneError.textContent = '';
  addressError.textContent = '';

  if (name.value.trim() === '') {
    nameError.textContent = 'Name is required.';
    isValid = false;
  }

  if (!/^\d{10}$/.test(phone.value)) {
    phoneError.textContent = 'Phone number must be 10 digits.';
    isValid = false;
  }

  if (address.value.trim() === '') {
    addressError.textContent = 'Address is required.';
    isValid = false;
  }

  if (isValid) {
    alert('Address saved successfully!');
    form.reset();
  }
});