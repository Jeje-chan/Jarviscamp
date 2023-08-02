<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Task extends Model
{
    use HasFactory;
    private static $tasks = [
        [
            'id' => 1,
            'name' => 'Tugas 2 Statistika',
            'description' => 'Membuat distribusi frekuensi',
            'deadline' => '2023-03-22',
            'status' => 'Selesai'
        ],
        [
            'id' => 2,
            'name' => 'Tugas 3 Statistika',
            'description' => 'Membuat Korelasi Data',
            'deadline' => '2023-04-20',
            'status' => 'Selesai'
        ],
        [
            'id' => 3,
            'name' => 'Tugas 4 Statistika',
            'description' => 'Membuat Regresi Data',
            'deadline' => '2023-05-25',
            'status' => 'Selesai'
        ],
    ];
    public static function getAll(){
        return self::$tasks;
    }
    public static function getById($id)
    {
        
        foreach (self::$tasks as $task) {
            if ($task['id'] == $id) {
                return $task;
            }
        }

        return null;

    }
} 