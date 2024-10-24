<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    
    <link href="https://cdn.rawgit.com/michalsnik/aos/2.1.1/dist/aos.css" rel="stylesheet" />
    <script src="https://cdn.rawgit.com/michalsnik/aos/2.1.1/dist/aos.js"></script>
    @vite(['resources/css/app.css', 'resources/js/app.js'])
        
    <title>Fluid — анимированный шаблон «Скоро в продаже»</title>

</head>
<body>
    <main class="main">
        <div class="main__container">
            <div class="background bg-one overlay"></div>
            <div class="video-background">
                <video autoplay muted loop id="myVideo">
                    <source src="storage/video/Gen_3_Alpha_Turbo_2319219000,_Do_the_action_inside,_imagepng_52.mp4" type="video/mp4">
                </video>
            </div>
            <div class="main__btn">
                <button class="btn__1"><span>Дарим 1500 рублей за прохождение бесплатного курса
                    <br> «как стать блогером»!</span></button>
            </div>


            <div class="sidebar">
                <div class="menu">
                    <div class="hamburger">
                        <span class="hamburger-line hamburger-line-1"></span> 
                        <span class="hamburger-line hamburger-line-2"></span> 
                        <span class="hamburger-line hamburger-line-3"></span>
                        <span class="hamburger-line hamburger-line-4"></span> 
                    </div>
                </div>
                <div class="nets">
                    <a href="">Инстаграм</a>
                    <a href="">Твиттер</a>
                    <a href="">Фейсбук</a>
                </div>
            </div>

            <div class="hidden__menu">
                <div class="hidden__container">
                    <h1 class="text-center">Fluid — это чистый и минималистичный шаблон coming Soon с супер крутыми CSS3-анимациями. Fluid поставляется с различными стилями и вариациями на выбор.</h1>
                    <div class="row">
                        <div class="col-md-6 row__1">
                            <p class="lead">
                            Отчетливо генерируйте схемы верхнего уровня и полностью исследованное «внештатное» мышление. Энергично итерируйте функции с открытым исходным кодом в сравнении с передовыми опытами. Глобально включайте порталы без трения до методологий, основанных на производительности.
                            </p>
                        </div>
                        <div class="col-md-6 row__2">
                            <p class="lead">
                            Глобально параллельная задача сквозных инфопосредников в отношении инициатив электронного бизнеса. Убедительно культивировать общекорпоративные рынки, в то время как высококачественный аутсорсинг. Удобно концептуализировать вездесущие парадигмы с фронтенд-выравниваниями.
                            </p>
                        </div>
                        
                    </div>
                    <div class="pluses">
                        <div class="row plus__items">
                            <div class=" col-md-6 col-lg-3 plus__item" >
                                <div class="icon__img">
                                    <i class="pe-7s-rocket pe-5x"></i>
                                </div>
                                <h3>Супербыстрый</h3>
                                <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Proin ac venenatis est. Ut ut elit in elit imperdiet</p>
                            </div>
                            <div class="col-md-6 col-lg-3 plus__item" data-delay="500">
                                <div class="icon__img">
                                    <i class="pe-7s-paint-bucket pe-5x"></i>
                                </div>
                                <h3>Настраиваемый</h3>
                                <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Proin ac venenatis est. Ut ut elit in elit imperdiet</p>
                            </div>
                            <div class="col-md-6 col-lg-3 plus__item" data-delay="1500">
                                <div class="icon__img">
                                    <i class="pe-7s-piggy pe-5x"></i>
                                </div>
                                <h3>Экономьте деньги</h3>
                                <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Proin ac venenatis est. Ut ut elit in elit imperdiet</p>
                            </div>
                            <div class="col-md-6 col-lg-3 plus__item" data-delay="2000">
                                <div class="icon__img">
                                    <i class="pe-7s-smile pe-5x"></i>
                                </div>
                                <h3>Будь счастлив</h3>
                                <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Proin ac venenatis est. Ut ut elit in elit imperdiet</p>
                            </div>
                        </div>
                    </div>
                    <div class="team">
                        <div class="team__title section__title">
                            <h2>Наша команда</h2>
                            <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Proin ac venenatis est. Ut ut elit in elit imperdiet</p>
                        </div>
                        
                        <div class="row team__people">
                            <div class="col-md-6 col-lg-3 team__card">
                                <div class="team__img">
                                    <img src="storage/img/team_img_1.jpg" alt="">
                                </div>
                                <h4 class="name">Ronald Reyes</h4>
                                <p class="position">Co-Founder and CEO</p>
                            </div>
                            <div class="col-md-6 col-lg-3 team__card">
                                <div class="team__img">
                                    <img src="storage/img/team_img_2.jpg" alt="">
                                </div>
                                <h4 class="name">Teresa Williams</h4>
                                <p class="position">Co-Founder</p>
                            </div>
                            <div class="col-md-6 col-lg-3 team__card">
                                <div class="team__img">
                                    <img src="storage/img/team_img_3.jpg" alt="">
                                </div>
                                <h4 class="name">Ryan Woods</h4>
                                <p class="position">Lead Developer</p>
                            </div>
                            <div class="col-md-6 col-lg-3 team__card">
                                <div class="team__img">
                                    <img src="storage/img/team_img_4.jpg" alt="">
                                </div>
                                <h4 class="name">Philip Richardson</h4>
                                <p class="position">Product Head</p>
                            </div>
                        </div>
                    </div>
                    <div class="contacts">
                        <div class="contact__title section__title">
                            <h2>Мы здесь</h2>
                            <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Proin ac venenatis est. Ut ut elit in elit imperdiet</p>
                        </div>
                        
                        <p class="text-center">Fluid Inc <br>
                            412 E 6th St, New York, <br>
                            NY 10009, USA
                        </p>
                        <p class="text-center">+1 917-597-2109</p>
                        <p class="text-center">
                            <a href="mailto:hello@fluidinc.com">hello@fluidinc.com</a>
                            <br><br>
                            <a href="javascript:void(0);" class="btn btn-lg btn-outline" data-toggle="modal" data-target="#contactModal">Contact Now</a>
                        </p>
                    </div>
                    <div class="our__map">
                        <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3023.626642892123!2d-73.98836572397362!3d40.72623487139144!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x89c2599d29a2637b%3A0xae3cf9bfc54fe528!2sFluid%20Inc!5e0!3m2!1sru!2sru!4v1729723966287!5m2!1sru!2sru" width="100%" height="450" style="border:0;" allowfullscreen="" loading="lazy" referrerpolicy="no-referrer-when-downgrade"></iframe>

                    </div>
                    
                </div>
            </div>           





        </div>
    </main>
    <script
      src="https://maps.googleapis.com/maps/api/js?key=AIzaSyB41DRUbKWJHPxaFjMAwdrzWzbVKartNGg&callback=initMap&v=beta"
      defer
    ></script>
</body>
</html>


