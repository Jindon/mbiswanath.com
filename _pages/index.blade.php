<!doctype html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>M. Biswanath — Software Engineer</title>
    <meta name="description" content="Software engineer with proven experience in fintech, specializing in developing secure and scalable web applications.">
    <meta name="color-scheme" content="dark">

    <style>
        :root {
            --bg: #0b0d0c;
            --fg: #d4d4d4;
            --dim: #6f7873;
            --accent: #59d499;
            --border: #2a2f2c;
        }

        * { box-sizing: border-box; }

        html, body {
            margin: 0;
            padding: 0;
            background: var(--bg);
            color: var(--fg);
        }

        body {
            font-family: ui-monospace, SFMono-Regular, "SF Mono", Menlo, Consolas, "Liberation Mono", monospace;
            font-size: 15px;
            line-height: 1.7;
            padding: 6vh 1.25rem;
        }

        .term {
            max-width: 700px;
            margin: 0 auto;
            border: 1px solid var(--border);
            border-radius: 8px;
            overflow: hidden;
            background: #0e100f;
            box-shadow: 0 20px 60px rgba(0, 0, 0, 0.5);
        }

        .term-bar {
            display: flex;
            align-items: center;
            gap: 6px;
            padding: 10px 14px;
            background: #141715;
            border-bottom: 1px solid var(--border);
        }

        .dot { width: 11px; height: 11px; border-radius: 50%; background: #3a3f3c; }
        .dot.r { background: #e0605a; }
        .dot.y { background: #e0b95a; }
        .dot.g { background: #5ac97a; }

        .term-title {
            margin: 0 auto;
            color: var(--dim);
            font-size: 12px;
            transform: translateX(-16px);
        }

        .term-body { padding: 1.75rem 1.5rem 2.25rem; }

        .prompt { color: var(--accent); }
        .cmd { color: var(--fg); }

        h1 { font-size: 1.05rem; font-weight: normal; margin: 0 0 0.2rem; }
        h1 .name { color: #fff; font-weight: bold; }
        .fullname { margin: 0 0 1.5rem; line-height: 1.2; color: var(--dim); font-size: 12px; opacity: 0.5}

        section { margin-bottom: 1.75rem; }
        section:last-of-type { margin-bottom: 0; }

        p { margin: 0.5rem 0 0; color: var(--fg); }

        .role { color: var(--dim); }

        ul { list-style: none; margin: 0.5rem 0 0; padding: 0; }
        li { margin-bottom: 0.4rem; }

        .company { margin-bottom: 0.6rem; }
        .company:last-child { margin-bottom: 0; }
        .co-head { display: flex; flex-wrap: wrap; gap: 0.4em; }

        .roles { margin: 0.3rem 0 0; padding-left: 1rem; border-left: 1px solid var(--border); }
        .roles li { display: flex; flex-wrap: wrap; gap: 0.4em; margin-bottom: 0.25rem; }
        .roles li:last-child { margin-bottom: 0; }
        .roles .r-dates { color: var(--dim); margin-left: auto; }

        @media (max-width: 480px) {
            body { font-size: 14px; }
            .roles li { flex-direction: column; gap: 0.1em; margin-bottom: 0.5rem; }
            .roles .r-dates { margin-left: 0; font-size: 0.85em; }
        }

        a { color: var(--accent); text-decoration: none; border-bottom: 1px solid transparent; }
        a:hover { border-bottom-color: var(--accent); }

        .links a::before { content: "→ "; color: var(--dim); }

        .cursor {
            display: inline-block;
            width: 8px;
            height: 1em;
            background: var(--accent);
            vertical-align: text-bottom;
            animation: blink 1s steps(2, start) infinite;
        }

        @keyframes blink { to { visibility: hidden; } }

        @media (prefers-reduced-motion: reduce) {
            .cursor { animation: none; }
        }

        footer {
            max-width: 700px;
            margin: 1.5rem auto 0;
            padding: 0 0.25rem;
            color: var(--dim);
            font-size: 12px;
        }

        footer a { color: var(--dim); }
        footer a:hover { color: var(--accent); }
    </style>
</head>
<body>
    <div class="term">
        <div class="term-bar">
            <span class="dot r"></span>
            <span class="dot y"></span>
            <span class="dot g"></span>
            <span class="term-title">visitor@mbiswanath: ~</span>
        </div>

        <div class="term-body">
            <h1><span class="prompt">$</span> whoami<br><span class="name">Biswanath</span> <span class="role">— Software Engineer</span></h1>
            <div class="fullname">Moirangthem Biswanath Singh</div>

            <section>
                <div><span class="prompt">$</span> <span class="cmd">cat about.txt</span></div>
                <p>Software engineer with experience in fintech, building secure and
                    scalable web applications. I like getting into the weeds of backend
                    systems, and still enjoy the moment a gnarly bug finally gives up.</p>
            </section>

            <section>
                <div><span class="prompt">$</span> <span class="cmd">cat experience.log</span></div>
                <ul>
                    <li class="company">
                        <div class="co-head">
                            <a href="https://atriumcampus.com/" target="_blank" rel="noopener">Atrium Campus</a>
                        </div>
                        <ul class="roles">
                            <li><span class="r-title">Senior Software Engineer</span><span class="r-dates">2026 — Present</span></li>
                        </ul>
                    </li>
                    <li class="company">
                        <div class="co-head">
                            <a href="https://aspireapp.com/" target="_blank" rel="noopener">Aspire</a>
                        </div>
                        <ul class="roles">
                            <li><span class="r-title">Lead Software Engineer</span><span class="r-dates">2024 — 2026</span></li>
                            <li><span class="r-title">Senior Software Engineer</span><span class="r-dates">2022 — 2024</span></li>
                        </ul>
                    </li>
                    <li class="company">
                        <div class="co-head">
                            <a href="https://in.linkedin.com/company/subdine" target="_blank" rel="noopener">Subdine</a>
                        </div>
                        <ul class="roles">
                            <li><span class="r-title">Senior Software Engineer</span><span class="r-dates">2021 — 2022</span></li>
                        </ul>
                    </li>
                    <li class="company">
                        <div class="co-head">
                            <a href="https://neopathtech.com/" target="_blank" rel="noopener">Neopath Technologies Pvt Ltd</a>
                        </div>
                        <ul class="roles">
                            <li><span class="r-title">Tech Lead</span><span class="r-dates">2018 — 2021</span></li>
                        </ul>
                    </li>
                    <li class="company">
                        <div class="co-head">
                            <span>Freelance</span>
                        </div>
                        <ul class="roles">
                            <li><span class="r-title">Fullstack Developer</span><span class="r-dates">2015 — 2018</span></li>
                        </ul>
                    </li>
                </ul>
            </section>

            <section>
                <div><span class="prompt">$</span> <span class="cmd">ls links/</span></div>
                <ul class="links">
                    <li><a href="https://github.com/Jindon" target="_blank" rel="noopener">github</a></li>
                    <li><a href="https://www.linkedin.com/in/mbiswanath" target="_blank" rel="noopener">linkedin</a></li>
                    <li><a href="https://x.com/mbiswanath27" target="_blank" rel="noopener">twitter</a></li>
                    <li><a href="mailto:jindon27@gmail.com">jindon27@gmail.com</a></li>
                </ul>
            </section>

            <div><span class="prompt">$</span> <span class="cursor"></span></div>
        </div>
    </div>

    <footer>&copy; {{ date('Y') }} mbiswanath.com — built with <a href="https://hydephp.com" target="_blank" rel="noopener">HydePHP</a></footer>
</body>
</html>
