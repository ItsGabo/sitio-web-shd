<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\Product;

class ProductSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        Product::create([
            'name' => 'Máscara de pestañas',
            'description' => 'Máscara de pestañas Yuya Aceites Naturales',
            'image' => 'https://ss706.liverpool.com.mx/xl/1082974071.jpg',
            'price' => 199.00
        ]);

        Product::create([
            'name' => 'Set de brochas Real Techniques Everyday Essentials',
            'description' => 'Kit de iniciación a Accesorios de maquillaje. Cubre todas las necesidades de aplicación de maquillaje de rostro. Real Techniques Everyday Essentials es tu juego perfecto para dominar los estilos profesionales para el rostro, las mejillas y los ojos. Este Set incluye: RT 400 Blush cerdas cónicas, suaves y esponjosas. Mezcla el rubor en polvo de manera uniforme para una apariencia suave y natural. Esponja Miracle Complexion - suave, flexible. Mezcla la base de maquillaje líquida y en crema en un acabado luminoso y húmedo. RT 300 Deluxe Crease: cerdas cortas y densas. Coloque y mezcle las sombras de ojos en crema y en polvo de manera uniforme en el pliegue de los ojos. Fraguado RT 402 cerdas suaves y esponjosas. polvo en los polvos para resaltar o fijar con precisión para una iluminación de aspecto natural. RT 200 Expert Face cerdas firmes. pula la base líquida o en crema para obtener un acabado brillante e impecable',
            'image' => 'https://ss706.liverpool.com.mx/xl/1105415091.jpg',
            'price' => 359.20
        ]);

        Product::create([
            'name' => 'Base de maquillaje líquida Estée Lauder Double Wear',
            'description' => 'Dale con la base Estée Lauder Double Wear el acabado perfecto a tu piel, su fórmula de larga duración es perfecta para lucir natural pero con una complexión impecable. Debido a la calidad de sus ingredientes esta base Estée Lauder Double Wear no se corre ni mancha la ropa, además de contar con una cualidad de ligereza y fluidez perfectas para que sientas tu piel magnífica todo el día; posee factor de protección solar, así como cobertura media, convertirá a tu piel en el lienzo perfecto para agregarle los demás productos',
            'image' => 'https://ss701.liverpool.com.mx/xl/45483673.jpg',
            'price' => 950.00
        ]);

        Product::create([
            'name' => 'Delineador de ojos Yuya Cat Eye',
            'description' => 'Delineador + Cat Eye 2 en 1 te ayuda a un delineado perfecto. Larga Duración. Tattoo Cat eye. Coloca una línea delgada en la orilla del parpado junto a las pestañas. Utiliza el lado del Cay Eye para crear un delineado prefecto. Libre de parabenos. Ingredientes: Water, Black 2, Styene/Acrylates Copolymer, Sodium Dehydroacetate, Polypropylene, PPG-26-Buteth-26, PEG-40 Hydrogenated Castor Oil, Propylene Glycol, Alcohol, Phenoxyethanol, Caprylyl Glycol, Disodium EDTA',
            'image' => 'https://ss706.liverpool.com.mx/xl/1073993497.jpg',
            'price' => 219.00
        ]);

        Product::create([
            'name' => 'Unificador La Roche Posay Effaclar',
            'description' => 'Obtén con el unificador La Roche Posay Effaclar una textura visiblemente tersa, así como el acabado mate que deseas para lucir un rostro con un equilibrio adecuado. Aplica este unificador La Roche Posay Effaclar todos los días y luce fabulosa en todo momento al igual que ocasión. Te gustará tener este artículo de belleza siempre a tu disposición',
            'image' => 'https://ss704.liverpool.com.mx/xl/1036595767.jpg',
            'price' => 629.00
        ]);

        Product::create([
            'name' => 'Fragancia para mujer Giorgio Armani My Way 90 ml Eau de Parfum',
            'description' => 'El perfume para mujer My Way Eau de Parfum de Giorgio Armani es el aroma de los descubrimientos y las conexiones para una mujer de mente abierta, curiosa y auténtica, dispuesta a ampliar sus horizontes y vivir encuentros especiales en todo el mundo. My Way Eau de Parfum pertenece a la familia olfativa floral, compuesto por una mezcla de ingredientes obtenidos de forma consciente. La bergamota se funde con el azahar, en su corazón late un bouquet de tuberosa y jazmín. Por último, la madera de cedro se funde con vainilla de Madagascar y almizcles blancos. El frasco de MY WAY es un talismán que alberga todos los encuentros que importan. Cada formato de MY WAY está diseñado para que se pueda desenroscar y recargar en casa con el mismo frasco de refill. El refill de MY WAY se vende por separado',
            'image' => 'https://ss701.liverpool.com.mx/xl/1104673020.jpg',
            'price' => 2930.00
        ]);

        Product::create([
            'name' => 'Set de labiales Yuya Velvet',
            'description' => 'Aplica sobre los labios una capa uniforme, larga duración, no transfiere, textura aterciopelada',
            'image' => 'https://ss706.liverpool.com.mx/xl/1106408986.jpg',
            'price' => 595.00
        ]);

        Product::create([
            'name' => 'Sombras Nyx Professional Makeup Ultimate Shadow Palette',
            'description' => 'Llamamos a esta colección Ultimate Shadow Palette porque eso es exactamente lo que es: una paleta de nivel profesional con 16 sombras de alto rendimiento en un arco iris de inspirados tonos. Cada conjunto cuenta con una mezcla viva de texturas aterciopeladas y fascinantes acabados que van desde mates y satinados a brillantes y metálicos',
            'image' => 'https://ss706.liverpool.com.mx/xl/1063118644.jpg',
            'price' => 520.00
        ]);

        Product::create([
            'name' => 'Corrector Eucerin Dermo Pure',
            'description' => 'Tratamiento de doble efecto; cubre las imperfecciones y las espinillas',
            'image' => 'https://ss704.liverpool.com.mx/xl/1064652601.jpg',
            'price' => 417.00
        ]);

        Product::create([
            'name' => 'Bálsamo DIOR Lip Glow Oil',
            'description' => 'Lip Glow Oil es el primer aciete de cereza satinador y realzador de color con acabados brillante y holográfico que repara los labios intensamente. Su textura a base de aceite, no pegajosa ni grasa, combina el brillo resplandeciente de un gloss y el confort intenso de un tratamiento dejando los labios visiblemente más suaves',
            'image' => 'https://ss701.liverpool.com.mx/xl/1093057381.jpg',
            'price' => 720.00
        ]);
    }
}
