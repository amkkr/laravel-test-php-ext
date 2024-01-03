<?php

declare(strict_types=1);

use Illuminate\Support\Facades\Date;

class Article
{
    public function __construct(
        private readonly int $id,
        private readonly string $title,
        private readonly ?string $content,
        private readonly Date $createdAt,
        private readonly Date $updatedAt,
    ) {
    }

    public function id(): int
    {
        return $this->id;
    }

    public function title(): string
    {
        return $this->title;
    }

    public function content(): ?string
    {
        return $this->content;
    }

    public function update(
        ?int $id,
        ?string $title,
        ?string $content,
    ): Article {
        return new Article(
            id: $id ?? $this->id(),
            title: $title ?? $this->title(),
            content: $content ?? $this->content(),
            createdAt: $this->createdAt,
            updatedAt: $this->isEqual($id, $title, $content) ? $this->updatedAt : new Date()
        );
    }

    public function isEqual(
        ?int $id,
        ?string $title,
        ?string $content,
    ): bool {
        return
            $this->id() === $id
            && $this->title() === $title
            && $this->content() === $content;
    }
}
