<?php

namespace Tests\Feature;

use App\Models\Task;
use Illuminate\Foundation\Testing\RefreshDatabase;
use Tests\TestCase;

class TaskFeatureTest extends TestCase
{
    use RefreshDatabase;

    /** @test */
    public function it_can_create_a_task()
    {
        // Simulate a POST request to create a task
        $response = $this->postJson('/tasks', [
            'title' => 'New Task',
            'description' => 'This is a new task.',
            'completed' => false,
            'due_date' => now()->addDays(7),
        ]);

        // Assert the response and database
        $response->assertStatus(201);
        $this->assertDatabaseHas('tasks', ['title' => 'New Task']);
    }

    /** @test */
    public function it_can_retrieve_tasks()
    {
        // Create tasks using the factory
        Task::factory()->count(3)->create();

        // Simulate a GET request to fetch tasks
        $response = $this->getJson('/tasks');

        // Assert the response structure
        $response->assertStatus(200)
                 ->assertJsonCount(3)
                 ->assertJsonStructure([
                     '*' => ['id', 'title', 'description', 'completed', 'due_date'],
                 ]);
    }

    /** @test */
    public function it_can_update_a_task()
    {
        // Create a task
        $task = Task::factory()->create(['title' => 'Old Title']);

        // Simulate a PUT request to update the task
        $response = $this->putJson("/tasks/{$task->id}", [
            'title' => 'Updated Title',
        ]);

        // Assert the response and database
        $response->assertStatus(200);
        $this->assertDatabaseHas('tasks', ['title' => 'Updated Title']);
    }

    /** @test */
    public function it_can_delete_a_task()
    {
        // Create a task
        $task = Task::factory()->create();

        // Simulate a DELETE request to remove the task
        $response = $this->deleteJson("/tasks/{$task->id}");

        // Assert the response and database
        $response->assertStatus(204);
        $this->assertDatabaseMissing('tasks', ['id' => $task->id]);
    }
}
