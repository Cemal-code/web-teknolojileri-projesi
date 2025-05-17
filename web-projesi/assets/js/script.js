// Tüm sayfalarda çalışacak genel scriptler
document.addEventListener('DOMContentLoaded', function() {
    // Navbar linklerine aktif class ekleme
    const currentPage = window.location.pathname.split('/').pop();
    document.querySelectorAll('.nav-link').forEach(link => {
        if (link.getAttribute('href') === currentPage) {
            link.classList.add('active');
        }
    });

    // Slider için (sehrim.html'de kullanılacak)
    if (document.querySelector('.owl-carousel')) {
        $('.owl-carousel').owlCarousel({
            loop: true,
            margin: 10,
            nav: true,
            responsive: {
                0: { items: 1 },
                600: { items: 2 },
                1000: { items: 3 }
            }
        });
    }
});

// Form doğrulama için (iletisim.html)
function validateForm() {
    let isValid = true;
    const email = document.getElementById('email').value;
    
    if (!email.includes('@')) {
        alert('Geçerli bir email adresi girin!');
        isValid = false;
    }
    
    return isValid;
}