@include('layout.head')
<div class="flex-center position-ref full-height">
    <div class="container-fluid">
        <div class="row">
            <div class="col-sm-5 boxConversao">
                <div class="col-md-5 col-sm-12 box">
                    <div class="title">
                        <span id="moeda" class="h1"></span>
                    </div>
                    <div class="inputQ">
                        <input id="quantidade" name="quantidade" class="form-control inputQuantidade" value="1" />
                    </div>
                    <div class="text">
                        <span id="valor"></span>
                    </div>
                </div>
            </div>
            <div class="col-sm-7 boxTexto">
                <div class="container">
                    <div class="row">
                        <div class="col-md-12 col-sm-12">
                            <span id="moeda" class="h1">Na Mìdia</span>
                            <div class="row">
                                <div class="col-12 pb-5">
                                    <div class="container">
                                        <!--SECTION START-->
                                        <section class="row">
                                            <!--Start slider news-->
                                            <div class="col-md-6 pb-0 pb-md-3 pt-2 pr-md-1">
                                                <div id="featured" class="carousel slide" data-ride="carousel" style="min-height: 100% !important; height: 100% !important;">
                                                    <!--carousel inner-->
                                                    <div class="carousel-inner newsItem" style="min-height: 100% !important; height: 100% !important;">
                                                        <!--Item slider-->
                                                        <!--end item slider-->
                                                    </div>
                                                    <!--end carousel inner-->

                                                    <!--navigation-->
                                                    <a class="carousel-control-prev" href="#featured" role="button" data-bs-slide="prev">
                                                        <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                                                        <span class="visually-hidden">Previous</span>
                                                    </a>
                                                    <a class="carousel-control-next" href="#featured" role="button" data-bs-slide="next">
                                                        <span class="carousel-control-next-icon" aria-hidden="true"></span>
                                                        <span class="visually-hidden">Next</span>
                                                    </a>
                                                </div>
                                            </div>
                                            <!--End slider news-->

                                            <!--Start box news-->
                                            <div class="col-md-6 pt-2 pl-md-1 mb-3 mb-lg-4">
                                                <div class="row miniBoxNews">
                                                    <!--news box-->
                                                    <!--end news box-->
                                                </div>
                                            </div>
                                            <!--End box news-->
                                        </section>
                                        <!--END SECTION-->
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <div class="container">
        <div class="col-sm-12 p-10 mb-6 mb-lg-4">
            <span id="" class="h1">Evolução Semanal</span>
            <canvas id="myChart" width="400" height="100"></canvas>
        </div>
    </div>
</div>

    <script src="{{ asset('asset/js/coinResult.js') }}"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/Chart.js/2.9.4/Chart.min.js"></script>
    <script src="{{ asset('asset/js/graphic.js') }}"></script>
    <script src="{{ asset('asset/js/select.js') }}"></script>
@include('layout.footer')
