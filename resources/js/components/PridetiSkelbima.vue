<template>
    <div class="container max-w-512px py-8 lg:py-50px text-14px">
        <div>
            <label class="block">
                <span class="block mb-3">Verslo skelbimo antraštė</span>
                <input class="form-input block w-full" v-model="title">
            </label>
        </div>
        <div class="flex flex-col my-24px lg:my-8">
            <div class="mb-3">Veiksmai</div>
            <div class="flex lg:items-center">
                <label class="inline-flex items-center">
                    <input type="radio" v-model="ad_type" value="sell" class="form-radio text-blue-3">
                    <span class="ml-4 font-light tracking-0.5px">Siūlau</span>
                </label>
                <label class="inline-flex items-center ml-8">
                    <input type="radio" v-model="ad_type" value="buy" class="form-radio text-blue-3">
                    <span class="ml-4 font-light tracking-0.5px">Ieškau</span>
                </label>
            </div>
        </div>
        <div class="my-24px">
            <label class="block lg:max-w-250px relative">
                <span class="block mb-3">Kategorija</span>
                <select name="ad_type" v-model="category" class="form-select block w-full text-12px py-14px border-blue-4">
                    <option value="">Pasirinkite</option>
                    <option v-for="category in categories" :value="category.id" :key="`${category.id}`">{{ category.name }}</option>
                </select>
            </label>
        </div>
        <div class="my-24px">
            <label class="block relative">
                <span class="block mb-3">Aprašymas</span>
                <textarea class="form-textarea block w-full has_popover" rows="7"/>
                <span class="popover opacity-0 absolute top-0 right-0 max-w-250px border border-yellow-1 text-10px">
                    Išsamiai aprašykite savo pasiūlymą. Kuo mažiau
                    klausimų kils skaitant jūsų skelbimą, tuo greičiau
                    rasite klientą. Nenaudokite didžiųjų raidžių ir
                    beprasmių simbolių sekų.
                </span>
            </label>
        </div>
        <div class="my-24px">
            <label class="block lg:max-w-250px relative">
                <span class="block mb-3">Siūlomo verslo modelis</span>
                <select name="ad_type" v-model="business_model" class="form-select block w-full text-12px py-14px border-blue-4">
                    <option value="">Pasirinkite</option>
                </select>
            </label>
        </div>
        <div class="my-24px">
            <label class="block lg:max-w-250px">
                <span class="block mb-3">Verslo kaina</span>
                <span class="relative flex items-center">
                    <input class="form-input block w-full" v-model="price">
                    <span class="ml-4">
                        <svg xmlns="http://www.w3.org/2000/svg" width="14" height="16" viewBox="0 0 14 16"><g><g><path fill="#0063aa" d="M11.884 11.9c-.15-.134-.383-.134-.517.016-.783.783-1.783 1.2-2.783 1.2-1.467 0-2.866-.9-3.667-2.384h3.8a.377.377 0 0 0 .384-.383v-1.3a.377.377 0 0 0-.383-.384H4.25c-.033-.25-.033-.5-.033-.733a6.1 6.1 0 0 1 .05-.75h4.45A.377.377 0 0 0 9.1 6.8v-1.3a.377.377 0 0 0-.383-.384h-3.8c.8-1.466 2.183-2.383 3.666-2.383 1.017 0 2 .434 2.783 1.217.15.15.384.15.517.017l1.45-1.333c.083-.067.117-.167.133-.283 0-.1-.033-.2-.1-.284C12.051.733 10.367 0 8.6 0 5.684 0 3.034 2.05 1.984 5.1h-1.6A.377.377 0 0 0 0 5.484v1.3c0 .217.167.383.383.383H1.55c-.017.267-.033.517-.033.75 0 .233.017.483.033.733H.383A.377.377 0 0 0 0 9.034v1.3c0 .217.167.384.383.384h1.6c1.05 3.05 3.7 5.1 6.617 5.1 1.767 0 3.467-.733 4.767-2.066a.403.403 0 0 0 .117-.284c0-.1-.05-.2-.134-.283z"/></g></g></svg>
                    </span>
                </span>
            </label>
        </div>
        <div class="my-24px border-b border-blue-9"></div>
        <div class="flex flex-wrap -mx-6px">
            <div class="w-full lg:w-250px px-6px my-12px">
                <label class="block relative">
                    <span class="block mb-3">Mėnesio apyvarta</span>
                    <select name="ad_type" v-model="turnover" class="form-select block w-full text-12px py-14px border-blue-4">
                        <option value="">Pasirinkite</option>
                    </select>
                </label>
            </div>
            <div class="w-full lg:w-250px px-6px my-12px">
                <label class="block relative">
                    <span class="block mb-3">Mėnesio pelnas</span>
                    <select name="ad_type" v-model="profit" class="form-select block w-full text-12px py-14px border-blue-4">
                        <option value="">Pasirinkite</option>
                    </select>
                </label>
            </div>
            <div class="w-full lg:w-250px px-6px my-12px">
                <label class="block relative">
                    <span class="block mb-3">Darbuotojų skaičius</span>
                    <select name="ad_type" v-model="employees_count" class="form-select block w-full text-12px py-14px border-blue-4">
                        <option value="">Pasirinkite</option>
                    </select>
                </label>
            </div>
        </div>
        <div class="flex flex-wrap -mx-6px">
            <div class="w-full lg:w-250px px-6px my-12px">
                <label class="block relative">
                    <span class="block mb-3">Mėnesio svetainės lankytojų vidurkis</span>
                    <select name="ad_type" v-model="web_traffic" class="form-select block w-full text-12px py-14px border-blue-4">
                        <option value="">Pasirinkite</option>
                    </select>
                </label>
            </div>
        </div>
        <div class="my-16px lg:my-24px border-b border-blue-9"></div>
        <div class="flex flex-wrap -mx-6px">
            <div class="w-full lg:w-250px px-6px my-12px">
                <label class="block relative">
                    <span class="block mb-3">Jūs esate</span>
                    <select name="ad_type" v-model="seller_type" class="form-select block w-full text-12px py-14px border-blue-4">
                        <option value="">Pasirinkite</option>
                    </select>
                </label>
            </div>
        </div>
        <div class="text-18px font-medium my-24px">Matoma svetainės lankytojams</div>
        <div>
            <label class="block lg:max-w-250px">
                <span class="block mb-3">Vardas</span>
                <input class="form-input block w-full" v-model="seller_name">
            </label>
        </div>
        <div class="my-24px flex flex-col lg:flex-row lg:items-end">
            <label class="block w-full lg:max-w-250px">
                <span class="block mb-3">El. paštas</span>
                <input class="form-input block w-full" v-model="seller_email">
            </label>
            <label class="flex items-center lg:px-4 text-12px font-light mb-1 mt-3 lg:mt-0">
                <input type="checkbox" v-model="seller_email_off" class="form-checkbox mr-3 h-6 w-6">
                <span class="block max-w-180px">Išjungti tiesioginį rašymą į el.paštą</span>
            </label>
        </div>
        <div class="my-24px flex flex-col lg:flex-row lg:items-end">
            <label class="block w-full lg:max-w-250px">
                <span class="block mb-3">Telefono numeris</span>
                <input type="text" class="form-input block w-full" v-model="seller_phone">
            </label>
            <label class="flex items-center lg:px-4 text-12px font-light mb-1 mt-3 lg:mt-0">
                <input type="checkbox" v-model="seller_phone_off" class="form-checkbox mr-3 h-6 w-6">
                <span class="block max-w-180px">Nerodyti telefono numerio skelbime</span>
            </label>
        </div>
        <div class="my-24px w-full lg:max-w-250px">
            <label class="block relative">
                <span class="block mb-3">Miestas</span>
                <select name="ad_type" v-model="seller_city" class="form-select block w-full text-12px py-14px border-blue-4">
                    <option value="">Pasirinkite</option>
                </select>
            </label>
        </div>
        <div class="text-18px font-medium mt-24px mb-3 lg:mb-24px  leading-tight">Nematoma svetainės lankytojams</div>
        <div class="flex flex-wrap -mx-6px">
            <div class="w-full lg:w-250px px-6px my-12px">
                <label class="block relative">
                    <span class="block mb-3">Įmonės pavadinimas</span>
                    <input type="text" class="form-input block w-full" v-model="seller_company_name">
                </label>
            </div>
            <div class="w-full lg:w-250px px-6px my-12px">
                <label class="block relative">
                    <span class="block mb-3">Įmonės kodas</span>
                    <input type="number" class="form-input block w-full" v-model="seller_company_code">
                </label>
            </div>
        </div>
        <div class="my-12px w-full lg:w-250px">
            <label class="block relative">
                <span class="block mb-3">PVM kodas (nebūtina)</span>
                <input type="text" class="form-input block w-full" v-model="seller_company_vat">
            </label>
        </div>
        <div class="my-24px w-full lg:w-250px">
            <label class="block relative">
                <span class="block mb-3">Adresas</span>
                <input type="text" class="form-input block w-full" v-model="seller_company_address">
            </label>
        </div>
        <div class="my-20px lg:my-40px text-blue-1">
            Įvesdami skelbimą, sutinkate su portalo <a href="#" class="text-blue-3 underline">taisyklėmis</a> (atnaujinta 2019-08-31)
        </div>
        <div class="flex items-center justify-end">
            <button class="flex items-center justify-center mb-4 lg:mb-0 w-full min-w-222px lg:w-auto bg-blue-3 text-white text-12px uppercase font-medium tracking-0.5px bg-blue-2 rounded-4px p-4">
                SKELBTI
            </button>
        </div>
    </div>
</template>

<script>
    export default {
        name: 'prodeti-skelbima',

        props: ['categories'],

        data: () => ({
            title: '',
            ad_type: '',
            category: '',
            business_model: '',
            price: '',
            turnover: '',
            profit: '',
            employees_count: '',
            web_traffic: '',
            seller_type: '',
            seller_name: '',
            seller_email: '',
            seller_phone: '',
            seller_email_off: false,
            seller_phone_off: false,
            seller_city: '',
            seller_company_name: '',
            seller_company_code: '',
            seller_company_vat: '',
            seller_company_address: '',
        }),

        methods: {

        },
    }
</script>

<style lang="scss">
    .popover {
        background-color: rgba(255, 145, 49, 0.09);
        padding: 12px 12px 12px 1rem;
        line-height: 20px;
        font-weight: 300;
        border-radius: 6px;
        margin-right: -265px;
        margin-top: 34px;
        display: none;

        &:before {
            content: "";
            position: absolute;
            left: 0;
            top: 0;
            margin-left: -8px;
            margin-top: 13px;
            width: 0;
            height: 0;
            border-top: 5px solid transparent;
            border-bottom: 5px solid transparent;
            border-right: 8px solid #f8efee;
            filter: drop-shadow(0 -1px 0 #ff9131) drop-shadow(0 1px 0 #ff9131);
        }

        @screen lg {
            display: inline-block;
        }
    }

    .has_popover {
        &:focus {
            & + .popover {
                opacity: 1;
            }
        }
    }
</style>
