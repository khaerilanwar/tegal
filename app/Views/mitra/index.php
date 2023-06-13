<?php if ($user['role_id'] == '2') : ?>

    <section class="bg-white h-screen dark:bg-gray-900">
        <div class="py-8 px-4 mx-auto max-w-screen-xl text-center lg:py-16 lg:px-12">
            <div class="flex mb-12 justify-center gap-5">
                <img src="/assets/img/gateng.png" class="dark:hidden h-20" alt="">
                <img src="/assets/img/jateng dark.png" class="hidden dark:block h-20" alt="">
                <h3 class="md:text-6xl tracking-[.15em] dark:text-white my-auto font-pacifico">Tecation</h3>
            </div>
            <h1 class="mb-4 text-4xl font-extrabold tracking-tight leading-none text-gray-900 md:text-5xl lg:text-6xl dark:text-white">Jadilah Bagian dari Mitra Tecation!</h1>
            <p class="mb-8 text-lg font-normal text-gray-500 lg:text-xl sm:px-16 xl:px-48 dark:text-gray-400">Anda belum terdaftar menjadi mitra kami. <button data-modal-target="mitraModal" data-modal-toggle="mitraModal" type="button" class="text-blue-500">Gabung</button> jadi mitra Tecation.</p>
        </div>
    </section>

    <!-- Main modal -->
    <div id="mitraModal" tabindex="-1" aria-hidden="true" class="fixed top-0 left-0 right-0 z-50 hidden w-full p-4 overflow-x-hidden overflow-y-auto md:inset-0 h-[calc(100%-1rem)] max-h-full">
        <div class="relative w-full max-w-2xl max-h-full">
            <!-- Modal content -->
            <div class="relative bg-white rounded-lg shadow dark:bg-gray-700">
                <!-- Modal header -->
                <div class="flex items-start justify-between p-4 border-b rounded-t dark:border-gray-600">
                    <h3 class="text-xl font-semibold text-gray-900 dark:text-white">
                        Terms of Service
                    </h3>
                    <button type="button" class="text-gray-400 bg-transparent hover:bg-gray-200 hover:text-gray-900 rounded-lg text-sm p-1.5 ml-auto inline-flex items-center dark:hover:bg-gray-600 dark:hover:text-white" data-modal-hide="mitraModal">
                        <svg aria-hidden="true" class="w-5 h-5" fill="currentColor" viewBox="0 0 20 20" xmlns="http://www.w3.org/2000/svg">
                            <path fill-rule="evenodd" d="M4.293 4.293a1 1 0 011.414 0L10 8.586l4.293-4.293a1 1 0 111.414 1.414L11.414 10l4.293 4.293a1 1 0 01-1.414 1.414L10 11.414l-4.293 4.293a1 1 0 01-1.414-1.414L8.586 10 4.293 5.707a1 1 0 010-1.414z" clip-rule="evenodd"></path>
                        </svg>
                        <span class="sr-only">Close modal</span>
                    </button>
                </div>
                <!-- Modal body -->
                <form action="/mitra/register" method="post">

                    <div class="p-6 space-y-6">
                        <p class="text-base leading-relaxed text-gray-500 dark:text-gray-400">
                            With less than a month to go before the European Union enacts new consumer privacy laws for its citizens, companies around the world are updating their terms of service agreements to comply.
                        </p>
                        <p class="text-base leading-relaxed text-gray-500 dark:text-gray-400">
                            The European Union’s General Data Protection Regulation (G.D.P.R.) goes into effect on May 25 and is meant to ensure a common set of data rights in the European Union. It requires organizations to notify users as soon as possible of high-risk data breaches that could personally affect them.
                        </p>
                    </div>


                    <div class="flex items-center px-6 pt-6 space-x-2 border-t border-gray-200 rounded-b dark:border-gray-600">
                        <input id="mitra-checkbox" type="checkbox" value="" class="w-4 h-4 text-blue-600 bg-gray-100 border-gray-300 rounded focus:ring-blue-500 dark:focus:ring-blue-600 dark:ring-offset-gray-800 focus:ring-2 dark:bg-gray-700 dark:border-gray-600">
                        <label for="mitra-checkbox" class="ml-2 text-sm font-medium text-gray-900 dark:text-gray-300">I agree with the terms and conditions.</label>
                    </div>


                    <!-- Modal footer -->
                    <div class="flex items-center p-6 space-x-2">
                        <button id="mitra-accept-btn" data-modal-hide="mitraModal" type="submit" class="pointer-events-none opacity-50 cursor-not-allowed text-white bg-blue-700 hover:bg-blue-800 focus:ring-4 focus:outline-none focus:ring-blue-300 font-medium rounded-lg text-sm px-5 py-2.5 text-center dark:bg-blue-600 dark:hover:bg-blue-700 dark:focus:ring-blue-800">I accept</button>
                        <button data-modal-hide="mitraModal" type="button" class="text-gray-500 bg-white hover:bg-gray-100 focus:ring-4 focus:outline-none focus:ring-blue-300 rounded-lg border border-gray-200 text-sm font-medium px-5 py-2.5 hover:text-gray-900 focus:z-10 dark:bg-gray-700 dark:text-gray-300 dark:border-gray-500 dark:hover:text-white dark:hover:bg-gray-600 dark:focus:ring-gray-600">Decline</button>
                    </div>
                </form>
            </div>
        </div>
    </div>

<?php else : ?>

    <section class="bg-white dark:bg-gray-900">
        <div class="py-8 px-4 mx-auto max-w-screen-xl text-center lg:py-14 lg:px-12">
            <div class="flex mb-5 justify-center gap-5">
                <img src="/assets/img/gateng.png" class="dark:hidden h-20" alt="">
                <img src="/assets/img/jateng dark.png" class="hidden dark:block h-20" alt="">
                <h3 class="md:text-6xl tracking-[.15em] dark:text-white my-auto font-pacifico">Tecation</h3>
            </div>
            <h1 class="mb-4 text-4xl font-extrabold tracking-tight leading-none text-gray-900 md:text-5xl lg:text-6xl dark:text-white">Selamat Datang Mitra Tecation!</h1>
        </div>
    </section>

    <div class="container mx-auto">
        <h4 class="font-heebo text-center dark:text-white text-xl mb-2">TecationPay</h4>
        <div class="flex justify-center items-center align-bottom">
            <h2 class="mt-7 font-heebo text-center dark:text-white text-4xl font-black mr-4 mb-6">Rp. <?= number_format($user['saldo'], 0, '', '.') ?></h2>
            <button data-modal-target="topUpSaldo" data-modal-toggle="topUpSaldo" type="button">
                <i class="m-0 text-4xl fa-regular dark:text-white fa-square-plus"></i>
            </button>
        </div>
    </div>



<?php endif; ?>