<?php

namespace App\Http\Controllers\Guest;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

class AboutGuestController extends Controller
{
    public function index()
    {
        $emails = ["geniekamaha@gmail.com", "kuetemariane544@gmail.com", "gabrielwilfried08@gmail.com", "vanelladzikang1@gmail.com", "sikounmosagesse@gmail.com", "tegonguefolefackf@gmail.com", "jordannjingang1@gmail.com", "inestsof@gmail.com", "Pighageovanni@gmail.com", "stetiemndam@gmail.com", "dorine.magni2002@gmail.com"];
        $images = [asset("assets/images/Apropos/genie.png"), asset("assets/images/Apropos/mariane.png"), asset("assets/images/Apropos/gaby.png"), asset("assets/images/Apropos/lidelle.png"), asset("assets/images/Apropos/sagesse.png"), asset("assets/images/Apropos/fideline.png"), asset("assets/images/Apropos/jordan.png"), asset("assets/images/Apropos/ines.png"), asset("assets/images/Apropos/geovanni.png"), asset("assets/images/Apropos/samira.png"), asset("assets/images/Apropos/dorine.png")];
        $telephones = ["691586487", "654476973", "652249235", "681916790", "676757299", "672044430", "674707344", "650969784", "691299191", "652085204", "697003060"];
        $noms = ["Genie", "Mariane", "Gabriel", "Lidelle", "Sagesse", "Fideline", "Jordan", "Ines", "Geovanni", "Samiratou", "Dorine"];
        //dd($images);
        return view('guest.layouts.pages.about', compact("emails", "images", "telephones", "noms"));
    }
}
