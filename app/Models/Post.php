<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Post extends Model
{
    use HasFactory;
    //class name and table maybe difference
    protected $table = 'student';
    protected $primaryKey = 'id';
    //if you donot want to use created_at/updated_at
    public $timestamps = false;
    //protected $dateFormat = 'h:m:s';// format date


    // danh sách các trường select ra
    // khi thêm column nào ở trong db thì phải thêm vào fillable
    protected $fillable = ['student_code', 'name', 'class', 'image_path'];
}
