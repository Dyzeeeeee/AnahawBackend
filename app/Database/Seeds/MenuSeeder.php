<?php

namespace App\Database\Seeds;

use CodeIgniter\Database\Seeder;

class MenuSeeder extends Seeder
{
    public function run()
    {
        $data = [

            // colddrinks 1
            [
                'name' => 'Strawberry Shake',
                'description' => '',
                'image' => 'strawberry shake.jpg',
                'price' => 180,
                'category_id' => 1, 
                'orders' => 0,
                'archived_at' => null
            ],
            [
                'name' => 'Sagot Gulaman',
                'description' => '',
                'image' => 'sagot gulaman.jpg',
                'price' => 70,
                'category_id' => 1, 
                'orders' => 0,
                'archived_at' => null
            ],
            [
                'name' => 'Shirley Temple',
                'description' => '',
                'image' => 'shirley temple.jfif',
                'price' => 85,
                'category_id' => 1, 
                'orders' => 0,
                'archived_at' => null
            ],
            [
                'name' => 'Kalamansi Slush',
                'description' => '',
                'image' => 'kalamansi slush.jfif',
                'price' => 115,
                'category_id' => 1, 
                'orders' => 0,
                'archived_at' => null
            ],
            [
                'name' => 'Iced Coffee Float',
                'description' => '',
                'image' => 'Ice coffee float.jfif',
                'price' => 130,
                'category_id' => 1, 
                'orders' => 0,
                'archived_at' => null
            ],
            [
                'name' => 'Fresh Fruit Shake',
                'description' => '',
                'image' => 'fresh fruit shake.jpg',
                'price' => 155,
                'category_id' => 1, 
                'orders' => 0,
                'archived_at' => null
            ],
            [
                'name' => 'Juice in Can',
                'description' => 'Pineapple/4seasons/Mango',
                'image' => 'juice in can.jpg',
                'price' => 70,
                'category_id' => 1, 
                'orders' => 0,
                'archived_at' => null
            ],
            [
                'name' => 'Softdrinks',
                'description' => '08oz',
                'image' => 'soft drinks 8oz.jfif',
                'price' => 25,
                'category_id' => 1, 
                'orders' => 0,
                'archived_at' => null
            ],
            [
                'name' => 'Softdrinks',
                'description' => '1.5liter',
                'image' => 'soft drinks 1.5.jpg',
                'price' => 130,
                'category_id' => 1, 
                'orders' => 0,
                'archived_at' => null
            ],
            [
                'name' => 'Bottled Water',
                'description' => '500ml',
                'image' => 'bottled water 500.png',
                'price' => 22,
                'category_id' => 1, 
                'orders' => 0,
                'archived_at' => null
            ],
            [
                'name' => 'Bottled Water',
                'description' => '330ml',
                'image' => 'bottled water 300.jpg',
                'price' => 15,
                'category_id' => 1, 
                'orders' => 0,
                'archived_at' => null
            ],
            [
                'name' => 'Mango Queen',
                'description' => '',
                'image' => 'mango queen.jpg',
                'price' => 160,
                'category_id' => 1, 
                'orders' => 0,
                'archived_at' => null
            ],
            [
                'name' => 'Cucumber Lemonade',
                'description' => '',
                'image' => 'Cucumber-Lemonade-5.jpg',
                'price' => 200,
                'category_id' => 1, 
                'orders' => 0,
                'archived_at' => null
            ],
            [
                'name' => 'Iced Tea House Blend',
                'description' => '',
                'image' => 'iced tea house blend.jfif',
                'price' => 200,
                'category_id' => 1, 
                'orders' => 0,
                'archived_at' => null
            ],
            // Alcoholic Drinks 2
            [
                'name' => 'Carlo Rossi wine',
                'description' => '',
                'image' => 'Carlorossi wine.jpg',
                'price' => 650,
                'category_id' => 2, 
                'orders' => 0,
                'archived_at' => null
            ],
            [
                'name' => 'San Mig Flavored',
                'description' => '',
                'image' => 'san-miguel-flavored-beer.jpg',
                'price' => 75,
                'category_id' => 2, 
                'orders' => 0,
                'archived_at' => null
            ],
            [
                'name' => 'San Mig Light',
                'description' => '',
                'image' => 'san mig light.png',
                'price' => 75,
                'category_id' => 2, 
                'orders' => 0,
                'archived_at' => null
            ],
            [
                'name' => 'San Mig Pale Pilsen',
                'description' => '',
                'image' => 'san mig pale pilsen.png',
                'price' => 75,
                'category_id' => 2, 
                'orders' => 0,
                'archived_at' => null
            ],
            [
                'name' => 'Mule',
                'description' => '',
                'image' => 'mule.jpg',
                'price' => 75,
                'category_id' => 2, // Assuming there is a category with ID 1
                'orders' => 0,
                'archived_at' => null
            ],
            [
                'name' => 'SML can',
                'description' => '',
                'image' => 'smlcan.jpg',
                'price' => 75,
                'category_id' => 2, // Assuming there is a category with ID 1
                'orders' => 0,
                'archived_at' => null
            ],
            [
                'name' => 'Tanduay ice',
                'description' => '',
                'image' => 'tanduay ice.jpg',
                'price' => 75,
                'category_id' => 2, // Assuming there is a category with ID 1
                'orders' => 0,
                'archived_at' => null
            ],
            [
                'name' => 'Beer na Beer',
                'description' => '',
                'image' => 'beer na beer.jpg',
                'price' => 75,
                'category_id' => 2, // Assuming there is a category with ID 1
                'orders' => 0,
                'archived_at' => null
            ],
            [
                'name' => 'Red Horse',
                'description' => '330ml',
                'image' => 'red-horse-bottle-330ml_2.jpg',
                'price' => 75,
                'category_id' => 2, 
                'orders' => 0,
                'archived_at' => null
            ],
            [
                'name' => 'Emperador Light',
                'description' => '750ml',
                'image' => 'emperador light 750.jpg',
                'price' => 350,
                'category_id' => 2, 
                'orders' => 0,
                'archived_at' => null
            ],
            [
                'name' => 'GSM Blue',
                'description' => '700ml',
                'image' => 'GSM blue 700.jfif',
                'price' => 350,
                'category_id' => 2, 
                'orders' => 0,
                'archived_at' => null
            ],
            [
                'name' => 'Red Wine',
                'description' => '',
                'image' => 'Red wine.jpg',
                'price' => 550,
                'category_id' => 2, 
                'orders' => 0,
                'archived_at' => null
            ],
            [
                'name' => 'El Hombre Tequila',
                'description' => '',
                'image' => 'el hombre.jpg',
                'price' => 700,
                'category_id' => 2, 
                'orders' => 0,
                'archived_at' => null
            ],
            [
                'name' => 'Alfonso',
                'description' => '1 liter',
                'image' => 'Alfonso 1 liter.jpg',
                'price' => 700,
                'category_id' => 2, 
                'orders' => 0,
                'archived_at' => null
            ],
            [
                'name' => 'Fundador',
                'description' => '1 liter',
                'image' => 'Fundador.avif',
                'price' => 1050,
                'category_id' => 2, 
                'orders' => 0,
                'archived_at' => null
            ],
            [
                'name' => 'Jose Cuervo',
                'description' => '1 liter',
                'image' => 'jose cuervo.jpeg',
                'price' => 2500,
                'category_id' => 2, 
                'orders' => 0,
                'archived_at' => null
            ],
            [
                'name' => 'Black Label',
                'description' => '1 liter',
                'image' => 'Black label.jpg',
                'price' => 2800,
                'category_id' => 2, 
                'orders' => 0,
                'archived_at' => null
            ],
            // Mixed Cocktails 3
            [
                'name' => 'Tequila Sunrise',
                'description' => '',
                'image' => 'tequila-sunrise-18167a1.jpg',
                'price' => 105,
                'category_id' => 3, 
                'orders' => 0,
                'archived_at' => null
            ],
            [
                'name' => 'Margarita',
                'description' => '',
                'image' => 'margarita-google-1000x1000.jpg',
                'price' => 105,
                'category_id' => 3, 
                'orders' => 0,
                'archived_at' => null
            ],
            [
                'name' => 'Dirty Shirley',
                'description' => '',
                'image' => 'DIRTY-SHIRLEY-3-1.jpg',
                'price' => 105,
                'category_id' => 3, 
                'orders' => 0,
                'archived_at' => null
            ],
            [
                'name' => 'Pina Colada',
                'description' => '',
                'image' => 'pina-colada-c68aca7.jpg',
                'price' => 105,
                'category_id' => 3, 
                'orders' => 0,
                'archived_at' => null
            ],
            [
                'name' => 'Tequila Pop',
                'description' => '',
                'image' => 'tequila pop.png',
                'price' => 105,
                'category_id' => 3, 
                'orders' => 0,
                'archived_at' => null
            ],
            [
                'name' => 'Pink Margarita',
                'description' => '',
                'image' => 'pink margarita.jpg',
                'price' => 105,
                'category_id' => 3, 
                'orders' => 0,
                'archived_at' => null
            ],
            [
                'name' => 'Daiquiri',
                'description' => '',
                'image' => 'Daiquiri_3000x3000_primary-206eb2330cb04852ab7d780dcf3d55ef.jpg',
                'price' => 105,
                'category_id' => 3, 
                'orders' => 0,
                'archived_at' => null
            ],
            [
                'name' => 'Mindoro Sling Pitcher',
                'description' => '',
                'image' => 'mindoro-sling-pitcher.png',
                'price' => 600,
                'category_id' => 3, 
                'orders' => 0,
                'archived_at' => null
            ],
            [
                'name' => 'Smirnoff-Mule',
                'description' => '',
                'image' => 'smirnoff.jpg',
                'price' => 80,
                'category_id' => 3, 
                'orders' => 0,
                'archived_at' => null
            ],
            [
                'name' => 'Cuba Libre',
                'description' => '',
                'image' => 'cuba libre.jpg',
                'price' => 105,
                'category_id' => 3, 
                'orders' => 0,
                'archived_at' => null
            ],
            [
                'name' => 'Gin Sour',
                'description' => '',
                'image' => 'gin sour.jpg',
                'price' => 105,
                'category_id' => 3, 
                'orders' => 0,
                'archived_at' => null
            ],
            [
                'name' => 'Tequila Shot',
                'description' => '',
                'image' => 'tequila shot.jpg',
                'price' => 85,
                'category_id' => 3, 
                'orders' => 0,
                'archived_at' => null
            ],
            [
                'name' => 'Sangria Pitcher',
                'description' => '',
                'image' => 'sangria pitcher.jpg',
                'price' => 800,
                'category_id' => 3, 
                'orders' => 0,
                'archived_at' => null
            ],

            // Hot Drinks 4

            [
                'name' => 'Coffee',
                'description' => '',
                'image' => 'Coffee.jfif',
                'price' => 25,
                'category_id' => 4, 
                'orders' => 0,
                'archived_at' => null
            ],
            [
                'name' => 'Lipton Tea',
                'description' => '',
                'image' => 'Lipton-Tea-During-Pregnancy-1-910x1024.jpg',
                'price' => 25,
                'category_id' => 4, 
                'orders' => 0,
                'archived_at' => null
            ],
            [
                'name' => 'Milo',
                'description' => '',
                'image' => 'Milo drink.jfif',
                'price' => 25,
                'category_id' => 4, 
                'orders' => 0,
                'archived_at' => null
            ],
            [
                'name' => 'Hot Calamansi Juice',
                'description' => '',
                'image' => 'calamansi juice.jpg',
                'price' => 70,
                'category_id' => 4, 
                'orders' => 0,
                'archived_at' => null
            ],
            [
                'name' => 'Birch Tree',
                'description' => '',
                'image' => 'birch tree.jpg',
                'price' => 25,
                'category_id' => 4, // Assuming there is a category with ID 1
                'orders' => 0,
                'archived_at' => null
            ],
            [
                'name' => 'Brewed Coffee',
                'description' => '',
                'image' => 'brewed coffee.jpg',
                'price' => 60,
                'category_id' => 4, // Assuming there is a category with ID 1
                'orders' => 0,
                'archived_at' => null
            ],
            [
                'name' => 'Coffee Mate',
                'description' => '',
                'image' => 'coffee mate.jpg',
                'price' => 5,
                'category_id' => 4, // Assuming there is a category with ID 1
                'orders' => 0,
                'archived_at' => null
            ],
            [
                'name' => 'Coffee Stick',
                'description' => '',
                'image' => 'coffee stick.jpg',
                'price' => 25,
                'category_id' => 4, // Assuming there is a category with ID 1
                'orders' => 0,
                'archived_at' => null
            ],
            [
                'name' => 'Kopiko',
                'description' => '',
                'image' => 'kopiko.jpg',
                'price' => 25,
                'category_id' => 4, // Assuming there is a category with ID 1
                'orders' => 0,
                'archived_at' => null
            ],
            [
                'name' => 'Nescafe 3in1',
                'description' => '',
                'image' => 'nescafe3n1.jpg',
                'price' => 25,
                'category_id' => 4, // Assuming there is a category with ID 1
                'orders' => 0,
                'archived_at' => null
            ],

            // Boodle Bundles 5
            [
                'name' => 'Package 1 (4-5 pax)',
                'description' => "Inihaw na Tilapia w/ sauce,<br>halabos na hipon,<br>inihaw na liempo,<br>inihaw na talong,<br>salted egg,<br>steamed okra w/ bagoong,<br>ensaladang mangga,<br>and steamed rice",
                'image' => 'boodle1.png',
                'price' => 1755,
                'category_id' => 5, 
                'orders' => 0,
                'archived_at' => null
            ],
            [
                'name' => 'Package 2 (4-5 pax)',
                'description' => 'Chicken bbq, crablets, inihaw na pusit,<br> inihaw na talong,<br> inihaw na bangus,<br> halabos, na hipon,<br> ensaladang labanos,<br> and steamed rice',
                'image' => 'boodle2.png',
                'price' => 2010,
                'category_id' => 5, 
                'orders' => 0,
                'archived_at' => null
            ],
            [
                'name' => 'Package 3 (4-5 pax)',
                'description' => 'Vegetable tempura,<br> 10pcs pork bbq,<br> buffalo wings,<br> ensaladang ampalaya,<br> calamares fritos,<br> and steamed rice',
                'image' => 'boodle3.png',
                'price' => 2040,
                'category_id' => 5, 
                'orders' => 0,
                'archived_at' => null
            ],
            // Seafoods 6
            [
                'name' => 'Sinigang na ulo ng Salmon',
                'description' => 'Salmon head in sinigang soup',
                'image' => 'Sinigang-na-Salmon-sa-Miso-Recipe.jpg',
                'price' => 365,
                'category_id' => 6, 
                'orders' => 0,
                'archived_at' => null
            ],
            [
                'name' => 'Sinigang na Tanigue',
                'description' => 'Tanigue fish in your favorite sinigang soup',
                'image' => 'sinigang na tanigue.jfif',
                'price' => 365,
                'category_id' => 6, 
                'orders' => 0,
                'archived_at' => null
            ],
            [
                'name' => 'Sinigang na Bangus',
                'description' => 'Milkfish cooked in sinigang soup',
                'image' => 'sinigang na bangus.avif',
                'price' => 335,
                'category_id' => 6, 
                'orders' => 0,
                'archived_at' => null
            ],
            [
                'name' => 'Pinaputok na Tilapia',
                'description' => 'Steamed stuffed tilapia wrapped in foil cooked in its own sauce',
                'image' => 'crispy tilapia strips.jpg',
                'price' => 260,
                'category_id' => 6, 
                'orders' => 0,
                'archived_at' => null
            ],
            [
                'name' => 'Crispy Tilapia Strips',
                'description' => 'Tilapia fillet deep fried w/ whole fish until crispy served w/ sweet chili sauce',
                'image' => 'crispy tilapia strips.jpg',
                'price' => 270,
                'category_id' => 6, 
                'orders' => 0,
                'archived_at' => null
            ],
            [
                'name' => 'Fried Tilapia/Bangus',
                'description' => 'Tilapia or Bangis fish grilled and served w/ soy sauce dip',
                'image' => 'Grilled tilapia bangus.jpg',
                'price' => 245,
                'category_id' => 6, 
                'orders' => 0,
                'archived_at' => null
            ],
            [
                'name' => 'Grilled Tilapia/Bangus',
                'description' => 'Tilapia or Bangis fish grilled and served w/ soy sauce dip',
                'image' => 'Grilled tilapia bangus.jpg',
                'price' => 245,
                'category_id' => 6, 
                'orders' => 0,
                'archived_at' => null
            ],
            [
                'name' => 'Fish Fillet',
                'description' => 'w/ Sweet & sour sauce or White sauce',
                'image' => 'Fish fillet.jpg',
                'price' => 295,
                'category_id' => 6, 
                'orders' => 0,
                'archived_at' => null
            ],
            [
                'name' => 'Kinilaw na Tanigue',
                'description' => 'Tanigue fillet cooked in vinegar with tomatoes, onion and ginger',
                'image' => 'KINILAW-NA-TANIGUE-1.png',
                'price' => 330,
                'category_id' => 6, 
                'orders' => 0,
                'archived_at' => null
            ],
            [
                'name' => 'Sweer & Sour Tilapia',
                'description' => 'Fried Tilapia graciously coated w/ sweet and sour sauce',
                'image' => 'sweet and sour tilapia.jpg',
                'price' => 330,
                'category_id' => 6, 
                'orders' => 0,
                'archived_at' => null
            ],
            [
                'name' => 'Pampano (Ihaw or Sinigang)',
                'description' => 'Per gram',
                'image' => 'pampano.jpg',
                'price' => 1.40,
                'category_id' => 6, 
                'orders' => 0,
                'archived_at' => null
            ],
            [
                'name' => 'Grilled Tuna Belly',
                'description' => 'Per gram',
                'image' => 'grilled tuna belly.jpg',
                'price' => 1.2,
                'category_id' => 6, 
                'orders' => 0,
                'archived_at' => null
            ],

            // Noodles 7
            [
                'name' => 'Pancit Sotanghon',
                'description' => '',
                'image' => 'pansit sotanghon.jpg',
                'price' => 330,
                'category_id' => 7, 
                'orders' => 0,
                'archived_at' => null
            ],
            [
                'name' => 'Pancit Bihon',
                'description' => 'Thin noodles w/ soy sauce sliced meat & chopped vegetables',
                'image' => 'pancit bihon.jpg',
                'price' => 255,
                'category_id' => 7, 
                'orders' => 0,
                'archived_at' => null
            ],
            [
                'name' => 'Pancit Canton',
                'description' => 'Stir-fried egg noodles topped squid balls & sauteed cabbage, carrot strips & spring onions',
                'image' => 'pancit canton.jpg',
                'price' => 255,
                'category_id' => 7, 
                'orders' => 0,
                'archived_at' => null
            ],
            [
                'name' => 'Pancit Guisado',
                'description' => 'Mixture of Pancit bihon & pancit canton',
                'image' => 'pancit-guisado-main.avif',
                'price' => 255,
                'category_id' => 7, 
                'orders' => 0,
                'archived_at' => null
            ],
            [
                'name' => 'Lomi',
                'description' => 'Creamy soup w/ egg, mixed seafood, pork sisig',
                'image' => 'lomi.jpg',
                'price' => 280,
                'category_id' => 7, 
                'orders' => 0,
                'archived_at' => null
            ],
            [
                'name' => 'Sisig Pancit',
                'description' => 'Pancit Guisado topped with your favorite pork sisig',
                'image' => 'sisig pancit.jpg',
                'price' => 320,      
                'category_id' => 7, 
                'orders' => 0,
                'archived_at' => null
            ],

            //Shrimp & Squid 8
            [
                'name' => 'Inihaw na Pusit (per gram)',
                'description' => 'Grilled whole squid bashed in savory sauce',
                'image' => 'inihaw na pusit.jpg',
                'price' => 1.60,      
                'category_id' => 8, // Assuming there is a category with ID 1
                'orders' => 0,
                'archived_at' => null
            ],
            [
                'name' => 'Calamares Fritos',
                'description' => 'Fried Squid rings in Japanese breadcrumbs',
                'image' => 'calamares frito.jpg',
                'price' => 290,      
                'category_id' => 8, // Assuming there is a category with ID 1
                'orders' => 0,
                'archived_at' => null
            ],
            [
                'name' => 'Shrimp Halabos',
                'description' => 'Shrimps steamed with it\'s own juice & cooked with little oil',
                'image' => 'shrimp halabos.jpg',
                'price' => 380,      
                'category_id' => 8, // Assuming there is a category with ID 1
                'orders' => 0,
                'archived_at' => null
            ],
            [
                'name' => 'Sinigang na Hipon',
                'description' => 'Sour soup with shrimp and vegetables',
                'image' => 'sinigang na hipon.jpg',
                'price' => 425,      
                'category_id' => 8, // Assuming there is a category with ID 1
                'orders' => 0,
                'archived_at' => null
            ],
            [
                'name' => 'Camaron Rebosado',
                'description' => 'deep fried batter coated shrimp without the shells',
                'image' => 'camaron rebosado.jpg',
                'price' => 380,      
                'category_id' => 8, // Assuming there is a category with ID 1
                'orders' => 0,
                'archived_at' => null
            ],
            [
                'name' => 'Sauteed Shrimp with Chinese Mushroom',
                'description' => '',
                'image' => 'sauteed shrimp with chinese mushroom.jpg',
                'price' => 410,      
                'category_id' => 8, // Assuming there is a category with ID 1
                'orders' => 0,
                'archived_at' => null
            ],
            [
                'name' => 'Shrimp Tempura',
                'description' => 'shrimp in tempura batter deep fried served with tempura sauce',
                'image' => 'shrimp tempura.jpg',
                'price' => 380,      
                'category_id' => 8, // Assuming there is a category with ID 1
                'orders' => 0,
                'archived_at' => null
            ],
            [
                'name' => 'Mixed Tempura',
                'description' => 'shrimp and vegetables in tempura batter deep fried served with tempura sauce and sour sauce',
                'image' => 'mixed tempura.jpg',
                'price' => 650,      
                'category_id' => 8, // Assuming there is a category with ID 1
                'orders' => 0,
                'archived_at' => null
            ],
            [
                'name' => 'Baked Scallop',
                'description' => '',
                'image' => 'baked scallop.jpg',
                'price' => 235,      
                'category_id' => 8, // Assuming there is a category with ID 1
                'orders' => 0,
                'archived_at' => null
            ],
         
            // Sizzling plates 9
            [
                'name' => 'Sizzling Mushroom',
                'description' => 'With Tofu',
                'image' => 'Sizzling mushroom only.jfif',
                'price' => 305,
                'category_id' => 9, 
                'orders' => 0,
                'archived_at' => null
            ],

            [
                'name' => 'Sizzling Beef Bulalo',
                'description' => '',
                'image' => 'Sizzling beef bulalo.jpg',
                'price' => 750,
                'category_id' => 9, 
                'orders' => 0,
                'archived_at' => null
            ],
            [
                'name' => 'Sizzling Gambas',
                'description' => 'Shrimp served in sizzling plate with red sweet spicy sauce',
                'image' => 'Sizzling sisig squid.jpg',
                'price' => 385,
                'category_id' => 9, 
                'orders' => 0,
                'archived_at' => null
            ],
            [
                'name' => 'Sizzling Sisig Squid',
                'description' => 'Minced squid parts with chili, onion in sizzling plate',
                'image' => 'Sizzling sisig squid.jpg',
                'price' => 295,
                'category_id' => 9, 
                'orders' => 0,
                'archived_at' => null
            ],
            [
                'name' => 'Sizzling Pusit (Squid)',
                'description' => 'Sauteed spicy squid cuts served in a sizzling plate',
                'image' => 'Sizzling stuffed squid.jfif',
                'price' => 295,
                'category_id' => 9, 
                'orders' => 0,
                'archived_at' => null
            ],
            [
                'name' => 'Sizzling Breaded Pork with Gravy',
                'description' => 'Deep fried breaded pork covered with hot gravy sauce',
                'image' => 'sizzling breaded porkchop.jpg',
                'price' => 395,
                'category_id' => 9, 
                'orders' => 0,
                'archived_at' => null
            ],
            [
                'name' => 'Sizzling Seafoods',
                'description' => '',
                'image' => 'sizzling seafoods.jfif',
                'price' => 565,
                'category_id' => 9, 
                'orders' => 0,
                'archived_at' => null
            ],
            [
                'name' => 'Sizzling Tanigue Steak',
                'description' => 'Steak-cut tanigue with special sauce',
                'image' => 'Sizzling-Tanigue-Steak.jpg',
                'price' => 315,
                'category_id' => 9, 
                'orders' => 0,
                'archived_at' => null
            ],
            [
                'name' => 'Sizzling Fried Chicken',
                'description' => 'Fried chicken in creamy sauce with chopped vegetables',
                'image' => 'sizzling fried chicken.jpg',
                'price' => 355,
                'category_id' => 9, 
                'orders' => 0,
                'archived_at' => null
            ],
            [
                'name' => 'Sizzling Laing with Tofu',
                'description' => 'Gabi leaves cooked in coconut milk served with crisp-fried tofu',
                'image' => 'sizzling laing with tofu.jfif',
                'price' => 265,
                'category_id' => 9, 
                'orders' => 0,
                'archived_at' => null
            ],
            [
                'name' => 'Sizzling Chicken Diablo',
                'description' => 'Half chicken in a sizzling plate covered with special spicy red sauce',
                'image' => 'sizzling chicken diablo.jfif',
                'price' => 335,
                'category_id' => 9, 
                'orders' => 0,
                'archived_at' => null
            ],
            [
                'name' => 'Sizzling Spicy Chicken Wings',
                'description' => 'Fried chicken wings in hot & spicy sauce in sizzling platter',
                'image' => 'sizzling-spicy-wings-recipe-2.jpg',
                'price' => 285,
                'category_id' => 9, 
                'orders' => 0,
                'archived_at' => null
            ],
            [
                'name' => 'Sizzling Tofu',
                'description' => 'Crisp-fried tofu, chili peppers, mayonnaise and oyster sauce',
                'image' => 'sizzling tofu.jpg',
                'price' => 245,
                'category_id' => 9, 
                'orders' => 0,
                'archived_at' => null
            ],
            [
                'name' => 'Sizzling Pork Sisig (Regular)',
                'description' => 'Minced crispy pork mask with chili, onion & liver in sizzling plate',
                'image' => 'Sizzling Pork Sisig.avif',
                'price' => 250,
                'category_id' => 9, 
                'orders' => 0,
                'archived_at' => null
            ],
            [
                'name' => 'Sizzling Pork Sisig (Special)',
                'description' => 'Minced crispy pork mask with chili, onion & liver in sizzling plate (with egg)',
                'image' => 'Sizzling Pork Sisig.avif',
                'price' => 265,
                'category_id' => 9, 
                'orders' => 0,
                'archived_at' => null
            ],
            [
                'name' => 'Sizzling Stuffed Squid (Per Gram)',
                'description' => 'Squid stuffed with chopped sausage bacon, carrot & onion',
                'image' => 'Sizzling stuffed squid.jfif',
                'price' => 1.60,
                'category_id' => 9, 
                'orders' => 0,
                'archived_at' => null
            ],
            [
                'name' => 'Sizzling Hotdog',
                'description' => 'Sliced hotdog coered with spicy red sauce and mixed vegetable on the side',
                'image' => 'Sizzling-Hotdog1.jpg',
                'price' => 215,
                'category_id' => 9, 
                'orders' => 0,
                'archived_at' => null
            ],
            [
                'name' => 'Sizzling Corn with Cheese',
                'description' => 'Sauteed whole corn kernels topped with grated cheese',
                'image' => 'sizzling corn with cheese.jpg',
                'price' => 215,
                'category_id' => 9, 
                'orders' => 0,
                'archived_at' => null
            ],
            [
                'name' => 'Sizzling Mushroom',
                'description' => 'Sauteed button mushroom topped with garlic bits',
                'image' => 'Sizzling mushroom only.jfif',
                'price' => 215,
                'category_id' => 9, 
                'orders' => 0,
                'archived_at' => null
            ],
            //Appetizers 10
            [
                'name' => 'Crispy Crablets',
                'description' => 'Season small crabs, dreged in cornstarch and deep-fried until crispy Served with garlic vinegar',
                'image' => 'crispy crablets.jpg',
                'price' => 350,
                'category_id' => 10, 
                'orders' => 0,
                'archived_at' => null
            ],
            [
                'name' => 'Sili Rolls',
                'description' => 'Deep fried stuffed finger chilles wrapped in egg roll wrapp',
                'image' => 'sili rolls.jpg',
                'price' => 240,
                'category_id' => 10, 
                'orders' => 0,
                'archived_at' => null
            ],
            [
                'name' => 'Steamed Pork Siomai',
                'description' => '8pcs steamed pork',
                'image' => 'steamed pork siomai.jpg',
                'price' => 120,
                'category_id' => 10, 
                'orders' => 0,
                'archived_at' => null
            ],
            [
                'name' => 'Fried Pork Siomai',
                'description' => '8pcs deep fried pork siomai',
                'image' => 'fried pork siomai.jpg',
                'price' => 120,
                'category_id' => 10, 
                'orders' => 0,
                'archived_at' => null
            ],
            [
                'name' => 'Sizzling Siomai',
                'description' => '12 pcs pork siomai steam and served in a sizzling platter with hot gravy sauce',
                'image' => 'sizzling siomai.jpg',
                'price' => 225,
                'category_id' => 10, 
                'orders' => 0,
                'archived_at' => null
            ],
            [
                'name' => 'Nachos',
                'description' => 'Tortilla chips covered with ground beef, tomatoes, onion and melted cheese',
                'image' => 'nachos.jpg',
                'price' => 215,
                'category_id' => 10, 
                'orders' => 0,
                'archived_at' => null
            ],
            [
                'name' => 'Fish \'N Chips',
                'description' => 'Fried in batter served with fried',
                'image' => 'fish n chips.jpg',
                'price' => 295,
                'category_id' => 10, 
                'orders' => 0,
                'archived_at' => null
            ],
            [
                'name' => 'Onion Rings',
                'description' => 'Sliced onion that are dipped in a batter and deep fried intil crispy',
                'image' => 'onion rings.jpg',
                'price' => 240,
                'category_id' => 10, 
                'orders' => 0,
                'archived_at' => null
            ],
            [
                'name' => 'Chicken sa Wrap',
                'description' => 'Sliced onion that are dipped in batter',
                'image' => 'chicken sa wrap.jpg',
                'price' => 205,
                'category_id' => 10, 
                'orders' => 0,
                'archived_at' => null
            ],
            //Snacks 11
            [
                'name' => 'Halo-Halo',
                'description' => 'Mix of Pinoy sweets & fruit with crushed ice & evaporated milk',
                'image' => 'halo halo.jpg',
                'price' => 120,
                'category_id' => 11, 
                'orders' => 0,
                'archived_at' => null
            ],
            [
                'name' => 'Mais Con Yelo',
                'description' => 'Sweet corn with crushed ice & evaporated milk',
                'image' => 'mais con yelo.jpg',
                'price' => 75,
                'category_id' => 11, 
                'orders' => 0,
                'archived_at' => null
            ],
            [
                'name' => 'French Fries',
                'description' => 'Freshly cut potatoes deep fried served with catsup',
                'image' => 'french fries.jpg',
                'price' => 210,
                'category_id' => 11, 
                'orders' => 0,
                'archived_at' => null
            ],
            [
                'name' => 'Country Fries',
                'description' => 'Fried coated potato wedges served with mayo garlic',
                'image' => 'country fries.jpg',
                'price' => 230,
                'category_id' => 11, 
                'orders' => 0,
                'archived_at' => null
            ],
            [
                'name' => 'Squid Balls',
                'description' => '20 pcs squidballs served with sweet chili sauce',
                'image' => 'squid balls.jpg',
                'price' => 150,
                'category_id' => 11, 
                'orders' => 0,
                'archived_at' => null
            ],
            [
                'name' => 'Cheese sticks',
                'description' => 'Thinly cut cheese wrapped in eggrolll wrapper',
                'image' => 'cheese sticks.jpg',
                'price' => 160,
                'category_id' => 11, 
                'orders' => 0,
                'archived_at' => null
            ],
            //Breakfast 12
            [
                'name' => 'Pinoy Silog Breakfast',
                'description' => 'Daing na bangus / Tocino / Tapa / Biya / Longganisa / Dilis (Served with fried rice & scrambled, sunnyside-up or boiled egg)',
                'image' => 'pinoy silog breakfast.jpeg',
                'price' => 135,
                'category_id' => 12, 
                'orders' => 0,
                'archived_at' => null
            ],
            [
                'name' => 'American Breakfast',
                'description' => 'Hotdog / Bacon / Ham (Served with toasted bread & scrambled, sunnyside-up or boiled egg)',
                'image' => 'american breakfast.jpg',
                'price' => 135,
                'category_id' => 12, 
                'orders' => 0,
                'archived_at' => null
            ],
            [
                'name' => 'Pancakes',
                'description' => '3 pcs pancakes served with butter & syrup',
                'image' => 'pancakes.jpg',
                'price' => 135,
                'category_id' => 12, 
                'orders' => 0,
                'archived_at' => null
            ],
            //Sandwiches 13
            [
                'name' => 'Club House Sandwich',
                'description' => '3 layers sandwich with ham, cheese, bacon. egg and tomato',
                'image' => 'club house sandwich.jpg',
                'price' => 210,
                'category_id' => 13, 
                'orders' => 0,
                'archived_at' => null
            ],
            [
                'name' => 'Hamburger',
                'description' => 'Burger patty with dressing, tomato & cucumber in a bun',
                'image' => 'hamburger.png',
                'price' => 85,
                'category_id' => 13, 
                'orders' => 0,
                'archived_at' => null
            ],
            [
                'name' => 'Cheese Burger',
                'description' => 'Burger topped with cheese, dressing, tomato & cucumber',
                'image' => 'cheese burger.jpg',
                'price' => 95,
                'category_id' => 13, 
                'orders' => 0,
                'archived_at' => null
            ],
            [
                'name' => 'Crunchy Chicken Burger',
                'description' => 'Crunchy  chicken breast fillet  with honey mustard sauce',
                'image' => 'crunchy chicken burger.jpg',
                'price' => 105,
                'category_id' => 13, 
                'orders' => 0,
                'archived_at' => null
            ],
            [
                'name' => 'Ham & Egg sandwich',
                'description' => 'Sliced ham and scrambled egg in 2 pcs tasty bread',
                'image' => 'ham and egg sandwich.jpg',
                'price' => 70,
                'category_id' => 13, 
                'orders' => 0,
                'archived_at' => null
            ],
            [
                'name' => 'Ham & Cheese Sandwich',
                'description' => 'Sliced ham and sliced cheese in 2 pcs tasty bread',
                'image' => 'ham & cheese sandwich.jpg',
                'price' => 70.,
                'category_id' => 13, 
                'orders' => 0,
                'archived_at' => null
            ],
            [
                'name' => 'French Toast',
                'description' => 'Bread soaked in beaten eggs and then fried',
                'image' => 'french toast.jpg',
                'price' => 70,
                'category_id' => 13, 
                'orders' => 0,
                'archived_at' => null
            ],
            [
                'name' => 'Monte Cristo Sandwich',
                'description' => 'French toast with ham and cheese filling',
                'image' => 'monte cristo sandwich.jpg',
                'price' => 85,
                'category_id' => 13, 
                'orders' => 0,
                'archived_at' => null
            ],
            [
                'name' => 'Toasted Bread',
                'description' => 'Toasted halved tasty bread, perfect partner',
                'image' => 'toasted bread.jpg',
                'price' => 65,
                'category_id' => 13, 
                'orders' => 0,
                'archived_at' => null
            ],
            // Solo Plated 14
            [
                'name' => 'Chicken with Spaghetti',
                'description' => '1 pc Fried Chicken with spaghetti and toasted bread',
                'image' => 'chicken with spaghetti.jpg',
                'price' => 185,
                'category_id' => 14, 
                'orders' => 0,
                'archived_at' => null
            ],
            [
                'name' => 'Chicken with Carbonara',
                'description' => '1 pc Fried Chicken with carbonara and toasted bread',
                'image' => 'chicken with carbornara.jpg',
                'price' => 185,
                'category_id' => 14, 
                'orders' => 0,
                'archived_at' => null
            ],
            [
                'name' => 'Chicken with Palabok',
                'description' => '1pc Fried Chicken with palabok and toasted bread',
                'image' => 'chicken with palabok.jpg',
                'price' => 185,
                'category_id' => 14, 
                'orders' => 0,
                'archived_at' => null
            ],
            [
                'name' => 'Chicken Pork Adobo',
                'description' => 'Chicken and pork chunks cooked in soy sauce and with garlic, pepper and bay leaves',
                'image' => 'chicken pork adobo.jpg',
                'price' => 185,
                'category_id' => 14, 
                'orders' => 0,
                'archived_at' => null
            ],
            [
                'name' => 'Breaded Chicken / Pork',
                'description' => 'Deep fried battered chicken / pork',
                'image' => 'breaded chicken.jpg',
                'price' => 185,
                'category_id' => 14, 
                'orders' => 0,
                'archived_at' => null
            ],
            [
                'name' => 'Tocino / Tapa / Daing na Bangus',
                'description' => '',
                'image' => 'tocino tapa daing na bangus.jpg',
                'price' => 185,
                'category_id' => 14, 
                'orders' => 0,
                'archived_at' => null
            ],
            //Rice 15
            [
                'name' => 'Shanghai Rice',
                'description' => '',
                'image' => 'shanghai rice.jpg',
                'price' => 245,
                'category_id' => 15, 
                'orders' => 0,
                'archived_at' => null
            ],
            [
                'name' => 'Biryani Rice',
                'description' => '',
                'image' => 'biryani rice.jpg',
                'price' => 220,
                'category_id' => 15, 
                'orders' => 0,
                'archived_at' => null
            ],
            [
                'name' => 'Java Rice',
                'description' => '',
                'image' => 'java rice.jpg',
                'price' => 195,
                'category_id' => 15, 
                'orders' => 0,
                'archived_at' => null
            ],
            [
                'name' => 'Garlic Rice',
                'description' => '',
                'image' => 'garlic rice.jpg',
                'price' => 40,
                'category_id' => 15, 
                'orders' => 0,
                'archived_at' => null
            ],
            [
                'name' => 'Plain Rice',
                'description' => '',
                'image' => 'plain rice.jpg',
                'price' => 35,
                'category_id' => 15, 
                'orders' => 0,
                'archived_at' => null
            ],
            [
                'name' => 'Half Rice',
                'description' => '',
                'image' => 'half rice.jpg',
                'price' => 25,
                'category_id' => 15, 
                'orders' => 0,
                'archived_at' => null
            ],
            //Soups 16
            [
                'name' => 'Crab & Corn soup',
                'description' => 'Serving is good for 2-3 persons',
                'image' => 'crab and corn soup.jpg',
                'price' => 145,
                'category_id' => 16, 
                'orders' => 0,
                'archived_at' => null
            ],
            [
                'name' => 'Mushroom Soup',
                'description' => 'Serving is good for 2-3 persons',
                'image' => 'mushroom soup.jpg',
                'price' => 145,
                'category_id' => 16, 
                'orders' => 0,
                'archived_at' => null
            ],

            [
                'name' => 'Chicken & Corn Soup',
                'description' => 'Serving is good for 2-3 persons',
                'image' => 'chicken and corn soup.jpg',
                'price' => 145,
                'category_id' => 16, 
                'orders' => 0,
                'archived_at' => null
            ],

            [
                'name' => 'Hototay Soup',
                'description' => 'Serving is good for 2-3 persons',
                'image' => 'hototay soup.jpg',
                'price' => 220,
                'category_id' => 16, 
                'orders' => 0,
                'archived_at' => null
            ],

            [
                'name' => 'Nido Oriental Soup',
                'description' => 'Serving is good for 2-3 persons',
                'image' => 'nido oriental soup.jpg',
                'price' => 145,
                'category_id' => 16, 
                'orders' => 0,
                'archived_at' => null
            ],
            //vegetables 17
            [
                'name' => 'Steamed Vegetables',
                'description' => 'Sauteed mixed vegetables with bagoong',
                'image' => 'steamed vegetables.jpg',
                'price' => 160,
                'category_id' => 17, 
                'orders' => 0,
                'archived_at' => null
            ],
            [
                'name' => 'Pakbet',
                'description' => 'Sauteed mixed vegetables with bagoong',
                'image' => 'pakbet.jpg',
                'price' => 190,
                'category_id' => 17, 
                'orders' => 0,
                'archived_at' => null
            ],
            [
                'name' => 'Chopsuey',
                'description' => 'Medley of vegetables with small chunks of meat',
                'image' => 'chopsuey.jpg',
                'price' => 225,
                'category_id' => 17, 
                'orders' => 0,
                'archived_at' => null
            ],
            [
                'name' => 'Stir-Fried Vegetables',
                'description' => 'Stir-fried thin slices of vegetables with oyster sauce',
                'image' => 'stri fried vegetables.jpg',
                'price' => 200,
                'category_id' => 17, 
                'orders' => 0,
                'archived_at' => null
            ],
            [
                'name' => 'Inihaw na Talong',
                'description' => 'Char-grilled eggplant with tomatoes and onion served with bagoong balayan',
                'image' => 'inihaw na talong.jpg',
                'price' => 180,
                'category_id' => 17, 
                'orders' => 0,
                'archived_at' => null
            ],
            [
                'name' => 'Ensaladang Talong',
                'description' => 'Grilled eggplant with chopped tomatoes & onion mixed in vinegar a perfect partner for grilled dishes',
                'image' => 'ensaladang talong.jpg',
                'price' => 190,
                'category_id' => 17, 
                'orders' => 0,
                'archived_at' => null
            ],
            [
                'name' => 'Ensaladang Ampalaya',
                'description' => 'Blanched bitterground with tomatoes, onion and vinegar',
                'image' => 'ensaladang ampalaya.jpg',
                'price' => 200,
                'category_id' => 17, 
                'orders' => 0,
                'archived_at' => null
            ],
            [
                'name' => 'Ensaladang Pipino',
                'description' => '',
                'image' => 'ensaladang pipino.jpg',
                'price' => 200,
                'category_id' => 17, 
                'orders' => 0,
                'archived_at' => null
            ],
            [
                'name' => 'Tortang Talong',
                'description' => 'Egg omellete with chopped tomatoes & onion',
                'image' => 'tortang talong.jpg',
                'price' => 205,
                'category_id' => 17, 
                'orders' => 0,
                'archived_at' => null
            ],
            [
                'name' => 'Vegetable Tempura',
                'description' => '',
                'image' => 'vegetable tempura.jpg',
                'price' => 300,
                'category_id' => 17, 
                'orders' => 0,
                'archived_at' => null
            ],
            [
                'name' => 'Ginataang Talong with Latik',
                'description' => '',
                'image' => 'ginataang talong with latik.jpg',
                'price' => 225,
                'category_id' => 17, 
                'orders' => 0,
                'archived_at' => null
            ],
            [
                'name' => 'Ampalaya Con Carne',
                'description' => '',
                'image' => 'ampalaya con carne.jpg',
                'price' => 280,
                'category_id' => 17, 
                'orders' => 0,
                'archived_at' => null
            ],
            //Biscuits 18
            [
                'name' => 'Bingo',
                'description' => '',
                'image' => 'bingo.jpg',
                'price' => 10,
                'category_id' => 18, 
                'orders' => 0,
                'archived_at' => null
            ],
            [
                'name' => 'Bravo',
                'description' => '',
                'image' => 'bravo.jpg',
                'price' => 10,
                'category_id' => 18, 
                'orders' => 0,
                'archived_at' => null
            ],
            [
                'name' => 'Chooey Mini',
                'description' => '',
                'image' => 'chooey.jpg',
                'price' => 5,
                'category_id' => 18, 
                'orders' => 0,
                'archived_at' => null
            ],
            [
                'name' => 'Fita',
                'description' => '',
                'image' => 'fita.jpg',
                'price' => 10,
                'category_id' => 18, 
                'orders' => 0,
                'archived_at' => null
            ],
            [
                'name' => 'Fudgee Bar',
                'description' => '',
                'image' => 'fudgee bar.jpg',
                'price' => 10,
                'category_id' => 18, 
                'orders' => 0,
                'archived_at' => null
            ],
            [
                'name' => 'Hansel',
                'description' => '',
                'image' => 'hansel.jpg',
                'price' => 10,
                'category_id' => 18, 
                'orders' => 0,
                'archived_at' => null
            ],
            [
                'name' => 'Inipit',
                'description' => '',
                'image' => 'inipit.jpg',
                'price' => 10,
                'category_id' => 18, 
                'orders' => 0,
                'archived_at' => null
            ],
            [
                'name' => 'Magic Flakes',
                'description' => '',
                'image' => 'magic flakes.jpg',
                'price' => 10,
                'category_id' => 18, 
                'orders' => 0,
                'archived_at' => null
            ],
            [
                'name' => 'Presto',
                'description' => '',
                'image' => 'presto.jpg',
                'price' => 10,
                'category_id' => 18, 
                'orders' => 0,
                'archived_at' => null
            ],
            [
                'name' => 'Rebisco',
                'description' => '',
                'image' => 'rebisco.jpg',
                'price' => 10,
                'category_id' => 18, 
                'orders' => 0,
                'archived_at' => null
            ],
            [
                'name' => 'Skyflakes',
                'description' => '',
                'image' => 'skyflakes.jpg',
                'price' => 10,
                'category_id' => 18, 
                'orders' => 0,
                'archived_at' => null
            ],
            //Snacks Bar 19
            [
                'name' => '1.5 Coke',
                'description' => '',
                'image' => '1.5 coke.jpg',
                'price' => 130,
                'category_id' => 19, 
                'orders' => 0,
                'archived_at' => null
            ],
            [
                'name' => '1.5 Royal',
                'description' => '',
                'image' => '1.5 royal.jpg',
                'price' => 130,
                'category_id' => 19, 
                'orders' => 0,
                'archived_at' => null
            ],
            [
                'name' => '1.5 Sprite',
                'description' => '',
                'image' => '1.5 sprite.jpg',
                'price' => 130,
                'category_id' => 19, 
                'orders' => 0,
                'archived_at' => null
            ],
            [
                'name' => 'C2 solo',
                'description' => '',
                'image' => 'c2 solo.jpg',
                'price' => 25,
                'category_id' => 19, 
                'orders' => 0,
                'archived_at' => null
            ],
            [
                'name' => 'Can Coke light',
                'description' => '',
                'image' => 'can coke light.jpg',
                'price' =>  70,
                'category_id' => 19, 
                'orders' => 0,
                'archived_at' => null
            ],
            [
                'name' => 'Can Coke Zero',
                'description' => '',
                'image' => 'can coke zero.jpg',
                'price' => 70,
                'category_id' => 19, 
                'orders' => 0,
                'archived_at' => null
            ],
            [
                'name' => 'Can Sprite Zero',
                'description' => '',
                'image' => 'can sprite zero.jpg',
                'price' => 70,
                'category_id' => 19, 
                'orders' => 0,
                'archived_at' => null
            ],
            [
                'name' => 'Chuckie',
                'description' => '',
                'image' => 'chuckie.jpg',
                'price' => 70,
                'category_id' => 19, 
                'orders' => 0,
                'archived_at' => null
            ],
            [
                'name' => 'Coke Can Reg',
                'description' => '',
                'image' => 'coke can reg.jpg',
                'price' => 70,
                'category_id' => 19, 
                'orders' => 0,
                'archived_at' => null
            ],
            [
                'name' => 'Coke Zero 1.5L',
                'description' => '',
                'image' => 'coke zer 1.5L.jpg',
                'price' => 130,
                'category_id' => 19, 
                'orders' => 0,
                'archived_at' => null
            ],
            [
                'name' => 'Del Monte 4s',
                'description' => '',
                'image' => 'del monte 4s.jpg',
                'price' => 70,
                'category_id' => 19, 
                'orders' => 0,
                'archived_at' => null
            ],
            [
                'name' => 'Del Monte Mango',
                'description' => '',
                'image' => 'del monte mango.jpg',
                'price' => 70,
                'category_id' => 19, 
                'orders' => 0,
                'archived_at' => null
            ],
            [
                'name' => 'Del Monte Orange',
                'description' => '',
                'image' => 'del monte orange.jpg',
                'price' => 70,
                'category_id' => 19, 
                'orders' => 0,
                'archived_at' => null
            ],
            [
                'name' => 'Del Monte Pineapple',
                'description' => '',
                'image' => 'del monte pineapple.jpg',
                'price' => 70,
                'category_id' => 19, 
                'orders' => 0,
                'archived_at' => null
            ],
            [
                'name' => 'J @ Daniel cola',
                'description' => '',
                'image' => 'J @ Daniel cola.jpg',
                'price' => 160,
                'category_id' => 19, 
                'orders' => 0,
                'archived_at' => null
            ],
            [
                'name' => 'Leche Flan',
                'description' => '',
                'image' => 'leche flan.jpg',
                'price' => 150,
                'category_id' => 19, 
                'orders' => 0,
                'archived_at' => null
            ],
            [
                'name' => 'Mineral 330ml',
                'description' => '',
                'image' => 'mineral 330ml.jpg',
                'price' => 15,
                'category_id' => 19, 
                'orders' => 0,
                'archived_at' => null
            ],
            [
                'name' => 'Mineral 500ml',
                'description' => '',
                'image' => 'mineral 500ml.jpg',
                'price' => 22,
                'category_id' => 19, 
                'orders' => 0,
                'archived_at' => null
            ],
            [
                'name' => 'Mismo Coke',
                'description' => '',
                'image' => 'mismo coke.jpg',
                'price' => 25,
                'category_id' => 19, 
                'orders' => 0,
                'archived_at' => null
            ],
            [
                'name' => 'Mismo Royal',
                'description' => '',
                'image' => 'mismo royal.jpg',
                'price' => 25,
                'category_id' => 19, 
                'orders' => 0,
                'archived_at' => null
            ],
            [
                'name' => 'Mismo Sprite',
                'description' => '',
                'image' => 'mismo sprite.jpg',
                'price' => 25,
                'category_id' => 19, 
                'orders' => 0,
                'archived_at' => null
            ],
            [
                'name' => 'Mountain Dew',
                'description' => '',
                'image' => 'mountain dew.jpg',
                'price' => 25,
                'category_id' => 19, 
                'orders' => 0,
                'archived_at' => null
            ],
            [
                'name' => 'Nestea Cucu/Hblend',
                'description' => '',
                'image' => 'nestea.jpg',
                'price' => 200,
                'category_id' => 19, 
                'orders' => 0,
                'archived_at' => null
            ],
            [
                'name' => 'Pineapple Powder',
                'description' => '',
                'image' => 'pineapple powder.jpg',
                'price' => 180,
                'category_id' => 19, 
                'orders' => 0,
                'archived_at' => null
            ],
            //Shake 20
            [
                'name' => 'Apple',
                'description' => '',
                'image' => 'apple shake.jpg',
                'price' => 155,
                'category_id' => 20, 
                'orders' => 0,
                'archived_at' => null
            ],
            [
                'name' => 'Avocado',
                'description' => '',
                'image' => 'avocado shake.jpg',
                'price' => 155,
                'category_id' => 20, 
                'orders' => 0,
                'archived_at' => null
            ],

            [
                'name' => 'Banana',
                'description' => '',
                'image' => 'banana shake.jpg',
                'price' => 155,
                'category_id' => 20, 
                'orders' => 0,
                'archived_at' => null
            ],

            [
                'name' => 'Buko',
                'description' => '',
                'image' => 'buko shake.jpg',
                'price' => 155,
                'category_id' => 20, 
                'orders' => 0,
                'archived_at' => null
            ],

            [
                'name' => 'Guyabano',
                'description' => '',
                'image' => 'guyabano shake.jpg',
                'price' => 155,
                'category_id' => 20, 
                'orders' => 0,
                'archived_at' => null
            ],

            [
                'name' => 'Mango',
                'description' => '',
                'image' => 'mango shake.jpg',
                'price' => 155,
                'category_id' => 20, 
                'orders' => 0,
                'archived_at' => null
            ],

            [
                'name' => 'Melon',
                'description' => '',
                'image' => 'melon shake.jpg',
                'price' => 155,
                'category_id' => 20, 
                'orders' => 0,
                'archived_at' => null
            ],

            [
                'name' => 'Strawberry',
                'description' => '',
                'image' => 'strawberry shake.jpg',
                'price' => 180,
                'category_id' => 20, 
                'orders' => 0,
                'archived_at' => null
            ],

            [
                'name' => 'Watermelon',
                'description' => '',
                'image' => 'watermelon shake.jpg',
                'price' => 155,
                'category_id' => 20, 
                'orders' => 0,
                'archived_at' => null
            ],

            [
                'name' => 'Rambutan',
                'description' => '',
                'image' => 'rambutan shake.jpg',
                'price' => 155,
                'category_id' => 20, 
                'orders' => 0,
                'archived_at' => null
            ],

            [
                'name' => 'Lansones',
                'description' => '',
                'image' => 'lansones shake.jpg',
                'price' => 155,
                'category_id' => 20, 
                'orders' => 0,
                'archived_at' => null
            ],

            [
                'name' => 'Durian',
                'description' => '',
                'image' => 'durian shake.jpg',
                'price' => 155,
                'category_id' => 20, 
                'orders' => 0,
                'archived_at' => null
            ],
            //Medicine 21
            [
                'name' => 'Advil',
                'description' => '',
                'image' => 'advil.jpg',
                'price' => 15,
                'category_id' => 21, 
                'orders' => 0,
                'archived_at' => null
            ],
            [
                'name' => 'Alaxan',
                'description' => '',
                'image' => 'alaxan.jpg',
                'price' => 12,
                'category_id' => 21, 
                'orders' => 0,
                'archived_at' => null
            ],
            [
                'name' => 'Amoxicilin',
                'description' => '',
                'image' => 'amoxicilin.jpg',
                'price' => 15,
                'category_id' => 21, 
                'orders' => 0,
                'archived_at' => null
            ],
            [
                'name' => 'Ascop lagundi',
                'description' => '',
                'image' => 'ascop lagundi.jpg',
                'price' => 10,
                'category_id' => 21, 
                'orders' => 0,
                'archived_at' => null
            ],
            [
                'name' => 'Bioflu',
                'description' => '',
                'image' => 'bioflu.jpg',
                'price' => 12,
                'category_id' => 21, 
                'orders' => 0,
                'archived_at' => null
            ],
            [
                'name' => 'Biogesic',
                'description' => '',
                'image' => 'biogesic.jpg',
                'price' => 7,
                'category_id' => 21, 
                'orders' => 0,
                'archived_at' => null
            ],
            [
                'name' => 'Bonamine',
                'description' => '',
                'image' => 'bonamine.jpg',
                'price' => 15,
                'category_id' => 21, 
                'orders' => 0,
                'archived_at' => null
            ],
            [
                'name' => 'Carboceistine',
                'description' => '',
                'image' => 'carboceistine.jpg',
                'price' => 12,
                'category_id' => 21, 
                'orders' => 0,
                'archived_at' => null
            ],
            [
                'name' => 'Decolgen',
                'description' => '',
                'image' => 'decolgen.jpg',
                'price' => 10,
                'category_id' => 21, 
                'orders' => 0,
                'archived_at' => null
            ],
            [
                'name' => 'Diatabs',
                'description' => '',
                'image' => 'diatabs.jpg',
                'price' => 15,
                'category_id' => 21, 
                'orders' => 0,
                'archived_at' => null
            ],
            [
                'name' => 'Dolfenal',
                'description' => '',
                'image' => 'dolfenal.jpg',
                'price' => 40,
                'category_id' => 21, 
                'orders' => 0,
                'archived_at' => null
            ],
            [
                'name' => 'Imodium',
                'description' => '',
                'image' => 'imodium.jpg',
                'price' => 25,
                'category_id' => 21, 
                'orders' => 0,
                'archived_at' => null
            ],
            [
                'name' => 'Kremil S',
                'description' => '',
                'image' => 'kremil s.jpg',
                'price' => 15,
                'category_id' => 21, 
                'orders' => 0,
                'archived_at' => null
            ],
            [
                'name' => 'Lomotil',
                'description' => '',
                'image' => 'lomotil.jpg',
                'price' => 20,
                'category_id' => 21, 
                'orders' => 0,
                'archived_at' => null
            ],
            [
                'name' => 'Medicol',
                'description' => '',
                'image' => 'medicol.jpg',
                'price' => 10,
                'category_id' => 21, 
                'orders' => 0,
                'archived_at' => null
            ],
            [
                'name' => 'Mefenamic',
                'description' => '',
                'image' => 'mefenamic.jpg',
                'price' => 10,
                'category_id' => 21, 
                'orders' => 0,
                'archived_at' => null
            ],
            [
                'name' => 'Neosep',
                'description' => '',
                'image' => 'neosep.jpg',
                'price' => 7,
                'category_id' => 21, 
                'orders' => 0,
                'archived_at' => null
            ],
            [
                'name' => 'Paracetamol',
                'description' => '',
                'image' => 'paracetamol.jpg',
                'price' => 7,
                'category_id' => 21, 
                'orders' => 0,
                'archived_at' => null
            ],
            [
                'name' => 'Tuseran',
                'description' => '',
                'image' => 'tuseran.jpg',
                'price' => 12,
                'category_id' => 21, 
                'orders' => 0,
                'archived_at' => null
            ],
            //Groceries 22
            [
                'name' => 'Ballpen',
                'description' => '',
                'image' => 'ballpen.jpg',
                'price' => 10,
                'category_id' => 22, 
                'orders' => 0,
                'archived_at' => null
            ],
            [
                'name' => 'Battery AA',
                'description' => '',
                'image' => 'battery AA.jpg',
                'price' => 25,
                'category_id' => 22, 
                'orders' => 0,
                'archived_at' => null
            ],
            [
                'name' => 'Battery AAA',
                'description' => '',
                'image' => 'battery AAA.jpg',
                'price' => 25,
                'category_id' => 22, 
                'orders' => 0,
                'archived_at' => null
            ],
            [
                'name' => 'Clear Shampoo',
                'description' => '',
                'image' => 'clear shampoo.jpg',
                'price' => 10,
                'category_id' => 22, 
                'orders' => 0,
                'archived_at' => null
            ],
            [
                'name' => 'Creamsilk',
                'description' => '',
                'image' => 'creamsilk.jpg',
                'price' => 10,
                'category_id' => 22, 
                'orders' => 0,
                'archived_at' => null
            ],
            [
                'name' => 'Head & Shoulder',
                'description' => '',
                'image' => 'head and shoulder.jpg',
                'price' => 10,
                'category_id' => 22, 
                'orders' => 0,
                'archived_at' => null
            ],
            [
                'name' => 'LM Canton',
                'description' => '',
                'image' => 'LM canton.jpg',
                'price' => 25,
                'category_id' => 22, 
                'orders' => 0,
                'archived_at' => null
            ],
            [
                'name' => 'Marlboro',
                'description' => '',
                'image' => 'marlboro.jpg',
                'price' => 210,
                'category_id' => 22, 
                'orders' => 0,
                'archived_at' => null
            ],
            [
                'name' => 'Marlboro Half',
                'description' => '',
                'image' => 'marlboro.jpg',
                'price' => 150,
                'category_id' => 22, 
                'orders' => 0,
                'archived_at' => null
            ],
            [
                'name' => 'Palmolive Shampoo',
                'description' => '',
                'image' => 'palmolive shampoo.jpg',
                'price' => 10,
                'category_id' => 22, 
                'orders' => 0,
                'archived_at' => null
            ],
            [
                'name' => 'Posporo',
                'description' => '',
                'image' => 'posporo.jpg',
                'price' => 5,
                'category_id' => 22, 
                'orders' => 0,
                'archived_at' => null
            ],
            [
                'name' => 'Safeguard Big',
                'description' => '',
                'image' => 'safeguard.jpg',
                'price' => 35,
                'category_id' => 22, 
                'orders' => 0,
                'archived_at' => null
            ],
            [
                'name' => 'Safeguard Small',
                'description' => '',
                'image' => 'safeguard small.jpg',
                'price' => 25,
                'category_id' => 22, 
                'orders' => 0,
                'archived_at' => null
            ],
            [
                'name' => 'Sanitary Napkin',
                'description' => '',
                'image' => 'sanitary napkin.jpg',
                'price' => 10,
                'category_id' => 22, 
                'orders' => 0,
                'archived_at' => null
            ],
            [
                'name' => 'Soap Bar',
                'description' => '',
                'image' => 'soapbar.jpg',
                'price' => 10,
                'category_id' => 22, 
                'orders' => 0,
                'archived_at' => null
            ],
            [
                'name' => 'Suka-datu puti',
                'description' => '',
                'image' => 'suka datu puti.jpg',
                'price' => 10,
                'category_id' => 22, 
                'orders' => 0,
                'archived_at' => null
            ],
            [
                'name' => 'Sunsilk Shampoo',
                'description' => '',
                'image' => 'sunsilk shampoo.jpg',
                'price' => 10,
                'category_id' => 22, 
                'orders' => 0,
                'archived_at' => null
            ],
            [
                'name' => 'Surf Fab',
                'description' => '',
                'image' => 'surf fab.jpg',
                'price' => 10,
                'category_id' => 22, 
                'orders' => 0,
                'archived_at' => null
            ],
            [
                'name' => 'Surf Powder',
                'description' => '',
                'image' => 'surf powder.jpg',
                'price' => 10,
                'category_id' => 22, 
                'orders' => 0,
                'archived_at' => null
            ],
            [
                'name' => 'Tang Guyabano',
                'description' => '',
                'image' => 'tang guyabano.jpg',
                'price' => 50,
                'category_id' => 22, 
                'orders' => 0,
                'archived_at' => null
            ],
            [
                'name' => 'Tang Lemon',
                'description' => '',
                'image' => 'tang lemon.jpg',
                'price' => 50,
                'category_id' => 22, 
                'orders' => 0,
                'archived_at' => null
            ],
            [
                'name' => 'Tang Lychee',
                'description' => '',
                'image' => 'tang lychee.jpg',
                'price' => 50,
                'category_id' => 22, 
                'orders' => 0,
                'archived_at' => null
            ],
            [
                'name' => 'Toothpaste',
                'description' => '',
                'image' => 'toothpaste.jpg',
                'price' => 10,
                'category_id' => 22, 
                'orders' => 0,
                'archived_at' => null
            ],
            [
                'name' => 'Umbrella',
                'description' => '',
                'image' => 'umbrella.jpg',
                'price' => 200,
                'category_id' => 22, 
                'orders' => 0,
                'archived_at' => null
            ],
            //Liquors 23
            [
                'name' => 'Alfonso 1L',
                'description' => '',
                'image' => 'alfonso 1L.jpg',
                'price' => 700,
                'category_id' => 23, 
                'orders' => 0,
                'archived_at' => null
            ],
            [
                'name' => 'Arbor Mist',
                'description' => '',
                'image' => 'arbor mist.jpg',
                'price' => 500,
                'category_id' => 23, 
                'orders' => 0,
                'archived_at' => null
            ],
            [
                'name' => 'Artic Vodka',
                'description' => '',
                'image' => 'artic vodka.jpg',
                'price' => 550,
                'category_id' => 23, 
                'orders' => 0,
                'archived_at' => null
            ],
            [
                'name' => 'Bagets',
                'description' => '',
                'image' => 'bagets.jpg',
                'price' => 250,
                'category_id' => 23, 
                'orders' => 0,
                'archived_at' => null
            ],
            [
                'name' => 'Black Label',
                'description' => '',
                'image' => 'black label.jpg',
                'price' => 2800,
                'category_id' => 23, 
                'orders' => 0,
                'archived_at' => null
            ],
            [
                'name' => 'Carlo Rossi',
                'description' => '',
                'image' => 'carlo rossi.jpg',
                'price' => 650,
                'category_id' => 23, 
                'orders' => 0,
                'archived_at' => null
            ],
            [
                'name' => 'Chivas Regal',
                'description' => '',
                'image' => 'chivas regal.jpg',
                'price' => 2500,
                'category_id' => 23, 
                'orders' => 0,
                'archived_at' => null
            ],
            [
                'name' => 'Decano',
                'description' => '',
                'image' => 'decano.jpg',
                'price' => 200,
                'category_id' => 23, 
                'orders' => 0,
                'archived_at' => null
            ],
            [
                'name' => 'Don Enrique',
                'description' => '',
                'image' => 'don enrique.jpg',
                'price' => 550,
                'category_id' => 23, 
                'orders' => 0,
                'archived_at' => null
            ],
            [
                'name' => 'Double Black',
                'description' => '',
                'image' => 'double black.jpg',
                'price' => 4500,
                'category_id' => 23, 
                'orders' => 0,
                'archived_at' => null
            ],
            [
                'name' => 'El Hombre',
                'description' => '',
                'image' => 'el hombre.jpg',
                'price' => 700,
                'category_id' => 23, 
                'orders' => 0,
                'archived_at' => null
            ],
            [
                'name' => 'Emperador Light',
                'description' => '',
                'image' => 'emperador light 750.jpg',
                'price' => 350,
                'category_id' => 23, 
                'orders' => 0,
                'archived_at' => null
            ],
            [
                'name' => 'Fundador Litro Light',
                'description' => '',
                'image' => 'fundador litro light.jpg',
                'price' => 1050,
                'category_id' => 23, 
                'orders' => 0,
                'archived_at' => null
            ],
            [
                'name' => 'Green Label',
                'description' => '',
                'image' => 'green label.jpg',
                'price' => 4500,
                'category_id' => 23, 
                'orders' => 0,
                'archived_at' => null
            ],
            [
                'name' => 'GSM Blue',
                'description' => '',
                'image' => 'gsm blue.jpg',
                'price' => 350,
                'category_id' => 23, 
                'orders' => 0,
                'archived_at' => null
            ],
            [
                'name' => 'Lime Juice 375ml',
                'description' => '',
                'image' => 'lime juice.jpg',
                'price' => 70,
                'category_id' => 23, 
                'orders' => 0,
                'archived_at' => null
            ],
            [
                'name' => 'Maria Clara',
                'description' => '',
                'image' => 'maria clara.jpg',
                'price' => 500,
                'category_id' => 23, 
                'orders' => 0,
                'archived_at' => null
            ],
            [
                'name' => 'May Wine',
                'description' => '',
                'image' => 'may wine.jpg',
                'price' => 550,
                'category_id' => 23, 
                'orders' => 0,
                'archived_at' => null
            ],
            [
                'name' => 'Novelino',
                'description' => '',
                'image' => 'novelino.jpg',
                'price' => 550,
                'category_id' => 23, 
                'orders' => 0,
                'archived_at' => null
            ],
            [
                'name' => 'Paul Masson',
                'description' => '',
                'image' => 'paul masson.jpg',
                'price' => 650,
                'category_id' => 23, 
                'orders' => 0,
                'archived_at' => null
            ],
            [
                'name' => 'Perlino',
                'description' => '',
                'image' => 'perlino.jpg',
                'price' => 500,
                'category_id' => 23, 
                'orders' => 0,
                'archived_at' => null
            ],
            [
                'name' => 'Soju',
                'description' => '',
                'image' => 'soju.jpg',
                'price' => 180,
                'category_id' => 23, 
                'orders' => 0,
                'archived_at' => null
            ],
            [
                'name' => 'Tanduay 375ml',
                'description' => '',
                'image' => 'tanduay 375ml.jpg',
                'price' => 250,
                'category_id' => 23, 
                'orders' => 0,
                'archived_at' => null
            ],
            [
                'name' => 'Tanduay 750ml',
                'description' => '',
                'image' => 'tanduay 750ml.jpg',
                'price' => 400,
                'category_id' => 23, 
                'orders' => 0,
                'archived_at' => null
            ],
            [
                'name' => 'Viñedos de Chile',
                'description' => '',
                'image' => 'vinedos de chile.jpg',
                'price' => 900,
                'category_id' => 23, 
                'orders' => 0,
                'archived_at' => null
            ],

            

            // Add more entries as needed
        ];

        // Using Query Builder to insert data
        $this->db->table('menu')->insertBatch($data);
    }
}