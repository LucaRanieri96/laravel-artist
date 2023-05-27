<footer class="text-white ">
    <div class="container pt-4">
        <div class="row row-cols-1 row-cols-md-2 row-cols-lg-4">
            <div class="col">
                <h4>TicketOne</h4>
                <ul class="list-unstyled">
                    <li><a href="">Termini e condizioni d’acquisto</a></li>
                    <li><a href="">Privacy</a></li>
                    <li><a href="">Informativa Cookie</a></li>
                    <li><a href="">ADR/ODR - Conciliazione paritetica</a></li>
                    <li><a href="">Contatti Business</a></li>
                </ul>
                <!-- /.card -->
            </div>
            <!-- /.col -->
            <div class="col">
                <h4>Società</h4>
                <ul class="list-unstyled">
                    <li><a href="">Chi siamo</a></li>
                    <li><a href="">Eventim International</a></li>
                    <li><a href="">Lavora con noi</a></li>
                    <li><a href="">Comunicati Stampa</a></li>
                    <li><a href="">Modello 231</a></li>
                </ul>
                <!-- /.card -->
            </div>
            <!-- /.col -->
            <div class="col">
                <h4>Servizi</h4>
                <ul class="list-unstyled">
                    <li><a href="">Newsletter</a></li>
                    <li><a href="">Gift Voucher</a></li>
                    <li><a href="">Cambio nominativo</a></li>
                    <li><a href="">Rivendita</a></li>
                    <li><a href="">TicketOne Magazine</a></li>
                </ul>
                <!-- /.card -->
            </div>
            <!-- /.col -->
            <div class="col d-flex align-items-center py-3">
                @foreach (config('footerInfo') as $icon)
                    <div class="text-dark">
                        <a class="text-dark mx-2" href="#">
                            <img src="{{ Vite::asset('resources/img/' . $icon['icon']) }}" alt="{{ $icon['name'] }}">
                        </a>

                    </div>
                @endforeach
            </div>
            <!-- /.col -->
        </div>
        <!-- /.row row-cols-1 row-cols-lg-3 -->
    </div>
    <div class="text-center py-3">
        &#169; Copyright LESD
    </div>
    <!-- /.container -->
</footer>
