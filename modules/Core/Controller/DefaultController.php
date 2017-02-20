<?php
namespace Core\Controller;

use Zyne\View;

abstract class DefaultController
{

    public function index()
    {

    }

    public function new()
    {

    }

    public function create()
    {

    }

    public function edit()
    {

    }

    public function update()
    {

    }

    public function delete()
    {

    }

    public function destroy()
    {

    }

    /**
     * Métodos usados através da aplicação.
     */

    /**
     * Renderiza o View Script associado
     * @return View
     */
    protected function render($viewScript = null)
    {
        return $this->viewRenderer($viewScript);
    }

    /**
     * @return View
     */
    private function viewRenderer()
    {
        return new View();
    }
}