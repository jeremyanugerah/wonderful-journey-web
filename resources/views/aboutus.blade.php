@extends('layouts.app')

@section('content') 
<div class="big-container" style="background-color: #f5d7b5; padding-top: 80px; min-height:100vh;">
        <div class="container rounded" style="background-color: white; padding: 40px; min-height: 30vh;">
            
            <div class="row justify-content-start">
                <div class="col-6 text-center"  style="padding: 0;">
                    <img src="/storage/images/aboutus.jpg" onerror="this.onerror=null;this.src='/storage/images/noimage.png';" class="card-img-top border" alt="..." style="width: 100%; height: 400px" >
                </div>
                <div class="col-6"  style="padding-left: 30px; padding-top: 20px;">
                    <h2 class="card-title" style="color: brown" >About Us</h2>
                    <p class="card-text">Lorem ipsum dolor sit amet, consectetur adipiscing elit. Sed tristique, urna tempus pellentesque ultrices, dui lacus finibus dolor, sit amet tristique dolor lorem dapibus arcu. Vivamus non tortor sit amet felis placerat ultricies. Donec vitae nulla placerat risus aliquet aliquam vitae in nisl. Quisque non aliquet turpis. Proin malesuada neque gravida tristique condimentum. Integer elementum, nulla in efficitur efficitur, nibh augue pretium lorem, porta malesuada elit tellus nec nibh. Donec sit amet neque vel tellus tempor gravida a et eros. Aliquam vitae tincidunt tortor. Cras vehicula condimentum rutrum.</p>
                </div>
            </div>
        </div>
    </div>
@endsection