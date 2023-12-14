    <div class="min-h-screen p-8 text-white bg-gray-950">
        <div
            class="container flex flex-col max-w-5xl mx-auto mt-6 space-y-10 md:mt-20 md:space-x-8 md:flex-row md:space-y-0">
            <div class="relative">
                <div
                    class="relative flex items-center justify-center mb-12 space-x-2 text-2xl sm:space-x-5 sm:justify-start sm:text-4xl">
                    <img src="/assets/images/avatars/csaba.jpg" alt="csaba" class="w-10 rounded-full sm:w-16" />
                    <div class="font-extrabold">+</div>
                    <div class="">Building</div>
                    <div class="font-extrabold">=</div>
                    <x-ui.logo class="w-10 border border-gray-500 rounded-full sm:w-16 bottom-11 left-12"></x-ui.logo>
                    <div class="">CodeFans</div>
                </div>
                <h1
                    class="text-3xl sm:text-[56px] font-extrabold mb-12 leading-tight tracking-tight text-center sm:text-left">
                    Join
                    <span
                        class="text-transparent bg-clip-text bg-gradient-to-r from-purple-400 to-cyan-300 gradient-to">300+</span>
                    people who want to learn or improve their
                    <span
                        class="text-transparent bg-clip-text bg-gradient-to-r from-purple-400 to-cyan-300 gradient-to">front-end
                        skills</span>.
                </h1>

                {{-- <p class="mb-6 text-2xl italic text-center text-gray-400 sm:text-left">
                    "With more than 25 years of coding experience and more than 200 side
                    projects you can trust Csaba." -
                    <span class="font-semibold">Pratham</span>
                    <img src="/assets/images/avatars/pratham.jpg" alt="csaba"
                        class="inline-block border rounded-full w-7" />
                </p> --}}
                <p class="mb-8 text-xl font-light text-center sm:text-left">
                    P.S. 🚧 Work in progress! You can expect courses, quizzes, challenges, mentoring, community help and
                    more...
                </p>
                <form action="https://mailer.elerion.com/lists/654504b8a5bfb/embedded-form-subscribe-captcha"
                    method="POST"
                    class="flex border-purple-300 sm:border sm:w-[450px] flex-col sm:flex-row space-y-2 sm:space-y-0">
                    <input type="email" name="EMAIL" id="EMAIL" placeholder="Enter your email"
                        class="flex-1 p-3 text-center text-black outline-none sm:text-left focus:outline-none"
                        required />
                    <button
                        class="w-full min-h-full px-4 py-2 font-bold text-white bg-purple-600 hover:bg-purple-700 sm:w-56"
                        type="submit">
                        I Want Early Access!
                    </button>
                </form>
                <svg width="102" height="83" viewBox="0 0 102 83" fill="none"
                    class="absolute hidden -rotate-90 right-20 bottom-16 lg:block animate-pulse"
                    xmlns="http://www.w3.org/2000/svg">
                    <path
                        d="M69.2677 63.1357C64.9652 67.9256 59.9055 71.9862 54.2878 75.1574C53.2517 75.7033 52.2406 76.2988 51.2295 76.8695C50.1996 77.4402 49.1367 77.9497 48.0463 78.3955C44.2346 79.8193 40.2858 80.8503 36.2621 81.4722C32.3158 82.1238 28.3137 82.3814 24.3158 82.2414C20.7958 82.1714 17.2845 81.8689 13.8049 81.3358C11.5724 81.0232 9.37413 80.504 7.23878 79.785C5.12491 78.9923 3.11012 77.9599 1.23437 76.7082C0.0734369 75.9266 0.497865 75.5668 1.83356 75.3807C2.69027 75.2679 3.55339 75.2099 4.41758 75.207C5.53766 75.084 6.66796 75.084 7.78804 75.207C8.32481 75.207 8.84911 75.2815 9.36092 75.3559C9.87273 75.4303 10.3721 75.5668 10.8963 75.6288C11.9324 75.7405 12.9436 75.9018 13.9797 76.001C15.0158 76.1003 16.0394 76.1623 17.0755 76.2119C18.1116 76.2616 19.1477 76.2864 20.1838 76.2119C22.256 76.2119 24.3282 76.1251 26.4254 75.9762C28.5226 75.8274 30.6073 75.8149 32.667 75.6164C35.2179 75.3608 37.7309 74.8155 40.1569 73.9912C42.5663 73.1469 44.9181 72.1482 47.1974 71.0013C52.2347 68.4382 56.801 65.0493 60.7042 60.977C61.919 59.7163 63.0689 58.3954 64.1496 57.0193C64.6863 56.3246 65.2606 55.6546 65.7599 54.9351L67.2703 52.8012C70.203 48.3529 72.4066 43.4702 73.799 38.3354C74.7113 34.4002 75.085 30.3606 74.91 26.326C74.9849 25.4576 74.7977 24.6016 74.8227 23.7207C74.8476 22.8399 74.8976 22.232 74.9475 21.6737C75.0299 21.1652 75.1988 20.6743 75.4468 20.2221C75.8483 19.4739 76.4598 18.8576 77.207 18.448C77.5374 18.2243 77.8791 18.0172 78.2306 17.8277C78.7923 17.5796 79.3416 17.8277 79.9533 18.3736C80.775 19.2221 81.431 20.2149 81.8881 21.3015C82.1628 22.3064 82.35 23.3237 82.5747 24.3658L82.8743 25.9414L83.0366 27.5295C83.1615 28.5958 83.2116 29.6695 83.1864 30.7427C83.1864 31.8096 83.074 32.889 82.9867 33.9808C82.8993 35.0725 82.6995 36.1271 82.5498 37.2188C82.3751 38.2884 82.146 39.3484 81.8632 40.3948C81.6135 41.4618 81.2515 42.5039 80.9394 43.5585C80.6273 44.613 80.1405 45.6055 79.6911 46.6352C77.173 52.6754 73.7098 58.282 69.4299 63.2473L69.2677 63.1357Z"
                        fill="#7ad2fa" />
                    <path
                        d="M81.8631 9.0316C81.0578 8.28055 80.1002 7.70948 79.0544 7.35674C78.224 7.11197 77.3309 7.19186 76.5578 7.58005C75.7892 8.07521 75.0992 8.68152 74.5105 9.37897C73.0748 10.752 71.8395 12.318 70.8405 14.0314C69.6671 15.8799 68.5685 17.8277 67.5449 19.8003C66.6747 21.5706 65.9403 23.4037 65.3479 25.2839L64.2119 28.8321C63.8545 29.937 63.4378 31.022 62.9636 32.0826C62.7264 32.4672 61.6029 32.8021 60.467 31.9337C59.1921 30.9186 58.4974 29.3479 58.607 27.728C58.8152 26.3613 59.0986 25.007 59.4558 23.6711C59.8553 22.3726 60.3047 21.0947 60.804 19.8375C61.7952 17.3051 63.0239 14.871 64.4741 12.5674C65.3479 11.1779 66.1218 9.68913 66.9707 8.13834C67.417 7.2833 67.913 6.4548 68.4562 5.65707C68.7403 5.25813 69.0488 4.87695 69.3799 4.51569C69.7017 4.13382 70.0568 3.78094 70.441 3.46115C72.2115 1.82257 74.4316 0.743127 76.8199 0.359563C79.21 0.0716281 81.63 0.554378 83.7231 1.73667C85.8946 2.96998 87.8404 4.55978 89.4779 6.43867C91.742 9.07377 93.7994 11.8776 95.6321 14.8254C97.0801 17.0213 98.7778 19.0311 100.213 21.2642C100.544 21.7475 100.832 22.258 101.075 22.7902C101.924 24.8001 101.674 25.6933 100.188 26.723C99.8652 26.9702 99.5276 27.198 99.1773 27.4054C97.931 27.9869 96.4458 27.6372 95.5946 26.5618C94.7904 25.7857 94.0397 24.9568 93.3476 24.0805C92.686 23.1996 92.0993 22.294 91.4252 21.3883C90.1769 19.577 88.991 17.6664 87.7427 15.9543C86.1025 13.4481 84.1099 11.1879 81.8257 9.2425L81.8631 9.0316Z"
                        fill="#9cabfb" />
                </svg>
                <div class="flex flex-col mt-6">
                    <div class="flex justify-center w-full p-2 -space-x-1 overflow-hidden isolate sm:justify-start">
                        <img class="relative z-0 inline-block rounded-full h-9 w-9 ring-2 ring-white"
                            src="/assets/images/avatars/a1.jpg" alt="" />
                        <img class="relative z-10 inline-block rounded-full h-9 w-9 ring-2 ring-white"
                            src="/assets/images/avatars/a2.jpg" alt="" />
                        <img class="relative z-20 inline-block rounded-full h-9 w-9 ring-2 ring-white"
                            src="/assets/images/avatars/a3.jpg" alt="" />
                        <img class="relative z-30 inline-block rounded-full h-9 w-9 ring-2 ring-white"
                            src="/assets/images/avatars/a4.jpg" alt="" />
                        <img class="relative z-40 inline-block rounded-full h-9 w-9 ring-2 ring-white"
                            src="/assets/images/avatars/a5.jpg" alt="" />
                        <img class="relative z-50 inline-block rounded-full h-9 w-9 ring-2 ring-white"
                            src="/assets/images/avatars/a6.jpg" alt="" />
                        <img class="relative inline-block rounded-full h-9 w-9 ring-2 ring-white"
                            src="/assets/images/avatars/a7.jpg" alt="" style="z-index: 60" />
                    </div>
                    <p class="mt-1 text-sm text-center text-gray-200 sm:text-left">
                        Join hundreds of others who want to learn or improve their front-end skills.
                    </p>
                </div>
            </div>
            <div class="flex flex-col space-y-4">
                <figure class="p-6 bg-gray-800 border-gray-700 shadow-lg rounded-2xl ring-1 ring-gray-900/5 sm:mt-0">
                    <blockquote class="text-gray-50">
                        <p>“With more than 25 years of coding experience and more than 200 side
                            projects you can trust Csaba.”</p>
                    </blockquote>
                    <figcaption class="flex items-center mt-6 gap-x-4">
                        <img class="w-10 h-10 rounded-full bg-gray-50 ring-white ring-1"
                            src="/assets/images/avatars/pratham.jpg" alt="">
                        <div>
                            <div class="font-semibold text-gray-100">Pratham Kumar</div>
                            <div class="text-gray-300">@prathkum</div>
                        </div>
                    </figcaption>
                </figure>
                <figure class="p-6 bg-gray-800 border-gray-700 shadow-lg rounded-2xl ring-1 ring-gray-900/5">
                    <blockquote class="text-gray-50">
                        <p>“With this site, you'll feel much more confident in your developer role.”</p>
                    </blockquote>
                    <figcaption class="flex items-center mt-6 gap-x-4">
                        <img class="w-10 h-10 rounded-full bg-gray-50 ring-white ring-1"
                            src="/assets/images/avatars/marko.jpg" alt="">
                        <div>
                            <div class="font-semibold text-gray-100">Marko Denic </div>
                            <div class="text-gray-300">@denicmarko</div>
                        </div>
                    </figcaption>
                </figure>
                <figure class="p-6 bg-gray-800 border-gray-700 shadow-lg rounded-2xl ring-1 ring-gray-900/5">
                    <blockquote class="text-gray-50">
                        <p>“A must try for everyone. It seamlessly combines invaluable resources, making it a perfect
                            asset for the frontend development community.”</p>
                    </blockquote>
                    <figcaption class="flex items-center mt-6 gap-x-4">
                        <img class="w-10 h-10 rounded-full bg-gray-50 ring-white ring-1"
                            src="/assets/images/avatars/shefali.jpg" alt="">
                        <div>
                            <div class="font-semibold text-gray-100">Shefali</div>
                            <div class="text-gray-300">@Shefali__J</div>
                        </div>
                    </figcaption>
                </figure>
            </div>
        </div>

    </div>
