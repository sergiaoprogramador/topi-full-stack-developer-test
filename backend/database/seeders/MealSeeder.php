<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class MealSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('meals')->insert(
            [
                [
                    'name' => 'Corba',
                    'drink_alternate' => null,
                    'instructions' => "Pick through your lentils for any foreign debris, rinse them 2 or 3 times, drain, and set aside.  Fair warning, this will probably turn your lentils into a solid block that you’ll have to break up later\r\nIn a large pot over medium-high heat, sauté the olive oil and the onion with a pinch of salt for about 3 minutes, then add the carrots and cook for another 3 minutes.\r\nAdd the tomato paste and stir it around for around 1 minute. Now add the cumin, paprika, mint, thyme, black pepper, and red pepper as quickly as you can and stir for 10 seconds to bloom the spices. Congratulate yourself on how amazing your house now smells.\r\nImmediately add the lentils, water, broth, and salt. Bring the soup to a (gentle) boil.\r\nAfter it has come to a boil, reduce heat to medium-low, cover the pot halfway, and cook for 15-20 minutes or until the lentils have fallen apart and the carrots are completely cooked.\r\nAfter the soup has cooked and the lentils are tender, blend the soup either in a blender or simply use a hand blender to reach the consistency you desire. Taste for seasoning and add more salt if necessary.\r\nServe with crushed-up crackers, torn up bread, or something else to add some extra thickness.  You could also use a traditional thickener (like cornstarch or flour), but I prefer to add crackers for some texture and saltiness.  Makes great leftovers, stays good in the fridge for about a week.",
                    'meal_thumb' => "https://www.themealdb.com/images/media/meals/58oia61564916529.jpg",
                    'tags' => '{
                        "name": "soup"
                    }',
                    'youtube' => "https://www.youtube.com/watch?v=VVnZd8A84z4",
                    'ingredients' => '[
                        {
                            "name": "Lentils",
                            "measure": "1 cup"
                        },
                        {
                            "name": "Onion",
                            "measure": "1 large"
                        },
                        {
                            "name": "Carrots",
                            "measure": "1 large"
                        },
                        {
                            "name": "Tomato Puree",
                            "measure": "1 tbs"
                        },
                        {
                            "name": "Cumin",
                            "measure": "2 tsp"
                        },
                        {
                            "name": "Parprika",
                            "measure": "1 tsp"
                        },
                        {
                            "name": "Mint",
                            "measure": "1/2 tsp"
                        },
                        {
                            "name": "Thyme",
                            "measure": "1/2 tsp"
                        },
                        {
                            "name": "Black Pepper",
                            "measure": "1/4 tsp"
                        },
                        {
                            "name": "Red Pepper Flakes",
                            "measure": "1/4 tsp"
                        },
                        {
                            "name": "Vegetable Stock",
                            "measure": "4 cups"
                        },
                        {
                            "name": "Water",
                            "measure": "1 cup"
                        },
                        {
                            "name": "Sea Salt",
                            "measure": "Pinch"
                        }
                    ]',
                    "source" => "https://findingtimeforcooking.com/main-dishes/red-lentil-soup-corba/",
                    "image_source" => null,
                    "creative_commons_confirmed" => null,
                    'category_id' => 1,
                    'area_id' => 1
                ],
                [
                    'name' => 'Kumpir',
                    'drink_alternate' => null,
                    'instructions' => "If you order kumpir in Turkey, the standard filling is first, lots of butter mashed into the potato, followed by cheese. There’s then a row of other toppings that you can just point at to your heart’s content – sweetcorn, olives, salami, coleslaw, Russian salad, allsorts – and you walk away with an over-stuffed potato because you got ever-excited by the choices on offer.\r\n\r\nGrate (roughly – you can use as much as you like) 150g of cheese.\r\nFinely chop one onion and one sweet red pepper.\r\nPut these ingredients into a large bowl with a good sprinkling of salt and pepper, chilli flakes (optional).",
                    'meal_thumb' => "https://www.themealdb.com/images/media/meals/mlchx21564916997.jpg",
                    'tags' => '{
                        "name": "SideDish"
                    }',
                    'youtube' => "https://www.youtube.com/watch?v=IEDEtZ4UVtI",
                    'ingredients' => '[
                        {
                            "name": "Potatoes",
                            "measure": "2 large"
                        },
                        {
                            "name": "Butter",
                            "measure": "2 tbs"
                        },
                        {
                            "name": "Cheese",
                            "measure": "150g"
                        },
                        {
                            "name": "Onion",
                            "measure": "1 large"
                        },
                        {
                            "name": "Red Pepper",
                            "measure": "1 large"
                        },
                        {
                            "name": "Red Chile Flakes",
                            "measure": "Pinch"
                        }
                    ]',
                    "source" => "http://www.turkeysforlife.com/2013/10/firinda-kumpir-turkish-street-food.html",
                    "image_source" => null,
                    "creative_commons_confirmed" => null,
                    'category_id' => 1,
                    'area_id' => 1
                ],
                [
                    'name' => 'Tamiya',
                    'drink_alternate' => null,
                    'instructions' => "oak the beans in water to cover overnight.Drain. If skinless beans are unavailable, rub to loosen the skins, then discard the skins. Pat the beans dry with a towel.\r\nGrind the beans in a food mill or meat grinder.If neither appliance is available, process them in a food processor but only until the beans form a paste. (If blended too smoothly, the batter tends to fall apart during cooking.) Add the scallions, garlic, cilantro, cumin, baking powder, cayenne, salt, pepper, and coriander, if using.  Refrigerate for at least 30 minutes.\r\nShape the bean mixture into 1-inch balls.Flatten slightly and coat with flour.\r\nHeat at least 1½-inches of oil over medium heat to 365 degrees.\r\nFry the patties in batches, turning once, until golden brown on all sides, about 5 minutes.Remove with a wire mesh skimmer or slotted spoon. Serve as part of a meze or in pita bread with tomato-cucumber salad and tahina sauce.",
                    'meal_thumb' => "https://www.themealdb.com/images/media/meals/n3xxd91598732796.jpg",
                    'tags' => null,
                    'youtube' => "https://www.youtube.com/watch?v=mulqW-J3Yy4",
                    'ingredients' => '[
                        {
                            "name": "Broad Beans",
                            "measure": "3 cups"
                        },
                        {
                            "name": "Spring Onions",
                            "measure": "6"
                        },
                        {
                            "name": "Garlic Clove",
                            "measure": "4"
                        },
                        {
                            "name": "Parsley",
                            "measure": "1/4 cup"
                        },
                        {
                            "name": "Cumin",
                            "measure": "2 tsp"
                        },
                        {
                            "name": "Baking Powde",
                            "measure": "1 tsp"
                        },
                        {
                            "name": "Cayenne Pepper",
                            "measure": "1/2 tsp"
                        },
                        {
                            "name": "Flour",
                            "measure": "Spinkling"
                        },
                        {
                            "name": "Vegetable Oil",
                            "measure": "As required"
                        }
                    ]',
                    "source" => "https://oukosher.org/recipes/tamiya-egyptian-dried-fava-bean-fritters/",
                    "image_source" => null,
                    "creative_commons_confirmed" => null,
                    'category_id' => 2,
                    'area_id' => 2
                ],
                [
                    'name' => 'Dal fry',
                    'drink_alternate' => null,
                    'instructions' => "Wash and soak toor dal in approx. 3 cups of water, for at least one hours. Dal will be double in volume after soaking. Drain the water.\r\nCook dal with 2-1/2 cups water and add salt, turmeric, on medium high heat, until soft in texture (approximately 30 mins) it should be like thick soup.\r\nIn a frying pan, heat the ghee. Add cumin seeds, and mustard seeds. After the seeds crack, add bay leaves, green chili, ginger and chili powder. Stir for a few seconds.\r\nAdd tomatoes, salt and sugar stir and cook until tomatoes are tender and mushy.\r\nAdd cilantro and garam masala cook for about one minute.\r\nPour the seasoning over dal mix it well and cook for another minute.\r\nServe with Naan.",
                    'meal_thumb' => "https://www.themealdb.com/images/media/meals/wuxrtu1483564410.jpg",
                    'tags' => '[
                        {
                            "name": "Curry"
                        },
                        {
                            "name": "Vegetarian"
                        },
                        {
                            "name": "Cake"
                        }
                    ]',
                    'youtube' => "https://www.youtube.com/watch?v=J4D855Q9-jg",
                    'ingredients' => '[
                        {
                            "name": "Toor dal",
                            "measure": "1 cup"
                        },
                        {
                            "name": "Water",
                            "measure": "2-1/2 cups"
                        },
                        {
                            "name": "Salt",
                            "measure": "1 tsp"
                        },
                        {
                            "name": "Turmeric",
                            "measure": "1/4 tsp"
                        },
                        {
                            "name": "Ghee",
                            "measure": "3 tbs"
                        },
                        {
                            "name": "Chopped tomatoes",
                            "measure": "1 cup"
                        },
                        {
                            "name": "Cumin seeds",
                            "measure": "1/2 tsp"
                        },
                        {
                            "name": "Mustard Seeds",
                            "measure": "1/2 tsp"
                        },
                        {
                            "name": "Bay Leaf",
                            "measure": "2"
                        },
                        {
                            "name": "Green Chili",
                            "measure": "1 tbs chopped"
                        },
                        {
                            "name": "Ginger",
                            "measure": "2 tsp shredded"
                        },
                        {
                            "name": "Cilantro",
                            "measure": "2 tbs"
                        },
                        {
                            "name": "Red Pepper",
                            "measure": "1/2 tsp"
                        },
                        {
                            "name": "Salt",
                            "measure": "1/2 tsp"
                        },
                        {
                            "name": "Sugar",
                            "measure": "1 tsp"
                        },
                        {
                            "name": "Garam Masala",
                            "measure": "1/4 tsp"
                        }
                    ]',
                    "source" => "https://www.instagram.com/p/BO21bpYD3Fu",
                    "image_source" => null,
                    "creative_commons_confirmed" => null,
                    'category_id' => 2,
                    'area_id' => 2
                ],
                [
                    'name' => 'Poutine',
                    'drink_alternate' => null,
                    'instructions' => "Heat oil in a deep fryer or deep heavy skillet to 365°F (185°C).\r\nWarm gravy in saucepan or microwave.\r\nPlace the fries into the hot oil, and cook until light brown, about 5 minutes.\r\nRemove to a paper towel lined plate to drain.\r\nPlace the fries on a serving platter, and sprinkle the cheese over them.\r\nLadle gravy over the fries and cheese, and serve immediately.",
                    'meal_thumb' => "https://www.themealdb.com/images/media/meals/uuyrrx1487327597.jpg",
                    'tags' => '[
                        {
                            "name": "UnHealthy"
                        },
                        {
                            "name": "Speciality"
                        },
                        {
                            "name": "HangoverFood"
                        }
                    ]',
                    'youtube' => "https://www.youtube.com/watch?v=UVAMAoA2_WU",
                    'ingredients' => '[
                        {
                            "name": "Vegetable Oil",
                            "measure": "Dash"
                        },
                        {
                            "name": "Beef Gravy",
                            "measure": "1 Can"
                        },
                        {
                            "name": "Potatoes",
                            "measure": "5 thin cut"
                        },
                        {
                            "name": "Cheese Curds",
                            "measure": "2 cups"
                        }
                    ]',
                    "source" => "http://www.food.com/recipe/real-canadian-poutine-113388",
                    "image_source" => null,
                    "creative_commons_confirmed" => null,
                    'category_id' => 3,
                    'area_id' => 3
                ],
                [
                    'name' => 'Lasagne',
                    'drink_alternate' => null,
                    'instructions' => "Heat the oil in a large saucepan. Use kitchen scissors to snip the bacon into small pieces, or use a sharp knife to chop it on a chopping board. Add the bacon to the pan and cook for just a few mins until starting to turn golden. Add the onion, celery and carrot, and cook over a medium heat for 5 mins, stirring occasionally, until softened.\r\nAdd the garlic and cook for 1 min, then tip in the mince and cook, stirring and breaking it up with a wooden spoon, for about 6 mins until browned all over.\r\nStir in the tomato purée and cook for 1 min, mixing in well with the beef and vegetables. Tip in the chopped tomatoes. Fill each can half full with water to rinse out any tomatoes left in the can, and add to the pan. Add the honey and season to taste. Simmer for 20 mins.\r\nHeat oven to 200C/180C fan/gas 6. To assemble the lasagne, ladle a little of the ragu sauce into the bottom of the roasting tin or casserole dish, spreading the sauce all over the base. Place 2 sheets of lasagne on top of the sauce overlapping to make it fit, then repeat with more sauce and another layer of pasta. Repeat with a further 2 layers of sauce and pasta, finishing with a layer of pasta.\r\nPut the crème fraîche in a bowl and mix with 2 tbsp water to loosen it and make a smooth pourable sauce. Pour this over the top of the pasta, then top with the mozzarella. Sprinkle Parmesan over the top and bake for 25–30 mins until golden and bubbling. Serve scattered with basil, if you like.",
                    'meal_thumb' => "https://www.themealdb.com/images/media/meals/wtsvxx1511296896.jpg",
                    'tags' => null,
                    'youtube' => "https://www.youtube.com/watch?v=gfhfsBPt46s",
                    'ingredients' => '[
                        {
                            "name": "Olive Oil",
                            "measure": "1 tblsp"
                        },
                        {
                            "name": "Bacon",
                            "measure": "2"
                        },
                        {
                            "name": "Onion",
                            "measure": "1 finely chopped"
                        },
                        {
                            "name": "Celery",
                            "measure": "1 Stick"
                        },
                        {
                            "name": "Carrots",
                            "measure": "1 medium"
                        },
                        {
                            "name": "Garlic",
                            "measure": "2 cloves chopped"
                        },
                        {
                            "name": "Minced Beef",
                            "measure": "500g"
                        },
                        {
                            "name": "Tomato Puree",
                            "measure": "1 tbls"
                        },
                        {
                            "name": "Chopped Tomatoes",
                            "measure": "800g"
                        },
                        {
                            "name": "Honey",
                            "measure": "1 tblsp"
                        },
                        {
                            "name": "Lasagne Sheets",
                            "measure": "500g"
                        },
                        {
                            "name": "Creme Fraiche",
                            "measure": "400ml"
                        },
                        {
                            "name": "Mozzarella Balls",
                            "measure": "125g"
                        },
                        {
                            "name": "Parmesan Cheese",
                            "measure": "50g"
                        },
                        {
                            "name": "Basil Leaves",
                            "measure": "Topping"
                        }
                    ]',
                    "source" => "https://www.bbcgoodfood.com/recipes/classic-lasagne",
                    "image_source" => null,
                    "creative_commons_confirmed" => null,
                    'category_id' => 4,
                    'area_id' => 4
                ]
            ]
        );
    }
}
