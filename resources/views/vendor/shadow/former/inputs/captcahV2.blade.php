@if ($cmp->isEnabled())
    <script src="https://www.google.com/recaptcha/api.js" async defer></script>
    <div class="g-recaptcha"
         data-sitekey="{{ $cmp->getSiteKey() }}"></div>
@endif
