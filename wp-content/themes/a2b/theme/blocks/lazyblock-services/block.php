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
    <div class="flex flex-col gap-[32px] lg:px-[100px] md:px-[60px] px-[20px] md:py-[60px] py-[40px]  items-center">
        <div class="flex flex-col items-center gap-2 lg:w-[47%] md:w-[60%]">
            <div class="text-center text-blue-600 text-3xl font-semibold font-['Outfit'] leading-10">Our Services to You</div>
            <div class="text-center text-neutral-900 text-sm font-normal font-['Outfit'] leading-tight">You can call us whenever you need help and advice, without fear of being charged every time you make a phone call. Here are some of our services that we can offer you.</div>
        </div>

        <div class="lg:px-[60px] grid lg:grid-cols-3 md:grid-cols-2 grid-cols-1 gap-4">
            <div class="services text-neutral-900 md:px-7 md:py-5 px-4 py-3 bg-violet-50 rounded-lg justify-start items-center gap-3 flex">
                <div class="relative">
                    <svg xmlns="http://www.w3.org/2000/svg" width="25" height="24" viewBox="0 0 25 24" fill="none">
                    <path d="M22.25 19.5C22.25 19.6989 22.171 19.8897 22.0303 20.0303C21.8897 20.171 21.6989 20.25 21.5 20.25H3.5C3.30109 20.25 3.11032 20.171 2.96967 20.0303C2.82902 19.8897 2.75 19.6989 2.75 19.5V4.5C2.75 4.30109 2.82902 4.11032 2.96967 3.96967C3.11032 3.82902 3.30109 3.75 3.5 3.75C3.69891 3.75 3.88968 3.82902 4.03033 3.96967C4.17098 4.11032 4.25 4.30109 4.25 4.5V14.6897L8.96937 9.96937C9.03903 9.89964 9.12175 9.84432 9.21279 9.80658C9.30384 9.76884 9.40144 9.74941 9.5 9.74941C9.59856 9.74941 9.69616 9.76884 9.78721 9.80658C9.87825 9.84432 9.96097 9.89964 10.0306 9.96937L12.5 12.4397L17.4397 7.5H15.5C15.3011 7.5 15.1103 7.42098 14.9697 7.28033C14.829 7.13968 14.75 6.94891 14.75 6.75C14.75 6.55109 14.829 6.36032 14.9697 6.21967C15.1103 6.07902 15.3011 6 15.5 6H19.25C19.4489 6 19.6397 6.07902 19.7803 6.21967C19.921 6.36032 20 6.55109 20 6.75V10.5C20 10.6989 19.921 10.8897 19.7803 11.0303C19.6397 11.171 19.4489 11.25 19.25 11.25C19.0511 11.25 18.8603 11.171 18.7197 11.0303C18.579 10.8897 18.5 10.6989 18.5 10.5V8.56031L13.0306 14.0306C12.961 14.1004 12.8783 14.1557 12.7872 14.1934C12.6962 14.2312 12.5986 14.2506 12.5 14.2506C12.4014 14.2506 12.3038 14.2312 12.2128 14.1934C12.1217 14.1557 12.039 14.1004 11.9694 14.0306L9.5 11.5603L4.25 16.8103V18.75H21.5C21.6989 18.75 21.8897 18.829 22.0303 18.9697C22.171 19.1103 22.25 19.3011 22.25 19.5Z" fill="#0F1016"/>
                    </svg>
                </div>
                <div class="text-base font-medium font-['Outfit'] leading-normal">Accounts Preparation</div>
            </div>
            <div class="services text-neutral-900 md:px-7 md:py-5 px-4 py-3 bg-violet-50 rounded-lg justify-start items-center gap-3 flex">
                <div class="relative">
                    <svg xmlns="http://www.w3.org/2000/svg" width="25" height="24" viewBox="0 0 25 24" fill="none">
                    <path d="M12.5 2.25C10.5716 2.25 8.68657 2.82183 7.08319 3.89317C5.47982 4.96451 4.23013 6.48726 3.49218 8.26884C2.75422 10.0504 2.56114 12.0108 2.93735 13.9021C3.31355 15.7934 4.24215 17.5307 5.60571 18.8943C6.96928 20.2579 8.70656 21.1865 10.5979 21.5627C12.4892 21.9389 14.4496 21.7458 16.2312 21.0078C18.0127 20.2699 19.5355 19.0202 20.6068 17.4168C21.6782 15.8134 22.25 13.9284 22.25 12C22.2473 9.41498 21.2192 6.93661 19.3913 5.10872C17.5634 3.28084 15.085 2.25273 12.5 2.25ZM10.0278 15.75H14.9722C14.4688 17.4694 13.625 19.0191 12.5 20.2397C11.375 19.0191 10.5313 17.4694 10.0278 15.75ZM9.6875 14.25C9.43876 12.7603 9.43876 11.2397 9.6875 9.75H15.3125C15.5613 11.2397 15.5613 12.7603 15.3125 14.25H9.6875ZM4.25 12C4.24935 11.2392 4.35442 10.4819 4.56219 9.75H8.16782C7.94407 11.2417 7.94407 12.7583 8.16782 14.25H4.56219C4.35442 13.5181 4.24935 12.7608 4.25 12ZM14.9722 8.25H10.0278C10.5313 6.53062 11.375 4.98094 12.5 3.76031C13.625 4.98094 14.4688 6.53062 14.9722 8.25ZM16.8322 9.75H20.4378C20.8541 11.2211 20.8541 12.7789 20.4378 14.25H16.8322C17.0559 12.7583 17.0559 11.2417 16.8322 9.75ZM19.8472 8.25H16.5256C16.1429 6.74392 15.5001 5.31623 14.6263 4.03125C15.7427 4.33127 16.7839 4.86162 17.6831 5.58818C18.5823 6.31475 19.3194 7.22146 19.8472 8.25ZM10.3738 4.03125C9.4999 5.31623 8.85713 6.74392 8.47438 8.25H5.15282C5.68056 7.22146 6.41772 6.31475 7.31689 5.58818C8.21606 4.86162 9.25733 4.33127 10.3738 4.03125ZM5.15282 15.75H8.47438C8.85713 17.2561 9.4999 18.6838 10.3738 19.9688C9.25733 19.6687 8.21606 19.1384 7.31689 18.4118C6.41772 17.6852 5.68056 16.7785 5.15282 15.75ZM14.6263 19.9688C15.5001 18.6838 16.1429 17.2561 16.5256 15.75H19.8472C19.3194 16.7785 18.5823 17.6852 17.6831 18.4118C16.7839 19.1384 15.7427 19.6687 14.6263 19.9688Z" fill="#0F1016"/>
                    </svg>
                </div>
                <div class="text-base font-medium font-['Outfit'] leading-normal">Tax Returns and Self Assessment</div>
            </div>
            <div class="services text-neutral-900 md:px-7 md:py-5 px-4 py-3 bg-violet-50 rounded-lg justify-start items-center gap-3 flex">
                <div class="relative">
                    <svg xmlns="http://www.w3.org/2000/svg" width="25" height="24" viewBox="0 0 25 24" fill="none">
                    <path d="M12.5 2.25C10.5716 2.25 8.68657 2.82183 7.08319 3.89317C5.47982 4.96451 4.23013 6.48726 3.49218 8.26884C2.75422 10.0504 2.56114 12.0108 2.93735 13.9021C3.31355 15.7934 4.24215 17.5307 5.60571 18.8943C6.96928 20.2579 8.70656 21.1865 10.5979 21.5627C12.4892 21.9389 14.4496 21.7458 16.2312 21.0078C18.0127 20.2699 19.5355 19.0202 20.6068 17.4168C21.6782 15.8134 22.25 13.9284 22.25 12C22.2473 9.41498 21.2192 6.93661 19.3913 5.10872C17.5634 3.28084 15.085 2.25273 12.5 2.25ZM10.0278 15.75H14.9722C14.4688 17.4694 13.625 19.0191 12.5 20.2397C11.375 19.0191 10.5313 17.4694 10.0278 15.75ZM9.6875 14.25C9.43876 12.7603 9.43876 11.2397 9.6875 9.75H15.3125C15.5613 11.2397 15.5613 12.7603 15.3125 14.25H9.6875ZM4.25 12C4.24935 11.2392 4.35442 10.4819 4.56219 9.75H8.16782C7.94407 11.2417 7.94407 12.7583 8.16782 14.25H4.56219C4.35442 13.5181 4.24935 12.7608 4.25 12ZM14.9722 8.25H10.0278C10.5313 6.53062 11.375 4.98094 12.5 3.76031C13.625 4.98094 14.4688 6.53062 14.9722 8.25ZM16.8322 9.75H20.4378C20.8541 11.2211 20.8541 12.7789 20.4378 14.25H16.8322C17.0559 12.7583 17.0559 11.2417 16.8322 9.75ZM19.8472 8.25H16.5256C16.1429 6.74392 15.5001 5.31623 14.6263 4.03125C15.7427 4.33127 16.7839 4.86162 17.6831 5.58818C18.5823 6.31475 19.3194 7.22146 19.8472 8.25ZM10.3738 4.03125C9.4999 5.31623 8.85713 6.74392 8.47438 8.25H5.15282C5.68056 7.22146 6.41772 6.31475 7.31689 5.58818C8.21606 4.86162 9.25733 4.33127 10.3738 4.03125ZM5.15282 15.75H8.47438C8.85713 17.2561 9.4999 18.6838 10.3738 19.9688C9.25733 19.6687 8.21606 19.1384 7.31689 18.4118C6.41772 17.6852 5.68056 16.7785 5.15282 15.75ZM14.6263 19.9688C15.5001 18.6838 16.1429 17.2561 16.5256 15.75H19.8472C19.3194 16.7785 18.5823 17.6852 17.6831 18.4118C16.7839 19.1384 15.7427 19.6687 14.6263 19.9688Z" fill="#0F1016"/>
                    </svg>
                </div>
                <div class="text-base font-medium font-['Outfit'] leading-normal">VAT Returns</div>
            </div>
            <div class="services text-neutral-900 self-stretch md:px-7 md:py-5 px-4 py-3 bg-violet-50 rounded-lg justify-start items-center gap-3 flex">
                <div class="relative">
                    <svg xmlns="http://www.w3.org/2000/svg" width="25" height="24" viewBox="0 0 25 24" fill="none">
                    <path d="M12.5 2.25C10.5716 2.25 8.68657 2.82183 7.08319 3.89317C5.47982 4.96451 4.23013 6.48726 3.49218 8.26884C2.75422 10.0504 2.56114 12.0108 2.93735 13.9021C3.31355 15.7934 4.24215 17.5307 5.60571 18.8943C6.96928 20.2579 8.70656 21.1865 10.5979 21.5627C12.4892 21.9389 14.4496 21.7458 16.2312 21.0078C18.0127 20.2699 19.5355 19.0202 20.6068 17.4168C21.6782 15.8134 22.25 13.9284 22.25 12C22.2473 9.41498 21.2192 6.93661 19.3913 5.10872C17.5634 3.28084 15.085 2.25273 12.5 2.25ZM12.5 20.25C10.8683 20.25 9.27326 19.7661 7.91655 18.8596C6.55984 17.9531 5.50242 16.6646 4.878 15.1571C4.25358 13.6496 4.0902 11.9908 4.40853 10.3905C4.72685 8.79016 5.51259 7.32015 6.66637 6.16637C7.82016 5.01259 9.29017 4.22685 10.8905 3.90852C12.4909 3.59019 14.1497 3.75357 15.6571 4.37799C17.1646 5.00242 18.4531 6.05984 19.3596 7.41655C20.2661 8.77325 20.75 10.3683 20.75 12C20.7475 14.1873 19.8775 16.2843 18.3309 17.8309C16.7843 19.3775 14.6873 20.2475 12.5 20.25ZM18.5 12C18.5 12.1989 18.421 12.3897 18.2803 12.5303C18.1397 12.671 17.9489 12.75 17.75 12.75H14.3103L16.7806 15.2194C16.8503 15.2891 16.9056 15.3718 16.9433 15.4628C16.981 15.5539 17.0004 15.6515 17.0004 15.75C17.0004 15.8485 16.981 15.9461 16.9433 16.0372C16.9056 16.1282 16.8503 16.2109 16.7806 16.2806C16.7109 16.3503 16.6282 16.4056 16.5372 16.4433C16.4461 16.481 16.3486 16.5004 16.25 16.5004C16.1515 16.5004 16.0539 16.481 15.9628 16.4433C15.8718 16.4056 15.7891 16.3503 15.7194 16.2806L11.9694 12.5306C11.8644 12.4257 11.7928 12.292 11.7639 12.1465C11.7349 12.0009 11.7497 11.85 11.8065 11.7129C11.8634 11.5758 11.9596 11.4586 12.083 11.3762C12.2065 11.2938 12.3516 11.2499 12.5 11.25H17.75C17.9489 11.25 18.1397 11.329 18.2803 11.4697C18.421 11.6103 18.5 11.8011 18.5 12Z" fill="#0F1016"/>
                    </svg>
                </div>
                <div class="text-base font-medium font-['Outfit'] leading-normal">Bookkeeping</div>
            </div>
            <div class="services text-neutral-900 self-stretch md:px-7 md:py-5 px-4 py-3 bg-violet-50 rounded-lg justify-start items-center gap-3 flex">
                <div class="relative">
                    <svg xmlns="http://www.w3.org/2000/svg" width="25" height="24" viewBox="0 0 25 24" fill="none">
                    <path d="M12.5 2.25C10.5716 2.25 8.68657 2.82183 7.08319 3.89317C5.47982 4.96451 4.23013 6.48726 3.49218 8.26884C2.75422 10.0504 2.56114 12.0108 2.93735 13.9021C3.31355 15.7934 4.24215 17.5307 5.60571 18.8943C6.96928 20.2579 8.70656 21.1865 10.5979 21.5627C12.4892 21.9389 14.4496 21.7458 16.2312 21.0078C18.0127 20.2699 19.5355 19.0202 20.6068 17.4168C21.6782 15.8134 22.25 13.9284 22.25 12C22.2473 9.41498 21.2192 6.93661 19.3913 5.10872C17.5634 3.28084 15.085 2.25273 12.5 2.25ZM10.0278 15.75H14.9722C14.4688 17.4694 13.625 19.0191 12.5 20.2397C11.375 19.0191 10.5313 17.4694 10.0278 15.75ZM9.6875 14.25C9.43876 12.7603 9.43876 11.2397 9.6875 9.75H15.3125C15.5613 11.2397 15.5613 12.7603 15.3125 14.25H9.6875ZM4.25 12C4.24935 11.2392 4.35442 10.4819 4.56219 9.75H8.16782C7.94407 11.2417 7.94407 12.7583 8.16782 14.25H4.56219C4.35442 13.5181 4.24935 12.7608 4.25 12ZM14.9722 8.25H10.0278C10.5313 6.53062 11.375 4.98094 12.5 3.76031C13.625 4.98094 14.4688 6.53062 14.9722 8.25ZM16.8322 9.75H20.4378C20.8541 11.2211 20.8541 12.7789 20.4378 14.25H16.8322C17.0559 12.7583 17.0559 11.2417 16.8322 9.75ZM19.8472 8.25H16.5256C16.1429 6.74392 15.5001 5.31623 14.6263 4.03125C15.7427 4.33127 16.7839 4.86162 17.6831 5.58818C18.5823 6.31475 19.3194 7.22146 19.8472 8.25ZM10.3738 4.03125C9.4999 5.31623 8.85713 6.74392 8.47438 8.25H5.15282C5.68056 7.22146 6.41772 6.31475 7.31689 5.58818C8.21606 4.86162 9.25733 4.33127 10.3738 4.03125ZM5.15282 15.75H8.47438C8.85713 17.2561 9.4999 18.6838 10.3738 19.9688C9.25733 19.6687 8.21606 19.1384 7.31689 18.4118C6.41772 17.6852 5.68056 16.7785 5.15282 15.75ZM14.6263 19.9688C15.5001 18.6838 16.1429 17.2561 16.5256 15.75H19.8472C19.3194 16.7785 18.5823 17.6852 17.6831 18.4118C16.7839 19.1384 15.7427 19.6687 14.6263 19.9688Z" fill="#0F1016"/>
                    </svg>
                </div>
                <div class="text-base font-medium font-['Outfit'] leading-normal">Business Plans</div>
            </div>
            <div class="services text-neutral-900 self-stretch md:px-7 md:py-5 px-4 py-3 bg-violet-50 rounded-lg justify-start items-center gap-3 flex">
                <div class="relative">
                    <svg xmlns="http://www.w3.org/2000/svg" width="25" height="24" viewBox="0 0 25 24" fill="none">
                    <path d="M12.5 2.25C10.5716 2.25 8.68657 2.82183 7.08319 3.89317C5.47982 4.96451 4.23013 6.48726 3.49218 8.26884C2.75422 10.0504 2.56114 12.0108 2.93735 13.9021C3.31355 15.7934 4.24215 17.5307 5.60571 18.8943C6.96928 20.2579 8.70656 21.1865 10.5979 21.5627C12.4892 21.9389 14.4496 21.7458 16.2312 21.0078C18.0127 20.2699 19.5355 19.0202 20.6068 17.4168C21.6782 15.8134 22.25 13.9284 22.25 12C22.2473 9.41498 21.2192 6.93661 19.3913 5.10872C17.5634 3.28084 15.085 2.25273 12.5 2.25ZM10.0278 15.75H14.9722C14.4688 17.4694 13.625 19.0191 12.5 20.2397C11.375 19.0191 10.5313 17.4694 10.0278 15.75ZM9.6875 14.25C9.43876 12.7603 9.43876 11.2397 9.6875 9.75H15.3125C15.5613 11.2397 15.5613 12.7603 15.3125 14.25H9.6875ZM4.25 12C4.24935 11.2392 4.35442 10.4819 4.56219 9.75H8.16782C7.94407 11.2417 7.94407 12.7583 8.16782 14.25H4.56219C4.35442 13.5181 4.24935 12.7608 4.25 12ZM14.9722 8.25H10.0278C10.5313 6.53062 11.375 4.98094 12.5 3.76031C13.625 4.98094 14.4688 6.53062 14.9722 8.25ZM16.8322 9.75H20.4378C20.8541 11.2211 20.8541 12.7789 20.4378 14.25H16.8322C17.0559 12.7583 17.0559 11.2417 16.8322 9.75ZM19.8472 8.25H16.5256C16.1429 6.74392 15.5001 5.31623 14.6263 4.03125C15.7427 4.33127 16.7839 4.86162 17.6831 5.58818C18.5823 6.31475 19.3194 7.22146 19.8472 8.25ZM10.3738 4.03125C9.4999 5.31623 8.85713 6.74392 8.47438 8.25H5.15282C5.68056 7.22146 6.41772 6.31475 7.31689 5.58818C8.21606 4.86162 9.25733 4.33127 10.3738 4.03125ZM5.15282 15.75H8.47438C8.85713 17.2561 9.4999 18.6838 10.3738 19.9688C9.25733 19.6687 8.21606 19.1384 7.31689 18.4118C6.41772 17.6852 5.68056 16.7785 5.15282 15.75ZM14.6263 19.9688C15.5001 18.6838 16.1429 17.2561 16.5256 15.75H19.8472C19.3194 16.7785 18.5823 17.6852 17.6831 18.4118C16.7839 19.1384 15.7427 19.6687 14.6263 19.9688Z" fill="#0F1016"/>
                    </svg>
                </div>
                <div class="text-base font-medium font-['Outfit'] leading-normal">Management Accounts and Information</div>
            </div>
            <div class="services text-neutral-900 self-stretch md:px-7 md:py-5 px-4 py-3 bg-violet-50 rounded-lg justify-start items-center gap-3 flex">
                <div class="relative">
                    <svg xmlns="http://www.w3.org/2000/svg" width="25" height="24" viewBox="0 0 25 24" fill="none">
                    <path d="M12.5 2.25C10.5716 2.25 8.68657 2.82183 7.08319 3.89317C5.47982 4.96451 4.23013 6.48726 3.49218 8.26884C2.75422 10.0504 2.56114 12.0108 2.93735 13.9021C3.31355 15.7934 4.24215 17.5307 5.60571 18.8943C6.96928 20.2579 8.70656 21.1865 10.5979 21.5627C12.4892 21.9389 14.4496 21.7458 16.2312 21.0078C18.0127 20.2699 19.5355 19.0202 20.6068 17.4168C21.6782 15.8134 22.25 13.9284 22.25 12C22.2473 9.41498 21.2192 6.93661 19.3913 5.10872C17.5634 3.28084 15.085 2.25273 12.5 2.25ZM10.0278 15.75H14.9722C14.4688 17.4694 13.625 19.0191 12.5 20.2397C11.375 19.0191 10.5313 17.4694 10.0278 15.75ZM9.6875 14.25C9.43876 12.7603 9.43876 11.2397 9.6875 9.75H15.3125C15.5613 11.2397 15.5613 12.7603 15.3125 14.25H9.6875ZM4.25 12C4.24935 11.2392 4.35442 10.4819 4.56219 9.75H8.16782C7.94407 11.2417 7.94407 12.7583 8.16782 14.25H4.56219C4.35442 13.5181 4.24935 12.7608 4.25 12ZM14.9722 8.25H10.0278C10.5313 6.53062 11.375 4.98094 12.5 3.76031C13.625 4.98094 14.4688 6.53062 14.9722 8.25ZM16.8322 9.75H20.4378C20.8541 11.2211 20.8541 12.7789 20.4378 14.25H16.8322C17.0559 12.7583 17.0559 11.2417 16.8322 9.75ZM19.8472 8.25H16.5256C16.1429 6.74392 15.5001 5.31623 14.6263 4.03125C15.7427 4.33127 16.7839 4.86162 17.6831 5.58818C18.5823 6.31475 19.3194 7.22146 19.8472 8.25ZM10.3738 4.03125C9.4999 5.31623 8.85713 6.74392 8.47438 8.25H5.15282C5.68056 7.22146 6.41772 6.31475 7.31689 5.58818C8.21606 4.86162 9.25733 4.33127 10.3738 4.03125ZM5.15282 15.75H8.47438C8.85713 17.2561 9.4999 18.6838 10.3738 19.9688C9.25733 19.6687 8.21606 19.1384 7.31689 18.4118C6.41772 17.6852 5.68056 16.7785 5.15282 15.75ZM14.6263 19.9688C15.5001 18.6838 16.1429 17.2561 16.5256 15.75H19.8472C19.3194 16.7785 18.5823 17.6852 17.6831 18.4118C16.7839 19.1384 15.7427 19.6687 14.6263 19.9688Z" fill="#0F1016"/>
                    </svg>
                </div>
                <div class="text-base font-medium font-['Outfit'] leading-normal">Personal Tax</div>
            </div>
            <div class="services text-neutral-900 self-stretch md:px-7 md:py-5 px-4 py-3 bg-violet-50 rounded-lg justify-start items-center gap-3 flex">
                <div class="relative">
                    <svg xmlns="http://www.w3.org/2000/svg" width="25" height="24" viewBox="0 0 25 24" fill="none">
                    <path d="M12.5 2.25C10.5716 2.25 8.68657 2.82183 7.08319 3.89317C5.47982 4.96451 4.23013 6.48726 3.49218 8.26884C2.75422 10.0504 2.56114 12.0108 2.93735 13.9021C3.31355 15.7934 4.24215 17.5307 5.60571 18.8943C6.96928 20.2579 8.70656 21.1865 10.5979 21.5627C12.4892 21.9389 14.4496 21.7458 16.2312 21.0078C18.0127 20.2699 19.5355 19.0202 20.6068 17.4168C21.6782 15.8134 22.25 13.9284 22.25 12C22.2473 9.41498 21.2192 6.93661 19.3913 5.10872C17.5634 3.28084 15.085 2.25273 12.5 2.25ZM10.0278 15.75H14.9722C14.4688 17.4694 13.625 19.0191 12.5 20.2397C11.375 19.0191 10.5313 17.4694 10.0278 15.75ZM9.6875 14.25C9.43876 12.7603 9.43876 11.2397 9.6875 9.75H15.3125C15.5613 11.2397 15.5613 12.7603 15.3125 14.25H9.6875ZM4.25 12C4.24935 11.2392 4.35442 10.4819 4.56219 9.75H8.16782C7.94407 11.2417 7.94407 12.7583 8.16782 14.25H4.56219C4.35442 13.5181 4.24935 12.7608 4.25 12ZM14.9722 8.25H10.0278C10.5313 6.53062 11.375 4.98094 12.5 3.76031C13.625 4.98094 14.4688 6.53062 14.9722 8.25ZM16.8322 9.75H20.4378C20.8541 11.2211 20.8541 12.7789 20.4378 14.25H16.8322C17.0559 12.7583 17.0559 11.2417 16.8322 9.75ZM19.8472 8.25H16.5256C16.1429 6.74392 15.5001 5.31623 14.6263 4.03125C15.7427 4.33127 16.7839 4.86162 17.6831 5.58818C18.5823 6.31475 19.3194 7.22146 19.8472 8.25ZM10.3738 4.03125C9.4999 5.31623 8.85713 6.74392 8.47438 8.25H5.15282C5.68056 7.22146 6.41772 6.31475 7.31689 5.58818C8.21606 4.86162 9.25733 4.33127 10.3738 4.03125ZM5.15282 15.75H8.47438C8.85713 17.2561 9.4999 18.6838 10.3738 19.9688C9.25733 19.6687 8.21606 19.1384 7.31689 18.4118C6.41772 17.6852 5.68056 16.7785 5.15282 15.75ZM14.6263 19.9688C15.5001 18.6838 16.1429 17.2561 16.5256 15.75H19.8472C19.3194 16.7785 18.5823 17.6852 17.6831 18.4118C16.7839 19.1384 15.7427 19.6687 14.6263 19.9688Z" fill="#0F1016"/>
                    </svg>
                </div>
                <div class="text-base font-medium font-['Outfit'] leading-normal">Payroll and PAYE Returns</div>
            </div>
            <div class="services text-neutral-900 self-stretch md:px-7 md:py-5 px-4 py-3 bg-violet-50 rounded-lg justify-start items-center gap-3 flex">
                <div class="relative">
                    <svg xmlns="http://www.w3.org/2000/svg" width="25" height="24" viewBox="0 0 25 24" fill="none">
                    <path d="M12.5 2.25C10.5716 2.25 8.68657 2.82183 7.08319 3.89317C5.47982 4.96451 4.23013 6.48726 3.49218 8.26884C2.75422 10.0504 2.56114 12.0108 2.93735 13.9021C3.31355 15.7934 4.24215 17.5307 5.60571 18.8943C6.96928 20.2579 8.70656 21.1865 10.5979 21.5627C12.4892 21.9389 14.4496 21.7458 16.2312 21.0078C18.0127 20.2699 19.5355 19.0202 20.6068 17.4168C21.6782 15.8134 22.25 13.9284 22.25 12C22.2473 9.41498 21.2192 6.93661 19.3913 5.10872C17.5634 3.28084 15.085 2.25273 12.5 2.25ZM10.0278 15.75H14.9722C14.4688 17.4694 13.625 19.0191 12.5 20.2397C11.375 19.0191 10.5313 17.4694 10.0278 15.75ZM9.6875 14.25C9.43876 12.7603 9.43876 11.2397 9.6875 9.75H15.3125C15.5613 11.2397 15.5613 12.7603 15.3125 14.25H9.6875ZM4.25 12C4.24935 11.2392 4.35442 10.4819 4.56219 9.75H8.16782C7.94407 11.2417 7.94407 12.7583 8.16782 14.25H4.56219C4.35442 13.5181 4.24935 12.7608 4.25 12ZM14.9722 8.25H10.0278C10.5313 6.53062 11.375 4.98094 12.5 3.76031C13.625 4.98094 14.4688 6.53062 14.9722 8.25ZM16.8322 9.75H20.4378C20.8541 11.2211 20.8541 12.7789 20.4378 14.25H16.8322C17.0559 12.7583 17.0559 11.2417 16.8322 9.75ZM19.8472 8.25H16.5256C16.1429 6.74392 15.5001 5.31623 14.6263 4.03125C15.7427 4.33127 16.7839 4.86162 17.6831 5.58818C18.5823 6.31475 19.3194 7.22146 19.8472 8.25ZM10.3738 4.03125C9.4999 5.31623 8.85713 6.74392 8.47438 8.25H5.15282C5.68056 7.22146 6.41772 6.31475 7.31689 5.58818C8.21606 4.86162 9.25733 4.33127 10.3738 4.03125ZM5.15282 15.75H8.47438C8.85713 17.2561 9.4999 18.6838 10.3738 19.9688C9.25733 19.6687 8.21606 19.1384 7.31689 18.4118C6.41772 17.6852 5.68056 16.7785 5.15282 15.75ZM14.6263 19.9688C15.5001 18.6838 16.1429 17.2561 16.5256 15.75H19.8472C19.3194 16.7785 18.5823 17.6852 17.6831 18.4118C16.7839 19.1384 15.7427 19.6687 14.6263 19.9688Z" fill="#0F1016"/>
                    </svg>
                </div>
                <div class="text-base font-medium font-['Outfit'] leading-normal">Tax Enquiries and Investigations</div>
            </div>
        </div>
    </div>

    <script>
        $(document).ready(function () {
            $('.services').hover(
                function() {
                    $(this).removeClass('bg-violet-50');
                    $(this).addClass('bg-violet-200');
                    $(this).removeClass('text-neutral-900');
                    $(this).addClass('text-blue-600');
                    $(this).find('svg path').attr('fill', '#3B82F6'); 
                },
                function() {
                    $(this).removeClass('bg-violet-200');
                    $(this).addClass('bg-violet-50');
                    $(this).removeClass('text-blue-600');
                    $(this).addClass('text-neutral-900');
                    $(this).find('svg path').attr('fill', '#0F1016'); 
                }
            );


        });

    </script>
</section>