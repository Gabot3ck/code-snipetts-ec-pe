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
});