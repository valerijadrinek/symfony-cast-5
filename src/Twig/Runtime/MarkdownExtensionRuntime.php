<?php

namespace App\Twig\Runtime;

use Twig\Extension\RuntimeExtensionInterface;
use App\Service\MarkdownHelper;

class MarkdownExtensionRuntime implements RuntimeExtensionInterface
{
    
    private $markdownHelper;
    public function __construct(MarkdownHelper $markdownHelper)
    {
        $this->markdownHelper = $markdownHelper;
    }

    public function parseMarkdown($value)
    {
        return $this->markdownHelper->parse($value);
    }
}
