

let API_URL = 'http://universities.hipolabs.com/search?country=afghanistan';


let favoriteUniversities = [];

function loadFavorites() {
    let saved = localStorage.getItem('favoriteUniversities');
    if (saved) {
        favoriteUniversities = JSON.parse(saved);
    }
}

function saveToFavorites(name, domain) {
    let exists = false;
    for (let i = 0; i < favoriteUniversities.length; i++) {
        if (favoriteUniversities[i].name === name) {
            exists = true;
            break;
        }
    }
    
    if (!exists) {
        favoriteUniversities.push({ name: name, domain: domain });
        localStorage.setItem('favoriteUniversities', JSON.stringify(favoriteUniversities));
        alert(`⭐ ${name} به علاقه‌مندی‌ها اضافه شد!`);
    } else {
        alert(`⚠️ ${name} قبلاً در علاقه‌مندی‌ها وجود دارد!`);
    }
}

async function fetchUniversities() {
    try {
        console.log('📡 در حال دریافت دانشگاه‌های افغانستان...');
        
        let response = await fetch(API_URL);
        
        if (!response.ok) {
            throw new Error('خطا در دریافت اطلاعات');
        }
        
        let data = await response.json();
        console.log('✅ دریافت شد:', data.length, 'پوهنتون');
        return data;
        
    } catch (error) {
        console.error('❌ خطا:', error);
        return null;
    }
}

function renderUniversities(universities) {
    let container = document.getElementById('api-data-container');
    
    if (!container) {
        console.log('محفظه api-data-container پیدا نشد');
        return;
    }
    
    if (!universities || universities.length === 0) {
        container.innerHTML = '<div class="api-error">⚠️ خطا در دریافت اطلاعات از سرور</div>';
        return;
    }
    
    let limitedUniversities = universities.slice(0, 12);
    let html = '<div class="api-grid">';
    
    for (let i = 0; i < limitedUniversities.length; i++) {
        let uni = limitedUniversities[i];
        let website = (uni.web_pages && uni.web_pages[0]) ? uni.web_pages[0] : '#';
        
        html += `
            <div class="api-card">
                <div class="api-card-header">
                    <span class="api-id">#${i + 1}</span>
                    <span class="api-country-code">${uni.alpha_two_code || '?'}</span>
                </div>
                <h3 class="api-title">🏛️ ${uni.name}</h3>
                <p class="api-country">
                    <i class="fas fa-flag"></i> 
                    کشور: ${uni.country || 'افغانستان'}
                </p>
                <p class="api-domain">
                    <i class="fas fa-globe"></i> 
                    دامنه: ${uni.domains ? uni.domains[0] : '-'}
                </p>
                <div class="api-buttons-group">
                    <a href="${website}" target="_blank" class="api-link">
                        🌐 مشاهده وبسایت
                    </a>
                    <button onclick="saveToFavorites('${uni.name.replace(/'/g, "\\'")}', '${uni.domains ? uni.domains[0] : '-'}')" class="api-fav-btn">
                        ⭐ ذخیره
                    </button>
                </div>
            </div>
        `;
    }
    
    html += '</div>';
    container.innerHTML = html;
}

async function loadUniversities() {
    let container = document.getElementById('api-data-container');
    
    if (container) {
        container.innerHTML = `
            <div class="loading-spinner">
                <i class="fas fa-spinner fa-spin"></i>
                در حال بارگذاری پوهنتون‌ها...
            </div>
        `;
    }
    
    let data = await fetchUniversities();
    renderUniversities(data);
}

function addApiStyles() {
    let style = document.createElement('style');
    style.textContent = `
        .api-section {
            background: rgba(255,255,255,0.05);
            backdrop-filter: blur(10px);
            padding: 3rem 2rem;
            margin: 2rem auto;
            border-radius: 30px;
            max-width: 1400px;
            border: 1px solid rgba(139,92,246,0.2);
        }
        
        .api-section h2 {
            text-align: center;
            margin-bottom: 0.5rem;
        }
        
        .api-description {
            text-align: center;
            color: #9CA3AF;
            margin-bottom: 2rem;
            font-size: 0.9rem;
        }
        
        .api-grid {
            display: grid;
            grid-template-columns: repeat(auto-fit, minmax(300px, 1fr));
            gap: 1.5rem;
            margin: 2rem 0;
        }
        
        .api-card {
            background: rgba(255,255,255,0.08);
            border-radius: 20px;
            padding: 1.5rem;
            transition: all 0.3s;
            border: 1px solid rgba(139,92,246,0.2);
        }
        
        .api-card:hover {
            transform: translateY(-5px);
            border-color: #F59E0B;
            box-shadow: 0 10px 30px rgba(0,0,0,0.3);
        }
        
        .api-card-header {
            margin-bottom: 1rem;
            padding-bottom: 0.5rem;
            border-bottom: 1px solid rgba(255,255,255,0.1);
        }
        
        .api-id {
            background: #8B5CF6;
            padding: 0.2rem 0.6rem;
            border-radius: 20px;
            color: white;
            font-size: 0.8rem;
        }
        
        .api-title {
            font-size: 1rem;
            margin-bottom: 0.8rem;
            color: #F59E0B;
            line-height: 1.5;
        }
        
        .api-domain {
            color: #9CA3AF;
            font-size: 0.85rem;
            margin: 0.5rem 0;
        }
        
        .api-domain i {
            margin-left: 0.3rem;
            color: #8B5CF6;
        }

        // داخل تابع addApiStyles، به style.textContent اضافه کن:

.api-country-code {
    background: #F59E0B;
    padding: 0.2rem 0.6rem;
    border-radius: 20px;
    color: #1A1A2E;
    font-size: 0.7rem;
    font-weight: bold;
}

.api-country {
    color: #9CA3AF;
    font-size: 0.85rem;
    margin: 0.5rem 0;
}

.api-country i {
    margin-left: 0.3rem;
    color: #F59E0B;
}
        
        .api-buttons-group {
            display: flex;
            gap: 1rem;
            margin-top: 1rem;
            flex-wrap: wrap;
        }
        
        .api-link {
            display: inline-block;
            color: #8B5CF6;
            text-decoration: none;
            font-size: 0.85rem;
            transition: 0.3s;
            padding: 0.3rem 0.8rem;
            border: 1px solid #8B5CF6;
            border-radius: 20px;
        }
        
        .api-link:hover {
            color: #F59E0B;
            border-color: #F59E0B;
        }
        
        .api-fav-btn {
            background: transparent;
            border: 1px solid #F59E0B;
            color: #F59E0B;
            padding: 0.3rem 0.8rem;
            border-radius: 20px;
            cursor: pointer;
            transition: all 0.3s;
            font-size: 0.85rem;
        }
        
        .api-fav-btn:hover {
            background: #F59E0B;
            color: #1A1A2E;
        }
        
        .api-buttons {
            text-align: center;
            margin-top: 1.5rem;
        }
        
        .api-btn {
            background: linear-gradient(135deg, #8B5CF6, #6D28D9);
            color: white;
            border: none;
            padding: 0.7rem 1.5rem;
            border-radius: 30px;
            cursor: pointer;
            transition: all 0.3s;
            font-size: 0.9rem;
        }
        
        .api-btn:hover {
            background: linear-gradient(135deg, #F59E0B, #D97706);
            transform: scale(1.05);
        }
        
        .loading-spinner {
            text-align: center;
            padding: 3rem;
            color: #8B5CF6;
        }
        
        .loading-spinner i {
            font-size: 2rem;
            margin-bottom: 1rem;
        }
        
        .api-error {
            text-align: center;
            padding: 2rem;
            color: #ef476f;
        }
        
        @media (max-width: 768px) {
            .api-grid {
                grid-template-columns: 1fr;
            }
            
            .api-section {
                padding: 2rem 1rem;
                margin: 1rem;
            }
            
            .api-buttons-group {
                flex-direction: column;
            }
        }
    `;
    document.head.appendChild(style);
}

loadFavorites();

document.addEventListener('DOMContentLoaded', function() {
    console.log('🌐 API دانشگاه‌های افغانستان راه‌اندازی شد');
    addApiStyles();
    
    setTimeout(function() {
        loadUniversities();
    }, 500);
});

function showFavorites() {
    if (favoriteUniversities.length === 0) {
        alert('📭 هنوز هیچ پوهنتونی به علاقه‌مندی‌ها اضافه نکرده‌اید!');
        return;
    }
    
    let message = '⭐ لیست علاقه‌مندی‌های شما:\n\n';
    for (let i = 0; i < favoriteUniversities.length; i++) {
        message += `${i + 1}. ${favoriteUniversities[i].name}\n   دامنه: ${favoriteUniversities[i].domain}\n\n`;
    }
    alert(message);
}