

document.addEventListener('DOMContentLoaded', function() {
    const wrapper = document.querySelector('.wrapper-box');
    const loginLink = document.querySelector('.login-link');
    const registerLink = document.querySelector('.register-link');
    const closeicon = document.querySelector('.close-icon');
    // const loginbtn = document.querySelector('.loginbtn');
    
    registerLink.addEventListener('click', ()=> {
        wrapper.classList.add('active');
    });

    loginLink.addEventListener('click', ()=> {
        wrapper.classList.remove('active');
    });

    // loginbtn.addEventListener('click', ()=> {
    //     wrapper.classList.add('active-popup');
    // });

    closeicon.addEventListener('click', ()=> {
        wrapper.classList.remove('active-popup');
    });
});


 document.getElementById("password-toggle").addEventListener("change", function() {
  var passwordInput = document.getElementById("password");
  
     if (this.checked) {
         passwordInput.type = "text";
    }
     else {
                passwordInput.type = "password";
            }
        });
    