<!DOCTYPE html>
<html lang="en" class="h-full bg-gray-100">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    @vite('resources/css/app.css')
    <link rel="stylesheet" href="https://rsms.me/inter/inter.css">
    <link href="https://cdn.jsdelivr.net/npm/tailwindcss@2.2.19/dist/tailwind.min.css" rel="stylesheet">
    <script defer src="https://cdn.jsdelivr.net/npm/alpinejs@3.x.x/dist/cdn.min.js"></script>
    <title>Obesity Classification</title>

</head>

<body class="h-full">
    <section class="h-screen bg-gray-800 py-20">
        <div class="max-w-5xl mx-auto px-6 lg:px-8 flex flex-col items-center justify-center text-center">
            <h2 class="text-4xl lg:text-5xl text-white font-bold mb-8">My Website is Coming Soon</h2>
            <p class="text-gray-400 text-lg lg:text-xl leading-relaxed mb-12">
                Sike! ini jadwal wisuda 1 Politeknik Negeri Padang
            </p>
            <div class="flex flex-wrap items-center justify-center gap-4 p-2">
                <div class="bg-white rounded-full px-6 py-2 min-w-[120px]">
                    <div id="days" class="font-bold text-xl text-gray-800"></div>
                    <div class="text-xs uppercase text-gray-500">days</div>
                </div>
                <div class="bg-white rounded-full px-6 py-2 min-w-[120px]">
                    <div id="hours" class="font-bold text-xl text-gray-800"></div>
                    <div class="text-xs uppercase text-gray-500">hours</div>
                </div>
                <div class="bg-white rounded-full px-6 py-2 min-w-[120px]">
                    <div id="minutes" class="font-bold text-xl text-gray-800"></div>
                    <div class="text-xs uppercase text-gray-500">minutes</div>
                </div>
                <div class="bg-white rounded-full px-6 py-2 min-w-[120px]">
                    <div id="seconds" class="font-bold text-xl text-gray-800"></div>
                    <div class="text-xs uppercase text-gray-500">seconds</div>
                </div>
            </div>
        </div>
    </section>

    <script>
        // Set the date we're counting down to
        var countDownDate = new Date("Aug 31, 2024 09:00:00").getTime();

        // Update the countdown every 1 second
        var x = setInterval(function() {

            // Get today's date and time
            var now = new Date().getTime();

            // Find the distance between now and the count down date
            var distance = countDownDate - now;

            // Time calculations for days, hours, minutes and seconds
            var days = Math.floor(distance / (1000 * 60 * 60 * 24));
            var hours = Math.floor((distance % (1000 * 60 * 60 * 24)) / (1000 * 60 * 60));
            var minutes = Math.floor((distance % (1000 * 60 * 60)) / (1000 * 60));
            var seconds = Math.floor((distance % (1000 * 60)) / 1000);

            // Display the result in the corresponding elements
            document.getElementById("days").textContent = days + "d";
            document.getElementById("hours").textContent = hours + "h";
            document.getElementById("minutes").textContent = minutes + "m";
            document.getElementById("seconds").textContent = seconds + "s";


            // If the count down is over, write some text 
            if (distance < 0) {
                clearInterval(x);
                document.getElementById("countdown").innerHTML = "EXPIRED";
            }
        }, 1000);
    </script>
    </div>
</body>

</html>
