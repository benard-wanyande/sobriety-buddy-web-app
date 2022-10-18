@if ($clicked === 'False')
<div wire:click="toLoginPage" >
    {{-- Stop trying to control. --}}  
    <div class="bg-gradient-to-r from-green-400 to-blue-500 grid place-content-center place-items-center h-screen w-screen" >
        {{-- Background wallpaper --}}
        <div class="style bg-white text-neutral-400 h-16 w-16 grid place-content-center place-items-center rounded mb-8 text-2xl font-bold">
            {{-- Sobriety buddy logo --}}
            SB
        </div>
        <div class="style">
            {{-- Sobriety buddy text --}}
            <h1 class="animate-pulse text-xl font-bold text-white">
                SOBRIETY BUDDY
            </h1>
        </div>
        <style>
            .style {
                animation: fadeIn 10s;
                -webkit-animation: fadeIn 10s;
                -moz-animation: fadeIn 10s;
                -o-animation: fadeIn 10s;
                -ms-animation: fadeIn 10s;
            }
            @keyframes fadeIn {
            0% { opacity: 0; }
            100% { opacity: 1; }
            }

            @-moz-keyframes fadeIn {
            0% { opacity: 0; }
            100% { opacity: 1; }
            }

            @-webkit-keyframes fadeIn {
            0% { opacity: 0; }
            100% { opacity: 1; }
            }

            @-o-keyframes fadeIn {
            0% { opacity: 0; }
            100% { opacity: 1; }
            }

            @-ms-keyframes fadeIn {
            0% { opacity: 0; }
            100% { opacity: 1; }
            }
        </style>
    </div>
</div>

@elseif ($clicked === 'True')
<div class="">
    <div class="bg-gradient-to-r from-green-400 to-blue-500 grid h-screen w-screen" >
        {{-- Background wallpaper --}}
        <style>
            .style {
                animation: fadeIn 5s;
                -webkit-animation: fadeIn 5s;
                -moz-animation: fadeIn 5s;
                -o-animation: fadeIn 5s;
                -ms-animation: fadeIn 5s;
            }
            @keyframes fadeIn {
            0% { opacity: 0; }
            100% { opacity: 1; }
            }

            @-moz-keyframes fadeIn {
            0% { opacity: 0; }
            100% { opacity: 1; }
            }

            @-webkit-keyframes fadeIn {
            0% { opacity: 0; }
            100% { opacity: 1; }
            }

            @-o-keyframes fadeIn {
            0% { opacity: 0; }
            100% { opacity: 1; }
            }

            @-ms-keyframes fadeIn {
            0% { opacity: 0; }
            100% { opacity: 1; }
            }
        </style>
        <div class="style justify-self-end">
            {{-- Sign in button --}}
            <button class="py-4 px-10 m-8 font-semibold rounded text-white text-base font-normal bg-green-500 lg:mr-16 hover:bg-opacity-90">Sign In</button>
        </div>
        <div class="lg:justify-self-center md:justify-self-center md:ml-0 lg:text-center md:text-center lg:ml-0 style justify-self-end text-right m-8 ml-32 text-white">
            {{-- Motivational message --}}
            <h1 class="font-bold text-xl lg:mb-4 md:mb-2">First of all, congrats!</h1>
            <p>You have taken a big step on the path to sobriety</p>
        </div>
        <div class="style font-semibold text-base justify-self-center">
            {{-- Get started button --}}
            <button class="py-4 rounded-md m-4 px-10 text-center text-white font-semibold bg-blue-700 hover:bg-opacity-90">Get Started</button>
        </div>
    </div>
</div>
@endif
