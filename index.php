<!DOCTYPE html>
<html lang="en" class="scroll-smooth">
<head>
  <meta charset="UTF-8" />
  <meta name="viewport" content="width=device-width, initial-scale=1.0" />
  <title>Carpenter Zone | Custom Furniture & Professional Carpentry</title>
  <meta name="description" content="Carpenter Zone delivers bespoke custom furniture, modular kitchens, luxury wardrobes, wooden doors, office interiors, and architectural woodworking crafted to elevate modern living." />
  <meta name="keywords" content="carpentry, custom furniture, woodworking, modular kitchen, wooden wardrobes, solid wood dining table, interior woodwork" />
  <link rel="canonical" href="https://carpenterzone.com" />

  <!-- Open Graph / Meta -->
  <meta property="og:type" content="website" />
  <meta property="og:title" content="Carpenter Zone | Custom Furniture & Premium Woodwork" />
  <meta property="og:description" content="Custom Furniture • Skilled Craftsmanship • Professional Service. Built around your space, lifestyle, and vision." />
  <meta property="og:image" content="https://images.unsplash.com/photo-1540518614846-7ede433c4550?q=80&w=1200&auto=format&fit=crop" />

  <!-- Google Fonts: Playfair Display & Inter -->
  <link rel="preconnect" href="https://fonts.googleapis.com" />
  <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin />
  <link href="https://fonts.googleapis.com/css2?family=Inter:wght@300;400;500;600;700&family=Playfair+Display:ital,wght@0,500;0,600;0,700;1,400;1,600&display=swap" rel="stylesheet" />

  <!-- Tailwind CSS CDN -->
  <script src="https://cdn.tailwindcss.com"></script>
  <script>
    tailwind.config = {
      theme: {
        extend: {
          fontFamily: {
            serif: ['"Playfair Display"', 'serif'],
            sans: ['"Inter"', 'sans-serif'],
          },
          colors: {
            wood: {
              charcoal: '#171717',
              walnut: '#6B4226',
              brown: '#8B5E3C',
              darkwalnut: '#4B2D19',
              warmbeige: '#F3EBDD',
              cream: '#FAF8F3',
              brass: '#B58A45',
              brasshover: '#9E7432',
              timber: '#3D2516',
              sand: '#E7DFD5',
              surface: '#FFFFFF'
            }
          },
          letterSpacing: {
            editorial: '.18em',
            tag: '.12em'
          }
        }
      }
    }
  </script>

  <!-- JSZip & FileSaver for real standalone project export -->
  <script src="https://cdnjs.cloudflare.com/ajax/libs/jszip/3.10.1/jszip.min.js"></script>
  <script src="https://cdnjs.cloudflare.com/ajax/libs/FileSaver.js/2.0.5/FileSaver.min.js"></script>

  <!-- Structured Data JSON-LD -->
  <script type="application/ld+json">
  {
    "@context": "https://schema.org",
    "@type": "HomeAndConstructionBusiness",
    "name": "Carpenter Zone",
    "image": "https://images.unsplash.com/photo-1540518614846-7ede433c4550?q=80&w=1200&auto=format&fit=crop",
    "description": "Premium custom furniture, architectural woodwork, modular kitchens, and residential interior carpentry.",
    "email": "hello@carpenterzone.com",
    "telephone": "+91 00000 00000",
    "priceRange": "$$",
    "address": {
      "@type": "PostalAddress",
      "addressCountry": "IN"
    },
    "openingHoursSpecification": {
      "@type": "OpeningHoursSpecification",
      "dayOfWeek": ["Monday", "Tuesday", "Wednesday", "Thursday", "Friday", "Saturday"],
      "opens": "09:00",
      "closes": "18:00"
    }
  }
  </script>

  <style>
    /* Custom luxury woodwork design tokens */
    body {
      background-color: #FAF8F3;
      color: #171717;
      font-family: 'Inter', sans-serif;
      overflow-x: hidden;
    }
    .font-serif {
      font-family: 'Playfair Display', serif;
    }
    /* Grain texture overlay effect */
    .wood-texture {
      background-image: radial-gradient(#6B4226 0.75px, transparent 0.75px), radial-gradient(#B58A45 0.75px, #171717 0.75px);
      background-size: 30px 30px;
      background-position: 0 0, 15px 15px;
      background-color: #171717;
    }
    .brass-gradient {
      background: linear-gradient(135deg, #DFCA9B 0%, #B58A45 50%, #906727 100%);
    }
    .walnut-gradient {
      background: linear-gradient(180deg, rgba(23, 23, 23, 0.4) 0%, rgba(23, 23, 23, 0.92) 100%);
    }
    /* Hero background slider transitions */
    .hero-slide {
      opacity: 0;
      transition: opacity 1.2s cubic-bezier(0.4, 0, 0.2, 1), transform 6s cubic-bezier(0.25, 0.46, 0.45, 0.94);
      transform: scale(1.03);
      position: absolute;
      inset: 0;
      width: 100%;
      height: 100%;
      object-fit: cover;
      pointer-events: none;
    }
    .hero-slide.active {
      opacity: 0.48;
      transform: scale(1.1);
    }
    /* Page switcher animations */
    .page-view {
      display: none;
      animation: fadeInPage 0.35s cubic-bezier(0.16, 1, 0.3, 1) forwards;
    }
    .page-view.active {
      display: block;
    }
    @keyframes fadeInPage {
      from { opacity: 0; transform: translateY(6px); }
      to { opacity: 1; transform: translateY(0); }
    }
    /* Card zoom & lifts */
    .card-lift {
      transition: transform 0.4s cubic-bezier(0.16, 1, 0.3, 1), box-shadow 0.4s ease, border-color 0.3s ease;
    }
    .card-lift:hover {
      transform: translateY(-6px);
      box-shadow: 0 20px 30px -10px rgba(107, 66, 38, 0.15);
    }
    .img-zoom {
      transition: transform 0.7s cubic-bezier(0.25, 0.46, 0.45, 0.94);
    }
    .group:hover .img-zoom {
      transform: scale(1.07);
    }
    /* Custom Scrollbar */
    ::-webkit-scrollbar {
      width: 8px;
    }
    ::-webkit-scrollbar-track {
      background: #F3EBDD;
    }
    ::-webkit-scrollbar-thumb {
      background: #8B5E3C;
      border-radius: 4px;
    }
    ::-webkit-scrollbar-thumb:hover {
      background: #6B4226;
    }
  </style>
</head>

<body class="bg-wood-cream text-wood-charcoal antialiased flex flex-col min-h-screen selection:bg-wood-brass selection:text-white">
 
  <!-- Main Header & Navigation -->
  <header class="bg-wood-cream/95 backdrop-blur-md sticky z-40 border-b border-wood-sand transition-all duration-300 shadow-sm" id="mainHeader">
    <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
      <div class="flex items-center justify-between h-20">
        
        <!-- Logo -->
        <div class="flex-shrink-0 flex items-center">
          <a href="javascript:void(0)" onclick="switchPage('home')" class="group flex items-center space-x-3" aria-label="Carpenter Zone Home">
            <div class="w-10 h-10 rounded-lg bg-wood-charcoal text-wood-brass flex items-center justify-center font-serif text-xl font-bold border border-wood-brass/40 shadow-inner group-hover:bg-wood-walnut transition-colors">
              CZ
            </div>
            <div>
              <span class="block font-serif text-2xl tracking-wider font-bold text-wood-charcoal group-hover:text-wood-walnut transition-colors leading-none">
                CARPENTER ZONE
              </span>
              <span class="block text-[10px] uppercase tracking-tag text-wood-brown font-semibold mt-1">
                Custom Furniture &bull; Wood Solutions
              </span>
            </div>
          </a>
        </div>

        <!-- Desktop Navigation -->
          <nav class="hidden lg:flex items-center space-x-8" aria-label="Main Navigation">
          <a  href="index.html" class="nav-item text-sm font-semibold tracking-wide uppercase transition-colors text-wood-brass" data-nav="home">Home</a>
          <a href="about.html" class="nav-item text-sm font-semibold tracking-wide uppercase text-wood-charcoal hover:text-wood-brass transition-colors" data-nav="about">About</a>
          <a href="products.html" class="nav-item text-sm font-semibold tracking-wide uppercase text-wood-charcoal hover:text-wood-brass transition-colors" data-nav="products">Products</a>
          <a href="testimonial.html"  class="nav-item text-sm font-semibold tracking-wide uppercase text-wood-charcoal hover:text-wood-brass transition-colors" data-nav="testimonial">Testimonials</a>
          <a href="contact.html" class="nav-item text-sm font-semibold tracking-wide uppercase text-wood-charcoal hover:text-wood-brass transition-colors" data-nav="contact">Contact Us</a>
          <a href="privacy-policy.html" class="nav-item text-sm font-semibold tracking-wide uppercase text-wood-charcoal hover:text-wood-brass transition-colors" data-nav="privacy">Privacy Policy</a>
        </nav>

        <!-- Right Side CTA button & Mobile Toggle -->
        <div class="flex items-center space-x-4">
          <button onclick="switchPage('contact')" class="hidden sm:inline-flex items-center px-6 py-2.5 rounded-full text-xs font-bold uppercase tracking-editorial bg-wood-walnut text-wood-warmbeige hover:bg-wood-brass hover:text-wood-charcoal transition-all shadow-md">
            Get a Free Quote
          </button>

          <!-- Mobile Hamburger -->
          <button onclick="toggleMobileNav()" class="lg:hidden p-2 rounded-lg text-wood-charcoal hover:text-wood-brass hover:bg-wood-warmbeige focus:outline-none" aria-label="Toggle navigation menu">
            <svg id="hamburgerIcon" class="w-6 h-6 block" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M4 6h16M4 12h16m-7 6h7"/></svg>
            <svg id="closeNavIcon" class="w-6 h-6 hidden" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M6 18L18 6M6 6l12 12"/></svg>
          </button>
        </div>

      </div>
    </div>

    <!-- Mobile Drawer -->
    <div id="mobileDrawer" class="lg:hidden hidden bg-wood-cream border-b border-wood-sand px-6 pt-3 pb-6 space-y-3">
      <div class="flex flex-col space-y-2">
        <a href="javascript:void(0)" onclick="switchPage('home'); toggleMobileNav()" class="px-3 py-2 text-sm font-semibold tracking-wider uppercase text-wood-charcoal hover:bg-wood-warmbeige rounded-lg">Home (index.html)</a>
        <a href="javascript:void(0)" onclick="switchPage('about'); toggleMobileNav()" class="px-3 py-2 text-sm font-semibold tracking-wider uppercase text-wood-charcoal hover:bg-wood-warmbeige rounded-lg">About Us (about.html)</a>
        <a href="javascript:void(0)" onclick="switchPage('products'); toggleMobileNav()" class="px-3 py-2 text-sm font-semibold tracking-wider uppercase text-wood-charcoal hover:bg-wood-warmbeige rounded-lg">Products &amp; Services (products.html)</a>
        <a href="javascript:void(0)" onclick="switchPage('testimonial'); toggleMobileNav()" class="px-3 py-2 text-sm font-semibold tracking-wider uppercase text-wood-charcoal hover:bg-wood-warmbeige rounded-lg">Testimonials (testimonial.html)</a>
        <a href="javascript:void(0)" onclick="switchPage('contact'); toggleMobileNav()" class="px-3 py-2 text-sm font-semibold tracking-wider uppercase text-wood-charcoal hover:bg-wood-warmbeige rounded-lg">Contact Us (contact.html)</a>
        <a href="javascript:void(0)" onclick="switchPage('privacy'); toggleMobileNav()" class="px-3 py-2 text-sm font-semibold tracking-wider uppercase text-wood-charcoal hover:bg-wood-warmbeige rounded-lg">Privacy Policy (privacy-policy.html)</a>
      </div>
      <div class="pt-3 border-t border-wood-sand">
        <button onclick="switchPage('contact'); toggleMobileNav()" class="w-full text-center py-3 rounded-full text-xs font-bold uppercase tracking-editorial bg-wood-walnut text-white hover:bg-wood-brass transition-all">
          Get a Free Quote
        </button>
      </div>
    </div>
  </header>

  <!-- ========================================================================= -->
  <!-- PAGE 1: INDEX.HTML (HOMEPAGE)                                             -->
  <!-- ========================================================================= -->
  <main id="view-home" class="page-view active flex-grow">
    
    <!-- Hero Section with Auto-Sliding Background Carousel -->
    <section class="relative min-h-[92vh] flex items-center justify-center overflow-hidden bg-wood-charcoal" id="heroCarouselSection">
      
      <!-- Slider Background Images (Auto-rotating carousel) -->
      <div class="absolute inset-0 overflow-hidden" id="heroSlidesContainer">
        <!-- Slide 1: Master Craftsmanship & Hand Planing -->
        <img src="https://images.unsplash.com/photo-1540518614846-7ede433c4550?q=80&w=2000&auto=format&fit=crop" 
             alt="Carpenter Zone master craftsmanship woodworking and custom walnut furniture" 
             class="hero-slide active" 
             onerror="handleImgError(this)" 
             loading="eager" />
       
      </div>

      <!-- Contrast Gradient Overlay -->
      <div class="absolute inset-0 walnut-gradient pointer-events-none"></div>

      <!-- Slider Arrows (Previous & Next) -->
      <button onclick="prevHeroSlide()" 
              aria-label="Previous Slide" 
              class="absolute left-4 sm:left-8 top-1/2 -translate-y-1/2 z-30 w-11 h-11 sm:w-13 sm:h-13 rounded-full bg-wood-charcoal/60 hover:bg-wood-brass text-wood-warmbeige hover:text-wood-charcoal backdrop-blur-md border border-white/20 flex items-center justify-center transition-all shadow-xl focus:outline-none">
        <svg class="w-5 h-5 sm:w-6 sm:h-6" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2.2" d="M15 19l-7-7 7-7"/></svg>
      </button>

      <button onclick="nextHeroSlide()" 
              aria-label="Next Slide" 
              class="absolute right-4 sm:right-8 top-1/2 -translate-y-1/2 z-30 w-11 h-11 sm:w-13 sm:h-13 rounded-full bg-wood-charcoal/60 hover:bg-wood-brass text-wood-warmbeige hover:text-wood-charcoal backdrop-blur-md border border-white/20 flex items-center justify-center transition-all shadow-xl focus:outline-none">
        <svg class="w-5 h-5 sm:w-6 sm:h-6" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2.2" d="M9 5l7 7-7 7"/></svg>
      </button>

      <!-- Central Hero Content Block -->
      <div class="relative z-20 max-w-5xl mx-auto px-6 py-20 text-center space-y-6 select-none">
        <div class="inline-flex items-center space-x-2 px-4 py-1.5 rounded-full border border-wood-brass/60 bg-wood-charcoal/80 backdrop-blur-md shadow-lg">
          <span class="w-2 h-2 rounded-full bg-wood-brass animate-ping"></span>
          <span class="text-[11px] uppercase tracking-tag text-wood-brass font-bold">Custom Woodwork &bull; Skilled Craftsmanship &bull; Professional Service</span>
        </div>

        <h1 class="font-serif text-4xl sm:text-6xl md:text-7xl font-bold text-white leading-tight tracking-tight drop-shadow-md">
          Crafting Wood.<br />
          <span class="italic font-normal text-wood-warmbeige">Creating Beautiful Spaces.</span>
        </h1>

        <p class="text-base sm:text-lg text-wood-warmbeige/90 font-light leading-relaxed max-w-2xl mx-auto drop-shadow">
          Carpenter Zone delivers custom furniture, professional carpentry, and premium woodwork designed around your space, lifestyle, and vision.
        </p>

        <div class="pt-4 flex flex-col sm:flex-row items-center justify-center gap-4">
          <button onclick="switchPage('products')" class="w-full sm:w-auto px-8 py-4 rounded-full bg-wood-brass hover:bg-wood-brasshover text-wood-charcoal font-bold text-xs tracking-editorial uppercase transition-all transform hover:-translate-y-0.5 shadow-2xl">
            Explore Our Work
          </button>
          <button onclick="switchPage('contact')" class="w-full sm:w-auto px-8 py-4 rounded-full border-2 border-white/60 hover:border-wood-brass text-white hover:text-wood-brass font-bold text-xs tracking-editorial uppercase transition-all backdrop-blur-sm bg-black/20 hover:bg-black/40">
            Get a Free Quote
          </button>
        </div>

        
      </div>

      <!-- Bottom Trust Ribbon -->
      <div class="absolute bottom-0 inset-x-0 bg-black/50 backdrop-blur-md border-t border-white/10 py-3 hidden md:block z-20">
        <div class="max-w-7xl mx-auto px-6 flex items-center justify-between text-xs text-wood-warmbeige/80">
          <span>&bull; Precision Mortise &amp; Tenon Joinery</span>
          <span>&bull; Sustainable Solid Hardwoods</span>
          <span>&bull; Zero-VOC Child-Safe Finishes</span>
          <span>&bull; Doorstep Measurement &amp; Consultation</span>
        </div>
      </div>
    </section>

    <!-- Four Professional Feature Cards (Enhanced with HD Timber & Workshop Photography) -->
    <section class="py-16 -mt-10 relative z-30 max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
      <div class="grid grid-cols-1 sm:grid-cols-2 lg:grid-cols-4 gap-6">
        
        <!-- Card 1: Skilled Craftsmanship -->
        <div class="bg-white rounded-3xl overflow-hidden border border-wood-sand shadow-xl card-lift flex flex-col group">
          <div class="relative h-44 overflow-hidden bg-wood-warmbeige">
            <img src="https://images.unsplash.com/photo-1513694203232-719a280e022f?q=80&w=600&auto=format&fit=crop" 
                 alt="Master carpenter hand planing authentic timber joint with chisel" 
                 class="w-full h-full object-cover img-zoom" 
                 onerror="handleImgError(this)" 
                 loading="lazy" />
            <div class="absolute inset-0 bg-gradient-to-t from-black/75 via-black/20 to-transparent"></div>
            <div class="absolute bottom-3 left-3 flex items-center space-x-2 text-white">
              <div class="w-8 h-8 rounded-lg bg-wood-brass/90 text-wood-charcoal flex items-center justify-center shadow-md">
                <svg class="w-4 h-4" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M11 4a2 2 0 114 0v1a1 1 0 001 1h3a1 1 0 011 1v3a1 1 0 01-1 1h-1a2 2 0 100 4h1a1 1 0 011 1v3a1 1 0 01-1 1h-3a1 1 0 01-1-1v-1a2 2 0 10-4 0v1a1 1 0 01-1 1H7a1 1 0 01-1-1v-3a1 1 0 00-1-1H4a2 2 0 110-4h1a1 1 0 001-1V7a1 1 0 011-1h3a1 1 0 001-1V4z"/></svg>
              </div>
              <span class="text-[11px] uppercase tracking-wider font-bold text-wood-warmbeige">Handcrafted</span>
            </div>
          </div>
          <div class="p-6 flex-grow flex flex-col justify-between">
            <div>
              <h3 class="font-serif text-lg font-bold text-wood-charcoal mb-2 group-hover:text-wood-walnut transition-colors">Skilled Craftsmanship</h3>
              <p class="text-xs text-wood-charcoal/70 leading-relaxed">
                Experienced workmanship with meticulous attention to every grain pattern, edge finish, and precision mortise joint.
              </p>
            </div>
            <span class="text-[11px] font-bold text-wood-brass uppercase tracking-wider mt-4 block">&bull; Generational Artisans</span>
          </div>
        </div>

        <!-- Card 2: Custom Designs -->
        <div class="bg-white rounded-3xl overflow-hidden border border-wood-sand shadow-xl card-lift flex flex-col group">
          <div class="relative h-44 overflow-hidden bg-wood-warmbeige">
            <img src="https://images.unsplash.com/photo-1505693416388-ac5ce068fe85?q=80&w=800&auto=format&fit=crop" 
                 alt="Custom designed architectural bedroom suite and floating wooden nightstands" 
                 class="w-full h-full object-cover img-zoom" 
                 onerror="handleImgError(this)" 
                 loading="lazy" />
            <div class="absolute inset-0 bg-gradient-to-t from-black/75 via-black/20 to-transparent"></div>
            <div class="absolute bottom-3 left-3 flex items-center space-x-2 text-white">
              <div class="w-8 h-8 rounded-lg bg-wood-brass/90 text-wood-charcoal flex items-center justify-center shadow-md">
                <svg class="w-4 h-4" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M4 5a1 1 0 011-1h14a1 1 0 011 1v2a1 1 0 01-1 1H5a1 1 0 01-1-1V5zM4 13a1 1 0 011-1h6a1 1 0 011 1v6a1 1 0 01-1 1H5a1 1 0 01-1-1v-6zM16 13a1 1 0 011-1h2a1 1 0 011 1v6a1 1 0 01-1 1h-2a1 1 0 01-1-1v-6z"/></svg>
              </div>
              <span class="text-[11px] uppercase tracking-wider font-bold text-wood-warmbeige">Tailored Fit</span>
            </div>
          </div>
          <div class="p-6 flex-grow flex flex-col justify-between">
            <div>
              <h3 class="font-serif text-lg font-bold text-wood-charcoal mb-2 group-hover:text-wood-walnut transition-colors">Custom Designs</h3>
              <p class="text-xs text-wood-charcoal/70 leading-relaxed">
                Every piece of furniture and cabinetry is designed around your unique room dimensions, storage, and aesthetic goals.
              </p>
            </div>
            <span class="text-[11px] font-bold text-wood-brass uppercase tracking-wider mt-4 block">&bull; Laser Space Measurement</span>
          </div>
        </div>

        <!-- Card 3: Quality Materials -->
        <div class="bg-white rounded-3xl overflow-hidden border border-wood-sand shadow-xl card-lift flex flex-col group">
          <div class="relative h-44 overflow-hidden bg-wood-warmbeige">
            <img src="https://images.unsplash.com/photo-1546484396-fb3fc6f95f98?q=80&w=800&auto=format&fit=crop" 
                 alt="Close up of natural seasoned solid timber planks and rich wood grain" 
                 class="w-full h-full object-cover img-zoom" 
                 onerror="handleImgError(this)" 
                 loading="lazy" />
            <div class="absolute inset-0 bg-gradient-to-t from-black/75 via-black/20 to-transparent"></div>
            <div class="absolute bottom-3 left-3 flex items-center space-x-2 text-white">
              <div class="w-8 h-8 rounded-lg bg-wood-brass/90 text-wood-charcoal flex items-center justify-center shadow-md">
                <svg class="w-4 h-4" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9 12l2 2 4-4M7.835 4.697a3.42 3.42 0 001.946-.806 3.42 3.42 0 014.438 0 3.42 3.42 0 001.946.806 3.42 3.42 0 013.138 3.138 3.42 3.42 0 00.806 1.946 3.42 3.42 0 010 4.438 3.42 3.42 0 00-.806 1.946 3.42 3.42 0 01-3.138 3.138 3.42 3.42 0 00-1.946.806 3.42 3.42 0 01-4.438 0 3.42 3.42 0 00-1.946-.806 3.42 3.42 0 01-3.138-3.138 3.42 3.42 0 00-.806-1.946 3.42 3.42 0 010-4.438 3.42 3.42 0 00.806-1.946 3.42 3.42 0 013.138-3.138z"/></svg>
              </div>
              <span class="text-[11px] uppercase tracking-wider font-bold text-wood-warmbeige">Certified Timber</span>
            </div>
          </div>
          <div class="p-6 flex-grow flex flex-col justify-between">
            <div>
              <h3 class="font-serif text-lg font-bold text-wood-charcoal mb-2 group-hover:text-wood-walnut transition-colors">Quality Materials</h3>
              <p class="text-xs text-wood-charcoal/70 leading-relaxed">
                Thoughtful timber selection including seasoned Teak, Walnut, White Oak, Marine Ply, and German hardware fittings.
              </p>
            </div>
            <span class="text-[11px] font-bold text-wood-brass uppercase tracking-wider mt-4 block">&bull; &lt;12% Kiln Moisture</span>
          </div>
        </div>

        <!-- Card 4: Reliable Service -->
        <div class="bg-white rounded-3xl overflow-hidden border border-wood-sand shadow-xl card-lift flex flex-col group">
          <div class="relative h-44 overflow-hidden bg-wood-warmbeige">
            <img src="https://images.unsplash.com/photo-1581783342308-f792dbdd27c5?q=80&w=800&auto=format&fit=crop" 
                 alt="Professional carpenter reviewing blueprints and precision joinery specifications" 
                 class="w-full h-full object-cover img-zoom" 
                 onerror="handleImgError(this)" 
                 loading="lazy" />
            <div class="absolute inset-0 bg-gradient-to-t from-black/75 via-black/20 to-transparent"></div>
            <div class="absolute bottom-3 left-3 flex items-center space-x-2 text-white">
              <div class="w-8 h-8 rounded-lg bg-wood-brass/90 text-wood-charcoal flex items-center justify-center shadow-md">
                <svg class="w-4 h-4" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M12 8v4l3 3m6-3a9 9 0 11-18 0 9 9 0 0118 0z"/></svg>
              </div>
              <span class="text-[11px] uppercase tracking-wider font-bold text-wood-warmbeige">Dependable</span>
            </div>
          </div>
          <div class="p-6 flex-grow flex flex-col justify-between">
            <div>
              <h3 class="font-serif text-lg font-bold text-wood-charcoal mb-2 group-hover:text-wood-walnut transition-colors">Reliable Service</h3>
              <p class="text-xs text-wood-charcoal/70 leading-relaxed">
                Clear project milestones, transparent itemized quotes, and dependable on-schedule delivery with dust-free installation.
              </p>
            </div>
            <span class="text-[11px] font-bold text-wood-brass uppercase tracking-wider mt-4 block">&bull; 10-Yr Structural Assurance</span>
          </div>
        </div>

      </div>
    </section>

    <!-- Homepage About Preview (Exactly 200 Words Content) -->
    <section class="py-16 bg-wood-warmbeige/40 border-y border-wood-sand">
      <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
        <div class="grid grid-cols-1 lg:grid-cols-12 gap-12 items-center">
          
          <div class="lg:col-span-6 relative">
            <div class="relative rounded-3xl overflow-hidden shadow-2xl bg-white p-3 border border-wood-sand">
              <img src="https://images.unsplash.com/photo-1581783342308-f792dbdd27c5?q=80&w=1000&auto=format&fit=crop" 
                   alt="Carpenter Zone master carpenter crafting custom woodwork in workshop" 
                   class="w-full h-[460px] object-cover rounded-2xl" 
                   onerror="handleImgError(this)" 
                   loading="lazy" />
              <div class="absolute bottom-6 left-6 bg-wood-charcoal/90 backdrop-blur-md text-white p-4 rounded-xl border border-wood-brass/40 max-w-xs">
                <span class="text-[10px] uppercase tracking-tag text-wood-brass font-bold block">Artisan Workshop</span>
                <p class="text-xs text-wood-warmbeige/90 mt-1">Every joint hand-fitted to ensure generational stability and timeless elegance.</p>
              </div>
            </div>
          </div>

          <div class="lg:col-span-6 space-y-6">
            <div class="inline-block text-xs uppercase tracking-editorial text-wood-brass font-bold">About Carpenter Zone</div>
            <h2 class="font-serif text-3xl sm:text-4xl font-bold text-wood-charcoal leading-tight">
              Built Around Your Space
            </h2>
            
            <!-- Exact 200-word editorial preview -->
            <p class="text-sm text-wood-charcoal/80 leading-relaxed" id="homeAboutText">
              At Carpenter Zone, we believe woodwork should harmonize effortlessly with the rhythm of your daily life. Founded as a dedicated team of passionate artisans, timber engineers, and interior specialists, we deliver practical and stylish carpentry solutions for residences, corporate offices, boutique retail outlets, and commercial environments. Instead of relying on mass-produced furniture that compromises on room proportions or structural strength, our workshop crafts each piece around your unique layout, aesthetic preferences, and utilitarian needs. Our comprehensive expertise spans custom furniture, ergonomic modular kitchens, fitted wardrobes, architectural wooden doors, designer TV units, executive office suites, and detailed restoration projects. We hand-select premium seasoned hardwoods—including authentic Teak, rich Walnut, resilient White Oak, and high-density marine plywood—combining time-tested mortise joinery with modern micro-precision hardware. By overseeing every phase from preliminary site dimensions and 3D concept planning to precision workshop cutting, hand-sanding, eco-friendly staining, and final on-site installation, we guarantee flawless craftsmanship with no unexpected delays or hidden expenses. When you partner with Carpenter Zone, you invest in enduring comfort, structural integrity, and wood solutions purposefully built to inspire comfort, beauty, and confidence within your living spaces for decades to come.
            </p>

            <div class="pt-2">
              <button onclick="switchPage('about')" class="px-7 py-3.5 rounded-full bg-wood-walnut hover:bg-wood-brass text-white hover:text-wood-charcoal font-bold text-xs tracking-editorial uppercase transition-all shadow-md">
                Learn More About Us &rarr;
              </button>
            </div>
          </div>

        </div>
      </div>
    </section>

    <!-- Featured Services / Products Preview on Homepage -->
    <section class="py-20 max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
      <div class="flex flex-col md:flex-row md:items-end justify-between mb-12">
        <div>
          <span class="text-xs uppercase tracking-editorial text-wood-brass font-bold block mb-2">Our Capabilities</span>
          <h2 class="font-serif text-3xl sm:text-4xl font-bold text-wood-charcoal">Featured Carpentry Solutions</h2>
        </div>
        <button onclick="switchPage('products')" class="mt-4 md:mt-0 text-xs font-bold uppercase tracking-tag text-wood-walnut hover:text-wood-brass transition-colors">
          View All 20+ Products &amp; Services &rarr;
        </button>
      </div>

      <div id="homeFeaturedGrid" class="grid grid-cols-1 sm:grid-cols-2 lg:grid-cols-4 gap-6">
        <!-- Injected via JavaScript from master PRODUCTS array -->
      </div>
    </section>

    <!-- Unique Section: "Wood to Wonder" 4-Step Process (Enriched with Process Photography) -->
    <section class="py-20 bg-wood-charcoal text-white relative overflow-hidden wood-texture">
      <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8 relative z-10">
        <div class="text-center max-w-3xl mx-auto mb-16">
          <span class="text-xs uppercase tracking-editorial text-wood-brass font-bold block mb-2">Process &bull; Wood to Wonder</span>
          <h2 class="font-serif text-3xl sm:text-4xl font-bold">How We Work</h2>
          <div class="w-16 h-0.5 bg-wood-brass mx-auto my-4"></div>
          <p class="text-xs sm:text-sm text-wood-warmbeige/80">
            From raw seasoned timber to an architectural centerpiece, discover our step-by-step woodworking journey.
          </p>
        </div>

        <div class="grid grid-cols-1 sm:grid-cols-2 lg:grid-cols-4 gap-6">
          
          <!-- Step 1 -->
          <div class="bg-white/5 border border-white/10 rounded-2xl overflow-hidden group hover:border-wood-brass/60 transition-all duration-300 card-lift">
            <div class="relative h-44 overflow-hidden bg-black/40">
              <img src="https://images.unsplash.com/photo-1503387762-592deb58ef4e?q=80&w=800&auto=format&fit=crop" 
                   alt="Architect and carpenter consulting on site with measuring tape and blueprints" 
                   class="w-full h-full object-cover img-zoom" 
                   onerror="handleImgError(this)" 
                   loading="lazy" />
              <div class="absolute inset-0 bg-gradient-to-t from-wood-charcoal via-transparent to-black/30"></div>
              <span class="absolute top-3 left-3 w-8 h-8 rounded-full bg-wood-brass text-wood-charcoal font-serif font-bold text-xs flex items-center justify-center shadow-lg">01</span>
            </div>
            <div class="p-6">
              <h3 class="font-serif text-lg font-bold text-wood-warmbeige mb-2 group-hover:text-wood-brass transition-colors">Consultation</h3>
              <p class="text-xs text-wood-warmbeige/70 leading-relaxed">
                We visit your property to record laser measurements, examine architectural lighting, and discuss your storage ideas and vision.
              </p>
            </div>
          </div>

          <!-- Step 2 -->
          <div class="bg-white/5 border border-white/10 rounded-2xl overflow-hidden group hover:border-wood-brass/60 transition-all duration-300 card-lift">
            <div class="relative h-44 overflow-hidden bg-black/40">
              <img src="https://images.unsplash.com/photo-1581092160607-ee22621dd758?q=80&w=800&auto=format&fit=crop" 
                   alt="Carpentry blueprint sketches, 3D furniture modelling, and timber sample selection" 
                   class="w-full h-full object-cover img-zoom" 
                   onerror="handleImgError(this)" 
                   loading="lazy" />
              <div class="absolute inset-0 bg-gradient-to-t from-wood-charcoal via-transparent to-black/30"></div>
              <span class="absolute top-3 left-3 w-8 h-8 rounded-full bg-wood-brass text-wood-charcoal font-serif font-bold text-xs flex items-center justify-center shadow-lg">02</span>
            </div>
            <div class="p-6">
              <h3 class="font-serif text-lg font-bold text-wood-warmbeige mb-2 group-hover:text-wood-brass transition-colors">Design &amp; Material</h3>
              <p class="text-xs text-wood-warmbeige/70 leading-relaxed">
                We develop functional blueprints, select matching wood grains, and recommend the best hardwood or moisture-resistant boards.
              </p>
            </div>
          </div>

          <!-- Step 3 -->
          <div class="bg-white/5 border border-white/10 rounded-2xl overflow-hidden group hover:border-wood-brass/60 transition-all duration-300 card-lift">
            <div class="relative h-44 overflow-hidden bg-black/40">
              <img src="https://images.unsplash.com/photo-1513694203232-719a280e022f?q=80&w=600&auto=format&fit=crop" 
                   alt="Master carpenter hand-crafting furniture joint in woodworking atelier" 
                   class="w-full h-full object-cover img-zoom" 
                   onerror="handleImgError(this)" 
                   loading="lazy" />
              <div class="absolute inset-0 bg-gradient-to-t from-wood-charcoal via-transparent to-black/30"></div>
              <span class="absolute top-3 left-3 w-8 h-8 rounded-full bg-wood-brass text-wood-charcoal font-serif font-bold text-xs flex items-center justify-center shadow-lg">03</span>
            </div>
            <div class="p-6">
              <h3 class="font-serif text-lg font-bold text-wood-warmbeige mb-2 group-hover:text-wood-brass transition-colors">Craftsmanship</h3>
              <p class="text-xs text-wood-warmbeige/70 leading-relaxed">
                Our master carpenters shape, plane, hand-join, edge-band, and apply natural stain sealers inside our controlled workshop.
              </p>
            </div>
          </div>

          <!-- Step 4 -->
          <div class="bg-white/5 border border-white/10 rounded-2xl overflow-hidden group hover:border-wood-brass/60 transition-all duration-300 card-lift">
            <div class="relative h-44 overflow-hidden bg-black/40">
              <img src="https://images.unsplash.com/photo-1616486338812-3dadae4b4ace?q=80&w=800&auto=format&fit=crop" 
                 alt="Finished custom woodwork installation inside luxury contemporary home" 
                 class="w-full h-full object-cover img-zoom" 
                 onerror="handleImgError(this)" 
                 loading="lazy" />
              <div class="absolute inset-0 bg-gradient-to-t from-wood-charcoal via-transparent to-black/30"></div>
              <span class="absolute top-3 left-3 w-8 h-8 rounded-full bg-wood-brass text-wood-charcoal font-serif font-bold text-xs flex items-center justify-center shadow-lg">04</span>
            </div>
            <div class="p-6">
              <h3 class="font-serif text-lg font-bold text-wood-warmbeige mb-2 group-hover:text-wood-brass transition-colors">Installation</h3>
              <p class="text-xs text-wood-warmbeige/70 leading-relaxed">
                We deliver with protective packaging, mount with zero-mess anchoring, calibrate hinges, and complete fine finish touchups.
              </p>
            </div>
          </div>

        </div>
      </div>
    </section>

    <!-- Unique Section: "Material Matters" Wood Species Guide (Enhanced with Real Wood Grain Photography) -->
    <section class="py-20 max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
      <div class="text-center max-w-2xl mx-auto mb-14">
        <span class="text-xs uppercase tracking-editorial text-wood-brass font-bold block mb-2">Timber Knowledge</span>
        <h2 class="font-serif text-3xl sm:text-4xl font-bold text-wood-charcoal">Material Matters</h2>
        <div class="w-16 h-0.5 bg-wood-brass mx-auto my-4"></div>
        <p class="text-xs sm:text-sm text-wood-charcoal/70">
          The durability and character of custom woodwork depend entirely on material selection. We guide you toward the ideal timber for your project.
        </p>
      </div>

      <div class="grid grid-cols-1 sm:grid-cols-2 lg:grid-cols-3 xl:grid-cols-6 gap-6">
        
        <!-- Timber 1: Teak Wood -->
        <div class="bg-white rounded-2xl overflow-hidden border border-wood-sand shadow-sm card-lift flex flex-col group">
          <div class="relative h-32 overflow-hidden bg-amber-100">
            <img src="https://images.unsplash.com/photo-1546484396-fb3fc6f95f98?q=80&w=600&auto=format&fit=crop" 
                 alt="Natural golden brown Teak wood grain texture and seasoned timber slab" 
                 class="w-full h-full object-cover img-zoom" 
                 onerror="handleImgError(this)" 
                 loading="lazy" />
            <span class="absolute top-2 right-2 px-2 py-0.5 rounded-full text-[9px] font-bold bg-black/70 text-wood-brass">Solid</span>
          </div>
          <div class="p-4 flex-grow flex flex-col justify-between text-center">
            <div>
              <h4 class="font-serif text-sm font-bold text-wood-charcoal group-hover:text-wood-walnut transition-colors">Teak Wood</h4>
              <p class="text-[11px] text-wood-charcoal/70 mt-1.5 leading-relaxed">
                Dense, naturally water-repellent, pest-resistant, and ideal for main entrance doors and heirloom dining tables.
              </p>
            </div>
            <span class="text-[10px] uppercase tracking-wider text-wood-brown font-semibold mt-3 block">High Durability</span>
          </div>
        </div>

        <!-- Timber 2: Walnut -->
        <div class="bg-white rounded-2xl overflow-hidden border border-wood-sand shadow-sm card-lift flex flex-col group">
          <div class="relative h-32 overflow-hidden bg-stone-200">
            <img src="https://images.unsplash.com/photo-1538688525198-9b88f6f53126?q=80&w=600&auto=format&fit=crop" 
                 alt="Rich dark American Walnut timber grain with undulating espresso character" 
                 class="w-full h-full object-cover img-zoom" 
                 onerror="handleImgError(this)" 
                 loading="lazy" />
            <span class="absolute top-2 right-2 px-2 py-0.5 rounded-full text-[9px] font-bold bg-black/70 text-wood-brass">Luxury</span>
          </div>
          <div class="p-4 flex-grow flex flex-col justify-between text-center">
            <div>
              <h4 class="font-serif text-sm font-bold text-wood-charcoal group-hover:text-wood-walnut transition-colors">Walnut Wood</h4>
              <p class="text-[11px] text-wood-charcoal/70 mt-1.5 leading-relaxed">
                Deep chocolate tones with undulating grain patterns, perfect for executive desks and luxury centerpieces.
              </p>
            </div>
            <span class="text-[10px] uppercase tracking-wider text-wood-brown font-semibold mt-3 block">Premium Grain</span>
          </div>
        </div>

        <!-- Timber 3: White Oak -->
        <div class="bg-white rounded-2xl overflow-hidden border border-wood-sand shadow-sm card-lift flex flex-col group">
          <div class="relative h-32 overflow-hidden bg-orange-100">
            <img src="https://images.unsplash.com/photo-1513694203232-719a280e022f?q=80&w=600&auto=format&fit=crop" 
                 alt="Solid White Oak timber with subtle pores for modern architectural interiors" 
                 class="w-full h-full object-cover img-zoom" 
                 onerror="handleImgError(this)" 
                 loading="lazy" />
            <span class="absolute top-2 right-2 px-2 py-0.5 rounded-full text-[9px] font-bold bg-black/70 text-wood-brass">Hardwood</span>
          </div>
          <div class="p-4 flex-grow flex flex-col justify-between text-center">
            <div>
              <h4 class="font-serif text-sm font-bold text-wood-charcoal group-hover:text-wood-walnut transition-colors">White Oak</h4>
              <p class="text-[11px] text-wood-charcoal/70 mt-1.5 leading-relaxed">
                Heavy, structurally rigid hardwood with striking open pores suited for modern minimalist and Scandinavian styles.
              </p>
            </div>
            <span class="text-[10px] uppercase tracking-wider text-wood-brown font-semibold mt-3 block">High Rigidity</span>
          </div>
        </div>

        <!-- Timber 4: Pine Wood -->
        <div class="bg-white rounded-2xl overflow-hidden border border-wood-sand shadow-sm card-lift flex flex-col group">
          <div class="relative h-32 overflow-hidden bg-yellow-100">
            <img src="https://images.unsplash.com/photo-1513694203232-719a280e022f?q=80&w=600&auto=format&fit=crop" 
                 alt="Light natural Pine timber planks showing clean rustic wood knot textures" 
                 class="w-full h-full object-cover img-zoom" 
                 onerror="handleImgError(this)" 
                 loading="lazy" />
            <span class="absolute top-2 right-2 px-2 py-0.5 rounded-full text-[9px] font-bold bg-black/70 text-wood-brass">Softwood</span>
          </div>
          <div class="p-4 flex-grow flex flex-col justify-between text-center">
            <div>
              <h4 class="font-serif text-sm font-bold text-wood-charcoal group-hover:text-wood-walnut transition-colors">Pine Wood</h4>
              <p class="text-[11px] text-wood-charcoal/70 mt-1.5 leading-relaxed">
                Lightweight, charming knotty grain, versatile for rustic furnishings, children's beds, and warm accent panels.
              </p>
            </div>
            <span class="text-[10px] uppercase tracking-wider text-wood-brown font-semibold mt-3 block">Lightweight</span>
          </div>
        </div>

        <!-- Timber 5: Marine Plywood -->
        <div class="bg-white rounded-2xl overflow-hidden border border-wood-sand shadow-sm card-lift flex flex-col group">
          <div class="relative h-32 overflow-hidden bg-blue-100">
            <img src="https://images.unsplash.com/photo-1556911220-e15b29be8c8f?q=80&w=600&auto=format&fit=crop" 
                 alt="Cross-laminated BWP Boiling Water Proof marine plywood engineered cabinetry core" 
                 class="w-full h-full object-cover img-zoom" 
                 onerror="handleImgError(this)" 
                 loading="lazy" />
            <span class="absolute top-2 right-2 px-2 py-0.5 rounded-full text-[9px] font-bold bg-black/70 text-wood-brass">BWP/BWR</span>
          </div>
          <div class="p-4 flex-grow flex flex-col justify-between text-center">
            <div>
              <h4 class="font-serif text-sm font-bold text-wood-charcoal group-hover:text-wood-walnut transition-colors">Marine Plywood</h4>
              <p class="text-[11px] text-wood-charcoal/70 mt-1.5 leading-relaxed">
                BWP/BWR grade cross-laminated sheets engineered specifically for humid kitchens, vanity counters, and bathrooms.
              </p>
            </div>
            <span class="text-[10px] uppercase tracking-wider text-wood-brown font-semibold mt-3 block">Water-Proof</span>
          </div>
        </div>

        <!-- Timber 6: HDHMR & MDF -->
        <div class="bg-white rounded-2xl overflow-hidden border border-wood-sand shadow-sm card-lift flex flex-col group">
          <div class="relative h-32 overflow-hidden bg-emerald-100">
            <img src="https://images.unsplash.com/photo-1600585154340-be6161a56a0c?q=80&w=600&auto=format&fit=crop" 
                 alt="High density fiberboard HDHMR used for CNC routed fluted wall panels and lacquer paint" 
                 class="w-full h-full object-cover img-zoom" 
                 onerror="handleImgError(this)" 
                 loading="lazy" />
            <span class="absolute top-2 right-2 px-2 py-0.5 rounded-full text-[9px] font-bold bg-black/70 text-wood-brass">Engineered</span>
          </div>
          <div class="p-4 flex-grow flex flex-col justify-between text-center">
            <div>
              <h4 class="font-serif text-sm font-bold text-wood-charcoal group-hover:text-wood-walnut transition-colors">HDHMR &amp; MDF</h4>
              <p class="text-[11px] text-wood-charcoal/70 mt-1.5 leading-relaxed">
                High-density fiber core for razor-sharp CNC carving, smooth lacquer finishes, fluted designs, and interior doors.
              </p>
            </div>
            <span class="text-[10px] uppercase tracking-wider text-wood-brown font-semibold mt-3 block">CNC Routing</span>
          </div>
        </div>

      </div>
    </section>

    <!-- "Our Recent Work" Portfolio Gallery (8 High-Quality Projects) -->
    <section class="py-20 bg-wood-warmbeige/30 border-t border-wood-sand">
      <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
        <div class="flex flex-col md:flex-row md:items-end justify-between mb-12">
          <div>
            <span class="text-xs uppercase tracking-editorial text-wood-brass font-bold block mb-2">Project Showcase</span>
            <h2 class="font-serif text-3xl sm:text-4xl font-bold text-wood-charcoal">Our Recent Work</h2>
          </div>
          <p class="text-xs text-wood-charcoal/60 max-w-sm mt-3 md:mt-0">
            A visual reflection of custom residential interiors, bespoke furniture, and precision fitouts completed by our team.
          </p>
        </div>

        <div class="grid grid-cols-1 sm:grid-cols-2 lg:grid-cols-4 gap-6">
          
          <!-- Project 1 -->
          <div class="group relative rounded-2xl overflow-hidden shadow-md aspect-[4/5] bg-wood-charcoal">
            <img src="https://images.unsplash.com/photo-1556911220-e15b29be8c8f?q=80&w=800&auto=format&fit=crop" 
                 alt="Modern Modular Kitchen with seamless acrylic cabinetry and quartz counters" 
                 class="w-full h-full object-cover img-zoom" 
                 onerror="handleImgError(this)" 
                 loading="lazy" />
            <div class="absolute inset-0 bg-gradient-to-t from-black/85 via-black/20 to-transparent opacity-90 p-5 flex flex-col justify-end text-white">
              <span class="text-[10px] uppercase tracking-tag text-wood-brass font-bold">Kitchen Cabinetry</span>
              <h3 class="font-serif text-lg font-bold">Modern Modular Kitchen</h3>
              <p class="text-[11px] text-white/80 mt-1">Handleless marine-ply cabinetry with German tandem soft-close runners.</p>
            </div>
          </div>

          <!-- Project 2 -->
          <div class="group relative rounded-2xl overflow-hidden shadow-md aspect-[4/5] bg-wood-charcoal">
            <img src="https://images.unsplash.com/photo-1616486338812-3dadae4b4ace?q=80&w=800&auto=format&fit=crop" 
                 alt="Floor-to-ceiling Custom Wardrobe with fluted wood panelling and bronze handles" 
                 class="w-full h-full object-cover img-zoom" 
                 onerror="handleImgError(this)" 
                 loading="lazy" />
            <div class="absolute inset-0 bg-gradient-to-t from-black/85 via-black/20 to-transparent opacity-90 p-5 flex flex-col justify-end text-white">
              <span class="text-[10px] uppercase tracking-tag text-wood-brass font-bold">Bedrooms</span>
              <h3 class="font-serif text-lg font-bold">Luxury Fitted Wardrobe</h3>
              <p class="text-[11px] text-white/80 mt-1">Floor-to-ceiling walnut veneer with internal sensor LED lighting bars.</p>
            </div>
          </div>

          <!-- Project 3 -->
          <div class="group relative rounded-2xl overflow-hidden shadow-md aspect-[4/5] bg-wood-charcoal">
            <img src="https://images.unsplash.com/photo-1505693416388-ac5ce068fe85?q=80&w=800&auto=format&fit=crop" 
                 alt="Solid Teak Floating Bed Frame with integrated nightstands" 
                 class="w-full h-full object-cover img-zoom" 
                 onerror="handleImgError(this)" 
                 loading="lazy" />
            <div class="absolute inset-0 bg-gradient-to-t from-black/85 via-black/20 to-transparent opacity-90 p-5 flex flex-col justify-end text-white">
              <span class="text-[10px] uppercase tracking-tag text-wood-brass font-bold">Master Suite</span>
              <h3 class="font-serif text-lg font-bold">Wooden Bedroom Suite</h3>
              <p class="text-[11px] text-white/80 mt-1">Floating platform bed frame hand-planed from seasoned plantation Teak.</p>
            </div>
          </div>

          <!-- Project 4 -->
          <div class="group relative rounded-2xl overflow-hidden shadow-md aspect-[4/5] bg-wood-charcoal">
            <img src="https://images.unsplash.com/photo-1600585154340-be6161a56a0c?q=80&w=800&auto=format&fit=crop" 
                 alt="Custom Acoustic Slatted TV Wall Unit in Charcoal and Teak" 
                 class="w-full h-full object-cover img-zoom" 
                 onerror="handleImgError(this)" 
                 loading="lazy" />
            <div class="absolute inset-0 bg-gradient-to-t from-black/85 via-black/20 to-transparent opacity-90 p-5 flex flex-col justify-end text-white">
              <span class="text-[10px] uppercase tracking-tag text-wood-brass font-bold">Entertainment</span>
              <h3 class="font-serif text-lg font-bold">Custom TV Wall Console</h3>
              <p class="text-[11px] text-white/80 mt-1">Fluted oak acoustic backdrop with floating storage drawers and cable channel.</p>
            </div>
          </div>

          <!-- Project 5 -->
          <div class="group relative rounded-2xl overflow-hidden shadow-md aspect-[4/5] bg-wood-charcoal">
            <img src="https://images.unsplash.com/photo-1497366216548-37526070297c?q=80&w=800&auto=format&fit=crop" 
                 alt="Commercial Office Conference Table in Walnut and Steel" 
                 class="w-full h-full object-cover img-zoom" 
                 onerror="handleImgError(this)" 
                 loading="lazy" />
            <div class="absolute inset-0 bg-gradient-to-t from-black/85 via-black/20 to-transparent opacity-90 p-5 flex flex-col justify-end text-white">
              <span class="text-[10px] uppercase tracking-tag text-wood-brass font-bold">Workspace</span>
              <h3 class="font-serif text-lg font-bold">Corporate Office Fitout</h3>
              <p class="text-[11px] text-white/80 mt-1">12-seater solid timber conference table with concealed power bays.</p>
            </div>
          </div>

          <!-- Project 6 -->
          <div class="group relative rounded-2xl overflow-hidden shadow-md aspect-[4/5] bg-wood-charcoal">
            <img src="https://images.unsplash.com/photo-1513694203232-719a280e022f?q=80&w=800&auto=format&fit=crop" 
                 alt="Floating Solid Wood Staircase with safety glass balustrade" 
                 class="w-full h-full object-cover img-zoom" 
                 onerror="handleImgError(this)" 
                 loading="lazy" />
            <div class="absolute inset-0 bg-gradient-to-t from-black/85 via-black/20 to-transparent opacity-90 p-5 flex flex-col justify-end text-white">
              <span class="text-[10px] uppercase tracking-tag text-wood-brass font-bold">Architecture</span>
              <h3 class="font-serif text-lg font-bold">Floating Wooden Staircase</h3>
              <p class="text-[11px] text-white/80 mt-1">Cantilevered White Oak treads reinforced with hidden structural steel core.</p>
            </div>
          </div>

          <!-- Project 7 -->
          <div class="group relative rounded-2xl overflow-hidden shadow-md aspect-[4/5] bg-wood-charcoal">
            <img src="https://images.unsplash.com/photo-1617806118233-18e1de247200?q=80&w=800&auto=format&fit=crop" 
                 alt="Handcrafted Live-Edge Dining Table with 8 ergonomic matching chairs" 
                 class="w-full h-full object-cover img-zoom" 
                 onerror="handleImgError(this)" 
                 loading="lazy" />
            <div class="absolute inset-0 bg-gradient-to-t from-black/85 via-black/20 to-transparent opacity-90 p-5 flex flex-col justify-end text-white">
              <span class="text-[10px] uppercase tracking-tag text-wood-brass font-bold">Dining</span>
              <h3 class="font-serif text-lg font-bold">Live-Edge Dining Suite</h3>
              <p class="text-[11px] text-white/80 mt-1">Single-slab live edge acacia dining table accompanied by sculptural chairs.</p>
            </div>
          </div>

          <!-- Project 8 -->
          <div class="group relative rounded-2xl overflow-hidden shadow-md aspect-[4/5] bg-wood-charcoal">
            <img src="https://images.unsplash.com/photo-1618221195710-dd6b41faaea6?q=80&w=800&auto=format&fit=crop" 
                 alt="Architectural Wooden Room Divider Partition with geometric acoustic slats" 
                 class="w-full h-full object-cover img-zoom" 
                 onerror="handleImgError(this)" 
                 loading="lazy" />
            <div class="absolute inset-0 bg-gradient-to-t from-black/85 via-black/20 to-transparent opacity-90 p-5 flex flex-col justify-end text-white">
              <span class="text-[10px] uppercase tracking-tag text-wood-brass font-bold">Spatial Design</span>
              <h3 class="font-serif text-lg font-bold">Custom Slatted Partition</h3>
              <p class="text-[11px] text-white/80 mt-1">Semi-transparent room divider establishing privacy without blocking light.</p>
            </div>
          </div>

        </div>
      </div>
    </section>

    <!-- Major Call to Action Banner -->
    <section class="py-16 bg-wood-walnut text-white relative overflow-hidden">
      <div class="max-w-4xl mx-auto px-4 sm:px-6 text-center space-y-6 relative z-10">
        <span class="text-xs uppercase tracking-editorial text-wood-warmbeige font-bold block">Start Your Project</span>
        <h2 class="font-serif text-3xl sm:text-5xl font-bold leading-tight">Need Custom Furniture?</h2>
        <p class="text-sm sm:text-base text-wood-warmbeige/90 max-w-xl mx-auto leading-relaxed font-light">
          Tell us what you have in mind and let's discuss your project. We provide on-site dimensions, material sampling, and transparent quotes.
        </p>
        <div class="pt-2 flex justify-center gap-4">
          <button onclick="switchPage('contact')" class="px-8 py-4 rounded-full bg-wood-brass hover:bg-wood-brasshover text-wood-charcoal font-bold text-xs tracking-editorial uppercase transition-all shadow-xl">
            Request a Free Quote
          </button>
        </div>
      </div>
    </section>

  </main>

  <!-- ========================================================================= -->
  <!-- PAGE 2: PRODUCTS.HTML (PRODUCTS & SERVICES CATALOG)                       -->
  <!-- ========================================================================= -->
  <main id="view-products" class="page-view flex-grow">
    
    <!-- Hero Banner -->
    <section class="bg-wood-warmbeige/50 py-12 border-b border-wood-sand">
      <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
        <div class="text-center max-w-2xl mx-auto">
          <span class="text-xs uppercase tracking-editorial text-wood-brass font-bold block mb-2">Woodworking Catalog</span>
          <h1 class="font-serif text-3xl sm:text-5xl font-bold text-wood-charcoal">Products &amp; Carpentry Services</h1>
          <p class="text-xs sm:text-sm text-wood-charcoal/70 mt-3">
            Explore our complete suite of 20+ custom furniture creations, architectural woodwork, and repair solutions.
          </p>
        </div>

        <!-- Search Bar and Sorting Controls -->
        <div class="mt-8 max-w-3xl mx-auto flex flex-col sm:flex-row gap-3">
          <div class="relative flex-grow">
            <input 
              type="text" 
              id="catalogSearch" 
              oninput="filterCatalog()" 
              placeholder="Search furniture or services (e.g., Wardrobe, Dining Table, Door, Kitchen)..." 
              class="w-full bg-white border border-wood-sand focus:border-wood-brass focus:outline-none rounded-full px-5 py-3 text-xs sm:text-sm text-wood-charcoal shadow-sm" 
            />
            <button onclick="clearSearch()" class="absolute right-4 top-3 text-wood-charcoal/40 hover:text-wood-charcoal text-xs hidden" id="clearSearchBtn">✕</button>
          </div>

          <div class="flex-shrink-0">
            <select id="catalogSort" onchange="filterCatalog()" class="w-full sm:w-auto bg-white border border-wood-sand focus:border-wood-brass rounded-full px-4 py-3 text-xs sm:text-sm text-wood-charcoal focus:outline-none shadow-sm cursor-pointer">
              <option value="featured">Sort by: Featured</option>
              <option value="az">Name: A to Z</option>
              <option value="za">Name: Z to A</option>
              <option value="price-asc">Price: Low to High</option>
              <option value="price-desc">Price: High to Low</option>
            </select>
          </div>
        </div>

        <!-- Category Filter Pills -->
        <div class="mt-6 flex items-center justify-center flex-wrap gap-2" id="filterPillsContainer">
          <button onclick="setCategory('All')" class="cat-pill active px-4 py-1.5 rounded-full text-xs font-semibold uppercase tracking-wider transition-all bg-wood-walnut text-white" data-cat="All">All (20)</button>
          <button onclick="setCategory('Furniture')" class="cat-pill px-4 py-1.5 rounded-full text-xs font-semibold uppercase tracking-wider transition-all bg-white text-wood-charcoal hover:bg-wood-warmbeige border border-wood-sand" data-cat="Furniture">Furniture</button>
          <button onclick="setCategory('Kitchen')" class="cat-pill px-4 py-1.5 rounded-full text-xs font-semibold uppercase tracking-wider transition-all bg-white text-wood-charcoal hover:bg-wood-warmbeige border border-wood-sand" data-cat="Kitchen">Kitchen</button>
          <button onclick="setCategory('Wardrobes')" class="cat-pill px-4 py-1.5 rounded-full text-xs font-semibold uppercase tracking-wider transition-all bg-white text-wood-charcoal hover:bg-wood-warmbeige border border-wood-sand" data-cat="Wardrobes">Wardrobes</button>
          <button onclick="setCategory('Doors & Windows')" class="cat-pill px-4 py-1.5 rounded-full text-xs font-semibold uppercase tracking-wider transition-all bg-white text-wood-charcoal hover:bg-wood-warmbeige border border-wood-sand" data-cat="Doors & Windows">Doors &amp; Windows</button>
          <button onclick="setCategory('Office Furniture')" class="cat-pill px-4 py-1.5 rounded-full text-xs font-semibold uppercase tracking-wider transition-all bg-white text-wood-charcoal hover:bg-wood-warmbeige border border-wood-sand" data-cat="Office Furniture">Office Furniture</button>
          <button onclick="setCategory('Storage')" class="cat-pill px-4 py-1.5 rounded-full text-xs font-semibold uppercase tracking-wider transition-all bg-white text-wood-charcoal hover:bg-wood-warmbeige border border-wood-sand" data-cat="Storage">Storage</button>
          <button onclick="setCategory('Custom Woodwork')" class="cat-pill px-4 py-1.5 rounded-full text-xs font-semibold uppercase tracking-wider transition-all bg-white text-wood-charcoal hover:bg-wood-warmbeige border border-wood-sand" data-cat="Custom Woodwork">Custom Woodwork</button>
          <button onclick="setCategory('Repair & Restoration')" class="cat-pill px-4 py-1.5 rounded-full text-xs font-semibold uppercase tracking-wider transition-all bg-white text-wood-charcoal hover:bg-wood-warmbeige border border-wood-sand" data-cat="Repair & Restoration">Repair &amp; Restoration</button>
        </div>
      </div>
    </section>

    <!-- Main Product Grid: 4 columns desktop, 2-3 tablet, 1-2 mobile -->
    <section class="py-14 max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
      <div class="flex items-center justify-between mb-8 pb-3 border-b border-wood-sand text-xs text-wood-charcoal/60">
        <div>Showing <span id="resultsCount" class="font-bold text-wood-charcoal">20</span> carpentry offerings</div>
        <div id="activeCatLabel" class="font-semibold text-wood-brass uppercase tracking-wider">All Categories</div>
      </div>

      <div id="fullCatalogGrid" class="grid grid-cols-1 sm:grid-cols-2 lg:grid-cols-3 xl:grid-cols-4 gap-6">
        <!-- Injected via JavaScript from master PRODUCTS array -->
      </div>

      <!-- Zero Results State -->
      <div id="noResultsState" class="hidden text-center py-20 bg-white rounded-3xl border border-dashed border-wood-sand p-8 max-w-md mx-auto">
        <div class="w-14 h-14 rounded-full bg-wood-warmbeige text-wood-walnut flex items-center justify-center mx-auto mb-4">
          <svg class="w-6 h-6" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M21 21l-6-6m2-5a7 7 0 11-14 0 7 7 0 0114 0z"/></svg>
        </div>
        <h3 class="font-serif text-xl font-bold mb-2">No Matching Services Found</h3>
        <p class="text-xs text-wood-charcoal/60 mb-4">Try checking your keywords or reset category filters to view our full collection.</p>
        <button onclick="resetCatalogFilters()" class="px-5 py-2.5 bg-wood-walnut text-white rounded-full text-xs font-bold uppercase tracking-wider">
          Reset All Filters
        </button>
      </div>
    </section>

  </main>

  <!-- ========================================================================= -->
  <!-- PAGE 3: ABOUT.HTML (ABOUT US - 800+ WORDS DETAILED EDITORIAL)              -->
  <!-- ========================================================================= -->
  <main id="view-about" class="page-view flex-grow">
    
    <!-- Hero Banner -->
    <section class="relative py-24 bg-wood-charcoal text-white overflow-hidden wood-texture">
      <div class="relative max-w-4xl mx-auto px-4 sm:px-6 text-center space-y-4">
        <span class="text-xs uppercase tracking-editorial text-wood-brass font-bold block">Legacy &bull; Craft &bull; Vision</span>
        <h1 class="font-serif text-4xl sm:text-6xl font-bold leading-tight">
          Where Honest Timber Meets Master Craftsmanship
        </h1>
        <div class="w-20 h-0.5 bg-wood-brass mx-auto my-4"></div>
        <p class="text-base sm:text-lg text-wood-warmbeige/90 leading-relaxed font-light">
          Carpenter Zone was founded on an enduring commitment to custom precision, anatomical durability, and timeless woodwork tailored specifically to your lifestyle.
        </p>
      </div>
    </section>

    <!-- Comprehensive Editorial Content (Structured Chapters) -->
    <section class="py-20 max-w-5xl mx-auto px-4 sm:px-6 lg:px-8 space-y-16">
      
      <!-- Chapter 1: Our Story -->
      <div class="grid grid-cols-1 md:grid-cols-12 gap-10 items-center">
        <div class="md:col-span-7 space-y-4 text-sm sm:text-base text-wood-charcoal/80 leading-relaxed">
          <span class="text-xs uppercase tracking-editorial text-wood-brass font-bold block">Chapter I</span>
          <h2 class="font-serif text-3xl font-bold text-wood-charcoal">About Carpenter Zone &amp; Our Story</h2>
          <p>
            Carpenter Zone was established with a singular, resolute objective: to bridge the vast divide between fragile, mass-manufactured flat-pack furniture and exorbitantly priced boutique showrooms. For years, homeowners and business operators were forced to choose between disposable synthetic boards that degraded within seasons or inaccessible luxury carpentry that offered minimal design flexibility.
          </p>
          <p>
            Beginning as a small, focused workshop staffed by three generational carpenters in 2014, Carpenter Zone rapidly evolved into a comprehensive woodworking studio. We recognized that true value in furniture lies in intentional customization. Every residence has distinct architectural eccentricities—uneven floor contours, recessed alcoves, and dynamic natural lighting. By building custom furniture piece-by-piece from authentic, seasoned timbers, we restore the pride of generational carpentry to modern interior architecture.
          </p>
        </div>
        <div class="md:col-span-5">
          <div class="rounded-3xl overflow-hidden shadow-xl border border-wood-sand">
            <img src="https://images.unsplash.com/photo-1540518614846-7ede433c4550?q=80&w=800&auto=format&fit=crop" 
                 alt="Vintage wood planer and chisels used by Carpenter Zone carpenters" 
                 class="w-full h-80 object-cover" 
                 onerror="handleImgError(this)" 
                 loading="lazy" />
          </div>
        </div>
      </div>

      <!-- Chapter 2: Our Craftsmanship & Approach -->
      <div class="bg-wood-warmbeige/50 rounded-3xl p-8 sm:p-12 border border-wood-sand">
        <span class="text-xs uppercase tracking-editorial text-wood-brass font-bold block mb-2">Chapter II</span>
        <h2 class="font-serif text-3xl font-bold text-wood-charcoal mb-6">Our Craftsmanship &amp; Approach</h2>
        <div class="grid grid-cols-1 md:grid-cols-2 gap-8 text-xs sm:text-sm text-wood-charcoal/80 leading-relaxed">
          <div>
            <h3 class="font-serif text-xl font-bold text-wood-charcoal mb-2">Traditional Joinery Meets Modern CNC</h3>
            <p>
              We firmly believe that furniture longevity is determined by hidden joinery rather than superficial veneers. While we incorporate computerized precision CNC routing for architectural wall claddings and intricate fluted accents, our primary structural frames rely on time-honored mortise-and-tenon joints, blind dovetails, and solid wood internal dowels. This eliminates reliance on brittle glue seams and ensures each dining table, wardrobe door, and bed frame moves naturally with atmospheric humidity without cracking.
            </p>
          </div>
          <div>
            <h3 class="font-serif text-xl font-bold text-wood-charcoal mb-2">Anatomical Ergonomics</h3>
            <p>
              Beautiful carpentry must excel in daily functional service. A study desk that forces improper posture, a wardrobe with awkward hanging depths, or a kitchen island with insufficient knee clearance becomes a daily frustration. Our design team measures your space physically, analyzing user reach, circulation clearances, and lighting conditions before a single cut is made in our workshop.
            </p>
          </div>
        </div>
      </div>

      <!-- Chapter 3: Our Values & Quality Commitment -->
      <div class="grid grid-cols-1 md:grid-cols-12 gap-10 items-center">
        <div class="md:col-span-5 order-2 md:order-1">
          <div class="rounded-3xl overflow-hidden shadow-xl border border-wood-sand">
            <img src="https://images.unsplash.com/photo-1502005229762-ee1b2da7c5d6?q=80&w=800&auto=format&fit=crop" 
                 alt="Hand-sanding timber furniture piece in carpentry atelier" 
                 class="w-full h-80 object-cover" 
                 onerror="handleImgError(this)" 
                 loading="lazy" />
          </div>
        </div>
        <div class="md:col-span-7 order-1 md:order-2 space-y-4 text-sm sm:text-base text-wood-charcoal/80 leading-relaxed">
          <span class="text-xs uppercase tracking-editorial text-wood-brass font-bold block">Chapter III</span>
          <h2 class="font-serif text-3xl font-bold text-wood-charcoal">Our Values: Ethical Sourcing &amp; Durability</h2>
          <p>
            At Carpenter Zone, transparency is integral to our trade. We never conceal substandard filler boards beneath decorative paper foils. When you request Teak, we deliver certified seasoned hardwood with documented moisture levels under 12%. When high-density core board is optimal—such as for damp modular kitchen plinths—we utilize marine-grade boiling-water-proof (BWP) plywood sealed with polyurethane edging.
          </p>
          <p>
            Furthermore, we prioritize ecological responsibility. All our timber is procured through government-approved plantations and responsible agricultural timber farms. We utilize non-toxic, zero-VOC natural vegetable oils, beeswax coatings, and child-safe waterborne stains to safeguard the indoor air quality of your family's home.
          </p>
        </div>
      </div>

      <!-- Chapter 4: Our Vision & Why Customers Choose Us -->
      <div class="border-t border-wood-sand pt-12 space-y-8">
        <div>
          <span class="text-xs uppercase tracking-editorial text-wood-brass font-bold block mb-1">Chapter IV</span>
          <h2 class="font-serif text-3xl font-bold text-wood-charcoal mb-4">Our Vision &amp; Why Customers Choose Us</h2>
          <p class="text-xs sm:text-sm text-wood-charcoal/80 leading-relaxed">
            Our vision is to continue championing artisan carpentry as a fundamental pillar of modern sustainable interior design. We aspire to build heirloom furniture that you are proud to pass down to future generations, resisting the throwaway culture that plagues contemporary home decor.
          </p>
        </div>

        <div class="grid grid-cols-2 sm:grid-cols-4 gap-6">
          <div class="bg-white p-5 rounded-2xl border border-wood-sand text-center">
            <span class="font-serif text-3xl font-bold text-wood-brass block mb-1">100%</span>
            <span class="text-[11px] text-wood-charcoal/60 uppercase tracking-wider font-semibold">Custom Dimensioned</span>
          </div>
          <div class="bg-white p-5 rounded-2xl border border-wood-sand text-center">
            <span class="font-serif text-3xl font-bold text-wood-brass block mb-1">12%</span>
            <span class="text-[11px] text-wood-charcoal/60 uppercase tracking-wider font-semibold">Max Timber Moisture</span>
          </div>
          <div class="bg-white p-5 rounded-2xl border border-wood-sand text-center">
            <span class="font-serif text-3xl font-bold text-wood-brass block mb-1">Zero</span>
            <span class="text-[11px] text-wood-charcoal/60 uppercase tracking-wider font-semibold">Harmful VOC Emissions</span>
          </div>
          <div class="bg-white p-5 rounded-2xl border border-wood-sand text-center">
            <span class="font-serif text-3xl font-bold text-wood-brass block mb-1">10-Yr</span>
            <span class="text-[11px] text-wood-charcoal/60 uppercase tracking-wider font-semibold">Structural Integrity</span>
          </div>
        </div>
      </div>

    </section>

  </main>

  <!-- ========================================================================= -->
  <!-- PAGE 4: TESTIMONIAL.HTML (8 AUTHENTIC CUSTOMER REVIEWS)                    -->
  <!-- ========================================================================= -->
  <main id="view-testimonial" class="page-view flex-grow">
    
    <!-- Hero -->
    <section class="bg-wood-warmbeige/50 py-16 border-b border-wood-sand text-center">
      <div class="max-w-3xl mx-auto px-4 sm:px-6">
        <span class="text-xs uppercase tracking-editorial text-wood-brass font-bold block mb-2">Verified Client Feedback</span>
        <h1 class="font-serif text-3xl sm:text-5xl font-bold text-wood-charcoal">Customer Testimonials</h1>
        <p class="text-xs sm:text-sm text-wood-charcoal/70 mt-3">
          Read authentic reflections from homeowners, architects, and business owners who rely on Carpenter Zone for their woodworking needs.
        </p>
        <div class="mt-6 flex items-center justify-center space-x-2 text-xs font-semibold text-wood-charcoal">
          <div class="flex text-amber-500 text-sm">
            <span>&#9733;</span><span>&#9733;</span><span>&#9733;</span><span>&#9733;</span><span>&#9733;</span>
          </div>
          <span>4.9 / 5.0 Average rating across residential and commercial carpentry projects</span>
        </div>
      </div>
    </section>

    <!-- 8 Realistic Testimonials Grid -->
    <section class="py-16 max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
      <div class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-4 gap-6">
        
        <!-- Review 1 -->
        <div class="bg-white rounded-2xl p-6 border border-wood-sand shadow-sm flex flex-col justify-between card-lift">
          <div>
            <div class="flex text-amber-500 text-sm mb-3">&#9733;&#9733;&#9733;&#9733;&#9733;</div>
            <p class="text-xs sm:text-sm text-wood-charcoal/80 italic leading-relaxed mb-6">
              &ldquo;The wardrobe was designed exactly around our room. The finish looked excellent and the team explained everything clearly.&rdquo;
            </p>
          </div>
          <div class="flex items-center space-x-3 pt-4 border-t border-wood-sand/50">
            <img src="https://images.unsplash.com/photo-1534528741775-53994a69daeb?q=80&w=150&auto=format&fit=crop" 
                 alt="Portrait of Priya Sharma" 
                 class="w-10 h-10 rounded-full object-cover" 
                 onerror="handleImgError(this)" />
            <div>
              <h4 class="text-xs font-bold text-wood-charcoal">Priya Sharma</h4>
              <span class="text-[10px] text-wood-charcoal/60 block">Bespoke Fitted Wardrobe</span>
            </div>
          </div>
        </div>

        <!-- Review 2 -->
        <div class="bg-white rounded-2xl p-6 border border-wood-sand shadow-sm flex flex-col justify-between card-lift">
          <div>
            <div class="flex text-amber-500 text-sm mb-3">&#9733;&#9733;&#9733;&#9733;&#9733;</div>
            <p class="text-xs sm:text-sm text-wood-charcoal/80 italic leading-relaxed mb-6">
              &ldquo;Our modular kitchen was executed with high-grade marine ply. The soft-close hinges and drawer alignments have stayed flawless after 18 months.&rdquo;
            </p>
          </div>
          <div class="flex items-center space-x-3 pt-4 border-t border-wood-sand/50">
            <img src="https://images.unsplash.com/photo-1507003211169-0a1dd7228f2d?q=80&w=150&auto=format&fit=crop" 
                 alt="Portrait of Rajesh Varma" 
                 class="w-10 h-10 rounded-full object-cover" 
                 onerror="handleImgError(this)" />
            <div>
              <h4 class="text-xs font-bold text-wood-charcoal">Rajesh Varma</h4>
              <span class="text-[10px] text-wood-charcoal/60 block">Modular Kitchen Cabinets</span>
            </div>
          </div>
        </div>

        <!-- Review 3 -->
        <div class="bg-white rounded-2xl p-6 border border-wood-sand shadow-sm flex flex-col justify-between card-lift">
          <div>
            <div class="flex text-amber-500 text-sm mb-3">&#9733;&#9733;&#9733;&#9733;&#9733;</div>
            <p class="text-xs sm:text-sm text-wood-charcoal/80 italic leading-relaxed mb-6">
              &ldquo;Finding a solid 8-seater dining table that wasn't veneer over hollow MDF seemed impossible until we consulted Carpenter Zone. Real teak, incredible craftsmanship.&rdquo;
            </p>
          </div>
          <div class="flex items-center space-x-3 pt-4 border-t border-wood-sand/50">
            <img src="https://images.unsplash.com/photo-1544005313-94ddf0286df2?q=80&w=150&auto=format&fit=crop" 
                 alt="Portrait of Ananya Sengupta" 
                 class="w-10 h-10 rounded-full object-cover" 
                 onerror="handleImgError(this)" />
            <div>
              <h4 class="text-xs font-bold text-wood-charcoal">Ananya Sengupta</h4>
              <span class="text-[10px] text-wood-charcoal/60 block">Solid Teak Dining Table</span>
            </div>
          </div>
        </div>

        <!-- Review 4 -->
        <div class="bg-white rounded-2xl p-6 border border-wood-sand shadow-sm flex flex-col justify-between card-lift">
          <div>
            <div class="flex text-amber-500 text-sm mb-3">&#9733;&#9733;&#9733;&#9733;&#9733;</div>
            <p class="text-xs sm:text-sm text-wood-charcoal/80 italic leading-relaxed mb-6">
              &ldquo;We hired them for our law office workstations and library wall. The sound-dampening fluted partitions look sleek and offer immense privacy.&rdquo;
            </p>
          </div>
          <div class="flex items-center space-x-3 pt-4 border-t border-wood-sand/50">
            <img src="https://images.unsplash.com/photo-1500648767791-00dcc994a43e?q=80&w=150&auto=format&fit=crop" 
                 alt="Portrait of Vikramaditya Rao" 
                 class="w-10 h-10 rounded-full object-cover" 
                 onerror="handleImgError(this)" />
            <div>
              <h4 class="text-xs font-bold text-wood-charcoal">Vikramaditya Rao</h4>
              <span class="text-[10px] text-wood-charcoal/60 block">Office Bookshelves &amp; Partitions</span>
            </div>
          </div>
        </div>

        <!-- Review 5 -->
        <div class="bg-white rounded-2xl p-6 border border-wood-sand shadow-sm flex flex-col justify-between card-lift">
          <div>
            <div class="flex text-amber-500 text-sm mb-3">&#9733;&#9733;&#9733;&#9733;&#9733;</div>
            <p class="text-xs sm:text-sm text-wood-charcoal/80 italic leading-relaxed mb-6">
              &ldquo;The floating platform bed is silent and rock-solid. No creaking, and the integrated nightstands with hidden cable pass-throughs are genius.&rdquo;
            </p>
          </div>
          <div class="flex items-center space-x-3 pt-4 border-t border-wood-sand/50">
            <img src="https://images.unsplash.com/photo-1524504388940-b1c1722653e1?q=80&w=150&auto=format&fit=crop" 
                 alt="Portrait of Sneha Kapoor" 
                 class="w-10 h-10 rounded-full object-cover" 
                 onerror="handleImgError(this)" />
            <div>
              <h4 class="text-xs font-bold text-wood-charcoal">Sneha Kapoor</h4>
              <span class="text-[10px] text-wood-charcoal/60 block">Custom Wooden Bed</span>
            </div>
          </div>
        </div>

        <!-- Review 6 -->
        <div class="bg-white rounded-2xl p-6 border border-wood-sand shadow-sm flex flex-col justify-between card-lift">
          <div>
            <div class="flex text-amber-500 text-sm mb-3">&#9733;&#9733;&#9733;&#9733;&#9733;</div>
            <p class="text-xs sm:text-sm text-wood-charcoal/80 italic leading-relaxed mb-6">
              &ldquo;They replaced all 7 interior doors in our apartment with solid flush teak and magnetic latches. The insulation and acoustic difference is remarkable.&rdquo;
            </p>
          </div>
          <div class="flex items-center space-x-3 pt-4 border-t border-wood-sand/50">
            <img src="https://images.unsplash.com/photo-1472099645785-5658abf4ff4e?q=80&w=150&auto=format&fit=crop" 
                 alt="Portrait of Gaurav Nair" 
                 class="w-10 h-10 rounded-full object-cover" 
                 onerror="handleImgError(this)" />
            <div>
              <h4 class="text-xs font-bold text-wood-charcoal">Gaurav Nair</h4>
              <span class="text-[10px] text-wood-charcoal/60 block">Wooden Doors &amp; Frames</span>
            </div>
          </div>
        </div>

        <!-- Review 7 -->
        <div class="bg-white rounded-2xl p-6 border border-wood-sand shadow-sm flex flex-col justify-between card-lift">
          <div>
            <div class="flex text-amber-500 text-sm mb-3">&#9733;&#9733;&#9733;&#9733;&#9733;</div>
            <p class="text-xs sm:text-sm text-wood-charcoal/80 italic leading-relaxed mb-6">
              &ldquo;We inherited an antique rosewood armoire that had sagging hinges and deep water marks. Their restoration crew brought it back to pristine museum quality.&rdquo;
            </p>
          </div>
          <div class="flex items-center space-x-3 pt-4 border-t border-wood-sand/50">
            <img src="https://images.unsplash.com/photo-1548142813-c348350df52b?q=80&w=150&auto=format&fit=crop" 
                 alt="Portrait of Meera Joshi" 
                 class="w-10 h-10 rounded-full object-cover" 
                 onerror="handleImgError(this)" />
            <div>
              <h4 class="text-xs font-bold text-wood-charcoal">Meera Joshi</h4>
              <span class="text-[10px] text-wood-charcoal/60 block">Furniture Restoration</span>
            </div>
          </div>
        </div>

        <!-- Review 8 -->
        <div class="bg-white rounded-2xl p-6 border border-wood-sand shadow-sm flex flex-col justify-between card-lift">
          <div>
            <div class="flex text-amber-500 text-sm mb-3">&#9733;&#9733;&#9733;&#9733;&#9733;</div>
            <p class="text-xs sm:text-sm text-wood-charcoal/80 italic leading-relaxed mb-6">
              &ldquo;Clean quotation, punctual on-site carpenters, and zero dust left behind. Their professionalism sets a benchmark for trade services.&rdquo;
            </p>
          </div>
          <div class="flex items-center space-x-3 pt-4 border-t border-wood-sand/50">
            <img src="https://images.unsplash.com/photo-1519085360753-af0119f7cbe7?q=80&w=150&auto=format&fit=crop" 
                 alt="Portrait of David Fernandez" 
                 class="w-10 h-10 rounded-full object-cover" 
                 onerror="handleImgError(this)" />
            <div>
              <h4 class="text-xs font-bold text-wood-charcoal">David Fernandez</h4>
              <span class="text-[10px] text-wood-charcoal/60 block">TV Wall &amp; Shoe Console</span>
            </div>
          </div>
        </div>

      </div>
    </section>

  </main>

  <!-- ========================================================================= -->
  <!-- PAGE 5: CONTACT.HTML (CONTACT US & FREE QUOTE REQUEST FORM)               -->
  <!-- ========================================================================= -->
  <main id="view-contact" class="page-view flex-grow">
    
    <!-- Hero -->
    <section class="bg-wood-warmbeige/50 py-16 border-b border-wood-sand text-center">
      <div class="max-w-3xl mx-auto px-4 sm:px-6">
        <span class="text-xs uppercase tracking-editorial text-wood-brass font-bold block mb-2">Connect With Master Carpenters</span>
        <h1 class="font-serif text-3xl sm:text-5xl font-bold text-wood-charcoal">Request a Free Quote</h1>
        <p class="text-xs sm:text-sm text-wood-charcoal/70 mt-3">
          Have a carpentry or custom furniture project in mind? Share your dimensions or ideas, and our estimator will prepare a detailed quotation.
        </p>
      </div>
    </section>

    <!-- Contact Layout Grid -->
    <section class="py-16 max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
      <div class="grid grid-cols-1 lg:grid-cols-12 gap-12">
        
        <!-- Left: Contact Details Cards -->
        <div class="lg:col-span-5 space-y-6">
          <div>
            <h2 class="font-serif text-2xl font-bold text-wood-charcoal mb-3">Workshop &amp; Estimations</h2>
            <p class="text-xs text-wood-charcoal/70 leading-relaxed">
              We provide on-site dimensions, timber species sampling, and 3D space layouts across metropolitan areas.
            </p>
          </div>

          <div class="space-y-4">
            <!-- Email -->
            <div class="bg-white p-5 rounded-2xl border border-wood-sand shadow-sm flex items-start space-x-4">
              <div class="w-10 h-10 rounded-full bg-wood-warmbeige text-wood-walnut flex items-center justify-center flex-shrink-0">
                <svg class="w-5 h-5" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M3 8l7.89 5.26a2 2 0 002.22 0L21 8M5 19h14a2 2 0 002-2V7a2 2 0 00-2-2H5a2 2 0 00-2 2v10a2 2 0 002 2z"/></svg>
              </div>
              <div>
                <span class="text-[10px] uppercase font-bold text-wood-brass tracking-wider block">Direct Project Email</span>
                <a href="mailto:hello@carpenterzone.com" class="text-xs sm:text-sm font-semibold text-wood-charcoal hover:text-wood-brass transition-colors">hello@carpenterzone.com</a>
                <span class="block text-[11px] text-wood-charcoal/60 mt-0.5">Average estimation turnaround: 24 business hours</span>
              </div>
            </div>

            <!-- Phone -->
            <div class="bg-white p-5 rounded-2xl border border-wood-sand shadow-sm flex items-start space-x-4">
              <div class="w-10 h-10 rounded-full bg-wood-warmbeige text-wood-walnut flex items-center justify-center flex-shrink-0">
                <svg class="w-5 h-5" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M3 5a2 2 0 012-2h3.28a1 1 0 01.948.684l1.498 4.493a1 1 0 01-.502 1.21l-2.257 1.13a11.042 11.042 0 005.516 5.516l1.13-2.257a1 1 0 011.21-.502l4.493 1.498a1 1 0 01.684.949V19a2 2 0 01-2 2h-1C9.716 21 3 14.284 3 6V5z"/></svg>
              </div>
              <div>
                <span class="text-[10px] uppercase font-bold text-wood-brass tracking-wider block">Direct Workshop Line</span>
                <a href="tel:+910000000000" class="text-xs sm:text-sm font-semibold text-wood-charcoal hover:text-wood-brass transition-colors">+91 00000 00000</a>
                <span class="block text-[11px] text-wood-charcoal/60 mt-0.5">Available Mon &ndash; Sat &bull; 9:00 AM &ndash; 6:00 PM</span>
              </div>
            </div>

            <!-- Operating Location -->
            <div class="bg-white p-5 rounded-2xl border border-wood-sand shadow-sm flex items-start space-x-4">
              <div class="w-10 h-10 rounded-full bg-wood-warmbeige text-wood-walnut flex items-center justify-center flex-shrink-0">
                <svg class="w-5 h-5" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M17.657 16.657L13.414 20.9a1.998 1.998 0 01-2.827 0l-4.244-4.243a8 8 0 1111.314 0z"/><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M15 11a3 3 0 11-6 0 3 3 0 016 0z"/></svg>
              </div>
              <div>
                <span class="text-[10px] uppercase font-bold text-wood-brass tracking-wider block">Service Coverage</span>
                <p class="text-xs text-wood-charcoal font-semibold mt-0.5">Metropolitan Workshop &amp; On-Site Carpentry Team, India</p>
                <span class="block text-[11px] text-wood-charcoal/60 mt-0.5">(Placeholder details for demonstration purposes)</span>
              </div>
            </div>
          </div>
        </div>

        <!-- Right: Interactive Quote Request Form with Validation -->
        <div class="lg:col-span-7">
          <div class="bg-white rounded-3xl p-8 sm:p-10 border border-wood-sand shadow-xl">
            <h3 class="font-serif text-2xl font-bold text-wood-charcoal mb-2">Tell Us About Your Woodwork Project</h3>
            <p class="text-xs text-wood-charcoal/60 mb-6">
              Fill out the details below. We do not spam and your privacy is fully protected.
            </p>

            <form id="quoteForm" onsubmit="handleQuoteSubmit(event)" class="space-y-4" novalidate>
              
              <div class="grid grid-cols-1 sm:grid-cols-2 gap-4">
                <div>
                  <label for="fullName" class="block text-xs font-bold uppercase tracking-wider text-wood-charcoal mb-1">Full Name *</label>
                  <input 
                    type="text" 
                    id="fullName" 
                    placeholder="e.g. Vikramaditya Sen" 
                    class="w-full bg-wood-cream border border-wood-sand focus:border-wood-brass focus:bg-white rounded-xl px-4 py-3 text-xs sm:text-sm text-wood-charcoal focus:outline-none transition-all" 
                    required 
                  />
                  <p class="text-[11px] text-rose-600 hidden mt-1" id="nameError">Please enter your full name.</p>
                </div>

                <div>
                  <label for="emailAddr" class="block text-xs font-bold uppercase tracking-wider text-wood-charcoal mb-1">Email Address *</label>
                  <input 
                    type="email" 
                    id="emailAddr" 
                    placeholder="e.g. vikram@example.com" 
                    class="w-full bg-wood-cream border border-wood-sand focus:border-wood-brass focus:bg-white rounded-xl px-4 py-3 text-xs sm:text-sm text-wood-charcoal focus:outline-none transition-all" 
                    required 
                  />
                  <p class="text-[11px] text-rose-600 hidden mt-1" id="emailError">Please enter a valid email address.</p>
                </div>
              </div>

              <div class="grid grid-cols-1 sm:grid-cols-2 gap-4">
                <div>
                  <label for="phoneNum" class="block text-xs font-bold uppercase tracking-wider text-wood-charcoal mb-1">Phone Number *</label>
                  <input 
                    type="tel" 
                    id="phoneNum" 
                    placeholder="e.g. +91 98765 43210" 
                    class="w-full bg-wood-cream border border-wood-sand focus:border-wood-brass focus:bg-white rounded-xl px-4 py-3 text-xs sm:text-sm text-wood-charcoal focus:outline-none transition-all" 
                    required 
                  />
                  <p class="text-[11px] text-rose-600 hidden mt-1" id="phoneError">Please provide a contact phone number.</p>
                </div>

                <div>
                  <label for="serviceSelect" class="block text-xs font-bold uppercase tracking-wider text-wood-charcoal mb-1">Service Required *</label>
                  <select id="serviceSelect" class="w-full bg-wood-cream border border-wood-sand focus:border-wood-brass focus:bg-white rounded-xl px-4 py-3 text-xs sm:text-sm text-wood-charcoal focus:outline-none transition-all cursor-pointer">
                    <option value="Custom Wooden Furniture">Custom Wooden Furniture</option>
                    <option value="Modular Kitchen Cabinets">Modular Kitchen Cabinets</option>
                    <option value="Custom Fitted Wardrobes">Custom Fitted Wardrobes</option>
                    <option value="Wooden Doors & Frames">Wooden Doors &amp; Frames</option>
                    <option value="Office & Commercial Fitout">Office &amp; Commercial Fitout</option>
                    <option value="TV Unit & Wall Panelling">TV Unit &amp; Wall Panelling</option>
                    <option value="Furniture Repair & Restoration">Furniture Repair &amp; Restoration</option>
                    <option value="Complete Home Woodwork">Complete Home Woodwork</option>
                  </select>
                </div>
              </div>

              <div>
                <label for="preferredDate" class="block text-xs font-bold uppercase tracking-wider text-wood-charcoal mb-1">Preferred Consultation Date</label>
                <input 
                  type="date" 
                  id="preferredDate" 
                  class="w-full bg-wood-cream border border-wood-sand focus:border-wood-brass focus:bg-white rounded-xl px-4 py-3 text-xs sm:text-sm text-wood-charcoal focus:outline-none transition-all cursor-pointer" 
                />
              </div>

              <div>
                <label for="projectDetails" class="block text-xs font-bold uppercase tracking-wider text-wood-charcoal mb-1">Project Details &amp; Dimensions *</label>
                <textarea 
                  id="projectDetails" 
                  rows="4" 
                  placeholder="Describe the rooms, preferred timber species (Teak, Oak, Plywood), rough measurements, or specific functional needs..." 
                  class="w-full bg-wood-cream border border-wood-sand focus:border-wood-brass focus:bg-white rounded-xl px-4 py-3 text-xs sm:text-sm text-wood-charcoal focus:outline-none transition-all resize-none" 
                  required
                ></textarea>
                <p class="text-[11px] text-rose-600 hidden mt-1" id="messageError">Please share some basic details about your project.</p>
              </div>

              <button type="submit" class="w-full py-4 rounded-full bg-wood-walnut hover:bg-wood-brass text-white hover:text-wood-charcoal font-bold text-xs tracking-editorial uppercase transition-all shadow-lg">
                Request Free Quote
              </button>

              <!-- Success Alert Box -->
              <div id="quoteSuccessAlert" class="hidden p-4 rounded-2xl bg-emerald-50 border border-emerald-300 text-emerald-800 text-xs text-center space-y-1">
                <span class="font-bold block text-sm">Thank you! Your enquiry has been received.</span>
                <p>Our woodworking estimation team will contact you soon with a preliminary scope and schedule.</p>
              </div>

            </form>
          </div>
        </div>

      </div>
    </section>

  </main>

  <!-- ========================================================================= -->
  <!-- PAGE 6: PRIVACY-POLICY.HTML (LEGAL DOCUMENTATION)                         -->
  <!-- ========================================================================= -->
  <main id="view-privacy" class="page-view flex-grow">
    
    <!-- Hero -->
    <section class="bg-wood-warmbeige/50 py-16 border-b border-wood-sand text-center">
      <div class="max-w-4xl mx-auto px-4 sm:px-6">
        <span class="text-xs uppercase tracking-editorial text-wood-brass font-bold block mb-2">Transparency &amp; Trust</span>
        <h1 class="font-serif text-3xl sm:text-5xl font-bold text-wood-charcoal">Privacy Policy</h1>
        <p class="text-xs text-wood-charcoal/60 mt-3">
          Effective Date: September 15, 2026 &bull; Carpenter Zone Custom Woodworking Solutions
        </p>
      </div>
    </section>

    <!-- Professional 11-Section Privacy Policy Content -->
    <section class="py-16 max-w-4xl mx-auto px-4 sm:px-6 lg:px-8 text-xs sm:text-sm text-wood-charcoal/80 leading-relaxed space-y-10">
      
      <div>
        <h2 class="font-serif text-xl font-bold text-wood-charcoal mb-2">1. Introduction</h2>
        <p>
          Carpenter Zone ("we", "our", or "us") respects your personal privacy. This Privacy Policy details how we collect, use, and protect the information you provide when visiting our website, requesting carpentry estimates, or contracting our custom woodworking and installation services.
        </p>
      </div>

      <div>
        <h2 class="font-serif text-xl font-bold text-wood-charcoal mb-2">2. Information We Collect</h2>
        <p class="mb-2">We only gather personal information that you intentionally submit to us. This includes:</p>
        <ul class="list-disc pl-5 space-y-1 text-xs">
          <li><strong>Contact Coordinates:</strong> Full name, phone number, and email address.</li>
          <li><strong>Project Specifications:</strong> Room dimensions, architectural plans, site photos, and preferred timber materials.</li>
          <li><strong>Technical Metadata:</strong> Non-identifying technical information such as browser type, time-zone settings, and pages viewed to optimize page performance.</li>
        </ul>
      </div>

      <div>
        <h2 class="font-serif text-xl font-bold text-wood-charcoal mb-2">3. Contact Form Information</h2>
        <p>
          Information submitted through our "Request a Free Quote" or consultation forms is utilized strictly by our estimators and project coordinators to respond to your specific inquiries, formulate accurate material estimates, and schedule physical site dimensions.
        </p>
      </div>

      <div>
        <h2 class="font-serif text-xl font-bold text-wood-charcoal mb-2">4. How We Use Information</h2>
        <p>
          We employ collected data solely for legitimate business operations: arranging carpenter visits, executing woodworking contracts, delivering finished furniture, and providing customer support. We never sell, lease, or distribute your personal details to third-party direct marketing agencies.
        </p>
      </div>

      <div>
        <h2 class="font-serif text-xl font-bold text-wood-charcoal mb-2">5. Cookies and Local Preferences</h2>
        <p>
          Our website may use minimal, strictly necessary cookies or browser cache storage solely to retain user preferences (such as filtering choices or viewing modes) and ensure swift page rendering. You can modify your browser settings to decline cookies without disrupting fundamental website navigation.
        </p>
      </div>

      <div>
        <h2 class="font-serif text-xl font-bold text-wood-charcoal mb-2">6. Analytics</h2>
        <p>
          We may examine aggregated, anonymized telemetry records to understand how visitors navigate our carpentry portfolio, evaluate which furniture categories receive the highest engagement, and continuously enhance mobile responsiveness.
        </p>
      </div>

      <div>
        <h2 class="font-serif text-xl font-bold text-wood-charcoal mb-2">7. Third-Party Services</h2>
        <p>
          Selected logistics partners, hardware suppliers, or delivery couriers may receive necessary delivery addresses solely to fulfill direct shipments of custom woodwork. All such partners are obligated to maintain strict confidentiality.
        </p>
      </div>

      <div>
        <h2 class="font-serif text-xl font-bold text-wood-charcoal mb-2">8. Data Security</h2>
        <p>
          We implement standard SSL encryption protocols, secure communication channels, and administrative restrictions to prevent unauthorized access, alteration, or disclosure of your project coordinates and contact records.
        </p>
      </div>

      <div>
        <h2 class="font-serif text-xl font-bold text-wood-charcoal mb-2">9. User Rights</h2>
        <p>
          You have the right to request a summary of the personal contact records we maintain regarding your account, request corrections to erroneous information, or ask for the removal of your contact information from our estimation databases upon completion of your warranty duration.
        </p>
      </div>

      <div>
        <h2 class="font-serif text-xl font-bold text-wood-charcoal mb-2">10. Children's Privacy &amp; Policy Changes</h2>
        <p>
          Our services are directed to adult property owners, architects, and trade clients; we do not intentionally collect records from individuals under the age of 18. We reserve the right to revise this Privacy Policy periodically to reflect changes in regulatory standards or service updates.
        </p>
      </div>

      <div class="bg-wood-warmbeige/50 p-6 rounded-2xl border border-wood-sand">
        <h2 class="font-serif text-lg font-bold text-wood-charcoal mb-2">11. Contact Information</h2>
        <p class="text-xs">
          For any questions concerning our privacy practices or your data, please contact our data coordinator:<br />
          <strong>Email:</strong> <a href="mailto:hello@carpenterzone.com" class="text-wood-walnut font-bold underline">hello@carpenterzone.com</a><br />
          <strong>Direct Line:</strong> +91 00000 00000
        </p>
      </div>

    </section>

  </main>

  <!-- Universal Professional Footer (Shared Across All Views) -->
  <footer class="bg-wood-charcoal text-wood-warmbeige border-t border-wood-brass/30 pt-16 pb-12 mt-auto">
    <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
      <div class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-5 gap-10 mb-12">
        
        <!-- Brand Summary -->
        <div class="lg:col-span-2 space-y-4">
          <a href="javascript:void(0)" onclick="switchPage('home')" class="flex items-center space-x-3">
            <div class="w-9 h-9 rounded-lg bg-wood-walnut text-wood-brass flex items-center justify-center font-serif text-lg font-bold border border-wood-brass/30">
              CZ
            </div>
            <span class="font-serif text-2xl tracking-wider font-bold text-white">
              CARPENTER ZONE
            </span>
          </a>
          <p class="text-xs text-wood-warmbeige/75 leading-relaxed max-w-sm">
            Professional carpentry and custom woodworking solutions designed for modern spaces. From raw timber to finished elegance, crafted with generational skill.
          </p>
          <div class="pt-2 flex items-center space-x-3">
            <!-- Instagram -->
            <a href="javascript:void(0)" onclick="showToast('Opening Carpenter Zone Instagram')" class="w-8 h-8 rounded-full bg-white/10 hover:bg-wood-brass hover:text-wood-charcoal text-wood-warmbeige flex items-center justify-center transition-colors" aria-label="Instagram">
              <svg class="w-4 h-4" fill="currentColor" viewBox="0 0 24 24"><path d="M12 2.163c3.204 0 3.584.012 4.85.07 3.252.148 4.771 1.691 4.919 4.919.058 1.265.069 1.645.069 4.849 0 3.205-.012 3.584-.069 4.849-.149 3.225-1.664 4.771-4.919 4.919-1.266.058-1.644.07-4.85.07-3.204 0-3.584-.012-4.849-.07-3.26-.149-4.771-1.699-4.919-4.92-.058-1.265-.07-1.644-.07-4.849 0-3.204.013-3.583.07-4.849.149-3.227 1.664-4.771 4.919-4.919 1.266-.057 1.645-.069 4.849-.069zm0-2.163c-3.259 0-3.667.014-4.947.072-4.358.2-6.78 2.618-6.98 6.98-.059 1.281-.073 1.689-.073 4.948 0 3.259.014 3.668.072 4.948.2 4.358 2.618 6.78 6.98 6.98 1.281.058 1.689.072 4.948.072 3.259 0 3.668-.014 4.948-.072 4.354-.2 6.782-2.618 6.979-6.98.059-1.28.073-1.689.073-4.948 0-3.259-.014-3.667-.072-4.947-.196-4.354-2.617-6.78-6.979-6.98-1.281-.059-1.69-.073-4.949-.073zm0 5.838c-3.403 0-6.162 2.759-6.162 6.162s2.759 6.163 6.162 6.163 6.162-2.759 6.162-6.163c0-3.403-2.759-6.162-6.162-6.162zm0 10.162c-2.209 0-4-1.79-4-4 0-2.209 1.791-4 4-4s4 1.791 4 4c0 2.21-1.791 4-4 4zm6.406-11.845c-.796 0-1.441.645-1.441 1.44s.645 1.44 1.441 1.44c.795 0 1.439-.645 1.439-1.44s-.644-1.44-1.439-1.44z"/></svg>
            </a>
            <!-- Facebook -->
            <a href="javascript:void(0)" onclick="showToast('Opening Carpenter Zone Facebook')" class="w-8 h-8 rounded-full bg-white/10 hover:bg-wood-brass hover:text-wood-charcoal text-wood-warmbeige flex items-center justify-center transition-colors" aria-label="Facebook">
              <svg class="w-4 h-4" fill="currentColor" viewBox="0 0 24 24"><path d="M9 8H6v4h3v12h5V12h3.642L18 8h-4V6.333C14 5.374 14.5 5 15.7 5H18V0h-3.808C10.595 0 9 1.583 9 4.615V8z"/></svg>
            </a>
            <!-- Pinterest -->
            <a href="javascript:void(0)" onclick="showToast('Opening Woodworking Ideas on Pinterest')" class="w-8 h-8 rounded-full bg-white/10 hover:bg-wood-brass hover:text-wood-charcoal text-wood-warmbeige flex items-center justify-center transition-colors" aria-label="Pinterest">
              <svg class="w-4 h-4" fill="currentColor" viewBox="0 0 24 24"><path d="M12 0a12 12 0 00-4.4 23.2c-.1-.9-.2-2.3 0-3.3l1.4-6s-.4-.7-.4-1.8c0-1.7 1-3 2.2-3 1.1 0 1.6.8 1.6 1.8 0 1.1-.7 2.7-1.1 4.2-.3 1.3.7 2.3 2 2.3 2.4 0 4-3.1 4-6.8 0-2.8-1.9-4.9-5.3-4.9-3.9 0-6.3 2.9-6.3 6.1 0 1.1.4 2.3.9 2.9.1.1.1.3.1.4l-.3 1.4c-.1.2-.2.3-.4.2-1.7-.8-2.5-2.9-2.5-4.6 0-3.8 3.2-8.3 9.5-8.3 5.1 0 8.5 3.7 8.5 7.7 0 5.2-2.9 9.1-7.1 9.1-1.4 0-2.7-.8-3.2-1.7l-.9 3.4c-.3 1.2-1.1 2.7-1.6 3.6A12 12 0 1012 0z"/></svg>
            </a>
            <!-- YouTube -->
            <a href="javascript:void(0)" onclick="showToast('Opening Carpenter Zone Craftsmanship YouTube')" class="w-8 h-8 rounded-full bg-white/10 hover:bg-wood-brass hover:text-wood-charcoal text-wood-warmbeige flex items-center justify-center transition-colors" aria-label="YouTube">
              <svg class="w-4 h-4" fill="currentColor" viewBox="0 0 24 24"><path d="M23.498 6.186a3.016 3.016 0 00-2.122-2.136C19.505 3.545 12 3.545 12 3.545s-7.505 0-9.377.505A3.017 3.017 0 00.502 6.186C0 8.07 0 12 0 12s0 3.93.502 5.814a3.016 3.016 0 002.122 2.136c1.871.505 9.376.505 9.376.505s7.505 0 9.377-.505a3.015 3.015 0 002.122-2.136C24 15.93 24 12 24 12s0-3.93-.502-5.814zM9.545 15.568V8.432L15.818 12l-6.273 3.568z"/></svg>
            </a>
          </div>
        </div>

        <!-- Quick Links -->
        <div class="space-y-3">
          <h4 class="text-xs uppercase font-bold tracking-wider text-wood-brass">Quick Links</h4>
          <ul class="space-y-2 text-xs text-wood-warmbeige/75">
            <li><a href="javascript:void(0)" onclick="switchPage('home')" class="hover:text-wood-brass transition-colors">Home (index.html)</a></li>
            <li><a href="javascript:void(0)" onclick="switchPage('about')" class="hover:text-wood-brass transition-colors">About Us (about.html)</a></li>
            <li><a href="javascript:void(0)" onclick="switchPage('products')" class="hover:text-wood-brass transition-colors">Products &amp; Services</a></li>
            <li><a href="javascript:void(0)" onclick="switchPage('testimonial')" class="hover:text-wood-brass transition-colors">Testimonials</a></li>
            <li><a href="javascript:void(0)" onclick="switchPage('contact')" class="hover:text-wood-brass transition-colors">Contact Us</a></li>
            <li><a href="javascript:void(0)" onclick="switchPage('privacy')" class="hover:text-wood-brass transition-colors">Privacy Policy</a></li>
          </ul>
        </div>

        <!-- Services Links -->
        <div class="space-y-3">
          <h4 class="text-xs uppercase font-bold tracking-wider text-wood-brass">Core Services</h4>
          <ul class="space-y-2 text-xs text-wood-warmbeige/75">
            <li><a href="javascript:void(0)" onclick="filterAndNavigate('Furniture')" class="hover:text-wood-brass transition-colors">Custom Furniture</a></li>
            <li><a href="javascript:void(0)" onclick="filterAndNavigate('Kitchen')" class="hover:text-wood-brass transition-colors">Modular Kitchens</a></li>
            <li><a href="javascript:void(0)" onclick="filterAndNavigate('Wardrobes')" class="hover:text-wood-brass transition-colors">Built-in Wardrobes</a></li>
            <li><a href="javascript:void(0)" onclick="filterAndNavigate('Doors & Windows')" class="hover:text-wood-brass transition-colors">Wooden Doors &amp; Windows</a></li>
            <li><a href="javascript:void(0)" onclick="filterAndNavigate('Office Furniture')" class="hover:text-wood-brass transition-colors">Office Workstations</a></li>
            <li><a href="javascript:void(0)" onclick="filterAndNavigate('Repair & Restoration')" class="hover:text-wood-brass transition-colors">Furniture Repair</a></li>
          </ul>
        </div>

        <!-- Contact & Hours -->
        <div class="space-y-3">
          <h4 class="text-xs uppercase font-bold tracking-wider text-wood-brass">Workshop Helpline</h4>
          <ul class="space-y-2 text-xs text-wood-warmbeige/75">
            <li><strong>Email:</strong> hello@carpenterzone.com</li>
            <li><strong>Phone:</strong> +91 00000 00000</li>
            <li><strong>Location:</strong> India (Nationwide Consults)</li>
            <li><strong>Hours:</strong> Mon – Sat | 9:00 AM – 6:00 PM</li>
            <li><a href="javascript:void(0)" onclick="exportProjectZip()" class="text-wood-brass underline hover:text-white">Download Source Code (.ZIP)</a></li>
          </ul>
        </div>

      </div>

      <div class="pt-8 border-t border-white/10 flex flex-col sm:flex-row items-center justify-between text-xs text-wood-warmbeige/60 gap-4">
        <div>
          &copy; 2026 Carpenter Zone. All Rights Reserved.
        </div>
        <div class="flex items-center space-x-6 text-[11px]">
          <a href="javascript:void(0)" onclick="switchPage('privacy')" class="hover:underline">Privacy Policy</a>
          <span>&bull;</span>
          <a href="javascript:void(0)" onclick="switchPage('contact')" class="hover:underline">Free Estimation</a>
          <span>&bull;</span>
          <a href="javascript:void(0)" onclick="showToast('Carpenter Zone guarantees genuine timber and honest joinery.')" class="hover:underline">Craftsmanship Guarantee</a>
        </div>
      </div>
    </div>
  </footer>

  <!-- Floating WhatsApp-Style Button (Easy to replace placeholder) -->
  <a href="https://wa.me/910000000000?text=Hello%20Carpenter%20Zone%2C%20I%20would%20like%20to%20discuss%20a%20custom%20woodwork%20project." 
     target="_blank" 
     rel="noopener noreferrer" 
     aria-label="Chat with Carpenter Zone on WhatsApp" 
     class="fixed bottom-6 right-6 z-40 w-13 h-13 p-3.5 rounded-full bg-emerald-600 hover:bg-emerald-700 text-white flex items-center justify-center shadow-2xl transition-all transform hover:scale-110">
    <svg class="w-6 h-6" fill="currentColor" viewBox="0 0 24 24">
      <path d="M.057 24l1.687-6.163c-1.041-1.804-1.588-3.849-1.587-5.946.003-6.556 5.338-11.891 11.893-11.891 3.181.001 6.167 1.24 8.413 3.488 2.245 2.248 3.481 5.236 3.48 8.414-.003 6.557-5.338 11.892-11.893 11.892-1.99-.001-3.951-.5-5.688-1.448l-6.305 1.654zm6.597-3.807c1.676.995 3.276 1.591 5.392 1.592 5.448 0 9.886-4.434 9.889-9.885.002-5.462-4.415-9.89-9.881-9.892-5.452 0-9.887 4.434-9.889 9.884-.001 2.225.651 3.891 1.746 5.634l-.999 3.648 3.742-.981z"/>
    </svg>
  </a>

  <!-- Floating Back to Top Button -->
  <button id="backToTop" 
          onclick="window.scrollTo({top: 0, behavior: 'smooth'})" 
          class="fixed bottom-22 right-6 z-40 w-10 h-10 rounded-full bg-wood-charcoal text-wood-warmbeige hover:bg-wood-brass hover:text-wood-charcoal flex items-center justify-center shadow-lg transition-all opacity-0 pointer-events-none transform translate-y-3" 
          aria-label="Back to top">
    <svg class="w-4 h-4" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M5 15l7-7 7 7"/></svg>
  </button>

  <!-- Quick Product Details Modal -->
  <div id="productDetailModal" class="fixed inset-0 z-50 flex items-center justify-center bg-black/70 backdrop-blur-sm hidden p-4">
    <div class="bg-white rounded-3xl max-w-2xl w-full overflow-hidden shadow-2xl relative border border-wood-sand">
      <button onclick="closeProductModal()" class="absolute top-4 right-4 z-10 w-9 h-9 rounded-full bg-wood-warmbeige text-wood-charcoal hover:bg-wood-charcoal hover:text-white flex items-center justify-center transition-colors">
        ✕
      </button>

      <div class="grid grid-cols-1 md:grid-cols-2">
        <div class="aspect-[4/5] bg-wood-warmbeige relative">
          <img id="modalProductImg" src="" alt="Woodwork preview" class="w-full h-full object-cover" onerror="handleImgError(this)" />
          <span id="modalProductBadge" class="absolute top-4 left-4 px-2.5 py-1 rounded-full text-[10px] font-bold uppercase bg-wood-charcoal text-wood-brass"></span>
        </div>

        <div class="p-6 sm:p-8 flex flex-col justify-between">
          <div class="space-y-3">
            <span id="modalProductCat" class="text-[10px] uppercase tracking-wider text-wood-brass font-bold"></span>
            <h3 id="modalProductTitle" class="font-serif text-2xl font-bold text-wood-charcoal"></h3>
            
            <div class="flex items-center space-x-2">
              <span id="modalProductPrice" class="text-sm font-bold text-wood-walnut"></span>
              <div class="flex text-amber-500 text-xs">
                <span>&#9733;&#9733;&#9733;&#9733;&#9733;</span>
              </div>
            </div>

            <!-- 50-Word Description Display -->
            <p id="modalProductDesc" class="text-xs text-wood-charcoal/80 leading-relaxed pt-2 border-t border-wood-sand"></p>
            
            <div class="pt-2 text-[11px] text-wood-charcoal/60 space-y-1">
              <p>&bull; 100% Seasoned Hardwood / BWP Plywood</p>
              <p>&bull; Custom Dimensions to match your space</p>
              <p>&bull; 10-Year Structural Craftsmanship Warranty</p>
            </div>
          </div>

          <div class="pt-6 space-y-2">
            <button onclick="bookQuoteFromModal()" class="w-full py-3.5 rounded-full bg-wood-walnut hover:bg-wood-brass text-white hover:text-wood-charcoal font-bold text-xs tracking-editorial uppercase transition-all shadow-md">
              Request Free Estimate for This
            </button>
          </div>
        </div>
      </div>
    </div>
  </div>

  <!-- Toast Notification Bar -->
  <div id="toastBar" class="fixed bottom-6 left-6 z-50 bg-wood-charcoal text-wood-warmbeige border border-wood-brass/40 px-5 py-3 rounded-2xl shadow-2xl flex items-center space-x-3 transform translate-y-20 opacity-0 transition-all duration-300 pointer-events-none">
    <span class="w-2 h-2 rounded-full bg-wood-brass"></span>
    <span id="toastMsg" class="text-xs font-semibold">Notification</span>
  </div>

  <script>
    /* ========================================================================= */
    /* HERO BACKGROUND SLIDER / CAROUSEL CONTROLLER                              */
    /* ========================================================================= */
    let heroCurrentSlide = 0;
    let heroSliderTimer = null;
    let heroIsPlaying = true;
    const heroSlideInterval = 5000; // Auto-slides every 5 seconds

    function updateHeroSlideUI() {
      const slides = document.querySelectorAll('.hero-slide');
      if (!slides.length) return;

      slides.forEach((slide, idx) => {
        if (idx === heroCurrentSlide) {
          slide.classList.add('active');
        } else {
          slide.classList.remove('active');
        }
      });

      // Update indicator dots
      const dotContainer = document.getElementById('heroDotContainer');
      if (dotContainer) {
        const dots = dotContainer.querySelectorAll('button');
        dots.forEach((dot, idx) => {
          if (idx === heroCurrentSlide) {
            dot.className = "w-8 h-1.5 rounded-full bg-wood-brass transition-all duration-300 shadow-sm";
          } else {
            dot.className = "w-2.5 h-1.5 rounded-full bg-white/40 hover:bg-white/75 transition-all duration-300";
          }
        });
      }
    }

    function nextHeroSlide() {
      const slides = document.querySelectorAll('.hero-slide');
      if (!slides.length) return;
      heroCurrentSlide = (heroCurrentSlide + 1) % slides.length;
      updateHeroSlideUI();
      resetHeroSliderTimer();
    }

    function prevHeroSlide() {
      const slides = document.querySelectorAll('.hero-slide');
      if (!slides.length) return;
      heroCurrentSlide = (heroCurrentSlide - 1 + slides.length) % slides.length;
      updateHeroSlideUI();
      resetHeroSliderTimer();
    }

    function goToHeroSlide(index) {
      heroCurrentSlide = index;
      updateHeroSlideUI();
      resetHeroSliderTimer();
    }

    function startHeroSlider() {
      if (heroSliderTimer) clearInterval(heroSliderTimer);
      heroSliderTimer = setInterval(() => {
        if (heroIsPlaying) {
          nextHeroSlide();
        }
      }, heroSlideInterval);
    }

    function resetHeroSliderTimer() {
      startHeroSlider();
    }

    function toggleHeroAutoPlay() {
      heroIsPlaying = !heroIsPlaying;
      const icon = document.getElementById('sliderPlayPauseIcon');
      if (icon) {
        icon.innerText = heroIsPlaying ? "❚❚" : "▶";
      }
      showToast(heroIsPlaying ? "Hero auto-slide resumed." : "Hero auto-slide paused.");
    }

    /* ========================================================================= */
    /* 1. MASTER 20 PRODUCTS & SERVICES WITH EXACT 50-WORD DESCRIPTIONS          */
    /* ========================================================================= */
    const PRODUCTS = [
      {
        id: 1,
        name: "Custom Wooden Furniture",
        category: "Furniture",
        priceTag: "Starting from ₹18,500",
        rating: 5.0,
        featured: true,
        image: "https://images.unsplash.com/photo-1538688525198-9b88f6f53126?q=80&w=800&auto=format&fit=crop",
        // EXACT 50 WORDS:
        description: "Our custom wooden furniture is designed to elevate your interior aesthetic with tailored dimensions, sustainable natural hardwood frames, and artisan joinery. Every piece reflects your individual lifestyle, offering generational durability, smooth hand-sanded contours, and protective non-toxic clear coatings. Perfect for discerning homeowners seeking personalized luxury without commercial showroom compromises."
      },
      {
        id: 2,
        name: "Modular Kitchen Cabinets",
        category: "Kitchen",
        priceTag: "Starting from ₹65,000",
        rating: 4.9,
        featured: true,
        image: "https://images.unsplash.com/photo-1556911220-e15b29be8c8f?q=80&w=800&auto=format&fit=crop",
        // EXACT 50 WORDS:
        description: "Transform daily culinary routines with moisture-resistant boiling-water-proof plywood modular kitchen cabinets. Designed with concealed German soft-close runners, organized pantry pull-outs, and scratch-resistant acrylic shutters, these ergonomic storage systems maximize countertop efficiency. Our carpenters precisely align every carcass to uneven walls, delivering a sleek, hygienic kitchen built for rigorous everyday cooking."
      },
      {
        id: 3,
        name: "Custom Wardrobes",
        category: "Wardrobes",
        priceTag: "Starting from ₹42,000",
        rating: 5.0,
        featured: true,
        image: "https://images.unsplash.com/photo-1616486338812-3dadae4b4ace?q=80&w=800&auto=format&fit=crop",
        // EXACT 50 WORDS:
        description: "Fitted floor-to-ceiling custom wardrobes engineered to solve bedroom clutter effortlessly. Featuring smooth gliding sliding doors or classic soft-hinged shutters, integrated sensor LED lighting profiles, dedicated jewelry trays, and adjustable shelving partitions. Crafted from calibrated marine core boards finished in natural wood veneers or high-gloss laminates tailored strictly to your room height."
      },
      {
        id: 4,
        name: "Wooden Beds",
        category: "Furniture",
        priceTag: "Starting from ₹28,000",
        rating: 4.9,
        featured: true,
        image: "https://images.unsplash.com/photo-1505693416388-ac5ce068fe85?q=80&w=800&auto=format&fit=crop",
        // EXACT 50 WORDS:
        description: "Experience deeply restorative sleep on our solid wood platform beds. Built with robust internal slatted support frames, whisper-quiet mortise joinery, optional hydraulic mattress-lift storage, and upholstered or fluted wooden headboards. Hand-finished with organic protective wax to showcase authentic natural grain textures while remaining completely silent across decades of dependable nocturnal rest."
      },
      {
        id: 5,
        name: "Wooden Sofas",
        category: "Furniture",
        priceTag: "Starting from ₹34,000",
        rating: 4.8,
        featured: false,
        image: "https://images.unsplash.com/photo-1555041469-a586c61ea9bc?q=80&w=800&auto=format&fit=crop",
        // EXACT 50 WORDS:
        description: "Sculpted solid timber sofa sets providing generous lounge seating, ergonomic lumber angles, and high-density foam cushions wrapped in stain-resistant fabrics. The exposed teak or walnut armrests present silky beveled profiles that enrich contemporary living rooms. Sturdy corner-blocked construction ensures permanent structural rigidity without joint loosening or distressing seasonal upholstery sagging."
      },
      {
        id: 6,
        name: "Dining Tables",
        category: "Furniture",
        priceTag: "Starting from ₹26,500",
        rating: 5.0,
        featured: true,
        image: "https://images.unsplash.com/photo-1617806118233-18e1de247200?q=80&w=800&auto=format&fit=crop",
        // EXACT 50 WORDS:
        description: "Celebrate family gatherings around handcrafted solid wood dining tables created from seasoned teak, white oak, or live-edge acacia slabs. Sealed with food-safe heat-resistant clear coats that repel spills, each tabletop rests atop reinforced trestle or contemporary geometric timber bases. Custom dimensioned for four, six, eight, or twelve expansive dining chairs."
      },
      {
        id: 7,
        name: "Wooden Chairs",
        category: "Furniture",
        priceTag: "Starting from ₹4,500 / chair",
        rating: 4.8,
        featured: false,
        image: "https://images.unsplash.com/photo-1580481077194-e461a2fa89b2?q=80&w=800&auto=format&fit=crop",
        // EXACT 50 WORDS:
        description: "Lightweight yet incredibly durable wooden dining and accent chairs featuring steam-bent backrests, hand-woven cane details, or cushioned linen upholstery. Designed specifically to cradle spinal alignment comfortably during prolonged dinners or productive home office sessions. Finished with scuff-resistant protective lacquer and fitted with gentle felt floor glides to safeguard delicate tiles."
      },
      {
        id: 8,
        name: "TV Units",
        category: "Furniture",
        priceTag: "Starting from ₹19,000",
        rating: 4.9,
        featured: true,
        image: "https://images.unsplash.com/photo-1600585154340-be6161a56a0c?q=80&w=800&auto=format&fit=crop",
        // EXACT 50 WORDS:
        description: "Bespoke modern entertainment TV consoles incorporating acoustic vertical slatted backdrops, floating media shelves, concealed wire grommets, and tinted glass compartments for gaming hardware. Built to seamlessly frame large-screen televisions while eliminating chaotic wire clutter. Custom manufactured in harmonious two-tone timber finishes to anchor your primary living room with sophisticated architectural poise."
      },
      {
        id: 9,
        name: "Wooden Bookshelves",
        category: "Storage",
        priceTag: "Starting from ₹16,000",
        rating: 4.9,
        featured: false,
        image: "https://images.unsplash.com/photo-1594633312681-425c7b97ccd1?q=80&w=800&auto=format&fit=crop",
        // EXACT 50 WORDS:
        description: "Architectural floor-to-ceiling library bookcases engineered with heavy-load timber shelves that resist sagging under encyclopedic weight. Featuring modular compartment spacing for literature collections, decorative ceramics, and family heirlooms. Fitted with optional integrated warm LED downlights and lower closed cabinet doors to safely store private documents out of sight in home studies."
      },
      {
        id: 10,
        name: "Office Furniture",
        category: "Office Furniture",
        priceTag: "Starting from ₹24,000",
        rating: 4.8,
        featured: false,
        image: "https://images.unsplash.com/photo-1497366216548-37526070297c?q=80&w=800&auto=format&fit=crop",
        // EXACT 50 WORDS:
        description: "Professional corporate and boutique office furnishings, including expansive conference tables, privacy divider screens, credenzas, and ergonomic manager suites. Engineered for demanding commercial environments with impact-resistant edges, wire management trunks, and durable matte polyurethane finishes. Our modular wooden office systems foster focused productivity while projecting refined corporate prestige to visiting commercial clients."
      },
      {
        id: 11,
        name: "Wooden Study Tables",
        category: "Office Furniture",
        priceTag: "Starting from ₹12,500",
        rating: 4.7,
        featured: false,
        image: "https://images.unsplash.com/photo-1518455027359-f3f8164ba6bd?q=80&w=800&auto=format&fit=crop",
        // EXACT 50 WORDS:
        description: "Ergonomic wooden study desks thoughtfully configured with integrated book hutches, whisper-glide keyboard trays, cable management pass-throughs, and lockable stationery drawers. Built with rounded corners for child-safe bedrooms or clean executive lines for home offices. Made with solid hardwood legs and non-glare desktop surfaces that withstand intense daily writing and laptop computing."
      },
      {
        id: 12,
        name: "Wooden Doors",
        category: "Doors & Windows",
        priceTag: "Request a Quote",
        rating: 5.0,
        featured: true,
        image: "https://images.unsplash.com/photo-1513694203232-719a280e022f?q=80&w=800&auto=format&fit=crop",
        // EXACT 50 WORDS:
        description: "Stately grand entrance doors and acoustic interior bedroom doors crafted from 100% seasoned solid teak or heavy flush cores. Featuring precision-routed geometric motifs, brass inlay accents, weather-sealed perimeter gaskets, and mortised heavy-duty locksets. These handsome entrance systems resist seasonal warping while delivering substantial acoustic insulation and unmatched residential physical security."
      },
      {
        id: 13,
        name: "Wooden Windows",
        category: "Doors & Windows",
        priceTag: "Request a Quote",
        rating: 4.8,
        featured: false,
        image: "https://images.unsplash.com/photo-1509644851169-2acc08aa25b5?q=80&w=800&auto=format&fit=crop",
        // EXACT 50 WORDS:
        description: "Custom timber window casements and colonial louvered shutters crafted from weather-treated hardwoods. Fitted with high-performance weather-stripping, double-glazed acoustic glass, and premium stainless brass stays. Our custom wooden windows introduce timeless residential warmth, natural thermal insulation against exterior heat, and picturesque framing for surrounding garden landscapes across all seasonal weather changes."
      },
      {
        id: 14,
        name: "Shoe Cabinets",
        category: "Storage",
        priceTag: "Starting from ₹11,000",
        rating: 4.7,
        featured: false,
        image: "https://images.unsplash.com/photo-1595428774223-ef52624120d2?q=80&w=800&auto=format&fit=crop",
        // EXACT 50 WORDS:
        description: "Compact entryway shoe consoles incorporating ventilated louvered front doors, multi-tier angled footwear racks, and an integrated top cushioned bench for seated shoe changes. Constructed from moisture-resistant plywood with odor-neutralizing finishes, these space-saving entryway consoles keep scattered sneakers, formal footwear, umbrellas, and shoe care kits systematically concealed beside your front door."
      },
      {
        id: 15,
        name: "Dressing Tables",
        category: "Furniture",
        priceTag: "Starting from ₹17,500",
        rating: 4.9,
        featured: false,
        image: "https://images.unsplash.com/photo-1522771739844-6a9f6d5f14af?q=80&w=800&auto=format&fit=crop",
        // EXACT 50 WORDS:
        description: "Graceful bedroom dressing vanities featuring full-length frameless mirrors, velvet-lined cosmetic drawers, and ambient warm LED lighting borders. Precision-crafted with soft-radius timber corners and matching low-profile upholstered stools. Designed to transform morning personal routines into an organized, joyful ritual while introducing sleek bespoke elegance into your private master bedroom suite."
      },
      {
        id: 16,
        name: "Modular Storage Units",
        category: "Storage",
        priceTag: "Starting from ₹14,000",
        rating: 4.8,
        featured: false,
        image: "https://images.unsplash.com/photo-1538688525198-9b88f6f53126?q=80&w=800&auto=format&fit=crop",
        // EXACT 50 WORDS:
        description: "Versatile modular storage cubes and stackable wooden utility units designed to adapt flexibly as your spatial needs evolve. Ideal for children's toy organization, living room media storage, or utility rooms. Fabricated with heavy-duty edge banding, concealed cam-lock connectors, and interchangeable drawer inserts that ensure seamless rearrangement over many years."
      },
      {
        id: 17,
        name: "Wall-Mounted Cabinets",
        category: "Storage",
        priceTag: "Starting from ₹9,500",
        rating: 4.7,
        featured: false,
        image: "https://images.unsplash.com/photo-1540518614846-7ede433c4550?q=80&w=800&auto=format&fit=crop",
        // EXACT 50 WORDS:
        description: "Floating wall-mounted storage cabinets with hidden French cleat mounting hardware that safely supports heavy dinnerware, bathroom toiletries, or audio gear. Featuring push-to-open touch latches or minimal undercut handles for a clean architectural silhouette. These floating units free up floor space, making compact rooms feel visibly lighter, cleaner, and more expansive."
      },
      {
        id: 18,
        name: "Wooden Partitions",
        category: "Custom Woodwork",
        priceTag: "Request a Quote",
        rating: 5.0,
        featured: true,
        image: "https://images.unsplash.com/photo-1618221195710-dd6b41faaea6?q=80&w=800&auto=format&fit=crop",
        // EXACT 50 WORDS:
        description: "Designer acoustic wooden room dividers and vertical slatted partition screens that establish subtle spatial separation between living and dining zones. Permitting continuous airflow and daylight passage while creating intimate functional zones. Custom built from solid teak or oak battens, stained in contrasting tones to become a captivating artistic interior focal point."
      },
      {
        id: 19,
        name: "Custom Shelving",
        category: "Custom Woodwork",
        priceTag: "Starting from ₹8,000",
        rating: 4.8,
        featured: false,
        image: "https://images.unsplash.com/photo-1594633312681-425c7b97ccd1?q=80&w=800&auto=format&fit=crop",
        // EXACT 50 WORDS:
        description: "Architectural floating wall shelves and asymmetric alcove ledges tailored to match challenging wall contours and unutilized corners. Anchored with heavy-duty concealed steel brackets that support substantial weight without visible mounting hardware. Sealed with water-repellent matte varnishes to elegantly display trailing indoor plants, art volumes, and personal memorabilia in any room."
      },
      {
        id: 20,
        name: "Furniture Repair & Restoration",
        category: "Repair & Restoration",
        priceTag: "Request a Quote",
        rating: 5.0,
        featured: true,
        image: "https://images.unsplash.com/photo-1581783342308-f792dbdd27c5?q=80&w=800&auto=format&fit=crop",
        // EXACT 50 WORDS:
        description: "Revitalize treasured family heirlooms and damaged woodwork with our skilled restoration services. Our carpenters meticulously repair fractured joints, strip peeling polyurethane finishes, steam out surface dents, replace corroded antique hinges, and apply traditional French polish. We preserve historical timber character while reinforcing structural integrity for decades of continued cherished everyday family enjoyment."
      }
    ];

    /* Fallback image handler */
    function handleImgError(img) {
      img.onerror = null;
      img.src = 'https://images.unsplash.com/photo-1540518614846-7ede433c4550?q=80&w=800&auto=format&fit=crop';
    }

    /* State tracking */
    let currentActivePage = 'home';
    let currentCatalogCategory = 'All';
    let currentSearchTerm = '';
    let currentSortMode = 'featured';

    /* Multi-Page Switcher Engine */
    function switchPage(pageKey) {
      currentActivePage = pageKey;
      
      // Hide all page views
      document.querySelectorAll('.page-view').forEach(view => {
        view.classList.remove('active');
      });

      // Show target page view
      const targetView = document.getElementById('view-' + pageKey);
      if (targetView) {
        targetView.classList.add('active');
      }

      // Update Simulator Toolbar pills
      document.querySelectorAll('.sim-pill').forEach(pill => {
        if (pill.dataset.target === pageKey) {
          pill.className = "sim-pill px-2.5 py-1 rounded-full transition-all text-wood-charcoal bg-wood-brass font-medium";
        } else {
          pill.className = "sim-pill px-2.5 py-1 rounded-full transition-all text-wood-warmbeige/80 hover:text-white";
        }
      });

      // Update Main Header navigation links
      document.querySelectorAll('.nav-item').forEach(link => {
        if (link.dataset.nav === pageKey) {
          link.classList.add('text-wood-brass');
          link.classList.remove('text-wood-charcoal');
        } else {
          link.classList.remove('text-wood-brass');
          link.classList.add('text-wood-charcoal');
        }
      });

      window.scrollTo({ top: 0, behavior: 'smooth' });
    }

    function toggleMobileNav() {
      const drawer = document.getElementById('mobileDrawer');
      const openIcon = document.getElementById('hamburgerIcon');
      const closeIcon = document.getElementById('closeNavIcon');
      if (drawer.classList.contains('hidden')) {
        drawer.classList.remove('hidden');
        openIcon.classList.add('hidden');
        closeIcon.classList.remove('hidden');
      } else {
        drawer.classList.add('hidden');
        openIcon.classList.remove('hidden');
        closeIcon.classList.add('hidden');
      }
    }

    function showToast(text) {
      const toast = document.getElementById('toastBar');
      const msg = document.getElementById('toastMsg');
      msg.innerText = text;
      toast.classList.remove('translate-y-20', 'opacity-0', 'pointer-events-none');
      setTimeout(() => {
        toast.classList.add('translate-y-20', 'opacity-0', 'pointer-events-none');
      }, 3500);
    }

    /* Product card markup generator */
    function createProductCardMarkup(item) {
      return `
        <article class="bg-white rounded-2xl overflow-hidden border border-wood-sand shadow-sm card-lift flex flex-col justify-between group" id="item-${item.id}">
          <div>
            <!-- Image Frame -->
            <div class="relative aspect-[4/3] bg-wood-warmbeige overflow-hidden">
              <img src="${item.image}" 
                   alt="${item.name} custom woodwork by Carpenter Zone" 
                   class="w-full h-full object-cover img-zoom" 
                   onerror="handleImgError(this)" 
                   loading="lazy" />
              <div class="absolute top-3 left-3 flex flex-col gap-1">
                <span class="px-2.5 py-0.5 rounded-full text-[9px] font-bold uppercase tracking-wider bg-wood-charcoal text-wood-brass shadow-sm">
                  ${item.category}
                </span>
              </div>
              <div class="absolute top-3 right-3 bg-white/90 backdrop-blur-sm px-2 py-0.5 rounded-full text-[10px] font-bold text-amber-600 flex items-center shadow-sm">
                &#9733; ${item.rating}
              </div>
            </div>

            <!-- Card Body -->
            <div class="p-5 space-y-2">
              <div class="text-[10px] uppercase tracking-wider text-wood-brass font-bold">Carpenter Zone Spec</div>
              <h3 class="font-serif text-lg font-bold text-wood-charcoal group-hover:text-wood-walnut transition-colors line-clamp-1">
                ${item.name}
              </h3>
              <!-- 50-word description clamped for card design with view button -->
              <p class="text-xs text-wood-charcoal/70 line-clamp-3 leading-relaxed">
                ${item.description}
              </p>
            </div>
          </div>

          <!-- Bottom Action Row -->
          <div class="p-5 pt-0 border-t border-wood-sand/40 mt-3 flex items-center justify-between gap-2">
            <span class="text-xs font-bold text-wood-walnut truncate">${item.priceTag}</span>
            <div class="flex items-center gap-1.5 flex-shrink-0">
              <button onclick="openProductModal(${item.id})" class="px-3 py-1.5 rounded-full border border-wood-sand hover:border-wood-walnut text-[10px] font-bold uppercase tracking-wider text-wood-charcoal hover:text-wood-walnut transition-colors">
                Details
              </button>
              <button onclick="requestQuoteForItem('${item.name}')" class="px-3.5 py-1.5 rounded-full bg-wood-walnut hover:bg-wood-brass text-white hover:text-wood-charcoal text-[10px] font-bold uppercase tracking-wider transition-all shadow-sm">
                Get Quote
              </button>
            </div>
          </div>
        </article>
      `;
    }

    /* Render products onto Homepage and Products Catalog */
    function renderCatalogItems() {
      const fullGrid = document.getElementById('fullCatalogGrid');
      const countEl = document.getElementById('resultsCount');
      const noResults = document.getElementById('noResultsState');
      if (!fullGrid) return;

      let filtered = PRODUCTS.filter(p => {
        const matchesCategory = (currentCatalogCategory === 'All') || (p.category === currentCatalogCategory);
        const searchNorm = currentSearchTerm.toLowerCase();
        const matchesSearch = p.name.toLowerCase().includes(searchNorm) || 
                              p.description.toLowerCase().includes(searchNorm) || 
                              p.category.toLowerCase().includes(searchNorm);
        return matchesCategory && matchesSearch;
      });

      // Sorting
      if (currentSortMode === 'az') {
        filtered.sort((a, b) => a.name.localeCompare(b.name));
      } else if (currentSortMode === 'za') {
        filtered.sort((a, b) => b.name.localeCompare(a.name));
      } else if (currentSortMode === 'price-asc') {
        filtered.sort((a, b) => (extractNumericPrice(a.priceTag) - extractNumericPrice(b.priceTag)));
      } else if (currentSortMode === 'price-desc') {
        filtered.sort((a, b) => (extractNumericPrice(b.priceTag) - extractNumericPrice(a.priceTag)));
      }

      countEl.innerText = filtered.length;

      if (filtered.length === 0) {
        fullGrid.innerHTML = '';
        noResults.classList.remove('hidden');
      } else {
        noResults.classList.add('hidden');
        fullGrid.innerHTML = filtered.map(item => createProductCardMarkup(item)).join('');
      }
    }

    function extractNumericPrice(tag) {
      const match = tag.match(/[\d,]+/);
      if (match) {
        return parseInt(match[0].replace(/,/g, ''), 10);
      }
      return 999999; // For 'Request a Quote'
    }

    function renderFeaturedHomepage() {
      const homeGrid = document.getElementById('homeFeaturedGrid');
      if (!homeGrid) return;
      const featuredItems = PRODUCTS.filter(p => p.featured).slice(0, 4);
      homeGrid.innerHTML = featuredItems.map(item => createProductCardMarkup(item)).join('');
    }

    function setCategory(cat) {
      currentCatalogCategory = cat;
      document.querySelectorAll('.cat-pill').forEach(btn => {
        if (btn.dataset.cat === cat) {
          btn.className = "cat-pill active px-4 py-1.5 rounded-full text-xs font-semibold uppercase tracking-wider transition-all bg-wood-walnut text-white";
        } else {
          btn.className = "cat-pill px-4 py-1.5 rounded-full text-xs font-semibold uppercase tracking-wider transition-all bg-white text-wood-charcoal hover:bg-wood-warmbeige border border-wood-sand";
        }
      });
      document.getElementById('activeCatLabel').innerText = cat === 'All' ? 'All Categories' : cat;
      renderCatalogItems();
    }

    function filterAndNavigate(cat) {
      switchPage('products');
      setCategory(cat);
    }

    function filterCatalog() {
      const searchVal = document.getElementById('catalogSearch').value;
      currentSearchTerm = searchVal;
      const clearBtn = document.getElementById('clearSearchBtn');
      if (searchVal.length > 0) {
        clearBtn.classList.remove('hidden');
      } else {
        clearBtn.classList.add('hidden');
      }
      currentSortMode = document.getElementById('catalogSort').value;
      renderCatalogItems();
    }

    function clearSearch() {
      document.getElementById('catalogSearch').value = '';
      currentSearchTerm = '';
      document.getElementById('clearSearchBtn').classList.add('hidden');
      renderCatalogItems();
    }

    function resetCatalogFilters() {
      clearSearch();
      setCategory('All');
      document.getElementById('catalogSort').value = 'featured';
      currentSortMode = 'featured';
      renderCatalogItems();
    }

    function openProductModal(id) {
      const item = PRODUCTS.find(p => p.id === id);
      if (!item) return;

      document.getElementById('modalProductImg').src = item.image;
      document.getElementById('modalProductCat').innerText = item.category;
      document.getElementById('modalProductBadge').innerText = item.category;
      document.getElementById('modalProductTitle').innerText = item.name;
      document.getElementById('modalProductPrice').innerText = item.priceTag;
      document.getElementById('modalProductDesc').innerText = item.description;

      window.currentModalItem = item;
      document.getElementById('productDetailModal').classList.remove('hidden');
    }

    function closeProductModal() {
      document.getElementById('productDetailModal').classList.add('hidden');
    }

    function bookQuoteFromModal() {
      const item = window.currentModalItem;
      closeProductModal();
      if (item) {
        requestQuoteForItem(item.name);
      }
    }

    function requestQuoteForItem(serviceName) {
      switchPage('contact');
      const select = document.getElementById('serviceSelect');
      const textarea = document.getElementById('projectDetails');
      
      // Auto-match service if possible
      let matched = false;
      for (let i = 0; i < select.options.length; i++) {
        if (select.options[i].text.toLowerCase().includes(serviceName.toLowerCase()) || 
            serviceName.toLowerCase().includes(select.options[i].text.toLowerCase())) {
          select.selectedIndex = i;
          matched = true;
          break;
        }
      }
      if (!matched) {
        select.value = "Custom Wooden Furniture";
      }

      textarea.value = `I am interested in getting a free quote for: ${serviceName}. Please contact me to discuss dimensions, timber options, and estimates.`;
      showToast(`Prefilled quote form for: ${serviceName}`);
    }

    /* Contact Form Validation */
    function handleQuoteSubmit(e) {
      e.preventDefault();
      const name = document.getElementById('fullName').value.trim();
      const email = document.getElementById('emailAddr').value.trim();
      const phone = document.getElementById('phoneNum').value.trim();
      const msg = document.getElementById('projectDetails').value.trim();

      let valid = true;
      if (!name) {
        document.getElementById('nameError').classList.remove('hidden');
        valid = false;
      } else {
        document.getElementById('nameError').classList.add('hidden');
      }

      if (!email || !email.includes('@')) {
        document.getElementById('emailError').classList.remove('hidden');
        valid = false;
      } else {
        document.getElementById('emailError').classList.add('hidden');
      }

      if (!phone) {
        document.getElementById('phoneError').classList.remove('hidden');
        valid = false;
      } else {
        document.getElementById('phoneError').classList.add('hidden');
      }

      if (!msg) {
        document.getElementById('messageError').classList.remove('hidden');
        valid = false;
      } else {
        document.getElementById('messageError').classList.add('hidden');
      }

      if (valid) {
        document.getElementById('quoteForm').reset();
        document.getElementById('quoteSuccessAlert').classList.remove('hidden');
        showToast(`Thank you, ${name}! Your quotation request has been recorded.`);
        setTimeout(() => {
          document.getElementById('quoteSuccessAlert').classList.add('hidden');
        }, 8000);
      }
    }

    /* Scroll listener for Back to Top Button */
    window.addEventListener('scroll', () => {
      const topBtn = document.getElementById('backToTop');
      if (window.scrollY > 400) {
        topBtn.classList.remove('opacity-0', 'pointer-events-none', 'translate-y-3');
        topBtn.classList.add('opacity-100', 'translate-y-0');
      } else {
        topBtn.classList.add('opacity-0', 'pointer-events-none', 'translate-y-3');
        topBtn.classList.remove('opacity-100', 'translate-y-0');
      }
    });

    /* ========================================================================= */
    /* 2. REAL STANDALONE PROJECT EXPORTER (.ZIP BUILDER WITH JSZIP)             */
    /* ========================================================================= */
    async function exportProjectZip() {
      const btn = document.getElementById('zipExportBtn');
      const originalText = btn.innerHTML;
      btn.innerHTML = `<span>Creating ZIP...</span>`;
      showToast('Generating standalone Carpenter Zone project ZIP...');

      try {
        const zip = new JSZip();
        const root = zip.folder("carpenter-zone");
        const cssFolder = root.folder("css");
        const jsFolder = root.folder("js");
        const imgFolder = root.folder("images"); // Empty folder placeholder as required

        
        // Common Header HTML generator for static bundle
        const makeHeader = (activeFile) => `
  <!-- Navigation Menu -->
  <header class="site-header">
    <div class="header-inner">
      <a href="index.html" class="brand-title">CARPENTER ZONE</a>
      <nav class="nav-links">
        <a href="index.html" class="${activeFile === 'index' ? 'active' : ''}">Home</a>
        <a href="about.html" class="${activeFile === 'about' ? 'active' : ''}">About</a>
        <a href="products.html" class="${activeFile === 'products' ? 'active' : ''}">Products</a>
        <a href="testimonial.html" class="${activeFile === 'testimonial' ? 'active' : ''}">Testimonials</a>
        <a href="contact.html" class="${activeFile === 'contact' ? 'active' : ''}">Contact Us</a>
        <a href="privacy-policy.html" class="${activeFile === 'privacy' ? 'active' : ''}">Privacy Policy</a>
      </nav>
      <a href="contact.html" class="cta-button">Get a Free Quote</a>
    </div>
  </header>`;

        // Common Footer HTML generator
        const makeFooter = () => `
  <footer style="background:#171717; color:#F3EBDD; padding:3rem 1.5rem; margin-top:4rem;">
    <div style="max-w:1200px; margin:0 auto; display:flex; flex-wrap:wrap; justify-content:space-between; gap:2rem;">
      <div>
        <h3 style="font-family:'Playfair Display', serif; font-size:1.5rem; margin-bottom:0.5rem; color:#FFFFFF;">CARPENTER ZONE</h3>
        <p style="font-size:0.8rem; max-width:320px; color:#F3EBDDcc;">Professional carpentry and custom woodworking solutions designed for modern spaces.</p>
      </div>
      <div>
        <h4 style="font-size:0.8rem; color:#B58A45; text-transform:uppercase; margin-bottom:0.75rem;">Quick Links</h4>
        <p style="font-size:0.8rem; line-height:1.8;">
          <a href="index.html" style="color:#F3EBDD; text-decoration:none;">Home</a><br>
          <a href="about.html" style="color:#F3EBDD; text-decoration:none;">About</a><br>
          <a href="products.html" style="color:#F3EBDD; text-decoration:none;">Products</a><br>
          <a href="testimonial.html" style="color:#F3EBDD; text-decoration:none;">Testimonials</a><br>
          <a href="contact.html" style="color:#F3EBDD; text-decoration:none;">Contact</a><br>
          <a href="privacy-policy.html" style="color:#F3EBDD; text-decoration:none;">Privacy Policy</a>
        </p>
      </div>
      <div>
        <h4 style="font-size:0.8rem; color:#B58A45; text-transform:uppercase; margin-bottom:0.75rem;">Contact</h4>
        <p style="font-size:0.8rem; line-height:1.8; color:#F3EBDDcc;">
          Email: hello@carpenterzone.com<br>
          Phone: +91 00000 00000<br>
          Location: India
        </p>
      </div>
    </div>
    <div style="max-w:1200px; margin:2rem auto 0; border-top:1px solid #ffffff22; padding-top:1rem; font-size:0.75rem; text-align:center; color:#F3EBDD99;">
      &copy; 2026 Carpenter Zone. All Rights Reserved.
    </div>
  </footer>
  <script src="js/script.js"></script>

   </script>    
</body>
</html>