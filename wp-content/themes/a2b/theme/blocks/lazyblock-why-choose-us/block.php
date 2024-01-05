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
    <div class="flex flex-col md:gap-[32px] gap-[20px] lg:px-[100px] md:px-[60px] px-[20px] py-[60px] bg-blue-600 justify-start">
        <div class="flex-col justify-center items-start gap-2 flex lg:w-[56%] md:w-[65%]">
            <div class="self-stretch text-white text-3xl font-semibold font-['Outfit'] capitalize leading-10">Why choose our online Accountancy Services?</div>
            <div class="text-white text-sm font-normal font-['Outfit'] leading-tight">You can call us whenever you need help and advice, without fear of being charged every time you make a phone call. Here are some of our services that we can offer you.</div>
        </div>

        <div class="grid lg:grid-cols-3 md:grid-cols-2 gap-x-[66px] gap-y-[32px]">
            <div class="p-[14px] flex flex-col gap-2">
                <div class="w-full">
                    <img class="object-cover w-full h-full" src="<?php echo get_template_directory_uri() . '/assets/img/banners/rs01.png'; ?>">
                </div>
                <div class="text-white text-xl font-semibold font-['Outfit'] leading-loose line-clamp-2">Fixed Fees</div>
                <div class="text-white text-sm font-normal font-['Outfit'] leading-tight line-clamp-5">Quoted in advance of the work and related to the value of work to be completed so that you know where you stand. Any additional fees relating to additional work will be communicated with you in advance so there will be no surprises.</div>
            </div>

            <div class="p-[14px] flex flex-col gap-2">
                <div class="w-full">
                    <img class="object-cover w-full h-full" src="<?php echo get_template_directory_uri() . '/assets/img/banners/rs02.png'; ?>">
                </div>
                <div class="text-white text-xl font-semibold font-['Outfit'] leading-loose line-clamp-2">Unlimited Free Phone Support</div>
                <div class="text-white text-sm font-normal font-['Outfit'] leading-tight line-clamp-5">You can call as much as you need without charge. It can be about anything - tax, business ideas or whatever you need. If you need help and we can provide it on the phone, it's FREE.</div>
            </div>

            <div class="p-[14px] flex flex-col gap-2">
                <div class="w-full">
                    <img class="object-cover w-full h-full" src="<?php echo get_template_directory_uri() . '/assets/img/banners/rs03.png'; ?>">
                </div>
                <div class="text-white text-xl font-semibold font-['Outfit'] leading-loose line-clamp-2">Unlimited Free Meetings</div>
                <div class="text-white text-sm font-normal font-['Outfit'] leading-tight line-clamp-5">Whenever you wish to meet up, any meetings at our offices are always provided FREE of charge. You have the right to these whenever you feel the need. Just call us to schedule the meeting.</div>
            </div>

            <div class="p-[14px] flex flex-col gap-2">
                <div class="w-full">
                    <img class="object-cover w-full h-full" src="<?php echo get_template_directory_uri() . '/assets/img/banners/rs04.png'; ?>">
                </div>
                <div class="text-white text-xl font-semibold font-['Outfit'] leading-loose line-clamp-2">Work On Time, Every Time</div>
                <div class="text-white text-sm font-normal font-['Outfit'] leading-tight line-clamp-5">As long as the information is provided on time, accounts are guaranteed for completion within 30 days, phone calls and emails are returned within 24 hours max, but usually sooner.</div>
            </div>

            <div class="p-[14px] flex flex-col gap-2">
                <div class="w-full">
                    <img class="object-cover w-full h-full" src="<?php echo get_template_directory_uri() . '/assets/img/banners/rs05.png'; ?>">
                </div>
                <div class="text-white text-xl font-semibold font-['Outfit'] leading-loose line-clamp-2">Free Tax Tips</div>
                <div class="text-white text-sm font-normal font-['Outfit'] leading-tight line-clamp-5">Delivered to you by Email through our regular E-Tax Tips & News to help you pay less tax.</div>
            </div>

            <div class="p-[14px] flex flex-col gap-2">
                <div class="w-full">
                    <img class="object-cover w-full h-full" src="<?php echo get_template_directory_uri() . '/assets/img/banners/rs06.png'; ?>">
                </div>
                <div class="text-white text-xl font-semibold font-['Outfit'] leading-loose line-clamp-2">Someone to Sort All Your Paperwork</div>
                <div class="text-white text-sm font-normal font-['Outfit'] leading-tight line-clamp-5">With the support of the latest technology, we can take all the bookkeeping and other paperwork off you as well as the normal annual accounts and tax work.</div>
            </div>
        </div>
    </div>
</section>