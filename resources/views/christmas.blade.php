<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Merry Christmas, Visa</title>

    <!-- Tailwind CSS -->
    <script src="https://cdn.tailwindcss.com"></script>

    <!-- jQuery -->
    <script src="https://code.jquery.com/jquery-3.7.1.min.js"></script>

    <!-- Google Fonts -->
    <link href="https://fonts.googleapis.com/css2?family=Cinzel:wght@400;600&family=Lato:wght@300;400&family=Playfair+Display:ital,wght@0,400;0,600;0,700;1,400&display=swap" rel="stylesheet">

    <script>
        tailwind.config = {
            theme: {
                extend: {
                    fontFamily: {
                        'serif': ['"Playfair Display"', 'serif'],
                        'sans': ['Lato', 'sans-serif'],
                        'cinzel': ['Cinzel', 'serif'],
                    },
                    colors: {
                        'gold-light': '#FCE7AC',
                        'gold-med': '#D4AF37',
                        'gold-dark': '#C5A059',
                    },
                    backgroundImage: {
                        'gold-gradient': 'linear-gradient(135deg, #FCE7AC 0%, #C5A059 50%, #FCE7AC 100%)',
                    },
                    dropShadow: {
                        'glow': '0 0 10px rgba(252, 231, 172, 0.5)',
                        'red-glow': '0 0 10px rgba(239, 68, 68, 0.8)',
                    }
                }
            }
        }
    </script>

    <style>
        body {
            background-color: #050505;
            overflow-x: hidden;
            overflow-y: auto;
        }

        /* Canvas for Realistic Snow */
        #snow-canvas {
            position: fixed;
            top: 0;
            left: 0;
            width: 100%;
            height: 100%;
            pointer-events: none;
            z-index: 50;
        }

        /* Refined Content Gradient */
        .content-gradient {
            background: linear-gradient(to bottom,
                rgba(0,0,0,0) 0%,
                rgba(0,0,0,0.3) 15%,
                rgba(0,0,0,0.7) 40%,
                rgba(0,0,0,0.85) 100%);
            backdrop-filter: blur(1px);
            -webkit-backdrop-filter: blur(1px);
        }

        /* Typography Effects */
        .text-gradient-gold {
            background: linear-gradient(to right, #bf953f, #fcf6ba, #b38728, #fbf5b7, #aa771c);
            -webkit-background-clip: text;
            -webkit-text-fill-color: transparent;
            background-size: 200% auto;
            animation: shine 5s linear infinite;
        }

        @keyframes shine {
            to {
                background-position: 200% center;
            }
        }

        .text-shadow-elegant {
            text-shadow: 0 2px 4px rgba(0, 0, 0, 0.8);
        }

        /* Glassmorphism Card */
        .glass-card {
            background: rgba(0, 0, 0, 0.4);
            backdrop-filter: blur(8px);
            -webkit-backdrop-filter: blur(8px);
            border: 1px solid rgba(255, 255, 255, 0.1);
            box-shadow: 0 8px 32px 0 rgba(0, 0, 0, 0.37);
        }

        /* Entrance Animations */
        .reveal-up {
            opacity: 0;
            transform: translateY(40px);
            transition: all 1.4s cubic-bezier(0.2, 0.8, 0.2, 1);
        }

        .reveal-up.active {
            opacity: 1;
            transform: translateY(0);
        }

        /* Progress Bar Transition */
        #progress-bar {
            transition: width 0.1s linear;
        }

        /* Smooth fade for scroll indicator */
        #scroll-indicator {
            transition: opacity 0.5s ease-in-out;
        }
    </style>
</head>
<body class="w-full relative text-gray-100 antialiased selection:bg-gold-dark selection:text-white">

    <!-- Top Scroll Progress Bar -->
    <div class="fixed top-0 left-0 w-full h-1 z-[60] bg-white/5">
        <div id="progress-bar" class="h-full bg-gradient-to-r from-gold-dark via-gold-light to-gold-dark w-0 shadow-[0_0_15px_rgba(252,231,172,0.6)] rounded-r-full"></div>
    </div>

    <!-- Fixed Background Image Container -->
    <div class="fixed inset-0 z-0 bg-black flex items-center justify-center">
        <!-- Full Screen Object Cover -->
        <img src="https://res.cloudinary.com/dqykb5j5k/image/upload/v1766600051/church_slexno.jpg"
             class="w-full h-full object-cover object-center opacity-80"
             alt="Church Background">
        
        <!-- Vignette Overlay for focus -->
        <div class="absolute inset-0 bg-gradient-to-t from-black/60 via-transparent to-black/30"></div>
    </div>

    <!-- Realistic Snow Canvas -->
    <canvas id="snow-canvas"></canvas>

    <!-- Scroll Indicator (Red & Glowing) -->
    <div id="scroll-indicator" class="fixed bottom-12 inset-x-0 z-40 flex flex-col items-center justify-center animate-bounce pointer-events-none opacity-0 transition-opacity duration-700">
        <span class="text-xs font-bold tracking-[0.2em] mb-2 font-sans text-red-500 drop-shadow-red-glow uppercase">Scroll Down</span>
        <svg xmlns="http://www.w3.org/2000/svg" class="h-8 w-8 text-red-500 drop-shadow-red-glow" fill="none" viewBox="0 0 24 24" stroke="currentColor">
            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M19 13l-7 7-7-7m14-8l-7 7-7-7" />
        </svg>
    </div>

    <!-- Main Scrollable Container -->
    <div class="relative z-10 w-full flex flex-col items-center">

        <!-- Spacer -->
        <div class="h-[50vh] w-full"></div>

        <!-- Content Section -->
        <main class="w-full content-gradient px-6 pb-32 pt-20 flex flex-col items-center text-center min-h-[60vh]">

            <div class="max-w-2xl w-full">

                <!-- Title Block -->
                <div class="reveal-up mb-16">
                    <p class="font-cinzel text-gold-light text-sm tracking-[0.3em] mb-4 text-shadow-elegant opacity-90">To My Dearest</p>
                    <h1 class="font-serif text-6xl md:text-8xl font-bold tracking-tight text-gradient-gold drop-shadow-2xl py-2">
                        Visa
                    </h1>
                </div>

                <!-- Opening Message -->
                <div class="space-y-10 font-sans text-lg md:text-xl font-light leading-loose text-gray-100">

                    <p class="reveal-up font-serif italic text-3xl text-white text-shadow-elegant border-b border-white/10 pb-8 inline-block px-10">
                        Merry Christmas
                    </p>

                    <div class="reveal-up space-y-4">
                        <p class="text-shadow-elegant">I want you to know that I am always here for you.</p>
                        <p class="text-gold-light font-serif text-2xl tracking-wide text-shadow-elegant drop-shadow-lg">Never think of me as a stranger.</p>
                    </div>

                    <p class="reveal-up opacity-90 text-shadow-elegant max-w-lg mx-auto">
                        I am the same person from our old days. <br>
                        Perhaps the only thing that has changed <br>
                        is the way you see me now.
                    </p>

                    <!-- Wishes -->
                    <div class="reveal-up py-8 px-4">
                        <p class="mb-6 text-shadow-elegant">
                            My heart silently prays for your well-being every day. 
                            May you be blessed with perfect health, safety, and a life filled with the joy you truly deserve.
                        </p>
                        <p class="text-white font-medium text-shadow-elegant">
                            I also send my deepest, heartfelt wishes for your mom. <br>
                            May God bless her with good health, strength, and happiness always.
                        </p>
                    </div>

                    <!-- Divider icon -->
                    <div class="reveal-up text-gold-dark/60 text-2xl my-8">✦</div>

                    <!-- Bible Section -->
                    <div class="reveal-up space-y-8">
                         <p class="text-base font-light italic text-gray-300 px-4 leading-relaxed text-shadow-elegant">
                            You know I am not very good at reading the Bible, but I always try and respect.
                            So today, I opened the Bible app you installed and just started reading. 
                            I may not understand everything perfectly yet, but when I stumbled across these lines, my heart just stopped. 
                            I didn't have to look far—these words felt like they were written exactly for how I feel right now:
                        </p>

                        <!-- Glass Card -->
                        <div class="glass-card rounded-xl p-8 md:p-10 mx-2 transition-transform duration-700 hover:scale-[1.01]">
                            <div class="mb-8">
                                <p class="font-serif italic text-2xl md:text-3xl text-gold-light leading-relaxed drop-shadow-md">
                                    "I thank my God every time I remember you."
                                </p>
                            </div>

                            <div>
                                <p class="font-serif italic text-lg md:text-2xl text-white/95 leading-relaxed drop-shadow-md">
                                    "I pray that you may enjoy good health and that all may go well with you."
                                </p>
                            </div>
                        </div>
                    </div>

                    <!-- Closing Quote -->
                    <div class="reveal-up mt-16 mx-auto max-w-md">
                        <div class="h-px w-16 bg-gold-dark/50 mx-auto mb-6"></div>
                        <p class="text-sm md:text-base italic text-gray-300 text-shadow-elegant font-serif leading-relaxed">
                            "I know you have restrictions, and I cannot do anything special or grand. So I am just sending this small, silent wish to let you know you are loved."
                        </p>
                    </div>

                </div>

                <!-- Footer -->
                <div class="reveal-up mt-20 mb-10">
                    <p class="font-cinzel text-gold-dark text-[10px] tracking-[0.2em] uppercase mb-4 opacity-80">Yours Always</p>
                    <p class="font-serif text-3xl text-white text-shadow-elegant">stupid or once stupid</p>
                </div>

            </div>
        </main>
    </div>

    <script>
        $(document).ready(function() {

            // 1. Text Entrance Animation
            const observerOptions = {
                root: null,
                rootMargin: '0px',
                threshold: 0.1
            };

            const observer = new IntersectionObserver((entries, observer) => {
                entries.forEach(entry => {
                    if (entry.isIntersecting) {
                        entry.target.classList.add('active');
                        observer.unobserve(entry.target);
                    }
                });
            }, observerOptions);

            $('.reveal-up').each(function() {
                observer.observe(this);
            });

            // 2. REALISTIC SNOW ENGINE (Canvas)
            const canvas = document.getElementById('snow-canvas');
            const ctx = canvas.getContext('2d');

            let width, height;
            let flakes = [];

            // Configuration
            const flakeCount = 150; // Number of flakes
            const minSize = 0.5;
            const maxSize = 3;
            const minSpeed = 0.5;
            const maxSpeed = 2;

            function resize() {
                width = window.innerWidth;
                height = window.innerHeight;
                canvas.width = width;
                canvas.height = height;
            }

            class Snowflake {
                constructor() {
                    this.reset(true);
                }

                reset(initial = false) {
                    this.x = Math.random() * width;
                    this.y = initial ? Math.random() * height : -10;
                    this.size = Math.random() * (maxSize - minSize) + minSize;
                    this.speedY = Math.random() * (maxSpeed - minSpeed) + minSpeed;
                    this.speedX = 0;
                    this.sway = Math.random() * 0.1; 
                    this.swaySpeed = Math.random() * 0.05;
                    this.opacity = Math.random() * 0.5 + 0.3;
                    this.angle = Math.random() * Math.PI * 2;
                }

                update() {
                    this.y += this.speedY;
                    this.angle += this.swaySpeed;
                    this.x += Math.sin(this.angle) * this.sway;

                    // Wrap around
                    if (this.y > height) {
                        this.reset();
                    }
                    if (this.x > width) {
                        this.x = 0;
                    } else if (this.x < 0) {
                        this.x = width;
                    }
                }

                draw() {
                    ctx.beginPath();
                    ctx.arc(this.x, this.y, this.size, 0, Math.PI * 2);
                    ctx.fillStyle = `rgba(255, 255, 255, ${this.opacity})`;
                    ctx.fill();
                }
            }

            function initSnow() {
                resize();
                for (let i = 0; i < flakeCount; i++) {
                    flakes.push(new Snowflake());
                }
                animateSnow();
            }

            function animateSnow() {
                ctx.clearRect(0, 0, width, height);
                flakes.forEach(flake => {
                    flake.update();
                    flake.draw();
                });
                requestAnimationFrame(animateSnow);
            }

            window.addEventListener('resize', resize);
            initSnow();


            // 3. Scroll Behavior & Auto Scroll
            const $scrollIndicator = $('#scroll-indicator');
            const $progressBar = $('#progress-bar');
            let scrollTimeout;
            let hasUserScrolled = false;

            // Show indicator initially after delay if top
            setTimeout(() => {
                if($(window).scrollTop() < 50) {
                    $scrollIndicator.removeClass('opacity-0');
                }
            }, 1000);

            $(window).on('scroll', function() {
                hasUserScrolled = true;
                const scrollTop = $(this).scrollTop();
                const docHeight = $(document).height();
                const winHeight = $(window).height();

                // Progress Bar
                const scrollPercent = (scrollTop / (docHeight - winHeight)) * 100;
                $progressBar.css('width', scrollPercent + '%');

                // HIDE Indicator while scrolling
                $scrollIndicator.addClass('opacity-0');
                
                clearTimeout(scrollTimeout);

                // SHOW Indicator if scrolling stops (and not at bottom)
                scrollTimeout = setTimeout(function() {
                    const isAtBottom = (scrollTop + winHeight) >= (docHeight - 20); // Tolerance
                    
                    if (!isAtBottom) {
                        $scrollIndicator.removeClass('opacity-0');
                    } else {
                        // If at bottom, ensure it stays hidden
                        $scrollIndicator.addClass('opacity-0');
                    }
                }, 500); // 0.5s wait after scroll stops
            });

            // 4. Auto-Scroll Logic: If user hasn't scrolled in 3 seconds, nudge them
            setTimeout(function() {
                if (!hasUserScrolled && $(window).scrollTop() < 10) {
                    $('html, body').animate({
                        scrollTop: $(window).height() * 0.35
                    }, 2500, 'swing'); // Gentle scroll down
                }
            }, 3000);

            $(window).on('mousedown wheel touchstart', function() {
                $('html, body').stop(); // Stop auto-scroll if user interacts
            });
        });
    </script>
</body>
</html>