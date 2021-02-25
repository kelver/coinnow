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
    <section class="section section-lg bg-soft">
        <div class="container"><h2 class="border-bottom border-gray-300 mb-5 pb-3">Got questions?</h2>
            <div class="row faq-section txtBox"></div>
            <div class="row mt-lg-5 mt-5">
                <div class="col text-center"><p class="text-italic">Didn't find what you were looking for? No
                        biggie!</p><a href="https://themesberg.com/contact" class="btn btn-sm btn-secondary"
                                      target="_blank">Contact us</a></div>
            </div>
        </div>
    </section><section class="section bg-dark">
        <div class="container">
            <div class="row justify-content-center text-white mb-6">
                <div class="col-12 col-lg-9 text-center"><h2 class="display-3 fw-light mb-4">Choose the right plan for
                        your business</h2>
                    <p class="lead">You have at least <span
                                class="fw-bold text-secondary">Free 6 Months of Updates</span> and <span
                                class="fw-bold text-secondary">Premium Support</span> on each package. You also have 30 days
                        to request a refund if you're not happy with your purchase.</p></div>
            </div>
            <div class="mt-lg-4 row">
                <div class="text-center col-12"><h2 class="h5 text-white fw-normal mb-4">Available in the following
                        technologies:</h2>
                    <div><a class="me-3 card-link"
                            href="https://themesberg.com/product/admin-dashboard/volt-premium-bootstrap-5-dashboard"
                            target="_blank"><img src="assets/img/technologies/bootstrap-5-logo.svg"
                                                 class="image image-sm"> </a><a class="me-3 card-link"
                                                                                href="https://themesberg.com/product/dashboard/volt-pro-react"
                                                                                target="_blank"><img
                                    src="assets/img/technologies/react-logo.svg" class="image image-sm"></a></div>
                </div>
            </div>
        </div>
    </section>
    <section class="section section-lg line-bottom-soft">
        <div class="container">
            <div class="row justify-content-center mb-5 mb-lg-6">
                <div class="col-12 text-center"><h2 class="h1 px-lg-5">What's inside?</h2>
                    <p class="lead px-lg-8">We have carefully crafted the perfect folder structure to ensure that
                        finding the files you're looking for are easily reachable and well organized.</p></div>
            </div>
            <div class="row d-flex align-items-center">
                <div class="col-12 col-lg-6 mb-4">
                    <div class="d-none d-lg-block mt-5"><h4>You need only HTML, CSS and Javascript?</h4>
                        <p class="lead mb-4">Don't worry, we got you covered. We have a folder called <code
                                class="text-danger">html&css</code> which includes only the basic HTML5, CSS3 and
                            Javascript technologies.</p><a
                                href="https://themesberg.com/docs/volt-bootstrap-5-dashboard/getting-started/file-structure/"
                                target="_blank" class="btn btn-md btn-secondary text-dark"><i
                                class="fas fa-book me-2"></i> Docs 3</a></div>
                </div>
                <div class="col-12 col-lg-6 order-lg-first d-flex justify-content-center">
                    <ul class="d-block fmw-100 list-style-none folder-structure">
                        <li data-bs-toggle="tooltip" data-bs-placement="left"
                            title="Main folder that you will be working with"><i class="fas fa-folder me-2"></i>src
                        </li>
                        <li>
                            <ul class="list-style-none ps-4">
                                <li data-bs-toggle="tooltip" data-bs-placement="left"
                                    title="CSS, Images, Fonts and Javascript"><i class="fas fa-folder me-2"></i> assets
                                </li>
                                <li data-bs-toggle="tooltip" data-bs-placement="left" title="HTML templates"><i
                                        class="fas fa-folder me-2"></i> pages
                                </li>
                                <li data-bs-toggle="tooltip" data-bs-placement="left"
                                    title="Partials are HTML snippets that are included in multiple pages, such as the menu or footer">
                                    <i class="fas fa-folder me-2"></i> partials
                                </li>
                                <li data-bs-toggle="tooltip" data-bs-placement="left" title="Sass source files"><i
                                        class="fas fa-folder me-2"></i> scss
                                </li>
                                <li data-bs-toggle="tooltip" data-bs-placement="left"
                                    title="The page you're looking at right now. Call it inception."><i
                                        class="fab fa-html5 me-2 text-secondary"></i> index.html
                                </li>
                            </ul>
                        </li>
                        <li data-bs-toggle="tooltip" data-bs-placement="left"
                            title="Rocket with only HTML, CSS and Javascript"><i
                                class="fas fa-folder me-2 text-muted"></i> html&css
                        </li>
                        <li data-bs-toggle="tooltip" data-bs-placement="left"
                            title="Temporary folder that is created when serving files with BrowserSync"><i
                                class="fas fa-folder text-muted me-2"></i>.temp
                        </li>
                        <li data-bs-toggle="tooltip" data-bs-placement="left" title="Minified version of the project"><i
                                class="fas fa-folder me-2 text-muted"></i> dist
                        </li>
                        <li data-bs-toggle="tooltip" data-bs-placement="left"
                            title="Project dependencies from package.json"><i class="fas fa-folder text-muted me-2"></i>
                            node_modules
                        </li>
                        <li data-bs-toggle="tooltip" data-bs-placement="left"
                            title="Development workflow commands. We have them well documented."><i
                                class="fab fa-js-square me-2 text-warning"></i> gulpfile.js
                        </li>
                        <li data-bs-toggle="tooltip" data-bs-placement="left" title="Project details and dependencies.">
                            <i class="fas fa-file-code me-2 text-tertiary"></i> package.json
                        </li>
                        <li data-bs-toggle="tooltip" data-bs-placement="left" title="No project can miss a README :)"><i
                                class="fas fa-file-code me-2 text-tertiary"></i> README.md
                        </li>
                        <li data-bs-toggle="tooltip" data-bs-placement="left"
                            title="This file ensures that generated files and folder are ignored by Git. (eg. node_modules)">
                            <i class="fas fa-file-code me-2 text-tertiary"></i> .gitignore
                        </li>
                    </ul>
                </div>
                <div class="col-12 mt-5 d-lg-none"><h5>You need only HTML, CSS and Javascript?</h5>
                    <p>Don't worry, we got you covered. We have a folder called <code
                            class="text-danger">html&css</code> which includes only the basic HTML5, CSS3 and Javascript
                        technologies.</p></div>
            </div>
        </div>
    </section>
    <section class="section bg-dark">
        <div class="container">
            <div class="row justify-content-center text-white mb-6">
                <div class="col-12 col-lg-9 text-center"><h2 class="display-3 fw-light mb-4">Choose the right plan for
                    your business</h2>
                    <p class="lead">You have at least <span
                            class="fw-bold text-secondary">Free 6 Months of Updates</span> and <span
                            class="fw-bold text-secondary">Premium Support</span> on each package. You also have 30 days
                        to request a refund if you're not happy with your purchase.</p></div>
            </div>
            <div class="mt-lg-4 row">
                <div class="text-center col-12"><h2 class="h5 text-white fw-normal mb-4">Available in the following
                    technologies:</h2>
                    <div><a class="me-3 card-link"
                            href="https://themesberg.com/product/admin-dashboard/volt-premium-bootstrap-5-dashboard"
                            target="_blank"><img src="assets/img/technologies/bootstrap-5-logo.svg"
                                                 class="image image-sm"> </a><a class="me-3 card-link"
                                                                                href="https://themesberg.com/product/dashboard/volt-pro-react"
                                                                                target="_blank"><img
                            src="assets/img/technologies/react-logo.svg" class="image image-sm"></a></div>
                </div>
            </div>
        </div>
    </section>
</main>

<?php include('layout/footer.html'); ?>
