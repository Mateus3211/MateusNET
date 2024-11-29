
        function loginWithGoogle() {
            alert("Login com Google ainda não implementado!");
        }

        function loginWithFacebook() {
            alert("Login com Facebook ainda não implementado!");
        }

        function validateForm() {
            const email = document.getElementById('email');
            const password = document.getElementById('password');
            
            let isValid = true;

            if (!email.value.includes('@')) {
                email.classList.add('invalid');
                isValid = false;
            } else {
                email.classList.remove('invalid');
            }

            if (password.value.length < 6) {
                password.classList.add('invalid');
                isValid = false;
            } else {
                password.classList.remove('invalid');
            }

            return isValid;
        }
    