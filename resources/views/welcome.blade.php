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
    <link href="https://fonts.googleapis.com/css2?family=Lato:wght@300;400&family=Playfair+Display:ital,wght@0,400;0,600;0,700;1,400&display=swap" rel="stylesheet">

    <script>
        tailwind.config = {
            theme: {
                extend: {
                    fontFamily: {
                        'serif': ['"Playfair Display"', 'serif'],
                        'sans': ['Lato', 'sans-serif'],
                    },
                    colors: {
                        'gold-light': '#FCE7AC',
                        'gold-dark': '#C5A059',
                    },
                    dropShadow: {
                        'glow': '0 0 10px rgba(252, 231, 172, 0.5)',
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

        /* Snowflake styling */
        .snowflake {
            position: absolute;
            background-color: white;
            border-radius: 50%;
            pointer-events: none;
            z-index: 50;
        }

        /* Content Gradient */
        .content-gradient {
            background: linear-gradient(to bottom,
                rgba(0,0,0,0) 0%,
                rgba(0,0,0,0.4) 10%,
                rgba(0,0,0,0.8) 30%,
                rgba(0,0,0,0.95) 100%);
            backdrop-filter: blur(3px);
            -webkit-backdrop-filter: blur(3px);
        }

        /* Text Styling */
        .text-glow-gold {
            text-shadow: 0 0 15px rgba(197, 160, 89, 0.4);
        }

        .text-shadow-strong {
            text-shadow: 2px 2px 4px rgba(0, 0, 0, 0.8);
        }

        /* Entrance Animations */
        .reveal-up {
            opacity: 0;
            transform: translateY(30px);
            transition: all 1.2s cubic-bezier(0.2, 0.8, 0.2, 1);
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
<body class="w-full relative text-gray-100">

    <!-- Top Scroll Progress Bar -->
    <div class="fixed top-0 left-0 w-full h-1.5 z-[60] bg-white/5">
        <div id="progress-bar" class="h-full bg-gradient-to-r from-gold-dark to-gold-light w-0 shadow-[0_0_15px_rgba(252,231,172,0.6)] rounded-r-full"></div>
    </div>

    <!-- Fixed Background Image -->
    <div class="fixed inset-0 z-0">
        <img src="https://res.cloudinary.com/dqykb5j5k/image/upload/v1766600051/church_slexno.jpg"
             class="w-full h-full object-cover object-center"
             alt="Church Background">
        <div class="absolute inset-0 bg-gradient-to-t from-black/60 via-transparent to-black/30"></div>
    </div>

    <!-- Snow Container -->
    <div id="snow-container" class="fixed inset-0 z-50 pointer-events-none"></div>

    <!-- Scroll Indicator (UPDATED: Centered & Dynamic & RED GLOW) -->
    <!-- inset-x-0 + justify-center ensures perfect centering across full width -->
    <div id="scroll-indicator" class="fixed bottom-12 inset-x-0 z-40 flex flex-col items-center justify-center animate-bounce pointer-events-none">
        <span class="text-xs uppercase tracking-[0.3em] mb-2 font-sans font-bold text-red-500 drop-shadow-[0_0_5px_rgba(239,68,68,0.9)]">Scroll Down</span>
        <svg xmlns="http://www.w3.org/2000/svg" class="h-10 w-10 text-red-500 drop-shadow-[0_0_10px_rgba(239,68,68,0.8)]" fill="none" viewBox="0 0 24 24" stroke="currentColor">
            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="1" d="M19 13l-7 7-7-7m14-8l-7 7-7-7" />
        </svg>
    </div>

    <!-- Main Scrollable Container -->
    <div class="relative z-10 w-full flex flex-col items-center">

        <!-- Spacer -->
        <div class="h-[50vh] w-full"></div>

        <!-- Content Section -->
        <main class="w-full content-gradient px-6 pb-20 pt-16 flex flex-col items-center text-center min-h-[60vh]">

            <div class="max-w-xl w-full">

                <!-- Title Block -->
                <div class="reveal-up mb-10">
                    <p class="font-serif italic text-gold-light text-lg tracking-wider mb-2 text-shadow-strong">To My Dearest</p>
                    <h1 class="font-serif text-5xl md:text-7xl text-white font-bold tracking-wide text-glow-gold drop-shadow-lg">
                        Visa
                    </h1>
                </div>

                <!-- Opening Message -->
                <div class="space-y-8 font-sans text-lg md:text-xl font-light leading-relaxed text-gray-200">

                    <p class="reveal-up font-serif italic text-2xl text-white text-shadow-strong">
                        Merry Christmas.
                    </p>

                    <div class="reveal-up space-y-3">
                        <p class="text-shadow-strong">I want you to know that I am always here for you.</p>
                        <p class="text-gold-light font-serif text-2xl tracking-wide text-shadow-strong">Never think of me as a stranger.</p>
                    </div>

                    <p class="reveal-up opacity-90 text-shadow-strong">
                        I am the same person from our old days. <br>
                        Perhaps the only thing that has changed <br>
                        is the way you see me now.
                    </p>

                    <!-- Wishes -->
                    <div class="reveal-up py-4">
                        <p class="mb-4 text-shadow-strong">
                            My heart silently prays for your well-being every day.
                            May you be blessed with perfect health, safety, and a life filled with the joy you truly deserve.
                        </p>
                        <p class="text-white font-medium text-shadow-strong">
                            I also send my deepest, heartfelt wishes for your mom. <br>
                            May God bless her with good health, strength, and happiness always.
                        </p>
                    </div>

                    <!-- Divider -->
                    <div class="reveal-up w-24 h-px bg-gold-dark/60 mx-auto my-8"></div>

                    <!-- Bible Section -->
                    <div class="reveal-up space-y-6">
                         <p class="text-base md:text-lg font-light italic text-gray-300 px-2 leading-relaxed">
                            You know I am not very good at reading the Bible, but I always try and respect.
                            So today, I opened the Bible app you installed and just started reading.
                            I may not understand everything perfectly yet, but when I stumbled across these lines, my heart just stopped.
                            I didn't have to look far—these words felt like they were written exactly for how I feel right now:
                        </p>

                        <div class="bg-black/20 rounded-lg p-6 border border-white/10 shadow-inner">
                            <div class="mb-8">
                                <p class="font-serif italic text-xl md:text-3xl text-gold-light leading-relaxed drop-shadow-md">
                                    "I thank my God every time I remember you."
                                </p>
                            </div>

                            <div>
                                <p class="font-serif italic text-lg md:text-2xl text-white/90 leading-relaxed drop-shadow-md">
                                    "I pray that you may enjoy good health and that all may go well with you."
                                </p>
                            </div>
                        </div>
                    </div>

                    <!-- Closing Quote -->
                    <p class="reveal-up text-sm md:text-base italic text-gray-400 mt-10 mx-auto max-w-sm border-l border-gold-dark/50 pl-4 text-left">
                        "I know you have restrictions, and I cannot do anything special or grand. So I am just sending this small, silent wish to let you know you are loved."
                    </p>

                </div>

                <!-- Footer -->
                <div class="reveal-up mt-16 mb-8">
                    <p class="font-serif text-gold-dark text-xs tracking-widest uppercase mb-3">Yours Always,</p>
                    <p class="font-serif text-3xl text-white">Once stupid</p>
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


            // 2. Snowfall Logic
            const snowContainer = $('#snow-container');
            const maxSnowflakes = 50;

            function createSnowflake() {
                if ($('.snowflake').length > maxSnowflakes) return;

                const flake = $('<div class="snowflake"></div>');
                const size = Math.random() * 3 + 2;
                const startX = Math.random() * $(window).width();
                const opacity = Math.random() * 0.5 + 0.3;
                const duration = Math.random() * 5000 + 8000;

                flake.css({
                    width: size + 'px',
                    height: size + 'px',
                    left: startX + 'px',
                    top: '-10px',
                    opacity: opacity,
                    boxShadow: `0 0 ${size + 2}px white`
                });

                snowContainer.append(flake);

                flake.animate(
                    { top: '110vh' },
                    duration,
                    'linear',
                    function() { $(this).remove(); }
                );
            }

            setInterval(createSnowflake, 400);

            // 3. Scroll Behavior (Progress Bar + Smart Indicator)
            const $scrollIndicator = $('#scroll-indicator');
            const $progressBar = $('#progress-bar');
            let scrollTimeout;

            $(window).on('scroll', function() {
                const scrollTop = $(this).scrollTop();
                const docHeight = $(document).height();
                const winHeight = $(window).height();

                // A. Progress Bar
                const scrollPercent = (scrollTop / (docHeight - winHeight)) * 100;
                $progressBar.css('width', scrollPercent + '%');

                // B. Scroll Indicator Logic
                // 1. Hide immediately when scrolling starts
                $scrollIndicator.addClass('opacity-0');

                // 2. Clear existing timeout to prevent flickering
                clearTimeout(scrollTimeout);

                // 3. Set a timeout to check if we should show it again
                scrollTimeout = setTimeout(function() {
                    // Check if we are near the bottom (within 50px)
                    const isAtBottom = (scrollTop + winHeight) >= (docHeight - 50);

                    if (!isAtBottom) {
                        // User stopped, but not at the end -> Show Indicator
                        $scrollIndicator.removeClass('opacity-0');
                    } else {
                        // User is at the end -> Keep Hidden
                        $scrollIndicator.addClass('opacity-0');
                    }
                }, 800); // 800ms delay after scrolling stops
            });

            // 4. Auto-Scroll Logic (Gentle Start)
            setTimeout(function() {
                if ($(window).scrollTop() < 10) {
                    $('html, body').animate({
                        scrollTop: $(window).height() * 0.45
                    }, 3000, 'swing');
                }
            }, 3000);

            $(window).on('mousedown wheel touchstart', function() {
                $('html, body').stop();
            });
        });
    </script>
</body>
</html>
