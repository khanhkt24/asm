<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Facades\DB;

class News extends Model
{
    use HasFactory;

    protected $fillable = [
        'category_id',
        'image',
        'name',
        'title',
        'view',
        'date_add',
        'content',
    ];

    public function getAll(){

        $news = DB::table('news')
            ->join('categories','news.category_id','=','categories.id')
            ->select('news.*','categories.name_category')
            ->orderBy('news.id','DESC')
            ->get();

        return $news;
    }

    public function createNews($data){

         DB::table('news')->insert($data);

    }

    public function updateNews($data,$id){

        DB::table('news')
            ->where('id',$id)
            ->update($data);
   }



}
