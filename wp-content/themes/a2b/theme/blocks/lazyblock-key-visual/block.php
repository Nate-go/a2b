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
    <div class="grid grid-cols-2 md:gap-[60px] lg:px-[100px] md:px-[60px] px-[20px] pt-[140px]">
        <div class="col-span-1 lg:flex hidden items-center">
            <div class="py-5 flex-col justify-start items-start gap-8 flex">
                <div class="flex-col justify-start items-start gap-4 flex">
                    <div class="text-blue-600 text-4xl font-semibold font-['Outfit'] leading-10">Accountancy Services</div>
                    <div class="text-neutral-900 text-4xl font-semibold font-['Outfit'] leading-10">Beyond the Numbers</div>
                    <div class="text-black text-base font-light font-['Outfit'] leading-normal">We provide a personalised accountancy service to business owners and individuals. We pride ourselves on providing outstanding customer service to order to guarantee that all of our clients are 100% satisfied.</div>
                </div>
                <div class="px-6 py-3 bg-blue-600 rounded-3xl justify-center items-center gap-2.5 flex">
                    <div class="text-violet-50 text-base font-medium font-['Outfit'] capitalize leading-normal">Get an instant quote</div>
                </div>
            </div>
        </div>

        <div class="lg:col-span-1 col-span-2 relative">
            <div class="lg:hidden absolute md:top-[20%] top-0 left-[10%] z-10 py-5 flex-col justify-start items-start md:gap-8 gap-6 flex">
                <div class="flex-col justify-start items-start md:gap-4 gap-2 flex">
                    <div class="text-blue-600 md:text-4xl text-3xl font-semibold font-['Outfit'] leading-10">Accountancy Services</div>
                    <div class="text-neutral-900 md:text-4xl text-3xl font-semibold font-['Outfit'] leading-10">Beyond the Numbers</div>
                    <div class="text-black text-base font-light font-['Outfit'] leading-normal line-clamp-5">We provide a personalised accountancy service to business owners and individuals. We pride ourselves on providing outstanding customer service to order to guarantee that all of our clients are 100% satisfied.</div>
                </div>
                <div class="px-6 py-3 bg-blue-600 rounded-3xl justify-center items-center gap-2.5 flex">
                    <div class="text-violet-50 text-base font-medium font-['Outfit'] capitalize leading-normal">Get an instant quote</div>
                </div>
            </div>
            <img class="object-cover w-full h-full lg:opacity-100 opacity-30" src="<?php echo get_template_directory_uri() . '/assets/img/banners/banner01.png'; ?>">
            
        </div>
    </div>
</section>