<div class="w-full bg-white shadow rounded-lg">

    <div class="divide-y divide-gray-200 dark:divide-zinc-700 lg:col-span-9">
        <div class="py-10 px-12">

            {{-- Section header --}}
            <div class="mb-14">
                <h2 class="text-sm leading-6 font-bold text-gray-900">{{ __('messages.t_auth_settings') }}</h2>
                <p class="mt-1 text-xs text-gray-500">{{ __('messages.t_auth_settings_subtitle') }}</p>
            </div>
            
            {{-- Section content --}}
            <div class="grid grid-cols-12 md:gap-x-8 gap-y-8 mb-6">


                {{-- Verification required --}}
                <div class="col-span-12">
                    <x-forms.checkbox
                        :label="__('messages.t_verification_required')"
                        model="verification_required" />
                </div>

                {{-- Verification type --}}
                <div class="col-span-12">
                    <div class="w-full" wire:ignore>
                        <x-forms.select2
                            :label="__('messages.t_verification_type')"
                            :placeholder="__('messages.t_choose_type_of_verification')"
                            model="verification_type"
                            :options="[ ['text' => __('messages.t_from_dashboard'), 'value' => 'admin'], ['text' => __('messages.t_by_email_address'), 'value' => 'email'] ]"
                            :isDefer="true"
                            :isAssociative="false"
                            :componentId="$this->id"
                            value="value"
                            text="text" />
                    </div>
                </div>

                {{-- Verification period --}}
                <div class="col-span-12 md:col-span-6">
                    <x-forms.text-input
                        :label="__('messages.t_verification_expiry_period')"
                        :placeholder="__('messages.t_verification_expiry_period_after_minutes')"
                        model="verification_expiry_period"
                        icon="alarm" />
                </div>

                {{-- Password reset expiry period --}}
                <div class="col-span-12 md:col-span-6">
                    <x-forms.text-input
                        :label="__('messages.t_password_reset_expiry_period')"
                        :placeholder="__('messages.t_password_expiry_period_after_minutes')"
                        model="password_reset_expiry_period"
                        icon="clock-time-four" />
                </div>

                {{-- Auth wallpaper --}}
                <div class="col-span-12">
                    <x-forms.file-input :label="__('messages.t_auth_screen_background_img')" model="auth_img_id" accept="image/jpg,image/jpeg,image/png"  />
                    {{-- Preview image --}}
                    @if (settings('auth')->wallpaper)
                        <div class="mt-3">
                            <img src="{{ src( settings('auth')->wallpaper ) }}" class="h-32 rounded-lg intense cursor-pointer object-cover">
                        </div>
                    @endif
                </div>

                

            </div>

        </div>

        {{-- Actions --}}
        <div class="py-4 px-4 flex justify-end sm:px-12 bg-gray-50 rounded-bl-lg rounded-br-lg">
            <x-forms.button action="update" text="{{ __('messages.t_update') }}" :block="false"  />
        </div>                    

    </div>

</div>    