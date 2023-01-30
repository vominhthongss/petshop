<!-- Trigger modal -->

<svg data-bs-toggle="modal" data-bs-target="#staticBackdrop" class="cursor-pointer hover:scale-150 " width="20"
    height="20" viewBox="0 0 20 20" xmlns="http://www.w3.org/2000/svg">
    <path
        d="M20 18.5787L16.2437 14.8223C17.4619 13.2995 18.2741 11.269 18.2741 9.13706C18.2741 4.06091 14.2132 0 9.13706 0C4.06091 0 0 4.06091 0 9.13706C0 14.2132 4.06091 18.2741 9.13706 18.2741C11.269 18.2741 13.2995 17.5635 14.8223 16.2437L18.5787 20L20 18.5787ZM2.03046 9.13706C2.03046 5.17766 5.17766 2.03046 9.13706 2.03046C13.0964 2.03046 16.2437 5.17766 16.2437 9.13706C16.2437 13.0964 13.0964 16.2437 9.13706 16.2437C5.17766 16.2437 2.03046 13.0964 2.03046 9.13706Z">
    </path>
</svg>


<!-- Modal -->
<div class="modal fade fixed top-0 left-0 hidden w-full h-full outline-none overflow-x-hidden overflow-y-auto"
    id="staticBackdrop" data-bs-backdrop="static" data-bs-keyboard="false" tabindex="-1"
    aria-labelledby="staticBackdropLabel" aria-hidden="true">
    <div class="modal-dialog relative w-auto pointer-events-none">
        <div
            class="modal-content border-none shadow-lg relative flex flex-col w-full pointer-events-auto bg-white bg-clip-padding rounded-md outline-none text-current">
            <div
                class="modal-header flex flex-shrink-0 items-center justify-between p-4 border-b border-gray-200 rounded-t-md">
                <h5 class="font-mono text-xl font-medium leading-normal text-gray-800" id="exampleModalLabel">
                    Bạn muốn tìm sản phẩm nào?
                </h5>
                <button type="button"
                    class="btn-close box-content w-4 h-4 p-1 text-black border-none rounded-none opacity-50 focus:shadow-none focus:outline-none focus:opacity-100 hover:text-black hover:opacity-75 hover:no-underline"
                    data-bs-dismiss="modal" aria-label="Close"></button>
            </div>
            <div class="modal-body relative ">
                <div class="flex justify-center">
                    <div class="w-full">

                        <input type="text"
                            class="
                          form-control
                          block
                          w-full
                          px-3
                          py-1.5
                          text-base
                          font-normal
                          text-gray-700
                          bg-yellow bg-clip-padding
                          border border-solid border-yellow-400
                          rounded
                          transition
                          ease-in-out
                          m-0
                          focus:text-gray-600 focus:bg-yellow focus:border-yellow-600 placeholder:font-mono
                        "
                            id="seachInput" placeholder="Chải lông mèo, thức ăn mèo,..." />
                    </div>
                </div>
            </div>
            <div
                class="modal-footer flex flex-shrink-0 flex-wrap items-center justify-end p-4 border-t border-gray-200 rounded-b-md">

                <button type="button"
                    class="flex space-x-2 font-mono px-6 py-2.5 bg-yellow-400 text-white font-medium text-xs leading-tight uppercase shadow-md hover:bg-yellow-300 hover:shadow-lg focus:bg-yellow-300 focus:shadow-lg focus:outline-none focus:ring-0 active:bg-yellow-800 active:shadow-lg transition duration-150 ease-in-out ml-1">
                    <svg width="20" height="20" viewBox="0 0 20 20" fill="#ffff"
                        xmlns="http://www.w3.org/2000/svg">
                        <path
                            d="M20 18.5787L16.2437 14.8223C17.4619 13.2995 18.2741 11.269 18.2741 9.13706C18.2741 4.06091 14.2132 0 9.13706 0C4.06091 0 0 4.06091 0 9.13706C0 14.2132 4.06091 18.2741 9.13706 18.2741C11.269 18.2741 13.2995 17.5635 14.8223 16.2437L18.5787 20L20 18.5787ZM2.03046 9.13706C2.03046 5.17766 5.17766 2.03046 9.13706 2.03046C13.0964 2.03046 16.2437 5.17766 16.2437 9.13706C16.2437 13.0964 13.0964 16.2437 9.13706 16.2437C5.17766 16.2437 2.03046 13.0964 2.03046 9.13706Z">
                        </path>
                    </svg></button>
            </div>
        </div>
    </div>
</div>
