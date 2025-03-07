<?php

declare(strict_types=1);

namespace Yiisoft\Widget\Tests\Stubs;

use Yiisoft\Widget\Widget;

final class TestWidget extends Widget
{
    private string $id;

    protected function run(): string
    {
        return '<run-' . $this->id . '>';
    }

    public function id(string $value): Widget
    {
        $this->id = $value;

        return $this;
    }
}
