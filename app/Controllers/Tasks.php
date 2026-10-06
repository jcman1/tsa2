<?php

namespace App\Controllers;

use App\Models\TaskModel;

class Tasks extends BaseController
{
    public function index()
    {
        $taskModel = new TaskModel();

        return view('tasks/index', [
            'tasks' => $taskModel->activeTasks()
        ]);
    }

    public function new()
    {
        if (!session()->get('isLoggedIn')) {
            return redirect()->to('/login')
                ->with('error', 'You must be logged in to create a task.');
        }

        return view('tasks/new');
    }

    public function create()
    {
        if (!session()->get('isLoggedIn')) {
            return redirect()->to('/login')
                ->with('error', 'You must be logged in to create a task.');
        }

        $rules = [
            'title' => 'required',
            'task_date' => 'required'
        ];

        if (!$this->validate($rules)) {
            return redirect()->back()
                ->withInput()
                ->with('errors', $this->validator->getErrors());
        }

        $taskModel = new TaskModel();

        $taskModel->insert([
            'title' => $this->request->getPost('title'),
            'description' => $this->request->getPost('description'),
            'task_date' => $this->request->getPost('task_date'),
            'is_archived' => 0
        ]);

        return redirect()->to('/tasks')
            ->with('success', 'Task created successfully.');
    }

    public function edit($id)
    {
        if (!session()->get('isLoggedIn')) {
            return redirect()->to('/login')
                ->with('error', 'You must be logged in to edit a task.');
        }

        $taskModel = new TaskModel();

        $task = $taskModel
            ->where('id', $id)
            ->where('is_archived', 0)
            ->first();

        if (!$task) {
            return redirect()->to('/tasks')
                ->with('error', 'Task not found.');
        }

        return view('tasks/edit', [
            'task' => $task
        ]);
    }

    public function update($id)
    {
        if (!session()->get('isLoggedIn')) {
            return redirect()->to('/login')
                ->with('error', 'You must be logged in to edit a task.');
        }

        $rules = [
            'title' => 'required',
            'task_date' => 'required'
        ];

        if (!$this->validate($rules)) {
            return redirect()->back()
                ->withInput()
                ->with('errors', $this->validator->getErrors());
        }

        $taskModel = new TaskModel();

        $task = $taskModel
            ->where('id', $id)
            ->where('is_archived', 0)
            ->first();

        if (!$task) {
            return redirect()->to('/tasks')
                ->with('error', 'Task not found.');
        }

        $taskModel->update($id, [
            'title' => $this->request->getPost('title'),
            'description' => $this->request->getPost('description'),
            'task_date' => $this->request->getPost('task_date')
        ]);

        return redirect()->to('/tasks')
            ->with('success', 'Task updated successfully.');
    }

    public function delete($id)
    {
        if (!session()->get('isLoggedIn')) {
            return redirect()->to('/login')
                ->with('error', 'You must be logged in to delete a task.');
        }

        $taskModel = new TaskModel();

        $task = $taskModel
            ->where('id', $id)
            ->where('is_archived', 0)
            ->first();

        if (!$task) {
            return redirect()->to('/tasks')
                ->with('error', 'Task not found.');
        }

        $taskModel->update($id, [
            'is_archived' => 1
        ]);

        return redirect()->to('/tasks')
            ->with('success', 'Task deleted successfully.');
    }
}