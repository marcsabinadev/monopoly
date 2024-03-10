<?php

namespace Database\Seeders;

/**
 * @autores: Alejandra Paz, Angel Rivera, Marc Sabina, Julia Prieto
 * Insertar datos en la BD
 */
// use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use App\Models\User;
use App\Models\Partida;
use App\Models\Participante;
use App\Models\Casilla;
use App\Models\Carta;
use App\Models\Clasificacion;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     */
    public function run(): void
    {
        // Generar 10 partidas aleatorias
        Partida::factory()->count(10)->create();

        // Generar 20 participantes aleatorios con clasificación asociada
        Participante::factory()->count(20)->create()->each(function ($participante) {
            // Generar una nueva clasificación para cada participante
            $clasificacion = Clasificacion::factory()->create();
            // Asignar la clasificación al participante
            $participante->update(['clasificacion_id' => $clasificacion->id]);
        });

        // Llama a la función para generar todas las casillas
        $this->generarCasillas();
        // Llama a la función para generar todas las cartas
        $this->generarCartas();
        // Llama a la función para generar 4 usuarios con rol admin
        $this->generarUser();
    }

    private function generarCasillas()
    {
        // Array con los datos de todas las casillas del Monopoly
        $casillas = [
            ['Casilla de Salida', 'Salida', 'Ninguno', 0, false],
            ['Plaza Mediterráneo', 'Propiedad', 'Marrón', 60, true],
            ['Caja de Comunidad 1', 'Caja de Comunidad', 'Ninguno', 0, false],
            ['Avenida Baltica', 'Propiedad', 'Marrón', 60, true],
            ['Impuesto sobre el Capital', 'Impuesto', 'Ninguno', 200, false],
            ['Estación de ferrocarril Reading', 'Ferrocarril', 'Ninguno', 200, true],
            ['Avenida Oriental', 'Propiedad', 'Celeste', 100, true],
            ['Suerte 1', 'Suerte', 'Ninguno', 0, false],
            ['Avenida Vermont', 'Propiedad', 'Celeste', 100, true],
            ['Avenida Connecticut', 'Propiedad', 'Celeste', 120, true],
            ['Cárcel / Visitas', 'Cárcel', 'Ninguno', 0, false],
            ['Plaza San Carlos', 'Propiedad', 'Rosa', 140, true],
            ['Servicio Eléctrico', 'Servicio público', 'Ninguno', 150, true],
            ['Avenida Estatal', 'Propiedad', 'Rosa', 140, true],
            ['Avenida Virginia', 'Propiedad', 'Rosa', 160, true],
            ['Estación de ferrocarril Pennsylvania', 'Ferrocarril', 'Ninguno', 200, true],
            ['Plaza San James', 'Propiedad', 'Naranja', 180, true],
            ['Caja de Comunidad 2', 'Caja de Comunidad', 'Ninguno', 0, false],
            ['Avenida Tennessee', 'Propiedad', 'Naranja', 180, true],
            ['Avenida Nueva York', 'Propiedad', 'Naranja', 200, true],
            ['Estacionamiento gratuito', 'Estacionamiento', 'Ninguno', 0, false],
            ['Avenida Kentucky', 'Propiedad', 'Rojo', 220, true],
            ['Suerte 2', 'Suerte', 'Ninguno', 0, false],
            ['Avenida Indiana', 'Propiedad', 'Rojo', 220, true],
            ['Avenida Illinois', 'Propiedad', 'Rojo', 240, true],
            ['Estación de ferrocarril B. & O.', 'Ferrocarril', 'Ninguno', 200, true],
            ['Avenida Atlántico', 'Propiedad', 'Amarillo', 260, true],
            ['Avenida Ventnor', 'Propiedad', 'Amarillo', 260, true],
            ['Servicio de Aguas', 'Servicio público', 'Ninguno', 150, true],
            ['Jardines Marvin', 'Propiedad', 'Amarillo', 280, true],
            ['Ir a la cárcel', 'Ir a la cárcel', 'Ninguno', 0, false],
            ['Avenida Pacífico', 'Propiedad', 'Verde', 300, true],
            ['Avenida Carolina del Norte', 'Propiedad', 'Verde', 300, true],
            ['Caja de Comunidad 3', 'Caja de Comunidad', 'Ninguno', 0, false],
            ['Avenida Pensilvania', 'Propiedad', 'Verde', 320, true],
            ['Estación de ferrocarril Short Line', 'Ferrocarril', 'Ninguno', 200, true],
            ['Suerte 3', 'Suerte', 'Ninguno', 0, false],
            ['Plaza Park', 'Propiedad', 'Azul', 350, true],
            ['Impuesto de Lujo', 'Impuesto', 'Ninguno', 100, true],
            ['Paseo de la fama', 'Propiedad', 'Azul', 400, true],
        ];

        // Iterar sobre el array y crear cada casilla
        foreach ($casillas as $casilla) {
            Casilla::create([
                'nombre' => $casilla[0],
                'tipoCasilla' => $casilla[1],
                'color' => $casilla[2],
                'precio' => $casilla[3],
                'uso' => $casilla[4],
            ]);
        }
    }

    private function generarCartas()
    {
        // Array con los datos de todas las cartas del Monopoly
        $cartas = [
            ['Suerte', 'Colócate en la casilla de salida, cobra 200'],
            ['Suerte', 'Ve a la cárcel. Ve directamente sin pasar por la casilla de salida y sin cobrar los 200'],
            ['Suerte', 'Avanza hasta el servicio público más cercano. Si no tiene dueño, puedes comprárselo a la Banca. Si tiene dueño, lanza los dados y paga al dueño un total de diez veces la cantidad mostrada'],
            ['Suerte', 'Avanza hasta la estación más cercana. Si no tiene dueño, puedes comprárselo a la Banca. Si tiene dueño, lanza los dados y paga al dueño un total de diez veces la cantidad mostrada'],
            ['Suerte', 'Avanza hasta la Plaza San Carlos. Si pasas por la casilla de salida, cobra 200'],
            ['Suerte', 'Retrocede tres casillas'],
            ['Suerte', 'Has sido elegido presidente de la junta directiva paga a cada jugador 50'],
            ['Suerte', 'Rescate por el seguro de tus edificios. Cobra 150'],
            ['Suerte', 'Multa por exceso de velocidad de 15'],
            ['Suerte', 'Avanza hasta Avedina Indiana'],
            ['Suerte', 'Haz reparaciones generales en todas tus propiedades paga por cada casa 25, paga por cada hotel 100'],
            ['Suerte', 'La banca te paga un dividendo de 50'],
            ['Suerte', 'Quedas libre de la cárcel. Puedes vender esta carta o conservarla hasta que la necesites'],
            ['Suerte', 'Viaja hasta la estación de Ferrocarril Short Line'],
            ['Caja de Comunidad', 'Es tú cumpleaños. Recibe 10 de casa jugador'],
            ['Caja de Comunidad', 'Beneficios de tu seguro de vida. Cobra 100'],
            ['Caja de Comunidad', 'Recibe 25 como honorarios de la asesoría'],
            ['Caja de Comunidad', 'Factura del medico paga 50'],
            ['Caja de Comunidad', 'Has ganado el segundo premio en un concurso de belleza. Cobra 10'],
            ['Caja de Comunidad', 'Ve a la cárcel. Ve directamente sin pasar por la casilla de salida y sin cobrar los 200'],
            ['Caja de Comunidad', 'Paga por gastos escolares 50'],
            ['Caja de Comunidad', 'Colócate en la casilla de salida, cobra 200'],
            ['Caja de Comunidad', 'Debes realizar reparaciones en la calle: paga 40 por casa, paga 115 por hotel'],
            ['Caja de Comunidad', 'El fondo de vacaciones, te reporta beneficios. Recibe 100'],
            ['Caja de Comunidad', 'Paga las facturas del hospital de 100'],
            ['Caja de Comunidad', 'Heredas 100'],
            ['Caja de Comunidad', 'Error de la banca a tu favor, recibe 200'],
            ['Caja de Comunidad', 'Hacienda te devuelve, cobra 20'],
            ['Caja de Comunidad', 'Quedas libre de la cárcel. Puedes vender esta carta o conversarla hasta que la necesites'],
            ['Propiedad', 'Plaza Mediterráneo, 60'],
            ['Propiedad', 'Avenida Baltaica, 60'],
            ['Propiedad', 'Avenida Oriental, 100'],
            ['Propiedad', 'Avenida Vermont, 100'],
            ['Propiedad', 'Avenida Connecticut, 120'],
            ['Propiedad', 'Plaza San Carlos, 140'],
            ['Propiedad', 'Avenida Estatal, 140'],
            ['Propiedad', 'Avenida Virginia, 160'],
            ['Propiedad', 'Plaza San James, 180'],
            ['Propiedad', 'Avenida Tennessee, 180'],
            ['Propiedad', 'Avenida Nueva York, 200'],
            ['Propiedad', 'Avenida Kentucky, 220'],
            ['Propiedad', 'Avenida Indiana, 220'],
            ['Propiedad', 'Avenida Illinois, 240'],
            ['Propiedad', 'Avenida Atlantico, 260'],
            ['Propiedad', 'Avenida Ventor, 260'],
            ['Propiedad', 'Jardines Marvin, 280'],
            ['Propiedad', 'Avenida Pacífico, 300'],
            ['Propiedad', 'Avenida Carolina del Norte, 300'],
            ['Propiedad', 'Avenida Pensilvania, 320'],
            ['Propiedad', 'Plaza Park, 350'],
            ['Propiedad', 'Paseo de la fama, 400'],
        ];

        // Iterar sobre el array y crear cada carta
        foreach ($cartas as $carta) {
            // Buscar la casilla asociada a la carta por su tipo de casilla
            $casilla = Casilla::where('tipoCasilla', $carta[0])->first();

            // Verificar si se encontró la casilla
            if ($casilla) {
                // Crear la carta asociada a la casilla encontrada
                Carta::create([
                    'tipoCarta' => $carta[0],
                    'definicion' => $carta[1],
                    'casilla_id' => $casilla->id,
                ]);
            } else {
                // Mostrar un mensaje de error
                echo "No se pudo encontrar la casilla asociada a la carta: " . $carta[1] . "\n";
            }
        }
    }

    /**
     * La función crea distintos usuarios administradores
     */
    private function generarUser()
    {
        $users = [
            ['Julia', 'admin', '1234567j', 26, 'julia@gmail.com'],
            ['Angel', 'admin', '1234567a', 22, 'angel@gmail.com'],
            ['Marc', 'admin', '1234567m', 20, 'marc@gmail.com'],
            ['Alejandra', 'admin', '1234567p', 19, 'alejandra@gmail.com'],
        ];
        // Iterar sobre el array y crear cada user
        foreach ($users as $user) {

            // Verificar si se encontró el user
            if ($user) {
                // Crear el user
                User::create([
                    'name' => $user[0],
                    'rol' => $user[1],
                    'password' => $user[2],
                    'age' => $user[3],
                    'email' => $user[4],
                ]);
            } else {
                // Mostrar un mensaje de error
                echo "No se pudo encontrar el nombre asociado al usuario: " . $user[1] . "\n";
            }
        }
    }
}
