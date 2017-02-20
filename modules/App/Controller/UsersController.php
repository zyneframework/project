<?php
namespace App\Controller;

use Core\Controller\DefaultController;

class UsersController extends DefaultController
{

    /**
     * @route get /users
     * Página inicial com a listagem dos usuários.
     *
     * @return string
     */
    public function index()
    {
        return $this->render('users.index');
        /**
         * Alternativamente, poderia ser utilizado:
         *
         * return view('users.index');
         * return (new View())->render('users.index');
         */
    }


    /**
     * @route get /users/new
     * Página com o formulário para criação de um novo usuário.
     *
     * @return string
     */
    public function new()
    {
        return $this->render('users.form')->with([]);
    }

    /**
     * @route post /users
     * Cria um novo usuário com os dados enviados da rota users/new.
     *
     * @return JSONResponse
     */
    public function create()
    {
        return [];
    }

    /**
     * @route get /users/{id}/edit
     * Página com o formulário para edição de um usuário.
     *
     * @param $id
     * @return mixed
     */
    public function edit($id)
    {
        return $this->render('users.form')->with(['id' => $id]);
    }

    /**
     * @route put
     * @return JSONResponse
     */
    public function update()
    {
        return [];
    }

    public function delete()
    {

    }

    public function destroy()
    {

    }
}