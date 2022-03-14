<div class="grid grid-cols-10 mb-28">
    <div class="box box--big col-start-2 col-span-8">
        <div class="flex">
            <div class="mb-4 w-2/3 mr-6">
                <div class="flex justify-between items-center mb-8">
                    <h2 class="title title--underline">MECC</h2>
                    <div class="flex">
                        <div class="bg-nu-gray-100 mr-4 flex items-center">
                            <input type="search" id="mecc-search" placeholder="Search..." class="bg-nu-gray-100 text-nu-secondary px-4 py-2 text-xs">
                            <button class="px-3">
                                <?php getSVG('search-icon.svg'); ?>
                            </button>
                        </div>
                        <select name="semesters" id="semester-select" class="bg-nu-gray-100 text-nu-secondary px-4 py-2 text-xs">
                            <option value="1">Select a promo</option>
                            <option value="2">Promo 1</option>
                            <option value="3">Promo 2</option>
                        </select>
                    </div>
                </div>
                <table class="w-full border-collapse border-l border-b border-r border-nu-gray-200">
                    <thead>
                        <tr class="sticky top-0 h-12 bg-nu-primary text-sm text-white">
                            <th class="font-semibold text-left pl-4">File</th>
                            <th class="font-semibold text-center pl-4">Date</th>
                            <th class="font-semibold text-center">Actions</th>
                        </tr>
                    </thead>
                    <tbody>
                        <?php for ($i = 0; $i < 5; $i++) : ?>
                        <tr class="h-12 border-b border-nu-gray-200 text-sm">
                            <td class="pl-4">nom_du_fichier_mmi_1</td>
                            <td class="pl-4 text-center">27/05/2021</td>
                            <td class="flex h-12 items-center">
                                <div class="w-1/2 text-center">
                                    <button class="text-nu-secondary hover:text-nu-primary">
                                        <?php getSVG('download-icon.svg'); ?>
                                    </button>
                                </div>
                                <div class="w-1/2 text-center">
                                    <button class="text-nu-secondary hover:text-nu-primary">
                                        <?php getSVG('upload-icon.svg'); ?>
                                    </button>
                                </div>
                            </td>
                        </tr>
                        <?php endfor; ?>
                    </tbody>
                </table>
            </div>
            <div class="pl-6 w-1/3 border-l border-nu-gray-200">
                <a href="" class="btn w-full text-center">
                    <span>Export empty MECC template</span>
                </a>
                <div class="border-2 border-nu-gray-400 aspect-square mt-8 flex justify-center items-center flex-col">
                    <p class="text-nu-gray-400 text-2xl mb-2">Drop a file</p>
                    <div class="w-8">
                        <?php getSVG('plus-icon.svg'); ?>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <div class="box box--big col-start-2 col-span-8 mt-8">
        <div class="flex">
            <div class="mb-4 w-2/3 mr-6">
                <div class="flex justify-between items-center mb-8">
                    <h2 class="title title--underline">Grades</h2>
                    <div class="flex">
                        <div class="bg-nu-gray-100 mr-4 flex items-center">
                            <input type="search" id="mecc-search" placeholder="Search..." class="bg-nu-gray-100 text-nu-secondary px-4 py-2 text-xs">
                            <button class="px-3">
                                <?php getSVG('search-icon.svg'); ?>
                            </button>
                        </div>
                        <select name="semesters" id="semester-select" class="bg-nu-gray-100 text-nu-secondary px-4 py-2 text-xs">
                            <option value="1">Select a promo</option>
                            <option value="2">Promo 1</option>
                            <option value="3">Promo 2</option>
                        </select>
                    </div>
                </div>
                <table class="w-full border-collapse border-l border-b border-r border-nu-gray-200">
                    <thead>
                        <tr class="sticky top-0 h-12 bg-nu-primary text-sm text-white">
                            <th class="font-semibold text-left pl-4">File</th>
                            <th class="font-semibold text-center pl-4">Date</th>
                            <th class="font-semibold text-center">Actions</th>
                        </tr>
                    </thead>
                    <tbody>
                        <?php for ($i = 0; $i < 5; $i++) : ?>
                        <tr class="h-12 border-b border-nu-gray-200 text-sm">
                            <td class="pl-4">nom_du_fichier_mmi_1</td>
                            <td class="pl-4 text-center">27/05/2021</td>
                            <td class="flex h-12 items-center">
                                <div class="w-1/2 text-center">
                                    <button class="text-nu-secondary hover:text-nu-primary">
                                        <?php getSVG('download-icon.svg'); ?>
                                    </button>
                                </div>
                                <div class="w-1/2 text-center">
                                    <button class="text-nu-secondary hover:text-nu-primary">
                                        <?php getSVG('upload-icon.svg'); ?>
                                    </button>
                                </div>
                            </td>
                        </tr>
                        <?php endfor; ?>
                    </tbody>
                </table>
            </div>
            <div class="pl-6 w-1/3 border-l border-nu-gray-200">
                <a href="" class="btn w-full text-center">
                    <span>Export empty grades template</span>
                </a>
                <div class="border-2 border-nu-gray-400 aspect-square mt-8 flex justify-center items-center flex-col">
                    <p class="text-nu-gray-400 text-2xl mb-2">Drop a file</p>
                    <div class="w-8">
                        <?php getSVG('plus-icon.svg'); ?>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
