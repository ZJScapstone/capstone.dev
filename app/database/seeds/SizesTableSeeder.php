<?php

class SizesTableSeeder extends Seeder {

    public function run()
    {
        
        $size1 = new Size; 
            $size1->size = 'small'; 
            $size1->save();

        $size2 = new Size; 
            $size2->size = 'medium'; 
            $size2->save();

        $size3 = new Size; 
            $size3->size = 'large'; 
            $size3->save();

        $size4 = new Size; 
            $size4->size = 'x-large'; 
            $size4->save();  
    }
}