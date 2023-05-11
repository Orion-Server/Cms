<div class="w-full flex flex-col gap-4">
    @for ($i = 0; $i < 2; $i++)
    <div class="bg-white relative w-full flex flex-col overflow-hidden justify-between h-auto dark:text-slate-200 dark:bg-slate-950 rounded-lg border-b-2 border-gray-300 dark:border-slate-800 shadow-lg">
        <div class="p-2 w-full">
            <div class="w-full flex justify-between text-sm pb-0.5 mb-2 border-b border-gray-100 dark:border-gray-800">
                <span class="w-1/2 font-medium"><a href="#" class="font-bold underline underline-offset-2 text-blue-400">iNicollas</a> commented:</span>
                <span class="w-1/2 text-end text-xs text-slate-400">
                    <i class="fa-regular fa-clock"></i>
                    12 hours ago
                </span>
            </div>
            <div class="w-full text-sm text-justify dark:text-light-200 mb-4">
                {{ fake()->sentence(random_int(10, 100)) }}
            </div>
        </div>
        <div class="w-full h-14 p-1 bg-gray-100 dark:bg-slate-800 rounded-b-lg border-t dark:border-gray-700">
            <div class="w-full relative rounded-lg h-full bg-right-bottom bg-no-repeat">
                <div class="absolute -bottom-8 left-2 w-[73px] h-[57px] bg-center bg-no-repeat" style="background-image: url('{{ asset('assets/images/stage.png') }}')"></div>
                <div
                    class="absolute -bottom-6 left-2 w-[64px] h-[110px] bg-center bg-no-repeat"
                    style="background-image: url('https://www.habbo.com.br/habbo-imaging/avatarimage?img_format=png&user=nicollas1073&direction=2&head_direction=2&size=m&gesture=sml&action=sit,wav')"
                ></div>
                <div class="w-full h-full items-center pl-20 flex gap-2">
                    @for ($j = 0; $j < 5; $j++)
                        <div class="w-[48px] bg-center bg-no-repeat h-[48px] rounded-lg bg-white dark:bg-slate-700 dark:border-slate-600 border" style="background-image: url('{{ asset('assets/images/default_badge.gif') }}')"></div>
                    @endfor
                </div>
            </div>
        </div>
    </div>
    @endfor
</div>
