<div class="subheading py-24px bg-blue-2">
    <div class="container">
        <div class="flex flex-wrap lg:flex-no-wrap justify-between">
            <button class="hidden lg:flex items-center justify-between text-12px uppercase text-white bg-blue-3 font-medium px-18px py-15px rounded-custom-1 border-0 tracking-0.5px">
                <span class="mr-6">ĮDĖTI SKELBIMĄ</span>
                <svg width="14" height="14" xmlns="http://www.w3.org/2000/svg" version="1.1" xmlns:xlink="http://www.w3.org/1999/xlink" viewBox="0 0 14 14"><g><g><path d="M7,0c-0.30954,0 -0.56,0.25047 -0.56,0.56v5.88v0h-5.88c-0.30954,0 -0.56,0.25047 -0.56,0.56c0,0.30953 0.25047,0.56 0.56,0.56h5.88v0v5.88c0,0.30954 0.25047,0.56 0.56,0.56c0.30953,0 0.56,-0.25047 0.56,-0.56v-5.88v0h5.88c0.30954,0 0.56,-0.25047 0.56,-0.56c0,-0.30953 -0.25047,-0.56 -0.56,-0.56h-5.88v0v-5.88c0,-0.30954 -0.25047,-0.56 -0.56,-0.56z" fill="#ffffff" fill-opacity="1"></path></g></g></svg>
            </button>
            <div class="ad-type-wrap">
                <select name="ad_type" class="form-select block w-full text-12px py-14px border-blue-4">
                    <option>Skelbimo tipas</option>
                </select>
            </div>
            <div class="flex flex-1 lg:flex-3 order-last lg:order-none lg:px-4 lg:pr-6 mt-2 lg:mt-0">
                <div class="flex-1">
                    <select name="city" data-modal="cities_list" class="overlay_trigger form-select block w-full text-12px py-14px border-blue-4 border-r-0 rounded-r-none cursor-pointer" onmousedown="(function(e){ e.preventDefault(); })(event, this)">
                        <option>Visi miestai</option>
                    </select>
                </div>
                <div class="flex flex-3">
                    <input class="form-input block w-full text-12px rounded-none border-blue-5 border-l-0" placeholder="Raktinis žodis">
                    <button class="bg-blue-3 px-17px py-15px rounded-r-custom-1">
                        <svg xmlns="http://www.w3.org/2000/svg" width="14" height="14" viewBox="0 0 14 14"><g><g><path fill="#fff" d="M10.37 6.05a4.322 4.322 0 0 1-4.32 4.32 4.322 4.322 0 0 1-4.322-4.32A4.322 4.322 0 0 1 6.05 1.727 4.322 4.322 0 0 1 10.37 6.05zm3.198 7.518a.877.877 0 0 0 0-1.245L10.906 9.66A6.056 6.056 0 0 0 6.05 0 6.056 6.056 0 0 0 0 6.05a6.056 6.056 0 0 0 6.05 6.049c1.347 0 2.609-.432 3.611-1.193l2.68 2.662a.856.856 0 0 0 1.227 0z"/></g></g></svg>
                    </button>
                </div>
            </div>
            <div class="settings-btn-wrap">
                <button type="button" class="relative w-48px h-48px rounded-full flex items-center justify-center bg-white">
                    <span class="absolute top-0 right-0 -mt-4px bg-green-1 w-16px h-16px rounded-5px text-white text-12px flex items-center justify-center">2</span>
                    <svg width="19" height="19" xmlns="http://www.w3.org/2000/svg" version="1.1" xmlns:xlink="http://www.w3.org/1999/xlink" viewBox="0 0 19 19"><g><g><path d="M8.73077,2.31068v-1.57895c0,-0.40659 0.3306,-0.73718 0.73718,-0.73718c0.40659,0 0.73718,0.33059 0.73718,0.73718v1.57895c1.16547,0.32665 1.97171,1.3895 1.97171,2.60033c0,1.21084 -0.80624,2.27366 -1.97171,2.59933v10.68935c0,0.40757 -0.33059,0.73718 -0.73718,0.73718c-0.40658,0 -0.73718,-0.32961 -0.73718,-0.73718v-10.68935c-1.16349,-0.3286 -1.96678,-1.39043 -1.96777,-2.59933c0.00099,-1.20987 0.80428,-2.27073 1.96777,-2.60033zM9.46793,3.67352c-0.67993,0 -1.23158,0.55165 -1.23158,1.23158c0,0.49837 0.3,0.94736 0.75987,1.13783c0.46085,0.19144 0.99079,0.08584 1.3421,-0.26645c0.35231,-0.3523 0.4579,-0.88224 0.26744,-1.34211c-0.19046,-0.46085 -0.63946,-0.76085 -1.13783,-0.76085zM17.09412,16.61619v1.57895c0,0.40658 -0.32961,0.73718 -0.73718,0.73718c-0.40658,0 -0.73619,-0.3306 -0.73619,-0.73718v-1.57895c-1.16645,-0.32665 -1.9727,-1.3895 -1.9727,-2.60034c0,-1.21084 0.80625,-2.27366 1.9727,-2.59932v-10.68935c0,-0.40757 0.32961,-0.73718 0.73619,-0.73718c0.40757,0 0.73718,0.32961 0.73718,0.73718v10.68935c1.1635,0.32859 1.96679,1.39043 1.96876,2.59932c-0.00197,1.20988 -0.80526,2.27073 -1.96876,2.60034zM17.22832,14.89216c0.23093,-0.23093 0.36021,-0.54374 0.36021,-0.8704c0,-0.49836 -0.3,-0.94736 -0.75987,-1.13782c-0.45986,-0.19145 -0.9898,-0.08585 -1.3421,0.26645c-0.35231,0.35229 -0.4579,0.88224 -0.26744,1.3421c0.19046,0.46085 0.64045,0.76085 1.13783,0.76085c0.32665,0 0.64045,-0.13026 0.87137,-0.36118zM3.31509,16.61619v1.57895c0,0.40658 -0.32961,0.73718 -0.7362,0.73718c-0.40757,0 -0.73718,-0.3306 -0.73718,-0.73718v-1.57895c-1.16546,-0.32665 -1.97171,-1.3895 -1.97171,-2.60034c0,-1.21084 0.80625,-2.27366 1.97171,-2.59932v-10.68935c0,-0.40757 0.32961,-0.73718 0.73718,-0.73718c0.40659,0 0.7362,0.32961 0.7362,0.73718v10.68935c1.16349,0.32859 1.96777,1.39043 1.96875,2.59932c-0.00098,1.20988 -0.80526,2.27073 -1.96875,2.60034zM3.44931,14.89216c0.23092,-0.23093 0.36119,-0.54374 0.36119,-0.8704c0,-0.49836 -0.3,-0.94736 -0.76085,-1.13782c-0.45987,-0.19145 -0.9898,-0.08585 -1.34211,0.26645c-0.3523,0.35229 -0.4579,0.88224 -0.26645,1.3421c0.19046,0.46085 0.63946,0.76085 1.13783,0.76085c0.32665,0 0.63947,-0.13026 0.87039,-0.36118z" fill="#5aac44" fill-opacity="1"></path></g></g></svg>
                </button>
            </div>
        </div>
    </div>
</div>
