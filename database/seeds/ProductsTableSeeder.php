<?php

use App\Category;
use App\Product;
use Illuminate\Database\Seeder;

class ProductsTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        Product::create([
            'name' => 'Mangue / Passion',
            'slug' => 'mangue-passion',
            'price' => 6,
            'details' => 'Lorem ipsum dolor sit amet, consectetur adipiscing elit. Sed sed est id sem porttitor varius.',
            'description' => 'Lorem ipsum dolor sit amet, consectetur adipiscing elit. Maecenas sodales elit at augue posuere, consequat ultrices metus tristique. Aliquam et nisl sodales, vestibulum neque interdum, interdum ligula. Etiam at elementum lectus. Etiam vestibulum mauris nec elementum ornare. Sed fermentum odio nec risus efficitur, ac commodo nulla lacinia. Nullam sit amet enim elit. Sed congue pretium dui nec gravida. Vestibulum id laoreet nisl, in tristique diam. Cras gravida eros vel libero convallis, ac consequat elit gravida. Duis vehicula tincidunt tortor. Fusce sed molestie augue, ut ornare ligula. Morbi sit amet lectus viverra, pellentesque sem et, mattis quam.

            Cras id velit sed sem volutpat maximus at eu nulla. Donec rhoncus mi neque. Quisque enim massa, eleifend non congue non, consequat sit amet risus. Mauris ac diam interdum, porttitor odio a, porttitor ipsum. Mauris eget tristique libero. Nulla auctor lorem sed facilisis varius. Cras ante velit, tempor quis vestibulum nec, tincidunt sed tortor. Etiam ut purus rutrum, eleifend risus sit amet, tincidunt neque. Suspendisse ipsum est, pretium vel mi pellentesque, posuere tincidunt risus. Curabitur tempor tortor dignissim placerat porttitor. Nullam porta sed tortor sed sodales. Phasellus in lobortis lorem, vel tincidunt velit. Proin facilisis in lorem eu sodales. Fusce faucibus, tellus a luctus maximus, enim massa porttitor nisi, sed auctor velit ligula in leo.
            
            Donec at velit eget mauris volutpat dictum. Morbi et lectus id nulla vestibulum eleifend. Integer semper tellus at tellus laoreet, a maximus mauris posuere. Nullam viverra vehicula risus ac viverra. Pellentesque congue imperdiet orci vitae varius. Vivamus cursus maximus vestibulum. Praesent urna tellus, condimentum eu suscipit in, porta nec risus. Phasellus pharetra ex ex, at pellentesque augue tincidunt in. Fusce libero arcu, dictum sit amet turpis et, vulputate aliquam orci.',
            'category_id' => Category::all()->random()->id,
        ]);

        Product::create([
            'name' => 'Mangue / Citron',
            'slug' => 'mangue-citron',
            'price' => 6,
            'details' => 'Lorem ipsum dolor sit amet, consectetur adipiscing elit. Sed sed est id sem porttitor varius.',
            'description' => 'Lorem ipsum dolor sit amet, consectetur adipiscing elit. Maecenas sodales elit at augue posuere, consequat ultrices metus tristique. Aliquam et nisl sodales, vestibulum neque interdum, interdum ligula. Etiam at elementum lectus. Etiam vestibulum mauris nec elementum ornare. Sed fermentum odio nec risus efficitur, ac commodo nulla lacinia. Nullam sit amet enim elit. Sed congue pretium dui nec gravida. Vestibulum id laoreet nisl, in tristique diam. Cras gravida eros vel libero convallis, ac consequat elit gravida. Duis vehicula tincidunt tortor. Fusce sed molestie augue, ut ornare ligula. Morbi sit amet lectus viverra, pellentesque sem et, mattis quam.

            Cras id velit sed sem volutpat maximus at eu nulla. Donec rhoncus mi neque. Quisque enim massa, eleifend non congue non, consequat sit amet risus. Mauris ac diam interdum, porttitor odio a, porttitor ipsum. Mauris eget tristique libero. Nulla auctor lorem sed facilisis varius. Cras ante velit, tempor quis vestibulum nec, tincidunt sed tortor. Etiam ut purus rutrum, eleifend risus sit amet, tincidunt neque. Suspendisse ipsum est, pretium vel mi pellentesque, posuere tincidunt risus. Curabitur tempor tortor dignissim placerat porttitor. Nullam porta sed tortor sed sodales. Phasellus in lobortis lorem, vel tincidunt velit. Proin facilisis in lorem eu sodales. Fusce faucibus, tellus a luctus maximus, enim massa porttitor nisi, sed auctor velit ligula in leo.
            
            Donec at velit eget mauris volutpat dictum. Morbi et lectus id nulla vestibulum eleifend. Integer semper tellus at tellus laoreet, a maximus mauris posuere. Nullam viverra vehicula risus ac viverra. Pellentesque congue imperdiet orci vitae varius. Vivamus cursus maximus vestibulum. Praesent urna tellus, condimentum eu suscipit in, porta nec risus. Phasellus pharetra ex ex, at pellentesque augue tincidunt in. Fusce libero arcu, dictum sit amet turpis et, vulputate aliquam orci.',
            'category_id' => Category::all()->random()->id,
        ]);

        Product::create([
            'name' => 'Mangue / Cassis',
            'slug' => 'mangue-cassis',
            'price' => 6,
            'details' => 'Lorem ipsum dolor sit amet, consectetur adipiscing elit. Sed sed est id sem porttitor varius.',
            'description' => 'Lorem ipsum dolor sit amet, consectetur adipiscing elit. Maecenas sodales elit at augue posuere, consequat ultrices metus tristique. Aliquam et nisl sodales, vestibulum neque interdum, interdum ligula. Etiam at elementum lectus. Etiam vestibulum mauris nec elementum ornare. Sed fermentum odio nec risus efficitur, ac commodo nulla lacinia. Nullam sit amet enim elit. Sed congue pretium dui nec gravida. Vestibulum id laoreet nisl, in tristique diam. Cras gravida eros vel libero convallis, ac consequat elit gravida. Duis vehicula tincidunt tortor. Fusce sed molestie augue, ut ornare ligula. Morbi sit amet lectus viverra, pellentesque sem et, mattis quam.

            Cras id velit sed sem volutpat maximus at eu nulla. Donec rhoncus mi neque. Quisque enim massa, eleifend non congue non, consequat sit amet risus. Mauris ac diam interdum, porttitor odio a, porttitor ipsum. Mauris eget tristique libero. Nulla auctor lorem sed facilisis varius. Cras ante velit, tempor quis vestibulum nec, tincidunt sed tortor. Etiam ut purus rutrum, eleifend risus sit amet, tincidunt neque. Suspendisse ipsum est, pretium vel mi pellentesque, posuere tincidunt risus. Curabitur tempor tortor dignissim placerat porttitor. Nullam porta sed tortor sed sodales. Phasellus in lobortis lorem, vel tincidunt velit. Proin facilisis in lorem eu sodales. Fusce faucibus, tellus a luctus maximus, enim massa porttitor nisi, sed auctor velit ligula in leo.
            
            Donec at velit eget mauris volutpat dictum. Morbi et lectus id nulla vestibulum eleifend. Integer semper tellus at tellus laoreet, a maximus mauris posuere. Nullam viverra vehicula risus ac viverra. Pellentesque congue imperdiet orci vitae varius. Vivamus cursus maximus vestibulum. Praesent urna tellus, condimentum eu suscipit in, porta nec risus. Phasellus pharetra ex ex, at pellentesque augue tincidunt in. Fusce libero arcu, dictum sit amet turpis et, vulputate aliquam orci.',
            'category_id' => Category::all()->random()->id,
        ]);

        Product::create([
            'name' => 'Mangue / Fraise',
            'slug' => 'mangue-fraise',
            'price' => 6,
            'details' => 'Lorem ipsum dolor sit amet, consectetur adipiscing elit. Sed sed est id sem porttitor varius.',
            'description' => 'Lorem ipsum dolor sit amet, consectetur adipiscing elit. Maecenas sodales elit at augue posuere, consequat ultrices metus tristique. Aliquam et nisl sodales, vestibulum neque interdum, interdum ligula. Etiam at elementum lectus. Etiam vestibulum mauris nec elementum ornare. Sed fermentum odio nec risus efficitur, ac commodo nulla lacinia. Nullam sit amet enim elit. Sed congue pretium dui nec gravida. Vestibulum id laoreet nisl, in tristique diam. Cras gravida eros vel libero convallis, ac consequat elit gravida. Duis vehicula tincidunt tortor. Fusce sed molestie augue, ut ornare ligula. Morbi sit amet lectus viverra, pellentesque sem et, mattis quam.

            Cras id velit sed sem volutpat maximus at eu nulla. Donec rhoncus mi neque. Quisque enim massa, eleifend non congue non, consequat sit amet risus. Mauris ac diam interdum, porttitor odio a, porttitor ipsum. Mauris eget tristique libero. Nulla auctor lorem sed facilisis varius. Cras ante velit, tempor quis vestibulum nec, tincidunt sed tortor. Etiam ut purus rutrum, eleifend risus sit amet, tincidunt neque. Suspendisse ipsum est, pretium vel mi pellentesque, posuere tincidunt risus. Curabitur tempor tortor dignissim placerat porttitor. Nullam porta sed tortor sed sodales. Phasellus in lobortis lorem, vel tincidunt velit. Proin facilisis in lorem eu sodales. Fusce faucibus, tellus a luctus maximus, enim massa porttitor nisi, sed auctor velit ligula in leo.
            
            Donec at velit eget mauris volutpat dictum. Morbi et lectus id nulla vestibulum eleifend. Integer semper tellus at tellus laoreet, a maximus mauris posuere. Nullam viverra vehicula risus ac viverra. Pellentesque congue imperdiet orci vitae varius. Vivamus cursus maximus vestibulum. Praesent urna tellus, condimentum eu suscipit in, porta nec risus. Phasellus pharetra ex ex, at pellentesque augue tincidunt in. Fusce libero arcu, dictum sit amet turpis et, vulputate aliquam orci.',
            'category_id' => Category::all()->random()->id,
        ]);

        Product::create([
            'name' => 'Mangue / Framboise',
            'slug' => 'mangue-framboise',
            'price' => 6,
            'details' => 'Lorem ipsum dolor sit amet, consectetur adipiscing elit. Sed sed est id sem porttitor varius.',
            'description' => 'Lorem ipsum dolor sit amet, consectetur adipiscing elit. Maecenas sodales elit at augue posuere, consequat ultrices metus tristique. Aliquam et nisl sodales, vestibulum neque interdum, interdum ligula. Etiam at elementum lectus. Etiam vestibulum mauris nec elementum ornare. Sed fermentum odio nec risus efficitur, ac commodo nulla lacinia. Nullam sit amet enim elit. Sed congue pretium dui nec gravida. Vestibulum id laoreet nisl, in tristique diam. Cras gravida eros vel libero convallis, ac consequat elit gravida. Duis vehicula tincidunt tortor. Fusce sed molestie augue, ut ornare ligula. Morbi sit amet lectus viverra, pellentesque sem et, mattis quam.

            Cras id velit sed sem volutpat maximus at eu nulla. Donec rhoncus mi neque. Quisque enim massa, eleifend non congue non, consequat sit amet risus. Mauris ac diam interdum, porttitor odio a, porttitor ipsum. Mauris eget tristique libero. Nulla auctor lorem sed facilisis varius. Cras ante velit, tempor quis vestibulum nec, tincidunt sed tortor. Etiam ut purus rutrum, eleifend risus sit amet, tincidunt neque. Suspendisse ipsum est, pretium vel mi pellentesque, posuere tincidunt risus. Curabitur tempor tortor dignissim placerat porttitor. Nullam porta sed tortor sed sodales. Phasellus in lobortis lorem, vel tincidunt velit. Proin facilisis in lorem eu sodales. Fusce faucibus, tellus a luctus maximus, enim massa porttitor nisi, sed auctor velit ligula in leo.
            
            Donec at velit eget mauris volutpat dictum. Morbi et lectus id nulla vestibulum eleifend. Integer semper tellus at tellus laoreet, a maximus mauris posuere. Nullam viverra vehicula risus ac viverra. Pellentesque congue imperdiet orci vitae varius. Vivamus cursus maximus vestibulum. Praesent urna tellus, condimentum eu suscipit in, porta nec risus. Phasellus pharetra ex ex, at pellentesque augue tincidunt in. Fusce libero arcu, dictum sit amet turpis et, vulputate aliquam orci.',
            'category_id' => Category::all()->random()->id,
        ]);

        Product::create([
            'name' => 'Mangue / Orange',
            'slug' => 'mangue-orange',
            'price' => 6,
            'details' => 'Lorem ipsum dolor sit amet, consectetur adipiscing elit. Sed sed est id sem porttitor varius.',
            'description' => 'Lorem ipsum dolor sit amet, consectetur adipiscing elit. Maecenas sodales elit at augue posuere, consequat ultrices metus tristique. Aliquam et nisl sodales, vestibulum neque interdum, interdum ligula. Etiam at elementum lectus. Etiam vestibulum mauris nec elementum ornare. Sed fermentum odio nec risus efficitur, ac commodo nulla lacinia. Nullam sit amet enim elit. Sed congue pretium dui nec gravida. Vestibulum id laoreet nisl, in tristique diam. Cras gravida eros vel libero convallis, ac consequat elit gravida. Duis vehicula tincidunt tortor. Fusce sed molestie augue, ut ornare ligula. Morbi sit amet lectus viverra, pellentesque sem et, mattis quam.

            Cras id velit sed sem volutpat maximus at eu nulla. Donec rhoncus mi neque. Quisque enim massa, eleifend non congue non, consequat sit amet risus. Mauris ac diam interdum, porttitor odio a, porttitor ipsum. Mauris eget tristique libero. Nulla auctor lorem sed facilisis varius. Cras ante velit, tempor quis vestibulum nec, tincidunt sed tortor. Etiam ut purus rutrum, eleifend risus sit amet, tincidunt neque. Suspendisse ipsum est, pretium vel mi pellentesque, posuere tincidunt risus. Curabitur tempor tortor dignissim placerat porttitor. Nullam porta sed tortor sed sodales. Phasellus in lobortis lorem, vel tincidunt velit. Proin facilisis in lorem eu sodales. Fusce faucibus, tellus a luctus maximus, enim massa porttitor nisi, sed auctor velit ligula in leo.
            
            Donec at velit eget mauris volutpat dictum. Morbi et lectus id nulla vestibulum eleifend. Integer semper tellus at tellus laoreet, a maximus mauris posuere. Nullam viverra vehicula risus ac viverra. Pellentesque congue imperdiet orci vitae varius. Vivamus cursus maximus vestibulum. Praesent urna tellus, condimentum eu suscipit in, porta nec risus. Phasellus pharetra ex ex, at pellentesque augue tincidunt in. Fusce libero arcu, dictum sit amet turpis et, vulputate aliquam orci.',
            'category_id' => Category::all()->random()->id,
        ]);

        Product::create([
            'name' => 'Mangue / Mandarine',
            'slug' => 'mangue-mandarine',
            'price' => 6,
            'details' => 'Lorem ipsum dolor sit amet, consectetur adipiscing elit. Sed sed est id sem porttitor varius.',
            'description' => 'Lorem ipsum dolor sit amet, consectetur adipiscing elit. Maecenas sodales elit at augue posuere, consequat ultrices metus tristique. Aliquam et nisl sodales, vestibulum neque interdum, interdum ligula. Etiam at elementum lectus. Etiam vestibulum mauris nec elementum ornare. Sed fermentum odio nec risus efficitur, ac commodo nulla lacinia. Nullam sit amet enim elit. Sed congue pretium dui nec gravida. Vestibulum id laoreet nisl, in tristique diam. Cras gravida eros vel libero convallis, ac consequat elit gravida. Duis vehicula tincidunt tortor. Fusce sed molestie augue, ut ornare ligula. Morbi sit amet lectus viverra, pellentesque sem et, mattis quam.

            Cras id velit sed sem volutpat maximus at eu nulla. Donec rhoncus mi neque. Quisque enim massa, eleifend non congue non, consequat sit amet risus. Mauris ac diam interdum, porttitor odio a, porttitor ipsum. Mauris eget tristique libero. Nulla auctor lorem sed facilisis varius. Cras ante velit, tempor quis vestibulum nec, tincidunt sed tortor. Etiam ut purus rutrum, eleifend risus sit amet, tincidunt neque. Suspendisse ipsum est, pretium vel mi pellentesque, posuere tincidunt risus. Curabitur tempor tortor dignissim placerat porttitor. Nullam porta sed tortor sed sodales. Phasellus in lobortis lorem, vel tincidunt velit. Proin facilisis in lorem eu sodales. Fusce faucibus, tellus a luctus maximus, enim massa porttitor nisi, sed auctor velit ligula in leo.
            
            Donec at velit eget mauris volutpat dictum. Morbi et lectus id nulla vestibulum eleifend. Integer semper tellus at tellus laoreet, a maximus mauris posuere. Nullam viverra vehicula risus ac viverra. Pellentesque congue imperdiet orci vitae varius. Vivamus cursus maximus vestibulum. Praesent urna tellus, condimentum eu suscipit in, porta nec risus. Phasellus pharetra ex ex, at pellentesque augue tincidunt in. Fusce libero arcu, dictum sit amet turpis et, vulputate aliquam orci.',
            'category_id' => Category::all()->random()->id,
        ]);

        Product::create([
            'name' => 'Mangue / Coco',
            'slug' => 'mangue-coco',
            'price' => 6,
            'details' => 'Lorem ipsum dolor sit amet, consectetur adipiscing elit. Sed sed est id sem porttitor varius.',
            'description' => 'Lorem ipsum dolor sit amet, consectetur adipiscing elit. Maecenas sodales elit at augue posuere, consequat ultrices metus tristique. Aliquam et nisl sodales, vestibulum neque interdum, interdum ligula. Etiam at elementum lectus. Etiam vestibulum mauris nec elementum ornare. Sed fermentum odio nec risus efficitur, ac commodo nulla lacinia. Nullam sit amet enim elit. Sed congue pretium dui nec gravida. Vestibulum id laoreet nisl, in tristique diam. Cras gravida eros vel libero convallis, ac consequat elit gravida. Duis vehicula tincidunt tortor. Fusce sed molestie augue, ut ornare ligula. Morbi sit amet lectus viverra, pellentesque sem et, mattis quam.

            Cras id velit sed sem volutpat maximus at eu nulla. Donec rhoncus mi neque. Quisque enim massa, eleifend non congue non, consequat sit amet risus. Mauris ac diam interdum, porttitor odio a, porttitor ipsum. Mauris eget tristique libero. Nulla auctor lorem sed facilisis varius. Cras ante velit, tempor quis vestibulum nec, tincidunt sed tortor. Etiam ut purus rutrum, eleifend risus sit amet, tincidunt neque. Suspendisse ipsum est, pretium vel mi pellentesque, posuere tincidunt risus. Curabitur tempor tortor dignissim placerat porttitor. Nullam porta sed tortor sed sodales. Phasellus in lobortis lorem, vel tincidunt velit. Proin facilisis in lorem eu sodales. Fusce faucibus, tellus a luctus maximus, enim massa porttitor nisi, sed auctor velit ligula in leo.
            
            Donec at velit eget mauris volutpat dictum. Morbi et lectus id nulla vestibulum eleifend. Integer semper tellus at tellus laoreet, a maximus mauris posuere. Nullam viverra vehicula risus ac viverra. Pellentesque congue imperdiet orci vitae varius. Vivamus cursus maximus vestibulum. Praesent urna tellus, condimentum eu suscipit in, porta nec risus. Phasellus pharetra ex ex, at pellentesque augue tincidunt in. Fusce libero arcu, dictum sit amet turpis et, vulputate aliquam orci.',
            'category_id' => Category::all()->random()->id,
        ]);
    }
}
