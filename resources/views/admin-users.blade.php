<!DOCTYPE html>
<html lang="fa" dir="rtl">
<head>
    <meta charset="UTF-8">
    <title>لیست کاربران</title>
    <link rel="stylesheet" href="{{ asset('css/all.min.css') }}">
    <link rel="stylesheet" href="{{ asset('css/style.css') }}">
</head>
<body>

<header class="header">
    <div class="logo">
        <img src="61-612746_students-internship-symbol.png" alt="لوگو">
        <span>IMS</span>
    </div>
    <nav class="nav">
        <a href="index.html">خانه</a>
    </nav>
</header>

<section class="users-list-section">
    <h2>📋 لیست کاربران ثبت نام شده</h2>
    <div id="users-container" class="users-container">
        <div class="loading">در حال بارگذاری...</div>
    </div>
</section>

<script src="js/storage.js"></script>
<script>
    function displayUsers() {
        let container = document.getElementById('users-container');
        let users = StorageManager.getUsers();
        
        if (users.length === 0) {
            container.innerHTML = '<div class="no-users">❌ هیچ کاربری ثبت نام نکرده است</div>';
            return;
        }
        
        let html = '<div class="users-grid">';
        for (let i = 0; i < users.length; i++) {
            let user = users[i];
            html += `
                <div class="user-card">
                    <div class="user-avatar">
                        <i class="fas fa-user-circle"></i>
                    </div>
                    <h3>${user.username}</h3>
                    <p><i class="fas fa-envelope"></i> ${user.email}</p>
                    <p><i class="fas fa-calendar"></i> ${new Date(user.createdAt).toLocaleDateString('fa-IR')}</p>
                    <p><i class="fas fa-id-card"></i> ID: ${user.id}</p>
                </div>
            `;
        }
        html += '</div>';
        container.innerHTML = html;
    }
    
    document.addEventListener('DOMContentLoaded', displayUsers);
</script>

<style>
    .users-list-section {
        max-width: 1200px;
        margin: 3rem auto;
        padding: 2rem;
        background: rgba(255,255,255,0.05);
        border-radius: 30px;
    }
    .users-list-section h2 {
        text-align: center;
        margin-bottom: 2rem;
    }
    .users-grid {
        display: grid;
        grid-template-columns: repeat(auto-fit, minmax(280px, 1fr));
        gap: 1.5rem;
    }
    .user-card {
        background: rgba(255,255,255,0.08);
        border-radius: 20px;
        padding: 1.5rem;
        text-align: center;
        border: 1px solid rgba(139,92,246,0.2);
        transition: 0.3s;
    }
    .user-card:hover {
        transform: translateY(-5px);
        border-color: #F59E0B;
    }
    .user-avatar i {
        font-size: 3rem;
        color: #8B5CF6;
        margin-bottom: 1rem;
    }
    .user-card h3 {
        color: #F59E0B;
        margin-bottom: 0.5rem;
    }
    .user-card p {
        color: #9CA3AF;
        font-size: 0.85rem;
        margin: 0.3rem 0;
    }
    .user-card p i {
        margin-left: 0.3rem;
        color: #8B5CF6;
    }
    .no-users, .loading {
        text-align: center;
        padding: 3rem;
        color: #9CA3AF;
    }
</style>

</body>
</html>