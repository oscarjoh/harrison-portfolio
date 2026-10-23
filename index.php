<!DOCTYPE html>
<html lang="en" class="scroll-smooth">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <meta name="theme-color" content="#080b16">
  <meta name="description" content="Royal Tech builds modern websites, web applications, and digital experiences that help businesses get noticed, earn trust, and grow online.">
  <title>Royal Tech | Websites That Help Businesses Grow</title>
        
          <meta name="username" content="JOH">
    <meta name="keywords" content="link shortener, URL shortener, PHP, MySQL, web tool, CI Link Shortener">
     <link rel="shortcut icon" href="https://s.ci.co.ke/mkMZqTQ" type="image/x-icon">
    <link rel="icon" href="https://s.ci.co.ke/mkMZqTQ" type="image/x-icon">
    <link rel="apple-touch-icon" type="image/x-icon" href="https://s.ci.co.ke/mkMZqTQ">
    <link rel="apple-touch-icon" type="image/x-icon" sizes="72x72" href="https://s.ci.co.ke/mkMZqTQ">
    <link rel="apple-touch-icon" type="image/x-icon" sizes="114x114" href="https://s.ci.co.ke/mkMZqTQ">
  <script src="https://cdn.tailwindcss.com"></script>
  <script>
    tailwind.config = {
      theme: {
        extend: {
          fontFamily: { sans: ['Inter', 'ui-sans-serif', 'system-ui', 'sans-serif'] },
          colors: {
            ink: '#080b16',
            panel: '#101629',
            violet: '#8b5cf6',
            aqua: '#22d3ee'
          },
          boxShadow: {
            glow: '0 0 60px rgba(139,92,246,.18)',
            card: '0 20px 70px rgba(0,0,0,.25)'
          }
        }
      }
    }
  </script>
  <link rel="preconnect" href="https://fonts.googleapis.com">
  <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
  <link href="https://fonts.googleapis.com/css2?family=Inter:wght@400;500;600;700;800;900&display=swap" rel="stylesheet">
  <style>
    body { background: #080b16; }
    .grid-bg {
      background-image: linear-gradient(rgba(255,255,255,.035) 1px, transparent 1px),
                        linear-gradient(90deg, rgba(255,255,255,.035) 1px, transparent 1px);
      background-size: 44px 44px;
      mask-image: linear-gradient(to bottom, black, transparent 92%);
    }
    .text-gradient { background: linear-gradient(100deg,#fff 5%,#c4b5fd 48%,#67e8f9 100%); -webkit-background-clip:text; background-clip:text; color:transparent; }
    .orb { filter: blur(70px); opacity: .22; pointer-events:none; }
    .reveal { opacity: 0; transform: translateY(18px); transition: opacity .65s ease, transform .65s ease; }
    .reveal.visible { opacity: 1; transform: translateY(0); }
    @media (prefers-reduced-motion: reduce) { *,*::before,*::after { scroll-behavior:auto !important; transition:none !important; animation:none !important; } .reveal {opacity:1;transform:none;} }
  </style>
</head>
<body class="font-sans text-slate-100 antialiased selection:bg-violet-500/40">
  <div class="fixed inset-0 -z-10 overflow-hidden" aria-hidden="true">
    <div class="grid-bg absolute inset-0"></div>
    <div class="orb absolute -top-32 left-1/4 h-80 w-80 rounded-full bg-violet-600"></div>
    <div class="orb absolute right-0 top-[35rem] h-72 w-72 rounded-full bg-cyan-500"></div>
  </div>

  <!-- Navigation -->
  <header class="sticky top-0 z-50 border-b border-white/10 bg-ink/80 backdrop-blur-xl">
    <nav class="mx-auto flex max-w-7xl items-center justify-between px-5 py-4 sm:px-8" aria-label="Main navigation">
      <a href="#home" class="flex items-center gap-3" aria-label="Royal Tech home">
        <span class="grid h-10 w-10 place-items-center rounded-xl bg-gradient-to-br from-violet-500 to-cyan-400 text-sm font-black text-white shadow-glow">RT</span>
        <span class="leading-tight"><span class="block text-sm font-extrabold tracking-wide">ROYAL TECH</span><span class="block text-[10px] font-semibold uppercase tracking-[.22em] text-slate-400">Tech for a better world</span></span>
      </a>
      <div class="hidden items-center gap-8 md:flex">
        <a class="text-sm text-slate-300 transition hover:text-white" href="#services">Services</a>
        <a class="text-sm text-slate-300 transition hover:text-white" href="#work">Our work</a>
        <a class="text-sm text-slate-300 transition hover:text-white" href="#process">How it works</a>
        <a class="rounded-full bg-white px-5 py-2.5 text-sm font-bold text-slate-950 transition hover:bg-cyan-200" href="#contact">Let's talk <span aria-hidden="true">↗</span></a>
      </div>
      <button id="menuButton" class="grid h-10 w-10 place-items-center rounded-xl border border-white/10 text-xl md:hidden" aria-label="Open navigation menu" aria-expanded="false" aria-controls="mobileMenu">
        <span id="menuIcon" aria-hidden="true">☰</span>
      </button>
    </nav>
    <div id="mobileMenu" class="hidden border-t border-white/10 bg-ink/95 px-5 py-4 md:hidden">
      <div class="mx-auto flex max-w-7xl flex-col gap-1">
        <a class="mobile-link rounded-lg px-3 py-3 text-sm text-slate-300 hover:bg-white/5 hover:text-white" href="#services">Services</a>
        <a class="mobile-link rounded-lg px-3 py-3 text-sm text-slate-300 hover:bg-white/5 hover:text-white" href="#work">Our work</a>
        <a class="mobile-link rounded-lg px-3 py-3 text-sm text-slate-300 hover:bg-white/5 hover:text-white" href="#process">How it works</a>
        <a class="mobile-link mt-2 rounded-lg bg-white px-3 py-3 text-center text-sm font-bold text-slate-950" href="#contact">Let's talk ↗</a>
      </div>
    </div>
  </header>

  <main>
    <!-- Hero -->
    <section id="home" class="relative mx-auto grid min-h-[88vh] max-w-7xl items-center gap-14 px-5 py-20 sm:px-8 lg:grid-cols-[1.05fr_.95fr] lg:py-24">
      <div class="relative z-10">
        <div class="mb-7 inline-flex items-center gap-2 rounded-full border border-violet-400/25 bg-violet-400/10 px-3.5 py-2 text-xs font-semibold text-violet-200">
          <span class="h-2 w-2 rounded-full bg-emerald-400"></span> Websites • Web apps • Digital solutions
        </div>
        <h1 class="max-w-3xl text-4xl font-black leading-[1.08] tracking-tight sm:text-5xl md:text-6xl xl:text-7xl">
          Your business deserves to be <span class="text-gradient">seen online.</span>
        </h1>
        <p class="mt-6 max-w-xl text-base leading-8 text-slate-300 sm:text-lg">
          We build modern, mobile-friendly websites and digital tools that help businesses look professional, reach more customers, and turn attention into action.
        </p>
        <div class="mt-9 flex flex-col gap-3 sm:flex-row">
          <a href="#contact" class="inline-flex items-center justify-center gap-2 rounded-full bg-gradient-to-r from-violet-500 to-indigo-500 px-7 py-4 text-sm font-bold shadow-glow transition hover:-translate-y-0.5 hover:brightness-110">Build my website <span aria-hidden="true">↗</span></a>
          <a href="#work" class="inline-flex items-center justify-center gap-2 rounded-full border border-white/15 bg-white/[.03] px-7 py-4 text-sm font-bold text-white transition hover:bg-white/[.08]">Explore our work <span aria-hidden="true">↓</span></a>
        </div>
        <div class="mt-10 flex flex-wrap items-center gap-x-6 gap-y-3 text-xs text-slate-400">
          <span class="flex items-center gap-2"><span class="text-cyan-300">✓</span> Mobile-first design</span>
          <span class="flex items-center gap-2"><span class="text-cyan-300">✓</span> Built around your goals</span>
          <span class="flex items-center gap-2"><span class="text-cyan-300">✓</span> Support available</span>
        </div>
      </div>

      <!-- Decorative website preview -->
      <div class="relative mx-auto w-full max-w-xl reveal">
        <div class="absolute -inset-5 rounded-[2rem] bg-gradient-to-br from-violet-500/20 to-cyan-400/10 blur-2xl"></div>
        <div class="relative overflow-hidden rounded-3xl border border-white/15 bg-[#0c1121]/90 p-3 shadow-card sm:p-4">
          <div class="flex items-center justify-between border-b border-white/10 px-2 pb-4 pt-1">
            <div class="flex gap-1.5"><span class="h-2.5 w-2.5 rounded-full bg-rose-400"></span><span class="h-2.5 w-2.5 rounded-full bg-amber-300"></span><span class="h-2.5 w-2.5 rounded-full bg-emerald-400"></span></div>
            <div class="w-1/2 rounded-full border border-white/10 bg-white/[.04] px-3 py-1 text-center text-[9px] text-slate-500">yourbusiness.co.ke</div>
            <span class="text-xs text-slate-500">↗</span>
          </div>
          <div class="grid min-h-[360px] grid-cols-2 gap-3 p-3 sm:gap-4 sm:p-5">
            <div class="col-span-2 rounded-2xl bg-gradient-to-br from-violet-600/30 via-indigo-500/15 to-cyan-400/10 p-5 sm:p-7">
              <div class="mb-5 h-2 w-16 rounded-full bg-cyan-300/80"></div>
              <div class="max-w-xs text-2xl font-extrabold leading-tight sm:text-3xl">Make your next move <span class="text-cyan-300">count.</span></div>
              <div class="mt-3 h-2 w-4/5 rounded-full bg-white/15"></div><div class="mt-2 h-2 w-3/5 rounded-full bg-white/10"></div>
              <div class="mt-6 inline-flex rounded-full bg-white px-4 py-2 text-[10px] font-bold text-slate-950">Get started ↗</div>
            </div>
            <div class="rounded-2xl border border-white/10 bg-white/[.04] p-4">
              <div class="mb-5 grid h-9 w-9 place-items-center rounded-xl bg-violet-400/15 text-lg text-violet-200">✳</div>
              <div class="text-sm font-bold">Designed for you</div><div class="mt-2 h-1.5 w-full rounded-full bg-white/10"></div><div class="mt-2 h-1.5 w-2/3 rounded-full bg-white/10"></div>
            </div>
            <div class="rounded-2xl border border-white/10 bg-white/[.04] p-4">
              <div class="mb-5 grid h-9 w-9 place-items-center rounded-xl bg-cyan-400/15 text-lg text-cyan-200">↗</div>
              <div class="text-sm font-bold">Made to convert</div><div class="mt-2 h-1.5 w-full rounded-full bg-white/10"></div><div class="mt-2 h-1.5 w-3/4 rounded-full bg-white/10"></div>
            </div>
            <div class="col-span-2 flex items-center justify-between rounded-2xl border border-white/10 bg-white/[.03] p-4">
              <div><div class="text-xs text-slate-400">A better digital presence</div><div class="mt-1 text-sm font-bold">One smart step forward.</div></div>
              <div class="grid h-10 w-10 place-items-center rounded-full bg-gradient-to-br from-violet-500 to-cyan-400 text-lg">→</div>
            </div>
          </div>
        </div>
        <div class="absolute -bottom-5 -left-3 rounded-2xl border border-white/10 bg-[#12182a] px-4 py-3 shadow-xl sm:-left-8">
          <div class="flex items-center gap-3"><span class="grid h-9 w-9 place-items-center rounded-xl bg-emerald-400/10 text-emerald-300">✓</span><span><span class="block text-xs font-bold">Responsive by design</span><span class="mt-1 block text-[10px] text-slate-400">Phone • Tablet • Desktop</span></span></div>
        </div>
      </div>
    </section>

    <!-- Credibility strip -->
    <section class="border-y border-white/10 bg-white/[.02]">
      <div class="mx-auto grid max-w-7xl grid-cols-2 gap-6 px-5 py-8 text-center sm:px-8 md:grid-cols-4">
        <div><p class="text-2xl font-black text-white">01</p><p class="mt-1 text-xs text-slate-400">Your goals first</p></div>
        <div><p class="text-2xl font-black text-white">100%</p><p class="mt-1 text-xs text-slate-400">Responsive layouts</p></div>
        <div><p class="text-2xl font-black text-white">Web</p><p class="mt-1 text-xs text-slate-400">Design & development</p></div>
        <div><p class="text-2xl font-black text-white">Kenya</p><p class="mt-1 text-xs text-slate-400">Built for real businesses</p></div>
      </div>
    </section>

    <!-- Services -->
    <section id="services" class="mx-auto max-w-7xl px-5 py-24 sm:px-8 lg:py-28">
      <div class="reveal max-w-2xl">
        <p class="text-xs font-bold uppercase tracking-[.25em] text-cyan-300">What we do</p>
        <h2 class="mt-4 text-3xl font-black tracking-tight sm:text-4xl md:text-5xl">Digital tools for your <span class="text-gradient">next stage.</span></h2>
        <p class="mt-5 leading-7 text-slate-400">From your first website to a custom platform, we turn your ideas into practical digital experiences.</p>
      </div>
      <div class="mt-12 grid gap-4 sm:grid-cols-2 lg:grid-cols-3">
        <article class="reveal rounded-3xl border border-white/10 bg-white/[.035] p-6 transition hover:-translate-y-1 hover:border-violet-400/40 sm:p-7">
          <div class="grid h-12 w-12 place-items-center rounded-2xl bg-violet-400/15 text-xl text-violet-200">⌘</div><h3 class="mt-6 text-lg font-bold">Business Websites</h3><p class="mt-3 text-sm leading-6 text-slate-400">Professional websites for salons, shops, consultants, hotels, restaurants, and service businesses.</p><p class="mt-5 text-xs font-semibold text-violet-200">Build trust. Get enquiries. Be found.</p>
        </article>
        <article class="reveal rounded-3xl border border-white/10 bg-white/[.035] p-6 transition hover:-translate-y-1 hover:border-cyan-400/40 sm:p-7">
          <div class="grid h-12 w-12 place-items-center rounded-2xl bg-cyan-400/15 text-xl text-cyan-200">⌘</div><h3 class="mt-6 text-lg font-bold">Web Applications</h3><p class="mt-3 text-sm leading-6 text-slate-400">Dashboards, booking systems, portals, membership platforms, and custom tools for your workflow.</p><p class="mt-5 text-xs font-semibold text-cyan-200">Make work simpler.</p>
        </article>
        <article class="reveal rounded-3xl border border-white/10 bg-white/[.035] p-6 transition hover:-translate-y-1 hover:border-pink-400/40 sm:p-7">
          <div class="grid h-12 w-12 place-items-center rounded-2xl bg-pink-400/15 text-xl text-pink-200">↗</div><h3 class="mt-6 text-lg font-bold">E-commerce & Payments</h3><p class="mt-3 text-sm leading-6 text-slate-400">Online catalogues, order flows, and payment integrations designed around how your customers buy.</p><p class="mt-5 text-xs font-semibold text-pink-200">Make buying easier.</p>
        </article>
        <article class="reveal rounded-3xl border border-white/10 bg-white/[.035] p-6 transition hover:-translate-y-1 hover:border-amber-400/40 sm:p-7">
          <div class="grid h-12 w-12 place-items-center rounded-2xl bg-amber-400/15 text-xl text-amber-200">✳</div><h3 class="mt-6 text-lg font-bold">Brand & Marketing Design</h3><p class="mt-3 text-sm leading-6 text-slate-400">Campaign posters, digital creatives, and landing pages that keep your brand looking consistent.</p><p class="mt-5 text-xs font-semibold text-amber-200">Look clear. Stand out.</p>
        </article>
        <article class="reveal rounded-3xl border border-white/10 bg-white/[.035] p-6 transition hover:-translate-y-1 hover:border-emerald-400/40 sm:p-7">
          <div class="grid h-12 w-12 place-items-center rounded-2xl bg-emerald-400/15 text-xl text-emerald-200">⌁</div><h3 class="mt-6 text-lg font-bold">Hosting & Maintenance</h3><p class="mt-3 text-sm leading-6 text-slate-400">Domain setup, deployment, updates, and ongoing technical support to keep your site running.</p><p class="mt-5 text-xs font-semibold text-emerald-200">Support beyond launch.</p>
        </article>
        <article class="reveal rounded-3xl border border-violet-400/20 bg-gradient-to-br from-violet-500/10 to-cyan-400/5 p-6 sm:p-7">
          <div class="grid h-12 w-12 place-items-center rounded-2xl bg-white/10 text-xl text-white">＋</div><h3 class="mt-6 text-lg font-bold">Have a different idea?</h3><p class="mt-3 text-sm leading-6 text-slate-300">Tell us what you want to build. We'll discuss the goal, scope, and a practical way to get started.</p><a href="#contact" class="mt-5 inline-flex text-sm font-bold text-cyan-200 hover:text-white">Discuss your project ↗</a>
        </article>
      </div>
    </section>

    <!-- Work -->
    <section id="work" class="border-y border-white/10 bg-white/[.02]">
      <div class="mx-auto max-w-7xl px-5 py-24 sm:px-8 lg:py-28">
        <div class="flex flex-col justify-between gap-5 md:flex-row md:items-end">
          <div class="reveal max-w-2xl"><p class="text-xs font-bold uppercase tracking-[.25em] text-violet-300">Selected projects</p><h2 class="mt-4 text-3xl font-black tracking-tight sm:text-4xl md:text-5xl">Ideas turned into <span class="text-gradient">real products.</span></h2><p class="mt-5 leading-7 text-slate-400">A selection of digital projects from the Royal Tech ecosystem.</p></div>
          <p class="max-w-xs text-sm leading-6 text-slate-500">Project links can be updated to point to your latest live demos.</p>
        </div>
        <div class="mt-12 grid gap-5 md:grid-cols-2">
          <article class="reveal group overflow-hidden rounded-3xl border border-white/10 bg-[#0c1121]">
            <div class="relative flex min-h-52 items-end overflow-hidden bg-gradient-to-br from-violet-600/40 via-indigo-900/40 to-slate-950 p-6 sm:p-8">
              <div class="absolute -right-5 -top-12 h-48 w-48 rounded-full border-[25px] border-violet-300/10 transition duration-500 group-hover:scale-110"></div>
              <div class="relative"><span class="rounded-full border border-violet-200/20 bg-violet-300/10 px-3 py-1.5 text-[10px] font-bold uppercase tracking-widest text-violet-200">Web utility</span><h3 class="mt-4 text-3xl font-black">CI Shortener</h3><p class="mt-2 text-sm text-slate-300">Short links. Simple sharing. Useful insights.</p></div>
            </div>
            <div class="p-6 sm:p-7"><p class="text-sm leading-6 text-slate-400">A link-shortening project built to make sharing cleaner and track engagement. The service has reached a milestone of 50,000 clicks.</p><div class="mt-5 flex flex-wrap items-center justify-between gap-3"><span class="text-xs text-slate-500">Link management • Analytics</span><a href="https://s.ci.co.ke" target="_blank" rel="noopener noreferrer" class="text-sm font-bold text-violet-200 hover:text-white">Visit project ↗</a></div></div>
          </article>
          <article class="reveal group overflow-hidden rounded-3xl border border-white/10 bg-[#0c1121]">
            <div class="relative flex min-h-52 items-end overflow-hidden bg-gradient-to-br from-cyan-500/30 via-blue-900/40 to-slate-950 p-6 sm:p-8">
              <div class="absolute -right-6 -top-6 h-48 w-48 rotate-12 rounded-[2rem] border border-cyan-100/15 bg-cyan-300/5 transition duration-500 group-hover:rotate-6"></div>
              <div class="relative"><span class="rounded-full border border-cyan-200/20 bg-cyan-300/10 px-3 py-1.5 text-[10px] font-bold uppercase tracking-widest text-cyan-200">Discovery platform</span><h3 class="mt-4 text-3xl font-black">Web of the Day</h3><p class="mt-2 text-sm text-slate-300">Discover a useful website every day.</p></div>
            </div>
            <div class="p-6 sm:p-7"><p class="text-sm leading-6 text-slate-400">A daily discovery concept that helps people explore new websites, tools, and useful corners of the web.</p><div class="mt-5 flex flex-wrap items-center justify-between gap-3"><span class="text-xs text-slate-500">Web discovery • Content</span><a href="https://web-of-the-day.ci.co.ke" target="_blank" rel="noopener noreferrer" class="text-sm font-bold text-cyan-200 hover:text-white">Visit project ↗</a></div></div>
          </article>
          <article class="reveal group overflow-hidden rounded-3xl border border-white/10 bg-[#0c1121]">
            <div class="relative flex min-h-52 items-end overflow-hidden bg-gradient-to-br from-emerald-500/25 via-teal-900/40 to-slate-950 p-6 sm:p-8">
              <div class="absolute right-8 top-7 grid h-24 w-24 rotate-6 place-items-center rounded-3xl border border-emerald-100/20 bg-emerald-300/10 text-4xl text-emerald-200 transition duration-500 group-hover:rotate-0">↗</div>
              <div class="relative"><span class="rounded-full border border-emerald-200/20 bg-emerald-300/10 px-3 py-1.5 text-[10px] font-bold uppercase tracking-widest text-emerald-200">Online platform</span><h3 class="mt-4 text-3xl font-black">EARNIX Surveys</h3><p class="mt-2 text-sm text-slate-300">A platform concept for tasks and earning opportunities.</p></div>
            </div>
            <div class="p-6 sm:p-7"><p class="text-sm leading-6 text-slate-400">A PHP and MySQL platform concept with member accounts, task flows, referrals, and administration features.</p><div class="mt-5 flex flex-wrap items-center justify-between gap-3"><span class="text-xs text-slate-500">PHP • MySQL • User systems</span><a href="https://earnixsurveys.co.ke" target="_blank" rel="noopener noreferrer" class="text-sm font-bold text-emerald-200 hover:text-white">Visit project ↗</a></div></div>
          </article>
          <article class="reveal group overflow-hidden rounded-3xl border border-white/10 bg-[#0c1121]">
            <div class="relative flex min-h-52 items-end overflow-hidden bg-gradient-to-br from-pink-500/25 via-purple-900/40 to-slate-950 p-6 sm:p-8">
              <div class="absolute -right-3 top-5 flex rotate-6 gap-2 transition duration-500 group-hover:rotate-0"><span class="h-28 w-10 rounded-full border border-pink-100/20 bg-pink-200/10"></span><span class="mt-5 h-20 w-10 rounded-full border border-violet-100/20 bg-violet-200/10"></span><span class="h-24 w-10 rounded-full border border-cyan-100/20 bg-cyan-200/10"></span></div>
              <div class="relative"><span class="rounded-full border border-pink-200/20 bg-pink-300/10 px-3 py-1.5 text-[10px] font-bold uppercase tracking-widest text-pink-200">Social media tools</span><h3 class="mt-4 text-3xl font-black">Purii Gains</h3><p class="mt-2 text-sm text-slate-300">A streamlined social-media services experience.</p></div>
            </div>
            <div class="p-6 sm:p-7"><p class="text-sm leading-6 text-slate-400">A social-media services platform concept focused on package discovery, ordering flows, wallet experiences, and a responsive interface.</p><div class="mt-5 flex flex-wrap items-center justify-between gap-3"><span class="text-xs text-slate-500">Dashboard UI • Order flow</span><a href="#contact" class="text-sm font-bold text-pink-200 hover:text-white">Ask about this build ↗</a></div></div>
          </article>
        </div>
      </div>
    </section>

    <!-- Why us -->
    <section class="mx-auto max-w-7xl px-5 py-24 sm:px-8 lg:py-28">
      <div class="grid gap-12 lg:grid-cols-2 lg:items-center">
        <div class="reveal"><p class="text-xs font-bold uppercase tracking-[.25em] text-cyan-300">Why Royal Tech</p><h2 class="mt-4 text-3xl font-black tracking-tight sm:text-4xl md:text-5xl">More than a good-looking <span class="text-gradient">website.</span></h2><p class="mt-5 max-w-xl leading-7 text-slate-400">Your website should do more than sit online. It should explain what you offer, help customers trust you, and make the next step easy.</p>
          <a href="#contact" class="mt-8 inline-flex items-center gap-2 font-bold text-white hover:text-cyan-200">Let's plan your project <span>↗</span></a>
        </div>
        <div class="grid gap-4 sm:grid-cols-2">
          <div class="reveal rounded-2xl border border-white/10 bg-white/[.035] p-5"><span class="text-2xl text-violet-300">01</span><h3 class="mt-4 font-bold">Clear communication</h3><p class="mt-2 text-sm leading-6 text-slate-400">Know what we're building, why it matters, and what happens next.</p></div>
          <div class="reveal rounded-2xl border border-white/10 bg-white/[.035] p-5"><span class="text-2xl text-cyan-300">02</span><h3 class="mt-4 font-bold">Mobile-first thinking</h3><p class="mt-2 text-sm leading-6 text-slate-400">Layouts designed to work across phones, tablets, and desktops.</p></div>
          <div class="reveal rounded-2xl border border-white/10 bg-white/[.035] p-5"><span class="text-2xl text-pink-300">03</span><h3 class="mt-4 font-bold">Practical solutions</h3><p class="mt-2 text-sm leading-6 text-slate-400">Features that solve a real business need instead of adding complexity.</p></div>
          <div class="reveal rounded-2xl border border-white/10 bg-white/[.035] p-5"><span class="text-2xl text-emerald-300">04</span><h3 class="mt-4 font-bold">Room to grow</h3><p class="mt-2 text-sm leading-6 text-slate-400">Start with what you need now and improve as your business grows.</p></div>
        </div>
      </div>
    </section>

    <!-- Process -->
    <section id="process" class="border-y border-white/10 bg-white/[.02]">
      <div class="mx-auto max-w-7xl px-5 py-24 sm:px-8 lg:py-28">
        <div class="reveal mx-auto max-w-2xl text-center"><p class="text-xs font-bold uppercase tracking-[.25em] text-violet-300">A simple process</p><h2 class="mt-4 text-3xl font-black tracking-tight sm:text-4xl">From idea to <span class="text-gradient">launch.</span></h2><p class="mt-4 leading-7 text-slate-400">A clear, collaborative process keeps your project moving.</p></div>
        <div class="mt-12 grid gap-4 md:grid-cols-4">
          <div class="reveal rounded-2xl border border-white/10 bg-ink/60 p-6"><div class="text-sm font-black text-violet-300">STEP 01</div><h3 class="mt-4 font-bold">Discover</h3><p class="mt-2 text-sm leading-6 text-slate-400">We discuss your business, customers, goals, and budget.</p></div>
          <div class="reveal rounded-2xl border border-white/10 bg-ink/60 p-6"><div class="text-sm font-black text-violet-300">STEP 02</div><h3 class="mt-4 font-bold">Plan & design</h3><p class="mt-2 text-sm leading-6 text-slate-400">We shape the structure, content, and look of the experience.</p></div>
          <div class="reveal rounded-2xl border border-white/10 bg-ink/60 p-6"><div class="text-sm font-black text-violet-300">STEP 03</div><h3 class="mt-4 font-bold">Build & review</h3><p class="mt-2 text-sm leading-6 text-slate-400">We develop the site and refine it with your feedback.</p></div>
          <div class="reveal rounded-2xl border border-white/10 bg-ink/60 p-6"><div class="text-sm font-black text-violet-300">STEP 04</div><h3 class="mt-4 font-bold">Launch & support</h3><p class="mt-2 text-sm leading-6 text-slate-400">We help get your project online and discuss ongoing support.</p></div>
        </div>
      </div>
    </section>

    <!-- Contact -->
    <section id="contact" class="mx-auto max-w-7xl px-5 py-24 sm:px-8 lg:py-28">
      <div class="relative overflow-hidden rounded-[2rem] border border-violet-300/20 bg-gradient-to-br from-violet-600/20 via-[#11152a] to-cyan-500/10 p-7 sm:p-10 lg:p-14">
        <div class="absolute -right-20 -top-24 h-72 w-72 rounded-full bg-violet-500/15 blur-3xl" aria-hidden="true"></div>
        <div class="relative grid gap-10 lg:grid-cols-[1fr_.8fr] lg:items-center">
          <div class="reveal"><p class="text-xs font-bold uppercase tracking-[.25em] text-cyan-200">Ready to get started?</p><h2 class="mt-4 max-w-2xl text-3xl font-black tracking-tight sm:text-4xl md:text-5xl">Let's build something that moves your business forward.</h2><p class="mt-5 max-w-xl leading-7 text-slate-300">Tell us what you do and what you'd like to achieve. We'll talk through a practical next step for your project.</p></div>
          <div class="reveal rounded-2xl border border-white/10 bg-ink/60 p-6 sm:p-7">
            <p class="text-sm font-bold text-slate-300">Start a conversation</p>
            <a id="emailLink" href="mailto:care@royaltech254.co.ke" class="mt-4 flex items-center justify-between gap-3 rounded-xl border border-white/10 bg-white/[.04] p-4 transition hover:bg-white/[.08]"><span class="min-w-0"><span class="block text-xs text-slate-500">Email</span><span class="mt-1 block break-all text-sm font-semibold">care@royaltech254.co.ke</span></span><span class="text-cyan-200">↗</span></a>
            <a id="whatsappLink" href="https://wa.me/?text=Hello%20Royal%20Tech%2C%20I%27m%20interested%20in%20a%20website%20or%20digital%20solution." target="_blank" rel="noopener noreferrer" class="mt-3 flex items-center justify-between gap-3 rounded-xl bg-emerald-500 px-4 py-4 font-bold text-white transition hover:bg-emerald-400"><span><span class="block text-xs font-medium text-emerald-50/80">WhatsApp</span><span class="mt-1 block text-sm">Discuss your project</span></span><span class="text-xl">↗</span></a>
            <p class="mt-4 text-xs leading-5 text-slate-500">For a faster quote, include your business name, the kind of website you need, and your ideal launch date.</p>
          </div>
        </div>
      </div>
    </section>
  </main>

  <footer class="border-t border-white/10">
    <div class="mx-auto flex max-w-7xl flex-col gap-5 px-5 py-8 sm:px-8 md:flex-row md:items-center md:justify-between">
      <a href="#home" class="flex items-center gap-3"><span class="grid h-9 w-9 place-items-center rounded-xl bg-gradient-to-br from-violet-500 to-cyan-400 text-xs font-black">RT</span><span class="text-sm font-extrabold">ROYAL TECH</span></a>
      <p class="text-xs text-slate-500">© <span id="year"></span> Royal Tech. Tech solutions for a better world.</p>
      <div class="flex gap-5 text-xs text-slate-400"><a href="#services" class="hover:text-white">Services</a><a href="#work" class="hover:text-white">Projects</a><a href="#contact" class="hover:text-white">Contact</a></div>
    </div>
  </footer>

  <script>
    const menuButton = document.getElementById('menuButton');
    const mobileMenu = document.getElementById('mobileMenu');
    const menuIcon = document.getElementById('menuIcon');

    menuButton.addEventListener('click', () => {
      const isOpen = !mobileMenu.classList.contains('hidden');
      mobileMenu.classList.toggle('hidden');
      menuButton.setAttribute('aria-expanded', String(!isOpen));
      menuButton.setAttribute('aria-label', isOpen ? 'Open navigation menu' : 'Close navigation menu');
      menuIcon.textContent = isOpen ? '☰' : '✕';
    });

    document.querySelectorAll('.mobile-link').forEach(link => {
      link.addEventListener('click', () => {
        mobileMenu.classList.add('hidden');
        menuButton.setAttribute('aria-expanded', 'false');
        menuButton.setAttribute('aria-label', 'Open navigation menu');
        menuIcon.textContent = '☰';
      });
    });

    document.getElementById('year').textContent = new Date().getFullYear();

    const revealObserver = new IntersectionObserver(entries => {
      entries.forEach(entry => {
        if (entry.isIntersecting) {
          entry.target.classList.add('visible');
          revealObserver.unobserve(entry.target);
        }
      });
    }, { threshold: 0.12 });
    document.querySelectorAll('.reveal').forEach(el => revealObserver.observe(el));
  </script>
</body>
</html>
