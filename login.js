const form = document.getElementById('form');
const username = document.getElementById('username');
const email = document.getElementById('email');
const password = document.getElementById('password');
const confirmpassword = document.getElementById('confirmpassword');

form.addEventListener('submit', e => {
    e.preventDefault();

    validateInputs();
});

const setError = (element, message) => {
    const inputControl = element.parentElement;
    const errorDisplay = inputControl.querySelector('.error');

    errorDisplay.innerText = message;
    inputControl.classList.add('error');
    inputControl.classList.remove('success')
}

const setSuccess = element => {
    const inputControl = element.parentElement;
    const errorDisplay = inputControl.querySelector('.error');

    errorDisplay.innerText = '';
    inputControl.classList.add('success');
    inputControl.classList.remove('error');
};

const isValidEmail = email => {
    const re = /^(([^<>()[\]\\.,;:\s@"]+(\.[^<>()[\]\\.,;:\s@"]+)*)|(".+"))@((\[[0-9]{1,3}\.[0-9]{1,3}\.[0-9]{1,3}\.[0-9]{1,3}\])|(([a-zA-Z\-0-9]+\.)+[a-zA-Z]{2,}))$/;
    return re.test(String(email).toLowerCase());
}

const isValidPassword = password => {
    // Check password length
    if (password.length < 4) {
      return false;
    }
  
    // Check for at least one letter and one digit
    let hasLetter = false;
    let hasDigit = false;
    for (let i = 0; i < password.length; i++) {
      const char = password.charAt(i);
      if (/[a-zA-Z]/.test(char)) {
        hasLetter = true;
      } else if (/\d/.test(char)) {
        hasDigit = true;
      }
      if (hasLetter && hasDigit) {
        return true;
      }
    }
  
    return false;
  }
  
  

const validateInputs = () => {
    const usernameValue = username.value.trim();
    const emailValue = email.value.trim();
    const passwordValue = password.value.trim();
    const confrimpasswordValue = confirmpassword.value.trim();

    if(usernameValue === '') {
        setError(username, 'Username is required');
    } else {
        setSuccess(username);
    }

    if(emailValue === '') {
        setError(email, 'Email is required');
    } else if (!isValidEmail(emailValue)) {
        setError(email, 'Provide a valid email address');
    } else {
        setSuccess(email);
    }

    if(passwordValue === '') {
        setError(password, 'Password is required');
    } else if(!isValidPassword(passwordValue)) {
        setError(password, "Provide a valid password");
    } else {
        setSuccess(password);
    }

    if(confrimpasswordValue === '') {
        setError(confirmpassword, 'Must confirm the password')
    } else if(confrimpasswordValue !== passwordValue) {
        setError(confirmpassword, "test");
    } else {
        setSuccess(confirmpassword);
    }
    return true;
}