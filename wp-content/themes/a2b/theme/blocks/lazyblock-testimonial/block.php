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
    <div class="flex flex-col gap-8 bg-violet-50 justify-start py-[60px]">
        <div class="flex lg:px-[100px] md:px-[60px] px-[20px] justify-between">
            <div class="flex flex-col gap-2 justify-start md:w-[40%] w-[90%]">
                <div class="text-blue-600 text-3xl font-semibold font-['Outfit'] capitalize leading-10">what our users say about us</div>
                <div class="text-neutral-900 text-sm font-normal font-['Outfit'] leading-tight">We currently help over 13,000 businesses in the London to thrive. See what our clients have to say about us.</div>
            </div>
            <div class="flex justify-start items-end">
                <div class="flex gap-1">
                    <div class="rounded-full p-1.5 bg-white border border-blue-600 left-scroll">
                        <svg xmlns="http://www.w3.org/2000/svg" width="14" height="14" viewBox="0 0 14 14" fill="none">
                            <g clip-path="url(#clip0_62_1099)">
                                <path d="M2.88346 10.7298L0.597378 8.44376C0.226159 8.05475 0.019043 7.53771 0.019043 7.00001C0.019043 6.4623 0.226159 5.94526 0.597378 5.55626L2.88346 3.27017C2.96418 3.1866 3.06073 3.11994 3.16748 3.07408C3.27424 3.02822 3.38905 3.00409 3.50524 3.00308C3.62142 3.00207 3.73664 3.02421 3.84417 3.0682C3.95171 3.1122 4.0494 3.17717 4.13156 3.25933C4.21371 3.34148 4.27868 3.43918 4.32268 3.54671C4.36668 3.65425 4.38882 3.76947 4.38781 3.88565C4.3868 4.00183 4.36266 4.11665 4.3168 4.2234C4.27094 4.33015 4.20428 4.4267 4.12071 4.50742L2.49963 6.12967L13.1455 6.14309C13.3775 6.14309 13.6001 6.23528 13.7642 6.39937C13.9283 6.56346 14.0205 6.78602 14.0205 7.01809C14.0205 7.25015 13.9283 7.47271 13.7642 7.63681C13.6001 7.8009 13.3775 7.89309 13.1455 7.89309L2.50838 7.87967L4.12071 9.49259C4.2801 9.65762 4.36829 9.87864 4.3663 10.1081C4.36431 10.3375 4.27228 10.5569 4.11005 10.7192C3.94782 10.8814 3.72836 10.9734 3.49894 10.9754C3.26952 10.9774 3.04849 10.8892 2.88346 10.7298Z" fill="#3B61E8"/>
                            </g>
                            <defs>
                                <clipPath id="clip0_62_1099">
                                <rect width="14" height="14" fill="white" transform="matrix(1 0 0 -1 0 14)"/>
                                </clipPath>
                            </defs>
                        </svg>
                    </div>
                    <div class="rounded-full p-1.5 bg-blue-600 right-scroll">
                        <svg xmlns="http://www.w3.org/2000/svg" width="14" height="14" viewBox="0 0 14 14" fill="none">
                            <g clip-path="url(#clip0_62_1101)">
                                <path d="M11.1543 3.27015L13.4404 5.55623C13.8116 5.94523 14.0188 6.46228 14.0188 6.99998C14.0188 7.53769 13.8116 8.05473 13.4404 8.44373L11.1543 10.7298C10.9903 10.894 10.7677 10.9862 10.5356 10.9863C10.3035 10.9863 10.0809 10.8942 9.91679 10.7301C9.75265 10.566 9.6604 10.3435 9.66034 10.1114C9.66029 9.87931 9.75243 9.65671 9.9165 9.49257L11.5382 7.87032L0.892334 7.8569C0.66027 7.8569 0.43771 7.76471 0.273616 7.60062C0.109521 7.43652 0.017334 7.21396 0.017334 6.9819C0.017334 6.74983 0.109521 6.52727 0.273616 6.36318C0.43771 6.19909 0.66027 6.1069 0.892334 6.1069L11.5271 6.12032L9.9165 4.5074C9.75711 4.34237 9.66892 4.12134 9.67091 3.89192C9.6729 3.6625 9.76493 3.44304 9.92716 3.28081C10.0894 3.11857 10.3089 3.02655 10.5383 3.02456C10.7677 3.02256 10.9887 3.11076 11.1538 3.27015H11.1543Z" fill="white"/>
                            </g>
                            <defs>
                                <clipPath id="clip0_62_1101">
                                <rect width="14" height="14" fill="white" transform="matrix(1 0 0 -1 0 14)"/>
                                </clipPath>
                            </defs>
                        </svg>
                    </div>
                </div>
            </div>
        </div>
        
        <div class="lg:pl-[100px] md:pl-[60px] pl-[20px] w-full overflow-x-auto hidden-scroll-bar" id="menu">
            <div class="snap-x gap-[30px] flex">
                <div class="snap-center shrink-0 md:w-[30%] w-[95%] px-4 py-8 bg-indigo-400 rounded-2xl flex-col justify-start items-end gap-4 flex">
                    <div class="self-stretch flex-col justify-start items-end gap-2 flex">
                        <div class="self-stretch text-white text-xl font-semibold font-['Outfit'] leading-loose">“It's a super solid service and it's quite affordable...”</div>
                        <div class="self-stretch text-white text-sm font-normal font-['Outfit'] leading-tight">Aaron and Laura have been extremely helpful with my company returns.It's a super solid service and it's quite affordable. What's not to like about TAP!</div>
                    </div>
                    <div class="self-stretch justify-start items-center flex">
                        <div class="justify-start items-center gap-2 flex">
                            <img class="object-cover w-12 h-12 rounded-full" src="<?php echo get_template_directory_uri() . '/assets/img/icons/ps01.png'; ?>">
                            <div class="flex-col justify-start items-start flex">
                                <div class="text-center text-white text-sm font-semibold font-['Outfit'] leading-tight">Ariana Grande</div>
                                <div class="text-center text-white text-sm font-light font-['Outfit'] leading-tight">Founder and Co-host</div>
                            </div>
                        </div>
                    </div>
                </div>

                <div class="snap-center shrink-0 md:w-[30%] w-[95%] px-4 py-8 bg-indigo-400 rounded-2xl flex-col justify-start items-end gap-4 flex">
                    <div class="self-stretch flex-col justify-start items-end gap-2 flex">
                        <div class="self-stretch text-white text-xl font-semibold font-['Outfit'] leading-loose">“A great job of getting our statutory accounts and partnership tax...”</div>
                        <div class="self-stretch text-white text-sm font-normal font-['Outfit'] leading-tight">Another easy year for us. As always, Erin does a great job of getting our statutory accounts and partnership tax return ready, and making the process straightforward.</div>
                    </div>
                    <div class="self-stretch justify-start items-center flex">
                        <div class="justify-start items-center gap-2 flex">
                            <img class="object-cover w-12 h-12 rounded-full" src="<?php echo get_template_directory_uri() . '/assets/img/icons/ps02.png'; ?>">
                            <div class="flex-col justify-start items-start flex">
                                <div class="text-center text-white text-sm font-semibold font-['Outfit'] leading-tight">Ariana Grande
                                </div>
                                <div class="text-center text-white text-sm font-light font-['Outfit'] leading-tight">Founder and Co-host
                                </div>
                            </div>
                        </div>
                    </div>
                </div>

                <div class="snap-center shrink-0 md:w-[30%] w-[95%] px-4 py-8 bg-indigo-400 rounded-2xl flex-col justify-start items-end gap-4 flex">
                    <div class="self-stretch flex-col justify-start items-end gap-2 flex">
                        <div class="self-stretch text-white text-xl font-semibold font-['Outfit'] leading-loose">“It's a super solid service and it's quite affordable...”</div>
                        <div class="self-stretch text-white text-sm font-normal font-['Outfit'] leading-tight">Aaron and Laura have been extremely helpful with my company returns.It's a super solid service and it's quite affordable. What's not to like about TAP!</div>
                    </div>
                    <div class="self-stretch justify-start items-center flex">
                        <div class="justify-start items-center gap-2 flex">
                            <img class="object-cover w-12 h-12 rounded-full" src="<?php echo get_template_directory_uri() . '/assets/img/icons/ps03.png'; ?>">
                            <div class="flex-col justify-start items-start flex">
                                <div class="text-center text-white text-sm font-semibold font-['Outfit'] leading-tight">Ariana Grande
                                </div>
                                <div class="text-center text-white text-sm font-light font-['Outfit'] leading-tight">Founder and Co-host
                                </div>
                            </div>
                        </div>
                    </div>
                </div>

                <div class="snap-center shrink-0 md:w-[30%] w-[95%] px-4 py-8 bg-indigo-400 rounded-2xl flex-col justify-start items-end gap-4 flex">
                    <div class="self-stretch flex-col justify-start items-end gap-2 flex">
                        <div class="self-stretch text-white text-xl font-semibold font-['Outfit'] leading-loose">“A great job of getting our statutory accounts and partnership tax...”</div>
                        <div class="self-stretch text-white text-sm font-normal font-['Outfit'] leading-tight">Another easy year for us. As always, Erin does a great job of getting our statutory accounts and partnership tax return ready, and making the process straightforward.</div>
                    </div>
                    <div class="self-stretch justify-start items-center flex">
                        <div class="justify-start items-center gap-2 flex">
                            <img class="object-cover w-12 h-12 rounded-full" src="<?php echo get_template_directory_uri() . '/assets/img/icons/ps04.png'; ?>">
                            <div class="flex-col justify-start items-start flex">
                                <div class="text-center text-white text-sm font-semibold font-['Outfit'] leading-tight">Ariana Grande
                                </div>
                                <div class="text-center text-white text-sm font-light font-['Outfit'] leading-tight">Founder and Co-host
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <script>
        $(document).ready(function () {
            $('.right-scroll').click(function () {
                const element = document.getElementById("menu");
                element.scrollTo({
                    left: element.scrollLeft + 250,
                    behavior: 'smooth'
                });

            })

            $('.left-scroll').click(function () {
                const element = document.getElementById("menu");
                element.scrollTo({
                    left: element.scrollLeft - 250,
                    behavior: 'smooth'
                });

            })

            
        });
    </script>
</section>