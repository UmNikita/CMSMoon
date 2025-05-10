const btn = document.querySelector('.field-btn')
const field_login = document.querySelector('.field-login')
const field_psw = document.querySelector('.field-psw')
const field_remember = document.querySelector('.field-remember')

btn.addEventListener('click', (e)=>{
  fetch('/moon-login', {
      method: "POST",
      headers: {
        'Content-Type': 'application/json',
        'X-CSRF-TOKEN': document.querySelector('meta[name="csrf-token"]').content
      },
        body: JSON.stringify({
          login: field_login.value,
          password: field_psw.value,
          remember: field_remember.checked
        })
      }).then((res) => {
          if (!res.ok) throw new Error(`HTTP error! status: ${res.status}`);
          return res.json();
      }).then((data) => {
        if(data.message == "done")
        {
            window.location.replace('/moon-admin')
        }
      }).catch((err)=>{
        throw err;
      });
})