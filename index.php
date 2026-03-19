<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8" />
  <meta name="viewport" content="width=device-width, initial-scale=1.0" />
  <title>Balkanska Vatra | Балканска Ватра</title>
  <script src="https://cdn.tailwindcss.com"></script>
  <script>
    tailwind.config = {
      theme: {
        extend: {
          colors: {
            plum: {
              950: '#0d0014',
              900: '#1a0028',
              800: '#2d0045',
              700: '#450068',
              600: '#6b21a8',
              500: '#9333ea',
              400: '#c084fc',
              300: '#d8b4fe',
            },
            gold: {
              DEFAULT: '#c9a84c',
              light: '#e8c97a',
              pale: '#f5e6b8',
            },
          },
          fontFamily: {
            cinzel: ['"Cinzel Decorative"', 'serif'],
            crimson: ['"Crimson Pro"', 'serif'],
          },
          keyframes: {
            fadeUp: {
              '0%':   { opacity: '0', transform: 'translateY(36px)' },
              '100%': { opacity: '1', transform: 'translateY(0)' },
            },
            fadeIn: {
              '0%':   { opacity: '0' },
              '100%': { opacity: '1' },
            },
          },
          animation: {
            'fade-up':   'fadeUp 1s ease forwards',
            'fade-up-2': 'fadeUp 1s ease 0.2s forwards',
            'fade-up-3': 'fadeUp 1s ease 0.4s forwards',
            'fade-up-4': 'fadeUp 1s ease 0.6s forwards',
            'fade-up-5': 'fadeUp 1s ease 0.8s forwards',
            'fade-in':   'fadeIn 1.4s ease forwards',
          },
        },
      },
    }
  </script>
  <link href="https://fonts.googleapis.com/css2?family=Cinzel+Decorative:wght@400;700;900&family=Crimson+Pro:ital,wght@0,300;0,400;0,600;1,300;1,400;1,600&display=swap" rel="stylesheet">
</head>
<body class="bg-plum-950 text-gold-pale font-crimson overflow-x-hidden">

  <!-- NAV -->
  <nav class="fixed top-0 left-0 right-0 z-50 bg-plum-950/80 backdrop-blur-xl border-b border-gold/20">
    <div class="max-w-7xl mx-auto px-6 py-4 flex items-center justify-between">
      <div class="font-cinzel text-gold">
        <span class="block text-[10px] tracking-[0.3em] font-crimson italic text-gold/50 mb-0.5">Authentic Serbian Restaurant</span>
        <span class="text-base tracking-widest">Balkanska Vatra</span>
        <span class="block text-[10px] tracking-[0.25em] font-crimson italic text-gold/40 mt-0.5">Балканска Ватра</span>
      </div>
      <ul class="hidden md:flex items-center gap-10">
        <li><a href="#about"        class="font-crimson text-sm tracking-widest text-plum-300 hover:text-gold transition-colors duration-300">About <span class="text-gold/40 italic text-xs">· О нама</span></a></li>
        <li><a href="#menu"         class="font-crimson text-sm tracking-widest text-plum-300 hover:text-gold transition-colors duration-300">Menu <span class="text-gold/40 italic text-xs">· Мени</span></a></li>
        <li><a href="#gallery"      class="font-crimson text-sm tracking-widest text-plum-300 hover:text-gold transition-colors duration-300">Gallery <span class="text-gold/40 italic text-xs">· Галерија</span></a></li>
        <li><a href="#contact"      class="font-crimson text-sm tracking-widest text-plum-300 hover:text-gold transition-colors duration-300">Contact <span class="text-gold/40 italic text-xs">· Контакт</span></a></li>
      </ul>
      <a href="#reservations" class="hidden md:inline-block px-6 py-2 border border-gold text-gold font-cinzel text-xs tracking-widest hover:bg-gold hover:text-plum-950 transition-all duration-300">
        Reserve <span class="font-crimson italic font-normal opacity-70 text-[11px] ml-1">/ Резервација</span>
      </a>
    </div>
  </nav>

  <!-- HERO -->
  <section class="relative min-h-screen flex items-center justify-center overflow-hidden">
    <!-- gradient background -->
    <div class="absolute inset-0 bg-plum-950"></div>
    <div class="absolute top-32 left-1/4 w-96 h-96 rounded-full bg-plum-700/20 blur-3xl"></div>
    <div class="absolute bottom-20 right-1/4 w-80 h-80 rounded-full bg-plum-600/15 blur-3xl"></div>
    <div class="absolute top-1/2 left-1/2 -translate-x-1/2 -translate-y-1/2 w-[700px] h-[700px] rounded-full bg-plum-800/25 blur-[120px]"></div>

    <div class="relative z-10 text-center px-6 max-w-5xl mx-auto pt-24">
      <!-- ornament top -->
      <div class="flex items-center justify-center gap-4 mb-8 opacity-0 animate-fade-in">
        <div class="h-px w-24 bg-gradient-to-r from-transparent to-gold/60"></div>
        <span class="text-gold text-2xl">✦</span>
        <div class="h-px w-24 bg-gradient-to-l from-transparent to-gold/60"></div>
      </div>

      <p class="opacity-0 animate-fade-up font-crimson italic text-plum-300 text-xl tracking-[0.2em] mb-5">
        Authentic Serbian Cuisine &nbsp;·&nbsp; <span class="text-gold/50">Аутентична Српска Кухиња</span>
      </p>

      <h1 class="opacity-0 animate-fade-up-2 font-cinzel text-7xl md:text-9xl text-gold tracking-widest leading-none mb-2">
        Balkanska
      </h1>
      <h1 class="opacity-0 animate-fade-up-3 font-cinzel text-5xl md:text-7xl text-plum-300 tracking-[0.3em] leading-none mb-3">
        Vatra
      </h1>
      <p class="opacity-0 animate-fade-up-3 font-crimson italic text-3xl text-gold/35 tracking-[0.4em] mb-12">
        Балканска Ватра
      </p>

      <p class="opacity-0 animate-fade-up-4 font-crimson text-plum-300 text-xl leading-loose max-w-2xl mx-auto mb-12">
        Where the fire of the Balkans meets your table — traditions passed down through generations,
        cooked with passion and the finest Balkan ingredients.
        <br/><span class="text-gold/45 italic text-base">Где балкански огањ среће ваш сто.</span>
      </p>

      <div class="opacity-0 animate-fade-up-5 flex flex-col sm:flex-row gap-4 justify-center">
        <a href="#menu" class="px-12 py-4 bg-gold text-plum-950 font-cinzel text-sm tracking-widest hover:bg-gold-light hover:shadow-[0_8px_30px_rgba(201,168,76,0.4)] hover:-translate-y-0.5 transition-all duration-300 inline-block">
          View Menu <span class="font-crimson italic font-normal opacity-70 ml-1">/ Мени</span>
        </a>
        <a href="#reservations" class="px-12 py-4 border border-gold/50 text-gold font-cinzel text-sm tracking-widest hover:border-gold hover:bg-gold/10 transition-all duration-300 inline-block">
          Reserve a Table <span class="font-crimson italic font-normal opacity-70 ml-1">/ Резервација</span>
        </a>
      </div>

      <div class="flex items-center justify-center gap-4 mt-20 opacity-0 animate-fade-in">
        <div class="h-px w-16 bg-gradient-to-r from-transparent to-gold/30"></div>
        <span class="text-gold/35 text-sm">✦ ✦ ✦</span>
        <div class="h-px w-16 bg-gradient-to-l from-transparent to-gold/30"></div>
      </div>
    </div>

    <!-- scroll indicator -->
    <div class="absolute bottom-8 left-1/2 -translate-x-1/2 flex flex-col items-center gap-2 opacity-40">
      <span class="font-cinzel text-[10px] tracking-[0.4em] text-plum-300">SCROLL</span>
      <div class="w-px h-12 bg-gradient-to-b from-gold to-transparent"></div>
    </div>
  </section>

  <!-- ABOUT -->
  <section id="about" class="py-32 bg-plum-900 relative overflow-hidden">
    <div class="absolute inset-0 bg-gradient-to-b from-plum-950 via-transparent to-plum-950 pointer-events-none"></div>
    <div class="max-w-7xl mx-auto px-6 relative z-10">
      <div class="grid md:grid-cols-2 gap-20 items-center">
        <div>
          <p class="font-crimson italic text-gold/60 text-lg tracking-[0.2em] mb-3">Our Story &nbsp;·&nbsp; <span class="text-gold/40">Наша Прича</span></p>
          <div class="h-px w-20 bg-gradient-to-r from-gold to-transparent mb-8"></div>
          <h2 class="font-cinzel text-4xl md:text-5xl text-gold leading-tight mb-3">
            Born from the<br/>
            <span class="text-plum-300">Heart of the</span><br/>
            Balkans
          </h2>
          <p class="font-crimson italic text-plum-500 text-xl mb-6">Рођени из Срца Балкана</p>
          <div class="h-px w-16 bg-gold/25 mb-8"></div>
          <p class="font-crimson text-plum-300 text-lg leading-loose mb-4">
            For over 25 years, Balkanska Vatra has been a sanctuary of authentic Serbian cuisine.
            Our recipes are rooted in centuries of Balkan tradition — hearty, soulful, and cooked with unyielding pride.
          </p>
          <p class="font-crimson italic text-plum-500/80 text-base leading-relaxed mb-10">
            Већ 25 година, Балканска Ватра је уточиште аутентичне српске кухиње.
            Наши рецепти корене вуку из вековне балканске традиције.
          </p>
          <div class="flex gap-10">
            <div class="text-center">
              <p class="font-cinzel text-3xl text-gold">25+</p>
              <p class="font-crimson text-plum-400 text-sm tracking-widest mt-1">Years / Година</p>
            </div>
            <div class="w-px bg-gold/20"></div>
            <div class="text-center">
              <p class="font-cinzel text-3xl text-gold">50+</p>
              <p class="font-crimson text-plum-400 text-sm tracking-widest mt-1">Dishes / Јела</p>
            </div>
            <div class="w-px bg-gold/20"></div>
            <div class="text-center">
              <p class="font-cinzel text-3xl text-gold">4.9 ★</p>
              <p class="font-crimson text-plum-400 text-sm tracking-widest mt-1">Rating / Оцена</p>
            </div>
          </div>
        </div>

        <!-- decorative right panel -->
        <div class="relative h-[480px] hidden md:block">
          <div class="absolute top-0 right-8 w-72 h-80 border border-gold/15 bg-plum-800/40 rotate-6 rounded-sm"></div>
          <div class="absolute top-8 right-0 w-72 h-80 border border-gold/25 bg-plum-800/70 -rotate-2 rounded-sm flex flex-col items-center justify-center gap-4 p-8">
            <span class="text-5xl">🔥</span>
            <p class="font-cinzel text-gold text-xl text-center leading-snug">Traditional<br/>Balkan Fire</p>
            <p class="font-crimson italic text-plum-400 text-sm text-center">Традиционални Балкански Огањ</p>
            <div class="h-px w-16 bg-gold/30"></div>
            <p class="font-crimson text-plum-300/70 text-sm text-center leading-relaxed">
              Every dish tells a story of mountains, rivers, and the warmth of a Serbian home.
            </p>
          </div>
          <div class="absolute bottom-0 right-14 w-60 h-40 border border-plum-600/35 bg-plum-900/80 rounded-sm flex items-center justify-center rotate-2">
            <p class="font-cinzel text-plum-400 text-center text-sm leading-loose tracking-wider">
              Est. 1999<br/><span class="text-gold/45">Оснивање 1999.</span>
            </p>
          </div>
        </div>
      </div>
    </div>
  </section>

  <!-- MENU -->
  <section id="menu" class="py-32 bg-plum-950 relative">
    <div class="absolute top-0 left-0 right-0 h-px bg-gradient-to-r from-transparent via-gold/30 to-transparent"></div>
    <div class="max-w-7xl mx-auto px-6">

      <!-- header -->
      <div class="text-center mb-20">
        <p class="font-crimson italic text-gold/60 text-lg tracking-[0.2em] mb-3">Our Offerings &nbsp;·&nbsp; <span class="text-gold/40">Наша Понуда</span></p>
        <h2 class="font-cinzel text-5xl text-gold mb-2">The Menu</h2>
        <p class="font-cinzel text-3xl text-plum-400 mb-8">Мени</p>
        <div class="flex items-center justify-center gap-4">
          <div class="h-px w-20 bg-gradient-to-r from-transparent to-gold/40"></div>
          <span class="text-gold">✦</span>
          <div class="h-px w-20 bg-gradient-to-l from-transparent to-gold/40"></div>
        </div>
      </div>

      <!-- category filter buttons (PHP will make these functional) -->
      <div class="flex flex-wrap justify-center gap-3 mb-16">
        <button class="px-6 py-2 border border-gold bg-gold/10 text-gold font-cinzel text-[11px] tracking-widest transition-all duration-300 hover:bg-gold hover:text-plum-950">
          Starters <span class="font-crimson italic text-[10px] opacity-60">/ Предјела</span>
        </button>
        <button class="px-6 py-2 border border-gold/25 text-plum-300 font-cinzel text-[11px] tracking-widest transition-all duration-300 hover:border-gold hover:text-gold">
          Grilled <span class="font-crimson italic text-[10px] opacity-60">/ Роштиљ</span>
        </button>
        <button class="px-6 py-2 border border-gold/25 text-plum-300 font-cinzel text-[11px] tracking-widest transition-all duration-300 hover:border-gold hover:text-gold">
          Main Dishes <span class="font-crimson italic text-[10px] opacity-60">/ Главна Јела</span>
        </button>
        <button class="px-6 py-2 border border-gold/25 text-plum-300 font-cinzel text-[11px] tracking-widest transition-all duration-300 hover:border-gold hover:text-gold">
          Soups <span class="font-crimson italic text-[10px] opacity-60">/ Чорбе</span>
        </button>
        <button class="px-6 py-2 border border-gold/25 text-plum-300 font-cinzel text-[11px] tracking-widest transition-all duration-300 hover:border-gold hover:text-gold">
          Desserts <span class="font-crimson italic text-[10px] opacity-60">/ Десерти</span>
        </button>
        <button class="px-6 py-2 border border-gold/25 text-plum-300 font-cinzel text-[11px] tracking-widest transition-all duration-300 hover:border-gold hover:text-gold">
          Drinks <span class="font-crimson italic text-[10px] opacity-60">/ Пића</span>
        </button>
      </div>

      <!-- menu grid – PHP will populate dynamically, sample cards shown -->
      <div class="grid md:grid-cols-2 lg:grid-cols-3 gap-6">

        <!-- card 1 - signature -->
        <div class="group relative bg-plum-900/60 border border-gold/15 hover:border-gold/45 transition-all duration-400 hover:-translate-y-1 hover:shadow-[0_20px_50px_rgba(0,0,0,0.5),0_0_30px_rgba(168,85,247,0.08)]">
          <div class="h-px w-0 group-hover:w-full bg-gradient-to-r from-gold/60 to-transparent transition-all duration-500"></div>
          <div class="p-8">
            <span class="inline-block px-3 py-1 bg-gold/15 border border-gold/30 text-gold font-cinzel text-[10px] tracking-widest mb-4">Signature</span>
            <div class="flex items-start justify-between gap-4 mb-4">
              <div>
                <h3 class="font-cinzel text-gold text-xl leading-tight mb-1">Ćevapi</h3>
                <p class="font-crimson italic text-plum-400 text-lg">Ћевапи</p>
              </div>
              <p class="font-cinzel text-gold text-xl shrink-0">€16.50</p>
            </div>
            <div class="h-px bg-gradient-to-r from-gold/20 to-transparent mb-4"></div>
            <p class="font-crimson text-plum-300/80 text-base leading-relaxed mb-2">
              Hand-rolled minced meat sausages, grilled over open flame, served with fresh lepinja bread and kajmak cream cheese.
            </p>
            <p class="font-crimson italic text-plum-500 text-sm leading-relaxed">
              Ручно ваљани ћевапи са жара, лепињом и кајмаком.
            </p>
          </div>
        </div>

        <!-- card 2 - popular -->
        <div class="group relative bg-plum-900/60 border border-gold/15 hover:border-gold/45 transition-all duration-400 hover:-translate-y-1 hover:shadow-[0_20px_50px_rgba(0,0,0,0.5),0_0_30px_rgba(168,85,247,0.08)]">
          <div class="h-px w-0 group-hover:w-full bg-gradient-to-r from-gold/60 to-transparent transition-all duration-500"></div>
          <div class="p-8">
            <span class="inline-block px-3 py-1 bg-plum-700/50 border border-plum-500/40 text-plum-300 font-cinzel text-[10px] tracking-widest mb-4">Popular</span>
            <div class="flex items-start justify-between gap-4 mb-4">
              <div>
                <h3 class="font-cinzel text-gold text-xl leading-tight mb-1">Pljeskavica</h3>
                <p class="font-crimson italic text-plum-400 text-lg">Пљескавица</p>
              </div>
              <p class="font-cinzel text-gold text-xl shrink-0">€18.00</p>
            </div>
            <div class="h-px bg-gradient-to-r from-gold/20 to-transparent mb-4"></div>
            <p class="font-crimson text-plum-300/80 text-base leading-relaxed mb-2">
              A thick patty of mixed minced meats, seasoned with onion and spices. The crown jewel of Balkan grilling.
            </p>
            <p class="font-crimson italic text-plum-500 text-sm leading-relaxed">
              Пљескавица од мешаног меса са луком и зачинима.
            </p>
          </div>
        </div>

        <!-- card 3 -->
        <div class="group relative bg-plum-900/60 border border-gold/15 hover:border-gold/45 transition-all duration-400 hover:-translate-y-1 hover:shadow-[0_20px_50px_rgba(0,0,0,0.5),0_0_30px_rgba(168,85,247,0.08)]">
          <div class="h-px w-0 group-hover:w-full bg-gradient-to-r from-gold/60 to-transparent transition-all duration-500"></div>
          <div class="p-8">
            <div class="mb-[calc(1rem+22px)] mt-0"></div><!-- badge spacer -->
            <div class="flex items-start justify-between gap-4 mb-4">
              <div>
                <h3 class="font-cinzel text-gold text-xl leading-tight mb-1">Sarma</h3>
                <p class="font-crimson italic text-plum-400 text-lg">Сарма</p>
              </div>
              <p class="font-cinzel text-gold text-xl shrink-0">€15.50</p>
            </div>
            <div class="h-px bg-gradient-to-r from-gold/20 to-transparent mb-4"></div>
            <p class="font-crimson text-plum-300/80 text-base leading-relaxed mb-2">
              Slow-cooked sour cabbage rolls stuffed with seasoned minced meat and rice, simmered in a rich tomato broth.
            </p>
            <p class="font-crimson italic text-plum-500 text-sm leading-relaxed">
              Сарма у киселом купусу са месом и пиринчем.
            </p>
          </div>
        </div>

        <!-- card 4 - vegetarian -->
        <div class="group relative bg-plum-900/60 border border-gold/15 hover:border-gold/45 transition-all duration-400 hover:-translate-y-1 hover:shadow-[0_20px_50px_rgba(0,0,0,0.5),0_0_30px_rgba(168,85,247,0.08)]">
          <div class="h-px w-0 group-hover:w-full bg-gradient-to-r from-gold/60 to-transparent transition-all duration-500"></div>
          <div class="p-8">
            <span class="inline-block px-3 py-1 bg-green-900/40 border border-green-700/40 text-green-400 font-cinzel text-[10px] tracking-widest mb-4">Vegetarian</span>
            <div class="flex items-start justify-between gap-4 mb-4">
              <div>
                <h3 class="font-cinzel text-gold text-xl leading-tight mb-1">Gibanica</h3>
                <p class="font-crimson italic text-plum-400 text-lg">Гибаница</p>
              </div>
              <p class="font-cinzel text-gold text-xl shrink-0">€9.00</p>
            </div>
            <div class="h-px bg-gradient-to-r from-gold/20 to-transparent mb-4"></div>
            <p class="font-crimson text-plum-300/80 text-base leading-relaxed mb-2">
              Layers of flaky phyllo pastry filled with fresh cottage cheese and eggs. A beloved Serbian classic.
            </p>
            <p class="font-crimson italic text-plum-500 text-sm leading-relaxed">
              Традиционална гибаница са свежим сиром и јајима.
            </p>
          </div>
        </div>

        <!-- card 5 - chef's choice -->
        <div class="group relative bg-plum-900/60 border border-gold/15 hover:border-gold/45 transition-all duration-400 hover:-translate-y-1 hover:shadow-[0_20px_50px_rgba(0,0,0,0.5),0_0_30px_rgba(168,85,247,0.08)]">
          <div class="h-px w-0 group-hover:w-full bg-gradient-to-r from-gold/60 to-transparent transition-all duration-500"></div>
          <div class="p-8">
            <span class="inline-block px-3 py-1 bg-gold/10 border border-gold/40 text-gold font-cinzel text-[10px] tracking-widest mb-4">Chef's Choice</span>
            <div class="flex items-start justify-between gap-4 mb-4">
              <div>
                <h3 class="font-cinzel text-gold text-xl leading-tight mb-1">Lamb on the Spit</h3>
                <p class="font-crimson italic text-plum-400 text-lg">Јагњетина са Ражња</p>
              </div>
              <p class="font-cinzel text-gold text-xl shrink-0">€36.00</p>
            </div>
            <div class="h-px bg-gradient-to-r from-gold/20 to-transparent mb-4"></div>
            <p class="font-crimson text-plum-300/80 text-base leading-relaxed mb-2">
              Whole lamb, slow-roasted on an open spit for 6 hours. Tender, aromatic, and utterly unforgettable.
            </p>
            <p class="font-crimson italic text-plum-500 text-sm leading-relaxed">
              Цело јагње споро печено на ражњу шест сати.
            </p>
          </div>
        </div>

        <!-- card 6 -->
        <div class="group relative bg-plum-900/60 border border-gold/15 hover:border-gold/45 transition-all duration-400 hover:-translate-y-1 hover:shadow-[0_20px_50px_rgba(0,0,0,0.5),0_0_30px_rgba(168,85,247,0.08)]">
          <div class="h-px w-0 group-hover:w-full bg-gradient-to-r from-gold/60 to-transparent transition-all duration-500"></div>
          <div class="p-8">
            <div class="mb-[calc(1rem+22px)] mt-0"></div>
            <div class="flex items-start justify-between gap-4 mb-4">
              <div>
                <h3 class="font-cinzel text-gold text-xl leading-tight mb-1">Pasulj</h3>
                <p class="font-crimson italic text-plum-400 text-lg">Пасуљ</p>
              </div>
              <p class="font-cinzel text-gold text-xl shrink-0">€12.50</p>
            </div>
            <div class="h-px bg-gradient-to-r from-gold/20 to-transparent mb-4"></div>
            <p class="font-crimson text-plum-300/80 text-base leading-relaxed mb-2">
              Serbian bean stew with smoked ribs, slow-cooked with onions, peppers and paprika. The ultimate comfort food.
            </p>
            <p class="font-crimson italic text-plum-500 text-sm leading-relaxed">
              Пасуљ са димљеним ребрима, луком и паприком.
            </p>
          </div>
        </div>

      </div><!-- /grid -->

      <div class="text-center mt-16">
        <a href="#" class="inline-block px-14 py-4 border border-gold/40 text-gold font-cinzel text-sm tracking-widest hover:bg-gold hover:text-plum-950 transition-all duration-300 hover:shadow-[0_0_30px_rgba(201,168,76,0.3)]">
          Full Menu &nbsp;·&nbsp; <span class="font-crimson italic font-normal opacity-80">Цео Мени</span>
        </a>
      </div>
    </div>
  </section>

  <!-- SPECIAL BANNER -->
  <section class="py-20 relative border-y border-gold/15 overflow-hidden">
    <div class="absolute inset-0 bg-gradient-to-r from-plum-800/30 via-plum-700/20 to-plum-800/30"></div>
    <div class="max-w-4xl mx-auto px-6 text-center relative z-10">
      <span class="text-gold text-4xl block mb-6">✦</span>
      <h2 class="font-cinzel text-4xl text-gold mb-2">Daily Specials</h2>
      <p class="font-cinzel text-2xl text-plum-400 mb-8">Дневне Специјалности</p>
      <p class="font-crimson text-plum-300 text-xl leading-relaxed mb-2">
        Every day our chefs craft a rotating selection of seasonal dishes from the finest local produce.
      </p>
      <p class="font-crimson italic text-plum-500 text-base mb-10">
        Сваки дан наши кувари припремају сезонска јела од локалних производа.
      </p>
      <a href="#" class="inline-block px-12 py-4 bg-gold text-plum-950 font-cinzel text-sm tracking-widest hover:bg-gold-light hover:shadow-[0_8px_30px_rgba(201,168,76,0.4)] hover:-translate-y-0.5 transition-all duration-300">
        Today's Specials &nbsp;·&nbsp; <span class="font-crimson italic font-normal opacity-80">Данашња Понуда</span>
      </a>
    </div>
  </section>

  <!-- GALLERY -->
  <section id="gallery" class="py-32 bg-plum-950">
    <div class="max-w-7xl mx-auto px-6">
      <div class="text-center mb-16">
        <p class="font-crimson italic text-gold/60 tracking-[0.2em] mb-3">Atmosphere &nbsp;·&nbsp; <span class="text-gold/40">Атмосфера</span></p>
        <h2 class="font-cinzel text-5xl text-gold mb-2">Gallery</h2>
        <p class="font-cinzel text-3xl text-plum-400 mb-8">Галерија</p>
        <div class="flex items-center justify-center gap-4">
          <div class="h-px w-20 bg-gradient-to-r from-transparent to-gold/40"></div>
          <span class="text-gold">✦</span>
          <div class="h-px w-20 bg-gradient-to-l from-transparent to-gold/40"></div>
        </div>
      </div>

      <div class="grid grid-cols-2 md:grid-cols-4 gap-3 auto-rows-[220px]">
        <div class="col-span-2 row-span-2 relative overflow-hidden group border border-gold/10 hover:border-gold/30 transition-colors duration-300">
          <img src="https://images.unsplash.com/photo-1555939594-58d7cb561ad1?w=700&q=80" alt="Grilled meats" class="w-full h-full object-cover opacity-65 group-hover:opacity-85 group-hover:scale-105 transition-all duration-600">
          <div class="absolute inset-0 bg-gradient-to-t from-plum-950/70 to-transparent"></div>
          <div class="absolute bottom-4 left-5">
            <p class="font-cinzel text-gold text-sm">Rostilj</p>
            <p class="font-crimson italic text-gold/50 text-xs">Роштиљ</p>
          </div>
        </div>
        <div class="relative overflow-hidden group border border-gold/10 hover:border-gold/30 transition-colors duration-300">
          <img src="https://images.unsplash.com/photo-1544025162-d76694265947?w=400&q=80" alt="Interior" class="w-full h-full object-cover opacity-65 group-hover:opacity-85 group-hover:scale-105 transition-all duration-500">
          <div class="absolute inset-0 bg-gradient-to-t from-plum-950/60 to-transparent"></div>
          <div class="absolute bottom-3 left-4">
            <p class="font-cinzel text-gold text-xs">Interior <span class="font-crimson italic text-gold/45 text-[10px]">· Ентеријер</span></p>
          </div>
        </div>
        <div class="relative overflow-hidden group border border-gold/10 hover:border-gold/30 transition-colors duration-300">
          <img src="https://images.unsplash.com/photo-1517248135467-4c7edcad34c4?w=400&q=80" alt="Dining" class="w-full h-full object-cover opacity-65 group-hover:opacity-85 group-hover:scale-105 transition-all duration-500">
          <div class="absolute inset-0 bg-gradient-to-t from-plum-950/60 to-transparent"></div>
          <div class="absolute bottom-3 left-4">
            <p class="font-cinzel text-gold text-xs">Dining <span class="font-crimson italic text-gold/45 text-[10px]">· Трпезарија</span></p>
          </div>
        </div>
        <div class="relative overflow-hidden group border border-gold/10 hover:border-gold/30 transition-colors duration-300">
          <img src="https://images.unsplash.com/photo-1414235077428-338989a2e8c0?w=400&q=80" alt="Cuisine" class="w-full h-full object-cover opacity-65 group-hover:opacity-85 group-hover:scale-105 transition-all duration-500">
          <div class="absolute inset-0 bg-gradient-to-t from-plum-950/60 to-transparent"></div>
          <div class="absolute bottom-3 left-4">
            <p class="font-cinzel text-gold text-xs">Cuisine <span class="font-crimson italic text-gold/45 text-[10px]">· Кухиња</span></p>
          </div>
        </div>
        <div class="relative overflow-hidden group border border-gold/10 hover:border-gold/30 transition-colors duration-300">
          <img src="https://images.unsplash.com/photo-1559339352-11d035aa65de?w=400&q=80" alt="Bar" class="w-full h-full object-cover opacity-65 group-hover:opacity-85 group-hover:scale-105 transition-all duration-500">
          <div class="absolute inset-0 bg-gradient-to-t from-plum-950/60 to-transparent"></div>
          <div class="absolute bottom-3 left-4">
            <p class="font-cinzel text-gold text-xs">Bar <span class="font-crimson italic text-gold/45 text-[10px]">· Бар</span></p>
          </div>
        </div>
      </div>
    </div>
  </section>

  <!-- RESERVATIONS -->
  <section id="reservations" class="py-32 bg-plum-900 relative">
    <div class="absolute inset-0 bg-gradient-to-b from-plum-950 via-transparent to-plum-950 pointer-events-none"></div>
    <div class="max-w-3xl mx-auto px-6 relative z-10">
      <div class="text-center mb-16">
        <p class="font-crimson italic text-gold/60 tracking-[0.2em] mb-3">Book a Table &nbsp;·&nbsp; <span class="text-gold/40">Резервишите Сто</span></p>
        <h2 class="font-cinzel text-5xl text-gold mb-2">Reservations</h2>
        <p class="font-cinzel text-3xl text-plum-400 mb-8">Резервације</p>
        <div class="flex items-center justify-center gap-4">
          <div class="h-px w-16 bg-gradient-to-r from-transparent to-gold/40"></div>
          <span class="text-gold/50">✦</span>
          <div class="h-px w-16 bg-gradient-to-l from-transparent to-gold/40"></div>
        </div>
      </div>

      <!-- PHP will handle form submission -->
      <form action="reservations.php" method="POST" class="space-y-6">
        <div class="grid md:grid-cols-2 gap-6">
          <div>
            <label class="block font-cinzel text-[11px] text-gold/70 tracking-widest mb-2">
              Name <span class="font-crimson italic text-gold/40">/ Ime</span>
            </label>
            <input type="text" name="name" placeholder="Your full name"
              class="w-full bg-plum-950/70 border border-gold/20 focus:border-gold/60 outline-none px-5 py-3 text-plum-200 font-crimson text-base placeholder:text-plum-700 transition-colors duration-300">
          </div>
          <div>
            <label class="block font-cinzel text-[11px] text-gold/70 tracking-widest mb-2">
              Email <span class="font-crimson italic text-gold/40">/ Мejl</span>
            </label>
            <input type="email" name="email" placeholder="your@email.com"
              class="w-full bg-plum-950/70 border border-gold/20 focus:border-gold/60 outline-none px-5 py-3 text-plum-200 font-crimson text-base placeholder:text-plum-700 transition-colors duration-300">
          </div>
        </div>
        <div class="grid md:grid-cols-2 gap-6">
          <div>
            <label class="block font-cinzel text-[11px] text-gold/70 tracking-widest mb-2">
              Date <span class="font-crimson italic text-gold/40">/ Датум</span>
            </label>
            <input type="date" name="date"
              class="w-full bg-plum-950/70 border border-gold/20 focus:border-gold/60 outline-none px-5 py-3 text-plum-200 font-crimson text-base transition-colors duration-300">
          </div>
          <div>
            <label class="block font-cinzel text-[11px] text-gold/70 tracking-widest mb-2">
              Time <span class="font-crimson italic text-gold/40">/ Време</span>
            </label>
            <select name="time"
              class="w-full bg-plum-950/70 border border-gold/20 focus:border-gold/60 outline-none px-5 py-3 text-plum-200 font-crimson text-base transition-colors duration-300">
              <option value="">Select time / Одаберите</option>
              <option>12:00</option><option>13:00</option><option>14:00</option>
              <option>17:00</option><option>18:00</option><option>19:00</option>
              <option>20:00</option><option>21:00</option>
            </select>
          </div>
        </div>
        <div>
          <label class="block font-cinzel text-[11px] text-gold/70 tracking-widest mb-2">
            Guests <span class="font-crimson italic text-gold/40">/ Гости</span>
          </label>
          <select name="guests"
            class="w-full bg-plum-950/70 border border-gold/20 focus:border-gold/60 outline-none px-5 py-3 text-plum-200 font-crimson text-base transition-colors duration-300">
            <option>1 person / особа</option>
            <option>2 people / особе</option>
            <option>3 people / особе</option>
            <option>4 people / особе</option>
            <option>5+ people / особа</option>
          </select>
        </div>
        <div>
          <label class="block font-cinzel text-[11px] text-gold/70 tracking-widest mb-2">
            Special Wishes <span class="font-crimson italic text-gold/40">/ Посебне Жеље</span>
          </label>
          <textarea name="notes" rows="4" placeholder="Allergies, special occasions, requests..."
            class="w-full bg-plum-950/70 border border-gold/20 focus:border-gold/60 outline-none px-5 py-3 text-plum-200 font-crimson text-base placeholder:text-plum-700 resize-none transition-colors duration-300"></textarea>
        </div>
        <div class="pt-4 text-center">
          <button type="submit"
            class="px-14 py-4 bg-gold text-plum-950 font-cinzel text-sm tracking-widest hover:bg-gold-light hover:shadow-[0_8px_30px_rgba(201,168,76,0.4)] hover:-translate-y-0.5 transition-all duration-300">
            Confirm Reservation &nbsp;·&nbsp; <span class="font-crimson italic font-normal opacity-80">Потврди</span>
          </button>
        </div>
      </form>
    </div>
  </section>

  <!-- CONTACT -->
  <section id="contact" class="py-32 bg-plum-950">
    <div class="h-px bg-gradient-to-r from-transparent via-gold/25 to-transparent mb-0"></div>
    <div class="max-w-7xl mx-auto px-6 pt-8">
      <div class="text-center mb-20">
        <p class="font-crimson italic text-gold/60 tracking-[0.2em] mb-3">Find Us &nbsp;·&nbsp; <span class="text-gold/40">Пронађите Нас</span></p>
        <h2 class="font-cinzel text-5xl text-gold mb-2">Contact</h2>
        <p class="font-cinzel text-3xl text-plum-400">Контакт</p>
      </div>

      <div class="grid md:grid-cols-3 gap-6">
        <!-- address -->
        <div class="bg-plum-900/50 border border-gold/15 p-10 text-center hover:border-gold/35 transition-colors duration-300 group">
          <div class="text-4xl mb-6">📍</div>
          <h3 class="font-cinzel text-gold text-lg mb-1">Address</h3>
          <p class="font-cinzel text-plum-400 text-sm italic mb-6">Адреса</p>
          <div class="h-px w-10 bg-gold/25 mx-auto mb-6"></div>
          <p class="font-crimson text-plum-300 text-lg leading-relaxed">
            Balkanstraat 12<br/>1234 AB Amsterdam<br/>Netherlands
          </p>
          <p class="font-crimson italic text-plum-500 text-sm mt-2">Холандија</p>
        </div>

        <!-- hours -->
        <div class="bg-plum-900/50 border border-gold/15 p-10 text-center hover:border-gold/35 transition-colors duration-300">
          <div class="text-4xl mb-6">🕐</div>
          <h3 class="font-cinzel text-gold text-lg mb-1">Opening Hours</h3>
          <p class="font-cinzel text-plum-400 text-sm italic mb-6">Радно Време</p>
          <div class="h-px w-10 bg-gold/25 mx-auto mb-6"></div>
          <div class="space-y-3 font-crimson text-base">
            <div class="flex justify-between gap-2 text-plum-300">
              <span>Mon–Thu <span class="text-plum-500 italic text-sm">/ Пон–Чет</span></span>
              <span class="text-gold/80 shrink-0">12–22</span>
            </div>
            <div class="h-px bg-gold/10"></div>
            <div class="flex justify-between gap-2 text-plum-300">
              <span>Fri–Sat <span class="text-plum-500 italic text-sm">/ Пет–Суб</span></span>
              <span class="text-gold/80 shrink-0">12–23</span>
            </div>
            <div class="h-px bg-gold/10"></div>
            <div class="flex justify-between gap-2 text-plum-300">
              <span>Sunday <span class="text-plum-500 italic text-sm">/ Недеља</span></span>
              <span class="text-gold/80 shrink-0">13–21</span>
            </div>
          </div>
        </div>

        <!-- contact -->
        <div class="bg-plum-900/50 border border-gold/15 p-10 text-center hover:border-gold/35 transition-colors duration-300">
          <div class="text-4xl mb-6">📞</div>
          <h3 class="font-cinzel text-gold text-lg mb-1">Get in Touch</h3>
          <p class="font-cinzel text-plum-400 text-sm italic mb-6">Ступите у Контакт</p>
          <div class="h-px w-10 bg-gold/25 mx-auto mb-6"></div>
          <div class="space-y-4">
            <a href="tel:+310201234567" class="block font-cinzel text-gold text-lg hover:text-gold-light transition-colors">+31 020 123 4567</a>
            <a href="mailto:info@balkanskavatra.nl" class="block font-crimson text-plum-300 hover:text-gold transition-colors text-base">info@balkanskavatra.nl</a>
            <div class="flex justify-center gap-3 pt-2">
              <a href="#" class="w-10 h-10 border border-gold/25 hover:border-gold hover:bg-gold/10 flex items-center justify-center text-gold/60 hover:text-gold transition-all duration-300 font-cinzel text-xs">f</a>
              <a href="#" class="w-10 h-10 border border-gold/25 hover:border-gold hover:bg-gold/10 flex items-center justify-center text-gold/60 hover:text-gold transition-all duration-300 font-cinzel text-xs">ig</a>
              <a href="#" class="w-10 h-10 border border-gold/25 hover:border-gold hover:bg-gold/10 flex items-center justify-center text-gold/60 hover:text-gold transition-all duration-300 font-cinzel text-xs">g</a>
            </div>
          </div>
        </div>
      </div>
    </div>
  </section>

  <!-- FOOTER -->
  <footer class="bg-plum-950 border-t border-gold/15 py-14">
    <div class="max-w-7xl mx-auto px-6 text-center">
      <div class="flex items-center justify-center gap-4 mb-8">
        <div class="h-px w-20 bg-gradient-to-r from-transparent to-gold/25"></div>
        <span class="text-gold/40 text-lg">✦</span>
        <div class="h-px w-20 bg-gradient-to-l from-transparent to-gold/25"></div>
      </div>
      <p class="font-cinzel text-gold text-2xl tracking-widest mb-1">Balkanska Vatra</p>
      <p class="font-crimson italic text-plum-500 text-xl mb-8">Балканска Ватра</p>
      <p class="font-crimson text-plum-700 text-sm">
        &copy; 2025 Balkanska Vatra. All rights reserved.
        &nbsp;·&nbsp;
        <span class="italic">Сва права задржана.</span>
      </p>
    </div>
  </footer>

</body>
</html>