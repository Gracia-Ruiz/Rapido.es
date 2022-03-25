<div class="container-fluid bg-dark" style="min-height: 300px">
    <footer class="row justify-content-between align-items-center border-top">
      <div class="col-12 col-md-6 mt-4 d-flex flex-column align-items-center">
        <div class="text-center">
            <h5 class="text-center fs-4 text-seccondary links">{{__("RECIBE LAS NOVEDADES")}}</h5>
            <form class="py-2 mb-3">
              <input type="email" class="form-control box-radius" id="exampleInputEmail1" aria-describedby="emailHelp">
            </form>
            <button type="button" class="btn box-radius btn-seccondary links">{{__("ENVIAR")}}</button>   
        </div>
      </div>
  
      <div class="col-12 col-md-3 d-flex flex-column align-items-center">
        <ul class="nav col flex-column align-items-center text-center pt-3">
            <li class="nav-item mb-2 "><a href="{{route('welcome')}}" class="nav-link p-0 text-seccondary links">{{__("Inicio")}}</a></li>
            <li class="nav-item mb-2 "><a href="#" class="nav-link p-0 text-seccondary links">{{__("Categorías")}}</a></li>
            <li class="nav-item mb-2 "><a href="#" class="nav-link p-0 text-seccondary links">{{__("Precios")}}</a></li>
        </ul>
      </div>
      <div class="col-12 col-md-3 d-flex flex-column align-items-center">
        <ul class="nav col flex-column align-items-center text-center pt-3"> 
            <li class="nav-item mb-2 "><a href="#" class="nav-link p-0 text-seccondary links">{{__("Preguntas")}}</a></li>
            <li class="nav-item mb-2 "><a href="#" class="nav-link p-0 text-seccondary links">{{__("¿Quiénes somos?")}}</a></li>
            <li class="nav-item mb-2"><button type="button" class="nav-link bg-transparent border-0 p-0 text-seccondary links" data-bs-toggle="modal" data-bs-target="#exampleModal">{{__("Contáctanos")}}</button></li>
        </ul>
      </div>     
      <div class="col-12 text-seccondary text-center pt-4 py-3">
        <i class="fab fa-facebook fs-5 links">
          <p class="mt-2">Facebook</p> 
        </i>
        <i class="fab fa-instagram mx-5 fs-5 links">
          <p class="mt-2">Instagram</p>
        </i>
        <i class="fab fa-linkedin fs-5 links">
          <p class="mt-2">Linkedin</p>
        </i>
    </div>
      <div class="text-center">
        <a href="{{route('welcome')}}" class="fs-1 pt-3 text-decoration-none fst-italic text-seccondary links">RÁPIDO.ES</a>
        <p class="text-main">© 2021</p>
    </div>
    </footer>
  </div>