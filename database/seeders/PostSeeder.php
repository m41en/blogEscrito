<?php

namespace Database\Seeders;

use App\Models\Post;
use Illuminate\Database\Seeder;

class PostSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        /*
                $post = new Post();
                $post -> fk_id_user = 1;
                $post -> title = 'Laravel';
                $post -> body = 'Lorem ipsum dolor sit amet, consectetur adipiscing elit. Nam finibus lacus a hendrerit volutpat. Nam auctor sit amet leo gravida viverra. Phasellus mi quam, vulputate tincidunt velit in, interdum semper ipsum. ';
                //$post -> datetime = '14-07-2023 21:23';
                $post -> save();

                $post2 = new Post();
                $post2 -> fk_id_user = 3;
                $post2 -> title = 'Angular';
                $post2 -> body = 'Lorem ipsum dolor sit amet, consectetur adipiscing elit. Nam finibus lacus a hendrerit volutpat. Nam auctor sit amet leo gravida viverra.';
                //$post2 -> datetime = '12-07-2023 21:23';
                $post2 -> save();

                $post3 = new Post();
                $post3 -> fk_id_user = 1;
                $post3 -> title = 'React';
                $post3 -> body = 'Lorem ipsum dolor sit amet, consectetur adipiscing elit. Nam finibus lacus a hendrerit volutpat. Nam auctor sit amet leo gravida viverra. Phasellus mi quam, vulputate tincidunt velit in, interdum semper ipsum. ';
                //$post3 -> datetime = '14-07-2023 21:45';
                $post3 -> save();
        */

        /*
        $post  -> user()->attach(1);
        $post2 -> user()->attach(2);
        $post3 -> user()->attach(1);
        */

        Post::factory(10)->create();
    }
}
