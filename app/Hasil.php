<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Hasil extends Model
{
    protected $table = "hasil";
    protected $primaryKey = "id";
    protected $fillable = [
        'id', 'user_id','pertanyaan_id', 'jawaban_id'];

        public function User()
        {
            return $this->belongsTo(User::class);   
        } 
        public function jawaban()
        {
        return $this->belongsTo(Jawaban::class);   
        } 
        public function pertanyaan()
        {
        return $this->belongsTo(Pertanyaan::class);   
        } 
}
