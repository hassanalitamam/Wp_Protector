(function($) {
    $(document).ready(function() {
        var settings = cppSettings;
        var currentPageId = settings.current_page_id;
        var currentPostId = settings.current_post_id;

        function isOptionEnabled(option) {
            if (option === 'disable_copy') {
                return settings.disable_copy_all ||
                    settings.disable_copy_pages.includes(currentPageId.toString()) ||
                    (currentPostId && settings.disable_copy_posts.includes(currentPostId.toString()));
            }
            if (option === 'disable_right_click') {
                return settings.disable_right_click_all ||
                    settings.disable_right_click_pages.includes(currentPageId.toString()) ||
                    (currentPostId && settings.disable_right_click_posts.includes(currentPostId.toString()));
            }
            if (option === 'disable_dev_tools') {
                return settings.disable_dev_tools_all ||
                    settings.disable_dev_tools_pages.includes(currentPageId.toString()) ||
                    (currentPostId && settings.disable_dev_tools_posts.includes(currentPostId.toString()));
            }
            return false;
        }

        if (isOptionEnabled('disable_copy')) {
            $('body').on('copy', function(e) {
                e.preventDefault();
                Swal.fire({
                    title: 'عذراً',
                    text: 'النسخ غير مسموح على هذه الصفحة أو المقالة.',
                    icon: 'warning',
                    confirmButtonText: 'موافق'
                });
            });
        }

        if (isOptionEnabled('disable_right_click')) {
            $(document).on('contextmenu', function(e) {
                e.preventDefault();
            });
        }

        if (isOptionEnabled('disable_dev_tools')) {
            $(document).keydown(function(e) {
                if (e.keyCode === 123 || // F12
                    (e.ctrlKey && e.shiftKey && (e.keyCode === 73 || e.keyCode === 74 || e.keyCode === 67)) || // Ctrl+Shift+I/J/C
                    (e.ctrlKey && e.keyCode === 85)) { // Ctrl+U
                    e.preventDefault();
                    Swal.fire({
                        title: 'عذراً',
                        text: 'استخدام أدوات المطور غير مسموح.',
                        icon: 'warning',
                        confirmButtonText: 'موافق'
                    });
                }
            });

            setInterval(function() {
                debugger;
            }, 100);
        }
    });
})(jQuery);