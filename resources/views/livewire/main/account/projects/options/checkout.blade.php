<div class="w-full">

    {{-- Loading --}}
    <x-forms.loading />

    {{-- Section --}}
    <div class="lg:grid lg:grid-cols-12">

        {{-- Sidebar --}}
        <aside
            class="lg:col-span-3 py-6 hidden lg:block bg-white shadow-sm border border-gray-200 rounded-lg dark:bg-zinc-800 dark:border-transparent"
            wire:ignore>
            <x-main.account.sidebar />
        </aside>

        {{-- Container --}}
        <div class="lg:col-span-9 lg:ltr:ml-8 lg:rtl:mr-8">

            {{-- Head --}}
            <div class="w-full mb-16">
                <div class="mx-auto max-w-7xl">
                    <div class="lg:flex lg:items-center lg:justify-between">

                        <div class="min-w-0 flex-1">

                            {{-- Breadcrumbs --}}
                            <div class="mb-3 flex flex-col sm:flex-row sm:flex-wrap sm:space-x-6 rtl:space-x-reverse">
                                <ol
                                    class="inline-flex items-center mb-3 space-x-1 md:space-x-3 md:rtl:space-x-reverse sm:mb-0">

                                    {{-- Main home --}}
                                    <li>
                                        <div class="flex items-center">
                                            <a href="{{ url('/') }}"
                                                class="text-sm font-medium text-gray-700 hover:text-primary-600 dark:text-zinc-300 dark:hover:text-white">
                                                @lang('messages.t_home')
                                            </a>
                                        </div>
                                    </li>

                                    {{-- My projects --}}
                                    <li aria-current="page">
                                        <div class="flex items-center">
                                            <svg aria-hidden="true" class="w-4 h-4 text-gray-400 rtl:rotate-180"
                                                fill="currentColor" viewBox="0 0 20 20"
                                                xmlns="http://www.w3.org/2000/svg">
                                                <path fill-rule="evenodd"
                                                    d="M7.293 14.707a1 1 0 010-1.414L10.586 10 7.293 6.707a1 1 0 011.414-1.414l4 4a1 1 0 010 1.414l-4 4a1 1 0 01-1.414 0z"
                                                    clip-rule="evenodd"></path>
                                            </svg>
                                            <span
                                                class="mx-1 text-sm font-medium text-gray-400 md:mx-2 dark:text-zinc-400">
                                                @lang('messages.t_my_projects')
                                            </span>
                                        </div>
                                    </li>

                                </ol>
                            </div>

                            {{-- Section heading --}}
                            <h2
                                class="text-lg font-bold leading-7 text-zinc-700 dark:text-gray-50 sm:truncate sm:text-xl sm:tracking-tight">
                                @lang('messages.t_promote_project')
                            </h2>

                            {{-- Subtitle --}}
                            <p class="leading-relaxed text-gray-400 mt-1 text-sm">
                                @lang('messages.t_promote_project_subtitle')
                            </p>

                        </div>

                        {{-- Actions --}}
                        <div class="mt-5 flex justify-between lg:mt-0 lg:ltr::ml-4 lg:rtl:mr-4">

                            {{-- View project --}}
                            <span class="block">
                                <a href="{{ url('project/' . $subscription->project->pid . '/' . $subscription->project->slug) }}"
                                    target="_blank"
                                    class="inline-flex items-center px-4 py-2 border border-gray-300 dark:border-zinc-500 rounded-sm shadow-sm text-[13px] font-medium text-gray-700 dark:text-zinc-200 bg-white dark:bg-zinc-600 hover:bg-gray-50 dark:hover:bg-zinc-500 focus:outline-none focus:ring-primary-600">
                                    <svg class="h-5 w-5 text-gray-500 ltr:mr-2 rtl:ml-2 dark:text-zinc-200"
                                        stroke="currentColor" fill="currentColor" stroke-width="0" viewBox="0 0 24 24"
                                        xmlns="http://www.w3.org/2000/svg">
                                        <path fill="none" d="M0 0h24v24H0z"></path>
                                        <path
                                            d="M19 19H5V5h7V3H5a2 2 0 00-2 2v14a2 2 0 002 2h14c1.1 0 2-.9 2-2v-7h-2v7zM14 3v2h3.59l-9.83 9.83 1.41 1.41L19 6.41V10h2V3h-7z">
                                        </path>
                                    </svg>
                                    {{ __('messages.t_view_project') }}
                                </a>
                            </span>

                        </div>

                    </div>
                </div>
            </div>

            {{-- Content --}}
            <div class="w-full">

                {{-- Select payment method --}}
                <div
                    class="rounded-lg bg-white shadow-sm border-gray-200 border px-10 py-6 relative mb-10 dark:bg-zinc-800 dark:border-transparent">

                    {{-- TITLE / Select a payment method --}}
                    <h5 class="flex items-center mb-5 pt-4">
                        <span
                            class="text-xs uppercase tracking-widest text-primary-600 dark:text-white font-bold ltr:mr-3 rtl:ml-3">
                            @lang('messages.t_select_payment_method')
                        </span>
                        <span aria-hidden="true" class="grow bg-gray-100 rounded h-0.5 dark:bg-zinc-700"></span>
                    </h5>

                    <fieldset class="lg:ltr:pr-10 lg:rtl:pl-10">

                        {{-- Step title --}}
                        <div class="flex items-center lg:justify-center rtl:space-x-reverse space-x-2 mb-10">
                            <svg class="h-6 w-6 -mt-px dark:text-gray-200" stroke="currentColor" fill="currentColor"
                                stroke-width="0" viewBox="0 0 256 256" xmlns="http://www.w3.org/2000/svg">
                                <path
                                    d="M216,48V208a8,8,0,0,1-8,8H48a8,8,0,0,1-8-8V48a8,8,0,0,1,8-8H208A8,8,0,0,1,216,48Z"
                                    opacity="0.2"></path>
                                <path
                                    d="M208,32H48A16,16,0,0,0,32,48V208a16,16,0,0,0,16,16H208a16,16,0,0,0,16-16V48A16,16,0,0,0,208,32Zm0,176H48V48H208V208ZM140,80v96a8,8,0,0,1-16,0V95l-11.56,7.71a8,8,0,1,1-8.88-13.32l24-16A8,8,0,0,1,140,80Z">
                                </path>
                            </svg>
                            <span class="text-base font-bold text-slate-500 tracking-wide dark:text-zinc-300">
                                @lang('messages.t_choose_ur_prefered_payment_method')
                            </span>
                        </div>

                        {{-- Automatic methods --}}
                        <legend class="sr-only"> @lang('messages.t_select_payment_method') </legend>
                        <div
                            class="relative -space-y-px rounded-md bg-white border border-gray-200 divide-y divide-gray-100 shadow-sm dark:bg-zinc-800 dark:border-zinc-700 dark:divide-zinc-700 mb-4">

                            @foreach ($payment_methods as $p)
                                <label wire:key="payment-method-{{ $p->uid }}"
                                    class="{{ $loop->first ? 'rounded-tl-md rounded-tr-md' : '' }} {{ $loop->last ? 'rounded-bl-md rounded-br-md' : '' }} relative p-4 flex flex-col cursor-pointer md:ltr:pl-4 md:rtl:pr-4 md:ltr:pr-6 md:rtl:pl-6 md:grid md:grid-cols-2 focus:outline-none"
                                    :class="selected_method == '{{ $p->slug }}' ?
                                        'bg-primary-50 border-primary-200 z-10 dark:bg-zinc-700 dark:border-zinc-700' :
                                        'border-gray-200 hover:bg-gray-50 dark:hover:bg-zinc-600'">

                                    {{-- Title --}}
                                    <span class="flex items-center text-sm">
                                        <input type="radio" x-model="selected_method" wire:model="selected_method"
                                            name="selected_method" value="{{ $p->slug }}"
                                            class="h-5 w-5 text-primary-600 border-gray-300 focus:ring-0 focus:outline-none focus:ring-transparent focus:ring-offset-0 dark:bg-zinc-700 dark:border-zinc-700" />
                                        <span class="ltr:ml-3 rtl:mr-3 font-medium whitespace-nowrap"
                                            :class="selected_method == '{{ $p->slug }}' ?
                                                'text-primary-600 dark:text-white' : 'text-zinc-800 dark:text-zinc-200'">
                                            {{ $p->name }}
                                        </span>
                                    </span>

                                    {{-- Logo --}}
                                    @if ($p->logo)
                                        <span class="flex items-center">
                                            <img class="w-auto h-6 ltr:ml-auto rtl:mr-auto rounded"
                                                src="{{ src($p->logo) }}" alt="{{ $p->name }}">
                                        </span>
                                    @endif


                                </label>
                            @endforeach

                        </div>

                        {{-- Offline method --}}
                        {{-- @php
                            $offline_method = payment_gateway('offline', false, true);
                        @endphp
                        @if ($offline_method?->is_active)
                            <div
                                class="relative -space-y-px rounded-md bg-white border border-gray-200 divide-y divide-gray-100 shadow-sm dark:bg-zinc-800 dark:border-zinc-700 dark:divide-zinc-700">
                                <label wire:key="payment-method-offline"
                                    class="rounded-md relative p-4 flex flex-col cursor-pointer md:ltr:pl-4 md:rtl:pr-4 md:ltr:pr-6 md:rtl:pl-6 md:grid md:grid-cols-2 focus:outline-none"
                                    :class="selected_method == 'offline' ?
                                        'bg-primary-50 border-primary-200 z-10 dark:bg-zinc-700 dark:border-zinc-700' :
                                        'border-gray-200 hover:bg-gray-50 dark:hover:bg-zinc-600'">

                                    <span class="flex items-center text-sm">
                                        <input type="radio" x-model="selected_method" wire:model="selected_method"
                                            name="selected_method" value="offline"
                                            class="h-5 w-5 text-primary-600 border-gray-300 focus:ring-0 focus:outline-none focus:ring-transparent focus:ring-offset-0 dark:bg-zinc-700 dark:border-zinc-700" />
                                        <span class="ltr:ml-3 rtl:mr-3 font-medium whitespace-nowrap"
                                            :class="selected_method == 'offline' ? 'text-primary-600 dark:text-white' :
                                                'text-zinc-800 dark:text-zinc-200'">
                                            {{ $offline_method->name }}
                                        </span>
                                    </span>

                                    @if ($offline_method->logo)
                                        <span class="flex items-center">
                                            <img class="w-auto h-6 ltr:ml-auto rtl:mr-auto rounded"
                                                src="{{ src($offline_method->logo) }}"
                                                alt="{{ $offline_method->name }}">
                                        </span>
                                    @endif


                                </label>
                            </div>
                        @endif --}}

                        {{-- wallet --}}
                        @php
                            $wallet = convertToNumber(auth()->user()->balance_available);
                        @endphp
                        @if ($wallet >= $total)
                            <div
                                class="mt-4 relative -space-y-px rounded-md bg-white border border-gray-200 divide-y divide-gray-100 shadow-sm dark:bg-zinc-800 dark:border-zinc-700 dark:divide-zinc-700">
                                <label wire:key="payment-method-wallet"
                                    class="items-center rounded-md relative p-4 flex flex-col cursor-pointer md:ltr:pl-4 md:rtl:pr-4 md:ltr:pr-6 md:rtl:pl-6 md:grid md:grid-cols-2 focus:outline-none"
                                    :class="selected_method == 'wallet' ?
                                        'bg-primary-50 border-primary-200 z-10 dark:bg-zinc-700 dark:border-zinc-700' :
                                        'border-gray-200 hover:bg-gray-50 dark:hover:bg-zinc-600'">

                                    {{-- Title --}}
                                    <span class="flex items-center text-sm">
                                        <input type="radio" x-model="selected_method" wire:model="selected_method"
                                            name="selected_method" value="wallet"
                                            class="h-5 w-5 text-primary-600 border-gray-300 focus:ring-0 focus:outline-none focus:ring-transparent focus:ring-offset-0 dark:bg-zinc-700 dark:border-zinc-700" />
                                        <span class="ltr:ml-3 rtl:mr-3 font-medium whitespace-nowrap"
                                            :class="selected_method == 'wallet' ? 'text-primary-600 dark:text-white' :
                                                'text-zinc-800 dark:text-zinc-200'">
                                            @lang('messages.t_wallet')
                                        </span>
                                    </span>

                                    {{-- Available amount --}}
                                    <span class="text-right text-xs font-semibold text-black tracking-wide">
                                        @money($wallet, settings('currency')->code, true)
                                    </span>

                                </label>
                            </div>
                        @endif

                    </fieldset>

                    {{-- Enabed payment mathods list --}}


                    {{-- @if (!$selected_payment_method)
                        <fieldset>
                            <legend class="sr-only">
                                @lang('messages.t_select_payment_method')    
                            </legend>
                            <div class="space-y-5">
        
                                @if (settings('paypal')->is_enabled)
                                    <div class="flex items-center">
                                        <input id="selected_payment_method_paypal" name="selected_payment_method" wire:model="selected_payment_method" value="paypal" type="radio" class="focus:ring-primary-500 h-5 w-5 text-primary-600 border-gray-300 focus:ring-offset-0 dark:bg-zinc-600 dark:border-transparent">
                                        <label for="selected_payment_method_paypal" class="flex items-center ltr:ml-3 rtl:mr-3 cursor-pointer">
                                            <span class="block text-sm font-semibold text-zinc-700 dark:text-zinc-300"> 
                                                {{ settings('paypal')->name }}    
                                            </span>
                                        </label>
                                    </div>
                                @endif
                                
                            </div>
                        </fieldset>
                    @endif --}}

                    

                    {{-- TITLE / Selected upgrades --}}
                    <h5 class="flex items-center mb-6 mt-12">
                        <span
                            class="text-xs uppercase tracking-widest text-primary-600 dark:text-white font-bold ltr:mr-3 rtl:ml-3">
                            @lang('messages.t_selected_upgrades')
                        </span>
                        <span aria-hidden="true" class="grow bg-gray-100 rounded h-0.5 dark:bg-zinc-700"></span>
                    </h5>

                    {{-- Selected upgrades --}}
                    <div class="mt-6">
                        <div class="divide-y divide-gray-50 dark:divide-zinc-700 text-sm lg:mt-0">

                            {{-- Urgent plan --}}
                            @if ($subscription->project->is_urgent)
                                @php
                                    $urgent = \App\Models\ProjectPlan::whereType('urgent')->first();
                                @endphp
                                @if ($urgent)
                                    <div class="pb-4 flex items-center justify-between">
                                        <dt class="text-gray-600 dark:text-zinc-300">
                                            <span
                                                class="font-semibold px-3 py-1 rounded-sm text-[13px] tracking-wide dark:!bg-zinc-500 dark:!text-zinc-200"
                                                style="color: {{ $urgent->badge_text_color }};background-color: {{ $urgent->badge_bg_color }}">{{ $urgent->title }}</span>
                                            <p class="text-[13px] mt-2">{{ $urgent->description }}</p>
                                        </dt>
                                        <dd class="font-medium text-gray-900 dark:text-zinc-100 ltr:pl-5 rtl:pr-5">
                                            @money($urgent->price, settings('currency')->code, true)
                                        </dd>
                                    </div>
                                @endif
                            @endif

                            {{-- Highlight plan --}}
                            @if ($subscription->project->is_highlighted)
                                @php
                                    $highlight = \App\Models\ProjectPlan::whereType('highlight')->first();
                                @endphp
                                @if ($highlight)
                                    <div class="py-4 flex items-center justify-between">
                                        <dt class="text-gray-600 dark:text-zinc-300">
                                            <span
                                                class="font-semibold px-3 py-1 rounded-sm text-[13px] tracking-wide dark:!bg-zinc-500 dark:!text-zinc-200"
                                                style="color: {{ $highlight->badge_text_color }};background-color: {{ $highlight->badge_bg_color }}">{{ $highlight->title }}</span>
                                            <p class="text-[13px] mt-2">{{ $highlight->description }}</p>
                                        </dt>
                                        <dd class="font-medium text-gray-900 dark:text-zinc-100 ltr:pl-5 rtl:pr-5">
                                            @money($highlight->price, settings('currency')->code, true)
                                        </dd>
                                    </div>
                                @endif
                            @endif

                            {{-- Featured plan --}}
                            @if ($subscription->project->is_featured)
                                @php
                                    $featured = \App\Models\ProjectPlan::whereType('featured')->first();
                                @endphp
                                @if ($featured)
                                    <div class="py-4 flex items-center justify-between">
                                        <dt class="text-gray-600 dark:text-zinc-300">
                                            <span
                                                class="font-semibold px-3 py-1 rounded-sm text-[13px] tracking-wide dark:!bg-zinc-500 dark:!text-zinc-200"
                                                style="color: {{ $featured->badge_text_color }};background-color: {{ $featured->badge_bg_color }}">{{ $featured->title }}</span>
                                            <p class="text-[13px] mt-2">{{ $featured->description }}</p>
                                        </dt>
                                        <dd class="font-medium text-gray-900 dark:text-zinc-100 ltr:pl-5 rtl:pr-5">
                                            @money($featured->price, settings('currency')->code, true)
                                        </dd>
                                    </div>
                                @endif
                            @endif

                            {{-- Alert plan --}}
                            @if ($subscription->project->is_alert)
                                @php
                                    $alert = \App\Models\ProjectPlan::whereType('alert')->first();
                                @endphp
                                @if ($alert)
                                    <div class="py-4 flex items-center justify-between">
                                        <dt class="text-gray-600 dark:text-zinc-300">
                                            <span
                                                class="font-semibold px-3 py-1 rounded-sm text-[13px] tracking-wide dark:!bg-zinc-500 dark:!text-zinc-200"
                                                style="color: {{ $alert->badge_text_color }};background-color: {{ $alert->badge_bg_color }}">{{ $alert->title }}</span>
                                            <p class="text-[13px] mt-2">{{ $alert->description }}</p>
                                        </dt>
                                        <dd class="font-medium text-gray-900 dark:text-zinc-100 ltr:pl-5 rtl:pr-5">
                                            @money($alert->price, settings('currency')->code, true)
                                        </dd>
                                    </div>
                                @endif
                            @endif

                            {{-- Total --}}
                            <div class="pt-4 flex items-center justify-between">
                                <dt class="font-medium text-gray-900 dark:text-white">@lang('messages.t_total')</dt>
                                <dd class="font-medium text-primary-600">
                                    @money($subscription->total, settings('currency')->code, true)
                                </dd>
                            </div>

                        </div>
                    </div>

                    @if (!$is_third_step)
                        {{-- Confirm --}}
                        <button wire:click="confirm"
                            wire:loading.class.remove="bg-primary-600 hover:bg-primary-700 text-white cursor-pointer"
                            wire:loading.attr="disabled"
                            class="w-full text-[13px] font-semibold flex justify-center bg-primary-600 hover:bg-primary-700 text-white py-4 px-8 rounded tracking-wide focus:outline-none focus:shadow-outline cursor-pointer disabled:!bg-gray-200 disabled:!text-gray-600 disabled:cursor-not-allowed dark:disabled:!bg-zinc-700 dark:disabled:!text-zinc-400"
                            {{ !$selected_method ? 'disabled' : '' }}>
                            {{ __('messages.t_confirm') }}
                        </button>
                    @endif

                    {{-- Third step --}}
                    @if ($is_third_step)
                        <div class="w-full">

                            {{-- PayPal --}}
                            @if ($selected_method === 'paypal' && isset($payment_gateway_params['paypal']))
                                @php

                                    $gateway_exchange_rate = (float) settings('paypal')->exchange_rate;
                                    $exchange_total_amount = $this->calculateExchangeAmount($gateway_exchange_rate);

                                @endphp
                                <div class="w-full">

                                    {{-- Paypal button --}}
                                    <div id="paypal-button-container" wire:ignore></div>

                                    <script>
                                        // Render the PayPal button into #paypal-button-container
                                        paypal.Buttons({

                                            // Set up the transaction
                                            createOrder: function(data, actions) {
                                                return actions.order.create({
                                                    purchase_units: [{
                                                        invoice_id: "{{ $payment_gateway_params['paypal']['order_id'] }}",
                                                        amount: {
                                                            value: "{{ convertToNumber(number_format(($exchange_total_amount * payment_gateway('paypal')?->exchange_rate) / settings('currency')->exchange_rate, 2, '.', '')) }}"
                                                        }
                                                    }]
                                                });
                                            },

                                            // Finalize the transaction
                                            onApprove: function(data, actions) {

                                                // Redirecting
                                                location.href = "{{ url('callback/paypal?order=') }}" + data.orderID;

                                            }

                                        }).render('#paypal-button-container');
                                    </script>

                                </div>
                            @endif

                            {{-- cPay --}}
                            @if ($selected_method === 'cpay' && isset($payment_gateway_params['cpay']))
                                <div class="w-full">
                                    <form method="post"
                                        action="https://www.cpay.com.mk/client/Page/default.aspx?xml_id=/mk-MK/.loginToPay/.simple/">

                                        <input id="AmountToPay" name="AmountToPay"
                                            value="{{ $payment_gateway_params['cpay']['AmountToPay'] }}"
                                            type="hidden" />
                                        <input id="PayToMerchant" name="PayToMerchant"
                                            value="{{ $payment_gateway_params['cpay']['PayToMerchant'] }}"
                                            type="hidden" />
                                        <input id="MerchantName" name="MerchantName"
                                            value="{{ $payment_gateway_params['cpay']['MerchantName'] }}"
                                            type="hidden" />
                                        <input id="AmountCurrency" name="AmountCurrency"
                                            value="{{ $payment_gateway_params['cpay']['AmountCurrency'] }}"
                                            type="hidden" />
                                        <input id="Details1" name="Details1"
                                            value="{{ $payment_gateway_params['cpay']['Details1'] }}"
                                            type="hidden" />
                                        <input id="Details2" name="Details2"
                                            value="{{ $payment_gateway_params['cpay']['Details2'] }}"
                                            type="hidden" />
                                        <input id="PaymentOKURL" name="PaymentOKURL"
                                            value="{{ $payment_gateway_params['cpay']['PaymentOKURL'] }}"
                                            type="hidden" />
                                        <input id="PaymentFailURL" name="PaymentFailURL"
                                            value="{{ $payment_gateway_params['cpay']['PaymentFailURL'] }}"
                                            type="hidden" />
                                        <input id="CheckSumHeader" name="CheckSumHeader"
                                            value="{{ $payment_gateway_params['cpay']['CheckSumHeader'] }}"
                                            type="hidden" />
                                        <input id="CheckSum" name="CheckSum"
                                            value="{{ $payment_gateway_params['cpay']['CheckSum'] }}"
                                            type="hidden" />
                                        <input id="FirstName" name="FirstName"
                                            value="{{ $payment_gateway_params['cpay']['FirstName'] }}"
                                            type="hidden" />
                                        <input id="LastName" name="LastName"
                                            value="{{ $payment_gateway_params['cpay']['LastName'] }}"
                                            type="hidden" />
                                        <input id="Address" name="Address"
                                            value="{{ $payment_gateway_params['cpay']['Address'] }}"
                                            type="hidden" />
                                        <input id="City" name="City"
                                            value="{{ $payment_gateway_params['cpay']['City'] }}" type="hidden" />
                                        <input id="Zip" name="Zip"
                                            value="{{ $payment_gateway_params['cpay']['Zip'] }}" type="hidden" />
                                        <input id="Telephone" name="Telephone"
                                            value="{{ $payment_gateway_params['cpay']['Telephone'] }}"
                                            type="hidden" />
                                        <input id="Email" name="Email"
                                            value="{{ $payment_gateway_params['cpay']['Email'] }}" type="hidden" />
                                        <input id="OriginalAmount" name="OriginalAmount"
                                            value="{{ $payment_gateway_params['cpay']['OriginalAmount'] }}"
                                            type="hidden" />

                                        <button type="submit"
                                            class="w-full text-[13px] font-semibold flex justify-center bg-primary-600 hover:bg-primary-700 text-white py-4 px-8 rounded tracking-wide focus:outline-none focus:shadow-outline cursor-pointer disabled:!bg-gray-200 disabled:!text-gray-600 disabled:cursor-not-allowed dark:disabled:!bg-zinc-700 dark:disabled:!text-zinc-400">
                                            {{ __('messages.t_checkout') }}
                                        </button>

                                    </form>
                                </div>
                            @endif

                            {{-- Ecpay --}}
                            @if ($selected_method === 'ecpay' && isset($payment_gateway_params['ecpay']))
                                <div class="w-full">
                                    <form method="post" action="{{ $payment_gateway_params['ecpay']['link'] }}">

                                        @foreach ($payment_gateway_params['ecpay'] as $key => $value)
                                            <input id="{{ $key }}" name="{{ $key }}"
                                                value="{{ $value }}" type="hidden" />
                                        @endforeach

                                        <button type="submit"
                                            class="w-full text-[13px] font-semibold flex justify-center bg-primary-600 hover:bg-primary-700 text-white py-4 px-8 rounded tracking-wide focus:outline-none focus:shadow-outline cursor-pointer disabled:!bg-gray-200 disabled:!text-gray-600 disabled:cursor-not-allowed dark:disabled:!bg-zinc-700 dark:disabled:!text-zinc-400">
                                            {{ __('messages.t_checkout') }}
                                        </button>

                                    </form>
                                </div>
                            @endif

                            {{-- Flutterwave --}}
                            @if ($selected_method === 'flutterwave' && isset($payment_gateway_params['flutterwave']))
                                <div class="w-full">

                                    {{-- Flutterwave Js --}}
                                    <script>
                                        window.makeFlutterwavePayment = function() {
                                            FlutterwaveCheckout({
                                                public_key: "{{ payment_gateway('flutterwave')?->settings['public_key'] }}",
                                                tx_ref: "{{ $payment_gateway_params['flutterwave']['order_id'] }}",
                                                amount: Number(
                                                    "{{ convertToNumber(number_format(($total * payment_gateway('flutterwave')?->exchange_rate) / settings('currency')->exchange_rate, 2, '.', '')) }}"
                                                    ),
                                                currency: "{{ payment_gateway('flutterwave')?->currency }}",
                                                payment_options: "card, banktransfer, ussd, account, mpesa, mobilemoneyghana, mobilemoneyfranco, mobilemoneyuganda, mobilemoneyrwanda, mobilemoneyzambia, barter, nqr, credit",
                                                redirect_url: "{{ url('callback/flutterwave') }}",
                                                customer: {
                                                    email: "{{ auth()->user()->email }}",
                                                    name: "{{ auth()->user()->fullname ?? auth()->user()->username }}",
                                                },
                                                customizations: {
                                                    title: "{{ __('messages.t_add_funds') }}",
                                                    logo: "{{ src(auth()->user()->avatar) }}",
                                                },
                                            });
                                        }
                                    </script>

                                    {{-- Pay --}}
                                    <button @click="window.makeFlutterwavePayment" type="button"
                                        id="flutterwave-payment-button"
                                        class="w-full text-[13px] font-semibold flex justify-center bg-primary-600 hover:bg-primary-700 text-white py-4 px-8 rounded tracking-wide focus:outline-none focus:shadow-outline cursor-pointer disabled:!bg-gray-200 disabled:!text-gray-600 disabled:cursor-not-allowed dark:disabled:!bg-zinc-700 dark:disabled:!text-zinc-400">
                                        {{ __('messages.t_checkout') }}
                                    </button>

                                </div>
                            @endif

                            {{-- Jazzcash --}}
                            @if ($selected_method === 'jazzcash' && isset($payment_gateway_params['jazzcash']))
                                <div class="w-full">
                                    <form method="post" action="{{ $payment_gateway_params['jazzcash']['link'] }}">

                                        @foreach ($payment_gateway_params['jazzcash'] as $key => $value)
                                            <input id="{{ $key }}" name="{{ $key }}"
                                                value="{{ $value }}" type="hidden" />
                                        @endforeach

                                        <button type="submit"
                                            class="w-full text-[13px] font-semibold flex justify-center bg-primary-600 hover:bg-primary-700 text-white py-4 px-8 rounded tracking-wide focus:outline-none focus:shadow-outline cursor-pointer disabled:!bg-gray-200 disabled:!text-gray-600 disabled:cursor-not-allowed dark:disabled:!bg-zinc-700 dark:disabled:!text-zinc-400">
                                            {{ __('messages.t_checkout') }}
                                        </button>

                                    </form>
                                </div>
                            @endif

                            {{-- Mercadopago --}}
                            @if ($selected_method === 'mercadopago' && isset($payment_gateway_params['mercadopago']))
                                <div class="w-full">

                                    {{-- Form --}}
                                    <div class="w-full relative">

                                        {{-- Loading --}}
                                        <div class="bg-gray-50 dark:bg-zinc-700 absolute w-full p-6 rounded-xl flex items-center justify-center"
                                            id="mercadopago-waiting">
                                            <div role="status">
                                                <svg aria-hidden="true"
                                                    class="mb-1 w-8 h-8 text-gray-200 animate-spin dark:text-gray-600 fill-primary-600 mx-auto"
                                                    viewBox="0 0 100 101" fill="none"
                                                    xmlns="http://www.w3.org/2000/svg">
                                                    <path
                                                        d="M100 50.5908C100 78.2051 77.6142 100.591 50 100.591C22.3858 100.591 0 78.2051 0 50.5908C0 22.9766 22.3858 0.59082 50 0.59082C77.6142 0.59082 100 22.9766 100 50.5908ZM9.08144 50.5908C9.08144 73.1895 27.4013 91.5094 50 91.5094C72.5987 91.5094 90.9186 73.1895 90.9186 50.5908C90.9186 27.9921 72.5987 9.67226 50 9.67226C27.4013 9.67226 9.08144 27.9921 9.08144 50.5908Z"
                                                        fill="currentColor" />
                                                    <path
                                                        d="M93.9676 39.0409C96.393 38.4038 97.8624 35.9116 97.0079 33.5539C95.2932 28.8227 92.871 24.3692 89.8167 20.348C85.8452 15.1192 80.8826 10.7238 75.2124 7.41289C69.5422 4.10194 63.2754 1.94025 56.7698 1.05124C51.7666 0.367541 46.6976 0.446843 41.7345 1.27873C39.2613 1.69328 37.813 4.19778 38.4501 6.62326C39.0873 9.04874 41.5694 10.4717 44.0505 10.1071C47.8511 9.54855 51.7191 9.52689 55.5402 10.0491C60.8642 10.7766 65.9928 12.5457 70.6331 15.2552C75.2735 17.9648 79.3347 21.5619 82.5849 25.841C84.9175 28.9121 86.7997 32.2913 88.1811 35.8758C89.083 38.2158 91.5421 39.6781 93.9676 39.0409Z"
                                                        fill="currentFill" />
                                                </svg>
                                                <span
                                                    class="text-xs font-bold tracking-widest text-gray-500 dark:text-gray-200">{{ __('messages.t_please_wait_dots') }}</span>
                                            </div>
                                        </div>

                                        {{-- Form --}}
                                        <div id="walletBrick_container"></div>

                                    </div>

                                    {{-- Javascript --}}
                                    <script>
                                        const bricksBuilder = mercadopago.bricks();
                                        const renderWalletBrick = async (bricksBuilder) => {
                                            const settings = {
                                                initialization: {
                                                    preferenceId: "{{ $payment_gateway_params['mercadopago']['preference_id'] }}",
                                                },
                                                callbacks: {
                                                    onReady: () => {
                                                        $('#mercadopago-waiting').hide();
                                                    },
                                                    onSubmit: () => {
                                                        //
                                                    },
                                                    onError: (error) => {
                                                        console.log(error);
                                                    },
                                                },
                                            };
                                            window.walletBrickController = await bricksBuilder.create(
                                                'wallet',
                                                'walletBrick_container',
                                                settings
                                            );
                                        };
                                        renderWalletBrick(bricksBuilder);
                                    </script>

                                </div>
                            @endif

                            {{-- Paymob --}}
                            @if ($selected_method === 'paymob' && isset($payment_gateway_params['paymob']))
                                <div class="w-full">
                                    <iframe
                                        src="https://accept.paymobsolutions.com/api/acceptance/iframes/{{ payment_method('paymob')?->settings['iframe_id'] }}?payment_token={{ $payment_gateway_params['paymob']['token'] }}"
                                        width="100%" height="500px"></iframe>
                                </div>
                            @endif

                            {{-- Paymob PK --}}
                            @if ($selected_method === 'paymob-pk' && isset($payment_gateway_params['paymob-pk']))
                                <div class="w-full">
                                    <iframe
                                        src="https://pakistan.paymob.com/api/acceptance/iframes/{{ payment_method('paymob')?->settings['iframe_id'] }}?payment_token={{ $payment_gateway_params['paymob']['token'] }}"
                                        width="100%" height="500px"></iframe>
                                </div>
                            @endif

                            {{-- Paystack --}}
                            @if ($selected_method === 'paystack' && isset($payment_gateway_params['paystack']))
                                <div class="w-full">

                                    {{-- Paystack Js --}}
                                    <script>
                                        window.makePaystackPayment = function() {
                                            let handler = PaystackPop.setup({
                                                key: "{{ payment_gateway('paystack')?->settings['public_key'] }}",
                                                email: '{{ auth()->user()->email }}',
                                                amount: Number(
                                                    "{{ convertToNumber(number_format(($total * payment_gateway('paystack')?->exchange_rate) / settings('currency')->exchange_rate, 2, '.', '')) }}"
                                                    ) * 100,
                                                currency: "{{ payment_gateway('paystack')?->currency }}",
                                                ref: "{{ $payment_gateway_params['paystack']['order'] }}",
                                                channels: ['card', 'bank', 'ussd', 'qr', 'mobile_money', 'bank_transfer'],
                                                onClose: function() {},
                                                callback: function(response) {
                                                    location.href = response.redirecturl;
                                                }
                                            });
                                            handler.openIframe();
                                        }
                                    </script>

                                    {{-- Pay --}}
                                    <button @click="window.makePaystackPayment" type="button"
                                        id="paystack-payment-button"
                                        class="w-full text-[13px] font-semibold flex justify-center bg-primary-600 hover:bg-primary-700 text-white py-4 px-8 rounded tracking-wide focus:outline-none focus:shadow-outline cursor-pointer disabled:!bg-gray-200 disabled:!text-gray-600 disabled:cursor-not-allowed dark:disabled:!bg-zinc-700 dark:disabled:!text-zinc-400">
                                        {{ __('messages.t_checkout') }}
                                    </button>

                                </div>
                            @endif

                            {{-- Paytr --}}
                            @if ($selected_method === 'paytr' && isset($payment_gateway_params['paytr']))
                                <div class="w-full">
                                    <iframe
                                        src="https://www.paytr.com/odeme/guvenli/{{ $payment_gateway_params['paytr']['token'] }}"
                                        id="paytriframe" frameborder="0" scrolling="yes" style="width: 100%;"
                                        height="600px"></iframe>
                                    <script>
                                        iFrameResize({}, '#paytriframe');
                                    </script>
                                </div>
                            @endif

                            {{-- Razorpay --}}
                            @if ($selected_method === 'razorpay' && isset($payment_gateway_params['razorpay']))
                                <div class="w-full">
                                    <script>
                                        window.makeRazorpayPayment = function() {

                                            // Set options
                                            var options = {
                                                "key": "{{ payment_gateway('razorpay')?->settings['key_id'] }}",
                                                "amount": "{{ convertToNumber(number_format(($total * payment_gateway('razorpay')?->exchange_rate) / settings('currency')->exchange_rate, 2, '.', '')) * 100 }}",
                                                "currency": "{{ payment_gateway('razorpay')?->currency }}",
                                                "order_id": "{{ $payment_gateway_params['razorpay']['id'] }}",
                                                "name": "{{ auth()->user()->fullname ?? auth()->user()->username }}",
                                                "description": "{{ __('messages.t_add_funds') }}",
                                                "image": "{{ src(auth()->user()->avatar) }}",
                                                "handler": function(response) {

                                                    // Set main domain link
                                                    const app_link = "{{ url('callback/razorpay?action=G') }}";

                                                    // Redirect
                                                    location.href = app_link + "&payment_id=" + response.razorpay_payment_id + "&order_id=" +
                                                        response.razorpay_order_id + "&signature=" + response.razorpay_signature;

                                                },
                                            };

                                            // Start payment
                                            var rzp1 = new Razorpay(options);

                                            // On Failed
                                            rzp1.on('payment.failed', function(response) {
                                                alert(response.error.description);
                                            });

                                            // Open modal
                                            rzp1.open();

                                        }
                                    </script>

                                    {{-- Payment button --}}
                                    <button @click="window.makeRazorpayPayment" type="button"
                                        id="razorpay-payment-button"
                                        class="w-full text-[13px] font-semibold flex justify-center bg-primary-600 hover:bg-primary-700 text-white py-4 px-8 rounded tracking-wide focus:outline-none focus:shadow-outline cursor-pointer disabled:!bg-gray-200 disabled:!text-gray-600 disabled:cursor-not-allowed dark:disabled:!bg-zinc-700 dark:disabled:!text-zinc-400">
                                        {{ __('messages.t_checkout') }}
                                    </button>

                                </div>
                            @endif

                            {{-- Stripe --}}
                            @if ($selected_method === 'stripe' && isset($payment_gateway_params['stripe']))
                                <div class="w-full">

                                    {{-- Form --}}
                                    <form id="stripe-payment-form" wire:ignore>

                                        {{-- Stripe form --}}
                                        <div id="stripe-payment-element"></div>

                                        {{-- Pay --}}
                                        <button id="stripe-payment-button" type="submit"
                                            class="w-full text-[13px] font-semibold flex justify-center bg-primary-600 hover:bg-primary-700 text-white py-4 px-8 rounded tracking-wide focus:outline-none focus:shadow-outline cursor-pointer disabled:!bg-gray-200 disabled:!text-gray-600 disabled:cursor-not-allowed dark:disabled:!bg-zinc-700 dark:disabled:!text-zinc-400">
                                            {{ __('messages.t_checkout') }}
                                        </button>

                                    </form>

                                    {{-- Stripe Js --}}
                                    <script>
                                        // Stripe public key
                                        const stripe = Stripe("{{ payment_gateway('stripe')?->settings['public_key'] }}");

                                        // Payment options
                                        const options = {
                                            clientSecret: "{{ $payment_gateway_params['stripe']['client_secret'] }}",
                                            appearance: {
                                                theme: 'stripe',
                                                variables: {
                                                    colorPrimaryText: '#fff',
                                                    colorBackground: "{{ current_theme() === 'enabled' ? '#333' : '#ffffff' }}",
                                                    colorText: '#30313d',
                                                    colorDanger: '#df1b41',
                                                    spacingUnit: '6px',
                                                    borderRadius: '3px'
                                                }
                                            },
                                        };

                                        const elements = stripe.elements(options);

                                        // Create and mount the Payment Element
                                        const paymentElement = elements.create('payment');
                                        paymentElement.mount('#stripe-payment-element');

                                        const form = document.getElementById('stripe-payment-form');

                                        form.addEventListener('submit', async (event) => {
                                            event.preventDefault();
                                            document.getElementById("stripe-payment-button").disabled = true;
                                            await stripe.confirmPayment({
                                                elements,
                                                confirmParams: {
                                                    return_url: "{{ url('callback/stripe?action=S') }}",
                                                },
                                            }).then((response) => {

                                                // Check if error
                                                if (response.error) {
                                                    window.$wireui.notify({
                                                        title: "{{ __('messages.t_error') }}",
                                                        description: response.error.message,
                                                        icon: 'error'
                                                    });
                                                }

                                                document.getElementById("stripe-payment-button").disabled = false;

                                            }).catch((error) => {
                                                window.$wireui.notify({
                                                    title: "{{ __('messages.t_error') }}",
                                                    description: error.message,
                                                    icon: 'error'
                                                });

                                                document.getElementById("stripe-payment-button").disabled = false;
                                            });
                                        });
                                    </script>

                                </div>
                            @endif

                            {{-- Offline --}}
                            @if ($selected_method === 'offline' && $offline_method?->is_active)
                                <div class="w-full">

                                    {{-- Details --}}
                                    <div class="w-full mb-8 text-sm text-gray-500 tracking-wide font-normal">
                                        {!! $offline_method?->details !!}
                                    </div>

                                    {{-- Submit --}}
                                    <button wire:click="offline"
                                        wire:loading.class.remove="bg-primary-600 hover:bg-primary-700 text-white cursor-pointer"
                                        wire:loading.attr="disabled"
                                        class="w-full text-[13px] font-semibold flex justify-center bg-primary-600 hover:bg-primary-700 text-white py-4 px-8 rounded tracking-wide focus:outline-none focus:shadow-outline cursor-pointer disabled:!bg-gray-200 disabled:!text-gray-600 disabled:cursor-not-allowed dark:disabled:!bg-zinc-700 dark:disabled:!text-zinc-400">
                                        {{ __('messages.t_checkout') }}
                                    </button>

                                </div>
                            @endif

                        </div>
                    @endif
                </div>

                {{-- Project preview --}}
                <div
                    class="rounded-lg bg-white shadow-sm border-gray-200 border px-10 py-6 dark:bg-zinc-800 dark:border-transparent">

                    {{-- Title --}}
                    <a href="{{ url('project/' . $subscription->project->pid . '/' . $subscription->project->slug) }}"
                        target="_blank" class="block mb-4">
                        <h1
                            class="font-semibold text-base text-zinc-700 hover:underline hover:text-primary-600 transition-all duration-200 dark:text-white">
                            {{ $subscription->project->title }}</h1>
                    </a>

                    {{-- Details --}}
                    <dl class="flex-1 grid grid-cols-2 gap-x-6 text-sm sm:col-span-3 sm:grid-cols-3 lg:col-span-2">

                        {{-- Status --}}
                        <div>
                            <dt class="font-normal text-gray-500 dark:text-zinc-400 text-xs">@lang('messages.t_status')</dt>
                            <dd class="text-[13px] font-medium mt-1 text-amber-700 dark:text-amber-400">
                                @lang('messages.t_pending_payment')</dd>
                        </div>

                        {{-- Posted date --}}
                        <div class="hidden sm:block">
                            <dt class="font-normal text-gray-500 dark:text-zinc-400 text-xs">@lang('messages.t_posted_date')</dt>
                            <dd class="text-[13px] font-medium mt-1 text-gray-700 dark:text-zinc-200">
                                <span>{{ format_date($subscription->project->created_at, 'ago') }}</span>
                            </dd>
                        </div>

                        {{-- Budget --}}
                        <div>
                            <dt class="font-normal text-gray-500 dark:text-zinc-400 text-xs">@lang('messages.t_budget')</dt>
                            <dd class="mt-1 text-[13px] font-medium text-gray-700 dark:text-zinc-200">
                                @money($subscription->project->budget_min, settings('currency')->code, true)
                                <span class="text-gray-300 mx-1">/</span>
                                @money($subscription->project->budget_max, settings('currency')->code, true)
                            </dd>
                        </div>

                    </dl>

                    {{-- Description --}}
                    <div class="my-4 block leading-relaxed text-gray-500 dark:text-zinc-100 text-sm">
                        {{ add_3_dots($subscription->project->description, 100) }}
                    </div>

                    {{-- Skills --}}
                    <div class="mt-4 flex items-center space-x-2 rtl:space-x-reverse">
                        @foreach ($subscription->project->skills as $skill)
                            <div
                                class="bg-gray-100 hover:bg-primary-100 text-gray-600 hover:text-primary-600 text-xs font-medium ltr:mr-2 rtl:ml-2 ltr:first:mr-0 rtl:first:ml-0 px-2.5 py-1 rounded-sm dark:text-gray-400 border border-gray-300 hover:border-primary-600 transition-colors duration-200 dark:bg-zinc-700 dark:border-zinc-500 dark:hover:text-zinc-100">
                                {{ $skill->skill->name }}
                            </div>
                        @endforeach
                    </div>

                </div>

            </div>

        </div>

    </div>

</div>

{{-- @push('styles')

    @if (settings('paypal')->is_enabled)

        @php
            $paypal_client_id = config('paypal.mode') === 'sandbox' ? config('paypal.sandbox.client_id') : config('paypal.live.client_id');
            $currency         = config('paypal.currency');
        @endphp

        <script src="https://www.paypal.com/sdk/js?client-id={{ $paypal_client_id }}&currency={{ $currency }}"></script>

    @endif

@endpush --}}


@push('styles')

    {{-- PayPal SDK --}}
    @if (payment_gateway('paypal')?->is_active)
        <script
            src="https://www.paypal.com/sdk/js?client-id={{ payment_gateway('paypal')?->settings['client_id'] }}&currency={{ payment_gateway('paypal')?->currency }}">
        </script>
    @endif

    {{-- Mercadopago.js --}}
    @if (payment_gateway('mercadopago')?->is_active)
        <script src="https://sdk.mercadopago.com/js/v2"></script>
        <script>
            var mercadopago = new MercadoPago("{{ payment_gateway('mercadopago')?->settings['public_key'] }}");
        </script>
    @endif

    {{-- Flutterwave.js --}}
    @if (payment_gateway('flutterwave')?->is_active)
        <script src="https://checkout.flutterwave.com/v3.js"></script>
    @endif

    {{-- Razorpay.js --}}
    @if (payment_gateway('razorpay')?->is_active)
        <script src="https://checkout.razorpay.com/v1/checkout.js"></script>
    @endif

    {{-- Stripe.js --}}
    @if (payment_gateway('stripe')?->is_active)
        <script src="https://js.stripe.com/v3/"></script>
    @endif

    {{-- Paystack.js --}}
    @if (payment_gateway('paystack')?->is_active)
        <script src="https://js.paystack.co/v1/inline.js"></script>
    @endif

@endpush
