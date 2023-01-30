@extends('user.main')
@section('content')
    <!-- products !-->
    <div class="flex">
        <div class="w-fit h-full mt-28">
        </div>
        <div class="pt-10 px-5">
            <div class="text-2xl text-center font-mono font-bold">
                <div class="flex justify-start items-center">
                    <span class="mr-2 text-xl h-full ">Sắp xếp:</span>
                    <div class="xl:w-96">

                        <select
                            class="form-select appearance-none
                    block
                    w-full
                    px-3
                    py-1.5
                    text-base
                    font-normal
                    text-gray-700
                    bg-white bg-clip-padding bg-no-repeat
                    border border-solid border-gray-300
                    rounded
                    transition
                    ease-in-out
                    m-0
                    focus:text-gray-700 focus:bg-white focus:border-yellow-600 "
                            aria-label="Default select example">
                            <option selected>Tất cả</option>
                            <option value="1">Giá tăng</option>
                            <option value="2">Giá giảm</option>
                            <option value="3">Cho chó</option>
                            <option value="4">Cho mèo</option>
                        </select>
                    </div>
                    @foreach ($type as $item)
                        <div>{{ $item }}</div>
                    @endforeach
                </div>
            </div>
            <div class="grid xl:grid-cols-4 grid-cols-2 gap-4">

                <div class="flex-col justify-center items-center w-full h-full py-10 hover:cursor-pointer">

                    <img class="border border-gray-200 w-full h-full  object-cover"
                        src="{{ asset('images/products/product1.png') }}" alt="">

                    <div class="text-center flex-col font-mono">
                        <div>Yếm cho pet cưng</div>
                        <div class="font-bold text-yellow-400"><span>100.000 VND</span><span
                                class="pl-2 text-gray-500 line-through">150.000 VND</span>
                        </div>
                    </div>
                </div>
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
@endsection
