<!DOCTYPE html>
<html lang="en">
<head>
<meta charset="UTF-8"/>
<meta name="viewport" content="width=device-width, initial-scale=1.0"/>
<title>404 — Page Not Found | suenos</title>
<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet"/>
<link href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.11.3/font/bootstrap-icons.min.css" rel="stylesheet"/>
<link href="https://fonts.googleapis.com/css2?family=Playfair+Display:ital,wght@0,600;0,700;0,900;1,600&family=DM+Sans:wght@300;400;500;600&display=swap" rel="stylesheet"/>
<style>
:root {
    --parchment: #F5ECD7;
    --cream:     #FAF4E8;
    --ink:       #1C1410;
    --sepia:     #8B6914;
    --amber:     #C8862A;
    --rust:      #B5451B;
    --sienna:    #7A3B1E;
    --dusty:     #C4A882;
    --warm:      #E8D5B7;
}

* { box-sizing: border-box; margin: 0; padding: 0; }

body {
    font-family: 'DM Sans', sans-serif;
    background: var(--cream);
    color: var(--ink);
    min-height: 100vh;
    display: flex;
    align-items: center;
    justify-content: center;
    padding: 2rem;
}

.wrapper {
    text-align: center;
    max-width: 480px;
}

.big-number {
    font-family: 'Playfair Display', serif;
    font-size: clamp(6rem, 20vw, 10rem);
    font-weight: 900;
    color: var(--warm);
    line-height: 1;
    user-select: none;
}

.big-number span {
    color: var(--amber);
}

.title {
    font-family: 'Playfair Display', serif;
    font-size: 1.6rem;
    font-weight: 700;
    color: var(--ink);
    margin: 0.5rem 0;
}

.subtitle {
    font-size: 0.9rem;
    color: var(--sepia);
    font-style: italic;
    margin-bottom: 2rem;
    line-height: 1.6;
}

.btn-home {
    background: var(--rust);
    color: #fff;
    border: none;
    border-radius: 4px;
    padding: 0.65rem 1.75rem;
    font-size: 0.9rem;
    font-weight: 500;
    text-decoration: none;
    display: inline-flex;
    align-items: center;
    gap: 0.5rem;
    transition: background 0.2s;
}

.btn-home:hover {
    background: var(--sienna);
    color: #fff;
}

.divider {
    width: 3rem;
    height: 2px;
    background: var(--warm);
    margin: 1.5rem auto;
}
</style>
</head>
<body>

<div class="wrapper">
    <div class="big-number">4<span>0</span>4</div>
    <div class="divider"></div>
    <h1 class="title">Page Not Found</h1>
    <p class="subtitle">The page you're looking for doesn't exist or has been moved.</p>
    <a href="/" class="btn-home">
        <i class="bi bi-house"></i> Back to Home
    </a>
</div>

</body>
</html>