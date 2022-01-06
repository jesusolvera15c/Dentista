@section('styles')
<style>
.selct{
    background: yellow !important;
    color:#FFF;
    text-shadow:0 1px 0 rgba(0,0,0,0.4);
}
.selct option:not(:checked) { 
    background-color: white; 
    color:#000;
}
</style>
@endsection
<section class="ftco-section ftco-no-pt ftco-no-pb">
    <div class="container-fluid px-md-0">
       <div class="row no-gutters">
          <div class="col-md-3 d-flex align-items-stretch">
             <div class="consultation w-100 text-center px-4 px-md-5">
                <h3 class="mb-4">Dental Services</h3>
                <p>A small river named Duden flows by their place and supplies</p>
                <a href="#" class="btn-custom">See Services</a>
             </div>
          </div>
          <div class="col-md-6 d-flex align-items-stretch">
             <div class="consultation consul w-100 px-4 px-md-5">
                <div class="text-center">
                   <h3 class="mb-4">Agenda Consulta libre</h3>
                </div>
                <form action="#" class="appointment-form">
                   <div class="row">
                      <div class="col-md-12 col-lg-6 col-xl-4">
                         <div class="form-group">
                            <input type="text" class="form-control" placeholder="Nombre">
                         </div>
                      </div>
                      <div class="col-md-12 col-lg-6 col-xl-4">
                         <div class="form-group">
                            <input type="text" class="form-control" placeholder="Apellido">
                         </div>
                      </div>
                      <div class="col-md-12 col-lg-6 col-xl-4">
                         <div class="form-group">
                            <div class="form-field">
                               <div class="select-wrap">
                                  <div class="icon"><span class="ion-ios-arrow-down"></span></div>
                                  <select name="" id="" class="form-control selct">
                                     <option value="">Extraccion de muela</option>
                                     <option value="">Limpieza</option>
                                     <option value="">Tratamiento Caries</option>
                                     <option value=""> Tratamiento de las raíces dentarias</option>
                                     <option value="">Valoracion</option>
                                  </select>
                               </div>
                            </div>
                         </div>
                      </div>
                      <div class="col-md-12 col-lg-6 col-xl-4">
                         <div class="form-group">
                            <div class="input-wrap">
                               <div class="icon"><span class="ion-md-calendar"></span></div>
                               <input type="text" class="form-control appointment_date" placeholder="Fecha">
                            </div>
                         </div>
                      </div>
                      <div class="col-md-12 col-lg-6 col-xl-4">
                         <div class="form-group">
                            <div class="input-wrap">
                               <div class="icon"><span class="ion-ios-clock"></span></div>
                               <input type="text" class="form-control appointment_time" placeholder="Hora">
                            </div>
                         </div>
                      </div>
                      <div class="col-md-12 col-lg-6 col-xl-4">
                         <div class="form-group">
                            <input type="submit" value="Agendar cita" class="btn btn-secondary py-2 px-4">
                         </div>
                      </div>
                   </div>
                </form>
             </div>
          </div>
          <div class="col-md-3 d-flex align-items-stretch">
             <div class="consultation w-100 text-center px-4 px-md-5">
                <h3 class="mb-4">Find A Doctor</h3>
                <p>A small river named Duden flows by their place and supplies</p>
                <a href="#" class="btn-custom">Mee our doctor</a>
             </div>
          </div>
       </div>
    </div>
 </section>