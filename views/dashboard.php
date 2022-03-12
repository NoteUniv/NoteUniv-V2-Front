<div class="grid grid-cols-10 gap-4 mb-28">
    <div class="box col-start-2 col-span-6 row-span-2">
        <div class="flex justify-between items-center mb-8">
            <h2 class="title">Dernières notes</h2>
            <a href="#" class="btn-link">
                <span>Voir toutes mes notes</span>
            </a>
        </div>
        <table class="w-full border-collapse border-l border-b border-r border-nuGray-200 mb-6">
            <thead>
                <tr class="h-12 bg-nuPrimary text-white">
                    <th class="font-semibold text-left pl-4">Matière</th>
                    <th class="font-semibold text-left pl-4">Nom du devoir</th>
                    <th class="font-semibold">Ma note</th>
                    <th class="font-semibold">Moyenne</th>
                </tr>
            </thead>
            <tbody>
                <?php for ($i = 0; $i < 5; $i++) : ?>
                <tr class="h-12 border-b border-nuGray-200 text-sm">
                    <td class="pl-4">com</td>
                    <td class="pl-4">Contrôle Comportement ...</td>
                    <td class="text-center font-semibold text-nuGreen">18</td>
                    <td class="text-center">11.5</td>
                </tr>
                <?php endfor; ?>
            </tbody>
        </table>
    </div>
    <div class="box col-start-8 col-span-2 row-span-1 aspect-square flex flex-col justify-between items-center">
        <h2 class="title">Moyenne générale</h2>
        <div>
            <span class="text-nuGreen text-4xl">14,95</span>
            <span class="text-nuGray-300 text-xl">/ 20</span>
        </div>
        <a href="#" class="btn-link w-full">
            <span>Voir ma moyenne</span>
        </a>
    </div>
    <div class="box col-start-8 col-span-2 row-span-1 aspect-square flex flex-col justify-between items-center">
        <h2 class="title">Position dans le classement</h2>
        <div>
            <span class="text-nuPrimary text-4xl">33</span>
            <span class="text-nuGray-300 text-xl">/ 99</span>
        </div>
        <a href="#" class="btn-link w-full">
            <span>Voir le classement</span>
        </a>
    </div>
</div>