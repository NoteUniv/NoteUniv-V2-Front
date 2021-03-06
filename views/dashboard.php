<div class="mb-24 px-4 md:px-12">
    <div class="relative flex flex-col xl:flex-row gap-4">
        <div class="box box--big flex-grow">
            <div class="flex flex-col md:flex-row justify-between xl:items-center mb-6">
                <h2 class="title title--underline mb-6 md:mb-0">Last grades</h2>
                <a href="" class="btn-link">
                    <span>View all my grades</span>
                </a>
            </div>
            <div>
                <table
                    class="block xl:table w-full overflow-x-auto border-collapse border-l border-b border-r border-nu-gray-200">
                    <thead>
                        <tr class="h-12 bg-nu-primary text-sm text-white">
                            <th class="font-semibold px-4 text-left">Date</th>
                            <th class="font-semibold px-4 text-left">Subject</th>
                            <th class="font-semibold px-4 text-left w-full">Name of work</th>
                            <th class="font-semibold px-4">My grade</th>
                            <th class="font-semibold px-4">Class average</th>
                        </tr>
                    </thead>
                    <tbody>
                        <?php for ($i = 0; $i < 5; $i++) : ?>
                        <tr class="h-12 border-b border-nu-gray-200 text-sm">
                            <td class="px-4 text-xs font-semibold">14/03/2022</td>
                            <td class="px-4">com</td>
                            <td class="px-4 overflow-ellipsis">Contrôle Comportement</td>
                            <td class="px-4 text-center font-semibold text-nu-green">18</td>
                            <td class="px-4 text-center">11.5</td>
                        </tr>
                        <?php endfor; ?>
                        <tr
                            class="hidden xl:table-row h-12 text-xl text-nu-primary bg-nu-gray-100 text-center font-bold tracking-widest cursor-pointer transition-colors duration-200 hover:bg-gray-200">
                            <td colspan="5">
                                ...
                            </td>
                        </tr>
                    </tbody>
                </table>
                <div
                    class="xl:hidden h-10 border-l border-b border-r border-nu-gray-200 text-xl text-nu-primary bg-nu-gray-100 text-center font-bold tracking-widest cursor-pointer transition-colors duration-200 hover:bg-gray-200 leading-8">
                    ...
                </div>
            </div>
        </div>
        <div class="self-start flex flex-col md:flex-row xl:flex-col w-full xl:w-auto gap-4 xl:sticky xl:top-4">
            <div class="box box--small min-w-[220px] aspect-square md:flex-grow flex flex-col justify-between">
                <h2 class="title title--underline">Overall average</h2>
                <div class="text-center">
                    <span class="text-nu-green text-5xl xl:text-4xl">14,95</span>
                    <span class="text-nu-gray-300 text-xl">/ 20</span>
                </div>
                <a href="" class="btn-link w-full">
                    <span>View my averages</span>
                </a>
            </div>
            <div class="box box--small min-w-[220px] aspect-square md:flex-grow flex flex-col justify-between">
                <h2 class="title title--underline">Position in the ranking</h2>
                <div class="text-center">
                    <span class="text-nu-primary text-5xl xl:text-4xl">33</span>
                    <span class="text-nu-gray-300 text-xl">/ 99</span>
                </div>
                <a href="" class="btn-link w-full">
                    <span>View the ranking</span>
                </a>
            </div>
        </div>
    </div>
</div>