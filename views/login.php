<div class="flex h-screen w-full">
    <div class='w-1/2 flex text-nu-primary'>
        <div class="m-auto flex flex-col items-center gap-y-10">
            <h1 class="text-4xl capitalize w-fit">Login</h1>
            <form action="#" class="flex flex-col gap-y-6 bg-white shadow-drop px-6 py-10 text-sm min-w-[400px]">
                <div>
                    <label for="email" class="block mb-1.5">Email</label>
                    <div class="flex h-10">
                        <div class="absolute w-10 h-10 bg-nu-primary flex-shrink-0 flex">
                            <span class="m-auto w-4 h-4 bg-white"></span>
                        </div>
                        <input type="email" id="email" name="email" placeholder="Your unistra email" pattern=".+@etu\.unistra\.fr" class="input py-2 pl-14 pr-4 outline-2 outline-nu-primary/70 focus:outline placeholder:text-nu-gray-300">
                    </div>
                </div>
                <div>
                    <label for="password" class="block mb-1.5">Password</label>
                    <div class="flex h-10">
                        <div class="absolute w-10 h-10 bg-nu-primary flex-shrink-0 flex">
                            <span class="m-auto w-4 h-4 bg-white"></span>
                        </div>
                        <input type="password" id="password" name="password" placeholder="Your password" class="input py-2 pl-14 pr-4 outline-2 outline-nu-primary/70 focus:outline placeholder:text-nu-gray-300">
                    </div>
                </div>
                <div class="ml-auto w-fit">
                    <a href="#" class="text-nu-secondary underline mr-8">Forgot password</a>
                    <button class="btn">Login</button>
                </div>
            </form>
            <div class="flex flex-col items-center gap-y-2">
                <p>Don't have an account yet ?</p>
                <a href="#" class="btn-link">
                    <span>Create an account</span>
                </a>
            </div>
        </div>
    </div>
    <div class="w-1/2 h-full bg-nu-primary"></div>
</div>