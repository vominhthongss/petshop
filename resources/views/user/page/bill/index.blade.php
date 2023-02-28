@extends('user.main')
@section('content')
    <div class="w-full flex px-5 pt-5">
        <div class="xl:w-1/5 lg:w-1/5 md:w-1/5 xl:block lg:block md:block hidden mt-4">
            <ul>
                <li class=" font-mono flex space-x-3 pb-5">
                    <div class="w-12 h-12 rounded-full"> <img class="w-12 h-12  rounded-full"
                            src="https://cf.shopee.vn/file/ca379b6593d15011a80ff697a1e0ad53_tn" alt="">
                    </div>
                    <div class="flex-col flex">
                        <span class="text-left font-bold">No name</span>
                        <span class="flex text-left text-[#9B9B9B] cursor-pointer justify-start items-center"><svg
                                width="12" height="12" viewBox="0 0 12 12" xmlns="http://www.w3.org/2000/svg"
                                style="margin-right: 4px;">
                                <path d="M8.54 0L6.987 1.56l3.46 3.48L12 3.48M0 8.52l.073 3.428L3.46 12l6.21-6.18-3.46-3.48"
                                    fill="#9B9B9B" fill-rule="evenodd"></path>
                            </svg>Sửa hồ sơ</span>
                    </div>
                </li>
                <li class="font-mono hover:underline">
                    <a href="#"> Tài khoản của tôi</a>
                </li>
                <li class="font-mono hover:underline">
                    <a href="#"> Đơn mua</a>
                </li>
            </ul>
        </div>
        <div class="xl:w-4/5 lg:w-4/5 md:w-4/5 w-full border px-2">
            <ul class="
                    nav nav-tabs nav-justified
                    flex
                    md:flex-row
                    flex-wrap
                    list-none
                    border-b-0
                    pl-0
                    mb-4
                    "
                id="tabs-tabJustify" role="tablist">
                <li class="nav-item flex-grow text-center" role="presentation">
                    <a href="#tabs-homeJustify"
                        class="
                                nav-links
                                w-full
                                block
                                font-medium
                                text-xs
                                leading-tight
                                uppercase
                                border-x-0 border-t-0 border-b-2 border-transparent
                                px-6
                                py-3
                                my-2
                                hover:border-transparent hover:bg-gray-100
                                focus:border-transparent
                                font-mono
                                active
                                "
                        id="tabs-home-tabJustify" data-bs-toggle="pill" data-bs-target="#tabs-homeJustify" role="tab"
                        aria-controls="tabs-homeJustify" aria-selected="true">Tất cả</a>
                </li>
                <li class="nav-item flex-grow text-center" role="presentation">
                    <a href="#tabs-profileJustify"
                        class="
                                nav-links
                                w-full
                                block
                                font-medium
                                text-xs
                                leading-tight
                                uppercase
                                border-x-0 border-t-0 border-b-2 border-transparent
                                px-6
                                py-3
                                my-2
                                hover:border-transparent hover:bg-gray-100
                                focus:border-transparent
                                font-mono
                                "
                        id="tabs-profile-tabJustify" data-bs-toggle="pill" data-bs-target="#tabs-profileJustify"
                        role="tab" aria-controls="tabs-profileJustify" aria-selected="false">Chờ thanh toán</a>
                </li>
                <li class="nav-item flex-grow text-center" role="presentation">
                    <a href="#tabs-messagesJustify"
                        class="
                            nav-links
                            w-full
                            block
                            font-medium
                            text-xs
                            leading-tight
                            uppercase
                            border-x-0 border-t-0 border-b-2 border-transparent
                            px-6
                            py-3
                            my-2
                            hover:border-transparent hover:bg-gray-100
                            focus:border-transparent
                            font-mono
                            "
                        id="tabs-messages-tabJustify" data-bs-toggle="pill" data-bs-target="#tabs-messagesJustify"
                        role="tab" aria-controls="tabs-messagesJustify" aria-selected="false">Vận chuyển</a>
                </li>
                <li class="nav-item flex-grow text-center" role="presentation">
                    <a href="#tabs-messagesJustify"
                        class="
                            nav-links
                            w-full
                            block
                            font-medium
                            text-xs
                            leading-tight
                            uppercase
                            border-x-0 border-t-0 border-b-2 border-transparent
                            px-6
                            py-3
                            my-2
                            hover:border-transparent hover:bg-gray-100
                            focus:border-transparent
                            font-mono
                            "
                        id="tabs-messages-tabJustify" data-bs-toggle="pill" data-bs-target="#tabs-messagesJustify"
                        role="tab" aria-controls="tabs-messagesJustify" aria-selected="false">Đang giao</a>
                </li>
                <li class="nav-item flex-grow text-center" role="presentation">
                    <a href="#tabs-messagesJustify"
                        class="
                            nav-links
                            w-full
                            block
                            font-medium
                            text-xs
                            leading-tight
                            uppercase
                            border-x-0 border-t-0 border-b-2 border-transparent
                            px-6
                            py-3
                            my-2
                            hover:border-transparent hover:bg-gray-100
                            focus:border-transparent
                            font-mono
                            "
                        id="tabs-messages-tabJustify" data-bs-toggle="pill" data-bs-target="#tabs-messagesJustify"
                        role="tab" aria-controls="tabs-messagesJustify" aria-selected="false">Hoàn thành</a>
                </li>
                <li class="nav-item flex-grow text-center" role="presentation">
                    <a href="#tabs-messagesJustify"
                        class="
                            nav-links
                            w-full
                            block
                            font-medium
                            text-xs
                            leading-tight
                            uppercase
                            border-x-0 border-t-0 border-b-2 border-transparent
                            px-6
                            py-3
                            my-2
                            hover:border-transparent hover:bg-gray-100
                            focus:border-transparent
                            font-mono
                            "
                        id="tabs-messages-tabJustify" data-bs-toggle="pill" data-bs-target="#tabs-messagesJustify"
                        role="tab" aria-controls="tabs-messagesJustify" aria-selected="false">Đã huỷ</a>
                </li>
            </ul>
            <div class="tab-content" id="tabs-tabContentJustify">
                <div class="tab-pane fade show font-mono active" id="tabs-homeJustify" role="tabpanel"
                    aria-labelledby="tabs-home-tabJustify">
                    Tab 1 content justify
                </div>
                <div class="tab-pane fade font-mono" id="tabs-profileJustify" role="tabpanel"
                    aria-labelledby="tabs-profile-tabJustify">
                    Tab 2 content justify
                </div>
                <div class="tab-pane fade font-mono" id="tabs-messagesJustify" role="tabpanel"
                    aria-labelledby="tabs-profile-tabJustify">
                    Tab 3 content justify
                </div>
            </div>
        </div>
    </div>
    <style>
        .nav-links.active {
            border-bottom-color: #facc15;
            color: #facc15;


        }
    </style>
@endsection
