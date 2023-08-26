let menu = document.querySelector("#menu-btn");
let navbar = document.querySelector(".header .navbar");

menu.onclick = () => {
  menu.classList.toggle("fa-times");
  navbar.classList.toggle("active");
};

var homeSwiper = new Swiper(".home-slider", {
  loop: true,
  navigation: {
    nextEl: ".swiper-button-next",
    prevEl: ".swiper-button-prev",
  },
});
var reviewSwiper = new Swiper(".reviews-slider", {
  loop: true,
  spaceBetween: 20,
  grabCursor: true,
  autoHeight: true,
  breakpoints: {
    640: {
      slidesPerView: 1,
    },
    768: {
      slidesPerView: 2,
    },
    1024: {
      slidesPerView: 3,
    },
  },
});

// load more button in packages page
let loadMoreBtn = document.querySelector(".packages .load-more .btn");
let currentItem = 3;
if (loadMoreBtn) {
  loadMoreBtn.addEventListener("click", () => {
    let boxes = [...document.querySelectorAll(".packages .box-container .box")];
    for (let i = currentItem; i < currentItem + 3; i++) {
      boxes[i].style.display = "inline-block";
    }
    currentItem += 3;
    if (currentItem >= boxes.length) {
      loadMoreBtn.style.display = "none";
    }
  });
}
