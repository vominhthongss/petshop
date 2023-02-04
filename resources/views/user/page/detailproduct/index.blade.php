@extends('user.main')
@section('content')
    <div
        class="xl:flex lg:flex md:flex justify-center items-start flex-none w-full h-full p-5 xl:space-x-5 lg:space-x-3 md:space-x-1 md:space-y-0 space-y-5">
        <div class="xl:w-96 xl:h-full lg:w-96 lg:h-full md:w-96 md:h-full w-full h-full border">
            <div id="carouselControls" class="carousel slide relative p-5" data-bs-ride="carousel">
                <div class="carousel-inner relative w-full overflow-hidden">
                    <div class="carousel-item active relative float-left w-full">
                        <img src="{{ asset('images/products/product1.png') }}" class="block w-full h-full" alt="#1" />

                    </div>
                    <div class="carousel-item relative float-left w-full">
                        <img src="{{ asset('images/products/product1.png') }}" class="block w-full h-full" alt="#2" />

                    </div>
                </div>
                <button
                    class="carousel-control-prev absolute top-0 bottom-0 flex items-center justify-center p-0 text-center border-0 hover:outline-none hover:no-underline focus:outline-none focus:no-underline left-0"
                    type="button" data-bs-target="#carouselControls" data-bs-slide="prev">
                    <span class="carousel-control-prev-icon inline-block bg-no-repeat" aria-hidden="true"></span>
                    <span class="visually-hidden">Previous</span>
                </button>
                <button
                    class="carousel-control-next absolute top-0 bottom-0 flex items-center justify-center p-0 text-center border-0 hover:outline-none hover:no-underline focus:outline-none focus:no-underline right-0"
                    type="button" data-bs-target="#carouselControls" data-bs-slide="next">
                    <span class="carousel-control-next-icon inline-block bg-no-repeat" aria-hidden="true"></span>
                    <span class="visually-hidden">Next</span>
                </button>
            </div>
        </div>
        <div class="xl:w-1/2 lg:w-1/2 md:w-1/2 w-full px-2 space-y-2">

            <div>
                <span class="font-mono text-2xl font-bold">Yếm cho thú cưng</span>
            </div>
            <div class="font-mono">
                Còn lại: <span class="text-yellow-600">100</span> sản phẩm
            </div>


            <div class="font-bold text-2xl text-yellow-400">
                <div>100.000 VND</div>
                <div class=" text-gray-500 line-through">150.000
                    VND</div>
            </div>

            <div>
                <span class="font-mono">Yếm Cho Chó Mèo với thiết kế kèm dây dắt giúp cho bạn dễ kiểm soát thú cưng khi
                    đưa
                    đi chơi mà không làm đau các bé như khi sử dụng vòng cổ thông thường😍</span>
            </div>
            <div class="font-mono">
                Loại:
                <div class="flex space-x-1"> <button id="type1" value="đỏ" onclick="activeType('type1')"
                        class="flex justify-center items-center space-x-2 p-1 bg-gray-100 border-2 border-gray-600 text-white font-medium text-lg leading-tight uppercase shadow-md hover:bg-gray-300 hover:shadow-lg focus:bg-gray-300 focus:shadow-lg focus:outline-none focus:ring-0 active:bg-gray-800 active:shadow-lg transition duration-150 ease-in-out">
                        <span class="font-mono text-lg text-gray-600">
                            Màu đỏ</span></button>
                    <button id="type2" value="xanh" onclick="activeType('type2')"
                        class="flex justify-center items-center space-x-2 p-1 bg-gray-100 border-2 border-gray-600 text-white font-medium text-lg leading-tight uppercase shadow-md hover:bg-gray-300 hover:shadow-lg focus:bg-gray-300 focus:shadow-lg focus:outline-none focus:ring-0 active:bg-gray-800 active:shadow-lg transition duration-150 ease-in-out">
                        <span class="font-mono text-lg text-gray-600">
                            Màu xanh</span></button>
                </div>
            </div>
            <div class="font-mono">
                Kích cỡ:
                <div class="flex space-x-1"> <button id="size1" value="s" onclick="activeSize('size1')"
                        class="flex justify-center items-center space-x-2 px-4 bg-gray-100 border-2 border-gray-600 text-white font-medium text-lg leading-tight uppercase shadow-md hover:bg-gray-300 hover:shadow-lg focus:bg-gray-300 focus:shadow-lg focus:outline-none focus:ring-0 active:bg-gray-800 active:shadow-lg transition duration-150 ease-in-out">
                        <span class="font-mono text-lg text-gray-600">
                            S</span></button>
                    <button id="size2" value="m" onclick="activeSize('size2')"
                        class="flex justify-center items-center space-x-2 px-4 bg-gray-100 border-2 border-gray-600 text-white font-medium text-lg leading-tight uppercase shadow-md hover:bg-gray-300 hover:shadow-lg focus:bg-gray-300 focus:shadow-lg focus:outline-none focus:ring-0 active:bg-gray-800 active:shadow-lg transition duration-150 ease-in-out">
                        <span class="font-mono text-lg text-gray-600">
                            M</span></button>
                    <button id="size3" value="l" onclick="activeSize('size3')"
                        class="flex justify-center items-center space-x-2 px-4 bg-gray-100 border-2 border-gray-600 text-white font-medium text-lg leading-tight uppercase shadow-md hover:bg-gray-300 hover:shadow-lg focus:bg-gray-300 focus:shadow-lg focus:outline-none focus:ring-0 active:bg-gray-800 active:shadow-lg transition duration-150 ease-in-out">
                        <span class="font-mono text-lg text-gray-600">
                            L</span></button>
                </div>
            </div>
            <div><input class="border w-16 font-mono text-center" type="number" id="numberAddToCart" value="1"
                    min="1">
            </div>

            <button onclick="add()"
                class="w-16 bg-yellow-400 text-white font-medium text-xs leading-tight uppercase shadow-md hover:bg-yellow-300 hover:shadow-lg focus:bg-yellow-300 focus:shadow-lg focus:outline-none focus:ring-0 active:bg-yellow-800 active:shadow-lg transition duration-150 ease-in-out">
                <span class="font-mono text-xl text-white">+</span></button>
            <button onclick="minus()"
                class="w-16 bg-yellow-400 text-white font-medium text-xs leading-tight uppercase shadow-md hover:bg-yellow-300 hover:shadow-lg focus:bg-yellow-300 focus:shadow-lg focus:outline-none focus:ring-0 active:bg-yellow-800 active:shadow-lg transition duration-150 ease-in-out">
                <span class="font-mono text-xl text-white">-</span></button>
            <form method="POST" class="space-y-2">
                @csrf
                <div class="flex space-x-5">
                    <button onclick="addToCart()"
                        class="flex justify-center items-center space-x-2 w-60 h-16 bg-yellow-100 border-2 border-yellow-600 text-white font-medium text-xs leading-tight uppercase shadow-md hover:bg-yellow-300 hover:shadow-lg focus:bg-yellow-300 focus:shadow-lg focus:outline-none focus:ring-0 active:bg-yellow-800 active:shadow-lg transition duration-150 ease-in-out">
                        <svg width="20" height="20" viewBox="0 0 20 20" fill="#CA8A04"
                            xmlns="http://www.w3.org/2000/svg">
                            <path d="M20 20H0V6H20V20ZM2 18H18V8H2V18Z"></path>
                            <path
                                d="M14 3.99995H12C12 3.49995 11.8 2.99995 11.4 2.59995C10.7 1.89995 9.3 1.89995 8.6 2.59995C8.2 2.89995 8 3.39995 8 3.99995H6C6 2.89995 6.4 1.89995 7.2 1.19995C8.7 -0.300049 11.3 -0.300049 12.9 1.19995C13.6 1.89995 14 2.89995 14 3.99995Z">
                            </path>
                        </svg>
                        <span class="font-mono text-xl text-yellow-600">
                            THÊM VÀO GIỎ HÀNG</span></button>
                    <button onclick="buyNow()"
                        class="w-44 h-16 bg-yellow-400 text-white font-medium text-xs leading-tight uppercase shadow-md hover:bg-yellow-300 hover:shadow-lg focus:bg-yellow-300 focus:shadow-lg focus:outline-none focus:ring-0 active:bg-yellow-800 active:shadow-lg transition duration-150 ease-in-out">
                        <span class="font-mono text-xl text-white">MUA NGAY</span></button>

                </div>

                <div class="hidden">
                    <input type="text" id="type" name="type" placeholder="type">
                    <input type="text" id="size" name="size" placeholder="size">
                    <input type="text" id="number" name="number" placeholder="number" value="1">
                </div>

            </form>
        </div>


    </div>
    <!-- products !-->
    <div class="flex">
        <div class="w-fit h-full mt-28">
        </div>
        <div class="pt-10 px-5">
            <div class="text-2xl text-center font-mono font-bold"><span>Một số sản phẩm tương tự</span></div>
            <div class="grid xl:grid-cols-4 grid-cols-2 gap-4">

                <a href="{{ route('detailproduct', ['id' => '1']) }}"
                    class="flex-col justify-center items-center w-full h-full py-10 hover:cursor-pointer">

                    <img class="border border-gray-200 w-full h-full  object-cover"
                        src="{{ asset('images/products/product1.png') }}" alt="">

                    <div class="text-center flex-col font-mono">
                        <div>Yếm cho pet cưng</div>
                        <div class="font-bold text-yellow-400"><span>100.000 VND</span><span
                                class="pl-2 text-gray-500 line-through">150.000 VND</span>
                        </div>
                    </div>
                </a>
                <div class="flex-col justify-center items-center w-full h-full py-10 hover:cursor-pointer">

                    <img class="border border-gray-200 w-full h-full  object-cover"
                        src="{{ asset('images/products/product2.png') }}" alt="">

                    <div class="text-center flex-col font-mono">
                        <div>Yếm cho pet cưng</div>
                        <div class="font-bold text-yellow-400"><span>100.000 VND</span><span
                                class="pl-2 text-gray-500 line-through">150.000 VND</span>
                        </div>
                    </div>
                </div>
                <div class="flex-col justify-center items-center w-full h-full py-10 hover:cursor-pointer">

                    <img class="border border-gray-200 w-full h-full  object-cover"
                        src="{{ asset('images/products/product3.png') }}" alt="">

                    <div class="text-center flex-col font-mono">
                        <div>Yếm cho pet cưng</div>
                        <div class="font-bold text-yellow-400"><span>100.000 VND</span><span
                                class="pl-2 text-gray-500 line-through">150.000 VND</span>
                        </div>
                    </div>
                </div>
                <div class="flex-col justify-center items-center w-full h-full py-10 hover:cursor-pointer">

                    <img class="border border-gray-200 w-full h-full  object-cover"
                        src="{{ asset('images/products/product4.png') }}" alt="">

                    <div class="text-center flex-col font-mono">
                        <div>Yếm cho pet cưng</div>
                        <div class="font-bold text-yellow-400"><span>100.000 VND</span><span
                                class="pl-2 text-gray-500 line-through">150.000 VND</span>
                        </div>
                    </div>
                </div>
                <div class="flex-col justify-center items-center w-full h-full py-10 hover:cursor-pointer">

                    <img class="border border-gray-200 w-full h-full  object-cover"
                        src="{{ asset('images/products/product5.png') }}" alt="">

                    <div class="text-center flex-col font-mono">
                        <div>Yếm cho pet cưng</div>
                        <div class="font-bold text-yellow-400"><span>100.000 VND</span><span
                                class="pl-2 text-gray-500 line-through">150.000 VND</span>
                        </div>
                    </div>
                </div>
                <div class="flex-col justify-center items-center w-full h-full py-10 hover:cursor-pointer">

                    <img class="border border-gray-200 w-full h-full  object-cover"
                        src="{{ asset('images/products/product6.png') }}" alt="">

                    <div class="text-center flex-col font-mono">
                        <div>Yếm cho pet cưng</div>
                        <div class="font-bold text-yellow-400"><span>100.000 VND</span><span
                                class="pl-2 text-gray-500 line-through">150.000 VND</span>
                        </div>
                    </div>
                </div>


            </div>
        </div>
        <div class="w-fit h-full mt-28">
        </div>
    </div>
    <!-- end products !-->

    <script type="text/javascript">
        function add() {
            var value = document.getElementById("numberAddToCart").value;
            value++
            document.getElementById("numberAddToCart").value = value;
            document.getElementById("number").value = value;
        }

        function minus() {
            var value = document.getElementById("numberAddToCart").value;
            if (value > 1) {
                value--;
            }
            document.getElementById("numberAddToCart").value = value;
            document.getElementById("number").value = value;
        }

        function addToCart() {

        }

        function buyNow() {

        }

        function activeType(n) {
            for (var i = 0; i < 3; i++) {
                var element = document.getElementById('type' + i);
                if (element) {
                    element.style.backgroundColor = "#F3F4F6";
                }

            }
            var element = document.getElementById(n);
            element.style.backgroundColor = "#CA8A04";
            document.getElementById("type").value = document.getElementById(n).value;

        }

        function activeSize(n) {
            for (var i = 0; i < 4; i++) {
                var element = document.getElementById('size' + i);
                if (element) {
                    element.style.backgroundColor = "#F3F4F6";
                }

            }
            var element = document.getElementById(n);
            element.style.backgroundColor = "#CA8A04";
            document.getElementById("size").value = document.getElementById(n).value;

        }
    </script>
@endsection
