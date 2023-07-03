document.addEventListener('DOMContentLoaded', function() {
    var btnSignaler = document.getElementById('btn-signaler');
    var zoneRaison = document.getElementById('zone-raison');

    btnSignaler.addEventListener('click', function() {
        zoneRaison.style.display = 'block';
    });
});