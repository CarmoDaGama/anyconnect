<?php

use App\Models\Banner;
use App\Models\Imprensa;
use App\Models\Noticia;
use App\Models\Projecto;
use App\Models\Servico;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    $banner = Banner::query()->latest('id')->first();
    $imprensa = Imprensa::query()->latest('id')->first();

    $categorias = DB::table('categorias')
        ->orderBy('id')
        ->get()
        ->map(function ($categoria) {
            $categoria->servicos = DB::table('servicos')
                ->join('categoria_servico', 'servicos.id', '=', 'categoria_servico.servico_id')
                ->where('categoria_servico.categoria_id', $categoria->id)
                ->select('servicos.id', 'servicos.slug', 'servicos.title')
                ->orderBy('servicos.title')
                ->get();

            return $categoria;
        });

    return view('welcome', compact('banner', 'imprensa', 'categorias'));
})->name('home');

Route::get('/sobre-nos', fn() => view('site.about'))->name('navigation.about');
Route::get('/organigrama', fn() => view('site.organigrama'))->name('navigation.organigrama');
Route::get('/contactos', fn() => view('site.contactos'))->name('navigation.contactos');

Route::get('/projectos', function () {
    $projectos = Projecto::query()->latest('id')->get();

    return view('site.projectos', compact('projectos'));
})->name('navigation.projects');

Route::get('/produtos-e-servicos', function () {
    $services = Servico::query()->latest('id')->get();

    return view('site.produtos.index', compact('services'));
})->name('navigation.services');

Route::get('/produtos-e-servicos/{slug}', function (string $slug) {
    $service = Servico::query()->where('slug', $slug)->firstOrFail();

    return view('site.produtos.single', compact('service'));
})->name('servico.show');

Route::post('/orcamento/enviar', function (Request $request) {
    $request->validate([
        'nome' => ['required', 'string', 'max:255'],
        'email' => ['required', 'email', 'max:255'],
        'telefone' => ['nullable', 'string', 'max:50'],
        'mensagem' => ['nullable', 'string', 'max:2000'],
        'servico' => ['nullable', 'string', 'max:255'],
    ]);

    return response()->json([
        'success' => true,
        'message' => 'Pedido recebido com sucesso. Entraremos em contacto brevemente.',
    ]);
})->name('orcamento.enviar');

Route::get('/noticias', function () {
    $noticias = Noticia::query()->latest('id')->paginate(6);
    $imprensas = Imprensa::query()->latest('id')->limit(6)->get();

    return view('site.noticias.index', compact('noticias', 'imprensas'));
})->name('navigation.noticias');

Route::get('/imprensa', function () {
    $imprensas = Imprensa::query()->latest('id')->paginate(6);
    $noticias = Noticia::query()->latest('id')->limit(6)->get();

    return view('site.imprensa.index', compact('imprensas', 'noticias'));
})->name('navigation.imprensa');

Route::get('/imprensa/{slug}', function (string $slug) {
    $noticia = Noticia::query()->where('slug', $slug)->first();

    if ($noticia) {
        return view('site.imprensa.single', [
            'noticia' => $noticia,
            'noticia_true' => true,
        ]);
    }

    $imprensa = Imprensa::query()->where('slug', $slug)->firstOrFail();

    return view('site.imprensa.single', [
        'noticia' => $imprensa,
        'imprensa' => true,
    ]);
})->name('imprensa.show');
