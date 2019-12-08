@extends('layouts.backend.app')
@section('title', 'Toko Kucing')
@section('header','Pengaturan Toko')
@section('subheader','Pengaturan Data Toko Master')
@section('bread') <a href="">Toko Kucing</a> @endsection

@push('style')

@endpush
@push('scripthead')
@endpush
@section('content')
    <div class="container-fluid">
        <div class="row clearfix">
            <div class="col-lg-12">
                <div class="card">
                    <div class="body">
                        <div class="row">
                            <div class="preview col-lg-4 col-md-12">
                                <div class="preview-pic tab-content">
                                    <div class="tab-pane active" id="product_1"><img src="{{asset('backend/assets/images/ecommerce/1.png')}}" class="img-fluid rounded img-raised" /></div>
                                </div>             
                            </div>
                            <div class="details col-lg-8 col-md-12">
                                <h3 class="product-title m-b-0">Nama Toko Anda</h3>
                                <!-- <h4 class="price m-t-0">Hari Kerja: <span class="col-amber">180</span></h4> -->
                                <div class="rating">
                                    <div class="stars">
                                        <span class="zmdi zmdi-star col-amber"></span>
                                        <span class="zmdi zmdi-star col-amber"></span>
                                        <span class="zmdi zmdi-star col-amber"></span>
                                        <span class="zmdi zmdi-star col-amber"></span>
                                        <span class="zmdi zmdi-star-outline"></span>
                                    </div>
                                    <span class="m-l-10">41 reviews</span>
                                </div>
                                <hr>
                                <p class="product-description">Deskripsi Toko Anda Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book.</p>
                                <p class="vote"><strong>Slogan</strong> Ini adalah Slogan Toko Anda</p>
                               <div class="row clearfix social-widget">                   
                                    <div class="col-lg-6 col-md-4">
                                        <div class="content">
                                                <small class="text-muted">Email address: </small>
                                                <p>arwahyu01@gmail.com</p>
                                                <hr>
                                                <small class="text-muted">Phone: </small>
                                                <p>~ 0822-8324-8796</p>
                                                <hr>
                                                <small class="text-muted"> <a title="instagram" href="#" class=" waves-effect waves-block"><i class="zmdi zmdi-instagram"></i> <span style="color: #000;">Instagram</span> </a> </small>
                                                <p>~ @arwahyupradana</p>
                                                <hr>
                                        </div>
                                    </div>
                                    <div class="col-lg-6 col-md-4">
                                            <div class="content">
                                                <table class="table">
                                                    <thead>
                                                        <tr><th>Hari Kerja</th><th>Waktu</th></tr>
                                                    </thead>
                                                    <tbody>
                                                        <tr>
                                                            <td>Senin</td>
                                                            <td> 07:00 - 16:00 WIB</td>
                                                        </tr>
                                                        <tr>
                                                            <td>Selasa</td>
                                                            <td> 07:00 - 16:00 WIB</td>
                                                        </tr>
                                                        <tr>
                                                            <td>Rabu</td>
                                                            <td> 07:00 - 16:00 WIB</td>
                                                        </tr>
                                                        <tr>
                                                            <td>Kamis</td>
                                                            <td> 07:00 - 16:00 WIB</td>
                                                        </tr>
                                                    </tbody>
                                                </table>
                                            </div>
                                    </div>
                                </div>
                                <hr>
                                <div class="action">
                                    <button class="btn btn-primary btn-round waves-effect" type="button" onclick="openModaledit()">Edit Data</button>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-lg-12">
                <div class="card">
                    <ul class="nav nav-tabs">
                        <li class="nav-item"><a class="nav-link active" data-toggle="tab" href="#description">Alamat</a></li>
                        <li class="nav-item"><a class="nav-link" data-toggle="tab" href="#review">Review Pelanggan</a></li>
                        <li class="nav-item"><a class="nav-link" data-toggle="tab" href="#about">Tentang Toko</a></li>
                    </ul>
                </div>
                <div class="card">
                    <div class="body">                        
                        <div class="tab-content">
                            <div class="tab-pane active" id="description">
                                <small class="text-muted">Alamat Toko: </small>
                                <p>Unnamed Road, Pandau Jaya, Kec. Siak Hulu, Kampar, Riau 28284, Indonesia</p>
                                <hr>
                                <div class="body">
                                   <div id="tokoLokasi" style="width:100%;height:380px;"></div>
                                </div>
                            </div>
                            <div class="tab-pane" id="review">
                                <p>The standard chunk of Lorem Ipsum used since the 1500s is reproduced below for those interested. Sections 1.10.32 and 1.10.33 from "de Finibus Bonorum et Malorum" by Cicero are also reproduced in their exact original form, accompanied</p>
                                <ul class="row list-unstyled c_review">
                                    <li class="col-12">
                                        <div class="avatar">
                                            <a href="#"><img class="rounded" src="{{asset('backend/assets/images/xs/avatar2.jpg')}}" alt="user" width="60"></a>
                                        </div>                                
                                        <div class="comment-action">
                                            <h5 class="c_name">Hossein Shams</h5>
                                            <p class="c_msg m-b-0">Cras sit amet nibh libero, in gravida nulla. Nulla vel metus scelerisque ante sollicitudin commodo. </p>
                                            <div class="badge badge-primary">iPhone 8</div>
                                            <span class="m-l-10">
                                                <a href="#"><i class="zmdi zmdi-star col-amber"></i></a>
                                                <a href="#"><i class="zmdi zmdi-star col-amber"></i></a>
                                                <a href="#"><i class="zmdi zmdi-star col-amber"></i></a>
                                                <a href="#"><i class="zmdi zmdi-star col-amber"></i></a>
                                                <a href="#"><i class="zmdi zmdi-star-outline text-muted"></i></a>
                                            </span>
                                            <small class="comment-date float-sm-right">Dec 21, 2017</small>
                                        </div>                                
                                    </li>
                                    <li class="col-12">
                                        <div class="avatar">
                                            <a href="#"><img class="rounded" src="{{asset('backend/assets/images/xs/avatar3.jpg')}}" alt="user" width="60"></a>
                                        </div>                                
                                        <div class="comment-action">
                                            <h5 class="c_name">Tim Hank</h5>
                                            <p class="c_msg m-b-0">It is a long established fact that a reader will be distracted by the readable content of a page when looking at its layout</p>
                                            <div class="badge badge-primary">Nokia 8</div>
                                            <span class="m-l-10">
                                                <a href="#"><i class="zmdi zmdi-star col-amber"></i></a>
                                                <a href="#"><i class="zmdi zmdi-star col-amber"></i></a>
                                                <a href="#"><i class="zmdi zmdi-star col-amber"></i></a>
                                                <a href="#"><i class="zmdi zmdi-star col-amber"></i></a>
                                                <a href="#"><i class="zmdi zmdi-star-outline text-muted"></i></a>
                                            </span>
                                            <small class="comment-date float-sm-right">Dec 18, 2017</small>
                                        </div>                                
                                    </li>                                   
                                </ul>
                            </div>
                            <div class="tab-pane" id="about">
                                <h6>Where does it come from?</h6>
                                <p>Contrary to popular belief, Lorem Ipsum is not simply random text. It has roots in a piece of classical Latin literature from 45 BC, making it over 2000 years old. Richard McClintock, a Latin professor at Hampden-Sydney College in Virginia, looked up one of the more obscure Latin words, consectetur, from a Lorem Ipsum passage, and going through the cites of the word in classical literature, discovered the undoubtable source.</p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>  
    @include('backend.store.ar-form.store')
@endsection
@push('scriptbottom')
<script src="http://maps.googleapis.com/maps/api/js"></script>
<script src="{{ asset('backend/assets/plugins/gmaps/gmaps.js')}}"></script>
<script type="text/javascript">
    function openModaledit() {
        $('#ar-modal-edit').modal('show');
        $('.modal-backdrop').hide();
         setTimeout(function() {
          navigator.geolocation.getCurrentPosition((result) => {
            var position = {
              lat: result.coords.latitude,
              lng: result.coords.longitude
            }
            var map = new GMaps({
              div: '#googleMap',
              lat: position.lat,
              lng: position.lng
            });

            if (position) {
              // map.addMarker({position: position });
              var propertiPeta = {
                center:new google.maps.LatLng(position.lat,position.lng),
                zoom:15,
                mapTypeId:google.maps.MapTypeId.ROADMAP
              };
            }
            else
            {
                alert("Tidak ada koneksi internet atau izinkan browser mengetahui lokasi anda.");
            }
                  var peta = new google.maps.Map(document.getElementById("googleMap"), propertiPeta);
                  google.maps.event.addListener(peta, 'click', function(event) {
                    addMarker(this, event.latLng);
                  });
          });
        }, 250);
    }

    var marker;
    function addMarker(peta, posisiTitik){
        if( marker ){marker.setPosition(posisiTitik);} // pindahkan marker
        else { 
                  marker = new google.maps.Marker({
                    position: posisiTitik,
                    map: peta
                  });
        }// buat marker baru
        document.getElementById("lat").value = posisiTitik.lat();
        document.getElementById("lng").value = posisiTitik.lng();
    }


</script>
<script type="text/javascript">
    function initialize() {
      var petaProperti = {
        center:new google.maps.LatLng(0.4220915167290939,101.45830234255823),
        zoom:17,
        mapTypeId:google.maps.MapTypeId.HYBRID
      };
      
      var petaP = new google.maps.Map(document.getElementById("tokoLokasi"), petaProperti);
      
      // membuat Marker
      var marker=new google.maps.Marker({
          position: new google.maps.LatLng(0.4220915167290939,101.45830234255823),
          map: petaP,
          animation: google.maps.Animation.BOUNCE,
          icon: "{{ asset('backend/assets/images/icon/store.ico')}}"

      });
      var bandung = new google.maps.LatLng(0.4220915167290939,101.45830234255823);
       var lingkaran = new google.maps.Circle({
       center: bandung,
       radius: 100,
       strokeColor: "#0000F7",
       strokeOpacity: 0.9,
       strokeWeight: 1,
       fillColor: "#0000F7",
       fillOpacity: 0.2
     });
    lingkaran.setMap(petaP);
}

// event jendela di-load  
google.maps.event.addDomListener(window, 'load', initialize);
</script>
  
@endpush