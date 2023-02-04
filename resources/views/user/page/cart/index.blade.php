@extends('user.main')
@section('content')
    <div class="space-y-5 pt-5">
        <div class="text-2xl text-center font-mono font-bold"><span>Giỏ hàng của bạn</span></div>
        <div class="xl:flex lg:flex md:flex flex-none w-full px-20">


            <div class="w-full px-5 space-y-0.5">
                <div class="w-full flex justify-start items-center border-t border-b space-x-5 relative">
                    <img class="w-36 h-36  object-cover items-start" src="{{ asset('images/products/product1.png') }}"
                        alt="">

                    <div class="w-96 text-center flex-col font-mono">
                        <span>Yếm cho pet cưng</span>
                        <div class="font-bold text-yellow-400 text-xl">
                            <span>100.000
                                VND</span>


                        </div>

                    </div>
                    <span class="font-mono">x</span>
                    <input class="border w-16 font-mono text-center" type="number" id="numberAddToCart" value="1"
                        min="1">
                    <div class="w-full flex justify-end items-center space-x-4 font-bold text-yellow-400 text-2xl">
                        <span>100.000
                            VND</span>

                        <svg width="20" height="20" viewBox="0 0 20 20" fill="none"
                            xmlns="http://www.w3.org/2000/svg">
                            <path d="M7 0H13V2H18V4H2V2H7V0Z" fill="#222222"></path>
                            <path fill-rule="evenodd" clip-rule="evenodd" d="M4 20H16V6H4V20ZM14 18H6V8H14V18Z"
                                fill="#222222">
                            </path>
                        </svg>
                    </div>
                </div>
                <div class="w-full flex justify-start items-center border-t border-b space-x-5 relative">
                    <img class="w-36 h-36  object-cover items-start" src="{{ asset('images/products/product1.png') }}"
                        alt="">

                    <div class="w-96 text-center flex-col font-mono">
                        <span>Yếm cho pet cưng</span>
                        <div class="font-bold text-yellow-400 text-xl">
                            <span>100.000
                                VND</span>


                        </div>

                    </div>
                    <span class="font-mono">x</span>
                    <input class="border w-16 font-mono text-center" type="number" id="numberAddToCart" value="1"
                        min="1">
                    <div class="w-full flex justify-end items-center space-x-4 font-bold text-yellow-400 text-2xl">
                        <span>100.000
                            VND</span>

                        <svg width="20" height="20" viewBox="0 0 20 20" fill="none"
                            xmlns="http://www.w3.org/2000/svg">
                            <path d="M7 0H13V2H18V4H2V2H7V0Z" fill="#222222"></path>
                            <path fill-rule="evenodd" clip-rule="evenodd" d="M4 20H16V6H4V20ZM14 18H6V8H14V18Z"
                                fill="#222222">
                            </path>
                        </svg>
                    </div>
                </div>
            </div>

            <div class="border-black border-2 rounded-md xl:w-64 lg:w-64 md:w-64 w-full h-full relative py-2 px-1">

                <div class="text-center"><span class="font-mono"> Tổng: 3 sản phẩm</span></div>
                <div class="text-center font-bold text-2xl text-yellow-400"><span>100.000 VND</span>
                </div>

                <div class="text-center items-end mt-20 pb-2"> <button
                        class="xl:w-44 lg:w-44 md:w-44 w-full h-16 bg-yellow-400 text-white font-medium text-xs leading-tight uppercase shadow-md hover:bg-yellow-300 hover:shadow-lg focus:bg-yellow-300 focus:shadow-lg focus:outline-none focus:ring-0 active:bg-yellow-800 active:shadow-lg transition duration-150 ease-in-out">
                        <span class="font-mono text-xl text-white">THANH TOÁN</span></button></div>

            </div>
        </div>
    </div>
@endsection
