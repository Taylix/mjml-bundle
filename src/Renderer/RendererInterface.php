<?php

namespace Taylix\MjmlBundle\Renderer;

interface RendererInterface
{
    public function render(string $mjmlContent, string $templateName): string;
}
