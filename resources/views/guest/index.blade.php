<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Listing</title>

    <link rel="stylesheet" href="css/header.css">
    <script src="https://cdn.tailwindcss.com"></script>
    <link href='https://unpkg.com/boxicons@2.1.4/css/boxicons.min.css' rel='stylesheet'>

    @livewireStyles
</head>
<body class="bg-[#f8f4f3]">
    
    <x-navbar/>

    {{-- HERO --}}
    <section class="py-24 flex items-center justify-center h-screen w-screen bg-[url('https://www.usnews.com/dims4/USNEWS/d754e45/2147483647/crop/2000x1334+0+0/resize/970x647/quality/85/?url=https%3A%2F%2Fwww.usnews.com%2Fcmsmedia%2F75%2F77%2F28b9c03949ceb1e855bfa2b78c46%2F200109-veterinarian-stock.jpg')] bg-cover relative">
        <div class="absolute inset-0 bg-black opacity-60"></div><!-- Dark overlay -->
        <div class="mx-auto relative z-10">
            <div class="text-center">
                {{-- <p class="text-lg font-medium leading-8 text-indigo-600/95">Introducing Design Data Platform</p> --}}
                <h1 class="mt-3 text-[3.5rem] font-bold leading-[4rem] tracking-tight text-white">Deskundige Zorg voor Jouw Trouwe Vriend, <br> Altijd <span class="text-[#f84525]">Dichtbij</span> .</h1>
                <p class="mt-3 text-lg leading-relaxed text-slate-400">Kwaliteitszorg voor je huisdier</p>
            </div>
            <div class="mt-24 items-center flex justify-center gap-4">
                <div class="border border-4 p-6 grid grid-cols-1 gap-6 bg-transparent shadow-lg rounded-3xl">
                    <div class="grid grid-cols-1 md:grid-cols-2 gap-4">
                        <div class="grid grid-cols-2 gap-2 border border-gray-200 p-2 rounded">
                            <div class="flex border border-[#f84525] rounded bg-white items-center p-2 ">
                                <svg class="fill-current text-gray-800 mr-2 w-5" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24" width="24" height="24">
                                    <path class="heroicon-ui"
                                        d="M12 12a5 5 0 1 1 0-10 5 5 0 0 1 0 10zm0-2a3 3 0 1 0 0-6 3 3 0 0 0 0 6zm9 11a1 1 0 0 1-2 0v-2a3 3 0 0 0-3-3H8a3 3 0 0 0-3 3v2a1 1 0 0 1-2 0v-2a5 5 0 0 1 5-5h8a5 5 0 0 1 5 5v2z"/>
                                </svg>
                                <input type="text" placeholder="Naam"
                                    class="bg-white max-w-full focus:outline-none text-gray-700"/>
                            </div>
                            <div class="flex border border-[#f84525] rounded bg-white items-center p-2 ">
                                <svg class="fill-current text-gray-800 mr-2 w-5" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24" width="24" height="24">
                                    <path class="heroicon-ui"
                                        d="M13.04 14.69l1.07-2.14a1 1 0 0 1 1.2-.5l6 2A1 1 0 0 1 22 15v5a2 2 0 0 1-2 2h-2A16 16 0 0 1 2 6V4c0-1.1.9-2 2-2h5a1 1 0 0 1 .95.68l2 6a1 1 0 0 1-.5 1.21L9.3 10.96a10.05 10.05 0 0 0 3.73 3.73zM8.28 4H4v2a14 14 0 0 0 14 14h2v-4.28l-4.5-1.5-1.12 2.26a1 1 0 0 1-1.3.46 12.04 12.04 0 0 1-6.02-6.01 1 1 0 0 1 .46-1.3l2.26-1.14L8.28 4zm7.43 5.7a1 1 0 1 1-1.42-1.4L18.6 4H16a1 1 0 0 1 0-2h5a1 1 0 0 1 1 1v5a1 1 0 0 1-2 0V5.41l-4.3 4.3z"/>
                                </svg>
                                <input type="text" placeholder="Telefoon"
                                    class="bg-white max-w-full focus:outline-none text-gray-700"/>
                            </div>
                        </div>
                        <div class="grid grid-cols-2 gap-2 border border-gray-200 p-2 rounded">
                            <div class="flex border border-[#f84525] rounded bg-white items-center p-2 ">
                                <svg class="fill-current text-gray-800 mr-2 w-5" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24" width="24" height="24">
                                    <path class="heroicon-ui"
                                        d="M14 5.62l-4 2v10.76l4-2V5.62zm2 0v10.76l4 2V7.62l-4-2zm-8 2l-4-2v10.76l4 2V7.62zm7 10.5L9.45 20.9a1 1 0 0 1-.9 0l-6-3A1 1 0 0 1 2 17V4a1 1 0 0 1 1.45-.9L9 5.89l5.55-2.77a1 1 0 0 1 .9 0l6 3A1 1 0 0 1 22 7v13a1 1 0 0 1-1.45.89L15 18.12z"/>
                                </svg>
                                <select name="" id="" class="bg-white w-full focus:outline-none text-gray-700">
                                    <option value="">--Provincie--</option>
                                    <option value="">Groningen</option>
                                    <option value="">Friesland</option>
                                    <option value="">Drenthe</option>
                                    <option value="">Overijssel</option>
                                    <option value="">Flevoland</option>
                                    <option value="">Gelderland</option>
                                    <option value="">Utrecht</option>
                                    <option value="">Noord-Holland</option>
                                    <option value="">Zuid-Holland</option>
                                    <option value="">Zeeland</option>
                                    <option value="">Noord-Brabant</option>
                                    <option value="">Limburg</option>
                                </select>
                            </div>
                            <div class="flex border border-[#f84525] rounded bg-white items-center p-2 ">
                                <svg  class="fill-current text-gray-800 mr-2 w-5" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24" width="24" height="24">
                                    <path class="heroicon-ui"
                                        d="M12 22a10 10 0 1 1 0-20 10 10 0 0 1 0 20zM5.68 7.1A7.96 7.96 0 0 0 4.06 11H5a1 1 0 0 1 0 2h-.94a7.95 7.95 0 0 0 1.32 3.5A9.96 9.96 0 0 1 11 14.05V9a1 1 0 0 1 2 0v5.05a9.96 9.96 0 0 1 5.62 2.45 7.95 7.95 0 0 0 1.32-3.5H19a1 1 0 0 1 0-2h.94a7.96 7.96 0 0 0-1.62-3.9l-.66.66a1 1 0 1 1-1.42-1.42l.67-.66A7.96 7.96 0 0 0 13 4.06V5a1 1 0 0 1-2 0v-.94c-1.46.18-2.8.76-3.9 1.62l.66.66a1 1 0 0 1-1.42 1.42l-.66-.67zM6.71 18a7.97 7.97 0 0 0 10.58 0 7.97 7.97 0 0 0-10.58 0z"/>
                                </svg>
                                    <select name="" id="" class="bg-white w-full focus:outline-none text-gray-700">
                                        <option value="">--Stad--</option>
                                    </select>
        
                            </div>
                        </div>
                    </div>
                    <div class="flex justify-center"><button class="p-2 w-1/4 rounded-3xl bg-[#f84525] hover:bg-white text-white hover:text-[#f84525]"><i class='bx bx-zoom-in'></i> Zoeken</button></div>
                </div>
            </div>
        </div>
    </section>
    {{-- END HERO --}}


    {{-- SERVICES --}}
    <link rel="stylesheet" href="https://cdn.tailgrids.com/tailgrids-fallback.css" />

    <section class="pt-20 lg:pt-[120px] pb-12 lg:pb-[90px] ">
        <div class="container" >
           <div class="flex flex-wrap -mx-4">
              <div class="w-full px-4">
                 <div class="text-center mx-auto mb-12 lg:mb-20 max-w-[510px]">
                    <span class="font-semibold text-2xl text-[#f84525] mb-2 block">
                    Services
                    </span>
                    <h2
                       class="
                       font-bold
                       text-3xl
                       sm:text-4xl
                       md:text-[40px]
                       text-dark
                       mb-4
                       "
                       >
                       Wat we doen
                    </h2>
                    <p class="text-base text-body-color">
                        We bieden nuttige en betrouwbare online service aan u als dierenliefhebber, zodat u gemakkelijk de beste zorg voor uw huisdieren kunt vinden.
                    </p>
                 </div>
              </div>
           </div>
           <div class="flex flex-wrap -mx-4">
              <div class="w-full md:w-1/2 lg:w-1/3 px-4">
                 <div
                    class="
                    p-10
                    md:px-7
                    xl:px-10
                    rounded-[20px]
                    bg-white
                    shadow-md
                    hover:shadow-lg
                    mb-8
                    "
                    >
                    <div
                       class="
                       w-[70px]
                       h-[70px]
                       flex
                       items-center
                       justify-center
                       bg-[#f84525]
                       rounded-2xl
                       mb-8
                       "
                       >
                       <svg xmlns="http://www.w3.org/2000/svg" width="40" height="40" viewBox="0 0 24 24" style="fill: #fff;transform: ;msFilter:;"><path d="m21.447 6.105-6-3a1 1 0 0 0-.895 0L9 5.882 3.447 3.105A1 1 0 0 0 2 4v13c0 .379.214.725.553.895l6 3a1 1 0 0 0 .895 0L15 18.118l5.553 2.776a.992.992 0 0 0 .972-.043c.295-.183.475-.504.475-.851V7c0-.379-.214-.725-.553-.895zM10 7.618l4-2v10.764l-4 2V7.618zm-6-2 4 2v10.764l-4-2V5.618zm16 12.764-4-2V5.618l4 2v10.764z"></path></svg>                    
                    </div>
                    <h4 class="font-semibold text-xl text-dark mb-3">
                        Toegankelijkheid en gemak
                    </h4>
                    <p class="text-body-color">
                        Het primaire doel van de website is om huisdiereigenaren toegang te bieden tot actuele en relevante informatie over dierenartsenpraktijken in hun omgeving. Het doel is om het zo gemakkelijk mogelijk te maken voor bezoekers om de juiste dierenarts te vinden op basis van locatie, diersoorten, diensten, en andere criteria.
                    </p>
                 </div>
              </div>
              <div class="w-full md:w-1/2 lg:w-1/3 px-4">
                 <div
                    class="
                    p-10
                    md:px-7
                    xl:px-10
                    rounded-[20px]
                    bg-white
                    shadow-md
                    hover:shadow-lg
                    mb-8
                    "
                    >
                    <div
                       class="
                       w-[70px]
                       h-[70px]
                       flex
                       items-center
                       justify-center
                       bg-[#f84525]
                       rounded-2xl
                       mb-8
                       "
                       >
                       <svg
                          width="39"
                          height="22"
                          viewBox="0 0 39 22"
                          fill="none"
                          xmlns="http://www.w3.org/2000/svg"
                          >
                          <!-- <mask id="path-1-inside-1" fill="white"> -->
                          <path
                             fill-rule="evenodd"
                             clip-rule="evenodd"
                             d="M19.5004 0C14.6345 0 11.4767 2.14015 10.0251 6.42044C9.95552 6.62552 10.2264 6.7705 10.3756 6.61355C12.182 4.7134 14.2484 4.03687 16.575 4.58345C18.0583 4.93186 19.119 5.94382 20.2921 7.0642C22.2042 8.88862 24.4173 11 29.2502 11C34.1152 11 37.2736 8.85997 38.7247 4.58049C38.7943 4.3754 38.5234 4.23044 38.3742 4.38741C36.5684 6.28738 34.502 6.96375 32.1756 6.41655C30.6915 6.06814 29.6308 5.05618 28.4577 3.93652C26.5456 2.11066 24.3333 0 19.5004 0ZM-nan -nanL9.74981 11C4.88456 11 1.72609 13.1402 0.275037 17.4207C0.205519 17.6258 0.476365 17.7707 0.62555 17.6138C2.43196 15.7135 4.49843 15.0368 6.82441 15.5835C8.30851 15.9319 9.36923 16.9438 10.5423 18.0642C12.4544 19.8886 14.6667 22 19.5004 22C24.3656 22 27.5241 19.8604 28.9752 15.58C29.0447 15.3749 28.7738 15.23 28.6246 15.3869C26.8182 17.2873 24.7517 17.9639 22.425 17.4173C20.9417 17.0681 19.881 16.0562 18.7079 14.9365C16.7958 13.1121 14.5827 11 9.74981 11L-nan -nanL-nan -nanZ"
                             />
                          <!-- </mask> -->
                          <path
                             d="M16.575 4.58345L16.3463 5.55695L16.3463 5.55696L16.575 4.58345ZM20.2921 7.0642L19.6014 7.78736L19.6018 7.78769L20.2921 7.0642ZM32.1756 6.41655L32.4046 5.44311L32.4041 5.44301L32.1756 6.41655ZM28.4577 3.93652L27.7671 4.65974L27.7673 4.6599L28.4577 3.93652ZM6.82441 15.5835L6.59564 16.5569L6.59586 16.557L6.82441 15.5835ZM10.5423 18.0642L9.85161 18.7874L9.85196 18.7877L10.5423 18.0642ZM22.425 17.4173L22.1959 18.3907L22.1963 18.3908L22.425 17.4173ZM18.7079 14.9365L19.3983 14.2131L19.3982 14.213L18.7079 14.9365ZM0.275037 17.4207L-0.672026 17.0997L0.275037 17.4207ZM0.62555 17.6138L-0.0992438 16.9248L0.62555 17.6138ZM28.9752 15.58L29.9222 15.901L28.9752 15.58ZM28.6246 15.3869L27.8998 14.6979L28.6246 15.3869ZM38.7247 4.58049L37.7777 4.25936L38.7247 4.58049ZM38.3742 4.38741L39.099 5.07632L38.3742 4.38741ZM10.0251 6.42044L9.07806 6.09926L10.0251 6.42044ZM10.3756 6.61355L11.1004 7.30255L10.3756 6.61355ZM19.5004 -1C16.9224 -1 14.7064 -0.432275 12.9214 0.777273C11.1301 1.99111 9.86051 3.79212 9.07806 6.09926L10.9721 6.74162C11.6413 4.76847 12.6764 3.35925 14.0434 2.43295C15.4167 1.50235 17.2126 1 19.5004 1V-1ZM11.1004 7.30255C12.6907 5.62967 14.4042 5.10069 16.3463 5.55695L16.8037 3.60996C14.0926 2.97305 11.6733 3.79712 9.65083 5.92456L11.1004 7.30255ZM16.3463 5.55696C17.5202 5.83268 18.3899 6.63023 19.6014 7.78736L20.9828 6.34104C19.8482 5.25741 18.5964 4.03104 16.8036 3.60995L16.3463 5.55696ZM19.6018 7.78769C20.5507 8.69312 21.6704 9.7678 23.1998 10.5957C24.7495 11.4346 26.6758 12 29.2502 12V10C26.9917 10 25.395 9.50973 24.1519 8.83684C22.8885 8.15292 21.9456 7.2597 20.9824 6.34071L19.6018 7.78769ZM29.2502 12C31.8278 12 34.0437 11.4323 35.8286 10.2229C37.6199 9.00923 38.8895 7.20846 39.6718 4.90163L37.7777 4.25936C37.1088 6.23199 36.0737 7.64098 34.7067 8.56718C33.3334 9.49769 31.5376 10 29.2502 10V12ZM37.6493 3.6985C36.0597 5.37104 34.3464 5.89986 32.4046 5.44311L31.9466 7.38998C34.6577 8.02765 37.0771 7.20371 39.099 5.07632L37.6493 3.6985ZM32.4041 5.44301C31.2295 5.16725 30.3598 4.36966 29.1482 3.21314L27.7673 4.6599C28.9017 5.74271 30.1535 6.96904 31.947 7.39008L32.4041 5.44301ZM29.1483 3.2133C28.1993 2.30704 27.0797 1.23211 25.5504 0.404169C24.0008 -0.434783 22.0747 -1 19.5004 -1V1C21.7589 1 23.3554 1.49011 24.5983 2.16296C25.8614 2.84681 26.8041 3.74014 27.7671 4.65974L29.1483 3.2133ZM9.74981 10C7.17206 10 4.95609 10.5678 3.17112 11.7774C1.3798 12.9913 0.110142 14.7924 -0.672026 17.0997L1.2221 17.7418C1.89099 15.7686 2.92609 14.3594 4.29308 13.433C5.66642 12.5024 7.46231 12 9.74981 12V10ZM1.35034 18.3028C2.94075 16.6297 4.65428 16.1007 6.59564 16.5569L7.05318 14.61C4.34259 13.973 1.92317 14.7973 -0.0992438 16.9248L1.35034 18.3028ZM6.59586 16.557C7.77045 16.8327 8.64013 17.6303 9.85161 18.7874L11.233 17.341C10.0983 16.2573 8.84657 15.031 7.05295 14.6099L6.59586 16.557ZM9.85196 18.7877C10.8008 19.6931 11.9204 20.7678 13.4497 21.5957C14.9993 22.4346 16.9257 23 19.5004 23V21C17.2415 21 15.6448 20.5097 14.4018 19.8368C13.1385 19.1529 12.1958 18.2598 11.2326 17.3407L9.85196 18.7877ZM19.5004 23C22.0781 23 24.294 22.4324 26.079 21.223C27.8704 20.0093 29.14 18.2084 29.9222 15.901L28.0281 15.2589C27.3592 17.232 26.3241 18.6411 24.9572 19.5673C23.5838 20.4978 21.7879 21 19.5004 21V23ZM27.8998 14.6979C26.3095 16.371 24.5959 16.9 22.6537 16.4438L22.1963 18.3908C24.9075 19.0277 27.327 18.2035 29.3494 16.0759L27.8998 14.6979ZM22.6541 16.4439C21.4798 16.1675 20.61 15.3697 19.3983 14.2131L18.0174 15.6599C19.1519 16.7427 20.4035 17.9688 22.1959 18.3907L22.6541 16.4439ZM19.3982 14.213C18.4494 13.3077 17.3296 12.2328 15.8003 11.4047C14.2506 10.5656 12.3242 10 9.74981 10V12C12.0083 12 13.6049 12.4904 14.848 13.1635C16.1115 13.8476 17.0544 14.741 18.0176 15.66L19.3982 14.213ZM-0.672026 17.0997C-0.889639 17.7416 -0.537234 18.2988 -0.109577 18.5315C0.304715 18.7568 0.918575 18.757 1.35034 18.3028L-0.0992438 16.9248C0.18334 16.6276 0.587185 16.6337 0.846137 16.7746C1.11845 16.9227 1.3702 17.3049 1.2221 17.7418L-0.672026 17.0997ZM29.9222 15.901C30.1398 15.2591 29.7874 14.7019 29.3598 14.4693C28.9455 14.2439 28.3316 14.2437 27.8998 14.6979L29.3494 16.0759C29.0669 16.3732 28.663 16.367 28.4041 16.2261C28.1317 16.078 27.88 15.6958 28.0281 15.2589L29.9222 15.901ZM39.6718 4.90163C39.8895 4.25959 39.537 3.70235 39.1093 3.46973C38.695 3.24438 38.0811 3.24419 37.6493 3.6985L39.099 5.07632C38.8164 5.37366 38.4126 5.36747 38.1537 5.22663C37.8814 5.07852 37.6295 4.69631 37.7777 4.25936L39.6718 4.90163ZM9.07806 6.09926C8.86033 6.74124 9.21275 7.29849 9.64037 7.53115C10.0546 7.75655 10.6685 7.7568 11.1004 7.30255L9.65083 5.92456C9.93346 5.62726 10.3373 5.63349 10.5962 5.77436C10.8685 5.9225 11.1203 6.30472 10.9721 6.74162L9.07806 6.09926Z"
                             fill="white"
                             mask="url(#path-1-inside-1)"
                             />
                       </svg>
                    </div>
                    <h4 class="font-semibold text-xl text-dark mb-3">
                        Transparantie en keuze
                    </h4>
                    <p class="text-body-color">
                        Een ander doel is om transparante informatie te verschaffen over de beschikbare dierenartsenpraktijken, inclusief hun diensten, specialisaties en recensies. Hierdoor kunnen huisdiereigenaren geïnformeerde beslissingen nemen over welke dierenarts het beste past bij de behoeften van hun huisdieren.
                    </p>
                 </div>
              </div>
              <div class="w-full md:w-1/2 lg:w-1/3 px-4">
                 <div
                    class="
                    p-10
                    md:px-7
                    xl:px-10
                    rounded-[20px]
                    bg-white
                    shadow-md
                    hover:shadow-lg
                    mb-8
                    "
                    >
                    <div
                       class="
                       w-[70px]
                       h-[70px]
                       flex
                       items-center
                       justify-center
                       bg-[#f84525]
                       rounded-2xl
                       mb-8
                       "
                       >
                       <svg
                          width="35"
                          height="35"
                          viewBox="0 0 35 35"
                          fill="none"
                          xmlns="http://www.w3.org/2000/svg"
                          >
                          <path
                             d="M10.7734 14.3281H3.82813C2.07813 14.3281 0.65625 12.9062 0.65625 11.1562V4.21094C0.65625 2.46094 2.07813 1.03906 3.82813 1.03906H10.7734C12.5234 1.03906 13.9453 2.46094 13.9453 4.21094V11.1562C13.9453 12.9062 12.5234 14.3281 10.7734 14.3281ZM3.82813 2.95312C3.17188 2.95312 2.57031 3.5 2.57031 4.21094V11.1562C2.57031 11.8125 3.11719 12.4141 3.82813 12.4141H10.7734C11.4297 12.4141 12.0313 11.8672 12.0313 11.1562V4.21094C12.0313 3.55469 11.4844 2.95312 10.7734 2.95312H3.82813Z"
                             fill="white"
                             />
                          <path
                             d="M31.1719 14.3281H24.2266C22.4766 14.3281 21.0547 12.9062 21.0547 11.1562V4.21094C21.0547 2.46094 22.4766 1.03906 24.2266 1.03906H31.1719C32.9219 1.03906 34.3438 2.46094 34.3438 4.21094V11.1562C34.3438 12.9062 32.9219 14.3281 31.1719 14.3281ZM24.2266 2.95312C23.5703 2.95312 22.9688 3.5 22.9688 4.21094V11.1562C22.9688 11.8125 23.5156 12.4141 24.2266 12.4141H31.1719C31.8281 12.4141 32.4297 11.8672 32.4297 11.1562V4.21094C32.4297 3.55469 31.8828 2.95312 31.1719 2.95312H24.2266Z"
                             fill="white"
                             />
                          <path
                             d="M10.7734 33.9609H3.82813C2.07813 33.9609 0.65625 32.5391 0.65625 30.7891V23.8438C0.65625 22.0938 2.07813 20.6719 3.82813 20.6719H10.7734C12.5234 20.6719 13.9453 22.0938 13.9453 23.8438V30.7891C13.9453 32.5391 12.5234 33.9609 10.7734 33.9609ZM3.82813 22.5859C3.17188 22.5859 2.57031 23.1328 2.57031 23.8438V30.7891C2.57031 31.4453 3.11719 32.0469 3.82813 32.0469H10.7734C11.4297 32.0469 12.0313 31.5 12.0313 30.7891V23.8438C12.0313 23.1875 11.4844 22.5859 10.7734 22.5859H3.82813Z"
                             fill="white"
                             />
                          <path
                             d="M31.1719 33.9609H24.2266C22.4766 33.9609 21.0547 32.5391 21.0547 30.7891V23.8438C21.0547 22.0938 22.4766 20.6719 24.2266 20.6719H31.1719C32.9219 20.6719 34.3438 22.0938 34.3438 23.8438V30.7891C34.3438 32.5391 32.9219 33.9609 31.1719 33.9609ZM24.2266 22.5859C23.5703 22.5859 22.9688 23.1328 22.9688 23.8438V30.7891C22.9688 31.4453 23.5156 32.0469 24.2266 32.0469H31.1719C31.8281 32.0469 32.4297 31.5 32.4297 30.7891V23.8438C32.4297 23.1875 31.8828 22.5859 31.1719 22.5859H24.2266Z"
                             fill="white"
                             />
                       </svg>
                    </div>
                    <h4 class="font-semibold text-xl text-dark mb-3">
                        Vertrouwen en betrouwbaarheid
                    </h4>
                    <p class="text-body-color">
                        Het derde doel is om vertrouwen en betrouwbaarheid op te bouwen bij huisdiereigenaren. Door accurate informatie en gebruikersrecensies te verstrekken, kunnen bezoekers vertrouwen op de website als een waardevolle bron voor het vinden van zorg voor hun huisdieren. Dit kan ook helpen om de reputatie van de dierenartsenpraktijken op de website te versterken.
                    </p>
                 </div>
              </div>
           </div>
        </div>
     </section>     
    {{-- END SERVICES --}}

    {{-- <section class="relative pt-12 bg-blueGray-50">
        <div class="items-center flex flex-wrap">
          <div class="w-full md:w-4/12 ml-auto mr-auto px-4">
            <img alt="..." class="max-w-full rounded-lg shadow-lg" src="https://images.unsplash.com/photo-1555212697-194d092e3b8f?ixlib=rb-1.2.1&amp;ixid=eyJhcHBfaWQiOjEyMDd9&amp;auto=format&amp;fit=crop&amp;w=634&amp;q=80">
          </div>
          <div class="w-full md:w-5/12 ml-auto mr-auto px-4">
            <div class="md:pr-12">
              <div class="text-pink-600 p-3 text-center inline-flex items-center justify-center w-16 h-16 mb-6 shadow-lg rounded-full bg-pink-300 mt-8">
                <i class="fas fa-rocket text-xl"></i>
              </div>
              <h3 class="text-3xl font-semibold">A growing company</h3>
              <p class="mt-4 text-lg leading-relaxed text-blueGray-500">
                The extension comes with three pre-built pages to help you get
                started faster. You can change the text and images and you're
                good to go.
              </p>
              <ul class="list-none mt-6">
                <li class="py-2">
                  <div class="flex items-center">
                    <div>
                      <span class="text-xs font-semibold inline-block py-1 px-2 uppercase rounded-full text-pink-600 bg-pink-200 mr-3"><i class="fas fa-fingerprint"></i></span>
                    </div>
                    <div>
                      <h4 class="text-blueGray-500">
                        Carefully crafted components
                      </h4>
                    </div>
                  </div>
                </li>
                <li class="py-2">
                  <div class="flex items-center">
                    <div>
                      <span class="text-xs font-semibold inline-block py-1 px-2 uppercase rounded-full text-pink-600 bg-pink-200 mr-3"><i class="fab fa-html5"></i></span>
                    </div>
                    <div>
                      <h4 class="text-blueGray-500">Amazing page examples</h4>
                    </div>
                  </div>
                </li>
                <li class="py-2">
                  <div class="flex items-center">
                    <div>
                      <span class="text-xs font-semibold inline-block py-1 px-2 uppercase rounded-full text-pink-600 bg-pink-200 mr-3"><i class="far fa-paper-plane"></i></span>
                    </div>
                    <div>
                      <h4 class="text-blueGray-500">Dynamic components</h4>
                    </div>
                  </div>
                </li>
              </ul>
            </div>
          </div>
        </div>
        <footer class="relative  pt-8 pb-6 mt-8">
          <div class="container mx-auto px-4">
            <div class="flex flex-wrap items-center md:justify-between justify-center">
              <div class="w-full md:w-6/12 px-4 mx-auto text-center">
                <div class="text-sm text-blueGray-500 font-semibold py-1">
                  Made with <a href="https://www.creative-tim.com/product/notus-js" class="text-blueGray-500 hover:text-gray-800" target="_blank">Notus JS</a> by <a href="https://www.creative-tim.com" class="text-blueGray-500 hover:text-blueGray-800" target="_blank"> Creative Tim</a>.
                </div>
              </div>
            </div>
          </div>
        </footer>
        </section> --}}
    
    @livewireScripts
</body>
</html>