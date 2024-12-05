<?php
/**
 * @project pmhdv-nhom-7-renew
 * @author hoepjhsha
 * @email hiepnguyen3624@gmail.com
 * @date 05/12/2024
 * @time 12:24
 */

namespace App\Controller\Shop;

use App\Controller\BaseController;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Attribute\Route;

class ShopController extends BaseController
{
    #[Route('/shop', name: 'shop')]
    public function index(): Response
    {
        return $this->render('shop/index.html.twig');
    }
}