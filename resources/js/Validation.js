
document.addEventListener('DOMContentLoaded', function() {
    
        
    let signupForm = document.getElementById('signupForm');
    if (signupForm) {
        signupForm.addEventListener('submit', function(e) {
            e.preventDefault();
            
            let username = document.getElementById('username');
            let email = document.getElementById('email');
            let password = document.getElementById('password');
            let confirmPassword = document.getElementById('confirmPassword');
            
            clearErrors(signupForm);
            
            let isValid = true;
            
        
            if (!validateUsername(username)) isValid = false;
            if (!validateEmail(email)) isValid = false;
            if (!validatePassword(password)) isValid = false;
            if (!validateConfirmPassword(password, confirmPassword)) isValid = false;
            

            if (StorageManager.isEmailExist(email.value.trim())) {
                showError(email, 'این ایمیل قبلاً ثبت نام کرده است');
                isValid = false;
            }
            

            if (isValid) {
                // ساخت کاربر جدید
                let newUser = {
                    id: Date.now(),
                    username: username.value.trim(),
                    email: email.value.trim(),
                    password: password.value,
                    createdAt: new Date().toISOString()
                };
                
                StorageManager.saveUser(newUser);
                
                showMessage(signupForm, '✅ ثبت نام با موفقیت انجام شد! در حال انتقال به صفحه ورود...', 'success');
                
            
                signupForm.reset();
                
                
                setTimeout(function() {
                   window.location.href = '/auth/login';
                }, 2000);
            }
        });
    }
    
    // فرم ورود
    let loginForm = document.getElementById('loginForm');
    if (loginForm) {
        loginForm.addEventListener('submit', function(e) {
            e.preventDefault();
            
            let email = document.getElementById('loginEmail');
            let password = document.getElementById('loginPassword');
            
            clearErrors(loginForm);
            
            let isValid = true;
            
            if (!email.value.trim()) {
                showError(email, 'لطفا ایمیل را وارد کنید');
                isValid = false;
            }
            
            if (!password.value) {
                showError(password, 'لطفا رمز عبور را وارد کنید');
                isValid = false;
            }
            
            if (isValid) {
        
                let user = StorageManager.authenticateUser(email.value.trim(), password.value);
                
                if (user) {
                
                    StorageManager.setCurrentUser({
                        id: user.id,
                        username: user.username,
                        email: user.email,
                        loginTime: new Date().toISOString()
                    });
                    
                    showMessage(loginForm, '✅ ورود موفق! در حال انتقال به صفحه اصلی...', 'success');
                    
                    setTimeout(function() {
                       window.location.href = '/auth/login';
                    }, 1500);
                } else {
                    showMessage(loginForm, '❌ ایمیل یا رمز عبور اشتباه است', 'error');
                }
            }
        });
    }
    
    let authContainer = document.querySelector('.auth');
    let currentUser = StorageManager.getCurrentUser();
    
    if (authContainer && currentUser) {

        authContainer.innerHTML = `
            <span style="color: #8B5CF6; font-weight: 600;">
                👋 ${currentUser.username}
            </span>
            <a href="#" id="logoutBtn" style="background: #ef476f; color: white; padding: 0.5rem 1.2rem; border-radius: 50px; text-decoration: none;">
                خروج
            </a>
        `;
        
    
        let logoutBtn = document.getElementById('logoutBtn');
        if (logoutBtn) {
            logoutBtn.addEventListener('click', function(e) {
                e.preventDefault();
                StorageManager.logout();
                window.location.reload();
            });
        }
    }

    function validateUsername(input) {
    let value = input.value.trim();
    
    if (!value) {
        showError(input, 'نام کاربری نمی‌تواند خالی باشد');
        return false;
    }
    
    if (value.length < 3) {
        showError(input, 'نام کاربری باید حداقل 3 کاراکتر باشد');
        return false;
    }
    
    if (value.length > 20) {
        showError(input, 'نام کاربری نباید بیشتر از 20 کاراکتر باشد');
        return false;
    }
    
    // بررسی وجود اعداد با for of
    for (let char of value) {
        if (char >= '0' && char <= '9') {
            showError(input, 'نام کاربری نمی‌تواند شامل عدد باشد');
            return false;
        }
    }
    
    showSuccess(input);
    return true;
}
    
    function validateEmail(input) {
        let value = input.value.trim();
        let emailPattern = /^[^\s@]+@([^\s@.,]+\.)+[^\s@.,]{2,}$/;
        
        if (!value) {
            showError(input, 'ایمیل نمی‌تواند خالی باشد');
            return false;
        }
        
        if (!emailPattern.test(value)) {
            showError(input, 'لطفا یک ایمیل معتبر وارد کنید');
            return false;
        }
        
        showSuccess(input);
        return true;
    }
    
    function validatePassword(input) {
        let value = input.value;
        
        if (!value) {
            showError(input, 'رمز عبور نمی‌تواند خالی باشد');
            return false;
        }
        
        if (value.length < 6) {
            showError(input, 'رمز عبور باید حداقل 6 کاراکتر باشد');
            return false;
        }
        
        showSuccess(input);
        return true;
    }
    
    function validateConfirmPassword(passwordInput, confirmInput) {
        let password = passwordInput.value;
        let confirm = confirmInput.value;
        
        if (!confirm) {
            showError(confirmInput, 'لطفا رمز عبور را تکرار کنید');
            return false;
        }
        
        if (password !== confirm) {
            showError(confirmInput, 'رمز عبور با تکرار آن مطابقت ندارد');
            return false;
        }
        
        showSuccess(confirmInput);
        return true;
    }
    
    function showError(input, message) {
        input.classList.add('error');
        input.classList.remove('success');
        
        let parent = input.parentElement;
        let errorMsg = parent.querySelector('.error-message');
        
        if (!errorMsg) {
            errorMsg = document.createElement('span');
            errorMsg.className = 'error-message';
            input.insertAdjacentElement('afterend', errorMsg);
        }
        
        errorMsg.textContent = message;
        errorMsg.style.color = '#ef476f';
        errorMsg.style.fontSize = '0.75rem';
        errorMsg.style.marginTop = '-0.8rem';
        errorMsg.style.marginBottom = '0.8rem';
        errorMsg.style.display = 'block';
    }
    
    function showSuccess(input) {
        input.classList.add('success');
        input.classList.remove('error');
        
        let parent = input.parentElement;
        let errorMsg = parent.querySelector('.error-message');
        if (errorMsg) {
            errorMsg.remove();
        }
    }
    
    function clearErrors(form) {
        let errors = form.querySelectorAll('.error-message');
        for (let i = 0; i < errors.length; i++) {
            errors[i].remove();
        }
        
        let inputs = form.querySelectorAll('input');
        for (let i = 0; i < inputs.length; i++) {
            inputs[i].classList.remove('error', 'success');
        }
        
        let messages = form.querySelectorAll('.form-message');
        for (let i = 0; i < messages.length; i++) {
            messages[i].remove();
        }
    }
    
    function showMessage(form, message, type) {
        let existingMsg = form.querySelector('.form-message');
        if (existingMsg) existingMsg.remove();
        
        let msgDiv = document.createElement('div');
        msgDiv.className = 'form-message ' + type;
        msgDiv.textContent = message;
        msgDiv.style.padding = '0.75rem';
        msgDiv.style.borderRadius = '0.5rem';
        msgDiv.style.marginTop = '1rem';
        msgDiv.style.textAlign = 'center';
        msgDiv.style.fontSize = '0.875rem';
        
        if (type === 'success') {
            msgDiv.style.backgroundColor = 'rgba(6, 214, 160, 0.1)';
            msgDiv.style.color = '#06d6a0';
            msgDiv.style.border = '1px solid rgba(6, 214, 160, 0.3)';
        } else {
            msgDiv.style.backgroundColor = 'rgba(239, 71, 111, 0.1)';
            msgDiv.style.color = '#ef476f';
            msgDiv.style.border = '1px solid rgba(239, 71, 111, 0.3)';
        }
        
        form.appendChild(msgDiv);
    }
    

let hamburger = document.getElementById('hamburger');
let nav = document.querySelector('.nav');

if (hamburger && nav) {
    hamburger.addEventListener('click', function() {
        nav.classList.toggle('active');
        hamburger.classList.toggle('active');
    });
    

    let navLinks = nav.querySelectorAll('a');
    for (let i = 0; i < navLinks.length; i++) {
        navLinks[i].addEventListener('click', function() {
            nav.classList.remove('active');
            hamburger.classList.remove('active');
        });
    }
}
});