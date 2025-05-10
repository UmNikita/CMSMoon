const btn_page_two = document.querySelector('.btn-page-two')
const field_name_options = document.querySelector('.field-name-options')
const field_lang_options = document.querySelector('.field-lang-options')
const field_mail_options = document.querySelector('.field-mail-options')
const field_login_options = document.querySelector('.field-login-options')
const field_psw_options = document.querySelector('.field-psw-options')

btn_page_two.addEventListener('click', (e)=>{
    fetch('/moon-installation/options', {
      method: "POST",
      headers: {
        'Content-Type': 'application/json',
        'X-CSRF-TOKEN': document.querySelector('meta[name="csrf-token"]').content
      },
      body: JSON.stringify({
        name: field_name_options.value,
        language: field_lang_options.value,
        mail: field_mail_options.value,
        login: field_login_options.value,
        psw: field_psw_options.value,
      })
    }).then((res) => {
        if (!res.ok) throw new Error(`HTTP error! status: ${res.status}`);
        return res.json();
    }).then((data) => {
        window.location.replace('/')
    }).catch((err)=>{
      throw err;
    });
   
  })