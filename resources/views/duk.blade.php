@extends('layouts.app')

@section('title') DUK @stop

@section('content')
    <div class="container py-45px">
        <div class="lg:text-18px font-light mb-24px">
            Dažniausiai užduodami klausimai
        </div>
        <div class="cms text-14px tracking-0.26px p-24px bg-white border border-blue-5 rounded-10px shadow-custom-1 mb-4">
            <h3 class="mb-20px">Kaip galėčiau ištrinti/redaguoti savo skelbimą?</h3>
            <div class="font-light">
                <p>Jeigu skelbimą dėjote kaip registruotas vartotojas, prisijunkite prie Skelbiu.lt portalo, eikite į „Mano skelbimai“ ir ties norimu skelbimu paspauskite „Pašalinti“.</p>
                <p>Jeigu skelbimą įkėlėte kaip neregistruotas vartotojas, skelbimo įkėlimo dieną, el. paštu arba SMS žinute, turėjote gauti jo prisijungimo duomenis.</p>
                <p>Jeigu prisijungimo duomenų neturite, atsidarykite savo skelbimą Skelbiu.lt portale ir virš jo pavadinimo spauskite langelį "Tavo skelbimas?", tuomet "Redaguoti" ir "Pamiršote prisijungimus?".</p>
            </div>
        </div>
        <div class="cms text-14px tracking-0.26px p-24px bg-white border border-blue-5 rounded-10px shadow-custom-1 mb-4">
            <h3 class="mb-20px">Kaip veikia skelbimo iškėlimas žvaigždutėmis?</h3>
            <div class="font-light">
                <p>Žvaigždutėmis skelbimas iškeliamas aukščiau sąraše – kuo daugiau žvaigždučių užsakyta skelbimui, tuo aukščiau sąraše jis bus rodomas. Jei keli skelbimai yra su vienodu žvaigždučių skaičiumi, aukščiau bus rodomas tas, kurio žvaigždutės užsakytos ilgesniam laikui. Skelbimo iškėlimą užsakyti galite prisijungę prie savo skelbimo paskyros. Vienos žvaigždutės kaina vienai parai yra 0,75 €, dvi žvaigždutės vienai parai atitinkamai kainuos 1,5 € ir t.t.</p>
            </div>
        </div>
        <div class="cms text-14px tracking-0.26px p-24px bg-white border border-blue-5 rounded-10px shadow-custom-1 mb-4">
            <h3 class="mb-20px">Kas yra asmeninis Skelbiu.lt puslapis ir kaip juo naudotis?</h3>
            <div class="font-light">
                <p>Jei esate registruotas portalo vartotojas, Jums gali būti sugeneruotas (jeigu taip pažymėjote savo paskyros nustatymuose) asmeninio Skelbiu.lt puslapio adresas. Dedant skelbimą informacijos pildymo formos apačioje galite pažymėti varnelę "Rodyti šį skelbimą asmeniniame puslapyje". Tuomet skelbime bus rodoma Jūsų asmeninio puslapio nuoroda, ant kurios paspaudę kiti vartotojai atskirame puslapyje galės matyti visą Jūsų prekių/paslaugų asortimentą (skelbimus, kuriuos pasirinkote rodyti asmeniniame puslapyje).</p>
            </div>
        </div>
    </div>
@endsection
