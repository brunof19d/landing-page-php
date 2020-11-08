<?php


namespace App\View\Admin\Users;


use App\Helper\RenderHtml;
use Nyholm\Psr7\Response;
use Psr\Http\Message\ResponseInterface;
use Psr\Http\Message\ServerRequestInterface;
use Psr\Http\Server\RequestHandlerInterface;

class UserEdit implements RequestHandlerInterface
{
    use RenderHtml;

    public function handle(ServerRequestInterface $request): ResponseInterface
    {
        $html = $this->render('admin/users/form-edit.php', [
            'title' => 'Admin | Edit User'
        ]);
        return new Response(200, [], $html);
    }
}