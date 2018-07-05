<?php

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

use App\Contact;
use App\Petition;
use Illuminate\Http\Request;
use App\Http\Controllers;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\View;

    
Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');


//--------------------------------------------------------------------------------------------

Route::get('my-captcha', 'HomeController@myCaptcha')->name('myCaptcha');
Route::post('my-captcha', 'HomeController@myCaptchaPost')->name('myCaptcha.post');
Route::get('refresh_captcha', 'HomeController@refreshCaptcha')->name('refresh_captcha');

//--------------------------------------------------------------------------------------------



/*  */
    Route::post('/contact', function (Request $request) {
        $validator = Validator::make($request->all(), [
            'name' => 'required|max:255',
            'email' => 'required|max:255',
            'message' => 'required|max:1000',
            'captcha' => 'required|captcha',
        ]);

        if ($validator->fails()) {
            return redirect()->back()->with('failed' , 'Failed Entry, please recheck your submission!!')
                ->withInput()
                ->withErrors($validator);
        }

        $cont = new Contact;
        $cont->Name = $request->name;
        $cont->Email = $request->email;
        $cont->Message = $request->message;
        $cont->Captcha = $request->captcha;
        $cont->save();

        return redirect()->back()->with('message' , 'SUBMITTED SUCCESSFULLY.');

});


Route::post('/petition', function (Request $request) {
        $validator = Validator::make($request->all(), [
            'name' => 'required|min:2|max:100',
            'email' => 'required|email|unique:petitions,email',
            'city' => 'required|min:2|max:100',
            'country' => 'required|min:2|max:100',
            'progress' => 'required|min:2|max:100',
            'captcha' => 'required|captcha',
        ]);

        if ($validator->fails()) {
            return redirect()->back()->with('failed-petition' , 'Failed Entry, please recheck your submission!!')
                ->withInput()
                ->withErrors($validator);
        }

        $pet = new Petition;
        $pet->Name = $request->name;
        $pet->Email = $request->email;
        $pet->City = $request->city;
        $pet->Country = $request->country;
        $pet->Progress = 'Checked';
        $pet->Captcha = $request->captcha;
        $pet->save();

        return redirect()->back()->with('message-petition' , 'SUBMITTED SUCCESSFULLY.');

});




Route::get('/', function () {
    return view('index');
});
/*
-------------------------------------------------------------------------------------------
ENGLISH TRANSLATION ROUTES
-------------------------------------------------------------------------------------------
*/

Route::get('/index', function () {
    return view('index');
});


Route::get('/diff-dates', function () {
    return view('eng/different-dates');
});

Route::get('/why-one-date', function () {
    return view('eng/why-one-date');
});

Route::get('/what-can-we-do', function () {
    return view('eng/what-can-we-do');
});

Route::get('/endorsement', function () {
    return view('eng/endorsement');
});

Route::get('/inspiration', function () {
    return view('eng/inspiration');
});

Route::get('/sign-petition', function () {
    return view('eng/sign-petition');
});

Route::get('/tell-others', function () {
    return view('eng/tell-others');
});

Route::get('/link-to-us', function () {
    return view('eng/link-to-us');
});

Route::get('/petition-kit', function () {
    return view('eng/petition-kit');
});

Route::get('/signatures', 'DatabaseController@index', function () {
    return view('eng/signatures');
});

Route::get('/contact-us', function () {
    return view('eng/contact-us');
});

/*
-------------------------------------------------------------------------------------------
CHIN TRANSLATION ROUTES
-------------------------------------------------------------------------------------------
*/
Route::get('/ch-index', function () {
    return view('chin/index');
});


Route::get('/ch-diff-dates', function () {
    return view('chin/different-dates');
});

Route::get('/ch-why-one-date', function () {
    return view('chin/why-one-date');
});

Route::get('/ch-what-can-we-do', function () {
    return view('chin/what-can-we-do');
});

Route::get('/ch-endorsement', function () {
    return view('chin/endorsement');
});

Route::get('/ch-inspiration', function () {
    return view('chin/inspiration');
});

Route::get('/ch-sign-petition', function () {
    return view('chin/sign-petition');
});

Route::get('/ch-tell-others', function () {
    return view('chin/tell-others');
});

Route::get('/ch-link-to-us', function () {
    return view('chin/link-to-us');
});

Route::get('/ch-petition-kit', function () {
    return view('chin/petition-kit');
});

Route::get('/ch-signatures','chinController@index',  function () {
    return view('chin/signatures');
});

Route::get('/ch-contact-us', function () {
    return view('chin/contact-us');
});

/*
-------------------------------------------------------------------------------------------
CZECH TRANSLATION ROUTES
-------------------------------------------------------------------------------------------
*/
Route::get('/cz-index', function () {
    return view('czech/index');
});

Route::get('/cz-diff-dates', function () {
    return view('czech/different-dates');
});

Route::get('/cz-why-one-date', function () {
    return view('czech/why-one-date');
});

Route::get('/cz-what-can-we-do', function () {
    return view('czech/what-can-we-do');
});

Route::get('/cz-endorsement', function () {
    return view('czech/endorsement');
});

Route::get('/cz-inspiration', function () {
    return view('czech/inspiration');
});

Route::get('/cz-sign-petition', function () {
    return view('czech/sign-petition');
});

Route::get('/cz-tell-others', function () {
    return view('czech/tell-others');
});

Route::get('/cz-link-to-us', function () {
    return view('czech/link-to-us');
});

Route::get('/cz-petition-kit', function () {
    return view('czech/petition-kit');
});

Route::get('/cz-signatures','czechController@index', function () {
    return view('czech/signatures');
});

Route::get('/cz-contact-us', function () {
    return view('czech/contact-us');
});

/*
-------------------------------------------------------------------------------------------
DANISH TRANSLATION ROUTES
-------------------------------------------------------------------------------------------
*/
Route::get('/dan-index', function () {
    return view('dan/index');
});

Route::get('/dan-diff-dates', function () {
    return view('dan/different-dates');
});


Route::get('/dan-why-one-date', function () {
    return view('dan/why-one-date');
});

Route::get('/dan-what-can-we-do', function () {
    return view('dan/what-can-we-do');
});

Route::get('/dan-endorsement', function () {
    return view('dan/endorsement');
});

Route::get('/dan-inspiration', function () {
    return view('dan/inspiration');
});

Route::get('/dan-sign-petition', function () {
    return view('dan/sign-petition');
});

Route::get('/dan-tell-others', function () {
    return view('dan/tell-others');
});

Route::get('/dan-link-to-us', function () {
    return view('dan/link-to-us');
});

Route::get('/dan-petition-kit', function () {
    return view('dan/petition-kit');
});

Route::get('/dan-signatures','danController@index', function () {
    return view('dan/signatures');
});

Route::get('/dan-contact-us', function () {
    return view('dan/contact-us');
});

/*
-------------------------------------------------------------------------------------------
DEUTCH TRANSLATION ROUTES
-------------------------------------------------------------------------------------------
*/
Route::get('/deu-index', function () {
    return view('deu/index');
});

Route::get('/deu-diff-dates', function () {
    return view('deu/different-dates');
});

Route::get('/deu-why-one-date', function () {
    return view('deu/why-one-date');
});

Route::get('/deu-what-can-we-do', function () {
    return view('deu/what-can-we-do');
});

Route::get('/deu-endorsement', function () {
    return view('deu/endorsement');
});

Route::get('/deu-inspiration', function () {
    return view('deu/inspiration');
});

Route::get('/deu-sign-petition', function () {
    return view('deu/sign-petition');
});

Route::get('/deu-tell-others', function () {
    return view('deu/tell-others');
});

Route::get('/deu-link-to-us', function () {
    return view('deu/link-to-us');
});

Route::get('/deu-petition-kit', function () {
    return view('deu/petition-kit');
});

Route::get('/deu-signatures','deuController@index', function () {
    return view('deu/signatures');
});

Route::get('/deu-contact-us', function () {
    return view('deu/contact-us');
});






/*
-------------------------------------------------------------------------------------------
ESP TRANSLATION ROUTES
-------------------------------------------------------------------------------------------
*/
Route::get('/esp-index', function () {
    return view('esp/index');
});



Route::get('/esp-diff-dates', function () {
    return view('esp/different-dates');
});

Route::get('/esp-why-one-date', function () {
    return view('esp/why-one-date');
});

Route::get('/esp-what-can-we-do', function () {
    return view('esp/what-can-we-do');
});

Route::get('/esp-endorsement', function () {
    return view('esp/endorsement');
});

Route::get('/esp-inspiration', function () {
    return view('esp/inspiration');
});

Route::get('/esp-sign-petition', function () {
    return view('esp/sign-petition');
});

Route::get('/esp-tell-others', function () {
    return view('esp/tell-others');
});

Route::get('/esp-link-to-us', function () {
    return view('esp/link-to-us');
});

Route::get('/esp-petition-kit', function () {
    return view('esp/petition-kit');
});

Route::get('/esp-signatures', 'espController@index', function () {
    return view('esp/signatures');
});

Route::get('/esp-contact-us', function () {
    return view('esp/contact-us');
});




/*
-------------------------------------------------------------------------------------------
FRAN TRANSLATION ROUTES
-------------------------------------------------------------------------------------------
*/
Route::get('/fr-diff-dates', function () {
    return view('fran/different-dates');
});


Route::get('/fr-index', function () {
    return view('fran/index');
});

Route::get('/fr-why-one-date', function () {
    return view('fran/why-one-date');
});

Route::get('/fr-what-can-we-do', function () {
    return view('fran/what-can-we-do');
});

Route::get('/fr-endorsement', function () {
    return view('fran/endorsement');
});

Route::get('/fr-inspiration', function () {
    return view('fran/inspiration');
});

Route::get('/fr-sign-petition', function () {
    return view('fran/sign-petition');
});

Route::get('/fr-tell-others', function () {
    return view('fran/tell-others');
});

Route::get('/fr-link-to-us', function () {
    return view('fran/link-to-us');
});

Route::get('/fr-petition-kit', function () {
    return view('fran/petition-kit');
});

Route::get('/fr-signatures', 'franController@index', function () {
    return view('fran/signatures');
});

Route::get('/fr-contact-us', function () {
    return view('fran/contact-us');
});

/*
-------------------------------------------------------------------------------------------
GRE TRANSLATION ROUTES
-------------------------------------------------------------------------------------------
*/
Route::get('/gre-index', function () {
    return view('gre/index');
});

Route::get('/gre-diff-dates', function () {
    return view('gre/different-dates');
});

Route::get('/gre-why-one-date', function () {
    return view('gre/why-one-date');
});

Route::get('/gre-what-can-we-do', function () {
    return view('gre/what-can-we-do');
});

Route::get('/gre-endorsement', function () {
    return view('gre/endorsement');
});

Route::get('/gre-inspiration', function () {
    return view('gre/inspiration');
});

Route::get('/gre-sign-petition', function () {
    return view('gre/sign-petition');
});

Route::get('/gre-tell-others', function () {
    return view('gre/tell-others');
});

Route::get('/gre-link-to-us', function () {
    return view('gre/link-to-us');
});

Route::get('/gre-petition-kit', function () {
    return view('gre/petition-kit');
});

Route::get('/gre-signatures', 'greController@index', function () {
    return view('gre/signatures');
});

Route::get('/gre-contact-us', function () {
    return view('gre/contact-us');
});

/*
-------------------------------------------------------------------------------------------
HUNG TRANSLATION ROUTES
-------------------------------------------------------------------------------------------
*/
Route::get('/hung-index', function () {
    return view('hung/index');
});

Route::get('/hung-diff-dates', function () {
    return view('hung/different-dates');
});

Route::get('/hung-why-one-date', function () {
    return view('hung/why-one-date');
});

Route::get('/hung-what-can-we-do', function () {
    return view('hung/what-can-we-do');
});

Route::get('/hung-endorsement', function () {
    return view('hung/endorsement');
});

Route::get('/hung-inspiration', function () {
    return view('hung/inspiration');
});

Route::get('/hung-sign-petition', function () {
    return view('hung/sign-petition');
});

Route::get('/hung-tell-others', function () {
    return view('hung/tell-others');
});

Route::get('/hung-link-to-us', function () {
    return view('hung/link-to-us');
});

Route::get('/hung-petition-kit', function () {
    return view('hung/petition-kit');
});

Route::get('/hung-signatures', 'hungController@index', function () {
    return view('hung/signatures');
});

Route::get('/hung-contact-us', function () {
    return view('hung/contact-us');
});

/*
-------------------------------------------------------------------------------------------
ITA TRANSLATION ROUTES
-------------------------------------------------------------------------------------------
*/
Route::get('/ita-index', function () {
    return view('ita/index');
});

Route::get('/ita-diff-dates', function () {
    return view('ita/different-dates');
});

Route::get('/ita-why-one-date', function () {
    return view('ita/why-one-date');
});

Route::get('/ita-what-can-we-do', function () {
    return view('ita/what-can-we-do');
});

Route::get('/ita-endorsement', function () {
    return view('ita/endorsement');
});

Route::get('/ita-inspiration', function () {
    return view('ita/inspiration');
});

Route::get('/ita-sign-petition', function () {
    return view('ita/sign-petition');
});

Route::get('/ita-tell-others', function () {
    return view('ita/tell-others');
});

Route::get('/ita-link-to-us', function () {
    return view('ita/link-to-us');
});

Route::get('/ita-petition-kit', function () {
    return view('ita/petition-kit');
});

Route::get('/ita-signatures', 'itaController@index', function () {
    return view('ita/signatures');
});

Route::get('/ita-contact-us', function () {
    return view('ita/contact-us');
});

/*
-------------------------------------------------------------------------------------------
JAP TRANSLATION ROUTES
-------------------------------------------------------------------------------------------
*/
Route::get('/jap-index', function () {
    return view('jap/index');
});

Route::get('/jap-diff-dates', function () {
    return view('jap/different-dates');
});

Route::get('/jap-why-one-date', function () {
    return view('jap/why-one-date');
});

Route::get('/jap-what-can-we-do', function () {
    return view('jap/what-can-we-do');
});

Route::get('/jap-endorsement', function () {
    return view('jap/endorsement');
});

Route::get('/jap-inspiration', function () {
    return view('jap/inspiration');
});

Route::get('/jap-sign-petition', function () {
    return view('jap/sign-petition');
});

Route::get('/jap-tell-others', function () {
    return view('jap/tell-others');
});

Route::get('/jap-link-to-us', function () {
    return view('jap/link-to-us');
});

Route::get('/jap-petition-kit', function () {
    return view('jap/petition-kit');
});

Route::get('/jap-signatures', 'japController@index', function () {
    return view('jap/signatures');
});

Route::get('/jap-contact-us', function () {
    return view('jap/contact-us');
});

/*
-------------------------------------------------------------------------------------------
NED TRANSLATION ROUTES
-------------------------------------------------------------------------------------------
*/
Route::get('/ned-index', function () {
    return view('ned/index');
});

Route::get('/ned-diff-dates', function () {
    return view('ned/different-dates');
});

Route::get('/ned-why-one-date', function () {
    return view('ned/why-one-date');
});

Route::get('/ned-what-can-we-do', function () {
    return view('ned/what-can-we-do');
});

Route::get('/ned-endorsement', function () {
    return view('ned/endorsement');
});

Route::get('/ned-inspiration', function () {
    return view('ned/inspiration');
});

Route::get('/ned-sign-petition', function () {
    return view('ned/sign-petition');
});

Route::get('/ned-tell-others', function () {
    return view('ned/tell-others');
});

Route::get('/ned-link-to-us', function () {
    return view('ned/link-to-us');
});

Route::get('/ned-petition-kit', function () {
    return view('ned/petition-kit');
});

Route::get('/ned-signatures', 'nedController@index', function () {
    return view('ned/signatures');
});

Route::get('/ned-contact-us', function () {
    return view('ned/contact-us');
});

/*
-------------------------------------------------------------------------------------------
POL TRANSLATION ROUTES
-------------------------------------------------------------------------------------------
*/
Route::get('/pol-index', function () {
    return view('pol/index');
});


Route::get('/pol-diff-dates', function () {
    return view('pol/different-dates');
});

Route::get('/pol-why-one-date', function () {
    return view('pol/why-one-date');
});

Route::get('/pol-what-can-we-do', function () {
    return view('pol/what-can-we-do');
});

Route::get('/pol-endorsement', function () {
    return view('pol/endorsement');
});

Route::get('/pol-inspiration', function () {
    return view('pol/inspiration');
});

Route::get('/pol-sign-petition', function () {
    return view('pol/sign-petition');
});

Route::get('/pol-tell-others', function () {
    return view('pol/tell-others');
});

Route::get('/pol-link-to-us', function () {
    return view('pol/link-to-us');
});

Route::get('/pol-petition-kit', function () {
    return view('pol/petition-kit');
});

Route::get('/pol-signatures', 'polController@index', function () {
    return view('pol/signatures');
});

Route::get('/pol-contact-us', function () {
    return view('pol/contact-us');
});

/*
-------------------------------------------------------------------------------------------
POR TRANSLATION ROUTES
-------------------------------------------------------------------------------------------
*/
Route::get('/por-index', function () {
    return view('por/index');
});

Route::get('/por-diff-dates', function () {
    return view('por/different-dates');
});

Route::get('/por-why-one-date', function () {
    return view('por/why-one-date');
});

Route::get('/por-what-can-we-do', function () {
    return view('por/what-can-we-do');
});

Route::get('/por-endorsement', function () {
    return view('por/endorsement');
});

Route::get('/por-inspiration', function () {
    return view('por/inspiration');
});

Route::get('/por-sign-petition', function () {
    return view('por/sign-petition');
});

Route::get('/por-tell-others', function () {
    return view('por/tell-others');
});

Route::get('/por-link-to-us', function () {
    return view('por/link-to-us');
});

Route::get('/por-petition-kit', function () {
    return view('por/petition-kit');
});

Route::get('/por-signatures', 'porController@index', function () {
    return view('por/signatures');
});

Route::get('/por-contact-us', function () {
    return view('por/contact-us');
});

/*
-------------------------------------------------------------------------------------------
RUS TRANSLATION ROUTES
-------------------------------------------------------------------------------------------
*/
Route::get('/rus-index', function () {
    return view('rus/index');
});

Route::get('/rus-diff-dates', function () {
    return view('rus/different-dates');
});

Route::get('/rus-why-one-date', function () {
    return view('rus/why-one-date');
});

Route::get('/rus-what-can-we-do', function () {
    return view('rus/what-can-we-do');
});

Route::get('/rus-endorsement', function () {
    return view('rus/endorsement');
});

Route::get('/rus-inspiration', function () {
    return view('rus/inspiration');
});

Route::get('/rus-sign-petition', function () {
    return view('rus/sign-petition');
});

Route::get('/rus-tell-others', function () {
    return view('rus/tell-others');
});

Route::get('/rus-link-to-us', function () {
    return view('rus/link-to-us');
});

Route::get('/rus-petition-kit', function () {
    return view('rus/petition-kit');
});

Route::get('/rus-signatures', 'rusController@index', function () {
    return view('rus/signatures');
});

Route::get('/rus-contact-us', function () {
    return view('rus/contact-us');
});
