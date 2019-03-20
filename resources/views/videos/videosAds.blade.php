@extends('layouts.app')

@section('content')
    <div class="container">
        <div class="row">
            <div class="col-sm mb-4 mx-2">
                <!--Modal: Name-->
                <div class="modal fade" id="modal1" tabindex="-1" role="dialog" aria-labelledby="myModalLabel"
                     aria-hidden="true">
                    <div class="modal-dialog modal-lg" role="document">
                        <!--Content-->
                        <div class="modal-content">
                            <!--Body-->
                            <div class="modal-body mb-0 p-0">
                                <div class="embed-responsive embed-responsive-16by9 z-depth-1-half">
                                    <iframe width="560" height="315" src="https://www.youtube.com/embed/kO1PSkzTsYc"
                                            frameborder="0"
                                            allow="accelerometer; autoplay; encrypted-media; gyroscope; picture-in-picture"
                                            allowfullscreen></iframe>
                                </div>
                            </div>
                            <!--Footer-->
                            <div class="modal-footer justify-content-center">
                                <button type="button" class="btn btn-outline-danger btn-rounded btn-md"
                                        data-dismiss="modal">Close
                                </button>
                            </div>

                        </div>
                        <!--/.Content-->

                    </div>
                </div>
                <!--Modal: Name-->

                <a class="card" style="width: 30rem; cursor: pointer" data-toggle="modal" data-target="#modal1">
                    <img class="card-img-top" src="{{ asset('img/aulaEng.png') }}"
                         alt="video">
                    <div class="card-body">
                        <p class="card-text">Engenharia de Software - Aula 01 - Modelos de processo de software e
                            atividades de software</p>
                    </div>
                </a>
            </div>
            <!-- Grid column -->

            <!-- Grid column -->
            <div class="col-sm mb-4 mx-2">

                <!--Modal: Name-->
                <div class="modal fade" id="modal2" tabindex="-1" role="dialog" aria-labelledby="myModalLabel"
                     aria-hidden="true">
                    <div class="modal-dialog modal-lg" role="document">

                        <!--Content-->
                        <div class="modal-content">
                            <!--Body-->
                            <div class="modal-body mb-0 p-0">

                                <div class="embed-responsive embed-responsive-16by9 z-depth-1-half">
                                    <iframe width="560" height="315" src="https://www.youtube.com/embed/sTX0UEplF54"
                                            frameborder="0"
                                            allow="accelerometer; autoplay; encrypted-media; gyroscope; picture-in-picture"
                                            allowfullscreen></iframe>
                                </div>

                            </div>

                            <!--Footer-->
                            <div class="modal-footer justify-content-center">
                                <button type="button" class="btn btn-outline-danger btn-rounded btn-md"
                                        data-dismiss="modal">Close
                                </button>
                            </div>

                        </div>
                        <!--/.Content-->

                    </div>
                </div>
                <!--Modal: Name-->

                <a class="card" style="width: 30rem; cursor: pointer" data-toggle="modal" data-target="#modal2">
                    <img class="card-img-top" src="{{ asset('img/aulaJava.png') }}"
                         alt="video">
                    <div class="card-body">
                        <p class="card-text">Curso de Java #01 - História do Java - Gustavo Guanabara</p>
                    </div>
                </a>
            </div>
            <!-- Grid column -->
        </div>
        <div class="row">
            <!-- Grid column -->
            <div class="col-sm mb-4 mx-2">

                <!--Modal: Name-->
                <div class="modal fade" id="modal3" tabindex="-1" role="dialog" aria-labelledby="myModalLabel"
                     aria-hidden="true">
                    <div class="modal-dialog modal-lg" role="document">

                        <!--Content-->
                        <div class="modal-content">

                            <!--Body-->
                            <div class="modal-body mb-0 p-0">

                                <div class="embed-responsive embed-responsive-16by9 z-depth-1-half">
                                    <iframe width="560" height="315" src="https://www.youtube.com/embed/v0gFlniWVyY"
                                            frameborder="0"
                                            allow="accelerometer; autoplay; encrypted-media; gyroscope; picture-in-picture"
                                            allowfullscreen></iframe>
                                </div>

                            </div>

                            <!--Footer-->
                            <div class="modal-footer justify-content-center">
                                <button type="button" class="btn btn-outline-danger btn-rounded btn-md"
                                        data-dismiss="modal">Close
                                </button>

                            </div>
                        </div>
                        <!--/.Content-->
                    </div>
                </div>
                <!--Modal: Name-->
                <a class="card" style="width: 30rem; cursor: pointer" data-toggle="modal" data-target="#modal3">
                    <img class="card-img-top" src="{{ asset('img/aulaMint.png') }}"
                         alt="video">
                    <div class="card-body">
                        <p class="card-text">😮 Linux Mint 19.1 - O que já era BOM ficou ainda MELHOR! 🐧</p>
                    </div>
                </a>
            </div>
            <!-- Grid column -->
            <div class="col-sm mb-4 mx-2">

                <!--Modal: Name-->
                <div class="modal fade" id="modal4" tabindex="-1" role="dialog" aria-labelledby="myModalLabel"
                     aria-hidden="true">
                    <div class="modal-dialog modal-lg" role="document">

                        <!--Content-->
                        <div class="modal-content">

                            <!--Body-->
                            <div class="modal-body mb-0 p-0">

                                <div class="embed-responsive embed-responsive-16by9 z-depth-1-half">
                                    <iframe width="560" height="315" src="https://www.youtube.com/embed/-3YnsQ5-qjw"
                                            frameborder="0"
                                            allow="accelerometer; autoplay; encrypted-media; gyroscope; picture-in-picture"
                                            allowfullscreen></iframe>
                                </div>

                            </div>

                            <!--Footer-->
                            <div class="modal-footer justify-content-center">
                                <button type="button" class="btn btn-outline-danger btn-rounded btn-md"
                                        data-dismiss="modal">Close
                                </button>

                            </div>

                        </div>
                        <!--/.Content-->

                    </div>
                </div>
                <!--Modal: Name-->
                <a class="card" style="width: 30rem; cursor: pointer" data-toggle="modal" data-target="#modal4">
                    <img class="card-img-top" src="{{ asset('img/aulaFormatar.png') }}"
                         alt="video">
                    <div class="card-body">
                        <p class="card-text">Como fazer Dual Boot com Windows 10 e Linux (Ubuntu)</p>
                    </div>
                </a>
            </div>
        </div>
    </div>




@endsection