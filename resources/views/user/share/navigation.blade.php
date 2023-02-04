<div>
    <a href="facebook.com" class="flex space-x-2 ml-5 pt-2">
        <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24">
            <path
                d="M22.675 0h-21.35c-.732 0-1.325.593-1.325 1.325v21.351c0 .731.593 1.324 1.325 1.324h11.495v-9.294h-3.128v-3.622h3.128v-2.671c0-3.1 1.893-4.788 4.659-4.788 1.325 0 2.463.099 2.795.143v3.24l-1.918.001c-1.504 0-1.795.715-1.795 1.763v2.313h3.587l-.467 3.622h-3.12v9.293h6.116c.73 0 1.323-.593 1.323-1.325v-21.35c0-.732-.593-1.325-1.325-1.325z" />
        </svg>
        <span>Petshop</span>
    </a>
</div>
<div class="w-full h-20 flex justify-center items-center space-x-5  bg-white border-t-2 border-b-2 border-yellow-300">
    <div class="text-left w-[200px]"><img class="w-16" src="{{ asset('logo.png') }}" alt=""></div>
    <div class="flex space-x-5 font-mono">
        <a href="{{ route('home') }}"
            class="hover:underline font-bold cursor-pointer max-w-xs hover:scale-110 transition duration-300 ease-in-out">
            TRANG CHỦ</a>
        <a data-bs-toggle="dropdown" type="button" data-bs-toggle="dropdown" aria-expanded="false"
            class="dropdown relative hover:underline font-bold cursor-pointer max-w-xs hover:scale-110 transition duration-300 ease-in-out">
            SẢN PHẨM
            <ul class="

              dropdown-menu
              absolute
              bg-white
              text-base
              z-50
              float-left
              list-none
              text-left

              shadow-lg
              hidden
              m-0
              bg-clip-padding
              border-none
            "
                aria-labelledby="dropdownMenuButton">
                <li>
                    <a class="
                  dropdown-item
                  text-sm
                  py-2
                  px-4
                  font-normal
                  block
                  w-full
                  whitespace-nowrap
                  bg-transparent
                  text-gray-700
                  hover:bg-gray-100
                  hover:underline
                  -mt-10
                "
                        href="#">Thức ăn</a>
                </li>
                <li>
                    <a class="
                  dropdown-item
                  text-sm
                  py-2
                  px-4
                  font-normal
                  block
                  w-full
                  whitespace-nowrap
                  bg-transparent
                  text-gray-700
                  hover:bg-gray-100
                  hover:underline
                "
                        href="#">Xà phòng</a>
                </li>
                <li>
                    <a class="
                  dropdown-item
                  text-sm
                  py-2
                  px-4
                  font-normal
                  block
                  w-full
                  whitespace-nowrap
                  bg-transparent
                  text-gray-700
                  hover:bg-gray-100
                  hover:underline
                "
                        href="#">Vòng cổ</a>
                </li>
                <li>
                    <a class="
                  dropdown-item
                  text-sm
                  py-2
                  px-4
                  font-normal
                  block
                  w-full
                  whitespace-nowrap
                  bg-transparent
                  text-gray-700
                  hover:bg-gray-100
                  hover:underline
                "
                        href="#">Niệm</a>
                </li>
                <li>
                    <a class="
                  dropdown-item
                  text-sm
                  py-2
                  px-4
                  font-normal
                  block
                  w-full
                  whitespace-nowrap
                  bg-transparent
                  text-gray-700
                  hover:bg-gray-100
                  hover:underline
                "
                        href="#">Chải lông</a>
                </li>
                <li>
                    <a class="
                  dropdown-item
                  text-sm
                  py-2
                  px-4
                  font-normal
                  block
                  w-full
                  whitespace-nowrap
                  bg-transparent
                  text-gray-700
                  hover:bg-gray-100
                  hover:underline
                "
                        href="#">Thuốc</a>
                </li>
                <li>
                    <a class="
                  dropdown-item
                  text-sm
                  py-2
                  px-4
                  font-normal
                  block
                  w-full
                  whitespace-nowrap
                  bg-transparent
                  text-gray-700
                  hover:bg-gray-100
                  hover:underline
                "
                        href="#">Vệ sinh</a>
                </li>
            </ul>


        </a>
        <a data-bs-toggle="dropdown" type="button" data-bs-toggle="dropdown" aria-expanded="false"
            class="dropdown animate-bounce text-red-500 relative hover:underline font-bold cursor-pointer max-w-xs hover:scale-110 transition duration-300 ease-in-out">
            SẢN PHẨM SALE



        </a>

        <div
            class="hover:underline font-bold cursor-pointer max-w-xs hover:scale-110 transition duration-300 ease-in-out">
            GIỚI THIỆU</div>
        <div
            class="hover:underline font-bold cursor-pointer max-w-xs hover:scale-110 transition duration-300 ease-in-out">
            TIN TỨC</div>
    </div>
    <div class="flex space-x-4 float-right justify-end w-[200px]">
        @include('user.share.search')

        <svg class="cursor-pointer  hover:scale-110 transition duration-300 ease-in-out" width="20" height="20"
            viewBox="0 0 20 20" xmlns="http://www.w3.org/2000/svg">
            <path
                d="M19.9005 18.8945C19.801 17.9899 19.602 17.0854 19.204 16.1809C18.7065 14.9749 18.01 13.8693 17.0149 12.9648C16.1194 12.0603 15.0249 11.2563 13.8308 10.7538C11.4428 9.74874 8.65672 9.74874 6.16915 10.7538C4.97512 11.2563 3.8806 11.9598 2.98507 12.8643C2.08955 13.7688 1.29353 14.8744 0.79602 16.0804C0.497512 16.9849 0.199005 17.9899 0.0995025 18.8945L0 20H20L19.9005 18.8945ZM2.28856 17.9899C2.38806 17.5879 2.48756 17.2864 2.68657 16.8844C3.08458 15.8794 3.68159 15.0754 4.37811 14.2714C5.17413 13.5678 5.97015 12.9648 6.96517 12.5628C8.95522 11.7588 11.1443 11.7588 13.0348 12.5628C14.0299 12.9648 14.9254 13.5678 15.6219 14.2714C16.3184 14.9749 16.9154 15.8794 17.3134 16.8844C17.4129 17.1859 17.6119 17.5879 17.7114 17.9899H2.28856Z">
            </path>
            <path
                d="M12.9 6.88199C13.6 6.18634 14 5.19255 14 4C14 2.80745 13.6 1.91304 12.9 1.11801C11.3 -0.372671 8.7 -0.372671 7.2 1.11801C6.4 1.91304 6 2.90683 6 4C6 5.09317 6.4 6.08696 7.2 6.88199C8.7 8.37267 11.3 8.37267 12.9 6.88199ZM8.6 2.6087C9.3 1.91304 10.7 1.91304 11.4 2.6087C11.8 3.00621 12 3.50311 12 4C12 4.49689 11.8 4.99379 11.4 5.3913C10.7 6.08696 9.3 6.08696 8.6 5.3913C8.2 5.09317 8 4.59627 8 4C8 3.40373 8.2 2.90683 8.6 2.6087Z">
            </path>
        </svg>
        <a href="{{ route('cart', ['username' => 'noname01']) }}">
            <svg class="cursor-pointer  hover:scale-110 transition duration-300 ease-in-out" width="20"
                height="20" viewBox="0 0 20 20" xmlns="http://www.w3.org/2000/svg">
                <path d="M20 20H0V6H20V20ZM2 18H18V8H2V18Z"></path>
                <path
                    d="M14 3.99995H12C12 3.49995 11.8 2.99995 11.4 2.59995C10.7 1.89995 9.3 1.89995 8.6 2.59995C8.2 2.89995 8 3.39995 8 3.99995H6C6 2.89995 6.4 1.89995 7.2 1.19995C8.7 -0.300049 11.3 -0.300049 12.9 1.19995C13.6 1.89995 14 2.89995 14 3.99995Z">
                </path>
            </svg>
        </a>
    </div>
</div>
