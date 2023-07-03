@extends('guest.layouts.layout')

@section('content')
    @include('guest.includes.navbanner')
    <div class="about-area ptb-100">
        <div class="container">
            <div class="row">
                <div class="col-12">
                    <div class="about-wrap text-center ">

                        <div class="container  p-5 m-4 text-center"
                            style="font-size: 16px; box-shadow: 0em 0em 0em 0em ; border-radius: 10px;">
                            <h3>CLOUDEAL DESCRIPTION! </h3>
                            <p class="text-justify" style=" font-size: 16px">
                                <span style="font-weight: bolder; font-size: 25px">B</span>ienvenue sur
                                <span style="font-weight: bolder; font-size: 25px">CloudDeal</span> , la plateforme en ligne
                                d'échange d'articles entre passionnés. Notre mission :
                                créer une communauté dynamique où chacun peut partager, échanger et découvrir des trésors
                                inattendus. Chez CloudDeal, vos biens trouvent une nouvelle vie entre les mains d'autres
                                membres partageant vos intérêts. Notre plateforme sécurisée et intuitive facilite les
                                échanges, avec un système de vérification des utilisateurs et de validation des annonces
                                pour garantir la confiance. Rejoignez-nous dès maintenant pour une expérience d'échange
                                simple et agréable, où vous pouvez donner, recevoir et faire des échanges passionnants.
                            </p>


                            <p class="text-center">
                                <span style="font-weight: bolder; font-size: 25px">D</span>onnez une nouvelle
                                vie aux objets sur <span style="font-weight: bolder; font-size: 25px">CloudDeal</span> Notre
                                équipe de support dévouée est là
                                pour répondre à vos questions et résoudre les problèmes, afin de vous assurer une expérience
                                fluide et agréable. Rejoignez notre communauté d'échangeurs enthousiastes et découvrez un
                                monde d'opportunités. Ensemble, donnons une nouvelle vie aux objets et embrassons une
                                culture d'échange dynamique.
                            </p>

                            <h3 class="p-2 ">OUR TEAM </h3>

                            <div class="row">
                                @for ($i = 0; $i < 11; $i++)
                                    @if ($i % 3 === 0 && $i != 0)
                            </div>
                            <div class="row">
                                @endif
                                <div class="col-md-4 p-2">
                                    <div class="card border-0 p-1">

                                        <img src="{{ $images[$i] }}"
                                            class="card-img-top object-fit-cover rounded-circle p-1 bg-danger"
                                            alt="">{{ $noms[$i] }}
                                        <div class="card-body text-left text-center">
                                            <h6><span><i class="fa fa-user m-2 rounded"
                                                        style="color:#ff0000;"></i></span>{{ $noms[$i] }}
                                            </h6>

                                            <a class="card-text d-block" href="mailto:{{ $emails[$i] }}">
                                                <span>
                                                    <i class="fa fa-google m-2  rounded" style="color: #ff0000;">
                                                    </i>
                                                </span>
                                                {{ $emails[$i] }}
                                            </a>


                                            <a class="card-text  d-block " href="https:wa.me/237{{ $telephones[$i] }}"><i
                                                    class="fa fa-phone rounded m-2" style="color: #ff0000;"></i>

                                                {{ $telephones[$i] }}</a>
                                        </div>
                                    </div>
                                </div>
                                @endfor
                            </div>
                        </div>




                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
