document.addEventListener("DOMContentLoaded", function () {
  const indicators = document.querySelectorAll("#homeHeaderCarousel .carousel-indicators button");

  indicators.forEach((button) => {
    const label = button.getAttribute("aria-label");
    if (label) {
      const tooltip = document.createElement("span");
      tooltip.textContent = label;
      tooltip.style.position = "absolute";
      tooltip.style.top = "-30px";
      tooltip.style.left = "50%";
      tooltip.style.transform = "translateX(-50%)";
      tooltip.style.whiteSpace = "nowrap";
      tooltip.style.visibility = "hidden";
      tooltip.style.transition = "all 0.3s ease";
      tooltip.style.pointerEvents = "none";
      tooltip.classList.add("carousel-tooltip");
      button.style.position = "relative";
      button.appendChild(tooltip);

      // Mostrar/ocultar el texto en hover
      button.addEventListener("mouseenter", () => {
        tooltip.style.opacity = "1";
        tooltip.style.visibility = "visible";
      });

      button.addEventListener("mouseleave", () => {
        tooltip.style.opacity = "0";
        tooltip.style.visibility = "hidden";
      });
    }
  });

  


  const postActionsControllers = document.querySelectorAll(
    ".post-actions-controller"
  );
  
  postActionsControllers.forEach((btn) => {
    btn.addEventListener("click", () => {
      const targetId = btn.getAttribute("data-target");
      const postActionsContent = document.getElementById(targetId);
  
      if (postActionsContent) {
        const isVisible = postActionsContent.getAttribute("data-visible");
  
        if (isVisible === "false") {
          postActionsContent.setAttribute("data-visible", "true");
          postActionsContent.setAttribute("aria-hidden", "false");
          btn.setAttribute("aria-expanded", "true");
        } else {
          postActionsContent.setAttribute("data-visible", "false");
          postActionsContent.setAttribute("aria-hidden", "true");
          btn.setAttribute("aria-expanded", "false");
        }
      }
    });
  });
  
  function handleClickOutside(event) {
    postActionsControllers.forEach((btn) => {
      const targetId = btn.getAttribute("data-target");
      const postActionsContent = document.getElementById(targetId);
  
      if (postActionsContent && postActionsContent.getAttribute("data-visible") === "true") {
        if (!postActionsContent.contains(event.target) && event.target !== btn) {
          postActionsContent.setAttribute("data-visible", "false");
          postActionsContent.setAttribute("aria-hidden", "true");
          btn.setAttribute("aria-expanded", "false");
        }
      }
    });
  }
  
  // Swiper
  var swiper = new Swiper(".swiper", {
    grabCursor: true,
    speed: 400,
    mousewheel: {
      invert: false,
    },
    scrollbar: {
      el: ".swiper-scrollbar",
      draggable: true,
    },
    slidesPerView: 1,
    spaceBetween: 10,
    navigation: {
      nextEl: ".swiper-button-next",
      prevEl: ".swiper-button-prev",
    },
    // Responsive breakpoints
    breakpoints: {
      900: {
        slidesPerView: 2,
        spaceBetween: 20,
      },
      1200: {
        slidesPerView: 3,
        spaceBetween: 20,
      },
    },
  });


  //Animaciones Implementando la detección con Intersection Observer API
  const animatedElements = document.querySelectorAll('.scv-anim');
  
  // Configurar el observador
  const observerOptions = {
    root: null,
    rootMargin: '0px',
    threshold: 0.2
  };
  
  const observer = new IntersectionObserver((entries, observer) => {
    entries.forEach(entry => {
      if (entry.isIntersecting) {
        // Agregar la nueva clase que inicia la animación
        entry.target.classList.add('scv-anim-active');
        
        // Dejar de observar después de aplicar la animación
        observer.unobserve(entry.target);
      }
    });
  }, observerOptions);
  
  // Observar cada elemento
  animatedElements.forEach(element => {
    observer.observe(element);
  });
});