<?php

declare(strict_types=1);

namespace Zipkin;

final class SpanCustomizerShield implements SpanCustomizer
{
    /**
     * @var Span
     */
    private $delegate;

    public function __construct(Span $span)
    {
        $this->delegate = $span;
    }

    /**
     * {@inheritdoc}
     */
    public function setName(string $name): void
    {
        $this->delegate->setName($name);
    }
    
    /**
     * {@inheritdoc}
     */
    public function tag(string $key, string $value): void
    {
        $this->delegate->tag($key, $value);
    }

    /**
     * {@inheritdoc}
     */
    public function annotate(string $value, int $timestamp = null): void
    {
        $this->delegate->annotate($value, $timestamp);
    }
}
