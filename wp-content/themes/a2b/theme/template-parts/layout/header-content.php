<?php
/**
 * Template part for displaying the header content
 *
 * @link https://developer.wordpress.org/themes/basics/template-hierarchy/
 *
 * @package a2b
 */

?>

<header id="masthead" class="fixed z-50 w-full">
    <div class="flex justify-between bg-white lg:px-[100px] md:px-[60px] px-[20px] items-center">
        <div>
            <img class="object-cover w-full h-full" src="<?php echo get_template_directory_uri() . '/assets/img/logo/logo.png'; ?>">
        </div>
        <div class="lg:flex hidden gap-[64px] justify-end items-center">
            <div class="flex gap-[50px]">
                <div class="py-[30px] relative flex flex-col items-center justify-center group hover:cursor-pointer">
                    <div class="text-neutral-900 text-base font-medium font-['Outfit'] leading-normal group-hover:text-blue-600 transition-all duration-300 transform rounded-md">Who we help</div>
                    <div class="absolute top-[105%] left-[-30px] shadow-md bg-white text-neutral-900 text-base font-normal font-['Outfit'] leading-snug px-[10px] py-[10px] w-max rounded-lg flex flex-col gap-1 justify-start items-start opacity-0 scale-0 transition-all duration-300 transform origin-top group-hover:opacity-100 group-hover:scale-100">
                        <div class="hover:text-blue-600 hover:bg-violet-50 rounded px-[20px] py-3 w-full">Limited companies</div>
                        <div class="hover:text-blue-600 hover:bg-violet-50 rounded px-[20px] py-3 w-full">Sole traders</div>
                        <div class="hover:text-blue-600 hover:bg-violet-50 rounded px-[20px] py-3 w-full">Partnerships</div>
                        <div class="hover:text-blue-600 hover:bg-violet-50 rounded px-[20px] py-3 w-full">Contracters</div>
                        <div class="hover:text-blue-600 hover:bg-violet-50 rounded px-[20px] py-3 w-full">Freelancers</div>
                        <div class="hover:text-blue-600 hover:bg-violet-50 rounded px-[20px] py-3 w-full">Startups</div>
                    </div>
                </div>
                <div class="py-[30px] relative flex flex-col items-center justify-center group hover:cursor-pointer">
                    <div class="text-neutral-900 text-base font-medium font-['Outfit'] leading-normal group-hover:text-blue-600 transition-all duration-300 transform rounded-md">Services</div>
                    <div class="absolute top-[105%] left-[-30px] shadow-md bg-white text-neutral-900 text-base font-normal font-['Outfit'] leading-snug px-[10px] py-[10px] w-max rounded-lg flex flex-col gap-1 justify-center items-center opacity-0 scale-0 transition-all duration-300 transform origin-top group-hover:opacity-100 group-hover:scale-100">
                        <div class="hover:text-blue-600 hover:bg-violet-50 rounded px-[20px] py-3 w-full">Accounts preparation</div>
                        <div class="hover:text-blue-600 hover:bg-violet-50 rounded px-[20px] py-3 w-full">Tax returns & Self assessment</div>
                        <div class="hover:text-blue-600 hover:bg-violet-50 rounded px-[20px] py-3 w-full">VAT returns</div>
                        <div class="hover:text-blue-600 hover:bg-violet-50 rounded px-[20px] py-3 w-full">Bookkeeping</div>
                        <div class="hover:text-blue-600 hover:bg-violet-50 rounded px-[20px] py-3 w-full">Payroll & PAYE returns</div>
                        <div class="hover:text-blue-600 hover:bg-violet-50 rounded px-[20px] py-3 w-full">Management Accounts & Information</div>
                        <div class="hover:text-blue-600 hover:bg-violet-50 rounded px-[20px] py-3 w-full">Business plans</div>
                        <div class="hover:text-blue-600 hover:bg-violet-50 rounded px-[20px] py-3 w-full">Personal tax</div>
                        <div class="hover:text-blue-600 hover:bg-violet-50 rounded px-[20px] py-3 w-full">Tax Enquiries & Investigations</div>
                    </div>
                </div>
                <div class="py-[30px] relative flex flex-col items-center justify-center group hover:cursor-pointer">
                    <div class="text-neutral-900 text-base font-medium font-['Outfit'] leading-normal group-hover:text-blue-600 transition-all duration-300 transform rounded-md">Resources</div>
                    <div class="absolute top-[105%] left-[-30px] shadow-md bg-white text-neutral-900 text-base font-normal font-['Outfit'] leading-snug px-[10px] py-[10px] w-max rounded-lg flex flex-col gap-1 justify-center items-center opacity-0 scale-0 transition-all duration-300 transform origin-top group-hover:opacity-100 group-hover:scale-100">
                        <div class="hover:text-blue-600 hover:bg-violet-50 rounded px-[20px] py-3 w-full">Free bookkeeping software</div>
                        <div class="hover:text-blue-600 hover:bg-violet-50 rounded px-[20px] py-3 w-full">Guides & videos</div>
                        <div class="hover:text-blue-600 hover:bg-violet-50 rounded px-[20px] py-3 w-full">Blog</div>
                        <div class="hover:text-blue-600 hover:bg-violet-50 rounded px-[20px] py-3 w-full">Instant Quote</div>
                    </div>
                </div>
                <div class="py-[30px] relative flex flex-col items-center justify-center group hover:cursor-pointer">
                    <div class="text-neutral-900 text-base font-medium font-['Outfit'] leading-normal group-hover:text-blue-600 transition-all duration-300 transform rounded-md">About us</div>
                    <div class="absolute top-[105%] left-[-30px] shadow-md bg-white text-neutral-900 text-base font-normal font-['Outfit'] leading-snug px-[10px] py-[10px] w-max rounded-lg flex flex-col gap-1 justify-center items-center opacity-0 scale-0 transition-all duration-300 transform origin-top group-hover:opacity-100 group-hover:scale-100">
                        <div class="hover:text-blue-600 hover:bg-violet-50 rounded px-[20px] py-3 w-full">About us</div>
                        <div class="hover:text-blue-600 hover:bg-violet-50 rounded px-[20px] py-3 w-full">Meet the team</div>
                        <div class="hover:text-blue-600 hover:bg-violet-50 rounded px-[20px] py-3 w-full">Contact us</div>
                        <div class="hover:text-blue-600 hover:bg-violet-50 rounded px-[20px] py-3 w-full">Case studies</div>
                    </div>
                </div>
            </div>

            <div class="px-6 py-3 bg-blue-600 rounded-3xl justify-center items-center gap-2.5 flex">
                <div class="text-violet-50 text-base font-medium font-['Outfit'] capitalize leading-normal">Get an instant quote</div>
            </div>
        </div>

        <div class="py-[30px] lg:hidden flex items-center sidebar-open">
            <svg xmlns="http://www.w3.org/2000/svg" width="24" height="18" viewBox="0 0 24 18" fill="none">
            <path d="M22.9565 7.95715H1.04346C0.467168 7.95715 0 8.42432 0 9.00061C0 9.57691 0.467168 10.0441 1.04346 10.0441H22.9565C23.5328 10.0441 24 9.57691 24 9.00061C24 8.42432 23.5328 7.95715 22.9565 7.95715Z" fill="#374957"/>
            <path d="M1.04346 2.73939H22.9565C23.5328 2.73939 24 2.27222 24 1.69593C24 1.11963 23.5328 0.652466 22.9565 0.652466H1.04346C0.467168 0.652466 0 1.11963 0 1.69593C0 2.27222 0.467168 2.73939 1.04346 2.73939Z" fill="#374957"/>
            <path d="M22.9565 15.261H1.04346C0.467168 15.261 0 15.7282 0 16.3045C0 16.8808 0.467168 17.348 1.04346 17.348H22.9565C23.5328 17.348 24 16.8808 24 16.3045C24 15.7282 23.5328 15.261 22.9565 15.261Z" fill="#374957"/>
            </svg>
        </div>
    </div>

    <div class="absolute z-10 right-0 top-0 h-[100vh] w-[100vw] sidebar hidden justify-end">
        <div class="flex bg-white md:px-[40px] px-[20px] gap-[30px] flex-col pt-[30px]">
            <div class="sidebar-close flex justify-end md:pr-[20px]">
                <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none">
                    <g clip-path="url(#clip0_7_425)">
                        <path d="M13.4139 11.9999L23.7069 1.70692C23.8891 1.51832 23.9899 1.26571 23.9876 1.00352C23.9853 0.741321 23.8801 0.490508 23.6947 0.3051C23.5093 0.119692 23.2585 0.0145233 22.9963 0.0122448C22.7341 0.00996641 22.4815 0.110761 22.2929 0.292919L11.9999 10.5859L1.70691 0.292919C1.51831 0.110761 1.2657 0.00996641 1.00351 0.0122448C0.741311 0.0145233 0.490498 0.119692 0.30509 0.3051C0.119682 0.490508 0.0145129 0.741321 0.0122345 1.00352C0.00995606 1.26571 0.11075 1.51832 0.292909 1.70692L10.5859 11.9999L0.292909 22.2929C0.105437 22.4804 0.00012207 22.7348 0.00012207 22.9999C0.00012207 23.2651 0.105437 23.5194 0.292909 23.7069C0.480436 23.8944 0.734744 23.9997 0.999909 23.9997C1.26507 23.9997 1.51938 23.8944 1.70691 23.7069L11.9999 13.4139L22.2929 23.7069C22.4804 23.8944 22.7347 23.9997 22.9999 23.9997C23.2651 23.9997 23.5194 23.8944 23.7069 23.7069C23.8944 23.5194 23.9997 23.2651 23.9997 22.9999C23.9997 22.7348 23.8944 22.4804 23.7069 22.2929L13.4139 11.9999Z" fill="#374957"/>
                    </g>
                    <defs>
                        <clipPath id="clip0_7_425">
                        <rect width="24" height="24" fill="white"/>
                        </clipPath>
                    </defs>
                </svg>
            </div>
            <div class="flex flex-col gap-[10px] py-[10px]">
                <div class="flex flex-col items-start justify-start">
                    <div class="flex justify-between w-full">
                        <div class="text-neutral-900 text-base font-medium font-['Outfit'] leading-normal title" data="1">Who we help</div>
                        <div class="flex items-end justify-end open-btn" data="1">
                            <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none">
                            <path d="M17 11H13V7C13 6.73478 12.8946 6.48043 12.7071 6.29289C12.5196 6.10536 12.2652 6 12 6C11.7348 6 11.4804 6.10536 11.2929 6.29289C11.1054 6.48043 11 6.73478 11 7V11H7C6.73478 11 6.48043 11.1054 6.29289 11.2929C6.10536 11.4804 6 11.7348 6 12C6 12.2652 6.10536 12.5196 6.29289 12.7071C6.48043 12.8946 6.73478 13 7 13H11V17C11 17.2652 11.1054 17.5196 11.2929 17.7071C11.4804 17.8946 11.7348 18 12 18C12.2652 18 12.5196 17.8946 12.7071 17.7071C12.8946 17.5196 13 17.2652 13 17V13H17C17.2652 13 17.5196 12.8946 17.7071 12.7071C17.8946 12.5196 18 12.2652 18 12C18 11.7348 17.8946 11.4804 17.7071 11.2929C17.5196 11.1054 17.2652 11 17 11Z" fill="#9333ea"/>
                            </svg>
                        </div>
                        <div class="items-end justify-end close-btn hidden" data="1">
                            <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none">
                            <path d="M18 5.99994C17.8124 5.81247 17.5581 5.70715 17.293 5.70715C17.0278 5.70715 16.7735 5.81247 16.586 5.99994L12 10.5859L7.41397 5.99994C7.22644 5.81247 6.97213 5.70715 6.70697 5.70715C6.44181 5.70715 6.1875 5.81247 5.99997 5.99994C5.8125 6.18747 5.70718 6.44178 5.70718 6.70694C5.70718 6.9721 5.8125 7.22641 5.99997 7.41394L10.586 11.9999L5.99997 16.5859C5.8125 16.7735 5.70718 17.0278 5.70718 17.2929C5.70718 17.5581 5.8125 17.8124 5.99997 17.9999C6.1875 18.1874 6.44181 18.2927 6.70697 18.2927C6.97213 18.2927 7.22644 18.1874 7.41397 17.9999L12 13.4139L16.586 17.9999C16.7735 18.1874 17.0278 18.2927 17.293 18.2927C17.5581 18.2927 17.8124 18.1874 18 17.9999C18.1874 17.8124 18.2928 17.5581 18.2928 17.2929C18.2928 17.0278 18.1874 16.7735 18 16.5859L13.414 11.9999L18 7.41394C18.1874 7.22641 18.2928 6.9721 18.2928 6.70694C18.2928 6.44178 18.1874 6.18747 18 5.99994Z" fill="#c084fc"/>
                            </svg>
                        </div>
                    </div>
                    <div data="1" class="menu px-5 py-3 w-max rounded-md text-neutral-900 flex-col gap-5 justify-center items-start hidden transition-all duration-300 transform origin-top ">
                        <div>Limited companies</div>
                        <div>Sole traders</div>
                        <div>Partnerships</div>
                        <div>Contracters</div>
                        <div>Freelancers</div>
                        <div>Startups</div>
                    </div>
                </div>

                <div class="flex flex-col items-start justify-start">
                    <div class="flex justify-between w-full">
                        <div class="text-neutral-900 text-base font-medium font-['Outfit'] leading-normal title" data="2">Services</div>
                        <div class="flex items-end justify-end open-btn" data="2">
                            <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none">
                            <path d="M17 11H13V7C13 6.73478 12.8946 6.48043 12.7071 6.29289C12.5196 6.10536 12.2652 6 12 6C11.7348 6 11.4804 6.10536 11.2929 6.29289C11.1054 6.48043 11 6.73478 11 7V11H7C6.73478 11 6.48043 11.1054 6.29289 11.2929C6.10536 11.4804 6 11.7348 6 12C6 12.2652 6.10536 12.5196 6.29289 12.7071C6.48043 12.8946 6.73478 13 7 13H11V17C11 17.2652 11.1054 17.5196 11.2929 17.7071C11.4804 17.8946 11.7348 18 12 18C12.2652 18 12.5196 17.8946 12.7071 17.7071C12.8946 17.5196 13 17.2652 13 17V13H17C17.2652 13 17.5196 12.8946 17.7071 12.7071C17.8946 12.5196 18 12.2652 18 12C18 11.7348 17.8946 11.4804 17.7071 11.2929C17.5196 11.1054 17.2652 11 17 11Z" fill="#9333ea"/>
                            </svg>
                        </div>
                        <div class="items-end justify-end close-btn hidden" data="2">
                            <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none">
                            <path d="M18 5.99994C17.8124 5.81247 17.5581 5.70715 17.293 5.70715C17.0278 5.70715 16.7735 5.81247 16.586 5.99994L12 10.5859L7.41397 5.99994C7.22644 5.81247 6.97213 5.70715 6.70697 5.70715C6.44181 5.70715 6.1875 5.81247 5.99997 5.99994C5.8125 6.18747 5.70718 6.44178 5.70718 6.70694C5.70718 6.9721 5.8125 7.22641 5.99997 7.41394L10.586 11.9999L5.99997 16.5859C5.8125 16.7735 5.70718 17.0278 5.70718 17.2929C5.70718 17.5581 5.8125 17.8124 5.99997 17.9999C6.1875 18.1874 6.44181 18.2927 6.70697 18.2927C6.97213 18.2927 7.22644 18.1874 7.41397 17.9999L12 13.4139L16.586 17.9999C16.7735 18.1874 17.0278 18.2927 17.293 18.2927C17.5581 18.2927 17.8124 18.1874 18 17.9999C18.1874 17.8124 18.2928 17.5581 18.2928 17.2929C18.2928 17.0278 18.1874 16.7735 18 16.5859L13.414 11.9999L18 7.41394C18.1874 7.22641 18.2928 6.9721 18.2928 6.70694C18.2928 6.44178 18.1874 6.18747 18 5.99994Z" fill="#c084fc"/>
                            </svg>
                        </div>
                    </div>
                    <div data="2" class="menu px-5 py-3 w-max rounded-md text-neutral-900 flex-col gap-5 justify-center items-start hidden transition-all duration-300 transform origin-top ">
                        <div>Accounts preparation</div>
                        <div>Tax returns & Self assessment</div>
                        <div>VAT returns</div>
                        <div>Bookkeeping</div>
                        <div>Payroll & PAYE returns</div>
                        <div>Management Accounts & Information</div>
                        <div>Business plans</div>
                        <div>Personal tax</div>
                        <div>Tax Enquiries & Investigations</div>
                    </div>
                </div>

                <div class="flex flex-col items-start justify-start">
                    <div class="flex justify-between w-full">
                        <div class="text-neutral-900 text-base font-medium font-['Outfit'] leading-normal title" data="3">Resources</div>
                        <div class="flex items-end justify-end open-btn" data="3">
                            <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none">
                            <path d="M17 11H13V7C13 6.73478 12.8946 6.48043 12.7071 6.29289C12.5196 6.10536 12.2652 6 12 6C11.7348 6 11.4804 6.10536 11.2929 6.29289C11.1054 6.48043 11 6.73478 11 7V11H7C6.73478 11 6.48043 11.1054 6.29289 11.2929C6.10536 11.4804 6 11.7348 6 12C6 12.2652 6.10536 12.5196 6.29289 12.7071C6.48043 12.8946 6.73478 13 7 13H11V17C11 17.2652 11.1054 17.5196 11.2929 17.7071C11.4804 17.8946 11.7348 18 12 18C12.2652 18 12.5196 17.8946 12.7071 17.7071C12.8946 17.5196 13 17.2652 13 17V13H17C17.2652 13 17.5196 12.8946 17.7071 12.7071C17.8946 12.5196 18 12.2652 18 12C18 11.7348 17.8946 11.4804 17.7071 11.2929C17.5196 11.1054 17.2652 11 17 11Z" fill="#9333ea"/>
                            </svg>
                        </div>
                        <div class="items-end justify-end close-btn hidden" data="3">
                            <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none">
                            <path d="M18 5.99994C17.8124 5.81247 17.5581 5.70715 17.293 5.70715C17.0278 5.70715 16.7735 5.81247 16.586 5.99994L12 10.5859L7.41397 5.99994C7.22644 5.81247 6.97213 5.70715 6.70697 5.70715C6.44181 5.70715 6.1875 5.81247 5.99997 5.99994C5.8125 6.18747 5.70718 6.44178 5.70718 6.70694C5.70718 6.9721 5.8125 7.22641 5.99997 7.41394L10.586 11.9999L5.99997 16.5859C5.8125 16.7735 5.70718 17.0278 5.70718 17.2929C5.70718 17.5581 5.8125 17.8124 5.99997 17.9999C6.1875 18.1874 6.44181 18.2927 6.70697 18.2927C6.97213 18.2927 7.22644 18.1874 7.41397 17.9999L12 13.4139L16.586 17.9999C16.7735 18.1874 17.0278 18.2927 17.293 18.2927C17.5581 18.2927 17.8124 18.1874 18 17.9999C18.1874 17.8124 18.2928 17.5581 18.2928 17.2929C18.2928 17.0278 18.1874 16.7735 18 16.5859L13.414 11.9999L18 7.41394C18.1874 7.22641 18.2928 6.9721 18.2928 6.70694C18.2928 6.44178 18.1874 6.18747 18 5.99994Z" fill="#c084fc"/>
                            </svg>
                        </div>
                    </div>
                    <div data="3" class="menu px-5 py-3 w-max rounded-md text-neutral-900 flex-col gap-5 justify-center items-start hidden transition-all duration-300 transform origin-top ">
                        <div>Free bookkeeping software</div>
                        <div>Guides & videos</div>
                        <div>Blog</div>
                        <div>Instant Quote</div>
                    </div>
                </div>

                <div class="flex flex-col items-start justify-start">
                    <div class="flex justify-between w-full">
                        <div class="text-neutral-900 text-base font-medium font-['Outfit'] leading-normal title" data="4">About us</div>
                        <div class="flex items-end justify-end open-btn" data="4">
                            <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none">
                            <path d="M17 11H13V7C13 6.73478 12.8946 6.48043 12.7071 6.29289C12.5196 6.10536 12.2652 6 12 6C11.7348 6 11.4804 6.10536 11.2929 6.29289C11.1054 6.48043 11 6.73478 11 7V11H7C6.73478 11 6.48043 11.1054 6.29289 11.2929C6.10536 11.4804 6 11.7348 6 12C6 12.2652 6.10536 12.5196 6.29289 12.7071C6.48043 12.8946 6.73478 13 7 13H11V17C11 17.2652 11.1054 17.5196 11.2929 17.7071C11.4804 17.8946 11.7348 18 12 18C12.2652 18 12.5196 17.8946 12.7071 17.7071C12.8946 17.5196 13 17.2652 13 17V13H17C17.2652 13 17.5196 12.8946 17.7071 12.7071C17.8946 12.5196 18 12.2652 18 12C18 11.7348 17.8946 11.4804 17.7071 11.2929C17.5196 11.1054 17.2652 11 17 11Z" fill="#9333ea"/>
                            </svg>
                        </div>
                        <div class="items-end justify-end close-btn hidden" data="4">
                            <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none">
                            <path d="M18 5.99994C17.8124 5.81247 17.5581 5.70715 17.293 5.70715C17.0278 5.70715 16.7735 5.81247 16.586 5.99994L12 10.5859L7.41397 5.99994C7.22644 5.81247 6.97213 5.70715 6.70697 5.70715C6.44181 5.70715 6.1875 5.81247 5.99997 5.99994C5.8125 6.18747 5.70718 6.44178 5.70718 6.70694C5.70718 6.9721 5.8125 7.22641 5.99997 7.41394L10.586 11.9999L5.99997 16.5859C5.8125 16.7735 5.70718 17.0278 5.70718 17.2929C5.70718 17.5581 5.8125 17.8124 5.99997 17.9999C6.1875 18.1874 6.44181 18.2927 6.70697 18.2927C6.97213 18.2927 7.22644 18.1874 7.41397 17.9999L12 13.4139L16.586 17.9999C16.7735 18.1874 17.0278 18.2927 17.293 18.2927C17.5581 18.2927 17.8124 18.1874 18 17.9999C18.1874 17.8124 18.2928 17.5581 18.2928 17.2929C18.2928 17.0278 18.1874 16.7735 18 16.5859L13.414 11.9999L18 7.41394C18.1874 7.22641 18.2928 6.9721 18.2928 6.70694C18.2928 6.44178 18.1874 6.18747 18 5.99994Z" fill="#c084fc"/>
                            </svg>
                        </div>
                    </div>
                    <div data="4" class="menu px-5 py-3 w-max rounded-md text-neutral-900 flex-col gap-5 justify-center items-start hidden transition-all duration-300 transform origin-top ">
                        <div>About us</div>
                        <div>Meet the team</div>
                        <div>Contact us</div>
                        <div>Case studies</div>
                    </div>
                </div>
            </div>

            <div class="px-6 py-3 bg-blue-600 rounded-3xl justify-center items-center gap-2.5 flex">
                <div class="text-violet-50 text-base font-medium font-['Outfit'] capitalize leading-normal">Get an instant quote</div>
            </div>
        </div>

        
    </div>

    <script>
        $(document).ready(function () {
            $('.sidebar-open').click(function () {
                $('.sidebar').removeClass('hidden');
                $('.sidebar').addClass('lg:hidden flex');
            })

            $('.sidebar-close').click(function () {
                $('.sidebar').removeClass('lg:hidden flex');
                $('.sidebar').addClass('hidden');
            })

            $('.open-btn').click(function() {
                $('.menu').addClass('hidden');
                $('.menu').removeClass('flex');
                $('.close-btn').removeClass('flex');
                $('.close-btn').addClass('hidden');
                $('.title').removeClass('!text-blue-600')
                
                $('.open-btn').removeClass('hidden');
                $('.open-btn').addClass('flex');

                var data = $(this).attr('data'); 
                
                var targetMenu = $('.menu[data="' + data + '"]');
                targetMenu.removeClass('hidden');
                targetMenu.addClass('flex');

                var title = $('.title[data="' + data + '"]');
                title.addClass('!text-blue-600');

                $(this).removeClass('flex');
                $(this).addClass('hidden');

                var closeBtn = $('.close-btn[data="' + data + '"]');
                closeBtn.removeClass('hidden');
                closeBtn.addClass('flex');
            });

            $('.close-btn').click(function() {
                var data = $(this).attr('data'); 
                
                var targetMenu = $('.menu[data="' + data + '"]');
                targetMenu.addClass('hidden');
                targetMenu.removeClass('flex');

                var title = $('.title[data="' + data + '"]');
                title.removeClass('!text-blue-600');

                $(this).removeClass('flex');
                $(this).addClass('hidden');

                var openBtn = $('.open-btn[data="' + data + '"]');
                openBtn.removeClass('hidden');
                openBtn.addClass('flex');
            });

        })

    </script>
    <style>
        select {
            -webkit-appearance: none;
            -moz-appearance: none;
            background: transparent;
            background-image: url("data:image/svg+xml;utf8,<svg xmlns='http://www.w3.org/2000/svg' width='16' height='16' viewBox='0 0 16 16' fill='none'><path d='M4.27349 6H11.7268C11.8587 6.00055 11.9874 6.04019 12.0967 6.1139C12.206 6.18761 12.2911 6.29208 12.341 6.4141C12.391 6.53612 12.4036 6.67021 12.3773 6.79942C12.3511 6.92863 12.2871 7.04715 12.1935 7.14L8.47349 10.86C8.41152 10.9225 8.33778 10.9721 8.25654 11.0059C8.1753 11.0398 8.08817 11.0572 8.00016 11.0572C7.91215 11.0572 7.82501 11.0398 7.74377 11.0059C7.66253 10.9721 7.5888 10.9225 7.52682 10.86L3.80682 7.14C3.71321 7.04715 3.64923 6.92863 3.62297 6.79942C3.59672 6.67021 3.60936 6.53612 3.65931 6.4141C3.70926 6.29208 3.79427 6.18761 3.9036 6.1139C4.01292 6.04019 4.14164 6.00055 4.27349 6Z' fill='%23C2C6CE'/></svg>");
            background-repeat: no-repeat;
            background-position-x: calc(100% - 10px);
            background-position-y: 50%;
            scrollbar-width: none; /* Firefox */
            -ms-overflow-style: none;
        }

        select::-webkit-scrollbar {
            display: none;
        }

        option:hover {
            background: #f5f3ff; 
        }

    </style>

</header>
