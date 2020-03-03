<template>
    <div class="flex flex-col-reverse lg:flex-row justify-between text-14px">
        <div class="w-full max-w-600px">
            <div class="flex flex-col lg:flex-row lg:items-center mb-8 lg:mb-50px">
                Esate
                <div class="flex lg:items-center mt-4 lg:mt-0">
                    <label class="inline-flex items-center lg:ml-36px">
                        <input type="radio" class="form-radio text-blue-3" v-model="formData.user_type" value="private">
                        <span class="ml-4 font-light tracking-0.5px">Privatus asmuo</span>
                    </label>
                    <label class="inline-flex items-center ml-8">
                        <input type="radio" class="form-radio text-blue-3" v-model="formData.user_type" value="company">
                        <span class="ml-4 font-light tracking-0.5px">Įmonė</span>
                    </label>
                </div>
            </div>
            <div class="flex flex-wrap -my-8px lg:-mx-50px">
                <div class="w-full lg:w-1/2 py-8px lg:px-50px">
                    <label class="block relative">
                        <span class="block mb-3">Jūsų vardas</span>
                        <input type="text" v-model="formData.user_name" class="form-input text-14px px-16px py-13px block w-full">
                    </label>
                </div>
                <div class="w-full lg:w-1/2 py-8px lg:px-50px">
                    <label class="block relative">
                        <span class="block mb-3">Įmonės pavadinimas</span>
                        <input type="text" v-model="formData.compnay_name" class="form-input text-14px px-16px py-13px block w-full">
                    </label>
                </div>
                <div class="w-full lg:w-1/2 py-8px lg:px-50px">
                    <label class="block relative">
                        <span class="block mb-3">Telefonas</span>
                        <input type="text" v-model="formData.phone" class="form-input text-14px px-16px py-13px block w-full">
                    </label>
                </div>
                <div class="w-full lg:w-1/2 py-8px lg:px-50px">
                    <label class="block relative">
                        <span class="block mb-3">Įmonės kodas</span>
                        <input type="number" v-model="formData.company_code" class="form-input text-14px px-16px py-13px block w-full">
                    </label>
                </div>
                <div class="w-full lg:w-1/2 py-8px lg:px-50px">
                    <label class="block relative">
                        <span class="block mb-3">El. paštas</span>
                        <input type="email" v-model="formData.email" class="form-input text-14px px-16px py-13px block w-full">
                    </label>
                </div>
                <div class="w-full lg:w-1/2 py-8px lg:px-50px">
                    <label class="block relative">
                        <span class="block mb-3">PVM mokėtojo kodas</span>
                        <input type="text" v-model="formData.company_vat" class="form-input text-14px px-16px py-13px block w-full">
                    </label>
                </div>
                <div class="w-full lg:w-1/2 py-8px lg:px-50px">
                    <label class="block relative">
                        <span class="block mb-3">Miestas</span>
                        <select name="ad_type" v-model="formData.city" class="form-select block w-full text-12px py-14px border-blue-4">
                            <option>Pasirinkite</option>
                            <option>Vilnius</option>
                            <option>Kaunas</option>
                        </select>
                    </label>
                </div>
                <div class="w-full lg:w-1/2 py-8px lg:px-50px">
                    <label class="block relative">
                        <span class="block mb-3">Įmonės adresas</span>
                        <input type="text" v-model="formData.company_address" class="form-input text-14px px-16px py-13px block w-full">
                    </label>
                </div>
                <div class="w-full lg:w-1/2 py-8px lg:px-50px">
                    <label class="block relative">
                        <span class="block mb-3">Interneto svetainė</span>
                        <input type="text" v-model="formData.web_site" class="form-input text-14px px-16px py-13px block w-full">
                    </label>
                </div>
                <div class="w-full lg:w-1/2 py-8px lg:px-50px">
                    <label class="block relative">
                        <span class="block mb-3">El. paštas sąskaitoms</span>
                        <input type="email" v-model="formData.billing_email" class="form-input text-14px px-16px py-13px block w-full">
                    </label>
                </div>
                <div class="w-full lg:w-1/2 py-8px lg:px-50px">
                    <button class="border border-blue-3 px-27px py-15px rounded-4px uppercase w-full text-blue-3 text-12px font-medium block mt-25px mb-4">
                        KEISTI SLAPTAŽODĮ
                    </button>
                    <button class="w-full flex items-center justify-center bg-blue-3 text-white text-12px uppercase font-medium tracking-0.5px bg-blue-2 rounded-4px py-4 px-24px">
                        IŠSAUGOTI
                    </button>
                </div>
            </div>
        </div>
        <div class="flex-1 lg:max-w-250px mb-40px lg:mb-0 lg:pt-105px">
            <div class="border-b border-blue-5 mb-8 pb-8">
                <div class="w-120px h-120px rounded-20px overflow-hidden mx-auto mb-8">
                    <img src="/images/img_avatar.png" alt="">
                </div>
                <button class="border border-blue-3 px-27px py-15px rounded-4px uppercase w-full text-blue-3 text-12px font-medium block">
                    ĮKELTI NUOTRAUKĄ
                </button>
            </div>
            <div class="text-center mb-22px">Susiekite paskyrą su soc. tinklu</div>
            <a href="javascript:" class="relative bg-blue-3 text-white rounded-4px text-12px tracking-0.5px text-center p-15px lg:p-17px w-full block font-medium uppercase mb-12px">
                <span class="absolute left-0 top-0 ml-18px mt-15px"><svg xmlns="http://www.w3.org/2000/svg" width="9" height="17" viewBox="0 0 9 17"><g><g><g><path fill="#fff" d="M8.661.003L6.502 0C4.077 0 2.51 1.615 2.51 4.113V6.01H.34a.34.34 0 0 0-.34.34V9.1c0 .188.152.34.34.34h2.17v6.934c0 .189.152.341.34.341H5.68a.34.34 0 0 0 .34-.34V9.44h2.537a.34.34 0 0 0 .34-.341V6.35a.342.342 0 0 0-.339-.341H6.021V4.402c0-.773.183-1.165 1.186-1.165H8.66A.34.34 0 0 0 9 2.896V.344a.34.34 0 0 0-.339-.34z"/></g></g></g></svg></span>
                Susieti su facebook
            </a>
            <a href="javascript:" class="relative bg-red-1 text-white rounded-4px text-12px tracking-0.5px text-center p-15px lg:p-17px w-full block font-medium uppercase">
                <span class="absolute left-0 top-0 ml-18px mt-15px"><svg xmlns="http://www.w3.org/2000/svg" width="18" height="18" viewBox="0 0 18 18"><g><g><g><path fill="#fff" d="M9.87 10.857h4.395a5.592 5.592 0 0 1-5.307 3.727C5.99 14.562 3.536 12.187 3.42 9.22A5.59 5.59 0 0 1 9 3.416c1.441 0 2.757.55 3.748 1.45a.606.606 0 0 0 .824-.004l1.614-1.519a.604.604 0 0 0 .002-.877A8.967 8.967 0 0 0 9.179.002C4.217-.095.035 3.973 0 8.936a9 9 0 0 0 17.985.57c.007-.06.012-2.065.012-2.065H9.87a.603.603 0 0 0-.603.603v2.21c0 .333.27.603.603.603z"/></g></g></g></svg></span>
                Susieti su Google
            </a>
        </div>
    </div>
</template>

<script>
    export default {
        name: 'mano-duomenys',

        data: () => ({
            formData: {
                user_type: 'company',
                user_name: null,
                compnay_name: null,
                phone: null,
                company_code: null,
                email: null,
                company_vat: null,
                city: null,
                company_address: null,
                web_site: null,
                billing_email: null,
            },
        }),
    }
</script>
