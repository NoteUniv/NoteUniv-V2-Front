<div class="grid grid-cols-10 gap-y-8 mb-28">
    <div class="box box--big col-start-2 col-span-8">
        <div class="flex justify-between mb-6">
            <a href="#current" class="btn">View my rank</a>
            <a href="" class="btn-link">Remove me from the ranking</a>
        </div>
        <table class="w-full border-collapse">
            <thead>
                <tr class="h-12 text-base bg-nu-primary text-white">
                    <th class="font-semibold w-1/3">Rank</th>
                    <th class="font-semibold w-1/3">Student</th>
                    <th class="font-semibold w-1/3">Average</th>
                </tr>
            </thead>
            <tbody>
                <?php for ($i = 0; $i < 20; $i++) : ?>
                <tr class="h-12 text-center <?php if ($i == 3) echo 'text-nu-green font-semibold" id="current' ?>">
                    <td class="border border-nu-gray-200"><?php echo $i + 1 ?></td>
                    <td class="border border-nu-gray-200">12702031</td>
                    <td class="border border-nu-gray-200"><?php echo 20 - $i ?></td>
                </tr>
                <?php endfor; ?>
            </tbody>
        </table>
    </div>
</div>