<div class="w-8 md:w-12 xl:w-auto h-screen flex-shrink-0" x-data="{isOpen: false}">
    <div class="fixed z-20 top-0 left-0 h-screen -translate-x-full transition-transform duration-500 xl:translate-x-0 xl:relative xl:block"
        :class="{'!translate-x-0': isOpen}">
        <aside
            class="relative z-20 xl:sticky w-72 xl:w-60 flex flex-col top-0 col-span-2 bg-white h-screen rounded-tr-md shadow-drop">
            <button
                class="absolute left-full top-0 h-screen w-8 md:w-12 bg-nu-primary text-white rounded-tr-md xl:hidden transition-colors duration-300"
                :class="{'bg-transparent text-nu-primary':isOpen, 'bg-nu-primary': !isOpen}" @click="isOpen = !isOpen">
                <div class="absolute top-6 md:top-8 -left-6 md:-left-4 flex items-center -rotate-90 translate-y-full">
                    <span class="uppercase font-medium text-sm tracking-wide">Menu</span>
                    <div class="flex-shrink-0 w-4 h-4 ml-4">
                        <svg width="18" height="8" viewBox="0 0 18 8" fill="none" stroke="currentColor"
                            xmlns="http://www.w3.org/2000/svg">
                            <line x1="1" y1="7" x2="17" y2="7" stroke-width="2" stroke-linecap="round"
                                class="origin-center transition-transform duration-300"
                                :class="{'rotate-45 -translate-y-[2px]':isOpen}" />
                            <line x1="1" y1="1" x2="17" y2="1" stroke-width="2" stroke-linecap="round"
                                class="origin-center transition-transform duration-300"
                                :class="{'-rotate-45 translate-y-[2px]':isOpen}" />
                        </svg>
                    </div>
                </div>
            </button>
            <a href="#" class="bg-nu-primary w-full aspect-square flex items-center justify-center">
                <img class="w-2/3" src="./src/assets/images/logo.svg" alt="">
            </a>
            <div class="relative">
                <select name="semesters" id="semester-select"
                    class="appearance-none bg-nu-secondary w-full text-white px-6 py-2 focus:outline-none">
                    <option value="1">Semester 1</option>
                    <option value="2">Semester 2</option>
                    <option value="3">Semester 3</option>
                    <option value="4">Semester 4</option>
                    <option value="5">Semester 5</option>
                    <option value="6">Semester 6</option>
                </select>
                <div class="absolute right-4 top-1/2 -translate-y-1/2 w-4 h-4 text-white">
                    <?php getSVG('chevron-down.svg'); ?>
                </div>
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
    </div>
    <div class="fixed z-10 left-0 top-0 w-screen h-screen bg-white/80 backdrop-filter backdrop-blur-sm xl:hidden"
        x-cloak x-show="isOpen" @click="isOpen = false">
    </div>
</div>