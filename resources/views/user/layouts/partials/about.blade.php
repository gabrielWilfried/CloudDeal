@extends('user.layouts.layout')

@section('content')
    @include('user.includes.breadcumb')
    <div class="about-area ptb-100">
        <div class="container">
            <div class="row">
                <div class="col-12">
                    <div class="about-wrap text-center">
                        <h3>CLOUDEAL DESCRIPTION! </h3>

                        <p>Bienvenue sur CloudDeal, la plateforme en ligne qui facilite l'échange d'articles et de produits
                            entre
                            utilisateurs passionnés comme vous. Notre mission est
                            de créer une communauté dynamique où chacun peut partager, échanger et découvrir des trésors
                            inattendus.Chez CloudDeal, nous croyons fermement à l'idée que les biens que vous possédez
                            peuvent trouver
                            une nouvelle vie
                            entre les mains de quelqu'un d'autre. Que vous souhaitiez échanger des vêtements, des appareils
                            électroniques, ou tout autre article, notre plateforme intuitive vous permet de connecter
                            avec d'autres membres partageant les mêmes intérêts
                            <br>
                        </p>
                        <p>
                            Nous avons conçu CloudDeal pour rendre l'échange simple, sécurisé et agréable. Notre système de
                            vérification des utilisateurs et notre processus de validation des produits assurent une
                            expérience de confiance. Vous pouvez naviguer à travers les annonces, interagir avec d'autres
                            membres, et conclure des échanges en toute sérénité. Chez CloudDeal, votre satisfaction est
                            notre priorité. Notre équipe de support dévouée est là pour répondre à vos questions, résoudre
                            les éventuels problèmes et vous assurer une expérience fluide et agréable tout au long de votre
                            parcours sur notre plateforme.
                            <br>
                            Nous sommes ravis de vous accueillir dans notre communauté d'échangeurs enthousiastes. Rejoignez
                            CloudDeal dès maintenant et découvrez un monde d'opportunités où vous pouvez donner, recevoir et
                            faire des échanges passionnants. Ensemble, nous pouvons donner une nouvelle vie aux objets
                        </p>

                        <h3>OUR TEAM </h3>

                        <div class="row">
                            @for ($i = 0; $i < 11; $i++)
                                @if ($i % 4 === 0 && $i != 0)
                        </div>
                        <div class="row">
                            @endif
                            <div class="col-md-3 p-2">
                                <div class="card  p-1">
                                    <img src="{{ $images[$i] }}" class="card-img-top" alt="...">
                                    <div class="card-body ">
                                        <a class="card-text  d-block "
                                            href="mailto:{{ $emails[$i] }}">{{ $emails[$i] }}</a>
                                        <a class="card-text  d-block "
                                            href="https:wa.me/237{{ $telephones[$i] }}">{{ $telephones[$i] }}</p>
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
@endsection
