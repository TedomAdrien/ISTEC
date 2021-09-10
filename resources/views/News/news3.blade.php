@extends('News.News')
@section('title','news/3')

@section('toto')
<section class="probootstrap-section probootstrap-section-colored">
  <div class="container">
    <div class="row">
      <div class="col-md-12 text-left section-heading probootstrap-animate">
        <h1>Infos de l'école</h1>
      </div>
    </div>
  </div>
</section>

<section class="probootstrap-section">
  <div class="container">
    <div class="row">
      <div class="col-md-12">
        <div class="probootstrap-flex-block">
          <div class="probootstrap-text probootstrap-animate">
            <div class="text-uppercase probootstrap-uppercase">Infos</div>
            <h3>INSCRIPTIION</h3>
            <p>Les inscriptions ont débuté depuis mais 2021 et se poursuivent jusqu'en octobre 2021
             <p>
              <span class="probootstrap-date"><i class="icon-calendar"></i>16 Aout 2021</span>
              <span class="probootstrap-location"><i class="icon-location"></i>Campus ISTEC,En face scierie Ndogbong</span>
            </p>
            <p><a href="/News/detail/3" class="btn btn-primary">Apprendre encore plus</a></p>
          </div>

          <div class="probootstrap-image probootstrap-animate" style="background-image: ">
            <img src="{{asset('images/image-news/n3.jpg')}}" style="width: 655px;height: 543px;">
          </div>
        </div>
      </div>
    </div>
  </div>
</section>





    @endsection


