@extends('site.layouts.default')

@section('content')
    
<div  data-aos="zoom-in" data-aos-duration="1000"  class="container-sm background-container" style="background-image: url(img/bg-pages.svg); margin-top: 40px; border-radius:20px;">
    <div class="overlay" style="border-radius: 20px;"></div>
    <div class="content" >
        <div class="efeito" style="border-left: 2px solid #87C145;">
            <div style="margin-left: 10px;">
                <h3>Contactos</h3>
                <p class="mt-3">Início > Contactos </p>
            </div>
        </div>
        <div class="row">
            <div class="col"></div>
            <div class="col-3">
                <a href="{{route('navigation.about')}}" class="text-center" style="text-decoration: none; background-color: #87C145; padding: 10px 20px; border-radius: 2px; color: white;">Sobre Nós <i style="margin-left: 5px;" class="far fa-lightbulb"></i> </a>
            </div>
        </div>
    </div>
</div>

<div class="container py-5">
    <div class="row">
        <div class="col"  data-aos="zoom-in" data-aos-duration="1000" >
            <h3>Contacte-nos</h3>
            <p>Estamos aqui para ajudar você! Se tiver alguma dúvida ou precisar de mais informações sobre nossos serviços, entre em contato conosco. Nossa equipe está pronta para oferecer suporte personalizado e garantir a melhor experiência possível.</p>
            <br>
            <ul style="list-style: none; margin-left: -30px;">
                <li style="padding: 0; font-size: 17px;"><i class="fas fa-location-arrow" style="color: #87C145; margin-right: 10px;"></i>Belas Business Park, Ed. Bengo, 3º andar, Apt. 305</li>
                <li style="padding: 0; font-size: 17px;" class="mt-2">
                    <i class="fas fa-envelope-square" style="color: #87C145; margin-right: 5px;"></i>
                    comercial@anyconnect.co.ao
                </li>
                <li style="padding: 0; font-size: 17px;" class="mt-2">
                    <i class="fas fa-envelope-square" style="color: #87C145; margin-right: 5px;"></i>
                    suporte@anyconnect.co.ao
                </li>
                <li style="padding: 0; font-size: 17px;" class="mt-2">
                    <i class="fas fa-phone-volume" style="color: #87C145; margin-right: 5px;"></i>
                    (+244) 950 555 010
                </li>
            </ul>
        </div>
        <div class="col"  data-aos="zoom-in" data-aos-duration="1400" >
            <form action=""  style="border: 1px solid #dddddd76; padding: 30px; border-radius: 5px;">
                <input type="text" style="height: 50px;" class="form-control mb-4" name="" placeholder="Nome Completo">
                <input type="text" style="height: 50px;" class="form-control mb-4" name="" placeholder="E-mail">
                <textarea name="" id="" rows="5" class="form-control">Mensagem</textarea>
                <button style="background-color: #87C145; border: none; color: white; padding: 10px 30px; border-radius: 5px;" class="mt-4">Enviar Mensagem</button>
            </form>
        </div>
    </div>
</div>

<div class="container py-5"  data-aos="zoom-in" data-aos-duration="500" >
    <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3941.5401534860275!2d13.18484808885498!3d-8.92226990000002!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x1a51f5f3e57e5913%3A0x479890953d77927b!2sBelas%20Business%20Park!5e0!3m2!1spt-PT!2sao!4v1731777056117!5m2!1spt-PT!2sao" width="100%" height="450" style="border:0; border-radius: 10px;" allowfullscreen="" loading="lazy" referrerpolicy="no-referrer-when-downgrade"></iframe>
</div>
@endsection