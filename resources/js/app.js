import './bootstrap';


function menuClick(){
    menuBtn.classList.toggle('active');
    menuHiden.classList.toggle('active');
}
let menuBtn = document.querySelector('.hamburger');
let menuHiden = document.querySelector('.hidden__menu');


menuBtn.addEventListener('click', menuClick);






function updateVideoSource() {
    var video = document.getElementById('myVideo');
    var source = video.querySelector('source');

    // Получаем текущую ширину окна
    var width = window.innerWidth;

    // Условие для смены видео в зависимости от ширины экрана
    if (width < 800) {
        source.src = 'storage/video/IMG_5892.MP4'; // путь к видео для маленьких экранов
    } 
    else{
        source.src = 'storage/video/Gen_3_Alpha_Turbo_2319219000,_Do_the_action_inside,_imagepng_52.mp4'; // путь к видео для больших экранов
    }
    
    // Загружаем новое видео
    video.load();
}

// Обработчик события изменения размера окна
window.addEventListener('resize', updateVideoSource);

// Вызываем функцию при первоначальной загрузке страницы
updateVideoSource();


  let map;

  async function initMap() {
    const { Map } = await google.maps.importLibrary("maps");
  
    map = new Map(document.getElementById("map"), {
      center: { lat: -34.397, lng: 150.644 },
      zoom: 8,
    });
  }
  
  initMap();