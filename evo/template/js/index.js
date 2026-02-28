let lastScrollY = window.scrollY;
const menuToggle = document.getElementById('menuToggle');

function handleScroll() {
  const currentScrollY = window.scrollY;

  if (currentScrollY > lastScrollY && currentScrollY > 50) {
    // Скролл вниз — скрыть кнопку
    menuToggle.classList.add('hidden');
  } else {
    // Скролл вверх — показать кнопку
    menuToggle.classList.remove('hidden');
  }

  lastScrollY = currentScrollY;
}

window.addEventListener('scroll', handleScroll);
window.addEventListener('resize', handleScroll);

document.addEventListener('DOMContentLoaded', function () {
  const navbarCollapse = document.getElementById('navbarSupportedContent');
  const navLinks = navbarCollapse.querySelectorAll('.nav-link');

  const bsCollapse = new bootstrap.Collapse(navbarCollapse, {
    toggle: false // предотвращаем автоматическое сворачивание при инициализации
  });

  navLinks.forEach(link => {
    link.addEventListener('click', () => {
      if (window.innerWidth < 992 && navbarCollapse.classList.contains('show')) {
        bsCollapse.hide(); // закрываем меню
      }
    });
  });
});

const swiper = new Swiper('.swiper', {
    // Optional parameters
    direction: 'horizontal',
    loop: true,

    // If we need pagination
    pagination: {
      el: '.swiper-pagination',
    },

    // Navigation arrows
    navigation: {
      nextEl: '.swiper-button-next',
      prevEl: '.swiper-button-prev',
    },

    // And if we need scrollbar
    scrollbar: {
      el: '.swiper-scrollbar',
    },
});
