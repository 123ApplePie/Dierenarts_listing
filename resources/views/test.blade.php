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