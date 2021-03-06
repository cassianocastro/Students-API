<?php
declare(strict_types=1);

namespace Views;

use Views\IDocument;

/**
 *
 */
final class Renderer
{

    public function render(IDocument $document): void
    {
        if ( $document instanceof JSONDocument ) {
            header("Content-Type: application/json; charset=UTF-8", false, 200);
        }
        print $document->getContent();
    }
}