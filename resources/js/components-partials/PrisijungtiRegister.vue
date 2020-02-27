<template>
    <div>
        <a href="javascript:" class="relative bg-blue-3 text-white rounded-4px text-12px tracking-0.5px text-center p-15px lg:p-17px w-full block font-medium">
            <span class="absolute left-0 top-0 ml-18px mt-15px">
                <svg width="9" height="17" xmlns="http://www.w3.org/2000/svg" version="1.1" viewBox="0 0 9 17"><g><g><title>Path</title><path d="M8.66109,0.41348l-2.15869,-0.00348c-2.42522,0 -3.9925,1.61452 -3.9925,4.11341v1.89655v0h-2.17047c-0.18755,0 -0.33943,0.15268 -0.33943,0.34099v2.7479c0,0.18831 0.15205,0.34081 0.33943,0.34081h2.17047v0v6.93381c0,0.18832 0.15188,0.34082 0.33943,0.34082h2.83185c0.18755,0 0.33943,-0.15267 0.33943,-0.34082v-6.93381v0h2.53778c0.18755,0 0.33943,-0.1525 0.33943,-0.34081l0.00104,-2.7479c0,-0.09042 -0.03585,-0.17701 -0.0994,-0.241c-0.06356,-0.06399 -0.15015,-0.09999 -0.2402,-0.09999h-2.53865v0v-1.60773c0,-0.77274 0.1834,-1.16502 1.18594,-1.16502l1.45419,-0.00053c0.18738,0 0.33926,-0.15267 0.33926,-0.34081v-2.55158c0,-0.18797 -0.15171,-0.34046 -0.33891,-0.34081z" fill="#ffffff" fill-opacity="1"></path></g><g><title>facebook-logo (2)</title><g><title>Path</title><path d="M8.66109,0.41348l-2.15869,-0.00348c-2.42522,0 -3.9925,1.61452 -3.9925,4.11341v1.89655v0h-2.17047c-0.18755,0 -0.33943,0.15268 -0.33943,0.34099v2.7479c0,0.18831 0.15205,0.34081 0.33943,0.34081h2.17047v0v6.93381c0,0.18832 0.15188,0.34082 0.33943,0.34082h2.83185c0.18755,0 0.33943,-0.15267 0.33943,-0.34082v-6.93381v0h2.53778c0.18755,0 0.33943,-0.1525 0.33943,-0.34081l0.00104,-2.7479c0,-0.09042 -0.03585,-0.17701 -0.0994,-0.241c-0.06356,-0.06399 -0.15015,-0.09999 -0.2402,-0.09999h-2.53865v0v-1.60773c0,-0.77274 0.1834,-1.16502 1.18594,-1.16502l1.45419,-0.00053c0.18738,0 0.33926,-0.15267 0.33926,-0.34081v-2.55158c0,-0.18797 -0.15171,-0.34046 -0.33891,-0.34081z" fill="#ffffff" fill-opacity="1"></path></g></g></g></svg>
            </span>
            REGISTUOTIS SU FACEBOOK
        </a>

        <div class="relative flex items-center justify-center my-8">
            <div class="absolute w-full border-b border-blue-5"></div>
            <div class="w-80px bg-blue-7 relative text-center text-14px">arba</div>
        </div>

        <label class="block relative">
            <img svg-inline class="icon absolute left-0 top-0 mt-15px ml-15px" src="../../../public/images/register_name.svg" alt="Vardas" />
            <input type="email" class="form-input text-14px pl-50px py-13px block w-full mb-12px" placeholder="Vardas">
        </label>
        <label class="block relative">
            <img svg-inline class="icon absolute left-0 top-0 mt-15px ml-15px" src="../../../public/images/form_login.svg" alt="El. paštas arba tel. nr" />
            <input type="email" class="form-input text-14px pl-50px py-13px block w-full mb-12px" placeholder="El. paštas arba tel. nr">
        </label>
        <label class="block relative">
            <img svg-inline class="icon absolute left-0 top-0 mt-15px ml-15px" src="../../../public/images/form_pass.svg" alt="Slaptažodis" />
            <input type="password" class="form-input text-14px pl-50px py-13px block w-full mb-12px" placeholder="Slaptažodis">
        </label>

        <button class="border border-blue-3 px-27px py-15px rounded-4px uppercase w-full text-blue-3 text-12px font-medium block mx-auto my-24px">
            Registruotis
        </button>

        <div class="text-center text-12px font-light max-w-365px mx-auto">
            Registuodamieso sutinkate su Verslobankas.lt portalo <a href="javascript:" class="text-blue-3 underline">taisyklėmis</a> ir
            <a href="javascript:" class="text-blue-3 underline">privatumo politiką</a>.
        </div>

    </div>
</template>

<script>
    export default {
        name: 'prisijungti-login',

        data: () => ({

        }),
    }
</script>
