<div class="mb-24 px-4 md:px-12">
    <div class="box box--big">
        <div class="flex">
            <div class="mb-4 w-2/3 mr-6">
                <div class="flex justify-between items-center mb-8">
                    <h2 class="title title--underline">MECC</h2>
                    <div class="flex">
                        <div class="bg-nu-gray-100 mr-4 flex items-center rounded-md">
                            <input type="search" id="mecc-search" placeholder="Search..."
                                class="bg-transparent text-nu-secondary px-4 py-2 text-xs">
                            <button class="px-3 h-full">
                                <?php getSVG('search-icon.svg'); ?>
                            </button>
                        </div>
                        <div class="relative">
                            <select name="semesters" id="semester-select"
                                class="appearance-none bg-nu-gray-100 text-nu-secondary pl-4 pr-10 py-2 text-xs rounded-md">
                                <option value="1">Select a promo</option>
                                <option value="2">Promo 1</option>
                                <option value="3">Promo 2</option>
                            </select>
                            <div class="absolute right-4 top-1/2 -translate-y-1/2 w-3 h-3 text-nu-secondary">
                                <?php getSVG('chevron-down.svg'); ?>
                            </div>
                        </div>
                    </div>
                </div>
                <table class="w-full border-collapse border-l border-b border-r border-nu-gray-200"
                    x-data="{filter: '', sort: 0}">
                    <thead>
                        <tr class="h-12 bg-nu-primary text-sm text-white">
                            <th>
                                <button class="px-4 w-full h-12 font-semibold text-left flex items-center">
                                    <div class="flex flex-col items-center mr-1">
                                        <div class="w-2 h-1 rotate-180">
                                            <?php getSVG('triangle-down.svg'); ?>
                                        </div>
                                        <div class="w-2 h-1">
                                            <?php getSVG('triangle-down.svg'); ?>
                                        </div>
                                    </div>
                                    <span>Date</span>
                                </button>
                            </th>
                            <th class="w-full">
                                <button class="px-4 w-full h-12 font-semibold text-left flex items-center">
                                    <div class="flex flex-col items-center mr-1">
                                        <div class="w-2 h-1 rotate-180">
                                            <?php getSVG('triangle-down.svg'); ?>
                                        </div>
                                        <div class="w-2 h-1">
                                            <?php getSVG('triangle-down.svg'); ?>
                                        </div>
                                    </div>
                                    <span>File</span>
                                </button>
                            </th>
                            <th class="min-w-[120px] font-semibold text-center">
                                Actions
                            </th>
                        </tr>
                    </thead>
                    <tbody>
                        <?php for ($i = 0; $i < 5; $i++) : ?>
                        <tr class="h-12 border-b border-nu-gray-200 text-sm">
                            <td class="px-4 text-xs font-semibold">27/05/2021</td>
                            <td class="px-4">nom_du_fichier_mmi_1</td>
                            <td class="px-4 flex h-12 items-center">
                                <div class="w-1/2 text-center">
                                    <button
                                        class="text-nu-secondary rounded-md p-2 transition-colors duration-200 hover:text-white hover:bg-nu-secondary">
                                        <?php getSVG('download-icon.svg'); ?>
                                    </button>
                                </div>
                                <div class="w-1/2 text-center">
                                    <button
                                        class="text-nu-secondary rounded-md p-2 transition-colors duration-200 hover:text-white hover:bg-nu-secondary">
                                        <?php getSVG('upload-icon.svg'); ?>
                                    </button>
                                </div>
                            </td>
                        </tr>
                        <?php endfor; ?>
                        <tr
                            class="hidden xl:table-row h-12 text-xl text-nu-primary bg-nu-gray-100 text-center font-bold tracking-widest cursor-pointer transition-colors duration-200 hover:bg-gray-200">
                            <td colspan="3">
                                ...
                            </td>
                        </tr>
                    </tbody>
                </table>
            </div>
            <div class="pl-6 w-1/3 border-l border-nu-gray-200">
                <button class="btn flex items-center justify-center text-sm w-full text-center">
                    <span class="inline-block w-4 h-4 mr-3">
                        <?php getSVG('upload-icon.svg') ?>
                    </span>
                    <span>MECC template</span>
                </button>
                <button
                    class="w-full border-2 border-nu-gray-400 text-nu-gray-400 aspect-square mt-8 flex justify-center items-center flex-col transition-colors duration-200 hover:border-nu-green hover:text-nu-green">
                    <p class="text-2xl mb-2">Drop a file</p>
                    <div class="w-8">
                        <?php getSVG('plus-icon.svg'); ?>
                    </div>
                </button>
            </div>
        </div>
    </div>
</div>