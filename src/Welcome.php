<?php

declare(strict_types=1);

namespace Laravelwebdev\Welcome;

use Laravel\Nova\Card;

class Welcome extends Card
{
    /**
     * The width of the card (1/3, 1/2, or full).
     *
     * @var string
     */
    public $width = 'full';

    public function title(string $title): static
    {
        return $this->withMeta(['title' => $title]);
    }

    public function description(string $description): static
    {
        return $this->withMeta(['description' => $description]);
    }

    public function addItem(string $icon, string $title, string $content): static
    {
        $currentItems = data_get($this->meta, 'items', []);
        $currentItems[] = [
            'icon' => $icon,
            'title' => $title,
            'content' => $content,
        ];

        return $this->withMeta(['items' => $currentItems]);
    }

    /**
     * Get the component name for the element.
     */
    public function component(): string
    {
        return 'welcome';
    }
}
