
document.addEventListener('DOMContentLoaded', () => {
    const login = document.querySelector('.login');
    const containerVideo = document.createElement('div');
    containerVideo.id = 'containerVideo';
    containerVideo.style.width = '60%';
    containerVideo.style.height = '100%';
    containerVideo.style.paddingLeft= '2rem';

    // Crear el elemento <video>
    const video = document.createElement("video");

    // Asignar atributos
    video.id = "videoLogin";
    video.src = "https://www.tiendascanavini.pe/wp-content/uploads/2025/03/ecommerce-scanavini-peru.mp4";
    video.autoplay = true;
    video.muted = true;
    video.loop = true;
    video.poster = "https://www.tiendascanavini.pe/wp-content/uploads/2025/03/fondo-login-scanavini.png";

    // Opcional: Agregar estilos con JS
    video.style.width = "100%";
    video.style.height = "auto";
    video.style.objectFit = "cover"; 
    video.style.borderRadius = "5px"; // Bordes redondeados

    // Insertar el video en el cuerpo de la página o en un contenedor específico
    containerVideo.appendChild(video);
    login.prepend(containerVideo);
});

