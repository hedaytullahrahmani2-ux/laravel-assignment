// ========================================
// storage.js - مدیریت Local Storage
// ========================================

let StorageManager = {
    
    // ذخیره کاربر جدید
    saveUser: function(user) {
        let users = this.getUsers();
        users.push(user);
        localStorage.setItem('users', JSON.stringify(users));
        console.log('کاربر ذخیره شد:', user.email);
        return true;
    },
    
    // دریافت همه کاربران
   getUsers: function() {
    try {
        let users = localStorage.getItem('users');
        return users ? JSON.parse(users) : [];
    } catch (error) {
        console.error('خطا در خواندن کاربران:', error);
        return [];
    }
},
    
    // پیدا کردن کاربر با ایمیل
    findUserByEmail: function(email) {
        let users = this.getUsers();
        for (let i = 0; i < users.length; i++) {
            if (users[i].email === email) {
                return users[i];
            }
        }
        return null;
    },
    
    // بررسی وجود ایمیل
    isEmailExist: function(email) {
        let user = this.findUserByEmail(email);
        if (user) {
            return true;
        } else {
            return false;
        }
    },
    
    // احراز هویت کاربر (ورود)
    authenticateUser: function(email, password) {
        let user = this.findUserByEmail(email);
        if (user && user.password === password) {
            return user;
        }
        return null;
    },
    
    // ذخیره کاربر جاری (لاگین شده)
    setCurrentUser: function(user) {
        localStorage.setItem('currentUser', JSON.stringify(user));
    },
    
    // دریافت کاربر جاری
    getCurrentUser: function() {
    try {
        let user = localStorage.getItem('currentUser');
        return user ? JSON.parse(user) : null;
    } catch (error) {
        console.error('خطا در خواندن کاربر جاری:', error);
        return null;
    }
},
    
    // خروج کاربر
    logout: function() {
        localStorage.removeItem('currentUser');
        console.log('کاربر خارج شد');
    },
    
    // بررسی لاگین بودن کاربر
    isLoggedIn: function() {
        let currentUser = this.getCurrentUser();
        if (currentUser) {
            return true;
        } else {
            return false;
        }
    },
    
    // دریافت تعداد کاربران
    getUserCount: function() {
        let users = this.getUsers();
        return users.length;
    },
    
    // حذف یک کاربر با ایمیل
    deleteUser: function(email) {
        let users = this.getUsers();
        let newUsers = [];
        for (let i = 0; i < users.length; i++) {
            if (users[i].email !== email) {
                newUsers.push(users[i]);
            }
        }
        localStorage.setItem('users', JSON.stringify(newUsers));
        console.log('کاربر حذف شد:', email);
        return true;
    },
    
    // ویرایش اطلاعات کاربر
    updateUser: function(email, newData) {
        let users = this.getUsers();
        for (let i = 0; i < users.length; i++) {
            if (users[i].email === email) {
                users[i] = { ...users[i], ...newData };
                localStorage.setItem('users', JSON.stringify(users));
                console.log('کاربر ویرایش شد:', email);
                return true;
            }
        }
        return false;
    },
    
    // پاک کردن همه کاربران (فقط برای تست)
    clearAllUsers: function() {
        localStorage.removeItem('users');
        console.log('همه کاربران پاک شدند');
    },
    
    // نمایش همه کاربران در کنسول (برای دیباگ)
    showAllUsers: function() {
        let users = this.getUsers();
        console.log('لیست همه کاربران:', users);
        return users;
    }
};

// ========== ذخیره نمونه کاربران برای تست ==========
function initSampleUsers() {
    let users = StorageManager.getUsers();
    
    if (users.length === 0) {
        let sampleUsers = [
            {
                id: 1,
                username: 'احمد رضایی',
                email: 'ahmad@example.com',
                password: 'ahmad123',
                createdAt: new Date().toISOString()
            },
            {
                id: 2,
                username: 'فاطمه کریمی',
                email: 'fatemeh@example.com',
                password: 'fatemeh123',
                createdAt: new Date().toISOString()
            },
            {
                id: 3,
                username: 'محمد حسینی',
                email: 'mohammad@example.com',
                password: 'mohammad123',
                createdAt: new Date().toISOString()
            }
        ];
        
        for (let i = 0; i < sampleUsers.length; i++) {
            StorageManager.saveUser(sampleUsers[i]);
        }
        console.log('3 نمونه کاربر به localStorage اضافه شدند');
    }
}

// اجرا در زمان بارگذاری صفحه
document.addEventListener('DOMContentLoaded', function() {
    initSampleUsers();
});