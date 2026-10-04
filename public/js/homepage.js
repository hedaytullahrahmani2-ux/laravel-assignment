let featuresData = [
    {
        id: 1,
        icon: "fa-user",
        title: "ثبت‌ نام کاربران",
        description: "ایجاد حساب برای دانشجویان، اساتید و مدیران",
        color: "#8B5CF6"
    },
    {
        id: 2,
        icon: "fa-file",
        title: "ارسال گزارش",
        description: "آپلود گزارش‌های کارآموزی به صورت آنلاین",
        color: "#F59E0B"
    },
    {
        id: 3,
        icon: "fa-building",
        title: "مدیریت شرکت‌ها",
        description: "نشر فرصت‌های کارآموزی توسط شرکت‌ها",
        color: "#10B981"
    },
    {
        id: 4,
        icon: "fa-star",
        title: "ارزیابی",
        description: "بررسی عملکرد دانشجویان توسط اساتید",
        color: "#EF476F"
    },
    {
        id: 5,
        icon: "fa-chart-line",
        title: "داشبورد",
        description: "مدیریت کامل سیستم با گزارش‌های پیشرفته",
        color: "#3B82F6"
    },
    {
        id: 6,
        icon: "fa-lock",
        title: "امنیت",
        description: "حفاظت از اطلاعات کاربران با رمزنگاری پیشرفته",
        color: "#8B5CF6"
    }
];


let testimonialsData = [
    {
        id: 1,
        name: "احمد رضایی",
        job: "دانشجوی مهندسی کامپیوتر",

        
        image: "users/istockphoto-2000532012-612x612.jpg",

        comment: "این سیستم واقعاً کار من رو برای پیدا کردن کارآموزی آسون کرد. خیلی ممنونم!",
        rating: 5,
        date: "۱۴۰۳/۱۰/۱۵"
    },

    {
        id: 2,
        name: "فاطمه کریمی",
        job: "دانشجوی مهندسی صنایع",

    
        image: "users/jeshoots-com-laptop-3087585_1920.jpg",

        comment: "مدیریت کارآموزی خیلی آسان شده. ارسال گزارش‌ها خیلی راحت انجام میشه.",
        rating: 5,
        date: "۱۴۰۳/۱۰/۲۰"
    },

    {
        id: 3,
        name: "محمد حسینی",
        job: "سرپرست کارآموزی",

    
        image: "users/pexels-mba-classroom-2155665220-33887552.jpg",

        comment: "سیستم عالی‌ای دارید. ارتباط با شرکت‌ها خیلی بهتر از قبل شده.",
        rating: 4,
        date: "۱۴۰۳/۱۰/۲۵"
    }
];

// سوالات متداول

let faqData = [
    {
        id: 1,
        question: "آیا سیستم رایگان است؟",
        answer: "بله، نسخه ابتدایی سیستم کاملاً رایگان است. برای استفاده از امکانات پیشرفته می‌توانید از طرح‌های پولی استفاده کنید.",
        category: "عمومی"
    },
    {
        id: 2,
        question: "آیا اطلاعات من امن است؟",
        answer: "بله، تمام اطلاعات کاربران با رمزنگاری پیشرفته ذخیره می‌شود و هیچ شخص ثالثی به آن دسترسی ندارد.",
        category: "امنیت"
    },
    {
        id: 3,
        question: "چگونه درخواست کارآموزی بدهم؟",
        answer: "بعد از ثبت نام در سیستم، می‌توانید وارد پنل کاربری خود شوید و از بخش 'فرصت‌های کارآموزی' درخواست خود را ثبت کنید.",
        category: "راهنما"
    },
    {
        id: 4,
        question: "آیا می‌توانم درخواست خود را لغو کنم؟",
        answer: "بله، در هر زمانی که بخواهید می‌توانید درخواست خود را لغو کنید. فقط کافی است به بخش 'درخواست‌های من' بروید و گزینه لغو را بزنید.",
        category: "راهنما"
    },
    {
        id: 5,
        question: "چگونه گزارش کارآموزی ارسال کنم؟",
        answer: "بعد از ورود به سیستم، از بخش 'ارسال گزارش' می‌توانید فایل گزارش خود را آپلود کرده و توضیحات لازم را بنویسید.",
        category: "گزارش"
    },
    {
        id: 6,
        question: "آیا پشتیبانی دارید؟",
        answer: "بله، تیم پشتیبانی ما ۲۴ ساعته آماده پاسخگویی به سوالات شماست. از طریق ایمیل و واتساپ می‌توانید با ما در ارتباط باشید.",
        category: "پشتیبانی"
    }
];

// آمار سیستم

let statsData = [
    {
        id: 1,
        number: 1250,
        label: "کاربر فعال",
        icon: "fa-users",
        color: "#8B5CF6"
    },
    {
        id: 2,
        number: 85,
        label: "شرکت همکار",
        icon: "fa-building",
        color: "#10B981"
    },
    {
        id: 3,
        number: 3420,
        label: "گزارش ارسالی",
        icon: "fa-file-alt",
        color: "#F59E0B"
    },
    {
        id: 4,
        number: 98,
        label: "درصد رضایت",
        icon: "fa-smile",
        color: "#EF476F"
    }
];

// اطلاعات Footer

let footerLinks = {
    about: "سیستم مدیریت کارآموزی برای ساده‌سازی ارتباط بین دانشجویان، شرکت‌ها و اساتید طراحی شده است.",

    contact: {
        email: "hedaytullahrahmani2@gmail.com",
        phone: "0792375988",
        whatsapp: "0792375988",
        telegram: "@ims_support"
    },

    socialLinks: [
        {
            name: "فیسبوک",
            icon: "fa-facebook",
            url: "#"
        },
        {
            name: "واتساپ",
            icon: "fa-whatsapp",
            url: "#"
        },
        {
            name: "تلگرام",
            icon: "fa-telegram",
            url: "#"
        },
        {
            name: "اینستاگرام",
            icon: "fa-instagram",
            url: "#"
        }
    ],

    // لینک‌های Laravel
    quickLinks: [
        {
            name: "خانه",
            url: "/"
        },
        {
            name: "ویژگی‌ها",
            url: "/features"
        },
        {
            name: "سیستم",
            url: "/system"
        },
        {
            name: "ویدیو",
            url: "/demo"
        }
    ]
};

// نمایش ویژگی‌ها

function renderFeatures() {

    let container = document.querySelector('.features .grid');

    if (!container) return;

    let html = '';

    for (let f of featuresData) {

        html += `
            <article>

                <i class="fas ${f.icon}"
                   style="color:${f.color}">
                </i>

                <h3>${f.title}</h3>

                <p>${f.description}</p>

            </article>
        `;
    }

    container.innerHTML = html;
}


function renderTestimonials() {

    let container = document.querySelector('.testimonials .grid');

    if (!container) return;

    let html = '';

    for (let t of testimonialsData) {

        let stars = '';

        for (let s = 0; s < 5; s++) {

            if (s < t.rating) {

                stars += '<i class="fas fa-star"></i>';

            } else {

                stars += '<i class="far fa-star"></i>';

            }
        }

        html += `
            <div class="card">

                <img
                    src="${t.image}"
                    alt="${t.name}"
                >

                <div class="stars">
                    ${stars}
                </div>

                <p>"${t.comment}"</p>

                <h4>${t.name}</h4>

                <small>${t.job}</small>

            </div>
        `;
    }

    container.innerHTML = html;
}

function renderFAQ() {

    let container = document.getElementById('faq');

    if (!container) return;

    let html = '<h2>سوالات متداول</h2>';

    for (let q of faqData) {

        html += `
            <details>

                <summary>
                    ${q.question}
                </summary>

                <p>
                    ${q.answer}
                </p>

                <small>
                    دسته: ${q.category}
                </small>

            </details>
        `;
    }

    container.innerHTML = html;
}

// نمایش آمار


function renderStats() {

    let container = document.querySelector('.stats-container');

    if (!container) return;

    let html = '<div class="stats-grid">';

    for (let s of statsData) {

        html += `
            <div class="stat-card">

                <div
                    class="stat-icon"
                    style="background:${s.color}20; color:${s.color}"
                >
                    <i class="fas ${s.icon}"></i>
                </div>

                <div class="stat-number">
                    ${s.number}+
                </div>

                <div class="stat-label">
                    ${s.label}
                </div>

            </div>
        `;
    }

    html += '</div>';

    container.innerHTML = html;
}

// اجرای اصلی صفحه


document.addEventListener('DOMContentLoaded', function () {

    console.log('🏠 صفحه اصلی در حال بارگذاری...');

    renderFeatures();
    renderTestimonials();
    renderFAQ();
    renderStats();

    console.log('✅ ویژگی‌ها:', featuresData.length);
    console.log('✅ نظرات:', testimonialsData.length);
    console.log('✅ سوالات:', faqData.length);
    console.log('✅ آمار سیستم:', statsData.length);


    // بررسی کاربر فعلی
    if (typeof StorageManager !== 'undefined') {

        let currentUser = StorageManager.getCurrentUser();

        if (currentUser) {

            console.log(
                '👤 کاربر جاری:',
                currentUser.username
            );

        } else {

            console.log(
                '👤 هیچ کاربری لاگین نیست'
            );
        }
    }

});


function addFeature(title, description, icon, color) {

    let newFeature = {

        id: featuresData.length + 1,

        icon: icon,

        title: title,

        description: description,

        color: color
    };

    featuresData.push(newFeature);

    renderFeatures();

    console.log(
        'ویژگی جدید اضافه شد:',
        title
    );
}

function addTestimonial(
    name,
    job,
    comment,
    rating,
    image
) {

    let newTestimonial = {

        id: testimonialsData.length + 1,

        name: name,

        job: job,

        image: image ||
            'users/istockphoto-2000532012-612x612.jpg',

        comment: comment,

        rating: rating,

        date: new Date().toLocaleDateString('fa-IR')
    };

    testimonialsData.push(newTestimonial);

    renderTestimonials();

    console.log(
        'نظر جدید اضافه شد:',
        name
    );
}


function addQuestion(
    question,
    answer,
    category
) {

    let newQuestion = {

        id: faqData.length + 1,

        question: question,

        answer: answer,

        category: category
    };

    faqData.push(newQuestion);

    renderFAQ();

    console.log(
        'سوال جدید اضافه شد:',
        question
    );
}


function searchFAQ(keyword) {

    let results = [];

    for (let i = 0; i < faqData.length; i++) {

        if (
            faqData[i].question.includes(keyword) ||
            faqData[i].answer.includes(keyword)
        ) {

            results.push(faqData[i]);
        }
    }

    console.log(
        'نتایج جستجو:',
        results
    );

    return results;
}


function getTopRatedTestimonials(minRating) {

    let results = [];

    for (let i = 0; i < testimonialsData.length; i++) {

        if (
            testimonialsData[i].rating >= minRating
        ) {

            results.push(
                testimonialsData[i]
            );
        }
    }

    return results;
}