<div class="flex h-screen w-full">
    <div class='w-1/2 flex'>
        <div class="m-auto flex flex-col items-center gap-y-10">
            <h1 class="text-4xl capitalize w-fit">Login</h1>
            <form action="#" class="flex flex-col gap-y-6 bg-white shadow-drop px-6 py-10 text-sm min-w-[400px]">
                <div>
                    <label for="email" class="block mb-1">Email</label>
                    <div class="flex h-10">
                        <div class="absolute w-10 h-10 bg-nuGray-200 flex-shrink-0"></div>
                        <input type="email" id="email" name="email" pattern=".+@etu\.unistra\.fr"
                            placeholder="etu@etu.unistra.fr"
                            class="input py-2 pl-14 pr-4 outline-2 outline-black focus:outline">
                    </div>
                </div>
                <div>
                    <label for="password" class="block mb-1">Password</label>
                    <div class="flex h-10">
                        <div class="absolute w-10 h-10 bg-nuGray-200 flex-shrink-0"></div>
                        <input type="password" id="password" name="password" placeholder="password"
                            class="input py-2 pl-14 pr-4 outline-2 outline-black focus:outline">
                    </div>
                </div>
                <div class="ml-auto w-fit">
                    <a href="#" class="text-nuGray-300 underline mr-8">Forgot password ?</a>
                    <button class="btn">Login</button>
                </div>
            </form>
            <div class="flex flex-col items-center gap-y-2">
                <p>Don't have an account yet ?</p>
                <a href="#" class="btn-link">
                    Create an account
                </a>
            </div>
        </div>
    </div>
    <div class="w-1/2 h-full bg-nuGray-100"></div>
</div>