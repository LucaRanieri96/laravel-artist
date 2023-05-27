@extends('layout.app')
@section('title', 'Contacts')
@section('content')
    <h1 class="text-center text-light mb-5">Our contacts</h1>
    <div class="container d-flex justify-content-around align-items-center flex-column flex-xl-row">

        <div class="p-3 text-center map_container col-12 col-xl-6">
            <iframe
                src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d101544.4194923651!2d-118.30696023101804!3d34.028853387345414!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x80c2c75ddc27da13%3A0xe22fdf6f254608f4!2sLos%20Angeles%2C%20California%2C%20Stati%20Uniti!5e0!3m2!1sit!2sit!4v1685134332006!5m2!1sit!2sit"
                class="w-100 h-100" style="border:0;border-radius:25px" allowfullscreen="" loading="lazy"
                referrerpolicy="no-referrer-when-downgrade"></iframe>
        </div>
        <div class="bg_transparent_dark container text-light p-4 rounded-5 p-3 col-12 col-xl-6">
            Azienda: LESD Booking Agency
            Sede: Los Angeles, CA
            <br>
            <br>
            Indirizzo: 1234 Hollywood Boulevard, Los Angeles, CA 90001
            Telefono principale: +1 (555) 123-4567
            Email generale: info@LESDbookingagency.com
            Partita IVA: 1234567890
            <br>
            <br>
            Ufficio Legale:
            Email: legal@LESDbookingagency.com
            Telefono: +1 (555) 234-5678
            Dipartimento Marketing:
            <br>
            <br>
            Email: marketing@LESDbookingagency.com
            Telefono: +1 (555) 345-6789
            Assistenza Clienti:
            <br>
            <br>
            Email: support@LESDbookingagency.com
            Telefono: +1 (555) 789-0123
        </div>
    </div>
@endsection
