<div x-data="{isOpen: false}" class="relative flex flex-col-reverse xl:flex-row w-full overflow-hidden">
    <div class='relative w-full xl:w-1/2 flex h-screen text-nu-primary'>
        <p class="absolute top-[5vw] left-[5vw] xl:hidden" @click="isOpen = true">
            What is <span class="text-nu-secondary font-semibold">NoteUniv ?</span>
        </p>
        <div class="m-auto flex flex-col items-center gap-y-12 md:gap-y-16 xl:gap-y-10">
            <div class="flex">
                <h1 class="text-4xl capitalize w-fit font-bold tracking-wide">NoteUniv</h1>
            </div>
            <form action="./?p=dashboard" method="post"
                class="flex flex-col gap-y-6 bg-white shadow-drop p-6 text-sm w-[90vw] max-w-[450px] xl:min-w-[350px] xl:w-[35vw] xl:max-w-[550px]">
                <div>
                    <label for="email" class="block mb-1.5">Email</label>
                    <div class="flex row-reverse h-10">
                        <input type="email" id="email" name="email" placeholder="Your unistra email"
                            pattern=".+@etu\.unistra\.fr"
                            class="input py-2 pl-14 pr-4 outline-2 outline-nu-primary focus:outline placeholder:text-nu-gray-300 rounded-md">
                        <div class="absolute w-10 h-10 bg-nu-gray-200 flex-shrink-0 flex rounded-l-md">
                            <span class="m-auto w-4 h-4 bg-white"></span>
                        </div>
                    </div>
                </div>
                <div>
                    <div class="flex justify-between mb-1.5">
                        <label for="password">Password</label>
                        <a href="#" class="text-nu-gray-300 text-xs underline">Forgot password ?</a>
                    </div>
                    <div class="flex h-10">
                        <input type="password" id="password" name="password" placeholder="Your password"
                            class="input py-2 pl-14 pr-4 outline-2 outline-nu-primary focus:outline placeholder:text-nu-gray-300 rounded-md">
                        <div class="absolute w-10 h-10 bg-nu-gray-200 flex-shrink-0 flex rounded-l-md">
                            <span class="m-auto w-4 h-4 bg-white"></span>
                        </div>
                    </div>
                </div>
                <button class="btn !bg-nu-primary w-full h-10 rounded-md">Login</button>
            </form>
            <div class="flex flex-col items-center">
                <p>Don't have an account yet ?</p>
                <a href="#" class="btn-link mt-3">
                    <span>Create an account</span>
                </a>
            </div>
        </div>
    </div>
    <div x-cloak
        class="absolute top-0 w-full xl:w-1/2 h-screen bg-nu-primary flex justify-center transform translate-x-full transition-transform duration-500"
        :class="{'translate-x-0': isOpen}" @click="isOpen = false">
        <img src="./src/assets/images/logo-shape.svg" alt="" class="m-auto w-1/2">
        <div class="absolute top-[5vw] left-[5vw] h-8 w-8 text-white transform -rotate-90 xl:hidden">
            <?php getSVg('chevron-down.svg'); ?>
        </div>
    </div>
</div>