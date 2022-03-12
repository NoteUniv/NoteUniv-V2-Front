<div class="grid grid-cols-10 gap-y-8 mb-28">
    <div class="box col-start-2 col-span-8" x-data="{isOpen: true}">
        <div class="flex justify-between items-center cursor-pointer p-6" @click="isOpen = !isOpen">
            <h2 class="title" :class="{'title--underline': isOpen}">UE1</h2>
            <span class="w-4 h-4 mr-6 transform transition-transform duration-200"
                :class="{'-rotate-180': isOpen}"><?php getSVG('chevron-down.svg') ?></span>
        </div>
        <div x-cloak x-show="isOpen" class="flex flex-col gap-y-6 px-6 pb-6 pt-4">
            <div class="relative" x-data="{isOpen: false}">
                <span
                    class="absolute right-6 top-4 w-4 h-4 text-white transform transition-transform duration-200 pointer-events-none"
                    :class="{'-rotate-180': isOpen}"><?php getSVG('chevron-down.svg') ?></span>
                <table class="w-full border-collapse">
                    <thead>
                        <tr class="h-12 text-base bg-nu-primary text-white cursor-pointer" @click="isOpen = !isOpen">
                            <th class="font-semibold text-left px-6 w-3/6">English</th>
                            <th class="font-semibold w-1/6">Student</th>
                            <th class="font-semibold w-2/6">Class</th>
                        </tr>
                    </thead>
                    <tbody>
                        <tr x-cloak x-show="isOpen">
                            <td colspan="3">
                                <table class="w-full border-collapse border-l border-b border-r border-nu-gray-200">
                                    <thead class="w-full">
                                        <tr class="h-12 bg-nu-gray-100 text-sm text-nu-primary">
                                            <th class="font-semibold text-left px-6 w-3/6">Work name</th>
                                            <th class="font-semibold w-1/6">Grade</th>
                                            <th class="font-semibold w-2/6">
                                                <div class="flex">
                                                    <span class="w-full">Average</span>
                                                    <span class="w-full">Min</span>
                                                    <span class="w-full">Max</span>
                                                </div>
                                            </th>
                                        </tr>
                                    </thead>
                                    <tbody>
                                        <?php for ($i = 0; $i < 1; $i++) : ?>
                                        <tr class="h-12 text-sm">
                                            <td class="border border-nu-gray-200 px-6">
                                                <span>Assesment on Behavior & Leadership</span>
                                                <span
                                                    class="inline-block ml-2 w-4 h-4 bg-nu-secondary rounded-full text-white font-medium text-xs text-center cursor-pointer">i</span>
                                            </td>
                                            <td
                                                class="border border-nu-gray-200 text-center text-lg px-6 font-semibold text-nu-green">
                                                12</td>
                                            <td class="border border-nu-gray-200 text-center">
                                                <div class="flex">
                                                    <span class="w-full">10</span>
                                                    <span class="w-full">8</span>
                                                    <span class="w-full">15</span>
                                                </div>
                                            </td>
                                        </tr>
                                        <?php endfor; ?>
                                        <tr class="h-12 text-sm">
                                            <td class="text-right px-6 font-semibold border border-nu-gray-200">English
                                                average</td>
                                            <td
                                                class="text-center font-semibold bg-nu-green text-nu-primary text-lg border border-nu-gray-200">
                                                16</td>
                                            <td class="text-center font-semibold border border-nu-gray-200">
                                                <div class="flex">
                                                    <span class="w-full">12</span>
                                                    <span class="w-full">6</span>
                                                    <span class="w-full">16</span>
                                                </div>
                                            </td>
                                        </tr>
                                    </tbody>
                                </table>
                            </td>
                        </tr>
                        <tr class="h-12 text-sm border-l border-b border-r border-nu-gray-200" x-show="!isOpen">
                            <td class="text-right px-6 font-semibold">English average</td>
                            <td
                                class="text-center font-semibold bg-nu-green text-nu-primary text-lg border-l border-r border-nu-gray-200">
                                16</td>
                            <td class="text-center font-semibold">12</td>
                        </tr>
                    </tbody>
                </table>
            </div>
        </div>
    </div>
    <div class="box box--big col-start-2 col-span-8">
        <h2 class="title title--underline mb-8">Overall averages</h2>
        <div class="flex justify-between items-end">
            <table class="w-4/6 border-collapse border-l border-b border-r border-nu-gray-200">
                <thead>
                    <tr class="h-12 text-base bg-nu-primary text-white">
                        <th class="font-semibold text-left px-6 w-3/4">UE</th>
                        <th class="font-semibold w-1/4">Average</th>
                    </tr>
                </thead>
                <tbody>
                    <?php for ($i = 0; $i < 2; $i++) : ?>
                    <tr class="h-12">
                        <td class="border border-nu-gray-200 px-6">UE1</td>
                        <td class="border border-nu-gray-200 text-center font-semibold text-nu-green">18</td>
                    </tr>
                    <?php endfor; ?>
                </tbody>
            </table>
            <div class="max-w-2/6 flex-shrink inline-grid">
                <h3 class="inline-block font-semibold mb-1">Overall average</h3>
                <div class="inline-block px-12 py-6 bg-nu-green">
                    <span class="text-nu-primary font-normal text-4xl">14,95</span>
                    <span class="text-nu-gray-400">/ 20</span>
                </div>
            </div>
        </div>
    </div>
</div>