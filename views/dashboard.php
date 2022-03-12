<div class="grid grid-cols-10 gap-4 mb-28">
    <div class="box box--big col-start-2 col-span-6 row-span-2">
        <div class="flex justify-between items-center mb-8">
            <h2 class="title title--underline">Last grades</h2>
            <a href="#" class="btn-link">
                <span>View all my grades</span>
            </a>
        </div>
        <table class="w-full border-collapse border-l border-b border-r border-nu-gray-200 mb-4">
            <thead>
                <tr class="h-12 bg-nu-primary text-sm text-white">
                    <th class="font-semibold text-left pl-4">Subject</th>
                    <th class="font-semibold text-left pl-4">Name of work</th>
                    <th class="font-semibold">My grade</th>
                    <th class="font-semibold">Class average</th>
                </tr>
            </thead>
            <tbody>
                <?php for ($i = 0; $i < 5; $i++) : ?>
                <tr class="h-12 border-b border-nu-gray-200 text-sm">
                    <td class="pl-4">com</td>
                    <td class="pl-4">Contrôle Comportement ...</td>
                    <td class="text-center font-semibold text-nu-green">18</td>
                    <td class="text-center">11.5</td>
                </tr>
                <?php endfor; ?>
            </tbody>
        </table>
    </div>
    <div class="box box--small col-start-8 col-span-2 row-span-1 aspect-square flex flex-col justify-between">
        <h2 class="title title--underline">Overall average</h2>
        <div class="text-center">
            <span class="text-nu-green text-4xl">14,95</span>
            <span class="text-nu-gray-300 text-xl">/ 20</span>
        </div>
        <a href="#" class="btn-link w-full">
            <span>View my averages</span>
        </a>
    </div>
    <div class="box box--small col-start-8 col-span-2 row-span-1 aspect-square flex flex-col justify-between">
        <h2 class="title title--underline">Position in the ranking</h2>
        <div class="text-center">
            <span class="text-nu-primary text-4xl">33</span>
            <span class="text-nu-gray-300 text-xl">/ 99</span>
        </div>
        <a href="#" class="btn-link w-full">
            <span>View the ranking</span>
        </a>
    </div>
</div>