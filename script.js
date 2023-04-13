const form = document.getElementById('form');
const username = document.getElementById('username');
const email = document.getElementById('email');
const breed = document.getElementById('breed');


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

const validateInputs = () => {
    const usernameValue = username.value.trim();
    const emailValue = email.value.trim();
    const breedValue = breed.value.trim();
    

    if(usernameValue === '') {
        setError(username, 'Name is required');
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

    if(breedValue === '') {
        setError(breed, 'Breed is required');
    } else {
        setSuccess(breed);
    }

};

function updateTime() {
    const now = new Date();
    const month = { month: 'long'};
    const year = {year: 'numeric'};
    const monthString = now.toLocaleDateString('en-US', month);
    const yearString = now.toLocaleDateString('en-US', year);
    const day = now.getDate();
    const suffix = getSuffix(day);
    const time = now.toLocaleTimeString([], {hour: 'numeric', minute: '2-digit', second: '2-digit'})
    const dateTimeElement = document.getElementById('date-time');
    dateTimeElement.textContent = ` ${monthString} ${day}${suffix},  ${yearString}  ${time}`;

}
  
function getSuffix(day) {
      if (day >= 11 && day <= 13) {
        return 'th';
      }
      const lastDigit = day % 10;
      switch (lastDigit) {
        case 1:
          return 'st';
        case 2:
          return 'nd';
        case 3:
          return 'rd';
        default:
          return 'th';
      }
}
setInterval(updateTime, 1000);