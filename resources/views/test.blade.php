<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Livewire</title>

    <script src="https://cdn.tailwindcss.com"></script>
    <link href='https://unpkg.com/boxicons@2.1.4/css/boxicons.min.css' rel='stylesheet'>

    <style>
        * {
            margin: 0;
            padding: 0;
            box-sizing: border-box;
            font-family: "Poppins",sans-serif
        }
        body{
            min-height: 100vh;
            /* background: url('https://www.usnews.com/dims4/USNEWS/d754e45/2147483647/crop/2000x1334+0+0/resize/970x647/quality/85/?url=https%3A%2F%2Fwww.usnews.com%2Fcmsmedia%2F75%2F77%2F28b9c03949ceb1e855bfa2b78c46%2F200109-veterinarian-stock.jpg'); */
            background-size: cover;
            background-position: center;
        }


    </style>
    @livewireStyles

</head>
<body>
    
    {{-- <livewire:counter />  --}}

    

    <!-- component -->
<div class="h-screen w-full overflow-hidden flex flex-nowrap text-center" id="slider">
    <div class="bg-blue-600 text-white space-y-4 flex-none w-full flex flex-col items-center justify-center">
        <h2 class="text-4xl max-w-md">Your Big Ideia</h2>
        <p class="max-w-md">It's fast, flexible, and reliable — with zero-runtime.</p>
    </div>
    <div class="bg-pink-400 text-white space-y-4 flex-none w-full flex flex-col items-center justify-center">
        <h2 class="text-4xl max-w-md">Tailwind CSS works by scanning all of your HTML</h2>
        <p class="max-w-md">It's fast, flexible, and reliable — with zero-runtime.</p>
    </div>
    <div class="bg-teal-500 text-white space-y-4 flex-none w-full flex flex-col items-center justify-center">
        <h2 class="text-4xl max-w-md">React, Vue, and HTML</h2>
        <p class="max-w-md">Accessible, interactive examples for React and Vue powered by Headless UI, plus vanilla HTML if you’d rather write any necessary JS yourself.</p>
    </div>
</div>
<script>
document.addEventListener('DOMContentLoaded', () => {
    const slider = document.querySelector('#slider');
    setTimeout(function moveSlide() {
        const max = slider.scrollWidth - slider.clientWidth;
        const left = slider.clientWidth;

        if (max === slider.scrollLeft) {
            slider.scrollTo({left: 0, behavior: 'smooth'})
        } else {
            slider.scrollBy({left, behavior: 'smooth'})
        }

        setTimeout(moveSlide, 2000)
    }, 2000)

})
</script>
    @livewireScripts
</body>
</html>