<div class="js-cookie-consent cookie-consent fixed bottom-0 inset-x-0 z-50">
    <div class="max-w-7xl mx-auto px-6">
        <div class="p-4 md:p-2 rounded-lg bg-yellow-100" style="background-color: #f5a01c;">
            <div class="flex items-center justify-between flex-wrap" style="text-align: center;">
                <div style="display: flex; align-items: center; justify-content: center; gap: 10px; flex-wrap: wrap;">
                    <p class="cookie-consent__message" style="color: white; margin: 0;">
                        {!! trans('cookie-consent::texts.message') !!}
                    </p>
                
                    <button class="js-cookie-consent-agree cookie-consent__agree"
                        style="background-color: #19184d; color: white; border-radius: 5px; padding: 8px 16px; font-size: 14px; cursor: pointer; border: none;">
                        {{ trans('cookie-consent::texts.agree') }}
                    </button>
                </div>
                
            </div>
        </div>
    </div>
</div>

{{-- <div class="mt-2 flex-shrink-0 w-full sm:mt-0 sm:w-auto">
                    <button class="js-cookie-consent-agree cookie-consent__agree cursor-pointer flex items-center justify-center px-4 py-2 rounded-md text-sm font-medium text-yellow-800 bg-yellow-400 hover:bg-yellow-300">
                        {{ trans('cookie-consent::texts.agree') }}
                    </button>
                </div> --}}
