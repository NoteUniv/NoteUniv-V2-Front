<aside class="sticky flex flex-col top-0 col-span-2 bg-white h-screen overflow-y-hidden shadow-drop">
    <a href="#" class="bg-nu-primary w-full aspect-square flex items-center justify-center">
        <img class="w-2/3" src="./src/assets/images/logo.svg" alt="">
    </a>
    <select name="semesters" id="semester-select" class="bg-nu-secondary w-full text-white px-6 py-2">
        <option value="1">Semester 1</option>
        <option value="2">Semester 2</option>
        <option value="3">Semester 3</option>
        <option value="4">Semester 4</option>
        <option value="5">Semester 5</option>
        <option value="6">Semester 6</option>
    </select>
    <div class="bg-nu-gray-100 w-full py-4 text-center">
        <p class="mb-2">Overall average</p>
        <div>
            <span class="text-nu-green text-2xl">14,95</span>
            <span class="text-nu-gray-300">/ 20</span>
        </div>
    </div>
    <nav class="flex-grow py-10 px-6 text-lg font-medium">
        <ul class="flex flex-col gap-y-8">
            <li>
                <a href="./?p=dashboard" class="flex items-center hover:text-nu-secondary">
                    <img src="./src/assets/images/dashboard-icon.svg" alt="" class="w-3 mr-4 transform scale-150">
                    <p class="text-sm">Dashboard</p>
                </a>
            </li>
            <li>
                <a href="./?p=grades" class="flex items-center hover:text-nu-secondary">
                    <img src="./src/assets/images/grades-icon.svg" alt="" class="w-3 mr-4">
                    <p class="text-sm">Grades & Averages</p>
                </a>
            </li>
            <li>
                <a href="" class="flex items-center hover:text-nu-secondary">
                    <img src="./src/assets/images/ranking-icon.svg" alt="" class="w-3 mr-4">
                    <p class="text-sm">Ranking</p>
                </a>
            </li>
        </ul>
    </nav>
</aside>