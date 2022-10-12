<nav class="bg-blue-primary py-2 px-4 flex justify-center">
    <div class="w-[1200px] flex justify-between items-center relative">
        {{-- logo --}}
        <a href="/" class="cursor-default md-768:cursor-pointer">
            <img src="{{ asset('img/LOGO.png') }}" alt="Logo" class="w-28 -ml-2 sm-700:w-44">
        </a>

        {{-- burger button --}}
        <div class="burger-button md-768:hidden">
            <span class="bg-blue-strong w-5 h-[2px] block my-1 sm-700:w-7 sm-700:h-1 sm-700:my-[5px]"></span>
            <span class="bg-blue-strong w-5 h-[2px] block my-1 sm-700:w-7 sm-700:h-1 sm-700:my-[5px]"></span>
            <span class="bg-blue-strong w-5 h-[2px] block my-1 sm-700:w-7 sm-700:h-1 sm-700:my-[5px]"></span>
        </div>

        {{-- list mobile --}}
        <div class="list-mobile hidden absolute z-20 top-10 right-0 bg-blue-primary w-[155px] py-2 border border-[#22223f] rounded-md sm-700:top-14">
            <ul>
                <li>
                    <a href="/" class="flex items-center py-2 focus:bg-black-transparent cursor-default">
                        <i class="fa-solid fa-house mx-3 {{ (Request::is('/')) ? 'text-blue-strong' : '' }}"></i>
                        <p class="text-sm {{ (Request::is('/')) ? 'text-blue-strong' : '' }}">Home</p>
                    </a>
                </li>

                <li>
                    <div class="btn-category-mobile flex items-center py-2 focus:bg-black-transparent hover:bg-black-transparent cursor-defult">
                        <i class="fas fa-list-ul mx-3"></i>
                        <p class="text-sm">Special Search</p>
                    </div>
                </li>

                <li>
                    <a href="/about" class="text-white flex items-center py-2 focus:bg-black-transparent cursor-default">
                        <i class="fas fa-compass mx-3 {{ (Request::is('about')) ? 'text-blue-strong' : '' }}"></i>
                        <p class="text-sm {{ (Request::is('about')) ? 'text-blue-strong' : '' }}">About</p>
                    </a>
                </li>

                <li>
                    <a href="https:github.com/mhdky" class="text-white flex items-center py-2 focus:bg-black-transparent cursor-default">
                        <i class="fa-brands fa-github mx-3"></i>
                        <p class="text-sm">Github</p>
                    </a>
                </li>
            </ul>

            {{-- <div class="absolute top-[45px] right-[140px] bg-blue-secondary w-16 h-16"></div> --}}
            <div class="category-mobile hidden absolute top-[45px] right-[151px] w-36 bg-blue-primary border border-[#22223f] rounded-[5px]">
                <ul>
                    @foreach ($categories as $category)
                        <li><a href="{{ {{-- env('APP_URL') --}} 'http://127.0.0.1:8000' . '/?search=' . $category->url }}" class="w-full inline-block py-2 px-4 hover:bg-black-transparent">{{ $category->name }}</a></li>
                    @endforeach
                </ul>
            </div>
        </div>

        {{-- list desktop --}}
        <ul class="hidden md-768:flex">
            <li class="ml-5">
                <a href="/" class="text-blue-strong flex items-center py-2 group">
                    <i class="{{ (Request::is('/')) ? 'text-blue-strong' : '' }} fa-solid fa-house mx-[7px] group-hover:text-blue-strong"></i>
                    <p class="{{ (Request::is('/')) ? 'text-blue-strong' : '' }} text-base group-hover:text-blue-strong">Home</p>
                </a>
            </li>

            <li class="btn-category ml-5 md-768:cursor-pointer">
                <div href="/" class="text-blue-strong flex items-center py-2 group">
                    <i class="fas fa-chevron-down arrow-down mx-[7px] group-hover:text-blue-strong"></i>
                    <p class="text-base group-hover:text-blue-strong">Special Search</p>
                </div>
            </li>

            <li class="ml-5">
                <a href="/about" class="text-white flex items-center py-2 group">
                    <i class="{{ (Request::is('about')) ? 'text-blue-strong' : '' }} fas fa-compass mx-[7px] group-hover:text-blue-strong"></i>
                    <p class="{{ (Request::is('about')) ? 'text-blue-strong' : '' }} text-base group-hover:text-blue-strong">About</p>
                </a>
            </li>

            <li class="ml-5">
                <a href="https:github.com/mhdky" class="text-white flex items-center py-2 group">
                    <i class="fa-brands fa-github mx-[7px] group-hover:text-blue-strong"></i>
                    <p class="text-base group-hover:text-blue-strong">Github</p>
                </a>
            </li>

            <div class="category absolute right-[190px] top-[60px] w-36 bg-blue-primary border border-[#22223f] rounded-[5px] hidden">
                <ul>
                    @foreach ($categories as $category)
                        <li><a href="{{ {{-- env('APP_URL') --}} 'http://127.0.0.1:8000' . '/?search=' . $category->url }}" class="w-full inline-block py-2 px-4 hover:bg-black-transparent">{{ $category->name }}</a></li>
                    @endforeach
                </ul>
            </div>
        </ul>
    </div>
</nav>

{{-- close --}}
<div class="close hidden fixed z-10 top-0 bottom-0 right-0 left-0 bg-pink"></div>

<script>
    const btnCategory = document.querySelector('.btn-category');
    const category = document.querySelector('.category');
    const arrowDown = document.querySelector('.arrow-down');
    btnCategory.addEventListener('click', () => {
        category.classList.toggle('category-show');
        arrowDown.classList.toggle('arrow-up');
        arrowDown.style.transition = '0.3s';
    });

    const btnCategoryMobile = document.querySelector('.btn-category-mobile');
    const categoryMobile = document.querySelector('.category-mobile');
    btnCategoryMobile.addEventListener('click', () => {
        categoryMobile.classList.toggle('category-show');
        // arrowDown.classList.toggle('arrow-up');
        // arrowDown.style.transition = '0.3s';
    });
</script>