<?php

namespace App\Http\Controllers;

use App\Models\Produto;
use Illuminate\Contracts\View\View;
use Illuminate\Http\RedirectResponse;
use Illuminate\Http\Request;

class ProdutoController extends Controller
{
    /**
     * Listar todos os produtos cadastrados
     */
    public function index(): View
    {
        return view("produtos.index", [
            "produtos"  => Produto::all(), //busca todo os produtos do banco
            "titulo"    => "Catálogo de Produtos Industriais"
        ]);
    }

    /**
     * exibir um Formulário para cadastro de novos produtos
     */
    public function create() : View
    {
        return view("produtos.create", [
            "titulo" => "Novo Cadastro de Produto Industrial"
        ]);
    }

    /**
     * Salva os dados do novo produto no banco de dados usando request e dando uma response
     */
    public function store(Request $request) : RedirectResponse
    {
        $dados = $request->validate([
            "nome"      => "required|min:3",
            "codigo"    => "required|unique:produtos,codigo", //
            "categoria" => "required"
        ]);
        // fazer o cadastro no banco
        Produto::create($dados);
        return redirect()->route("produtos.index")->with("sucesso", "Produto Cadastrado com sucesso");
    }

    /**
     * Exibir os detalhes de um produto especifico
     */
    public function show(int $id): View
    {
        $produto = Produto::findOrFail($id); // manda uma mensagem de erro caso não encontrado

        return view("produtos.show",[
            "produto" => $produto,
            "titulo"  => "Ficha Técnica: {$produto["nome"]}"
        ]);
    }

    /**
     * Exibir um formulario com os dados de um produto especifico para atualização
     */
    public function edit(string $id): View
    {
        $produto = Produto::findOrFail($id);

        return view("produtos.edit", [
            "produto"   => $produto,
            "titulo"    => "Editar produto {$produto ["nome"]}"
        ]);
    }

    /**
     * Atualizar os dados do produto utilizando method spoofing(PUT)
     */
    public function update(Request $request, int $id):
    RedirectResponse{
        $dados = $request->validate([
            "nome"       => "required|min:3",
            "categoria"  => "required"
        ]);
        Produto::findOrFail($id)->update($dados);
        return redirect()->route("produtos.show", $id)->with
        ("sucesso", "Dados atualizados com sucesso");
    }


    /**
     * Remove the specified resource from storage.
     */
    public function destroy(int $id): RedirectResponse
    {
        Produto::findOrFail($id)->delete();
        return redirect()->route("produtos.index")->with("sucesso", "produto removido do sistema");

    }

    //filtragem de Produtos por categoria
    public function filtrarPorCategoria (?string $categoria = null): View {
        $consulta = Produto::query();
        if($categoria !== null) {
            $consulta->where("categoria", "like", $categoria);
        }

        return view("produtos.index", [
            "produtos"  => $consulta->get(),
            "titulo"    => $categoria ? "Categoria: ".ucfirst($categoria) :
            "Todas as Categorias"
        ]);
    }
}
