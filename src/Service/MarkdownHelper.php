<?php

namespace App\Service;

use Knp\Bundle\MarkdownBundle\MarkdownParserInterface;
use Symfony\Contracts\Cache\CacheInterface;
use Psr\Log\LoggerInterface;

class MarkdownHelper 
{
    private $isDebug;
    private $markdownParser;
    private $cache;
    private $logger;
    public function __construct(MarkdownParserInterface $markdownParser, CacheInterface $cache, bool $isDebug, LoggerInterface $logger)
    {
        $this->isDebug = $isDebug;
        $this->markdownParser = $markdownParser;
        $this->cache = $cache;
        $this->logger = $logger;
       
    }
    
    public function parse(string $source): string
    {
        if (stripos($source, 'jar') !== false) {
            $this->logger->info('Meow!');
        }

        if ($this->isDebug) {
            return $this->markdownParser->transformMarkdown($source);
        }
        
        return $this->cache->get('markdown_'.md5($source), function() use($source) {
            return $this->markdownParser->transformMarkdown($source);
        });
    }
}