<?php

namespace Database\Seeders;

use App\Models\User;
// use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use App\Models\Listing;
use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     */
    public function run(): void
    {
        // User::factory(5)->create();
        
        $user = User::factory()->create([
            'name' => 'John',
            'email' => 'john@gmail.com'
            ]);


        Listing::factory(6)->create([
            'user_id' => $user->id,
        ]);





        // Listing::create([
        //     'title' => 'Laravel Senior Developer',
        //     'tags' => 'laravel, javascript',
        //     'company' => 'Acme Cork',
        //     'location' => 'Boston, MA',
        //     'email' => 'acme@gmail.com',
        //     'website' => 'www.acme.com',
        //     'description' => '
        //     Lorem ipsum dolor sit amet consectetur adipisicing elit. Maxime mollitia,
        //     molestiae quas vel sint commodi repudiandae consequuntur voluptatum laborum
        //     numquam blanditiis harum quisquam eius sed odit fugiat iusto fuga praesentium
        //     optio, eaque rerum! Provident similique accusantium nemo autem. Veritatis
        //     obcaecati tenetur iure eius earum ut molestias architecto voluptate aliquam
        //     nihil, eveniet aliquid culpa officia aut! Impedit sit sunt quaerat, odit,
        //     tenetur error, harum nesciunt ipsum debitis quas aliquid. Reprehenderit,
        //     quia. Quo neque error repudiandae fuga? Ipsa laudantium molestias eos 
        //     sapiente officiis modi at sunt excepturi expedita sint? Sed quibusdam
        //     recusandae alias error harum maxime adipisci 
        //     ',
        // ]);


        // Listing::create([
        //     'title' => 'Laravel L2 Developer',
        //     'tags' => 'laravel, javascript',
        //     'company' => 'max Corp',
        //     'location' => 'Miami, MA',
        //     'email' => 'max@yahoo.com',
        //     'website' => 'www.max.com',
        //     'description' =>'amet laborum. Perspiciatis 
        //     minima nesciunt dolorem! Officiis iure rerum voluptates a cumque velit 
        //     quibusdam sed amet tempora. Sit laborum ab, eius fugit doloribus tenetur 
        //     fugiat, temporibus enim commodi iusto libero magni deleniti quod quam 
        //     consequuntur! Commodi minima excepturi repudiandae velit hic maxime
        //     doloremque. Quaerat provident commodi consectetur veniam similique ad 
        //     earum omnis ipsum saepe, voluptas, hic voluptates pariatur est explicabo 
        //     fugiat, dolorum eligendi quam cupiditate excepturi mollitia maiores labore 
        //     suscipit quas? Nulla, placeat. Voluptatem quaerat non architecto ab laudantium
        //     modi minima sunt esse temporibus sint culpa, recusandae aliquam numquam 
        //     totam ratione voluptas quod exercitationem fuga. Possimus quis earum veniam 
        //     quasi aliquam eligendi, placeat qui corporis!'
        // ]);



    }
}
