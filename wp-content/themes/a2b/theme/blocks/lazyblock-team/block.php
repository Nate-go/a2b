<?php
/**
 * Example Block Template.
 *
 * @var  array  $attributes Block attributes.
 * @var  array  $block Block data.
 * @var  string $context Preview context [editor,frontend].
 */

?>

<section class="w-full">
    <div class="flex flex-col gap-[32px] lg:px-[100px] md:px-[60px] px-[20px] py-[60px] justify-center items-center">
        <div class="flex flex-col justify-center items-center gap-2">
            <div class="text-blue-600 text-3xl font-semibold font-['Outfit'] leading-10">Our Team</div>
            <div class="lg:w-[60%] text-center text-neutral-900 text-sm font-normal font-['Outfit'] leading-tight">We are a dedicated team that strives to provide success to our clients in regards to all their accountancy needs. Our team is very close-knit and ensures that unified support is provided to you whenever you need it. With expertise covering all aspects of accountancy, taxation and business advisory services, we are well placed to take a holistic view to planning for the future as well dealing with specific matters.</div>
        </div>

        <div class="grid md:grid-cols-3 grid-cols-1 gap-[60px]">
            <div class="flex-col justify-center items-center gap-2 flex">
                <div class="w-36 h-36 relative bg-zinc-300 rounded-full">
                    <img class="object-cover w-full h-full" src="<?php echo get_template_directory_uri() . '/assets/img/icons/mb01.png'; ?>">
                </div>
                <div class="text-neutral-900 text-lg font-medium font-['Outfit'] leading-relaxed">Mr Duc Nguyen MAAT</div>
                <div class="text-neutral-900 text-base font-normal font-['Outfit'] leading-normal">CEO</div>
                <div class="w-64 text-center text-neutral-900 text-sm font-light font-['Outfit'] leading-tight">Duc has over fifteen years’ experience in the accountancy profession dealing with owner-managed businesses.</div>
            </div>

            <div class="flex-col justify-center items-center gap-2 flex">
                <div class="w-36 h-36 relative bg-zinc-300 rounded-full">
                    <img class="object-cover w-full h-full" src="<?php echo get_template_directory_uri() . '/assets/img/icons/mb02.png'; ?>">
                </div>
                <div class="text-neutral-900 text-lg font-medium font-['Outfit'] leading-relaxed">Ms Anh Nguyen MBA</div>
                <div class="text-neutral-900 text-base font-normal font-['Outfit'] leading-normal">Tax Manager</div>
                <div class="w-64 text-center text-neutral-900 text-sm font-light font-['Outfit'] leading-tight">Anh works closely with all clients to understand each client’s business aims and objectives.</div>
            </div>

            <div class="flex-col justify-center items-center gap-2 flex">
                <div class="w-36 h-36 relative bg-zinc-300 rounded-full">
                    <img class="object-cover w-full h-full" src="<?php echo get_template_directory_uri() . '/assets/img/icons/mb03.png'; ?>">
                </div>
                <div class="text-neutral-900 text-lg font-medium font-['Outfit'] leading-relaxed">Ms Chi Nguyen MSc</div>
                <div class="text-neutral-900 text-base font-normal font-['Outfit'] leading-normal">Operations Director</div>
                <div class="w-64 text-center text-neutral-900 text-sm font-light font-['Outfit'] leading-tight">Chi has gained a wide experience of accountancy and tax issues.</div>
            </div>
        </div>
    </div>
</section>