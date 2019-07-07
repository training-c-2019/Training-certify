<?php
use App\templates;
use Illuminate\Database\Seeder;
class templete extends Seeder
{
  
    public function run()
    {
		for($i=0;$i<10;$i++){
			$add =new templates;
			$add->body_ara='new body'.rand(0,9);
			$add->body_eng='new body'.rand(0,9);
			$add->description='new desc'.rand(0,9);
			$add->status='new stat'.rand(0,9);
			$add->requires_signature=1;
			$add->layout='new layout'.rand(0,9);
		    $add->save();
		}
    }
}
