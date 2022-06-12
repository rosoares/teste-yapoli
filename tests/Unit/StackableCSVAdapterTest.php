<?php

use App\Services\Adapters\StackableCSVAdapter;
use PHPUnit\Framework\TestCase;

class StackableCSVAdapterTest extends TestCase
{

    private $stackableCSV;

    protected function setUp(): void
    {
        parent::setUp();
        $this->stackableCSV = new StackableCSVAdapter();
    }


    public function test_can_transform_array_in_stack()
    {
        $array = [
            'key1' => 'val1',
            'key2' => 'val2',
            'key3' => 'val3'
        ];

        $stack = $this->stackableCSV->toStack($array);

        $this->assertEquals(3, $stack->count());
        $this->assertEquals('val1', $stack->offsetGet(0));
        $this->assertEquals('val2', $stack->offsetGet(1));
        $this->assertEquals('val3', $stack->offsetGet(2));

    }
}
