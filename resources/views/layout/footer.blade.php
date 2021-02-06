<!-- Footer -->
<footer class="footer-distributed">
    <div class="container">
        <div class="footer-right">

            <a href="#"><i class="fab fa-facebook"></i></a>
            <a href="#"><i class="fab fa-instagram"></i></a>

        </div>

        <div class="footer-left">

        <p class="footer-links">
            <a class="link-1" href="/">Início</a>

            <a href="BTC">Bitcoin</a>
        </p>

        <p><b>Coin Now | {{ \Carbon\Carbon::now()->format('Y') }}</b></p>
    </div>
    </div>
</footer>
<!-- Footer -->

<script
    src="https://code.jquery.com/jquery-3.5.1.min.js"
    integrity="sha256-9/aliU8dGd2tb6OSsuzixeV4y/faTqgFtohetphbbj0="
    crossorigin="anonymous"></script>

<script src="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.1/js/all.min.js"></script>

<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta1/dist/js/bootstrap.bundle.min.js" integrity="sha384-ygbV9kiqUc6oa4msXn9868pTtWMgiQaeYH7/t7LECLbyPA2x65Kgf80OJFdroafW" crossorigin="anonymous"></script>

<script src="https://cdnjs.cloudflare.com/ajax/libs/Chart.js/2.9.4/Chart.min.js"></script>

<script src="{{ asset('asset/js/app.js') }}" ></script>
<script src="{{ asset('asset/js/coinResult.js') }}"></script>
<script src="{{ asset('asset/js/graphic.js') }}"></script>
<script src="{{ asset('asset/js/select.js') }}"></script>
</body>
</html>
