@extends('parent')
@section('title','Contact')
@push('css')

@endpush
@section('content')
<section class="probootstrap-section probootstrap-section-colored">
        <div class="container">
          <div class="row">
            <div class="col-md-12 text-left section-heading probootstrap-animate">
              <h1 class="mb0">Contactez-Nous</h1>
            </div>
          </div>
        </div>
      </section>

      <section class="probootstrap-section probootstrap-section-sm">
        <div class="container">
          <div class="row">
            <div class="col-md-12">
              <div class="row probootstrap-gutter0">
                <div class="col-md-4" id="probootstrap-sidebar">
                  <div class="probootstrap-sidebar-inner probootstrap-overlap probootstrap-animate">
                    <h3>Pages</h3>
                    <ul class="probootstrap-side-menu">
                      <li><a href="/">Accueil</a></li>
                      <li><a href="/courses">Cours</a></li>
                      <li><a href="/teachers">Enseignants</a></li>
                      <li><a href="/events">Événements</a></li>
                      <li><a href="/abouts">À propos de nous</a></li>
                      <li class="active"><a>Contactez-Nous</a></li>
                    </ul>
                  </div>
                </div>
                <div class="col-md-7 col-md-push-1  probootstrap-animate" id="probootstrap-content">

                <div class="container">
                    @if(session('success'))
                        <strong class="alert alert-success">
                        {{session('success')}}
                        </strong>
                    @endif
                    @if(session('echec'))
                        <strong class="alert alert-danger">
                        {{session('echec')}}
                        </strong>
                    @endif
                </div>

                  <h2>Entrer en contact</h2>
                  <p>Contactez-nous via le formulaire ci-dessous...</p>
                  <form method="POST" action="{{ route('add.message') }}">
                    @csrf
                    <div class="form-group">
                      <label for="name">Nom complet <span style="color: red;"
                                title="champ obligatoire">*</span></label>
                      <input type="text" class="form-control" id="name" name="name" value="{{ old('name') }}" required>
                       @error('name')
                            <span class="text-danger">{{ $message }}</span>
                        @enderror
                    </div>
                    <div class="form-group">
                        <label for="email">Email<span style="color: red;"
                                title="champ obligatoire">*</span></label>
                        <input type="email" class="form-control" id="email" name="email" value="{{ old('email') }}" required>
                         @error('email')
                            <span class="text-danger">{{ $message }}</span>
                        @enderror
                    </div>
                    <div class="form-group">
                      <label for="phone_number">Téléphone<span style="color: red;"
                                title="champ obligatoire">*</span></label>
                      <input type="text" class="form-control" id="phone_number" name="phone_number" placeholder="692775509" value="{{ old('phone_number') }}" required>
                       @error('phone_number')
                            <span class="text-danger">{{ $message }}</span>
                        @enderror
                    </div>
                    <div class="form-group">
                      <label for="subject">Sujet</label>
                      <input type="text" class="form-control" id="subject" name="subject" value="{{ old('subject') }}">
                       @error('subject')
                            <span class="text-danger">{{ $message }}</span>
                        @enderror
                    </div>
                    <div class="form-group">
                      <label for="message">Message<span style="color: red;"
                                title="champ obligatoire">*</span></label>
                      <textarea cols="30" rows="10" class="form-control" id="message" name="message" required>{{ old('message') }}</textarea>
                       @error('message')
                            <span class="text-danger">{{ $message }}</span>
                        @enderror
                    </div>
                    <div class="form-group">
                      <input type="submit" class="btn btn-primary btn-lg" id="submit" name="submit" value="Envoyer">
                    </div>
                  </form>
                </div>
                <div class="row">
                    <div class="col-lg-9 col-md-9 col-sm-9 probootstrap-top-quick-contact-info">
              <span><i class="icon-location2" style="color:#f4a105;"></i>Ndogbong, Douala, Cameroun</span>
              <span><i class="icon-phone2" style="color:#f4a105;"></i>+237 699 683 903 / 656 793 328</span>
              <span><i class="icon-mail" style="color:#f4a105;"></i><a href="mailto:istec.cmr@gmail.com">istec.cmr@gmail.com</a></span>
            </div>
            <div class="col-lg-3 col-md-3 col-sm-3 probootstrap-top-social">
              <ul>
                <li><a href="#"><i class="icon-twitter" style="color:#f4a105;"></i></a></li>
                <li><a href="https://www.facebook.com/ISTECCAMEROUN/"><i class="icon-facebook2" style="color:#f4a105;"></i></a></li>
                <li><a href="https://www.instagram.com/istec_istaco/"><i class="icon-instagram2"style="color:#f4a105;"></i></a></li>
                <li><a href="#"><i class="icon-youtube" style="color:#f4a105;"></i></a></li>
                {{-- <li><a href="#" class="probootstrap-search-icon js-probootstrap-search"><i class="icon-search"></i></a></li> --}}
              </ul>
            </div>
          </div>
              </div>
            </div>
          </div>
        </div>
      </section>

      <section class="probootstrap-cta">
        <div class="container">
          <div class="row">
            <div class="col-md-12">
              <h2 class="probootstrap-animate" data-animate-effect="fadeInRight">Obtenez votre admission maintenant!</h2>
              <a href="/inscription" role="button" class="btn btn-primary btn-lg btn-ghost probootstrap-animate" data-animate-effect="fadeInLeft">S'INSCRIRE</a>
            </div>
          </div>
        </div>
      </section>
@endsection
@push('js')
<script>
   
</script>
@endpush
