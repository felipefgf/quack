<?php

class HomeController extends BaseController {

	/*
	|--------------------------------------------------------------------------
	| Default Home Controller
	|--------------------------------------------------------------------------
	|
	| You may wish to use controllers instead of, or in addition to, Closure
	| based routes. That's great! Here is an example controller method to
	| get you started. To route to this controller, just add the route:
	|
	|	Route::get('/', 'HomeController@showWelcome');
	|
	*/


    public function getHome(){
        $roupas = Roupa::get();


        return View::make('public.home')->with(array(
            "roupas" => $roupas,
        ));
    }

    public function getAdicionaRoupa(){
        return View::make('public.adicionaRoupa')->with(array(
        ));
    }

    public function postAdicionaRoupa(){
        $dados = Input::get();

        $roupa = new Roupa();
        $roupa->nome = $dados['nome'];
        $roupa->tamanho = $dados['tamanho'];
        $roupa->save();

        return Redirect::To('/');
    }
}
