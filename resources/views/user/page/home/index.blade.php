@extends('user.main')
@section('content')
    <div id="carouselExampleControls" class="carousel slide relative p-5" data-bs-ride="carousel">
        <div class="carousel-inner relative w-full overflow-hidden">
            <div class="carousel-item active relative float-left w-full">
                <img src="{{ asset('carousel/slide1.png') }}" class="block w-full" alt="pet1" />
            </div>
            <div class="carousel-item relative float-left w-full">
                <img src="{{ asset('carousel/slide2.png') }}" class="block w-full" alt="pet2" />
            </div>
            <div class="carousel-item relative float-left w-full">
                <img src="{{ asset('carousel/slide3.png') }}" class="block w-full" alt="pet3" />
            </div>
        </div>
        <button
            class="carousel-control-prev absolute top-0 bottom-0 flex items-center justify-center p-0 text-center border-0 hover:outline-none hover:no-underline focus:outline-none focus:no-underline left-0"
            type="button" data-bs-target="#carouselExampleControls" data-bs-slide="prev">
            <span class="carousel-control-prev-icon inline-block bg-no-repeat" aria-hidden="true"></span>
            <span class="visually-hidden">Previous</span>
        </button>
        <button
            class="carousel-control-next absolute top-0 bottom-0 flex items-center justify-center p-0 text-center border-0 hover:outline-none hover:no-underline focus:outline-none focus:no-underline right-0"
            type="button" data-bs-target="#carouselExampleControls" data-bs-slide="next">
            <span class="carousel-control-next-icon inline-block bg-no-repeat" aria-hidden="true"></span>
            <span class="visually-hidden">Next</span>
        </button>
    </div>

    <div class="md:flex md:justify-center md:items-center md:space-x-20 md:mt-5 grid grid-cols-2 ">
        <div class="w-full text-center cursor-pointer hover:bg-red-400">
            <svg width="full" height="80" viewBox="0 0 80 80" fill="none" xmlns="http://www.w3.org/2000/svg">
                <path
                    d="M79.8202 54.3322C79.7666 53.9861 79.7058 53.5938 79.6481 53.1522L77.4835 36.5395C77.2758 33.6261 76.5328 31.2322 75.2118 29.2241C73.5288 26.6663 70.903 24.7593 67.3988 23.5475C65.6379 17.6545 60.323 13.6135 54.1797 13.6135C50.8021 13.6135 47.6124 14.8553 45.0015 17.1516C42.499 12.8179 38.2744 10.2944 33.3369 10.2944C27.9842 10.2944 23.3476 13.3322 21.6681 17.7261C21.0887 17.6033 20.487 17.5417 19.867 17.5417C17.025 17.5417 13.9993 18.8853 11.773 21.1358C9.78399 23.1467 8.59025 25.6815 8.34353 28.3726C5.3809 29.491 3.46997 31.7268 3.48263 34.1808L3.48794 35.1842L1.92733 43.3375C1.92655 43.3409 1.92592 43.3442 1.9253 43.3476L0.293749 51.8716C-0.0926544 53.8897 -0.183747 55.4264 0.554372 56.85C1.19296 58.0816 2.29639 58.9372 3.96638 60.2323L4.30262 60.4934C8.4315 63.7014 14.0418 66.1337 20.9789 67.7221C26.6707 69.0255 33.1355 69.7052 39.7833 69.7052C40.4102 69.7052 41.0391 69.6991 41.6689 69.6869C56.545 69.4002 70.1824 65.8088 77.2588 60.3144C80.1305 58.0848 80.2373 57.0263 79.8202 54.3322ZM10.2543 31.0427C10.9493 30.8618 11.4316 30.2307 11.4237 29.5126C11.3988 27.2316 12.3127 25.0374 13.9969 23.3346C15.6482 21.6651 17.8428 20.6686 19.8677 20.6686C20.6652 20.6686 21.4023 20.824 22.0595 21.1304C22.4959 21.3339 23.0012 21.3251 23.4303 21.1065C23.8592 20.8879 24.1634 20.4842 24.2551 20.0117C25.0954 15.685 29.4601 13.4213 33.3376 13.4213C37.6989 13.4213 41.3537 16.0325 43.1145 20.4064C43.3189 20.914 43.7739 21.2778 44.314 21.3658C44.8546 21.4537 45.4007 21.2526 45.7557 20.8358C48.0029 18.1948 50.9949 16.7403 54.1804 16.7403C59.1592 16.7403 63.4375 20.1886 64.5847 25.1257C64.7112 25.6704 65.119 26.1062 65.6543 26.2684C72.5493 28.3565 73.9836 32.6294 74.3261 36.2797C72.5276 38.7186 68.4579 41.2536 63.284 43.1362C58.6594 44.8192 50.9054 46.8249 40.2294 46.8249C20.9855 46.8249 7.36026 40.8436 6.61636 35.2286L6.61073 34.1646C6.60386 32.9274 8.17041 31.5854 10.2543 31.0427ZM76.8506 56.3961C76.6992 56.7903 75.713 57.5564 75.3414 57.8448C68.1774 63.4075 53.9694 66.5938 39.7589 66.5934C26.7987 66.5931 13.836 63.9418 6.22245 58.0245L5.88339 57.7614C2.86498 55.4208 2.80732 55.3761 3.3656 52.4594L4.48293 46.6218C6.37886 48.1021 8.60571 49.3923 11.2271 50.5293C11.4298 50.6172 11.6408 50.659 11.8485 50.659C12.4524 50.659 13.0279 50.3069 13.2836 49.7172C13.6272 48.9252 13.2636 48.0043 12.4716 47.6609C9.47946 46.3629 7.07932 44.8654 5.15746 43.099L5.72433 40.1372C7.71963 42.4023 10.9869 44.4248 15.3566 46.0482C22.1319 48.5655 30.9649 49.9518 40.2291 49.9518C51.3607 49.9518 59.4919 47.8434 64.3529 46.0746C68.7263 44.4834 72.356 42.4617 74.8194 40.2922L76.5478 53.5561C76.6103 54.0349 76.6739 54.4469 76.7303 54.8103C76.8519 55.5964 76.9397 56.1641 76.8506 56.3961Z"
                    fill="black"></path>
                <path
                    d="M16.6995 49.2433C16.6713 49.2345 16.6408 49.2259 16.6127 49.2189C15.7756 49.0095 14.9261 49.5188 14.7167 50.3564C14.5124 51.1737 14.9922 52.0016 15.7938 52.2358C15.9419 52.2797 16.0914 52.3006 16.2388 52.3006C16.9114 52.3006 17.5324 51.8633 17.7356 51.1861C17.9823 50.3633 17.5191 49.4963 16.6995 49.2433Z"
                    fill="black"></path>
                <path
                    d="M62.3001 25.6568C61.6234 22.7439 59.5686 20.4489 56.8041 19.5178C56.3825 19.3758 55.9517 19.2669 55.5233 19.194C55.3607 19.1664 55.1953 19.1434 55.0316 19.1258C54.173 19.0344 53.4022 19.6542 53.3096 20.5126C53.2169 21.3711 53.8377 22.142 54.6963 22.2346C54.7968 22.2454 54.8986 22.2596 54.9986 22.2767C55.2666 22.3223 55.5382 22.3909 55.8056 22.4812C57.5614 23.0723 58.8183 24.4878 59.2542 26.3643C59.4219 27.0865 60.065 27.5743 60.7758 27.5743C60.8928 27.5743 61.012 27.561 61.1308 27.5335C61.972 27.3379 62.4954 26.4977 62.3001 25.6568Z"
                    fill="black"></path>
                <path
                    d="M51.9196 20.888C51.4579 20.1585 50.4921 19.9411 49.7624 20.4029L49.7115 20.4357C48.9918 20.9079 48.794 21.8699 49.2631 22.5914C49.562 23.0514 50.0638 23.3011 50.576 23.3011C50.8673 23.3011 51.1621 23.2203 51.4247 23.0513L51.4346 23.045C52.1643 22.5835 52.3815 21.6175 51.9196 20.888Z"
                    fill="black"></path>
                <path
                    d="M20.882 29.6146C18.2958 29.6146 16.1918 31.7187 16.1918 34.3049C16.1918 36.8911 18.2958 38.9952 20.882 38.9952C23.4683 38.9952 25.5723 36.8911 25.5723 34.3049C25.5723 31.7187 23.4683 29.6146 20.882 29.6146ZM20.882 35.8685C20.02 35.8685 19.3186 35.1671 19.3186 34.3051C19.3186 33.443 20.0202 32.7416 20.882 32.7416C21.7441 32.7416 22.4455 33.443 22.4455 34.3051C22.4455 35.1671 21.7441 35.8685 20.882 35.8685Z"
                    fill="black"></path>
                <path
                    d="M51.7922 29.9132C48.7729 29.9132 46.3167 32.3698 46.3167 35.389C46.3167 38.4083 48.7732 40.8647 51.7922 40.8647C54.8117 40.8647 57.268 38.4082 57.268 35.389C57.268 32.3696 54.8114 29.9132 51.7922 29.9132ZM51.7922 37.738C50.4971 37.738 49.4435 36.6843 49.4435 35.3891C49.4435 34.094 50.4971 33.0402 51.7922 33.0402C53.0874 33.0402 54.1411 34.094 54.1411 35.3891C54.1411 36.6843 53.0874 37.738 51.7922 37.738Z"
                    fill="black"></path>
                <path
                    d="M35.9911 20.3838C33.4049 20.3838 31.3008 22.4878 31.3008 25.0741C31.3008 27.6603 33.4049 29.7643 35.9911 29.7643C38.5773 29.7643 40.6814 27.6603 40.6814 25.0741C40.6814 22.4878 38.5773 20.3838 35.9911 20.3838ZM35.9911 26.6376C35.1291 26.6376 34.4277 25.9362 34.4277 25.0742C34.4277 24.2122 35.1291 23.5108 35.9911 23.5108C36.8531 23.5108 37.5545 24.2122 37.5545 25.0742C37.5545 25.9362 36.8531 26.6376 35.9911 26.6376Z"
                    fill="black"></path>
            </svg>
            <span class="text-xl font-bold">Thức ăn</span>
        </div>
        <div class="w-full text-center cursor-pointer hover:bg-red-400">
            <svg width="full" height="80" viewBox="0 0 80 80" fill="none" xmlns="http://www.w3.org/2000/svg">
                <path
                    d="M57.2169 25.1593H57.0491V18.2212C57.0491 16.4465 55.6056 15.0029 53.8309 15.0029H50.2984V4.03092C50.2984 1.80827 48.4898 0 46.2673 0H33.7328C31.51 0 29.7017 1.80827 29.7017 4.03092V15.0029H26.1693C24.3947 15.0029 22.951 16.4467 22.951 18.2212V25.1593H22.7833C18.4918 25.1593 15.0002 28.6508 15.0002 32.9425V72.2169C15.0002 76.5085 18.4918 80 22.7833 80H57.2169C61.5085 80 64.9999 76.5086 64.9999 72.2169V32.9425C64.9997 28.6508 61.5085 25.1593 57.2169 25.1593ZM33.7328 3.12499H46.2673C46.7584 3.12499 47.1734 3.53983 47.1734 4.03092V7.50153H43.1109C42.2481 7.50153 41.5484 8.20106 41.5484 9.06403C41.5484 9.92699 42.2481 10.6265 43.1109 10.6265H47.1734V15.0029H32.8269V4.03092H32.8267C32.8266 3.53983 33.2416 3.12499 33.7328 3.12499ZM26.0758 18.2212C26.0758 18.1732 26.1211 18.1279 26.1691 18.1279H53.8307C53.8787 18.1279 53.924 18.1732 53.924 18.2212V25.1593H26.0758V18.2212ZM61.8749 70.6544H53.1324C52.2696 70.6544 51.5699 71.3539 51.5699 72.2169C51.5699 73.0799 52.2696 73.7794 53.1324 73.7794H61.6046C60.9608 75.5814 59.2374 76.875 57.2169 76.875H22.7832C20.2146 76.875 18.1251 74.7853 18.1251 72.2169V34.505H26.8675C27.7305 34.505 28.43 33.8055 28.43 32.9425C28.43 32.0796 27.7305 31.38 26.8675 31.38H18.3954C19.0391 29.5779 20.7626 28.2843 22.7832 28.2843H57.2169C59.7855 28.2843 61.8749 30.3739 61.8749 32.9425V70.6544Z"
                    fill="black"></path>
                <path
                    d="M39.9998 50.8359C35.4056 50.8359 31.668 54.5861 31.668 59.1954C31.668 63.8048 35.4056 67.5548 39.9998 67.5548C44.594 67.5548 48.3318 63.8048 48.3318 59.1954C48.332 54.5859 44.5942 50.8359 39.9998 50.8359ZM39.9998 64.4298C37.1287 64.4298 34.793 62.0817 34.793 59.1954C34.793 56.309 37.1287 53.9609 39.9998 53.9609C42.871 53.9609 45.2068 56.309 45.2068 59.1954C45.207 62.0817 42.8712 64.4298 39.9998 64.4298Z"
                    fill="black"></path>
                <path
                    d="M49.993 42.2163C47.2542 42.2163 45.0261 44.5724 45.0261 47.4683C45.0261 50.3642 47.2541 52.7203 49.993 52.7203C52.7316 52.7203 54.9597 50.3642 54.9597 47.4683C54.9597 44.5724 52.7314 42.2163 49.993 42.2163ZM49.993 49.5953C48.9774 49.5953 48.1511 48.6411 48.1511 47.4683C48.1511 46.2955 48.9774 45.3413 49.993 45.3413C51.0084 45.3413 51.8347 46.2955 51.8347 47.4683C51.8345 48.6411 51.0083 49.5953 49.993 49.5953Z"
                    fill="black"></path>
                <path
                    d="M40.1105 37.6047C37.3717 37.6047 35.1436 39.9608 35.1436 42.8567C35.1436 45.7525 37.3716 48.1086 40.1105 48.1086C42.8491 48.1086 45.0772 45.7525 45.0772 42.8567C45.0772 39.9608 42.8489 37.6047 40.1105 37.6047ZM40.1105 44.9834C39.0949 44.9834 38.2686 44.0292 38.2686 42.8566C38.2686 41.6838 39.0949 40.7296 40.1105 40.7296C41.1259 40.7296 41.9522 41.6838 41.9522 42.8566C41.9522 44.0294 41.1258 44.9834 40.1105 44.9834Z"
                    fill="black"></path>
                <path
                    d="M30.0075 42.2163C27.2688 42.2163 25.0405 44.5724 25.0405 47.4683C25.0405 50.3642 27.2688 52.7203 30.0075 52.7203C32.7463 52.7203 34.9742 50.3642 34.9742 47.4683C34.9742 44.5724 32.7461 42.2163 30.0075 42.2163ZM30.0075 49.5953C28.9918 49.5953 28.1655 48.6411 28.1655 47.4683C28.1655 46.2955 28.9918 45.3413 30.0075 45.3413C31.023 45.3413 31.8492 46.2955 31.8492 47.4683C31.8492 48.6411 31.0228 49.5953 30.0075 49.5953Z"
                    fill="black"></path>
                <path
                    d="M31.5623 31.38H31.5117C30.6487 31.38 29.9492 32.0795 29.9492 32.9425C29.9492 33.8053 30.6489 34.505 31.5117 34.505H31.5623C32.4251 34.505 33.1248 33.8055 33.1248 32.9425C33.1248 32.0795 32.4253 31.38 31.5623 31.38Z"
                    fill="black"></path>
                <path
                    d="M48.4882 70.6544H48.4376C47.5748 70.6544 46.8751 71.3539 46.8751 72.2169C46.8751 73.0799 47.5748 73.7794 48.4376 73.7794H48.4882C49.351 73.7794 50.0507 73.0799 50.0507 72.2169C50.0507 71.3541 49.3512 70.6544 48.4882 70.6544Z"
                    fill="black"></path>
            </svg>
            <span class="text-xl font-bold">Xà phòng</span>
        </div>
        <div class="w-full text-center cursor-pointer hover:bg-red-400">
            <svg width="full" height="80" viewBox="0 0 80 80" fill="none" xmlns="http://www.w3.org/2000/svg">
                <path
                    d="M67.564 10.0961C60.182 8.22083 50.3928 7.18787 39.9999 7.18787C29.607 7.18787 19.8179 8.22067 12.4359 10.0961C4.18404 12.1925 0 15.025 0 18.5156V27.5848C0 27.5882 0 27.5915 0 27.5949V35.0982C0 38.5885 4.18404 41.4211 12.4359 43.5177C19.4471 45.2987 28.6301 46.3194 38.4392 46.4175L38.4382 47.9136C32.7929 48.6208 28.3087 53.1049 27.6012 58.7501H27.3108C26.448 58.7501 25.7483 59.4496 25.7483 60.3126C25.7483 61.1755 26.448 61.875 27.3108 61.875H27.6012C28.373 68.0322 33.637 72.8125 40.0001 72.8125C46.3689 72.8125 51.6369 68.0236 52.4011 61.8582H52.6894C53.5523 61.8582 54.2519 61.1586 54.2519 60.2957C54.2519 59.4327 53.5523 58.7332 52.6894 58.7332H52.3969C51.6827 53.0965 47.2024 48.6211 41.5634 47.9137L41.5643 46.417C43.1369 46.4009 44.7008 46.3612 46.2472 46.2973C46.2482 46.2973 46.2491 46.2975 46.25 46.2975C46.2571 46.2975 46.2639 46.2965 46.271 46.2964C49.8321 46.1487 53.2972 45.8753 56.5612 45.485C56.6073 45.4816 56.6536 45.4762 56.7 45.4687C56.7019 45.4684 56.7036 45.468 56.7056 45.4676C57.6537 45.3531 58.5868 45.2297 59.4978 45.0953C67.1548 43.9659 80 41.1656 80 35.0982V18.5155C79.9998 15.025 75.8158 12.1925 67.564 10.0961ZM13.2054 13.125C20.3432 11.3116 29.8589 10.313 39.9999 10.313C50.141 10.313 59.6568 11.3116 66.7945 13.125C74.7518 15.1466 76.8749 17.4647 76.8749 18.5156C76.8749 19.7065 74.6568 21.4404 69.8963 23.0065C62.3931 20.15 51.5461 18.5166 39.9999 18.5166C28.4491 18.5166 17.5979 20.1514 10.0945 23.01C4.71466 21.2433 3.12498 19.4037 3.12498 18.5156C3.12498 17.4644 5.24809 15.1464 13.2054 13.125ZM32.1873 43.0977C25.0349 42.7206 18.4722 41.8269 13.2052 40.4888C5.24809 38.4672 3.12498 36.1491 3.12498 35.0982V30.0955C6.05965 31.4583 9.33416 32.6401 12.8962 33.6182C13.0346 33.6561 13.1737 33.6743 13.3107 33.6743C13.997 33.6743 14.626 33.2188 14.8165 32.5251C15.0451 31.6929 14.5557 30.8332 13.7235 30.6046C9.78057 29.522 6.22106 28.1846 3.12498 26.6249V23.2256C4.86825 24.4093 7.18027 25.3696 9.63573 26.1423C9.65838 26.1501 9.68119 26.1571 9.70416 26.1639C11.4746 26.7178 13.3176 27.1748 15.0744 27.547C20.2818 28.6502 25.9317 29.3463 32.1873 29.6555V43.0977ZM40.0007 61.8749C40.0004 61.8749 40.0002 61.8747 39.9999 61.8747C39.9996 61.8747 39.9995 61.8749 39.9991 61.8749C39.1379 61.8744 38.4374 61.1738 38.4374 60.3124C38.4374 59.4508 39.1384 58.7499 39.9999 58.7499C40.8615 58.7499 41.5624 59.4508 41.5624 60.3124C41.5624 61.1738 40.8619 61.8746 40.0007 61.8749ZM49.2392 58.7332H47.9072C47.0443 58.7332 46.3447 59.4327 46.3447 60.2957C46.3447 61.1586 47.0443 61.8582 47.9072 61.8582H49.2453C48.5908 65.7855 45.4875 68.8933 41.5624 69.5548V64.7313C43.381 64.0863 44.6874 62.3494 44.6874 60.3126C44.6874 57.7279 42.5846 55.6251 39.9999 55.6251C37.4153 55.6251 35.3125 57.7279 35.3125 60.3126C35.3125 62.3494 36.6189 64.0863 38.4374 64.7313V69.5548C34.5181 68.8942 31.4183 65.7946 30.7578 61.8752H32.0928C32.9556 61.8752 33.6553 61.1757 33.6553 60.3127C33.6553 59.4497 32.9556 58.7502 32.0928 58.7502H30.7578C31.5039 54.3227 35.3623 50.9385 39.9984 50.9378C39.9987 50.9378 39.999 50.9378 39.9991 50.9378C39.9995 50.9378 39.9998 50.9378 40.0001 50.9378C40.0004 50.9378 40.0007 50.9378 40.0012 50.9378C44.6316 50.9379 48.4861 54.3138 49.2392 58.7332ZM44.6874 43.2266C43.6529 43.2591 42.6116 43.2809 41.5659 43.2919L41.5685 38.6864C41.569 37.8235 40.8698 37.1235 40.007 37.123C40.0066 37.123 40.0063 37.123 40.006 37.123C39.1435 37.123 38.444 37.8221 38.4435 38.6846L38.4409 43.2925C37.3896 43.2819 36.3459 43.2609 35.3125 43.2289V29.7768C36.8396 29.8198 38.3993 29.843 39.9999 29.843C41.5918 29.843 43.153 29.8188 44.6874 29.7741V43.2266ZM39.9998 26.7181C30.7395 26.7181 22.7983 25.9893 15.7219 24.4901C15.7132 24.4882 15.7049 24.4864 15.6963 24.4845C22.4211 22.6581 30.9694 21.6412 39.9998 21.6412C49.0292 21.6412 57.5767 22.6578 64.3012 24.4839C61.6345 25.0506 58.7918 25.5099 55.787 25.8617C55.6628 25.8612 55.542 25.8751 55.4256 25.9023C50.6692 26.4432 45.513 26.7181 39.9998 26.7181ZM56.2361 42.3767C53.5502 42.6991 50.7219 42.94 47.8125 43.0947V29.6504C50.6146 29.5095 53.3106 29.2906 55.8937 28.994C59.6428 29.2116 61.1693 32.1438 61.3432 34.848C61.5537 38.1217 59.8661 41.7489 56.2361 42.3767ZM76.8749 35.0982C76.8749 36.6407 73.0479 39.4224 62.8046 41.3713C64.0273 39.4361 64.6163 37.0516 64.4617 34.6474C64.3095 32.2812 63.3746 29.876 61.6045 28.1804C62.7915 27.976 63.9531 27.7554 65.0813 27.5138C66.7849 27.149 68.5705 26.7035 70.2904 26.1656C70.3066 26.1609 70.3224 26.1554 70.3383 26.1503C72.7999 25.3771 75.1236 24.4139 76.8749 23.2246V35.0982Z"
                    fill="black"></path>
                <path
                    d="M18.1019 31.6608L18.0643 31.6529C17.2191 31.4788 16.3977 32.0238 16.2236 32.8691C16.0496 33.7143 16.5982 34.5413 17.4433 34.7155C17.5544 34.7394 17.665 34.751 17.7741 34.751C18.4941 34.751 19.1419 34.2502 19.3 33.5177C19.4818 32.6741 18.9454 31.8427 18.1019 31.6608Z"
                    fill="black"></path>
            </svg>
            <span class="text-xl font-bold">Vòng cổ</span>
        </div>
        <div class="w-full text-center cursor-pointer hover:bg-red-400">
            <svg width="full" height="80" viewBox="0 0 80 80" fill="none" xmlns="http://www.w3.org/2000/svg">
                <path
                    d="M73.1803 49.2269C73.1643 49.21 73.1378 49.1835 73.1209 49.1675C72.4975 48.5711 71.5087 48.5929 70.9117 49.2166C70.3217 49.8335 70.3367 50.8083 70.9412 51.4066C71.2459 51.7146 71.6483 51.8694 72.0512 51.8694C72.4395 51.8694 72.8284 51.7255 73.1311 51.4361C73.7547 50.8397 73.7767 49.8507 73.1803 49.2269Z"
                    fill="black"></path>
                <path
                    d="M9.08799 28.6232C9.07221 28.6063 9.04564 28.5797 9.02893 28.5638C8.40549 27.9674 7.41674 27.9891 6.8197 28.6128C6.2297 29.2297 6.2447 30.2046 6.84908 30.8029C7.15377 31.1108 7.55611 31.2657 7.95908 31.2657C8.34736 31.2657 8.73627 31.1218 9.03893 30.8324C9.66252 30.236 9.68455 29.2469 9.08799 28.6232Z"
                    fill="black"></path>
                <path
                    d="M78.3331 61.3425C77.6912 59.1859 78.1248 56.5965 78.7248 53.0128C79.293 49.6196 80 45.3968 80 40.0001C80 34.6034 79.293 30.3804 78.7248 26.9873C78.1248 23.4037 77.6914 20.8141 78.3331 18.6577C78.4586 18.2365 78.5952 17.8147 78.7398 17.3686C79.6109 14.6797 80.5986 11.6322 78.6558 9.16004C77.6273 7.85113 76.302 7.18738 74.7173 7.18738C73.1492 7.18738 71.5455 7.84957 69.9945 8.49004C69.3798 8.74379 68.7442 9.00629 68.1248 9.22223C66.1375 9.91504 63.7203 10.2377 60.5176 10.2377C57.6632 10.2377 54.5551 9.98129 51.2643 9.71004C47.6165 9.40926 43.8448 9.09816 40.0001 9.09816C36.1551 9.09816 32.3832 9.40926 28.7355 9.71004C25.4451 9.98129 22.3369 10.2377 19.4824 10.2377C16.2797 10.2377 13.8624 9.91488 11.875 9.22223C11.2555 9.00629 10.62 8.74379 10.0053 8.49004C8.45439 7.84957 6.85064 7.18738 5.28251 7.18738C3.69751 7.18738 2.37235 7.85113 1.34375 9.16004C-0.598439 11.6321 0.388907 14.6796 1.26016 17.3683C1.40469 17.8146 1.54141 18.2363 1.66688 18.6576C2.30875 20.8141 1.87516 23.4035 1.27516 26.9871C0.707033 30.3804 0 34.6034 0 40.0001C0 45.3968 0.707033 49.6198 1.27516 53.0128C1.87516 56.5964 2.30875 59.1859 1.66688 61.3425C1.54141 61.7639 1.40469 62.1856 1.26 62.632C0.388907 65.3206 -0.598595 68.368 1.34407 70.84C2.37282 72.1491 3.69798 72.8127 5.28282 72.8127C6.85095 72.8125 8.45471 72.1503 10.0058 71.51C10.6205 71.2562 11.256 70.9937 11.8753 70.7778C13.8627 70.085 16.2799 69.7623 19.4827 69.7623C22.3371 69.7623 25.4452 70.0187 28.736 70.29C32.3838 70.5908 36.1557 70.9019 40.0004 70.9019C43.8452 70.9019 47.6171 70.5908 51.2648 70.29C54.5554 70.0187 57.6634 69.7623 60.5179 69.7623C63.7206 69.7623 66.1379 70.085 68.1251 70.7778C68.7447 70.9939 69.3801 71.2562 69.995 71.5102C71.5458 72.1505 73.1494 72.8127 74.7176 72.8127C76.3023 72.8127 77.6277 72.1489 78.6562 70.84C80.5988 68.368 79.6113 65.3205 78.7402 62.6317C78.5953 62.1853 78.4586 61.7637 78.3331 61.3425ZM75.3381 62.2339C75.4742 62.6912 75.623 63.1506 75.767 63.595C76.5795 66.1028 77.0486 67.8277 76.1987 68.9092C75.6611 69.5934 75.1689 69.6877 74.7173 69.6877C73.7691 69.6877 72.5148 69.17 71.1873 68.6217C70.5328 68.3514 69.8559 68.0719 69.1536 67.8272C66.8254 67.0156 64.0811 66.6375 60.5175 66.6375C57.5343 66.6375 54.364 66.8991 51.0076 67.1758C47.4231 67.4714 43.7163 67.777 40.0001 67.777C36.2841 67.777 32.5773 67.4714 28.9926 67.1758C25.636 66.8989 22.4655 66.6375 19.4825 66.6375C15.9188 66.6375 13.1747 67.0156 10.8464 67.8272C10.1442 68.0719 9.46752 68.3512 8.81299 68.6216C7.48517 69.1698 6.23095 69.6875 5.28251 69.6877C4.83079 69.6877 4.33876 69.5934 3.80095 68.9092C2.95126 67.8277 3.42016 66.103 4.23282 63.5953C4.37673 63.1508 4.52563 62.6914 4.66173 62.2339C5.51017 59.3837 5.00142 56.3447 4.3572 52.4968C3.80829 49.2178 3.12501 45.137 3.12501 40.0001C3.12501 34.8631 3.80829 30.7823 4.35735 27.5034C5.00157 23.6555 5.51032 20.6165 4.66188 17.7661C4.52579 17.3088 4.37704 16.8496 4.23298 16.4052C3.42048 13.8972 2.95141 12.1725 3.8011 11.091C4.33876 10.4068 4.83095 10.3125 5.28282 10.3125C6.23111 10.3125 7.48533 10.8304 8.81299 11.3785C9.46736 11.6486 10.1442 11.9283 10.8466 12.173C13.1747 12.9846 15.9189 13.3627 19.4827 13.3627C22.4658 13.3627 25.6361 13.1011 28.9926 12.8244C32.5771 12.5288 36.2838 12.2232 40.0002 12.2232C43.7162 12.2232 47.4229 12.5288 51.0076 12.8244C54.3642 13.1011 57.5346 13.3627 60.5176 13.3627C64.0812 13.3627 66.8254 12.9846 69.1537 12.173C69.8559 11.9283 70.5326 11.6488 71.1873 11.3785C72.515 10.8304 73.7691 10.3125 74.7175 10.3125C75.1692 10.3125 75.6612 10.4069 76.1989 11.091C77.0489 12.1727 76.5798 13.8975 75.767 16.4055C75.6231 16.8497 75.4744 17.309 75.3383 17.7663C74.4898 20.6165 74.9986 23.6555 75.6428 27.5034C76.1919 30.7823 76.8752 34.8631 76.8752 40.0001C76.8752 45.137 76.1919 49.2178 75.6428 52.4968C74.9984 56.3445 74.4897 59.3837 75.3381 62.2339Z"
                    fill="black"></path>
                <path
                    d="M9.90345 16.2059C9.6572 15.3789 8.78674 14.9076 7.96002 15.154C7.13283 15.4001 6.66189 16.2703 6.9083 17.0973C7.70908 19.788 7.47142 22.5923 7.13314 24.9806C7.0122 25.8352 7.60673 26.6258 8.46111 26.7469C8.53549 26.7573 8.60924 26.7625 8.6822 26.7625C9.44799 26.7625 10.1169 26.1991 10.2274 25.4189C10.6128 22.6964 10.8758 19.4726 9.90345 16.2059Z"
                    fill="black"></path>
                <path
                    d="M40.0001 38.2142C34.5434 38.2142 30.1041 42.6688 30.1041 48.1441C30.1041 53.6193 34.5434 58.0738 40.0001 58.0738C45.4567 58.0738 49.8959 53.6193 49.8959 48.1441C49.8959 42.6688 45.4567 38.2142 40.0001 38.2142ZM40.0001 54.9488C36.2665 54.9488 33.2291 51.8963 33.2291 48.1441C33.2291 44.3919 36.2665 41.3392 40.0001 41.3392C43.7335 41.3392 46.7709 44.3919 46.7709 48.1441C46.7709 51.8963 43.7335 54.9488 40.0001 54.9488Z"
                    fill="black"></path>
                <path
                    d="M40.0001 21.9263C36.8276 21.9263 34.2468 24.6646 34.2468 28.0305C34.2468 31.3964 36.8276 34.1349 40.0001 34.1349C43.1724 34.1349 45.7532 31.3964 45.7532 28.0305C45.7532 24.6646 43.1723 21.9263 40.0001 21.9263ZM40.0001 31.0097C38.5509 31.0097 37.3718 29.6732 37.3718 28.0303C37.3718 26.3877 38.5509 25.0511 40.0001 25.0511C41.4491 25.0511 42.6282 26.3877 42.6282 28.0303C42.6282 29.6733 41.4491 31.0097 40.0001 31.0097Z"
                    fill="black"></path>
                <path
                    d="M52.3014 27.6033C49.1288 27.6033 46.5481 30.3417 46.5481 33.7077C46.5481 37.0736 49.1288 39.812 52.3014 39.812C55.4739 39.812 58.0546 37.0736 58.0546 33.7077C58.0546 30.3417 55.4737 27.6033 52.3014 27.6033ZM52.3014 36.6872C50.8521 36.6872 49.6731 35.3506 49.6731 33.7078C49.6731 32.0648 50.8521 30.7284 52.3014 30.7284C53.7506 30.7284 54.9296 32.065 54.9296 33.7078C54.9296 35.3506 53.7506 36.6872 52.3014 36.6872Z"
                    fill="black"></path>
                <path
                    d="M27.6988 27.6033C24.5265 27.6033 21.9455 30.3417 21.9455 33.7077C21.9455 37.0736 24.5265 39.812 27.6988 39.812C30.8712 39.812 33.4521 37.0736 33.4521 33.7077C33.4521 30.3417 30.8712 27.6033 27.6988 27.6033ZM27.6986 36.6872C26.2494 36.6872 25.0704 35.3506 25.0704 33.7078C25.0704 32.0648 26.2494 30.7284 27.6986 30.7284C29.1479 30.7284 30.3269 32.065 30.3269 33.7078C30.3271 35.3506 29.148 36.6872 27.6986 36.6872Z"
                    fill="black"></path>
                <path
                    d="M73.0915 62.9025C72.2908 60.2118 72.5287 57.4076 72.8672 55.0193C72.9881 54.1649 72.3937 53.3743 71.5392 53.2531C70.6864 53.1326 69.8942 53.7265 69.773 54.581C69.3873 57.3034 69.1242 60.527 70.0967 63.794C70.2986 64.4725 70.9203 64.9112 71.5936 64.9112C71.7411 64.9112 71.8912 64.89 72.0398 64.8457C72.867 64.5996 73.3379 63.7295 73.0915 62.9025Z"
                    fill="black"></path>
            </svg>
            <span class="text-xl font-bold">Nệm</span>
        </div>
        <div class="w-full text-center cursor-pointer hover:bg-red-400">
            <svg width="full" height="80" viewBox="0 0 80 80" fill="none" xmlns="http://www.w3.org/2000/svg">
                <g clip-path="url(#clip0)">
                    <path
                        d="M79.5383 24.5357L69.4735 14.5417C69.4714 14.5396 69.4694 14.5381 69.4674 14.5362C69.4649 14.5337 69.4628 14.531 69.4603 14.5285L64.456 9.58808C62.8718 7.99449 61.1105 7.18652 59.2208 7.18652C57.1966 7.18652 55.1779 8.13058 53.3829 9.91667C47.208 16.0606 42.1343 21.1046 36.7077 26.499L27.8259 35.3293C27.822 35.3332 27.8179 35.3372 27.8139 35.3413L1.9214 61.652C1.89328 61.6806 1.86624 61.7102 1.84046 61.7409C-0.047345 63.9805 -0.522969 66.8716 0.599685 69.2859C1.61125 71.4617 3.72077 72.8136 6.10436 72.8136C7.73842 72.8136 9.43732 72.1803 11.0173 70.982C11.0792 70.9353 11.1373 70.8839 11.1914 70.8286L31.4331 50.0921L38.3109 47.3405L47.6626 56.6263C47.9672 56.9289 48.3654 57.08 48.7635 57.08C49.1651 57.0799 49.5666 56.9261 49.8721 56.6186L54.8179 51.6399L59.7627 46.6618C59.763 46.6616 59.7633 46.6613 59.7635 46.6611L64.7091 41.6822C64.7096 41.6818 64.71 41.6811 64.7106 41.6807L69.6547 36.7037L74.5989 31.7263C74.5994 31.7257 74.6 31.7254 74.6005 31.7249L79.5459 26.746C79.838 26.452 80.0012 26.054 79.9998 25.6396C79.9983 25.2246 79.8323 24.8277 79.5383 24.5357ZM37.821 44.1704L29.9654 47.313C29.7631 47.3939 29.5799 47.5163 29.4278 47.6722L9.03998 68.5586C8.03686 69.2981 7.02389 69.6883 6.10436 69.6883C4.93264 69.6883 3.93405 69.0453 3.43312 67.9683C2.82656 66.6636 3.11109 65.1086 4.19343 63.7984L30.0352 37.5388L38.9109 28.7149C44.3374 23.3204 49.4116 18.276 55.5871 12.1317C56.7668 10.9579 58.0574 10.3115 59.2208 10.3115C60.033 10.3115 60.838 10.6242 61.6219 11.24L55.3885 17.4421C54.7769 18.0509 54.7743 19.0401 55.383 19.652C55.6883 19.9588 56.0894 20.1124 56.4907 20.1124C56.8893 20.1124 57.2879 19.9609 57.5929 19.6576L63.8753 13.4065L66.1492 15.6514L37.821 44.1704ZM48.7558 53.3078L40.9085 45.5157L43.6519 42.7538L51.4994 50.5461L48.7558 53.3078ZM53.7016 48.3289L45.8541 40.5366L48.5974 37.7749L56.4449 45.5672L53.7016 48.3289ZM58.6472 43.3502L50.7997 35.5579L53.5432 32.7962L61.3907 40.5885L58.6472 43.3502ZM63.5927 38.3713L55.7454 30.5791L58.4888 27.8174L66.3361 35.6097L63.5927 38.3713ZM68.5386 33.3927L60.6913 25.6004L63.4346 22.8387L71.282 30.6308L68.5386 33.3927ZM73.4842 28.4138L65.6367 20.6215L68.3802 17.8598L76.2275 25.6521L73.4842 28.4138Z"
                        fill="black"></path>
                    <path
                        d="M54.3186 20.7195C53.7119 20.1051 52.7227 20.099 52.109 20.7053L52.073 20.7408C51.4588 21.347 51.4526 22.3364 52.0588 22.9506C52.3646 23.2604 52.7677 23.4156 53.1708 23.4156C53.5674 23.4156 53.9641 23.2656 54.2685 22.965L54.3044 22.9293C54.9186 22.3231 54.9249 21.3337 54.3186 20.7195Z"
                        fill="black"></path>
                </g>
                <defs>
                    <clipPath id="clip0">
                        <rect width="80" height="80" fill="white"></rect>
                    </clipPath>
                </defs>
            </svg>
            <span class="text-xl font-bold">Chải lông</span>
        </div>
        <div class="w-full text-center cursor-pointer hover:bg-red-400">
            <svg width="full" height="80" viewBox="0 0 80 80" fill="none" xmlns="http://www.w3.org/2000/svg">
                <path
                    d="M53.2573 18.6549V14.3753H53.5557C55.6234 14.3753 57.3057 12.6929 57.3057 10.6253V3.74999C57.3057 1.68218 55.6234 0 53.5557 0H26.444C24.3761 0 22.6938 1.68234 22.6938 3.74999V10.6251C22.6938 12.6928 24.3761 14.3751 26.444 14.3751H26.7422V18.6548C23.3563 19.9424 13.4374 24.4687 13.4374 33.2938V69.4529C13.4374 75.2685 17.9184 80 23.4262 80H56.5737C62.0815 80 66.5624 75.2686 66.5624 69.4529V33.2941C66.5624 24.469 56.6431 19.9426 53.2573 18.6549ZM26.444 11.2501C26.105 11.2503 25.8188 10.964 25.8188 10.6253V3.74999C25.8188 3.41124 26.105 3.12499 26.444 3.12499H53.5557C53.8945 3.12499 54.1807 3.41124 54.1807 3.74999V10.6251C54.1807 10.9639 53.8945 11.2501 53.5557 11.2501H26.444ZM18.0313 28.5935H27.5243C28.3872 28.5935 29.0868 27.894 29.0868 27.031C29.0868 26.168 28.3872 25.4685 27.5243 25.4685H20.9366C24.4101 22.6535 28.6983 21.274 28.7699 21.2515C29.4227 21.0479 29.8672 20.4437 29.8672 19.7599V14.3753H50.1321V19.7598C50.1321 20.4435 50.5768 21.0479 51.2295 21.2513C51.3434 21.2869 61.8857 24.6574 63.2833 31.7314H16.7173C16.9438 30.5902 17.409 29.5444 18.0313 28.5935ZM56.5735 76.8749H23.426C20.1371 76.8749 17.3821 74.3599 16.7166 71.0154H63.2827C62.6176 74.3599 59.8624 76.8749 56.5735 76.8749ZM63.4374 61.7185H54.6948C53.832 61.7185 53.1323 62.418 53.1323 63.281C53.1323 64.144 53.832 64.8435 54.6948 64.8435H63.4374V67.8904H16.5624V34.8566H63.4373V61.7185H63.4374Z"
                    fill="black"></path>
                <path
                    d="M49.1386 44.8212H44.9892V40.672C44.9892 39.809 44.2895 39.1095 43.4267 39.1095H36.5727C35.7097 39.1095 35.0102 39.809 35.0102 40.672V44.8212H30.8608C29.9979 44.8212 29.2983 45.5207 29.2983 46.3837V53.2379C29.2983 54.1008 29.9979 54.8004 30.8608 54.8004H35.0102V58.9497C35.0102 59.8127 35.7097 60.5122 36.5727 60.5122H43.4267C44.2895 60.5122 44.9892 59.8127 44.9892 58.9497V54.8004H49.1386C50.0014 54.8004 50.7011 54.1008 50.7011 53.2379V46.3837C50.7011 45.5207 50.0015 44.8212 49.1386 44.8212ZM47.5761 51.6754H43.4267C42.5639 51.6754 41.8642 52.3749 41.8642 53.2379V57.3872H38.1352V53.2379C38.1352 52.3749 37.4356 51.6754 36.5727 51.6754H32.4233V47.9462H36.5727C37.4356 47.9462 38.1352 47.2467 38.1352 46.3837V42.2345H41.8642V46.3837C41.8642 47.2467 42.5639 47.9462 43.4267 47.9462H47.5761V51.6754Z"
                    fill="black"></path>
                <path
                    d="M32.2193 25.4686H32.1686C31.3057 25.4686 30.6061 26.1682 30.6061 27.0311C30.6061 27.8941 31.3057 28.5936 32.1686 28.5936H32.2193C33.0822 28.5936 33.7818 27.8941 33.7818 27.0311C33.7818 26.1682 33.0821 25.4686 32.2193 25.4686Z"
                    fill="black"></path>
                <path
                    d="M50.0504 61.7185H49.9998C49.1368 61.7185 48.4373 62.418 48.4373 63.281C48.4373 64.144 49.1368 64.8435 49.9998 64.8435H50.0504C50.9132 64.8435 51.6129 64.144 51.6129 63.281C51.6129 62.418 50.9132 61.7185 50.0504 61.7185Z"
                    fill="black"></path>
            </svg>
            <span class="text-xl font-bold">Thuốc</span>
        </div>
        <div class="w-full text-center cursor-pointer hover:bg-red-400">
            <svg width="full" height="80" viewBox="0 0 80 80" fill="none" xmlns="http://www.w3.org/2000/svg">
                <path
                    d="M70.625 57.1877H67.2925C68.7804 55.5279 69.6874 53.3369 69.6874 50.9377C69.6874 45.823 65.5696 41.6546 60.4754 41.5668C60.8026 37.2471 59.6504 34.1497 56.9746 32.1322C54.402 30.1923 50.812 29.5866 47.34 29.0008C40.787 27.895 36.7353 26.8467 35.7247 21.6249C35.6411 21.1931 35.3794 20.8166 35.0039 20.5877C34.6283 20.3586 34.1738 20.2985 33.7517 20.4221C27.1335 22.3592 22.7462 25.6597 20.7115 30.2315C18.7704 34.5937 19.4916 38.9979 20.242 41.5626H19.6876C14.5182 41.5626 10.3126 45.7682 10.3126 50.9376C10.3126 53.3368 11.2196 55.5277 12.7075 57.1875H9.37496C4.20561 57.1875 0 61.3931 0 66.5625C0 71.7318 4.20561 75.9375 9.37496 75.9375H70.625C75.7944 75.9375 80 71.7318 80 66.5625C80 61.3933 75.7944 57.1877 70.625 57.1877ZM23.5666 31.5022C25.059 28.1487 28.2633 25.5992 33.1022 23.91C33.9922 26.5198 35.6931 28.4426 38.2649 29.7594C40.8264 31.0708 43.8734 31.585 46.8201 32.0822C53.8987 33.2767 58.0149 34.3481 57.3434 41.5628H23.5263C22.8876 39.774 21.766 35.5482 23.5666 31.5022ZM19.6876 44.6877H60.3124C63.7587 44.6877 66.5624 47.4915 66.5624 50.9377C66.5624 54.3839 63.7587 57.1877 60.3124 57.1877H19.6876C16.2413 57.1877 13.4376 54.3838 13.4376 50.9377C13.4376 47.4915 16.2413 44.6877 19.6876 44.6877ZM70.625 72.8126H9.37496C5.92873 72.8126 3.12499 70.0089 3.12499 66.5626C3.12499 63.1164 5.92873 60.3127 9.37496 60.3127H70.625C74.0713 60.3127 76.875 63.1164 76.875 66.5626C76.875 70.0087 74.0713 72.8126 70.625 72.8126Z"
                    fill="black"></path>
                <path
                    d="M41.5791 10.5427C40.982 8.80616 40.6822 7.75788 41.4622 6.40648C41.8936 5.65914 41.6377 4.70367 40.8903 4.27211C40.1428 3.84071 39.1875 4.09649 38.7559 4.84399C37.2263 7.49366 38.0011 9.74772 38.6239 11.559C39.2113 13.2672 39.507 14.2971 38.7559 15.5978C38.3245 16.345 38.5805 17.3007 39.3278 17.7322C39.5739 17.8742 39.8425 17.9419 40.1077 17.9419C40.6475 17.9419 41.1728 17.6616 41.4622 17.1603C42.9616 14.5636 42.195 12.3341 41.5791 10.5427Z"
                    fill="black"></path>
                <path
                    d="M14.0241 18.3556C13.4271 16.619 13.1273 15.5707 13.9073 14.2193C14.3387 13.472 14.0827 12.5165 13.3354 12.085C12.5879 11.6536 11.6324 11.9094 11.201 12.6569C9.67135 15.3065 10.4463 17.5606 11.069 19.3718C11.6565 21.0801 11.9523 22.1099 11.201 23.4107C10.7696 24.1579 11.0256 25.1135 11.7729 25.5451C12.019 25.6871 12.2876 25.7548 12.5527 25.7548C13.0927 25.7548 13.6179 25.4745 13.9073 24.9732C15.4066 22.3765 14.6401 20.147 14.0241 18.3556Z"
                    fill="black"></path>
                <path
                    d="M68.936 18.3556C68.339 16.619 68.0392 15.5707 68.8193 14.2193C69.2507 13.472 68.9946 12.5165 68.2474 12.085C67.4999 11.6536 66.5446 11.9094 66.1131 12.6569C64.5834 15.3065 65.3582 17.5606 65.981 19.3718C66.5682 21.0801 66.864 22.1099 66.1129 23.4107C65.6815 24.1579 65.9374 25.1135 66.6848 25.5451C66.9309 25.6871 67.1995 25.7548 67.4646 25.7548C68.0046 25.7548 68.5298 25.4745 68.8193 24.9732C70.3187 22.3765 69.5521 20.147 68.936 18.3556Z"
                    fill="black"></path>
                <path
                    d="M29.9927 47.0316H19.6876C18.8247 47.0316 18.1251 47.7313 18.1251 48.5941C18.1251 49.4569 18.8247 50.1566 19.6876 50.1566H29.9927C30.8557 50.1566 31.5552 49.4569 31.5552 48.5941C31.5552 47.7311 30.8557 47.0316 29.9927 47.0316Z"
                    fill="black"></path>
                <path
                    d="M34.6875 47.0316H34.6369C33.7739 47.0316 33.0744 47.7313 33.0744 48.5941C33.0744 49.4569 33.7739 50.1566 34.6369 50.1566H34.6875C35.5505 50.1566 36.25 49.4569 36.25 48.5941C36.25 47.7311 35.5505 47.0316 34.6875 47.0316Z"
                    fill="black"></path>
            </svg>
            <span class="text-xl font-bold">Vệ sinh</span>
        </div>
    </div>
    <div id="carouseProduct" class="carousel slide relative p-5" data-bs-ride="carousel">
        <div class="carousel-inner relative w-full overflow-hidden grid grid-cols-3">
            <div class="carousel-item active relative float-left w-full">
                <img src="{{ asset('carousel/slide1.png') }}" class="block w-full" alt="pet1" />
            </div>
            <div class="carousel-item relative float-left w-full">
                <img src="{{ asset('carousel/slide2.png') }}" class="block w-full" alt="pet2" />
            </div>
            <div class="carousel-item relative float-left w-full">
                <img src="{{ asset('carousel/slide3.png') }}" class="block w-full" alt="pet3" />
            </div>
        </div>
        <button
            class="carousel-control-prev absolute top-0 bottom-0 flex items-center justify-center p-0 text-center border-0 hover:outline-none hover:no-underline focus:outline-none focus:no-underline left-0"
            type="button" data-bs-target="#carouseProduct" data-bs-slide="prev">
            <span class="carousel-control-prev-icon inline-block bg-no-repeat" aria-hidden="true"></span>
            <span class="visually-hidden">Previous</span>
        </button>
        <button
            class="carousel-control-next absolute top-0 bottom-0 flex items-center justify-center p-0 text-center border-0 hover:outline-none hover:no-underline focus:outline-none focus:no-underline right-0"
            type="button" data-bs-target="#carouseProduct" data-bs-slide="next">
            <span class="carousel-control-next-icon inline-block bg-no-repeat" aria-hidden="true"></span>
            <span class="visually-hidden">Next</span>
        </button>
    </div>
@endsection
