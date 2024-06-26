<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\Lacteo;

class LacteosTableSeeder extends Seeder
{
    public function run()
    {
        $lacteos = [
            ['nombre' => 'Leche Entera', 'marca' => 'Colun', 'precio' => 1200, 'peso' => 1000, 'imagen' => 'leche_entera_colun.jpg'],
            ['nombre' => 'Leche Entera', 'marca' => 'Soprole', 'precio' => 1250, 'peso' => 1000, 'imagen' => 'leche_entera_soprole.jpg'],
            ['nombre' => 'Leche Entera', 'marca' => 'Loncoleche', 'precio' => 1150, 'peso' => 1000, 'imagen' => 'leche_entera_loncoleche.jpg'],
            ['nombre' => 'Leche Descremada', 'marca' => 'Colun', 'precio' => 1200, 'peso' => 1000, 'imagen' => 'leche_descremada_colun.jpg'],
            ['nombre' => 'Leche Descremada', 'marca' => 'Soprole', 'precio' => 1250, 'peso' => 1000, 'imagen' => 'leche_descremada_soprole.jpg'],
            ['nombre' => 'Leche Descremada', 'marca' => 'Loncoleche', 'precio' => 1150, 'peso' => 1000, 'imagen' => 'leche_descremada_loncoleche.jpg'],
            ['nombre' => 'Leche Semidescremada', 'marca' => 'Colun', 'precio' => 1200, 'peso' => 1000, 'imagen' => 'leche_semidescremada_colun.jpg'],
            ['nombre' => 'Leche Semidescremada', 'marca' => 'Soprole', 'precio' => 1250, 'peso' => 1000, 'imagen' => 'leche_semidescremada_soprole.jpg'],
            ['nombre' => 'Leche Semidescremada', 'marca' => 'Loncoleche', 'precio' => 1150, 'peso' => 1000, 'imagen' => 'leche_semidescremada_loncoleche.jpg'],
            ['nombre' => 'Yogur Natural', 'marca' => 'Colun', 'precio' => 500, 'peso' => 125, 'imagen' => 'yogur_natural_colun.jpg'],
            ['nombre' => 'Yogur Frutilla', 'marca' => 'Soprole', 'precio' => 550, 'peso' => 125, 'imagen' => 'yogur_frutilla_soprole.jpg'],
            ['nombre' => 'Yogur Vainilla', 'marca' => 'Nestlé', 'precio' => 600, 'peso' => 125, 'imagen' => 'yogur_vainilla_nestle.jpg'],
            ['nombre' => 'Queso Fresco', 'marca' => 'Colun', 'precio' => 5500, 'peso' => 1000, 'imagen' => 'queso_fresco_colun.jpg'],
            ['nombre' => 'Queso Mantecoso', 'marca' => 'Soprole', 'precio' => 6000, 'peso' => 1000, 'imagen' => 'queso_mantecoso_soprole.jpg'],
            ['nombre' => 'Queso Gauda', 'marca' => 'Colun', 'precio' => 7500, 'peso' => 1000, 'imagen' => 'queso_gauda_colun.jpg'],
            ['nombre' => 'Queso Chanco', 'marca' => 'Soprole', 'precio' => 7300, 'peso' => 1000, 'imagen' => 'queso_chanco_soprole.jpg'],
            ['nombre' => 'Mantequilla', 'marca' => 'Colun', 'precio' => 1800, 'peso' => 250, 'imagen' => 'mantequilla_colun.jpg'],
            ['nombre' => 'Mantequilla', 'marca' => 'Soprole', 'precio' => 1900, 'peso' => 250, 'imagen' => 'mantequilla_soprole.jpg'],
            ['nombre' => 'Crema', 'marca' => 'Colun', 'precio' => 900, 'peso' => 200, 'imagen' => 'crema_colun.jpg'],
            ['nombre' => 'Crema', 'marca' => 'Soprole', 'precio' => 950, 'peso' => 200, 'imagen' => 'crema_soprole.jpg'],
            ['nombre' => 'Quesillo', 'marca' => 'Colun', 'precio' => 1600, 'peso' => 250, 'imagen' => 'quesillo_colun.jpg'],
            ['nombre' => 'Quesillo', 'marca' => 'Soprole', 'precio' => 1700, 'peso' => 250, 'imagen' => 'quesillo_soprole.jpg'],
            ['nombre' => 'Leche Condensada', 'marca' => 'Nestlé', 'precio' => 1200, 'peso' => 397, 'imagen' => 'leche_condensada_nestle.jpg'],
            ['nombre' => 'Leche Evaporada', 'marca' => 'Nestlé', 'precio' => 1100, 'peso' => 410, 'imagen' => 'leche_evaporada_nestle.jpg'],
            ['nombre' => 'Queso Rallado', 'marca' => 'Soprole', 'precio' => 1500, 'peso' => 100, 'imagen' => 'queso_rallado_soprole.jpg'],
            ['nombre' => 'Postre Flan', 'marca' => 'Soprole', 'precio' => 600, 'peso' => 125, 'imagen' => 'flan_soprole.jpg'],
            ['nombre' => 'Postre Manjarate', 'marca' => 'Soprole', 'precio' => 700, 'peso' => 125, 'imagen' => 'manjarate_soprole.jpg'],
            ['nombre' => 'Postre Leche Asada', 'marca' => 'Soprole', 'precio' => 650, 'peso' => 125, 'imagen' => 'leche_asada_soprole.jpg'],
            ['nombre' => 'Manjar', 'marca' => 'Colun', 'precio' => 2000, 'peso' => 500, 'imagen' => 'manjar_colun.jpg'],
            ['nombre' => 'Manjar', 'marca' => 'Soprole', 'precio' => 2100, 'peso' => 500, 'imagen' => 'manjar_soprole.jpg'],
        ];

        foreach ($lacteos as $lacteo) {
            Lacteo::create($lacteo);
        }
    }
}
