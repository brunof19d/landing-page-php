<?php

/**
 * @author Bruno Dadario <brunof19d@gmail.com>
 */

namespace App\View;

use App\Entity\Service;
use App\Entity\Testimonial;
use App\Helper\RenderHtml;
use Doctrine\ORM\EntityManagerInterface;
use Nyholm\Psr7\Response;
use Psr\Http\Message\ResponseInterface;
use Psr\Http\Message\ServerRequestInterface;
use Psr\Http\Server\RequestHandlerInterface;

class Home implements RequestHandlerInterface
{
    use RenderHtml;

    private EntityManagerInterface $entityManager;

    public function __construct(EntityManagerInterface $entityManager)
    {
        $this->entityManager = $entityManager;
    }

    public function handle(ServerRequestInterface $request): ResponseInterface
    {
        $testimonials = $this->entityManager
            ->getRepository(Testimonial::class)
            ->findAll();

        $services = $this->entityManager
            ->getRepository(Service::class)
            ->findAll();

        $html = $this->render('index.php', [
            'title' => 'Landing Page',
            'testimonials' => $testimonials,
            'services' => $services
        ]);

        return new Response(200, [], $html);
    }
}