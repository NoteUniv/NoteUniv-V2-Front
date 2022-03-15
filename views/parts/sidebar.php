<div class="w-8 md:w-12 xl:w-auto h-screen flex-shrink-0" x-data="{isOpen: false}">
    <button class="h-screen w-8 md:w-12 bg-nu-primary text-white rounded-tr-md xl:hidden" @click="isOpen = true">
        <div class="flex items-center -rotate-90 -translate-y-[38vh]">
            <span class="uppercase font-semibold text-sm tracking-wide">Menu</span>
            <div class="flex-shrink-0 w-4 h-4 ml-4"><?php getSVG('menu-icon.svg'); ?></div>
        </div>
    </button>
    <div class="fixed z-10 top-0 left-0 h-screen xl:relative xl:block" x-cloak x-show="isOpen">
        <aside
            class="relative z-20 xl:sticky w-72 xl:w-60 flex flex-col top-0 col-span-2 bg-white h-screen rounded-tr-md shadow-drop overflow-hidden -translate-x-full transition-transform duration-500 xl:translate-x-0"
            :class="{'!translate-x-0': isOpen}">
            <a href="#" class="bg-nu-primary w-full aspect-square flex items-center justify-center">
                <img class="w-2/3" src="./src/assets/images/logo.svg" alt="">
            </a>
            <div class="select">
                <select name="semesters" id="semester-select"
                    class="bg-nu-secondary w-full text-white px-6 py-2 focus:outline-none">
                    <option value="1">Semester 1</option>
                    <option value="2">Semester 2</option>
                    <option value="3">Semester 3</option>
                    <option value="4">Semester 4</option>
                    <option value="5">Semester 5</option>
                    <option value="6">Semester 6</option>
                </select>
            </div>
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
                            <div class="w-3 mr-4 transform scale-150">
                                <?php getSVG("dashboard-icon.svg"); ?>
                            </div>
                            <p class="text-sm">Dashboard</p>
                        </a>
                    </li>
                    <li>
                        <a href="./?p=grades" class="flex items-center hover:text-nu-secondary">
                            <div class="w-3 mr-4 transform scale-150">
                                <?php getSVG("grades-icon.svg"); ?>
                            </div>
                            <p class="text-sm">Grades & Averages</p>
                        </a>
                    </li>
                    <li>
                        <a href="./?p=ranking" class="flex items-center hover:text-nu-secondary">
                            <div class="w-3 mr-4 transform scale-150">
                                <?php getSVG("ranking-icon.svg"); ?>
                            </div>
                            <p class="text-sm">Ranking</p>
                        </a>
                    </li>
                </ul>
            </nav>
        </aside>
        <div class="absolute z-10 left-0 top-0 w-screen h-screen bg-white/80 backdrop-filter backdrop-blur-sm xl:hidden"
            @click="isOpen = false">
        </div>
        <div class="absolute z-20 -right-8 top-4 text-nu-primary w-6 h-6 rotate-45 pointer-events-none xl:hidden">
            <?php getSVG('plus-icon.svg'); ?>
        </div>
    </div>
</div>