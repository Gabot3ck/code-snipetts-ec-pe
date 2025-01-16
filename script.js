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


  const track = document.querySelector("#categoriesCarousel .carousel-track");
  const items = document.querySelectorAll(".carousel-item2");
  const prevBtn = document.querySelector("#categoriesCarousel .prev-btn");
  const nextBtn = document.querySelector("#categoriesCarousel .next-btn");

  const itemWidth = items[0].offsetWidth + 20; // Ancho de cada elemento + márgenes
  const visibleItems = Math.floor(track.parentElement.offsetWidth / itemWidth);
  let currentIndex = 0;

  // Actualizar la posición del carrusel
  function updateCarousel() {
    const offset = currentIndex * itemWidth;
    track.style.transform = `translateX(-${offset}px)`;
  }

  // Botón de navegación "Previo"
  prevBtn.addEventListener("click", () => {
    if (currentIndex > 0) {
      currentIndex--;
      updateCarousel();
    }
  });

  // Botón de navegación "Siguiente"
  nextBtn.addEventListener("click", () => {
    if (currentIndex < items.length - visibleItems) {
      currentIndex++;
      updateCarousel();
    }
  });

  // Redimensionar ventana
  window.addEventListener("resize", () => {
    updateCarousel();
  });
});