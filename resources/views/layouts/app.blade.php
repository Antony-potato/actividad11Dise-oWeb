<!DOCTYPE html>
<html lang="es">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>@yield('title', 'Menus')</title>
    <style>
        :root {
            color-scheme: light;
            --primary: #1d4ed8;
            --primary-dark: #1e3a8a;
            --text: #1f2937;
            --muted: #6b7280;
            --surface: #ffffff;
            --surface-soft: #f3f4f6;
            --border: #d1d5db;
        }

        * {
            box-sizing: border-box;
        }

        body {
            margin: 0;
            font-family: Arial, Helvetica, sans-serif;
            color: var(--text);
            background: linear-gradient(180deg, #eff6ff 0%, #ffffff 35%);
            display: flex;
            flex-direction: column;
            min-height: 100vh;
            /* Asegura que el footer se vaya abajo si hay poco contenido */
        }

        .site-header {
            background: var(--surface);
            border-bottom: 1px solid var(--border);
            position: sticky;
            top: 0;
            z-index: 10;
        }

        .container {
            width: min(960px, calc(100% - 2rem));
            margin: 0 auto;
        }

        .nav {
            display: flex;
            align-items: center;
            justify-content: space-between;
            gap: 1rem;
            padding: 1rem 0;
        }

        .brand {
            font-size: 1.25rem;
            font-weight: 700;
            color: var(--primary-dark);
        }

        .nav-links {
            display: flex;
            gap: 0.75rem;
            flex-wrap: wrap;
        }

        .nav a {
            text-decoration: none;
            padding: 0.75rem 1rem;
            color: var(--text);
            border-radius: 999px;
            transition: background-color 0.2s ease, color 0.2s ease;
        }

        .nav a:hover {
            background: #dbeafe;
            color: var(--primary-dark);
        }

        .nav a.active {
            font-weight: 700;
            color: #ffffff;
            background-color: var(--primary);
        }

        main {
            padding: 3rem 0;
            flex: 1;
            /* Permite que el main crezca y empuje el footer hacia abajo */
        }

        .hero,
        .panel,
        .contact-form {
            background: var(--surface);
            border: 1px solid var(--border);
            border-radius: 18px;
            padding: 2rem;
            box-shadow: 0 16px 40px rgba(15, 23, 42, 0.08);
        }

        h1,
        h2 {
            margin-top: 0;
        }

        p {
            line-height: 1.7;
        }

        .grid {
            display: grid;
            grid-template-columns: repeat(auto-fit, minmax(220px, 1fr));
            gap: 1rem;
            margin-top: 1.5rem;
        }

        .card {
            padding: 1.25rem;
            background: var(--surface-soft);
            border-radius: 14px;
            border: 1px solid #e5e7eb;
        }

        .form-group {
            display: grid;
            gap: 0.5rem;
            margin-bottom: 1rem;
        }

        label {
            font-weight: 600;
        }

        input,
        textarea {
            width: 100%;
            padding: 0.85rem 1rem;
            border: 1px solid var(--border);
            border-radius: 12px;
            font: inherit;
        }

        textarea {
            min-height: 140px;
            resize: vertical;
        }

        button {
            border: 0;
            border-radius: 12px;
            padding: 0.9rem 1.2rem;
            background: var(--primary);
            color: #ffffff;
            font: inherit;
            font-weight: 700;
            cursor: pointer;
        }

        /* --- NUEVOS ESTILOS DEL FOOTER --- */
        .site-footer {
            margin-top: 3rem;
            padding: 3rem 0 2rem;
            background: var(--surface-soft);
            border-top: 1px solid var(--border);
        }

        .footer-content {
            display: flex;
            flex-direction: column;
            align-items: center;
            gap: 2rem;
        }

        .footer-title {
            margin: 0;
            font-weight: 700;
            color: var(--primary-dark);
            font-size: 1.2rem;
            text-align: center;
        }

        .team-grid {
            display: grid;
            grid-template-columns: repeat(auto-fit, minmax(220px, 1fr));
            gap: 1rem;
            width: 100%;
            list-style: none;
            padding: 0;
            margin: 0;
        }

        .team-member {
            background: var(--surface);
            padding: 1.25rem 1rem;
            border-radius: 12px;
            border: 1px solid var(--border);
            text-align: center;
            transition: transform 0.2s ease, border-color 0.2s ease, box-shadow 0.2s ease;
        }

        .team-member:hover {
            transform: translateY(-3px);
            border-color: var(--primary);
            box-shadow: 0 8px 20px rgba(29, 78, 216, 0.1);
        }

        .team-member-name {
            display: block;
            font-weight: 600;
            color: var(--text);
            margin-bottom: 0.4rem;
        }

        .team-member-id {
            display: block;
            font-size: 0.875rem;
            color: var(--muted);
        }

        .footer-bottom {
            width: 100%;
            border-top: 1px solid var(--border);
            padding-top: 1.5rem;
            text-align: center;
            font-size: 0.875rem;
            color: var(--muted);
        }

        @media (max-width: 640px) {
            .nav {
                flex-direction: column;
                align-items: flex-start;
            }

            .nav-links {
                width: 100%;
            }

            .nav a {
                display: inline-block;
                width: 100%;
                text-align: center;
            }
        }
    </style>
</head>

<body>
    <header class="site-header">
        <div class="container">
            <nav class="nav" aria-label="Principal">
                <div class="brand">Actividad 11</div>
                <div class="nav-links">
                    <a href="/" class="{{ request()->is('/') || request()->is('') ? 'active' : '' }}">Inicio</a>
                    <a href="/fotos" class="{{ request()->is('fotos') ? 'active' : '' }}">Fotos</a>
                    <a href="/contacto" class="{{ request()->is('contacto') ? 'active' : '' }}">Contacto</a>
                </div>
            </nav>
        </div>
    </header>

    <main>
        <div class="container">
            @yield('content')
        </div>
    </main>

    <footer class="site-footer">
        <div class="container">
            <div class="footer-content">
                <h3 class="footer-title">Actividad realizada por el equipo:</h3>

                <ul class="team-grid">
                    <li class="team-member">
                        <span class="team-member-name">Victor Emilio Flores López</span>
                        <span class="team-member-id">Matrícula: 2811975</span>
                    </li>
                    <li class="team-member">
                        <span class="team-member-name">Emiliano Hernández Garnica</span>
                        <span class="team-member-id">Matrícula: 2980427</span>
                    </li>
                    <li class="team-member">
                        <span class="team-member-name">Jordan Zahid Pacheco Estrada</span>
                        <span class="team-member-id">Matrícula: 3079274</span>
                    </li>
                    <li class="team-member">
                        <span class="team-member-name">Antonio Cortazar Jimenez</span>
                        <span class="team-member-id">Matrícula: 2956632</span>
                    </li>
                </ul>

                <div class="footer-bottom">
                    &copy; 2026 - Actividad 11. Todos los derechos reservados.
                </div>
            </div>
        </div>
    </footer>
</body>

</html>