const btn_page_one = document.querySelector('.btn-page-one')
const field_name_one = document.querySelector('.field-name-db')
const field_user_one = document.querySelector('.field-user-db')
const field_psw_one = document.querySelector('.field-psw-db')
const field_server_one = document.querySelector('.field-server-db')

btn_page_one.addEventListener('click', (e)=>{
  fetch('/moon-installation/database', {
      method: "POST",
      headers: {
        'Content-Type': 'application/json',
        'X-CSRF-TOKEN': document.querySelector('meta[name="csrf-token"]').content
      },
        body: JSON.stringify({
          name: field_name_one.value,
          user: field_user_one.value,
          psw: field_psw_one.value,
          server: field_server_one.value,
        })
      }).then((res) => {
          if (!res.ok) throw new Error(`HTTP error! status: ${res.status}`);
          return res.json();
      }).then((data) => {
          window.location.replace('/moon-installation?page=2')
      }).catch((err)=>{
        throw err;
      });
})