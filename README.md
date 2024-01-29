# Prueba Técnica para Ticketero

## Descripción del Ejercicio
Este ejercicio forma parte del proceso de evaluación de capacidades y se centra en realizar llamadas a los endpoints de búsqueda por venue, por destino y por performer, utilizando el endpoint de autocomplete como fuente de información. La tarea principal consiste en obtener la información necesaria a través del endpoint de autocomplete, lo que permitirá realizar de manera efectiva las llamadas a los otros endpoints mencionados anteriormente.

## Objetivo
El objetivo principal de este ejercicio es evaluar las habilidades de integración y manipulación de datos mediante llamadas a APIs. Se espera que el participante demuestre su capacidad para comprender la estructura de la API, utilizar el endpoint de autocomplete de manera efectiva y realizar consultas a otros endpoints para obtener información detallada sobre venues, destinos y performers.

## Desarrollador
- **Desarrollado por:** Angel Baeza
- **Perfil de:** Fullstack developer Laravel
- **LinkedIn:** [Perfil de LinkedIn](https://www.linkedin.com/in/ingangelbaeza/)
- **GitHub:** [Perfil de GitHub](https://github.com/ingangelbaeza/)

## Tecnologías Utilizadas
- **Framework Laravel:** v10.42.0 [Documentación](https://laravel.com/docs/10.x)
- **Jetstream:** v4.2.2 [Documentación](https://jetstream.laravel.com/introduction.html)
- **Livewire:** v3.4.2 [Documentación](https://livewire.laravel.com/docs/quickstart)
- **Tailwind CSS:** v3.1.0 [Documentación](https://tailwindcss.com/docs/installation)
- **Preline:** v2.0.3 [Documentación](https://preline.co/docs/index.html)

## Instalación del Proyecto
```bash
# clonar repositorio
git clone https://github.com/ingangelbaeza/ticketero.git
# navegar a ruta de proyecto
cd ticketero
# instalar proyecto
composer install
# clonar archivo de configuración
cp .env.example .env
# agregar endpoint y token en las variables
TICKETERO_ENDPOINT=<ENDPOINT>
TICKETERO_TOKEN=<TOKEN>
# generar key de laravel
php artisan key:generate
# migrar base de datos
php artisan migrate --seed
# instalar dependecias js
npm i
# compilar styles y js
npm run build
```

## Información de Inicio de Sesión de Pruebas
- Usuario: testuser@example.com
- Contraseña: qwerty123
