@extends('layouts.app')

@section('content')
    <div class="row">


        <div class="col-lg-4 col-md-12 mb-4">

            <!--Modal: Name-->
            <div class="modal fade" id="modal1" tabindex="-1" role="dialog" aria-labelledby="myModalLabel"
                 aria-hidden="true">
                <div class="modal-dialog modal-lg" role="document">
                    <!--Content-->
                    <div class="modal-content">
                        <!--Body-->
                        <div class="modal-body mb-0 p-0">
                            <h5 class="text-center w-100 m-4 ">Faculdade de Tecnologia de
                                Garça</h5>
                            <div class="row justify-content-center">
                                <div class="card mx-3" style="width: 14rem;">
                                    <img class="card-img-top" src="img/fatecGarca.jpg" alt="Card image cap">
                                    <div class="card-body">
                                        <h5 class="card-title text-center">Playlist Curso -<br> A.D.S.</h5>
                                        <a href="{{url('videos/1')}}" class="btn btn-outline-sbaa w-100">Selecionar
                                            Curso</a>
                                    </div>
                                </div>
                                <div class="card mx-3" style="width: 14rem;">
                                    <img class="card-img-top" src="img/fatecGarca.jpg" alt="Card image cap">
                                    <div class="card-body">
                                        <h5 class="card-title text-center">Playlist Curso -<br> G.E.</h5>
                                        <a data-toggle="modal" data-target="#modal1" class="btn btn-outline-sbaa w-100">Selecionar
                                            Curso</a>
                                    </div>
                                </div>
                                <div class="card mx-3" style="width: 14rem;">
                                    <img class="card-img-top" src="img/fatecGarca.jpg" alt="Card image cap">
                                    <div class="card-body">
                                        <h5 class="card-title text-center">Playlist Curso - Mecatronica</h5>
                                        <a data-toggle="modal" data-target="#modal1" class="btn btn-outline-sbaa w-100">Selecionar
                                            Curso</a>
                                    </div>
                                </div>
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
            <div class="card mx-3" style="width: 18rem;">
                <img class="card-img-top" src="img/fatecGarca.jpg" alt="Card image cap">
                <div class="card-body">
                    <h5 class="card-title text-center">Playlist - Faculdade de Tecnologia de Garça</h5>
                    <a data-toggle="modal" data-target="#modal1" class="btn btn-outline-sbaa w-100">Selecionar
                        Faculdade</a>
                </div>
            </div>
        </div>

        <div class="col-lg-4 col-md-12 mb-4">

            <!--Modal: Name-->
            <div class="modal fade" id="modal2" tabindex="-1" role="dialog" aria-labelledby="myModalLabel"
                 aria-hidden="true">
                <div class="modal-dialog modal-lg" role="document">
                    <!--Content-->
                    <div class="modal-content">
                        <!--Body-->
                        <div class="modal-body mb-0 p-0">
                            <h5 class="text-center w-100 m-4 ">Faculdade de Tecnologia de
                                Bauru</h5>
                            <div class="row justify-content-center">
                                <div class="card mx-3" style="width: 14rem;">
                                    <img class="card-img-top" src="img/fatecGarca.jpg" alt="Card image cap">
                                    <div class="card-body">
                                        <h5 class="card-title text-center">Playlist Curso -<br>Banco de Dados</h5>
                                        <a data-toggle="modal" data-target="#modal1" class="btn btn-outline-sbaa w-100">Selecionar
                                            Curso</a>
                                    </div>
                                </div>
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
            <div class="card mx-3" style="width: 18rem;">
                <img class="card-img-top" src="img/fatecBauru.jpg" alt="Card image cap">
                <div class="card-body">
                    <h5 class="card-title text-center">Playlist - Faculdade de Tecnologia de Bauru</h5>
                    <a data-toggle="modal" data-target="#modal2" class="btn btn-outline-sbaa w-100">Selecionar
                        Faculdade</a>
                </div>
            </div>
        </div>
    </div>
@endsection