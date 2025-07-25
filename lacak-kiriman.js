document.addEventListener('DOMContentLoaded', function () {
    const trackingForm = document.getElementById('tracking-form');
    const initialState = document.getElementById('initial-state');
    const loadingState = document.getElementById('loading-state');
    const trackingErrorState = document.getElementById('tracking-error-state');
    const captchaErrorState = document.getElementById('captcha-error-state');
    const successState = document.getElementById('success-state');

    if (!trackingForm) return;

    trackingForm.addEventListener('submit', function (e) {
        e.preventDefault();

        // Reset semua tampilan
        initialState?.classList.add('hidden');
        trackingErrorState?.classList.add('hidden');
        captchaErrorState?.classList.add('hidden');
        successState?.classList.add('hidden');
        loadingState?.classList.remove('hidden');

        setTimeout(() => {
            loadingState?.classList.add('hidden');

            const trackingNumber = document.getElementById('tracking_number')?.value;
            const captchaValue = document.getElementById('captcha')?.value;
            const correctCaptcha = 'A7B4C';

            if (!captchaValue || captchaValue.toUpperCase() !== correctCaptcha) {
                captchaErrorState?.classList.remove('hidden');
                return;
            }

            if (trackingNumber !== '898812345678') {
                trackingErrorState?.classList.remove('hidden');
            } else {
                successState?.classList.remove('hidden');
                if (typeof lucide !== 'undefined') {
                    lucide.createIcons();
                }
            }
        }, 1500);
    });
});
