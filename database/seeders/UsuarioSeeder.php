<?php

namespace Database\Seeders;

use App\Models\Usuario;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class UsuarioSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        for($i = 0 ; $i <= 40; $i++){

            $ano = rand(1990, 2005);

            $mes = rand(1,12);
   
            $dia = rand(1,28);

            Usuario::create([
            'nome' => 'Xavier',
            'email' => 'xavierntp@gmail.com' . $i,
            'celular' => '997334098',
            'estado_civil' => 'casado',
            'data_nacimento' => $ano . '-' . $mes . '-' . $dia,
            'cidade' => 'Presidente Epitacio',
            'estado' => 'SP',
            'endereco' => 'Sebastião 4136',
            'cep' => '19470-000',
            'password' => '157244155'
            ]);
        }

        for($i = 0 ; $i <= 40; $i++){

            $ano = rand(1990, 2005);

            $mes = rand(1,12);
   
            $dia = rand(1,28);

            Usuario::create([
            'nome' => 'Rhayan',
            'email' => 'rhayanntp@gmail.com' . $i,
            'celular' => '997334098',
            'estado_civil' => 'casado',
            'data_nacimento' => $ano . '-' . $mes . '-' . $dia,
            'cidade' => 'Presidente Prudente',
            'estado' => 'SP',
            'endereco' => 'Sebastião 4136',
            'cep' => '19470-000',
            'password' => '157244155'
            ]);
        }

        for($i = 0 ; $i <= 40; $i++){

            $ano = rand(1990, 2005);

            $mes = rand(1,12);
   
            $dia = rand(1,28);

            Usuario::create([
            'nome' => 'Rhangel',
            'email' => 'rhangelntp@gmail.com' . $i,
            'celular' => '997334098',
            'estado_civil' => 'casado',
            'data_nacimento' => $ano . '-' . $mes . '-' . $dia,
            'cidade' => 'Presidente Venceslau',
            'estado' => 'SP',
            'endereco' => 'Sebastião 4136',
            'cep' => '19470-000',
            'password' => '157244155'
            ]);
        }

        for($i = 0 ; $i <= 40; $i++){

            $ano = rand(1990, 2005);

            $mes = rand(1,12);
   
            $dia = rand(1,28);

            Usuario::create([
            'nome' => 'Ferreira',
            'email' => 'ferreirantp@gmail.com' . $i,
            'celular' => '997334098',
            'estado_civil' => 'casado',
            'data_nacimento' => $ano . '-' . $mes . '-' . $dia,
            'cidade' => 'São Paulo',
            'estado' => 'SP',
            'endereco' => 'Sebastião 4136',
            'cep' => '19470-000',
            'password' => '157244155'
            ]);
        }

        for($i = 0 ; $i <= 40; $i++){

            $ano = rand(1990, 2005);

            $mes = rand(1,12);
   
            $dia = rand(1,28);

            Usuario::create([
            'nome' => 'Silva',
            'email' => 'silvantp@gmail.com' . $i,
            'celular' => '997334098',
            'estado_civil' => 'casado',
            'data_nacimento' => $ano . '-' . $mes . '-' . $dia,
            'cidade' => 'Marilia',
            'estado' => 'SP',
            'endereco' => 'Sebastião 4136',
            'cep' => '19470-000',
            'password' => '157244155'
            ]);
        }

        for($i = 0 ; $i <= 40; $i++){

            $ano = rand(1990, 2005);

            $mes = rand(1,12);
   
            $dia = rand(1,28);

            Usuario::create([
            'nome' => 'Saraiva',
            'email' => 'saraivantp@gmail.com' . $i,
            'celular' => '997334098',
            'estado_civil' => 'casado',
            'data_nacimento' => $ano . '-' . $mes . '-' . $dia,
            'cidade' => 'Belém',
            'estado' => 'Pará',
            'endereco' => 'Sebastião 4136',
            'cep' => '19470-000',
            'password' => '157244155'
            ]);
        }

        for($i = 0 ; $i <= 40; $i++){

            $ano = rand(1990, 2005);

            $mes = rand(1,12);
   
            $dia = rand(1,28);

            Usuario::create([
            'nome' => 'Lacerda',
            'email' => 'lacerdantp@gmail.com' . $i,
            'celular' => '997334098',
            'estado_civil' => 'casado',
            'data_nacimento' => $ano . '-' . $mes . '-' . $dia,
            'cidade' => 'Campo Grande',
            'estado' => 'Mato Grosso do Sul',
            'endereco' => 'Sebastião 4136',
            'cep' => '19470-000',
            'password' => '157244155'
            ]);
        }

        for($i = 0 ; $i <= 40; $i++){

            $ano = rand(1990, 2005);

            $mes = rand(1,12);
   
            $dia = rand(1,28);

            Usuario::create([
            'nome' => 'Dadão',
            'email' => 'dadãontp@gmail.com' . $i,
            'celular' => '997334098',
            'estado_civil' => 'casado',
            'data_nacimento' => $ano . '-' . $mes . '-' . $dia,
            'cidade' => 'Belo Horizonte',
            'estado' => 'Minas Gerais',
            'endereco' => 'Sebastião 4136',
            'cep' => '19470-000',
            'password' => '157244155'
            ]);
        }

        for($i = 0 ; $i <= 40; $i++){

            $ano = rand(1990, 2005);

            $mes = rand(1,12);
   
            $dia = rand(1,28);

            Usuario::create([
            'nome' => 'Uchiha',
            'email' => 'uchihantp@gmail.com' . $i,
            'celular' => '997334098',
            'estado_civil' => 'casado',
            'data_nacimento' => $ano . '-' . $mes . '-' . $dia,
            'cidade' => 'Porto Alegre',
            'estado' => 'Rio Grande do Sul',
            'endereco' => 'Sebastião 4136',
            'cep' => '19470-000',
            'password' => '157244155'
            ]);
        }

        for($i = 0 ; $i <= 40; $i++){

            $ano = rand(1990, 2005);

            $mes = rand(1,12);
   
            $dia = rand(1,28);

            Usuario::create([
            'nome' => 'Uzumaki',
            'email' => 'uzumakintp@gmail.com' . $i,
            'celular' => '997334098',
            'estado_civil' => 'casado',
            'data_nacimento' => $ano . '-' . $mes . '-' . $dia,
            'cidade' => 'Natal',
            'estado' => 'Rio Grande do Norte',
            'endereco' => 'Sebastião 4136',
            'cep' => '19470-000',
            'password' => '157244155'
            ]);
        }
    }
}
