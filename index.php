<?php include('layout/head.html'); ?>
<main>
    <section class="section-header overflow-hidden pt-7 pt-lg-8 bg-primary text-white">
        <div class="container">
            <div class="row">
                <div class="col-5 text-center bg-warning">
                    <div class="col-12 text-center pt-3">
                        <h1>Conversão de <span id="moeda">Bitcoin</span></h1>
                    </div>
                    <div class="inputQ pt-5 pb-5">
                        <input id="quantidade" name="quantidade" class="form-control inputQuantidade" value="1" />
                    </div>
                    <div class="text">
                        <span id="valor"></span>
                    </div>
                </div>
                <div class="col-7 text-center bg-roxo" style="min-height: 70vh;">
                    <div class="col-12 text-center pt-3">
                        <h1>Na mídia</h1>
                    </div>
                    <div class="glide mt-5 mb-5">
                        <div data-glide-el="track" class="glide__track">
                            <ul class="glide__slides"></ul>
                        </div>
                        <div class="glide__arrows" data-glide-el="controls">
                            <button class="glide__arrow glide__arrow--left" data-glide-dir="<"><i class="fa fa-chevron-left"></i></button>
                            <button class="glide__arrow glide__arrow--right" data-glide-dir=">"><i class="fa fa-chevron-right"></i></button>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <figure class="position-absolute bottom-0 left-0 w-100 d-none d-md-block mb-n2">
            <svg class="fill-gray-100" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 3000 185.4">
                <path d="M3000,0v185.4H0V0c496.4,115.6,996.4,173.4,1500,173.4S2503.6,115.6,3000,0z"></path>
            </svg>
        </figure>
    </section>
</main>

<?php include('layout/footer.html'); ?>
