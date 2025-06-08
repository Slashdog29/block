        let isLoggedIn = false;
        let currentUser = null;
        
        const body = document.body;
        const loginLink = document.getElementById('login-link');
        const registerLink = document.getElementById('register-link');
        const messageAdminLink = document.getElementById('message-admin-link');
        const logoutLink = document.getElementById('logout-link');
        const openMessageModal = document.getElementById('open-message-modal');
        
        const loginModal = document.getElementById('login-modal');
        const registerModal = document.getElementById('register-modal');
        const messageModal = document.getElementById('message-modal');
        
        const loginForm = document.getElementById('login-form');
        const registerForm = document.getElementById('register-form');
        const messageForm = document.getElementById('message-form');
        
        const loginAlert = document.getElementById('login-alert');
        const registerAlert = document.getElementById('register-alert');
        const messageAlert = document.getElementById('message-alert');
        
        const closeButtons = document.getElementsByClassName('close');
        loginLink.addEventListener('click', (e) => {
            e.preventDefault();
            loginModal.style.display = 'block';
        });
        
        registerLink.addEventListener('click', (e) => {
            e.preventDefault();
            registerModal.style.display = 'block';
        });
        
        messageAdminLink.addEventListener('click', (e) => {
            e.preventDefault();
            messageModal.style.display = 'block';
        });
        
        openMessageModal.addEventListener('click', (e) => {
            e.preventDefault();
            messageModal.style.display = 'block';
        });
        
        for (let i = 0; i < closeButtons.length; i++) {
            closeButtons[i].addEventListener('click', function() {
                this.closest('.modal').style.display = 'none';
            });
        }
        
        window.addEventListener('click', (e) => {
            if (e.target.className === 'modal') {
                e.target.style.display = 'none';
            }
        });
        
        logoutLink.addEventListener('click', (e) => {
            e.preventDefault();
            logout();
        });
        
        loginForm.addEventListener('submit', (e) => {
            e.preventDefault();
            const username = document.getElementById('login-username').value;
            const password = document.getElementById('login-password').value;
            
            if (username && password) {
                login(username);
                loginAlert.textContent = ¡Bienvenido, ${username}!;
                loginAlert.style.display = 'block';
                setTimeout(() => {
                    loginModal.style.display = 'none';
                    loginAlert.style.display = 'none';
                }, 1500);
            }
        });
        
        registerForm.addEventListener('submit', (e) => {
            e.preventDefault();
            const username = document.getElementById('register-username').value;
            const email = document.getElementById('register-email').value;
            const password = document.getElementById('register-password').value;
			const confirm = document.getElementById('register-confirm').value;
            
            if (password !== confirm) {
                registerAlert.textContent = 'Las contraseñas no coinciden';
                registerAlert.style.display = 'block';
                return;
            }
            
            if (username && email && password) {
                registerAlert.textContent = ¡Registro exitoso! Ahora puedes iniciar sesión.;
                registerAlert.style.display = 'block';
                setTimeout(() => {
                    registerModal.style.display = 'none';
                    registerAlert.style.display = 'none';
                    loginModal.style.display = 'block';
                }, 1500);
            }
        });

        messageForm.addEventListener('submit', (e) => {
            e.preventDefault();
            const subject = document.getElementById('message-subject').value;
            const content = document.getElementById('message-content').value;
            
            if (subject && content) {
                messageAlert.textContent = 'Mensaje enviado al administrador. ¡Gracias!';
                messageAlert.style.display = 'block';
                setTimeout(() => {
                    messageModal.style.display = 'none';
                    messageAlert.style.display = 'none';
                    messageForm.reset();
                }, 1500);
                
                console.log('Mensaje para admin:', { subject, content, user: currentUser });
            }
        });
        
        function login(username) {
            isLoggedIn = true;
            currentUser = username;
            body.classList.add('logged-in');
            localStorage.setItem('saoLoggedIn', 'true');
            localStorage.setItem('saoUser', username);
        }
        
        function logout() {
            isLoggedIn = false;
            currentUser = null;
            body.classList.remove('logged-in');
            localStorage.removeItem('saoLoggedIn');
            localStorage.removeItem('saoUser');
        }
        
        function checkLogin() {
            const loggedIn = localStorage.getItem('saoLoggedIn');
            const user = localStorage.getItem('saoUser');
            
            if (loggedIn === 'true' && user) {
                login(user);
            }
        }
        
        checkLogin();
