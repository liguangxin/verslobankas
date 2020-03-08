<template>
    <div>
        <div class="text-18px font-light tracking-0.34px my-8 lg:my-56px text-center">Kad parduotumėte greičiau, užsisakykite papildomų paslaugų!</div>

        <div class="flex flex-col md:flex-row md:items-center p-24px shadow-custom-1 rounded-10px border border-green-1 bg-green-2 mb-24px">
            <div class="mb-4 md:mb-0 md:w-250px">
                <div class="flex items-center text-14px">
                    Skelbimo iškėlimas <img svg-inline class="icon ml-2" src="../../../public/images/info.svg" alt="info" />
                </div>
                <div class="text-12px font-light">1 žvaigždutė 1 dienai kainuoja 0,75 €</div>
            </div>
            <div class="md:mr-24px mb-4 md:mb-0">
                <div class="flex -mx-2 md:mx-0 items-center">
                    <div class="relative flex-1 md:flex-auto px-2 md:px-0">
                        <img svg-inline class="icon absolute left-0 top-0 mt-2 ml-3 md:ml-1" src="../../../public/images/star.svg" alt="lygis" />
                        <select class="w-full lg:w-auto form-select block text-12px py-8px border-blue-4 md:mr-4 pl-35px">
                            <option value="">1</option>
                        </select>
                    </div>
                    <div class="flex-1 md:flex-auto px-2 md:px-0">
                        <select class="form-select block text-12px py-8px w-full md:w-100px border-blue-4">
                            <option value="">1 diena</option>
                        </select>
                    </div>
                </div>
            </div>
            <div>
                <div class="flex items-center text-12px font-light">
                    Skelbimo pozicija sarase: <span class="font-medium ml-1">2</span>
                    <img svg-inline class="icon ml-2" src="../../../public/images/info.svg" alt="info" />
                </div>
            </div>
            <div class="flex-1 text-20px font-medium text-green-1 tracking-0.38px text-right">0,75 €</div>
        </div>

        <div class="flex flex-col md:flex-row md:items-center p-24px shadow-custom-1 rounded-10px border border-green-1 bg-green-2">
            <div class="mb-4 md:mb-0 md:w-250px">
                <div class="flex items-center text-14px">
                    Skelbimo paryškinimas <img svg-inline class="icon ml-2" src="../../../public/images/info.svg" alt="info" />
                </div>
                <div class="text-12px font-light">1 dienos paryškinimas kainuoja 0,145 €</div>
            </div>
            <div class="lg:mr-24px">
                <div class="flex items-center">
                    <div class="w-full lg:w-auto relative">
                        <img svg-inline class="icon absolute left-0 top-0 mt-2 ml-1" src="../../../public/images/iskelimas_2.svg" alt="lygis" />
                        <select class="w-full md:w-auto form-select block text-12px py-8px border-blue-4 mb-4 lg:mb-0 lg:mr-4 pl-35px">
                            <option value="">1 diena</option>
                            <option value="">2 dienos</option>
                        </select>
                    </div>
                </div>
            </div>
            <div class="flex-1 text-20px font-medium text-green-1 tracking-0.38px text-right">0,29 €</div>
        </div>

        <div class="mt-8 mb-70px">
            <label class="flex items-center text-14px font-light mb-1 mt-3 sm:mt-0">
                <input type="checkbox" class="form-checkbox mr-3 h-6 w-6">
                <span class="block">Automatiškai pratęsti skelbimo galiojimą</span>
            </label>
        </div>

        <div class="full-width bg-blue-2 py-24px">
            <div class="container max-w-775px flex items-center justify-between">
                <div>
                    <button class="hidden py-15px px-16 lg:flex items-center justify-center bg-blue-1 text-white text-12px font-medium uppercase tracking-0.5px rounded-4px">
                        ATGAL
                    </button>
                </div>
                <div class="flex items-center w-full lg:w-auto justify-between lg:justify-start">
                    <div class="text-20px font-medium tracking-0.38px text-green-1 mr-24px">1,04 €</div>
                    <button class="py-15px px-50px lg:px-80px lg:flex items-center justify-center bg-green-1 text-white text-12px font-medium uppercase tracking-0.5px rounded-4px">
                        UŽSAKYTI
                    </button>
                </div>
            </div>
        </div>
    </div>
</template>

<script>
    export default {
        name: 'additional-services',
    }
</script>
