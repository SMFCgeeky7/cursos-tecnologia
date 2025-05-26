<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class CursoController extends Controller
{
    public function index()
    {
        $cursos = $this->getCursos();
        return view('cursos.index', compact('cursos'));
    }

    public function show($id)
    {
        $cursos = $this->getCursos();
        $curso = collect($cursos)->firstWhere('id', $id);
        
        if (!$curso) abort(404);

        return view('cursos.show', compact('curso'));
    }

    private function getCursos()
    {
        return [
            [
                'id' => 1,
                'nombre' => 'Curso de  Android',
                'descripcion' => 'Aprende Desarrollo Android desde cero',
                'instructor' => 'Juan Emilio Pérez',
                'nivel' => 'Basico',
                'precio' => 129.99,
                'duracion' => '120 horas',
                'imagen' => 'android.png'
            ],
            [
                'id' => 2,
                'nombre' => 'Curso de desarrollo para dispositivos Apple',
                'descripcion' => 'Aprende Apple Development desde cero',
                'instructor' => 'Matheus Gonzales Fernandez',
                'nivel' => 'Intermedio-Dificil',
                'precio' => 369.99,
                'duracion' => '300 horas',
                'imagen' => 'apple.png'
            ],
            [
                'id' => 3,
                'nombre' => 'Curso de App Store Statistics for Selling Apps',
                'descripcion' => 'Aprende a crear tus propias apps y monetizarlas',
                'instructor' => 'Jorge Añez Gomez',
                'nivel' => 'Basico',
                'precio' => 120.00,
                'duracion' => '12 horas',
                'imagen' => 'appstorestats.webp'
            ],
            [
                'id' => 4,
                'nombre' => 'Curso de Bitcoin y Criptomonedas',
                'descripcion' => 'Aprende sobre la criptomoneda más famosa del mundo',
                'instructor' => 'Carlos Alberto Gutiérrez',
                'nivel' => 'Basico',
                'precio' => 120.00,
                'duracion' => '10 horas',
                'imagen' => 'bitcoin.jpeg'
            ],
            [
                'id' => 5,
                'nombre' => 'Curso de uso de ChatGPT para programadores',
                'descripcion' => 'Aprende a usar ChatGPT para mejorar tu productividad en tu sector TI',
                'instructor' => 'Eliana Martínez',
                'nivel' => 'Intermedio',
                'precio' => 300.99,
                'duracion' => '60 horas',
                'imagen' => 'chatgpt.png'
            ],
            [
                'id' => 6,
                'nombre' => 'Claude para Vibe Coding',
                'descripcion' => 'Claude AI, un modelo para vibe coding',
                'instructor' => 'Esteban Quiroz',
                'nivel' => 'Intermedio',
                'precio' => 60.99,
                'duracion' => '25 horas',
                'imagen' => 'claude.jpeg'
            ],
            [
                'id' => 7,
                'nombre' => 'Desarrollo con Firebase',
                'descripcion' => 'Domina el desarrollo de aplicaciones en tiempo real con Firebase',
                'instructor' => 'Carlos Martínez',
                'nivel' => 'Intermedio',
                'precio' => 89.99,
                'duracion' => '18 horas',
                'imagen' => 'firebase.png'
            ],
            [
                'id' => 8,
                'nombre' => 'Flutter Avanzado',
                'descripcion' => 'Crea aplicaciones multiplataforma con Flutter y Dart',
                'instructor' => 'Laura González',
                'nivel' => 'Avanzado',
                'precio' => 129.99,
                'duracion' => '25 horas',
                'imagen' => 'flutter.webp'
            ],
            [
                'id' => 9,
                'nombre' => 'Blockchain con Ethereum',
                'descripcion' => 'Introducción al desarrollo de contratos inteligentes',
                'instructor' => 'Diego Ramírez',
                'nivel' => 'Intermedio',
                'precio' => 149.99,
                'duracion' => '30 horas',
                'imagen' => 'ethereum.jpg'
            ],
            [
                'id' => 10,
                'nombre' => 'Google Cloud Essentials',
                'descripcion' => 'Domina los servicios en la nube de Google',
                'instructor' => 'Ana Sánchez',
                'nivel' => 'Intermedio',
                'precio' => 199.99,
                'duracion' => '35 horas',
                'imagen' => 'googlecloud.webp'
            ],
            [
                'id' => 11,
                'nombre' => 'Fundamentos de IoT',
                'descripcion' => 'Introducción al Internet de las Cosas con proyectos prácticos',
                'instructor' => 'Pedro López',
                'nivel' => 'Principiante',
                'precio' => 69.99,
                'duracion' => '15 horas',
                'imagen' => 'fundamentosiot.jpeg'
            ],
            [
                'id' => 12,
                'nombre' => 'Desarrollo Web Moderno',
                'descripcion' => 'Full-stack development con las últimas tecnologías',
                'instructor' => 'Marta Rodríguez',
                'nivel' => 'Intermedio',
                'precio' => 109.99,
                'duracion' => '40 horas',
                'imagen' => 'fundamentosweb.webp'
            ],
            [
                'id' => 13,
                'nombre' => 'Google Ads Profesional',
                'descripcion' => 'Certificación en publicidad digital con Google Ads',
                'instructor' => 'Sofía Castro',
                'nivel' => 'Avanzado',
                'precio' => 159.99,
                'duracion' => '20 horas',
                'imagen' => 'google-ads-curso.gif'
            ],
            [
                'id' => 14,
                'nombre' => 'Automatización con Excel',
                'descripcion' => 'Macros y Power Query para análisis de datos',
                'instructor' => 'Jorge Méndez',
                'nivel' => 'Intermedio',
                'precio' => 59.99,
                'duracion' => '12 horas',
                'imagen' => 'excel.jpeg'
            ],
            [
                'id' => 15,
                'nombre' => 'Robótica Humanoides',
                'descripcion' => 'Diseño y programación de robots humanoides',
                'instructor' => 'Ing. Roberto Navarro',
                'nivel' => 'Avanzado',
                'precio' => 179.99,
                'duracion' => '28 horas',
                'imagen' => 'humanoidrobot.webp'
            ],
            [
                'id' => 16,
                'nombre' => 'iOS 19 Development',
                'descripcion' => 'Novedades de SwiftUI para la próxima versión de iOS',
                'instructor' => 'David Torres',
                'nivel' => 'Avanzado',
                'precio' => 139.99,
                'duracion' => '22 horas',
                'imagen' => 'ios-19.webp'
            ],
            [
                'id' => 17,
                'nombre' => 'Google Workspace Expert',
                'descripcion' => 'Gestión profesional de entornos colaborativos',
                'instructor' => 'Lucía Fernández',
                'nivel' => 'Intermedio',
                'precio' => 79.99,
                'duracion' => '14 horas',
                'imagen' => 'google-workspace.jpg'
            ],
            [
                'id' => 18,
                'nombre' => 'Deep Learning con DeepSeek',
                'descripcion' => 'Redes neuronales avanzadas para ciencia de datos',
                'instructor' => 'Dr. Alejandro Ruiz',
                'nivel' => 'Avanzado',
                'precio' => 189.99,
                'duracion' => '30 horas',
                'imagen' => 'DeepSeek.webp'
            ],
            [
                'id' => 19,
                'nombre' => 'Ciberseguridad Google',
                'descripcion' => 'Protección de infraestructuras cloud',
                'instructor' => 'Ing. Patricia Vargas',
                'nivel' => 'Intermedio',
                'precio' => 149.99,
                'duracion' => '18 horas',
                'imagen' => 'google.png'
            ],
            [
                'id' => 20,
                'nombre' => 'Automatización con Copilot',
                'descripcion' => 'Flujos de trabajo con IA generativa',
                'instructor' => 'Miguel Ángel Cortés',
                'nivel' => 'Intermedio',
                'precio' => 129.99,
                'duracion' => '16 horas',
                'imagen' => 'copilot.jpg'
            ],
            [
                'id' => 21,
                'nombre' => 'Curso de Computacion: Nivel 1',
                'descripcion' => 'Aprende fundamentos basicos de la computacion',
                'instructor' => 'Alejandro Perez',
                'nivel' => 'Basico',
                'precio' => 80.99,
                'duracion' => '14 horas',
                'imagen' => 'cursos-de-computacion.jpeg'
            ],
            [
                'id' => 22,
                'nombre' => 'Curso de Computacion: Nivel 2',
                'descripcion' => 'Aprende de redes en la computacion y sus aplicaciones',
                'instructor' => 'Ing. Patricio Urgel',
                'nivel' => 'Intermedio',
                'precio' => 149.99,
                'duracion' => '18 horas',
                'imagen' => 'cursos-de-informatica.jpg'
            ],
            [
                'id' => 23,
                'nombre' => 'Curso de Computacion: Nivel 3',
                'descripcion' => 'Flujos de trabajo con IA generativa en la computacion en general',
                'instructor' => 'Miguel Ángel Portillo Peredo',
                'nivel' => 'Avanzado',
                'precio' => 300.99,
                'duracion' => '28 horas',
                'imagen' => 'cursos-de-informatica2.webp'
            ],
            [
                'id' => 24,
                'nombre' => 'Google I/O Desarrollo Avanzado',
                'descripcion' => 'Domina las últimas tecnologías presentadas en Google I/O',
                'instructor' => 'Ing. Fernando Rojas',
                'nivel' => 'Avanzado',
                'precio' => 219.99,
                'duracion' => '30 horas',
                'imagen' => 'googleio.webp'
            ],
            [
                'id' => 25,
                'nombre' => 'Administración de Servidores Linux',
                'descripcion' => 'Gestión profesional de servidores con Ubuntu y CentOS',
                'instructor' => 'Carlos Andrés Méndez',
                'nivel' => 'Intermedio',
                'precio' => 169.99,
                'duracion' => '35 horas',
                'imagen' => 'linux.jpg'
            ],
            [
                'id' => 26,
                'nombre' => 'Office 365 Avanzado',
                'descripcion' => 'Automatización de flujos de trabajo con Microsoft Office',
                'instructor' => 'Laura Patricia Torrez',
                'nivel' => 'Intermedio',
                'precio' => 89.99,
                'duracion' => '18 horas',
                'imagen' => 'office.png'
            ],
            [
                'id' => 27,
                'nombre' => 'Desarrollo con OpenAI API',
                'descripcion' => 'Integración de inteligencia artificial en aplicaciones',
                'instructor' => 'Dr. Rodrigo Sánchez',
                'nivel' => 'Avanzado',
                'precio' => 299.99,
                'duracion' => '25 horas',
                'imagen' => 'openai.jpeg'
            ],
            [
                'id' => 28,
                'nombre' => 'Presentaciones Profesionales con PowerPoint',
                'descripcion' => 'Diseño de presentaciones ejecutivas impactantes',
                'instructor' => 'María Fernanda Castro',
                'nivel' => 'Básico',
                'precio' => 49.99,
                'duracion' => '8 horas',
                'imagen' => 'powerpoint.jpg'
            ],
            [
                'id' => 29,
                'nombre' => 'Fundamentos de Programación',
                'descripcion' => 'Lógica de programación desde cero',
                'instructor' => 'Ing. Diego Armando Maradona',
                'nivel' => 'Básico',
                'precio' => 79.99,
                'duracion' => '20 horas',
                'imagen' => 'programming.jpg'
            ],
            [
                'id' => 30,
                'nombre' => 'Python para Ciencia de Datos',
                'descripcion' => 'Análisis de datos con Pandas y NumPy',
                'instructor' => 'Dra. Valeria Quiroga',
                'nivel' => 'Intermedio',
                'precio' => 149.99,
                'duracion' => '30 horas',
                'imagen' => 'python.png'
            ],
            [
                'id' => 31,
                'nombre' => 'React JS Profesional',
                'descripcion' => 'Desarrollo frontend con React y Redux',
                'instructor' => 'Luis Fernando Arce',
                'nivel' => 'Intermedio',
                'precio' => 179.99,
                'duracion' => '40 horas',
                'imagen' => 'reactjs.jpeg'
            ],
            [
                'id' => 32,
                'nombre' => 'React Native Mobile',
                'descripcion' => 'Creación de apps móviles multiplataforma',
                'instructor' => 'Ing. Marco Antonio Soliz',
                'nivel' => 'Avanzado',
                'precio' => 199.99,
                'duracion' => '35 horas',
                'imagen' => 'reactnative.png'
            ],
            [
                'id' => 33,
                'nombre' => 'Robótica Industrial Básica',
                'descripcion' => 'Introducción a la automatización industrial',
                'instructor' => 'Ing. Roberto Carlos Paz',
                'nivel' => 'Básico',
                'precio' => 129.99,
                'duracion' => '15 horas',
                'imagen' => 'robot1.jpeg'
            ],
            [
                'id' => 34,
                'nombre' => 'Diseño de Robots Autónomos',
                'descripcion' => 'Sistemas de navegación autónoma',
                'instructor' => 'Dra. Ana Karenina Ríos',
                'nivel' => 'Avanzado',
                'precio' => 249.99,
                'duracion' => '45 horas',
                'imagen' => 'robot2.jpeg'
            ],
            [
                'id' => 35,
                'nombre' => 'Robótica con Visión Artificial',
                'descripcion' => 'Integración de sistemas de visión computerizada',
                'instructor' => 'Ing. Fabricio Montaño',
                'nivel' => 'Intermedio',
                'precio' => 189.99,
                'duracion' => '25 horas',
                'imagen' => 'robot3.png'
            ],
            [
                'id' => 36,
                'nombre' => 'Automatización Robótica de Procesos',
                'descripcion' => 'RPA para optimización de negocios',
                'instructor' => 'Lic. Carla Estenssoro',
                'nivel' => 'Intermedio',
                'precio' => 159.99,
                'duracion' => '20 horas',
                'imagen' => 'robot4.png'
            ],
            [
                'id' => 37,
                'nombre' => 'Marketing en Redes Sociales',
                'descripcion' => 'Estrategias avanzadas para Social Media',
                'instructor' => 'Lic. Daniela Méndez',
                'nivel' => 'Intermedio',
                'precio' => 99.99,
                'duracion' => '15 horas',
                'imagen' => 'socialmedia.jpg'
            ],
            [
                'id' => 38,
                'nombre' => 'Swift para iOS Avanzado',
                'descripcion' => 'Desarrollo nativo con Swift 5',
                'instructor' => 'Ing. Rodrigo Peñaranda',
                'nivel' => 'Avanzado',
                'precio' => 209.99,
                'duracion' => '30 horas',
                'imagen' => 'swift.webp'
            ],
            [
                'id' => 39,
                'nombre' => 'Tecnologías Emergentes 2024',
                'descripcion' => 'Panorama actual de innovación tecnológica',
                'instructor' => 'PhD. Marco Antonio Fernández',
                'nivel' => 'Intermedio',
                'precio' => 89.99,
                'duracion' => '12 horas',
                'imagen' => 'tecnologia.jpg'
            ],
            [
                'id' => 40,
                'nombre' => 'Ubuntu Server Profesional',
                'descripcion' => 'Administración avanzada de servidores Ubuntu',
                'instructor' => 'Ing. Sistemas Linux Foundation',
                'nivel' => 'Avanzado',
                'precio' => 179.99,
                'duracion' => '25 horas',
                'imagen' => 'ubuntu.webp'
            ],
            [
                'id' => 41,
                'nombre' => 'Desarrollo Web Full Stack',
                'descripcion' => 'Dominio completo del desarrollo web moderno',
                'instructor' => 'Ing. Web Master Team',
                'nivel' => 'Intermedio',
                'precio' => 299.99,
                'duracion' => '60 horas',
                'imagen' => 'web-dev.jpg'
            ],
            [
                'id' => 42,
                'nombre' => 'Diseño Web Responsivo',
                'descripcion' => 'Creación de sitios adaptables a dispositivos',
                'instructor' => 'Diseñadora UX/UI Camila Rojas',
                'nivel' => 'Básico',
                'precio' => 79.99,
                'duracion' => '18 horas',
                'imagen' => 'web1.jpg'
            ],
            [
                'id' => 43,
                'nombre' => 'Web Performance Optimization',
                'descripcion' => 'Técnicas avanzadas de optimización web',
                'instructor' => 'Ing. Performance Web Team',
                'nivel' => 'Avanzado',
                'precio' => 159.99,
                'duracion' => '15 horas',
                'imagen' => 'web2.jpg'
            ],
            [
                'id' => 44,
                'nombre' => 'Desarrollo Web con WordPress',
                'descripcion' => 'Creación profesional de sitios con WordPress',
                'instructor' => 'Lic. Desarrollo Web Corp',
                'nivel' => 'Intermedio',
                'precio' => 129.99,
                'duracion' => '20 horas',
                'imagen' => 'wordpress.png'
            ],
            [
                'id' => 45,
                'nombre' => 'WWDC Desarrollo Apple',
                'descripcion' => 'Novedades de desarrollo para Apple',
                'instructor' => 'Apple Certified Developer',
                'nivel' => 'Avanzado',
                'precio' => 349.99,
                'duracion' => '30 horas',
                'imagen' => 'wwdc.jpeg'
            ],
            [
                'id' => 46,
                'nombre' => 'Marketing en X (Twitter)',
                'descripcion' => 'Estrategias avanzadas para X Platform',
                'instructor' => 'Social Media Expert Team',
                'nivel' => 'Intermedio',
                'precio' => 89.99,
                'duracion' => '10 horas',
                'imagen' => 'xtwitter.webp'
            ],
            [
                'id' => 47,
                'nombre' => 'Desarrollo con Wix Avanzado',
                'descripcion' => 'Creación de sitios profesionales con Wix',
                'instructor' => 'Wix Certified Developer',
                'nivel' => 'Intermedio',
                'precio' => 79.99,
                'duracion' => '12 horas',
                'imagen' => 'wix.png'
            ],
            [
                'id' => 48,
                'nombre' => 'Microsoft Word Profesional',
                'descripcion' => 'Documentación técnica avanzada',
                'instructor' => 'Lic. Ofimática Profesional',
                'nivel' => 'Básico',
                'precio' => 59.99,
                'duracion' => '8 horas',
                'imagen' => 'word.webp'
            ],
            [
                'id' => 49,
                'nombre' => 'Web Development Bootcamp',
                'descripcion' => 'Curso intensivo de desarrollo web completo',
                'instructor' => 'Full Stack Academy Team',
                'nivel' => 'Intermedio',
                'precio' => 399.99,
                'duracion' => '80 horas',
                'imagen' => 'webdevelopment.png'
            ],
            [
                'id' => 50,
                'nombre' => 'Desarrollo Web con WebDev',
                'descripcion' => 'Herramientas modernas para desarrollo ágil',
                'instructor' => 'Ing. WebDev Solutions',
                'nivel' => 'Intermedio',
                'precio' => 149.99,
                'duracion' => '25 horas',
                'imagen' => 'webdev.jpg'
            ],

        ];
    }
}