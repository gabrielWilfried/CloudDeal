<!-- <div class="google-map" id="maCarte" >
    <div class="contact-map">
        <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d193595.9147703055!2d-74.11976314309273!3d40.69740344223377!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x89c24fa5d33f083b%3A0xc80b8f06e177fe62!2sNew+York%2C+NY%2C+USA!5e0!3m2!1sen!2sbd!4v1547528325671" allowfullscreen></iframe>
    </div>
</div> -->

<link rel="stylesheet" href="https://unpkg.com/leaflet@1.7.1/dist/leaflet.css">

 <div id="maCarte" style="height: 400px;"></div>

 @section('script')
 <script src="{{ asset('assets/js/contact.js') }}"></script>
    <script src="https://unpkg.com/leaflet@1.7.1/dist/leaflet.js"></script>
    <script>
        // Créer la carte et définir les coordonnées du centre et le niveau de zoom
        var carte = L.map('maCarte').setView([5.4441, 10.0704], 13);

        // Ajouter un fond de carte OpenStreetMap
        L.tileLayer('https://{s}.tile.openstreetmap.org/{z}/{x}/{y}.png').addTo(carte);

        // Ajouter un marqueur pour Dschang
        var marker = L.marker([5.4439, 10.0716]).addTo(carte);
        marker.bindPopup("Dschang, Cameroun").openPopup();
    </script>
@endsection