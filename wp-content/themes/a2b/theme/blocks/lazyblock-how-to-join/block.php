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
    <div class="flex flex-col gap-[32px] lg:px-[100px] md:px-[60px] px-[20px] py-[60px] justify-start">
        <div class="flex-col justify-center items-start gap-2 flex md:w-[56%] ">
            <div class="text-left text-blue-600 text-3xl font-semibold font-['Outfit'] leading-10">How easy is it to join Our Partnership?</div>
            <div class="text-neutral-900 text-sm font-normal font-['Outfit'] leading-tight">Whether you're looking for your first accountant or to change your current one.</div>
        </div>

        <div class="grid md:grid-cols-2 grid-cols-1 lg:gap-[100px] md:gap-[50px]">
            <div class="w-full md:block hidden">
                <img class="object-cover w-full h-full" src="<?php echo get_template_directory_uri() . '/assets/img/banners/banner02.png'; ?>">
            </div>

            <div class="flex items-center justify-center">
                <div class="flex-col justify-between items-start flex gap-7">
                    <div class="justify-start items-start gap-4 flex">
                        <div class="justify-start items-center gap-4 flex pt-3">
                            <div class="w-10 h-10 p-2.5 rounded-full border border-blue-600 flex-col justify-center items-center gap-2.5 flex">
                                <div class="text-center text-blue-600 text-lg font-medium font-['Outfit'] leading-snug">01</div>
                            </div>
                        </div>
                        <div class="flex-col justify-center items-start gap-2 flex">
                            <div class="text-neutral-900 text-xl font-medium font-['Outfit'] leading-loose">Get a quote</div>
                            <div class="text-neutral-900 text-sm font-normal font-['Outfit'] leading-tight">Get your instant online quote to find out how much you'll be paying</div>
                        </div>
                    </div>
                    <div class="justify-start items-start gap-4 flex">
                        <div class="justify-start items-center gap-4 flex pt-3">
                            <div class="w-10 h-10 p-2.5 rounded-full border border-blue-600 flex-col justify-center items-center gap-2.5 flex">
                                <div class="text-center text-blue-600 text-lg font-medium font-['Outfit'] leading-snug">02</div>
                            </div>
                        </div>
                        <div class="flex-col justify-center items-start gap-2 flex">
                            <div class="text-neutral-900 text-xl font-medium font-['Outfit'] leading-loose">Sign up to our service</div>
                            <div class="text-neutral-900 text-sm font-normal font-['Outfit'] leading-tight">Fill out our simple online registration form. It’s only short, we promise.</div>
                        </div>
                    </div>

                    <div class="justify-start items-start gap-4 flex">
                        <div class="justify-start items-center gap-4 flex pt-3">
                            <div class="w-10 h-10 p-2.5 rounded-full border border-blue-600 flex-col justify-center items-center gap-2.5 flex">
                                <div class="text-center text-blue-600 text-lg font-medium font-['Outfit'] leading-snug">03</div>
                            </div>
                        </div>
                        <div class="flex-col justify-center items-start gap-2 flex">
                            <div class="text-neutral-900 text-xl font-medium font-['Outfit'] leading-loose">Receive a warm welcome</div>
                            <div class="text-neutral-900 text-sm font-normal font-['Outfit'] leading-tight">We’ll get you set up, settled in and introduce you to your accountant.</div>
                        </div>
                    </div>
                    
                </div>
            </div>

        </div>  
    </div>
</section>