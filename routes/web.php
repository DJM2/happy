<?php

use Illuminate\Support\Facades\Route;
use App\Mail\BookMailable;
use Illuminate\Support\Facades\Mail;

/*INGLES*/
Route::get('/', function () {return view('index');})->name('index');
Route::get('en/traditional', function(){return view('en/traditional');})->name('traditional');
Route::get('en/adventure', function(){return view('en/adventure');})->name('adventure');
Route::get('alternatives', function(){return view('alternatives');})->name('alternatives-english');
Route::get('en/tours-in-train', function(){return view('en/tours-in-train');})->name('train-english');
Route::get('about-us', function(){return view('about-us');})->name('about-us');
Route::get('terms-and-conditions', function(){return view('terms-and-conditions');})->name('terms');
Route::get('faqs', function(){return view('faqs');})->name('faqs');
Route::get('testimonials', function(){return view('testimonials');})->name('testimonials');
Route::get('en/tours-around-peru', function(){return view('en/tours-around-peru');})->name('around');

/*Traditional tours*/
Route::get('en/cusco-city-tour', function(){return view('en/cusco-city-tour');})->name('city-tour-english');
Route::get('en/happy-experience-tour', function(){return view('en/happy-experience-tour');})->name('happy-experience-tour');
Route::get('en/happy-city-tour-full-day', function(){return view('en/happy-city-tour-full-day');})->name('happy-city-tour-english');
Route::get('en/sacred-valley-2-days', function(){return view('en/sacred-valley-2-days');})->name('sacred-valley-2-days');
Route::get('en/sacred-valley-full-day', function(){return view('en/sacred-valley-full-day');})->name('sacred-valley-of-the-incas');
Route::get('en/maras-moray-salineras-tour', function(){return view('en/maras-moray-salineras-tour');})->name('maras-moray-salt-mines');
/*Adventure Tours */
Route::get('en/salkantay-trek-tour-5-days', function(){return view('en/salkantay-trek-tour-5-days');})->name('salkantay-5-days');
Route::get('en/inca-trail-4-days', function(){return view('en/inca-trail-4-days');})->name('inca-trail-4-days');
Route::get('en/choquequirao-4-days-tour', function(){return view('en/choquequirao-4-days-tour');})->name('tour-choquequirao-4-days');
Route::get('en/inca-trail-2-days', function(){return view('en/inca-trail-2-days');})->name('inca-trail-2-days');
Route::get('en/lares-trek-4-days', function(){return view('en/lares-trek-4-days');})->name('lares-trek-4-days');
Route::get('en/huchuy-qosqo-to-machu-picchu', function(){return view('en/huchuy-qosqo-to-machu-picchu');})->name('huchuy-qosqo-to-machu-picchu');
Route::get('en/inca-jungle-4-days-tour', function(){return view('en/inca-jungle-4-days-tour');})->name('inca-jungle-4-days');
Route::get('en/sacred-valley-3-days-tour', function(){return view('en/sacred-valley-3-days-tour');})->name('sacred-valley-3-days');
Route::get('en/salkantay-trek-4-days-tour', function(){return view('en/salkantay-trek-4-days-tour');})->name('salkantay-4-days');
/*Alternative Tours */
Route::get('en/ausangate-7-lakes-tour', function(){return view('en/ausangate-7-lakes-tour');})->name('7-lakes-tour');
Route::get('en/humantay-lake-tour', function(){return view('en/humantay-lake-tour');})->name('humantay-lake');
Route::get('en/qeswachaca-tour', function(){return view('en/qeswachaca-tour');})->name('qeswachaca-tour-ingles');
Route::get('en/rainbow-mountain-tour', function(){return view('en/rainbow-mountain-tour');})->name('rainbow-mountain');
Route::get('en/waqrapukara-full-day-tour', function(){return view('en/waqrapukara-full-day-tour');})->name('waqrapukara-tour');
Route::get('en/huchuy-qosqo-2-days', function(){return view('en/huchuy-qosqo-2-days');})->name('huchuy-qosqo-2-days');

/*Tour by train */
Route::get('en/inca-trail-360°-train-tour', function(){return view('en/inca-trail-360°-train-tour');})->name('inca-trail-360°-english');
Route::get('en/inca-rail-first-class', function(){return view('en/inca-rail-first-class');})->name('inca-rail-first-class');
Route::get('en/inca-rail-voyager-train', function(){return view('en/inca-rail-voyager-train');})->name('inca-rail-voyager-english');
Route::get('en/peru-rail-expedition-train', function(){return view('en/peru-rail-expedition-train');})->name('perurail-expedition-english');
Route::get('en/hiram-binghan-train-tour', function(){return view('en/hiram-binghan-train-tour');})->name('hiram-bingham-english');
Route::get('en/perurail-sacred-valley-tour', function(){return view('en/perurail-sacred-valley-tour');})->name('perurail-sacred-valley');
Route::get('en/perurail-vistadome-train', function(){return view('en/perurail-vistadome-train');})->name('perurail-vistadome-english');

//Tours Around Perú
Route::get('en/lima-ica-paracas-3-days', function(){return view('en/lima-ica-paracas-3-days');})->name('lima-paracas-3-days');

/*Blog */
Route::get('blog-peru', function(){return view('blog-peru');})->name('blog-english');
Route::get('blog/blog-ingles/what-you-need-to-know-about-inca-trail', function(){return view('blog/blog-ingles/what-you-need-to-know-about-inca-trail');})->name('blog-inca-trail');
Route::get('blog/blog-ingles/peruvian-gastronomy', function(){return view('blog/blog-ingles/peruvian-gastronomy');})->name('blog-gastronomy');
Route::get('blog/blog-ingles/vinicunca', function(){return view('blog/blog-ingles/vinicunca');})->name('blog-vinicunca-english');
Route::get('blog/blog-ingles/puno-tourist-information', function(){return view('blog/blog-ingles/puno-tourist-information');})->name('blog-puno-english');
Route::get('blog/blog-ingles/attractions-of-cusco', function(){return view('blog/blog-ingles/attractions-of-cusco');})->name('blog-atracciones-english');
Route::get('blog/blog-ingles/paucartambo-3-crosses', function(){return view('blog/blog-ingles/paucartambo-3-crosses');})->name('blog-paucartambo-english');

/*ESPAÑOL*/

Route::get('inicio', function () {return view('inicio');})->name('inicio');
Route::get('nosotros', function(){return view('nosotros');})->name('nosotros');
Route::get('testimonios', function(){return view('testimonios');})->name('testimonios');
Route::get('terminos', function(){return view('terminos');})->name('terminos');
Route::get('preguntas-frecuentes-peru', function(){return view('preguntas-frecuentes-peru');})->name('preguntas');
Route::get('es/aventuras', function () {return view('es/aventuras');})->name('aventuras');
Route::get('es/tradicional', function () {return view('es/tradicional');})->name('tradicional');
Route::get('es/tours-alternativos', function () {return view('es/tours-alternativos');})->name('alternativos-castellano');
Route::get('es/tours-en-tren', function () {return view('es/tours-en-tren');})->name('tren-castellano');
Route::get('es/alrededor-de-peru', function () {return view('es/alrededor-de-peru');})->name('alrededor-de-peru');


/*Tradicionales*/
Route::get('es/cusco-city-tour', function () {return view('es/cusco-city-tour');})->name('city-tour-castellano');
Route::get('es/happy-city-tour-full-day', function () {return view('es/happy-city-tour-full-day');})->name('happy-city-tour-castellano');
Route::get('es/tour-happy-experience', function () {return view('es/tour-happy-experience');})->name('happy-tour-experiencia');
Route::get('es/valle-sagrado-2-dias', function () {return view('es/valle-sagrado-2-dias');})->name('valle-sagrado-2-dias');
Route::get('es/valle-sagrado-full-day', function () {return view('es/valle-sagrado-full-day');})->name('valle-sagrado-de-los-incas');
Route::get('es/maras-moray-salineras-tour', function () {return view('es/maras-moray-salineras-tour');})->name('maras-moray-salineras');

/*Aventura*/
Route::get('es/inca-trail-4-dias', function () {return view('es/inca-trail-4-dias');})->name('inca-trail-4-dias-tour'); 
Route::get('es/tour-salkantay-4-dias', function () {return view('es/tour-salkantay-4-dias');})->name('salkantay-4-dias-tour');
Route::get('es/tour-salkantay-5-dias', function () {return view('es/tour-salkantay-5-dias');})->name('salkantay-5-dias-tour');
Route::get('es/inca-trail-2-dias', function () {return view('es/inca-trail-2-dias');})->name('inca-trail-2-dias');
Route::get('es/valle-sagrado-3-dias', function () {return view('es/valle-sagrado-3-dias');})->name('valle-sagrado-3-dias');
Route::get('es/inca-jungle-4-dias-tour', function () {return view('es/inca-jungle-4-dias-tour');})->name('inca-jungle-4-dias');
Route::get('es/choquequirao-tour-4-dias', function () {return view('es/choquequirao-tour-4-dias');})->name('tour-choquequirao-4-dias');
Route::get('es/caminata-lares-4-dias', function () {return view('es/caminata-lares-4-dias');})->name('caminata-a-lares-4-dias');
Route::get('es/huchuy-qosqo-a-machu-picchu', function () {return view('es/huchuy-qosqo-a-machu-picchu');})->name('huchuy-qosqo-a-machu-picchu');

/*Tours Alternativos*/
Route::get('es/vinicunca-tour', function () {return view('es/vinicunca-tour');})->name('vinicunca-tour');
Route::get('es/waqrapukara-full-day-tour', function () {return view('es/waqrapukara-full-day-tour');})->name('waqrapukara-tour-castellano');
Route::get('es/waqrapukara-full-day-tour', function () {return view('es/waqrapukara-full-day-tour');})->name('waqrapukara-tour');
Route::get('es/tour-7-lagunas-ausangate', function () {return view('es/tour-7-lagunas-ausangate');})->name('7-lagunas-tour');
Route::get('es/tour-laguna-humantay', function () {return view('es/tour-laguna-humantay');})->name('laguna-humantay');
Route::get('es/qeswachaca-tour', function () {return view('es/qeswachaca-tour');})->name('qeswachaca');
Route::get('es/huchuy-qosqo-2-dias', function () {return view('es/huchuy-qosqo-2-dias');})->name('huchuy-qosqo-2-dias');

/*Tours en Tren*/
Route::get('es/inca-trail-360°-tren-tour', function () {return view('es/inca-trail-360°-tren-tour');})->name('inca-trail-360°');
Route::get('es/peru-rail-tren-expedition', function () {return view('es/peru-rail-tren-expedition');})->name('perurail-expedition-tour');
Route::get('es/perurail-valle-sagrado-tour', function () {return view('es/perurail-valle-sagrado-tour');})->name('perurail-valle-sagrado');
Route::get('es/tren-perurail-vistadome', function () {return view('es/tren-perurail-vistadome');})->name('perurail-vistadome-tour');
Route::get('es/inca-rail-primera-clase', function () {return view('es/inca-rail-primera-clase');})->name('inca-rail-primera-clase');
Route::get('es/inca-rail-voyager-tren', function () {return view('es/inca-rail-voyager-tren');})->name('inca-rail-voyager-tour');
Route::get('es/hiram-binghan-tour-en-tren', function () {return view('es/hiram-binghan-tour-en-tren');})->name('hiram-bingham');


//Tours alrededor de Perú
Route::get('es/lima-ica-paracas-3-dias', function(){return view('es/lima-ica-paracas-3-dias');})->name('lima-paracas-3-dias');

/*Blog  Castellano */
Route::get('blog-peru-castellano', function(){return view('blog-peru-castellano');})->name('blog-castellano');
Route::get('blog/blog-castellano/que-necesitas-saber-sobre-el-camino-inca', function(){return view('blog/blog-castellano/que-necesitas-saber-sobre-el-camino-inca');})->name('blog-camino-inca');
Route::get('blog/blog-castellano/gastronomia-peruana', function(){return view('blog/blog-castellano/gastronomia-peruana');})->name('blog-gastronomia');
Route::get('blog/blog-castellano/vinicunca-castellano', function(){return view('blog/blog-castellano/vinicunca-castellano');})->name('blog-vinicunca');
Route::get('blog/blog-castellano/informacion-turistica-puno', function(){return view('blog/blog-castellano/informacion-turistica-puno');})->name('blog-puno');
Route::get('blog/blog-castellano/atracciones-turisticas-de-cusco', function(){return view('blog/blog-castellano/atracciones-turisticas-de-cusco');})->name('blog-atracciones');
Route::get('blog/blog-castellano/mirador-3-cruces-paucartambo', function(){return view('blog/blog-castellano/mirador-3-cruces-paucartambo');})->name('mirador-paucartambo');

/*PORTUGUES*/
Route::get('comecar', function(){return view('comecar');})->name('comecar');
Route::get('sobre-nos', function(){return view('sobre-nos');})->name('sobre-nos');
Route::get('preguntas-frequentes', function(){return view('preguntas-frequentes');})->name('frequentes');
Route::get('depoimentos', function(){return view('depoimentos');})->name('depoimentos');
Route::get('termos-e-condicoes', function(){return view('termos-e-condicoes');})->name('termos-e-condicoes');
Route::get('pt/tradicional', function(){return view('pt/tradicional');})->name('tradicional-portugues');
Route::get('pt/aventura', function(){return view('pt/aventura');})->name('aventura-portugues');
Route::get('pt/alternativas', function(){return view('pt/alternativas');})->name('alternativas-portugues');
Route::get('pt/passeios-de-trem', function(){return view('pt/passeios-de-trem');})->name('tren-portugues');
Route::get('pt/blog', function(){return view('pt/blog');})->name('blog-portugues');
 
/*Tradicionales*/
Route::get('pt/city-tour-cusco', function(){return view('pt/city-tour-cusco');})->name('city-tour-portugues');
Route::get('pt/happy-experiencia-tour', function(){return view('pt/happy-experiencia-tour');})->name('happy-experiencia-tour');
Route::get('pt/happy-city-tour', function(){return view('pt/happy-city-tour');})->name('happy-city-tour');
Route::get('pt/valle-sagrado-2-dias', function(){return view('pt/valle-sagrado-2-dias');})->name('valle-sagrado-2-dias-portugues');
Route::get('pt/vale-sagrado-dos-incas', function(){return view('pt/vale-sagrado-dos-incas');})->name('vale-sagrado-dos-incas');
Route::get('pt/maras-moray-e-salineras', function(){return view('pt/maras-moray-e-salineras');})->name('maras-moray-e-salineras');

/*Aventura*/
Route::get('pt/passeio-choquequirao-4-dias', function(){return view('pt/passeio-choquequirao-4-dias');})->name('passeio-choquequirao-4-dias');
Route::get('pt/huchuy-qosqo-2-dias', function(){return view('pt/huchuy-qosqo-2-dias');})->name('huchuy-qosqo-2-dias-portugues');
Route::get('pt/trilha-inca-4-dias', function(){return view('pt/trilha-inca-4-dias');})->name('trilha-inca-4-dias');
Route::get('pt/selva-inca-4-dias', function(){return view('pt/selva-inca-4-dias');})->name('selva-inca-4-dias');
Route::get('pt/lares-trekking-4-dias', function(){return view('pt/lares-trekking-4-dias');})->name('lares-trekking-4-dias');
Route::get('pt/vale-sagrado-e-trilha-inca', function(){return view('pt/vale-sagrado-e-trilha-inca');})->name('vale-sagrado-e-trilha-inca');
Route::get('pt/salkantay-4-dias', function(){return view('pt/salkantay-4-dias');})->name('salkantay-4-dias');
Route::get('pt/salkantay-5-dias', function(){return view('pt/salkantay-5-dias');})->name('salkantay-5-dias');
Route::get('pt/trilha-inca-2-dias', function(){return view('pt/trilha-inca-2-dias');})->name('trilha-inca-2-dias');

/*Alternativos*/
Route::get('pt/7-lagoas-tour', function(){return view('pt/7-lagoas-tour');})->name('7-lagoas-tour');
Route::get('pt/humantay-lagoa', function(){return view('pt/humantay-lagoa');})->name('humantay-lagoa');
Route::get('pt/huchuy-qosqo', function(){return view('pt/huchuy-qosqo');})->name('huchuy-qosqo-portugues');
Route::get('pt/qeswachaca-tour', function(){return view('pt/qeswachaca-tour');})->name('qeswachaca-portugues');
Route::get('pt/vinicunca-montanha', function(){return view('pt/vinicunca-montanha');})->name('vinicunca-montanha');
Route::get('pt/waqrapukara-full-day', function(){return view('pt/waqrapukara-full-day');})->name('waqrapukara-full-day');
/*Tours de tren*/
Route::get('pt/inca-rail-360°', function(){return view('pt/inca-rail-360°');})->name('inca-rail-360°');
Route::get('pt/inca-rail-primeira-classe', function(){return view('pt/inca-rail-primeira-classe');})->name('inca-rail-primeira-classe');
Route::get('pt/inca-rail-voyager', function(){return view('pt/inca-rail-voyager');})->name('inca-rail-voyager');
Route::get('pt/perurail-expedition', function(){return view('pt/perurail-expedition');})->name('perurail-expedition');
Route::get('pt/perurail-hiram-bingham', function(){return view('pt/perurail-hiram-bingham');})->name('perurail-hiram-bingham');
Route::get('pt/perurail-vale-sagrado', function(){return view('pt/perurail-vale-sagrado');})->name('perurail-vale-sagrado');
Route::get('pt/perurail-vistadome', function(){return view('pt/perurail-vistadome');})->name('perurail-vistadome');

//Ao redor do Peru
Route::get('pt/ao-redor-do-peru', function(){return view('pt/ao-redor-do-peru');})->name('ao-redor-do-peru');
Route::get('pt/ao-redor-do-peru/lima-ica-paracas', function(){return view('pt/ao-redor-do-peru/lima-ica-paracas');})->name('lima-ica-paracas-portugues');

/*Blog  Portugues */
Route::get('blog-portugues', function(){return view('blog-portugues');})->name('blog-portugues');
Route::get('blog/blog-portugues/que-precisa-saber-sobre-a-trilha-inca', function(){return view('blog/blog-portugues/que-precisa-saber-sobre-a-trilha-inca');})->name('blog-trilha-inca');
Route::get('blog/blog-portugues/gastronomia-do-peru', function(){return view('blog/blog-portugues/gastronomia-do-peru');})->name('blog-gastronomia-portugues');
Route::get('blog/blog-portugues/montanha-vinicunca', function(){return view('blog/blog-portugues/montanha-vinicunca');})->name('blog-vinicunca-portugues');
Route::get('blog/blog-portugues/pontos-turisticos-de-cusco', function(){return view('blog/blog-portugues/pontos-turisticos-de-cusco');})->name('blog-atracciones-portugues');
Route::get('blog/blog-portugues/informacion-turistica-da-puno', function(){return view('blog/blog-portugues/informacion-turistica-da-puno');})->name('blog-puno-portugues');
Route::get('blog/blog-portugues/mirante-tres-cruzes', function(){return view('blog/blog-portugues/mirante-tres-cruzes');})->name('blog-mirador-portugues');


//Tours Around Perú
Route::get('pt/lima-ica-paracas-3-dias-tour', function(){return view('pt/lima-ica-paracas-3-dias-tour');})->name('lima-paracas-3-dias-portugues');

/*Book Español */
Route::post('book1', function(){ 
    $datos=request()->all();
    Mail::send("emails.book-tours-castellano", $datos, function($message) use($datos){
        $message->from($datos['email'], $datos['name'])
        ->to('reserve@happyperutours.com', 'DJM2')
        ->subject('Envio de formulario desde la página web de HPT.');
    });
    return back()->with('flash', 'Envio exitoso de Happy Peru tours!');
}) ->name('book1');

Route::post('book2', function(){ 
    $datos=request()->all();
    Mail::send("emails.book-tours-ingles", $datos, function($message) use($datos){
        $message->from($datos['email'], $datos['name'])
        ->to('reserve@happyperutours.com', 'DJM2')
        ->subject('Envio de formulario desde la página web de HPT.');
    });
    return back()->with('flash', 'Envio exitoso de Happy Peru tours!');
}) ->name('book2');

Route::post('book-index', function(){ 
    $datos=request()->all();    
    Mail::send("emails.book-index", $datos, function($message) use($datos){
        $message->from($datos['email'], $datos['name'])
        ->to('reserve@happyperutours.com', 'DJM2')
        ->subject('Envio de formulario desde la página web de HPT.');
    });
    return back()->with('flash', 'Envio exitoso de Happy Peru tours!');
}) ->name('book-index');

Route::post('newsletter', function(){ 
    $datos=request()->all();
    Mail::send("emails.newsletter", $datos, function($message) use($datos){
        $message->from($datos['email'], $datos['name'])
        ->to('reserve@happyperutours.com', 'DJM2')
        ->subject('Envio de nuevo suscriptor para el newsletter');
    });
    return back()->with('flash', 'Gracias por suscribirte!');
}) ->name('newsletter');
