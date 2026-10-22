@extends('layouts.site')

@section('title', 'CV')

@section('content')
<main class="container my-4">
    <div class="row g-0 shadow-sm rounded overflow-hidden">
        <aside class="col-lg-4 cv-sidebar p-4">
            <h2 class="text-white text-center">M.D.K</h2>
            <p class="text-center text-white-50">Full-Stack Developer</p>
            <hr class="border-light opacity-25">

            <h3 class="text-white">Contact</h3>
            <p class="small">
                +62 821 1371 7271<br>
                <a href="mailto:dzakiykamil88@gmail.com" class="text-info">dzakiykamil88@gmail.com</a><br>
                Kab. Sumedang<br>
                <a href="https://www.linkedin.com/in/dzakiy-kamil" target="_blank" rel="noreferrer" class="text-info">linkedin.com/in/dzakiy-kamil</a><br>
                <a href="https://github.com/kulsonw" target="_blank" rel="noreferrer" class="text-info">github.com/kulsonw</a>
            </p>
            <hr class="border-light opacity-25">

            <h3 class="text-white">Skills</h3>
            <ul class="small ps-3">
                <li>JavaScript / TypeScript — 95%</li>
                <li>React &amp; Next.js — 90%</li>
                <li>Node.js / Python — 85%</li>
                <li>UI/UX Design — 75%</li>
                <li>DevOps &amp; Cloud — 70%</li>
            </ul>
            <hr class="border-light opacity-25">

            <h3 class="text-white">Languages</h3>
            <ul class="small ps-3">
                <li>English ★★★★★</li>
                <li>Spanish ★★★★☆</li>
                <li>French ★★★☆☆</li>
            </ul>
        </aside>

        <section class="col-lg-8 p-4 bg-white">
            <h1 class="fw-bold">Dzakiy <span class="text-primary">Kamil</span></h1>
            <p class="text-muted">Passionate full-stack developer with 5+ years of experience building scalable web applications and leading cross-functional teams.</p>
            <hr class="border-primary border-opacity-25">

            <h2 class="section-title">Experience</h2>
            <div class="mb-4">
                <div class="d-flex justify-content-between align-items-baseline flex-wrap"><h4 class="fw-bold">Senior Full-Stack Developer</h4><span class="text-muted small">2022 — Present</span></div>
                <div class="text-primary fw-medium small">TechCorp Inc., New York</div>
                <ul class="small mt-1 ps-3"><li>Architected and deployed microservices handling 2M+ daily requests.</li><li>Led a team of 5 developers adopting Agile methodologies.</li><li>Reduced infrastructure costs by 30% via cloud optimization.</li></ul>
            </div>
            <div class="mb-4">
                <div class="d-flex justify-content-between align-items-baseline flex-wrap"><h4 class="fw-bold">Software Engineer</h4><span class="text-muted small">2020 — 2022</span></div>
                <div class="text-primary fw-medium small">StartupX, Remote</div>
                <ul class="small mt-1 ps-3"><li>Built the core SaaS product from MVP to production.</li><li>Designed RESTful APIs with Node.js, Express, and PostgreSQL.</li><li>Implemented CI/CD pipelines reducing release cycles by 60%.</li></ul>
            </div>
            <div class="mb-4">
                <div class="d-flex justify-content-between align-items-baseline flex-wrap"><h4 class="fw-bold">Junior Developer</h4><span class="text-muted small">2019 — 2020</span></div>
                <div class="text-primary fw-medium small">WebAgency, San Francisco</div>
                <ul class="small mt-1 ps-3"><li>Developed responsive websites for 10+ clients.</li><li>Created reusable component libraries in React.</li></ul>
            </div>
            <hr class="border-primary border-opacity-25">

            <h2 class="section-title">Education</h2>
            <div class="mb-4">
                <div class="d-flex justify-content-between align-items-baseline flex-wrap"><h4 class="fw-bold">B.Sc. in Computer Science</h4><span class="text-muted small">2015 — 2019</span></div>
                <div class="text-primary fw-medium small">University of Technology</div>
                <ul class="small mt-1 ps-3"><li>Dean's List, ACM Programming Contest Finalist. GPA: 3.8</li></ul>
            </div>
            <hr class="border-primary border-opacity-25">

            <h2 class="section-title">Certifications</h2>
            <ul class="small ps-3"><li>AWS Certified Solutions Architect — 2023</li><li>Google Professional Cloud Developer — 2022</li></ul>
        </section>
    </div>
</main>
@endsection
