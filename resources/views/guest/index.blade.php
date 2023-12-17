<x-guest-layout>
  
  <x-hero/>

  <x-service/>

  <div class="py-16 bg-[#f84525]">
    <div  class="container m-auto px-6 space-y-8 text-gray-500 md:px-12 lg:px-20">
        <div class="justify-center text-center gap-6 md:text-left md:flex lg:items-center  lg:gap-16">
            <div class="order-last mb-6 space-y-6 md:mb-0 md:w-6/12 lg:w-6/12">
                <h1 class="text-4xl text-white font-bold md:text-5xl">Jouw directe lijn naar deskundige dierenzorg!</span></h1>
                {{-- <p class="text-lg">Be part of millions people around the world using tailus in modern User Interfaces.</p> --}}
                <div class="flex flex-row-reverse flex-wrap justify-center gap-4 md:gap-6 md:justify-end">
                    {{-- <button type="button" title="Start buying" class="w-full py-3 px-6 text-center rounded-xl transition bg-gray-700 shadow-xl hover:bg-gray-600 active:bg-gray-700 focus:bg-gray-600 sm:w-max">
                        <span class="block text-white font-semibold">
                            Start buying
                        </span>
                    </button> --}}
                    <button type="button" title="more about" class="w-full order-first py-3 px-6 text-center rounded-xl bg-gray-100 transition hover:bg-gray-200 active:bg-gray-300 focus:bg-gray-200 sm:w-max">
                        <span class="block text-gray-600 font-semibold">
                            Registreer Nu
                        </span>
                    </button>
                </div>
            </div>
            <div class="grid grid-cols-5 grid-rows-4 gap-4 md:w-5/12 lg:w-6/12">
                <div class="col-span-2 row-span-4">
                    <img src="https://img.nieuwsblad.be/KRGdd3PIEFTOS40mjV0DXHnpjxI=/fit-in/960x640/https%3A%2F%2Fstatic.nieuwsblad.be%2FAssets%2FImages_Upload%2F2023%2F08%2F16%2Fec2616ef-007b-43b9-9e48-b9ae13daa1d6.jpg" class="rounded-full" width="640" height="960" alt="shoes" loading="lazy">
                </div>
                <div class="col-span-2 row-span-2">
                    <img src="https://img.nieuwsblad.be/KRGdd3PIEFTOS40mjV0DXHnpjxI=/fit-in/960x640/https%3A%2F%2Fstatic.nieuwsblad.be%2FAssets%2FImages_Upload%2F2023%2F08%2F16%2Fec2616ef-007b-43b9-9e48-b9ae13daa1d6.jpg" class="w-full h-full object-cover object-top rounded-xl" width="640" height="640" alt="shoe" loading="lazy">
                </div>
                <div class="col-span-3 row-span-3">
                    <img src="https://encrypted-tbn0.gstatic.com/images?q=tbn:ANd9GcTdPXGvmUTniMcb9Yu5s2gSWGurF-uUZWZXhA&usqp=CAU" class="w-full h-full object-cover object-top rounded-xl" width="640" height="427" alt="shoes" loading="lazy">
                </div>
            </div>
        </div>
    </div>
</div>



{{-- FAQ --}}
<div class="max-w-screen-xl mx-auto px-5 bg-white min-h-sceen">
  <div class="grid grid-cols-2">
	<div class="flex flex-col items-center">
		<h2 class="font-bold text-5xl mt-5 tracking-tight">
			Veelgestelde vragen
		</h2>
		<p class="text-neutral-500 text-xl mt-3">
			Het doel van een FAQ (Veelgestelde Vragen) is om gebruikers snel en gemakkelijk toegang te bieden tot antwoorden op de meest voorkomende vragen en om potentiële verwarring te verminderen, waardoor de gebruikerservaring wordt verbeterd en de klantenservicekosten kunnen worden verminderd. Het stelt bezoekers in staat om snel antwoorden te vinden op vragen die ze mogelijk hebben, waardoor ze efficiënter en zelfstandig door de website kunnen navigeren, wat uiteindelijk kan leiden tot hogere tevredenheid en conversiepercentages.
		</p>
	</div>
	<div class="grid divide-y divide-neutral-200 max-w-xl mx-auto mt-8">
		<div class="py-5">
			<details class="group" open>
				<summary class="flex justify-between items-center font-medium cursor-pointer list-none">
					<span> Wat is het doel van deze website?</span>
					<span class="transition group-open:rotate-180 bg-[#f84525] rounded-full">
                <svg fill="none" height="24" shape-rendering="geometricPrecision" stroke="white" stroke-linecap="round" stroke-linejoin="round" stroke-width="1.5" viewBox="0 0 24 24" width="24"><path d="M6 9l6 6 6-6"></path>
                </svg>
          </span>
				</summary>
				<p class="text-neutral-600 mt-3 group-open:animate-fadeIn">
          Onze website heeft als doel dierenliefhebbers te helpen bij het vinden van de dichtstbijzijnde dierenartsen en het verstrekken van uitgebreide informatie over deze dierenartsen.
				</p>
			</details>
		</div>
		<div class="py-5">
			<details class="group">
				<summary class="flex justify-between items-center font-medium cursor-pointer list-none">
					<span> Hoe kan ik een dierenarts vinden met behulp van deze website?</span>
					<span class="transition group-open:rotate-180 bg-[#f84525] rounded-full">
                <svg fill="none" height="24" shape-rendering="geometricPrecision" stroke="white" stroke-linecap="round" stroke-linejoin="round" stroke-width="1.5" viewBox="0 0 24 24" width="24"><path d="M6 9l6 6 6-6"></path>
</svg>
              </span>
				</summary>
				<p class="text-neutral-600 mt-3 group-open:animate-fadeIn">
					Het is eenvoudig! Voer gewoon je locatie in en kies het type dier waarvoor je zorg nodig hebt. We zullen je vervolgens de dichtstbijzijnde dierenartsen tonen die aan je criteria voldoen.
				</p>
			</details>
		</div>
		<div class="py-5">
			<details class="group">
				<summary class="flex justify-between items-center font-medium cursor-pointer list-none">
					<span> Zijn alle dierenartsen in mijn regio geregistreerd op deze website?</span>
					<span class="transition group-open:rotate-180 bg-[#f84525] rounded-full">
                <svg fill="none" height="24" shape-rendering="geometricPrecision" stroke="white" stroke-linecap="round" stroke-linejoin="round" stroke-width="1.5" viewBox="0 0 24 24" width="24"><path d="M6 9l6 6 6-6"></path>
</svg>
              </span>
				</summary>
				<p class="text-neutral-600 mt-3 group-open:animate-fadeIn">
					We streven ernaar om landelijk zoveel mogelijk dierenartsen te registreren, maar het is mogelijk dat sommige dierenartsen nog niet zijn opgenomen. We werken er voortdurend aan om ons bestand bij te werken en uit te breiden.
				</p>
			</details>
		</div>
		<div class="py-5">
			<details class="group">
				<summary class="flex justify-between items-center font-medium cursor-pointer list-none">
					<span> Kan ik de profielen van de dierenartsen bekijken voordat ik een keuze maak?</span>
					<span class="transition group-open:rotate-180 bg-[#f84525] rounded-full">
                <svg fill="none" height="24" shape-rendering="geometricPrecision" stroke="white" stroke-linecap="round" stroke-linejoin="round" stroke-width="1.5" viewBox="0 0 24 24" width="24"><path d="M6 9l6 6 6-6"></path>
</svg>
              </span>
				</summary>
				<p class="text-neutral-600 mt-3 group-open:animate-fadeIn">
					Ja, absoluut! Je kunt de gedetailleerde profielen van dierenartsen bekijken, inclusief hun specialisaties, diensten die ze aanbieden en gebruikersrecensies, om een weloverwogen beslissing te nemen.
				</p>
			</details>
		</div>
		<div class="py-5">
			<details class="group">
				<summary class="flex justify-between items-center font-medium cursor-pointer list-none">
					<span> Zijn er kosten verbonden aan het gebruik van deze service?</span>
					<span class="transition group-open:rotate-180 bg-[#f84525] rounded-full">
                <svg fill="none" height="24" shape-rendering="geometricPrecision" stroke="white" stroke-linecap="round" stroke-linejoin="round" stroke-width="1.5" viewBox="0 0 24 24" width="24"><path d="M6 9l6 6 6-6"></path>
</svg>
              </span>
				</summary>
				<p class="text-neutral-600 mt-3 group-open:animate-fadeIn">
					Nee, het gebruik van onze website is volledig gratis voor dierenliefhebbers. Er zijn geen verborgen kosten.
				</p>
			</details>
		</div>
		<div class="py-5">
			<details class="group">
				<summary class="flex justify-between items-center font-medium cursor-pointer list-none">
					<span> Hoe kan ik contact opnemen met de gekozen dierenarts?</span>
					<span class="transition group-open:rotate-180 bg-[#f84525] rounded-full">
                <svg fill="none" height="24" shape-rendering="geometricPrecision" stroke="white" stroke-linecap="round" stroke-linejoin="round" stroke-width="1.5" viewBox="0 0 24 24" width="24"><path d="M6 9l6 6 6-6"></path>
</svg>
              </span>
				</summary>
				<p class="text-neutral-600 mt-3 group-open:animate-fadeIn">
          Op de profielpagina van de dierenarts vind je alle contactgegevens, inclusief telefoonnummer, adres en e-mailadres, zodat je gemakkelijk contact kunt opnemen.
				</p>
			</details>
		</div>
		<div class="py-5">
			<details class="group">
				<summary class="flex justify-between items-center font-medium cursor-pointer list-none">
					<span> Kan ik mijn ervaringen delen door recensies achter te laten?</span>
					<span class="transition group-open:rotate-180 bg-[#f84525] rounded-full">
                <svg fill="none" height="24" shape-rendering="geometricPrecision" stroke="white" stroke-linecap="round" stroke-linejoin="round" stroke-width="1.5" viewBox="0 0 24 24" width="24"><path d="M6 9l6 6 6-6"></path>
</svg>
              </span>
				</summary>
				<p class="text-neutral-600 mt-3 group-open:animate-fadeIn">
					Ja, we moedigen dierenliefhebbers aan om recensies achter te laten om anderen te helpen bij hun keuze. Je kunt je ervaringen delen en feedback geven op de profielpagina van de dierenarts.
				</p>
			</details>
		</div>
		<div class="py-5">
			<details class="group">
				<summary class="flex justify-between items-center font-medium cursor-pointer list-none">
					<span> Wat moet ik doen als ik een specifieke vraag heb die niet in de FAQ staat?</span>
					<span class="transition group-open:rotate-180 bg-[#f84525] rounded-full">
                <svg fill="none" height="24" shape-rendering="geometricPrecision" stroke="white" stroke-linecap="round" stroke-linejoin="round" stroke-width="1.5" viewBox="0 0 24 24" width="24"><path d="M6 9l6 6 6-6"></path>
</svg>
              </span>
				</summary>
				<p class="text-neutral-600 mt-3 group-open:animate-fadeIn">
					Als je een vraag hebt die niet in onze FAQ wordt beantwoord, kun je altijd contact met ons opnemen via het contactformulier op de website. We staan klaar om je te helpen!
				</p>
			</details>
		</div>
	</div>
</div>
</div>

<script>
	// ...
	// extend: {
    //   keyframes: {
    //     fadeIn: {
    //       "0%": { opacity: 0 },
    //       "100%": { opacity: 100 },
    //     },
    //   },
    //   animation: {
    //     fadeIn: "fadeIn 0.2s ease-in-out forwards",
    //   },
    // },
    // ...
</script>
{{-- END FAQ --}}


{{-- BLOG --}}
<!-- component -->
<div class="text-gray-900 pt-12 pr-0 pb-14 pl-0 bg-white">
  <div class="w-full pt-4 pr-5 pb-6 pl-5 mt-0 mr-auto mb-0 ml-auto space-y-5 sm:py-8 md:py-12 sm:space-y-8 md:space-y-16
      max-w-7xl">
    <div class="flex flex-col items-center sm:px-5 md:flex-row">
      <div class="flex flex-col items-start justify-center w-full h-full pt-6 pr-0 pb-6 pl-0 mb-6 md:mb-0 md:w-1/2">
        <div class="flex flex-col items-start justify-center h-full space-y-3 transform md:pr-10 lg:pr-16
            md:space-y-5">
          <div class="bg-[#f84525] flex items-center leading-none rounded-full text-gray-50 pt-1.5 pr-3 pb-1.5 pl-2
              uppercase inline-block">
            <p class="inline">
              <svg class="w-3.5 h-3.5 mr-1" fill="currentColor" viewbox="0 0 20 20"
                  xmlns="http://www.w3.org/2000/svg"><path d="M9.049 2.927c.3-.921 1.603-.921 1.902 0l1.07 3.292a1 1 0
                  00.95.69h3.462c.969 0 1.371 1.24.588 1.81l-2.8 2.034a1 1 0 00-.364 1.118l1.07 3.292c.3.921-.755
                  1.688-1.54 1.118l-2.8-2.034a1 1 0 00-1.175 0l-2.8 2.034c-.784.57-1.838-.197-1.539-1.118l1.07-3.292a1 1
                  0 00-.364-1.118L2.98 8.72c-.783-.57-.38-1.81.588-1.81h3.461a1 1 0 00.951-.69l1.07-3.292z"/></svg>
            </p>
            <p class="inline text-xs font-medium">Nieuw</p>
          </div>
          <a class="text-4xl font-bold leading-none lg:text-5xl xl:text-6xl">Write anything. Be creative.</a>
          <div class="pt-2 pr-0 pb-0 pl-0">
            <p class="text-sm font-medium inline">author:</p>
            <a class="inline text-sm font-medium mt-0 mr-1 mb-0 ml-1 underline">Jack Sparrow</a>
            <p class="inline text-sm font-medium mt-0 mr-1 mb-0 ml-1">· 23rd, April 2021 ·</p>
            <p class="text-gray-200 text-sm font-medium inline mt-0 mr-1 mb-0 ml-1">1hr 20min. read</p>
          </div>
        </div>
      </div>
      <div class="w-full md:w-1/2">
        <div class="block">
          <img
              src="https://images.unsplash.com/photo-1626314928277-1d373ddb6428?ixlib=rb-1.2.1&amp;ixid=MnwxMjA3fDB8MHxleHBsb3JlLWZlZWR8Mzd8fHxlbnwwfHx8fA%3D%3D&amp;auto=format&amp;fit=crop&amp;w=500&amp;q=60" class="object-cover rounded-lg max-h-64 sm:max-h-96 btn- w-full h-full"/>
        </div>
      </div>
    </div>
    <div class="grid grid-cols-12 sm:px-5 gap-x-8 gap-y-16">
      <div class="flex flex-col items-start col-span-12 space-y-3 sm:col-span-6 xl:col-span-4">
        <img
            src="https://images.unsplash.com/photo-1626318305863-bb23d0297c0b?ixlib=rb-1.2.1&amp;ixid=MnwxMjA3fDB8MHxleHBsb3JlLWZlZWR8MXx8fGVufDB8fHx8&amp;auto=format&amp;fit=crop&amp;w=500&amp;q=60" class="object-cover w-full mb-2 overflow-hidden rounded-lg shadow-sm max-h-56 btn-"/>
        <p class="bg-green-500 flex items-center leading-none text-sm font-medium text-gray-50 pt-1.5 pr-3 pb-1.5 pl-3
            rounded-full uppercase inline-block">Entertainment</p>
        <a class="text-lg font-bold sm:text-xl md:text-2xl">Improving your day to the MAX</a>
        <p class="text-sm text-black">Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor
            incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam,</p>
        <div class="pt-2 pr-0 pb-0 pl-0">
          <a class="inline text-xs font-medium mt-0 mr-1 mb-0 ml-0 underline">Jack Sparrow</a>
          <p class="inline text-xs font-medium mt-0 mr-1 mb-0 ml-1">· 23rd, March 2021 ·</p>
          <p class="inline text-xs font-medium text-gray-300 mt-0 mr-1 mb-0 ml-1">1hr 20min. read</p>
        </div>
      </div>
      <div class="flex flex-col items-start col-span-12 space-y-3 sm:col-span-6 xl:col-span-4">
        <img
            src="https://images.unsplash.com/photo-1626285861696-9f0bf5a49c6d?ixlib=rb-1.2.1&amp;ixid=MnwxMjA3fDB8MHxleHBsb3JlLWZlZWR8MTl8fHxlbnwwfHx8fA%3D%3D&amp;auto=format&amp;fit=crop&amp;w=500&amp;q=60" class="object-cover w-full mb-2 overflow-hidden rounded-lg shadow-sm max-h-56 btn-"/>
        <p class="bg-green-500 flex items-center leading-none text-sm font-medium text-gray-50 pt-1.5 pr-3 pb-1.5 pl-3
            rounded-full uppercase inline-block">Entertainment</p>
        <a class="text-lg font-bold sm:text-xl md:text-2xl">Improving your day to the MAX</a>
        <p class="text-sm text-black">Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor
            incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam,</p>
        <div class="pt-2 pr-0 pb-0 pl-0">
          <a class="inline text-xs font-medium mt-0 mr-1 mb-0 ml-0 underline">Jack Sparrow</a>
          <p class="inline text-xs font-medium mt-0 mr-1 mb-0 ml-1">· 23rd, March 2021 ·</p>
          <p class="inline text-xs font-medium text-gray-300 mt-0 mr-1 mb-0 ml-1">1hr 20min. read</p>
        </div>
      </div>
      <div class="flex flex-col items-start col-span-12 space-y-3 sm:col-span-6 xl:col-span-4">
        <img
            src="https://images.unsplash.com/photo-1626197031507-c17099753214?ixlib=rb-1.2.1&amp;ixid=MnwxMjA3fDB8MHxleHBsb3JlLWZlZWR8MzR8fHxlbnwwfHx8fA%3D%3D&amp;auto=format&amp;fit=crop&amp;w=500&amp;q=60" class="object-cover w-full mb-2 overflow-hidden rounded-lg shadow-sm max-h-56 btn-"/>
        <p class="bg-green-500 flex items-center leading-none text-sm font-medium text-gray-50 pt-1.5 pr-3 pb-1.5 pl-3
            rounded-full uppercase inline-block">Entertainment</p>
        <a class="text-lg font-bold sm:text-xl md:text-2xl">Improving your day to the MAX</a>
        <p class="text-sm text-black">Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor
            incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam,</p>
        <div class="pt-2 pr-0 pb-0 pl-0">
          <a class="inline text-xs font-medium mt-0 mr-1 mb-0 ml-0 underline">Jack Sparrow</a>
          <p class="inline text-xs font-medium mt-0 mr-1 mb-0 ml-1">· 23rd, March 2021 ·</p>
          <p class="inline text-xs font-medium text-gray-300 mt-0 mr-1 mb-0 ml-1">1hr 20min. read</p>
        </div>
      </div>
    </div>
  </div>
</div>
{{-- END BLOG --}}
</x-guest-layout>