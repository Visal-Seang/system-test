<?php

namespace Tests\Unit;

use App\Models\Task;
use Illuminate\Foundation\Testing\RefreshDatabase;
use Tests\TestCase;

class TaskUnitTest extends TestCase
{

    public function test_task_creation(): void
    {
        $task = Task::factory()->create([
            'title' => 'Test Task',
            'completed' => false,
        ]);

        $this->assertDatabaseHas('tasks', [
            'title' => 'Test Task',
            'completed' => false,
        ]);

        $this->assertEquals('Test Task', $task->title);
        $this->assertFalse($task->completed);
    }
}
