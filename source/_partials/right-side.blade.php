<aside class="sm:w-1/2 lg:w-1/3 p-4 sm:p-8 bg-gray-200 text-gray-700">
    <div class="flex flex-col items-center justify-center mt-4 sm:mt-0">
        <img src="assets/images/me.jpg" alt="Picture of me" title="Picture of me" class="rounded-full border-8 border-double border-teal-700 w-64 h-64">

        <div class="flex mt-8">
            <a href="https://www.linkedin.com/in/michaelcozzolino/" class="mx-2 text-blue-500 hover:text-blue-700" title="Add me on LinkedIn" aria-label="Add me on LinkedIn">
                @include('_partials.icons._svg', ['icon' => 'linkedin', 'width' => 32, 'height' => 32])
            </a>
            <a href="https://github.com/michaelcozzolino" class="mx-2 text-green-500 hover:text-green-700" title="Find my projects on Github - @michaelcozzolino" aria-label="Find my projects on Github - @michaelcozzolino">
                @include('_partials.icons._svg', ['icon' => 'github', 'width' => 32, 'height' => 32])
            </a>
            <a href="mailto:{{$page->email}}" class="mx-2 text-indigo-500 hover:text-indigo-700" title="Send me an email" aria-label="Send me an email">
                @include('_partials.icons._svg', ['icon' => 'mail', 'width' => 32, 'height' => 32])
            </a>
            <a href="https://stackoverflow.com/users/12886555" class="mx-2">
                <img alt="Stack Overflow statistics" title="Stack Overflow statistics" src="https://github-readme-stackoverflow.vercel.app/?userID=12886555&layout=compact&theme=dark">
            </a>
        </div>
    </div>

    <div class="mt-8 first:mt-0">
        <h3 class="text-2xl font-black leading-none text-teal-700 font-sans mb-2">
            Stats/Bio
        </h3>

        <hr class="m-0 mb-4 border-b-2 border-gray-400 w-16 text-left">

        <dl class="flex flex-wrap">
            <dt class="w-full inline font-black uppercase">Nationality</dt>
            <dd class="inline-flex mb-4">
                Italian
            </dd>

            <dt class="w-full inline font-black uppercase">Currently living in</dt>
            <dd class="inline mb-4">Aquino - Lazio - Italy</dd>

            <dt class="w-full inline font-black uppercase">Born in</dt> <dd class="inline mb-4">June 1996</dd>

            <dt class="w-full inline font-black uppercase">Interests</dt> <dd class="inline mb-4">⌨️ Coding &bull; 🛠 Making things &bull; 🎞️ Movies &bull; 🏎️ F1 &bull; 🤝 Friends  </dd>

        </dl>
    </div>

    <div class="mt-8 first:mt-0">
        <h3 class="text-2xl font-black leading-none text-teal-700 font-sans mb-2">
            My {{ date('Y') }} tech stack
        </h3>

        <hr class="m-0 mb-4 border-b-2 border-gray-400 w-16 text-left">

        <ul>
            <li class="mb-4 font-black uppercase">Laravel</li>

            <li class="mb-4 font-black uppercase">MySQL</li>

            <li class="mb-4 font-black uppercase">Vue.js</li>

            <li class="mb-4 font-black uppercase">Inertia.js</li>

            <li class="mb-4 font-black uppercase">Bootstrap</li>
        </ul>
    </div>

    <div class="mt-8 first:mt-0">
        <h3 class="text-2xl font-black leading-none text-teal-700 font-sans mb-2">
            This website
        </h3>

        <hr class="m-0 mb-4 border-b-2 border-gray-400 w-16 text-left">

        <ul class="flex flex-col">
            <li class="mb-4">
                Built with ❤️ and...
            </li>

            <li class="mb-4">
                <a href="https://jigsaw.tighten.co/" title="Jigsaw by Tighten.co" class="inline-flex items-center font-black uppercase">
                    Jigsaw <span class="ml-1 text-gray-500">@include('_partials.icons._svg', ['icon' => 'external-link', 'width' => 20, 'height' => 20])</span>
                </a>
            </li>

            <li class="mb-4">
                <a href="https://tailwindcss.com/" title="TailwindCSS" class="inline-flex items-center font-black uppercase">
                    TailwindCSS <span class="ml-1 text-gray-500">@include('_partials.icons._svg', ['icon' => 'external-link', 'width' => 20, 'height' => 20])</span>
                </a>
            </li>

            <li class="mb-4">
                Template by
                <a href="https://github.com/breadthe/chasingcode.dev" title="Template by breadthe" class="inline-flex items-center font-black uppercase">
                    breadthe <span class="ml-1 text-gray-500">@include('_partials.icons._svg', ['icon' => 'external-link', 'width' => 20, 'height' => 20])</span>
                </a>
            </li>
        </ul>
    </div>
</aside>
