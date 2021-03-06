<div class="px-4 md:px-12">
    <div class="w-full col-start-2 col-span-8 pb-8 xl:pb-10 pt-12 xl:pt-16 flex justify-between">
        <div class="flex items-center">
            <img src="./src/assets/images/<?php echo $page ?>-icon.svg" alt="" class="mr-4 w-7 h-7">
            <h1 class="text-2xl xl:text-3xl"><?php echo ucfirst($page) ?></h1>
        </div>
        <div class="relative" x-data="{ isOpen: false}">
            <div class="flex items-center cursor-pointer py-2" @mouseEnter="isOpen = true" @mouseLeave="isOpen = false">
                <!-- <img src="./src/assets/images/account-icon.svg" alt="" class="mr-3"> -->
                <p class="hidden xl:block text-md font-semibold mr-4 text-nu-primary">email@etu.unistra.fr</p>
                <button class="bg-white p-3 xl:py-4 shadow-drop rounded-md" @keydown.enter="isOpen = true"
                    @keydown.escape="isOpen = false">
                    <div class="hidden xl:block transform transition-transform duration-200 text-nu-primary"
                        :class="{'-rotate-180':isOpen}">
                        <?php getSVG('chevron-down.svg'); ?>
                    </div>
                    <div class="xl:hidden text-nu-primary">
                        <?php getSVG('account-icon.svg') ?>
                    </div>
                </button>
                <ul x-cloak x-show=" isOpen"
                    class="absolute font-normal bg-white shadow rounded-md overflow-hidden w-48 right-0 z-20 top-full">
                    <li>
                        <a href="#"
                            class="flex items-center px-3 py-3 text-nu-primary hover:bg-nu-secondary hover:text-white transition-colors duration-150">
                            <svg fill="currentColor" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24" width="24"
                                height="24" class="w-5 h-5">
                                <path
                                    d="M9 4.58V4c0-1.1.9-2 2-2h2a2 2 0 0 1 2 2v.58a8 8 0 0 1 1.92 1.11l.5-.29a2 2 0 0 1 2.74.73l1 1.74a2 2 0 0 1-.73 2.73l-.5.29a8.06 8.06 0 0 1 0 2.22l.5.3a2 2 0 0 1 .73 2.72l-1 1.74a2 2 0 0 1-2.73.73l-.5-.3A8 8 0 0 1 15 19.43V20a2 2 0 0 1-2 2h-2a2 2 0 0 1-2-2v-.58a8 8 0 0 1-1.92-1.11l-.5.29a2 2 0 0 1-2.74-.73l-1-1.74a2 2 0 0 1 .73-2.73l.5-.29a8.06 8.06 0 0 1 0-2.22l-.5-.3a2 2 0 0 1-.73-2.72l1-1.74a2 2 0 0 1 2.73-.73l.5.3A8 8 0 0 1 9 4.57zM7.88 7.64l-.54.51-1.77-1.02-1 1.74 1.76 1.01-.17.73a6.02 6.02 0 0 0 0 2.78l.17.73-1.76 1.01 1 1.74 1.77-1.02.54.51a6 6 0 0 0 2.4 1.4l.72.2V20h2v-2.04l.71-.2a6 6 0 0 0 2.41-1.4l.54-.51 1.77 1.02 1-1.74-1.76-1.01.17-.73a6.02 6.02 0 0 0 0-2.78l-.17-.73 1.76-1.01-1-1.74-1.77 1.02-.54-.51a6 6 0 0 0-2.4-1.4l-.72-.2V4h-2v2.04l-.71.2a6 6 0 0 0-2.41 1.4zM12 16a4 4 0 1 1 0-8 4 4 0 0 1 0 8zm0-2a2 2 0 1 0 0-4 2 2 0 0 0 0 4z"
                                    class="heroicon-ui"></path>
                            </svg>
                            <span class="ml-2 text-sm font-medium">Settings</span>
                        </a>
                    </li>
                    <li>
                        <a href="#"
                            class="flex items-center px-3 py-3 text-nu-primary hover:bg-nu-secondary hover:text-white transition-colors duration-150">
                            <svg fill="currentColor" xmlns="http://www.w3.org/2000/svg" width="24" height="24"
                                viewBox="0 0 24 24" class="w-5 h-5">
                                <path d="M0 0h24v24H0z" fill="none"></path>
                                <path
                                    d="M10.09 15.59L11.5 17l5-5-5-5-1.41 1.41L12.67 11H3v2h9.67l-2.58 2.59zM19 3H5c-1.11 0-2 .9-2 2v4h2V5h14v14H5v-4H3v4c0 1.1.89 2 2 2h14c1.1 0 2-.9 2-2V5c0-1.1-.9-2-2-2z">
                                </path>
                            </svg><span class="ml-2 text-sm font-medium">Logout</span>
                        </a>
                    </li>
                </ul>
            </div>
        </div>
    </div>
</div>