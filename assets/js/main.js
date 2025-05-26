// Initialize Swiper
const assetPath = 'https://aswservice.com/hotdeal/';

const heroSwiper = new Swiper('.heroSwiper', {
    loop: true,
    autoplay: {
        delay: 5000,
    },
    pagination: {
        el: '.swiper-pagination',
        clickable: true,
    },
    navigation: {
        nextEl: '.swiper-button-next',
        prevEl: '.swiper-button-prev',
    },
});

// DOM Elements
const loginBtn = document.getElementById('loginBtn');
const loginModal = document.getElementById('loginModal');
const closeLoginModal = document.getElementById('closeLoginModal');
const loginForm = document.getElementById('loginForm');
const otpModal = document.getElementById('otpModal');
const closeOtpModal = document.getElementById('closeOtpModal');
const otpForm = document.getElementById('otpForm');
const unitsContainer = document.getElementById('units-container');
const unitDetails = document.getElementById('unit-details');

// Check if user is logged in
function checkLoginStatus() {
    const member = sessionStorage.getItem('hotDealMember');
    if (member) {
        loginBtn.textContent = 'Logout';
        loginBtn.onclick = handleLogout;
    } else {
        loginBtn.textContent = 'Login';
        loginBtn.onclick = () => loginModal.classList.remove('hidden');
    }
}

// Handle logout
function handleLogout() {
    sessionStorage.removeItem('hotDealMember');
    checkLoginStatus();
}

// Show modal
function showModal(modal) {
    modal.classList.remove('hidden');
    modal.classList.add('flex');
}

// Hide modal
function hideModal(modal) {
    modal.classList.add('hidden');
    modal.classList.remove('flex');
}

// Event Listeners
loginBtn.addEventListener('click', () => showModal(loginModal));
closeLoginModal.addEventListener('click', () => hideModal(loginModal));
closeOtpModal.addEventListener('click', () => hideModal(otpModal));

// Handle login form submission
loginForm.addEventListener('submit', async (e) => {
    e.preventDefault();
    const email = document.getElementById('email').value;
    
    try {
        const response = await fetch('/api/proxy.php?endpoint=Auth/RequestOTP', {
            method: 'POST',
            headers: {
                'Content-Type': 'application/json',
            },
            body: JSON.stringify({ email }),
        });
        
        const data = await response.json();
        if (data.status === 200) {
            hideModal(loginModal);
            showModal(otpModal);
        } else {
            alert('Error: ' + data.message);
        }
    } catch (error) {
        console.error('Error:', error);
        alert('An error occurred. Please try again.');
    }
});

// Handle OTP form submission
otpForm.addEventListener('submit', async (e) => {
    e.preventDefault();
    const email = document.getElementById('email').value;
    const otp = document.getElementById('otp').value;
    
    try {
        const response = await fetch('/api/proxy.php?endpoint=Auth/ValidateOTP', {
            method: 'POST',
            headers: {
                'Content-Type': 'application/json',
            },
            body: JSON.stringify({ email, otp }),
        });
        
        const data = await response.json();
        if (data.status === 200) {
            sessionStorage.setItem('hotDealMember', JSON.stringify(data.data));
            hideModal(otpModal);
            checkLoginStatus();
        } else {
            alert('Error: ' + data.message);
        }
    } catch (error) {
        console.error('Error:', error);
        alert('An error occurred. Please try again.');
    }
});

// Fetch and display units
async function fetchUnits() {
    try {
        const response = await fetch('/api/proxy.php?endpoint=Unit/GetUnits&perPage=10&page=1&isHomeEnable=false');
        const data = await response.json();
        
        if (data.status === 200 && data.data.units) {
            unitsContainer.innerHTML = data.data.units.map(unit => `
                <div class="bg-white rounded-lg shadow-lg overflow-hidden">
                    <img src="${ assetPath + unit.headerImage?.resource?.filePath || 'https://via.placeholder.com/400x300'}" 
                         alt="${unit.unitCode}" 
                         class="w-full aspect-square object-cover">
                    <div class="p-4">
                        <h3 class="text-xl font-bold mb-2">${unit.unitCode}</h3>
                        <p class="text-gray-600 mb-2">${unit.modelName}</p>
                        <p class="text-blue-600 font-bold">฿${unit.sellingPrice.toLocaleString()}</p>
                        <div class="flex justify-between">
                          <a href="/unit/${unit.id}" class="mt-4 block text-center text-blue-600 px-4 py-2 rounded hover:bg-blue-700 transition-colors">
                            รายละเอียด
                          </a>
                          <button class="mt-4 block text-center bg-blue-600 text-white px-4 py-2 rounded hover:bg-blue-700 transition-colors" onclick="">
                            สนใจยูนิตนี้
                          </button>
                        </div>
                    </div>
                </div>
            `).join('');
        }
    } catch (error) {
        console.error('Error fetching units:', error);
    }
}

// Fetch unit details
async function fetchUnitDetails(unitId) {
    if (!unitId) return;
    
    try {
        const response = await fetch('/api/proxy.php?endpoint=Unit/GetUnitByID', {
            method: 'POST',
            headers: {
                'Content-Type': 'application/json',
            },
            body: JSON.stringify({ unitID: unitId }),
        });
        
        const data = await response.json();
        if (data.status === 200 && data.data) {
            const unit = data.data;
            unitDetails.innerHTML = `
                <div class="grid grid-cols-1 md:grid-cols-2 gap-8">
                    <div>
                        <img src="${unit.headerImage?.resource?.filePath || 'https://via.placeholder.com/800x600'}" 
                             alt="${unit.unitCode}" 
                             class="w-full rounded-lg">
                    </div>
                    <div>
                        <h1 class="text-3xl font-bold mb-4">${unit.unitCode}</h1>
                        <p class="text-gray-600 mb-2">${unit.modelName}</p>
                        <p class="text-2xl text-blue-600 font-bold mb-4">฿${unit.sellingPrice.toLocaleString()}</p>
                        <div class="space-y-2">
                            <p><strong>Area:</strong> ${unit.unitArea} ${unit.unit_Measure}</p>
                            <p><strong>Status:</strong> ${unit.unit_Status}</p>
                            <p><strong>Tower:</strong> ${unit.towerName}</p>
                            <p><strong>Floor:</strong> ${unit.floorName}</p>
                        </div>
                    </div>
                </div>
            `;
        }
    } catch (error) {
        console.error('Error fetching unit details:', error);
    }
}

// Initialize
document.addEventListener('DOMContentLoaded', () => {
    checkLoginStatus();
    if (unitsContainer) {
        fetchUnits();
    }
    if (unitDetails) {
        const unitId = window.location.pathname.split('/').pop();
        fetchUnitDetails(unitId);
    }
}); 