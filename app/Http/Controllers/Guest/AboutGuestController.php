<?php

namespace App\Http\Controllers\Guest;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

class AboutGuestController extends Controller
{
    public function index()
    {
        $emails = ["geniekamaha@gmail.com", "kuetemariane@gmail.com", "gabrielwilfried@gmail.com", "vanelladzikang@gmail.com", "sikoumosages@gmail.com", "tegonguefolefk@gmail.com", "jordanjingang@gmail.com", "inestsof@gmail.com", "Pighageovanni@gmail.com", "stetiemndam@gmail.com", "dorine.magni@gmail.com"];
        $images = ["assets/images/Apropos/genie.png", "assets/images/Apropos/mariane.png", "assets/images/Apropos/gaby.png", "assets/images/Apropos/vane.png", "assets/images/Apropos/sagesse.png", "assets/images/Apropos/fideline.png", "assets/images/Apropos/jordan.png", "assets/images/Apropos/ines.png", "assets/images/Apropos/geovanni.png", "assets/images/Apropos/samira.png", "assets/images/Apropos/dorine.png"];
        $telephones = ["691586487", "654476973", "652249235", "681916790", "676757299", "672044430", "674707344", "650969784", "691299191", "652085204", "697003060"];
        $noms = ["Genie", "Mariane", "Gabriel", "Lidelle", "Sagesse", "Fideline", "Jordan", "Ines", "Geovanni", "Samiratou", "Dorine"];

        return view('user.layouts.partials.about', compact("emails", "images", "telephones", "noms"));
    }

    //
}
