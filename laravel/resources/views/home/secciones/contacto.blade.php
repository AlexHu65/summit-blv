<section id="contacto">
    <div class="container">
        <div class="row">
            <div class="col">
                <h2 class="text-light ligth text-center">TE ESTAMOS <span style="background:#026cc6;color: #24ffb7;" class="black">ESPERANDO</span> -</h2>
            </div>
        </div>
        <div class="row">
            <div class="col">
            <p class="text-light p-0 m-0 text-center">
                Personaliza tu experiencia virtual. <br>
                ¡Empieza ahora!
            </p>
        </div>
        </div>
        <div class="row">
            <div class="col">
                <h2 class="black {{isset($paquetes) ? '': 'text-light'}} text-center p-3"><span style="background:#026cc6;color: #24ffb7;" class="black">Contáctanos</span></h2>
                <form id="frm-contacto" method="post" action="{{url('contacto')}}">
                    @csrf
                    <div class="form-row">
                      <div class="form-group col-md-6">
                        <input type="text" class="form-control validate[required ,custom[onlyLetterNumber]]" name="txtNombre" id="txtNombre" placeholder="Nombre">
                      </div>
                      <div class="form-group col-md-6">
                        <input type="text" class="form-control validate[required ,custom[onlyLetterNumber]]" name="txtApellido" id="txtApellido" placeholder="Apellidos">
                      </div>
                    </div>
                    <div class="form-row">
                      <div class="form-group col-md-6">
                        <input type="email" class="form-control validate[required, custom[email]]" name="txtEmail" id="txtEmail" placeholder="Email">
                      </div>
                      <div class="form-group col-md-6">
                        <input type="text" class="form-control validate[required, custom[phone]]" name="txtTelefono" id="txtTelefono" placeholder="Teléfono">
                      </div>
                    </div>
                    <div class="form-group">
                      <input type="text" class="form-control validate[custom[url]]" name="txtWeb" id="txtWeb" placeholder="Sitio web">
                    </div>
                    <div class="form-group">
                      <input type="text" class="form-control validate[required , minSize[5] ,custom[onlyLetterNumber]]" name="txtEmpresa" id="txtEmpresa" placeholder="Nombre de la empresa">
                    </div>

                    <div class="form-group">
                      <textarea name="txtComentario" class="form-control" rows="8" cols="80" placeholder="¿En qué podemos ayudarte?"></textarea>
                    </div>
                    <div class="form-row">
                      <div class="form-group col-md-6">
                    <div class="msg"></div>

                        <span class="co loading dn"><i class="fas fa-spinner fa-spin text-light"></i> &nbsp;ENVIANDO...</span>
                          <button id="btnSubmit" class="float-right btn btn-info" type="submit">Enviar</button>
                    </div>
                    </div>
                  </form>
            </div>
        </div>
    </div>
</section>
<section id="contacto" class="pt-5 pb-5">
    <div class="container">
        <div class="row">
            <div class="col-md-8 bg1">
                <div class="p-5 text-center">

                    <a  target="_blank" href="http://difraxion.com/sitios/eventos"><img src="{{asset('images/btnver.png')}}"></a>
                </div>
            </div>
            <div class="col-md-4 d-flex justify-content-center align-items-center bg2">
                {{-- <div class="pr-5 pl-5 pt-5 pb-3 text-center d-flex">
                    <img class="mr-3" src="{{asset('images/fb.png')}}" alt="Facebook">
                    <img class="mr-3" src="{{asset('images/ins.png')}}" alt="Instagram">
                    <img src="{{asset('images/tw.png')}}" alt="Twitter">

                </div> --}}
                <div class="pr-5 pl-5 pt-2">
                    <p class="m-0"><a class="colorBlack" href="tel:{{setting('site.telefono')}}">{{setting('site.telefono')}}</a></p>
                    <p class="m-0"><a class="colorBlack" href="mailto:{{setting('site.correo')}}">{{setting('site.correo')}}</a></p>
                    <p class="m-0">{{setting('site.direccion')}}</p>
                </div>
            </div>
        </div>
    </div>

</section>
