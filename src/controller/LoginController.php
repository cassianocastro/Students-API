<?php 
declare(strict_types = 1);

namespace Controllers;

use Views\{
    HTMLDocument, Renderer
};

/**
 * 
 */
final class LoginController implements namespace\InterfacePageController
{

    public function showPageAction(): void
    {
        (new Renderer())->render(new HTMLDocument("/pages/login.php"));
    }

}

?>