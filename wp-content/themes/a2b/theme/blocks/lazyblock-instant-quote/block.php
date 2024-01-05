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
        <div class="flex flex-col justify-center items-center">
            <div class="text-blue-600 text-3xl font-semibold font-['Outfit'] leading-10">Instant Quote</div>
            <div class="w-96 text-center text-neutral-900 text-sm font-normal font-['Outfit'] leading-tight">We charge a monthly fee based on your business type</div>
        </div>

        <div class="grid lg:grid-cols-2 grid-cols-1 justify-start items-center gap-8 gap-y-4 lg:w-[60%]">
            <div class="flex-col justify-start items-start gap-1 flex">
                <div class="self-stretch justify-start items-start gap-2 flex">
                    <div class="grow shrink basis-0 text-gray-500 text-sm font-normal font-['Outfit'] leading-tight tracking-tight">Your name</div>
                </div>
                <input type="text" placeholder="Enter name" class="self-stretch px-3 py-2.5 rounded-lg border border-neutral-300 justify-center items-center gap-2 flex"/>
            </div>
            <div class="flex-col justify-start items-start gap-1 flex">
                <div class="self-stretch justify-start items-start gap-2 flex">
                    <div class="grow shrink basis-0 text-gray-500 text-sm font-normal font-['Outfit'] leading-tight tracking-tight">Select turnover</div>
                </div>
                <select class="self-stretch px-3 py-2.5 bg-white rounded-lg border border-neutral-300 justify-center items-center gap-2 flex">
                    <option value="">Select turnover</option>
                        <option value="BAND_0">£0 to £20,000</option>
                        <option value="BAND_1">£20,001 to £85,000</option>
                        <option value="BAND_2">£85,001 to £200,000</option>
                        <option value="BAND_3">£200,001 to £300,000</option>
                        <option value="BAND_4">£300,001 to £400,000</option>
                        <option value="BAND_5">£400,001 to £500,000</option>
                        <option value="BAND_6">£500,001 to £600,000</option>
                        <option value="BAND_7">£600,001 to £700,000</option>
                        <option value="BAND_8">£700,001 to £800,000</option>
                        <option value="BAND_9">Turnover: £800,001 to £900,000</option>
                        <option value="BAND_10">£900,001 to £1,000,000</option>
                        <option value="BAND_11">£1,000,000+</option>
                </select>
            </div>
            <div class="flex-col justify-start items-start gap-1 flex">
                <div class="self-stretch justify-start items-start gap-2 flex">
                    <div class="grow shrink basis-0 text-gray-500 text-sm font-normal font-['Outfit'] leading-tight tracking-tight">Your email</div>
                </div>
                <input type="text" placeholder="Enter email" class="self-stretch px-3 py-2.5 rounded-lg border border-neutral-300 justify-center items-center gap-2 flex"/>
            </div>
            <div class="flex-col justify-start items-start gap-1 flex">
                <div class="self-stretch justify-start items-start gap-2 flex">
                    <div class="grow shrink basis-0 text-gray-500 text-sm font-normal font-['Outfit'] leading-tight tracking-tight">Need VAT returns completing?</div>
                </div>
                <select class="self-stretch px-3 py-2.5 bg-white rounded-lg border border-neutral-300 justify-center items-center gap-2 flex">
                    <option value="">Need VAT returns completing?</option>
                    <option value="NO">No</option>
                    <option value="YES">Yes</option> 
                </select>
            </div>
            <div class="flex-col justify-start items-start gap-1 flex">
                <div class="self-stretch justify-start items-start gap-2 flex">
                    <div class="grow shrink basis-0 text-gray-500 text-sm font-normal font-['Outfit'] leading-tight tracking-tight">Your telephone number</div>
                </div>
                <input type="text" placeholder="Enter telephone number" class="self-stretch px-3 py-2.5 rounded-lg border border-neutral-300 justify-center items-center gap-2 flex"/>
            </div>
            <div class="flex-col justify-start items-start gap-1 flex">
                <div class="self-stretch justify-start items-start gap-2 flex">
                    <div class="grow shrink basis-0 text-gray-500 text-sm font-normal font-['Outfit'] leading-tight tracking-tight">Need payroll managing?</div>
                </div>
                <select class="self-stretch px-3 py-2.5 bg-white rounded-lg border border-neutral-300 justify-center items-center gap-2 flex">
                    <option value="">Need VAT returns completing?</option>
                    <option value="NO">No</option>
                    <option value="YES">Yes</option> 
                </select>
            </div>
            <div class="flex-col justify-start items-start gap-1 flex">
                <div class="self-stretch justify-start items-start gap-2 flex">
                    <div class="grow shrink basis-0 text-gray-500 text-sm font-normal font-['Outfit'] leading-tight tracking-tight">Select business type</div>
                </div>
                <select class="self-stretch px-3 py-2.5 bg-white rounded-lg border border-neutral-300 justify-center items-center gap-2 flex">
                    <option value="">Select business type</option>
                    <option value="SOLE_TRADER">Sole Trader</option>
                    <option value="LIMITED_COMPANY">Limited Company</option>
                    <option value="PARTNERSHIP">Partnership</option>
                    <option value="LLP">LLP</option>
                </select>
            </div>
            <div class="flex-col justify-start items-start gap-1 flex">
                <div class="self-stretch justify-start items-start gap-2 flex">
                    <div class="grow shrink basis-0 text-gray-500 text-sm font-normal font-['Outfit'] leading-tight tracking-tight">Need us to complete your bookkeeping?</div>
                </div>
                <select class="self-stretch px-3 py-2.5 bg-white rounded-lg border border-neutral-300 justify-center items-center gap-2 flex">
                    <option value="">Need us to complete your bookkeeping?</option>
                    <option value="NO">No</option>
                    <option value="YES">Yes</option> 
                </select>
            </div>
            
        </div>

        <div class="px-6 py-3 bg-blue-600 rounded-3xl justify-center items-center gap-2.5 inline-flex">
            <div class="text-violet-50 text-base font-medium font-['Outfit'] capitalize leading-normal">Get an instant quote</div>
        </div>
    </div>
</section>