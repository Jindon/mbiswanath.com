<!doctype html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>404 — Not Found</title>
    <meta name="color-scheme" content="dark">

    <style>
        :root { --bg: #0b0d0c; --fg: #d4d4d4; --dim: #6f7873; --accent: #59d499; --border: #2a2f2c; }
        * { box-sizing: border-box; }
        html, body { margin: 0; padding: 0; background: var(--bg); color: var(--fg); }
        body {
            font-family: ui-monospace, SFMono-Regular, "SF Mono", Menlo, Consolas, "Liberation Mono", monospace;
            font-size: 15px;
            min-height: 100vh;
            display: flex;
            align-items: center;
            justify-content: center;
            padding: 1.25rem;
        }
        .term { max-width: 480px; width: 100%; border: 1px solid var(--border); border-radius: 8px; overflow: hidden; background: #0e100f; }
        .term-bar { display: flex; align-items: center; gap: 6px; padding: 10px 14px; background: #141715; border-bottom: 1px solid var(--border); }
        .dot { width: 11px; height: 11px; border-radius: 50%; background: #3a3f3c; }
        .dot.r { background: #e0605a; }
        .dot.y { background: #e0b95a; }
        .dot.g { background: #5ac97a; }
        .term-body { padding: 1.5rem; line-height: 1.7; }
        .prompt { color: var(--accent); }
        a { color: var(--accent); text-decoration: none; border-bottom: 1px solid transparent; }
        a:hover { border-bottom-color: var(--accent); }
    </style>
</head>
<body>
    <div class="term">
        <div class="term-bar">
            <span class="dot r"></span>
            <span class="dot y"></span>
            <span class="dot g"></span>
        </div>
        <div class="term-body">
            <div><span class="prompt">$</span> cd /requested-page</div>
            <div>bash: cd: /requested-page: No such file or directory</div>
            <div style="margin-top: 1rem;"><span class="prompt">$</span> cd <a href="/">~</a></div>
        </div>
    </div>
</body>
</html>
